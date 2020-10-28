<!DOCTYPE html>
<html>
    <br>
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
    <title>หน้าคืนสินค้า</title>
    <body>
        <!-- <?php print_r($details);?> -->
        <div class="container" style="margin-left: 0; margin-top: 40px">
            <div class="row">
                <div class="col-2" >
                    @include('menubar')
                </div>
                <div class="col">
                    <div class="row">
                        <h2>Edit delivery list of ID Bill: {{$delivery->id}}</h2>
                    </div>
                    <!-- <div class="row justify-content-end">
                        <div>
                            <button type="button" class="btn btn-dark ml-3">ยกเลิก</button>
                            <button type="button" class="btn btn-warning">คืนสินค้า</button>
                        </div>
                    </div> -->
                    <div class="row" style="margin-top: 30px;">
                        <div class="">
                            <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th>ID Bill</th>
                                    <th>รายการสินค้า</th>
                                    <th>สถานะการจัดส่ง</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($details as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->deliname}}</td>
                                    <td>
                                        <a class="btn btn-danger" href="/returndelivery/{{$item->id}}" role="button">คืนสินค้า</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            </table>
                <div class="col">
                    <div class="row">
                        <div>
                            <h2 style="font-size: large;">สรุปยอด</h2>
                            <?php
                            $totalPrice = 0;
                            foreach($details as $item){
                                $totalPrice += ($item->quantity) * ($item->price);
                            }
                            ?>
                            <p>ราคาสินค้ารวม: {{$totalPrice}} บาท</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
