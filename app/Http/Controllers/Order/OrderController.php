<?php

namespace App\Http\Controllers\Order;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    //select data to show in order page
    function index(){
        $headbill = "select 
                        b.id as billid, 
                        b.date,
                        sum(bd.quantity * f.price ) as totalprice,
                        sum(bd.quantity) as sum_quantity,
                        ps.name as paymentStatusName,
                        ds.name as deliveryStatusName
                    
                    from headbill b
                    left join billdetail bd on b.id = bd.headbill_id
                    left join furniture f on f.id = bd.furniture_id
                    left join payment_status ps on ps.id = b.paystatus_id
                    left join delivery_status ds on ds.id = b.delistatus_id

                    group by b.id";
    

        $orders = DB::select($headbill);
        return view('order.order', [
            'orders' => $orders    
        ]);
    }
    
    //select data to show in delete order page
    function deletePage($id){

        $sql = "select 
                        b.id as billid, 
                        b.date,
                    
                        sum(bd.quantity * f.price ) as totalprice,
                        sum(bd.quantity) as sum_quantity
                    
                    from headbill b
                    left join billdetail bd on b.id = bd.headbill_id
                    left join furniture f on f.id = bd.furniture_id
                    where b.id = ?
                    group by b.id";
    

        $order = DB::select($sql, [$id])[0]; //[0]select first member in array
        return view('order.delete_order', [
            'order' => $order
        ]);
    }

    //delete bill 
    function postDelete(Request $request,$id){ //ใช้ $request คู่กับ method post


        $data =  $request->all(); // ได้ข้อมูลในทั้งหมดในรูป array {"_token":"mD8cIpxdG1cwMKgyJ32hqjfXlu1svtMWBRoByGIm","billid":"6"}
        $sql = "delete from headbill
                where id = ? ";
        $deleted = DB::delete($sql, [$id]);

        return redirect("/order"); //ลบแล้วกลับไปหน้า...

    }

    function showAddorderPage(){

        $cusnameSql =  "select 
                            *
                        from customer";
        $furname = "select
                        *
                    from furniture";

        $furnitures = DB::select($furname);
        $customers = DB::select($cusnameSql);
        return view('order.add_order', [
            'furnitures' => $furnitures,
            'customers' => $customers
        ]);
    }

    function showEditorderPage(Request $request,$id){


        $cusnameSql =  "select 
                            *
                        from customer";
        $furname = "select
                        *
                    from furniture";

        $orderSql = "select * from headbill where id = ?";
        $billDetailSQL = "select billdetail.*, furniture.price,furniture.name from billdetail 
                join furniture on billdetail.furniture_id = furniture.id
                where headbill_id = ?";


        $furnitures = DB::select($furname);
        $customers = DB::select($cusnameSql);

        $order = DB::select($orderSql,[$id])[0];
        $details = DB::select($billDetailSQL,[$id]);

        return view('order.edit_order', [
            'furnitures' => $furnitures,
            'customers' => $customers,
            'order' => $order,
            'details' => $details,
        ]);
    }

    function addFurnitureToOrder(Request $request,$id){

        $form = $request->all(); //เอามาทั้งหมดใน form
        $quantity = $form['quantity'];
        $furniture_id = $form['furniture_id'];        

       $sql = "
                INSERT INTO `FurnitureStore`.`billdetail`
                (  `quantity`, `furniture_id`, `headbill_id`)
                VALUES (?,?,?); ";

       $inserted = DB::insert($sql,[$quantity,$furniture_id,$id]);

       return redirect("/editorder/$id");
    }

    function deleteOrderFromBillDetail(Request $request, $id){

        $form = $request->all();
        $billdetail_id = $form['detail_id'];

        $sql = "DELETE FROM billdetail
                WHERE id = ? ";
        $deleted = DB::delete($sql,[$billdetail_id]);
        return redirect("/editorder/$id");
    }

    function addHeadbill(Request $request){

        $form = $request->all();
        $customer_id = $form['customer_id'];

        $sql = " INSERT INTO headbill (customer_id) VALUES (?)";
        $inserted = DB::insert($sql,[$customer_id]);

        $sql2 = "select last_insert_id() as id";

        $last_insert = DB::select($sql2)[0]->id;

        return redirect("/editorder/$last_insert");

    }

    function confirmPayment(Request $request, $id){

        $form = $request->all();
        $confrim_pay = $form['confrim_pay'];

        $sql = "UPDATE headbill
                SET paystatus_id = 1
                WHERE id = ?";

        $updated = DB::update($sql, [$confrim_pay]);

        return redirect("/order");

    }

    function cancelBill(Request $request, $id){

        $form = $request->all();
        $bill_id = $form['cancel_order'];

        $sql = "DELETE FROM headbill
                WHERE id = ? ";
                
        $deleted = DB::delete($sql,[$bill_id]);

        return redirect("/order");
    
    }



   


}
