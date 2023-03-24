<!DOCTYPE html>
{{-- <?php 
$curl = curl_init();
$date = date("Y-m-d");
$url = "https://api-football-v1.p.rapidapi.com/v3/fixtures?date=$date";
curl_setopt_array($curl, [
	CURLOPT_URL => $url,
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: api-football-v1.p.rapidapi.com",
		"X-RapidAPI-Key: 6f9a91afb3msh43eb90b3e4fc735p181969jsn3ba69f5720a8"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
    $mainData = json_decode($response,true);
	print_r($mainData['response']);
}
?> --}}
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
    <link rel="stylesheet" href="{{ asset('css/api-football.css') }}">

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
        /* body {
  font-family: "Roboto", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  background-color: #3c373e;
  font-weight: 300; } */

p {
  color: rgba(255, 255, 255, 0.5);
  font-weight: 300; }

h1, h2, h3, h4, h5, h6,
.h1, .h2, .h3, .h4, .h5, .h6 {
  font-family: "Roboto", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"; }

a {
  -webkit-transition: .3s all ease;
  -o-transition: .3s all ease;
  transition: .3s all ease; }
  a, a:hover {
    text-decoration: none !important; }

.content {
  padding: 7rem 0; }

h2 {
  font-size: 20px;
  color: #fff; }

.custom-table {
  min-width: 900px; }
  .custom-table thead tr, .custom-table thead th {
    padding-bottom: 30px;
    border-top: none;
    border-bottom: none !important;
    color: #fff;
    font-size: 11px;
    text-transform: uppercase;
    letter-spacing: .2rem; }
  .custom-table tbody th, .custom-table tbody td {
    color: #777;
    font-weight: 400;
    padding-bottom: 20px;
    padding-top: 20px;
    font-weight: 300;
    border: none;
    -webkit-transition: .3s all ease;
    -o-transition: .3s all ease;
    transition: .3s all ease; }
    .custom-table tbody th small, .custom-table tbody td small {
      color: rgba(255, 255, 255, 0.3);
      font-weight: 300; }
    .custom-table tbody th a, .custom-table tbody td a {
      color: rgba(255, 255, 255, 0.3); }
    .custom-table tbody th .more, .custom-table tbody td .more {
      color: rgba(255, 255, 255, 0.3);
      font-size: 11px;
      font-weight: 900;
      text-transform: uppercase;
      letter-spacing: .2rem; }
  .custom-table tbody tr {
    -webkit-transition: .3s all ease;
    -o-transition: .3s all ease;
    transition: .3s all ease; }
    .custom-table tbody tr:hover td, .custom-table tbody tr:focus td {
      color: #fff; }
      .custom-table tbody tr:hover td a, .custom-table tbody tr:focus td a {
        color: #fdd114; }
      .custom-table tbody tr:hover td .more, .custom-table tbody tr:focus td .more {
        color: #fdd114; }
  .custom-table .td-box-wrap {
    padding: 0; }
  .custom-table .box {
    background: #fff;
    border-radius: 4px;
    margin-top: 15px;
    margin-bottom: 15px; }
    .custom-table .box td, .custom-table .box th {
      border: none !important; }
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

    <section class="section-white section-bottom-border container" id="about">

        <!--begin container -->
        <div class="container">

            <!--begin row -->
            <div class="row">

                <!--begin col-md-12 -->
                <div class="col-md-12 text-center">

                    <h2 class="section-title">Fixtures/Livescores</h2>

                    <p class="section-subtitle">View livescores and fixtures of current matches</p>
                    
                </div>
                <!--end col-md-12 -->

            </div>
            <!--end row -->

        </div>
        <!--end container -->

        <!--begin process-wrapper -->
        <div class="content">
            <div class="container">
                <h2 class="mb-5">Table #6</h2>
                <div class="table-responsive">
                    <table class="table table-striped custom-table">
                        <thead>
                            <tr>
                                <th scope="col">Order</th>
                                <th scope="col">Name</th>
                                <th scope="col">Occupation</th>
                                <th scope="col">Contact</th>
                                <th scope="col">Education</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr scope="row">
                                <td>
                                    1392
                                </td>
                                <td><a href="#">James Yates</a></td>
                                <td>
                                    Web Designer
                                    <small class="d-block">Far far away, behind the word mountains</small>
                                </td>
                                <td>+63 983 0962 971</td>
                                <td>NY University</td>
                                <td><a href="#" class="more">Details</a></td>
                            </tr>
                            <tr>
                                <td>4616</td>
                                <td><a href="#">Matthew Wasil</a></td>
                                <td>
                                    Graphic Designer
                                    <small class="d-block">Far far away, behind the word mountains</small>
                                </td>
                                <td>+02 020 3994 929</td>
                                <td>London College</td>
                                <td><a href="#" class="more">Details</a></td>
                            </tr>
                            <tr>
                                <td>9841</td>
                                <td><a href="#">Sampson Murphy</a></td>
                                <td>
                                    Mobile Dev
                                    <small class="d-block">Far far away, behind the word mountains</small>
                                </td>
                                <td>+01 352 1125 0192</td>
                                <td>Senior High</td>
                                <td><a href="#" class="more">Details</a></td>
                            </tr>
                            <tr>
                                <td>9548</td>
                                <td><a href="#">Gaspar Semenov</a></td>
                                <td>
                                    Illustrator
                                    <small class="d-block">Far far away, behind the word mountains</small>
                                </td>
                                <td>+92 020 3994 929</td>
                                <td>College</td>
                                <td><a href="#" class="more">Details</a></td>
                            </tr>
                            <tr>
                                <td>4616</td>
                                <td><a href="#">Matthew Wasil</a></td>
                                <td>
                                    Graphic Designer
                                    <small class="d-block">Far far away, behind the word mountains</small>
                                </td>
                                <td>+02 020 3994 929</td>
                                <td>London College</td>
                                <td><a href="#" class="more">Details</a></td>
                            </tr>
                            <tr>
                                <td>9841</td>
                                <td><a href="#">Sampson Murphy</a></td>
                                <td>
                                    Mobile Dev
                                    <small class="d-block">Far far away, behind the word mountains</small>
                                </td>
                                <td>+01 352 1125 0192</td>
                                <td>Senior High</td>
                                <td><a href="#" class="more">Details</a></td>
                            </tr>
                            <tr>
                                <td>9548</td>
                                <td><a href="#">Gaspar Semenov</a></td>
                                <td>
                                    Illustrator
                                    <small class="d-block">Far far away, behind the word mountains</small>
                                </td>
                                <td>+92 020 3994 929</td>
                                <td>College</td>
                                <td><a href="#" class="more">Details</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
            <h2 class="my-5">Livescores</h2>
            <div class="" id="wg-api-football-livescore"
                data-host="api-football-v1.p.rapidapi.com"
                data-refresh="15"
                data-key="{{$api_key}}"
                data-theme="false"
                data-show-errors="false"
                class="api_football_loader">
            </div>
            <script
                type="module"
                src="https://widgets.api-sports.io/football/1.1.8/widget.js">
            </script> 
    
            <div class="" id="wg-api-football-standings"
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
            </script> 
           
    
           
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