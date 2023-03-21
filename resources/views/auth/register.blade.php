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
    {!! RecaptchaV3::initJs() !!}

</head>
<body>
    <div class="form-body">
        <div class="website-logo">
            <a href="index.html">
                <div class="logo">
                    <img class="logo-size" src="images/logo-light.svg" alt="">
                </div>
            </a>
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
                        <h2>Join Us.</h2>
                        <p>Please provide your details to register.</p>
                        <div class="page-links">
                            <a href="{{ route('login') }}">Login</a><a href="{{ route('register') }}" class="active">Register</a>
                        </div>
                        
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                                
                            <input class="form-control @error('name') is-invalid @enderror" type="text" value="{{ old('name') }}" name="name" placeholder="Username" required>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                  
                            <input id="email" class="form-control @error('email') is-invalid @enderror" type="email" value="{{ old('email') }}" name="email" placeholder="E-mail Address" required>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror 
                            <input class="form-control @error('phone') is-invalid @enderror" type="text" name="phone" value="{{ old('phone') }}" placeholder="Phone Number">
                               
                                @error('phone')
                                    <span  class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <div class='input-group'>
                                <input id="password" class="form-control @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password" required>
                                
                                <div class="input-group-addon">
                                    <i class="far fa-eye" id="togglePassword" style="cursor: pointer;"></i>
                                </div>
                            </div>
                            
                                @error('password')
                                    <span  class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            {{-- <input class="form-control" id="password-confirm" type="password" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password"> --}}
                              
                            <div class="form-button">
                                {!! RecaptchaV3::field('register') !!}
                                <button id="submit" type="submit" class="ibtn">Register</button>
                            </div>
                        </form>
                        <!--<div class="other-links">-->
                        <!--    <span>Or register with</span><a href="{{ route('facebook')}}">Facebook</a><a href="{{ route('google')}}">Google</a>-->
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