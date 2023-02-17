<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CmsController extends Controller
{
    public function terms(){
        return view('terms');
    }
    public function privacy_policy(){
        return view('privacy-policy');
    }
    public function faqs(){
        return view('faqs');
    }
}
