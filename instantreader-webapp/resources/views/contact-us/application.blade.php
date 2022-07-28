@extends('layouts.marketing-layout')

@section('content')

<!-- Style Start -->
<style>
    .heading-area.justify-content-center {
        margin-bottom: 1em;
    }
    .para {
        text-align: justify;
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
        <h2 class="hide-cursor">Start a Career With Us</h2>
        <ul class="page-breadcrumb link">
            <li><a href="/"><span class="icon fas fa-home"></span></a></li>
            <li>Contact Us</li>
            <li>Start a Career With Us</li>
        </ul>
    </div>
</section>
<!--Banner End-->

<!--Application Form Start-->
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
                    <h2 class="title mt-0">Application Form</h2>
                </div>
                <!--Actual Form-->
                <form class="application-form" id="application-form-data">
                    @csrf
                    <div class="form-group row mb-3">

                        <!-- Name Fields -->
                        <div class="form-group row mb-3">
                            <div class="col-md-6 mb-3">
                                <input
                                    type="text"
                                    class="form-control form-control-user"
                                    id="applicantFirstName"
                                    placeholder="First Name"
                                />
                            </div>
                            <div class="col-md-6">
                                <input
                                    type="text"
                                    class="form-control form-control-user"
                                    id="applicantLastName"
                                    placeholder="Last Name"
                                />
                            </div>
                        </div>

                        <!-- Contact Fields -->
                        <div class="form-group row mb-3">
                            <div class="col-md-6 mb-3">
                                <input
                                    type="tel"
                                    class="form-control form-control-user"
                                    id="applicantContactNo"
                                    placeholder="Contact No."
                                />
                            </div>
                            <div class="col-md-6">
                                <input
                                    type="email"
                                    class="form-control form-control-user"
                                    id="applicantEmail"
                                    placeholder="Email"
                                />
                            </div>
                        </div>

                        <!-- Address Field -->
                        <div class="form-group row mb-3">
                            <div class="col-md-12">
                                <input
                                    type="text"
                                    class="form-control form-control-user"
                                    id="applicantAddress"
                                    placeholder="Address"
                                />
                            </div>
                        </div>

                        <!-- Status Field -->
                        <div class="form-group row mb-3">
                            <label for="applicantStatus" class="col-lg-3 col-form-label ml-2">Status</label>
                            <div class="col-md-3">
                                <select class="custom-select">
                                    <option value="fulltime" selected>Full-Time</option>
                                    <option value="parttime">Part-Time</option>
                                </select>
                            </div>
                        </div>
                        
                        <!-- Resume field -->
                        <div class="form-group row mb-5">
                            <label for="applicantResume" class="col-lg-3 col-form-label ml-2">Upload Résumé/CV</label>
                            <div class="col-md-4 custom-file">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="resumeFile">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                            </div>
                        </div>

                        <!--Button-->
                        <div class="col-md-12">
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

@endsection