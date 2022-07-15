@extends('layouts.marketing-layout')

@section('content')

<!-- Style Start -->
<style>
    .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        margin-bottom: 1.5em;
    }
</style>
<!-- Style End -->

<!--Banner Start-->
<section class="page-title cursor-light">
    <!-- Pattern Layers -->
    <div class="pattern-layers">
        <div class="layer-one"></div>
        <div class="layer-two"></div>
    </div>
    <div class="auto-container">
        <h2 class="hide-cursor">Testimonials</h2>
        <ul class="page-breadcrumb link">
            <li><a href="/"><span class="icon fas fa-home"></span></a></li>
            <li>About Us</li>
            <li>Testimonials</li>
        </ul>
    </div>
</section>
<!--Banner End-->

<!--Main Testimonials Start-->
<section class="bg-light" id="blog">
    <div class="container">
         <!--Row of Heading-->
         <div class="row">
            <div class="col-md-12 text-center">
                <div class="heading-area mx-570 mb-lg-4 mb-3 pb-2">
                    <span class="title">Join our growing family. </br>We have taught </span>
                    <h2 class="title"><span class="alt-color">999,999</span> </h2>
                    <span class="title">readers worldwide</span>
                </div>
            </div>
        </div>

        <!-- Row of Testimonials -->
        <div class="row text-center">
            <div class="col-lg-4 d-flex align-items-stretch">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ asset('marketing-site/assets/agency/img/avatar-1.png') }}" class="rounded-circle shadow-1-strong" width="30%" height="30%" />
                        <h5 class="card-title pt-3">Card title</h5>
                        <p class="card-text">"There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even <span class="alt-color">slightly believable</span>. If you are going to use a passage of Lorem Ipsum."</p>
                    </div>
                    <div class="card-footer" style="background-color: #7004bc">
                        <span class="text-white">Father of Xxx</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex align-items-stretch">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ asset('marketing-site/assets/agency/img/avatar-1.png') }}" class="rounded-circle shadow-1-strong" width="30%" height="30%" />
                        <h5 class="card-title pt-3">Card title</h5>
                        <p class="card-text">"There are many variations of passages of <span class="alt-color">Lorem Ipsum available</span>, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum."</p>
                    </div>
                    <div class="card-footer" style="background-color: #7004bc">
                        <span class="text-white">Guardian of Xxxxxx</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex align-items-stretch">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ asset('marketing-site/assets/agency/img/avatar-1.png') }}" class="rounded-circle shadow-1-strong" width="30%" height="30%" />
                        <h5 class="card-title pt-3">Card title</h5>
                        <p class="card-text">"There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or <span class="alt-color">randomised words</span> which don't look even slightly believable."</p>
                    </div>
                    <div class="card-footer" style="background-color: #7004bc">
                        <span class="text-white">Mother of Xxxx</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!--Main Testimonials End-->

<section>
    <div class="container">
        <div class="row justify-content-center"  style="margin-bottom: 2em;">
            <h2 class="title main-color">Testimonial Videos</h2>
            <p class="para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse tincidunt
            egestas nunc, at pellentesque arcu sollicitudin et. Aliquam hendrerit diam quis ipsum
            ultricies, quis ultricies arcu suscipit. Lorem ipsum dolor sit amet, consectetur adipiscing
            elit. Fusce ut diam quis nulla faucibus venenatis. </p>
        </div>

        <!-- Row of Testimonials -->
        <div class="row">
            <div class="col-lg-4 d-flex align-items-stretch">
                <div class="card">
                    <video id="player1" style="max-width: 100%" preload="none" controls poster="{{ asset('marketing-site/assets/agency/img/blog-news-1.jpg')}}" playsinline>
                        <source src="{{ asset('marketing-site/assets/agency/img/video.mp4') }}" type="video/mp4">
                    </video>
                </div>
            </div>
            <div class="col-lg-4 d-flex align-items-stretch">
                <div class="card">
                    <video id="player1" style="max-width: 100%" preload="none" controls poster="{{ asset('marketing-site/assets/agency/img/blog-news-1.jpg')}}" playsinline>
                        <source src="{{ asset('marketing-site/assets/agency/img/video.mp4') }}" type="video/mp4">
                    </video>
                </div>
            </div>
            <div class="col-lg-4 d-flex align-items-stretch">
                <div class="card">
                    <video id="player1" style="max-width: 100%" preload="none" controls poster="{{ asset('marketing-site/assets/agency/img/blog-news-1.jpg')}}" playsinline>
                        <source src="{{ asset('marketing-site/assets/agency/img/video.mp4') }}" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>

        <div class="row pt-4">
            <div class="col-sm-12">
                <!--Pagination-->
                <ul class="pagination justify-content-center top55 mb-4 mb-md-0 mb-sm-3" style="padding-top=5%">
                    <li class="page-item"><a class="page-link disabled" href="#."><i class="fa fa-angle-left"></i></a></li>
                    <li class="page-item active"><a class="page-link" href="#.">1</a></li>
                    <li class="page-item"><a class="page-link" href="#.">2</a></li>
                    <li class="page-item"><a class="page-link" href="#.">3</a></li>
                    <li class="page-item"><a class="page-link" href="#."><i class="fa fa-angle-right"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!--Other Testimonial Start-->
<section class="gradient-bg1 text-center" id="clients">
    <div class="container">
        
        <!--Row-->
        <div class="row">
            <div class="col-md-12">
                <div class="heading-area mx-570 mb-5">
                    <h2 class="title text-white m-0">Some <span class="js-rotating">great, ideal</span> words from
                        our clients</h2>
                </div>
            </div>
        </div>

        <!--Row-->
        <div class="row">
            <div class="col-md-12">
                <div class="owl-carousel wow zoomIn" id="testimonial-slider">
                    <div class="item">
                        <p class="para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse tincidunt
                            egestas nunc, at pellentesque arcu sollicitudin et. Aliquam hendrerit diam quis ipsum
                            ultricies, quis ultricies arcu suscipit. Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit. Fusce ut diam quis nulla faucibus venenatis. </p>
                        <h5 class="name gradient-text1">David Villas</h5>
                        <span class="designation">Designer, Company Name</span>
                        <ul class="ratings list-unstyled">
                            <li><i aria-hidden="true" class="fas fa-star"></i></li>
                            <li><i aria-hidden="true" class="fas fa-star"></i></li>
                            <li><i aria-hidden="true" class="fas fa-star"></i></li>
                            <li><i aria-hidden="true" class="fas fa-star"></i></li>
                            <li><i aria-hidden="true" class="fas fa-star"></i></li>
                        </ul>
                    </div>
                    <div class="item">
                        <p class="para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse tincidunt
                            egestas nunc, at pellentesque arcu sollicitudin et. Aliquam hendrerit diam quis ipsum
                            ultricies, quis ultricies arcu suscipit. Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit. Fusce ut diam quis nulla faucibus venenatis. </p>
                        <h5 class="name gradient-text1">David Villas</h5>
                        <span class="designation">Designer, Company Name</span>
                        <ul class="ratings list-unstyled">
                            <li><i aria-hidden="true" class="fas fa-star"></i></li>
                            <li><i aria-hidden="true" class="fas fa-star"></i></li>
                            <li><i aria-hidden="true" class="fas fa-star"></i></li>
                            <li><i aria-hidden="true" class="fas fa-star"></i></li>
                            <li><i aria-hidden="true" class="fas fa-star"></i></li>
                        </ul>
                    </div>
                    <div class="item">
                        <p class="para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse tincidunt
                            egestas nunc, at pellentesque arcu sollicitudin et. Aliquam hendrerit diam quis ipsum
                            ultricies, quis ultricies arcu suscipit. Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit. Fusce ut diam quis nulla faucibus venenatis. </p>
                        <h5 class="name gradient-text1">David Villas</h5>
                        <span class="designation">Designer, Company Name</span>
                        <ul class="ratings list-unstyled">
                            <li><i aria-hidden="true" class="fas fa-star"></i></li>
                            <li><i aria-hidden="true" class="fas fa-star"></i></li>
                            <li><i aria-hidden="true" class="fas fa-star"></i></li>
                            <li><i aria-hidden="true" class="fas fa-star"></i></li>
                            <li><i aria-hidden="true" class="fas fa-star"></i></li>
                        </ul>
                    </div>
                    <div class="item">
                        <p class="para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse tincidunt
                            egestas nunc, at pellentesque arcu sollicitudin et. Aliquam hendrerit diam quis ipsum
                            ultricies, quis ultricies arcu suscipit. Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit. Fusce ut diam quis nulla faucibus venenatis. </p>
                        <h5 class="name gradient-text1">David Villas</h5>
                        <span class="designation">Designer, Company Name</span>
                        <ul class="ratings list-unstyled">
                            <li><i aria-hidden="true" class="fas fa-star"></i></li>
                            <li><i aria-hidden="true" class="fas fa-star"></i></li>
                            <li><i aria-hidden="true" class="fas fa-star"></i></li>
                            <li><i aria-hidden="true" class="fas fa-star"></i></li>
                            <li><i aria-hidden="true" class="fas fa-star"></i></li>
                        </ul>
                    </div>
                    <div class="item">
                        <p class="para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse tincidunt
                            egestas nunc, at pellentesque arcu sollicitudin et. Aliquam hendrerit diam quis ipsum
                            ultricies, quis ultricies arcu suscipit. Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit. Fusce ut diam quis nulla faucibus venenatis. </p>
                        <h5 class="name gradient-text1">David Villas</h5>
                        <span class="designation">Designer, Company Name</span>
                        <ul class="ratings list-unstyled">
                            <li><i aria-hidden="true" class="fas fa-star"></i></li>
                            <li><i aria-hidden="true" class="fas fa-star"></i></li>
                            <li><i aria-hidden="true" class="fas fa-star"></i></li>
                            <li><i aria-hidden="true" class="fas fa-star"></i></li>
                            <li><i aria-hidden="true" class="fas fa-star"></i></li>
                        </ul>
                    </div>
                    <div class="item">
                        <p class="para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse tincidunt
                            egestas nunc, at pellentesque arcu sollicitudin et. Aliquam hendrerit diam quis ipsum
                            ultricies, quis ultricies arcu suscipit. Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit. Fusce ut diam quis nulla faucibus venenatis. </p>
                        <h5 class="name gradient-text1">David Villas</h5>
                        <span class="designation">Designer, Company Name</span>
                        <ul class="ratings list-unstyled">
                            <li><i aria-hidden="true" class="fas fa-star"></i></li>
                            <li><i aria-hidden="true" class="fas fa-star"></i></li>
                            <li><i aria-hidden="true" class="fas fa-star"></i></li>
                            <li><i aria-hidden="true" class="fas fa-star"></i></li>
                            <li><i aria-hidden="true" class="fas fa-star"></i></li>
                        </ul>
                    </div>
                    <div class="item">
                        <p class="para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse tincidunt
                            egestas nunc, at pellentesque arcu sollicitudin et. Aliquam hendrerit diam quis ipsum
                            ultricies, quis ultricies arcu suscipit. Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit. Fusce ut diam quis nulla faucibus venenatis. </p>
                        <h5 class="name gradient-text1">David Villas</h5>
                        <span class="designation">Designer, Company Name</span>
                        <ul class="ratings list-unstyled">
                            <li><i aria-hidden="true" class="fas fa-star"></i></li>
                            <li><i aria-hidden="true" class="fas fa-star"></i></li>
                            <li><i aria-hidden="true" class="fas fa-star"></i></li>
                            <li><i aria-hidden="true" class="fas fa-star"></i></li>
                            <li><i aria-hidden="true" class="fas fa-star"></i></li>
                        </ul>
                    </div>
                    <div class="item">
                        <p class="para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse tincidunt
                            egestas nunc, at pellentesque arcu sollicitudin et. Aliquam hendrerit diam quis ipsum
                            ultricies, quis ultricies arcu suscipit. Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit. Fusce ut diam quis nulla faucibus venenatis. </p>
                        <h5 class="name gradient-text1">David Villas</h5>
                        <span class="designation">Designer, Company Name</span>
                        <ul class="ratings list-unstyled">
                            <li><i aria-hidden="true" class="fas fa-star"></i></li>
                            <li><i aria-hidden="true" class="fas fa-star"></i></li>
                            <li><i aria-hidden="true" class="fas fa-star"></i></li>
                            <li><i aria-hidden="true" class="fas fa-star"></i></li>
                            <li><i aria-hidden="true" class="fas fa-star"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!--Testimonial Thumbs-->
        <div class="owl-dots" id="testimonials-avatar">
            <!--data-position[top,right,bottom,left]-->
            <button class="owl-dot active" data-position="22%,auto,auto,5%">
                <img alt="image" src="{{ asset('marketing-site/assets/agency/img/avatar-1.png') }}"></button>
            <button class="owl-dot active" data-position="30%,auto,auto,16%">
                <img alt="image" src="{{ asset('marketing-site/assets/agency/img/avatar-2.png') }}"></button>
            <button class="owl-dot active" data-position="auto,auto,38%,7%">
                <img alt="image" src="{{ asset('marketing-site/assets/agency/img/avatar-3.png') }}"></button>
            <button class="owl-dot active" data-position="auto,auto,23%,18%">
                <img alt="image" src="{{ asset('marketing-site/assets/agency/img/avatar-7.png') }}"></button>
            <!--data-position[top,right,bottom,left]-->
            <button class="owl-dot active" data-position="20%,19%,auto,auto">
                <img alt="image" src="{{ asset('marketing-site/assets/agency/img/avatar-5.png') }}"></button>
            <button class="owl-dot active" data-position="28%,6%,auto,auto">
                <img alt="image" src="{{ asset('marketing-site/assets/agency/img/avatar-6.png') }}"></button>
            <button class="owl-dot active" data-position="40%,15%,auto,auto">
                <img alt="image" src="{{ asset('marketing-site/assets/agency/img/avatar-4.png') }}"></button>
            <button class="owl-dot active" data-position="auto,21%,22%,auto">
                <img alt="image" src="{{ asset('marketing-site/assets/agency/img/avatar-2.png') }}"></button>
        </div>
    </div>
</section>
<!--Other Testimonial End-->

@endsection