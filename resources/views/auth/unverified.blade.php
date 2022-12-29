<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BetSlipSwitch</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-theme2.css">
</head>
<body>
    <div class="form-body">
        <div class="website-logo">
            <a href="index.html">
                <div class="logo">
                    <img class="logo-size" src="images/bet_logo.png" alt="">
                </div>
            </a>
        </div>
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">

                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        @if(session()->has('message1'))
                        <h2>{{session('message1')}}</h2>
                        <p>{{session('message2')}}</p>
                        
                        
                        <form method="post" action="{{ route('resendEmail') }}">
                            @csrf
                            <input id="" type="email" class="form-control" hidden name="email"  value="{{session('email')}}" required autocomplete="email" autofocus>                          
                            <input id="" type="text" class="form-control" hidden name="code" value="{{session('code')}}" required autocomplete="code" autofocus>                          
                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn">Verify Email</button> 
                            </div>
                        </form>
                        
                        @endif
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>

</html>

