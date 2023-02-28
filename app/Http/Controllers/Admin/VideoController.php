<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Lecture;
use Hash,Session;
use Vimeo\Laravel\Facades\Vimeo;

class VideoController extends Controller
{
    public function index(){
   
        $videos=Lecture::with(['user_data','course_data'])->where('status',0)->orderBy('id', 'desc')->paginate(config('global.pagination_records'));
        return view('admin/video/index',compact('videos'));
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
