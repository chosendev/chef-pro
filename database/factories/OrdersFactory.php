<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Order;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    return [
        //
        'food_combination'=>$faker->domainName,
        'price'=>$faker->boolean,
        'status'=>$faker->name,
        'date'=>$faker->dateTime,
    ];

});
