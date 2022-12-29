<!DOCTYPE html>
<html lang="en-gb">


<!-- Mirrored from h-sportak.torbara.com/yellow/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Sep 2022 14:39:47 GMT -->
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BetSlipSwitch</title>
    <link href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet" type="text/css">
    <link href="images/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">
    <link href="css/akslider.css" rel="stylesheet" type="text/css" />
    <link href="css/donate.css" rel="stylesheet" type="text/css" />
    <link href="css/theme.css" rel="stylesheet" type="text/css" /> 
    <link href="css/boxicons.min.css" rel="stylesheet" type="text/css" />
    <link href="css/mobile.css" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- <link href="css/style.css" rel="stylesheet"> --}}
    <link href="css/bootstrap2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/all.min.css">
    <link href="css/master.css" rel="stylesheet">
{{-- <link href="css/bootstrap_mobile.css" rel="stylesheet" type="text/css" media="all"> --}}
<style>
.uk-position-cover {
  position: relative;
  top: 0;
  bottom: 0;
  left: 0;
  background-image: url(images/2.jpeg);
  right: 0;
  /* width: 100%; */
}
/*--------------------------------------------------------------
# Frequently Asked Questions
--------------------------------------------------------------*/
.faq .faq-list {
  padding: 0 100px;
}

.faq .faq-list ul {
  padding: 0;
  list-style: none;
}

.faq .faq-list li+li {
  margin-top: 15px;
}

.faq .faq-list li {
  padding: 20px;
  background: #fff;
  border-radius: 4px;
  position: relative;
}

.faq .faq-list a {
  display: block;
  position: relative;
  font-family: "Poppins", sans-serif;
  font-size: 16px;
  line-height: 24px;
  font-weight: 500;
  padding: 0 30px;
  outline: none;
  cursor: pointer;
}

.faq .faq-list .icon-help {
  font-size: 24px;
  position: absolute;
  right: 0;
  left: 20px;
  color: #76b5ee;
}

.faq .faq-list .icon-show,
.faq .faq-list .icon-close {
  font-size: 24px;
  position: absolute;
  right: 0;
  top: 0;
}

.faq .faq-list p {
  margin-bottom: 0;
  padding: 10px 0 0 0;
}

.faq .faq-list .icon-show {
  display: none;
}

.faq .faq-list a.collapsed {
  color: #343a40;
}

.faq .faq-list a.collapsed:hover {
  color: #1977cc;
}

.faq .faq-list a.collapsed .icon-show {
  display: inline-block;
}

.faq .faq-list a.collapsed .icon-close {
  display: none;
}

@media (max-width: 1200px) {
  .faq .faq-list {
    padding: 0;
  }
}

</style>
    <script type='text/javascript' src='../../ajax.googleapis.com/ajax/libs/mootools/1.3.1/mootools-yui-compressed.js'></script>

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
                <nav style="margin: 0px; background: rgb(7,4,41,0.6);" class="" data-uk-sticky="">
                    <div class="uk-container uk-container-center">
                        <a class="" href="/">
                            <img src="images/bet_logo.png" style="width: 150px; height:auto;margin-bottom:0px; margin-top: -34px" alt="logo" title="logo"> <span></span>
                        </a>

                        <ul class="uk-navbar-nav uk-hidden-small">
                            <li data-uk-dropdown="{'preventflip':'y'}" aria-haspopup="true" aria-expanded="false"><a href="/">Home</a>
                                
                            </li>
                            <li data-uk-dropdown="{'preventflip':'y'}" aria-haspopup="true" aria-expanded="false"><a href="{{route('contact-us')}}">Contact-us</a></li>
                            <li data-uk-dropdown="{'preventflip':'y'}" aria-haspopup="true" aria-expanded="false"><a href="{{route('privacy_policy')}}">Privacy & Policy</a></li>
                            <li class="uk-parent uk-active" data-uk-dropdown="{'preventflip':'y'}" aria-haspopup="true" aria-expanded="false"><a href="{{route('faq')}}">FAQ</a></li>
                            <li data-uk-dropdown="{'preventflip':'y'}" aria-haspopup="true" aria-expanded="false"><a href="{{ route('login')}}">Login</a></li>
                        
                           
            
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
                                <div style="background-image: url(images/main.jpeg);" class="uk-slidenav-position" data-uk-slideshow="{height: 'auto', animation: 'swipe', duration: '500', autoplay: false, autoplayInterval: '7000', videoautoplay: true, videomute: true, kenburns: false}">
                                    
                                    <div class="uk-position-cover uk-flex-middle">
                                        <div class="uk-container uk-container-center uk-position-cover">
                                            <div class="policy">
                                                <section id="faq" class="faq section-bg">
                                                    <div class="container">
                                              
                                                      <div class="">
                                                        <h2 style="color: white; text-align: center; margin: 10px;">Frequently Asked Questions.</h2>
                                                        <h3 style="color: white; text-align: center; margin-bottom: 30px;">If you have questions we have answers.
</h3>
<p style="color: white; text-align: center; margin-bottom: 30px;">
Answers for our most popular questions about BETSLIPSWITCH platform.</p>
                                                      </div>
                                              
                                                      <div class="faq-list">
                                                        <ul>
                                                          <li data-aos="fade-up">
                                                            <i class="fa fa-question-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">How Much do I have to pay to convert my bet codes?<i class="fa fa-chevron-down icon-show"></i><i class="fa fa-chevron-up icon-close"></i></a>
                                                            <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                                                              <p>
                                                                - This platform is completely free, every and any conversions made here is free of charge.
                                                              </p>
                                                            </div>
                                                          </li>
                                              
                                                          <li data-aos="fade-up" data-aos-delay="100">
                                                            <i class="fa fa-question-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Do I have to sign up before I can convert my bet codes? <i class="fa fa-chevron-down icon-show"></i><i class="fa fa-chevron-up icon-close"></i></a>
                                                            <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                                                              <p>
                                                                - No you do not, but to have access to some amazing features like the bet community etc. You would need an account.
                                                              </p>
                                                            </div>
                                                          </li>
                                              
                                                          <li data-aos="fade-up" data-aos-delay="200">
                                                            <i class="fa fa-question-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">How many bet codes can I convert? <i class="fa fa-chevron-down icon-show"></i><i class="fa fa-chevron-up icon-close"></i></a>
                                                            <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                                                              <p>
                                                                - You can convert as many bet codes as possible and it is completely free.
                                                              </p>
                                                            </div>
                                                          </li>
                                              
                                                          <li data-aos="fade-up" data-aos-delay="300">
                                                            <i class="fa fa-question-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">How many accounts do I need? <i class="fa fa-chevron-down icon-show"></i><i class="fa fa-chevron-up icon-close"></i></a>
                                                            <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                                                              <p>
                                                                - You only need one account on this platform.
                                                              </p>
                                                            </div>
                                                          </li>
                                              
                                                          <li data-aos="fade-up" data-aos-delay="400">
                                                            <i class="fa fa-question-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed"> Can I place a bet on this platform? <i class="fa fa-chevron-down icon-show"></i><i class="fa fa-chevron-up icon-close"></i></a>
                                                            <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                                                              <p>
                                                                - No. This is not a betting platform, you can only convert Bet slip codes here for free.
                                                              </p>
                                                            </div>
                                                          </li>
                                              
                                                        </ul>
                                                      </div>
                                              
                                                    </div>
                                                  </section>
                                            </div>
                                        </div>
                                    </div>
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
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
                    <li><a href="{{route('contact-us')}}">Contact Us</a></li>
                    <li><a href="{{route('privacy_policy')}}">Privacy & Policy</a></li>
                    <li><a href="{{route('faq')}}">FAQ</a></li>
                    <li><a href="{{ route('login')}}">Login</a></li>                    
                </ul>
            </div>
        </div>
       

     
    </div>

    

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
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

</body>



</html>