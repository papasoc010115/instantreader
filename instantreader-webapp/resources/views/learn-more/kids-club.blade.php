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

<!--PAGE CONTENT START -->

<!-- Style -->
<style>
    .nocursor { cursor:none; }
    .fadeIn {
        opacity: 1;
        animation-name: fadeInOpacity;
        animation-iteration-count: 1;
        animation-timing-function: ease-in;
        animation-duration: 2s;
    }

    @keyframes fadeInOpacity {
        0% {
            opacity: 0;
        }
        100% {
            opacity: 1;
        }
    }

    /* INTRODUCTION */
    .introduction{
        position: relative;
        width: 100%;
        height: 80vh;
        display: flex;
        justify-content: center;
        align-items: center;
        overflow: hidden;
    }

    .introduction::before{
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: #4287f5;
        border-radius: 0 0 50% 50%/0 0 100% 100%;
        transform: scaleX(1.5);
    }

    .introduction-content{
        position: relative;
        z-index: 1;
        margin: 0 auto;
        max-width: 900px;
        text-align: center;

    }

    .introduction-content h2{
        margin: 0;
        margin-bottom: 1.5rem;
        font-weight: bold;
        padding: 0;
        color: white;
        font-size: 3.5rem;
    }

    .introduction-content p{
        color: white;
        font-size: 1.2rem;
    }

    .scrolling-img-container{
        overflow: hidden;
    }

    .scrolling-img{
        background: url("{{ asset('marketing-site/assets/img/kids-club-img2.png') }}") repeat-x;
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

    .ir-kids-avatar{
        height: 700px;
    }

    .overlay-text{
        text-align: center;
        height: 100%;
        background-color: rgba(0, 0, 0, .9);
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
    @media only screen and (min-width: 768px) {
        .carousel-text {
            text-align: right;
        }
        .half-para { /* for col-md-6 paragraphs in desktop-view (left-aligned)*/
            text-align: justify;
        }
        .half-para-right { /* for col-md-6 paragraphs in desktop-view (right-aligned)*/
            text-align: justify;
            text-align-last: right;
        }
    }
    @media only screen and (max-width: 767px) {
        .carousel-text {
            order: 2;
            text-align: center;
        }
        .carousel-imgs {
            order: 1;
        }
    }
</style>

<!-- Introduction -->
<section class="nocursor introduction page-title cursor-light" style="background-color: white" id="intro">
    <div class="introduction-content fadeIn">
        <h2>{{ $data->sect1_heading }}</h2>
        <p>{!! $data->sect1_para !!}</p>
    </div>
</section>

<section>
    <div class="container mb-5">
        <h1 class="text-center mb-5">{{ $data->sect2_heading }}</h1> 
        <div class="row py-5">    
            <div class="col-md-6">
                <!--Video Row-->
                <div class="row mb-3">
                    <video class="kidsclub-video" preload="none" controls poster="{{ asset('marketing-site/assets/agency/img/blog-news-1.jpg')}}" playsinline>
                        <source src="{{ asset('marketing-site/assets/agency/img/video.mp4') }}" type="video/mp4">
                    </video>
                </div>
            </div>  
            <div class="col-md-6 video-text">
                <p class="half-para" style="color: #282525;">{!! $data->sect2_para1 !!}</p>
            </div>
        </div>
        <div class="row py-5">
            <div class="col-md-6 carousel-text">
                <p class="half-para-right" style="color: #282525">{!! $data->sect2_para2 !!}</p>
            </div>
            <div class="col-md-6 mb-3 carousel-imgs">
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

<section class="nocursor cursor-light ir-kids-avatar">
    <div class="scrolling-img-container">
        <div class="scrolling-img" style="background-image: {{ asset('marketing-site/assets/img/kids-club-img1.png') }}">
            <div class="row overlay-text">
                <div class="col-md-12">
                    <div class="heading-area mx-570 mb-5 lg-mb-0 lg-pb-0">
                        <h1 class="text-white"><strong>{{ $data->sect3_heading }}</strong></h1>
                        <br>
                        <p class="text-white">{!! $data->sect3_para !!}</p>
                        <button class="card-btn btn btn-large btn-rounded btn-pink btn-hvr-blue mt-3">Join Now
                        <div class="btn-hvr-setting">
                            <ul class="btn-hvr-setting-inner">
                                <li class="btn-hvr-effect"></li>
                                <li class="btn-hvr-effect"></li>
                                <li class="btn-hvr-effect"></li>
                                <li class="btn-hvr-effect"></li>
                            </ul>
                        </div>
                    </button>
                    </div>
                </div> 
            </div>
        </div>
    </div>
</section>
<!--PAGE CONTENT END -->
@endsection