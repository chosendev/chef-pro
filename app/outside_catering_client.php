<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class outside_catering_client extends Model
{
    //
    protected $fillable = [
        'client_name',
        'cost',
        'date',
        'address',
        'package_id'
    ];
}
