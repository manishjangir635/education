<?php
namespace App\Http\Controllers\Teacher;
use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Section;
use App\Models\Lecture;
use Illuminate\Http\Request;
use Auth;

class CourseController extends Controller
{
    
    public function create(Request $request){

        if ($request->isMethod('post')) {
            
            $data=$request->all();
            extract($data);
            $course=new Course();    
            $course->title=$title;
            $course->category=$category;
            $course->user_id=$this->login_user_id;
            $course->save();
            return redirect('teacher/dashboard');

        }else{

            $categories=$this->get_categories();
            return view('teacher/course/create',compact('categories'));
        }
       
    }

    public function edit(Request $request , $type, $id){
       
        $course_detail=Course::with(['section_list'])->find($id);
        if ($request->isMethod('post')) {
            
            $data=$request->all();
            extract($data);      
            $course_detail->title=$title;
            $course_detail->save();
        }else{

            return view('teacher/course/'.$type.'_edit',compact('course_detail'));
        }
       
        
    }



    public function create_section(Request $request,$course_id){

        $data=$request->all();
        extract($data);  
        
        $section=new Section();
        $section->course_id=$course_id;
        $section->title=$title;
        $section->save();

        return redirect()->back();

    }


    public function create_lecture(Request $request,$section_id){

        $data=$request->all();
        extract($data);  
        
        $Lecture=new Lecture();
        $Lecture->section_id=$section_id;
        $Lecture->title=$title;
        $Lecture->save();

        return redirect()->back();

    }
  
}
