<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class HomeController extends Controller
{
    public function index(){

        $course_list=Course::with(['user'])->take(12)->get();

        $top_course_list=Course::with(['user'])->take(12)->get();

        return view('index',compact('course_list','top_course_list'));
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

  

    public function teacher_detail(){
        return view('student.teacher-detail');
    }


}
