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
    .carousel-indicators {
        position: relative;
        bottom: 80%;
    }
    #blog-carousel .carousel-indicators li {
        background-color: #5A88FF;
    }
    .para .blog-content {
        display: block;
        width: 100px;
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
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
<!-- Only show if there are ebooks -->
@if (count($ebooks) > 0)
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

        <!--Carousel Wrapper-->
        <div id="ebook-carousel" class="carousel slide carousel-multi-item" data-ride="carousel">

            <!--Slides-->
            <div class="carousel-inner" role="listbox">
                @for ($i = 0; $i < ceil(count($ebooks)/3); $i++)
                    @if ($i === 0)
                    <div class="carousel-item active row">
                        @for ($j = 0; $j < 3 && ($i*3+$j) < count($ebooks); $j++)
                        <div class="col-md-4" style="float:left">
                            <div class="card shadow mb-2">
                                <img class="card-img-top" src="{{  asset($ebooks[$i*3 + $j]->image)  }}" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title pt-3 alt-color">{{ $ebooks[$i*3 + $j]->title }}</h5>
                                    <p class="card-text">{{ $ebooks[$i*3 + $j]->author }}</p>
                                </div>
                                <!-- Include download function -->
                                <div class="card-footer d-flex">
                                    <a class="ml-auto" href="javascript:void(0);">
                                        <i class="icon fas fa-download" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endfor
                    </div>
                    @else
                    <div class="carousel-item">
                        @for ($j = 0; $j < 3 && ($i*3+$j) < count($ebooks); $j++)
                        <div class="col-md-4" style="float:left">
                            <div class="card shadow mb-2">
                                <img class="card-img-top" src="{{  asset($ebooks[$i*3 + $j]->image)  }}" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title pt-3 alt-color">{{ $ebooks[$i*3 + $j]->title }}</h5>
                                    <p class="card-text">{{ $ebooks[$i*3 + $j]->author }}</p>
                                </div>
                                <!-- Include download function -->
                                <div class="card-footer d-flex">
                                    <a class="ml-auto" href="javascript:void(0);">
                                        <i class="icon fas fa-download" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endfor
                    </div>
                    @endif
                @endfor
            </div>
            <!--/.Slides-->

            <!--Indicators-->
            <ol class="carousel-indicators">
                @for ($i = 0; $i < ceil(count($ebooks)/3); $i++)
                    @if ($i === 0)
                        <li data-target="#ebook-carousel" data-slide-to="{{ $i }}" class="active"></li>
                    @else
                        <li data-target="#ebook-carousel" data-slide-to="{{ $i }}"></li>
                    @endif
                @endfor
            </ol>
            <!--/.Indicators-->
        </div>
        <!--/.Carousel Wrapper-->
    </div>
</section>
@endif
<!--E-books/PDFs End-->

<!--Blogs Start-->
<!-- Only show if there are blogs -->
@if (count($blogs) > 0)
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
        
        <!--Carousel Wrapper-->
        <div id="blog-carousel" class="carousel slide carousel-multi-item" data-ride="carousel">

            <!--Slides-->
            <div class="carousel-inner" role="listbox">
                @for ($i = 0; $i < ceil(count($blogs)/3); $i++)
                    @if ($i === 0)
                    <div class="carousel-item active row">
                        @for ($j = 0; $j < 3 && ($i*3+$j) < count($blogs); $j++)
                        <div class="col-md-4" style="float:left">
                            <div class="card shadow mb-2">
                                <img class="card-img-top" src="{{  asset($blogs[$i*3 + $j]->image)  }}" alt="Card image cap">
                                <div class="card-body">
                                    <!-- Update to link to blog -->
                                    <a href="">{{ $blogs[$i*3 + $j]->author }}</a>
                                    <a href=""><h5 class="pt-2">{{ $blogs[$i*3 + $j]->title }}</h5></a>
                                    <p class="para blog-content">{{ str_limit($blogs[$i*3 + $j]->content, $limit = 50, $end = '...') }}</p>
                                </div>
                                <div class="card-footer">
                                    <span class="date main-color">{{ $blogs[$i*3 + $j]->created_at }}</span>
                                </div>
                            </div>
                        </div>
                        @endfor
                    </div>
                    @else
                    <div class="carousel-item">
                        @for ($j = 0; $j < 3 && ($i*3+$j) < count($blogs); $j++)
                        <div class="col-md-4" style="float:left">
                            <div class="card shadow mb-2">
                                <img class="card-img-top" src="{{  asset($blogs[$i*3 + $j]->image)  }}" alt="Card image cap">
                                <div class="card-body">
                                    <!-- Update to link to blog -->
                                    <a href="">{{ $blogs[$i*3 + $j]->author }}</a>
                                    <a href=""><h5 class="pt-2">{{ $blogs[$i*3 + $j]->title }}</h5></a>
                                    <p class="para blog-content">{{ str_limit($blogs[$i*3 + $j]->content, $limit = 50, $end = '...') }}</p>
                                </div>
                                <div class="card-footer">
                                    <span class="date main-color">{{ $blogs[$i*3 + $j]->created_at }}</span>
                                </div>
                            </div>
                        </div>
                        @endfor
                    </div>
                    @endif
                @endfor
            </div>
            <!--/.Slides-->

            <!--Indicators-->
            <ol class="carousel-indicators">
                @for ($i = 0; $i < ceil(count($blogs)/3); $i++)
                    @if ($i === 0)
                        <li data-target="#blog-carousel" data-slide-to="{{ $i }}" class="active"></li>
                    @else
                        <li data-target="#blog-carousel" data-slide-to="{{ $i }}"></li>
                    @endif
                @endfor
            </ol>
            <!--/.Indicators-->
        </div>
        <!--/.Carousel Wrapper-->
    </div>
</section>
@endif
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
                    <div class="carousel-indicators">
                        @foreach (Illuminate\Support\Facades\Storage::files($data->sect4_images) as $index=>$image)
                            @if ($loop->first)
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $index }}" class="active" aria-current="true" aria-label="Slide {{ $index }}"></button>
                            @else
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $index }}" aria-label="Slide {{ $index }}"></button>
                            @endif
                        @endforeach
                    </div>
                    <div class="carousel-inner">
                        @foreach (Illuminate\Support\Facades\Storage::files($data->sect4_images) as $image)
                            @if ($loop->first)
                                <div class="carousel-item active">
                                <img src="{{ url(str_replace('public','storage',$image)) }}" class="d-block w-100" alt="...">
                                </div>
                            @else
                                <div class="carousel-item">
                                <img src="{{ url(str_replace('public','storage',$image)) }}" class="d-block w-100" alt="...">
                                </div>
                            @endif
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