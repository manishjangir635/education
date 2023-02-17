<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CmsController extends Controller
{
    public function terms(){
        return view('front.cms.terms');
    }
    public function privacy_policy(){
        return view('front.cms.privacy-policy');
    }
    public function faqs(){
        return view('front.cms.faqs');
    }
}
