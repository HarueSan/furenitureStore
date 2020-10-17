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
    <div class="container" style="margin-left: 0; margin-top: 40px">
        <div class="row">
            <div class="col-2">
                @include('menubar')
            </div>
            <div class="col">
                <div>
                    <form>
                        <div class="form-group row">
                            <label for="idblii" class="col-sm-2 col-form-label " >ID Bill</label>
                            <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext text-secondary" id="staticBillId" value="123456">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="date" class="col-sm-2 col-form-label ">Date</label>
                            <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext text-secondary" id="staticDate" value="12/3/2563">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="sumquantityfurniture" class="col-sm-2 col-form-label ">Sum Quantity</label>
                            <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext text-secondary" id="staticQuantity" value="10">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="totalprice" class="col-sm-2 col-form-label ">Total Price</label>
                            <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext text-secondary" id="staticTotalPrice" value="60000">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="payment" class="col-sm-2 col-form-label ">Payment</label>
                            <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext text-secondary" id="staticPayment" value="credit">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="row mt-4">
                    <div class="col" style=" text-align: center;">
                        <button type="button" class="btn btn-dark">cancle</button>
                        <button type="button" class="btn btn-danger" style="margin-left: 30px;">delete</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
    
</body>
</html>