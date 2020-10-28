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

        $deliverysql = "select * from headbill
            where id = ?";

        $deliveryDetailSQL = "select hb.*, f.name, ds.name as deliname, bd.quantity,f.price
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
    function returnDelivery($id){

        $furname = "select * from furniture";

        $sql = "SELECT billdetail.id,furniture.name,billdetail.quantity
        FROM billdetail
        join furniture on billdetail.furniture_id = furniture.id
        ";

        $delivery = DB::select($sql,[$id])[0];
        $fname = DB::select($furname,[$id]);

        return view('delivery.return_delivery',[
            'delivery' => $delivery,
            'fname' => $fname,
        ]);
    }
    function deleteDelivery(Request $request,$id){
        $data =  $request->all();
        $sql = "DELETE from billdetail where id = ?";
        $deleted = DB::delete($sql,[$id]);
        return redirect('/editdelivery/{id}');
    }
}
