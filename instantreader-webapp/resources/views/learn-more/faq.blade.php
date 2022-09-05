@extends('layouts.marketing-layout')

@section('metadata')
<!-- Page title -->
<title>{{ $data->page_title }}</title>
<!-- Other metadata -->
<meta name="description" content="{{ $data->page_desc }}">
<meta name="keywords" content="{{ $data->page_keywords }}">
<meta name="author" content="{{ $data->page_author }}">
@endsection

@section('content')

<!--PAGE CONTENT START -->

<!-- Style -->
<style>
    p {
        text-align: justify;
        text-justify: inter-word;
    }
    .questions {
        padding: 0;
    }

    /* Accordion */
    input {
        position: absolute;
        opacity: 0;
        z-index: -1;
    }
    .tabs {
        padding: 1.5em 5em;
        overflow: hidden;
    }

    .tab {
        width: 100%;
        color: #282525;
        border:1px solid #DFDFDF;
        overflow: hidden;
    }
    .tab-label {
        display: -webkit-box;
        display: flex;
        -webkit-box-pack: justify;
        justify-content: space-between;
        padding: 1em;
        font-weight: bold;
        cursor: pointer;
    /* Icon */
    }
    .tab-label:hover {
        background: #DFDFDF;
    }
    .tab-label::after {
        content: "\276F";
        width: 1em;
        height: 1em;
        text-align: center;
        -webkit-transition: all .35s;
        transition: all .35s;
    }
    .tab-content {
        max-height: 0;
        padding: 0 1em;
        color: #2c3e50;
        background: white;
        -webkit-transition: all .35s;
        transition: all .35s;
    }
    .tab-close {
        display: -webkit-box;
        display: flex;
        -webkit-box-pack: end;
        justify-content: flex-end;
        padding: 1em;
        font-size: 0.75em;
        background: #DFDFDF;
        cursor: pointer;
    }
    .tab-close:hover {
        background: #DFDFDF;
    }

    input:checked + .tab-label {
        background: #DFDFDF;
    }
    input:checked + .tab-label::after {
        -webkit-transform: rotate(90deg);
        transform: rotate(90deg);
    }
    input:checked ~ .tab-content {
        max-height: 100vh;
        padding: 1em;
    }
    #shape-left, #shape-right, #full-menu-1 {
        visibility: hidden;
    }
</style>

<!-- Banner -->
<section class="page-title cursor-light">
    <!-- Pattern Layers -->
    <div class="pattern-layers">
        <div class="layer-one"></div>
        <div class="layer-two"></div>
    </div>

    <div class="auto-container">
        <h2 class="hide-cursor">Frequently Asked Questions</h2>
        <ul class="page-breadcrumb link">
            <li>
                <i>
                   How can we help you? 
                </i>
            </li>
        </ul>
    </div>
</section>

<!-- Questions and Answers -->
<section class="questions">
    <div class="tabs">
        @foreach($faqs as $faq)
        <div class="tab">
            <input type="checkbox" id="{{ $faq->id }}" name="rd">
            <label class="tab-label" for="{{ $faq->id }}">{{ $faq->question }}</label>
            <div class="tab-content">
            {{ $faq->answer }} 
            </div>
        </div>
        @endforeach
    </div>
</section>
<!--PAGE CONTENT END -->
@endsection