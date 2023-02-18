<?php
namespace App\Http\Controllers\Teacher;
use App\Http\Controllers\Controller;
use App\Models\Course;
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

    public function edit(Request $request , $id){
       
        $course_detail=Course::find($id);
        if ($request->isMethod('post')) {
            
            $data=$request->all();
            extract($data);      
            $course_detail->title=$title;
            $course_detail->save();
        }else{
            return view('teacher/course/edit',compact('course_detail'));
        }
       
        
    }
  
}
