@extends('layouts.marketing-layout')

@section('metadata')
<!-- Page title -->
<title>{{ $data->page_title }}</title>
<!-- Other metadata -->
<meta name="description" content="{{ $data->page_desc }}">
<meta name="keywords" content="{{ $data->page_keywords }}">
<meta name="author" content="{{ $data->page_author }}">
@endsection

@section('content')

<!-- Style Start -->
<style>
    .founder-video {
        max-width: 100%;
    }
    hr {
        border-top: 1px solid;
    }
    .mission-img {
        max-width: 100%;
    }
    .history1-heading, .vision-heading,  .virac-vid-heading, .virac-vid-text {
        text-align: center;
    }
    @media only screen and (min-width: 768px) {
        .half-para { /* for col-md-6 paragraphs in desktop-view (left-aligned)*/
            text-align: justify;
        }
        .half-para-right { /* for col-md-6 paragraphs in desktop-view (right-aligned)*/
            text-align: justify;
            text-align-last: right;
        }
        .mission-img {
            max-width: 50%;
        }
        .founder-video {
            max-width: 50%;
        }
        .history1-heading, .vision-heading,  .virac-vid-heading, .virac-vid-text {
            text-align: right;
        }
    }
    .virac-img-row, .virac-vid-row {
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
    }
    @media only screen and (max-width: 767px) {
        .para {
            text-align: justify;
        }
        .info2-img {
            order: 2;
        }
        .info2-text {
            order: 1;
        }
        .virac-imgs-text {
            order: 2;
        }
        .virac-imgs {
            order: 1;
        }
    }
</style>
<!-- Style End -->

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

<!--Main Information Start-->
<section class="pb-0 bg-light" id="about-us">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 wow fadeInLeft">
                <div class="heading-area">
                    <span class="sub-title">{{ $data->sect1_subheading }}</span>
                    <h2 class="title">{{ $data->sect1_heading }}</h2>
                    <p class="para half-para">{!! $data->sect1_para !!}</p>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInRight">
                <div class="half-img mt-4 pt-3 mt-lg-0 pt-lg-0">
                    <img alt="vector" src="{{ asset('marketing-site/assets/agency/img/blog-news-1.jpg') }}">
                </div>
            </div>
        </div>
    </div>
</section>
<!--Main Information Start-->

<!--Social Media Links Start-->
<section class="bg-light" id="socmedlinks">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="process-wrapp">
                    <a class="pro-step blue" href="{{ $data->sect1_fb }}"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                    <h4 class="service-heading">Facebook</h4>
                </div>
            </div>
            <div class="col-md-4">
                <div class="process-wrapp">
                    <a class="pro-step midnight" href="{{ $data->sect1_twt }}"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                    <h4 class="service-heading">Twitter</h4>
                </div>
            </div>
            <div class="col-md-4">
                <div class="process-wrapp">
                    <a class="pro-step pink" href="{{ $data->sect1_ig }}"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                    <h4 class="service-heading">Instagram</h4>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Social Media Links End-->

<!--History Start-->
<section id="ir-history">
    <div class="container mb-5">
        <!--Heading Row-->
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="heading-area mb-lg-4 mb-3">
                    <h1 class="title">{{ $data->sect2_heading }}</h1>
                </div>
            </div>
        </div>
        <!--Video Row-->
        <div class="row justify-content-center">
            <video class="founder-video" preload="none" controls poster="{{ asset('marketing-site/assets/agency/img/blog-news-1.jpg') }}" playsinline>
                <source src="{{ asset('marketing-site/assets/agency/img/video.mp4') }}" type="video/mp4">
            </video>
        </div>
    </div>
    <hr/>
    <div class="container d-flex mb-5 pb-3">
        <!-- First Information Row -->
        <div class="row mt-lg-5 pt-4 mb-lg-4">
            <div class="col-md-6">
                <div class="heading-area history1-heading">
                    <p class="para half-para-right pt-3" style="color: #282525;">{!! $data->sect2_para1 !!}</p>
                </div>
            </div>
            <div class="col-md-6 wow fadeInRight">
                <div class="half-img mt-2 pt-4 mt-lg-0 pt-lg-0">
                    <img alt="image" src="{{ asset('marketing-site/assets/agency/img/blog-news-1.jpg') }}">
                </div>
            </div>
        </div>
    </div>
    <hr/>
    <div class="container d-flex">
        <!-- Second Information Row -->
        <div class="row mt-lg-5 pt-4">
            <div class="col-md-6 wow fadeInLeft info2-img">
                <div class="half-img mt-2 pt-4 mt-lg-0 pt-lg-0">
                    <img alt="image" src="{{ asset('marketing-site/assets/agency/img/blog-news-1.jpg') }}">
                </div>
            </div>
            <div class="col-md-6 info2-text">
                <div class="heading-area">
                    <p class="para half-para pt-3" style="color: #282525;">{!! $data->sect2_para2 !!}</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--History End-->

<!--Vision Start-->
<section class="gradient-bg1">
    <div class="container d-flex">
        <div class="row">
            <div class="col-md-6 wow">
                <div class="heading-area  vision-heading">
                    <h1 class="title text-white">{{ $data->sect3_heading }}</h1>
                    <p class="para half-para-right text-white">{!! $data->sect3_para !!}</p>
                </div>
            </div>
            <div class="col-md-6 wow fadeInRight">
                <div class="half-img mt-5 pt-4 mt-lg-0 pt-lg-0">
                    <img alt="image" src="{{ asset('marketing-site/assets/agency/img/blog-news-1.jpg') }}">
                </div>
            </div>
        </div>
    </div>
</section>
<!--Vision End-->

<!--Mission Start-->
<section>
    <div class="container">
        <div class="heading-area text-center mb-4">
            <h1 class="title">{{ $data->sect4_heading }}</h1>
            <p class="para">{!! $data->sect4_para !!}</p>
        </div>
        <!--Image Row-->
        <div class="row justify-content-center">
            <img class="mission-img" alt="image" src="{{ asset('marketing-site/assets/agency/img/blog-news-1.jpg') }}">
        </div>
    </div>
</section>
<!--Mission End-->

<!--Project VIRAC Start-->
<section style="background-color: #562FB7;">
    <div class="container mb-5">
        <!--Heading Row-->
        <div class="row">
            <div class="col-md-12 text-center mb-5">
                <div class="heading-area mb-lg-4 mb-3">
                    <h1 class="title text-white">{{ $data->sect5_heading }}</h1>
                </div>
            </div>
        </div>
        <!--Video Row-->
        <div class="row virac-vid-row" style="text-align: right;">
            <!-- Video -->
            <div class="col-md-6 mb-4 virac-vid">
                <div class="row justify-content-center">
                    <video class="virac-video" preload="none" controls poster="{{ asset('marketing-site/assets/agency/img/blog-news-1.jpg')}}" playsinline>
                        <source src="{{ asset('marketing-site/assets/agency/img/video.mp4') }}" type="video/mp4">
                    </video>
                </div>
            </div>
            <!-- Text -->
            <div class="col-md-6 virac-vid-text">
                <div class="heading-area">
                    <p class="para half-para-right text-white">{!! $data->sect5_para1 !!}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row virac-img-row">
            <div class="col-md-6 virac-imgs-text">
                <div class="heading-area">
                    <p class="para half-para text-white">{!! $data->sect5_para2 !!}</p>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="{{ asset('marketing-site/assets/img/tutor-application.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="{{ asset('marketing-site/assets/img/consultation.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="{{ asset('marketing-site/assets/img/tutor-application.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Project VIRAC End-->

@endsection