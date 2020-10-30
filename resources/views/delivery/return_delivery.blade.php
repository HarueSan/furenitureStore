<html>
    <br>
    <head>
    <title>แบบฟอร์มการคืนสินค้า</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- CSS only -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- JS, Popper.js, and jQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <meta charset="UTF-8">
    </head>
    </br>
    <body>
    <!-- <?php print_r($delivery);?> -->

        <div class="container" style="margin-left:auto; margin-top:auto">
            <div class="row">
                <div class="col-2">
                    @include('menubar')
                </div>
                <div class="col">
                    <div class="row">
                    <h2>แบบฟอร์มการคืนสินค้า</h2>
                    </div>
                    <form>
                        <div class="form-group row">
                            <label for="staticbillid" name="bill_id" class="col-sm-2 col-form-label">ID of Billdetail:</label>
                            <div class="col-sm-10">
                                <input type="text" readonly class="form-control-plaintext" id="staticbillid" value="{{$delivery->id}}">
                            </div>
                        </div>
                    </form>
                    <div class="row" style="margin-top: 20px">
                        <div class="col-2">
                            <div class="form-group">
                                <p>ชื่อสินค้า</p>
                            </div>
                        </div>
                        <div class="col-6">
                        <input type="text" class="" readonly value="{{$delivery->name}}">
                        </div>
                    </div>
                    <form method="post" action="/updatedelivery/{{$delivery->id}}">
                        @csrf
                        <div class="row" style="margin-top: 20px;">
                            <div class="col-2">
                                <p>จำนวนสินค้าที่จะขอคืน</p>
                            </div>
                            <div class="form-group">
                                <div class="col-6">
                                    <input type="number" name="return_quantity" class="form-control" value="{{$delivery->quantity}}">
                                    <div class="input-group-append">
                                        <span class="input-group-text">ชิ้น</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row" style="margin-top: 20px;">
                                <div class="col-3 mt-4" >
                                    <p>เหตุผลในการคืนสินค้า</p>
                                </div>
                                <div class="col mt-4">
                                    <textarea type="text" name="reason_for_returned" class="form-control" placeholder="กรุณาพิมพ์..." ></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col">
                                <a class="btn btn-danger" href="/delivery" role="button">Cancel</a>
                                <button type="submit" class="btn btn-warning" style="margin-left: 30px;">OK</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</body>
</html>
