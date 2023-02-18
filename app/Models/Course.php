<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Section;

class Course extends Model
{   
    
    protected $table='courses';

    public function section_list()
    {
        return $this->hasMany(Section::class)->with('lecture_list');
    }


}
