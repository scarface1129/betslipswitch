<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BetSlipSwitch</title>
    <link rel="shortcut icon" href="/images/ball.png">
    <link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="../../css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="../../css/iofrm-theme2.css">
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
                        <h3>Password Reset</h3>
                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf
                            <input type="hidden" name="token" value="{{ $token }}">

                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus placeholder="E-mail Address">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
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
                            
                            <input class="form-control" id="password-confirm" type="password" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
                            <div class="form-button full-width">
                                <button id="submit" type="submit" class="ibtn btn-forget">Reset Password</button>
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/jquery.min.js"></script>
<script src="../../js/popper.min.js"></script>
<script src="../../js/bootstrap.min.js"></script>
<script src="../../js/main.js"></script>
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
