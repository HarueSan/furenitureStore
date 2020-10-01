<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Information</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <style>
    body {margin:0;}

    .icon-bar {
        width: 100%;
        background-color: #555;
        overflow: auto;
    }

    .icon-bar a {
        float: left;
        width: 10%;
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
        background-color: #56a1cc;
    }
    </style>
</head>
<body>
<div class="icon-bar">
  <a class="active" href="cusinformation"><i class="previous round">BACK</i></a>

</div>
    <div class="container">
        <h1 class="mt-5">Information</h1>
        <form method="post">
            <div class="mb-3">
                <label for="username" class="form-label">ชื่อผู้ใช้ / Username</label>
                <input type="username" class="form-control" id="username" name="username">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">รหัสผ่าน</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="mb-3">
                <label for="confirmpassword" class="form-label">ยืนยันรหัสผ่าน</label>
                <input type="confirmpassword" class="form-control" id="confirmpassword" name="confirmpassword">
            </div>
            <div class="mb-3">
                <label for="telnumber" class="form-label">หมายเลขโทรศัพท์</label>
                <input type="telnumber" class="form-control" id="telnumber" name="telnumber">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">อีเมล</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="mb-4">
                <label for="address" class="form-label">ที่อยู่</label>
                <input type="address" class="form-control" id="address" name="address">
            </div>
            <div class="mb-4">
                <h3 class="mt-3">ช่องทางการชำระเงิน</h3>
            </div>
            <div class="mb-3">
                <label for="namecard" class="form-label">ชื่อบนบัตรประชาชน</label>
                <input type="namecard" class="form-control" id="namecard" name="namecard">
            </div>
            <div class="mb-3">
                <label for="idcard" class="form-label">หมายเลขบัตรประชาชน</label>
                <input type="idcard" class="form-control" id="idcards" name="idcard">
            </div>
            <div class="mb-3">
                <label for="typecard" class="form-label">ประเภทบัตร</label>
                <input type="typecard" class="form-control" id="typecard" name="typecard">
            </div>
            <div class="mb-3">
                <label for="exdatecard" class="form-label">วันหมดอายุ</label>
                <input type="exdatecard" class="form-control" id="exdatecard" name="exdatecard">
            </div>
            <div class="mb-3">
                <label for="cvv" class="form-label">CVV</label>
                <input type="cvv" class="form-control" id="cvv" name="cvv">
            </div>
            <a href="cusinformation" class="btn btn-success">Confirm</a>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>
