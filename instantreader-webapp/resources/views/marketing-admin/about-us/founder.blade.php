<!-- Page editor -->

@extends('layouts.marketing-admin-layout')

@section('content')
<div class="content">
    <!-- Intro -->
    <section class="main-heading">
        <h1 class="display-3">FOUNDERS & DEVELOPERS</h1> 
        <p>Edit content of "Founders and Developers" here.</p>  
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
            <form data-route="{{ route('about-us.founder.update_page') }}" class="non-media">
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
            <form data-route="{{ route('about-us.founder.update_page') }}" class="non-media">
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
            <form data-route="{{ route('about-us.founder.update_page') }}" class="non-media">
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
            <form data-route="{{ route('about-us.founder.update_page') }}" class="non-media">
                @csrf
                <div class="form-group py-3">
                    <label for="author-editor">Author</label>                    
                    <input required data-fieldtype="big" type="text" class="form-control" id="author-editor" name="page_author" placeholder="John Doe" value="{{ $data->page_author }}">
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>                    
                </div>
            </form>
            <!-- End of Metadata -->

        <br><br><br>
        
        <!-- Section 1: Teacher Vicki -->
        <div class="row">
            <div class="col-lg-12">
                <h2>Section 1: Teacher Vicki</h2>
            </div>
        </div>

        <!-- Subheading of Section 1 -->
        <form data-route="{{ route('about-us.founder.update_page') }}" class="non-media">
            @csrf
            <div class="form-group py-3">
                <label for="sect1-subheading">Tiny Text Above Section Title</label>                    
                <input required data-fieldtype="big" type="text" class="form-control" name="sect1_subheading" id="sect1-subheading" placeholder="e.g. The Best Reading Course" value="{{ $data->sect1_subheading }}">
                <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>                    
            </div>
        </form>

        <!-- Heading of Section 1 -->
        <form data-route="{{ route('about-us.founder.update_page') }}" class="non-media">
            @csrf
            <div class="form-group py-3">
                <label for="sect1-heading">Section Heading/Title</label>                    
                <input required data-fieldtype="big" type="text" class="form-control" name="sect1_heading" id="sect1-heading" placeholder="e.g. The Best Reading Course" value="{{ $data->sect1_heading }}">
                <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>                    
            </div>
        </form>

        <!-- Paragraph of Section 1 -->
        <form data-route="{{ route('about-us.founder.update_page') }}" class="non-media">
            @csrf
            <div class="form-group py-3">
                <label for="sect1-paragraph">Paragraph</label>
                <textarea data-fieldtype="tiny" class="form-control" name="sect1_para" aria-describedby="sect1ParagraphHelp" id="sect1-paragraph">{{ $data->sect1_para }}</textarea>
                <small id="sect1ParagraphHelp" class="form-text text-muted">Recommended length: 5-10 sentences</small>
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

        <!-- Image -->
        <form action="{{ route('about-us.founder.store_media_single') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3 py-3">
                <label for="sect1-image" class="form-label">Image</label>
                <input required data-fieldtype="media" accept="image/*" class="form-control form-control-sm" name="sect1_image" type="file" id="sect1-image" aria-describedby="sect1ImageHelp" value="{{ $data->sect1_image }}" >
                <small id="sect1ImageHelp" class="form-text text-muted">Recommended image size: 1365x1365 px ( 1:1 aspect ratio )</small>
                
                <label for="sect1-current-image" class="form-label">
                    Current Image:
                    @php
                        if ($data->sect1_image) {
                            $path = explode('/',$data->sect1_image);
                            $filename = end($path);
                        } else {
                            $filename = "No image set";
                        }
                    @endphp
                    {{ $filename }} 
                </label>
                @if ($data->sect1_image)
                    <img id="sect1-current-image" class="d-block admin-panel-image" src="{{ url($data->sect1_image) }}">
                @endif 
                <br>
                
                <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
            </div>                
        </form>

        <!-- Facebook link -->
        <form data-route="{{ route('about-us.founder.update_page') }}" class="non-media">
            @csrf
            <div class="form-group py-3">
                <label for="sect1-fb">Facebook Link</label>                    
                <input required data-fieldtype="big" type="text" class="form-control" name="sect1_fb" id="sect1-fb" placeholder="e.g. www.example.com/profile" value="{{ $data->sect1_fb }}">
                <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>                    
            </div>
        </form>

        <!-- Twitter link -->
        <form data-route="{{ route('about-us.founder.update_page') }}" class="non-media">
            @csrf
            <div class="form-group py-3">
                <label for="sect1-twt">Twitter Link</label>                    
                <input required data-fieldtype="big" type="text" class="form-control" name="sect1_twt" id="sect1-twt" placeholder="e.g. www.example.com/profile" value="{{ $data->sect1_twt }}">
                <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>                    
            </div>
        </form>

        <!-- Instagram link -->
        <form data-route="{{ route('about-us.founder.update_page') }}" class="non-media">
            @csrf
            <div class="form-group py-3">
                <label for="sect1-ig">Instagram Link</label>                    
                <input required data-fieldtype="big" type="text" class="form-control" name="sect1_ig" id="sect1-ig" placeholder="e.g. www.example.com/profile" value="{{ $data->sect1_ig }}">
                <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>                    
            </div>
        </form>
        <!-- End of Section 1 -->

        <br><br><br>

        <!-- Section 2: Instant Reader History -->
        <div class="row">
            <div class="col-lg-12">
                <h2>Section 2: Instant Reader History</h2>
            </div>
        </div>

        <!-- Heading of Section 2 -->
        <form data-route="{{ route('about-us.founder.update_page') }}" class="non-media">
            @csrf
            <div class="form-group py-3">
                <label for="sect2-heading">Section Heading/Title</label>                    
                <input required data-fieldtype="big" type="text" class="form-control" name="sect2_heading" id="sect2-heading" placeholder="e.g. The Best Reading Course" value="{{ $data->sect2_heading }}">
                <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>                    
            </div>
        </form>

        <!-- Paragraph 1 -->
        <form data-route="{{ route('about-us.founder.update_page') }}" class="non-media">
            @csrf
            <div class="form-group py-3">
                <label for="sect2-paragraph1">Paragraph 1</label>
                <textarea data-fieldtype="tiny" class="form-control" name="sect2_para1" aria-describedby="sect2Paragraph1Help" id="sect2-paragraph1">{{ $data->sect2_para1 }}</textarea>
                <small id="sect2Paragraph1Help" class="form-text text-muted">Recommended length: 5-10 sentences</small>
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
        <form data-route="{{ route('about-us.founder.update_page') }}" class="non-media">
            @csrf
            <div class="form-group py-3">
                <label for="sect2-paragraph2">Paragraph 2</label>
                <textarea data-fieldtype="tiny" class="form-control" name="sect2_para2" aria-describedby="sect2Paragraph2Help" id="sect2-paragraph2">{{ $data->sect2_para2 }}</textarea>
                <small id="sect2Paragraph2Htinyelp" class="form-text text-muted">Recommended length: 5-10 sentences</small>
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

        <!-- Image 1 -->
        <form action="{{ route('about-us.founder.store_media_single') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3 py-3">
                <label for="sect2-image1" class="form-label">Image 1</label>
                <input required data-fieldtype="media" accept="image/*" class="form-control form-control-sm" name="sect2_image1" type="file" id="sect2-image1" aria-describedby="sect2Image1Help" value="{{ $data->sect2_image1 }}">
                <small id="sect2Image1Help" class="form-text text-muted">Recommended image size: 2048x1365 px ( 3:2 aspect ratio )</small>
                
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
        <form action="{{ route('about-us.founder.store_media_single') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3 py-3">
                <label for="sect2-image2" class="form-label">Image 2</label>
                <input required data-fieldtype="media" accept="image/*" class="form-control form-control-sm" name="sect2_image2" type="file" id="sect2-image2" aria-describedby="sect2Image2Help" value="{{ $data->sect2_image2 }}">
                <small id="sect2Image2Help" class="form-text text-muted">Recommended image size: 2048x1365 px ( 3:2 aspect ratio )</small>
                
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

        <!-- Video -->
        <form action="{{ route('about-us.founder.store_media_single') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3 py-3">
                <label for="sect2-video" class="form-label">Video</label>
                <input required data-fieldtype="media" accept="video/*" class="form-control form-control-sm" type="file" name="sect2_video" id="sect2-video" aria-describedby="sect2VideoHelp" value="{{ $data->sect3_video }}">
                <small id="sect2VideoHelp" class="form-text text-muted">Recommended video size: WxH</small>
                <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
            </div>                
        </form>
        <!-- End of Section 2 -->

        <br><br><br>

        <!-- Section 3: Vision -->
        <div class="row">
            <div class="col-lg-12">
                <h2>Section 3: Vision</h2>
            </div>
        </div>

        <!-- Heading of Section 3 -->
        <form data-route="{{ route('about-us.founder.update_page') }}" class="non-media">
            @csrf
            <div class="form-group py-3">
                <label for="sect3-heading">Section Heading/Title</label>                    
                <input required data-fieldtype="big" type="text" class="form-control" name="sect3_heading" id="sect3-heading" placeholder="e.g. The Best Reading Course" value="{{ $data->sect3_heading }}">
                <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>                    
            </div>
        </form>

        <!-- Paragraph -->
        <form data-route="{{ route('about-us.founder.update_page') }}" class="non-media">
            @csrf
            <div class="form-group py-3">
                <label for="sect3-paragraph">Paragraph</label>
                <textarea data-fieldtype="tiny" class="form-control" name="sect3_para" aria-describedby="sect3ParagraphHelp" id="sect3-paragraph">{{ $data->sect3_para }}</textarea>
                <small id="sect3ParagraphHelp" class="form-text text-muted">Recommended length: 5-10 sentences</small>
                <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
            </div>
        </form>
        <script>    
            tinymce.init({
                height: "10rem",
                selector: '#sect3-paragraph',
                placeholder: "e.g. Tell something about this section.",
                plugins: 'link',
                menubar: false,
                toolbar: 'undo redo | bold italic underline | link'
            });            
        </script>

        <!-- Image -->
        <form action="{{ route('about-us.founder.store_media_single') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3 py-3">
                <label for="sect3-image" class="form-label">Image</label>
                <input required data-fieldtype="media" accept="image/*" class="form-control form-control-sm" name="sect3_image" type="file" id="sect3-image" aria-describedby="sect3ImageHelp" value="{{ $data->sect3_image }}">
                <small id="sect3ImageHelp" class="form-text text-muted">Recommended image size: 2048x1365 px ( 3:2 aspect ratio )</small>
                
                <label for="sect3-current-image" class="form-label">
                    Current Image:
                    @php
                        if ($data->sect3_image) {
                            $path = explode('/',$data->sect3_image);
                            $filename = end($path);
                        } else {
                            $filename = "No image set";
                        }
                    @endphp
                    {{ $filename }} 
                </label>
                @if ($data->sect3_image)
                    <img id="sect3-current-image" class="d-block admin-panel-image" src="{{ url($data->sect3_image) }}">
                @endif 
                <br>
                
                <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
            </div>                
        </form>        
        <!-- End of Section 3 -->

        <br><br><br>

        <!-- Section 4: Mission -->
        <div class="row">
            <div class="col-lg-12">
                <h2>Section 4: Mission</h2>
            </div>
        </div>

        <!-- Heading of Section 4 -->
        <form data-route="{{ route('about-us.founder.update_page') }}" class="non-media">
            @csrf
            <div class="form-group py-3">
                <label for="sect4-heading">Section Heading/Title</label>                    
                <input required data-fieldtype="big" type="text" class="form-control" name="sect4_heading" id="sect4_heading" placeholder="e.g. The Best Reading Course" value="{{ $data->sect4_heading }}">
                <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>                    
            </div>
        </form>

        <!-- Paragraph -->
        <form data-route="{{ route('about-us.founder.update_page') }}" class="non-media">
            @csrf
            <div class="form-group py-3">
                <label for="sect4-statement">Statement</label>
                <textarea data-fieldtype="big" class="form-control" name="sect4_para" id="sect4-paragraph" aria-describedby="sect4ParagraphHelp">{{ $data->sect4_para }}</textarea>
                <small id="sect4ParagraphHelp" class="form-text text-muted">Recommended length: 1 sentence</small>
                <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
            </div>
        </form>
        <script>    
            tinymce.init({
                height: "10rem",
                selector: '#sect4-statement',
                placeholder: "e.g. Tell something about this section.",
                plugins: 'link',
                menubar: false,
                toolbar: 'undo redo | bold italic underline | link'
            });            
        </script>

        <!-- Image -->
        <form action="{{ route('about-us.founder.store_media_single') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3 py-3">
                <label for="sect4-image" class="form-label">Image</label>
                <input required data-fieldtype="media" accept="image/*" class="form-control form-control-sm" name="sect4_image" type="file" id="sect4-image" aria-describedby="sect4ImageHelp" value="{{ $data->sect4_image }}">
                <small id="sect4ImageHelp" class="form-text text-muted">Recommended image size: 2048x1365 px ( 3:2 aspect ratio )</small>
                
                <label for="sect4-current-image" class="form-label">
                    Current Image:
                    @php
                        if ($data->sect4_image) {
                            $path = explode('/',$data->sect4_image);
                            $filename = end($path);
                        } else {
                            $filename = "No image set";
                        }
                    @endphp
                    {{ $filename }} 
                </label>
                @if ($data->sect4_image)
                    <img id="sect4-current-image" class="d-block admin-panel-image" src="{{ url($data->sect4_image) }}">
                @endif 
                <br>
                
                <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
            </div>                
        </form>        
        <!-- End of Section 4 -->

        <br><br><br>

        <!-- Section 5: Project VIRAC -->
        <div class="row">
            <div class="col-lg-12">
                <h2>Section 5: Project VIRAC</h2>
            </div>
        </div>

        <!-- Heading of Section 5 -->
        <form data-route="{{ route('about-us.founder.update_page') }}" class="non-media">
            @csrf
            <div class="form-group py-3">
                <label for="sect5-heading">Section Heading/Title</label>                    
                <input required data-fieldtype="big" type="text" class="form-control" name="sect5_heading" id="sect5-heading" placeholder="e.g. The Best Reading Course" value="{{ $data->sect5_heading }}">
                <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>                    
            </div>
        </form>

        <!-- Paragraph 1 -->
        <form data-route="{{ route('about-us.founder.update_page') }}" class="non-media">
            @csrf
            <div class="form-group py-3">
                <label for="sect5-paragraph1">Paragraph 1</label>
                <textarea data-fieldtype="tiny" class="form-control" id="sect5-paragraph1" name="sect5_para1" aria-describedby="sect5Paragraph1Help">{{  $data->sect5_para1 }}</textarea>
                <small id="sect5Paragraph1Help" class="form-text text-muted">Recommended length: 3-5 sentences</small>
                <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
            </div>
        </form>
        <script>    
            tinymce.init({
                height: "10rem",
                selector: '#sect5-paragraph1',
                placeholder: "e.g. Tell something about this section.",
                plugins: 'link',
                menubar: false,
                toolbar: 'undo redo | bold italic underline | link'
            });            
        </script>

        <!-- Paragraph 2 -->
        <form data-route="{{ route('about-us.founder.update_page') }}" class="non-media">
            @csrf
            <div class="form-group py-3">
                <label for="sect5-paragraph2">Paragraph 2</label>
                <textarea data-fieldtype="tiny" class="form-control" id="sect5-paragraph2" name="sect5_para2" aria-describedby="sect5Paragraph2Help">{{ $data->sect5_para2 }}</textarea>
                <small id="sect5Paragraph2Help" class="form-text text-muted">Recommended length: 3-5 sentences</small>
                <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
            </div>
        </form>
        <script>    
            tinymce.init({
                height: "10rem",
                selector: '#sect5-paragraph2',
                placeholder: "e.g. Tell something about this section.",
                plugins: 'link',
                menubar: false,
                toolbar: 'undo redo | bold italic underline | link'
            });            
        </script>

        <!-- Image 1 -->
        <form action="{{ route('about-us.founder.store_media_single') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3 py-3">
                <label for="sect5-image1" class="form-label">Image 1</label>
                <input required data-fieldtype="media" accept="image/*" class="form-control form-control-sm" type="file" name="sect5_image1" id="sect5-image1" aria-describedby="sect5Image1Help" value="{{ $data->sect5_image1 }}">
                <small id="sect5Image1Help" class="form-text text-muted">Recommended image size: 2048x1365 px ( 3:2 aspect ratio )</small>
                
                <label for="sect5-current-image1" class="form-label">
                    Current Image:
                    @php
                        if ($data->sect5_image1) {
                            $path = explode('/',$data->sect5_image1);
                            $filename = end($path);
                        } else {
                            $filename = "No image set";
                        }
                    @endphp
                    {{ $filename }} 
                </label>
                @if ($data->sect5_image1)
                    <img id="sect5-current-image1" class="d-block admin-panel-image" src="{{ url($data->sect5_image1) }}">
                @endif 
                <br>
                
                <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
            </div>                
        </form>

        <!-- Image 2 -->
        <form action="{{ route('about-us.founder.store_media_single') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3 py-3">
                <label for="sect5-image2" class="form-label">Image 2</label>
                <input required data-fieldtype="media" accept="image/*" class="form-control form-control-sm" type="file" name="sect5_image2" id="sect5-image2" aria-describedby="sect5Image2Help" value="{{ $data->sect5_image2 }}">
                <small id="sect5Image2Help" class="form-text text-muted">Recommended image size: 2048x1365 px ( 3:2 aspect ratio )</small>
                
                <label for="sect5-current-image2" class="form-label">
                    Current Image:
                    @php
                        if ($data->sect5_image2) {
                            $path = explode('/',$data->sect5_image2);
                            $filename = end($path);
                        } else {
                            $filename = "No image set";
                        }
                    @endphp
                    {{ $filename }} 
                </label>
                @if ($data->sect5_image2)
                    <img id="sect5-current-image2" class="d-block admin-panel-image" src="{{ url($data->sect5_image2) }}">
                @endif 
                <br>
                
                <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
            </div>                
        </form>

        <!-- Image 3 -->
        <form action="{{ route('about-us.founder.store_media_single') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3 py-3">
                <label for="sect5-image3" class="form-label">Image 3</label>
                <input required data-fieldtype="media" accept="image/*" class="form-control form-control-sm" type="file" name="sect5_image3" id="sect5-image3" aria-describedby="sect5Image3Help" value="{{ $data->sect5_image3 }}">
                <small id="sect5Image3Help" class="form-text text-muted">Recommended image size: 2048x1365 px ( 3:2 aspect ratio )</small>
                
                <label for="sect5-current-image3" class="form-label">
                    Current Image:
                    @php
                        if ($data->sect5_image3) {
                            $path = explode('/',$data->sect5_image3);
                            $filename = end($path);
                        } else {
                            $filename = "No image set";
                        }
                    @endphp
                    {{ $filename }} 
                </label>
                @if ($data->sect5_image3)
                    <img id="sect5-current-image3" class="d-block admin-panel-image" src="{{ url($data->sect5_image3) }}">
                @endif 
                <br>
                
                <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
            </div>                
        </form>

        <!-- Image 4 -->
        <form action="{{ route('about-us.founder.store_media_single') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3 py-3">
                <label for="sect5-image4" class="form-label">Image 4</label>
                <input required data-fieldtype="media" accept="image/*" class="form-control form-control-sm" type="file" name="sect5_image4" id="sect5-image4" aria-describedby="sect5Image4Help" value="{{ $data->sect5_image4 }}">
                <small id="sect5Image4Help" class="form-text text-muted">Recommended image size: 2048x1365 px ( 3:2 aspect ratio )</small>
                
                <label for="sect5-current-image4" class="form-label">
                    Current Image:
                    @php
                        if ($data->sect5_image4) {
                            $path = explode('/',$data->sect5_image4);
                            $filename = end($path);
                        } else {
                            $filename = "No image set";
                        }
                    @endphp
                    {{ $filename }} 
                </label>
                @if ($data->sect5_image4)
                    <img id="sect5-current-image4" class="d-block admin-panel-image" src="{{ url($data->sect5_image4) }}">
                @endif 
                <br>
                
                <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
            </div>                
        </form>

        <!-- Image 5 -->
        <form action="{{ route('about-us.founder.store_media_single') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3 py-3">
                <label for="sect5-image5" class="form-label">Image 5</label>
                <input required data-fieldtype="media" accept="image/*" class="form-control form-control-sm" type="file" name="sect5_image5" id="sect5-image5" aria-describedby="sect5Image5Help" value="{{ $data->sect5_image5 }}">
                <small id="sect5Image5Help" class="form-text text-muted">Recommended image size: 2048x1365 px ( 3:2 aspect ratio )</small>
                
                <label for="sect5-current-image5" class="form-label">
                    Current Image:
                    @php
                        if ($data->sect5_image5) {
                            $path = explode('/',$data->sect5_image5);
                            $filename = end($path);
                        } else {
                            $filename = "No image set";
                        }
                    @endphp
                    {{ $filename }} 
                </label>
                @if ($data->sect5_image5)
                    <img id="sect5-current-image5" class="d-block admin-panel-image" src="{{ url($data->sect5_image5) }}">
                @endif 
                <br>
                
                <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
            </div>                
        </form>

        <!-- Video -->
        <form action="{{ route('about-us.founder.store_media_single') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3 py-3">
                <label for="sect5-video" class="form-label">Video</label>
                <input required data-fieldtype="media" accept="video/*" class="form-control form-control-sm" type="file" name="sect5_video" id="sect5-video" aria-describedby="sect5VideoHelp" value="{{ $data->sect5_video }}">
                <small id="sect5VideoHelp" class="form-text text-muted">Recommended video size: WxH</small>
                <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
            </div>                
        </form>
        <!-- End of Section 5 -->
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