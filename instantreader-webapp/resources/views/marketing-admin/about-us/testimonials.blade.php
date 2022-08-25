<!-- Page editor -->

@extends('layouts.marketing-admin-layout')

@section('content')
<div class="content">
    <!-- Intro -->
    <section class="main-heading">
        <h1 class="display-3">TESTIMONIALS</h1> 
        <p>Edit content of "Testimonials" here.</p>  
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
            <form data-route="{{ route('about-us.testimonials.update_page') }}" class="non-media">
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
            <form data-route="{{ route('about-us.testimonials.update_page') }}" class="non-media">
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
            <form data-route="{{ route('about-us.testimonials.update_page') }}" class="non-media">
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
            <form data-route="{{ route('about-us.testimonials.update_page') }}" class="non-media">
                @csrf
                <div class="form-group py-3">
                    <label for="author-editor">Author</label>                    
                    <input required data-fieldtype="big" type="text" class="form-control" id="author-editor" name="page_author" placeholder="John Doe" value="{{ $data->page_author }}">
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>                    
                </div>
            </form>
            <!-- End of Metadata -->

        <br><br><br>

        <!-- Section 1: Parental Concerns -->
        <div class="row">
            <div class="col-lg-12">
                <h2>Section 1: Parental Concerns</h2>
            </div>
        </div>

        <!-- Heading of Section 1 -->
        <form data-route="{{ route('about-us.testimonials.update_page') }}" class="non-media">
            @csrf
            <div class="form-group py-3">
                <label for="sect1-heading">Section Heading/Title</label>                    
                <input required data-fieldtype="big" type="text" class="form-control" name="sect1_heading" id="sect1-heading" placeholder="e.g. The Best Reading Course" value="{{ $data->sect1_heading }}">
                <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>                    
            </div>
        </form>
        
        <!-- Paragraph 1 -->
        <form data-route="{{ route('about-us.testimonials.update_page') }}" class="non-media">
            @csrf
            <div class="form-group py-3">
                <label for="sect1-paragraph1">Paragraph 1</label>
                <textarea data-fieldtype="tiny" class="form-control" name="sect1_para1" aria-describedby="sect1Paragraph1Help" id="sect1-paragraph1">{{ $data->sect1_para1 }}</textarea>
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
        <form data-route="{{ route('about-us.testimonials.update_page') }}" class="non-media">
            @csrf
            <div class="form-group py-3">
                <label for="sect1-paragraph2">Paragraph 2</label>
                <textarea data-fieldtype="tiny" class="form-control" name="sect1_para2" aria-describedby="sect1Paragraph2Help" id="sect1-paragraph2">{{ $data->sect1_para2 }}</textarea>
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

        <!-- Paragraph 3 -->
        <form data-route="{{ route('about-us.testimonials.update_page') }}" class="non-media">
            @csrf
            <div class="form-group py-3">
                <label for="sect1-paragraph3">Paragraph 3</label>
                <textarea data-fieldtype="tiny" class="form-control" name="sect1_para3" aria-describedby="sect1Paragraph3Help" id="sect1-paragraph3">{{ $data->sect1_para3 }}</textarea>
                <small id="sect1Paragraph3Help" class="form-text text-muted">Recommended length: 3-5 sentences</small>
                <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
            </div>
        </form>
        <script>    
            tinymce.init({
                height: "10rem",
                selector: '#sect1-paragraph3',
                placeholder: "e.g. Tell something about this section.",
                plugins: 'link',
                menubar: false,
                toolbar: 'undo redo | bold italic underline | link'
            });            
        </script>

        <!-- Paragraph 4 -->
        <form data-route="{{ route('about-us.testimonials.update_page') }}" class="non-media">
            @csrf
            <div class="form-group py-3">
                <label for="sect1-paragraph4">Paragraph 4</label>
                <textarea data-fieldtype="tiny" class="form-control" name="sect1_para4" aria-describedby="sect1Paragraph4Help" id="sect1-paragraph4">{{ $data->sect1_para4 }}</textarea>
                <small id="sect1Paragraph4Help" class="form-text text-muted">Recommended length: 3-5 sentences</small>
                <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
            </div>
        </form>
        <script>    
            tinymce.init({
                height: "10rem",
                selector: '#sect1-paragraph4',
                placeholder: "e.g. Tell something about this section.",
                plugins: 'link',
                menubar: false,
                toolbar: 'undo redo | bold italic underline | link'
            });            
        </script>

         <!-- Image 1 -->
         <form action="{{ route('about-us.testimonials.store_media_single') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3 py-3">
                <label for="sect1-image1" class="form-label">Image 1</label>
                <input  required data-fieldtype="media" accept="image/*" class="form-control form-control-sm" name="sect1_image1" type="file" id="sect1-image1" aria-describedby="sect1Image1Help" value="{{ $data->sect1_image1 }}">
                <small id="sect1Image1Help" class="form-text text-muted">Recommended image size: 2048x1365</small>
                
                <label for="sect1-current-image1" class="form-label">
                    Current Image:
                    @php
                        if ($data->sect1_image1) {
                            $path = explode('/',$data->sect1_image1);
                            $filename = end($path);
                        } else {
                            $filename = "No image set";
                        }
                    @endphp
                    {{ $filename }} 
                </label>
                @if ($data->sect1_image1)
                    <img id="sect1-current-image1" class="d-block admin-panel-image" src="{{ url($data->sect1_image1) }}">
                @endif 
                <br>
                
                <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
            </div>                
        </form>

        <!-- Image 2 -->
        <form action="{{ route('about-us.testimonials.store_media_single') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3 py-3">
                <label for="sect1-image2" class="form-label">Image 2</label>
                <input  required data-fieldtype="media" accept="image/*" class="form-control form-control-sm" name="sect1_image2" type="file" id="sect1-image2" aria-describedby="sect1Image2Help" value="{{ $data->sect1_image2 }}">
                <small id="sect1Image2Help" class="form-text text-muted">Recommended image size: 2048x1365</small>
                
                <label for="sect1-current-image2" class="form-label">
                    Current Image:
                    @php
                        if ($data->sect1_image2) {
                            $path = explode('/',$data->sect1_image2);
                            $filename = end($path);
                        } else {
                            $filename = "No image set";
                        }
                    @endphp
                    {{ $filename }} 
                </label>
                @if ($data->sect1_image2)
                    <img id="sect1-current-image2" class="d-block admin-panel-image" src="{{ url($data->sect1_image2) }}">
                @endif 
                <br>

                <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
            </div>                
        </form>

        <!-- Image 3 -->
        <form action="{{ route('about-us.testimonials.store_media_single') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3 py-3">
                <label for="sect1-image3" class="form-label">Image 3</label>
                <input  required data-fieldtype="media" accept="image/*" class="form-control form-control-sm"  name="sect1_image3" type="file" id="sect1-image3" aria-describedby="sect1Image3Help" value="{{ $data->sect1_image3 }}">
                <small id="sect1Image3Help" class="form-text text-muted">Recommended image size: 2048x1365</small>
                
                <label for="sect1-current-image3" class="form-label">
                    Current Image:
                    @php
                        if ($data->sect1_image3) {
                            $path = explode('/',$data->sect1_image3);
                            $filename = end($path);
                        } else {
                            $filename = "No image set";
                        }
                    @endphp
                    {{ $filename }} 
                </label>
                @if ($data->sect1_image3)
                    <img id="sect1-current-image3" class="d-block admin-panel-image" src="{{ url($data->sect1_image3) }}">
                @endif 
                <br>
                
                <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
            </div>                
        </form>

        <!-- Image 4 -->
        <form action="{{ route('about-us.testimonials.store_media_single') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3 py-3">
                <label for="sect1-image4" class="form-label">Image 4</label>
                <input  required data-fieldtype="media" accept="image/*" class="form-control form-control-sm" name="sect1_image4" type="file" id="sect1-image4" aria-describedby="sect1Image4Help" value="{{ $data->sect1_image4 }}">
                <small id="sect1Image4Help" class="form-text text-muted">Recommended image size: 2048x1365</small>
                
                <label for="sect1-current-image4" class="form-label">
                    Current Image:
                    @php
                        if ($data->sect1_image4) {
                            $path = explode('/',$data->sect1_image4);
                            $filename = end($path);
                        } else {
                            $filename = "No image set";
                        }
                    @endphp
                    {{ $filename }} 
                </label>
                @if ($data->sect1_image4)
                    <img id="sect1-current-image4" class="d-block admin-panel-image" src="{{ url($data->sect1_image4) }}">
                @endif 
                <br>
                
                <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
            </div>                
        </form>
        <!-- End of Section 1 -->

        <br><br><br>

        <!-- Section 2: Parental Goals -->
        <div class="row">
            <div class="col-lg-12">
                <h2>Section 2: Parental Goals</h2>
            </div>
        </div>

        <!-- Heading of Section 2 -->
        <form data-route="{{ route('about-us.testimonials.update_page') }}" class="non-media">
            @csrf
            <div class="form-group py-3">
                <label for="sect2-heading">Section Heading/Title</label>                    
                <input required data-fieldtype="big" type="text" class="form-control" name="sect2_heading" id="sect2-heading" placeholder="e.g. The Best Reading Course" value="{{ $data->sect2_heading }}">
                <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>                    
            </div>
        </form>
        
        <!-- Paragraph 1 -->
        <form data-route="{{ route('about-us.testimonials.update_page') }}" class="non-media">
            @csrf
            <div class="form-group py-3">
                <label for="sect2-paragraph1">Paragraph 1</label>
                <textarea data-fieldtype="tiny" class="form-control" name="sect2_para1" aria-describedby="sect2Paragraph1Help" id="sect2-paragraph1">{{ $data->sect2_para1 }}</textarea>
                <small id="sect2Paragraph1Help" class="form-text text-muted">Recommended length: 3-5 sentences</small>
                <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
            </div>
        </form>
        <script>    
            tinymce.init({
                height: "10rem",
                selector: '#sect2-paragraph1',
                placeholder: "e.g. Tell something about this section.",
                plugins: 'link',
                menubar: false,
                toolbar: 'undo redo | bold italic underline | link'
            });            
        </script>

        <!-- Paragraph 2 -->
        <form data-route="{{ route('about-us.testimonials.update_page') }}" class="non-media">
            @csrf
            <div class="form-group py-3">
                <label for="sect2-paragraph2">Paragraph 2</label>
                <textarea data-fieldtype="tiny" class="form-control" name="sect2_para2" aria-describedby="sect2Paragraph2Help" id="sect2-paragraph2">{{ $data->sect2_para2 }}</textarea>
                <small id="sect2Paragraph2Help" class="form-text text-muted">Recommended length: 3-5 sentences</small>
                <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
            </div>
        </form>
        <script>    
            tinymce.init({
                height: "10rem",
                selector: '#sect2-paragraph2',
                placeholder: "e.g. Tell something about this section.",
                plugins: 'link',
                menubar: false,
                toolbar: 'undo redo | bold italic underline | link'
            });            
        </script>

        <!-- Paragraph 3 -->
        <form data-route="{{ route('about-us.testimonials.update_page') }}" class="non-media">
            @csrf
            <div class="form-group py-3">
                <label for="sect2-paragraph3">Paragraph 3</label>
                <textarea data-fieldtype="tiny" class="form-control" name="sect2_para3" aria-describedby="sect2Paragraph3Help" id="sect2-paragraph3">{{ $data->sect2_para3 }}</textarea>
                <small id="sect2Paragraph3Help" class="form-text text-muted">Recommended length: 3-5 sentences</small>
                <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
            </div>
        </form>
        <script>    
            tinymce.init({
                height: "10rem",
                selector: '#sect2-paragraph3',
                placeholder: "e.g. Tell something about this section.",
                plugins: 'link',
                menubar: false,
                toolbar: 'undo redo | bold italic underline | link'
            });            
        </script>

        <!-- Paragraph 4 -->
        <form data-route="{{ route('about-us.testimonials.update_page') }}" class="non-media">
            @csrf
            <div class="form-group py-3">
                <label for="sect2-paragraph4">Paragraph 4</label>
                <textarea data-fieldtype="tiny" class="form-control" name="sect2_para4" aria-describedby="sect2Paragraph4Help" id="sect2-paragraph4">{{ $data->sect2_para4 }}</textarea>
                <small id="sect2Paragraph4Help" class="form-text text-muted">Recommended length: 3-5 sentences</small>
                <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
            </div>
        </form>
        <script>    
            tinymce.init({
                height: "10rem",
                selector: '#sect2-paragraph4',
                placeholder: "e.g. Tell something about this section.",
                plugins: 'link',
                menubar: false,
                toolbar: 'undo redo | bold italic underline | link'
            });            
        </script>

        <!-- Image 1 -->
        <form action="{{ route('about-us.testimonials.store_media_single') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3 py-3">
                <label for="sect2-image1" class="form-label">Image 1</label>
                <input required data-fieldtype="media" accept="image/*" class="form-control form-control-sm" name="sect2_image1" type="file" id="sect2-image1" aria-describedby="sect2Image1Help" value="{{ $data->sect2_image1 }}">
                <small id="sect2Image1Help" class="form-text text-muted">Recommended image size: 2048x1365</small>
                
                <label for="sect2-current-image1" class="form-label">
                    Current Image:
                    @php
                        if ($data->sect2_image1) {
                            $path = explode('/',$data->sect2_image1);
                            $filename = end($path);
                        } else {
                            $filename = "No image set";
                        }
                    @endphp
                    {{ $filename }} 
                </label>
                @if ($data->sect2_image1)
                    <img id="sect2-current-image1" class="d-block admin-panel-image" src="{{ url($data->sect2_image1) }}">
                @endif 
                <br>
                
                <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
            </div>                
        </form>

        <!-- Image 2 -->
        <form action="{{ route('about-us.testimonials.store_media_single') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3 py-3">
                <label for="sect2-image2" class="form-label">Image 2</label>
                <input required data-fieldtype="media" accept="image/*" class="form-control form-control-sm" name="sect2_image2" type="file" id="sect2-image2" aria-describedby="sect2Image2Help" value="{{ $data->sect2_image2 }}">
                <small id="sect2Image2Help" class="form-text text-muted">Recommended image size: 2048x1365</small>
                
                <label for="sect2-current-image2" class="form-label">
                    Current Image:
                    @php
                        if ($data->sect2_image2) {
                            $path = explode('/',$data->sect2_image2);
                            $filename = end($path);
                        } else {
                            $filename = "No image set";
                        }
                    @endphp
                    {{ $filename }} 
                </label>
                @if ($data->sect2_image2)
                    <img id="sect2-current-image2" class="d-block admin-panel-image" src="{{ url($data->sect2_image2) }}">
                @endif 
                <br>
                
                <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
            </div>                
        </form>

        <!-- Image 3 -->
        <form action="{{ route('about-us.testimonials.store_media_single') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3 py-3">
                <label for="sect2-image3" class="form-label">Image 3</label>
                <input required data-fieldtype="media" accept="image/*" class="form-control form-control-sm" name="sect2_image3" type="file" id="sect2-image3" aria-describedby="sect2Image3Help" value="{{ $data->sect2_image3 }}">
                <small id="sect2Image3Help" class="form-text text-muted">Recommended image size: 2048x1365</small>
                
                <label for="sect2-current-image3" class="form-label">
                    Current Image:
                    @php
                        if ($data->sect2_image3) {
                            $path = explode('/',$data->sect2_image3);
                            $filename = end($path);
                        } else {
                            $filename = "No image set";
                        }
                    @endphp
                    {{ $filename }} 
                </label>
                @if ($data->sect2_image3)
                    <img id="sect2-current-image3" class="d-block admin-panel-image" src="{{ url($data->sect2_image3) }}">
                @endif 
                <br>

                <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
            </div>                
        </form>

        <!-- Image 4 -->
        <form action="{{ route('about-us.testimonials.store_media_single') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3 py-3">
                <label for="sect2-image4" class="form-label">Image 4</label>
                <input required data-fieldtype="media" accept="image/*" class="form-control form-control-sm" name="sect2_image4" type="file" id="sect2-image4" aria-describedby="sect2Image4Help" value="{{ $data->sect2_image4 }}">
                <small id="sect2Image4Help" class="form-text text-muted">Recommended image size: 2048x1365</small>
                
                <label for="sect2-current-image4" class="form-label">
                    Current Image:
                    @php
                        if ($data->sect2_image4) {
                            $path = explode('/',$data->sect2_image4);
                            $filename = end($path);
                        } else {
                            $filename = "No image set";
                        }
                    @endphp
                    {{ $filename }} 
                </label>
                @if ($data->sect2_image4)
                    <img id="sect2-current-image4" class="d-block admin-panel-image" src="{{ url($data->sect2_image4) }}">
                @endif 
                <br>
                
                <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
            </div>                
        </form>
        <!-- End of Section 2 -->
        
        <br><br><br>

        <!-- Section 3: Testimonials Gallery -->
        <div class="row">
            <div class="col-lg-12">
                <h2>Section 3: Testimonials Gallery</h2>
            </div>
        </div>

        <!-- Heading of Section 3 -->
        <form data-route="{{ route('about-us.testimonials.update_page') }}" class="non-media">
            @csrf
            <div class="form-group py-3">
                <label for="sect3-heading">Section Heading/Title</label>                    
                <input required data-fieldtype="big" type="text" class="form-control" name="sect3_heading" id="sect3-heading" placeholder="e.g. The Best Reading Course" value="{{ $data->sect3_heading }}">
                <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>                    
            </div>
        </form>

        <br><br><br>

        <div class="row">
            <div class="col-lg-12">
                <h2>Add a New Testimonial</h2>
            </div>
        </div>

        <form action="{{ route('about-us.testimonials.store_individual_testimonial') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group py-3">
                <label for="sect3-testimonial">Testimonial</label>                    
                <input required name="sect3_testimonial" type="text" class="form-control" id="sect3-testimonial" data-fieldtype="default" placeholder="e.g. Instant Reader is great!">
                
                <label for="sect3-name">Name</label>                    
                <input required name="sect3_name" type="text" class="form-control" id="sect3-name" data-fieldtype="default" placeholder="e.g. Juan dela Cruz">
                
                <label for="sect3-rating">Rating out of 5 stars</label>                    
                <input required name="sect3_rating" type="number" class="form-control" id="sect3-rating" data-fieldtype="default" placeholder="e.g. 5">
                
                <label for="sect3-image" class="form-label">Image</label>
                <input required data-fieldtype="media" accept="image/*" class="form-control form-control-sm" name="sect3_image" type="file" id="sect3-image" aria-describedby="sect3ImageHelp">
                <small id="sect3ImageHelp" class="form-text text-muted">Recommended image size: 500x500</small>

                <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Add Testimonial</span></button>                    
            </div>
        </form>
        <!-- End of Section 3 -->

        <br><br><br>

        <!-- Section 4: Existing Testimonials Display -->
        <div class="row">
            <div class="col-lg-12">
                <h2>Existing Testimonials</h2>
                @foreach ($testimonials as $testimonial)
                <form action="{{ route('about-us.testimonials.update_individual_testimonial') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group py-3" class="existing-faq">
                        <input hidden name="sect4_id" value="{{ $testimonial->id }}"/>

                        <label for="sect4-testimonial-{{ $testimonial->id }}">Testimonial</label>                    
                        <input required name="sect4_testimonial" value="{{ $testimonial->testimonial }}" type="text" class="form-control" id="sect3-testimonial-{{ $testimonial->id }}" data-fieldtype="default" placeholder="e.g. Instant Reader is great!">
                        
                        <label for="sect4-name-{{ $testimonial->id }}">Name</label>                    
                        <input required name="sect4_name" value="{{ $testimonial->name }}" type="text" class="form-control" id="sect3-name-{{ $testimonial->id }}" data-fieldtype="default" placeholder="e.g. Juan dela Cruz">
                        
                        <label for="sect4-rating-{{ $testimonial->id }}">Rating out of 5 stars</label>                    
                        <input required name="sect4_rating" value="{{ $testimonial->rating }}" type="number" class="form-control" id="sect3-rating-{{ $testimonial->id }}" data-fieldtype="default" placeholder="e.g. 5">

                        <label for="sect4-image-{{ $testimonial->id }}" class="form-label">Image</label>
                        <input required name="sect4_image" data-fieldtype="media" value="{{ $testimonial->image }}" accept="image/*" class="form-control form-control-sm" id="sect3-image-{{ $testimonial->id }}" type="file" aria-describedby="sect4ImageHelp-{{ $testimonial->id }}">
                        <small id="sect4ImageHelp-{{ $testimonial->id }}" class="form-text text-muted">Recommended image size: 500x500</small>
                        
                        <label for="sect4-image-{{ $testimonial->id }}" class="form-label">
                            Current Image:
                            @php
                                $path = explode('/',$testimonial->image);
                                $filename = end($path);
                            @endphp
                            {{ $filename }} 
                        </label>
                        <img id="sect4-current-image-{{ $testimonial->id }}" class="d-block admin-panel-image" src="{{ url($testimonial->image) }}">

                        <button type="submit" class="btn btn-primary update-btn"><span style="font-size: 0.8rem">Update</span></button>
                        <button type="button" class="btn btn-secondary update-btn delete-individual-testimonial" data-route="{{ route('about-us.testimonials.delete_individual_testimonial') }}" data-individual_testimonial_id="{{ $testimonial->id }}"> <span style="font-size: 0.8rem">Delete</span></button>                       
                    </div>
                </form>
                @endforeach
            </div>
        </div>
        <!-- End of Existing Testimonials Display -->
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
    // Checks if the upload of a testimonial is successful
    if ("{{ Session::has('upload_testimonial_success') }}") {
        alert("{{ Session::get('upload_testimonial_success') }}");
    } 
    // Checks if the upload of a testimonial failed
    if ("{{ Session::has('upload_testimonial_fail') }}") {
        alert("{{ Session::get('upload_testimonial_fail') }}");
    } 
</script>

@endsection