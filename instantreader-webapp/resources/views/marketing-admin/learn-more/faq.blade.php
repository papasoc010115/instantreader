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
            <form data-route="{{ route('learn-more.faq.update_page') }}" class="non-media">
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
            <form data-route="{{ route('learn-more.faq.update_page') }}" class="non-media">
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
            <form data-route="{{ route('learn-more.faq.update_page') }}" class="non-media">
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
            <form data-route="{{ route('learn-more.faq.update_page') }}" class="non-media">
                @csrf
                <div class="form-group py-3">
                    <label for="author-editor">Author</label>                    
                    <input required data-fieldtype="big" type="text" class="form-control" id="author-editor" name="page_author" placeholder="John Doe" value="{{ $data->page_author }}">
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Update</span></button>                    
                </div>
            </form>
            <!-- End of Metadata -->

            <br><br><br>

            <!-- Section 1: Questions Display -->
            <div class="row">
                <div class="col-lg-12">
                    <h2>Add a New Question-Answer Item</h2>
                </div>
            </div>

            <form data-route="{{ route('learn-more.faq.store_question_and_answer') }}" class="faq">
                @csrf
                <div class="form-group py-3">
                    <label for="sect1-question">Question</label>                    
                    <input type="text" class="form-control" id="sect1-question" data-fieldtype="default" placeholder="e.g. Is this a great question?">
                    <label for="sect1-answer">Answer</label>                    
                    <input type="text" class="form-control" id="sect1-answer" data-fieldtype="default" placeholder="e.g. Yes!">
                    <button type="submit" class="btn btn-primary update-btn"> <span style="font-size: 0.8rem">Add FAQ</span></button>                    
                </div>
            </form>
            <!-- End of Section 1 -->

            <br><br><br>

            <!-- Section 2: Existing Questions Display -->
            <div class="row">
                <div class="col-lg-12">
                    <h2>Existing Questions & Answers</h2>
                    @foreach ($faqs as $faq)
                    <form class="update-faq" data-faq_id="{{ $faq->id }}" data-route="{{ route('learn-more.faq.update_question_and_answer') }}">
                        @csrf
                        <div class="form-group py-3" class="existing-faq">
                            <label for="sect2-question-{{ $faq->id }}">Question</label>                    
                            <input type="text" class="form-control" id="sect2-question-{{ $faq->id }}" data-fieldtype="default" value="{{ $faq->question }}" placeholder="e.g. Is this a great question?">
                            <label for="sect2-answer-{{ $faq->id }}">Answer</label>                    
                            <input type="text" class="form-control" id="sect2-answer-{{ $faq->id }}" data-fieldtype="default" value="{{ $faq->answer }}" placeholder="e.g. Yes!">
                            <button type="submit" class="btn btn-primary update-btn update-faq"><span style="font-size: 0.8rem">Update</span></button>
                            <button type="button" class="btn btn-secondary update-btn delete-faq" data-route="{{ route('learn-more.faq.delete_question_and_answer') }}" data-faq_id="{{ $faq->id }}"> <span style="font-size: 0.8rem">Delete</span></button>                       
                        </div>
                    </form>
                    @endforeach
                </div>
            </div>
            <!-- End of Existing Questions Display -->
        </div>        
    </section>
</div>
@endsection