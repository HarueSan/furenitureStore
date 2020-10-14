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

//Furniture
//Customer
//Order or Bill
Route::get('/order', function () {
    return view('order/order');
});
Route::get('/addorder',function(){
    return view('order/add_order');
});
Route::get('/detailpd', function () {
    return view('customer/detail_product');
});
Route::get('/register', function () {
    return view('customer/register_customer');
});
Route::get('/cusinformation', function () {
    return view('customer/customer_information');
});
Route::get('/order', function () {
    return view('customer/order/order');
});
Route::get('/editdelivery',function(){
    return view('delivery/edit_delivery');
});
//Report parts
Route::get('/report',function(){
    return view('report/reporter');
});

//sellman
Route::get('/detailpd_sellman', function () {
    return view('sellman/detailproduct_sellman');
});
