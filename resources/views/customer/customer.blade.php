<!DOCTYPE html>
<html lang="en">
<html>
    <br>
    <head>
    <title>Customer</title>
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
    <!-- <?php
        print_r($customers);
    ?> -->
        <div class="container" style="margin-left: 0; margin-top: 40px">
            <div class="row">
                <div class="col-2" >
                    @include('menubar')
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col mt-4">
                            <h1>Customer Detail</h1>
                        </div>
                        <div class="col mt-4">
                            <a class="btn btn-primary" href="/addcustomer">Add New</a>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 30px;">
                        <div class="">
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Fname</th>
                                        <th>Lname</th>
                                        <th>TelPhone</th>
                                        <th>Address</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($customers as $cust)
                                    <tr>
                                        <td>{{$cust->fname}}</td>
                                        <td>{{$cust->lname}}</td>
                                        <td>{{$cust->telphone}}</td>
                                        <td>{{$cust->address}}</td>
                                        <td>{{$cust->email}}</td>
                                        <td>
                                            <a class="btn btn-success" href="/editcustomer/{{$cust->custid}}">Edit</a>
                                            <a class="btn btn-danger" href="/deletecustomer/{{$cust->custid}}">Delete</a>
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



