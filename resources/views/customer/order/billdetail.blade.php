<html>
    <head>
        <style>

            .flex-containner {
                display: flex;
                flex-direction: row;
                margin-left: 30px;
            }
             
            table, td, th {
            border: 1px solid black;
            text-align: center;
            }

            table {
            border-collapse: collapse;
            width: 100%;
            
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

    <body>
        <header style="margin-left: 30px; margin-top: 30px">
            <h1>รายละเอียดคำสั่งซื้อสินค้า</h1>
            <h2>หมายเลขบิล :
                <span style="color: blue;">12345</span> 
            </h2>
        </header>
        <br>

            <div class="flex-containner">  
                <div>
                    <table>
                        <tr>
                            <th>ลำดับที่</th>
                            <th>หมายเลขสินค้า</th> 
                            <th>ชื่อสินค้า</th>
                            <th>ราคาต่อชิ้น</th>
                            <th>จำนวนที่ซื้อ</th>
                            <th>ราคารวม</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>TB-10001</td>
                            <td>โต๊ะพับ</td>
                            <td>150</td>
                            <td>2</td>
                            <td>300</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>TB-10002</td>
                            <td>โต๊ะญี่ปุ่นสีเขียว</td>
                            <td>175</td>
                            <td>1</td>
                            <td>175</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>CH-00001</td>
                            <td>เก้าอี้ไม้</td>
                            <td>500</td>
                            <td>1</td>
                            <td>500</td>
                        </tr>
                    </table>
                </div>
                <div style="padding-left: 50px">
                    <p>ราคาสินค้ารวม: 475 บาท</p>
                    <p>ราคาส่งสินค้า: 300 บาท</p>
                    <p style="color: blue">ยอดชำระสินค้าทั้งหมด: 775 บาท</p>
                    <p>วิธีการชำระเงิน: เครดิต</p>
                
                </div>
                
            </div>  
    </body>



    
    

</html>