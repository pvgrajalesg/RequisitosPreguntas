<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Validator;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Certification;
use App\ModelProject;
use Auth;
use App\User;
use Input;
class CertificationController extends Controller
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
        $companies = Certification::all();
        return view('admin/certification/list', ['user' => Auth::user(), 'companies' => $companies] );
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request){
        $project_managers = ModelProject::select(['*'])->whereNotIn('id', Certification::select("project_manager_id")->get())->get();
        $res= [];
        foreach ($project_managers as $project_manager) {
            $res[$project_manager->id] = $project_manager->user->account;
        }
        return view('admin/certification/register', ['user' => Auth::user(), 'project_managers' => $res] );
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
        $project_manager = ModelProject::select(['*'])->whereNotIn('id', Certification::select("project_manager_id")->get())->where("id", $data["project_manager"])->get();
        if ($validator->fails() || count($project_manager)==0)
            return redirect('/companies/register/')->withInput()->withErrors($validator);
        $company = Certification::create([
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
        $company = Certification::find(intval($id));
        if(isset($company)){
            return view('admin/certification/get', ['user' => Auth::user(), 'company' => $company] );
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
        $company = Certification::find(intval($id));
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
