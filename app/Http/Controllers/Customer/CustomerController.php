<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class CustomerController extends Controller
{
    //------------------------------ customer ------------------------------//
    //select data to show
    function index(){
        $customer = "SELECT id as custid, fname, lname, telphone, address, email
        FROM customer
        ORDER BY id desc";

        $customers = DB::select($customer);
        return view('customer.customer', [
            'customers' => $customers
        ]);
    }

    //------------------------------ delete ------------------------------//
    //select data to show
     function deletePage($id){
        $customer = "SELECT id as custid, fname, lname, telphone, address, email
        FROM customer
        where id = ?";

        $cust = DB::select($customer, [$id])[0]; //[0]select first member in array
        return view('customer.delete_customer', [
            'cust' => $cust
        ]);
    }

    //delete data
    function postDelete(Request $request,$id){ //ใช้ $request คู่กับ method post
        $data =  $request->all(); // ได้ข้อมูลในทั้งหมดในรูป array
        $sql = "delete from customer
                where id = ? ";

        $deleted = DB::delete($sql, [$id]);
        return redirect("/customer"); //ลบแล้วกลับไปหน้า...

    }

    //------------------------------ add ------------------------------//
    //select data to show
    function addPage(){
        $customer = "SELECT id as custid, fname, lname, telphone, address, email
        FROM customer";

        $cust = DB::select($customer);
        return view('customer.add_customer', [
            'cust' => $cust
        ]);
    }
    //add data
    function postAdd(Request $request){
        $form = $request->all(); //เอามาทั้งหมดใน form
        $fname = $form['fname'];
        $lname = $form['lname'];
        $telphone = $form['telphone'];
        $address = $form['address'];
        $email = $form['email'];

        $sql = "INSERT INTO
        furniturestore.`customer` (fname, lname, telphone, address, email)
        VALUES (?, ?, ?, ?, ?);";

        $inserted = DB::insert($sql,[$fname, $lname, $telphone, $address, $email]);
        return redirect("/customer");
    }

    //------------------------------ edit ------------------------------//
    //select data to show
    function editPage($id){
        $customer = "SELECT id as custid, fname, lname, telphone, address, email
        FROM customer
        where id = ?";

        $cust = DB::select($customer ,[$id])[0];
        return view('customer.edit_customer', [
            'cust' => $cust
        ]);
    }

    //update data
    function postUpdate(Request $request, $id){
        $form = $request->all(); //เอามาทั้งหมดใน form
        $fname = $form['fname'];
        $lname = $form['lname'];
        $telphone = $form['telphone'];
        $address = $form['address'];
        $email = $form['email'];

        $sql = "UPDATE customer
                SET fname = ?, lname = ?, telphone = ?, address = ?, email = ?
                WHERE id = ?";

        $updated = DB::update($sql, [$fname, $lname, $telphone, $address, $email, $id]);
        return redirect("/editcustomer/$id");

    }
}