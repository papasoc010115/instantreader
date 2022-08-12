<!-- Page editor -->

@extends('layouts.marketing-admin-layout')

@section('content')
<div class="content">
    <!-- Intro -->
    <section class="main-heading">
        <h1 class="display-3">ADDITIONAL RESOURCES</h1> 
        <p>Edit content of webpages under "Additional Resources" here.</p>  
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
            <form data-route="{{ route('additional-resources.update_page') }}" class="non-media">
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
            <form data-route="{{ route('additional-resources.update_page') }}" class="non-media">
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
            <form data-route="{{ route('additional-resources.update_page') }}" class="non-media" class="non-media">
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
            <form data-route="{{ route('additional-resources.update_page') }}" class="non-media">
                @csrf
                <div class="form-group py-3">
                    <label for="author-editor">Author</label>                    
                    <input required data-fieldtype="big" type="text" class="form-control" id="author-editor" name="page_author" placeholder="John Doe" value="{{ $data->page_author }}">
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>                    
                </div>
            </form>
            <!-- End of Metadata -->
            
            <br><br><br>

            <!-- Section 1: Tips/Resources Selection Library -->
            <div class="row">
                <div class="col-lg-12">
                    <h2>Section 1: Tips/Resources Selection Library</h2>
                </div>
            </div>

            <!-- Heading of Section 1 -->
            <form data-route="{{ route('additional-resources.update_page') }}" class="non-media">
                @csrf
                <div class="form-group py-3">
                    <label for="sect1-heading">Section Heading/Title</label>                    
                    <input required data-fieldtype="big" type="text" class="form-control" name="sect1_heading" id="sect1-heading" placeholder="e.g. The Best Reading Course" value="{{ $data->sect1_heading }}">
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>                    
                </div>
            </form>

            <!-- Paragraph 1 -->
            <form data-route="{{ route('additional-resources.update_page') }}" class="non-media">
                @csrf
                <div class="form-group py-3">
                    <label for="sect1-paragraph1">Paragraph 1</label>
                    <textarea data-fieldtype="tiny" class="form-control" name="sect1_para1" aria-describedby="sect1Paragraph1Help" id="sect1-paragraph1">{{ $data->sect1_para1 }}</textarea>
                    <small id="sect1Paragraph1Help" class="form-text text-muted">Recommended length: 3 sentences</small>
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
            <form data-route="{{ route('additional-resources.update_page') }}" class="non-media">
                @csrf
                <div class="form-group py-3">
                    <label for="sect1-paragraph2">Paragraph 2</label>
                    <textarea data-fieldtype="tiny" class="form-control" name="sect1_para2" aria-describedby="sect1Paragraph2Help" id="sect1-paragraph2">{{ $data->sect1_para2 }}</textarea>
                    <small id="sect1Paragraph2Help" class="form-text text-muted">Recommended length: 3 sentences</small>
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
            <form data-route="{{ route('additional-resources.update_page') }}" class="non-media">
                @csrf
                <div class="form-group py-3">
                    <label for="sect1-paragraph3">Paragraph 3</label>
                    <textarea data-fieldtype="tiny" class="form-control" name="sect1_para3" aria-describedby="sect1Paragraph3Help" id="sect1-paragraph3">{{ $data->sect1_para3 }}</textarea>
                    <small id="sect1Paragraph3Help" class="form-text text-muted">Recommended length: 3 sentences</small>
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

            <!-- Image 1 -->
            <form action="{{ route('additional-resources.store_media_single') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 py-3">
                    <label for="sect1-image1" class="form-label">Image 1</label>
                    <input required data-fieldtype="media" class="form-control form-control-sm" name="sect1_image1" type="file" id="sect1-image1" aria-describedby="sect1Image1Help" value="{{ $data->sect1_image1 }}">
                    <small id="sect1Image1Help" class="form-text text-muted">Recommended image size: WxH</small>
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
                </div>                
            </form>

            <!-- Image 2 -->
            <form action="{{ route('additional-resources.store_media_single') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 py-3">
                    <label for="sect1-image2" class="form-label">Image 2</label>
                    <input required data-fieldtype="media" accept="image/*" class="form-control form-control-sm" name="sect1_image2" type="file" id="sect1-image2" aria-describedby="sect1Image2Help" value="{{ $data->sect1_image2 }}">
                    <small id="sect1Image2Help" class="form-text text-muted">Recommended image size: WxH</small>
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
                </div>                
            </form>

            <!-- Image 3 -->
            <form action="{{ route('additional-resources.store_media_single') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 py-3">
                    <label for="sect1-image3" class="form-label">Image 3</label>
                    <input required data-fieldtype="media" accept="image/*" class="form-control form-control-sm" name="sect1_image3" type="file" id="sect1-image3" aria-describedby="sect1Image3Help" value="{{ $data->sect1_image3 }}">
                    <small id="sect1Image3Help" class="form-text text-muted">Recommended image size: WxH</small>
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
                </div>                
            </form>
            <!-- End of Section 1 -->
            
            <br><br><br>

            <!-- Section 2: E-books/Blogs -->
            <div class="row">
                <div class="col-lg-12">
                    <h2>Section 2: E-books/Blogs</h2>
                </div>
            </div>

            <!-- Heading 1 of Section 2 -->
            <form data-route="{{ route('additional-resources.update_page') }}" class="non-media">
                @csrf
                <div class="form-group py-3">
                    <label for="sect2-heading1">Section Heading/Title 1 (E-books/PDFs)</label>                    
                    <input required data-fieldtype="big" type="text" class="form-control" name="sect2_heading1" id="sect2-heading1" placeholder="e.g. The Best Reading Course" value="{{ $data->sect2_heading1 }}">
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>                    
                </div>
            </form>

            <!-- Heading 2 of Section 2 -->
            <form data-route="{{ route('additional-resources.update_page') }}" class="non-media">
                @csrf
                <div class="form-group py-3">
                    <label for="sect2-heading2">Section Heading/Title 2 (Blogs)</label>                    
                    <input required data-fieldtype="big" type="text" class="form-control" name="sect2_heading2" id="sect2-heading2" placeholder="e.g. The Best Reading Course" value="{{ $data->sect2_heading2 }}">
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>                    
                </div>
            </form>
            <!-- End of Section 2 -->
            
            <br><br><br>

            <!-- Section 3: Videos -->
            <div class="row">
                <div class="col-lg-12">
                    <h2>Section 3: Videos</h2>
                </div>
            </div>

            <!-- Heading of Section 3 -->
            <form data-route="{{ route('additional-resources.update_page') }}" class="non-media">
                @csrf
                <div class="form-group py-3">
                    <label for="sect3-heading">Section Heading/Title</label>                    
                    <input required data-fieldtype="big" type="text" class="form-control" name="sect3_heading" id="sect3-heading" placeholder="e.g. The Best Reading Course" value="{{ $data->sect3_para1 }}">
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>                    
                </div>
            </form>

            <!-- Paragraph -->
            <form data-route="{{ route('additional-resources.update_page') }}" class="non-media">
                @csrf
                <div class="form-group py-3">
                    <label for="sect3-paragraph">Paragraph</label>
                    <textarea data-fieldtype="tiny" class="form-control" name="sect3_para" aria-describedby="sect3ParagraphHelp" id="sect3-paragraph">{{ $data->sect3_para }}</textarea>
                    <small id="sect3ParagraphHelp" class="form-text text-muted">Recommended length: N sentences</small>
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

            <!-- Videos of Section 3 -->
            <form action="{{ route('additional-resources.store_media_multiple') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 py-3">
                    <label for="sect3-videoss" class="form-label">Videos (Select at least 1 video)</label>
                    <input required data-fieldtype="media" accept="video/*" class="form-control form-control-sm" name="sect3_videos[]" type="file" id="sect3-videos" aria-describedby="sect3VideosHelp" multiple value="{{ $data->sect3_videos }}">
                    <small id="sect3VideosHelp" class="form-text text-muted">Recommended image size: WxH</small>
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
                </div>                
            </form>
            <!-- End of Section 3 -->
            
            <br><br><br>

        <!-- Section 4: Visuals -->
        <div class="row">
            <div class="col-lg-12">
                <h2>Section 4: Visuals</h2>
            </div>
        </div>

        <!-- Heading of Section 4 -->
        <form data-route="{{ route('additional-resources.update_page') }}" class="non-media">
            @csrf
            <div class="form-group py-3">
                <label for="sect4-heading">Section Heading/Title</label>                    
                <input required data-fieldtype="big" type="text" class="form-control" name="sect4_heading" id="sect4-heading" placeholder="e.g. The Best Reading Course" value="{{ $data->sect4_heading }}">
                <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>                    
            </div>
        </form>

        <!-- Paragraph -->
        <form data-route="{{ route('additional-resources.update_page') }}" class="non-media">
            @csrf
            <div class="form-group py-3">
                <label for="sect4-paragraph">Paragraph</label>
                <textarea data-fieldtype="tiny" class="form-control" name="sect4_para" aria-describedby="sect4ParagraphHelp" id="sect4-paragraph">{{ $data->sect4_para }}</textarea>
                <small id="sect4ParagraphHelp" class="form-text text-muted">Recommended length: N sentences</small>
                <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
            </div>
        </form>
        <script>    
            tinymce.init({
                height: "10rem",
                selector: '#sect4-paragraph',
                placeholder: "e.g. Tell something about this section.",
                plugins: 'link',
                menubar: false,
                toolbar: 'undo redo | bold italic underline | link'
            });            
        </script>

        <!-- Images of Section 4 -->
        <form action="{{ route('additional-resources.store_media_multiple') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3 py-3">
                <label for="sect4-images" class="form-label">Images (Select at least 1 photo)</label>
                <input required data-fieldtype="media" accept="image/*" class="form-control form-control-sm" name="sect4_images[]" type="file" id="sect4-images" aria-describedby="sect4ImagesHelp" multiple value="{{ $data->sect4_images }}">
                <small id="sect4ImagesHelp" class="form-text text-muted">Recommended image size: WxH</small>
                <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
            </div>              
        </form>
        <!-- End of Section 4 -->
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