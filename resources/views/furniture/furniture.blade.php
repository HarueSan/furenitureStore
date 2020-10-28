<!DOCTYPE html>
<html lang="en">
<html>
    <head>
    <title>Furniture</title>
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
            print_r($furnitures);
        ?> -->
        <div class="container" style="margin-left: 0; margin-top: 40px">
            <div class="row">
                <div class="col-2" >
                    @include('menubar')
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col mt-4">
                            <h1>Furniture Detail</h1>
                        </div>
                        <div class="col mt-4">
                            <a class="btn btn-primary" href="/addfurniture">Add New</a>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 30px;">
                        <div class="col">
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Date</th>
                                        <th>Picture</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Type</th>
                                        <th>Quantity</th>
                                        <th>Color</th>
                                        <th>Description</th>
                                        <th>action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($furnitures as $fur)
                                    <tr>
                                        <td>{{Carbon\Carbon::parse($fur->date)->toDateString()}}</td>
                                        <td><img src="{{$fur->url}}" class="rounded mx-auto d-block" style="width: 100px
                                        " alt="..."></td>
                                        <td>{{$fur->name}}</td>
                                        <td>{{$fur->price}}</td>
                                        <td>{{$fur->typename}}</td>
                                        <td>{{$fur->quantity}}</td>
                                        <td>{{$fur->colorname}}</td>
                                        <td>{{$fur->description}}</td>
                                        <td>
                                            <a class="btn btn-success" href="/editfurniture/{{$fur->furnitureid}}">Edit</a>
                                            <a class="btn btn-danger" href="/deletefurniture/{{$fur->furnitureid}}">Delete</a>
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
