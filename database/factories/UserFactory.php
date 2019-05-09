<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use App\staff;
use App\StaffType;
use App\item;
use App\vendor;
use App\store;
use App\UsedItem;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});

$factory->define(StaffType::class, function(Faker $faker) {

	return[
		
		'type' => $faker->randomElement(['Waiter','Cheff','Waitress','Cashier','Manager']),
	];
});

$factory->define(staff::class, function(Faker $faker) {

	return [
		
		'staff_type_id' => 1,
		'first_name' => $faker->name,
		'last_name' => $faker->name,
		'phone_number' => $faker->randomNumber,
		'address' => $faker->name,
		'next_of_kin_name' => $faker->name,
		'next_of_kin_phone_number' => $faker->randomNumber,
	];
});

$factory->define(item::class, function(Faker $faker) {

	return [
		'name' => $faker->name,
	];
});

$factory->define(vendor::class, function(Faker $faker) {

	return [
		'name' => $faker->name,
		'phone_number' => $faker->randomNumber,
		'item_id' => 1,
		'location' => $faker->name,
	];
});

$factory->define(store::class, function(Faker $faker) {

	return [
		'item_id' => 1,
		'quantity_stocked' => $faker->randomNumber,
		'status' => $faker->name,
		'vendor_id'=>1,
		'date' => date('Y-m-d'),
	];
});

$factory->define(UsedItem::class, function(Faker $faker) {

	return [
		'quantity' => $faker->randomNumber,
		'staff_id'=> 1,
		'date' => date('Y-m-d'),
	];
});