<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WebController extends Controller
{
    public function admin(){
        if(Auth::user()->user_type == "admin"){
            return view('admin.dashboard');
        }
    }
}
