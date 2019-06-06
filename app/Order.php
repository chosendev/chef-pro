<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    //
    protected $fillable =
        [
            'food_combination',
            'price',
            'status',
            'date',
        ];
}
