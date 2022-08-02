<!-- This is the layout for the Instant Reader website 2.0 (Marketing website) -->
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('metadata')
    <!-- Page Title -->
    <title>Instant Reader</title>
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.css">
    <!-- From Template -->
    <link rel="stylesheet" href="{{ asset('marketing-site/assets/vendor/css/bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('marketing-site/assets/vendor/css/revolution-settings.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('marketing-site/assets/vendor/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('marketing-site/assets/vendor/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('marketing-site/assets/vendor/css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('marketing-site/assets/vendor/css/cubeportfolio.min.css') }}">
    <link rel="stylesheet" href="{{ asset('marketing-site/assets/agency/css/style.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('marketing-site/assets/agency/css/custom-style.css') }}">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="90">

<!-- Preloader -->
<div class="preloader">
    <div class="box"></div>
</div>

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
            <span><a class="alt-font sidebar-button" href="{{ route('account.log-in') }}">Log In</a></span>
            <span><a class="alt-font sidebar-button" href="{{ route('account.sign-up') }}">Sign Up</a></span>
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
                        <a href="{{ route('about-us.founder') }}" class="link alt-font"> 
                            <span>Our Founder & Developer</span>
                        </a>
                        <a href="{{ route('about-us.testimonials') }}" class="link alt-font"> 
                            <span>Testimonials</span>
                        </a>
                    </ul>
                </div>
            </div>
            <div class="full-menu-multiple-title" >
                <span class="sidebar-anchor-circle"></span>
                <a href="{{ route('additional-resources') }}" class="link alt-font">
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
            <div class="collapse navbar-collapse p-3" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto d-flex align-items-center">
                    <!-- Home -->
                    <li class="nav-link nav-item main-link my-auto">
                        <a class="link topbar-link" id="home-link" href="/">Home</a>
                    </li>
                    <!-- Learn More -->
                    <li class="nav-link nav-item main-link dropdown my-auto">
                        <a class="link dropdown-toggle topbar-link" id="lm-link" href="#" id="navbarDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Learn More
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                            <li><a class="dropdown-item" href="{{ route('learn-more.program-overview') }}">Reading Programs</a></li>
                            <li><a class="dropdown-item" href="{{ route('learn-more.reading-assessment') }}">Online Reading Assessment</a></li>
                            <li><a class="dropdown-item" href="{{ route('learn-more.kids-club') }}">Instant Reader Kids Club</a></li>
                            <li><a class="dropdown-item" href="{{ route('learn-more.faq') }}">FAQs</a></li>
                        </ul>
                    </li>
                    <!-- Contact Us -->
                    <li class="nav-link nav-item main-link dropdown my-auto topbar-link">
                        <a class="link dropdown-toggle" id="cu-link" href="#" id="navbarDropdown2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Contact Us
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown2">
                            <li><a class="dropdown-item" href="{{ route('contact-us.book-consultation') }}">Book FREE Online Consultation</a></li>
                            <li><a class="dropdown-item" href="{{ route('contact-us.application') }}">Start a Career with Us</a></li>
                        </ul>
                    </li>
                    <!-- Enroll Now -->
                    <li class="nav-item main-link my-auto">
                        <a href="{{ route('learn-more.reading-assessment') }}" class="btn btn-medium btn-rounded btn-transparent-white btn-hvr-white">Enroll Now
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
                </ul>
            </div>
        </div>
    </nav> 
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
<span class="scroll-top-arrow" id="scroll-to-top"><i class="fas fa-angle-up"></i></span>
<!--Top End-->

<!-- JAVASCRIPT FROM TEMPLATE -->
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
<!-- Revolution -->
<script src="{{ asset('marketing-site/assets/vendor/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('marketing-site/assets/vendor/js/jquery.themepunch.revolution.min.js') }}"></script>
<!-- Slider revolution extensions -->
<script src="{{ asset('marketing-site/assets/vendor/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script src="{{ asset('marketing-site/assets/vendor/js/extensions/revolution.extension.carousel.min.js') }}"></script>
<script src="{{ asset('marketing-site/assets/vendor/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script src="{{ asset('marketing-site/assets/vendor/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script src="{{ asset('marketing-site/assets/vendor/js/extensions/revolution.extension.migration.min.js') }}"></script>
<script src="{{ asset('marketing-site/assets/vendor/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script src="{{ asset('marketing-site/assets/vendor/js/extensions/revolution.extension.parallax.min.js') }}"></script>
<script src="{{ asset('marketing-site/assets/vendor/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script src="{{ asset('marketing-site/assets/vendor/js/extensions/revolution.extension.video.min.js') }}"></script>

<!-- Other scripts from template -->
<script src="{{ asset('marketing-site/assets/vendor/js/contact_us.js') }}"></script>
<script src="{{ asset('marketing-site/assets/agency/js/script.js') }}"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<!-- SCRIPTS ADDED (NOT FROM TEMPLATE) -->
<!-- google map -->
<script src="{{ asset('marketing-site/assets/agency/js/map.js') }}"></script>
<!-- Bootstrap js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<!-- Custom script -->
<script src="{{ asset('marketing-site/assets/agency/js/topbar.js') }}"></script>
</body>
</html>