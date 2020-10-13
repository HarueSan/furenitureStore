<html>
    <head>
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
                <div class="col" >
                    <div class="row">
                        <div class= "col-3">
                            <p>Bill ID: 
                                <span style="color: blue;">12345
                                </span> 
                            <p>
                            <p>Date :  
                                <span style="color: blue;">13/10/2563
                                </span>   
                            </p>
                        </div>
                        <div class="col-5">
                            <div class="form-group">
                            <label for="customername">Customer Name</label>
                                <select name="customername" id="" class="form-control">
                                    <option>Debit</option>
                                    <option>Credit</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class= "col-4">
                            <div class="form-group">
                                <label for="furniturename">Choose Furniture</label>
                                    <select name="furnitureID" id="" class="form-control">
                                        <option value="1234">1234-โต๊ะญี่ปุ่นสีเขียว</option>
                                        <option value="3456">3456-โต๊ะพับ</option>
                                    </select>
                            </div>
                        </div>
                        <div class= "col-2">
                            <div class="form-group">
                                <label for="quantity">Quantity</label>
                                <input type="number" name="quantity" id="" class="form-control">
                            </div>
                        </div>
                        <div class= "col-3">
                            <button type="button" class="btn btn-success">Add</button>
                        </div>
                    </div>
                    <div class="row">  
                            <div class="">
                                <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>No</th>
                                        <th>ID สินค้า</th> 
                                        <th>ชื่อสินค้า</th>
                                        <th>ราคาต่อชิ้น</th>
                                        <th>จำนวนที่ซื้อ</th>
                                        <th>ราคารวม</th>
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
                                        <td class="text-primary">ลบ</td>

                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>TB-10002</td>
                                        <td>โต๊ะญี่ปุ่นสีเขียว</td>
                                        <td>175</td>
                                        <td>1</td>
                                        <td>175</td>
                                        <td class="text-primary">ลบ</td>

                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>CH-00001</td>
                                        <td>เก้าอี้ไม้</td>
                                        <td>500</td>
                                        <td>1</td>
                                        <td>500</td>
                                        <td class="text-primary">ลบ</td>

                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                    </div>  
                </div>
                <div class="col col-lg-2">
                    <div>
                        <h3 style="font-size: large;">สรุปยอด</h3>
                        <p>ราคาสินค้ารวม: 475 บาท</p>
                        <p>ราคาส่งสินค้า: 300 บาท</p>
                        <p style="color: blue">ยอดชำระสินค้าทั้งหมด: 775 บาท</p>
                    </div>
                    <div>
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
        </div>
        
    </body>

</html>