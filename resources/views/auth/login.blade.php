
<!DOCTYPE html>
<!--
Template Name: Metronic - Bootstrap 4 HTML, React, Angular 11 & VueJS Admin Dashboard Theme
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: https://1.envato.market/EA4JP
Renew Support: https://1.envato.market/EA4JP
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">
<!--begin::Head-->
<head><base href="../../../../">
    <meta charset="utf-8" />
    <title>Login | Eggs </title>
    <meta name="description" content="Login page example" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="canonical" href="https://keenthemes.com" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Custom Styles(used by this page)-->
    <link href="{{ asset('/assets/css/pages/login/classic/login-5.css') }}" rel="stylesheet" type="text/css" />

    <!--end::Page Custom Styles-->
    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="{{ asset('/assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/assets/plugins/custom/prismjs/prismjs.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles-->
    <!--begin::Layout Themes(used by all pages)-->
    <link href="{{ asset('/assets/css/themes/layout/header/base/light.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/assets/css/themes/layout/header/menu/light.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/assets/css/themes/layout/brand/dark.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/assets/css/themes/layout/aside/dark.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Layout Themes-->
    <link rel="shortcut icon" href="{{ asset('/assets/media/logos/favicon.ico') }}" />
</head>
<!--end::Head-->
<!--begin::Body-->
<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
<!--begin::Main-->
<div class="d-flex flex-column flex-root">
    <!--begin::Login-->
    <div class="login login-5 login-signin-on d-flex flex-row-fluid" id="kt_login">
        <div class="d-flex flex-center bgi-size-cover bgi-no-repeat flex-row-fluid" style="background-image: url(/assets/media/bg/bg-1.jpg);">
            <div class="login-form text-center text-white p-7 position-relative overflow-hidden">
                <!--begin::Login Header-->
                <div class="d-flex flex-center mb-15">
                    <a href="#">
                        <img src="{{settings('logo')}}" class="max-h-75px" alt="" />
                    </a>
                </div>
                <!--end::Login Header-->
                <!--begin::Login Sign in form-->
                <div class="login-signin">
                    <div class="mb-20">
                        <h3 class=" font-weight-normal" style="color: black;" >تسجيل دخول الادمن</h3>
                    </div>
                    <form method="POST" action="{{route('login') }}">
                        @csrf
                        <div class="form-group">
                            <input class="form-control h-auto rounded-pill border-0 py-4 px-8" type="email" name="email" id="email" required=""
                                   placeholder="email" autocomplete="off" />
                            @error('email')
                            <span role="alert">
                                        <strong class="red">{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input class="form-control h-auto  rounded-pill border-0 py-4 px-8" type="password" name="password" id="password" required=""
                                   placeholder="password" />
                        </div>
                        <div class="form-group d-flex flex-wrap justify-content-between align-items-center px-8 opacity-60">


                        </div>
                        <div class="form-group text-center mt-10">
                            <button type="submit" class="btn btn-pill btn-primary opacity-90 px-15 py-3">تسجيل الدخول</button>
                        </div>
                    </form>
                    <div class="mt-10">
                        {{--                        <span class="opacity-40 mr-4">Don't have an account yet?</span>--}}
                        {{--                        <a href="javascript:;" id="kt_login_signup" class="text-white opacity-30 font-weight-normal">Sign Up</a>--}}
                    </div>
                </div>
                <!--end::Login Sign in form-->
                <!--begin::Login Sign up form-->
                <div class="login-signup">
                    <div class="mb-20">
                        <h3 class="opacity-40 font-weight-normal">Sign Up</h3>
                        <p class="opacity-40">Enter your details to create your account</p>
                    </div>
                    <form class="form text-center" id="kt_login_signup_form" >
                        <div class="form-group">
                            <input class="form-control h-auto text-white bg-white-o-5 rounded-pill border-0 py-4 px-8" type="text" placeholder="Fullname" name="fullname" />
                        </div>
                        <div class="form-group">
                            <input class="form-control h-auto text-white bg-white-o-5 rounded-pill border-0 py-4 px-8" type="text" placeholder="Email" name="email" autocomplete="off" />
                        </div>
                        <div class="form-group">
                            <input class="form-control h-auto text-white bg-white-o-5 rounded-pill border-0 py-4 px-8" type="password" placeholder="Password" name="password" />
                        </div>
                        <div class="form-group">
                            <input class="form-control h-auto text-white bg-white-o-5 rounded-pill border-0 py-4 px-8" type="password" placeholder="Confirm Password" name="cpassword" />
                        </div>
                        <div class="form-group text-left px-8">
                            <div class="checkbox-inline">
                                <label class="checkbox checkbox-outline checkbox-white opacity-60 text-white m-0">
                                    <input type="checkbox" name="agree" />
                                    <span></span>I Agree the
                                    <a href="#" class="text-white font-weight-bold ml-1">terms and conditions</a>.</label>
                            </div>
                            <div class="form-text text-muted text-center"></div>
                        </div>
                        <div class="form-group">
                            <button id="kt_login_signup_submit" class="btn btn-pill btn-primary opacity-90 px-15 py-3 m-2">Sign Up</button>
                            <button id="kt_login_signup_cancel" class="btn btn-pill btn-outline-white opacity-70 px-15 py-3 m-2">Cancel</button>
                        </div>
                    </form>
                </div>
                <!--end::Login Sign up form-->
                <!--begin::Login forgot password form-->
                <div class="login-forgot">
                    <div class="mb-20">
                        <h3 class="opacity-40 font-weight-normal">Forgotten Password ?</h3>
                        <p class="opacity-40">Enter your email to reset your password</p>
                    </div>
                    <form class="form" id="kt_login_forgot_form">
                        <div class="form-group mb-10">
                            <input class="form-control h-auto text-white bg-white-o-5 rounded-pill border-0 py-4 px-8" type="text" placeholder="Email" name="email" autocomplete="off" />
                        </div>
                        <div class="form-group">
                            <button id="kt_login_forgot_submit" class="btn btn-pill btn-primary opacity-90 px-15 py-3 m-2">Request</button>
                            <button id="kt_login_forgot_cancel" class="btn btn-pill btn-outline-white opacity-70 px-15 py-3 m-2">Cancel</button>
                        </div>
                    </form>
                </div>
                <!--end::Login forgot password form-->
            </div>
        </div>
    </div>
    <!--end::Login-->
</div>
<!--end::Main-->
<script>var HOST_URL = "https://preview.keenthemes.com/theme/html/tools/preview";</script>
<!--begin::Global Config(global config for global JS scripts)-->
<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1400 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#3699FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#E4E6EF", "dark": "#181C32" }, "light": { "white": "#ffffff", "primary": "#E1F0FF", "secondary": "#EBEDF3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#3F4254", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#EBEDF3", "gray-300": "#E4E6EF", "gray-400": "#D1D3E0", "gray-500": "#B5B5C3", "gray-600": "#7E8299", "gray-700": "#5E6278", "gray-800": "#3F4254", "gray-900": "#181C32" } }, "font-family": "Poppins" };</script>
<!--end::Global Config-->
<!--begin::Global Theme Bundle(used by all pages)-->
<script src="{{ asset('/assets/plugins/global/plugins.bundle.js') }}"></script>
<script src="{{ asset('/assets/plugins/custom/prismjs/prismjs.bundle.js') }}"></script>
<script src="{{ asset('/assets/js/scripts.bundle.js') }}"></script>
<!--end::Global Theme Bundle-->
<!--begin::Page Scripts(used by this page)-->
<script src="{{ asset('/assets/js/pages/custom/login/login-general.js') }}"></script>
<!--end::Page Scripts-->
</body>
<!--end::Body-->
</html>
