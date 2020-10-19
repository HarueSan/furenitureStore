<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

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
    print_r($order);
    ?> --}} {{-- ใช้ method post สำหรับการรับค่าข้อมูลจากฟอร์ม form html--}}
    <form method="post" action="/deleteorder/{{$order->billid}}">
        @csrf {{-- @crsf ป้องกันการจมตีจากภายนอก--}}
    <div class="container" style="margin-left: 0; margin-top: 40px">
        <div class="row">
            <div class="col-2">
                @include('menubar')
            </div>
            <div class="col">
                <div>
                        <div class="form-group row">
                            <label for="idblii" class="col-sm-2 col-form-label " >ID Bill</label>
                            <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext text-secondary" id="staticBillId" name='billid' value="{{$order->billid}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="date" class="col-sm-2 col-form-label ">Date</label>
                            <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext text-secondary" id="staticDate" value="{{Carbon\Carbon::parse($order->date)->toDateString()}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="sumquantityfurniture" class="col-sm-2 col-form-label ">Sum Quantity</label>
                            <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext text-secondary" id="staticQuantity" value="{{$order->sum_quantity}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="totalprice" class="col-sm-2 col-form-label ">Total Price</label>
                            <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext text-secondary" id="staticTotalPrice" value="{{$order->totalprice}}">
                            </div>
                        </div>
                </div>
                <div class="row mt-4">
                    <div class="col" style=" text-align: center;">
                        <a href="/order" type="button" class="btn btn-dark" > cancle </a>
                        <button type="submit" class="btn btn-danger ml-3" >delete</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </form>
    
</body>
</html>