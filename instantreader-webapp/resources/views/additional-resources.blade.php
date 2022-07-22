@extends('layouts.marketing-layout')

@section('content')

<!-- Style Start -->
<style>
    .card {
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
        <div class="row wow fadeInUp">
            <div class="col-lg-4 d-flex align-items-stretch">
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
            <div class="col-lg-4 d-flex align-items-stretch">
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
            <div class="col-lg-4 d-flex align-items-stretch">
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
<!--E-books/PDFs End-->

<!--Blogs Start-->
<section  id="blog" style="background-color: #562FB7;">
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
            <div class="col-lg-4 d-flex align-items-stretch">
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
            <div class="col-lg-4 d-flex align-items-stretch">
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
            <div class="col-lg-4 d-flex align-items-stretch">
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