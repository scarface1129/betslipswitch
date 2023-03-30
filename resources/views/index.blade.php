<!DOCTYPE html>
<html lang="en-gb">



<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BetSlipSwitch</title>
    <link rel="shortcut icon" href="/images/ball.png">
    <link href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet" type="text/css">
    <link href="images/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">
    <link href="css/akslider.css" rel="stylesheet" type="text/css" />
    <link href="css/donate.css" rel="stylesheet" type="text/css" />
    <link href="css/theme.css" rel="stylesheet" type="text/css" />
    <link href="css/mobile.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/master.css" rel="stylesheet">
    <script type='text/javascript' src='../../ajax.googleapis.com/ajax/libs/mootools/1.3.1/mootools-yui-compressed.js'></script>
    <style>
        .footer-bottom p {
            margin: 0px 0px 0px 280px;
        }
      #bookies{
                background: #070429;margin:5px;border-radius: 5px; height:75px;width: 10%; float: left; padding: 5px;
            }
            .msports {
                width: 65%; margin: 0px 0px 0px 20px;
            }
            @media (max-width: 870px) {
                .footer-bottom p {
            margin: 0px 0px 0px 230px;
        }
         @media (max-width: 500px) {
                .footer-bottom p {
            margin: 0px 0px 0px 20px;
        }
            }
            @media (max-width: 490px) {
               #bookies{
                width: 25%;
               } 
               
               .msports{
                width: 65%; margin: 2px 0px 0px 20px;
            }
            }
    </style>
</head>

<body class="tm-isblog">

     


    <div class="over-wrap">
        <div class="toolbar-wrap">
            <div class="uk-container uk-container-center">
                <div class="tm-toolbar uk-clearfix uk-hidden-small">


                    {{-- <div class="uk-float-right">
                        <div class="uk-panel">
                            <div class="social-top">
                                <a href="#"><span class="uk-icon-small uk-icon-hover uk-icon-facebook"></span></a>
                                <a href="#"><span class="uk-icon-small uk-icon-hover uk-icon-twitter"></span></a>
                                <a href="#"><span class="uk-icon-small uk-icon-hover uk-icon-google"></span></a>
                                <a href="#"><span class="uk-icon-small uk-icon-hover uk-icon-pinterest"></span></a>
                                <a href="#"><span class="uk-icon-small uk-icon-hover uk-icon-youtube"></span></a>
                                <a href="#"><span class="uk-icon-small uk-icon-hover uk-icon-instagram"></span></a>
                                <a href="#"><span class="uk-icon-small uk-icon-hover uk-icon-flickr"></span></a>
                            </div>
                        </div>
                    </div> --}}

                </div>
            </div>
        </div>

        <div class="tm-menu-box">

            <div style="height: 70px;" class="uk-sticky-placeholder">
                <nav style="margin: 0px;" class="" data-uk-sticky="">
                    <div class="uk-container uk-container-center">
                        <a class="" href="/">
                            <img src="images/bet_logo.png" style="width: 150px; height:auto;margin-bottom:0px;margin-top:0px;" alt="logo" title="logo"> <span></span>
                        </a>

                        <ul class="uk-navbar-nav uk-hidden-small">
                            <li class="uk-parent uk-active" data-uk-dropdown="{'preventflip':'y'}" aria-haspopup="true" aria-expanded="false"><a href="/">Home</a>
                                
                            </li>
                             <li data-uk-dropdown="{'preventflip':'y'}" aria-haspopup="true" aria-expanded="false"><a href="{{route('contact-us')}}">Contact-us</a></li>
                            <li data-uk-dropdown="{'preventflip':'y'}" aria-haspopup="true" aria-expanded="false"><a href="{{route('privacy_policy')}}">Privacy & Policy</a></li>
                            <li data-uk-dropdown="{'preventflip':'y'}" aria-haspopup="true" aria-expanded="false"><a href="{{route('faq')}}">FAQ</a></li>
                            <li data-uk-dropdown="{'preventflip':'y'}" aria-haspopup="true" aria-expanded="false"><a href="{{route('how_it_works')}}">How-it-works</a></li>
                            <li class="mt-3"><a href="#Fixtures">Livescores</a></li>
                            @if(Auth::user())
                            <li data-uk-dropdown="{'preventflip':'y'}" aria-haspopup="true" aria-expanded="false"><a href="{{ route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                            @else
                            <li data-uk-dropdown="{'preventflip':'y'}" aria-haspopup="true" aria-expanded="false"><a href="{{ route('login')}}">Login</a></li>
                            @endif
                           
                        
                           
            
                        </ul>
                        <a href="#offcanvas" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas=""></a>
                    </div>
                </nav>
            </div>

        </div>

        <div class="tm-top-a-box tm-full-width  ">
            <div class="uk-container uk-container-center">
                <section id="tm-top-a" class="tm-top-a uk-grid uk-grid-collapse" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">

                    <div class="uk-width-1-1">
                        <div class="uk-panel">
                            <div class="akslider-module ">
                                <div class="uk-slidenav-position" data-uk-slideshow="{height: 'auto', animation: 'swipe', duration: '500', autoplay: false, autoplayInterval: '7000', videoautoplay: true, videomute: true, kenburns: false}">
                                    <ul class="uk-slideshow uk-overlay-active">
                                        <li aria-hidden="false" class="uk-height-viewport uk-active">
                                            <div style="background-image: url(images/main.jpeg);" class="uk-cover-background uk-position-cover"></div><img style="width: 100%; height: auto; opacity: 0;" class="uk-invisible" src="images/main-slider-img.jpg" alt="">
                                            
                                            <div class="uk-position-cover uk-flex-middle">
                                                <div style="    background-color: rgba(0, 0, 0, 0.55)!important;
                                            width: 100%;
                                            height: 100%;
                                            position: absolute;
                                            padding-top: 200px;" class="divss"></div>
                                                <div class="uk-container uk-container-center uk-position-cover">
                                                    <div class="va-promo-text va-promo-text1 uk-width-6-10 mobile_">
                                                        {{-- <div class="header-bg">				 --}}
                                                            <div class="banner-info">
                                                                <!-- container -->
                                                                <div class="container">
                                                                    {{-- <div class="col-md-5 slid">
                                                                            <script src="js/responsiveslides.min.js"></script>
                                                                            <script>
                                                                                // You can also use "$(window).load(function() {"
                                                                                $(function () {
                                                                                // Slideshow 4
                                                                                $("#slider4").responsiveSlides({
                                                                                    auto: true,
                                                                                    pager: true,
                                                                                    nav: true,
                                                                                    speed: 500,
                                                                                    namespace: "callbacks",
                                                                                    before: function () {
                                                                                    $('.events').append("<li>before event fired.</li>");
                                                                                    },
                                                                                    after: function () {
                                                                                    $('.events').append("<li>after event fired.</li>");
                                                                                    }
                                                                                });
                                                                            
                                                                                });
                                                                            </script>
                                                                        <div  id="top" class="callbacks_container">
                                                                            <ul class="rslides" id="slider4">
                                                                                <li>
                                                                                    <div class="mobile-device">
                                                                                        <img src="images/mobile1.png" alt="" />
                                                                                    </div>
                                                                                </li>
                                                                                <li>
                                                                                    <div class="mobile-device">
                                                                                        <img src="images/mobile2.png" alt="" />
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div> --}}
                                                                    <div class="col-md-7 banner-info-left">
                                                                        <h2 style="text-align: left">Betslipswitch is the Easiest way to convert your betting codes to your desired bookies.</h2>
                                                                        <p style="text-align: left;margin-bottom: 20px;">Bet converter app for converting bookings in seconds. with our community for your day to day betting support.</p>
                                                                        <div class="banner-buttons">
                                                                            <div class="banner-button">
                                                                                <a href="https://apps.apple.com/app/betslipswitch/id1661506197" id=""><img src="images/1.png" alt="" /></a>
                                                                            </div>
                                                                            <div class="banner-button green-button">
                                                                                <a href="https://play.google.com/store/apps/details?id=com.betslipswitch.betslipswitch"><img src="images/2.png" alt="" /></a>
                                                                            </div>
                                                                            <div class="clearfix"> </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="clearfix"> </div>
                                                                </div>
                                                                <!-- //container -->
                                                            </div>
                                                        {{-- </div> --}}
                                                    </div>
                                                    <div style="text-align: left; margin-left: 20px;" class="va-promo-text uk-width-6-10 uk-push-4-10">
                                                        <h3>Bet code<span> Conversion</span></h3>
                                                        <div  class="promo-sub">Convert any <span>Booking code</span> to your desired Bookie</div>
                                                        <a href="{{ route('converter')}}" class="read-more">Get Started Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                      
                                    </ul>
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <section class="uk-container uk-container-center" style="margin-top: 10px; margin-bottom:100px;">
            <div class="col-md-12 mg-y-20 mg-t-50" style="display: ;">
                <div class="d-sm-flex align-items-center justify-content-between">
                    <div>
                        <h2 class="mg-b-0 tx-spacing--1">Supported Bookies/Bookmakers</h2>
                        <h4>You can convert bet selections among the listed bookmakers using our betslip converter.</h4>
                        <p>Nb: We only fully convert football codes at the moment. Other Sports are not fully covered but would with time.</p>
                    </div>
                </div>
                <div class="row row-xs">
                    <div class="col-lg-2 col-sm-3 col-4 mg-t-10 mg-lg-t-10">
                        <div class="card card-body" id='bookies'>
                            <div class="d-flex d-lg-block d-xl-flex align-items-end">
                                <h3 class="tx-normal tx-rubik mg-b-0 mg-r-5 lh-1">
                                <img style="width: 100%; margin: 20px 0px;" src="https://helabet.com/genfiles/cms/pg/310/images/b93e96d33ddddd7a4325254a3b9c3e1b.svg" alt="helabet ">
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-xs">
                    <div class="col-lg-2 col-sm-3 col-4 mg-t-10 mg-lg-t-10">
                        <div class="card card-body" id='bookies'>
                            <div class="d-flex d-lg-block d-xl-flex align-items-end">
                                <h3 class="tx-normal tx-rubik mg-b-0 mg-r-5 lh-1">
                                <img style="width: 50%; margin: 20px 0px;" src="https://biz.prlog.org/ilotbet/logo.png" alt="ilot ">
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-xs">
                    <div class="col-lg-2 col-sm-3 col-4 mg-t-10 mg-lg-t-10">
                        <div class="card card-body" id='bookies'>
                            <div class="d-flex d-lg-block d-xl-flex align-items-end">
                                <h3 class="tx-normal tx-rubik mg-b-0 mg-r-5 lh-1">
                                <img style="width: 100%; margin: 20px 0px;" src="images/linebet.png" alt="linebet ">
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-xs">
                    <div class="col-lg-2 col-sm-3 col-4 mg-t-10 mg-lg-t-10">
                        <div class="card card-body" id='bookies'>
                            <div class="d-flex d-lg-block d-xl-flex align-items-end">
                                <h3 class="tx-normal tx-rubik mg-b-0 mg-r-5 lh-1">
                                <img style="width: 100%; margin: 20px 0px;" src="https://convertbetcodes.com/template/default/app-assets/images/bookmakers/livescorebet.png" alt="livescorebet -Nigeria">
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-xs">
                    <div class="col-lg-2 col-sm-3 col-4 mg-t-10 mg-lg-t-10">
                        <div class="card card-body" id='bookies'>
                            <div class="d-flex d-lg-block d-xl-flex align-items-end">
                                <h3 class="tx-normal tx-rubik mg-b-0 mg-r-5 lh-1">
                                <img style="width: 100%; margin: 20px 0px;" src="https://convertbetcodes.com/template/default/app-assets/images/bookmakers/1xbet.webp" alt="1xbet ">
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
               
                <div class="row row-xs">
                    <div class="col-lg-2 col-sm-3 col-4 mg-t-10 mg-lg-t-10">
                        <div class="card card-body" id='bookies'>
                            <div class="d-flex d-lg-block d-xl-flex align-items-end">
                                <h3 class="tx-normal tx-rubik mg-b-0 mg-r-5 lh-1">
                                <img style="width: 100%; margin: 20px 0px;" src="https://betandyou.com/genfiles/cms/pg/4/images/fb256280856356f3139a2732123cb619.png" alt="betandyou ">
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-xs">
                    <div class="col-lg-2 col-sm-3 col-4 mg-t-10 mg-lg-t-10">
                        <div class="card card-body" id='bookies'>
                            <div class="d-flex d-lg-block d-xl-flex align-items-end">
                                <h3 class="tx-normal tx-rubik mg-b-0 mg-r-5 lh-1">
                                <img style="width: 100%; margin: 20px 0px;" src="https://www.betbiga.com/assets/images/logo.svg" alt="betbiga -Nigeria">
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-xs">
                    <div class="col-lg-2 col-sm-3 col-4 mg-t-10 mg-lg-t-10">
                        <div class="card card-body" id='bookies'>
                            <div class="d-flex d-lg-block d-xl-flex align-items-end">
                                <h3 class="tx-normal tx-rubik mg-b-0 mg-r-5 lh-1">
                                <img style="width: 50%; margin: 20px auto;" src="https://betfury.io/favicon.ico" alt="betfury ">
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-xs">
                    <div class="col-lg-2 col-sm-3 col-4 mg-t-10 mg-lg-t-10">
                        <div class="card card-body" id='bookies'>
                            <div class="d-flex d-lg-block d-xl-flex align-items-end">
                                <h3 class="tx-normal tx-rubik mg-b-0 mg-r-5 lh-1">
                                <img style="width: 100%; margin: 20px 0px;" src="https://convertbetcodes.com/template/default/app-assets/images/bookmakers/betika.png" alt="betika -Ghana">
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-xs">
                    <div class="col-lg-2 col-sm-3 col-4 mg-t-10 mg-lg-t-10">
                        <div class="card card-body" id='bookies'>
                            <div class="d-flex d-lg-block d-xl-flex align-items-end">
                                <h3 class="tx-normal tx-rubik mg-b-0 mg-r-5 lh-1">
                                <img style="width: 100%; margin: 20px 0px;" src="https://convertbetcodes.com/template/default/app-assets/images/bookmakers/1xbit.png" alt="1xbit ">
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-xs">
                    <div class="col-lg-2 col-sm-3 col-4 mg-t-10 mg-lg-t-10">
                        <div class="card card-body" id='bookies'>
                            <div class="d-flex d-lg-block d-xl-flex align-items-end">
                                <h3 class="tx-normal tx-rubik mg-b-0 mg-r-5 lh-1">
                                <img style="width: 100%; margin: 20px 0px;" src="https://convertbetcodes.com/template/default/app-assets/images/bookmakers/22bet.webp" alt="22bet ">
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-xs">
                    <div class="col-lg-2 col-sm-3 col-4 mg-t-10 mg-lg-t-10">
                        <div class="card card-body" id='bookies'>
                            <div class="d-flex d-lg-block d-xl-flex align-items-end">
                                <h3 class="tx-normal tx-rubik mg-b-0 mg-r-5 lh-1">
                                <img style="width: 100%; margin: 20px 0px;" src="https://convertbetcodes.com/template/default/app-assets/images/bookmakers/bet9ja.webp" alt="bet9ja">
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-xs">
                    <div class="col-lg-2 col-sm-3 col-4 mg-t-10 mg-lg-t-10">
                        <div class="card card-body" id='bookies'>
                            <div class="d-flex d-lg-block d-xl-flex align-items-end">
                                <h3 class="tx-normal tx-rubik mg-b-0 mg-r-5 lh-1">
                                <img style="width: 100%; margin: 20px 0px;" src="https://www.betafriq.co.ke/img/logo.png" alt="betafriq -Kenya">
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-xs">
                    <div class="col-lg-2 col-sm-3 col-4 mg-t-10 mg-lg-t-10">
                        <div class="card card-body" id='bookies'>
                            <div class="d-flex d-lg-block d-xl-flex align-items-end">
                                <h3 class="tx-normal tx-rubik mg-b-0 mg-r-5 lh-1">
                                <img style="width: 100%; margin: 20px 0px;" src="https://convertbetcodes.com/template/default/app-assets/images/bookmakers/betking.png" alt="betking -Ethiopia">
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-xs">
                    <div class="col-lg-2 col-sm-3 col-4 mg-t-10 mg-lg-t-10">
                        <div class="card card-body" id='bookies'>
                            <div class="d-flex d-lg-block d-xl-flex align-items-end">
                                <h3 class="tx-normal tx-rubik mg-b-0 mg-r-5 lh-1">
                                <img style="width: 100%; margin: 20px 0px;" src="images/betpawa.png" alt="betpawa ">
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-xs">
                    <div class="col-lg-2 col-sm-3 col-4 mg-t-10 mg-lg-t-10">
                        <div class="card card-body" id='bookies'>
                            <div class="d-flex d-lg-block d-xl-flex align-items-end">
                                <h3 class="tx-normal tx-rubik mg-b-0 mg-r-5 lh-1">
                                <img style="width: 100%; margin: 20px 0px;" src="images/betway.png" alt="betway -Ghana">
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-xs">
                    <div class="col-lg-2 col-sm-3 col-4 mg-t-10 mg-lg-t-10">
                        <div class="card card-body" id='bookies'>
                            <div class="d-flex d-lg-block d-xl-flex align-items-end">
                                <h3 class="tx-normal tx-rubik mg-b-0 mg-r-5 lh-1">
                                <img style="width: 100%; margin: 20px 0px;" src="https://convertbetcodes.com/template/default/app-assets/images/bookmakers/betwinner.png" alt="betwinner -Nigeria">
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-xs">
                    <div class="col-lg-2 col-sm-3 col-4 mg-t-10 mg-lg-t-10">
                        <div class="card card-body" id='bookies'>
                            <div class="d-flex d-lg-block d-xl-flex align-items-end">
                                <h3 class="tx-normal tx-rubik mg-b-0 mg-r-5 lh-1">
                                <img style="width: 100%; margin: 20px 0px;" src="https://v2l.cdnafric.com/genfiles/cms/pg/179/images/8a6a1b666841d3b4351c69e3b63e65ca.svg" alt="double bet ">
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row row-xs">
                    <div class="col-lg-2 col-sm-3 col-4 mg-t-10 mg-lg-t-10">
                        <div class="card card-body" id='bookies'>
                            <div class="d-flex d-lg-block d-xl-flex align-items-end">
                                <h3 class="tx-normal tx-rubik mg-b-0 mg-r-5 lh-1">
                                <img style="width: 100%; margin: 20px 0px;" src="https://v2l.cdnafric.com/genfiles/cms/pg/226/images/b3f69f2080e8a6678111d55abfe8202a.png" alt="megapari ">
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-xs">
                    <div class="col-lg-2 col-sm-3 col-4 mg-t-10 mg-lg-t-10">
                        <div class="card card-body" id='bookies'>
                            <div class="d-flex d-lg-block d-xl-flex align-items-end">
                                <h3 class="tx-normal tx-rubik mg-b-0 mg-r-5 lh-1">
                                <img style="width: 100%; margin: 20px 0px;" src="https://convertbetcodes.com/template/default/app-assets/images/bookmakers/melbet.webp" alt="melbet ">
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-xs">
                    <div class="col-lg-2 col-sm-3 col-4 mg-t-10 mg-lg-t-10">
                        <div class="card card-body" id='bookies'>
                            <div class="d-flex d-lg-block d-xl-flex align-items-end">
                                <h3 class="tx-normal tx-rubik mg-b-0 mg-r-5 lh-1">
                                <img style="width: 100%; margin: 20px 0px;" src="https://www.merrybet.com/images/svg/logo_tagline_white.svg" alt="merrybet ">
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-xs">
                    <div class="col-lg-2 col-sm-3 col-4 mg-t-10 mg-lg-t-10">
                        <div class="card card-body" id='bookies'>
                            <div class="d-flex d-lg-block d-xl-flex align-items-end">
                                <h3 class="tx-normal tx-rubik mg-b-0 mg-r-5 lh-1">
                                <img style="width: 100%; margin: 20px 0px;" src="https://www.moniebet.com/assests/images/home/logo-4.png" alt="moniebet -Nigeria">
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-xs">
                    <div class="col-lg-2 col-sm-3 col-4 mg-t-10 mg-lg-t-10">
                        <div class="card card-body" id='bookies'>
                            <div class="d-flex d-lg-block d-xl-flex align-items-end">
                                <h3 class="tx-normal tx-rubik mg-b-0 mg-r-5 lh-1">
                                <img class='msports' src="images/betsport.png" alt="msport ">
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-xs">
                    <div class="col-lg-2 col-sm-3 col-4 mg-t-10 mg-lg-t-10">
                        <div class="card card-body" id='bookies'>
                            <div class="d-flex d-lg-block d-xl-flex align-items-end">
                                <h3 class="tx-normal tx-rubik mg-b-0 mg-r-5 lh-1">
                                <img style="width: 100%; margin: 20px 0px;" src="https://convertbetcodes.com/template/default/app-assets/images/bookmakers/nairabet.png" alt="nairabet ">
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-xs">
                    <div class="col-lg-2 col-sm-3 col-4 mg-t-10 mg-lg-t-10">
                        <div class="card card-body" id='bookies'>
                            <div class="d-flex d-lg-block d-xl-flex align-items-end">
                                <h3 class="tx-normal tx-rubik mg-b-0 mg-r-5 lh-1">
                                <img style="width: 50%; margin: 20px 0px;" src="https://convertbetcodes.com/template/default/app-assets/images/bookmakers/odibet.png" alt="odibet -Ghana">
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-xs">
                    <div class="col-lg-2 col-sm-3 col-4 mg-t-10 mg-lg-t-10">
                        <div class="card card-body" id='bookies'>
                            <div class="d-flex d-lg-block d-xl-flex align-items-end">
                                <h3 class="tx-normal tx-rubik mg-b-0 mg-r-5 lh-1">
                                <img style="width: 100%; margin: 20px 0px;" src="https://convertbetcodes.com/template/default/app-assets/images/bookmakers/paripesa.png" alt="paripesa ">
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-xs">
                    <div class="col-lg-2 col-sm-3 col-4 mg-t-10 mg-lg-t-10">
                        <div class="card card-body" id='bookies'>
                            <div class="d-flex d-lg-block d-xl-flex align-items-end">
                                <h3 class="tx-normal tx-rubik mg-b-0 mg-r-5 lh-1">
                                <img style="width: 100%; margin: 20px 0px;" src="https://convertbetcodes.com/template/default/app-assets/images/bookmakers/sportybet.png" alt="sportybet -Ghana">
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-xs">
                    <div class="col-lg-2 col-sm-3 col-4 mg-t-10 mg-lg-t-10">
                        <div class="card card-body" id='bookies'>
                            <div class="d-flex d-lg-block d-xl-flex align-items-end">
                                <h3 class="tx-normal tx-rubik mg-b-0 mg-r-5 lh-1">
                                <img style="width: 100%; margin: 20px 0px;" src="https://spotika.co.ke/img/spotika_kenya.png" alt="spotika -Kenya">
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-xs">
                    <div class="col-lg-2 col-sm-3 col-4 mg-t-10 mg-lg-t-10">
                        <div class="card card-body" id='bookies'>
                            <div class="d-flex d-lg-block d-xl-flex align-items-end">
                                <h3 class="tx-normal tx-rubik mg-b-0 mg-r-5 lh-1">
                                <img style="width: 100%; margin: 20px 0px;" src="https://starbet.ng/images/logo-header.svg" alt="starbet -Nigeria">
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-xs">
                    <div class="col-lg-2 col-sm-3 col-4 mg-t-10 mg-lg-t-10">
                        <div class="card card-body" id='bookies'>
                            <div class="d-flex d-lg-block d-xl-flex align-items-end">
                                <h3 class="tx-normal tx-rubik mg-b-0 mg-r-5 lh-1">
                                <img style="width: 100%; margin: 20px 0px;" src="https://yangasport.com/images/logo.png" alt="yangasport -Nigeria">
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                
                
               
                
            </div>
        </section>
        <section id="Fixtures" class="uk-container uk-container-center" style="margin-top: 30px; margin-bottom:30px;">
        <h2 class="my-5 text-center">Livescores</h2>
        <div id="wg-api-football-livescore"
            data-host="api-football-v1.p.rapidapi.com"
            data-refresh="15"
            data-key="{{$api_key}}"
            data-theme=""
            data-show-errors="false"
            class="api_football_loader">
        </div>
        <script
            type="module"
            src="https://widgets.api-sports.io/football/1.1.8/widget.js">
        </script> 

        {{-- <div class="" id="wg-api-football-standings"
            data-host="api-football-v1.p.rapidapi.com"
            data-key="{{$api_key}}"
            data-league=""
            data-team=""
            data-season="2023"
            data-theme=""
            data-show-errors="false"
            data-show-logos="true"
            class="wg_loader">
        </div>
        <script
            type="module"
            src="https://widgets.api-sports.io/2.0.3/widgets.js">
        </script>  --}}
       

       
    </section>
        <div class="">
            <div class="container-fluid footer-bottom px-0">
                <div class="row no-gutters mx-0">
                    <div class="col-md-12 text-center">
                        <p>Copyright © 2022 <span class="template-name">BetSlipSwitch</span>. Designed by <a href="http://swizel.co" target="_blank">Swizel</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div id="offcanvas" class="uk-offcanvas">
            <div class="uk-offcanvas-bar">
                <ul class="uk-nav uk-nav-offcanvas">
                    <li class="uk-parent uk-active"><a href="index.php">Home</a>
                    </li>
                    <li><a href="{{route('contact-us')}}">Contact-us</a></li>
                    <li><a href="{{route('privacy_policy')}}">Privacy & Policy</a></li>
                    <li><a href="{{route('faq')}}">FAQ</a></li>
                    <li><a href="{{ route('login')}}">Login</a></li>                    
                </ul>
            </div>
        </div>
       

     
    </div>

     <style>
        .modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  opacity: 0;
  transition: all .3s ease;
  font-family: Arial, Helvetica, sans-serif;
  font-size: 20px;
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 15% auto; /* 15% from the top and centered */
  padding: 20px;
  border: 1px solid #888;
  width: 50%; /* Could be more or less, depending on screen size */
}

/* The Close Button */
.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}
    </style>

<div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
      <span class="close">&times;</span>
      <p>COMING SOON</p>
    </div>
  
  </div>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/uikit.js"></script>
<script type="text/javascript" src="js/SimpleCounter.js"></script>
<script type="text/javascript" src="js/components/grid.js"></script>
<script type="text/javascript" src="js/components/slider.js"></script>
<script type="text/javascript" src="js/components/slideshow.js"></script>
<script type="text/javascript" src="js/components/slideset.js"></script>
<script type="text/javascript" src="js/components/sticky.js"></script>
<script type="text/javascript" src="js/components/lightbox.js"></script>
<script type="text/javascript" src="js/isotope.pkgd.min.js"></script>

<script type="text/javascript" src="js/theme.js"></script>
<script type="text/javascript">
    new SimpleCounter("countdown4", 1476154800, {
      'continue': 0,
      format: '{D} {H} {M} {S}',
      lang: {
          d: {
              single: 'day',
              plural: 'days'
          }, //days
          h: {
              single: 'hr',
              plural: 'hrs'
          }, //hours
          m: {
              single: 'min',
              plural: 'min'
          }, //minutes
          s: {
              single: 'sec',
              plural: 'sec'
          } //seconds
      },
      formats: {
          full: "<span class='countdown_number' style='color:  '>{number} </span> <span class='countdown_word' style='color:  '>{word}</span> <span class='countdown_separator'>:</span>", //Format for full units representation
          shrt: "<span class='countdown_number' style='color:  '>{number} </span>" //Format for short unit representation
      }
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
<script>
var modal = document.getElementById("myModal");
var btn = document.getElementById("myBtn");
var span = document.getElementsByClassName("close")[0];
btn.onclick = function() {
  modal.style.display = "block";
  modal.style.opacity = 1;
}
span.onclick = function() {
  modal.style.display = "none";
}
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>



</html>