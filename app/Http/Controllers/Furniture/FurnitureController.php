<?php

namespace App\Http\Controllers\Furniture;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class FurnitureController extends Controller
{
    //------------------------------ furniture ------------------------------//
    //select data to show in furniture page
    function index(){
        $furniture = "SELECT
        f.id as furnitureid,
        f.name,
        f.price,
        f.date,
        c.name as colorname,
        t.name as typename,
        f.quantity,
        f.description,
        p.url
        FROM furniture f
        left join furniture_type t on f.type_id = t.id
        left join color c on f.color_id = c.id
        left join picture p on f.picture_id = p.id
        ORDER BY f.date desc";

        $furnitures = DB::select($furniture);
        return view('furniture.furniture', [
            'furnitures' => $furnitures
        ]);
    }

    //------------------------------ delete ------------------------------//
    //select data to show in delete furniture page
    function deletePage($id){
        $sql = "SELECT
        f.id as furnitureid,
        f.name,
        f.price,
        f.date,
        c.name as colorname,
        t.name as typename,
        f.quantity,
        f.description,
        p.url
        FROM furniture f
        left join furniture_type t on f.type_id = t.id
        left join color c on f.color_id = c.id
        left join picture p on f.picture_id = p.id
        where f.id = ?";
        $pic = "SELECT
        p.url,
        f.id as furnitureid_fur,
        p.furniture_id as furnitureid_pic
        FROM furniture f
        LEFT join picture p on f.id = p.furniture_id
        WHERE f.id = ? and p.furniture_id = f.id";
        $type = "SELECT
        p.url,
        f.id as furnitureid_fur,
        p.furniture_id as furnitureid_pic
        FROM furniture f
        LEFT join picture p on f.id = p.furniture_id
        WHERE f.id = ? and p.furniture_id = f.id";

        $furniture = DB::select($sql, [$id])[0]; //[0]select first member in array
        $pics = DB::select($pic, [$id]);
        return view('furniture.delete_furniture', [
            'furniture' => $furniture,
            'pics' => $pics
        ]);
    }

    //delete furniture
    function postDelete(Request $request,$id){ //ใช้ $request คู่กับ method post
        $data =  $request->all(); // ได้ข้อมูลในทั้งหมดในรูป array {"_token":"mD8cIpxdG1cwMKgyJ32hqjfXlu1svtMWBRoByGIm","billid":"6"}
        $sql = "delete from furniture
                where id = ? ";

        $deleted = DB::delete($sql, [$id]);
        return redirect("/furniture"); //ลบแล้วกลับไปหน้า...

    }

    //------------------------------ edit ------------------------------//
    //select data to show in edit furniture page
    function editPage($id){
        $sql = "SELECT
        f.id as furnitureid,
        f.name,
        f.price,
        f.date,
        c.name as colorname,
        t.name as typename,
        f.quantity,
        f.description,
        p.url
        FROM furniture f
        left join furniture_type t on f.type_id = t.id
        left join color c on f.color_id = c.id
        left join picture p on f.picture_id = p.id
        where f.id = ?";

        $pic = "SELECT
        p.id as pic_id,
        p.url,
        f.id as furnitureid_fur,
        p.furniture_id as furnitureid_pic
        FROM furniture f
        LEFT join picture p on f.id = p.furniture_id
        WHERE f.id = ? and p.furniture_id = f.id";

        $type = "SELECT *
        FROM furniture_type;";

        $color = "SELECT *
        FROM color;";

        $picshow = "SELECT
        id as picshow_id,
        url as picshow_url
        FROM picture
        where furniture_id = ?";

        $furniture = DB::select($sql, [$id])[0]; //[0]select first member in array
        $pics = DB::select($pic, [$id]);
        $types = DB::select($type);
        $colors = DB::select($color);
        $picshow = DB::select($picshow, [$id]);
        return view('furniture.edit_furniture', [
            'furniture' => $furniture,
            'pics' => $pics,
            'types' => $types,
            'colors' => $colors,
            'picshow' => $picshow
        ]);
    }

    function addPictureToEdit(Request $request,$id){

        $form = $request->all(); //เอามาทั้งหมดใน form
        $url = $form['url'];
        $furniture_id = $form['furnitureid_pic'];
        $sql = "INSERT INTO
        `furniturestore`.`picture`(`url`, `furniture_id`)
        VALUES (?, ?);";

        $inserted = DB::insert($sql,[$url, $furniture_id]);
        return redirect("/editfurniture/$id");
    }

    function deletepictureToEdit(Request $request, $id){

        $form = $request->all();
        $pic_id = $form['pic_id'];
        $sql = "DELETE FROM picture
                WHERE id = ? ";

        $deleted = DB::delete($sql,[$pic_id]);
        return redirect("/editfurniture/$id");
    }

    function postUpdate(Request $request, $id){

        $form = $request->all(); //เอามาทั้งหมดใน form
        $date = $form['date'];
        $name = $form['name'];
        $price = $form['price'];
        $type_id = $form['type_id'];
        $quantity = $form['quantity'];
        $color_id = $form['color_id'];
        $description = $form['description'];
        $picture_id = $form['pic_id'];

        $sql = "UPDATE furniture
                SET date = ?, name = ?, price = ?, type_id = ?, quantity = ?,
                color_id = ?, description = ?, picture_id = ?
                WHERE id = ?";

        $updated = DB::update($sql, [$date, $name, $price, $type_id, $quantity, $color_id, $description, $picture_id, $id]);

        return redirect("/editfurniture/$id");

    }

    //------------------------------ add ------------------------------//
    //select data to show in add furniture page
    function addPage(){
        $type = "SELECT *
        FROM furniture_type;";
        $color = "SELECT *
        FROM color;";

        $types = DB::select($type);
        $colors = DB::select($color);
        return view('furniture.add_furniture', [
            'types' => $types,
            'colors' => $colors
        ]);
    }

    //add furniture
    function postAdd(Request $request){

        $form = $request->all(); //เอามาทั้งหมดใน form
        $date = $form['date'];
        $name = $form['name'];
        $price = $form['price'];
        $type_id = $form['type_id'];
        $quantity = $form['quantity'];
        $color_id = $form['color_id'];
        $description = $form['description'];
        $sql = "INSERT INTO
        `furniturestore`.`furniture` (`date`, `name`, `price`, `type_id`, `quantity`, `color_id`, `description`)
        VALUES (?, ?, ?, ?, ?, ?, ?);";

        $inserted = DB::insert($sql,[$date, $name, $price, $type_id, $quantity, $color_id, $description]);
        return redirect("/furniture");
    }
}
