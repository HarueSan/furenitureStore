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
Route::get('/furniture', function () {
    return view('furniture/furniture');
});
Route::get('/addfurniture', function () {
    return view('furniture/add_furniture');
});
Route::get('/editfurniture', function () {
    return view('furniture/edit_furniture');
});
Route::get('/deletefurniture', function () {
    return view('furniture/delete_furniture');
});
//Customer

Route::get('/customer', function () {
    return view('customer/customer');
});
Route::get('/addcustomer', function () {
    return view('customer/add_customer');
});
Route::get('/editcustomer', function () {
    return view('customer/edit_customer');
});
Route::get('/deletecustomer', function () {
    return view('customer/delete_customer');
});
Route::get('/customerinfo', function(){
    return view('customer/customer_information');
});

//Order or Bill
Route::get('/order', function () {
    //$x = DB::select('select * from bill');
    return view('order/order');
    //return $x;
});

//Order or Bill
Route::get('/order', function () {
    return view('order/order');
});

Route::get('/addorder',function(){
    return view('order/add_order');
});
Route::get('/deleteorder',function(){
    return view('order/delete_order');
});
//delivery
Route::get('/editdelivery',function(){
    return view('delivery/edit_delivery');
});
//Report parts
Route::get('/report',function(){
    return view('report/reporter');
});

