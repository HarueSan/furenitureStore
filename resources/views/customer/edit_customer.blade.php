<!DOCTYPE html>
<html lang="en">
<html>
    <br>
    <head>
    <title>Edit Customer</title>
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
                        <div class="col-2">
                            <p>First Name</p>
                        </div>
                        <div class="col-6">
                            <input type="text" class="form-control" placeholder="ขวัญจิรา" aria-label="Name input" aria-describedby="inputGroup-sizing-default">
                        </div>
                    </div>
                    <div class="row" style="margin-top: 20px">
                        <div class="col-2">
                            <p>First Name</p>
                        </div>
                        <div class="col-6">
                            <input type="text" class="form-control" placeholder="กาเกตุ" aria-label="Name input" aria-describedby="inputGroup-sizing-default">
                        </div>
                    </div>
                    <div class="row" style="margin-top: 20px">
                        <div class="col-2">
                            <p>Tel</p>
                        </div>
                        <div class="col-6">
                            <input type="number" class="form-control" placeholder="081-111-1111" aria-label="Name input" aria-describedby="inputGroup-sizing-default">
                        </div>
                    </div>
                    <div class="row" style="margin-top: 20px">
                        <div class="col-2">
                            <p>Address</p>
                        </div>
                        <div class="col-6">
                        <textarea class="form-control" placeholder="อำเภอดอยสะเก็ด จังหวัดเชียงใหม่" aria-label="address1"></textarea>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 20px">
                        <div class="col-2">
                            <p>Email</p>
                        </div>
                        <div class="col-6">
                            <input type="float" class="form-control" placeholder="kwan@gmail.com" aria-label="Name input" aria-describedby="inputGroup-sizing-default">
                        </div>
                    </div>
                    <div class="row" style="margin-left: 10%; margin-top: 20px">
                        <div class="col" style=" text-align: center;">
                            <button type="button" class="btn btn-warning">Cancle</button>
                            <button type="button" class="btn btn-dark" style="margin-left: 30px;">Update</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
