<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Jekyll v3.8.6">
        <title>Wallnote</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">


        <style>
        /* .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        } */

        body{
            background-image : url('img/bgrnd.jpg');
            background-repeat : no-repeat;
            background-size: 1400px 768px;
                }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
            font-size: 3.5rem;
            }
        }

        /* .container{
        border:20px solid rgba(0,0,0,.5);
        width: 450px;
        height: 200px;
        background: #fff0b3;
        position: fixed;
        top: 50%;
        left: 50%;
        margin-top: -290px;
        margin-left: -250px;
        text-align: center;
        display: table;
        } */

        </style>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">


                <h2>Contact Us</h2>
                <p>Have any question or feedback?</p>

                @if(Session::has('status'))
                <div class="alert alert-success">{{ Session::get('status') }}</div>
                @endif

                <form action="" method="post">

                    {{ csrf_field() }}
                <div class="row">
                    <label for="name">Name</label>
                    <input class="form-control" type="text" name="name" placeholder="you name" />
                </div>
                
                <div class="row">
                    <label for="email">Email</label>
                    <input class="form-control" type="email" name="email" placeholder="you email address" />
                </div>  
                <div class="row mt-2">
                    <label for="message">Message</label>
                    <textarea class="form-control" name="message" id="" placeholder="your message" cols="30" rows="10"></textarea>
                </div>
                    <br><br>

                    <button class="btn btn-success btn-block">Send</button>
                <form>
            
            </div>
        </div>
    </div>
    
</body>
</html>