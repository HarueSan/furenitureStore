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
use App\Http\Controllers\Furniture\FurnitureController;

Route::get('/furniture',[FurnitureController::class,'index']);

Route::get('/deletefurniture/{id}',[FurnitureController::class,'deletePage']);
Route::post('/deletefurniture/{id}',[FurnitureController::class,'postDelete']);

Route::get('/editfurniture/{id}',[FurnitureController::class,'editPage']);
Route::post('/addpicture/{id}',[FurnitureController::class,'addPictureToEdit']);
Route::post('/deletepicture/{id}',[FurnitureController::class,'deletePictureToEdit']);
Route::post('/updatefurniture/{id}',[FurnitureController::class,'postUpdate']);

Route::get('/addfurniture', [FurnitureController::class,'addPage']);
Route::post('/addfurnituretolist',[FurnitureController::class,'postAdd']);

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
use App\Http\Controllers\Delivery\DeliveryController;

Route::get('/editdelivery',function(){
    return view('delivery/edit_delivery');
});
Route::get('/returndelivery',function(){
    return view('delivery/return_delivery');
});
Route::get('/deliverydetail',function(){
    return view('delivery/delivery_detail');
});
//Report parts
Route::get('/report',function(){
    return view('report/reporter');
});

//Deliver or return

Route::get('/delivery',[DeliveryController::class,'home']); //'home' is a function name in Controllers\Delivery\DeliveryController

//Route::get('/editdelivery/{id}',[DeliveryController::class,'editOrder']);
//Route::get('/returndelivery/{id}',[DeliveryController::class,'returnDeliveryOrder']);

