<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Lecture;
use App\Models\User;
use Hash,Session;
use Vimeo\Laravel\Facades\Vimeo;

class VideoController extends Controller
{
    public function index(Request $request){
   

        $data=$request->all();
        extract($data);
        $author_list= User::where('user_role_id',2)->where('is_active',1)->where('is_teacher',1)->get();
        $videos=Lecture::with(['user_data','course_data']);
        if(isset($name)){
            $videos=$videos->where('title', 'like', '%' .$name. '%');
        }

        if(isset($author_id)){
            $videos=$videos->where('user_id',$author_id);
        }

        $videos=$videos->orderBy('id', 'desc')->paginate(100);
        return view('admin/video/index',compact('videos','author_list'));
    }

 
    public function edit($id)
    {
        $video = Lecture::find($id);
        return view('admin/video/edit',compact('video'));
    }

    public function approve(Request $request,$id)
    {
       

        $video = Lecture::find($id);
        $response = Vimeo::request('/videos/'.$video->video);
        $video->duration=  $response['body']['duration'];
        $video->status = 1;
        $update = $video->save();
        if($update){
		    Session::flash('success', 'Video approved');
            return redirect('admin/video/index');
        }else{
            Session::flash('error', 'Something went wrong.');
			return redirect()->back()->withInput();
        }
    }


     public function reject(Request $request,$id)
    {
        $video = Lecture::find($id);
        $video->status = 2;
        $update = $video->save();
        if($update){
		    Session::flash('success', 'video rejected');
            return redirect('admin/video/index');
        }else{
            Session::flash('error', 'Something went wrong.');
			return redirect()->back()->withInput();
        }
    }
    


}
