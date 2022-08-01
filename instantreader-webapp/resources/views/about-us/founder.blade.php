@extends('layouts.marketing-layout')

@section('content')

<!-- Style Start -->
<style>
    .founder-video {
        max-width: 100%;
    }
    .center {
        display: block;
        margin-left: auto;
        margin-right: auto;
    }
    .mission-img {
        max-width: 100%;
    }
    .history1-heading, .vision-heading,  .virac-vid-heading {
        text-align: center;
    }
    @media only screen and (min-width: 768px) {
        .mission-img {
            max-width: 50%;
        }
        .founder-video {
            max-width: 50%;
        }
        .history1-heading, .vision-heading,  .virac-vid-heading {
            text-align: right;
        }
    }
    .virac-img-row, .virac-vid-row {
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
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
<!--Main Information Start-->

<!--Social Media Links Start-->
<section id="services">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="process-wrapp">
                    <a class="pro-step blue" href="https://www.facebook.com/"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                    <h4 class="service-heading">Facebook</h4>
                </div>
            </div>
            <div class="col-md-3">
                <div class="process-wrapp">
                    <a class="pro-step midnight" href="https://www.twitter.com/"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                    <h4 class="service-heading">Twitter</h4>
                </div>
            </div>
            <div class="col-md-3">
                <div class="process-wrapp">
                    <a class="pro-step purple" href="https://www.instagram.com/"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                    <h4 class="service-heading">Instagram</h4>
                </div>
            </div>
            <div class="col-md-3">
                <div class="process-wrapp">
                    <a class="pro-step pink" href="https://www.linkedin.com/"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>
                    <h4 class="service-heading">Linked-In</h4>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Social Media Links End-->

<!--History Start-->
<section class="bg-light" id="ir-history">
    <div class="container mb-5">
        <!--Heading Row-->
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="heading-area mb-lg-4 mb-3">
                    <h2 class="title">Instant Reader History</h2>
                    <p class="para pt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse tincidunt
                    egestas nunc, at pellentesque arcu sollicitudin et. Aliquam hendrerit diam quis ipsum
                    ultricies, quis ultricies arcu suscipit. Lorem ipsum dolor sit amet, consectetur adipiscing
                    elit. Fusce ut diam quis nulla faucibus venenatis. </p>
                </div>
            </div>
        </div>
        <!--Video Row-->
        <div class="row justify-content-center">
            <video class="founder-video" preload="none" controls poster="{{ asset('marketing-site/assets/agency/img/blog-news-1.jpg')}}" playsinline>
                <source src="{{ asset('marketing-site/assets/agency/img/video.mp4') }}" type="video/mp4">
            </video>
        </div>
    </div>
    <div class="container d-flex mb-5">
        <!-- First Information Row -->
        <div class="row">
            <div class="col-md-6 wow">
                <div class="heading-area history1-heading">
                    <h2 class="title alt-color">Title</h2>
                    <p class="para">There are many variations of passages of Lorem Ipsum available, but the majority
                        have suffered alteration in some form, by injected humour, or randomised words which don't look
                        even slightly believable. If you are going to use a passage of Lorem Ipsum.</p>
                </div>
            </div>
            <div class="col-md-6 wow fadeInRight">
                <div class="half-img mt-5 pt-4 mt-lg-0 pt-lg-0">
                    <img alt="image" src="{{ asset('marketing-site/assets/img/consultation.jpg') }}">
                </div>
            </div>
        </div>
    </div>
    <div class="container d-flex">
        <!-- Second Information Row -->
        <div class="row">
            <div class="col-md-6 wow fadeInLeft">
                <div class="half-img mt-5 pt-4 mt-lg-0 pt-lg-0">
                    <img alt="image" src="{{ asset('marketing-site/assets/img/consultation.jpg') }}">
                </div>
            </div>
            <div class="col-md-6 wow">
                <div class="heading-area">
                    <h2 class="title main-color">Title</h2>
                    <p class="para">There are many variations of passages of Lorem Ipsum available, but the majority
                        have suffered alteration in some form, by injected humour, or randomised words which don't look
                        even slightly believable. If you are going to use a passage of Lorem Ipsum.</p>
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
                    <h2 class="title text-white">Our Vision</h2>
                    <p class="para text-white">There are many variations of passages of Lorem Ipsum available, but the majority
                        have suffered alteration in some form, by injected humour, or randomised words which don't look
                        even slightly believable. If you are going to use a passage of Lorem Ipsum.</p>
                </div>
            </div>
            <div class="col-md-6 wow fadeInRight">
                <div class="half-img mt-5 pt-4 mt-lg-0 pt-lg-0">
                    <img alt="image" src="{{ asset('marketing-site/assets/img/consultation.jpg') }}">
                </div>
            </div>
        </div>
    </div>
</section>
<!--Vision End-->

<!--Mission Start-->
<section class="bg-light">
    <div class="container">
        <div class="heading-area text-center mb-5">
            <h2 class="title">Our Mission</h2>
            <p class="para">There are many variations of passages of Lorem Ipsum available, but the majority
                have suffered alteration in some form.</p>
        </div>
        <!--Video Row-->
        <div class="row justify-content-center">
            <img class="mission-img" alt="image" src="{{ asset('marketing-site/assets/img/consultation.jpg') }}">
        </div>
    </div>
</section>
<!--Mission End-->

<!--Project VIRAC Start-->
<section class="gradient-bg2">
    <div class="auto-container px-5 mb-5">
        <!--Heading Row-->
        <div class="row">
            <div class="col-md-12 text-center mb-5">
                <div class="heading-area mb-lg-4 mb-3">
                    <h2 class="title text-white">Project VIRAC</h2>
                </div>
            </div>
        </div>
        <div class="row virac-img-row">
            <div class="col-md-6 mb-3">
                <div id="virac-carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img class="d-block w-100" src="{{  asset('marketing-site/assets/agency/img/blog-news-2.jpg')  }}" alt="First slide">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100" src="{{  asset('marketing-site/assets/agency/img/blog-news-2.jpg')  }}" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100" src="{{  asset('marketing-site/assets/agency/img/blog-news-2.jpg')  }}" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="heading-area">
                    <h2 class="title">Lorem Ipsum</h2>
                    <p class="para text-white">There are many variations of passages of Lorem Ipsum available, but the majority
                        have suffered alteration in some form, by injected humour, or randomised words which don't look
                        even slightly believable.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="auto-container px-5">
        <!--Heading Row-->
        <div class="row virac-vid-row">
            <div class="col-md-6 mb-3">
                <div class="heading-area mb-lg-4 mb-3 virac-vid-heading">
                    <h2 class="title">Lorem Ipsum</h2>
                    <p class="para pt-2 text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse tincidunt
                    egestas nunc, at pellentesque arcu sollicitudin et. Aliquam hendrerit diam quis ipsum
                    ultricies, quis ultricies arcu suscipit. Lorem ipsum dolor sit amet, consectetur adipiscing
                    elit. Fusce ut diam quis nulla faucibus venenatis. </p>
                </div>
            </div>
            <div class="col-md-6">
                <!--Video Row-->
                <div class="row justify-content-center">
                    <video class="virac-video" preload="none" controls poster="{{ asset('marketing-site/assets/agency/img/blog-news-1.jpg')}}" playsinline>
                        <source src="{{ asset('marketing-site/assets/agency/img/video.mp4') }}" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Vision End-->

<!--Sign-Up for Newsletter Start-->
<section class="application">

    <div class="container">

        <div class="row align-items-top">

            <!-- Side Information -->
            <div class="col-lg-5 order-lg-2 wow">
                <div class="application-detail">
                    <div class="contact-dots" data-dots=""></div>
                    <!--Heading-->
                    <div class="heading-area justify-content-center">
                        <h2 class="title mt-0 pb-1">Lorem Ipsum</h2>
                        <p class="para">There are many variations of passages of Lorem Ipsum available, but the majority
                            have suffered .</p>
                    </div>

                    <div class="col-lg-12 wow">
                        <div class="half-img mt-4 pt-1 mt-lg-0 pt-lg-0">
                            <img alt="sample" src="{{ asset('marketing-site/assets/img/tutor-application.jpg') }}">
                        </div>
                    </div>
                </div>
            </div>

            <!--Application Form-->
            <div class="col-lg-7 mt-4 pt-3 mt-lg-0 pt-lg-0 wow">
                <!--Heading-->
                <div class="heading-area pb-2">
                    <h2 class="title mt-0">Sign-up Now</h2>
                </div>
                <!--Actual Form-->
                <form class="newsletter-form" id="newsletter-form-data">
                    @csrf
                    <div class="form-group row mb-3">

                        <!-- Name Field -->
                        <div class="form-group row mb-4">
                            <div class="col-md-12">
                                <input
                                    type="text"
                                    class="form-control form-control-user"
                                    id="userFulltName"
                                    placeholder="Full Name"
                                />
                            </div>
                        </div>

                        <!-- Email Field -->
                        <div class="form-group row mb-4">
                            <div class="col-md-12">
                                <input
                                    type="email"
                                    class="form-control form-control-user"
                                    id="userEmail"
                                    placeholder="Email"
                                />
                            </div>
                        </div>

                        <!-- Address Field -->
                        <div class="form-group row mb-4">
                            <div class="col-md-12">
                                <input
                                    type="text"
                                    class="form-control form-control-user"
                                    id="userddress"
                                    placeholder="Current Country/City"
                                />
                            </div>
                        </div>

                        <!--Button-->
                        <div class="col-md-4 mt-4">
                            <a class="btn btn-large btn-rounded btn-purple btn-hvr-blue d-block ontact_btn" href="javascript:void(0);"
                               id="apply_btn"><i class="fa fa-spinner fa-spin mr-2 d-none" aria-hidden="true"></i><b>Apply</b>
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

        </div>

    </div>

</section>
<!--Sign-Up for Newsletter  End-->

@endsection