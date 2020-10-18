<html>
    <head>
        <!-- CSS only -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

        <!-- JS, Popper.js, and jQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <meta charset="UTF-8">

    </head>

    <body>
        {{-- <?php
            print_r($furnitures);
        ?> --}}
        <div class="container" style="margin-left: 0; margin-top: 40px">
            <div class="row">
                <div class="col-2" >
                    @include('menubar')
                </div>
                <div class="col" >
                    <div class="row">
                        <div class="col-5">
                            <div class="form-group">
                                <label for="customername">Customer Name</label>
                                <select name="customer_id" id="" class="form-control">
                                        @foreach ($customers as $customer)
                                        <option

                                        @if($customer->id == $order->customer_id)
                                        selected
                                        @endif
                                        
                                        value="{{$customer->id}}">{{$customer->fname}} {{$customer->lname}}</option>   
                                        @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    <form class="row" method="post" action="/addFurnitureToOrder/{{$order->id}}">
                        @csrf
                        <div class= "col-5">
                            <div class="form-group">
                                <label for="furniturename">Choose Furniture</label>
                                <select name="furniture_id" id="" class="form-control">
                                    @foreach ($furnitures as $furniture)
                                    <option value="{{$furniture->id}}">{{$furniture->id}} - {{$furniture->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class= "col-2">
                            <div class="form-group">
                                <label for="quantity">Quantity</label>
                                <input type="number" name="quantity" id="" class="form-control">
                            </div>
                        </div>
                        <div class= "col-3">
                            <button type="submit" class="btn btn-success">Add</button>
                        </div>
                        </form>
                    </div>
                    <div class="row">
                            <div class="">
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>No</th>
                                            <th>ID สินค้า</th>
                                            <th>ชื่อสินค้า</th>
                                            <th>ราคาต่อชิ้น</th>
                                            <th>จำนวนที่ซื้อ</th>
                                            <th>ราคารวม</th>
                                            <th>action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($details as $item)
                                        <tr>
                                            <td>{{$loop->index + 1}}</td>
                                            <td>{{$item->furniture_id}}</td>
                                            <td>{{$item->name}}</td>
                                            <td>{{$item->price}}</td>
                                            <td>{{$item->quantity}}</td>
                                            <td>{{$item->quantity * $item->price}}</td>

                                            <td>
                                                <form method="post" action="/deleteBillDetail/{{$order->id}}">
                                                    @csrf
                                                    <input type="hidden" name="detail_id" value="{{$item->id}}"/>
                                                    <button type="submit" class="btn btn-danger">ลบ</button>
                                                </form>
                                                
                                            </td>
                                        </tr>
                                        @endforeach
                                        
                                    </tbody>
                                </table>
                            </div>
                    </div>
                </div>
                <div class="col-2">
                    <div>
                        <h3 style="font-size: large;">สรุปยอด</h3>
                        <?php
                        $totalPrice = 0;
                        foreach($details as $item){
                            $totalPrice += $item->quantity * $item->price;

                        }
                        ?>
                        <p>ราคาสินค้ารวม: {{$totalPrice}} บาท</p>
                        
                    </div>
                    <form method="post" action="/confrimToPay/{{$order->id}}">
                        @csrf
                        <div class="form-group">
                        <input type="hidden" name="confrim_pay" value="{{$order->id}}">
                            <button class="btn btn-primary">ยืนยันการชำระเงิน</button>       
                        </div>
                    </form>
                    <form method="post" action="/cancelOrder/{{$order->id}}">
                        @csrf
                        <div class="form-group">
                            <input type="hidden" name="cancel_order" value="{{$order->id}}">
                            <button class="btn btn-dark">ยกเลิกการสั่งซื้อ</button>       
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </body>

</html>
