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

/*-----------------------------****************-----------------------------*/

//Order or Bill
use App\Http\Controllers\Order\OrderController;

Route::get('/order',[OrderController::class,'index']); //'index' is functionname in Controllers\Order\OrderController
Route::get('/addorder', [OrderController::class,'showAddorderPage']);
Route::get('/editorder/{id}',[OrderController::class,'showEditorderPage']);

Route::get('/deleteorder/{id}',[OrderController::class,'deletePage']);

Route::post('/addHeadbill',[OrderController::class,'addHeadbill']);
Route::post('/addFurnitureToOrder/{id}',[OrderController::class,'addFurnitureToOrder']);
Route::post('/deleteorder/{id}',[OrderController::class,'postDelete']);
Route::post('/deleteBillDetail/{id}',[OrderController::class,'deleteOrderFromBillDetail']);
Route::post('/confrimToPay/{id}',[OrderController::class,'confirmPayment']);
Route::post('/cancelOrder/{id}',[OrderController::class,'cancelBill']);


/*-----------------------------****************-----------------------------*/
// ใช้ get เพื่อดึงข้อมูลจาก database ไปแสดงผลบนหน้าเว็บ
// ใช้ post เพื่อเพิ่มข้อมูลลงใน database หรือแก้ไขข้อมูล
/*-----------------------------****************-----------------------------*/



//delivery
Route::get('/editdelivery',function(){
    return view('delivery/edit_delivery');
});
//Report parts
Route::get('/report',function(){
    return view('report/reporter');
});

