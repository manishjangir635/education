<?php
namespace App\Http\Controllers\Teacher;
use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $course_list=Course::where('user_id',Auth::id())->get();
        return view('teacher/index',compact('course_list'));
    }

    public function become_teacher(Request $request){

 
        $user=User::find(Auth::id());
        $user->is_teacher=1;
        $user->save();

        return redirect('teacher/dashboard');

    }
  
}
