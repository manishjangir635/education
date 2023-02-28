<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $table='testimonials';


    public function getImageAttribute($value)
    {
        if ($value) {
            return url('/').'/public/testimonial/image/'.$value;
        } else {
            return url('/').'/public/testimonial/default.png';
        }
    }


}
