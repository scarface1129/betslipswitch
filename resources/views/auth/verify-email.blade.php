<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BetSlipSwitch</title>
    <link rel="shortcut icon" href="/images/ball.png">
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
                        <h2>Verify Your Email</h2>
                        <p>A new verification link has been sent to the email address you provided
                        </p>
                        @if(session()->has('message'))
                        <p style='color:red;'>{{ session('message') }}</p>
                        @endif
                        <form method="POST" action="{{ route('verify') }}">
                            @csrf
                            <input id="" type="text" class="form-control" name="code" required autocomplete="code" autofocus placeholder="verification code">                          
                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn">Verify</button> 
                            </div>
                        </form>
                        
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

