<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Cmspage;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $course_list=Course::take(12)->get();

        $top_course_list=Course::take(12)->get();

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

    public function course(){

        return view('student.course');
    }

    public function courses_detail(){
        return view('student.courses-detail');
    }

    public function teacher_detail(){
        return view('student.teacher-detail');
    }

    public function terms(){
        $record=Cmspage::where('slug','terms')->first();
        return view('cms.terms',compact('record'));
    }
    public function privacy_policy(){
        $record=Cmspage::where('slug','privacy-policy')->first();
        return view('cms.privacy-policy',compact('record'));
    }
    public function faqs(){
        return view('cms.faqs');
    }

    public function about_us(){
        return view('cms.about-us');
    }


}
