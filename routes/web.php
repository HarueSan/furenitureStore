<?php

use Illuminate\Support\Facades\Route;

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

//customer
Route::get('/', function () {
    return view('customer/home_customer');
});

Route::get('/login', function () {
    return view('customer/login_user');
});

Route::get('/register', function () {
    return view('customer/register_customer');
});

Route::get('/order', function () {
    return view('customer/order/order');
});
Route::get('/cfdelete', function () {
    return view('customer/order/confirm_delete');
});



//sellman

