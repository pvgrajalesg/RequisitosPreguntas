<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Validator;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\ProjectManager;
use Auth;
use App\User;
use Input;
class ProjectManagerController extends Controller
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
        $project_managers = ProjectManager::all();
        return view('admin/projectmanager/list', ['user' => Auth::user(), 'project_managers' => $project_managers] );
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request){
        return view('admin/projectmanager/register', ['user' => Auth::user()] );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $data = $request->all();
 
            return redirect('admin/projectmanager/register');
    }


}

