@extends('layouts.marketing-layout')

@section('content')

<!-- Style Start -->
<style>
    .para {
        text-align: justify;
    }
    @media only screen and (max-width: 767px) {
        .btn-col {
            text-align: center;
        }
        .form-heading {
            text-align: center;
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
        <h2 class="hide-cursor">Start a Career With Us</h2>
        <ul class="page-breadcrumb link">
            <li><a href="/"><span class="icon fas fa-home"></span></a></li>
            <li>Contact Us</li>
            <li>Start a Career With Us</li>
        </ul>
    </div>
</section>
<!--Banner End-->

<!--Section 1 Start-->
<!--Job Description Start-->
<section class="bg-light">
    <div class="container desc-2">
        <div class="row">
            <div class="col-md-6 wow fadeInLeft">
                <div class="half-img mt-5 pt-4 mt-lg-0 pt-lg-0">
                    <img alt="image" src="{{ asset('marketing-site/assets/img/consultation.jpg') }}">
                </div>
            </div>
            <div class="col-md-6 wow fadeInRight">
                <div class="heading-area">
                    <h2 class="title">Job Description</h2>
                    <p class="para">There are many variations of passages of Lorem Ipsum available, but the majority
                        have suffered alteration in some form, by injected humour, or randomised words which don't look
                        even slightly believable. If you are going to use a passage of Lorem Ipsum.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Job Description End-->

<!--Job Requirements Start-->
<section class="gradient-bg1">
    <div class="container d-flex">
        <div class="row">
            <div class="col-md-6 wow">
                <div class="heading-area">
                    <h2 class="title text-white">Job Requirements</h2>
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
<!--Job Requirements End-->
<!--Section 1 End-->

<!--Application Form Start-->
<section class="contact-us" id="consultation">
    <div class="container">

        <div class="col-md-12 mt-4 pt-3 mt-lg-0 pt-lg-0 wow">
            <!--Heading-->
            <div class="heading-area pb-2 form-heading">
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
                                id="firstName"
                                placeholder="First Name"
                                required="true"
                            />
                        </div>
                        <div class="col-md-6">
                            <input
                                type="text"
                                class="form-control form-control-user"
                                id="lastName"
                                placeholder="Last Name"
                                required="true"
                            />
                        </div>
                    </div>

                    <!-- Contact Fields -->
                    <div class="form-group row mb-3">
                        <div class="col-md-6 mb-3">
                            <input
                                type="tel"
                                class="form-control form-control-user"
                                id="contactNo"
                                placeholder="Contact No."
                                required="true"
                            />
                        </div>
                        <div class="col-md-6">
                            <input
                                type="email"
                                class="form-control form-control-user"
                                id="email"
                                placeholder="Email"
                                required="true"
                            />
                        </div>
                    </div>

                    <!-- Address Field -->
                    <div class="form-group row mb-3">
                        <div class="col-md-6 mb-3">
                            <input
                                type="text"
                                class="form-control form-control-user"
                                id="address"
                                placeholder="City, Country"
                                required="true"
                            />
                        </div>
                    </div>
                    
                    <!-- Resume field -->
                    <div class="form-group row mb-5">
                        <label for="applicantResume" class="col-md-2 col-form-label">Upload Résumé/CV</label>
                        <div class="col-md-4 custom-file">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="resumeFile" required="true">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                        </div>
                    </div>

                    <!--Button-->
                    <div class="col btn-col">
                        <button class="btn btn-large btn-rounded btn-pink btn-hvr-blue">                    
                            Apply
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

    </div>

</section>

@endsection