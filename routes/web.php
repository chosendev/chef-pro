<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::resource('/dashboard', 'DashboardController');
Route::resource('/item', 'ItemController');
Route::resource('/kitchen','KitchenController');
Route::resource('/menus','MenuController');
Route::resource('/orders','OrderController');
Route::resource('/staff','StaffController');
