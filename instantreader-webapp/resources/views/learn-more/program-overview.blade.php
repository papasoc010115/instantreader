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
    .reading-program {        
        margin-top: 3em;
        padding: 2em 1em 0em 1em;
    }
    .align-left, .card-text {
        text-align: left
    }
    .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        width: 18rem;
        margin-bottom: 1em;
        margin-left: auto;
        margin-right: auto;
    }
    .card-btn {
        padding-left: 1em; 
        padding-right: 1em;
    }
    
    .banner-img {
        width: 100%;
        height: auto;
    }

    #about-basic {
        background-color: #483BF7;
    }

    #about-advanced {
        background-color: #E68F15;
    }

    #about-mastery {
        background-color: #FA3C3C;
    }

    #about-compass {
        background-color: #AB3AFC;
    }

    @media only screen and (min-width: 768px) {
        .half-paragraph-left-align {
            text-align: justify;
        }
        .half-paragraph-right-align {
            text-align: justify;
            text-align-last: right;
        }
    }

    @media only screen and (max-width: 767px) {
        .media-content {
            order: 1;
        }

        .text-content {
            order: 2;
        }
    }

</style>

<!-- Banner -->
<section class="page-title cursor-light">
    <!-- Pattern Layers -->
    <div class="pattern-layers">
        <div class="layer-one"></div>
        <div class="layer-two"></div>
    </div>

    <div class="auto-container">
        <h2 class="hide-cursor">{{ $data->sect1_heading }}</h2>
        <ul class="page-breadcrumb link">
            <li>
                <a href="{{ route('learn-more.reading-assessment') }}" class="card-btn btn btn-large btn-rounded btn-pink btn-hvr-blue mt-3">
                    Join the program                    
                </a>
            </li>
        </ul>
    </div>
</section>

<!-- Cards -->
<section class="pb-0" style="margin-top: 2em;">
    <div class="container" style="max-width: 80%">
        <div class="row">        

            <!-- Basic Card -->
            <div class="col-lg-3">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('marketing-site/assets/img/basic-card-img.jpg') }}" alt="img">
                    <div class="card-body">
                        <h5 class="card-title">Basic</h5>
                        <p class="card-text">{!! $data->sect1_para1 !!}</p>
                        <button class="card-btn btn btn-large btn-rounded btn-pink btn-hvr-blue mt-3" id="card-btn-basic">Read More
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
            
            <!-- Advanced Card -->
            <div class="col-lg-3">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('marketing-site/assets/img/advanced-card-img.jpg') }}" alt="img">
                    <div class="card-body">
                        <h5 class="card-title">Advanced</h5>
                        <p class="card-text">{!! $data->sect1_para2 !!}</p>
                        <button class="card-btn btn btn-large btn-rounded btn-pink btn-hvr-blue mt-3" id="card-btn-advanced">Read More
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
            
            <!-- Mastery Card -->
            <div class="col-lg-3">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('marketing-site/assets/img/mastery-card-img.jpg') }}" alt="img">
                    <div class="card-body">
                        <h5 class="card-title">Mastery</h5>
                        <p class="card-text">{!! $data->sect1_para3 !!}</p>
                        <button class="card-btn btn btn-large btn-rounded btn-pink btn-hvr-blue mt-3" id="card-btn-mastery">Read More
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
            
            <!-- Compass Card -->
            <div class="col-lg-3">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('marketing-site/assets/img/compass-card-img.jpg') }}" alt="img">
                    <div class="card-body">
                        <h5 class="card-title">COMPASS</h5>
                        <p class="card-text">{!! $data->sect1_para4 !!}</p>
                        <button class="card-btn btn btn-large btn-rounded btn-pink btn-hvr-blue mt-3" id="card-btn-compass">Read More
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

<!-- About Basic -->
<section class="reading-program page-title" id="about-basic">
    <div class="auto-container">
        <h2 class="hide-cursor" style="margin-bottom: 0.5em">{{ $data->sect2_heading }}</h2>
    </div>
    <div class="container">
        <div class="row py-4 d-flex align-items-center wow fadeInLeft">
            <div class="col-md-6 media-content">
                <div id="about-basic-carousel" class="carousel slide carousel-fade" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#about-basic-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#about-basic-carousel" data-slide-to="1"></li>
                        <li data-target="#about-basic-carousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img id="about-basic-image-1" class="d-block w-100" src="{{ asset('marketing-site/assets/img/consultation.jpg') }}" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img id="about-basic-image-2" class="d-block w-100" src="{{ asset('marketing-site/assets/img/tutor-application.jpg') }}" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img id="about-basic-image-3" class="d-block w-100" src="{{ asset('marketing-site/assets/img/consultation.jpg') }}" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#about-basic-carousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#about-basic-carousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-md-6 text-content">
                <p id="about-basic-paragraph-1" class="half-paragraph-left-align py-2" style="color: white">{!! $data->sect2_para1 !!}</p>
                <p id="about-basic-paragraph-2" class="half-paragraph-left-align py-2" style="color: white">{!! $data->sect2_para2 !!}</p>
                <p id="about-basic-paragraph-3" class="half-paragraph-left-align py-2" style="color: white">{!! $data->sect2_para3 !!}</p>
            </div>
        </div>
        <div class="row py-4">
            <div class="col-md-12">
                <a href="{{ route('learn-more.reading-assessment') }}" class="card-btn btn btn-xlarge btn-rounded btn-pink btn-hvr-blue mt-3">
                    Join Basic Program                    
                </a>  
            </div>
        </div>
    </div>
</section>

<!-- About Advanced -->
<section class="reading-program page-title" id="about-advanced">
    <div class="auto-container">
        <h2 class="hide-cursor" style="margin-bottom: 0.5em; color: white">{{ $data->sect3_heading }}</h2>
    </div>
    <div class="container">
        <div class="row py-4 d-flex align-items-center wow fadeInRight">
            <div class="col-md-6 text-content">
                <p id="about-advanced-paragraph-1" class="half-paragraph-right-align py-2" style="color: white">{!! $data->sect3_para1 !!}</p>
                <p id="about-advanced-paragraph-2" class="half-paragraph-right-align py-2" style="color: white">{!! $data->sect3_para2 !!}</p>
                <p id="about-advanced-paragraph-3" class="half-paragraph-right-align py-2" style="color: white">{!! $data->sect3_para3 !!}</p>         
            </div>
            <div class="col-md-6 media-content">
                <div id="about-advanced-carousel" class="carousel slide carousel-fade" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#about-advanced-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#about-advanced-carousel" data-slide-to="1"></li>
                        <li data-target="#about-advanced-carousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img id="about-advanced-image-1" class="d-block w-100" src="{{ asset('marketing-site/assets/img/tutor-application.jpg') }}" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img id="about-advanced-image-2" class="d-block w-100" src="{{ asset('marketing-site/assets/img/consultation.jpg') }}" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img id="about-advanced-image-3" class="d-block w-100" src="{{ asset('marketing-site/assets/img/tutor-application.jpg') }}" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#about-advanced-carousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#about-advanced-carousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="row py-4">
            <div class="col-md-12">
                <a href="{{ route('learn-more.reading-assessment') }}" class="card-btn btn btn-xlarge btn-rounded btn-pink btn-hvr-blue mt-3">
                    Join Advanced Program                    
                </a>  
            </div>
        </div>
    </div>
</section>

<!-- About Mastery -->
<section class="reading-program page-title" id="about-mastery">
    <div class="auto-container">
        <h2 class="hide-cursor" style="margin-bottom: 0.5em">{{ $data->sect4_heading }}</h2>
    </div>
    <div class="container">
        <div class="row py-4 d-flex align-items-center wow fadeInLeft">
            <div class="col-md-6 media-content">
                <div id="about-mastery-carousel" class="carousel slide carousel-fade" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#about-mastery-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#about-mastery-carousel" data-slide-to="1"></li>
                        <li data-target="#about-mastery-carousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img id="about-mastery-image-1" class="d-block w-100" src="{{ asset('marketing-site/assets/img/consultation.jpg') }}" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img id="about-mastery-image-2" class="d-block w-100" src="{{ asset('marketing-site/assets/img/tutor-application.jpg') }}" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img id="about-mastery-image-3" class="d-block w-100" src="{{ asset('marketing-site/assets/img/consultation.jpg') }}" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#about-mastery-carousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#about-mastery-carousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-md-6 text-content">
                <p id="about-mastery-paragraph-1" class="half-paragraph-left-align py-2" style="color: white">{!! $data->sect4_para1 !!}</p>
                <p id="about-mastery-paragraph-2" class="half-paragraph-left-align py-2" style="color: white">{!! $data->sect4_para2 !!}</p>
                <p id="about-mastery-paragraph-3" class="half-paragraph-left-align py-2" style="color: white">{!! $data->sect4_para3 !!}</p> 
            </div>
        </div>
        <div class="row py-4">
            <div class="col-md-12">
                <a href="{{ route('learn-more.reading-assessment') }}" class="card-btn btn btn-xlarge btn-rounded btn-blue btn-hvr-pink mt-3">
                    Join Mastery Program                    
                </a>  
            </div>
        </div>
    </div>
</section>

<!-- About Compass -->
<section class="reading-program page-title" id="about-compass">
    <div class="auto-container">
        <h2 class="hide-cursor" style="margin-bottom: 0.5em; color: white">{{ $data->sect5_heading }}</h2>
    </div>
    <div class="container">
        <div class="row py-4 d-flex align-items-center wow fadeInRight">
            <div class="col-md-6 text-content">
                <p id="about-compass-paragraph-1" class="half-paragraph-right-align py-2" style="color: white">{!! $data->sect5_para1 !!}</p>
                <p id="about-compass-paragraph-2" class="half-paragraph-right-align py-2" style="color: white">{!! $data->sect5_para2 !!}</p>
                <p id="about-compass-paragraph-3" class="half-paragraph-right-align py-2" style="color: white">{!! $data->sect5_para3 !!}</p>            
            </div>
            <div class="col-md-6 media-content">
                <video preload="none" controls poster="{{ asset('marketing-site/assets/img/consultation.jpg') }}" playsinline>
                    <source src="{{ asset('marketing-site/assets/agency/img/video.mp4') }}" type="video/mp4">
                </video>
            </div>
        </div>
        <div class="row py-4 d-flex align-items-center wow fadeInLeft">
            <div class="col-md-6 media-content">
                <div id="about-compass-carousel" class="carousel slide carousel-fade" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#about-compass-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#about-compass-carousel" data-slide-to="1"></li>
                        <li data-target="#about-compass-carousel" data-slide-to="2"></li>
                        <li data-target="#about-compass-carousel" data-slide-to="3"></li>
                        <li data-target="#about-compass-carousel" data-slide-to="4"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img id="about-compass-image-1" class="d-block w-100" src="{{ asset('marketing-site/assets/img/tutor-application.jpg') }}" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img id="about-compass-image-2" class="d-block w-100" src="{{ asset('marketing-site/assets/img/consultation.jpg') }}" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img id="about-compass-image-3" class="d-block w-100" src="{{ asset('marketing-site/assets/img/tutor-application.jpg') }}" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                            <img id="about-compass-image-4" class="d-block w-100" src="{{ asset('marketing-site/assets/img/consultation.jpg') }}" alt="Fourth slide">
                        </div>
                        <div class="carousel-item">
                            <img id="about-compass-image-5" class="d-block w-100" src="{{ asset('marketing-site/assets/img/tutor-application.jpg') }}" alt="Fifth slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#about-compass-carousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#about-compass-carousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-md-6 text-content">
                <p id="about-compass-paragraph-4" class="half-paragraph-left-align py-2" style="color: white">{!! $data->sect5_para4 !!}</p>
                <p id="about-compass-paragraph-5" class="half-paragraph-left-align py-2" style="color: white">{!! $data->sect5_para5 !!}</p>
                <p id="about-compass-paragraph-6" class="half-paragraph-left-align py-2" style="color: white">{!! $data->sect5_para6 !!}</p>   
            </div>
        </div>
        <div class="row py-4">
            <div class="col-md-12">
                <a href="{{ route('learn-more.reading-assessment') }}" class="card-btn btn btn-xlarge btn-rounded btn-blue btn-hvr-pink mt-3">
                    Join COMPASS Program                    
                </a>  
            </div>
        </div>
    </div>
</section>

<!-- script for scrolling down -->
<script>
    document.getElementById("card-btn-basic").onclick = function () {
        document.getElementById("about-basic").scrollIntoView({behavior: 'smooth'});
    }    
    document.getElementById("card-btn-advanced").onclick = function () {
        document.getElementById("about-advanced").scrollIntoView({behavior: 'smooth'});
    }
    document.getElementById("card-btn-mastery").onclick = function () {
        document.getElementById("about-mastery").scrollIntoView({behavior: 'smooth'});
    }
    document.getElementById("card-btn-compass").onclick = function () {
        document.getElementById("about-compass").scrollIntoView({behavior: 'smooth'});
    }
</script>
<!--PAGE CONTENT END -->
@endsection