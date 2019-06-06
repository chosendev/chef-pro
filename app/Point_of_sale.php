<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Point_of_sale extends Model
{
    //
    protected $table ='Point_of_sales';
    protected $fillable =
        [
            'date',
            'name',
            'order_id',
            'staff_id'
        ];
}
