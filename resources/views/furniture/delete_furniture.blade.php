<!DOCTYPE html>
<html lang="en">
<head>
    <title>Delete Furniture</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<body>
    <!-- <?php
    print_r($furniture);
    ?> -->
    <form method="post" action="/deletefurniture/{{$furniture->furnitureid}}">
        @csrf
    <div class="container" style="margin-left: 0; margin-top: 40px">
        <div class="row">
            <div class="col-2">
                @include('menubar')
            </div>
            <div class="col">
                <div>
                    <form>
                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label ">Date</label>
                            <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext text-secondary" id="staticfurnitureid" name='furnitureDate' value="{{Carbon\Carbon::parse($furniture->date)->toDateString()}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label ">Name</label>
                            <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext text-secondary" id="staticName" value="{{$furniture->name}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="price" class="col-sm-2 col-form-label ">Price</label>
                            <div class="col-sm-10">
                            <input type="float" readonly class="form-control-plaintext text-secondary" id="staticPrice" value="{{$furniture->price}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="type" class="col-sm-2 col-form-label ">Type</label>
                            <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext text-secondary" id="staticType" value="{{$furniture->typename}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label ">Quantity</label>
                            <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext text-secondary" id="staticQuantity" value="{{$furniture->quantity}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label ">Color</label>
                            <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext text-secondary" id="staticColor" value="{{$furniture->colorname}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="description" class="col-sm-2 col-form-label ">Description</label>
                            <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext text-secondary" id="staticDescription" value="{{$furniture->description}}">
                            </div>
                        </div>
                        <div class="row" style="margin-top: 20px">
                        <div class="col-2">
                            <p>Picture</p>
                        </div>
                        </div>
                        <div class="row" style="margin-top: 20px">
                        @foreach ($pics as $pics)
                            <div class="col-2">
                                <img src="{{$pics->url}}" class="rounded mx-auto d-block" style="width: 125px" alt="...">
                            </div>
                        @endforeach
                        </div>
                    </form>
                </div>
                <div class="row" style="margin-left: 10%; margin-top: 20px">
                    <div class="col" style=" text-align: center;">
                        <a href="/furniture" type="button" class="btn btn-warning">Cancle </a>
                        <button type="submit" class="btn btn-danger" style="margin-left: 30px;">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
</body>
</html>
