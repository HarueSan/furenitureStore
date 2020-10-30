<?php

namespace App\Http\Controllers\Delivery;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class DeliveryController extends Controller{
    function home(){
        $home = "select DISTINCT hb.id, c.address, ds.name as deliname

        from headbill hb
        join customer c on hb.customer_id = c.id
        join billdetail bd on bd.headbill_id = hb.id
        join delivery_status ds on hb.delistatus_id = ds.id
        order by hb.id ASC
        ";

        $delivery = DB::select($home);
        return view('delivery.delivery_detail', [
            'deliveries' => $delivery
        ]);
    }



    function editDelivery(Request $request,$id){
        $furname = "select * from furniture";

        $delistatussql = "select * from delivery_status";

        $deliverysql = "select * from headbill where id = ?";

        $deliveryDetailSQL = "select bd.id, f.name, ds.name as deliname, bd.quantity,f.price
            from headbill hb
            join billdetail bd on bd.headbill_id = hb.id
            join furniture f on bd.furniture_id = f.id
            join delivery_status ds on hb.delistatus_id = ds.id
            where headbill_id = ?
            order by hb.id ASC";

        $furnitures = DB::select($furname);
        $delistatus = DB::select($delistatussql);
        $delivery = DB::select($deliverysql,[$id])[0];
        $details = DB::select($deliveryDetailSQL,[$id]);


        return view('delivery.edit_delivery',[
            'furnitures' => $furnitures,
            'delistatus' => $delistatus,
            'delivery' => $delivery,
            'details' => $details,
        ]);
    }
    function ShowReturnDeliveryPage($id){

        $furname = "select * from furniture";

        $sql = "SELECT billdetail.id,furniture.name,billdetail.quantity
        FROM billdetail
        join furniture on billdetail.furniture_id = furniture.id
        where billdetail.id = ?";

        $delivery = DB::select($sql,[$id])[0];
        $fname = DB::select($furname,[$id]);

        return view('delivery.return_delivery',[
            'delivery' => $delivery,
            'fname' => $fname,
        ]);
    }
    function returnAllDelivery(Request $request,$id){
        $form =  $request->all();
        $returnid = $form['bill_id'];
        $returnall = $form['return_quantity'];
        $returnreason = $form['reason_for_returned'];

        $updatedelivery = "UPDATE headbill
        SET delistatus_id = 5
        where id = ?";
        $insertreturnorder = "INSERT INTO 'furniturestore'.'return_order' ('bill_id','return_quantity','reason_for_returned')
        VALUES (?,?,?)";
        $updated = DB::update($updatedelivery,[$returnall,$id]);
        $inserted = DB::insert($insertreturnorder,[$returnid, $returnall, $returnreason]);
        return redirect("/editdelivery/{id}");
    }
    // function refundDelivery(Request $request,$id){
    //     $form = $request->all();
    //     $billid = $form['bill_id'];
    //     $reason = $form['reason_for_returned'];
    //     $returnquantity = $form['return_quantity'];
    //     $insertsql = "INSERT INTO 'furniturestore'.'return_order' ('bill_id','reason_for_returned','return_quantity')";
    //     $sql = "update billdetail
    //     inner join return_order on billdetail.id = return_order.bill_id
    //     set quantity = quantity - return_quantity
    //     where billdetail.id = ?";

    //     $insertedsql = DB::insert($insertsql,[$billid, $reason, $returnquantity]);
    //     $refundsql = DB::update($sql,[$id]);

    //     return redirect("/editdelivery/{id}");
    // }
    function showEditStatusPage(Request $request,$id){

        $status = "select * from delivery_status";

        $headbill = "select * from headbill where id = ?";

        $deliSta = DB::select($status);
        $bill = DB::select($headbill, [$id])[0];


        return view('delivery/edit_delistatus',[
            'delistatus' => $deliSta,
            'bill' => $bill
        ]);
    }
    function editStatus(Request $request,$id){
        $form = $request->all();
        $updatestatus = $form['delistatus_id'];


        $updateStatus = "UPDATE headbill
        SET delistatus_id = ?
        WHERE id = ?";

        $updated = DB::update($updateStatus,[$updatestatus, $id]);
        return redirect("/delivery");
    }
}
