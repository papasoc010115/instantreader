@extends('layouts.marketing-layout')

@section('content')

<!-- Set the current page variable for the navbar -->
<?php $currentPage = 'home';?>

<!--PAGE CONTENT START-->

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

    .about-people{
        text-align: justify;
    }

    .about-people-container{
        display: flexbox;
        justify-content: center;
    }

    .mapouter{
        position: relative;
        margin-top: 50px;
        margin-bottom: 50px;
    }

    .gmap-canvas {
        margin: auto;
        background: none !important;
        height: 800px;
        width: 90%;
    }

    .area-juris-desc {
        text-align: center;
        margin: 20px;
    }

    .area-juris-book{
        justify-content: center;
    }

    .scrolling-img-container{
        overflow: hidden;
    }

    .scrolling-img{
        background: url("{{ asset('marketing-site/assets/img/ir-logo.png') }}") repeat-x;
        height: 100%;
        width: 100%;
        position: absolute;
        top: 0;
        left: 0;
        background-repeat: repeat;
        background-position: 0 0;
        background-size: auto 100%;
        animation: slide 100s linear infinite;
    }

    .overlay-text{
        text-align: center;
        height: 100%;
        background-color: rgba(35, 122, 254, .8);
    }

    .overlay-text > *{
        margin-top: 90px;
        margin-bottom: 90px;
    }

    @keyframes slide {
        from {
            background-position: 0 0;
        }
        to {
            background-position: -10000px 0;
        }
    }

    .orientation-container{
        min-height: 100%;
        min-height: 100vh;

        display: flex;
        align-items: center;
    }

    .text-container-content{
        margin-bottom: 60px;
    }

    .first-title{
        max-width: 650px; 
        font-size: 70px; 
        line-height: 80px; 
        font-weight: 800; 
        color: #ffffff; 
        font-family:Montserrat;                
    }

    .second-title{
        max-width: 650px; 
        font-size: 70px; 
        line-height: 70px; 
        font-weight: 700; 
        color: #ffffff; 
        font-family:Montserrat;                
    }

    .video-desc{
        max-width: 651px;
        font-size: 20px;
        line-height: 30px;
        font-weight: 300;
        color: #ffffff;
        letter-spacing: 0px;
        font-family: Roboto;
    }

</style>

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

<!--ORIENTATION VIDEO start-->
<section class="cursor-light gradient-bg1" id="home">
    <div class="container fullscreen-container orientation-container">
        <div class="row">
            <div class="col-lg-7 video-container">
                <video id="player1" preload="none" controls poster="{{ asset('marketing-site/assets/agency/img/blog-news-1.jpg')}}" playsinline>
                    <source src="{{ asset('marketing-site/assets/agency/img/video.mp4') }}" type="video/mp4">
                </video>
            </div>
            <div class="col-lg-5 pl-4 pt-4">
                <div class="text-container-content">
                    <div class="gradient-text1 first-title">
                        Orientation
                    </div>
                    <div class="second-title">
                        Video
                    </div>
                </div>
                <div class="text-container-content">
                    <div class="video-desc">
                        Lorem ipsum is simply dummy text of the printing and typesetting. Lorem Ipsum has been the
                        industry’s standard dummy. Lorem Ipsum has been the industry’s standard dummy.
                    </div>
                </div>
                <div class="button text-container-content">
                    <a class="btn btn-slider btn-rounded btn-blue btn-hvr-white" href="javascript:void(0);">
                        Learn More
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
        </div>
    </div>
</section>
<!--ORIENTATION VIDEO End-->

<!--LIVE PARENT ORIENTATION Start-->
<section class="pb-0" id="about-us">
    <div class="container live-parent-margin white-text">
        <div class="row">
            <div class="col-lg-6 wow fadeInLeft">
                <div class="heading-area">
                    <h2 class="title"><span class="alt-color js-rotating">LIVE, FREE</span> Parent Orientations</h2>
                    <h4 class="sub-title">Every <span class="alt-color js-rotating">Tuesday, Thursday, Saturday</span> 8 PM (PH Time)</h4>
                    <p class="para">There are many variations of passages of Lorem Ipsum available, but the majority
                        have suffered alteration in some form, by injected humour, or randomised words which don't look
                        even slightly believable. If you are going to use a passage of Lorem Ipsum.</p>
                    <a class="btn btn-large btn-rounded btn-pink btn-hvr-blue mt-3" href="javascript:void(0);">Book Appointment for Live Agent
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
            <div class="col-lg-6 wow fadeInRight">
                <div class="half-img mt-5 pt-4 mt-lg-0 pt-lg-0">
                    <img alt="vector" src="{{ asset('marketing-site/assets/agency/img/vector-art-2.png') }}">
                </div>
            </div>
        </div>
    </div>
</section>
<!--LIVE PARENT ORIENTATION End-->

<!--ABOUT PEOPLE Start-->
<section class="text-center gradient-bg2" id="team">
    <div class="container">
        <!--DESCRIPTION-->
        <div class="row">
            <div class="col-md-12">
                <div class="heading-area mx-570 mb-5">
                    <h2 class="title text-white">We have some <span class="main-color js-rotating">great, ideal</span> talented
                        staff</h2>
                    <p class="para text-white">There are many variations of passages of Lorem Ipsum available, but the majority
                        have suffered alteration in some form, by injected.</p>
                </div>
            </div>
        </div>
        <!--PEOPLE-->
        <div class="row wow fadeInUp about-people-container">
            <div class="col-md-6">
                <div class="team-item">
                    <!--Team Image-->
                    <img alt="image" class="team-image" src="{{ asset('marketing-site/assets/agency/img/team-img1.png') }}">
                    <!--Name-->
                    <div class="name">
                        <img alt="shape" src="{{ asset('marketing-site/assets/agency/img/shape-11.png') }}">
                        <h6 class="text-white">TEACHER VICKI</h6>
                    </div>
                    <!--Designation-->
                    <h6 class="designation mb-2 text-white">Founder & Director</h6>
                    <!--Description-->
                    <p class="about-people text-white">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
                    <!--Team Social-->
                    <div class="team-social social-icon-bg-hvr pb-4">
                        <a href="#"><i aria-hidden="true" class="fab fa-facebook-f text-white"></i></a>
                        <a href="#"><i aria-hidden="true" class="fab fa-linkedin-in text-white"></i></a>
                        <a href="#"><i aria-hidden="true" class="fab fa-twitter text-white"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="team-item">
                    <!--Team Image-->
                    <img alt="image" class="team-image" src="{{ asset('marketing-site/assets/agency/img/team-img1.png') }}">
                    <!--Name-->
                    <div class="name">
                        <img alt="shape" src="{{ asset('marketing-site/assets/agency/img/shape-11.png') }}">
                        <h6 class="text-white">SIR LIKHA</h6>
                    </div>
                    <!--Designation-->
                    <h6 class="designation mb-2 text-white">Director</h6>
                    <!--Description-->
                    <p class="about-people text-white">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
                    <!--Team Social-->
                    <div class="team-social social-icon-bg-hvr pb-4">
                        <a href="#"><i aria-hidden="true" class="fab fa-facebook-f text-white"></i></a>
                        <a href="#"><i aria-hidden="true" class="fab fa-linkedin-in text-white"></i></a>
                        <a href="#"><i aria-hidden="true" class="fab fa-twitter text-white"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--ABOUT PEOPLE End-->

<!--AREA JURISDICTIONS Start-->
<div class="mapouter">
    <div class="row area-juris-desc">
        <div class="col-md-12">
            <div class="heading-area mx-570 mb-5">
                <h1 class="title alt-color"><span class="main-color">AREA</span> JURISDICTIONS</h2>
                <h4 class="title alt-color"> We have branches in</h4>
                <h4 class="title"><span class="js-rotating main-color">Philippines, UAE, Indonesia, Thailand, Vietnam</span></h4>
                <p class="para alt-color">There are many variations of passages of Lorem Ipsum available, but the majority
                    have suffered alteration in some form, by injected.</p>
            </div>
        </div>
    </div>
    <div class="gmap-canvas">
        <!-- NO API -->
        <iframe class="gmap" loading="lazy" referrerpolicy="no-referrer-when-downgrade" src="https://www.google.com/maps/d/u/2/embed?mid=1JiwHL7YTTdgTD0NWiZtuuIQr-TuC25s&ehbc=2E312F" height="750px">
        </iframe>
        <!-- WITH GOOGLE API -->
        <!-- <div class="full-map" id="map"></div> -->
    </div>
    <div class="row area-juris-book">
        <a class="btn btn-xlarge btn-rounded btn-pink btn-hvr-blue mt-3 book-ora" href="javascript:void(0);">Book Online Reading Assessment
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
<!--AREA JURISDICTIONS End-->

<!--TESTIMONIES Start-->
<section class="gradient-bg1 text-center" id="clients">
    <div class="container">

        <!--Row-->
        <div class="row">
            <div class="col-md-12">
                <div class="heading-area mx-570 mb-5">
                    <h2 class="title text-white m-0">Some <span class="js-rotating">great, ideal</span> words from
                        our clients</h2>
                </div>
            </div>
        </div>

        <!--Row-->
        <div class="row">
            <div class="col-md-12">
                <div class="owl-carousel wow zoomIn" id="testimonial-slider">
                    <div class="item">
                        <p class="para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse tincidunt
                            egestas nunc, at pellentesque arcu sollicitudin et. Aliquam hendrerit diam quis ipsum
                            ultricies, quis ultricies arcu suscipit. Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit. Fusce ut diam quis nulla faucibus venenatis. </p>
                        <h5 class="name gradient-text1">David Villas</h5>
                        <span class="designation">Designer, Company Name</span>
                        <ul class="ratings list-unstyled">
                            <li><i aria-hidden="true" class="fas fa-star"></i></li>
                            <li><i aria-hidden="true" class="fas fa-star"></i></li>
                            <li><i aria-hidden="true" class="fas fa-star"></i></li>
                            <li><i aria-hidden="true" class="fas fa-star"></i></li>
                            <li><i aria-hidden="true" class="fas fa-star"></i></li>
                        </ul>
                    </div>
                    <div class="item">
                        <p class="para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse tincidunt
                            egestas nunc, at pellentesque arcu sollicitudin et. Aliquam hendrerit diam quis ipsum
                            ultricies, quis ultricies arcu suscipit. Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit. Fusce ut diam quis nulla faucibus venenatis. </p>
                        <h5 class="name gradient-text1">David Villas</h5>
                        <span class="designation">Designer, Company Name</span>
                        <ul class="ratings list-unstyled">
                            <li><i aria-hidden="true" class="fas fa-star"></i></li>
                            <li><i aria-hidden="true" class="fas fa-star"></i></li>
                            <li><i aria-hidden="true" class="fas fa-star"></i></li>
                            <li><i aria-hidden="true" class="fas fa-star"></i></li>
                            <li><i aria-hidden="true" class="fas fa-star"></i></li>
                        </ul>
                    </div>
                    <div class="item">
                        <p class="para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse tincidunt
                            egestas nunc, at pellentesque arcu sollicitudin et. Aliquam hendrerit diam quis ipsum
                            ultricies, quis ultricies arcu suscipit. Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit. Fusce ut diam quis nulla faucibus venenatis. </p>
                        <h5 class="name gradient-text1">David Villas</h5>
                        <span class="designation">Designer, Company Name</span>
                        <ul class="ratings list-unstyled">
                            <li><i aria-hidden="true" class="fas fa-star"></i></li>
                            <li><i aria-hidden="true" class="fas fa-star"></i></li>
                            <li><i aria-hidden="true" class="fas fa-star"></i></li>
                            <li><i aria-hidden="true" class="fas fa-star"></i></li>
                            <li><i aria-hidden="true" class="fas fa-star"></i></li>
                        </ul>
                    </div>
                    <div class="item">
                        <p class="para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse tincidunt
                            egestas nunc, at pellentesque arcu sollicitudin et. Aliquam hendrerit diam quis ipsum
                            ultricies, quis ultricies arcu suscipit. Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit. Fusce ut diam quis nulla faucibus venenatis. </p>
                        <h5 class="name gradient-text1">David Villas</h5>
                        <span class="designation">Designer, Company Name</span>
                        <ul class="ratings list-unstyled">
                            <li><i aria-hidden="true" class="fas fa-star"></i></li>
                            <li><i aria-hidden="true" class="fas fa-star"></i></li>
                            <li><i aria-hidden="true" class="fas fa-star"></i></li>
                            <li><i aria-hidden="true" class="fas fa-star"></i></li>
                            <li><i aria-hidden="true" class="fas fa-star"></i></li>
                        </ul>
                    </div>
                    <div class="item">
                        <p class="para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse tincidunt
                            egestas nunc, at pellentesque arcu sollicitudin et. Aliquam hendrerit diam quis ipsum
                            ultricies, quis ultricies arcu suscipit. Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit. Fusce ut diam quis nulla faucibus venenatis. </p>
                        <h5 class="name gradient-text1">David Villas</h5>
                        <span class="designation">Designer, Company Name</span>
                        <ul class="ratings list-unstyled">
                            <li><i aria-hidden="true" class="fas fa-star"></i></li>
                            <li><i aria-hidden="true" class="fas fa-star"></i></li>
                            <li><i aria-hidden="true" class="fas fa-star"></i></li>
                            <li><i aria-hidden="true" class="fas fa-star"></i></li>
                            <li><i aria-hidden="true" class="fas fa-star"></i></li>
                        </ul>
                    </div>
                    <div class="item">
                        <p class="para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse tincidunt
                            egestas nunc, at pellentesque arcu sollicitudin et. Aliquam hendrerit diam quis ipsum
                            ultricies, quis ultricies arcu suscipit. Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit. Fusce ut diam quis nulla faucibus venenatis. </p>
                        <h5 class="name gradient-text1">David Villas</h5>
                        <span class="designation">Designer, Company Name</span>
                        <ul class="ratings list-unstyled">
                            <li><i aria-hidden="true" class="fas fa-star"></i></li>
                            <li><i aria-hidden="true" class="fas fa-star"></i></li>
                            <li><i aria-hidden="true" class="fas fa-star"></i></li>
                            <li><i aria-hidden="true" class="fas fa-star"></i></li>
                            <li><i aria-hidden="true" class="fas fa-star"></i></li>
                        </ul>
                    </div>
                    <div class="item">
                        <p class="para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse tincidunt
                            egestas nunc, at pellentesque arcu sollicitudin et. Aliquam hendrerit diam quis ipsum
                            ultricies, quis ultricies arcu suscipit. Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit. Fusce ut diam quis nulla faucibus venenatis. </p>
                        <h5 class="name gradient-text1">David Villas</h5>
                        <span class="designation">Designer, Company Name</span>
                        <ul class="ratings list-unstyled">
                            <li><i aria-hidden="true" class="fas fa-star"></i></li>
                            <li><i aria-hidden="true" class="fas fa-star"></i></li>
                            <li><i aria-hidden="true" class="fas fa-star"></i></li>
                            <li><i aria-hidden="true" class="fas fa-star"></i></li>
                            <li><i aria-hidden="true" class="fas fa-star"></i></li>
                        </ul>
                    </div>
                    <div class="item">
                        <p class="para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse tincidunt
                            egestas nunc, at pellentesque arcu sollicitudin et. Aliquam hendrerit diam quis ipsum
                            ultricies, quis ultricies arcu suscipit. Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit. Fusce ut diam quis nulla faucibus venenatis. </p>
                        <h5 class="name gradient-text1">David Villas</h5>
                        <span class="designation">Designer, Company Name</span>
                        <ul class="ratings list-unstyled">
                            <li><i aria-hidden="true" class="fas fa-star"></i></li>
                            <li><i aria-hidden="true" class="fas fa-star"></i></li>
                            <li><i aria-hidden="true" class="fas fa-star"></i></li>
                            <li><i aria-hidden="true" class="fas fa-star"></i></li>
                            <li><i aria-hidden="true" class="fas fa-star"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!--Testimonial Thumbs-->
        <div class="owl-dots" id="testimonials-avatar">
            <!--data-position[top,right,bottom,left]-->
            <button class="owl-dot active" data-position="22%,auto,auto,5%">
                <img alt="image" src="{{ asset('marketing-site/assets/agency/img/avatar-1.png') }}"></button>
            <button class="owl-dot active" data-position="30%,auto,auto,16%">
                <img alt="image" src="{{ asset('marketing-site/assets/agency/img/avatar-2.png') }}"></button>
            <button class="owl-dot active" data-position="auto,auto,38%,7%">
                <img alt="image" src="{{ asset('marketing-site/assets/agency/img/avatar-3.png') }}"></button>
            <button class="owl-dot active" data-position="auto,auto,23%,18%">
                <img alt="image" src="{{ asset('marketing-site/assets/agency/img/avatar-7.png') }}"></button>
            <!--data-position[top,right,bottom,left]-->
            <button class="owl-dot active" data-position="20%,19%,auto,auto">
                <img alt="image" src="{{ asset('marketing-site/assets/agency/img/avatar-5.png') }}"></button>
            <button class="owl-dot active" data-position="28%,6%,auto,auto">
                <img alt="image" src="{{ asset('marketing-site/assets/agency/img/avatar-6.png') }}"></button>
            <button class="owl-dot active" data-position="40%,15%,auto,auto">
                <img alt="image" src="{{ asset('marketing-site/assets/agency/img/avatar-4.png') }}"></button>
            <button class="owl-dot active" data-position="auto,21%,22%,auto">
                <img alt="image" src="{{ asset('marketing-site/assets/agency/img/avatar-2.png') }}"></button>
        </div>
    </div>
</section>
<!--TESTIMONIES End-->

<!--KIDS CLUB Start-->
<section class="ir-kids-avatar">
    <div class="scrolling-img-container">
        <div class="scrolling-img">
            <div class="row overlay-text">
                <div class="col-md-12">
                    <div class="heading-area mx-570 mb-5">
                        <h1 class="text-white">Join the Instant Reader <span class="main-color">Kids Club</span></h1>
                        <p class="text-white">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 
                            from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions 
                            from the 1914 translation by H. Rackham.</p>
                        <a class="btn btn-xlarge btn-rounded btn-pink btn-hvr-blue mt-3" href="javascript:void(0);">Book Online Reading Assessment
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
            </div>
        </div>
    </div>
</section>
<!--KIDS CLUB End-->

<!--PAGE CONTENT END-->
@endsection