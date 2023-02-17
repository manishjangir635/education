<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAuthController extends Controller
{
    //user signup
    public function signup_index(){
        return view('front.auth.signup');
    }
    public function login_index(){
        return view('front.auth.login');
    }

    public function forgot_password(){
        return view('front.auth.forgot_password');
    }
}
