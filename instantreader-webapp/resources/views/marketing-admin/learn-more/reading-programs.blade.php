<!-- Page editor -->

@extends('layouts.marketing-admin-layout')

@section('content')
<div class="content">
    <!-- Intro -->
    <section class="main-heading">
        <h1 class="display-3">READING PROGRAMS</h1> 
        <p>Edit content of "Reading Programs" here.</p>  
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
            <form data-route="{{ route('learn-more.reading-programs.update_page') }}">
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
            <form data-route="{{ route('learn-more.reading-programs.update_page') }}">
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
            <form data-route="{{ route('learn-more.reading-programs.update_page') }}">
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
            <form data-route="{{ route('learn-more.reading-programs.update_page') }}">
                @csrf
                <div class="form-group py-3">
                    <label for="author-editor">Author</label>                    
                    <input required data-fieldtype="big" type="text" class="form-control" id="author-editor" name="page_author" placeholder="John Doe" value="{{ $data->page_author }}">
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>                    
                </div>
            </form>
            <!-- End of Metadata -->

            <br><br><br>

            <!-- Section 1: All Programs -->
            <div class="row">
                <div class="col-lg-12">
                    <h2>Section 1: All Programs</h2>
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

            <!-- Paragraph 1 -->
            <form action="">
                @csrf
                <div class="form-group py-3">
                    <label for="sect1-paragraph1">Paragraph 1</label>
                    <textarea class="form-control" name="sect1-paragraph1" aria-describedby="sect1Paragraph1Help" id="sect1-paragraph1"></textarea>
                    <small id="sect1Paragraph1Help" class="form-text text-muted">Recommended length: 2-3 sentences</small>
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
            <form action="">
                @csrf
                <div class="form-group py-3">
                    <label for="sect1-paragraph2">Paragraph 2</label>
                    <textarea class="form-control" name="sect1-paragraph2" aria-describedby="sect1Paragraph2Help" id="sect1-paragraph2"></textarea>
                    <small id="sect1Paragraph2Help" class="form-text text-muted">Recommended length: 2-3 sentences</small>
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
            <form action="">
                @csrf
                <div class="form-group py-3">
                    <label for="sect1-paragraph3">Paragraph 3</label>
                    <textarea class="form-control" name="sect1-paragraph3" aria-describedby="sect1Paragraph3Help" id="sect1-paragraph3"></textarea>
                    <small id="sect1Paragraph3Help" class="form-text text-muted">Recommended length: 2-3 sentences</small>
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
            <form action="">
                @csrf
                <div class="form-group py-3">
                    <label for="sect1-paragraph4">Paragraph 4</label>
                    <textarea class="form-control" name="sect1-paragraph4" aria-describedby="sect1Paragraph4Help" id="sect1-paragraph4"></textarea>
                    <small id="sect1Paragraph4Help" class="form-text text-muted">Recommended length: 2-3 sentences</small>
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

            <!-- Image 3 -->
            <form action="">
                @csrf
                <div class="mb-3 py-3">
                    <label for="sect1-image3" class="form-label">Image 3</label>
                    <input class="form-control form-control-sm" type="file" id="sect1-image3" aria-describedby="sect1Image3Help">
                    <small id="sect1Image3Help" class="form-text text-muted">Recommended image size: WxH</small>
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
                </div>                
            </form>

            <!-- Image 4 -->
            <form action="">
                @csrf
                <div class="mb-3 py-3">
                    <label for="sect1-image4" class="form-label">Image 4</label>
                    <input class="form-control form-control-sm" type="file" id="sect1-image4" aria-describedby="sect1Image4Help">
                    <small id="sect1Image4Help" class="form-text text-muted">Recommended image size: WxH</small>
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
                </div>                
            </form>
            <!-- End of Section 1 -->

            <br><br><br>

            <!-- Section 2: Basic Program -->
            <div class="row">
                <div class="col-lg-12">
                    <h2>Section 2: Basic Program</h2>
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
                    <small id="sect2Paragraph1Help" class="form-text text-muted">Recommended length: 2-3 sentences</small>
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
                    <small id="sect2Paragraph2Help" class="form-text text-muted">Recommended length: 2-3 sentences</small>
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
            <form action="">
                @csrf
                <div class="form-group py-3">
                    <label for="sect2-paragraph3">Paragraph 3</label>
                    <textarea class="form-control" name="sect2-paragraph3" aria-describedby="sect2Paragraph3Help" id="sect2-paragraph3"></textarea>
                    <small id="sect2Paragraph3Help" class="form-text text-muted">Recommended length: 2-3 sentences</small>
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

            <!-- Image 1 -->
            <form action="">
                @csrf
                <div class="mb-3 py-3">
                    <label for="sect2-image1" class="form-label">Image 1</label>
                    <input class="form-control form-control-sm" type="file" id="sect2-image1" aria-describedby="sect2Image1Help">
                    <small id="sect2Image1Help" class="form-text text-muted">Recommended image size: WxH</small>
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
                </div>                
            </form>

            <!-- Image 2 -->
            <form action="">
                @csrf
                <div class="mb-3 py-3">
                    <label for="sect2-image2" class="form-label">Image 2</label>
                    <input class="form-control form-control-sm" type="file" id="sect2-image2" aria-describedby="sect2Image2Help">
                    <small id="sect2Image2Help" class="form-text text-muted">Recommended image size: WxH</small>
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
                </div>                
            </form>

            <!-- Image 3 -->
            <form action="">
                @csrf
                <div class="mb-3 py-3">
                    <label for="sect2-image3" class="form-label">Image 3</label>
                    <input class="form-control form-control-sm" type="file" id="sect2-image3" aria-describedby="sect2Image3Help">
                    <small id="sect2Image3Help" class="form-text text-muted">Recommended image size: WxH</small>
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
                </div>                
            </form>
            <!-- End of Section 2 -->

            <br><br><br>
            
            <!-- Section 3: Advance Program -->
            <div class="row">
                <div class="col-lg-12">
                    <h2>Section 3: Advance Program</h2>
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

            <!-- Paragraph 1 -->
            <form action="">
                @csrf
                <div class="form-group py-3">
                    <label for="sect3-paragraph1">Paragraph 1</label>
                    <textarea class="form-control" name="sect3-paragraph1" aria-describedby="sect3Paragraph1Help" id="sect3-paragraph1"></textarea>
                    <small id="sect3Paragraph1Help" class="form-text text-muted">Recommended length: 2-3 sentences</small>
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
                </div>
            </form>
            <script>    
                tinymce.init({
                    height: "10rem",
                    selector: '#sect3-paragraph1',
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
                    <label for="sect3-paragraph2">Paragraph 2</label>
                    <textarea class="form-control" name="sect3-paragraph2" aria-describedby="sect3Paragraph2Help" id="sect3-paragraph2"></textarea>
                    <small id="sect3Paragraph2Help" class="form-text text-muted">Recommended length: 2-3 sentences</small>
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
                </div>
            </form>
            <script>    
                tinymce.init({
                    height: "10rem",
                    selector: '#sect3-paragraph2',
                    placeholder: "e.g. Tell something about this section.",
                    plugins: 'link',
                    menubar: false,
                    toolbar: 'undo redo | bold italic underline | link'
                });            
            </script>

            <!-- Paragraph 3 -->
            <form action="">
                @csrf
                <div class="form-group py-3">
                    <label for="sect3-paragraph3">Paragraph 3</label>
                    <textarea class="form-control" name="sect3-paragraph3" aria-describedby="sect3Paragraph3Help" id="sect3-paragraph3"></textarea>
                    <small id="sect3Paragraph3Help" class="form-text text-muted">Recommended length: 2-3 sentences</small>
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
                </div>
            </form>
            <script>    
                tinymce.init({
                    height: "10rem",
                    selector: '#sect3-paragraph3',
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
                    <label for="sect3-image1" class="form-label">Image 1</label>
                    <input class="form-control form-control-sm" type="file" id="sect3-image1" aria-describedby="sect3Image1Help">
                    <small id="sect3Image1Help" class="form-text text-muted">Recommended image size: WxH</small>
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
                </div>                
            </form>

            <!-- Image 2 -->
            <form action="">
                @csrf
                <div class="mb-3 py-3">
                    <label for="sect3-image2" class="form-label">Image 2</label>
                    <input class="form-control form-control-sm" type="file" id="sect3-image2" aria-describedby="sect3Image2Help">
                    <small id="sect3Image2Help" class="form-text text-muted">Recommended image size: WxH</small>
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
                </div>                
            </form>

            <!-- Image 3 -->
            <form action="">
                @csrf
                <div class="mb-3 py-3">
                    <label for="sect3-image3" class="form-label">Image 3</label>
                    <input class="form-control form-control-sm" type="file" id="sect3-image3" aria-describedby="sect3Image3Help">
                    <small id="sect3Image3Help" class="form-text text-muted">Recommended image size: WxH</small>
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
                </div>                
            </form>
            <!-- End of Section 3 -->

            <br><br><br>

            <!-- Section 4: Mastery Program -->
            <div class="row">
                <div class="col-lg-12">
                    <h2>Section 4: Mastery Program</h2>
                </div>
            </div>

            <!-- Heading of Section 3 -->
            <form action="">
                @csrf
                <div class="form-group py-3">
                    <label for="sect4-heading">Section Heading/Title</label>                    
                    <input type="text" class="form-control" id="sect4-heading" placeholder="e.g. The Best Reading Course">
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>                    
                </div>
            </form>

            <!-- Paragraph 1 -->
            <form action="">
                @csrf
                <div class="form-group py-3">
                    <label for="sect4-paragraph1">Paragraph 1</label>
                    <textarea class="form-control" name="sect4-paragraph1" aria-describedby="sect4Paragraph1Help" id="sect4-paragraph1"></textarea>
                    <small id="sect4Paragraph1Help" class="form-text text-muted">Recommended length: 2-3 sentences</small>
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
                </div>
            </form>
            <script>    
                tinymce.init({
                    height: "10rem",
                    selector: '#sect4-paragraph1',
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
                    <label for="sect4-paragraph2">Paragraph 2</label>
                    <textarea class="form-control" name="sect4-paragraph2" aria-describedby="sect4Paragraph2Help" id="sect4-paragraph2"></textarea>
                    <small id="sect4Paragraph2Help" class="form-text text-muted">Recommended length: 2-3 sentences</small>
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
                </div>
            </form>
            <script>    
                tinymce.init({
                    height: "10rem",
                    selector: '#sect4-paragraph2',
                    placeholder: "e.g. Tell something about this section.",
                    plugins: 'link',
                    menubar: false,
                    toolbar: 'undo redo | bold italic underline | link'
                });            
            </script>

            <!-- Paragraph 3 -->
            <form action="">
                @csrf
                <div class="form-group py-3">
                    <label for="sect4-paragraph3">Paragraph 3</label>
                    <textarea class="form-control" name="sect4-paragraph3" aria-describedby="sect4Paragraph3Help" id="sect4-paragraph3"></textarea>
                    <small id="sect4Paragraph3Help" class="form-text text-muted">Recommended length: 2-3 sentences</small>
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
                </div>
            </form>
            <script>    
                tinymce.init({
                    height: "10rem",
                    selector: '#sect4-paragraph3',
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
                    <label for="sect4-image1" class="form-label">Image 1</label>
                    <input class="form-control form-control-sm" type="file" id="sect4-image1" aria-describedby="sect4Image1Help">
                    <small id="sect4Image1Help" class="form-text text-muted">Recommended image size: WxH</small>
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
                </div>                
            </form>

            <!-- Image 2 -->
            <form action="">
                @csrf
                <div class="mb-3 py-3">
                    <label for="sect4-image2" class="form-label">Image 2</label>
                    <input class="form-control form-control-sm" type="file" id="sect4-image2" aria-describedby="sect4Image2Help">
                    <small id="sect4Image2Help" class="form-text text-muted">Recommended image size: WxH</small>
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
                </div>                
            </form>

            <!-- Image 3 -->
            <form action="">
                @csrf
                <div class="mb-3 py-3">
                    <label for="sect4-image3" class="form-label">Image 3</label>
                    <input class="form-control form-control-sm" type="file" id="sect4-image3" aria-describedby="sect4Image3Help">
                    <small id="sect4Image3Help" class="form-text text-muted">Recommended image size: WxH</small>
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
                </div>                
            </form>
            <!-- End of Section 4 -->

            <br><br><br>

            <!--  Section 5: Compass Program -->
            <div class="row">
                <div class="col-lg-12">
                    <h2>Section 5: Compass Program</h2>
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
                    <small id="sect5Paragraph1Help" class="form-text text-muted">Recommended length: 2-3 sentences</small>
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
                    <small id="sect5Paragraph2Help" class="form-text text-muted">Recommended length: 2-3 sentences</small>
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

            <!-- Paragraph 3 -->
            <form action="">
                @csrf
                <div class="form-group py-3">
                    <label for="sect5-paragraph3">Paragraph 3</label>
                    <textarea class="form-control" name="sect5-paragraph3" aria-describedby="sect5Paragraph3Help" id="sect5-paragraph3"></textarea>
                    <small id="sect5Paragraph3Help" class="form-text text-muted">Recommended length: 2-3 sentences</small>
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
                </div>
            </form>
            <script>    
                tinymce.init({
                    height: "10rem",
                    selector: '#sect5-paragraph3',
                    placeholder: "e.g. Tell something about this section.",
                    plugins: 'link',
                    menubar: false,
                    toolbar: 'undo redo | bold italic underline | link'
                });            
            </script>

            <!-- Paragraph 4 -->
            <form action="">
                @csrf
                <div class="form-group py-3">
                    <label for="sect5-paragraph4">Paragraph 4</label>
                    <textarea class="form-control" name="sect5-paragraph4" aria-describedby="sect5Paragraph4Help" id="sect5-paragraph4"></textarea>
                    <small id="sect5Paragraph4Help" class="form-text text-muted">Recommended length: 2-3 sentences</small>
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
                </div>
            </form>
            <script>    
                tinymce.init({
                    height: "10rem",
                    selector: '#sect5-paragraph4',
                    placeholder: "e.g. Tell something about this section.",
                    plugins: 'link',
                    menubar: false,
                    toolbar: 'undo redo | bold italic underline | link'
                });            
            </script>

            <!-- Paragraph 5 -->
            <form action="">
                @csrf
                <div class="form-group py-3">
                    <label for="sect5-paragraph5">Paragraph 5</label>
                    <textarea class="form-control" name="sect5-paragraph5" aria-describedby="sect5Paragraph5Help" id="sect5-paragraph5"></textarea>
                    <small id="sect5Paragraph5Help" class="form-text text-muted">Recommended length: 2-3 sentences</small>
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
                </div>
            </form>
            <script>    
                tinymce.init({
                    height: "10rem",
                    selector: '#sect5-paragraph5',
                    placeholder: "e.g. Tell something about this section.",
                    plugins: 'link',
                    menubar: false,
                    toolbar: 'undo redo | bold italic underline | link'
                });            
            </script>

            <!-- Paragraph 6 -->
            <form action="">
                @csrf
                <div class="form-group py-3">
                    <label for="sect5-paragraph6">Paragraph 6</label>
                    <textarea class="form-control" name="sect5-paragraph6" aria-describedby="sect5Paragraph6Help" id="sect5-paragraph6"></textarea>
                    <small id="sect5Paragraph6Help" class="form-text text-muted">Recommended length: 2-3 sentences</small>
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
                </div>
            </form>
            <script>    
                tinymce.init({
                    height: "10rem",
                    selector: '#sect5-paragraph6',
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
                <label for="sect5-image1" class="form-label">Image 1</label>
                <input class="form-control form-control-sm" type="file" id="sect5-image1" aria-describedby="sect5Image1Help">
                <small id="sect5Image1Help" class="form-text text-muted">Recommended image size: WxH</small>
                <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
            </div>                
        </form>

        <!-- Image 2 -->
        <form action="">
            @csrf
            <div class="mb-3 py-3">
                <label for="sect5-image2" class="form-label">Image 2</label>
                <input class="form-control form-control-sm" type="file" id="sect5-image2" aria-describedby="sect5Image2Help">
                <small id="sect5Image2Help" class="form-text text-muted">Recommended image size: WxH</small>
                <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
            </div>                
        </form>

        <!-- Image 3 -->
        <form action="">
            @csrf
            <div class="mb-3 py-3">
                <label for="sect5-image3" class="form-label">Image 3</label>
                <input class="form-control form-control-sm" type="file" id="sect5-image3" aria-describedby="sect5Image3Help">
                <small id="sect5Image3Help" class="form-text text-muted">Recommended image size: WxH</small>
                <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
            </div>                
        </form>

        <!-- Image 4 -->
        <form action="">
            @csrf
            <div class="mb-3 py-3">
                <label for="sect5-image4" class="form-label">Image 4</label>
                <input class="form-control form-control-sm" type="file" id="sect5-image4" aria-describedby="sect5Image4Help">
                <small id="sect5Image4Help" class="form-text text-muted">Recommended image size: WxH</small>
                <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
            </div>  
        </form>    
        
        <!-- Image 5 -->
        <form action="">
            @csrf
            <div class="mb-3 py-3">
                <label for="sect5-image5" class="form-label">Image 5</label>
                <input class="form-control form-control-sm" type="file" id="sect5-image5" aria-describedby="sect5Image5Help">
                <small id="sect5Image5Help" class="form-text text-muted">Recommended image size: WxH</small>
                <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
            </div>  
        </form> 

        <!-- Video -->
        <form action="">
            @csrf
            <div class="mb-3 py-3">
                <label for="sect5-video" class="form-label">Video</label>
                <input class="form-control form-control-sm" type="file" id="sect5-video" aria-describedby="sect5Video">
                <small id="sect5Video" class="form-text text-muted">Recommended video size: WxH</small>
                <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
            </div>  
        </form> 
        <!-- End of Section 5 -->

        </div>        
    </section>
</div>
@endsection