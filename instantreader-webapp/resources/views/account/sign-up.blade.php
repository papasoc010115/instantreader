@extends('layouts.marketing-layout')

@section('content')
<!--PAGE CONTENT START-->

<style>
    .account-form{
        margin: auto;
        max-width: 1000px;
    }

    .center-button{
        text-align: center;
    }
</style>

<!--Banner Start-->
<section class="page-title cursor-light">
    <!-- Pattern Layers -->
    <div class="pattern-layers">
        <div class="layer-one"></div>
        <div class="layer-two"></div>
    </div>
    <div class="auto-container">
        <h2 class="hide-cursor">Sign Up</h2>
    </div>
</section>
<!--Banner End-->

<!--LIVE PARENT ORIENTATION Start-->
<section class="pb-0 account-form">
    <form class="contact-form ">
        @csrf
        <div class="row">
            <!--Full Column-->
            <div class="col-md-12">
                <div class="form-group">
                    <input class="form-control" placeholder="Email"></input>
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <input class="form-control" placeholder="Password"></input>
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <input class="form-control" placeholder="Confirm Password"></input>
                </div>
            </div>

            <!--Button-->
            <div class="col-md-12">

                <div class="form-check">
                    <div class="mt-2">Already have an account? <a href="{{ route('account.log-in') }}">Log In</a></div>
                </div>

                <div class="center-button">
                    <a href="javascript:void(0);" id="quote_submit_btn" class="btn btn-large btn-rounded btn-blue btn-hvr-pink m-3">Sign Up
                        <div class="btn-hvr-setting">
                            <ul class="btn-hvr-setting-inner">
                                <li class="btn-hvr-effect"></li>
                                <li class="btn-hvr-effect"></li>
                                <li class="btn-hvr-effect"></li>
                                <li class="btn-hvr-effect"></li>
                            </ul>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </form>
</section>
<!--LIVE PARENT ORIENTATION End-->

<!--PAGE CONTENT END-->
@endsection