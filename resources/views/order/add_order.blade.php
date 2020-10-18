<html>
    <head>
        <!-- CSS only -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

        <!-- JS, Popper.js, and jQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <meta charset="UTF-8">

    </head>

    <body>
        {{-- <?php
            print_r($furnitures);
        ?> --}}
        <div class="container" style="margin-left: 0; margin-top: 40px">
            <div class="row">
                <div class="col-2" >
                    @include('menubar')
                </div>
                <div class="col" >
                    
                    <form method="post" action="/addHeadbill">
                        @csrf
                        <div class="row">
                            <div class="col-5">
                                <div class="form-group">
                                <label for="customername">Customer Name</label>
                                    <select name="customer_id" id="" class="form-control">
                                        @foreach ($customers as $customer)
                                        <option value="{{$customer->id}}">{{$customer->id}} - {{$customer->fname}} {{$customer->lname}}</option>   
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-5">
                                <button type="submit" class="btn btn-success">save</button>
                            </div>
                        </div>
                    </form>
                </div>
               
            </div>
        </div>

    </body>

</html>
