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
            <form data-route="{{ route('contact-us.consultation.update_page') }}">
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
            <form data-route="{{ route('contact-us.consultation.update_page') }}">
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
            <form data-route="{{ route('contact-us.consultation.update_page') }}">
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
            <form data-route="{{ route('contact-us.consultation.update_page') }}">
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
            <form data-route="{{ route('contact-us.consultation.update_page') }}">
                @csrf
                <div class="form-group py-3">
                    <label for="sect1-heading">Section Heading/Title</label>                    
                    <input required data-fieldtype="big" type="text" class="form-control"  name="sect1_heading" id="sect1-heading" placeholder="e.g. The Best Reading Course" name="sect1-heading" value="{{$data->sect1_heading}}">
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>                    
                </div>
            </form>

            <!-- Paragraph 1 -->
            <form data-route="{{ route('contact-us.consultation.update_page') }}">
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
            <form data-route="{{ route('contact-us.consultation.update_page') }}">
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
            <form data-route="{{ route('contact-us.consultation.update_page') }}">
                @csrf
                <div class="mb-3 py-3">
                    <label for="sect1-image1" class="form-label">Image 1</label>
                    <input required data-fieldtype="media" class="form-control form-control-sm" data-fieldtype="big" name="sect1_image1" type="file" id="sect1-image1" aria-describedby="sect1Image1Help" value="{{ $data->sect1_image1 }}">
                    <small id="sect1Image1Help" class="form-text text-muted">Recommended image size: WxH</small>
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
                </div>                
            </form>

            <!-- Image 2 -->
            <form data-route="{{ route('contact-us.consultation.update_page') }}">
                @csrf
                <div class="mb-3 py-3">
                    <label for="sect1-image2" class="form-label">Image 2</label>
                    <input required data-fieldtype="media" class="form-control form-control-sm" data-fieldtype="big" name="sect1_image2" type="file" id="sect1-image2" aria-describedby="sect1Image2Help" value="{{ $data->sect1_image2 }}">
                    <small id="sect1Image2Help" class="form-text text-muted">Recommended image size: WxH</small>
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
                </div>                
            </form>
            <!-- End of Section 1 -->

            <br><br><br>

            <!-- Section 2: Calendar-->
            <div class="row">
                <div class="col-lg-12">
                    <h2>Section 2: Calendar</h2>
                </div>
            </div>

            <!-- Heading of Section 2 -->
            <form data-route="{{ route('contact-us.consultation.update_page') }}">
                @csrf
                <div class="form-group py-3">
                    <label for="sect2-heading">Section Heading/Title</label>                    
                    <input required data-fieldtype="big" type="text" class="form-control" name="sect2_heading" id="sect2-heading" placeholder="e.g. The Best Reading Course" name="sect2_heading" value="{{$data->sect2_heading}}">
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>                    
                </div>
            </form>

            <!-- Paragraph -->
            <form data-route="{{ route('contact-us.consultation.update_page') }}">
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

            <!-- Add Date -->
            <form data-route="{{ route('contact-us.consultation.update_page') }}">
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
        </div>
    </section>
</div>
@endsection