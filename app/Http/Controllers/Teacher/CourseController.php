<?php
namespace App\Http\Controllers\Teacher;
use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Section;
use App\Models\CourseFor;
use App\Models\CourseRequirments;
use App\Models\StudentLearn;
use App\Models\Lecture;
use Illuminate\Http\Request;
use Auth;
use Vimeo\Laravel\Facades\Vimeo;

class CourseController extends Controller
{

    public function create(Request $request){

        if ($request->isMethod('post')) {

             
          $validated = $request->validate([
            'title'   => 'required',
            'category'  =>	'required',
          ]);

            $data=$request->all();
            extract($data);
            $course=new Course();
            $course->title=$title;
            $course->category=$category;
            $course->image='default.jpg';
            $course->user_id=Auth::id();
            $course->save();

            return redirect('teacher/dashboard');

        }else{

            $categories=$this->get_categories();
            return view('teacher/course/create',compact('categories'));
        }

    }

    public function edit(Request $request , $type, $id){



        $course_detail=Course::with(['section_list','course_for','course_requirments','student_learn'])->find($id);


        if ($request->isMethod('post')) {

          
          $validated = $request->validate([
            'title'   => 'required',
            'subtitle'  =>	'required',
            'description'   => 'required',
          ]);


            $data=$request->all();
            extract($data);

            if ($request->file())
            {
              $file = $request->file('image');
              if ($file)
              {
                if(file_exists(public_path() .'public/teacher/image/'.$course_detail->image))
                {
                    @unlink(public_path() .'public/teacher/image/'.$course_detail->image);
                }
                $destinationPath = 'public/teacher/image/';
                $extension = $request->file('image')->getClientOriginalExtension();
                $filename = rand(11111, 99999) . '.' . $extension;
                $file->move($destinationPath, $filename);
                $course_detail->image=$filename;
              }
            }

            if ($request->file())
            {
              $file = $request->file('preview_video');
              if ($file)
              {
                if(file_exists(public_path() .'public/teacher/image/'.$course_detail->preview_video))
                {
                    @unlink(public_path() .'public/teacher/image/'.$course_detail->preview_video);
                }
                $destinationPath = 'public/teacher/image/';
                $extension = $request->file('preview_video')->getClientOriginalExtension();
                $filename = rand(11111, 99999) . '.' . $extension;
                $file->move($destinationPath, $filename);
                $course_detail->preview_video=$filename;
              }
            }

            $course_detail->title=$title;
            $course_detail->subtitle=$subtitle;
            $course_detail->description=$description;
            $course_detail->save();


           
            if(isset($course_for) && count($course_for)){

              CourseFor::where('course_id',$course_detail->id)->delete();

              foreach($course_for as $val){

                $CourseFor = new CourseFor();
                $CourseFor->course_id=$course_detail->id;
                $CourseFor->title=$val;
                $CourseFor->save();

              }

            }

            if(isset($course_requirment) && count($course_requirment)){

              CourseRequirments::where('course_id',$course_detail->id)->delete();

              foreach($course_requirment as $val){

                $CourseRequirments = new CourseRequirments();
                $CourseRequirments->course_id=$course_detail->id;
                $CourseRequirments->title=$val;
                $CourseRequirments->save();

              }

            }

            if(isset($student_learn) && count($student_learn)){

              StudentLearn::where('course_id',$course_detail->id)->delete();

              foreach($student_learn as $val){

                $StudentLearn = new StudentLearn();
                $StudentLearn->course_id=$course_detail->id;
                $StudentLearn->title=$val;
                $StudentLearn->save();

              }

            }

            return redirect()->back()->with('success','All changes saved');
        }else{
          return view('teacher/course/'.$type.'_edit',compact('course_detail'));
        }


    }



    public function update_course_price(Request $request,$course_id){

      $validated = $request->validate([
        'price'   => 'required',
      ]);

      $data=$request->all();
      extract($data);

      $course= Course::find($course_id);
      $course->price=$price;
      $course->save();

      return redirect()->back()->with('success','All changes saved');;
    }



    public function create_section(Request $request,$course_id){

    
        $data=$request->all();
        extract($data);

        $section=new Section();
        $section->course_id=$course_id;
        $section->title=$title;
        $section->save();

        return redirect()->back()->with('success','All changes saved');

    }


    public function create_lecture(Request $request,$section_id,$course_id){

     
        $data=$request->all();
        extract($data);

        $Lecture=new Lecture();

        if ($request->file()) 
        {
          $file = $request->file('video');                   
          if ($file)
          {  
            $uri = Vimeo::upload($file,[
              'name' =>  $title,
              'description' => 'No Description'
            ]);

            $video_id=explode('videos/', $uri)[1];
            $Lecture->video=$video_id;
           

          }
        }

        $Lecture->section_id=$section_id;
        $Lecture->user_id=Auth::id();
        $Lecture->course_id=$course_id;
        $Lecture->title=$title;
        $Lecture->save();

        echo 'success';

    }

}
