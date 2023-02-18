<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAuthController extends Controller
{
    //user signup
    public function register(){
        return view('student/auth/signup');
    }
    public function login(){
        return view('student/auth/login');
    }

    public function forgot_password(){
        return view('student/auth/forgot_password');
    }
}
