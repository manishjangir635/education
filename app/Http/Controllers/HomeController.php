<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('index');
    }
    public function my_cart(){

        return view('student.my-cart');
    }
    public function my_learning(){

        return view('student.my-learning');
    }

    public function shopping_cart(){

        return view('student.shopping-cart');
    }
    public function account(){

        return view('student.account');
    }

    public function messages(){

        return view('student.messages');
    }

    public function purchase_history(){
        return view('student.purchase-history');
    }

    public function my_redemption_coupons(){

        return view('student.my-redemption-coupons');
    }

    public function refer_and_earn(){

        return view('student.refer-and-earn');
    }

    public function course_play(){

        return view('student.course-play');
    }

    public function course(){

        return view('student.course');
    }

    public function courses_detail(){
        return view('student.courses-detail');
    }

    public function teacher_detail(){
        return view('student.teacher-detail');
    }


}
