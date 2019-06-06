<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kitchen extends Model
{
    //
    protected $table = 'kitchen';
    protected $fillable =
        [
            'order_id',
            'staff_id',
            'order_status',
            'date',
            ];
}
