<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class expense extends Model
{
    //
    protected $fillable =
    [
    	'name',
    	'cost',
    	'receipt',
    	'date',
    ];
}
