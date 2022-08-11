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
            <form data-route="{{ route('home.update_page') }}">
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
            <form data-route="{{ route('home.update_page') }}">
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
            <form data-route="{{ route('home.update_page') }}">
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
            <form data-route="{{ route('home.update_page') }}">
                @csrf
                <div class="form-group py-3">
                    <label for="author-editor">Author</label>                    
                    <input required data-fieldtype="big" type="text" class="form-control" id="author-editor" name="page_author" placeholder="John Doe" value="{{ $data->page_author }}">
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>                    
                </div>
            </form>
            <!-- End of Metadata -->
            
            <br><br><br>

            <!-- Section 1: Instant Reader Welcome Screen -->
            <div class="row">
                <div class="col-lg-12">
                    <h2>Section 1: Instant Reader Welcome Screen</h2>
                </div>
            </div>

            <!-- Heading of Section 1 -->
            <form data-route="{{ route('home.update_page') }}">
                @csrf
                <div class="form-group py-3">
                    <label for="sect1-heading">Section Heading/Title</label>                    
                    <input required data-fieldtype="big" type="text" class="form-control" name="sect1_heading" id="sect1-heading" placeholder="e.g. The Best Reading Course" value="{{ $data->sect1_heading }}">
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>                    
                </div>
            </form>

            <!-- Opening Statement -->
            <form data-route="{{ route('home.update_page') }}">
                @csrf
                <div class="form-group py-3">
                    <label for="sect1-paragraph">Opening Statement</label>
                    <textarea data-fieldtype="tiny" class="form-control" name="sect1_para" aria-describedby="sect1SentenceHelp" id="sect1-paragraph">{{ $data->sect1_para }}</textarea>
                    <small id="sect1SentenceHelp" class="form-text text-muted">Recommended length: 1 sentence</small>
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
                </div>
            </form>
            <script>    
                tinymce.init({
                    height: "10rem",
                    selector: '#sect1-paragraph',
                    placeholder: "e.g. Welcome to Instant Reader!",
                    plugins: 'link',
                    menubar: false,
                    toolbar: 'undo redo | bold italic underline | link'
                });            
            </script>

            <!-- Image -->
            <form data-route="{{ route('home.update_page') }}">
                @csrf
                <div class="mb-3 py-3">
                    <label for="sect1-opening-image" class="form-label">Image</label>
                    <input required data-fieldtype="media" class="form-control form-control-sm" data-fieldtype="big" name="sect1_image" type="file" id="sect1-opening-image" aria-describedby="sect1ImageHelp" value="{{ $data->welcome_image }}">
                    <small id="sect1ImageHelp" class="form-text text-muted">Recommended image size: WxH</small>
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
                </div>                
            </form>
            <!-- End of Section 1 -->

            <br><br><br>

            <!-- Section 2: Highlight Video -->
            <div class="row">
                <div class="col-lg-12">
                    <h2>Section 2: Highlight Video</h2>
                </div>
            </div>

            <!-- Heading 1 of Section 2 -->
            <form data-route="{{ route('home.update_page') }}">
                @csrf
                <div class="form-group py-3">
                    <label for="sect2-heading1">Section Heading/Title 1</label>                    
                    <input required data-fieldtype="big" type="text" class="form-control" name="sect2_heading1" id="sect2-heading1" aria-describedby="sect2Heading1Help" placeholder="e.g. The Best Reading Course" value="{{ $data->sect2_heading1 }}">
                    <small id="sect2Heading1Help" class="form-text text-muted">This will be the pink part of the heading.</small>
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>                    
                </div>
            </form>

            <!-- Heading 2 of Section 2 -->
            <form data-route="{{ route('home.update_page') }}">
                @csrf
                <div class="form-group py-3">
                    <label for="sect2-heading2">Section Heading/Title 2</label>                    
                    <input required data-fieldtype="big" type="text" class="form-control" name="sect2_heading2" id="sect2-heading2" aria-describedby="sect2Heading2Help" placeholder="e.g. The Best Reading Course" value="{{ $data->sect2_heading2 }}">
                    <small id="sect2Heading2Help" class="form-text text-muted">This will be the white part of the heading.</small>
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>                    
                </div>
            </form>

            <!-- Paragraph of Section 2 -->
            <form data-route="{{ route('home.update_page') }}">
                @csrf
                <div class="form-group py-3">
                    <label for="sect2-paragraph">Paragraph</label>
                    <textarea data-fieldtype="tiny" class="form-control" name="sect2_para" aria-describedby="sect2ParagraphHelp" id="sect2-paragraph">{{ $data->sect2_para }}</textarea>
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
            <form data-route="{{ route('home.update_page') }}">
                @csrf
                <div class="mb-3 py-3">
                    <label for="sect2-video" class="form-label">Video</label>
                    <input required data-fieldtype="media" class="form-control form-control-sm" type="file" name="sect2_video" id="sect2-video" aria-describedby="sect2VideoHelp">
                    <small id="sect2VideoHelp" class="form-text text-muted">Recommended video size: WxH</small>
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
                </div>                
            </form>
            <!-- End of Section 2 -->

            <br><br><br>

            <!-- Section 3: Live Parent Orientation -->
            <div class="row">
                <div class="col-lg-12">
                    <h2>Section 3: Live Parent Orientation</h2>
                </div>
            </div>

            <!-- Heading 1 of Section 3 -->
            <form data-route="{{ route('home.update_page') }}">
                @csrf
                <div class="form-group py-3">
                    <label for="sect3-heading1">Section Heading/Title 1</label>                    
                    <input required data-fieldtype="big" type="text" class="form-control" name="sect3_heading1" id="sect3-heading1" aria-describedby="sect3Heading1Help" placeholder="e.g. The Best Reading Course" value="{{ $data->sect3_heading1 }}">
                    <small id="sect3Heading1Help" class="form-text text-muted">This will be the part of the heading that alternates. Separate by comma (e.g. FREE, GREAT).</small>
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>                    
                </div>
            </form>

            <!-- Heading 2 of Section 3 -->
            <form data-route="{{ route('home.update_page') }}">
                @csrf
                <div class="form-group py-3">
                    <label for="sect3-heading2">Section Heading/Title 2</label>                    
                    <input required data-fieldtype="big" type="text" class="form-control" name="sect3_heading2" id="sect3-heading2" aria-describedby="sect3Heading2Help" placeholder="e.g. The Best Reading Course" value="{{ $data->sect3_heading2 }}">
                    <small id="sect3Heading2Help" class="form-text text-muted">This will be the static part of the heading.</small>
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>                    
                </div>
            </form>

            <!-- Paragraph of Section 3 -->
            <form data-route="{{ route('home.update_page') }}">
                @csrf
                <div class="form-group py-3">
                    <label for="sect3-paragraph">Paragraph</label>
                    <textarea data-fieldtype="tiny" class="form-control" name="sect3_para" aria-describedby="sect3ParagraphHelp" id="sect3-paragraph">{{ $data->sect3_para }}</textarea>
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

            <!-- Image 1 of Section 3 -->
            <form data-route="{{ route('home.update_page') }}">
                @csrf
                <div class="mb-3 py-3">
                    <label for="sect3-image1" class="form-label">Image 1</label>
                    <input class="form-control form-control-sm" data-fieldtype="big" name="sect3_image1" type="file" id="sect3-image1" aria-describedby="sect3Image1Help" value="{{ $data->sect3_image1 }}">
                    <small id="sect3Image1Help" class="form-text text-muted">Recommended image size: WxH</small>
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
                </div>                
            </form>

            <!-- Image 2 of Section 3 -->
            <form data-route="{{ route('home.update_page') }}">
                @csrf
                <div class="mb-3 py-3">
                    <label for="sect3-image2" class="form-label">Image 2</label>
                    <input class="form-control form-control-sm" data-fieldtype="big" name="sect3_image2" type="file" id="sect3-image2" aria-describedby="sect3Image2Help" value="{{ $data->sect3_image2 }}">
                    <small id="sect3Image2Help" class="form-text text-muted">Recommended image size: WxH</small>
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
                </div>                
            </form>

            <!-- Image 3 of Section 3 -->
            <form data-route="{{ route('home.update_page') }}">
                @csrf
                <div class="mb-3 py-3">
                    <label for="sect3-image3" class="form-label">Image 3</label>
                    <input class="form-control form-control-sm" data-fieldtype="big" name="sect3_image3" type="file" id="sect3-image3" aria-describedby="sect3Image3Help" value="{{ $data->sect3_image3 }}">
                    <small id="sect3Image3Help" class="form-text text-muted">Recommended image size: WxH</small>
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
                </div>                
            </form>
            <!-- End of Section 3 -->

            <br><br><br>

            <!-- Section 4: T. Vicki & Likha -->
            <div class="row">
                <div class="col-lg-12">
                    <h2>Section 4: Teacher Vicki & Likha</h2>
                </div>
            </div>

            <!-- Heading of Section 4 -->
            <form data-route="{{ route('home.update_page') }}">
                @csrf
                <div class="form-group py-3">
                    <label for="sect4-heading">Section Heading/Title</label>                    
                    <input required data-fieldtype="big" type="text" class="form-control" id="sect4-heading" placeholder="e.g. The Best Reading Course" value="{{ $data->sect4_heading }}">
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>                    
                </div>
            </form>
            
            <!-- Teacher Vicky's Position -->
            <form data-route="{{ route('home.update_page') }}">
                @csrf
                <div class="form-group py-3">
                    <label for="sect4-position1">Teacher Vicky's Position</label>                    
                    <input required data-fieldtype="big" type="text" class="form-control" name="sect4_position1" id="sect4-position1" placeholder="e.g. CEO, Director" value="{{ $data->sect4_position1 }}">
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>                    
                </div>
            </form>

            <!-- Likha's Position -->
            <form data-route="{{ route('home.update_page') }}">
                @csrf
                <div class="form-group py-3">
                    <label for="sect4-position2">Likha's Position</label>                    
                    <input required data-fieldtype="big" type="text" class="form-control" name="sect4_position2" id="sect4-position2" placeholder="e.g. CEO, Director" value="{{ $data->sect4_position1 }}">
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>                    
                </div>
            </form>

            <!-- Paragraph 1 -->
            <form data-route="{{ route('home.update_page') }}">
                @csrf
                <div class="form-group py-3">
                    <label for="sect4-paragraph1">Paragraph for Teacher Vicki</label>
                    <textarea data-fieldtype="tiny" class="form-control" name="sect4_para1" aria-describedby="sect4Paragraph1Help" id="sect4-paragraph1">{{ $data->sect4_para1 }}</textarea>
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
            <form data-route="{{ route('home.update_page') }}">
                @csrf
                <div class="form-group py-3">
                    <label for="sect4-paragraph2">Paragraph for Likha</label>
                    <textarea data-fieldtype="tiny" class="form-control" name="sect4_para2" aria-describedby="sect4Paragraph2Help" id="sect4-paragraph2">{{ $data->sect4_para2 }}</textarea>
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
            <form data-route="{{ route('home.update_page') }}">
                @csrf
                <div class="mb-3 py-3">
                    <label for="sect4-image1" class="form-label">Image for Teacher Vicki</label>
                    <input required data-fieldtype="media" class="form-control form-control-sm" data-fieldtype="big" name="sect4_image1" type="file" id="sect4-image1" aria-describedby="sect4Image1Help" value="{{ $data->vicki_image }}">
                    <small id="sect4Image1Help" class="form-text text-muted">Recommended image size: WxH</small>
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
                </div>                
            </form>

            <!-- Image for Likha-->
            <form data-route="{{ route('home.update_page') }}">
                @csrf
                <div class="mb-3 py-3">
                    <label for="sect4-image2" class="form-label">Image for Likha</label>
                    <input required data-fieldtype="media" class="form-control form-control-sm" data-fieldtype="big" name="sect4_image2" type="file" id="sect4-image2" aria-describedby="sect4Image2Help" value="{{ $data->likha_image }}">
                    <small id="sect4Image2Help" class="form-text text-muted">Recommended image size: WxH</small>
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
                </div>                
            </form>
            <!-- End of Section 4 -->

            <br><br><br>

            <!-- Section 5: Area Jurisdictions -->
            <div class="row">
                <div class="col-lg-12">
                    <h2>Section 5: Area Jurisdictions</h2>
                </div>
            </div>
            
            <!-- Heading of Section 5 -->
            <form data-route="{{ route('home.update_page') }}">
                @csrf
                <div class="form-group py-3">
                    <label for="sect5-heading">Section Heading/Title</label>                    
                    <input required data-fieldtype="big" type="text" class="form-control" name="sect5_heading" id="sect5-heading" placeholder="e.g. The Best Reading Course" value="{{ $data->sect5_heading }}">
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>                    
                </div>
            </form>          

            <!-- Countries -->
            <form data-route="{{ route('home.update_page') }}">
                @csrf
                <div class="form-group py-3">
                    <label for="sect5-countries">Countries</label>                    
                    <input required data-fieldtype="big" type="text" class="form-control" name="sect5_countries" id="sect5-countries" aria-describedby="sect5CountriesHelp" placeholder="e.g. The Best Reading Course" value="{{ $data->sect3_heading1 }}">
                    <small id="sect5CountriesHelp" class="form-text text-muted">This will be the countries that alternate. Separate by comma (e.g. USA, PHILIPPINES).</small>
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>                    
                </div>
            </form>
            
            <!-- Statement -->
            <form data-route="{{ route('home.update_page') }}">
                @csrf
                <div class="form-group py-3">
                    <label for="sect5-statement">Statement</label>
                    <textarea data-fieldtype="tiny" class="form-control" name="sect5_para" aria-describedby="sect5SentenceHelp" id="sect5-statement">{{ $data->sect5_para }}</textarea>
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

            <br><br><br>

            <!-- Section 6: Testimonies -->
            <div class="row">
                <div class="col-lg-12">
                    <h2>Section 6: Testimonies</h2>
                </div>
            </div>
            
            <!-- Heading of Section 6 -->
            <form data-route="{{ route('home.update_page') }}">
                @csrf
                <div class="form-group py-3">
                    <label for="sect6-heading">Section Heading/Title</label>                    
                    <input required data-fieldtype="big" type="text" class="form-control" name="sect6_heading" id="sect6-heading" placeholder="e.g. The Best Reading Course" value="{{ $data->sect6_heading }}">
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>                    
                </div>
            </form>  

            <!-- Statement -->
            <form data-route="{{ route('home.update_page') }}">
                @csrf
                <div class="form-group py-3">
                    <label for="sect6-statement">Statement</label>
                    <textarea data-fieldtype="tiny" class="form-control" name="sect6-statement" aria-describedby="sect6SentenceHelp" id="sect6-statement"></textarea>
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
             <form data-route="{{ route('home.update_page') }}">
                @csrf
                <div class="mb-3 py-3">
                    <label for="sect6-images" class="form-label">Images (Select at least 3 photos)</label>
                    <input required data-fieldtype="media" class="form-control form-control-sm" data-fieldtype="big" name="testimonies_images" type="file" id="sect6-images" aria-describedby="sect6ImagesHelp" multiple value="{{ $data->testimonies_images }}">
                    <small id="sect6ImagesHelp" class="form-text text-muted">Recommended image size: WxH</small>
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
                </div>                
            </form>
            <!-- End of Section 6 -->

            <br><br><br>

            <!-- Section 7: Instant Reader Kids Club -->
            <div class="row">
                <div class="col-lg-12">
                    <h2>Section 7: Instant Reader Kids Club</h2>
                </div>
            </div>

            <!-- Heading of Section 7 -->
            <form data-route="{{ route('home.update_page') }}">
                @csrf
                <div class="form-group py-3">
                    <label for="sect7-heading">Section Heading/Title</label>                    
                    <input required data-fieldtype="big" type="text" class="form-control" name="sect7_heading" id="sect7-heading" placeholder="e.g. The Best Reading Course" value="{{ $data->sect7_heading }}">
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>                    
                </div>
            </form> 

            <!-- Statement -->
            <form data-route="{{ route('home.update_page') }}">
                @csrf
                <div class="form-group py-3">
                    <label for="sect7-statement">Statement</label>
                    <textarea data-fieldtype="tiny" class="form-control" name="sect7_para" aria-describedby="sect7SentenceHelp" id="sect7-statement">{{ $data->sect7_para }}</textarea>
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
             <form data-route="{{ route('home.update_page') }}">
                @csrf
                <div class="mb-3 py-3">
                    <label for="sect7-images" class="form-label">Images (Select at least 3 photos)</label>
                    <input required data-fieldtype="media" class="form-control form-control-sm" data-fieldtype="big" name="sect7_images" type="file" id="sect7-images" aria-describedby="sect7ImagesHelp" multiple value="{{ $data->sect7_images }}">
                    <small id="sect7ImagesHelp" class="form-text text-muted">Recommended image size: WxH</small>
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
                </div>                
            </form>
            <!-- End of Section 7 -->

            <br><br><br>

            <!-- Section 8: Enroll Now -->
            <div class="row">
                <div class="col-lg-12">
                    <h2>Section 8: Enroll Now</h2>
                </div>
            </div>

            <!-- Heading of Section 8 -->
            <form data-route="{{ route('home.update_page') }}">
                @csrf
                <div class="form-group py-3">
                    <label for="sect8-heading">Section Heading/Title</label>                    
                    <input required data-fieldtype="big" type="text" class="form-control" name="sect8_heading" id="sect8-heading" placeholder="e.g. The Best Reading Course" value="{{ $data->sect8_heading }}">
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>                    
                </div>
            </form> 

            <!-- Statement -->
            <form data-route="{{ route('home.update_page') }}">
                @csrf
                <div class="form-group py-3">
                    <label for="sect8-statement">Statement</label>
                    <textarea data-fieldtype="tiny" class="form-control" name="sect8_para" aria-describedby="sect8SentenceHelp" id="sect8-statement">{{ $data->sect8_para }}</textarea>
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

            <!-- Image of Section 8 -->
            <form data-route="{{ route('home.update_page') }}">
                @csrf
                <div class="mb-3 py-3">
                    <label for="sect8-image" class="form-label">Image</label>
                    <input required data-fieldtype="media" class="form-control form-control-sm" data-fieldtype="big" name="enroll_image" type="file" id="sect8-image" aria-describedby="sect8ImageHelp" multiple value="{{ $data->sect8_image }}">
                    <small id="sect8ImageHelp" class="form-text text-muted">Recommended image size: WxH</small>
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>
                </div>                
            </form>
            <!-- End of Section 8 -->
        </div>
    </section>
</div>
@endsection