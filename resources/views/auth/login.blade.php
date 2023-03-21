<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}

    <title>BetSlipSwitch</title>
    <link rel="shortcut icon" href="/images/ball.png">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-theme2.css">
    {{-- <script>
        function callbackThen(response){
            response.json().then(function(data){
                console.log(data);
                if(data.success && data.score > 0.5){
                    console.log('Valid source' + data.score)
                }else{

                }
            })
        }
        function callbackCatch(error){
            console.log('Error' + error)
        }
    </script>
    {!! htmlScriptTagJsApi([
        "callback_then"=>"callbackThen",
        "callback_catch"=>"callbackCatch",
    ]) !!} --}}

    {!! RecaptchaV3::initJs() !!}
</head>
<body>
    <div class="form-body">
        <div class="website-logo">
            <!--<a href="/">-->
            <!--    <div class="logo">-->
            <!--        <img class="logo-size" src="images/bet_logo.png" alt="">-->
            <!--    </div>-->
            <!--</a>-->
        </div>
        <div class="row">
            <div class="img-holder">
                <div style="background-color: rgba(0, 0, 0, 0.55)!important;
                            width: 100%;
                            height: 100%;
                            margin-top: -70px;
                            margin-left: -60px;
                            position: absolute;
                            padding-top: 200px;" class="divss">
                </div>
                <div class="bg"></div>
                <div class="info-holder">

                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h2>Welcome to</h2><h3>BetSlipSwitch!</h3> 
                        <p>Login into your BetSlipSwitch Account</p>
                        <div class="page-links">
                            <a href="{{ route('login') }}" class="active">Login</a><a href="{{ route('register') }}">Register</a>
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="E-mail Address or Phone Number">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <div class='input-group'>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                                <div class="input-group-addon">
                                    <i class="far fa-eye" id="togglePassword" style="cursor: pointer;"></i>
                                </div>
                            </div>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <div class="form-button">
                                {!! RecaptchaV3::field('login') !!}
                                <button id="submit" type="submit" class="ibtn">Login</button> <a href="{{ route('password.request') }}">Forget password?</a>
                            </div>
                        </form>
                        <!--<div class="other-links">-->
                        <!--    <span>Or Login with</span><a href="#">Facebook</a><a href="{{ route('google')}}">Google</a>-->
                        <!--</div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<script>
    const togglePassword = document.querySelector('#togglePassword');
  const password = document.querySelector('#password');

  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});
</script>
</body>

</html>

