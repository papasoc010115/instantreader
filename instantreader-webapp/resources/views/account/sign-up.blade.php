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
    <form action="{{ route('account.store_user') }}" method="POST" class="form-group" id="sign-up-form-data">
        @csrf
        <!-- User Name Fields -->
        <div class="form-group row mb-4">
            <div class="col-md-6">
                <input
                    type="text"
                    class="form-control form-control-user"
                    name="signUpFirstName"
                    placeholder="First Name"
                    required="true"
                />
            </div>
            <div class="col-md-6">
                <input
                    type="text"
                    class="form-control form-control-user"
                    name="signUpLastName"
                    placeholder="Last Name"
                    required="true"
                />
            </div>
        </div>

        <!-- Email Field -->
        <div class="form-group row mb-4">
            <div class="col-md-12">
                <input
                    type="text"
                    class="form-control form-control-user"
                    name="signUpEmail"
                    placeholder="Email"
                    required="true"
                />
            </div>
        </div>

        <!-- Password Field -->
        <div class="form-group row mb-4">
            <div class="col-md-12">
                <input
                    type="password"
                    class="form-control form-control-user"
                    name="signUpPassword"
                    placeholder="Password"
                    required="true"
                />
            </div>
        </div>

        <!-- Confirm Password Field -->
        <div class="form-group row mb-4">
            <div class="col-md-12">
                <input
                    type="password"
                    class="form-control form-control-user"
                    name="signUpConfirmPassword"
                    placeholder="Confirm Password"
                    required="true"
                />
            </div>
        </div>

        <!-- Captcha-->
        <div class="form-group row mb-4">
            <div class="col-md-12 d-flex justify-content-center">
                <div class="g-recaptcha" data-sitekey="6LdtbighAAAAAHhWzmWkWwkT53HNEcL5CPxg9PN_"></div>
            </div>
        </div>

        <!--Button-->
        <div class="col-md-12">
            <button type="submit" class="btn btn-large btn-rounded btn-purple btn-hvr-blue d-block w-100">
                <b>Sign Up</b>
                <div class="btn-hvr-setting">
                    <ul class="btn-hvr-setting-inner">
                        <li class="btn-hvr-effect"></li>
                        <li class="btn-hvr-effect"></li>
                        <li class="btn-hvr-effect"></li>
                        <li class="btn-hvr-effect"></li>
                    </ul>
                </div>
            </button>
        </div>
    </form>
</section>
<!--SIGN UP FORM End-->

<!--PAGE CONTENT END-->
@endsection