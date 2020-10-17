<!DOCTYPE html>
<html lang="en">
<html>
    <br>
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
                            <button class="btn btn-primary">Add New</button>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 30px;">
                        <div class="">
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
                                    <tr>
                                        <td>20/10/2020</td>
                                        <td><img src="https://via.placeholder.com/100" class="rounded mx-auto d-block" alt="..."></td>
                                        <td>โต๊ะพับ</td>
                                        <td>150</td>
                                        <td>
                                            <div class="col">ประเภทเดี่ยว</div>
                                            <div class="col">ห้องนั่งเล่น</div>
                                        </td>
                                        <td>18</td>
                                        <td>ขาว</td>
                                        <td>โต๊ะที่สามารถพับเก็บได้</td>
                                        <td>
                                            <button type="button" class="btn btn-success">Edit</button>
                                            <button type="button" class="btn btn-danger">Delete</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>18/10/2020</td>
                                        <td><img src="https://via.placeholder.com/100" class="rounded mx-auto d-block" alt="..."></td>
                                        <td>โต๊ะญี่ปุ่นสีเขียว</td>
                                        <td>175</td>
                                        <td>
                                            <div class="col">ประเภทเดี่ยว</div>
                                            <div class="col">ห้องรับแขก</div>
                                        </td>
                                        <td>30</td>
                                        <td>น้ำตาล</td>
                                        <td>โต๊ะขนาดเล็ก สีเขียว รูปแบบจากญี่ปุ่น</td>
                                        <td>
                                            <button type="button" class="btn btn-success">Edit</button>
                                        <button type="button" class="btn btn-danger">Delete</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>9/10/2020</td>
                                        <td><img src="https://via.placeholder.com/100" class="rounded mx-auto d-block" alt="..."></td>
                                        <td>เก้าอี้ไม้</td>
                                        <td>500</td>
                                        <td>
                                            <div class="col">ประเภทเดี่ยว</div>
                                            <div class="col">นอกบ้าน</div>
                                        </td>
                                        <td>27</td>
                                        <td>น้ำตาล</td>
                                        <td>เก้าที่ทำจากไม้แท้ เคลือบมันอย่างดี</td>
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
