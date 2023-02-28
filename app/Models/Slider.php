<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $table='sliders';


    public function getImageAttribute($value)
    {
        if ($value) {
            return url('/').'/public/image/'.$value;
        } else {
            return url('/').'/public/image/default.png';
        }
    }


}
