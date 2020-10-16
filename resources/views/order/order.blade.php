
<html>
    <br>
    <head>
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
                            <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                        </div>
                        <div class="col mt-3">
                            <button class="btn btn-primary">Add New</button>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 30px;">  
                            <div class="">
                                <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>No</th>
                                        <th>ID Bill</th> 
                                        <th>วันที่</th>
                                        <th>จำนวนสินค้ารวม</th>
                                        <th>ราคารวม</th>
                                        <th>วิธีชำระเงิน</th>
                                        <th>action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>TB-10001</td>
                                        <td>โต๊ะพับ</td>
                                        <td>150</td>
                                        <td>2</td>
                                        <td>300</td>
                                        <td class="text-danger">ลบ</td>

                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>TB-10002</td>
                                        <td>โต๊ะญี่ปุ่นสีเขียว</td>
                                        <td>175</td>
                                        <td>1</td>
                                        <td>175</td>
                                        <td class="text-danger">ลบ</td>

                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>CH-00001</td>
                                        <td>เก้าอี้ไม้</td>
                                        <td>500</td>
                                        <td>1</td>
                                        <td>500</td>
                                        <td class="text-danger">ลบ</td>

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
