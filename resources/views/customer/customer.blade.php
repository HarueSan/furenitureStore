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
                            <button class="btn btn-primary">Add New</button>
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
                                    <tr>
                                        <td>ขวัญจิรา</td>
                                        <td>กาเกตุ</td>
                                        <td>081-111-1111</td>
                                        <td>
                                            <div class="col">อำเภอดอยสะเก็ด</div>
                                            <div class="col">จังหวัดเชียงใหม่</div>
                                        </td>
                                        <td>kwan@gmail.com</td>
                                        <td>
                                            <button type="button" class="btn btn-success">Edit</button>
                                            <button type="button" class="btn btn-danger">Delete</button>
                                        </td>
                                    </tr>
                                    <tr>
                                    <td>จารุภัทร</td>
                                        <td>ชัยรักไพ</td>
                                        <td>082-222-2222</td>
                                        <td>
                                            <div class="col">อำเภอเมือง</div>
                                            <div class="col">จังหวัดลำพูน</div>
                                        </td>
                                        <td>ja@gmail.com</td>
                                        <td>
                                            <button type="button" class="btn btn-success">Edit</button>
                                            <button type="button" class="btn btn-danger">Delete</button>
                                        </td>
                                    </tr>
                                    <tr>
                                    <td>สุนิสา</td>
                                        <td>สุวรรณ</td>
                                        <td>083-333-3333</td>
                                        <td>
                                            <div class="col">อำเภอเชียงของ</div>
                                            <div class="col">จังหวัดเชียงราย</div>
                                        </td>
                                        <td>su@gmail.com</td>
                                        <td>
                                            <button type="button" class="btn btn-success">Edit</button>
                                            <button type="button" class="btn btn-danger">Delete</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
