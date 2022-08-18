<!-- Page editor -->

@extends('layouts.marketing-admin-layout')

@section('content')

<style>
    i:hover {
        cursor: pointer;
        color: #4285F4;
    }
    .timeslot-input {
        width: 150px;
    }
    .disabled-button {
        pointer-events: none;
        color: #d3d3d3;
    }
    .ui-dialog-titlebar-close {
        padding: 0 !important;
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>
<div class="content">
    <!-- Intro -->
    <section class="main-heading">
        <h1 class="display-3">READING ASSESSMENT</h1> 
        <p>Edit content of "Online Reading Assessment" here.</p>  
    </section> 
    
    <!-- Forms -->
    <section class="forms">
        <div class="container-fluid">

            <!-- Metadata -->
            <div class="row">
                <div class="col-lg-12">
                    <h2>Metadata</h2>
                </div>
            </div>
            <!-- 
                Page Title. 
                According to Montti (2021), Moz’s title tag length recommendation is 50 – 60 characters. (reference: https://www.searchenginejournal.com/google-title-tag-length/400682/#close)
            -->
            <form data-route="{{ route('learn-more.assessment.update_page') }}" class="non-media">
                @csrf
                <div class="form-group py-3">
                    <label for="title-editor">Page Title</label>
                    <input required data-fieldtype="big" type="text" class="form-control" id="title-editor" maxlength="60" name="page_title" placeholder="Enter page title" value="{{ $data->page_title }}">
                    <small class="form-text char-count" id="title-editor-char-counter"></small>
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
                </div>
            </form>
            <!-- 
                Description.
                According to ContentKing (2021), 155 is a good maximum character length for description. (reference: https://www.contentkingapp.com/academy/meta-description/#:~:text=Meta%20Description%20have%3F-,Length,70%20characters%20or%20430%20pixels)
            -->
            <form data-route="{{ route('learn-more.assessment.update_page') }}" class="non-media">
                @csrf
                <div class="form-group py-3">
                    <label for="description-editor">Page Description</label>
                    <textarea required data-fieldtype="big" class="form-control" id="description-editor" name="page_desc" placeholder="Enter page description" maxlength="155" rows="3">{{ $data->page_desc }}</textarea>
                    <small class="form-text char-count" id="description-editor-char-counter"></small>
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
                </div>
            </form>
            <!-- 
                Keywords
             -->
            <form data-route="{{ route('learn-more.assessment.update_page') }}" class="non-media">
                @csrf
                <div class="form-group py-3">
                    <label for="keywords-editor">Keywords</label>                    
                    <input required data-fieldtype="big" type="text" class="form-control" id="keywords-editor" aria-describedby="keywordsHelp" name="page_keywords" placeholder="e.g. read, learn, students" value="{{ $data->page_keywords }}">
                    <small id="keywordsHelp" class="form-text text-muted">Separate keywords with comma</small>
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>                    
                </div>
            </form>
            <!-- 
                Author
            -->
            <form data-route="{{ route('learn-more.assessment.update_page') }}" class="non-media">
                @csrf
                <div class="form-group py-3">
                    <label for="author-editor">Author</label>                    
                    <input required data-fieldtype="big" type="text" class="form-control" id="author-editor" name="page_author" placeholder="John Doe" value="{{ $data->page_author }}">
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>                    
                </div>
            </form>
            <!-- End of Metadata -->

            <br><br><br>

            <!-- Section 1: About the Online Reading Assessment -->
            <div class="row">
                <div class="col-lg-12">
                    <h2>Section 1: About the Online Reading Assessment</h2>
                </div>
            </div>

            <!-- Subheading of Section 1 -->
            <form data-route="{{ route('learn-more.assessment.update_page') }}" class="non-media">
                @csrf
                <div class="form-group py-3">
                    <label for="sect1-subheading">Tiny Text Above Section Title</label>                    
                    <input required data-fieldtype="big" type="text" class="form-control" name="sect1_subheading" id="sect1-subheading" placeholder="e.g. The Best Reading Course" value="{{ $data->sect1_subheading }}">
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>                    
                </div>
            </form>

            <!-- Heading of Section 1 -->
            <form data-route="{{ route('learn-more.assessment.update_page') }}" class="non-media">
                @csrf
                <div class="form-group py-3">
                    <label for="sect1-heading">Section Heading/Title</label>                    
                    <input required data-fieldtype="big" type="text" class="form-control" name="sect1_heading" id="sect1-heading" placeholder="e.g. The Best Reading Course" value="{{ $data->sect1_heading }}">
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>                    
                </div>
            </form>

            <!-- Paragraph -->
            <form data-route="{{ route('learn-more.assessment.update_page') }}" class="non-media">
                @csrf
                <div class="form-group py-3">
                    <label for="sect1-paragraph">Paragraph</label>
                    <textarea data-fieldtype="tiny" class="form-control" name="sect1_para" aria-describedby="sect1ParagraphHelp" id="sect1-paragraph">{{ $data->sect1_para }}</textarea>
                    <small id="sect1ParagraphHelp" class="form-text text-muted">Recommended length: 3-5 sentences</small>
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
                </div>
            </form>
            <script>    
                tinymce.init({
                    height: "10rem",
                    selector: '#sect1-paragraph',
                    placeholder: "e.g. Tell something about this section.",
                    plugins: 'link',
                    menubar: false,
                    toolbar: 'undo redo | bold italic underline | link'
                });            
            </script>

            <!-- Image-->
            <form action="{{ route('learn-more.assessment.store_media_single') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 py-3">
                    <label for="sect1-image" class="form-label">Image</label>
                    <input required data-fieldtype="media" accept="image/*" class="form-control form-control-sm" type="file" name="sect1_image" id="sect1-image" aria-describedby="sect1ImageHelp" value="{{ $data->sect1_image }}">
                    <small id="sect1ImageHelp" class="form-text text-muted">Recommended image size: WxH</small>
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
                </div>                
            </form>
            <!-- End of Section 1 -->

            <br><br><br>

            <!-- Section 2.1: Calendar -->
            <div class="row">
                <div class="col-lg-12">
                    <h2>Section 2.1: Calendar</h2>
                </div>
            </div>

            <!-- Heading of Section 2 -->
            <form data-route="{{ route('learn-more.assessment.update_page') }}" class="non-media">
                @csrf
                <div class="form-group py-3">
                    <label for="sect2-heading">Section Heading/Title</label>                    
                    <input required data-fieldtype="big" type="text" class="form-control" name="sect2_heading" id="sect2-heading" placeholder="e.g. The Best Reading Course" value="{{ $data->sect2_heading }}">
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>                    
                </div>
            </form>

            <!-- Paragraph -->
            <form data-route="{{ route('learn-more.assessment.update_page') }}" class="non-media">
                @csrf
                <div class="form-group py-3">
                    <label for="sect2-paragraph">Paragraph</label>
                    <textarea data-fieldtype="tiny" class="form-control" name="sect2_para" aria-describedby="sect2ParagraphHelp" id="sect2-paragraph">{{ $data->sect2_para }}</textarea>
                    <small id="sect2ParagraphHelp" class="form-text text-muted">Recommended length: 3-5 sentences</small>
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
                </div>
            </form>
            <script>    
                tinymce.init({
                    height: "10rem",
                    selector: '#sect2-paragraph',
                    placeholder: "e.g. Tell something about this section.",
                    plugins: 'link',
                    menubar: false,
                    toolbar: 'undo redo | bold italic underline | link'
                });            
            </script>
            <!-- End of Section 2.1 -->

            <br><br><br>

            <!-- Section 2.2: Assessment Booking -->
            <div class="row">
                <div class="col-lg-12">
                    <h2>Section 2.2: Assessment Booking</h2>
                </div>
            </div>

            <!-- Schedule -->
            <form data-route="{{ route('learn-more.assessment.update_page') }}">
                @csrf
                <!-- Event Cards -->
                <!-- Event Date Range -->
                <div id="sect2-date-range" class="py-3">
                    <label for="sect2-date-range" class="pb-3"><strong>Date Range</strong></label>
                    <div class="form-check sect2-form-check">
                        <input class="form-check-input" type="radio" name="event-range" id="sect2-event-range1" value="int" checked>
                        <label>
                            <input class="form-control" type="number" id="sect2-days-into-future" name="days-into-future" required> days into the future
                        </label>
                    </div>
                    <div class="form-check sect2-form-check sect2-custom-date-range">
                        <input class="form-check-input" type="radio" name="event-range" id="sect2-event-range2" value="range">
                        <label class="form-check-label" for="sect2-event-range2">
                            Custom Date Range
                        </label>
                    </div>

                    <div class="form-group sect2-start-end-date sect2-flex-container-x removed" id="sect2-start-end-date">
                        <div>
                            <label for="sect2-start-date">Start Date</label>                    
                            <input type="date" class="form-control" name="sect2_start_date" id="sect2-start-date">
                        </div>
                        <div>                      
                            <label for="sect2-end-date">End Date</label>  
                            <input type="date" class="form-control" name="sect2_end_date" id="sect2-end-date">
                        </div> 
                    </div>                    
                </div>
            
                <!-- Event Duration -->
                <div class="form-group row py-3" id="sect2-duration">
                    <label for="sect2-duration" class="pb-3"><strong>Duration</strong></label>
                    <div class="sect2-flex-container-x">
                        <div>
                            <select required class="form-select" id="sect2-duration-value" aria-label="Default select example">
                                <option value="15">15 min</option>
                                <option value="30" selected>30 min</option>
                                <option value="45">45 min</option>
                                <option value="60">1 hour</option>
                                <option value="75">1 hour and 15 min</option>
                                <option value="90">1 hour and 30 min</option>
                                <option value="105">1 hour and 45 min</option>
                                <option value="120">2 hours</option>
                            </select>
                        </div>
                    </div>
                </div>
                
                <div class="form-group py-3" id="sect2-time-allowance">
                    <label for="sect2-event-interval" class="pb-3"><strong>Event Interval</strong></label>
                    <select required class="form-select" id="sect2-event-interval" aria-label="Default select example">
                        <option value="0" selected>None</option>
                        <option value="10">10 min</option>
                        <option value="15">15 min</option>
                        <option value="20">20 min</option>
                        <option value="25">25 min</option>
                        <option value="30">30 min</option>
                        <option value="45">45 min</option>
                        <option value="60">1 hour</option>
                    </select>
                </div>
                
                <div class="form-group py-3" id="sect2-available-slots">
                    <label for="sect2-slots" class="pb-3"><strong>Maximum Slots</strong></label>
                    <input required type="number" class="form-control" name="sect2_slots" id="sect2-slots">
                </div>

                <!-- Availability -->
                <div class="form-group py-3">
                    <label for="sect3-hours"><strong>Set your weekly hours</strong></label>
                    <div class="list-group" id="sect3-hours">
                        <div class="list-group-item py-3 px-5 ">
                            <div class="row">
                                <div class="col-2">
                                    <input id="sunday-check" name="sunday_check" class="calendar-checkbox day-checkbox form-check-input me-5" type="checkbox" />
                                    <span class="fw-bold">SUNDAY</span>
                                </div>
                                <div id="sunday-status" class="col-9">Unavailable</div>
                                <div class="col-1">
                                    <i id="sunday-add" onclick="addTimeSlot('sunday-timeslots','sunday')" class="fas fa-plus me-3 disabled-button"></i>
                                    <i id="sunday-clone" onclick="openPopup('sunday-timeslots')" class="far fa-clone disabled-button"></i>
                                </div>
                            </div>
                            <div id="sunday-timeslots"></div>
                        </div>
                        <div class="list-group-item py-3 px-5 ">
                            <div class="row">
                                <div class="col-2">
                                    <input id="monday-check" name="monday_check" class="calendar-checkbox day-checkbox form-check-input me-5" type="checkbox" />
                                    <span class="fw-bold">MONDAY</span>
                                </div>
                                <div id="monday-status" class="col-9">Unavailable</div>
                                <div class="col-1"> 
                                    <i id="monday-add" onclick="addTimeSlot('monday-timeslots','monday')" class="fas fa-plus me-3 disabled-button"></i>
                                    <i id="monday-clone" onclick="openPopup('monday-timeslots')" class="far fa-clone disabled-button"></i>
                                </div>
                            </div>
                            <div id="monday-timeslots"></div>
                        </div>
                        <div class="list-group-item py-3 px-5 ">
                            <div class="row">
                                <div class="col-2">
                                    <input id="tuesday-check" name="tuesday_check" class="calendar-checkbox day-checkbox form-check-input me-5" type="checkbox" />
                                    <span class="fw-bold">TUESDAY</span>
                                </div>
                                <div id="tuesday-status" class="col-9">Unavailable</div>
                                <div class="col-1"> 
                                    <i id="tuesday-add" onclick="addTimeSlot('tuesday-timeslots','tuesday')" class="fas fa-plus me-3 disabled-button"></i>
                                    <i id="tuesday-clone" onclick="openPopup('tuesday-timeslots')" class="far fa-clone disabled-button"></i>
                                </div>
                            </div>
                            <div id="tuesday-timeslots"></div>
                        </div>
                        <div class="list-group-item py-3 px-5 ">
                            <div class="row">
                                <div class="col-2">
                                    <input id="wednesday-check" name="wednesday_check" class="calendar-checkbox day-checkbox form-check-input me-5" type="checkbox" />
                                    <span class="fw-bold">WEDNESDAY</span>
                                </div>
                                <div id="wednesday-status" class="col-9">Unavailable</div>
                                <div class="col-1"> 
                                    <i id="wednesday-add" onclick="addTimeSlot('wednesday-timeslots','wednesday')" class="fas fa-plus me-3 disabled-button"></i>
                                    <i id="wednesday-clone" onclick="openPopup('wednesday-timeslots')" class="far fa-clone disabled-button"></i>
                                </div>
                            </div>
                            <div id="wednesday-timeslots"></div>
                        </div>
                        <div class="list-group-item py-3 px-5 ">
                            <div class="row">
                                <div class="col-2">
                                    <input id="thursday-check" name="thursday_check" class="calendar-checkbox day-checkbox form-check-input me-5" type="checkbox" />
                                    <span class="fw-bold">THURSDAY</span>
                                </div>
                                <div id="thursday-status" class="col-9">Unavailable</div>
                                <div class="col-1"> 
                                    <i id="thursday-add" onclick="addTimeSlot('thursday-timeslots','thursday')" class="fas fa-plus me-3 disabled-button"></i>
                                    <i id="thursday-clone" onclick="openPopup('thursday-timeslots')" class="far fa-clone disabled-button"></i>
                                </div>
                            </div>
                            <div id="thursday-timeslots"></div>
                        </div>
                        <div class="list-group-item py-3 px-5 ">
                            <div class="row">
                                <div class="col-2">
                                    <input id="friday-check" name="friday_check" class="calendar-checkbox day-checkbox form-check-input me-5" type="checkbox" />
                                    <span class="fw-bold">FRIDAY</span>
                                </div>
                                <div id="friday-status" class="col-9">Unavailable</div>
                                <div class="col-1"> 
                                    <i id="friday-add" onclick="addTimeSlot('friday-timeslots','friday')" class="fas fa-plus me-3 disabled-button"></i>
                                    <i id="friday-clone" onclick="openPopup('friday-timeslots')" class="far fa-clone disabled-button"></i>
                                </div>
                            </div>
                            <div id="friday-timeslots"></div>
                        </div>
                        <div class="list-group-item py-3 px-5 ">
                            <div class="row">
                                <div class="col-2">
                                    <input id="saturday-check" name="saturday_check" class="calendar-checkbox day-checkbox form-check-input me-5" type="checkbox" />
                                    <span class="fw-bold">SATURDAY</span>
                                </div>
                                <div id="saturday-status" class="col-9">Unavailable</div>
                                <div class="col-1"> 
                                    <i id="saturday-add" onclick="addTimeSlot('saturday-timeslots','saturday')" class="fas fa-plus me-3 disabled-button"></i>
                                    <i id="saturday-clone" onclick="openPopup('saturday-timeslots')" class="far fa-clone disabled-button"></i>
                                </div>
                            </div>
                            <div id="saturday-timeslots"></div>
                        </div>
                    </div>
                </div>

                <button type="submit" id="sect2-generate-events-btn" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Generate Events</span></button>
            </form>
            
            <div id="clone-popup" title="Select day to clone">
                <div class="d-flex justify-content-center">
                    <div>
                        <div class="d-flex">
                            <input value="sunday-timeslots" class="clone_day calendar-checkbox form-check-input me-5" type="checkbox"/>
                            <span class="fw-bold">SUNDAY</span>
                        </div>
                        <div class="d-flex">
                            <input value="monday-timeslots" class="clone_day calendar-checkbox form-check-input me-5" type="checkbox"/>
                            <span class="fw-bold">MONDAY</span>
                        </div>
                        <div class="d-flex">
                            <input value="tuesday-timeslots" class="clone_day calendar-checkbox form-check-input me-5" type="checkbox"/>
                            <span class="fw-bold">TUESDAY</span>
                        </div>
                        <div class="d-flex">
                            <input value="wednesday-timeslots" class="clone_day calendar-checkbox form-check-input me-5" type="checkbox"/>
                            <span class="fw-bold">WEDNESDAY</span>
                        </div>
                        <div class="d-flex">
                            <input value="thursday-timeslots" class="clone_day calendar-checkbox form-check-input me-5" type="checkbox"/>
                            <span class="fw-bold">THURSDAY</span>
                        </div>
                        <div class="d-flex">
                            <input value="friday-timeslots" class="clone_day calendar-checkbox form-check-input me-5" type="checkbox"/>
                            <span class="fw-bold">FRIDAY</span>
                        </div>
                        <div class="d-flex">
                            <input value="saturday-timeslots" class="clone_day calendar-checkbox form-check-input me-5" type="checkbox"/>
                            <span class="fw-bold">SATURDAY</span>
                        </div>
                    </div>
                </div>
                <button onclick="cloneSchedule()" class="btn btn-primary update-btn w-100"><span style="font-size: 0.8rem">Clone</span></button>
            </div>
            <!-- End of Section 2.2 -->
        </div>
    </section>
</div>

<script>
    // hide the clone pop-up and unchecks all input checkbox
    $('#clone-popup').hide();
    $('.calendar-checkbox').each(function(){
  	    $(this).prop('checked', false);
    });

    // jquery for toggling checkbox
    $('.day-checkbox').change(function () {
        // if the checkbox is checked
        if ($(this).is(":checked")) {
            // the day is obtained and a timeslot is added based on the day
            let day = $(this).attr('id').split('-')[0];
            addTimeSlot(day + "-timeslots", day);

            // removes restrictions for the add and clone buttons
            $("#" + day + "-add").removeClass("disabled-button");
            $("#" + day + "-clone").removeClass("disabled-button");

        // if the checkbox is unchecked
        } else {
            // the day is obtained and the list of timeslots is obtained based on the day
            let day = $(this).attr('id').split('-')[0];
            let slot_list = document.getElementById(day + "-timeslots");
            let child = slot_list.lastElementChild;

            // delete all the children/timeslots from the list of timeslots  
            while (child) {
                slot_list.removeChild(child);
                child = slot_list.lastElementChild;
            }

            // update timeslot status and disable the buttons again
            document.getElementById(day + "-status").innerHTML = "Unavailable";
            $("#" + day + "-add").addClass("disabled-button");
            $("#" + day + "-clone").addClass("disabled-button");
        }   
    });

    // ------------- ADDING, DELETING, & CLONING TIMESLOTS start
    // initializing variables
    var sunday_count = 0;
    var monday_count = 0;
    var tuesday_count = 0;
    var wednesday_count = 0;
    var thursday_count = 0;
    var friday_count = 0;
    var saturday_count = 0;

    function addTimeSlot(list_id, day){
        // get the necessary variables
        if (day == "sunday"){
            num = sunday_count;
        } else if (day == "monday") {
            num = monday_count;
        } else if (day == "tuesday") {
            num = tuesday_count;
        } else if (day == "wednesday") {
            num = wednesday_count;
        } else if (day == "thursday") {
            num = thursday_count;
        } else if (day == "friday") {
            num = friday_count;
        } else {
            num = saturday_count;
        }

        // update status and checkbox
        document.getElementById(list_id.replace("timeslots", "status")).innerHTML = "";
        document.getElementById(list_id.replace("timeslots", "check")).checked = true;
        
        // get the time slot list
        let slot_list = document.getElementById(list_id);

        // create the main time slot div
        let main_div = document.createElement('div');
        main_div.id = day + '_' + num;
        main_div.classList.add('mt-3');
        // create the timeslot start input field
        let timeslot_start = document.createElement('input');
        timeslot_start.id = day + '_start_' + num;
        timeslot_start.name = day + '_start_' + num;
        timeslot_start.classList.add('rounded', 'text-center', 'timeslot-input', 'me-3', 'timeslot-start');
        timeslot_start.type = 'time';
        timeslot_start.required = 'true';
        timeslot_start.onchange = () => disableEndTime(timeslot_start.id);
        main_div.appendChild(timeslot_start);
        // create the dash between the input field
        let dash = document.createElement('span');
        dash.textContent = 'to';
        main_div.appendChild(dash);
        // create the timeslot end input field
        let timeslot_end = document.createElement('input');
        timeslot_end.id = day + '_end_' + num;
        timeslot_end.name = day + '_end_' + num;
        timeslot_end.classList.add('rounded', 'text-center', 'timeslot-input', 'ms-3', 'timeslot-end');
        timeslot_end.type = 'time';
        timeslot_end.required = 'true';
        main_div.appendChild(timeslot_end);
        // create the delete icon
        let delete_icon = document.createElement('i');
        delete_icon.classList.add('fas', 'fa-trash-alt', 'ms-3');
        delete_icon.setAttribute('onclick', 'deleteTimeSlot(\"' + list_id + '\", \"' + main_div.id + '\")');
        main_div.appendChild(delete_icon);

        // update necessary variables
        if (day == "sunday"){
            sunday_count += 1;
        } else if (day == "monday") {
            monday_count += 1;
        } else if (day == "tuesday") {
            tuesday_count += 1;
        } else if (day == "wednesday") {
            wednesday_count += 1;
        } else if (day == "thursday") {
            thursday_count += 1;
        } else if (day == "friday") {
            friday_count += 1;
        } else {
            saturday_count += 1;
        }

        // append the timeslot to the list
        slot_list.appendChild(main_div);
    }

    function deleteTimeSlot(list_id, slot_id){
        // get the time slot list
        let slot_list = document.getElementById(list_id);
        // get the time slot to delete
        let timeslot = document.getElementById(slot_id);

        // delete the time slot
        slot_list.removeChild(timeslot);

        // if the slot list is empty set status to unavailable, uncheck, and disable the buttons
        if (slot_list.childNodes.length == 0){
            document.getElementById(list_id.replace("timeslots", "status")).innerHTML = "Unavailable";
            document.getElementById(list_id.replace("timeslots", "check")).checked = false;
            $("#" + list_id.replace("timeslots", "add")).addClass("disabled-button");
            $("#" + list_id.replace("timeslots", "clone")).addClass("disabled-button");
        }
    }

    function openPopup(list_id){
        // show the popup and pass some parameters
        $('#clone-popup').show();
        $('#clone-popup').data('list_id', list_id).dialog();
        
        // removes all x icons before adding another one
        $('.ui-dialog-titlebar-close').each(function(){
            if ($(this).children()){
                $('#popup-close').remove();
            }
        });
        $('.ui-dialog-titlebar-close').append('<i id=\"popup-close\"class=\"fas fa-times\"></i>');
    }

    function cloneSchedule(){   
        let list_id = $('#clone-popup').data('list_id');
        $('.clone_day:checkbox:checked').each(function () {
            // only proceed if the target day is NOT same as source day
            if ($(this).attr('value') != list_id){
                // get the old day from source list and the new days for destination list
                let old_day = list_id.split('-')[0];                
                let new_day = $(this).attr('value').split('-')[0];

                // get the necessary variables
                if (new_day == "sunday"){
                    num = sunday_count;
                } else if (new_day == "monday") {
                    num = monday_count;
                } else if (new_day == "tuesday") {
                    num = tuesday_count;
                } else if (new_day == "wednesday") {
                    num = wednesday_count;
                } else if (new_day == "thursday") {
                    num = thursday_count;
                } else if (new_day == "friday") {
                    num = friday_count;
                } else {
                    num = saturday_count;
                }

                // get target list
                let target_slot_list = document.getElementById($(this).attr('value'));

                // iterate through all the time slots
                for (const timeslot of document.getElementById(list_id).childNodes) {

                    // check if values for times exist
                    if (timeslot.childNodes[0].value == '' || timeslot.childNodes[2].value == '') {
                        continue;
                    }

                    // check if the schedules are a duplicate
                    let duplicate = false;
                    for (const target_timeslot of document.getElementById($(this).attr('value')).childNodes){
                        if (timeslot.childNodes[0].value == target_timeslot.childNodes[0].value && 
                            timeslot.childNodes[2].value == target_timeslot.childNodes[2].value) {
                            duplicate = true;
                        }
                    }
                    if (duplicate) {
                        continue;
                    }

                    // update status of timeslot
                    document.getElementById($(this).attr('value').replace("timeslots", "status")).innerHTML = "";
                    document.getElementById($(this).attr('value').replace("timeslots", "check")).checked = true;
                    
                    // removes restrictions for the add and clone buttons
                    $("#" + new_day + "-add").removeClass("disabled-button");
                    $("#" + new_day + "-clone").removeClass("disabled-button");
                    
                    // create the main div
                    let main_div = document.createElement('div');
                    main_div.id = new_day + '_' + num;
                    main_div.classList.add('mt-3');
                    
                    // iterate through all the child nodes
                    for (const child of timeslot.childNodes){
                        let clone = child.cloneNode();
                        if (clone.id) {
                            clone.id = new_day + "_" + clone.id.split('_')[1] + "_" + num;
                            clone.name = new_day + "_" +  clone.name.split('_')[1] + "_" + num;
                            main_div.appendChild(clone);
                            continue;
                        }
                        if (clone.onclick) {
                            clone.setAttribute('onclick', 'deleteTimeSlot(\"' + $(this).attr('value') + '\", \"' + main_div.id + '\")');
                            main_div.appendChild(clone);
                            continue;
                        }
                        if (clone.tagName == "SPAN") {
                            let dash = document.createElement('span');
                            dash.textContent = 'to';
                            main_div.appendChild(dash);
                            continue;
                        }
                    }
                    target_slot_list.appendChild(main_div);
                    num += 1;
                }
                
                // update count
                if (new_day == "sunday"){
                    sunday_count = num;
                } else if (new_day == "monday") {
                    monday_count = num;;
                } else if (new_day == "tuesday") {
                    tuesday_count = num;
                } else if (new_day == "wednesday") {
                    wednesday_count = num;
                } else if (new_day == "thursday") {
                    thursday_count = num;
                } else if (new_day == "friday") {
                    friday_count = num;
                } else {
                    saturday_count = num;
                }
            }
        });

        // close the dialog and uncheck the options
        $('#clone-popup').dialog('close');
        $('.clone_day').each(function(){
            $(this).prop('checked', false);
        });

        // alert('Schedule cloned'); // temporarily removed for faster response to user
    }
    // ------------- ADDING, DELETING, & CLONING TIMESLOTS end

    // ------------- ALERTS FOR UPLOADING MEDIA start
    // Checks if the upload of a file is successful
    if ("{{ Session::has('upload_media_success') }}") {
        alert("{{ Session::get('upload_media_success') }}");
    }
     // Checks if the upload of a file failed
     if ("{{ Session::has('upload_media_fail') }}") {
        alert("{{ Session::get('upload_media_fail') }}");
    }
    // ------------- ALERTS FOR UPLOADING MEDIA end
</script>

@endsection