<!-- Page editor -->

@extends('layouts.marketing-admin-layout')

@section('content')

<div class="content">
    <!-- Intro -->
    <section class="main-heading">
        <h1 class="display-3">CONSULTATION</h1> 
        <p>Edit content of "Free Online Consultation" here.</p>  
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
            <form data-route="{{ route('contact-us.consultation.update_page') }}" class="non-media">
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
            <form data-route="{{ route('contact-us.consultation.update_page') }}" class="non-media">
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
            <form data-route="{{ route('contact-us.consultation.update_page') }}" class="non-media">
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
            <form data-route="{{ route('contact-us.consultation.update_page') }}" class="non-media">
                @csrf
                <div class="form-group py-3">
                    <label for="author-editor">Author</label>                    
                    <input required data-fieldtype="big" type="text" class="form-control" id="author-editor" name="page_author" placeholder="John Doe" value="{{ $data->page_author }}">
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>                    
                </div>
            </form>
            <!-- End of Metadata -->

            <br><br><br>

            <!-- Section 1: Welcome Screen -->
            <div class="row">
                <div class="col-lg-12">
                    <h2>Section 1: Welcome Screen</h2>
                </div>
            </div>

            <!-- Heading of Section 1 -->
            <form data-route="{{ route('contact-us.consultation.update_page') }}" class="non-media">
                @csrf
                <div class="form-group py-3">
                    <label for="sect1-heading">Section Heading/Title</label>                    
                    <input required data-fieldtype="big" type="text" class="form-control"  name="sect1_heading" id="sect1-heading" placeholder="e.g. The Best Reading Course" name="sect1-heading" value="{{$data->sect1_heading}}">
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>                    
                </div>
            </form>

            <!-- Paragraph 1 -->
            <form data-route="{{ route('contact-us.consultation.update_page') }}" class="non-media">
                @csrf
                <div class="form-group py-3">
                    <label for="sect1-paragraph1">Paragraph 1</label>
                    <textarea data-fieldtype="tiny" class="form-control" name="sect1_para1" aria-describedby="sect1Paragraph1Help" id="sect1-paragraph1">{{$data->sect1_para1}}</textarea>
                    <small id="sect1Paragraph1Help" class="form-text text-muted">Recommended length: 3-5 sentences</small>
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
                </div>
            </form>
            <script>    
                tinymce.init({
                    height: "10rem",
                    selector: '#sect1-paragraph1',
                    placeholder: "e.g. Tell something about this section.",
                    plugins: 'link',
                    menubar: false,
                    toolbar: 'undo redo | bold italic underline | link'
                });            
            </script>

            <!-- Paragraph 2 -->
            <form data-route="{{ route('contact-us.consultation.update_page') }}" class="non-media">
                @csrf
                <div class="form-group py-3">
                    <label for="sect1-paragraph2">Paragraph 2</label>
                    <textarea data-fieldtype="tiny" class="form-control" name="sect1_para2" aria-describedby="sect1Paragraph2Help" id="sect1-paragraph2"  value="{{$data->sect1_para2}}">{{$data->sect1_para2}}</textarea>
                    <small id="sect1Paragraph2Help" class="form-text text-muted">Recommended length: 3-5 sentences</small>
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
                </div>
            </form>
            <script>    
                tinymce.init({
                    height: "10rem",
                    selector: '#sect1-paragraph2',
                    placeholder: "e.g. Tell something about this section.",
                    plugins: 'link',
                    menubar: false,
                    toolbar: 'undo redo | bold italic underline | link'
                });            
            </script>

            <!-- Image 1 -->
            <form action="{{ route('contact-us.consultation.store_media_single') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 py-3">
                    <label for="sect1-image1" class="form-label">Image 1</label>
                    <input required data-fieldtype="media" accept="image/*" class="form-control form-control-sm" name="sect1_image1" type="file" id="sect1-image1" aria-describedby="sect1Image1Help" value="{{ $data->sect1_image1 }}">
                    <small id="sect1Image1Help" class="form-text text-muted">Recommended image size: WxH</small>
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
                </div>                
            </form>

            <!-- Image 2 -->
            <form action="{{ route('contact-us.consultation.store_media_single') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 py-3">
                    <label for="sect1-image2" class="form-label">Image 2</label>
                    <input required data-fieldtype="media" accept="image/*" class="form-control form-control-sm" name="sect1_image2" type="file" id="sect1-image2" aria-describedby="sect1Image2Help" value="{{ $data->sect1_image2 }}">
                    <small id="sect1Image2Help" class="form-text text-muted">Recommended image size: WxH</small>
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
                </div>                
            </form>
            <!-- End of Section 1 -->

            <br><br><br>

            <!-- Section 2.1: Calendar-->
            <div class="row">
                <div class="col-lg-12">
                    <h2>Section 2.1: Calendar</h2>
                </div>
            </div>

            <!-- Heading of Section 2 -->
            <form data-route="{{ route('contact-us.consultation.update_page') }}" class="non-media">
                @csrf
                <div class="form-group py-3">
                    <label for="sect2-heading">Section Heading/Title</label>                    
                    <input required data-fieldtype="big" type="text" class="form-control" name="sect2_heading" id="sect2-heading" placeholder="e.g. The Best Reading Course" name="sect2_heading" value="{{$data->sect2_heading}}">
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>                    
                </div>
            </form>

            <!-- Paragraph -->
            <form data-route="{{ route('contact-us.consultation.update_page') }}" class="non-media">
                @csrf
                <div class="form-group py-3">
                    <label for="sect2-paragraph">Paragraph</label>
                    <textarea data-fieldtype="tiny" class="form-control" name="sect2_para" aria-describedby="sect2ParagraphHelp" id="sect2-paragraph">{{$data->sect2_para}}</textarea>
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
                    <h2>Section 2.2: Consultation Booking</h2>
                </div>
            </div>

            <!-- Schedule -->
            <form id="sect2-schedule-form" data-route="{{ route('booking.store_schedules') }}" data-eventtype="Consultation">
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
                    <label for="sect2-hours"><strong>Set your weekly hours</strong></label>
                    <div class="list-group" id="sect2-hours">
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
            
            <br><br><br>

            <div class="row">
                <div class="col-lg-12">
                    <h2>Existing Assessment Events</h2>
                </div>                
            </div>

            @include('calendar.admin-calendar')
        </div>
    </section>
</div>

<script>
    // Checks if the upload of a file is successful
    if ("{{ Session::has('upload_media_success') }}") {
        alert("{{ Session::get('upload_media_success') }}");
    }
     // Checks if the upload of a file failed
     if ("{{ Session::has('upload_media_fail') }}") {
        alert("{{ Session::get('upload_media_fail') }}");
    }
</script>

@endsection

@section('otherScript')
<script src="{{ asset('marketing-site/admin-panel/js/bookingUI-script.js') }}"></script>
@endsection