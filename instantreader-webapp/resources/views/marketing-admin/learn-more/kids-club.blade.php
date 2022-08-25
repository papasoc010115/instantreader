<!-- Page editor -->

@extends('layouts.marketing-admin-layout')

@section('content')
<div class="content">
    <!-- Intro -->
    <section class="main-heading">
        <h1 class="display-3">KIDS CLUB</h1> 
        <p>Edit content of "Kids CLub" here.</p>  
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
            <form data-route="{{ route('learn-more.kids-club.update_page') }}" class="non-media">
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
            <form data-route="{{ route('learn-more.kids-club.update_page') }}" class="non-media">
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
            <form data-route="{{ route('learn-more.kids-club.update_page') }}" class="non-media">
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
            <form data-route="{{ route('learn-more.kids-club.update_page') }}" class="non-media">
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
            <form data-route="{{ route('learn-more.kids-club.update_page') }}" class="non-media">
                @csrf
                <div class="form-group py-3">
                    <label for="sect1-heading">Section Heading/Title</label>                    
                    <input required data-fieldtype="big" type="text" class="form-control" name="sect1_heading" id="sect1-heading" placeholder="e.g. The Best Reading Course" value="{{ $data->sect1_heading }}">
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>                    
                </div>
            </form>

            <!-- Paragraph -->
            <form data-route="{{ route('learn-more.kids-club.update_page') }}" class="non-media">
                @csrf
                <div class="form-group py-3">
                    <label for="sect1-paragraph">Paragraph</label>
                    <textarea data-fieldtype="tiny" class="form-control" name="sect1_para" aria-describedby="sect1ParagraphHelp" id="sect1-paragraph">{{ $data->sect1_para }}</textarea>
                    <small id="sect1ParagraphHelp" class="form-text text-muted">Recommended length: 3 sentences</small>
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
            <form action="{{ route('learn-more.kids-club.store_media_single') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 py-3">
                    <label for="sect1-image" class="form-label">Image</label>
                    <input required data-fieldtype="media" accept="image/*" class="form-control form-control-sm" type="file" name="sect1_image" id="sect1-image" aria-describedby="sect1ImageHelp" value="{{ $data->sect1_image }}">
                    <small id="sect1ImageHelp" class="form-text text-muted">Recommended image size: 2048x1365 px ( 3:2 aspect ratio )</small>
                    
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
            <!-- End of Section 1 -->

            <br><br><br>

            <!--  Section 2: About Instant Reader Kids Club -->
            <div class="row">
                <div class="col-lg-12">
                    <h2>Section 2: About Instant Reader Kids Club</h2>
                </div>
            </div>

            <!-- Heading of Section 2 -->
            <form data-route="{{ route('learn-more.kids-club.update_page') }}" class="non-media">
                @csrf
                <div class="form-group py-3">
                    <label for="sect2-heading">Section Heading/Title</label>                    
                    <input required data-fieldtype="big" type="text" class="form-control" name="sect2_heading" id="sect2-heading" placeholder="e.g. The Best Reading Course" value="{{ $data->sect2_heading }}">
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>                    
                </div>
            </form>

            <!-- Paragraph 1 -->
            <form data-route="{{ route('learn-more.kids-club.update_page') }}" class="non-media">
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
            <form data-route="{{ route('learn-more.kids-club.update_page') }}" class="non-media">
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

            <!-- Image 1 -->
            <form action="{{ route('learn-more.kids-club.store_media_single') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 py-3">
                    <label for="sect2-image1" class="form-label">Image 1</label>
                    <input required data-fieldtype="media" accept="image/*" class="form-control form-control-sm" type="file" name="sect2_image1" id="sect2-image1" aria-describedby="sect2Image1Help" value="{{ $data->sect2_image1 }}">
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
            <form action="{{ route('learn-more.kids-club.store_media_single') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 py-3">
                    <label for="sect2-image2" class="form-label">Image 2</label>
                    <input required data-fieldtype="media" accept="image/*" class="form-control form-control-sm" type="file" name="sect2_image2" id="sect2-image2" aria-describedby="sect2Image2Help" value="{{ $data->sect2_image2 }}">
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

            <!-- Image 3 -->
            <form action="{{ route('learn-more.kids-club.store_media_single') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 py-3">
                    <label for="sect2-image3" class="form-label">Image 3</label>
                    <input required data-fieldtype="media" accept="image/*" class="form-control form-control-sm" type="file" name="sect2_image3" id="sect2-image3" aria-describedby="sect2Image3Help" value="{{ $data->sect2_image3 }}">
                    <small id="sect2Image3Help" class="form-text text-muted">Recommended image size: 2048x1365 px ( 3:2 aspect ratio )</small>
                    
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
                        <img id="sect2-current-image2" class="d-block admin-panel-image" src="{{ url($data->sect2_image3) }}">
                    @endif 
                    <br>
                    
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
                </div>                
            </form>

            <!-- Video -->
            <form action="{{ route('learn-more.kids-club.store_media_single') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 py-3">
                    <label for="sect2-video" class="form-label">Video</label>
                    <input required data-fieldtype="media" accept="video/*" class="form-control form-control-sm" type="file" name="sect2_video" id="sect2-video" aria-describedby="sect2Video" value="{{ $data->sect2_video }}">
                    <small id="sect2Video" class="form-text text-muted">Recommended video size: WxH</small>
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
                </div>  
            </form> 
            <!-- End of Section 2 -->

            <br><br><br>

            <!-- Section 3: Coming Soon/Register Now -->
            <div class="row">
                <div class="col-lg-12">
                    <h2>Section 3: Coming Soon/Register Now</h2>
                </div>
            </div>

            <!-- Heading of Section 3 -->
            <form data-route="{{ route('learn-more.kids-club.update_page') }}" class="non-media">
                @csrf
                <div class="form-group py-3">
                    <label for="sect3-heading">Section Heading/Title</label>                    
                    <input required data-fieldtype="big" type="text" class="form-control" name="sect3_heading" id="sect3-heading" placeholder="e.g. The Best Reading Course" value="{{ $data->sect3_heading }}"> 
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>                    
                </div>
            </form>

            <!-- Paragraph -->
            <form data-route="{{ route('learn-more.kids-club.update_page') }}" class="non-media">
                @csrf
                <div class="form-group py-3">
                    <label for="sect3-paragraph">Paragraph</label>
                    <textarea data-fieldtype="tiny" class="form-control" name="sect3_para" aria-describedby="sect3ParagraphHelp" id="sect3-paragraph">{{ $data->sect3_para }}</textarea>
                    <small id="sect3ParagraphHelp" class="form-text text-muted">Recommended length: 2 sentences</small>
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
            <form action="{{ route('learn-more.kids-club.store_media_single') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 py-3">
                    <label for="sect3-image" class="form-label">Image</label>
                    <input required data-fieldtype="media" accept="image/*" class="form-control form-control-sm" type="file" name="sect3_image" id="sect3-image" aria-describedby="sect3ImageHelp" value="{{ $data->sect3_image }}">
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