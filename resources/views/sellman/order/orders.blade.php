
<html>
    <h1 style="text-align: center; font-size: 150%; margin-top: 30px">
    คำสั่งซื้อสินค้า
    </h1>
    <br>
    <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            table, td, th {
            border: 1px solid black;
            text-align: center;
            }

            table {
            border-collapse: collapse;
            width: 50%;
            }

            table.center {
                margin-left:auto; 
                margin-right:auto;
            }


            th {
            height: 35px;
            background-color: black;
            color: white;
            }

            tr {
                
            }

        </style>
    </head>
    <body >
        <table class = center>
            <tr>
                <th> ID ลูกค้า</th>
                <th>วันที่สั่งซื้อ</th>
                <th>หมายเลขบิล</th>
                <th>สถานะการจัดส่ง</th>
                <th>ลบ</th>
            </tr>
            <tr>
                <td>0001</td>
                <td>10-10-2563</td>
                <td>123456</td>
                <td>ส่งสำเร็จ</td>
                <td>
                    <a href="/cfdelete">
                        <i class="fa fa-trash-o" style="color: red"></i>
                    </a>
                </td>
                
            </tr>
            <tr>
                <td>0002</td>
                <td>10-10-2563</td>
                <td>123457</td>
                <td>กำลังจัดส่ง</td>
                <td>
                    <a href="/cfdelete">
                        <i class="fa fa-trash-o" style="color: red"></i>
                    </a>
                </td>
                
            </tr>
            <tr>
                <td>0003</td>
                <td>10-10-2563</td>
                <td>123458</td>
                <td>ส่งสำเร็จ</td>
                <td>
                    <a href="/cfdelete">
                        <i class="fa fa-trash-o" style="color: red"></i>
                    </a>
                </td>
            </tr>
        </table>
    </body>

</html>
