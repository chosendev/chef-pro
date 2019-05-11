<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class point_of_sale extends Model
{
    //
    protected $fillable =
        [
            'date',
            'name',
            'order_id',
            'staff_id'
        ];
}
