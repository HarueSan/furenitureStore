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
    <title>แก้ไขสถานะการจัดส่ง</title>
    <body>
        <!-- <?php print_r($delistatus);?> -->

        <div class="container" style="margin-left: 0; margin-top: 40px">
            <div class="row">
                <div class="col-2">
                    @include('menubar')
                </div>
                <div class="col">
                    <div class="row">
                        <h2>แก้ไขสถานะการจัดส่งของ</h2>
                    </div>
                    <div class="row" style="margin-top: 20px">
                        <div class="col-2">
                            <p>ID Bill: {{$bill->id}}</p>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 20px">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputDeliStatus">แก้สถานะการจัดส่ง</label>
                                </div>
                            </div>
                        <div class="col-sm-10">
                        <form method="post" action="/updatestatus/{{$bill->id}}">
                            @csrf
                            <div class="form-group">
                                <select name="delistatus_id" id="" class="form-control" >
                                    <option selected>-- โปรดเลือก --</option>
                                    @foreach ($delistatus as $delistatus)
                                    <option value="{{$delistatus->id}}">{{$delistatus->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class= "row">
                                <div class="col">
                                    <a href="/delivery" type="button" class="btn btn-dark">ยกเลิก</a>
                                    <button type="submit" class="btn btn-success">Update</button>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
    </body>
</html>
