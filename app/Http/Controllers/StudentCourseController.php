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

        $course_detail=Course::with(['user','course_for','course_requirments','student_learn','student_section_list'])->find($course_id); 
        return view('student/course-play',compact('course_detail'));
      
    }


    public function start_lecture(Request $request){

        $lecture_id= $request->lecture_id;

        $lecture=Lecture::where('course_id',$request->course_id)->where('id',$request->lecture_id)->where('status',1)->first();

        $lecture_data = Lecture::where('course_id',$request->course_id)->where('status',1)->orderBy('section_id','asc')->get();
       
        $next_record_index=0;
        $prev_record_index=0;

        $first_index=0;
        $last_index=count($lecture_data)-1;

        foreach($lecture_data as $key=>$lecture){
            if($lecture->id == $lecture_id){
                if($key==$first_index){
                    $next_record_index=$key+1; 
                }
                elseif($key==$last_index){
                    $next_record_index=$key;
                    $prev_record_index=$key-1;
                }
                else{
                    $next_record_index=$key+1;
                    $prev_record_index=$key-1;
                }
                break;
            }
        }


        $nextId=0;
        $prevId=0;
        if(isset($lecture_data[$next_record_index])){
            $nextId= $lecture_data[$next_record_index]->id;
        }

        if(isset($lecture_data[$prev_record_index])){
            $prevId= $lecture_data[$prev_record_index]->id;
        }


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
