
<html>
    <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    </head>
    <body >

    {{-- <?php 
        print_r($orders);
    ?> --}}


        <div class="container" style="margin-left: 0; margin-top: 40px">
            <div class="row">
                <div class="col-2" >
                    @include('menubar')
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col mt-4">
                            <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                        </div>
                        <div class="col mt-3" >
                            <a href="/addorder" class="btn btn-primary" >Add New</a>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 30px;">  
                            <div class="">
                                <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>No</th>
                                        <th>ID Bill</th> 
                                        <th>วันที่</th>
                                        <th>จำนวนสินค้ารวม</th>
                                        <th>ราคารวม</th>
                                        <th>action</th>
                                        <th>action</th>
                                        <th>สถานะการชำระเงิน</th>
                                        <th>สถานะการจัดส่ง</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $order)
                                    <tr>
                                        <td>{{$loop->index + 1}}</td>
                                        <td>{{$order->billid}}</td>
                                        <td>{{Carbon\Carbon::parse($order->date)->toDateString()}}</td>
                                        <td>{{$order->sum_quantity}}</td>
                                        <td>{{$order->totalprice}}</td>
                                        <td >
                                           <a href="/deleteorder/{{$order->billid}}" class="text-danger">ลบ</a>
                                        </td>
                                        <td >
                                            <a href="/editorder/{{$order->billid}}" class="text-primary">แก้ไข</a>
                                        </td>
                                        <td>
                                            @if($order->paymentStatusName == "ชำระแล้ว")
                                                <button type="button" class="btn btn-info">ชำระแล้ว</button>
                                            @else
                                                <button type="button" class="btn btn-warning">ยังไม่ได้ชำระ</button>
                                            @endif
                                        </td>
                                        <td>
                                            @if($order->deliveryStatusName == "ยังไม่ได้ส่ง")
                                                <button type="button" class="btn btn-warning">ยังไม่ได้ส่ง</button>
                                            @elseif($order->deliveryStatusName == "ส่งสำเร็จ")
                                                <button type="button" class="btn btn-success">ส่งสำเร็จ</button>
                                            @elseif($order->deliveryStatusName == "กำลังส่ง")
                                                <button type="button" class="btn btn-info">กำลังส่ง</button>
                                            @elseif($order->deliveryStatusName == "ล้มเหลว")
                                                <button type="button" class="btn btn-danger">ส่งล้มเหลว</button>
                                            @elseif($order->deliveryStatusName == "ส่งคืนค้า")
                                                <button type="button" class="btn btn-dark">ตีกลับสินค้า</button>
                                            @else
                                                <button type="button" class="btn btn-secondary">ไม่ระบุ</button>
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                </table>
                            </div>
                    </div>  
                </div>
            </div>
        </div>


    </body>

</html>
