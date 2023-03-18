<!DOCTYPE html>
<html lang="en-gb">


<!-- Mirrored from h-sportak.torbara.com/yellow/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Sep 2022 14:39:47 GMT -->
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
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- <link href="css/style.css" rel="stylesheet"> --}}
    <link href="css/bootstrap2.min.css" rel="stylesheet">
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
                            <img src="images/bet_logo.png" style="width: 150px; height:auto;margin-bottom:0px; margin-top: 0px" alt="logo" title="logo"> <span></span>
                        </a>

                        <ul class="uk-navbar-nav uk-hidden-small">
                            <li data-uk-dropdown="{'preventflip':'y'}" aria-haspopup="true" aria-expanded="false"><a href="/">Home</a>
                                
                            </li>
                            <li data-uk-dropdown="{'preventflip':'y'}" aria-haspopup="true" aria-expanded="false"><a href="{{route('contact-us')}}">Contact-us</a></li>
                            <li class="uk-parent uk-active" data-uk-dropdown="{'preventflip':'y'}" aria-haspopup="true" aria-expanded="false"><a href="{{route('privacy_policy')}}">Privacy & Policy</a></li>
                            <li data-uk-dropdown="{'preventflip':'y'}" aria-haspopup="true" aria-expanded="false"><a href="{{route('faq')}}">FAQ</a></li>
                            <li data-uk-dropdown="{'preventflip':'y'}" aria-haspopup="true" aria-expanded="false"><a href="{{route('how_it_works')}}">How-it-works</a></li>
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
                                <div style="background-image: url(images/main.jpeg);" class="uk-slidenav-position" data-uk-slideshow="{height: 'auto', animation: 'swipe', duration: '500', autoplay: false, autoplayInterval: '7000', videoautoplay: true, videomute: true, kenburns: false}">
                                    
                                    <div class="uk-position-cover uk-flex-middle">
                                        <div class="uk-container uk-container-center uk-position-cover">
                                            <div class="policy">
                                                <div class="contact-title">
                                                    <h2 style="color: white; text-align: center;">Privacy Policy</h2>
                                                </div>
                                                <div style="color: white; text-align: left;" class="contact-text">
                                                    <h4 style="color: white; text-align: left;">Privacy Policy</h4>
                                                    Our Privacy Policy governs the privacy terms of our Website, Application <a href="https://betslipswitch.com/">https://betslipswitch.com/</a> sub-domains, and any associated web-based applications (collectively, "Website"), (“betslipswitch.com”). Any capitalized terms not defined in our Privacy Policy, have the meaning as specified in our Terms of Use.
                                                    
                                                    Our users' privacy is very important to us. Accordingly, we have developed this Policy in order for you to understand how we collect, use, communicate and disclose and make use of personal information. We use your Personal Information only for providing and improving the website. By using the website, you agree to the collection and use of information in accordance with this policy. Unless otherwise defined in this Privacy Policy, terms used in this Privacy Policy have the same meanings as in our Terms of Use, accessible at <a href="https://betslipswitch.com/">https://betslipswitch.com/</a>. The following outlines our Privacy Policy.
                                                    <ul>
                                                        <li>* Before or at the time of collecting personal information, we will identify the purposes for which information is being collected.</li><br>
                                                        <li>* We will collect and use personal information solely with the objective of fulfilling those purposes specified by us and for other compatible purposes, unless we obtain the consent of the individual concerned or as required by law.</li><br>
                                                        <li>* We will only retain personal information as long as necessary for the fulfillment of those purposes.</li><br>
                                                        <li>* We will collect personal information by lawful and fair means and, where appropriate, with the knowledge or consent of the individual concerned.</li><br>
                                                        <li>* Personal data should be relevant to the purposes for which it is to be used, and, to the extent necessary for those purposes, should be accurate, complete, and up-to-date.</li><br>
                                                        <li>* We will protect personal information by reasonable security safeguards against loss or theft, as well as unauthorized access, disclosure, copying, use, or modification.</li><br>
                                                        <li>* We will make readily available to customers information about our policies and practices relating to the management of personal information.</li><br>
                                                    </ul>
                                          
                                                    <h4 style="color: white; text-align: left;"> Your Privacy</h4>
                                                    
                                                   <p><a href="https://betslipswitch.com/">https://betslipswitch.com/</a> follows all legal requirements to protect your privacy. Our Privacy Policy is a legal statement that explains how we may collect information from you, how we may share your information, and how you can limit our sharing of your information. We utilize the Personal Data you offer in a way that is consistent with this Personal Privacy Policy. If you provide Personal Data for a particular reason, we could make use of the Personal Data in connection with the reason for which it was provided. For example, registration info sent when developing your account might be used to suggest products to you based on past acquisitions. We might use your Personal Data to offer access to services on the Website and monitor your use of such services. <a><a href="https://betslipswitch.com/">https://betslipswitch.com/</a></a> may also utilize your Personal Data and various other personally non-identifiable information gathered through the Website to assist us with improving the material and functionality of the Website, to better comprehend our users, and to improve our services. You will see terms in our Privacy Policy that are capitalized. These terms have meanings as described in the Definitions section below.</p>
                                                    
                                                    
                                                    <h4 style="color: white; text-align: left;"> Definitions</h4>
                                                    <p>
                                                        "Non-Personal Information" is information that is not personally identifiable to you and that we automatically collect when you access our Website with a web browser. It may also include publicly available information that is shared between you and others.
                                                    </p>
                                                    <p>
                                                    "Personally Identifiable Information" is non-public information that is personally identifiable to you and obtained in order for us to provide you with our website. Personally, Identifiable Information may include information such as your name, email address, and other related information that you provide to us or that we obtain about you.
                                                    </p>
                                                    
                                                    <h4 style="color: white; text-align: left;"> Information We Collect </h4>
                                                    <p>
                                                    Generally, you control the amount and type of information you provide to us when using our Website. As a Visitor, you can browse our website to find out more about our Website. You are not required to provide us with any Personally Identifiable Information as a Visitor.
                                                    </p>
                                                    <p>
                                                    We collect personal information whenever you provide it to us. This personal information may include the following.<br>
                                                    </p>
                                                    <li>* Name, email id, and mobile number.</li><br>
                                                    
                                                    <li>* Technical and analytical information obtained through cookies.</li><br>
                                                    
                                                    <li>* Other information you provide to us.</li><br>
                                                    
                                                    
                                                    <h4 style="color: white; text-align: left;">Computer Information Collected</h4>
                                                    <p>
                                                    When you use our Website, we automatically collect certain computer information from the interaction of your mobile phone or web browser with our Website. Such information is typically considered Non-Personal Information. We also collect the following:
                                                    </p>    
                                                    
                                                    
                                                    
                                                    <h4 style="color: white; text-align: left;">Automatic Information</h4>
                                                    <p>
                                                    We automatically receive information from your web browser or mobile device. This information includes the name of the website from which you entered our Website, if any, as well as the name of the website to which you're headed when you leave our website. This information also includes the IP address of your computer/proxy server that you use to access the Internet, your Internet Website provider name, web browser type, type of mobile device, and computer operating system. We use all of this information to analyze trends among our Users to help improve our Website.
                                                    </p>
                                                    <h4 style="color: white; text-align: left;"> Log Data</h4>
                                                    <p>
                                                    Like many Website operators, we collect information that your browser sends whenever you visit our Website ("Log Data"). This Log Data may include information such as your computer's Internet Protocol ("IP") address, browser type, browser version, the pages of our Website that you visit, the time and date of your visit, the time spent on those pages, and other statistics.
                                                    </p>
                                                    <p>
                                                    Our Services are not directed to persons under the age of 18 years. We do not knowingly collect Personally Identifiable Information from children under 18 years. If a parent or guardian becomes aware that his or her child has provided us with Personally Identifiable Information without their consent, he or she should contact us at [contact@betslipswitch.com or Betslipswitch@gmail.com]. If we become aware that a child under 18 years has provided us with Personally Identifiable Information, we will delete such information from our record.
                                                    </p>
                                                    
                                                    <h4 style="color: white; text-align: left;"> How We Use Your Information</h4>
                                                    
                                                    <p>We use the information we receive from you as follows:</p>
                                                    
                                                    <li>* Responding to any inquiries which you make to us relating to any of our services,</li><br>
                                                    
                                                    <li>* To monitor site usage to develop and administer our websites, and</li><br>
                                                    
                                                    <li>* Promote our products and services to you, as well as the products and services of our affiliates,</li><br>
                                                    
                                                    <li>* Deliver email communications, newsletters, and other correspondence to which you subscribe,</li><br>
                                                    
                                                    <li>* Conduct other marketing activities,</li><br>
                                                    
                                                    <li>* Communicate with you regarding your Membership at <a href="https://betslipswitch.com/">https://betslipswitch.com/</a> and</li><br>
                                                    
                                                    <li>* Respond to your inquiries and other correspondence, or request that you provide feedback to us</li><br>
                                                    
                                                    
                                                    <h4 style="color: white; text-align: left;"> How We Share Information</h4>
                                                    
                                                    <p>We may disclose your personal information to:</p>
                                                    
                                                    <li>* Our infrastructure providers,</li><br>
                                                    
                                                    <li>* A third party who acquires our business, and</li><br>
                                                    
                                                    <li>* Law enforcement and regulatory agencies in connection with any investigation to help prevent unlawful activity or as otherwise required by law</li><br>
                                                    
                                                    
                                                    <h4 style="color: white; text-align: left;"> Reasons We Collect and Use Your Personal Information</h4>
                                                     <p>We may use your information in the following ways:</p>
                                                    
                                                    <li>* Where it is necessary to perform our contract with you,</li><br>
                                                    
                                                    <li>* Where it is required by law,</li><br>
                                                    
                                                    <li>* Where you have provided consent, provided that you can withdraw this consent at any time,</li><br>
                                                    
                                                    <li>* Where it is necessary for our legitimate interests as a business</li><br>
                                                    
                                                    
                                                    <h4 style="color: white; text-align: left;"> You’re Rights </h4>
                                                    <p>You have rights under data protection laws, in certain circumstances, including to:</p>
                                                    
                                                    <li>* Request access to personal information that we may process about you</li><br>
                                                    
                                                    <li>* Require us to correct any inaccuracies in your information free of charge</li><br>
                                                    
                                                    <li>* Require us to erase personal data that we may process about you where this is no longer required to be processed by us.</li><br>
                                                    
                                                    <li>* To object to or restrict our processing of some of your personal information in certain circumstances</li><br>
                                                    
                                                    <p>If you wish to exercise any of these rights, you should write your request and provide us with enough information to identify you. If we need further information, we will let you know. If you have any concerns or questions as to the way in which we process your information please do contact us.</p>
                                                    
                                                    
                                                    <h4 style="color: white; text-align: left;"> Reviewing and Changing Your Profile</h4>
                                                    <p>
                                                        Following registration, you can review and change the information you submitted during registration through the 'Edit Profile. If you change any information, we may keep track of your old information. You can also change your registration information such as name, address, city, state, zip code, country, phone number, profile, and other information. To remove your profile so that others cannot view it, contact our customer support team at [support@betslipswitch.com]
                                                    </p>
                                                        <p>
                                                    We will retain in our files information you have requested to remove for certain circumstances, such as to resolve disputes, troubleshoot problems, and enforce our Terms of Use. Further, such prior information is never completely removed from our databases due to technical and legal constraints, including stored ' backup' systems. Therefore, you should not expect that all of your personally identifiable information will be completely removed from our databases in response to your requests.
                                                    </p> 
                                                   
                                                    <h4 style="color: white; text-align: left;">  Control of your Password</h4>
                                                    You are responsible for all actions taken with your login information and password. Therefore we recommend that you do not disclose your account password or login information to any third parties. If you choose to share this information with third parties to provide you additional services, you are responsible for all actions taken with your login information and password and therefore should review each third party's privacy policy. If you lose control of your password, you may lose substantial control over your personally identifiable information and may be subject to legally binding actions taken on your behalf. Therefore, if your password has been compromised for any reason, you should immediately change your password.
                                                    
                                                    
                                                    <h4 style="color: white; text-align: left;">  Security</h4>
                                                    The security of your Personal Information is important to us, but remember that no method of transmission over the Internet or electronic storage method is 100% secure. While we strive to use commercially acceptable means to protect your Personal Information, we cannot guarantee its absolute security. We utilize practical protection measures to safeguard against the loss, abuse, and modification of the individual Data under our control. Personal Data is kept in a secured database and always sent out by means of an encrypted SSL method when supported by your web browser. No Web or email transmission is ever totally protected or mistake-cost-free. For example, emails sent out to or from the Website may not be protected. You must take unique care in deciding what info you send to us by means of email.
                                                    
                                                    
                                                    <h4 style="color: white; text-align: left;">  Privacy Policy Updates</h4>
                                                    We reserve the right to change the Terms of Use and Privacy Policy from time to time as it sees fit and your continued use of the site will signify your acceptance of any adjustment to these terms. We may not announce such changes on our website. Therefore, you agree that you will review our Terms of Use and Privacy Policy documents on a regular basis. Should it be that you do not accept any of the modifications or amendments to the Terms of Use, you may terminate your use of this website immediately.
                                                    <div class="contact-title">
                                                    <h2 style="color: white; text-align: center; margin-top: 10px;">Disclaimer</h2>
                                                </div>
                                                

                                                <p style="color: white;">If you require any more information or have any questions about our site’s disclaimer, please feel free to contact us by email at support@betslipswitch.com or betslipswitch@gmail.com</p>
                                               <p style="color: white;"> All the information on this website – https://betslipswitch.com/,  – is published in good faith and for general information purposes only. https://betslipswitch.com/ does not make any warranties about the completeness, reliability, and accuracy of this information. Any action you take upon the information you find on this website (https://www.betslipswitch.com/), is strictly at your own risk. https://betslipswitch.com/ will not be liable for any losses and/or damages in connection with the use of our website.</p>


                                                <p style="color: white;">From our website, you can maybe able to visit other websites by following hyperlinks to such external sites. While we strive to provide only quality links to useful and ethical websites, we have no control over the content and nature of these sites. These links to other websites do not imply a recommendation for all the content found on these sites. Site owners and content may change without notice and may occur before we have the opportunity to remove a link that may have gone ‘bad’.</p>

                                                <p style="color: white;">Please be also aware that when you leave our website, other sites may have different privacy policies and terms that are beyond our control. Please be sure to check the Privacy Policies of these sites as well as their “Terms of Service” before engaging in any business or uploading any information.</p>

                                                
                                                <h4 style="color: white; text-align: left;"> Consent</h4>
                                               <p style="color: white;"> By using our website, you hereby consent to our disclaimer and agree to its terms.</p>
                                               <h4 style="color: white; text-align: left;">Update</h4>
                                               
                                                <p style="color: white;">Should we update, amend or make any changes to this document, those changes will be promptly posted here.</p>


                                                 </div>
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