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

    .page-title{
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
    }

    .auto-container{
        text-align: center;
        padding: 230px 0px 130px;
        background-color: rgba(35, 122, 254, .9);
    }

    :root {
        --marquee-width: 100vw;
        --marquee-height: 60vh;
        --marquee-elements-displayed: 2;
        --marquee-element-width: calc(var(--marquee-width)/var(--marquee-elements-displayed));
        --marquee-animation-duration: calc(var(--marquee-elements) * 2s);
    }

    .marquee{
        overflow: hidden;
        width: var(--marquee-width);
        height: var(--marquee-height);
    }

    .marquee-content{
        list-style: none;
        height: 100%;
        animation: scrolling var(--marquee-animation-duration) linear infinite;
    }

    .marquee-content li {
        white-space: no-wrap;
        width: var(--marquee-element-width);
        height: 70vh;
        flex-shrink: 1;
    }

    .marquee-image {
        object-fit: cover;
    }

    @keyframes scrolling{
        0% {
            transform: translateX(100);
        }
        100% {
            transform: translateX(calc(-1*var(--marquee-element-width)*var(--marquee-elements-displayed)));
        }
    }

    .ir-kids-club-description-section{
        position: absolute;
        top: 0;
        left: 0;
        width: 100vw;
        min-height: 70vh;
        z-index: 2;
        background-color: rgba(35, 122, 254, .9);
    }

    .test{
        background-color: yellow;
    }

</style>

<!--WELCOME Start-->
<section id="welcome-section" class="page-title cursor-light p-0">
    <div class="auto-container">
        <h2 class="hide-cursor px-3" id="welcome-title">Welcome to Instant Reader!</h2>
        <p class="text-white px-3" id="welcome-paragraph">
            There are many variations of passages of Lorem Ipsum available, but the majority
            have suffered alteration in some form, by injected humour, or randomised words which don't look
            even slightly believable.
        </p>
    </div>
</section>
<!--WELCOME End-->

<!--HIGHLIGHT VIDEO start-->
<section id="highlight-video-section" class="cursor-light gradient-bg1" >
    <div class="container fullscreen-container orientation-container">
        <div class="row d-flex align-items-center">
            <div class="col-lg-7 video-container wow fadeInLeft">
                <video id="highlight-video-player" preload="none" controls poster="{{ asset('marketing-site/assets/agency/img/blog-news-1.jpg')}}" playsinline>
                    <source id="highlight-video-source" src="{{ asset('marketing-site/assets/agency/img/video.mp4') }}" type="video/mp4">
                </video>
            </div>
            <div class="col-lg-5 pl-4 pt-4 wow fadeInRight">
                <div class="text-container-content">
                    <div id="highlight-title-one" class="gradient-text1 first-title">
                        Highlight
                    </div>
                    <div id="highlight-title-two" class="second-title">
                        Video
                    </div>
                </div>
                <div class="text-container-content">
                    <div id="highlight-paragraph" class="video-desc">
                        Lorem ipsum is simply dummy text of the printing and typesetting. Lorem Ipsum has been the
                        industry’s standard dummy. Lorem Ipsum has been the industry’s standard dummy.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--ORIENTATION VIDEO End-->

<!--LIVE PARENT ORIENTATION Start-->
<section id="parent-orientation-section" class="pb-0">
    <div class="container live-parent-margin white-text">
        <div class="row d-flex align-items-center">
            <div class="col-lg-6 wow fadeInLeft mb-4">
                <div class="heading-area">
                    <h2 class="title"><span class="main-color js-rotating">LIVE, FREE</span> Parent Orientations</h2>
                    <h4 class="sub-title">Every <span class="alt-color js-rotating">Tuesday, Thursday, Saturday</span> 8 PM (PH Time)</h4>
                    <p id="parent-orientation-paragraph" class="para">There are many variations of passages of Lorem Ipsum available, but the majority
                        have suffered alteration in some form, by injected humour, or randomised words which don't look
                        even slightly believable. If you are going to use a passage of Lorem Ipsum.
                    </p>
                    <a class="btn btn-large btn-rounded btn-pink btn-hvr-blue my-3"  href="{{ route('contact-us.book-consultation') }}">Book Appointment for Live Agent
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
                <div id="parent-orientation-carousel" class="carousel slide carousel-fade" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#parent-orientation-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#parent-orientation-carousel" data-slide-to="1"></li>
                        <li data-target="#parent-orientation-carousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img id="parent-orientation-image-1" class="d-block w-100" src="{{ asset('marketing-site/assets/agency/img/vector-art-2.png') }}" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img id="parent-orientation-image-2" class="d-block w-100" src="{{ asset('marketing-site/assets/agency/img/vector-art-2.png') }}" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img id="parent-orientation-image-3" class="d-block w-100" src="{{ asset('marketing-site/assets/agency/img/vector-art-2.png') }}" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#parent-orientation-carousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#parent-orientation-carousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--LIVE PARENT ORIENTATION End-->


<!--Get Quote Model Popup-->
<!-- NOTE: use these attributes to open the modal
    data-fancybox data-animation-duration="500" data-src="#animatedModal" href="javascript:void(0);" 
-->
<section id="parent-orientation-booking-modal">
    <div id="animatedModal" class="animated-modal hidden quote-content">
        <!--Heading-->
        <div class="heading-area pb-2 mx-570">
            <span class="sub-title">Schedule Parent Orientation</span>
            <h2 class="title mt-2">Read in <span class="alt-color">20 days</span></h2>
        </div>
        <!--Contact Form-->
        <form action="{{ route('home.store_orientation') }}" method="POST" class="contact-form">
            @csrf
            <div class="row">
                <!--Left Column-->
                <div class="col-md-6">                    
                    <div class="form-group">
                        <input name="orientationParentFirstName" class="form-control" type="text" placeholder="Parent's First Name" required="true">
                    </div>
                    <div class="form-group">
                        <input name="orientationStudentFirstName" class="form-control" type="text" placeholder="Student's First Name" required="true">
                    </div>
                    <div class="form-group">
                        <input name="orientationContactNum" class="form-control" type="tel" placeholder="Contact No." required="true">
                    </div>
                </div>

                <!--Right Column-->
                <div class="col-md-6">
                    <div class="form-group">
                        <input name="orientationParentLastName" class="form-control" type="text" placeholder="Parent's Last Name" required="true">
                    </div>
                    <div class="form-group">
                        <input name="orientationStudentLastName" class="form-control" type="text" placeholder="Student's Last Name" required="true">
                    </div>
                    <div class="form-group">
                        <input name="orientationEmail" class="form-control" type="email" placeholder="Email" required="true">
                    </div>
                </div>

                <!--Full Column-->
                <div class="col-md-12 mt-3">
                    <div class="form-group">
                        <input name="orientationAddress" class="form-control" placeholder="Address"></input>
                    </div>
                </div>

                <div class="col-md-12 mt-3">
                    <select name="orientationSchedule" class="form-control" id="scheduleSelect" required>
                        <option>mm/dd/yyyy | 6:00AM</option>
                        <option>mm/dd/yyyy | 7:00AM</option>
                        <option>mm/dd/yyyy | 8:00AM</option>
                        <option>mm/dd/yyyy | 9:00AM</option>
                    </select>
                </div>

                <!-- Captcha Field -->
                <div class="row mt-4">
                    <div class="col-md-12 d-flex justify-content-center">
                        <div class="g-recaptcha" data-sitekey="6LdtbighAAAAAHhWzmWkWwkT53HNEcL5CPxg9PN_"></div>
                    </div>
                </div>

                <!--Button-->
                <div class="col-md-12">
                    <button type="submit" id="quote_submit_btn" class="btn btn-large btn-rounded btn-blue btn-hvr-pink">Book Schedule
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
        </form>
    </div>
</section>


<!--ABOUT PEOPLE Start-->
<section id="about-people-section" class="text-center gradient-bg2">
    <div class="container">
        <!--TITLE-->
        <div class="row">
            <div class="col-md-12 wow fadeInUp">
                <div class="heading-area mx-570 mb-5">
                    <h2 id="about-people-title" class="title text-white">We have some <span class="main-color js-rotating">great, ideal</span> talented
                        staff</h2>
                </div>
            </div>
        </div>
        <!--PEOPLE-->
        <div class="row wow fadeInUp about-people-container">
            <div class="col-md-6">
                <div class="team-item">
                    <!--Team Image-->
                    <img id="vicki-image" alt="Teacher Vicki" class="team-image" src="{{ asset('marketing-site/assets/agency/img/vector-art-2.png') }}">
                    <!--Name-->
                    <div class="name">
                        <img alt="shape" src="{{ asset('marketing-site/assets/agency/img/shape-11.png') }}">
                        <h6 id="vicki-nameplate" class="text-white">TEACHER VICKI</h6>
                    </div>
                    <!--Designation-->
                    <h6 id="vicki-designation" class="designation mb-2 text-white">Founder & Director</h6>
                    <!--Description-->
                    <p id="vicki-description" class="about-people text-white">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
                    <!--Team Social-->
                    <div class="team-social social-icon-bg-hvr pb-4">
                        <a id="vicki-facebook" href="#"><i aria-hidden="true" class="fab fa-facebook-f text-white"></i></a>
                        <a id="vicki-linkedin" href="#"><i aria-hidden="true" class="fab fa-linkedin-in text-white"></i></a>
                        <a id="vicki-twitter" href="#"><i aria-hidden="true" class="fab fa-twitter text-white"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="team-item">
                    <!--Team Image (will be fixed after once file import and form programs are complete)-->
                    <img id="likha-image" alt="Sir Likha" class="team-image" src="{{ asset('marketing-site/assets/agency/img/vector-art-2.png') }}"> 
                    <!--Name-->
                    <div class="name">
                        <img alt="shape" src="{{ asset('marketing-site/assets/agency/img/shape-11.png') }}">
                        <h6 id="likha-nameplate" class="text-white">SIR LIKHA</h6>
                    </div>
                    <!--Designation-->
                    <h6 id="likha-designation" class="designation mb-2 text-white">Director</h6>
                    <!--Description-->
                    <p id="likha-description" class="about-people text-white">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
                    <!--Team Social-->
                    <div class="team-social social-icon-bg-hvr pb-4">
                        <a id="likha-facebook" href="#"><i aria-hidden="true" class="fab fa-facebook-f text-white"></i></a>
                        <a id="likha-linkedin" href="#"><i aria-hidden="true" class="fab fa-linkedin-in text-white"></i></a>
                        <a id="likha-twitter" href="#"><i aria-hidden="true" class="fab fa-twitter text-white"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--ABOUT PEOPLE End-->

<!--AREA JURISDICTIONS Start-->
<section id="area-jurisdiction-section">
    <div class="mapouter">
        <div class="row area-juris-desc">
            <div class="col-md-12 wow fadeInUp">
                <div class="heading-area mx-570 mb-5">
                    <h1 class="title alt-color"><span class="main-color">AREA</span> JURISDICTIONS</h2>
                    <h4 class="title alt-color"> We have branches in</h4>
                    <h4 class="title"><span class="js-rotating main-color">Philippines, UAE, Indonesia, Thailand, Vietnam</span></h4>
                    <p id="area-jurisdiction-paragraph" class="para">There are many variations of passages of Lorem Ipsum available, but the majority
                        have suffered alteration in some form, by injected.</p>
                </div>
            </div>
        </div>
        <div class="gmap-canvas wow zoomIn">
            <!-- NO API -->
            <iframe class="gmap" loading="lazy" referrerpolicy="no-referrer-when-downgrade" src="https://www.google.com/maps/d/u/2/embed?mid=1JiwHL7YTTdgTD0NWiZtuuIQr-TuC25s&ehbc=2E312F" height="750px">
            </iframe>
            <!-- WITH GOOGLE API -->
            <!-- <div class="full-map" id="map"></div> -->
        </div>
        <div class="row area-juris-book">
            <a class="btn btn-xlarge btn-rounded btn-pink btn-hvr-blue mt-3 book-ora" href="{{ route('learn-more.reading-assessment') }}">Book Online Reading Assessment
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
</section>
<!--AREA JURISDICTIONS End-->

<!--TESTIMONIES Start-->
<section id="testimonies-section" class="gradient-bg1 text-center">
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
                    <div id="testimonies-item-1" class="item">
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
                    <div id="testimonies-item-2" class="item">
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
                    <div id="testimonies-item-3" class="item">
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
                    <div id="testimonies-item-4" class="item">
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
                    <div id="testimonies-item-5" class="item">
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
                    <div id="testimonies-item-6" class="item">
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
                    <div id="testimonies-item-7" class="item">
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
                    <div id="testimonies-item-8" class="item">
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
                <img id="testimonies-image-1" alt="image" src="{{ asset('marketing-site/assets/agency/img/avatar-1.png') }}"></button>
            <button class="owl-dot active" data-position="30%,auto,auto,16%">
                <img id="testimonies-image-2" alt="image" src="{{ asset('marketing-site/assets/agency/img/avatar-2.png') }}"></button>
            <button class="owl-dot active" data-position="auto,auto,38%,7%">
                <img id="testimonies-image-3" alt="image" src="{{ asset('marketing-site/assets/agency/img/avatar-3.png') }}"></button>
            <button class="owl-dot active" data-position="auto,auto,23%,18%">
                <img id="testimonies-image-4" alt="image" src="{{ asset('marketing-site/assets/agency/img/avatar-7.png') }}"></button>
            <!--data-position[top,right,bottom,left]-->
            <button class="owl-dot active" data-position="20%,19%,auto,auto">
                <img id="testimonies-image-5" alt="image" src="{{ asset('marketing-site/assets/agency/img/avatar-5.png') }}"></button>
            <button class="owl-dot active" data-position="28%,6%,auto,auto">
                <img id="testimonies-image-6" alt="image" src="{{ asset('marketing-site/assets/agency/img/avatar-6.png') }}"></button>
            <button class="owl-dot active" data-position="40%,15%,auto,auto">
                <img id="testimonies-image-7" alt="image" src="{{ asset('marketing-site/assets/agency/img/avatar-4.png') }}"></button>
            <button class="owl-dot active" data-position="auto,21%,22%,auto">
                <img id="testimonies-image-8" alt="image" src="{{ asset('marketing-site/assets/agency/img/avatar-2.png') }}"></button>
        </div>
    </div>
</section>
<!--TESTIMONIES End-->

<!--KIDS CLUB Start-->
<section id="kids-club-section" class="p-0 m-0">
    <!-- <div class="scrolling-img-container">
        <div class="scrolling-img">
            <div class="row overlay-text">
                <div class="col-md-12 wow fadeInUp">
                    <div class="heading-area mx-570 mb-5">
                        <h1 class="text-white">Join the Instant Reader <span class="main-color">Kids Club</span></h1>
                        <p class="text-white">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 
                            from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions 
                            from the 1914 translation by H. Rackham.</p>
                        <a class="btn btn-xlarge btn-rounded btn-pink btn-hvr-blue mt-3" href="{{ route('learn-more.reading-assessment') }}">Book Online Reading Assessment
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
    </div> -->

    <div class="container m-0 p-0">
        <!-- Marquee -->
        <div class="marquee d-flex align-items-center justify-content-center">
            <ul id="ir-kids-club-list" class="marquee-content d-flex align-items-center justify-content-center">
                <li class="d-flex align-items-center justify-content-center"><img class="marquee-image" src="{{ asset('marketing-site/assets/img/tutor-application.jpg') }}" /></li>
                <li class="d-flex align-items-center justify-content-center"><img class="marquee-image" src="{{ asset('marketing-site/assets/img/consultation.jpg') }}" /></li>
                <li class="d-flex align-items-center justify-content-center"><img class="marquee-image" src="{{ asset('marketing-site/assets/img/tutor-application.jpg') }}" /></li>
                <li class="d-flex align-items-center justify-content-center"><img class="marquee-image" src="{{ asset('marketing-site/assets/img/consultation.jpg') }}" /></li>
                <li class="d-flex align-items-center justify-content-center"><img class="marquee-image" src="{{ asset('marketing-site/assets/img/tutor-application.jpg') }}" /></li>
                <li class="d-flex align-items-center justify-content-center"><img class="marquee-image" src="{{ asset('marketing-site/assets/img/consultation.jpg') }}" /></li>
            </ul>
        </div>

        <!-- IR Kids Description -->
        <div class="ir-kids-club-description-section d-flex align-items-center justify-content-center">
            <div class="row w-75">
                <div class="col-lg-12 wow fadeInUp">
                    <div class="heading-area my-3 text-center my-5">
                        <h1 class="text-white font-weight-bold mb-3">Join the Instant Reader <span class="main-color">Kids Club</span></h1>
                        <p class="text-white">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 
                            from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions 
                            from the 1914 translation by H. Rackham.</p>
                        <a class="btn btn-large btn-rounded btn-pink btn-hvr-blue" href="{{ route('learn-more.kids-club') }}">Join IR Kids Club
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

<!-- ENROLL NOW Start -->
<section id="enroll-now-section" class="p-0 my-5">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-xl-6 wow fadeInLeft">
                <img id="enroll-now-image" class="h-100" src="{{ asset('marketing-site/assets/agency/img/vector-art-2.png') }}" alt="Enroll Now">            
            </div>
            <div class="col-xl-6 wow fadeInRight py-5 enroll-now-detail">
                <div class="heading-area">
                    <h1 id="enroll-now-heading" class="alt-color font-weight-bold">ENROLL NOW!</h1>
                    <p id="enroll-now-paragraph">
                        There are many variations of passages of Lorem Ipsum available, but the majority
                        have suffered alteration in some form, by injected humour, or randomised words which don't look
                        even slightly believable. If you are going to use a passage of Lorem Ipsum.
                    </p>
                    <a class="btn btn-xlarge btn-rounded btn-pink btn-hvr-blue p-auto" href="{{ route('learn-more.reading-assessment') }}">Book Online Reading Assessment
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
<!-- ENROLL NOW End -->

<script>
    // SCRIPT FOR KIDS CLUB MARQUEE -- Start 
    const root = document.documentElement;
    const marqueeElementDisplayed = getComputedStyle(root).getPropertyValue("--marquee-elements-displayed");
    const marqueeContent = document.querySelector(".marquee-content");

    root.style.setProperty("--marquee-elements", marqueeContent.children.length);
    for (let i=0; i<marqueeElementDisplayed+1; i++){
        marqueeContent.appendChild(marqueeContent.children[i].cloneNode(true));
    }
    // SCRIPT FOR KIDS CLUB MARQUEE -- End
</script>

<!--PAGE CONTENT END-->
@endsection