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
            <form action="">
                @csrf
                <div class="form-group py-3">
                    <label for="title-editor">Page Title</label>
                    <input type="text" class="form-control" id="title-editor" maxlength="60" placeholder="Enter page title">
                    <small class="form-text char-count" id="title-editor-char-counter">0/60</small>
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
                </div>
            </form>
            <!-- 
                Description.
                According to ContentKing (2021), 155 is a good maximum character length for description. (reference: https://www.contentkingapp.com/academy/meta-description/#:~:text=Meta%20Description%20have%3F-,Length,70%20characters%20or%20430%20pixels)
            -->
            <form action="">
                @csrf
                <div class="form-group py-3">
                    <label for="description-editor">Page Description</label>
                    <textarea class="form-control" id="description-editor" placeholder="Enter page description" maxlength="155" rows="3"></textarea>
                    <small class="form-text char-count" id="description-editor-char-counter">0/155</small>
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
                </div>
            </form>
            <!-- 
                Keywords
             -->
            <form action="">
                @csrf
                <div class="form-group py-3">
                    <label for="keywords-editor">Keywords</label>                    
                    <input type="text" class="form-control" id="keywords-editor"  aria-describedby="keywordsHelp" placeholder="e.g. read, learn, students">
                    <small id="keywordsHelp" class="form-text text-muted" style="display:block; float: right;">Separate keywords with comma</small>
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>                    
                </div>
            </form>
            <!-- 
                Author
            -->
            <form action="">
                @csrf
                <div class="form-group py-3">
                    <label for="author-editor">Author</label>                    
                    <input type="text" class="form-control" id="author-editor" placeholder="John Doe">
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>                    
                </div>
            </form>
        </div>
        <!-- End of Metadata -->

        <br><br><br>
        
        <!-- Section 1: Teacher Vicki -->
        <div class="row">
            <div class="col-lg-12">
                <h2>Section 1: Teacher Vicki</h2>
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

        <!-- Paragraph of Section 1 -->
        <form action="">
            @csrf
            <div class="form-group py-3">
                <label for="sect1-paragraph">Paragraph</label>
                <textarea class="form-control" name="sect1-paragraph" aria-describedby="sect1ParagraphHelp" id="sect1-paragraph"></textarea>
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
        <form action="{{ route('about-us.update_founder_sect1_image') }}" method="POST">
            @csrf
            <div class="mb-3 py-3">
                <label for="sect1-image" class="form-label">Image</label>
                <input class="form-control form-control-sm" name="founder-teacher-vicki-image" type="file" id="sect1-image" aria-describedby="sect1ImageHelp">
                <small id="sect1ImageHelp" class="form-text text-muted">Recommended image size: WxH</small>
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
        <form action="">
            @csrf
            <div class="form-group py-3">
                <label for="sect2-heading">Section Heading/Title</label>                    
                <input type="text" class="form-control" id="sect2-heading" placeholder="e.g. The Best Reading Course">
                <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>                    
            </div>
        </form>

        <!-- Paragraph 1 -->
        <form action="">
            @csrf
            <div class="form-group py-3">
                <label for="sect2-paragraph1">Paragraph 1</label>
                <textarea class="form-control" name="sect2-paragraph1" aria-describedby="sect2Paragraph1Help" id="sect2-paragraph1"></textarea>
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
        <form action="">
            @csrf
            <div class="form-group py-3">
                <label for="sect2-paragraph2">Paragraph 2</label>
                <textarea class="form-control" name="sect2-paragraph2" aria-describedby="sect2Paragraph2Help" id="sect2-paragraph2"></textarea>
                <small id="sect2Paragraph2Help" class="form-text text-muted">Recommended length: 5-10 sentences</small>
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
        <form action="{{ route('about-us.update_founder_sect2_image1') }}" method="POST">
            @csrf
            <div class="mb-3 py-3">
                <label for="sect2-image1" class="form-label">Image 1</label>
                <input class="form-control form-control-sm" name="founder-ir-history-image1" type="file" id="sect2-image1" aria-describedby="sect2Image1Help">
                <small id="sect2Image1Help" class="form-text text-muted">Recommended image size: WxH</small>
                <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
            </div>                
        </form>

        <!-- Image 2 -->
        <form action="{{ route('about-us.update_founder_sect2_image2') }}" method="POST">
            @csrf
            <div class="mb-3 py-3">
                <label for="sect2-image2" class="form-label">Image 2</label>
                <input class="form-control form-control-sm" name="founder-ir-history-image2" type="file" id="sect2-image2" aria-describedby="sect2Image2Help">
                <small id="sect2Image2Help" class="form-text text-muted">Recommended image size: WxH</small>
                <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
            </div>                
        </form>

        <!-- Video -->
        <form action="">
            @csrf
            <div class="mb-3 py-3">
                <label for="sect2-video" class="form-label">Video</label>
                <input class="form-control form-control-sm" type="file" id="sect2-video" aria-describedby="sect2VideoHelp">
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
        <form action="">
            @csrf
            <div class="form-group py-3">
                <label for="sect3-heading">Section Heading/Title</label>                    
                <input type="text" class="form-control" id="sect3-heading" placeholder="e.g. The Best Reading Course">
                <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>                    
            </div>
        </form>

        <!-- Paragraph -->
        <form action="">
            @csrf
            <div class="form-group py-3">
                <label for="sect3-paragraph">Paragraph</label>
                <textarea class="form-control" name="sect3-paragraph" aria-describedby="sect3ParagraphHelp" id="sect3-paragraph"></textarea>
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
        <form action="{{ route('about-us.update_founder_sect3_image') }}" method="POST">
            @csrf
            <div class="mb-3 py-3">
                <label for="sect3-image" class="form-label">Image</label>
                <input class="form-control form-control-sm" name="founder-ir-vision-image" type="file" id="sect3-image" aria-describedby="sect3ImageHelp">
                <small id="sect3ImageHelp" class="form-text text-muted">Recommended image size: WxH</small>
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
        <form action="">
            @csrf
            <div class="form-group py-3">
                <label for="sect4-heading">Section Heading/Title</label>                    
                <input type="text" class="form-control" id="sect4-heading" placeholder="e.g. The Best Reading Course">
                <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>                    
            </div>
        </form>

        <!-- Paragraph -->
        <form action="">
            @csrf
            <div class="form-group py-3">
                <label for="sect4-statement">Statement</label>
                <textarea class="form-control" name="sect4-statement" aria-describedby="sect4ParagraphHelp" id="sect4-paragraph"></textarea>
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
        <form action="{{ route('about-us.update_founder_sect4_image') }}" method="POST">
            @csrf
            <div class="mb-3 py-3">
                <label for="sect4-image" class="form-label">Image</label>
                <input class="form-control form-control-sm" name="founder-ir-mission-image" type="file" id="sect4-image" aria-describedby="sect4ImageHelp">
                <small id="sect4ImageHelp" class="form-text text-muted">Recommended image size: WxH</small>
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
        <form action="">
            @csrf
            <div class="form-group py-3">
                <label for="sect5-heading">Section Heading/Title</label>                    
                <input type="text" class="form-control" id="sect5-heading" placeholder="e.g. The Best Reading Course">
                <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>                    
            </div>
        </form>

        <!-- Paragraph 1 -->
        <form action="">
            @csrf
            <div class="form-group py-3">
                <label for="sect5-paragraph1">Paragraph 1</label>
                <textarea class="form-control" name="sect5-paragraph1" aria-describedby="sect5Paragraph1Help" id="sect5-paragraph1"></textarea>
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
        <form action="">
            @csrf
            <div class="form-group py-3">
                <label for="sect5-paragraph2">Paragraph 2</label>
                <textarea class="form-control" name="sect5-paragraph2" aria-describedby="sect5Paragraph2Help" id="sect5-paragraph2"></textarea>
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

         <!-- Images of Section 5 -->
         <form action="{{ route('about-us.update_founder_sect5_images') }}" method="POST">
            @csrf
            <div class="mb-3 py-3">
                <label for="sect5-images" class="form-label">Images (Select 5 only)</label>
                <input class="form-control form-control-sm" name="founder-project-virac-images[]" type="file" id="sect5-images" aria-describedby="sect5ImagesHelp" multiple>
                <small id="sect5ImagesHelp" class="form-text text-muted">Recommended image size: WxH</small>
                <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
            </div>                
        </form>

        <!-- Video -->
        <form action="">
            @csrf
            <div class="mb-3 py-3">
                <label for="sect5-video" class="form-label">Video</label>
                <input class="form-control form-control-sm" type="file" id="sect5-video" aria-describedby="sect5VideoHelp">
                <small id="sect5VideoHelp" class="form-text text-muted">Recommended video size: WxH</small>
                <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
            </div>                
        </form>
        <!-- End of Section 5 -->
    </section>
</div>

@endsection