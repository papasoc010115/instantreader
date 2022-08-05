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

<!-- Style -->
<style>
    #book-reading-assessment-form{
        background-color: #562FB7;
        margin-top: 3em;
        padding: 2em 1em
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
        background-color: #483BF7;
    }

</style>

<!-- Banner -->
<section class="page-title cursor-light">
    <!-- Pattern Layers -->
    <div class="pattern-layers">
        <div class="layer-one"></div>
        <div class="layer-two"></div>
    </div>

    <div class="auto-container">
        <h2 class="hide-cursor">Online Reading Assessment</h2>
        <ul class="page-breadcrumb link">
            <li>
                <button id="scroll-to-form" class="card-btn btn btn-large btn-rounded btn-pink btn-hvr-blue mt-3">
                Book Now <i class="fas fa-angle-double-down" style="font-size:0.8em"></i>                  
                </button>
            </li>
        </ul>
    </div>
</section>

<!-- About the assessment -->
<section id="about-reading-assessment">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 wow fadeInLeft">
                <div class="heading-area">
                    <span class="sub-title">Know what program fits.</span>
                    <h2 class="title">Each child has a different level of <span class="alt-color">skill</span></h2>
                    <p class="para">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                        Adipiscing diam donec adipiscing tristique risus nec feugiat. Rhoncus urna neque viverra justo nec ultrices dui sapien. 
                        Egestas sed tempus urna et pharetra pharetra massa massa ultricies. Donec ac odio tempor orci dapibus ultrices in iaculis nunc. 
                                            
                    </p>
                    <a class="btn btn-large btn-rounded btn-pink btn-hvr-blue mt-3" href="{{route('learn-more.program-overview')}}">                    
                        Learn More
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
                <div class="half-img mt-5 pt-4 mt-lg-0 pt-lg-0">
                    <img alt="vector" src="{{ asset('marketing-site/assets/img/reading-assessment-img.jpg') }}">
                </div>
            </div>
        </div>
    </div>    
</section>
<!--About the assessment End-->

<!-- Calendar Start -->
<section class="bg-light pb-0 pt-4 m-0" id="calendar-reading-assessment">
    <div class="container">

        <!-- Calendar Paragraph -->
        <div class="row">
            <div class="col-12 pt-5">
                <h2>Find the right schedule</h2>
                <p class="para">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                    Adipiscing diam donec adipiscing tristique risus nec feugiat. Rhoncus urna neque viverra justo nec ultrices dui sapien. 
                    Egestas sed tempus urna et pharetra pharetra massa massa ultricies. Donec ac odio tempor orci dapibus ultrices in iaculis nunc.         
                </p>
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
                        <div class="row m-auto h-100">
                            <div class="col-3 py-3 h-100" >
                                <div class="carousel-card h-100 d-flex align-items-center justify-content-center text-center">
                                    <p>
                                        August 05, 2022
                                        <br>
                                        Available Slots
                                    </p>
                                </div>
                            </div>
                            <div class="col-3 py-3 h-100">
                                <div class="carousel-card h-100 d-flex align-items-center justify-content-center text-center">
                                    <p>
                                        August 06, 2022
                                        <br>
                                        Available Slots
                                    </p>
                                </div>
                            </div>
                            <div class="col-3 py-3 h-100">
                                <div class="carousel-card h-100 d-flex align-items-center justify-content-center text-center">
                                    <p>
                                        August 07, 2022
                                        <br>
                                        Available Slots
                                    </p>
                                </div>
                            </div>
                            <div class="col-3 py-3 h-100">
                                <div class="carousel-card h-100 d-flex align-items-center justify-content-center text-center">
                                    <p>
                                        August 08, 2022
                                        <br>
                                        Available Slots
                                    </p>
                                </div>
                            </div>
                        </div>
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

<!-- Booking Form -->
<section id="book-reading-assessment-form" class=" m-0">
    <div class="container">
        <h2 style="color: white; margin-bottom: 1em">
            Booking Form
        </h2>
        <form action="{{ route('learn-more.store_ora') }}" method="POST" class="contact-form">
            @csrf
            <div class="row">
                <!--Left Column-->
                <div class="col-md-6 mb-4">                    
                    <div class="form-group">
                        <input 
                            class="form-control" 
                            name="oraParentFirstName" 
                            type="text" 
                            placeholder="Parent's First Name" 
                            required="true"
                        />
                    </div>
                    <div class="form-group">
                        <input 
                            class="form-control" 
                            name="oraStudentFirstName" 
                            type="text" 
                            placeholder="Student's First Name" 
                            required="true"
                        />
                    </div>
                    <div class="form-group">
                        <input 
                            class="form-control" 
                            name="oraContactNum" 
                            type="tel" 
                            placeholder="Contact No. (WhatsApp/Viber)" 
                            required="true" 
                        />
                    </div>
                    <div class="form-group">
                        <input 
                            class="form-control" 
                            name="oraCityCountry" 
                            type="text" 
                            placeholder="City, Country" 
                            required="true"
                        />
                    </div>
                </div>

                <!--Right Column-->
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <input 
                            class="form-control" 
                            name="oraParentLastName" 
                            type="text" 
                            placeholder="Parent's Last Name" 
                            required="true" 
                        />
                    </div>
                    <div class="form-group">
                        <input 
                            class="form-control" 
                            name="oraStudentLastName" 
                            type="text" 
                            placeholder="Student's Last Name" 
                            required="true" 
                        />
                    </div>
                    <div class="form-group">
                        <input 
                            class="form-control" 
                            name="oraEmail" 
                            type="email" 
                            placeholder="Email" 
                            required="true" 
                        />
                    </div>
                    <div class="form-group">
                        <input
                            name="oraChildAge"
                            type="number"
                            class="form-control form-control-user"
                            id="age"
                            placeholder="Child's Age"
                            required="true"
                        />
                    </div>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-md-12 d-flex justify-content-center">
                    <div class="g-recaptcha" data-sitekey="6LdtbighAAAAAHhWzmWkWwkT53HNEcL5CPxg9PN_"></div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <button class="btn btn-large btn-rounded btn-pink btn-hvr-blue">                    
                        Submit
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

<script>
    // script for scrolling down
    document.getElementById("scroll-to-form").onclick = function () {
        document.getElementById("book-reading-assessment-form").scrollIntoView({behavior: 'smooth'});
    };
</script>
<!--PAGE CONTENT END-->
@endsection