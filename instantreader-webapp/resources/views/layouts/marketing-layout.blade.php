<!-- This is the layout for the Instant Reader website 2.0 (Marketing website) -->
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Page Title -->
    <title>Instant Reader</title>
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.css">
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
    <style>
        .profile-pic{
            margin-top: 10px;
            margin-bottom: 10px;
            height: 100px;
            width: 100px;
            object-fit: cover;
            border-radius: 50%;
            background-color: #FFFFFF;
        }

        .unclickable{
            pointer-events: none;
            cursor: default;
        }

        .sub-option{
            margin-left: 60px;
        }

        .sub-option > a{
            display: inline-block;
            text-align: left;
            padding-left: 10px;
            width: 100%;
            height: 100%;
        }

        .sub-option:hover{
            background-color: #FFFFFF;
            color: #00bcd4;;
        }

        .menu-dropdown{
            position: relative;
            display: inline-block;
        }

        .menu-dropdown-content{
            display: none;
            position: absolute;
            background-color: #fff;
            min-width: 200px;
            z-index: 1;
        }

        .menu-dropdown-content a {
            display: block;
            color: #000;
            padding: 12px 16px;
            text-decoration: none;
            text-align: left;
        }

        .menu-dropdown:hover .menu-dropdown-content{
            display: block;
        }

        .menu-dropdown-content a:hover {
            color: #00bcd4;
        }
    </style>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="90">

<!-- Preloader -->
<div class="preloader">
    <div class="box"></div>
</div>

<!-- Ink Transition -->
<!-- <div class="cd-transition-layer visible opening">
    <div class="bg-layer"></div>
</div> -->
<!--/Preloader -->

<!--Header Start-->
<header class="cursor-light">

    <!--Navigation-->
    <nav class="navbar navbar-top-default navbar-expand-lg navbar-gradient nav-icon alt-font">
        <div class="container">
            <a class="logo link scroll" href="#home" title="Logo">
                <!--Logo Default-->
                <img alt="logo" class="logo-dark default" src="{{ asset('marketing-site/assets/img/ir-logo.png') }}">
            </a>

            <!--Nav Links-->
            <div class="collapse navbar-collapse" id="agency">
                <div class="navbar-nav ml-auto">
                    <a class="nav-link link {{ $currentPage == 'home' ? 'active' : '' }}" href="/" id="nav-home">Home</a>
                    <div class="nav-link link menu-dropdown {{ $currentPage == 'learn-more' ? 'active' : '' }}">
                        <a class="unclickable">Learn More</a>
                        <div class="menu-dropdown-content">
                            <a href="{{ route('learn-more.program-overview') }}" id="nav-readingprogram">Reading Programs</a>
                            <a href="{{ route('learn-more.reading-assessment') }}" id="nav-readassess">Reading Assessment</a>
                            <a href="{{ route('learn-more.kids-club') }}" id="nav-kidsclub">Kids Club</a>
                            <a href="{{ route('learn-more.faq') }}" id="nav-faq">FAQs</a>                            
                        </div>
                    </div>
                    <div class="nav-link link menu-dropdown {{ $currentPage == 'contact-us' ? 'active' : '' }}">
                        <a class="unclickable">Contact Us</a>
                        <div class="menu-dropdown-content">
                            <a href="{{ route('contact-us.book-consultation') }}" id="nav-bookconsultation">Free Consultation</a>
                            <a href="{{ route('contact-us.application') }}" id="nav-application">Careers</a>
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
            <div class="shape-left" id="shape-left">
                <nav class="navbar full-menu-navigation left">
                    <ul class="list-unstyled">
                        <!-- HOME -->
                        <li><a href="/" class="link">
                            <span class="anchor-circle"></span>
                            <span class="anchor-text">Home</span>
                        </a></li>
                        <!-- LEARN MORE -->
                        <li>
                            <div class="full-menu-multiple-option">
                                <div>
                                    <span class="anchor-circle"></span>
                                    <div class="full-menu-multiple-title">
                                        <a href="#" class="full-menu-main unclickable">  
                                            <span class="anchor-text">Learn More</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="sub-option">
                                    <a href="{{ route('learn-more.program-overview') }}" class="link"> 
                                        <span class="anchor-text">Reading Programs Overview</span>
                                    </a>
                                </div>
                                <div class="line-multiple-options sub-option">
                                    <a href="{{ route('learn-more.reading-assessment') }}" class="link"> 
                                        <span class="anchor-text">Online Reading Assessment</span>
                                    </a>
                                </div>
                                <div class="sub-option">
                                    <a href="#irkids" class="link"> 
                                        <span class="anchor-text">Instant Reader Kids Club</span>
                                    </a>
                                </div>
                                <div class="sub-option">
                                    <a href="{{ route('learn-more.faq') }}" class="link"> 
                                        <span class="anchor-text">FAQs</span>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <!-- CONTACT US -->
                        <li>
                            <div class="full-menu-multiple-option">
                                <div>
                                    <span class="anchor-circle"></span>
                                    <div class="full-menu-multiple-title">
                                        <a href="#" class="full-menu-main unclickable">  
                                            <span class="anchor-text">Contact Us</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="line-multiple-options sub-option">
                                    <a href="{{ route('contact-us.book-consultation') }}" class="link"> 
                                        <span class="anchor-text">Book a FREE Consultation</span>
                                    </a>
                                </div>
                                <div class="sub-option">
                                    <a href="{{ route('contact-us.application') }}" class="link"> 
                                        <span class="anchor-text">Start a Career With Us</span>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <!-- ABOUT US -->
                        <li>
                            <div class="full-menu-multiple-option">
                                <div>
                                    <span class="anchor-circle"></span>
                                    <div class="full-menu-multiple-title">
                                        <a href="#" class="full-menu-main unclickable">  
                                            <span class="anchor-text">About Us</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="line-multiple-options sub-option">
                                    <a href="{{ route('about-us.founder') }}" class="link"> 
                                        <span class="anchor-text">Our Founder & Developer</span>
                                    </a>
                                </div>
                                <div class="sub-option">
                                    <a href="{{ route('about-us.testimonials') }}" class="link"> 
                                        <span class="anchor-text">Testimonials</span>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <!-- ADDITIONAL RESOURCES -->
                        <li><a href="{{ route('additional-resources') }}" class="link">
                            <span class="anchor-circle"></span>
                            <span class="anchor-text">Additional Resources</span>
                        </a></li>
                    </ul>
                </nav>
                <img src="{{ asset('marketing-site/assets/agency/img/shape-8.png') }}" alt="shape">
            </div>
            <div class="shape-right" id="shape-right">
                <div class="full-menu-detail hide-cursor">
                    <img src="{{ asset('marketing-site/assets/agency/img/default-profile-pic.png') }}" class="profile-pic" />
                    <h6 class="title">Guest</h6>
                    <p><a href="{{ route('account.log-in') }}">Log In</a></p>
                    <p><a href="{{ route('account.sign-up') }}">Sign Up</a></p>
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
            @csrf
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

                    <a href="javascript:void(0);" id="quote_submit_btn" class="btn btn-large btn-rounded btn-blue btn-hvr-pink">Enroll
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
                <p class="company-about fadeIn">© 2022 ReadRIGHT Inc. Made with love by <a href="javascript:void(0);">UPLB Interns</a></p>
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
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAyvJuilOzMOMFgfUa2pivMbmUyH2ev0JU"></script>
<script src="{{ asset('marketing-site/assets/agency/js/map.js') }}"></script>
<!-- custom script -->
<script src="{{ asset('marketing-site/assets/vendor/js/contact_us.js') }}"></script>
<script src="{{ asset('marketing-site/assets/agency/js/script.js') }}"></script>

</body>
</html>