<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\Testimonial;
use App\Models\Course;
use App\Models\User;
use App\Models\Slider;
use App\Models\Cmspage;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $course_list=Course::with(['user'])->take(12)->get();

        $top_course_list=Course::with(['user'])->take(12)->get();

        $sliders= Slider::take(10)->get();

        $teachers=User::where('is_teacher',1)->where('user_role_id',2)->take(10)->get();

        return view('index',compact('course_list','top_course_list','sliders','teachers'));
    }
    public function my_cart(){

        return view('student.my-cart');
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

  
  

    public function teacher_detail(){
        return view('student/teacher-detail');
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
        $about_us_data=AboutUs::where('slug','about-us')->first();
        
        $testimonials=Testimonial::get();

        return view('cms/about-us',compact('about_us_data','testimonials'));
    }


}
