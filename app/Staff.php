<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    //
    protected $fillable =
        [
//           'staff_type_id',
            'first_name',
            'last_name',
            'phone_number',
            'address',
            'next_of_kin_name',
            'next_of_kin_phone_number'
        ];
}
