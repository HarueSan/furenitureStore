<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class CustomerController extends Controller
{
    //select data to show in order page
    function index(){
        $customer = "SELECT id as custid, fname, lname, telphone, address, email FROM customer";

        $customers = DB::select($customer);
        return view('customer.customer', [
            'customers' => $customers    
        ]);
    }

    //select data to show in delete order page
     function deletePage($id){

        $customer = "SELECT id as custid, fname, lname, telphone, address, email FROM customer";
    

        $cust = DB::select($customer, [$id])[0]; //[0]select first member in array
        return view('customer.delete_customer', [
            'cust' => $cust
        ]);
    }

    //delete bill 
    function postDelete(Request $request,$id){ //ใช้ $request คู่กับ method post


        $data =  $request->all(); // ได้ข้อมูลในทั้งหมดในรูป array {"_token":"mD8cIpxdG1cwMKgyJ32hqjfXlu1svtMWBRoByGIm","billid":"6"}
        $sql = "delete from customer
                where id = ? ";
        $deleted = DB::delete($sql, [$id]);

        return redirect("/customer"); //ลบแล้วกลับไปหน้า...

    }

    function addcustomer(Request $request,$id){

        $form = $request->all(); //เอามาทั้งหมดใน form
        $quantity = $form['quantity'];
        $customer_id = $form['customer_id'];        

       $sql = "
                INSERT INTO `FurnitureStore`.`customer`
                (  `quantity`, `furniture_id`, `headbill_id`)
                VALUES (?,?,?); ";

       $inserted = DB::insert($sql,[$quantity,$customer_id,$id]);

       return redirect("/editcustomer/$id");
    }

}
