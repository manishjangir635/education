<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Lecture;

class Section extends Model
{   
    
    protected $table='sections';

    public $timestamps = false;

    protected $appends = ['total_duration'];

    public function getTotalDurationAttribute()
    {
        return  Lecture::where('section_id', $this->id)->sum('duration');
    }


    public function lecture_list()
    {
        return $this->hasMany(Lecture::class);
    }


    public static function boot() {
        parent::boot();
        self::deleting(function($section) { 
             $section->lecture_list()->each(function($lecture) {
                $lecture->delete(); 
             });
        });
    }

}
