<!--
This is the sub-view for the calendar events component used in:
    
    Marketing Site: 
    - Reading Assessment
    - Online Consultation

    Admin Panel:
    - Reading Assessment
    - Online Consultation

Written by: edcabalda
-->

<style>
    .carousel-control{
        width: 5%;
    }

    .carousel-card {
        border-radius: 10px;
        background-color: #D9D9D9;
    }

    .specific-time-card {
        flex: 1 0 21%;
        max-width: 250px;
        height: 75px;
        border-radius: 10px;
        background-color: #D9D9D9;
    }

    .carousel-card:hover, .general-time-card:hover, .specific-time-card:hover {
        cursor: pointer;
        color: white;
        background-color: #564F4F;
    }

    #calendar-carousel{
        width: 90%;
    }

    #day-selection {
        height: 200px;
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

<!-- Day Carousel -->
<div id="day-selection" class="w-100 d-flex align-items-center justify-content-center my-5">
    <div class="carousel-control text-center">
        <i type="button" class="fas fa-2x fa-chevron-left" data-bs-target="#calendar-carousel" data-bs-slide="prev"></i>
    </div>
    <div id="calendar-carousel" class="carousel slide h-100">
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
        <i type="button" class="fas fa-2x fa-chevron-right" data-bs-target="#calendar-carousel" data-bs-slide="next"></i>
    </div>
</div>

<!-- Specific Time Selection -->
<div id="specific-time-selection" class="w-100 d-flex align-items-center justify-content-center my-5"></div>
    
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    function convert_time(input) {
        return moment(input, "HH:mm",).format("h:mm A");
    }

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
            let active_day_id = $(this).attr('id');
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
                                timeslot.textContent = convert_time(date[1][z].start_time) + " to " + convert_time(date[1][z].end_time) + "\r\n";
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
                    $("#form_event_id").val($(this).attr('id'));
                }
            });
        }
    });
</script>