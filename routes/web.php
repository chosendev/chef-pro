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
    return view('partials.master');
});

Route::resource('/dashboard', 'DashboardController');
Route::resource('/items', 'ItemController');
Route::resource('/kitchen','KitchenController');
Route::resource('/menus','MenuController');
Route::resource('/orders','OrderController');
Route::resource('/staffs','StaffController');
Route::resource('/vendor','VendorController');
Route::resource('/point_of_sales','PointOfSaleController');
Route::resource('/staff_type','StaffTypeController');
Route::resource('/expenses','ExpenseController');
Route::resource('/outside_catering_clients','OutsideCateringClientController');
Route::resource('/outside_catering_packages','OutsideCateringPackageController');
Route::resource('/store','StoreController');
