@extends('layouts.marketing-layout')

@section('content')

<!-- Set the current page variable for the navbar -->
<?php $currentPage = 'about-us';?>

<!--Banner Start-->
<section class="page-title cursor-light">
    <!-- Pattern Layers -->
    <div class="pattern-layers">
        <div class="layer-one"></div>
        <div class="layer-two"></div>
    </div>
    <div class="auto-container">
        <h2 class="hide-cursor">Our Founder & Developer</h2>
        <ul class="page-breadcrumb link">
            <li><a href="/"><span class="icon fas fa-home"></span></a></li>
            <li>About Us</li>
            <li>Our Founder & Developer</li>
        </ul>
    </div>
</section>
<!--Banner End-->

<!--About Us-->
<section class="pb-0" id="about-us">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 wow fadeInLeft">
                <div class="heading-area">
                    <span class="sub-title">We are megaone company</span>
                    <h2 class="title">We are making <span class="alt-color js-rotating">design, ideas</span> better for
                        everyone</h2>
                    <p class="para">There are many variations of passages of Lorem Ipsum available, but the majority
                        have suffered alteration in some form, by injected humour, or randomised words which don't look
                        even slightly believable. If you are going to use a passage of Lorem Ipsum.</p>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInRight">
                <div class="half-img mt-4 pt-3 mt-lg-0 pt-lg-0">
                    <img alt="vector" src="{{ asset('marketing-site/assets/img/teacher-vicki.png') }}">
                </div>
            </div>
        </div>
    </div>
</section>
<!--About Us End-->

<!--Services Start-->
<section id="services">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="process-wrapp">
                    <span class="pro-step blue"><a class="wow fadeInUp" href="https://www.facebook.com/"><span class="fab fa-facebook-f" aria-hidden="true"></span></a></span>
                    <h4 class="service-heading">Facebook</h4>
                </div>
            </div>
            <div class="col-md-3">
                <div class="process-wrapp">
                    <span class="pro-step midnight"><a class="wow fadeInUp" href="https://www.twitter.com/"><i class="fab fa-twitter" aria-hidden="true"></i></a></span>
                    <h4 class="service-heading">Twitter</h4>
                </div>
            </div>
            <div class="col-md-3">
                <div class="process-wrapp">
                    <span class="pro-step purple"><a class="wow fadeInUp" href="https://www.instagram.com/"><i class="fab fa-instagram" aria-hidden="true"></i></a></span>
                    <h4 class="service-heading">Instagram</h4>
                </div>
            </div>
            <div class="col-md-3">
                <div class="process-wrapp">
                    <span class="pro-step pink"><a class="wow fadeInUp" href="https://www.linkedin.com/"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></span>
                    <h4 class="service-heading">Linked-In</h4>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Services End-->

<!--Blog Start-->
<section class="bg-light" id="founder_video">
    <div class="container">
        <!--Row-->
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="heading-area mb-lg-4 mb-3">
                    <span class="title">Our Story</span>
                    <p class="para pt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse tincidunt
                    egestas nunc, at pellentesque arcu sollicitudin et. Aliquam hendrerit diam quis ipsum
                    ultricies, quis ultricies arcu suscipit. Lorem ipsum dolor sit amet, consectetur adipiscing
                    elit. Fusce ut diam quis nulla faucibus venenatis. </p>
                </div>
            </div>
        </div>
        <!--Row-->
        <div class="row justify-content-center">
            <video id="player1" style="max-width: 60%" preload="none" controls poster="{{ asset('marketing-site/assets/agency/img/blog-news-1.jpg')}}" playsinline>
                <source src="{{ asset('marketing-site/assets/agency/img/video.mp4') }}" type="video/mp4">
            </video>
        </div>
    </div>
</section>
<!--Blog End-->

<!--Counters Start-->
<section id="counters">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 pl-lg-4 order-lg-2 wow fadeInRight">
                <div class="heading-area">
                    <span class="sub-title">We are megaone company</span>
                    <h2 class="title">We have done some great <span class="js-rotating">stuff, idea</span>.
                    </h2>
                    <p class="para">There are many variations of passages of Lorem Ipsum available, but the
                        majority have suffered alteration in some form, by injected.</p>
                </div>
                <ul class="counter-list list-unstyled">
                    <li class="counter-item">
                        <i aria-hidden="true" class="fas fa-users"></i>
                        <h6 class="counter-number"><span class="count">500</span>+</h6>
                        <p class="sub-title">Happy Clients</p>
                    </li>
                    <li class="counter-item">
                        <i aria-hidden="true" class="fas fa-list-alt"></i>
                        <h6 class="counter-number"><span class="count">1074</span>+</h6>
                        <p class="sub-title">Lines Of Code</p>
                    </li>
                    <li class="counter-item">
                        <i aria-hidden="true" class="fas fa-award"></i>
                        <h6 class="counter-number"><span class="count">600</span>+</h6>
                        <p class="sub-title">Project Completed</p>
                    </li>
                </ul>
            </div>
            <div class="col-lg-6 wow fadeInLeft">
                <div class="half-img mt-5 pt-4 mt-lg-0 pt-lg-0">
                    <img alt="vector" src="{{ asset('marketing-site/assets/agency/img/vector-art-3.png')}}">
                </div>
            </div>
        </div>
    </div>
</section>
<!--Counters End-->

@endsection