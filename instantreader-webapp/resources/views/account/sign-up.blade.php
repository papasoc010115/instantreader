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
        <h2 class="hide-cursor">Sign Up</h2>
    </div>
</section>
<!--BANNER End-->

<!--SIGN UP FORM Start-->
<section class="pb-0 account-form">
    <form class="booking-form" id="booking-form-data">
        @csrf
        <div class="form-group row mb-3">

            <!-- User Name Fields -->
            <div class="form-group row mb-4">
                <div class="col-md-6">
                    <input
                        type="text"
                        class="form-control form-control-user"
                        id="signUpFirstName"
                        placeholder="First Name"
                    />
                </div>
                <div class="col-md-6">
                    <input
                        type="text"
                        class="form-control form-control-user"
                        id="signUpLastName"
                        placeholder="Last Name"
                    />
                </div>
            </div>

            <!-- Email Field -->
            <div class="form-group row mb-4">
                <div class="col-md-12">
                    <input
                        type="text"
                        class="form-control form-control-user"
                        id="signUpEmail"
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
                        id="signUpPassword"
                        placeholder="Password"
                    />
                </div>
            </div>

            <!-- Confirm Password Field -->
            <div class="form-group row mb-4">
                <div class="col-md-12">
                    <input
                        type="text"
                        class="form-control form-control-user"
                        id="signUpConfirmPassword"
                        placeholder="Confirm Password"
                    />
                </div>
            </div>

            <!-- INSERT CAPTCHA HERE -->
            
            <!--Button-->
            <div class="col-md-12">
                <a class="btn btn-large btn-rounded btn-purple btn-hvr-blue d-block mt-4 contact_btn" href="javascript:void(0);"
                    id="sign_up_btn"><i class="fa fa-spinner fa-spin mr-2 d-none" aria-hidden="true"></i><b>Sign Up</b>
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
<!--SIGN UP FORM End-->

<!--PAGE CONTENT END-->
@endsection