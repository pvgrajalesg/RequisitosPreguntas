<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Validator;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Company;
use App\ProjectManager;
use Auth;
use App\User;
use Input;
class CompanyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('mustbeadministrator');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $companies = Company::all();
        return view('admin/company/list', ['user' => Auth::user(), 'companies' => $companies] );
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request){
        $project_managers = ProjectManager::select(['*'])->whereNotIn('id', Company::select("project_manager_id")->get())->get();
        $res= [];
        foreach ($project_managers as $project_manager) {
            $res[$project_manager->id] = $project_manager->user->account;
        }
        return view('admin/company/register', ['user' => Auth::user(), 'project_managers' => $res] );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $data = $request->all();
        $validator =  Validator::make($data, [
            'name' => 'required|unique:companies',
            'project_manager' => 'required|numeric',
        ]);
        $project_manager = ProjectManager::select(['*'])->whereNotIn('id', Company::select("project_manager_id")->get())->where("id", $data["project_manager"])->get();
        if ($validator->fails() || count($project_manager)==0)
            return redirect('/companies/register/')->withInput()->withErrors($validator);
        $company = Company::create([
            'name' => $data['name'],
            'project_manager_id' => $data['project_manager'],
        ]);
        return redirect('/companies/');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $company = Company::find(intval($id));
        if(isset($company)){
            return view('admin/company/get', ['user' => Auth::user(), 'company' => $company] );
        }
        return redirect('/project-managers/');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $company = Company::find(intval($id));
        if(isset($company)){
            $data = $request->all();
            $validator =  Validator::make($data, [
                'name' => 'required|unique:companies',
            ]);
            if ($validator->fails())
                return redirect('/companies/update/'.$company->id.'/')->withInput()->withErrors($validator);
            $company->name = $data['name'];
            $company->save();
            return redirect('/companies/');
        }
        return redirect('/companies/');

    }
}
