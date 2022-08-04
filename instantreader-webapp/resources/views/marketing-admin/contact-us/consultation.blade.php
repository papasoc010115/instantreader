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
                According to Montti (2021), Moz's title tag length recommendation is 50 - 60 characters. (reference: https://www.searchenginejournal.com/google-title-tag-length/400682/#close)
            -->
            <form action="{{ route('contact-us.update_consultation_page_title') }}" method="POST">
                @csrf
                <div class="form-group py-3">
                    <label for="title-editor">Page Title</label>
                    <input type="text" class="form-control" id="title-editor" maxlength="60" placeholder="Enter page title" name="page-title" value="{{$consultation_data->consultation_page_title}}">
                    <small class="form-text char-count" id="title-editor-char-counter">0/60</small>
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
                </div>
            </form>
            <!-- 
                Description.
                According to ContentKing (2021), 155 is a good maximum character length for description. (reference: https://www.contentkingapp.com/academy/meta-description/#:~:text=Meta%20Description%20have%3F-,Length,70%20characters%20or%20430%20pixels)
            -->
            <form action="{{ route('contact-us.update_consultation_page_desc') }}" method="POST">
                @csrf
                <div class="form-group py-3">
                    <label for="description-editor">Page Description</label>
                    <textarea class="form-control" id="description-editor" placeholder="Enter page description" name="page-desc" maxlength="155" rows="3">{{$consultation_data->consultation_page_desc}}</textarea>
                    <small class="form-text char-count" id="description-editor-char-counter">0/155</small>
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
                </div>
            </form>
            <!-- 
                Keywords
             -->
            <form action="{{ route('contact-us.update_consultation_page_keywords') }}" method="POST">
                @csrf
                <div class="form-group py-3">
                    <label for="keywords-editor">Keywords</label>                    
                    <input type="text" class="form-control" id="keywords-editor"  aria-describedby="keywordsHelp" placeholder="e.g. read, learn, students" name="page-keywords" value="{{$consultation_data->consultation_page_keywords}}">
                    <small id="keywordsHelp" class="form-text text-muted" style="display:block; float: right;">Separate keywords with comma</small>
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>                    
                </div>
            </form>
            <!-- 
                Author
            -->
            <form action="{{ route('contact-us.update_consultation_page_author') }}" method="POST">
                @csrf
                <div class="form-group py-3">
                    <label for="author-editor">Author</label>                    
                    <input type="text" class="form-control" id="author-editor" placeholder="John Doe" name="page-author" value="{{$consultation_data->consultation_page_author}}">
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
            <form action="{{ route('contact-us.update_consultation_sect1_heading') }}" method="POST">
                @csrf
                <div class="form-group py-3">
                    <label for="sect1-heading">Section Heading/Title</label>                    
                    <input type="text" class="form-control" id="sect1-heading" placeholder="e.g. The Best Reading Course" name="sect1-heading" value="{{$consultation_data->consultation_sect1_heading}}">
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>                    
                </div>
            </form>

            <!-- Paragraph 1 -->
            <form action="{{ route('contact-us.update_consultation_sect1_para1') }}" method="POST">
                @csrf
                <div class="form-group py-3">
                    <label for="sect1-paragraph1">Paragraph 1</label>
                    <textarea class="form-control" name="sect1-paragraph1" aria-describedby="sect1Paragraph1Help" id="sect1-paragraph1">{{$consultation_data->consultation_sect1_para1}}</textarea>
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
            <form action="{{ route('contact-us.update_consultation_sect1_para2') }}" method="POST">
                @csrf
                <div class="form-group py-3">
                    <label for="sect1-paragraph2">Paragraph 2</label>
                    <textarea class="form-control" name="sect1-paragraph2" aria-describedby="sect1Paragraph2Help" id="sect1-paragraph2"  value="{{$consultation_data->consultation_sect1_para2}}">{{$consultation_data->consultation_sect1_para2}}</textarea>
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
            <form action="">
                @csrf
                <div class="mb-3 py-3">
                    <label for="sect1-image1" class="form-label">Image 1</label>
                    <input class="form-control form-control-sm" type="file" id="sect1-image1" aria-describedby="sect1Image1Help">
                    <small id="sect1Image1Help" class="form-text text-muted">Recommended image size: WxH</small>
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
                </div>                
            </form>

            <!-- Image 2 -->
            <form action="">
                @csrf
                <div class="mb-3 py-3">
                    <label for="sect1-image2" class="form-label">Image 2</label>
                    <input class="form-control form-control-sm" type="file" id="sect1-image2" aria-describedby="sect1Image2Help">
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
            <form action="{{ route('contact-us.update_consultation_sect2_heading') }}" method="POST">
                @csrf
                <div class="form-group py-3">
                    <label for="sect2-heading">Section Heading/Title</label>                    
                    <input type="text" class="form-control" id="sect2-heading" placeholder="e.g. The Best Reading Course" name="sect2-heading" value="{{$consultation_data->consultation_sect2_heading}}">
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>                    
                </div>
            </form>

            <!-- Paragraph -->
            <form action="{{ route('contact-us.update_consultation_sect2_para') }}" method="POST">
                @csrf
                <div class="form-group py-3">
                    <label for="sect2-paragraph">Paragraph</label>
                    <textarea class="form-control" name="sect2-paragraph" aria-describedby="sect2ParagraphHelp" id="sect2-paragraph">{{$consultation_data->consultation_sect2_para}}</textarea>
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