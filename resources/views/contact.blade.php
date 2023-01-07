<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->


<head>
	<title>Betslipswitch-Contact-us</title>
	<link rel="shortcut icon" href="/images/ball.png">
	<meta charset="utf-8">
	
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="css/theme.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/bootstrap.min-contact.css">
	<link rel="stylesheet" href="css/animations-contact.css">
	<link rel="stylesheet" href="css/font-awesome-contact.css">
	<link rel="stylesheet" href="css/main-contact.css" class="color-switcher-link">
	<script src="js/vendor/modernizr-2.6.2.min.js"></script>



</head>

<body>
	

	<div class="preloader">
		<div class="preloader_image"></div>
	</div>




	<div id="canvas">
		<div id="box_wrapper">
            <div class="tm-menu-box">

                <div style="height: 70px;" class="uk-sticky-placeholder">
                    <nav style="margin: 0px; background: rgb(7,4,41,0.6);" class="" data-uk-sticky="">
                        <div class="uk-container uk-container-center">
                            <a class="" href="/">
                                <img src="images/bet_logo.png" style="width: 150px; height:auto;margin-bottom:0px; margin-top:0px" alt="logo" title="logo"> <span></span>
                            </a>
    
                            <ul class="uk-navbar-nav uk-hidden-small">
                                <li data-uk-dropdown="{'preventflip':'y'}" aria-haspopup="true" aria-expanded="false"><a href="/">Home</a>
                                    
                                </li>
                                <li class="uk-parent uk-active" data-uk-dropdown="{'preventflip':'y'}" aria-haspopup="true" aria-expanded="false"><a href="{{route('contact-us')}}">Contact-us</a></li>
                                <li class="uk-parent" data-uk-dropdown="{'preventflip':'y'}" aria-haspopup="true" aria-expanded="false"><a href="{{route('privacy_policy')}}">Privacy & Policy</a></li>
                                <li data-uk-dropdown="{'preventflip':'y'}" aria-haspopup="true" aria-expanded="false"><a href="{{route('faq')}}">FAQ</a></li>
                                <li data-uk-dropdown="{'preventflip':'y'}" aria-haspopup="true" aria-expanded="false"><a href="{{ route('login')}}">Login</a></li>
                            
                               
                
                            </ul>
                            <a href="#offcanvas" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas=""></a>
                        </div>
                    </nav>
                </div>
    
            </div>


			<section class="page_title ls s-py-50 corner-title ls invise overflow-visible">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center">
							<h1>Contact Us</h1>
							
						</div>
					</div>
				</div>
			</section>


			<section class="ls s-pt-30 s-pb-100 s-pb-md-130 s-py-lg-100 contact2">
				<div class="container">
					<div class="row c-mb-30 c-mb-md-50">
						<div class="col-md-4 text-center">
							<div class="border-icon">
								<div class="teaser-icon">
									<img src="images/icon1.png" alt="">
								</div>
							</div>
							<h6>
								Call Us
							</h6>
							<p class="teaser-content">
								<strong>Contact:</strong> +000 0000 000
								<br>
								<strong>Support:</strong> +000 0000 000
							</p>
						</div>
						<div class="col-md-4 text-center">
							<div class="border-icon">
								<div class="teaser-icon">
									<img src="images/icon3.png" alt="">
								</div>
							</div>
							<h6>
								Write Us
							</h6>
							<p class="teaser-content">
								<a href="" class="">info@betslipswitch.com</a>
								<a href="" class="">contact@betslipswitch.com</a>
							
								<br> <a href="" class="" >support@betslipswitch.com</a>
							</p>
						</div>
						<div class="col-md-4 text-center">
							<div class="border-icon">
								<div class="teaser-icon">
									<img src="images/icon2.png" alt="">
								</div>
							</div>
							<h6>
								Visit Us
							</h6>
							<p class="teaser-content">
								Games Village, 
								<br> Abuja.
							</p>
						</div>
					</div>
					<div class="divider-60 d-none d-xl-block"></div>
					<div class="row">
						<div class="col-lg-12 ">
							<form class="contact-form" method="post" action="{{ route('contact')}}">
                                @csrf
								<div class="row c-gutter-20">

									<div class="col-12 col-md-6">
										<div class="form-group has-placeholder">
											<label for="name">Full Name
												<span class="required">*</span>
											</label>
											<input id="name" name="name" type="text" required="" class="form-control text-left" placeholder="Full Name">
										</div>
										<div class="form-group has-placeholder ">
											<label for="email">Email address
												<span class="required">*</span>
											</label>
											<input id="email" type="email" name="email" required="" class="form-control text-left" placeholder="Email Address">
										</div>
										@if(session()->has('contact'))
                                        <p style='color:blue;'>Message sent successfully</p>
                                        @endif
										
									</div>
									<div class="col-12 col-md-6">

										<div class="form-group has-placeholder">
											<label for="message">Message</label>
											<textarea id="" name="message" required="" class="form-control text-left" placeholder="Your Message"></textarea>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<div class="form-group text-center">
											<button type="submit" id="contact_form_submit" name="contact_submit" class="btn btn-maincolor">Send Message</button>
										</div>
									</div>

								</div>
							</form>

						</div>
						<!--.col-* -->

						<div class="divider-80 d-none d-xl-block"></div>

					</div>
				</div>
			</section>


			<footer class="page_footer corner-footer ds s-pt-30 s-pb-0 s-pb-lg-10 s-pb-xl-50 c-gutter-60 s-parallax">

				<div class="container">
					<div class="container">
						<div class="row">
							<div class="divider-20 d-none d-xl-block"></div>
							<div class="col-md-12 mt-4 text-center animate" data-animation="fadeInUp">
								<img class="margin-negative" src="images/bet_logo.png" width="20%" height="20%" alt="">
								<div class="widget widget_social_buttons">
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</footer>


			<section class="page_copyright light-copy cs s-py-20 s-py-lg-5 s-parallax copyright">
				<div class="container">
					<div class="row align-items-center">
						<div class="divider-20 d-none d-lg-block"></div>
						<div class="col-md-12 text-center">
							<p>Copyright © 2022 <span class="template-name">BetSlipSwitch</span>. Designed by <a href="http://swizel.co" target="_blank">Swizel</a></p>
						</div>
						<div class="divider-20 d-none d-lg-block"></div>
					</div>
				</div>
			</section>

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
		<!-- eof #box_wrapper -->
	</div>
	<!-- eof #canvas -->


	<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/compressed.js"></script>
	<script src="js/main-contact.js"></script>
    <script type="text/javascript" src="js/theme.js"></script>
	<script src="js/switcher-contact.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/uikit.js"></script>
    <script type="text/javascript" src="js/SimpleCounter.js"></script>
    <script type="text/javascript" src="js/components/grid.js"></script>
    <script type="text/javascript" src="js/components/slider.js"></script>
    <script type="text/javascript" src="js/components/slideshow.js"></script>
    <script type="text/javascript" src="js/components/slideset.js"></script>
    <script type="text/javascript" src="js/components/sticky.js"></script>
	<!-- Google Map Script -->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

</body>


</html>