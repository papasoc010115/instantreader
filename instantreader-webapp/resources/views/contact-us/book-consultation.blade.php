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

<!-- Style Start -->
<style>
    .heading-area {
        margin-bottom: 2rem; 
    }

    @media only screen and (max-width: 767px) {
        .btn-col {
            text-align: center;
        }
        .form-heading {
            text-align: center;
        }
    }
    
    .vertical-align-center {
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
    }

    #day-selection {
        height: 200px;
    }

    #reading-assessment-carousel{
        width: 90%;
    }

    .carousel-control{
        width: 5%;
    }

    .carousel-card {
        border-radius: 10px;
        background-color: #D9D9D9;
    }

    .general-time-card {
        width: 150px;
        height: 50px;
        border-radius: 10px;
        background-color: #D9D9D9;
    }

    .specific-time-card {
        width: 250px;
        height: 75px;
        border-radius: 10px;
        background-color: #D9D9D9;
    }

    .carousel-card:hover, .general-time-card:hover, .specific-time-card:hover {
        cursor: pointer;
        color: white;
        background-color: #564F4F;
    }

    .is-active{
        color: white;
        background-color: #483BF7;
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
        <h2 class="hide-cursor">Book a Free Consultation</h2>
        <ul class="page-breadcrumb link">
            <li>
                <button id="scroll-to-form" class="card-btn btn btn-large btn-rounded btn-pink btn-hvr-blue mt-3">
                Book Now <i class="fas fa-angle-double-down" style="font-size:0.8em"></i>                  
                </button>
            </li>
        </ul>
    </div>
</section>
<!--Banner End-->

<!--Section 1 Start-->
<section>
    <!--Heading-->
    <div class="heading-area pb-2 text-center">
        <h2 class="title mt-0">{{ $data->sect1_heading }}</h2>
    </div>
    
    <!--Description 1-->
    <div class="container desc-2 mb-5">
        <div class="row vertical-align-center">
            <div class="col-md-6 wow fadeInLeft">
                <div class="half-img mt-5 pt-4 mt-lg-0 pt-lg-0">
                    <img alt="image" src="{{ url($data->sect1_image1) }}">
                </div>
            </div>
            <div class="col-md-6 wow fadeInRight">
                <div class="heading-area">
                    <p class="para">{!! $data->sect1_para1 !!}</p>
                </div>
            </div>
        </div>
    </div>

    <!--Description 2-->
    <div class="container d-flex">
        <div class="row vertical-align-center">
            <div class="col-md-6 wow">
                <div class="heading-area">
                    <p class="para" style="vertical-align: middle">{!! $data->sect1_para2 !!}</p>
                </div>
            </div>
            <div class="col-md-6 wow fadeInRight">
                <div class="half-img mt-5 pt-4 mt-lg-0 pt-lg-0">
                    <img alt="image" src="{{ url($data->sect1_image2) }}">
                </div>
            </div>
        </div>
    </div>
</section>
<!--Section 1 End-->

<!-- Calendar Start -->
<section class="bg-light pb-0 pt-4 m-0 wow fadeInUp" id="calendar-reading-assessment">
    <div class="container">

        <!-- Calendar Paragraph -->
        <div class="row">
            <div class="col-12 pt-5">
                <h2>{{ $data->sect2_heading }}</h2>
                <p class="para">{!! $data->sect2_para !!}</p>
            </div>
        </div>

        <!-- Day Carousel -->
        <div id="day-selection" class="w-100 d-flex align-items-center justify-content-center my-5">
            <div class="carousel-control text-center">
                <i type="button" class="fas fa-2x fa-chevron-left" data-bs-target="#reading-assessment-carousel" data-bs-slide="prev"></i>
            </div>
            <div id="reading-assessment-carousel" class="carousel slide h-100">
                <div class="carousel-inner h-100">
                    <div class="carousel-item h-100 active">
                        <ul class="row m-auto h-100 list-unstyled">
                            <li class="col-3 py-3 h-100" >
                                <div class="carousel-card h-100 d-flex align-items-center justify-content-center text-center">
                                    <p>
                                        August 05, 2022
                                        <br>
                                        Available Slots
                                    </p>
                                </div>
                            </li>
                            <li class="col-3 py-3 h-100">
                                <div class="carousel-card h-100 d-flex align-items-center justify-content-center text-center">
                                    <p>
                                        August 06, 2022
                                        <br>
                                        Available Slots
                                    </p>
                                </div>
                            </li>
                            <li class="col-3 py-3 h-100">
                                <div class="carousel-card h-100 d-flex align-items-center justify-content-center text-center">
                                    <p>
                                        August 07, 2022
                                        <br>
                                        Available Slots
                                    </p>
                                </div>
                            </li>
                            <li class="col-3 py-3 h-100">
                                <div class="carousel-card h-100 d-flex align-items-center justify-content-center text-center">
                                    <p>
                                        August 08, 2022
                                        <br>
                                        Available Slots
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="carousel-item h-100">
                        <div class="row m-auto h-100">
                            <div class="col-3 py-3 h-100">
                                <div class="carousel-card h-100 d-flex align-items-center justify-content-center text-center">
                                    <p>
                                        August 09, 2022
                                        <br>
                                        Available Slots
                                    </p>
                                </div>
                            </div>
                            <div class="col-3 py-3 h-100">
                                <div class="carousel-card h-100 d-flex align-items-center justify-content-center text-center">
                                    <p>
                                        August 10, 2022
                                        <br>
                                        Available Slots
                                    </p>
                                </div>
                            </div>
                            <div class="col-3 py-3 h-100">
                                <div class="carousel-card h-100 d-flex align-items-center justify-content-center text-center">
                                    <p>
                                        August 11, 2022
                                        <br>
                                        Available Slots
                                    </p>
                                </div>
                            </div>
                            <div class="col-3 py-3 h-100">
                                <div class="carousel-card h-100 d-flex align-items-center justify-content-center text-center">
                                    <p>
                                        August 12, 2022
                                        <br>
                                        Available Slots
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-control text-center">
                <i type="button" class="fas fa-2x fa-chevron-right" data-bs-target="#reading-assessment-carousel" data-bs-slide="next"></i>
            </div>
        </div>

        <!-- General Time Selection -->
        <div id="general-time-selection" class="w-100 d-flex align-items-center justify-content-center my-5">
            <div class="general-time-card mx-2 d-flex align-items-center justify-content-center">
                Morning
            </div>
            <div class="general-time-card mx-2 d-flex align-items-center justify-content-center">
                Afternoon
            </div>
            <div class="general-time-card mx-2 d-flex align-items-center justify-content-center">
                Evening
            </div>
        </div>

        <!-- Specific Time Selection -->
        <div id="specific-time-selection" class="w-100 d-flex align-items-center justify-content-center my-5">
            <div class="specific-time-card mx-2 d-flex align-items-center justify-content-center">
                8am - 9am
            </div>
            <div class="specific-time-card mx-2 d-flex align-items-center justify-content-center">
                9am - 10am
            </div>
            <div class="specific-time-card mx-2 d-flex align-items-center justify-content-center">
                10am - 11am
            </div>
            <div class="specific-time-card mx-2 d-flex align-items-center justify-content-center">
                10am - 12am
            </div>
        </div>
    </div>
</section>
<!-- Calendar End -->

<!--Booking Form Start-->
<section id="book-consultation-form">

    <div class="container">

        <div class="col-md-12 mt-4 pt-3 mt-lg-0 pt-lg-0 wow">
            <!--Heading-->
            <div class="heading-area pb-2 form-heading">
                <h3 class="title mt-0">Booking Form</h3>
            </div>
            <!--Form-->

            <form action="{{ route('contact-us.store_consultation') }}" method="POST" class="booking-form" id="booking-form-data">
                @csrf
                <div class="form-group row mb-3">

                    <!-- Parent's Name Fields -->
                    <div class="form-group row mb-3">
                        <div class="col-md-6 mb-3">
                            <input
                                name="bookConsultationParentFirstName"
                                type="text"
                                class="form-control form-control-user"
                                id="parentFirstName"
                                placeholder="Parent's First Name"
                                
                            />
                        </div>
                        <div class="col-md-6">
                            <input
                                name="bookConsultationParentLastName"
                                type="text"
                                class="form-control form-control-user"
                                id="parentLastName"
                                placeholder="Parent's Last Name"
                                
                            />
                        </div>
                    </div>

                    <!-- Contact Fields -->
                    <div class="form-group row mb-3">
                        <div class="col-md-6 mb-3">
                            <input
                                name="bookConsultationContactNum"
                                type="tel"
                                class="form-control form-control-user"
                                id="contactNo"
                                placeholder="Contact No. (WhatsApp/Viber)"
                                
                            />
                        </div>
                        <div class="col-md-6">
                            <input
                                name="bookConsultationEmail"
                                type="email"
                                class="form-control form-control-user"
                                id="email"
                                placeholder="Email"
                                
                            />
                        </div>
                    </div>

                    <!-- Child's Name Fields -->
                    <div class="form-group row mb-3">
                        <div class="col-md-6 mb-3">
                            <input
                                name="bookConsultationChildFirstName"
                                type="text"
                                class="form-control form-control-user"
                                id="childFirstName"
                                placeholder="Child's First Name"
                                
                            />
                        </div>
                        <div class="col-md-6">
                            <input
                                name="bookConsultationChildLastName"
                                type="text"
                                class="form-control form-control-user"
                                id="childLastName"
                                placeholder="Child's Last Name"
                                
                            />
                        </div>
                    </div>

                    <!-- Location and Child's Age Field -->
                    <div class="form-group row mb-3">
                        <div class="col-md-6 mb-3">
                            <input
                                name="bookConsultationCityCountry"
                                type="text"
                                class="form-control form-control-user"
                                id="address"
                                placeholder="City, Country"
                                
                            />
                        </div>
                        <div class="col-md-2">
                            <input
                                name="bookConsultationChildAge"
                                type="number"
                                class="form-control form-control-user"
                                id="age"
                                placeholder="Child's Age"
                                
                            />
                        </div>
                    </div>

                    <!-- Concerns/Goals Location Field -->
                    <div class="form-group row mb-4">
                        <div class="col-md-12">
                            <textarea name="bookConsultationConcernsGoals" class="form-control" id="concernsGoals" rows="3" placeholder="Concerns/Goals for Child" ></textarea>
                        </div>
                    </div>

                    <!-- Captcha Field -->
                    <div class="row mb-3">
                        <div class="col-md-12 d-flex justify-content-start">
                            <div class="g-recaptcha" data-sitekey="6LdtbighAAAAAHhWzmWkWwkT53HNEcL5CPxg9PN_"></div>
                        </div>
                    </div>

                    <!--Button-->
                    <div class="col btn-col">
                        <button type="submit" class="btn btn-large btn-rounded btn-pink btn-hvr-blue">                    
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

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script>
    // jquery for selecting day cards
    $(".carousel-card").on("click",function() {
        if($(this).hasClass("is-active")){
            // if the card is active, remove the class
            $(this).removeClass("is-active");
            $(".general-time-card.is-active").removeClass("is-active");
            $(".specific-time-card.is-active").removeClass("is-active");
        } else{
            // else remove all currently active cards, then set current card as active
            $(".carousel-card.is-active").removeClass("is-active");
            $(".general-time-card.is-active").removeClass("is-active");
            $(".specific-time-card.is-active").removeClass("is-active");
            $(this).addClass("is-active");
        }
    });

    // jquery for selecting general time cards
    $(".general-time-card").on("click",function() {
        if($(this).hasClass("is-active")){
            // if the card is active, remove the class
            $(this).removeClass("is-active");
            $(".specific-time-card.is-active").removeClass("is-active");
        } else {
            // else remove all currently active cards, then set current card as active
            $(".general-time-card.is-active").removeClass("is-active");
            $(".specific-time-card.is-active").removeClass("is-active");
            $(this).addClass("is-active");
        }
    });

    // jquery for selecting specific time cards
    $(".specific-time-card").on("click",function() {
        if($(this).hasClass("is-active")){
            // if the card is active, remove the class
            $(this).removeClass("is-active");
        } else{
            // else remove all currently active cards, then set current card as active
            $(".specific-time-card.is-active").removeClass("is-active");
            $(this).addClass("is-active");
        }
    });

    // script for scrolling down to form
    document.getElementById("scroll-to-form").onclick = function () {
        document.getElementById("book-consultation-form").scrollIntoView({behavior: 'smooth'});
    };
</script>

@endsection