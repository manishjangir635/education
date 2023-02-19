<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Section;
use App\Models\User;

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


}
