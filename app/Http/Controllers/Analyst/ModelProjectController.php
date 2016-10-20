<?php

namespace App\Http\Controllers\Analyst;

use Illuminate\Http\Request;
use Validator;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\ModelProject;
use Auth;
use App\User;
use Input;
class ModelProjectController extends Controller
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
        $project_managers = ModelProject::all();
        return view('analyst/modelproject/list', ['user' => Auth::user(), 'project_managers' => $project_managers] );
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request){
        return view('analyst/modelproject/register', ['user' => Auth::user()] );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        
        return view('analyst/modelproject/get', ['user' => Auth::user()] );


    }


}

