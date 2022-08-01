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

<!--Section 1 Start-->
<!--Description 1 Start-->
<section class="gradient-bg1">
    <div class="container desc-2">
        <div class="row">
            <div class="col-md-6 wow fadeInLeft">
                <div class="half-img mt-5 pt-4 mt-lg-0 pt-lg-0">
                    <img alt="image" src="{{ asset('marketing-site/assets/img/consultation.jpg') }}">
                </div>
            </div>
            <div class="col-md-6 wow fadeInRight">
                <div class="heading-area">
                    <h2 class="title text-white"><span class="main-color js-rotating">Robust Design, Creative Idea</span> and
                        Development Solutions</h2>
                    <p class="para text-white">There are many variations of passages of Lorem Ipsum available, but the majority
                        have suffered alteration in some form, by injected humour, or randomised words which don't look
                        even slightly believable. If you are going to use a passage of Lorem Ipsum.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Description 1 End-->

<!--Description 2 Start-->
<section class="bg-light">
    <div class="container d-flex">
        <div class="row">
            <div class="col-md-6 wow">
                <div class="heading-area">
                    <h2 class="title"><span class="main-color js-rotating">Robust Design, Creative Idea</span> and
                        Development Solutions</h2>
                    <p class="para" style="vertical-align: middle">There are many variations of passages of Lorem Ipsum available, but the majority
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
<!--Description 2 End-->
<!--Section 1 End-->

<!--Section 2 Start-->
<section class="gradient-bg2">
    <div class="container desc-2">
        <div class="row">
            <div class="col-md-6 wow fadeInLeft">
                <div class="half-img mt-5 pt-4 mt-lg-0 pt-lg-0">
                    <img alt="image" src="{{ asset('marketing-site/assets/img/consultation.jpg') }}">
                </div>
            </div>
            <div class="col-md-6 wow fadeInRight">
                <div class="heading-area">
                    <h2 class="title text-white">Calendar</h2>
                    <p class="para text-white">There are many variations of passages of Lorem Ipsum available, but the majority
                        have suffered alteration in some form, by injected humour, or randomised words which don't look
                        even slightly believable. If you are going to use a passage of Lorem Ipsum.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Section 2 End-->

<!--Booking Form Start-->
<section class="contact-us" id="consultation">

    <div class="container">

        <div class="col-md-12 mt-4 pt-3 mt-lg-0 pt-lg-0 wow">
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
                        <div class="col-md-6 mb-3">
                            <input
                                type="text"
                                class="form-control form-control-user"
                                id="parentFirstName"
                                placeholder="Parent's First Name"
                                required="true"
                            />
                        </div>
                        <div class="col-md-6">
                            <input
                                type="text"
                                class="form-control form-control-user"
                                id="parentLastName"
                                placeholder="Parent's Last Name"
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
                                placeholder="Contact No. (WhatsApp/Viber)"
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

                    <!-- Child's Name Fields -->
                    <div class="form-group row mb-3">
                        <div class="col-md-6 mb-3">
                            <input
                                type="text"
                                class="form-control form-control-user"
                                id="childFirstName"
                                placeholder="Child's First Name"
                                required="true"
                            />
                        </div>
                        <div class="col-md-6">
                            <input
                                type="text"
                                class="form-control form-control-user"
                                id="childLastName"
                                placeholder="Child's Last Name"
                                required="true"
                            />
                        </div>
                    </div>

                    <!-- Location and Child's Age Field -->
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
                        <div class="col-md-2">
                            <input
                                type="number"
                                class="form-control form-control-user"
                                id="age"
                                placeholder="Child's Age"
                                required="true"
                            />
                        </div>
                    </div>

                    <!-- Concerns/Goals Location Field -->
                    <div class="form-group row mb-3">
                        <div class="col-md-12">
                            <textarea class="form-control" id="concernsGoals" rows="3" placeholder="Concerns/Goals for Child" required="true"></textarea>
                        </div>
                    </div>
                    
                    <!--Button-->
                    <div class="col">
                        <button class="btn btn-large btn-rounded btn-pink btn-hvr-blue mt-3">                    
                            Book
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