<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{   
    
    protected $table='lectures';
    public $timestamps = false;

 
    public function user_data()
    {
        return $this->hasOne(User::class,'id','user_id');
    }

    public function course_data()
    {
        return $this->hasOne(Course::class,'id','course_id');
    }

    
    

  

}
