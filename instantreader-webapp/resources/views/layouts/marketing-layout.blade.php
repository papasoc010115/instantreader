<!-- This is the layout for the Instant Reader website 2.0 (Marketing website) -->
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Page Title -->
    <title>ReadRIGHT</title>
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <!-- Bundle -->
    <link rel="stylesheet" href="{{ asset('marketing-site/assets/vendor/css/bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('marketing-site/assets/vendor/css/revolution-settings.min.css') }}">
    <!-- Plugin Css -->
    <link rel="stylesheet" href="{{ asset('marketing-site/assets/vendor/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('marketing-site/assets/vendor/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('marketing-site/assets/vendor/css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('marketing-site/assets/vendor/css/cubeportfolio.min.css') }}">
    <!-- Style Sheet -->
    <link href="{{ asset('marketing-site/assets/agency/css/style.css') }}" rel="stylesheet">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="90">

<!-- Preloader -->
<div class="preloader">
    <div class="box"></div>
</div>

<!-- Ink Transition -->
<div class="cd-transition-layer visible opening">
    <div class="bg-layer"></div>
</div>
<!--/Preloader -->

<!--Header Start-->
<header class="cursor-light">

    <!--Navigation-->
    <nav class="navbar navbar-top-default navbar-expand-lg navbar-gradient nav-icon alt-font">
        <div class="container">
            <a class="logo link scroll" href="javascript:void(0)" title="Logo">
                <!--Logo Default-->
                <img alt="logo" class="logo-dark default" src="{{ asset('marketing-site/assets/img/ir-logo.png') }}">
            </a>


            <!--Nav Links-->
            <div class="collapse navbar-collapse" id="agency">
                <div class="navbar-nav ml-auto">
                    <a class="nav-link link scroll active" href="#home">Home</a>
                    <div class="nav-link link scroll menu-dropdown">
                        <a class="unclickable">Learn More</a>
                        <div class="menu-dropdown-content">
                            <a href="#">Online Reading Assessment</a>
                            <a href="#">Instant Reader Kids Club</a>
                            <a href="#">FAQs</a>
                            <a href="#">Reading Program Overview</a>
                        </div>
                    </div>
                    <div class="nav-link link scroll menu-dropdown">
                        <a class="unclickable">Contact Us</a>
                        <div class="menu-dropdown-content">
                            <a href="#">Book a FREE Consultation</a>
                            <a href="#">Start a Career with Us</a>
                        </div>
                    </div>          
                    <span class="menu-line"><i aria-hidden="true" class="fa fa-angle-down"></i></span>
                </div>

                <a data-fancybox data-animation-duration="500" data-src="#animatedModal" href="javascript:void(0);" class="btn btn-medium btn-rounded btn-transparent-white btn-hvr-white ml-3">Enroll Now
                    <div class="btn-hvr-setting">
                        <ul class="btn-hvr-setting-inner">
                            <li class="btn-hvr-effect"></li>
                            <li class="btn-hvr-effect"></li>
                            <li class="btn-hvr-effect"></li>
                            <li class="btn-hvr-effect"></li>
                        </ul>
                    </div>
                </a>
            </div>

            <!--Menu Button-->
            <button class="fullnav-toggler link" id="full-menu-1" type="button">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </button>

        </div>
    </nav>

    <!--Full menu-->
    <div class="nav-holder alt style-2 alt-font">

        <!--Menu Button-->
        <button class="fullnav-close link" type="button">
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
        </button>

        <div class="container">
            <div class="shape-left">
                <nav class="navbar full-menu-navigation left">
                    <ul class="list-unstyled">
                        <li><a href="../index-agency.html#home" class="link unclickable">
                            <span class="anchor-circle"></span>
                            <span class="anchor-text">About Us</span>
                        </a></li>
                        <div class="list-unstyled">
                            <li><a href="../index-agency.html#about-us" class="link sub-option">
                                <span class="anchor-circle"></span>
                                <span class="anchor-text">Our Founder & CEO</span>
                            </a></li>
                            <li><a href="../index-agency.html#portfolio" class="link sub-option">
                                <span class="anchor-circle"></span>
                                <span class="anchor-text">Testimonials</span>
                            </a></li> 
                        </div>
                        <li><a href="../index-agency.html#clients" class="link">
                            <span class="anchor-circle"></span>
                            <span class="anchor-text">Additional Resources</span>
                        </a></li>
                    </ul>
                    <span class="full-menu-dot" style="transform: scale(0);"></span>
                </nav>
                <img src="{{ asset('marketing-site/assets/agency/img/shape-8.png') }}" alt="shape">
            </div>
            <div class="shape-right">
                <div class="full-menu-detail hide-cursor">
                    <img src="{{ asset('marketing-site/assets/agency/img/default-profile-pic.png') }}" class="profile-pic" />
                    <h6 class="title">Guest</h6>
                    <p><a href="#">Log In</a></p>
                    <p><a href="#">Sign Up</a></p>
                </div>
                <img src="{{ asset('marketing-site/assets/agency/img/shape-7.png') }}" alt="shape">
            </div>
        </div>
    </div>    

    <!--Get Quote Model Popup-->
    <div id="animatedModal" class="animated-modal hidden quote-content">
        <!--Heading-->
        <div class="heading-area pb-2 mx-570">
            <span class="sub-title">Schedule an Online Assessment</span>
            <h2 class="title mt-2">Read in <span class="alt-color js-rotating">20 days</span></h2>
        </div>
        <!--Contact Form-->
        <form class="contact-form">
            <div class="row">
                <!--Result-->
                <div class="col-12" id="quote_result"></div>


                <!--Left Column-->
                <div class="col-md-6">                    
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Parent's First Name" required="true">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Student's First Name" required="true">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Contact No." required="true">
                    </div>
                </div>

                <!--Right Column-->
                <div class="col-md-6">
                    <div class="form-group">
                        <input class="form-control" type="email" placeholder="Parent's Last Name" required="true">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Student's Last Name" required="true">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Email" required="true">
                    </div>
                </div>

                <!--Full Column-->
                <div class="col-md-12">
                    <div class="form-group">
                        <input class="form-control" placeholder="Address"></input>
                    </div>
                </div>

                <!--Button-->
                <div class="col-md-12">

                    <div class="form-check">
                        <label class="checkbox-lable">Subscribe to newsletter
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                    </div>

                    <a href="javascript:void(0);" id="quote_submit_btn" class="btn btn-large btn-rounded btn-blue btn-hvr-pink">Send Message
                        <div class="btn-hvr-setting">
                            <ul class="btn-hvr-setting-inner">
                                <li class="btn-hvr-effect"></li>
                                <li class="btn-hvr-effect"></li>
                                <li class="btn-hvr-effect"></li>
                                <li class="btn-hvr-effect"></li>
                            </ul>
                        </div>
                    </a>
                </div>

            </div>
        </form>
    </div>

</header>
<!--Header End-->

<!--Banner Start-->
<section class="page-title cursor-light">
    <!-- Pattern Layers -->
    <div class="pattern-layers">
        <div class="layer-one"></div>
        <div class="layer-two"></div>
    </div>
    <div class="auto-container">
        <h2 class="hide-cursor">Latest News</h2>
        <ul class="page-breadcrumb link">
            <li><a href="javascript:void(0);"><span class="icon fas fa-home"></span> home</a></li>
            <li>Latest News</li>
        </ul>
    </div>
</section>
<!--Banner End-->

<!--PAGE CONTENT START-->
@yield('content')
<!--PAGE CONTENT END-->

<!--Footer Start-->
<footer class="footer-style-1 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <!--Social-->
            <div class="col-md-6">
                <div class="footer-social">
                    <ul class="list-unstyled">
                        <li><a class="wow fadeInUp" href="javascript:void(0);"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                        <li><a class="wow fadeInDown" href="javascript:void(0);"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a class="wow fadeInUp" href="javascript:void(0);"><i class="fab fa-google-plus-g" aria-hidden="true"></i></a></li>
                        <li><a class="wow fadeInDown" href="javascript:void(0);"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
                        <li><a class="wow fadeInUp" href="javascript:void(0);"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                        <li><a class="wow fadeInDown" href="javascript:void(0);"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
            <!--Text-->
            <div class="col-md-6 text-md-right">
                <p class="company-about fadeIn">© 2020 MegaOne. Made With Love By <a href="javascript:void(0);">Themesindustry</a></p>
            </div>
        </div>
    </div>
</footer>
<!--Footer End-->

<!--Animated Cursor-->
<div id="aimated-cursor">
    <div id="cursor">
        <div id="cursor-loader"></div>
    </div>
</div>
<!--Animated Cursor End-->

<!--Top Start-->
<span class="scroll-top-arrow"><i class="fas fa-angle-up"></i></span>
<!--Top End-->

<!-- JavaScript -->
<script src="{{ asset('marketing-site/assets/vendor/js/bundle.min.js') }}"></script>
<!-- Plugin Js -->
<script src="{{ asset('marketing-site/assets/vendor/js/jquery.appear.js') }}"></script>
<script src="{{ asset('marketing-site/assets/vendor/js/jquery.fancybox.min.js') }}"></script>
<script src="{{ asset('marketing-site/assets/vendor/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('marketing-site/assets/vendor/js/swiper.min.js') }}"></script>
<script src="{{ asset('marketing-site/assets/vendor/js/morphext.min.js') }}"></script>
<script src="{{ asset('marketing-site/assets/vendor/js/TweenMax.min.js') }}"></script>
<script src="{{ asset('marketing-site/assets/vendor/js/wow.min.js') }}"></script>
<script src="{{ asset('marketing-site/assets/vendor/js/jquery.cubeportfolio.min.js') }}"></script>
<!-- REVOLUTION JS FILES -->
<script src="{{ asset('marketing-site/assets/vendor/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('marketing-site/assets/vendor/js/jquery.themepunch.revolution.min.js') }}"></script>
<!-- SLIDER REVOLUTION EXTENSIONS -->
<script src="{{ asset('marketing-site/assets/vendor/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script src="{{ asset('marketing-site/assets/vendor/js/extensions/revolution.extension.carousel.min.js') }}"></script>
<script src="{{ asset('marketing-site/assets/vendor/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script src="{{ asset('marketing-site/assets/vendor/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script src="{{ asset('marketing-site/assets/vendor/js/extensions/revolution.extension.migration.min.js') }}"></script>
<script src="{{ asset('marketing-site/assets/vendor/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script src="{{ asset('marketing-site/assets/vendor/js/extensions/revolution.extension.parallax.min.js') }}"></script>
<script src="{{ asset('marketing-site/assets/vendor/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script src="{{ asset('marketing-site/assets/vendor/js/extensions/revolution.extension.video.min.js') }}"></script>
<!-- google map -->
<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCJRG4KqGVNvAPY4UcVDLcLNXMXk2ktNfY"></script> -->
<script src="{{ asset('marketing-site/assets/agency/js/map.js') }}"></script>
<!-- custom script -->
<script src="{{ asset('marketing-site/assets/vendor/js/contact_us.js') }}"></script>
<script src="{{ asset('marketing-site/assets/agency/js/script.js') }}"></script>

</body>
</html>