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

<!--BANNER Start-->
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
<!--BANNER End-->

<!--LOG IN FORM Start-->
<section class="pb-0 account-form">
    <form class="booking-form" id="booking-form-data">
        @csrf
        <div class="form-group row mb-3">

            <!-- Email Field -->
            <div class="form-group row mb-4">
                <div class="col-md-12">
                    <input
                        type="text"
                        class="form-control form-control-user"
                        id="logInEmail"
                        placeholder="Email"
                    />
                </div>
            </div>

            <!-- Password Field -->
            <div class="form-group row mb-4">
                <div class="col-md-12">
                    <input
                        type="text"
                        class="form-control form-control-user"
                        id="logInPassword"
                        placeholder="Password"
                    />
                </div>
            </div>
            
            <!--Button-->
            <div class="col-md-12">
                <a class="btn btn-large btn-rounded btn-purple btn-hvr-blue d-block mt-4 contact_btn" href="javascript:void(0);"
                    id="log_in_btn"><i class="fa fa-spinner fa-spin mr-2 d-none" aria-hidden="true"></i><b>Log In</b>
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
    </form>
</section>
<!--LOG IN FORM End-->

<!--PAGE CONTENT END-->
@endsection