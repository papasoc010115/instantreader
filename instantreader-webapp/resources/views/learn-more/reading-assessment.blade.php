@extends('layouts.marketing-layout')

@section('content')

<!-- by: rmhizon -->

<!--PAGE CONTENT START-->

<!-- Style -->
<style>
    #book-reading-assessment-form{
        background-color: #562FB7;
        margin-top: 3em;
        padding: 2em 1em
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
<section class="pb-0" id="about-reading-assessment">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 wow fadeInLeft">
                <div class="heading-area">
                    <span class="sub-title">Know what program fits.</span>
                    <h2 class="title">Each child has a different level of <span class="alt-color js-rotating">skill</span></h2>
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

<!-- Booking Form -->
<section id="book-reading-assessment-form">
    <div class="container">
        <h2 style="color: white; margin-bottom: 1em">
            Booking Form
        </h2>
        <form action="{{ route('reading-assessment.store_ora') }}" method="POST" class="contact-form">
            @csrf
            <div class="row">
                <!--Left Column-->
                <div class="col-md-6 mb-4">                    
                    <div class="form-group">
                        <input class="form-control" name="oraParentFirstName" type="text" placeholder="Parent's First Name" required="true">
                    </div>
                    <div class="form-group">
                        <input class="form-control" name="oraStudentFirstName" type="text" placeholder="Student's First Name" required="true">
                    </div>
                    <div class="form-group">
                        <input class="form-control" name="oraContactNum" type="tel" placeholder="Contact No. (WhatsApp/Viber)" required="true">
                    </div>
                    <div class="form-group">
                        <input class="form-control" name="oraCityCountry" type="text" placeholder="City, Country" required="true">
                    </div>
                </div>

                <!--Right Column-->
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <input class="form-control" name="oraParentLastName" type="text" placeholder="Parent's Last Name" required="true">
                    </div>
                    <div class="form-group">
                        <input class="form-control" name="oraStudentLastName" type="text" placeholder="Student's Last Name" required="true">
                    </div>
                    <div class="form-group">
                        <input class="form-control" name="oraEmail" type="email" placeholder="Email" required="true">
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-md-12 d-flex justify-content-center">
                    <div class="g-recaptcha" data-sitekey="6LdtbighAAAAAHhWzmWkWwkT53HNEcL5CPxg9PN_"></div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <button class="btn btn-large btn-rounded btn-pink btn-hvr-blue mt-3">                    
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

<!-- script for scrolling down -->
<script>
    document.getElementById("scroll-to-form").onclick = function () {
        document.getElementById("book-reading-assessment-form").scrollIntoView({behavior: 'smooth'});
    };
</script>
<!--PAGE CONTENT END-->
@endsection