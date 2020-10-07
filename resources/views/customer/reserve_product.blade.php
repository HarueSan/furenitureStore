<html>
        <h1 style="font-family:Angsana New">
    รายการที่สั่งจองสินค้า    หมายเลขบิล  วันที่สั่งซื้อ
    </h1>
    <head>
    <style>
        table, th, td{
            border: 1px solid black;
            border-collapse: collapse;
        }
        th,td{
            padding: 5px;
            text-align: left;
        }
        .progress-container{
            width: 100%;
            height: 8px;
            background: #ccc;
        }
        .progress-bar {
            height: 8px;
            background: #4caf50;
            width: 0%;
        }
    </style>
    </head>
    <body>
        <table>
            <div class="progress-container">
                <div class="progress-bar" id="myBar">
                </div>
            </div>
            <tr>
                <td>1</td>
                <td>
                    <img src="D:\งานคอมฯ\CS Project\year3project\รูปประกอบ\Buying-Furniture-Online-in-2020.jpg" style="width:128px;height:128px;">
                    ชื่อสินค้า
                <n>ราคา</n>
                <n>จำนวนที่ซื้อ</n>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>
                <img src="D:\งานคอมฯ\CS Project\year3project\รูปประกอบ\FurnitureGateway_04_modular.jpg" style="width:128px;height:128px;">
                ชื่อสินค้า</img>
                <n>ราคา</n>
                <n>จำนวนที่ซื้อ</n>
            </td>
            </tr>
            <tr>
                <td>รวมราคาการสั่งซื้อ..........................บาท
    <n>ราคาการจัดซื้อ.........................................บาท</n>
    <n>ยอดชำระเงินทั้งหมด....................................บาท</n>
                </td>
            </tr>
            <script>
                window.onscroll = function() {myfunction()};

                function myfunction(){
                    var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
                    var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
                    var scrolled = (winScroll / height) * 100;
                    document.getElementById("myBar").style.width = scrolled + "%";
                }
            </script>
        </table>
    </body>
    <body>
        <div class="boxContainer">
            <a href="">
        </div>
    </body>
</html>
