<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use Validator;
use App\ProjectManager;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getHome()
    {
        if (Auth::check()) {
            $user = Auth::user();
            if(count(ProjectManager::where("user_id",$user->id)->get())>0)
                return view('projectmanager/home', ['user' => $user]);
            elseif($user->account == "cmzapataj")
                return view('admin/home', ['user' => $user]);
        }else
            return redirect('auth/login');
        //
    }
    public function getAccount()
    {
        if (Auth::check()) {
            $user = Auth::user();
            return view('user/account', ['user' => $user]);
        }else
            return redirect('auth/login');
        //
    }
    public function updateAccount(Request $request)
    {
        if (Auth::check()) {
            $user = Auth::user();
            $data = $request->all();
            $validator =  Validator::make($data, [
                'name' => 'required',
                'password' => 'required|confirmed',
                'email' => 'required|unique:users|email'
            ]);
            if ($validator->fails())
                return redirect('/my-account/')->withInput()->withErrors($validator);
            $user->name = $data['name'];
            $user->name = bcrypt($data['password']);
            $user->name = $data['email'];
            $user->save();
            return redirect('/my-account/');
        }else
            return redirect('auth/login');
        //
    }
}
