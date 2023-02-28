<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Lecture;
use App\Models\Section;

use App\Models\Category;
use App\Models\User;
use Auth;

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

    public function my_learning(){

        $course_list=Course::get();

        return view('student/my-learning',compact('course_list'));
    }


    public function course_play(Request $request , $course_id){

        $course_detail=Course::with(['user','course_for','course_requirments','student_learn','section_list'])->find($course_id); 
        return view('student/course-play',compact('course_detail'));
      
    }


    public function start_lecture(Request $request){
        $lecture=Lecture::where('id',$request->lecture_id)->where('status',1)->first();

        $nextId = Lecture::where('id', '>', $request->lecture_id)->min('id');
        $prevId = Lecture::where('id', '<', $request->lecture_id)->max('id');

        return view('student/start_course_ajax',compact('lecture','nextId','prevId'));
      
    }


    public function delete_lecture(Request $request,$lecture_id){
        $lecture=Lecture::find($lecture_id);
        $lecture->delete();
        return redirect()->back()->with('success','Lecture deleted Successfully');
      
    }


    public function delete_section(Request $request,$section_id){
        $section=Section::find($section_id);
        $section->delete();
        return redirect()->back()->with('success','Section deleted Successfully');
      
    }




    

}
