<!-- Page editor -->

@extends('layouts.marketing-admin-layout')

@section('content')
<div class="content">
    <!-- Intro -->
    <section class="main-heading">
        <h1 class="display-3">Frequently Asked Questions</h1> 
        <p>Edit content of "FAQs" here.</p>  
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
    </section>
</div>
@endsection