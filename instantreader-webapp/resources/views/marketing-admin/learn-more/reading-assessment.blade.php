<!-- Page editor -->

@extends('layouts.marketing-admin-layout')

@section('content')

<style>
    i:hover {
        cursor: pointer;
        color: #4285F4;
    }
    .active-schedule i:hover {
        color: #ffffff;
    }
    .timeslot-input {
        width: 150px;
    }
    .active-schedule{
        color: #ffffff;
        background-color: #4285F4;
    }
    .schedule:hover {
        cursor: pointer;
    }
    .test {
        background-color: red;
    }
    .test2 {
        background-color: yellow;
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

            <!-- Section 2: Calendar -->
            <div class="row">
                <div class="col-lg-12">
                    <h2>Section 2: Calendar</h2>
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

            <!-- Add Date -->
            <form data-route="{{ route('learn-more.assessment.update_page') }}" class="non-media">
                @csrf
                <div class="form-group py-3">
                    <label for="sect2-date">New Schedule</label>                    
                    <input type="date" class="form-control" id="sect2-date">
                    <label for="sect2-time">Time</label>                    
                    <input type="time" class="form-control" id="sect2-time">
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Add Schedule</span></button>                    
                </div>
            </form>
            <!-- End of Section 2 -->

            <br><br><br>

            <!-- Section 3: Availability -->
            <div class="row">
                <div class="col-lg-12">
                    <h2>Section 3: Availability</h2>
                </div>
            </div>

            <!-- Schedule -->
            <form data-route="{{ route('learn-more.assessment.update_page') }}" class="non-media">
                @csrf
                <div class="form-group pt-4">
                    <label for="sect3-schedule">Select Schedule</label>
                    <div id="sect3-schedule">
                        <div class="list-group schedule">
                            <div class="list-group-item py-3 px-5 active-schedule d-flex">
                                <span class="fw-bold">Work Schedule</span>
                                <i class="schedule-delete fas fa-trash-alt ms-auto"></i>
                            </div>
                        </div>
                    </div>
                    <div onclick="addSchedule()" class="list-group schedule">
                        <div class="list-group-item py-3 px-5">
                            <i class="fas fa-plus me-3"></i>
                            <span>New Schedule</span>
                        </div>
                    </div>
                </div>
                <div class="form-group pt-4">
                    <label for="sect3-timezone">Time Zone</label>
                    <div>
                        <select name="sect3_timezone" id="sect3-timezone" class="span5">
                            <option value="-12:00">(GMT -12:00) Eniwetok, Kwajalein</option>
                            <option value="-11:00">(GMT -11:00) Midway Island, Samoa</option>
                            <option value="-10:00">(GMT -10:00) Hawaii</option>
                            <option value="-09:50">(GMT -9:30) Taiohae</option>
                            <option value="-09:00">(GMT -9:00) Alaska</option>
                            <option value="-08:00">(GMT -8:00) Pacific Time (US &amp; Canada)</option>
                            <option value="-07:00">(GMT -7:00) Mountain Time (US &amp; Canada)</option>
                            <option value="-06:00">(GMT -6:00) Central Time (US &amp; Canada), Mexico City</option>
                            <option value="-05:00">(GMT -5:00) Eastern Time (US &amp; Canada), Bogota, Lima</option>
                            <option value="-04:50">(GMT -4:30) Caracas</option>
                            <option value="-04:00">(GMT -4:00) Atlantic Time (Canada), Caracas, La Paz</option>
                            <option value="-03:50">(GMT -3:30) Newfoundland</option>
                            <option value="-03:00">(GMT -3:00) Brazil, Buenos Aires, Georgetown</option>
                            <option value="-02:00">(GMT -2:00) Mid-Atlantic</option>
                            <option value="-01:00">(GMT -1:00) Azores, Cape Verde Islands</option>
                            <option value="+00:00">(GMT) Western Europe Time, London, Lisbon, Casablanca</option>
                            <option value="+01:00">(GMT +1:00) Brussels, Copenhagen, Madrid, Paris</option>
                            <option value="+02:00">(GMT +2:00) Kaliningrad, South Africa</option>
                            <option value="+03:00">(GMT +3:00) Baghdad, Riyadh, Moscow, St. Petersburg</option>
                            <option value="+03:50">(GMT +3:30) Tehran</option>
                            <option value="+04:00">(GMT +4:00) Abu Dhabi, Muscat, Baku, Tbilisi</option>
                            <option value="+04:50">(GMT +4:30) Kabul</option>
                            <option value="+05:00">(GMT +5:00) Ekaterinburg, Islamabad, Karachi, Tashkent</option>
                            <option value="+05:50">(GMT +5:30) Bombay, Calcutta, Madras, New Delhi</option>
                            <option value="+05:75">(GMT +5:45) Kathmandu, Pokhara</option>
                            <option value="+06:00">(GMT +6:00) Almaty, Dhaka, Colombo</option>
                            <option value="+06:50">(GMT +6:30) Yangon, Mandalay</option>
                            <option value="+07:00">(GMT +7:00) Bangkok, Hanoi, Jakarta</option>
                            <option value="+08:00" selected="selected">(GMT +8:00) Beijing, Perth, Singapore, Hong Kong</option>
                            <option value="+08:75">(GMT +8:45) Eucla</option>
                            <option value="+09:00">(GMT +9:00) Tokyo, Seoul, Osaka, Sapporo, Yakutsk</option>
                            <option value="+09:50">(GMT +9:30) Adelaide, Darwin</option>
                            <option value="+10:00">(GMT +10:00) Eastern Australia, Guam, Vladivostok</option>
                            <option value="+10:50">(GMT +10:30) Lord Howe Island</option>
                            <option value="+11:00">(GMT +11:00) Magadan, Solomon Islands, New Caledonia</option>
                            <option value="+11:50">(GMT +11:30) Norfolk Island</option>
                            <option value="+12:00">(GMT +12:00) Auckland, Wellington, Fiji, Kamchatka</option>
                            <option value="+12:75">(GMT +12:45) Chatham Islands</option>
                            <option value="+13:00">(GMT +13:00) Apia, Nukualofa</option>
                            <option value="+14:00">(GMT +14:00) Line Islands, Tokelau</option>
                        </select>
                    </div>
                </div>
                <div class="form-group pt-4">
                    <label for="sect3-hours">Set your weekly hours</label>
                    <div class="list-group" id="sect3-hours">
                        <div class="list-group-item py-3 px-5 ">
                            <div class="row">
                                <div class="col-2">
                                    <input disabled id="sun-check" name="sunday_check" value="available" class="form-check-input me-5" type="checkbox" value="" id="flexCheckDefault" />
                                    <span class="fw-bold">SUNDAY</span>
                                </div>
                                <div id="sun-status" class="col-9">Unavailable</div>
                                <div class="col-1">
                                    <i onclick="addTimeSlot('sun-timeslots','sunday')" class="fas fa-plus me-3"></i>
                                    <i class="far fa-clone"></i>
                                </div>
                            </div>
                            <div id="sun-timeslots"></div>
                        </div>
                        <div class="list-group-item py-3 px-5 ">
                            <div class="row">
                                <div class="col-2">
                                    <input disabled id="mon-check" name="monday_check" value="available" class="form-check-input me-5" type="checkbox" value="" id="flexCheckDefault" />
                                    <span class="fw-bold">MONDAY</span>
                                </div>
                                <div id="mon-status" class="col-9">Unavailable</div>
                                <div class="col-1"> 
                                    <i onclick="addTimeSlot('mon-timeslots','monday')" class="fas fa-plus me-3"></i>
                                    <i class="far fa-clone"></i>
                                </div>
                            </div>
                            <div id="mon-timeslots"></div>
                        </div>
                        <div class="list-group-item py-3 px-5 ">
                            <div class="row">
                                <div class="col-2">
                                    <input disabled id="tue-check" name="tuesday_check" value="available" class="form-check-input me-5" type="checkbox" value="" id="flexCheckDefault" />
                                    <span class="fw-bold">TUESDAY</span>
                                </div>
                                <div id="tue-status" class="col-9">Unavailable</div>
                                <div class="col-1"> 
                                    <i onclick="addTimeSlot('tue-timeslots','tuesday')" class="fas fa-plus me-3"></i>
                                    <i class="far fa-clone"></i>
                                </div>
                            </div>
                            <div id="tue-timeslots"></div>
                        </div>
                        <div class="list-group-item py-3 px-5 ">
                            <div class="row">
                                <div class="col-2">
                                    <input disabled id="wed-check" name="wednesday_check" value="available" class="form-check-input me-5" type="checkbox" value="" id="flexCheckDefault" />
                                    <span class="fw-bold">WEDNESDAY</span>
                                </div>
                                <div id="wed-status" class="col-9">Unavailable</div>
                                <div class="col-1"> 
                                    <i onclick="addTimeSlot('wed-timeslots','wednesday')" class="fas fa-plus me-3"></i>
                                    <i class="far fa-clone"></i>
                                </div>
                            </div>
                            <div id="wed-timeslots"></div>
                        </div>
                        <div class="list-group-item py-3 px-5 ">
                            <div class="row">
                                <div class="col-2">
                                    <input disabled id="thu-check" name="thursday_check" value="available" class="form-check-input me-5" type="checkbox" value="" id="flexCheckDefault" />
                                    <span class="fw-bold">THURSDAY</span>
                                </div>
                                <div id="thu-status" class="col-9">Unavailable</div>
                                <div class="col-1"> 
                                    <i onclick="addTimeSlot('thu-timeslots','thursday')" class="fas fa-plus me-3"></i>
                                    <i class="far fa-clone"></i>
                                </div>
                            </div>
                            <div id="thu-timeslots"></div>
                        </div>
                        <div class="list-group-item py-3 px-5 ">
                            <div class="row">
                                <div class="col-2">
                                    <input disabled id="fri-check" name="friday_check" value="available" class="form-check-input me-5" type="checkbox" value="" id="flexCheckDefault" />
                                    <span class="fw-bold">FRIDAY</span>
                                </div>
                                <div id="fri-status" class="col-9">Unavailable</div>
                                <div class="col-1"> 
                                    <i onclick="addTimeSlot('fri-timeslots','friday')" class="fas fa-plus me-3"></i>
                                    <i class="far fa-clone"></i>
                                </div>
                            </div>
                            <div id="fri-timeslots"></div>
                        </div>
                        <div class="list-group-item py-3 px-5 ">
                            <div class="row">
                                <div class="col-2">
                                    <input disabled id="sat-check" name="saturday_check" class="form-check-input me-5" type="checkbox" value="" id="flexCheckDefault" />
                                    <span class="fw-bold">SATURDAY</span>
                                </div>
                                <div id="sat-status" class="col-9">Unavailable</div>
                                <div class="col-1"> 
                                    <i onclick="addTimeSlot('sat-timeslots','saturday')" class="fas fa-plus me-3"></i>
                                    <i class="far fa-clone"></i>
                                </div>
                            </div>
                            <div id="sat-timeslots"></div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
            </form>
            <!-- End of Section 3 -->
        </div>
    </section>
</div>

<script>
    // ------------- ADDING & DELETING SCHEDULES start
    function addSchedule(){
        let sched_id = prompt("Enter Schedule Name");
        let scdhed_list = document.getElementById("sect3-schedule")

        // create the new schedule
        let div = document.createElement('div');
        div.id = sched_id;
        div.classList.add('list-group');
        div.classList.add('schedule');
        div.innerHTML = "<div class=\"list-group-item py-3 px-5 d-flex\"><span class=\"fw-bold\">"+ sched_id +"</span><i class=\"fas fa-trash-alt ms-auto\"></i></div>";
    
        // append the new schedule to the list
        scdhed_list.appendChild(div);
    }
    // ------------- ADDING & DELETING SCHEDULES start
    

    // ------------- ADDING & DELETING TIMESLOTS start
    // initializing variables
    let sunday_count = 0;
    let monday_count = 0;
    let tuesday_count = 0;
    let wednesday_count = 0;
    let thursday_count = 0;
    let friday_count = 0;
    let saturday_count = 0;

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

        // create the time slot
        let div = document.createElement('div');
        div.id = day + '_' + num;
        div.classList.add('mt-3');
        div.innerHTML = "<input required data-fieldtype=\"big\" name=\"" + day + "_start_" + num + "\" class=\"rounded text-center timeslot-input\" type=\"time\"><span> - </span><input required data-fieldtype=\"big\" name=\"" + day + "_end_" + num + "\" class=\"rounded text-center timeslot-input\" type=\"time\"><i onclick=\"deleteTimeSlot('" + list_id + "', '" + day + "_" + num + "')\" class=\"far fa-trash-alt ms-3\"></i>";

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
        slot_list.appendChild(div);
    }

    function deleteTimeSlot(list_id, slot_id){
        // get the time slot list
        let slot_list = document.getElementById(list_id);
        // get the time slot to delete
        let timeslot = document.getElementById(slot_id);

        // delete the time slot
        slot_list.removeChild(timeslot);

        if (slot_list.childNodes.length == 0){
            document.getElementById(list_id.replace("timeslots", "status")).innerHTML = "Unavailable";
            document.getElementById(list_id.replace("timeslots", "check")).checked = false;
        }
    }
    // ------------- ADDING & DELETING TIMESLOTS end

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