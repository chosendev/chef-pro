<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\staff;
use Faker\Generator as Faker;

$factory->define(staff::class, function (Faker $faker) {
    return [
        'first_name'=>$faker->firstName,
        'last_name'=>$faker->lastName,
        'phone_number'=>$faker->phoneNumber,
        'address'=>$faker->address,
        'next_of_kin_phone_number'=>$faker->phoneNumber,
        'next_of_kin_name'=>$faker->name,


    ];
});
