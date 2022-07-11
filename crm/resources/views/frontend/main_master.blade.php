<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <!-- Author -->
    <meta name="author" content="Themesindustry">
    <!-- description -->
    <meta name="description" content="MegaOne is a highly creative, modern, visually stunning and Bootstrap responsive multipurpose agency and portfolio HTML5 template with 8 ready home page demos.">
    <!-- keywords -->
    <meta name="keywords" content="creative, modern, clean, bootstrap responsive, html5, css3, portfolio, blog, agency, templates, multipurpose, one page, corporate, start-up, studio, branding, designer, freelancer, carousel, parallax, photography, personal, masonry, grid, faq">
    <!-- Page Title -->
    <title>Agency | MegaOne HTML5 Template</title>
    <!--   {{ asset('frontend/assets/') }} -->
    <!-- Favicon -->
    <link href="{{ asset('frontend/assets/agency/img/favicon.ico') }}" rel="icon">
    <!-- Bundle -->
    <link href="{{ asset('frontend/assets/vendor/css/bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/css/revolution-settings.min.css') }}" rel="stylesheet">
    <!-- Plugin Css -->
    <link href="{{ asset('frontend/assets/vendor/css/jquery.fancybox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/css/swiper.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/css/cubeportfolio.min.css') }}" rel="stylesheet">
    <!-- Style Sheet -->
    <link href="{{ asset('frontend/assets/agency/css/style.css') }}" rel="stylesheet">
</head>

<body data-offset="90" data-spy="scroll" data-target=".navbar">

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
@include('frontend.body.header')
<!--Header End-->

@yield('main')

<!--Footer Start-->
@include('frontend.body.footer')
<!--Footer End-->

<!--Animated Cursor-->
<div id="aimated-cursor">
    <div id="cursor">
        <div id="cursor-loader"></div>
    </div>
</div>
<!--Animated Cursor End-->

<!--Scroll Top Start-->
<span class="scroll-top-arrow"><i class="fas fa-angle-up"></i></span>
<!--Scroll Top End-->

<!-- JavaScript -->
<script src="{{ asset('frontend/assets/vendor/js/bundle.min.js') }}"></script>
<!-- Plugin Js -->
<script src="{{ asset('frontend/assets/vendor/js/jquery.appear.js') }}"></script>
<script src="{{ asset('frontend/assets/vendor/js/jquery.fancybox.min.js') }}"></script>
<script src="{{ asset('frontend/assets/vendor/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('frontend/assets/vendor/js/swiper.min.js') }}"></script>
<script src="{{ asset('frontend/assets/vendor/js/morphext.min.js') }}"></script>
<script src="{{ asset('frontend/assets/vendor/js/TweenMax.min.js') }}"></script>
<script src="{{ asset('frontend/assets/vendor/js/wow.min.js') }}"></script>
<script src="{{ asset('frontend/assets/vendor/js/jquery.cubeportfolio.min.js') }}"></script>
<!-- REVOLUTION JS FILES -->
<script src="{{ asset('frontend/assets/vendor/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('frontend/assets/vendor/js/jquery.themepunch.revolution.min.js') }}"></script>
<!-- SLIDER REVOLUTION EXTENSIONS -->
<script src="{{ asset('frontend/assets/vendor/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script src="{{ asset('frontend/assets/vendor/js/extensions/revolution.extension.carousel.min.js') }}"></script>
<script src="{{ asset('frontend/assets/vendor/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script src="{{ asset('frontend/assets/vendor/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script src="{{ asset('frontend/assets/vendor/js/extensions/revolution.extension.migration.min.js') }}"></script>
<script src="{{ asset('frontend/assets/vendor/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script src="{{ asset('frontend/assets/vendor/js/extensions/revolution.extension.parallax.min.js') }}"></script>
<script src="{{ asset('frontend/assets/vendor/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script src="{{ asset('frontend/assets/vendor/js/extensions/revolution.extension.video.min.js') }}"></script>
<!-- google map -->
<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCJRG4KqGVNvAPY4UcVDLcLNXMXk2ktNfY"></script> -->
<script src="{{ asset('frontend/assets/agency/js/map.js') }}"></script>
<!-- custom script -->
<script src="{{ asset('frontend/assets/vendor/js/contact_us.js') }}"></script>
<script src="{{ asset('frontend/assets/agency/js/script.js') }}"></script>

</body>
</html>