@extends('portal.layouts.guest')

@section('content')

<!--begin::Page bg image-->
<style>
    body {
        background-image: url('portal_assets/theme/assets/media/auth/bg4.jpg');
    }

    [data-theme="dark"] body {
        background-image: url('portal_assets/theme/assets/media/auth/bg4-dark.jpg');
    }
</style>
<!--end::Page bg image-->
<!--begin::Authentication - Sign-in -->
<div class="d-flex flex-column flex-column-fluid flex-lg-row">
    <!--begin::Aside-->
    <div class="d-flex flex-center w-lg-50 pt-15 pt-lg-0 px-10">
        <!--begin::Aside-->
        <div class="d-flex flex-center flex-lg-start flex-column">
            <!--begin::Logo-->
            <a href="../../demo1/dist/index.html" class="mb-7">
                <!-- <img alt="Logo" src="portal_assets/theme/assets/media/logos/custom-3.svg" /> -->
            </a>
            <!--end::Logo-->
            <!--begin::Title-->
            <!-- <h2 class="text-white fw-normal m-0">Branding tools designed for your business</h2> -->
            <!--end::Title-->
        </div>
        <!--begin::Aside-->
    </div>
    <!--begin::Aside-->
    <!--begin::Body-->
    <div class="d-flex flex-center w-lg-50 p-10">
        <!--begin::Card-->
        <div class="card rounded-3 w-md-550px">
            <!--begin::Card body-->
            <div class="card-body p-10 p-lg-20">
                <!--begin::Form-->
                <form method="POST" action="{{ route('login') }}" class="form w-100" novalidate="novalidate" id="kt_sign_in_form" data-kt-redirect-url="../../demo1/dist/index.html" action="#">
                        @csrf  
                <!--begin::Heading-->
                    <div class="text-center mb-11">
                        <!--begin::Title-->
                        <h1 class="text-dark fw-bolder mb-3">Sign In</h1>
                        <!--end::Title-->
                        <!--begin::Subtitle-->
                        <!--end::Subtitle=-->
                    </div>
                    <!--begin::Heading-->
                    <!--begin::Login options-->

                    <!--end::Login options-->
                    <!--begin::Separator-->

                    <!--end::Separator-->
                    <!--begin::Input group=-->
                    <div class="fv-row mb-8">
                        <!--begin::Email-->

                        <input id="email" placeholder="Email" type="email" class="form-control bg-transparent @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <!--end::Email-->
                    </div>
                    <!--end::Input group=-->
                    <div class="fv-row mb-3">
                        <!--begin::Password-->
                        <!--end::Password-->
                        <input id="password" placeholder="Password" type="password" class="form-control bg-transparent @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <!--end::Input group=-->
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
                        <div></div>
                        <!--begin::Link-->
                        <a href="../../demo1/dist/authentication/layouts/creative/reset-password.html" class="link-primary">Forgot Password ?</a>
                        <!--end::Link-->
                    </div>
                    <!--end::Wrapper-->
                    <!--begin::Submit button-->
                    <div class="d-grid mb-10">
                        <button type="submit" id="kt_sign_in_submit" class="btn btn-primary">
                            <!--begin::Indicator label-->
                            <span class="indicator-label">Sign In</span>
                            <!--end::Indicator label-->
                            <!--begin::Indicator progress-->
                            <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            <!--end::Indicator progress-->
                        </button>
                    </div>
                    <!--end::Submit button-->
                    <!--begin::Sign up-->
                    <!-- <div class="text-gray-500 text-center fw-semibold fs-6">Not a Member yet? -->
                    <!-- <a href="../../demo1/dist/authentication/layouts/creative/sign-up.html" class="link-primary">Sign up</a></div> -->
                    <!--end::Sign up-->
                </form>
                <!--end::Form-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card-->
    </div>
    <!--end::Body-->
</div>
<!--end::Authentication - Sign-in-->

@endsection