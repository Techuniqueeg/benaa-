<!--begin::Aside Menu-->
<div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
    <!--begin::Menu Container-->
    <div id="kt_aside_menu" class="aside-menu my-4" data-menu-vertical="1" data-menu-scroll="1"
         data-menu-dropdown-timeout="500">
        <!--begin::Menu Nav-->
        <ul class="menu-nav">
            <li class="menu-item @if(request()->segment(1) == 'dashboard') menu-item-active  @endif"
                aria-haspopup="true">
                <a href="{{url('/dashboard')}}" class="menu-link">
                    <i class="menu-icon flaticon-home">
                        <span></span>
                    </i>
                    <span class="menu-text">الصفحة الرئيسية</span>
                </a>
            </li>
            <li class="menu-item menu-item-submenu @if( Request::segment(1)== 'city' ) menu-item-open @endif"
                aria-haspopup="true" data-menu-toggle="hover">
                <a href="{{route('cities')}}" class="menu-link menu-toggle">
                    <i class="menu-icon flaticon2-location"></i>
                    <span class="menu-text">المدن</span>
                </a>
            </li>
            @php($new=\App\Models\Inbox::where('seen','0')->count())
            <li class="menu-item menu-item-submenu @if(request()->segment(1) == 'inboxes') menu-item-open @endif "
                aria-haspopup="true" data-menu-toggle="hover">
                <a href="{{url('/inboxes')}}" class="menu-link menu-toggle">
                    <i class="menu-icon fas fa-envelope"></i>
                    <span class="menu-text">الرسائل</span>
                    <span class="menu-label">
                    @if($new>0)<span class="label label-danger label-inline">{{$new}}</span>@endif
													</span>
                </a>

            </li>
            <li class="menu-item menu-item-submenu @if(request()->segment(1) == 'settings') menu-item-open @endif "
                aria-haspopup="true" data-menu-toggle="hover">
                <a href="{{route('settings')}}" class="menu-link menu-toggle">
                    <i class="menu-icon fas fa-cog"></i>
                    <span class="menu-text">الاعدادات</span>
                </a>
            </li>
        </ul>
        <!--end::Menu Nav-->
    </div>
    <!--end::Menu Container-->
</div>
<!--end::Aside Menu-->
</div>
<!--end::Aside-->
<!--begin::Wrapper-->
<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
    <!--begin::Header-->
    <div id="kt_header" class="header header-fixed">
        <!--begin::Container-->
        <div class="container-fluid d-flex align-items-stretch justify-content-between">
            <!--begin::Header Menu Wrapper-->
            <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
                <!--begin::Header Menu-->
{{--                <div id="kt_header_menu" class="header-menu header-menu-mobile header-menu-layout-default">--}}
{{--                    <!--begin::Header Nav-->--}}
{{--                    <ul class="menu-nav">--}}
{{--                        <li class="menu-item menu-item-submenu menu-item-rel menu-item-active"--}}
{{--                            data-menu-toggle="click" aria-haspopup="true">--}}
{{--                            <a href="{{url('/')}}" target="_blank" class="btn btn-warning"--}}
{{--                               style="background-color: beige;">--}}
{{--                                <span class="svg-icon svg-icon-dark svg-icon-2x">--}}
{{--                                <svg xmlns="http://www.w3.org/2000/svg"--}}
{{--                                     xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"--}}
{{--                                     height="24px" viewBox="0 0 24 24" version="1.1">--}}

{{--                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
{{--                                        <rect x="0" y="0" width="24" height="24"/>--}}
{{--                                        <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="9"/>--}}
{{--                                        <path--}}
{{--                                            d="M11.7357634,20.9961946 C6.88740052,20.8563914 3,16.8821712 3,12 C3,11.9168367 3.00112797,11.8339369 3.00336944,11.751315 C3.66233009,11.8143341 4.85636818,11.9573854 4.91262842,12.4204038 C4.9904938,13.0609191 4.91262842,13.8615942 5.45804656,14.101772 C6.00346469,14.3419498 6.15931561,13.1409372 6.6267482,13.4612567 C7.09418079,13.7815761 8.34086797,14.0899175 8.34086797,14.6562185 C8.34086797,15.222396 8.10715168,16.1034596 8.34086797,16.2636193 C8.57458427,16.423779 9.5089688,17.54465 9.50920913,17.7048097 C9.50956962,17.8649694 9.83857487,18.6793513 9.74040201,18.9906563 C9.65905192,19.2487394 9.24857641,20.0501554 8.85059781,20.4145589 C9.75315358,20.7620621 10.7235846,20.9657742 11.7357634,20.9960544 L11.7357634,20.9961946 Z M8.28272988,3.80112099 C9.4158415,3.28656421 10.6744554,3 12,3 C15.5114513,3 18.5532143,5.01097452 20.0364482,7.94408274 C20.069657,8.72412177 20.0638332,9.39135321 20.2361262,9.6327358 C21.1131932,10.8600506 18.0995147,11.7043158 18.5573343,13.5605384 C18.7589671,14.3794892 16.5527814,14.1196773 16.0139722,14.886394 C15.4748026,15.6527403 14.1574598,15.137809 13.8520064,14.9904917 C13.546553,14.8431744 12.3766497,15.3341497 12.4789081,14.4995164 C12.5805657,13.664636 13.2922889,13.6156126 14.0555619,13.2719546 C14.8184743,12.928667 15.9189236,11.7871741 15.3781918,11.6380045 C12.8323064,10.9362407 11.963771,8.47852395 11.963771,8.47852395 C11.8110443,8.44901109 11.8493762,6.74109366 11.1883616,6.69207022 C10.5267462,6.64279981 10.170464,6.88841096 9.20435656,6.69207022 C8.23764828,6.49572949 8.44144409,5.85743687 8.2887174,4.48255778 C8.25453994,4.17415686 8.25619136,3.95717082 8.28272988,3.80112099 Z M20.9991771,11.8770357 C20.9997251,11.9179585 21,11.9589471 21,12 C21,16.9406923 17.0188468,20.9515364 12.0895088,20.9995641 C16.970233,20.9503326 20.9337111,16.888438 20.9991771,11.8770357 Z"--}}
{{--                                            fill="#000000" opacity="0.3"/>--}}
{{--                                    </g>--}}
{{--                                </svg>--}}
{{--                                </span>--}}
{{--                                <span class="menu-text" style="color: darkgoldenrod;">الويب</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                    <!--end::Header Nav-->--}}
{{--                </div>--}}
                <!--end::Header Menu-->
            </div>
            <!--end::Header Menu Wrapper-->
            <!--begin::Topbar-->
            <div class="topbar">
                <!--begin::User-->
                <div class="topbar-item">
                    <div class="btn btn-icon btn-icon-mobile w-auto btn-clean d-flex align-items-center btn-lg px-2"
                         id="kt_quick_user_toggle">
                        {{--                        <span class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">Hi,</span>--}}
                        <span
                            class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3">{{auth()->user()->name}}</span>
                        <span class="symbol symbol-lg-35 symbol-25 symbol-light-success">
											<span class="symbol-label font-size-h5 font-weight-bold">
                                            </span>
										</span>
                    </div>
                </div>
                <!--end::User-->
            </div>
            <!--end::Topbar-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Header-->

    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Subheader-->
        <div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
            <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                <!--begin::Info-->
                <div class="d-flex align-items-center flex-wrap mr-1">
                    <!--begin::Page Heading-->
                @yield('breadcrumb')
                <!--end::Page Heading-->
                </div>
                <!--end::Info-->
            </div>
        </div>
        <!--end::Subheader-->


        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">
