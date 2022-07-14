@extends('layouts.marketing-layout')

@section('content')

<!-- Set the current page variable for the navbar -->
<?php $currentPage = 'learn-more';?>

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

<!-- Questions -->
<section class="questions">
    <div class="tabs">
        <div class="tab">
            <input type="checkbox" id="rd1" name="rd">
            <label class="tab-label" for="rd1">Is this a great question?</label>
            <div class="tab-content">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet. Dui accumsan sit amet nulla. Sit amet nisl purus in mollis nunc sed id semper. Purus sit amet luctus venenatis lectus magna fringilla urna. Vitae semper quis lectus nulla at volutpat. Bibendum est ultricies integer quis. In hac habitasse platea dictumst quisque sagittis purus. Magna fringilla urna porttitor rhoncus dolor purus non enim praesent. Fringilla phasellus faucibus scelerisque eleifend donec pretium. 
            </div>
        </div>
        
        <div class="tab">
            <input type="checkbox" id="rd2" name="rd">
            <label class="tab-label" for="rd2">Is this a great question?</label>
            <div class="tab-content">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet. Dui accumsan sit amet nulla. Sit amet nisl purus in mollis nunc sed id semper. Purus sit amet luctus venenatis lectus magna fringilla urna. Vitae semper quis lectus nulla at volutpat. Bibendum est ultricies integer quis. In hac habitasse platea dictumst quisque sagittis purus. Magna fringilla urna porttitor rhoncus dolor purus non enim praesent. Fringilla phasellus faucibus scelerisque eleifend donec pretium. 
            </div>
        </div>

        <div class="tab">
            <input type="checkbox" id="rd3" name="rd">
            <label class="tab-label" for="rd3">Is this a great question?</label>
            <div class="tab-content">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet. Dui accumsan sit amet nulla. Sit amet nisl purus in mollis nunc sed id semper. Purus sit amet luctus venenatis lectus magna fringilla urna. Vitae semper quis lectus nulla at volutpat. Bibendum est ultricies integer quis. In hac habitasse platea dictumst quisque sagittis purus. Magna fringilla urna porttitor rhoncus dolor purus non enim praesent. Fringilla phasellus faucibus scelerisque eleifend donec pretium. 
            </div>
        </div>

        <div class="tab">
            <input type="checkbox" id="rd4" name="rd">
            <label class="tab-label" for="rd4">Is this a great question?</label>
            <div class="tab-content">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet. Dui accumsan sit amet nulla. Sit amet nisl purus in mollis nunc sed id semper. Purus sit amet luctus venenatis lectus magna fringilla urna. Vitae semper quis lectus nulla at volutpat. Bibendum est ultricies integer quis. In hac habitasse platea dictumst quisque sagittis purus. Magna fringilla urna porttitor rhoncus dolor purus non enim praesent. Fringilla phasellus faucibus scelerisque eleifend donec pretium. 
            </div>
        </div>

        <div class="tab">
            <input type="checkbox" id="rd5" name="rd">
            <label class="tab-label" for="rd5">Is this a great question?</label>
            <div class="tab-content">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet. Dui accumsan sit amet nulla. Sit amet nisl purus in mollis nunc sed id semper. Purus sit amet luctus venenatis lectus magna fringilla urna. Vitae semper quis lectus nulla at volutpat. Bibendum est ultricies integer quis. In hac habitasse platea dictumst quisque sagittis purus. Magna fringilla urna porttitor rhoncus dolor purus non enim praesent. Fringilla phasellus faucibus scelerisque eleifend donec pretium. 
            </div>
        </div>

        <div class="tab">
            <input type="checkbox" id="rd6" name="rd">
            <label class="tab-label" for="rd6">Is this a great question?</label>
            <div class="tab-content">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet. Dui accumsan sit amet nulla. Sit amet nisl purus in mollis nunc sed id semper. Purus sit amet luctus venenatis lectus magna fringilla urna. Vitae semper quis lectus nulla at volutpat. Bibendum est ultricies integer quis. In hac habitasse platea dictumst quisque sagittis purus. Magna fringilla urna porttitor rhoncus dolor purus non enim praesent. Fringilla phasellus faucibus scelerisque eleifend donec pretium. 
            </div>
        </div>

        <div class="tab">
            <input type="checkbox" id="rd7" name="rd">
            <label class="tab-label" for="rd7">Is this a great question?</label>
            <div class="tab-content">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet. Dui accumsan sit amet nulla. Sit amet nisl purus in mollis nunc sed id semper. Purus sit amet luctus venenatis lectus magna fringilla urna. Vitae semper quis lectus nulla at volutpat. Bibendum est ultricies integer quis. In hac habitasse platea dictumst quisque sagittis purus. Magna fringilla urna porttitor rhoncus dolor purus non enim praesent. Fringilla phasellus faucibus scelerisque eleifend donec pretium. 
            </div>
        </div>

    </div>
    
 
</section>
<!--PAGE CONTENT END -->
@endsection