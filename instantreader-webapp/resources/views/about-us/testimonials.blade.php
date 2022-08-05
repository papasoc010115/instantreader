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

<!-- Style Start -->
<style>
    .card {
        margin-bottom: 1.5em;
    }
    .testimonials {
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
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


<!--Parental Concerns Start-->
<section class="bg-light" id="blog">
    <div class="auto-container px-5">
         <!--Row of Heading-->
         <div class="row">
            <div class="col-md-12 text-center">
                <div class="heading-area mx-570 mb-lg-4 mb-3 pb-2">
                    <span class="title alt-color"> Parental Concerns </span>
                </div>
            </div>
        </div>

        <!-- Row of Parental Concerns -->
        <div class="row text-center">
            <div class="col-md-3 d-flex align-items-stretch">
                <div class="card shadow">
                    <div class="card-body bg-white">
                        <img src="{{ url($testimonials_data->parental_concerns_image1) }}" class="rounded-circle shadow-1-strong" width="30%" height="30%" />
                        <h5 class="card-title pt-3 text-white">Card title</h5>
                        <p class="card-text">"There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even <span class="alt-color">slightly believable</span>. If you are going to use a passage of Lorem Ipsum."</p>
                    </div>
                    <div class="card-footer">
                        <span>Father of Xxxxxxx</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-items-stretch">
                <div class="card shadow">
                    <div class="card-body bg-white">
                        <img src="{{ url($testimonials_data->parental_concerns_image2) }}" class="rounded-circle shadow-1-strong" width="30%" height="30%" />
                        <h5 class="card-title pt-3">Card title</h5>
                        <p class="card-text">"There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even <span class="alt-color">slightly believable</span>. If you are going to use a passage of Lorem Ipsum."</p>
                    </div>
                    <div class="card-footer">
                        <span>Guardian of Xxxx</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-items-stretch">
                <div class="card shadow">
                    <div class="card-body bg-white">
                        <img src="{{ url($testimonials_data->parental_concerns_image3) }}" class="rounded-circle shadow-1-strong" width="30%" height="30%" />
                        <h5 class="card-title pt-3 text-white">Card title</h5>
                        <p class="card-text">"There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even <span class="alt-color">slightly believable</span>. If you are going to use a passage of Lorem Ipsum."</p>
                    </div>
                    <div class="card-footer">
                        <span>Mother of Xxxxxx</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-items-stretch">
                <div class="card shadow">
                    <div class="card-body bg-white">
                        <img src="{{ url($testimonials_data->parental_concerns_image4) }}" class="rounded-circle shadow-1-strong" width="30%" height="30%" />
                        <h5 class="card-title pt-3 text-white">Card title</h5>
                        <p class="card-text">"There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even <span class="alt-color">slightly believable</span>. If you are going to use a passage of Lorem Ipsum."</p>
                    </div>
                    <div class="card-footer">
                        <span>Father of Xxx</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!--Parental Concerns End-->

<!--Parental Goals Start-->
<section class="gradient-bg1" id="blog">
    <div class="auto-container px-5">
         <!--Row of Heading-->
         <div class="row">
            <div class="col-md-12 text-center">
                <div class="heading-area mx-570 mb-lg-4 mb-3 pb-2">
                    <span class="title text-white"> Parental Goals </span>
                </div>
            </div>
        </div>

        <!-- Row of Parental Goals -->
        <div class="row text-center">
            <div class="col-md-3 d-flex align-items-stretch">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ url($testimonials_data->parental_goals_image1) }}" class="rounded-circle shadow-1-strong" width="30%" height="30%" />
                        <h5 class="card-title pt-3">Card title</h5>
                        <p class="card-text">"There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even <span class="alt-color">slightly believable</span>. If you are going to use a passage of Lorem Ipsum."</p>
                    </div>
                    <div class="card-footer" style="background-color: #7004bc">
                        <span class="text-white">Father of Xxx</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-items-stretch">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ url($testimonials_data->parental_goals_image2) }}" class="rounded-circle shadow-1-strong" width="30%" height="30%" />
                        <h5 class="card-title pt-3">Card title</h5>
                        <p class="card-text">"There are many variations of passages of <span class="alt-color">Lorem Ipsum available</span>, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum."</p>
                    </div>
                    <div class="card-footer" style="background-color: #7004bc">
                        <span class="text-white">Guardian of Xxxxxx</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-items-stretch">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ url($testimonials_data->parental_goals_image3) }}" class="rounded-circle shadow-1-strong" width="30%" height="30%" />
                        <h5 class="card-title pt-3">Card title</h5>
                        <p class="card-text">"There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or <span class="alt-color">randomised words</span> which don't look even slightly believable."</p>
                    </div>
                    <div class="card-footer" style="background-color: #7004bc">
                        <span class="text-white">Mother of Xxxx</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-items-stretch">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ url($testimonials_data->parental_goals_image4) }}" class="rounded-circle shadow-1-strong" width="30%" height="30%" />
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
<!--Parental Goals End-->

<!--Video Testimonials Start-->
<section>
    <div class="auto-container px-5">
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
        <div class="row">
            <div class="col-md-4 d-flex align-items-stretch">
                <div class="card">
                    <video id="player1" style="max-width: 100%" preload="none" controls poster="{{ asset('marketing-site/assets/agency/img/blog-news-1.jpg')}}" playsinline>
                        <source src="{{ asset('marketing-site/assets/agency/img/video.mp4') }}" type="video/mp4">
                    </video>
                </div>
            </div>
            <div class="col-md-4 d-flex align-items-stretch">
                <div class="card">
                    <video id="player1" style="max-width: 100%" preload="none" controls poster="{{ asset('marketing-site/assets/agency/img/blog-news-1.jpg')}}" playsinline>
                        <source src="{{ asset('marketing-site/assets/agency/img/video.mp4') }}" type="video/mp4">
                    </video>
                </div>
            </div>
            <div class="col-md-4 d-flex align-items-stretch">
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
                    <li class="page-item"><a class="page-link disabled" href="#.">&laquo;</a></li>
                    <li class="page-item active"><a class="page-link" href="#.">1</a></li>
                    <li class="page-item"><a class="page-link" href="#.">2</a></li>
                    <li class="page-item"><a class="page-link" href="#.">3</a></li>
                    <li class="page-item"><a class="page-link" href="#.">&raquo;</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--Video Testimonials End-->

<!--Other Testimonial Start-->
<section class="gradient-bg1 text-center" id="clients">
    <div class="auto-container px-5">
        
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
        <div class="row testimonials">
            <div class="col-md-7 mb-5">
                <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <!-- <div class="carousel-item active">
                        <img src="{{ url($testimonials_data->testimonials_image1) }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="{{ url($testimonials_data->testimonials_image2) }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="{{ url($testimonials_data->testimonials_image3) }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="{{ url($testimonials_data->testimonials_image4) }}" class="d-block w-100" alt="...">
                        </div> -->
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-md-5 testimonials-text">
                <div class="owl-carousel wow zoomIn" id="testimonial-slider">
                    <div class="item">
                        <p class="para align-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse tincidunt
                            egestas nunc, at pellentesque arcu sollicitudin et. Aliquam hendrerit diam quis ipsum
                            ultricies, quis ultricies arcu suscipit. Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit. Fusce ut diam quis nulla faucibus venenatis. </p>
                        <h5 class="name gradient-text1">David Villas</h5>
                        <span class="designation">Designer, Company Name</span>
                    </div>
                    <div class="item">
                        <p class="para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse tincidunt
                            egestas nunc, at pellentesque arcu sollicitudin et. Aliquam hendrerit diam quis ipsum
                            ultricies, quis ultricies arcu suscipit. Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit. Fusce ut diam quis nulla faucibus venenatis. </p>
                        <h5 class="name gradient-text1">David Villas</h5>
                        <span class="designation">Designer, Company Name</span>
                    </div>
                    <div class="item">
                        <p class="para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse tincidunt
                            egestas nunc, at pellentesque arcu sollicitudin et. Aliquam hendrerit diam quis ipsum
                            ultricies, quis ultricies arcu suscipit. Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit. Fusce ut diam quis nulla faucibus venenatis. </p>
                        <h5 class="name gradient-text1">David Villas</h5>
                        <span class="designation">Designer, Company Name</span>
                    </div>
                    <div class="item">
                        <p class="para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse tincidunt
                            egestas nunc, at pellentesque arcu sollicitudin et. Aliquam hendrerit diam quis ipsum
                            ultricies, quis ultricies arcu suscipit. Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit. Fusce ut diam quis nulla faucibus venenatis. </p>
                        <h5 class="name gradient-text1">David Villas</h5>
                        <span class="designation">Designer, Company Name</span>
                    </div>
                    <div class="item">
                        <p class="para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse tincidunt
                            egestas nunc, at pellentesque arcu sollicitudin et. Aliquam hendrerit diam quis ipsum
                            ultricies, quis ultricies arcu suscipit. Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit. Fusce ut diam quis nulla faucibus venenatis. </p>
                        <h5 class="name gradient-text1">David Villas</h5>
                        <span class="designation">Designer, Company Name</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Other Testimonial End-->

@endsection