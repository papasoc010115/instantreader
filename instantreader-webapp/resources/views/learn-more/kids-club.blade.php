@extends('layouts.marketing-layout')

@section('content')
<!--PAGE CONTENT START -->

<!-- Style -->
<style>
    .nocursor { cursor:none; }
    .fadeIn {
        opacity: 1;
        animation-name: fadeInOpacity;
        animation-iteration-count: 1;
        animation-timing-function: ease-in;
        animation-duration: 2s;
    }

    @keyframes fadeInOpacity {
        0% {
            opacity: 0;
        }
        100% {
            opacity: 1;
        }
    }

    /* INTRODUCTION */
    .introduction{
        position: relative;
        width: 100%;
        height: 80vh;
        display: flex;
        justify-content: center;
        align-items: center;
        overflow: hidden;
    }

    .introduction::before{
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: #4287f5;
        border-radius: 0 0 50% 50%/0 0 100% 100%;
        transform: scaleX(1.5);
    }

    .introduction-content{
        position: relative;
        z-index: 1;
        margin: 0 auto;
        max-width: 900px;
        text-align: center;

    }

    .introduction-content h2{
        margin: 0;
        margin-bottom: 1.5rem;
        font-weight: bold;
        padding: 0;
        color: white;
        font-size: 3.5rem;
    }

    .introduction-content p{
        color: white;
        font-size: 1.2rem;
    }

    .scrolling-img-container{
        overflow: hidden;
    }

    .scrolling-img{
        background: url("{{ asset('marketing-site/assets/img/kids-club-img2.png') }}") repeat-x;
        height: 100%;
        width: 100%;
        position: absolute;
        top: 0;
        left: 0;
        background-repeat: repeat;
        background-position: 0 0;
        background-size: auto 100%;
        animation: slide 100s linear infinite;
    }

    .ir-kids-avatar{
        height: 700px;
    }

    .overlay-text{
        text-align: center;
        height: 100%;
        background-color: rgba(0, 0, 0, .9);
    }

    .overlay-text > *{
        margin-top: 90px;
        margin-bottom: 90px;
    }

    .test > * {
        vertical-align: middle;
    }

    @keyframes slide {
        from {
            background-position: 0 0;
        }
        to {
            background-position: -10000px 0;
        }
    }
</style>

<!-- Introduction -->
<section class="nocursor introduction page-title cursor-light" style="background-color: white" id="intro">
    <div class="introduction-content fadeIn">
        <h2>Welcome to Instant Reader Kids Club!</h2>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet. Dui accumsan sit amet nulla. Sit amet nisl purus in mollis nunc sed id semper. Purus sit amet luctus venenatis lectus magna fringilla urna. Vitae semper quis lectus nulla at volutpat. Bibendum est ultricies integer quis. In hac habitasse platea dictumst quisque sagittis purus. Magna fringilla urna porttitor rhoncus dolor purus non enim praesent.
        </p>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">            
            <div class="col-md-6">
                <img src="{{ asset('marketing-site/assets/img/kids-club-img1.png') }}" alt="img">
            </div>  
            <div class="col-md-6">
                <h1>The Metaverse</h1>
                <p class="align-left" style="color: #282525">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Adipiscing diam donec adipiscing tristique risus nec feugiat. Rhoncus urna neque viverra justo nec ultrices dui sapien. Egestas sed tempus urna et pharetra pharetra massa massa ultricies. Donec ac odio tempor orci dapibus ultrices in iaculis nunc. Gravida rutrum quisque non tellus orci. Et egestas quis ipsum suspendisse ultrices gravida dictum. Platea dictumst vestibulum rhoncus est pellentesque elit ullamcorper. Ultrices dui sapien eget mi. Aliquam eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis. Netus et malesuada fames ac turpis egestas. Dolor sit amet consectetur adipiscing elit.
                </p>
            </div>
        </div>
    </div>
</section>


<section class="nocursor cursor-light ir-kids-avatar">
    <div class="scrolling-img-container">
        <div class="scrolling-img" style="background-image: {{ asset('marketing-site/assets/img/kids-club-img1.png') }}">
            <div class="row overlay-text">
                <div class="col-md-12">
                    <div class="heading-area mx-570 mb-5">
                        <h1 class="text-white"><strong>Millions of Kids Have Already Joined</strong></h1>
                        <br>
                        <p class="text-white">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet. Dui accumsan sit amet nulla. Sit amet nisl purus in mollis nunc sed id semper. 
                        </p>
                        <button class="card-btn btn btn-large btn-rounded btn-pink btn-hvr-blue mt-3">Join Now
                        <div class="btn-hvr-setting">
                            <ul class="btn-hvr-setting-inner">
                                <li class="btn-hvr-effect"></li>
                                <li class="btn-hvr-effect"></li>
                                <li class="btn-hvr-effect"></li>
                                <li class="btn-hvr-effect"></li>
                            </ul>
                        </div>
                    </button>
                    </div>
                </div> 
            </div>
        </div>
    </div>
</section>


<script>
    // hide shapes from template
    try{
        document.getElementById("shape-left").style.visibility = "hidden";
        document.getElementById("shape-right").style.visibility = "hidden";
        document.getElementById("full-menu-1").style.visibility = "hidden";
    }catch(e){
        
    }
</script>
<!--PAGE CONTENT END -->
@endsection