@extends('layouts.marketing-layout')

@section('content')

<!-- Style Start -->
<style>
    #founder-video {
        max-width: 60%
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

<!--Video Start-->
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
            <video id="founder-video" preload="none" controls poster="{{ asset('marketing-site/assets/agency/img/blog-news-1.jpg')}}" playsinline>
                <source src="{{ asset('marketing-site/assets/agency/img/video.mp4') }}" type="video/mp4">
            </video>
        </div>
    </div>
</section>
<!--Video End-->

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