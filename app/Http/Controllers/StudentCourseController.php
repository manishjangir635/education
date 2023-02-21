<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Category;
use App\Models\User;

class StudentCourseController extends Controller
{
    public function course(Request $request){

        $course_list=Course::with(['user'])->paginate(1, ['*'], 'page', null, ['view' => 'custom_pagination']);

        $category_list=Category::get();

        $user_list=User::get();

        return view('student/course',compact('course_list','category_list','user_list'));
    }

    public function courses_detail(Request $request,$id){
        $course_detail=Course::with(['user','course_for','course_requirments','student_learn','section_list'])->find($id); 
        return view('student/courses-detail',compact('course_detail'));
    }


    

}
