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
        <h2 class="hide-cursor">Log In</h2>
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

            <!--Button-->
            <div class="col-md-12">

                <div class="form-check">
                    <label class="checkbox-lable">Remember Me
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label>
                    <br>
                    <div class="mt-2">Don't have an account? <a href="{{ route('account.sign-up') }}">Sign Up</a></div>
                </div>

                <div class="center-button">
                    <a href="javascript:void(0);" id="quote_submit_btn" class="btn btn-large btn-rounded btn-blue btn-hvr-pink m-3">Log In
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