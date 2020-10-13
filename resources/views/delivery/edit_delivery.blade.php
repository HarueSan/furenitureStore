<!DOCTYPE html>
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
    <body>
        <div class="container" style="margin-left: 0; margin-top: 40px">
            <div class="row">
                <div class="col-2" >
                    @include('menubar')
                </div>
                <div class="col">
                    <div class="row">
                        <h2>Delivery List</h2>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="status">Status</label>
                                <select name="customername" id="" class="form-control">
                                    <option>กำลังส่ง</option>
                                    <option>ยังไม่ได้ส่ง</option>
                                    <option>ส่งสำเร็จ</option>
                                    <option>ล้มเหลว</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <div>
                            <button type="button" class="btn btn-warning">Cancel</button>
                            <button type="button" class="btn btn-dark ml-3">Update</button>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 30px;">
                            <div class="">
                                <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>ID Bill</th>
                                        <th>Product</th>
                                        <th>Address</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>US-1111</td>
                                        <td>20378, Fort Worth, Texas, USA</td>
                                        <td>กำลังส่ง</td>
                                        <td>
                                        <button type="button" class="btn btn-success">Edit</button>.
                                        <button type="button" class="btn btn-danger">Delete</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>TH-1112</td>
                                        <td>1111 สาทร 39 กรุงเทพมหานคร</td>
                                        <td>ยังไม่ได้ส่ง</td>
                                        <td>
                                            <button type="button" class="btn btn-success">Edit</button>.
                                            <button type="button" class="btn btn-danger">Delete</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>KR-00001</td>
                                        <td>213, Jongno-gu, Seoul, Republic of Korea</td>
                                        <td>ส่งสำเร็จ</td>
                                        <td>
                                            <button type="button" class="btn btn-success">Edit</button>.
                                            <button type="button" class="btn btn-danger">Delete</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>JP-0001</td>
                                        <td>1039, Saitama Perfecture, Japan</td>
                                        <td>ล้มเหลว</td>
                                        <td>
                                            <button type="button" class="btn btn-success">Edit</button>.
                                            <button type="button" class="btn btn-danger">Delete</button>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                    </div>
                </div>
                <div class="col-2">
                    <div>
                        <h3 style="font-size: large;">สรุปยอด</h3>
                        <p>ราคาสินค้ารวม: 475 บาท</p>
                        <p>ราคาส่งสินค้า: 300 บาท</p>
                        <p style="color: blue">ยอดชำระสินค้าทั้งหมด: 775 บาท</p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
