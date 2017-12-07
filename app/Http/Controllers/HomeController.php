<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Status;
use App\User;
use App\Application;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user=auth()->user();
        if($user->role_id == 1){
            $applications=Application::where(['user_id' => $user->id])->get();
        }elseif($user->role_id == 2 ){
            $applications= Application::where(['status_id' => 1])->get();
        }else{
            $applications=Application::where(['status_id' => 2])->get();
        }
        return view('home')->with(['user'=>$user,'applications'=>$applications]);
    }
}
