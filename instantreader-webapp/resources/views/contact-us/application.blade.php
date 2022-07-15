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
        <h2 class="hide-cursor">Start a Career With Us</h2>
        <ul class="page-breadcrumb link">
            <li><a href="/"><span class="icon fas fa-home"></span></a></li>
            <li>Contact Us</li>
            <li>Start a Career With Us</li>
        </ul>
    </div>
</section>
<!--Banner End-->

<!--Contact Start-->
<section class="application" id="contact">

    <div class="container">

        <div class="row align-items-top">

            <div class="col-lg-5 order-lg-2 wow">
                <div class="contact-detail">
                    <div class="contact-dots" data-dots=""></div>
                    <!--Heading-->
                    <div class="heading-area justify-content-center" style="margin-bottom: 1em">
                        <h2 class="title mt-0 pb-1">Lorem Ipsum</h2>
                        <p class="para" style="text-align:justify">There are many variations of passages of Lorem Ipsum available, but the majority
                            have suffered .</p>
                    </div>

                    <div class="col-lg-12 wow">
                        <div class="half-img mt-4 pt-1 mt-lg-0 pt-lg-0">
                            <img alt="vector" src="{{ asset('marketing-site/assets/img/tutor-application.jpg') }}">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-7 mt-4 pt-3 mt-lg-0 pt-lg-0 wow">
                <!--Heading-->
                <div class="heading-area pb-2">
                    <h2 class="title mt-0">Application Form</h2>
                </div>
                <!--Contact Form-->
                <form class="contact-form" id="contact-form-data">
                    @csrf
                    <div class="row">
                        <!--Result-->
                        <div class="col-12" id="result"></div>

                        <!--Left Column-->
                        <div class="col-md-6">                    
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="First Name" required="true" style="font-size: 80%">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Contact No." required="true" style="font-size: 80%">
                            </div>
                        </div>

                        <!--Right Column-->
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" type="email" placeholder="Last Name" required="true" style="font-size: 80%">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Email" required="true" style="font-size: 80%">
                            </div>
                        </div>

                        <!--Full Column-->
                        <div class="col-md-12">
                            <div class="form-group">
                                <input class="form-control" placeholder="Address" style="font-size: 80%"></input>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <select list="statuses" class="form-control" style="font-size: 80%"></input>
                                <option value="full-time" selected>Full-Time</option>
                                <option value="part-time">Part-Time</option>
                            </select>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <span class="pr-4">Upload Résumé</span><input type="file" id="resumeFile">
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