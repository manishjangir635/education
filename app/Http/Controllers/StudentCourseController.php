<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class StudentCourseController extends Controller
{
    public function course(){
        return view('student/course');
    }

    public function courses_detail(Request $request,$id){
        $course_detail=Course::with(['user'])->find($id); 
        return view('student/courses-detail',compact('course_detail'));
    }


}
