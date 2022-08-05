<!-- Page editor -->

@extends('layouts.marketing-admin-layout')

@section('content')
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
            <form data-route="{{ route('learn-more.assessment.update_page') }}">
                @csrf
                <div class="form-group py-3">
                    <label for="title-editor">Page Title</label>
                    <input required data-fieldtype="big" type="text" class="form-control" id="title-editor" maxlength="60" name="page_title" placeholder="Enter page title" value="{{ $data->page_title }}">
                    <small class="form-text char-count" id="title-editor-char-counter">0/60</small>
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
                </div>
            </form>
            <!-- 
                Description.
                According to ContentKing (2021), 155 is a good maximum character length for description. (reference: https://www.contentkingapp.com/academy/meta-description/#:~:text=Meta%20Description%20have%3F-,Length,70%20characters%20or%20430%20pixels)
            -->
            <form data-route="{{ route('learn-more.assessment.update_page') }}">
                @csrf
                <div class="form-group py-3">
                    <label for="description-editor">Page Description</label>
                    <textarea required data-fieldtype="big" class="form-control" id="description-editor" name="page_desc" placeholder="Enter page description" maxlength="155" rows="3">{{ $data->page_desc }}</textarea>
                    <small class="form-text char-count" id="description-editor-char-counter">0/155</small>
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
                </div>
            </form>
            <!-- 
                Keywords
             -->
            <form data-route="{{ route('learn-more.assessment.update_page') }}">
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
            <form data-route="{{ route('learn-more.assessment.update_page') }}">
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

            <!-- Heading of Section 1 -->
            <form action="">
                @csrf
                <div class="form-group py-3">
                    <label for="sect1-heading">Section Heading/Title</label>                    
                    <input type="text" class="form-control" id="sect1-heading" placeholder="e.g. The Best Reading Course">
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>                    
                </div>
            </form>

            <!-- Paragraph -->
            <form action="">
                @csrf
                <div class="form-group py-3">
                    <label for="sect1-paragraph">Paragraph</label>
                    <textarea class="form-control" name="sect1-paragraph" aria-describedby="sect1ParagraphHelp" id="sect1-paragraph"></textarea>
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
            <form action="">
                @csrf
                <div class="mb-3 py-3">
                    <label for="sect1-image" class="form-label">Image</label>
                    <input class="form-control form-control-sm" type="file" id="sect1-image" aria-describedby="sect1ImageHelp">
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
            <form action="">
                @csrf
                <div class="form-group py-3">
                    <label for="sect2-heading">Section Heading/Title</label>                    
                    <input type="text" class="form-control" id="sect2-heading" placeholder="e.g. The Best Reading Course">
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>                    
                </div>
            </form>

            <!-- Paragraph -->
            <form action="">
                @csrf
                <div class="form-group py-3">
                    <label for="sect2-paragraph">Paragraph</label>
                    <textarea class="form-control" name="sect2-paragraph" aria-describedby="sect2ParagraphHelp" id="sect2-paragraph"></textarea>
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
            <form action="">
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