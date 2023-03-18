<!DOCTYPE html>
<?php

// die();
?>
<html lang="zxx">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>BetSlipSwitch</title>
<link rel="shortcut icon" href="/images/ball.png">


    <!-- Loading Bootstrap -->

    <link href="css/bootstrap2.min.css" rel="stylesheet">

    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Loading Template CSS -->

    <link href="css/style.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/master.css" rel="stylesheet">
    {{-- <link href="css/widgets.css" rel="stylesheet"> --}}

    <link rel="stylesheet" href="css/pe-icon-7-stroke.css">
   

    <link href="css/style-magnific-popup.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-theme2.css">

    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Awsome Fonts -->

    <link rel="stylesheet" href="css/all.min.css">

    <link  href="css/stylesheet.css" rel="stylesheet">
    <style>
    @media(min-width: 992px){
        .col-md-6 {
    margin-top: 135px;
}
    }
        @media (max-width: 479px) {
    ul.utf-download-text1 li a img {
    	float: left;
        width: 3em;
    	margin-top: 0px;
    	/* padding-right: 10px; */
    }
    .float-left{
        font-size:10px;
    }
    .float-right{
        font-size:10px;
    }
    
    
    
}

/* Tooltip text */
.tooltip .tooltiptext {
  visibility: hidden;
  width: 120px;
  background-color: #555;
  color: #fff;
  text-align: center;
  padding: 5px 0;
  border-radius: 6px;

  /* Position the tooltip text */
  position: absolute;
  z-index: 1;
  bottom: 125%;
  left: 50%;
  margin-left: -60px;

  /* Fade in tooltip */
  opacity: 0;
  transition: opacity 0.3s;
}

/* Tooltip arrow */
.tooltip .tooltiptext::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}

/* Show the tooltip text when you mouse over the tooltip container */
.tooltip:hover .tooltiptext {
  visibility: visible;
  opacity: 1;
}
    </style>

    <!-- Fonts -->

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i&amp;display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500&amp;display=swap" rel="stylesheet">



    <!-- Font Favicon -->

    <link rel="shortcut icon" href="images/favicon.ico">



</head>



<body>



    <!--begin header -->

    <header class="header">



        <!--begin navbar-fixed-top -->

        <nav class="navbar navbar-default navbar-fixed-top">



            <!--begin container -->

            <div class="container">



                <!--begin navbar -->

                <nav class="navbar navbar-expand-lg">



                    <!--begin logo -->

                    <a class="navbar-brand" href="/">
                        <img src="images/bet_logo.png" style="width: 123px;height: auto; margin-bottom: -17px;margin-top: 0px;" alt="logo" title="logo"> <span></span>
                    </a>

                    <!--end logo -->



                    <!--begin navbar-toggler -->

                    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">

                        <span class="navbar-toggler-icon"></i></span>

                    </button>

                    <!--end navbar-toggler -->



                    <!--begin navbar-collapse -->

                    <div class="navbar-collapse collapse" id="navbarCollapse">



                        <!--begin navbar-nav -->

                        <ul class="navbar-nav ml-auto">
                            @auth
                            <li class="mt-3"><a href="{{route('converter')}}">Converter</a></li>

                            @if(Auth::user()->is_admin)
                            <li>
                                <button class="btn btn-primary p-2 mt-4" onclick="event.preventDefault(); document.getElementById('bookies').submit();">
                                    Update Bookies
                                </button>
                            </li>
                            @endif
                            @endauth
                            <form id="bookies" action="{{ route('store_bookies') }}" method="POST" class="d-none">
                                @csrf
                            </form>

                            <li class="dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name ?? 'Guest'}}  <i class="fa fa-user fa-1x"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <p class="dropdown-item" style="font-size:13px;"><i class="fa fa-envelope"></i>: <?= Auth::user()->email ?? 'No email address'?>
                                    <p class="dropdown-item" style="font-size:13px;"><i class="fa fa-phone"></i>:  <?= Auth::user()->phone ?? 'No Phone Number'?></p>
                                    @if(Auth::user())
                                    <p class="dropdown-item">
                                        <a  href="{{ route('logout') }}" style="font-size:13px;" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            <img style="width: 20px; height: 20px;" src="images/sports/logout.png" alt="Logout"/>: 
                                            Logout
                                        </a>
                                    </p>
                                    <p data-toggle="modal" data-target="#UpdateProfile" style="cursor: pointer;" class="dropdown-item" style="font-size:13px;"><i class="fa fa-user"></i>:Update Profile </p>
                                    
                                    <p data-toggle="modal" data-target="#ChangePassword" style="cursor: pointer;" class="dropdown-item" style="font-size:13px;"><i class="fa fa-edit" aria-hidden="true"></i>:  Change Password</p>
                                    @else
                                    <p class="dropdown-item">
                                        <a  href="{{ route('register') }}" style="font-size:13px;" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            <img style="width: 20px; height: 20px;" src="images/sports/logout.png" alt="Register"/>: 
                                            Register
                                        </a>
                                    </p>
                                    @endif
                                </div>
                            </li>
                        </ul>
                        <!--end navbar-nav -->
                    </div>
                    <!--end navbar-collapse -->
                </nav>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                <!--end navbar -->
            </div>
            <!--end container -->
        </nav>
        <!--end navbar-fixed-top -->
    </header>
    <!--end header -->
    <!--begin home section -->

    <section class="section-white section-bottom-border" id="about">

        <!--begin container -->
        <div class="container">

            <!--begin row -->
            <div class="row">

                <!--begin col-md-12 -->
                <div class="col-md-12 text-center">

                    <h2 class="section-title">CONVERSION HISTORY</h2>

                    <p class="section-subtitle">Track your previous conversions</p>
                    
                </div>
                <!--end col-md-12 -->

            </div>
            <!--end row -->

        </div>
        <!--end container -->

        <!--begin process-wrapper -->
        <div class="process-wrapper">

            <!--begin container -->
            <div class="container">

                <!--begin row -->
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="process" style="text-align: left;">
                            <p style='line-height:10px;'>Code From:</p>
                            <p style='line-height:10px;'>Code To:</p>
                            <p style='line-height:10px;'>Code Converted:</p>
                            <p style='line-height:10px;'>Status:</p>
                            <p style='line-height:10px;'>Date:</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="process" style="text-align: left;">
                            <p style='line-height:10px;'>Code From:</p>
                            <p style='line-height:10px;'>Code To:</p>
                            <p style='line-height:10px;'>Code Converted:</p>
                            <p style='line-height:10px;'>Status:</p>
                            <p style='line-height:10px;'>Date:</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="process" style="text-align: left;">
                            <p style='line-height:10px;'>Code From:</p>
                            <p style='line-height:10px;'>Code To:</p>
                            <p style='line-height:10px;'>Code Converted:</p>
                            <p style='line-height:10px;'>Status:</p>
                            <p style='line-height:10px;'>Date:</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="process" style="text-align: left;">
                            <p style='line-height:10px;'>Code From:</p>
                            <p style='line-height:10px;'>Code To:</p>
                            <p style='line-height:10px;'>Code Converted:</p>
                            <p style='line-height:10px;'>Status:</p>
                            <p style='line-height:10px;'>Date:</p>
                        </div>
                    </div>
                </div>
                <!--end row -->
                
            </div>
            <!--end container -->

        </div>
        <!--end process-wrapper -->

    </section>
    
    <!--end home section -->


    
   




    <div class="footer">
        <div class="container-fluid footer-bottom px-0">
            <div class="row no-gutters mx-0">
                <div class="col-md-12 text-center">
                    <p>Copyright © 2022 <span class="template-name">BetSlipSwitch</span>. Designed by <a href="http://swizel.co" target="_blank">Swizel</a></p>
                </div>
            </div>
        </div>
    </div>


    






    <!-- Load JS here for greater good =============================-->
    
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap2.min.js"></script>
    <script src="js/jquery.scrollTo-min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.nav.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/custom2.js"></script>
    <script src="js/converter.js"></script>

    <script src="static/js/jquery-3.2.1.min.js"></script>
    <script src="static/js/jquery-migrate-3.0.0.min.js"></script>

    <script src="js/jquery-3.3.1.min.js"></script> 
    <script src="js/bootstrap.min.js"></script>
    <script src="js/chosen.min.js"></script> 
    <script src="js/magnific-popup.min.js"></script> 
    <script src="js/owl.carousel.min.js"></script> 
    <script src="js/rangeSlider.js"></script> 
    <script src="js/sticky-kit.min.js"></script> 
    <script src="js/slick.min.js"></script> 
    <script src="js/masonry.min.js"></script> 
    <script src="js/mmenu.min.js"></script> 
    <script src="js/tooltips.min.js"></script> 
    <script src="js/typed.js"></script>
    <script src="js/custom_jquery.js"></script> 
    <script>
        const togglePassword = document.querySelector('#togglePassword');
      const password = document.querySelector('#new_password');
    
      togglePassword.addEventListener('click', function (e) {
        // toggle the type attribute
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);
        // toggle the eye slash icon
        this.classList.toggle('fa-eye-slash');
    });
    </script> 
    <script>
        const togglePassword2 = document.querySelector('#togglePassword2');
      const password2 = document.querySelector('#confirm_password');
    
      togglePassword2.addEventListener('click', function (e) {
        // toggle the type attribute
        const type = password2.getAttribute('type') === 'password' ? 'text' : 'password';
        password2.setAttribute('type', type);
        // toggle the eye slash icon
        this.classList.toggle('fa-eye-slash');
    });
    </script>   
    
    <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/6374ac47daff0e1306d7ae6a/1ghvs1uk3';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

<script type="text/javascript">
    
    function myFunction() {
  // Get the snackbar DIV
  var x = document.getElementById("snackbar");

  // Add the "show" class to DIV
  x.className = "show";

  // After 3 seconds, remove the show class from DIV
  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}
</script>
{{-- <script
       type="module"
       src="https://widgets.api-sports.io/2.0.3/widgets.js">
</script> --}}
</body>



</html>