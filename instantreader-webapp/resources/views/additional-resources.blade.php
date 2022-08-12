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

    .visuals-row {
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
    }

    @media only screen and (max-width: 767px) {
        .para {
            text-align: justify;
        }
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
        <h2 class="hide-cursor">Additional Resources</h2>
    </div>
</section>
<!--Banner End-->

<!--Tips/Resources Library Start-->
<section class="library">
    <div class="container">
         <!--Row of Heading-->
         <div class="row">
            <div class="col-md-12 text-center">
                <div class="heading-area mx-570 mb-md-4 mb-3 pb-2">
                    <h1 class="title" style="color: #562FB7;">{{ $data->sect1_heading }}</h1>
                </div>
            </div>
        </div>

        <!-- Row of Tips and Resources -->
        <div class="row text-center">
            <div class="col-md-4 d-flex align-items-stretch">
                <div class="card shadow">
                    <img class="card-img-top" src="{{  url($data->sect1_image1)  }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title pt-3">Card title</h5>
                        <p class="card-text">{!! $data->sect1_para1 !!}</p>
                    </div>
                    <div class="card-footer" style="background-color: #7004bc">
                        <span class="text-white">Loram Ipsum</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex align-items-stretch">
                <div class="card shadow">
                    <img class="card-img-top" src="{{  url($data->sect1_image2)   }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title pt-3">Card title</h5>
                        <p class="card-text">{!! $data->sect1_para2 !!}</p>
                    </div>
                    <div class="card-footer" style="background-color: #7004bc">
                        <span class="text-white">Lorem Ipsum</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex align-items-stretch">
                <div class="card shadow">
                    <img class="card-img-top" src="{{  url($data->sect1_image3)   }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title pt-3">Card title</h5>
                        <p class="card-text">{!! $data->sect1_para3 !!}</p>
                    </div>
                    <div class="card-footer" style="background-color: #7004bc">
                        <span class="text-white">Lorem Ipsum</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Tips/Resources Library End-->

<!--E-books/PDFs Start-->
<section class="ebook-resources purple-bg">
    <div class="container">
        <!--Row of Heading-->
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="heading-area mx-570 pb-md-5 mb-3">
                    <h1 class="title mb-0 text-white">{{ $data->sect2_heading1 }}</h1>
                </div>
            </div>
        </div>

        <!--Row of E-books-->
        <div class="row">
            <div class="col-md-4 d-flex align-items-stretch">
                <div class="card shadow">
                    <img class="card-img-top" src="{{  asset('marketing-site/assets/agency/img/blog-news-1.jpg')  }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title pt-3 alt-color">Web design is fun</h5>
                        <p class="card-text">Hena Sword</p>
                    </div>
                    <div class="card-footer d-flex">
                        <a class="ml-auto" href="javascript:void(0);">
                            <i class="icon fas fa-download" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex align-items-stretch">
                <div class="card shadow">
                    <img class="card-img-top" src="{{  asset('marketing-site/assets/agency/img/blog-news-2.jpg')  }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title pt-3 alt-color">Digital Marketing</h5>
                        <p class="card-text">David Villas</p>
                    </div>
                    <div class="card-footer d-flex">
                        <a class="ml-auto" href="javascript:void(0);">
                            <i class="icon fas fa-download" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex align-items-stretch">
                <div class="card shadow">
                    <img class="card-img-top" src="{{  asset('marketing-site/assets/agency/img/blog-news-3.jpg')  }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title pt-3 alt-color">Future of websites</h5>
                        <p class="card-text">Jhon Walker</p>
                    </div>
                    <div class="card-footer d-flex">
                        <a class="ml-auto" href="javascript:void(0);">
                            <i class="icon fas fa-download" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!--Pagination-->
        <div class="row pt-4">
            <div class="col-sm-12">
                <ul class="pagination justify-content-center top55 mb-4 mb-md-0 mb-sm-3" style="padding-top=5%">
                    <li class="page-item"><a class="page-link disabled" href="#.">&laquo;</i></a></li>
                    <li class="page-item active"><a class="page-link" href="#.">1</a></li>
                    <li class="page-item"><a class="page-link" href="#.">2</a></li>
                    <li class="page-item"><a class="page-link" href="#.">3</a></li>
                    <li class="page-item"><a class="page-link" href="#.">&raquo;</i></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--E-books/PDFs End-->

<!--Blogs Start-->
<section class="blog-resources">
    <div class="container">
        <!--Row of Heading-->
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="heading-area mx-570 pb-md-5 mb-3">
                    <h1 class="title mb-0 main-color">{{ $data->sect2_heading2 }}</h1>
                </div>
            </div>
        </div>

        <!--Row of Blogs-->
        <div class="row">
            <div class="col-md-4 d-flex align-items-stretch">
                <div class="card shadow">
                    <img class="card-img-top" src="{{  asset('marketing-site/assets/agency/img/blog-news-1.jpg')  }}" alt="Card image cap">
                    <div class="card-body">
                        <a href="agency/blog-list.html" class="card-text">Hena Sword</a>
                        <a href="agency/blog-list.html"><h5 class="pt-2">Future of websites</h5></a>
                        <p class="para">Lorem ipsum dolor sit amet consectetur adipiscing elit ipsum dolor sit am...</p>
                    </div>
                    <div class="card-footer">
                        <span class="date main-color">October 29, 2020</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex align-items-stretch">
                <div class="card shadow">
                    <img class="card-img-top" src="{{  asset('marketing-site/assets/agency/img/blog-news-2.jpg')  }}" alt="Card image cap">
                    <div class="card-body">
                        <a href="agency/blog-list.html" class="card-text">David Villas</a>
                        <a href="agency/blog-list.html"><h5 class="pt-2">Web design is fun</h5></a>
                        <p class="para">Lorem ipsum dolor sit amet consectetur adipiscing elit ipsum dolor sit am...</p>
                    </div>
                    <div class="card-footer">
                        <span class="date main-color">October 29, 2020</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex align-items-stretch">
                <div class="card shadow">
                    <img class="card-img-top" src="{{  asset('marketing-site/assets/agency/img/blog-news-3.jpg')  }}" alt="Card image cap">
                    <div class="card-body">
                        <a href="agency/blog-list.html" class="card-text">Jhon Walker</a>
                        <a href="agency/blog-list.html"><h5 class="pt-2">Lorem ipsum dolor sit amet consectetur</h5></a>
                        <p class="para">Lorem ipsum dolor sit amet consectetur adipiscing elit ipsum dolor sit am...</p>
                    </div>
                    <div class="card-footer">
                        <span class="date main-color">October 29, 2020</span>
                    </div>
                </div>
            </div>
        </div>
        
        <!--Pagination-->
        <div class="row pt-4">
            <div class="col-sm-12">
                <ul class="pagination justify-content-center top55 mb-4 mb-md-0 mb-sm-3" style="padding-top=5%">
                    <li class="page-item"><a class="page-link disabled" href="#.">&laquo;</i></a></li>
                    <li class="page-item active"><a class="page-link" href="#.">1</a></li>
                    <li class="page-item"><a class="page-link" href="#.">2</a></li>
                    <li class="page-item"><a class="page-link" href="#.">3</a></li>
                    <li class="page-item"><a class="page-link" href="#.">&raquo;</i></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--Blogs End-->

<!--Video Resources Start-->
<section class="video-resources" style="background-color: #4287f5">
    <div class="auto-container px-5">
        <!-- Row of Heading and Information -->
        <div class="row text-center"  style="margin-bottom: 2em;">
            <h1 class="title text-white mb-3">{{ $data->sect3_heading }}</h1>
            <p class="para text-white">{!! $data->sect3_para !!} </p>
        </div>

        <!-- Row of Videos -->
        <div class="row">
            @foreach (Illuminate\Support\Facades\Storage::files($data->sect3_videos) as $video)
                <div class="col-md-4 d-flex align-items-stretch">
                    <div class="card">
                        <video id="player1" style="max-width: 100%" preload="none" controls poster="{{ asset('marketing-site/assets/agency/img/blog-news-1.jpg')}}" playsinline>
                            <source src="{{ url(str_replace('public','storage',$video)) }}" type="video/mp4">
                        </video>
                    </div>
                </div>
            @endforeach
        </div>

        <!--Pagination-->
        <div class="row pt-4">
            <div class="col-sm-12">
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
<!--Video Resources End-->

<!--Visuals Start-->
<section class="visuals">
    <div class="auto-container px-5">
        <div class="row visuals-row">
            <!-- Carousel -->
            <div class="col-md-7 mb-3">
                <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        @foreach (Illuminate\Support\Facades\Storage::files($data->sect4_images) as $image)
                            @if ($loop->first){
                                <div class="carousel-item active">
                                <img src="{{ url(str_replace('public','storage',$image)) }}" class="d-block w-100" alt="...">
                                </div>
                            }
                            @endif
                            <div class="carousel-item">
                            <img src="{{ url(str_replace('public','storage',$image)) }}" class="d-block w-100" alt="...">
                            </div>
                        @endforeach
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
            
            <!-- Heading and Information -->
            <div class="col-md-5">
                <div class="heading-area">
                    <h1 class="title" style="color: #562FB7;">{{ $data->sect4_heading }}</h1>
                    <p class="para">{!! $data->sect4_para !!}</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Visuals End-->

@endsection