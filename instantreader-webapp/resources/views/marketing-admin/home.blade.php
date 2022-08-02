<!-- Page editor -->

@extends('layouts.marketing-admin-layout')

@section('content')
<div class="content">
    <!-- Intro -->
    <section class="main-heading">
        <h1 class="display-3">HOME</h1> 
        <p>Edit content of "Home" here.</p>  
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
                    <small id="keywordsHelp" class="form-text text-muted">Separate keywords with comma</small>
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
            <!-- End of Metadata -->
            
            <br><br>

            <!-- Section 1: Instant Reader Welcome Screen -->
            <div class="row">
                <div class="col-lg-12">
                    <h2>Section 1</h2>
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

            <!-- Opening Statement -->
            <form action="">
                @csrf
                <div class="form-group py-3">
                    <label for="sect1-opening-statement">Opening Statement</label>
                    <textarea class="form-control" name="sect1-opening-statement" aria-describedby="sect1SentenceHelp" id="sect1-opening-statement"></textarea>
                    <small id="sect1SentenceHelp" class="form-text text-muted">Recommended length: 1 sentence</small>
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
                </div>
            </form>
            <script>    
                tinymce.init({
                    height: "10rem",
                    selector: '#sect1-opening-statement',
                    placeholder: "e.g. Welcome to Instant Reader!",
                    plugins: 'link',
                    menubar: false,
                    toolbar: 'undo redo | bold italic underline | link'
                });            
            </script>

            <!-- Image -->
            <form action="">
                @csrf
                <div class="mb-3 py-3">
                    <label for="sect1-opening-image" class="form-label">Image</label>
                    <input class="form-control form-control-sm" type="file" id="sect1-opening-image" aria-describedby="sect1ImageHelp">
                    <small id="sect1ImageHelp" class="form-text text-muted">Recommended image size: WxH</small>
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
                </div>                
            </form>
            <!-- End of Section 1 -->

            <br><br>

            <!-- Section 2: Highlight Video -->
            <div class="row">
                <div class="col-lg-12">
                    <h2>Section 2</h2>
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

            <!-- Paragraph of Section 2 -->
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

            <!-- Video of Section 2 -->
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

            <br><br>

            <!-- Section 3: Live Parent Orientation -->
            <div class="row">
                <div class="col-lg-12">
                    <h2>Section 3</h2>
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

            <!-- Paragraph of Section 3 -->
            <form action="">
                @csrf
                <div class="form-group py-3">
                    <label for="sect3-paragraph">Paragraph</label>
                    <textarea class="form-control" name="sect3-paragraph" aria-describedby="sect3ParagraphHelp" id="sect3-paragraph"></textarea>
                    <small id="sect3ParagraphHelp" class="form-text text-muted">Recommended length: 3-5 sentences</small>
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

            <!-- Images of Section 3 -->
            <form action="">
                @csrf
                <div class="mb-3 py-3">
                    <label for="sect3-images" class="form-label">Images (Select 3 only)</label>
                    <input class="form-control form-control-sm" type="file" id="sect3-images" aria-describedby="sect3ImagesHelp" multiple>
                    <small id="sect3ImagesHelp" class="form-text text-muted">Recommended image size: WxH</small>
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
                </div>                
            </form>
            <!-- End of Section 3 -->

            <br><br>

            <!-- Section 4: T. Vicki & Likha -->
            <div class="row">
                <div class="col-lg-12">
                    <h2>Section 4</h2>
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

            <!-- Paragraph 1 -->
            <form action="">
                @csrf
                <div class="form-group py-3">
                    <label for="sect4-paragraph1">Paragraph for Teacer Vicki</label>
                    <textarea class="form-control" name="sect4-paragraph1" aria-describedby="sect4Paragraph1Help" id="sect4-paragraph1"></textarea>
                    <small id="sect4Paragraph1Help" class="form-text text-muted">Recommended length: 3-5 sentences</small>
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
                    <label for="sect4-paragraph2">Paragraph for Likha</label>
                    <textarea class="form-control" name="sect4-paragraph2" aria-describedby="sect4Paragraph2Help" id="sect4-paragraph2"></textarea>
                    <small id="sect4Paragraph2Help" class="form-text text-muted">Recommended length: 3-5 sentences</small>
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

            <!-- Image for Teacher Vicki -->
            <form action="">
                @csrf
                <div class="mb-3 py-3">
                    <label for="sect4-image1" class="form-label">Image for Teacher Vicki</label>
                    <input class="form-control form-control-sm" type="file" id="sect4-image1" aria-describedby="sect4Image1Help">
                    <small id="sect4Image1Help" class="form-text text-muted">Recommended image size: WxH</small>
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
                </div>                
            </form>

            <!-- Image for Likha-->
            <form action="">
                @csrf
                <div class="mb-3 py-3">
                    <label for="sect4-image2" class="form-label">Image for Likha</label>
                    <input class="form-control form-control-sm" type="file" id="sect4-image2" aria-describedby="sect4Image2Help">
                    <small id="sect4Image2Help" class="form-text text-muted">Recommended image size: WxH</small>
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
                </div>                
            </form>
            <!-- End of Section 4 -->

            <br><br>

            <!-- Section 5: Area Jurisdictions -->
            <div class="row">
                <div class="col-lg-12">
                    <h2>Section 5</h2>
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
            
            <!-- Statement -->
            <form action="">
                @csrf
                <div class="form-group py-3">
                    <label for="sect5-statement">Statement</label>
                    <textarea class="form-control" name="sect5-statement" aria-describedby="sect5SentenceHelp" id="sect5-statement"></textarea>
                    <small id="sect5SentenceHelp" class="form-text text-muted">Recommended length: 1 sentence</small>
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
                </div>
            </form>
            <script>    
                tinymce.init({
                    height: "10rem",
                    selector: '#sect5-statement',
                    placeholder: "e.g. Welcome to Instant Reader!",
                    plugins: 'link',
                    menubar: false,
                    toolbar: 'undo redo | bold italic underline | link'
                });            
            </script>
            <!-- End of Section 5 -->

            <br><br>

            <!-- Section 6: Testimonies -->
            <div class="row">
                <div class="col-lg-12">
                    <h2>Section 6</h2>
                </div>
            </div>
            
            <!-- Heading of Section 6 -->
            <form action="">
                @csrf
                <div class="form-group py-3">
                    <label for="sect6-heading">Section Heading/Title</label>                    
                    <input type="text" class="form-control" id="sect6-heading" placeholder="e.g. The Best Reading Course">
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>                    
                </div>
            </form>  

            <!-- Statement -->
            <form action="">
                @csrf
                <div class="form-group py-3">
                    <label for="sect6-statement">Statement</label>
                    <textarea class="form-control" name="sect6-statement" aria-describedby="sect6SentenceHelp" id="sect6-statement"></textarea>
                    <small id="sect6SentenceHelp" class="form-text text-muted">Recommended length: 1 sentence</small>
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
                </div>
            </form>
            <script>    
                tinymce.init({
                    height: "10rem",
                    selector: '#sect6-statement',
                    placeholder: "e.g. Welcome to Instant Reader!",
                    plugins: 'link',
                    menubar: false,
                    toolbar: 'undo redo | bold italic underline | link'
                });            
            </script>

             <!-- Images of Section 6 -->
             <form action="">
                @csrf
                <div class="mb-3 py-3">
                    <label for="sect6-images" class="form-label">Images (Select at least 3 photos)</label>
                    <input class="form-control form-control-sm" type="file" id="sect6-images" aria-describedby="sect6ImagesHelp" multiple>
                    <small id="sect6ImagesHelp" class="form-text text-muted">Recommended image size: WxH</small>
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
                </div>                
            </form>
            <!-- End of Section 6 -->

            <br><br>

            <!-- Section 7: Instant Reader Kids Club -->
            <div class="row">
                <div class="col-lg-12">
                    <h2>Section 7</h2>
                </div>
            </div>

            <!-- Heading of Section 7 -->
            <form action="">
                @csrf
                <div class="form-group py-3">
                    <label for="sect7-heading">Section Heading/Title</label>                    
                    <input type="text" class="form-control" id="sect7-heading" placeholder="e.g. The Best Reading Course">
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>                    
                </div>
            </form> 

            <!-- Statement -->
            <form action="">
                @csrf
                <div class="form-group py-3">
                    <label for="sect7-statement">Statement</label>
                    <textarea class="form-control" name="sect7-statement" aria-describedby="sect7SentenceHelp" id="sect7-statement"></textarea>
                    <small id="sect7SentenceHelp" class="form-text text-muted">Recommended length: 2 sentence</small>
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
                </div>
            </form>
            <script>    
                tinymce.init({
                    height: "10rem",
                    selector: '#sect7-statement',
                    placeholder: "e.g. Welcome to Instant Reader!",
                    plugins: 'link',
                    menubar: false,
                    toolbar: 'undo redo | bold italic underline | link'
                });            
            </script>

             <!-- Images of Section 7 -->
             <form action="">
                @csrf
                <div class="mb-3 py-3">
                    <label for="sect7-images" class="form-label">Images (Select at least 3 photos)</label>
                    <input class="form-control form-control-sm" type="file" id="sect7-images" aria-describedby="sect7ImagesHelp" multiple>
                    <small id="sect7ImagesHelp" class="form-text text-muted">Recommended image size: WxH</small>
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
                </div>                
            </form>
            <!-- End of Section 7 -->

            <br><br>

            <!-- Section 8: Enroll Now -->
            <div class="row">
                <div class="col-lg-12">
                    <h2>Section 8</h2>
                </div>
            </div>

            <!-- Heading of Section 8 -->
            <form action="">
                @csrf
                <div class="form-group py-3">
                    <label for="sect8-heading">Section Heading/Title</label>                    
                    <input type="text" class="form-control" id="sect8-heading" placeholder="e.g. The Best Reading Course">
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>                    
                </div>
            </form> 

            <!-- Statement -->
            <form action="">
                @csrf
                <div class="form-group py-3">
                    <label for="sect8-statement">Statement</label>
                    <textarea class="form-control" name="sect8-statement" aria-describedby="sect8SentenceHelp" id="sect8-statement"></textarea>
                    <small id="sect8SentenceHelp" class="form-text text-muted">Recommended length: 1 sentence</small>
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
                </div>
            </form>
            <script>    
                tinymce.init({
                    height: "10rem",
                    selector: '#sect8-statement',
                    placeholder: "e.g. Welcome to Instant Reader!",
                    plugins: 'link',
                    menubar: false,
                    toolbar: 'undo redo | bold italic underline | link'
                });            
            </script>

             <!-- Images of Section 7 -->
             <form action="">
                @csrf
                <div class="mb-3 py-3">
                    <label for="sect8-images" class="form-label">Image</label>
                    <input class="form-control form-control-sm" type="file" id="sect8-images" aria-describedby="sect8ImagesHelp" multiple>
                    <small id="sect8ImagesHelp" class="form-text text-muted">Recommended image size: WxH</small>
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
                </div>                
            </form>
            <!-- End of Section 8 -->
        </div>
    </section>
</div>

@endsection