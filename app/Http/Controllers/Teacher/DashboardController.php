<?php
namespace App\Http\Controllers\Teacher;
use App\Http\Controllers\Controller;
use App\Models\Course;
use Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $course_list=Course::where('user_id',$this->login_user_id)->get();
        return view('teacher/index',compact('course_list'));
    }
  
}
