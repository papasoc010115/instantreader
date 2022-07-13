@extends('layouts.marketing-layout')

@section('content')
<!--Banner Start-->
<section class="page-title cursor-light">
    <!-- Pattern Layers -->
    <div class="pattern-layers">
        <div class="layer-one"></div>
        <div class="layer-two"></div>
    </div>
    <div class="auto-container">
        <h2 class="hide-cursor">Book a Free Consultation</h2>
        <ul class="page-breadcrumb link">
            <li><a href="/"><span class="icon fas fa-home"></span></a></li>
            <li>Contact Us</li>
            <li>Book a Free Consultation</li>
        </ul>
    </div>
</section>
<!--Banner End-->

<!--Parallax Start-->
<section class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 wow fadeInLeft">
                <div class="heading-area">
                    <span class="sub-title">We are megaone company</span>
                    <h2 class="title"><span class="main-color js-rotating">Robust Design, Creative Idea</span> and
                        Development Solutions</h2>
                    <p class="para">There are many variations of passages of Lorem Ipsum available, but the majority
                        have suffered alteration in some form, by injected humour, or randomised words which don't look
                        even slightly believable. If you are going to use a passage of Lorem Ipsum.</p>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInRight">
                <div class="half-img mt-5 pt-4 mt-lg-0 pt-lg-0">
                    <img alt="image" src="{{ asset('marketing-site/assets/img/consultation.jpg') }}">
                </div>
            </div>
        </div>
    </div>
</section>
<!--Parallax End-->

<!--Contact Start-->
<section class="contact-us" id="consultation">

    <div class="container">

        <div class="row align-items-top">

            <div class="col-lg-12 mt-4 pt-3 mt-lg-0 pt-lg-0 wow fadeInLeft">
                <!--Heading-->
                <div class="heading-area pb-2">
                    <h2 class="title mt-0">Booking Form</h2>
                </div>
                <!--Contact Form-->
                <form class="contact-form" id="booking-form-data">
                    @csrf
                    <div class="row">
                        <!--Result-->
                        <div class="col-12" id="result"></div>

                        <!--Left Column-->
                        <div class="col-md-6">                    
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Parent's First Name" required="true">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Student's First Name" required="true">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Contact No." required="true">
                            </div>
                        </div>

                        <!--Right Column-->
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" type="email" placeholder="Parent's Last Name" required="true">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="email" placeholder="Student's Last Name" required="true">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Email" required="true">
                            </div>
                        </div>

                        <!--Full Column-->
                        <div class="col-md-12">
                            <div class="form-group">
                                <input class="form-control" placeholder="Address"></input>
                            </div>
                        </div>
                        
                        <!--Button-->
                        <div class="col-md-12">
                            <a class="btn btn-large btn-rounded btn-purple btn-hvr-blue d-block mt-4 contact_btn" href="javascript:void(0);"
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
@endsection