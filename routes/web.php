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
<<<<<<< HEAD

Route::get('/', function () {
    return view('home');
=======
Route::get('/', function () {
    return view('partials.master');
>>>>>>> home
});

Route::resource('/dashboard', 'DashboardController');
Route::resource('/item', 'ItemController');
Route::resource('/kitchen','KitchenController');
Route::resource('/menus','MenuController');
Route::resource('/orders','OrderController');
Route::resource('/staff','StaffController');
Route::resource('/vendor','VendorController');
Route::resource('/point_of_sale','PointOfSaleController');
Route::resource('/staff_type','StaffTypeController');
Route::resource('/expenses','ExpenseController');
Route::resource('/outside catering-clients','OutsideCateringClientController');
Route::resource('/store','StoreController');
Route::resource('/used_item','UsedItemController');


// Route::get('/used_item', 'UsedItemController@index');
// Route::get('/used_item/create', 'UsedItemController@create');
