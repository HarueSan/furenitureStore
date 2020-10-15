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
Route::get('/deleteorder',function(){
    return view('order/delete_order');
});
//Delivery parts
Route::get('/deliveryhome',function(){
    return view('delivery/delivery_detail');
});
Route::get('/editdelivery',function(){
    return view('delivery/edit_delivery');
});
//Report parts
Route::get('/report',function(){
    return view('report/reporter');
});
