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

<!--Booking Form Start-->
<section class="contact-us" id="consultation">

    <div class="container">

        <div class="row align-items-top">

            <div class="col-lg-12 mt-4 pt-3 mt-lg-0 pt-lg-0 wow">
                <!--Heading-->
                <div class="heading-area pb-2">
                    <h2 class="title mt-0">Booking Form</h2>
                </div>
                <!--Form-->
                <form class="booking-form" id="booking-form-data">
                    @csrf
                    <div class="form-group row mb-3">

                        <!-- Parent's Name Fields -->
                        <div class="form-group row mb-3">
                            <div class="col-md-6">
                                <input
                                    type="text"
                                    class="form-control form-control-user"
                                    id="parentFirstName"
                                    placeholder="Parent's First Name"
                                />
                            </div>
                            <div class="col-md-6">
                                <input
                                    type="text"
                                    class="form-control form-control-user"
                                    id="parentLastName"
                                    placeholder="Parents'Last Name"
                                />
                            </div>
                        </div>

                        <!-- Child's Name Fields -->
                        <div class="form-group row mb-3">
                            <div class="col-md-6">
                                <input
                                    type="text"
                                    class="form-control form-control-user"
                                    id="childFirstName"
                                    placeholder="Child's First Name"
                                />
                            </div>
                            <div class="col-md-6">
                                <input
                                    type="text"
                                    class="form-control form-control-user"
                                    id="childLastName"
                                    placeholder="Child's Last Name"
                                />
                            </div>
                        </div>

                        <!-- Contact Fields -->
                        <div class="form-group row mb-3">
                            <div class="col-md-6">
                                <input
                                    type="tel"
                                    class="form-control form-control-user"
                                    id="parentContactNo"
                                    placeholder="Contact No."
                                />
                            </div>
                            <div class="col-md-6">
                                <input
                                    type="email"
                                    class="form-control form-control-user"
                                    id="parentntEmail"
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
                                    id="parentAddress"
                                    placeholder="Address"
                                />
                            </div>
                        </div>

                        <!-- Inquiry Location Field -->
                        <div class="form-group row mb-4">
                            <div class="col-md-6">
                                <select class="custom-select" id="location-select">
                                    <option selected disabled>Location Where You Inquired From</option>
                                    <option value="cabuyao">Instant Reader Cabuyao</option>
                                    <option value="calamba">Instant Reader Calamba</option>
                                    <option value="main">Instant Reader Main</option>
                                    <option value="starosa">Instant Reader Sta.Rosa</option>
                                    <option value="others">Others</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                            <input
                                    type="text"
                                    class="form-control form-control-user"
                                    id="otherLocation"
                                    placeholder="Others"
                                    disabled
                                />
                            </div>
                        </div>
                        
                        <!--Button-->
                        <div class="col-md-12">
                            <a class="btn btn-large btn-rounded btn-purple btn-hvr-blue d-block mt-4 contact_btn" href="javascript:void(0);"
                               id="apply_btn"><i class="fa fa-spinner fa-spin mr-2 d-none" aria-hidden="true"></i><b>Book</b>
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

<script>
    document.getElementById('location-select').addEventListener('change', function() {
        if (this.value === "others"){
            document.getElementById('otherLocation').disabled = false;
        } else{
            document.getElementById('otherLocation').value = "";
            document.getElementById('otherLocation').disabled = true;
        }
    });
</script>

@endsection