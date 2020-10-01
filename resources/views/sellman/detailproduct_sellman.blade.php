<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Product</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <style>
    * {
    box-sizing: border-box;
    }
    .column {
       float: left;
        width: 25%;
        padding: 5px;
    }
    .row::after {
        content: "";
        clear: both;
        display: table;
    }
    .btn {
        border: none; /* Remove borders */
        color: white; /* Add a text color */
        padding: 14px 28px; /* Add some padding */
        cursor: pointer; /* Add a pointer cursor on mouse-over */
    }
    .success {background-color: #4CAF50;} /* Green */
    .success:hover {background-color: #46a049;}
    .danger {background-color: #f44336;} /* Red */
    .danger:hover {background: #da190b;}
    body {margin:0;}

    .icon-bar {
        width: 100%;
        background-color: #555;
        overflow: auto;
    }

    .icon-bar a {
        float: left;
        width: 20%;
        text-align: center;
        padding: 10px 0;
        transition: all 0.3s ease;
        color: white;
        font-size: 16px;
    }

    .icon-bar a:hover {
        background-color: #000;
    }

    .active {
        background-color: #555;
    }
    </style>
</head>
<body>
<br>
        <div class="topnav"></h1>
            <div class="w3-left w3-hide-small"></div>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text"  id="t1" size="100" maxlength="50"placeholder="     ค้นหาสินค้า" style="height:35px;">
            &nbsp;&nbsp;&nbsp; <input type="submit" name="Submit" value="ค้นหา">
            </div><br>
        </div>
    <div class="icon-bar">
        <a class="active" href="register"><i class="previous round">หมวดสินค้า</i></a>
        <a class="active" href="register"><i class="previous round">การจองสินค้า</i></a>
        <a class="active" href="register"><i class="previous round">การจัดส่งสินค้า</i></a>
        <a class="active" href="register"><i class="previous round">คำสั่งซื้อ</i></a>
        <a class="active" href="register"><i class="previous round">ข้อมูลผู้ซื้อ</i></a>
    </div><br>
    <?php
    $image_url='https://media.fds.fi/product_image/800/1Hay-AAC22-MV1.jpg';
    ?>
    <div class="row">
        <div class="column">
            <img src="<?php echo $image_url;?>" alt="Snow" style="width:100%">
        </div>
        <div class="column">
            <label for="pdname" class="form-label" style="width:50%" >ชื่อสินค้า : </label>
            <input type="pdname" class="form-control" id="pdname" name="pdname">
            <label for="pdid" class="form-label" style="width:50%" >IDสินค้า : </label>
            <input type="pdid" class="form-control" id="pdid" name="pdid">
            <label for="pdprice" class="form-label" style="width:50%" >ราคา :</label>
            <input type="pdprice" class="form-control" id="pdprice" name="pdprice">
            <label for="pddescription" class="form-label" style="width:50%" >คำอธิบายสินค้า :</label>
            <input type="pddescription" class="form-control" id="pddescription" name="pddescription">
            <div class="mb-3">
                <label for="pdquantity" class="form-label" style="width:50%" >สินค้าคงเหลือ :</label>
                <input type="pdquantity" class="form-control" id="pdquantity" name="pdquantity">
            </div>
            <button class="btn success" style="width:100%">ยืนยันการเปลี่ยนแปลง</button>
        </div>
        <div class="column"></div>
        <div class="column">
            <button class="btn danger" style="width:50%">ลบสินค้า</button>
        </div>
    </div>
</body>
</html>
