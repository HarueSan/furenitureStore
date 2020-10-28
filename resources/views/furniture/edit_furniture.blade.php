<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Furniture</title>
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
    <div class="container" style="margin-left: 0; margin-top: 40px">
        <div class="row">
            <div class="col-2" >
                    @include('menubar')
            </div>

            <div class="col">
                <form method="post" action="/updatefurniture/{{$furniture->furnitureid}}">
                    @csrf
                    <div class="row">
                        <div class="col-2">
                            <p>Date</p>
                        </div>
                        <div class="col-9">
                            <input type="text" name="date" class="form-control" placeholder="{{Carbon\Carbon::parse($furniture->date)->toDateString()}}">
                        </div>
                    </div>
                    <div class="row" style="margin-top: 20px">
                        <div class="col-2">
                            <p>Name</p>
                        </div>
                        <div class="col-9">
                            <input type="text" name="name" class="form-control" placeholder="{{$furniture->name}}">
                        </div>
                    </div>
                    <div class="row" style="margin-top: 20px">
                        <div class="col-2">
                            <p>Price</p>
                        </div>
                        <div class="col-9">
                            <div class="input-group">
                                <input type="number" name="price" class="form-control" placeholder="{{$furniture->price}}"">
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
                        <div class="col-9">
                            <select name="type_id" id="" class="form-control" >
                                <option selected>-- {{$furniture->typename}} --</option>
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
                        <div class="col-9">
                            <div class="input-group">
                                <input type="number" name="quantity" class="form-control" placeholder="{{$furniture->quantity}}">
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
                        <div class="col-9">
                            <div class="input-group">
                                <div class="input-group-append">
                                    <span class="input-group-text">สี</span>
                                </div>
                                <select name="color_id" id="" class="form-control" >
                                    <option selected>-- {{$furniture->colorname}} --</option>
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
                        <div class="col-9">
                            <textarea class="form-control" name="description" placeholder="{{$furniture->description}}"></textarea>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 20px">
                        <div class="col-2">
                            <p>Thumbnail</p>
                        </div>
                        <div class="col-9">
                            <select name="pic_id" id="" class="form-control" >
                                <option selected>เลือกภาพหน้าปก</option>
                                    @foreach ($picshow as $picshow)
                                    <option value="{{$picshow->picshow_id}}">{{$picshow->picshow_id}}</option>
                                    @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row" style="margin-left: 45%; margin-top: 20px">
                        <div class="col" style=" text-align: center;">
                            <a href="/furniture" type="button" class="btn btn-warning">Cancle</a>
                            <button type="submit" class="btn btn-dark" style="margin-left: 30px;">Update</button>
                        </div>
                    </div>
                </from>
            </div>

            <div class="col-4">
                <div>
                    <p style="margin-left: 0px" >Picture</p>
                </div>
                <div class="row" style="margin-top: 0px">
                    <div class="col">
                    <div>
                        <form method="post" action="/addpicture/{{$furniture->furnitureid}}">
                        @csrf
                            <div class="input-group mb-3">
                                <input type="text" name="url" class="form-control" placeholder="https://www...">
                                <div class="input-group-append">
                                    <input type="hidden" name="furnitureid_pic" value="{{$furniture->furnitureid}}"/>
                                    <button type="submit" class="btn btn btn-success">Add</button>
                                </div>
                            </div>
                        </form>
                        ลงได้สูงสุด 4 ภาพ
                    </div>
                    </div>
                </div>

                <div class="row" style="margin-top: 0px">
                @foreach ($pics as $pics)
                    <div class="col-2" style="margin-right: 70px; margin-left: 30px; margin-top: 10px">
                    <div>
                        <form method="post" action="/deletepicture/{{$furniture->furnitureid}}">
                        @csrf
                            <p>{{$pics->pic_id}}</p>
                            <img src="{{$pics->url}}" class="rounded mx-auto d-block" name="pic_id" style="width: 125px" alt="...">
                            <input type="hidden" name="pic_id" value="{{$pics->pic_id}}">
                            <button type="submit" class="btn btn-danger" style="margin-left: 30px;">Delete</button>
                        </form>
                    </div>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
    </div>
</body>
</html>
