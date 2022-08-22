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

    .specific-time-card {
        flex: 1 0 21%;
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

    #specific-time-selection {
        display: flex;
        flex-wrap: wrap;
    }

    .is-active{
        color: white;
        background-color: #483BF7;
    }

</style>

<script>
    var active_day_id = "";
</script>

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
                    <span class="sub-title">{{ $data->sect1_subheading }}</span>
                    <h2 class="title">{{ $data->sect1_heading }}</h2>
                    <p class="para">{!! $data->sect1_para !!}</p>
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
                    <img alt="vector" src="{{ url($data->sect1_image) }}">
                </div>
            </div>
        </div>
    </div>    
</section>
<!--About the assessment End-->

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
                    @foreach ($events as $chunk)
                        @if($loop->first)
                            <div class="carousel-item h-100 active">
                                <ul class="row m-auto h-100 list-unstyled">
                                    @foreach($chunk as $date)
                                    <li class="col-3 py-3 h-100" >
                                        <div id="{{ $date[0] }}" class="day-card carousel-card h-100 d-flex align-items-center justify-content-center text-center">
                                            <p>
                                                {{ $date[0] }}
                                                <br>
                                                Available Slots : {{ $date[2] }}
                                            </p>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        @else
                            <div class="carousel-item h-100">
                                <ul class="row m-auto h-100 list-unstyled">
                                    @foreach($chunk as $date)
                                    <li class="col-3 py-3 h-100" >
                                        <div id="{{ $date[0] }}" class="day-card carousel-card h-100 d-flex align-items-center justify-content-center text-center">
                                            <p>
                                                {{ $date[0] }}
                                                <br>
                                                Available Slots : {{ $date[2] }}
                                            </p>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="carousel-control text-center">
                <i type="button" class="fas fa-2x fa-chevron-right" data-bs-target="#reading-assessment-carousel" data-bs-slide="next"></i>
            </div>
        </div>

        <!-- Specific Time Selection -->
        <div id="specific-time-selection" class="w-100 d-flex align-items-center justify-content-center my-5"></div>
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

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>

    // jquery for selecting day cards
    $(".day-card").on("click",function() {
        if($(this).hasClass("is-active")){
            // if the card is active, remove the class
            $(this).removeClass("is-active");
            $(".specific-time-card.is-active").removeClass("is-active");

            let timeslot_list = document.getElementById("specific-time-selection");

            // delete all the children/timeslots from the list of timeslots
            let child = timeslot_list.lastElementChild;
            while (child) {
                timeslot_list.removeChild(child);
                child = timeslot_list.lastElementChild;
            }
            
        } else {
            // else remove all currently active cards, then set current card as active
            $(".day-card.is-active").removeClass("is-active");
            $(".specific-time-card.is-active").removeClass("is-active");
            $(this).addClass("is-active");

            let timeslot_list = document.getElementById("specific-time-selection");

            // delete all the children/timeslots from the list of timeslots
            let child = timeslot_list.lastElementChild;
            while (child) {
                timeslot_list.removeChild(child);
                child = timeslot_list.lastElementChild;
            }

            // update the timeslot list
            active_day_id = $(this).attr('id');
            let events = <?php echo json_encode($events); ?>;
            for (let x=0; x<events.length; x++){
                let chunk = events[x];
                for (let y=0; y<chunk.length; y++){
                    let date = chunk[y];
                    if (date[0] == active_day_id){
                        for (let z=0; z<date[1].length; z++){
                            // only append timeslot if there are any available slots
                            if (date[1][z].slots > 0) {                            
                                let timeslot = document.createElement("div");
                                timeslot.id = date[1][z].id;
                                timeslot.classList.add(
                                    "specific-time-card",
                                    "m-2",
                                    "d-flex",
                                    "align-items-center",
                                    "justify-content-center",
                                    "text-center",
                                );
                                timeslot.setAttribute('style', 'white-space: pre');
                                timeslot.textContent = date[1][z].start_time + " to " + date[1][z].end_time + "\r\n";
                                timeslot.textContent += "Available Slots: " + date[1][z].slots;
                                timeslot_list.appendChild(timeslot);
                            }
                        }
                    }
                }
            }

            // update the jquery for specific time cards
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
        }
    });

    // script for scrolling down
    document.getElementById("scroll-to-form").onclick = function () {
        document.getElementById("book-reading-assessment-form").scrollIntoView({behavior: 'smooth'});
    };
</script>
<!--PAGE CONTENT END-->
@endsection