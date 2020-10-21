<?php

namespace App\Http\Controllers\Delivery;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class DeliveryController extends Controller{
    function home(){
        $home = "SELECT *
                    FROM furniturestore.headbill";

        $delivery = DB::select($home);
        return view('delivery.delivery_detail', [
            'deliveries' => $delivery
        ]);
    }
}
