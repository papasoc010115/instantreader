@extends('layouts.marketing-layout')

@section('content')
<!--PAGE CONTENT START -->

<!-- Style -->
<style>
    .reading-program {        
        margin-top: 3em;
        padding: 2em 1em 0em 1em;
    }
    p {
        text-align: left
    }
    .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        width: 18rem;
        margin-bottom: 1em;
    }
    .card-btn {
        padding-left: 1em; 
        padding-right: 1em;
    }
    
    .banner-img {
        width: 100%;
        height: auto;
    }
    #about-basic {
        background-color: #562FB7;
    }
    #about-advanced, #about-compass {
        background-color: white;
    }
    #about-mastery {
        background-color: #AB2685;
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
        <h2 class="hide-cursor">Instant Reader Programs</h2>
        <ul class="page-breadcrumb link">
            <li>
                <i>Your child can read in 20 days</i>
                
            </li>
        </ul>
    </div>
</section>

<!-- Cards -->
<section class="pb-0" style="margin-top: 2em;">
    <div class="container" style="max-width: 80%">
        <div class="row">           
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('marketing-site/assets/img/basic-card-img.jpg') }}" alt="img">
                    <div class="card-body">
                        <h5 class="card-title">Basic</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <button class="card-btn btn btn-large btn-rounded btn-pink btn-hvr-blue mt-3" id="card-btn-basic">Read More
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
            </div>
            
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('marketing-site/assets/img/advanced-card-img.jpg') }}" alt="img">
                    <div class="card-body">
                        <h5 class="card-title">Advanced</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <button class="card-btn btn btn-large btn-rounded btn-pink btn-hvr-blue mt-3" id="card-btn-advanced">Read More
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
            </div>
            
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('marketing-site/assets/img/mastery-card-img.jpg') }}" alt="img">
                    <div class="card-body">
                        <h5 class="card-title">Mastery</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <button class="card-btn btn btn-large btn-rounded btn-pink btn-hvr-blue mt-3" id="card-btn-mastery">Read More
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
            </div>
            
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('marketing-site/assets/img/compass-card-img.jpg') }}" alt="img">
                    <div class="card-body">
                        <h5 class="card-title">Compass</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <button class="card-btn btn btn-large btn-rounded btn-pink btn-hvr-blue mt-3" id="card-btn-compass">Read More
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
            </div>


        </div>
    </div>
</section>

<!-- About Basic -->
<section class="reading-program page-title" id="about-basic"">
    <div class="auto-container">
        <h2 class="hide-cursor" style="margin-bottom: 0.5em">Basic</h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
            <img class="banner-img" src="{{ asset('marketing-site/assets/img/basic-banner-img.png') }}" alt="img">
            </div>
            <div class="col-md-6">
                <p style="color: white">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Adipiscing diam donec adipiscing tristique risus nec feugiat. Rhoncus urna neque viverra justo nec ultrices dui sapien. Egestas sed tempus urna et pharetra pharetra massa massa ultricies. Donec ac odio tempor orci dapibus ultrices in iaculis nunc. Gravida rutrum quisque non tellus orci. Et egestas quis ipsum suspendisse ultrices gravida dictum. Platea dictumst vestibulum rhoncus est pellentesque elit ullamcorper. Ultrices dui sapien eget mi. Aliquam eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis. Netus et malesuada fames ac turpis egestas. Dolor sit amet consectetur adipiscing elit.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- About Advanced -->
<section class="reading-program page-title" id="about-advanced">
    <div class="auto-container">
        <h2 class="hide-cursor" style="margin-bottom: 0.5em; color: #282525">Advanced</h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p style="color: #282525">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Adipiscing diam donec adipiscing tristique risus nec feugiat. Rhoncus urna neque viverra justo nec ultrices dui sapien. Egestas sed tempus urna et pharetra pharetra massa massa ultricies. Donec ac odio tempor orci dapibus ultrices in iaculis nunc. Gravida rutrum quisque non tellus orci. Et egestas quis ipsum suspendisse ultrices gravida dictum. Platea dictumst vestibulum rhoncus est pellentesque elit ullamcorper. Ultrices dui sapien eget mi. Aliquam eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis. Netus et malesuada fames ac turpis egestas. Dolor sit amet consectetur adipiscing elit.
                </p>            
            </div>
            <div class="col-md-6">
                <img class="banner-img" src="{{ asset('marketing-site/assets/img/advanced-banner-img.png') }}" alt="img">
            </div>
        </div>
    </div>
</section>

<!-- About Mastery -->
<section class="reading-program page-title" id="about-mastery"">
    <div class="auto-container">
        <h2 class="hide-cursor" style="margin-bottom: 0.5em">Mastery</h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
            <img class="banner-img" src="{{ asset('marketing-site/assets/img/mastery-banner-img.png') }}" alt="img">
            </div>
            <div class="col-md-6">
                <p style="color: white">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Adipiscing diam donec adipiscing tristique risus nec feugiat. Rhoncus urna neque viverra justo nec ultrices dui sapien. Egestas sed tempus urna et pharetra pharetra massa massa ultricies. Donec ac odio tempor orci dapibus ultrices in iaculis nunc. Gravida rutrum quisque non tellus orci. Et egestas quis ipsum suspendisse ultrices gravida dictum. Platea dictumst vestibulum rhoncus est pellentesque elit ullamcorper. Ultrices dui sapien eget mi. Aliquam eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis. Netus et malesuada fames ac turpis egestas. Dolor sit amet consectetur adipiscing elit.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- About Compass -->
<section class="reading-program page-title" id="about-compass">
    <div class="auto-container">
        <h2 class="hide-cursor" style="margin-bottom: 0.5em; color: #282525">Compass</h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p style="color: #282525">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Adipiscing diam donec adipiscing tristique risus nec feugiat. Rhoncus urna neque viverra justo nec ultrices dui sapien. Egestas sed tempus urna et pharetra pharetra massa massa ultricies. Donec ac odio tempor orci dapibus ultrices in iaculis nunc. Gravida rutrum quisque non tellus orci. Et egestas quis ipsum suspendisse ultrices gravida dictum. Platea dictumst vestibulum rhoncus est pellentesque elit ullamcorper. Ultrices dui sapien eget mi. Aliquam eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis. Netus et malesuada fames ac turpis egestas. Dolor sit amet consectetur adipiscing elit.
                </p>            
            </div>
            <div class="col-md-6">
                <img class="banner-img" src="{{ asset('marketing-site/assets/img/compass-banner-img.png') }}" alt="img">
            </div>
        </div>
    </div>
</section>

<!-- script for scrolling down -->
<script>
    document.getElementById("card-btn-basic").onclick = function () {
        document.getElementById("about-basic").scrollIntoView({behavior: 'smooth'});
    }    
    document.getElementById("card-btn-advanced").onclick = function () {
        document.getElementById("about-advanced").scrollIntoView({behavior: 'smooth'});
    }
    document.getElementById("card-btn-mastery").onclick = function () {
        document.getElementById("about-mastery").scrollIntoView({behavior: 'smooth'});
    }
    document.getElementById("card-btn-compass").onclick = function () {
        document.getElementById("about-compass").scrollIntoView({behavior: 'smooth'});
    }
</script>
<!--PAGE CONTENT END -->
@endsection