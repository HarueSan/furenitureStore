<!DOCTYPE html>
<html lang="en">
<html>
    <br>
    <head>
    <title>Add Furniture</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    </head>
    <body>
        <!-- <?php
        print_r($types);
        ?> -->
        <div class="container" style="margin-left: 0; margin-top: 40px">
            <div class="row">
                <div class="col-2" >
                    @include('menubar')
                </div>
                <div class="col">
                    <form method="post" action="/addfurnituretolist">
                    @csrf
                        <div class="row">
                            <div class="col-2">
                                <p>Date</p>
                            </div>
                            <div class="col-6">
                                <input type="text" name="date" class="form-control" placeholder="YYYY-MM-DD">
                                <!-- <p style="margin-top: 10px"> หากไม่กำหนดจะตั้งเป็นวันเวลา ณ ขณะนั้น </p> -->
                            </div>
                        </div>
                        <div class="row" style="margin-top: 20px">
                            <div class="col-2">
                                <p>Name</p>
                            </div>
                            <div class="col-6">
                                <input type="text" class="form-control" name="name">
                            </div>
                        </div>
                        <div class="row" style="margin-top: 20px">
                            <div class="col-2">
                                <p>Price</p>
                            </div>
                            <div class="col-6">
                                <div class="input-group">
                                    <input type="number" name="price" class="form-control">
                                    <div class="input-group-append">
                                        <span class="input-group-text">บาท</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 20px">
                            <div class="col-2">
                                <p>Type</p>
                            </div>
                            <div class="col-6">
                                <select name="type_id" id="" class="form-control" >
                                    <option selected>ประเภท..</option>
                                    @foreach ($types as $types)
                                    <option value="{{$types->id}}">{{$types->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 20px">
                            <div class="col-2">
                                <p>Quantity</p>
                            </div>
                            <div class="col-6">
                                <div class="input-group">
                                    <input type="number" name="quantity" class="form-control">
                                    <div class="input-group-append">
                                        <span class="input-group-text">ชิ้น</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 20px">
                            <div class="col-2">
                                <p>Color</p>
                            </div>
                            <div class="col-6">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">สี</label>
                                </div>
                                <select name="color_id" id="" class="form-control" >
                                    <option selected>-- โปรดเลือก --</option>
                                    @foreach ($colors as $colors)
                                    <option value="{{$colors->id}}">{{$colors->name}}</option>
                                    @endforeach
                                </select>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 20px">
                            <div class="col-2">
                                <p>Description</p>
                            </div>
                            <div class="col-6">
                            <textarea class="form-control" name="description" placeholder="ไม่บังคับ"></textarea>
                            </div>
                        </div>
                        <div class="row" style="margin-left: 10%; margin-top: 20px">
                            <div class="col" style=" text-align: center;">
                                <a href="/furniture" type="button" class="btn btn-warning">Cancle </a>
                                <button type="submit" class="btn btn-success" style="margin-left: 30px;">Add</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
