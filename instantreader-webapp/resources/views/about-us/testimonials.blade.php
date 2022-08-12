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

<!--Banner Start-->
<section class="page-title cursor-light">
    <!-- Pattern Layers -->
    <div class="pattern-layers">
        <div class="layer-one"></div>
        <div class="layer-two"></div>
    </div>
    <div class="auto-container">
        <h2 class="hide-cursor">Testimonials</h2>
    </div>
</section>


<!--Parental Concerns Start-->
<section class="parental-concerns-sec">
    <div class="container">
         <!--Row of Heading-->
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="heading-area mx-570 mb-lg-4 mb-3 pb-2">
                    <span class="title dark-gray">{{ $data->sect1_heading }}</span>
                </div>
            </div>
        </div>
        <!-- Row of Heading End -->
        
        <!-- Paragraphs & Images -->
        <div class="row py-5 text-justify">
            <div class="col-md-6"><img src="{{ url($data->sect1_image1) }}" alt="parental concern image"></div>
            <div class="col-md-6">{!! $data->sect1_para1 !!}</div>
        </div>
        <div class="row py-5 text-justify">
            <div class="col-md-6">{!! $data->sect1_para2 !!}</div>
            <div class="col-md-6"><img src="{{ url($data->sect1_image2) }}" alt="parental concern image"></div>            
        </div>
        <div class="row py-5 text-justify">
            <div class="col-md-6"><img src="{{ url($data->sect1_image3) }}" alt="parental concern image"></div>
            <div class="col-md-6">{!! $data->sect1_para3 !!}</div>
        </div>
        <div class="row py-5 text-justify">
            <div class="col-md-6">{!! $data->sect1_para4 !!}</div>
            <div class="col-md-6"><img src="{{ url($data->sect1_image4) }}" alt="parental concern image"></div>            
        </div>
        <!-- Paragraphs & Images End -->

    </div>
</section>
<!--Parental Concerns End-->

<!--Parental Goals Start-->
<section class="parental-goals-sec purple-bg">
    <div class="container">
         <!--Row of Heading-->
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="heading-area mx-570 mb-lg-4 mb-3 pb-2">
                    <span class="title text-white">{{ $data->sect2_heading }}</span>
                </div>
            </div>
        </div>
        <!-- Row of Heading End -->

        <!-- Paragraphs & Images -->
        <div class="row py-5 text-justify">
            <div class="col-md-6"><img src="{{ url($data->sect2_image1) }}" alt="parental goal image"></div>
            <div class="col-md-6 text-white">{!! $data->sect2_para1 !!}</div>
        </div>
        <div class="row py-5 text-justify">
            <div class="col-md-6 text-white">{!! $data->sect2_para2 !!}</div>
            <div class="col-md-6"><img src="{{ url($data->sect2_image2) }}" alt="parental goal image"></div>            
        </div>
        <div class="row py-5 text-justify">
            <div class="col-md-6"><img src="{{ url($data->sect2_image3) }}" alt="parental goal image"></div>
            <div class="col-md-6 text-white">{!! $data->sect2_para3 !!}</div>
        </div>
        <div class="row py-5 text-justify">
            <div class="col-md-6 text-white">{!! $data->sect2_para4 !!}</div>
            <div class="col-md-6"><img src="{{ url($data->sect2_image4) }}" alt="parental goal image"></div>            
        </div>
        <!-- Paragraphs & Images End -->
    </div>
</section>
<!--Parental Goals End-->

<!--Testimonials Gallery Start-->
<section class="testimonials-sec bg-light">
    <div class="auto-container px-5">
         <!--Row of Heading-->
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="heading-area mx-570 mb-lg-4 mb-3 pb-2">
                    <span class="title dark-gray">{{ $data->sect3_heading }}</span>
                </div>
            </div>
        </div>
        <!-- Row of Heading End -->

        <!-- Cards -->
        <div class="row py-5 text-center">
            <div class="col-md-3 d-flex align-items-stretch px-3 mb-5">
                <div class="card shadow">
                    <img class="card-img-top" src="{{ url($data->sect3_image1) }}" alt="Card image cap">
                    <div class="card-body bg-white">
                        <p class="card-text">{!! $data->sect3_para1 !!}</p>
                    </div>
                    <div class="card-footer"><span>{{ $data->sect3_name1 }}</span></div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-items-stretch px-3 mb-5">
                <div class="card shadow">
                    <img class="card-img-top" src="{{ url($data->sect3_image2) }}" alt="Card image cap">
                    <div class="card-body bg-white">
                        <p class="card-text">{!! $data->sect3_para2 !!}</p>
                    </div>
                    <div class="card-footer"><span>{{ $data->sect3_name2 }}</span></div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-items-stretch px-3 mb-5">
                <div class="card shadow">
                    <img class="card-img-top" src="{{ url($data->sect3_image3) }}" alt="Card image cap">
                    <div class="card-body bg-white">
                        <p class="card-text">{!! $data->sect3_para3 !!}</p>
                    </div>
                    <div class="card-footer"><span>{{ $data->sect3_name3 }}</span></div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-items-stretch px-3 mb-5">
                <div class="card shadow">
                    <img class="card-img-top" src="{{ url($data->sect3_image4) }}" alt="Card image cap">
                    <div class="card-body bg-white">
                        <p class="card-text">{!! $data->sect3_para4 !!}</p>
                    </div>
                    <div class="card-footer"><span>{{ $data->sect3_name4 }}</span></div>
                </div>
            </div>
        </div>
        <!-- Cards End -->
        
        <!-- More Images -->
        <div id="gallery" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                @foreach (Illuminate\Support\Facades\Storage::files($data->sect3_images) as $image)
                    @if ($loop->first){
                        <div class="carousel-item active">
                        <img class="d-block w-100" src="{{ url(str_replace('public','storage',$image)) }}" alt="...">
                        </div>
                    }
                    @endif
                    <div class="carousel-item">
                    <img class="d-block w-100" src="{{ url(str_replace('public','storage',$image)) }}" alt="...">
                    </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#gallery" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#gallery" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- More Images End -->
    </div> 
</section>
<!--Testimonials Gallery End-->


@endsection