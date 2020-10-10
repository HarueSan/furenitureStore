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
    .info {background-color: #2196F3;} /* Blue */
    .info:hover {background: #0b7dda;}
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
    $image_url='https://img.bpicc.com/file/BP2520/2020/10/11/20201011_000926.jpg'
    ?>
    <div class="row">
        <div class="column"> <div align="center">
            <img src="<?php echo $image_url;?>" alt="Snow" style="width:400%">
        </div>
    </div>
</body>
</html>