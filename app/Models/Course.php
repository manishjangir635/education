<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Section;
use App\Models\User;
use App\Models\CourseFor;
use App\Models\CourseRequirments;
use App\Models\studentLearn;

class Course extends Model
{   
    
    protected $table='courses';

    public function section_list()
    {
        return $this->hasMany(Section::class)->with('lecture_list');
    }

    public function user()
    {
        return $this->belongsTo(User::class)->select('id','name');
    }


    public function course_for()
    {
        return $this->hasMany(CourseFor::class);
    }

    public function course_requirments()
    {
        return $this->hasMany(CourseRequirments::class);
    }

    public function student_learn()
    {
        return $this->hasMany(studentLearn::class);
    }

}
