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
                            <li class="mt-3"><a href="{{route('conversions')}}">History</a></li>

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

    <section class="home-section" id="home">

        <div class="divss"></div>

        <div class="home-section-overlay"></div>
        <div class="container">

            <div class="row">
                <div class="col-md-6 padding-top-80">

                    <h1>Welcome To <span style="color:#fff;">BetSlip</span><span style="color: #ff2400;">Switch</span></h1>
                    <p class="hero-text" >What We Offer</p>
                    <!--begin home-benefits -->
                    <ul class="home-benefits">
                        <li><i class="fas fa-check-circle"></i>Bet Converter App For Converting Bookings</li>
                        <li><i class="fas fa-check-circle"></i>Great Company Of Tipsters & Supporters</li>
                        <li><i class="fas fa-check-circle"></i>Access To 35+ Bookies</li>

                    </ul>
                    <!--end home-benefits -->
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-5 margin-top-20">
                    <div class="register-form-wrapper wow bounceIn" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: bounceIn;">


                        @if(session()->has('message'))
                        <div style="width: 100%;">
                            <div style="width: 100%; padding-right: 0px;" class="col-12 row">
                                <div class="col-4"> 
                                    <h5>{{ session('no_home') ?? '' }} events</h5>
                                    <p>@ {{session('odds_home') ?? '' }} odd</p>
                                    <h3>{{session('code_home') ?? '' }}</h3>
                                    <p style="color: red;">{{session('bookie_home') ?? '' }}</p>
                                </div>
                                <div class="col-3 mx-2">
                                    <img src='./images/sports/arrow-right.png' style='margin-top: 55px;margin-left: 15px' width="44px" height="45px" alt="arrow-right">
                                </div>
                                <div class="col-4 mr-0">
                                    <h5>{{ session('no_destination') ?? ''  }} events</h5>
                                    <p>@ {{session('odds_destination') ?? '' }} odd</p>
                                    <h3>{{session('code_destination') ?? '' }}</h3>
                                    <p style="color: red;">{{session('bookie_destination') ?? '' }}</p>
                                </div>
                                <!-- <button type="button" class="register-submit" data-toggle="modal" data-target="#myModal">Open Modal</button> -->
                                <input value="Detail" class="register-submit" type="button" data-toggle="modal" data-target="#myModal">
                            </div>
                        </div>

                        @else
                        
                        <div>
                            <h3>Convert Your Booking Code!</h3><br>
                            @if(session()->has('no_message'))
                                <p style='float:left; color:red;'>{{session('no_message') ?? ''}}</p>
                            @endif
                            <p style="float:left;">Booking Code Converter</p>
                            {{-- <p style="float:right;" >0 Units</p> --}}
                            <div>
                                <form id="register-form" class="register-form register" action="{{ route('convert')}}" method="post">
                                    @csrf
                                    <input class="register-input white-input" required="" name="betting_token" placeholder="Booking Code" type="text">
                                    <select id='select1' class="register-input white-input" required="" name="from">
                                    <option value="">Convert From</option>
                                    @if($bookie)
                                    @foreach($bookie as $plateforms_from)
                                    <option value='{{ $plateforms_from['bookie'] }}'>{{$plateforms_from['name']}}</option>
                                    @endforeach
                                    @endif
                                    </select>
                                    <select id="select2" class="register-input white-input" required="" name="to">
                                        <option value="">Convert To</option>
                                        @if($bookie)
                                        @foreach($bookie as $plateforms_to)
                                        <option value='{{ $plateforms_to['bookie'] }}'>{{$plateforms_to['name']}}</option>
                                        @endforeach
                                        @endif
                                    </select><br>
                                    <input value="Convert" style='width:100%;' class="register-submit" type="submit">
                                </form>
                            </div>                            
                        </div>
                            
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="contactus" class="section gray-bg">
        <div class="utf-photo-section-block">
            <div class="utf-photo-text-content white-font">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-12 col-sm-12">
                            <h2>Download Our Mobile</h2>
                            <p>Get our Mobile App on both Google play and Apple Store to access more of our features. Click below to continue...</p>						
                            <ul class="utf-download-text1" >
                                <li >
                                    <a href="https://apps.apple.com/app/betslipswitch/id1661506197" data-toggle="modal" data-target="#ios" style='cursor: pointer;' class="top" title="App Store">
                                        <img    src="images/sports/apple_icon.png" alt="">
                                        <span>Apple Store</span>
                                        <p>Available Now</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://play.google.com/store/apps/details?id=com.betslipswitch.betslipswitch" class="top" title="Google Play">
                                        <img src="images/sports/android_icon.png" alt="">
                                        <span>Google Play</span>
                                        <p>Get in On</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="download-img">
                                <img  src="images/sports/good.png" alt="">
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!--end home section -->


    <section id="contactus" class="section gray-bg">
        <div class="container">
            <div class="row justify-content-center sm-m-25px-b m-45px-b">
                <div class="col-md-12 col-lg-8">
                    <div class="section-title text-center">
                        <h2 class="dark-color">CONTACT<span class="theme-color">    US</span></h2>
                    </div>        
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-7 m-15px-tb">
                    <!-- form -->
                    <div class="contact-form box-shadow-lg white-bg">
                        <div class="sm-title p-25px-b">
                            <h5 class="dark-color">Drop us a line</h5>
                            <p class="m-0px">We are here to answer any question you may have</p>
                            @if(session()->has('contact'))
                            <p style='color:blue;'>Message sent successfully</p>
                            @endif
                            <i class="far fa-paper-plane"></i>
                        </div>
                        <form class="contactform" method="post" action="{{ route('contact_us')}}">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input id="name" name="name" type="text" placeholder="Name" class="form-control" required="">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input id="email" type="email" placeholder="Email" name="email" class="form-control" required="">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <textarea id="" placeholder="Your Comment" name="message" class="form-control" required=""></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="send">
                                        <button class="m-btn m-btn-theme" type="submit" name="send">Get in touch</button>
                                    </div>
                                </div>
                                <span class="output_message"></span>

                            </div>
                        </form>
                    </div>
                    <!-- end form -->
                </div>
                <div class="col-lg-5 col-xl-4 m-15px-tb">
                    <div class="box-shadow-lg p-30px-lr p-15px-tb white-bg h-100">
                        

                        <div class="feature-box-3 media p-15px-tb">
                            <div class="icon">
                                <span class="icon-envelope white-color dark-bg"></span>
                            </div>
                            <div class="feature-content">
                                <h5 class="dark-color">Email</h5>
                                <p>info@betslipswitch.com<br>contact@betslipswitch.com<br>support@betslipswitch.com</p>
                            </div>
                        </div>

                        
                    </div>
                </div>
            </div>
        </div>
    </section>
   

    <!--begin pricing section -->

    <section id="pricing" class="section gray-bg">
        <div class="section-bg-overlay"></div>
        <!--begin container -->

        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center padding-bottom-40">
                    <h2 class="section-title white-text">Pricing made for everyone</h2>
                    <p class="section-subtitle white-text">All pricing packages are backed up by a 30-day money back guarantee.</p>
                </div>
            </div>
        </div>
        <div class="pricing-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <div class="price-box">
                            <ul class="pricing-list">
                                <li class="price-value">Free</li>
                                <li class="price-title">- 3 free conversions</li>
                                <li class="price-title">- Access to free communities</li>
                                <li class="price-title">- Limited access to sports API</li>
                                <li class="price-title">- Inability to create communities</li>
                                <li class="price-value">Active</li>
                                <li class="price-tag-line"><a href="#">Purchase</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="price-box grey-price-box">
                            <ul class="pricing-list">
                                <li class="price-value">Pro</li>
                                <li class="price-title">- 10 free conversions per month</li>
                                <li class="price-title">- Access to free communities</li>
                                <li class="price-title">- Unlimited access to sports API</li>
                                <li class="price-title">- Ability to create communities</li>
                                <li class="price-value">Comming Soon</li>
                                <li class="price-tag-line"><a href="#">Purchase</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="price-box">
                            <ul class="pricing-list">
                                <li class="price-value">Basic</li>
                                <li class="price-title">- 5 free conversions per month</li>
                                <li class="price-title">- Access to free communities</li>
                                <li class="price-title">- Unlimited access to sports API</li>
                                <li class="price-title">- Inability to create communities</li>
                                <li class="price-value">Comming Soon</li>
                                <li class="price-tag-line"><a href="#">Purchase</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <section id="pricing" class="my-5">

        <div id="wg-api-football-games"
        data-host="api-football-v1.p.rapidapi.com"
        data-key= {{$api_key}}
        data-date=""
        data-league="2"
        data-season="2022"
        data-theme="dark"
        data-refresh="15"
        data-show-toolbar="true"
        data-show-errors="true"
        data-show-logos="true"
        data-modal-game="true"
        data-modal-standings="true"
        data-modal-show-logos="true">
        </div>
   
   

    </section> --}}


    <div class="footer">
        <div class="container-fluid footer-bottom px-0">
            <div class="row no-gutters mx-0">
                <div class="col-md-12 text-center">
                    <p>Copyright © 2022 <span class="template-name">BetSlipSwitch</span>. Designed by <a href="http://swizel.co" target="_blank">Swizel</a></p>
                </div>
            </div>
        </div>
    </div>


    

<!-- Modal -->

            <div id="myModal" class="modal fade" role="dialog">
                <div class="vertical-alignment-helper">
                    <div class="modal-dialog modal-lg vertical-align-center">

                        <!-- Modal content-->
                        <div class="modal-content">
                        <div class="modal-header ">
                        <h4 class="modal-title">Bookie Details</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            
                        </div>
                        @if(session()->has('message'))
                        <div class="modal-body">
                            <div class="card m-5 p-5">
                                <div class="card-body" style="padding:0px;">
                                    <div style="padding:10px; border-top:5px dashed grey;">
                                        <div class="row">
                                            <div class="col-6">
                                                <p class="tx-11 tx-spacing-1 tx-color-03 tx-medium mg-b-5">
                                                    <span class="">{{session('no_home') ?? '' }} events
                                                    <br>@ {{session('odds_home') ?? ''}} odd</span>
                                                </p>
                                            </div>
                                            <div class="col-6 text-right">
                                                <p class="tx-11 tx-spacing-1 tx-color-03 tx-medium mg-b-5">
                                                    <span class="">{{session('no_destination') ?? '' }} events
                                                    <br>@ {{session('odds_destination') ?? '' }} odd</span>
                                                </p>
                                            </div>
                                        </div>
                                        <h4 class="tx- tx-normal tx-rubik tx-spacing--2 mg-b-5">
                                            <span class="float-left">
                                                {{session('code_home') ?? '' }}  
                                                <span class=" tx-15">
                                                </span><br>
                                                <code class="float-left badge " style="color:red;">
                                                    {{session('bookie_home') ?? '' }} 
                                                </code>
                                            </span>
                                            <span class="float-right">
                                                <span class=" tx-15"></span>
                                                <span onclick="copy_text(`3FAFF01F`)">
                                                    {{session('code_destination') ?? '' }}
                                                </span><br>
                                                <code class="float-right badge" style="color:red;">
                                                    {{session('bookie_destination') ?? '' }} 
                                                </code>
                                            </span>
                                        </h4>
                                    </div>
                                    <ul class="list unstyled mg-b-10 mg-t-40">
                                    
                                    </ul>
                                    <ul class="list-unstyled mg-b-0 ">
                                        <li class="list-label mt-5 bg-secondary text-white">
                                            {{session('no_destination') ?? '' }}/{{session('no_home') ?? '' }} Converted
                                            <span class="float-right"> 
                                                <span class="blink_me text-bold">
                                                    <i class="fa fa fa-angle-double-down"></i>
                                                </span> 
                                                Cross check
                                            </span>
                                        </li>
                                    </ul>
                                    <ul class="list-unstyled mg-b-0 ">
                                        <div>
                                            <div>
                                                @foreach(session('games') as $game)
                                                <div style="border-left: 5px double blueviolet;">
                                                    <li class="list-item ml-4" style="padding: 3px !important;">
                                                        <div class="media align-items-center">
                                                            <div class="media-body mg-sm-l-15">
                                                                <p class="tx-12 mg-b-0 tx-color-03">
                                                                    <i class="fax fa fa-futbol"></i>
                                                                    {{$game->home->tournament_name ?? 'N/A'}} 
                                                                </p>
                                                                <p class="tx-medium mg-b-0">{{$game->home->item_name ?? ''}} </p>
                                                                <p class="text-small mg-b-0 tx-color-03">   
                                                                    {{-- {{$game->home->market_name}}  --}}
                                                                    <b>
                                                                        <span class="badg">
                                                                            {{$game->home->market_name ?? ''}} 
                                                                        </span>
                                                                        <p>{{$game->home->odd_value ?? 'n/a'}} odd</p>
                                                                    </b>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="text-right tx-rubik">
                                                            <span class="float-right text-muted">
                                                                <small class="badge bade-dark badge-pill">
                                                                {{$game->home->item_utc_date ?? ''}}
                                                                </small>
                                                            </span>
                                                            <p class="mg-b-0 text-muted"><small class="badge bade-dark badge-pill">{{session('bookie_home') ?? '' }}</small></p>
                                                        </div>
                                                    </li>
                                                    @if($game->is_converted)
                                                    <hr>
                                                    <li class="list-item ml-4" style="padding: 3px !important;">
                                                        <div class="media align-items-center">
                                                            <div class="media-body mg-sm-l-15">
                                                                <i class="fax fa fa-futbol"></i>
                                                                <p class="tx-12 mg-b-0 tx-color-03">{{$game->destination->tournament_name ?? 'N/A'}} </p>
                                                                <p class="tx-medium mg-b-0">{{$game->destination->item_name ?? ''}} </p>
                                                                <p class="tx-12 mg-b-0 tx-color-03">   
                                                                    <b>
                                                                        <span class="badg">
                                                                            {{$game->destination->market_name ?? ''}}
                                                                        </span>
                                                                        <p>{{$game->destination->odd_value ?? 'n/a'}} odd</p>
                                                                    </b>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="text-right tx-rubik">
                                                            <p class="mg-b-0 text-muted">
                                                                <small class="badge bade-dark badge-pill">
                                                                    {{session('bookie_destination') ?? '' }}
                                                                </small>
                                                            </p>
                                                        </div>
                                                    </li>
                                                    @endif
                                                </div>
                                                @if(!$game->is_converted )
                                                <li class="list-label"><span class="">
                                                    <span>{{$loop->index + 1}}.</span>
                                                    <i class="fa fa-2x text-danger fa-times"></i>
                                                    <span class="tx-10 text-danger text-lowercase">
                                                        <i>{{$game->exempt_reason ?? '' }}</i>
                                                    </span>
                                                    </span>
                                                </li>
                                                @else

                                                <li class="list-label"><span class="">
                                                    <span>{{$loop->index + 1}}.</span>
                                                    <i class="fa fa-2x text-success fa-check-circle"></i>
                                                        <span class="tx-10 text-danger text-lowercase"><i></i></span>
                                                    </span>
                                                </li>
                                                @endif
                                                @endforeach
                                            </div>
                                            
                                        </div>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endif
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" style="font-size: 20px;" data-dismiss="modal">Close</button>
                        </div>
                        </div>

                    </div>
                </div>
            </div>
            <div id="UpdateProfile" class="modal fade" role="dialog">
                <div class="vertical-alignment-helper">
                    <div class="modal-dialog modal-lg vertical-align-center">

                        <!-- Modal content-->
                        <div class="modal-content">
                        <div class="modal-header ">
                        <h4 class="modal-title">Update Profile Information</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            
                        </div>
                        <div class="modal-body">
                            <div class="card m-5 p-5">
                                <div class="card-body" style="padding:0px;">
                                    <form class="contactform" @auth action="{{ route('update',Auth::user()->id)}}" @endauth method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-sm-7 mt-5" style="margin: auto">
                                                <div class="form-group">
                                                    <input id="name" name="name" value="<?= Auth::user()->name ?? ''?>" type="text" placeholder="Name" class="form-control" required="">
                                                </div>
                                            </div>
                                            
                                            <div class="col-sm-7 mt-5" style="margin: auto">
                                                <div class="form-group">
                                                    <input id="Phone_number" type="text" value="<?= Auth::user()->phone ?? ''?>" placeholder="Phone Number" name="Phone_number" class="form-control" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="send">
                                                    <button class="m-btn m-btn-theme" type="submit" name="send">Update</button>
                                                </div>
                                            </div>
                                            <span class="output_message"></span>
            
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" style="font-size: 20px;" data-dismiss="modal">Close</button>
                        </div>
                        </div>

                    </div>
                </div>
            </div>
            <div id="ChangePassword" class="modal fade" role="dialog">
                <div class="vertical-alignment-helper">
                    <div class="modal-dialog modal-lg vertical-align-center">

                        <!-- Modal content-->
                        <div class="modal-content">
                        <div class="modal-header ">
                        <h4 class="modal-title">Change Password</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            
                        </div>
                        <div class="modal-body">
                            <div class="card m-5 p-5">
                                <div class="card-body" style="padding:0px;">
                                    <form class="contactform" method="post" @auth action="{{ route('change_password',Auth::user()->id)}}" @endauth>
                                        @csrf
                                        <div class="row">
                                            {{-- <div class="col-sm-7 mt-5" style="margin: auto">
                                                <div class="form-group">
                                                    <input id="old_password" name="old_password" type="password" placeholder="Old Password" class="form-control" required="">
                                                </div>
                                            </div> --}}
                                            
                                            <div class="col-sm-7 mt-5" style="margin: auto">
                                                <div class="input-group">
                                                    <input id="new_password" type="password"  placeholder="New Password" name="new_password" class="form-control" required="">
                                                    <div class="input-group-addon">
                                                        <i class="far fa-eye" id="togglePassword" style="cursor: pointer;"></i>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="col-sm-7 mt-5" style="margin: auto">
                                                <div class="input-group">
                                                    <input id="confirm_password" type="password"  placeholder="Confirm Password" name="confirm_password" class="form-control" required="">
                                                    <div class="input-group-addon">
                                                        <i class="far fa-eye" id="togglePassword2" style="cursor: pointer;"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="col-sm-7 mt-5" style="margin: auto;color: red;">Please make sure the passwords are matched!!!</p>
                                            <div class="col-md-12">
                                                <div class="send">
                                                    <button class="m-btn m-btn-theme" type="submit" name="send">Update</button>
                                                </div>
                                            </div>
                                            <span class="output_message"></span>
            
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" style="font-size: 20px;" data-dismiss="modal">Close</button>
                        </div>
                        </div>

                    </div>
                </div>
            </div>
            
            <div id="ios" class="modal fade" role="dialog">
                <div class="vertical-alignment-helper">
                    <div class="modal-dialog modal-lg vertical-align-center">

                        <!-- Modal content-->
                        <div class="modal-content">
                        <div class="modal-header ">
                        <h4 class="modal-title">COMING SOON!!!</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            
                        </div>
                        
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" style="font-size: 20px;" data-dismiss="modal">Close</button>
                        </div>
                        </div>

                    </div>
                </div>
            </div>
    <!--end footer -->





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