<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Lecture;

class StudentLearn extends Model
{       
    protected $table='student_learn_in_course';

    public $timestamps = false;

}
