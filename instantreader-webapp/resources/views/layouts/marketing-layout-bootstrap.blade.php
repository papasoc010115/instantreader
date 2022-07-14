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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('marketing-site/assets/vendor/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('marketing-site/assets/vendor/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('marketing-site/assets/vendor/css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('marketing-site/assets/vendor/css/cubeportfolio.min.css') }}">
    <!-- Style Sheet -->
    <link href="{{ asset('marketing-site/assets/agency/css/style.css') }}" rel="stylesheet">
    <style>
        .account-form{
            margin: auto;
            max-width: 1000px;
        }

        .center-button{
            text-align: center;
        }

        .full-menu-multiple-title{
            margin: 0;
            padding: 15px 30px 15px 0;
            font-size: 25px;
            font-weight: 300;
            text-rendering: optimizeLegibility;
            word-wrap: break-word;
            position: relative;
            color: #fff;
        }

        .sidebar-anchor-circle{
            content: "";
            position: absolute;
            top: 50%;
            border: 1px solid #FFFFFF;
            border-radius: 120%;
            overflow: hidden;
            left: 0;
            width: 10px;
            height: 10px;
            transform: translateY(-5px);
            -webkit-transition: all .3s ease-in-out;
            -moz-transition: all .3s ease-in-out;
            -ms-transition: all .3s ease-in-out;
            -o-transition: all .3s ease-in-out;
            transition: all .3s ease-in-out;
        }

        .sidebar-anchor-text{
            margin-left: 30px;
        }

        .sidebar-profile{
            display: block;
            text-align: center;
        }

        .user-title{
            font-size: 20px;
            font-weight: 400;
            line-height: 1.15;
            text-rendering: optimizeLegibility;
            word-wrap: break-word;
            margin: 15px 0 25px;
            position: relative;
            color: #fff;
        }

        .sidebar-button{
            margin-left: 10px;
            margin-right: 10px;
        }

        .about-us-options{
            margin:auto;
        }

        .navbar-collapse{
            min-height: 45px;
        }

        .offcanvas-toggler{
            opacity: .5;
            height: 65px;
            width: 45px;
            z-index: 30;
            position: fixed; 
            bottom: 50%; 
            left: 0;
            background: #7004bc;
            border-top-right-radius: 60px;
            border-bottom-right-radius: 60px;
            -webkit-transition: all .5s ease;
            -moz-transition: all .5s ease;
            -ms-transition: all .5s ease;
            -o-transition: all .5s ease;
            transition: all .5s ease;
        }

        .offcanvas-toggler:hover{
            opacity: 1;
        }

        .offcanvas-toggler > *{
            vertical-align: center;
        }

        .fa-angle-right{
            margin-left: 5px;
            color: white;
        }

        @media only screen and (max-width: 991px) {
            #menu-indicator {
                display: none;
            }
        }

        .main-link {
            margin: 0px 10px 10px 10px;
        }

        .menu-line{
            left: 10px;
        }

        .nav-icon .navbar-nav .nav-link:nth-child(1):active ~ .menu-line{
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }

        .nav-icon .navbar-nav .nav-link:nth-child(2).active ~ .menu-line{
            -webkit-transform: translate3d(115%, 0, 0);
            transform: translate3d(115%, 0, 0);
        }

        .nav-icon .navbar-nav .nav-link:nth-child(3).active ~ .menu-line{
            -webkit-transform: translate3d(235%, 0, 0);
            transform: translate3d(235%, 0, 0);
        }

        .nav-icon .navbar-nav .nav-link:nth-child(1):hover ~ .menu-line{
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }

        .nav-icon .navbar-nav .nav-link:nth-child(2):hover ~ .menu-line{
            -webkit-transform: translate3d(115%, 0, 0);
            transform: translate3d(115%, 0, 0);
        }

        .nav-icon .navbar-nav .nav-link:nth-child(3):hover ~ .menu-line{
            -webkit-transform: translate3d(235%, 0, 0);
            transform: translate3d(235%, 0, 0);
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

    <!-- Off Canvas Toggler -->
    <div class="offcanvas-toggler">
        <i class="fa fa-4x fa-angle-right" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample"></i>
    </div>

    <!-- Off Canvas Sidebar -->
    <div class="offcanvas offcanvas-start gradient-bg2" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <button type="button" class="btn-close text-reset btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>

        <div class="sidebar-profile text-white">
            <img src="{{ asset('marketing-site/assets/agency/img/default-profile-pic.png') }}" class="profile-pic" />
            <h6 class="user-title">Guest</h6>
            <span><a class="alt-font sidebar-button" href="#">Log In</a></span>
            <span><a class="alt-font sidebar-button" href="#">Sign Up</a></span>
        </div>

        <hr class="sidebar-divider">

        <div class="offcanvas-body">
            <div class="full-menu-multiple-title" >
                <span class="sidebar-anchor-circle"></span>
                <a data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                    <span class="sidebar-anchor-text alt-font">About Us</span>
                </a>
            </div>
            <div class="collapse" id="collapseExample">
                <div class="card card-body">
                    <ul class="about-us-options">
                        <a href="{{ route('learn-more.program-overview') }}" class="link alt-font"> 
                            <span>Our Founder & Developer</span>
                        </a>
                        <a href="{{ route('learn-more.program-overview') }}" class="link alt-font"> 
                            <span>Testimonials</span>
                        </a>
                    </ul>
                </div>
            </div>
            <div class="full-menu-multiple-title" >
                <span class="sidebar-anchor-circle"></span>
                <a href="{{ route('learn-more.program-overview') }}" class="link alt-font">
                    <span class="sidebar-anchor-text">Additional Resources</span>
                </a>
            </div>
        </div>
    </div>

    <!--Navigation-->
    <nav class="navbar navbar-top-default navbar-expand-lg navbar-gradient nav-icon alt-font">
        <div class="container">

            <a class="logo link" href="/">
                <img src="{{ asset('marketing-site/assets/img/ir-logo.png') }}" title="Logo">
            </a>

            <!--Hidden Navbar Toggler -->
            <button class="navbar-dark navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navigation Links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <!-- Home -->
                    <li class="nav-link nav-item main-link">
                        <a class="link active" href="/">Home</a>
                    </li>
                    <!-- Learn More -->
                    <li class="nav-link nav-item main-link dropdown">
                        <a class="link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Learn More
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ route('learn-more.program-overview') }}">Reading Programs</a></li>
                            <li><a class="dropdown-item" href="{{ route('learn-more.reading-assessment') }}">Online Reading Assessment</a></li>
                            <li><a class="dropdown-item" href="#">Instant Reader Kids Club</a></li>
                            <li><a class="dropdown-item" href="{{ route('learn-more.faq') }}">FAQs</a></li>
                        </ul>
                    </li>
                    <!-- Contact Us -->
                    <li class="nav-link nav-item main-link dropdown">
                        <a class="link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Contact Us
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ route('contact-us.book-consultation') }}">Book FREE Online Consultation</a></li>
                            <li><a class="dropdown-item" href="{{ route('contact-us.application') }}">Start a Career with Us</a></li>
                        </ul>
                    </li>
                    <!-- Enroll Now -->
                    <li class="nav-item main-link">
                        <a data-fancybox data-animation-duration="500" data-src="#animatedModal" href="javascript:void(0);" class="btn btn-medium btn-rounded btn-transparent-white btn-hvr-white">Enroll Now
                            <div class="btn-hvr-setting">
                                <ul class="btn-hvr-setting-inner">
                                    <li class="btn-hvr-effect"></li>
                                    <li class="btn-hvr-effect"></li>
                                    <li class="btn-hvr-effect"></li>
                                    <li class="btn-hvr-effect"></li>
                                </ul>
                            </div>
                        </a>
                    </li>
                    <span class="menu-line" id="menu-indicator"><i aria-hidden="true" class="fa fa-angle-down"></i></span>
                </ul>
            </div>
        </div>
    </nav> 

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
<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCJRG4KqGVNvAPY4UcVDLcLNXMXk2ktNfY"></script> -->
<script src="{{ asset('marketing-site/assets/agency/js/map.js') }}"></script>
<!-- custom script -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="{{ asset('marketing-site/assets/vendor/js/contact_us.js') }}"></script>
<script src="{{ asset('marketing-site/assets/agency/js/script.js') }}"></script>

</body>
</html>