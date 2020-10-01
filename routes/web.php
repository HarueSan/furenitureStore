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

Route::get('/', function () {
    return view('customer/home_customer');
});
Route::get('/cuslogin', function () {
    return view('customer/login_user');
});
Route::get('/detailpd', function () {
    return view('customer/detail_product');
});
Route::get('/detailpd_sellman', function () {
    return view('sellman/detailproduct_sellman');
});
Route::get('/register', function () {
    return view('customer/register_customer');
});
Route::get('/cusinformation', function () {
    return view('customer/customer_information');
});
