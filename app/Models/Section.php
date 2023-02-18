<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Lecture;

class Section extends Model
{   
    
    protected $table='sections';

    public $timestamps = false;

    public function lecture_list()
    {
        return $this->hasMany(Lecture::class);
    }

}
