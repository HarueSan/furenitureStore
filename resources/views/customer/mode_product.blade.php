<html>
<title>หมวดสินค้าที่ค้นพบ</title>
<h1 style="text-align: center; font-size: 150%; margin-top: 30px">
    หมวดสินค้าที่ได้
</h1>
<head>
    <style>
        .boxcontainer{
            margin: auto;
            margin-top: auto;
            position:left;
            width: 600px;
            height: 50px;
            border: 2px solid #2980b9;
            padding: 0px 10px;
            border-radius: 50px;
            text-align: left;
        }
        table th, td{
            border: 1px solid black;
            border-collapse: collapse;
        }
        .elementsContainer{
            width: 100%;
            height: 100%;
            vertical-align:baseline;
            text-align: left;
        }
        .search{
            border: none;
            height: 100%;
            padding: 0px 5px;
            border-radius: 50px;
            font-size: 18px;
            font-family: Arial;
            color: #424242;
            font-weight: 500;
        }
        .search:focus{
            outline: none;
        }
        .material-icons{
            font-size: 25;
            color:#2980b9;
        }
        </style>
</head>
    <div class="container">
    @if(isset($details))
        <p> The Search results for your query <b> {{ $query }} </b> are :</p>
    <h2>Sample User details</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach($details as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>
<body>
    <div class="boxContainer" text-align="left">
        <table class="elementsContainer">
            <tr>
                <td>
                    <input type="text" placeholder="ค้นหาหมวดสินค้า"
                    class="search">
                    <a href="#"><i class="material-icons">search</i>
                    </a>
                </td>
            </tr>
        </table>
    </div>
</body>
<body>
    <table>
        <tr>
            <th>หมวดสินค้า</th>
            <th>การจองสินค้า</th>
            <th>การจัดส่งสินค้า</th>
            <th>คำสั่งซื้อ</th>
        </tr>
    </table>
</body>
<body>
    <div class="container">

    </div>
</body>
</html>
