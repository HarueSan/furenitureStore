<html>
    <br>
    <head>
        <title>สรุปสินค้าสั่ง</title>
        <!-- CSS only -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

        <!-- JS, Popper.js, and jQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <meta charset="UTF-8">
    </head>
</br>
    <body>
    <div class="container" style="margin-left: 0; margin-top: 40px">
        <div class="row">
            <div class="col-2" >
                @include('menubar')
            </div>
            <div class="col">
                <div class="row">
                    <div class="col">
                    <input class="form-control" type="text" placeholder="ค้นหา" aria-label="search">
                    </div>
                    <div class="col">
                    <button class="btn btn-primary">ค้นหา</button>
                    </div>
                </div>
                <div class="row" style="margin-top: 30px;">
                        <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th>Name</th>
                                <th>ID Bill</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>US-1111</td>
                                <td>กำลังส่ง</td>
                                <td class="text-primary">ลบ</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>TH-1112</td>
                                <td>ยังไม่ได้ส่ง</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>CH-00001</td>
                                <td>ส่งสำเร็จ</td>
                                <td></td>
                            </tr>
                            </tbody>
                            </table>
                </div>
                <div class="row"  style="margin-left: auto; margin-top: 20px">
                    <button type="button" class="btn btn-primary">หน้าก่อน</button>
                    <button type="button" class="btn btn-primary">หน้าถัดไป</button>
                </div>
                </div>
            </div>
    </div>
    </body>
</html>
