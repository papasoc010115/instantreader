@extends('layouts.marketing-layout')

@section('content')
<!--Banner Start-->
<section class="page-title cursor-light">
    <!-- Pattern Layers -->
    <div class="pattern-layers">
        <div class="layer-one"></div>
        <div class="layer-two"></div>
    </div>
    <div class="auto-container">
        <h2 class="hide-cursor">Additional Resources</h2>
        <ul class="page-breadcrumb link">
            <li><a href="/"><span class="icon fas fa-home"></span></a></li>
            <li>Additional Resources</li>
        </ul>
    </div>
</section>
<!--Banner End-->

<!--E-books/PDFs Start-->
<section class="bg-light" id="blog">
    <div class="container">
        <!--Row-->
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="heading-area mx-570 pb-lg-5 mb-5">
                    <h2 class="title mb-0">E-books and PDFs</h2>
                </div>
            </div>
        </div>
        <!--Row-->
        <div class="card-deck wow fadeInUp">
            <div class="card">
                <img class="card-img-top" src="{{  asset('marketing-site/assets/agency/img/blog-news-1.jpg')  }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title pt-3">Web design is fun</h5>
                    <p class="card-text">Hena Sword</p>
                </div>
                <div class="card-footer">
                    <a class="wow" href="javascript:void(0);">
                        <i class="icon fas fa-download" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="{{  asset('marketing-site/assets/agency/img/blog-news-2.jpg')  }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title pt-3">Future of websites</h5>
                    <p class="card-text">David Villas</p>
                </div>
                <div class="card-footer">
                    <a class="wow" href="javascript:void(0);">
                        <i class="icon fas fa-download" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="{{  asset('marketing-site/assets/agency/img/blog-news-3.jpg')  }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title pt-3">Future of websites</h5>
                    <p class="card-text">Jhon Walker</p>
                </div>
                <div class="card-footer">
                    <a class="wow" href="javascript:void(0);">
                        <i class="icon fas fa-download" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--E-books/PDFs End-->

<!--Blogs Start-->
<section class="gradient-bg2" id="blog">
    <div class="container">
        <!--Row-->
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="heading-area mx-570 pb-lg-5 mb-5">
                    <h2 class="title mb-0 text-white">Blogs</h2>
                </div>
            </div>
        </div>
        <!--Row-->
        <div class="row wow fadeInUp">
            <!--Blog Item-->
            <div class="col-lg-4">
                <div class="news-item">
                    <img alt="image" class="news-img" src="{{ asset('marketing-site/assets/agency/img/blog-news-1.jpg') }}">
                    <div class="news-text-box">
                        <span class="date main-color">October 29, 2020</span>
                        <a href="agency/blog-list.html"><h4 class="news-title">Web design is fun</h4></a>
                        <p class="para">Lorem ipsum dolor sit amet consectetur adipiscing elit ipsum dolor sit am...</p>
                        <span class="author d-flex align-items-center" href="javascript:void(0);">
                            <img alt="image" class="author-img bg-blue" src="{{ asset('marketing-site/assets/agency/img/avatar-1.png') }}">
                            <h5 class="author-name">Hena Sword</h5>
                        </span>
                    </div>
                </div>
            </div>
            <!--Blog Item-->
            <div class="col-lg-4">
                <div class="news-item">
                    <img alt="image" class="news-img" src="{{ asset('marketing-site/assets/agency/img/blog-news-2.jpg') }}">
                    <div class="news-text-box">
                        <span class="date main-color">October 29, 2020</span>
                        <a href="agency/blog-list.html"><h4 class="news-title">Future of websites</h4></a>
                        <p class="para">Lorem ipsum dolor sit amet consectetur adipiscing elit ipsum dolor sit am...</p>
                        <span class="author d-flex align-items-center" href="javascript:void(0);">
                            <img alt="image" class="author-img bg-purple" src="{{ asset('marketing-site/assets/agency/img/avatar-2.png') }}">
                            <h5 class="author-name">David Villas</h5>
                        </span>
                    </div>
                </div>
            </div>
            <!--Blog Item-->
            <div class="col-lg-4">
                <div class="news-item">
                    <img alt="image" class="news-img" src="{{ asset('marketing-site/assets/agency/img/blog-news-3.jpg') }}">
                    <div class="news-text-box">
                        <span class="date main-color">October 29, 2020</span>
                        <a href="javascript:void(0);"><h4 class="news-title">Digital marketing</h4></a>
                        <p class="para">Lorem ipsum dolor sit amet consectetur adipiscing elit ipsum dolor sit am...</p>
                        <span class="author d-flex align-items-center" href="javascript:void(0);">
                            <img alt="image" class="author-img bg-pink" src="{{ asset('marketing-site/assets/agency/img/avatar-5.png') }}">
                            <h5 class="author-name">Jhon Walker</h5>
                        </span>
                    </div>
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
<!--Blogs End-->

@endsection