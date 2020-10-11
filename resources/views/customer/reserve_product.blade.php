<html>
    <head>
         <!-- CSS only -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

        <!-- JS, Popper.js, and jQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <meta charset="UTF-8">

    </head>

    <body>
        <div class="container mt-4">
            <div>
                <h2>รายการสั่งจองสินค้า</h2>
                <h3>หมายเลขบิล :
                    <span style="color: blue;">12345</span> 
                </h3>
                <h3>วันที่สั่งซื้อ : 
                    <span style="color: blue;">11/09/2020</span> 
                </h3>
            </div>
            <div class="row mt-1">  
                    <div class="col-9">
                        <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th>ลำดับที่</th> 
                                <th>รูปสินค้า</th>
                                <th>ชื่อสินค้า</th>
                                <th>ราคาต่อชิ้น</th>
                                <th>จำนวนที่ซื้อ</th>
                                <th>ราคารวม</th>
                                <th>ลบ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><img src="https://via.placeholder.com/100" class="img-thumbnail"></td>
                                <td>โต๊ะพับ</td>
                                <td>150</td>
                                <td>2</td>
                                <td>300</td>
                                <td>
                                    <a href="/cfdelete">
                                        <i class="fa fa-trash-o" style="color: red"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><img src="https://via.placeholder.com/100" class="img-thumbnail"></td>
                                <td>โต๊ะญี่ปุ่นสีเขียว</td>
                                <td>175</td>
                                <td>1</td>
                                <td>175</td>
                                <td>
                                    <a href="/cfdelete">
                                        <i class="fa fa-trash-o" style="color: red"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td><img src="https://via.placeholder.com/100" class="img-thumbnail"></td>
                                <td>เก้าอี้ไม้</td>
                                <td>500</td>
                                <td>1</td>
                                <td>500</td>
                                <td>
                                    <a href="/cfdelete">
                                        <i class="fa fa-trash-o" style="color: red"></i>
                                    </a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col">


                        <p>ราคาสินค้ารวม: 475 บาท</p>
                        <p>ราคาส่งสินค้า: 300 บาท</p>
                        <p style="color: blue">ยอดชำระสินค้าทั้งหมด: 775 บาท</p>                    

                        <form>
                            <div class="form-group">
                                <label for="paymentmethod">วิธีการชำระเงิน</label>
                                <select name="paymentmethod" id="" class="form-control">
                                    <option>Debit</option>
                                    <option>Credit</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="downpayment">ผ่อนชำระเงิน</label>
                                <select name="downpayment" id="" class="form-control">
                                    <option>0 </option>
                                    <option>3 </option>
                                    <option>6 </option>
                                    <option>9 </option>
                                </select>
                            </div>

                            <div class="form-group">
                                <button class="btn btn-primary">ยืนยันการชำระเงิน</button>
                            </div>

                        </form>

                        
                    </div>   
                </div>  
        </div>   
    </body>

</html>