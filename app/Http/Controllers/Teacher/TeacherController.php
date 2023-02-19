<?php
namespace App\Http\Controllers\Teacher;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function payment(){

        return view('teacher.payment');
    }

    public function revenue_report(){

        return view('teacher.revenue-report');
    }

    public function students(){

        return view('teacher.students');
    }

    public function messages(){

        return view('teacher.messages');
    }

    public function reviews(){

        return view('teacher.reviews');
    }
}
