<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class outside_catering_package extends Model
{
    //

     protected $fillable =
         [
             'food_combination',
             'price',
             'status',
         ];
}
