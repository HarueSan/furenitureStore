<html>
    <br>
    <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<<<<<<< HEAD

=======
>>>>>>> 8f7de740e49a20cfc0d0190978e13e7246468eb6
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
                            <p>Name</p>
                        </div>
                        <div class="col-6">
                            <input type="text" class="form-control" placeholder="โต๊ะพับ" aria-label="Name input" aria-describedby="inputGroup-sizing-default">
                        </div>
                    </div>
                    <div class="row" style="margin-top: 20px">
                        <div class="col-2">
                            <p>Price</p>
                        </div>
                        <div class="col-6">
                            <div class="input-group">
                            <input type="float" class="form-control" placeholder="150" aria-label="Baht price">
                                <div class="input-group-append">
                                    <span class="input-group-text">Baht</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 20px">
                        <div class="col-2">
                            <p>Type</p>
                        </div>
                        <div class="col-3">
                            <select name="furnitureType1" id="" class="form-control">
                                <option selected>ประเภท...</option>
                                <option value="1234">ประเภทเดี่ยว</option>
                                <option value="3456">ประเภทชุด</option>
                            </select>
                        </div>
                        <div class="col-3">
                            <select name="furnitureType2" id="" class="form-control">
                                <option selected>ห้อง...</option>
                                <option value="1234">ห้องครัว</option>
                                <option value="3456">ห้องน้ำ</option>
                                <option value="3456">ห้องนอน</option>
                                <option value="3456">ห้องรับแขก</option>
                                <option value="3456">ห้องนั่งเล่น</option>
                                <option value="3456">นอกบ้าน</option>
                            </select>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 20px">
                        <div class="col-2">
                            <p>Description</p>
                        </div>
                        <div class="col-6">
                        <textarea class="form-control" placeholder="โต๊ะที่สามารถพับเก็บได้" aria-label="Description"></textarea>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 20px">
                        <div class="col-2">
                            <p>Picture</p>
                        </div>
                        <div class="col-6">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="https://www..." aria-label="linkPicture" aria-describedby="button-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn btn-success" type="add" id="button-addon2">Add</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 20px">
                        <div class="col-2">
                            <img src="https://via.placeholder.com/125" class="rounded mx-auto d-block" alt="...">
                        </div>
                        <div class="col-2">
                            <img src="https://via.placeholder.com/125" class="rounded mx-auto d-block" alt="...">
                        </div>
                        <div class="col-2">
                            <img src="https://via.placeholder.com/125" class="rounded mx-auto d-block" alt="...">
                        </div>
                        <div class="col-2">
                            <img src="https://via.placeholder.com/125" class="rounded mx-auto d-block" alt="...">
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
<<<<<<< HEAD
</html>
=======
</html>
>>>>>>> 8f7de740e49a20cfc0d0190978e13e7246468eb6
