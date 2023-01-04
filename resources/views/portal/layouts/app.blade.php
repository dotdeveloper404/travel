<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>@yield('title') | {{ config('app.name') }}</title>
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="{{ asset('portal_assets/theme/assets/media/logos/favicon.ico') }}" />
    <!-- begin::Fonts(mandatory for all pages) -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->

    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="{{ asset('portal_assets/theme/assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('portal_assets/theme/assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
     
    <link href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    @vite(['resources/js/app.js'])

    @stack('styles')
</head>

<body id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="false"
    data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true"
    data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true"
    data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">

    <!--begin::App-->
    <div class="d-flex flex-column flex-root app-root" id="app">

 
        <!--begin::Page-->
        <div class="app-page flex-column flex-column-fluid" id="kt_app_page">

            <!--begin::Header-->
                @include('portal.partials.header')
            <!--end::Header-->

            <!--begin::Wrapper-->
            <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">

                 <!--begin::Sidebar-->
                 @include('portal.partials.sidebar')
                 <!--end::Sidebar-->

                <!--begin::Main-->
                <div class="app-main flex-column flex-row-fluid" id="kt_app_main">

                    <!--begin::Content wrapper-->
                    <div class="d-flex flex-column flex-column-fluid">

                        <!--begin::Toolbar-->
                        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">

                            <!--begin::Toolbar container-->
                            <div id="kt_app_toolbar_container"
                                class="app-container container-fluid d-flex flex-stack">

                                <!--begin::Page title-->
                                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">

                                    <!--begin::Title-->
                                    <h1
                                        class="page-heading d-flex text-dark fw-bold flex-column justify-content-center my-0">
                                        {{ $title ?? '' }}
                                    </h1>
                                    <!--end::Title-->

                                    <!--begin::Breadcrumb-->
                                    @isset($breadcrumbs)
                                        <ul class="breadcrumb breadcrumb-dot fw-semibold fs-7 my-0 pt-1">
                                            @foreach ($breadcrumbs as $b)
                                                @if ($b['link'])
                                                    <li class="breadcrumb-item pe-3">
                                                        <a href="{{ $b['link'] }}"
                                                            class="text-primary text-hover-dark">{{ $b['name'] }}</a>
                                                    </li>
                                                @else
                                                    <li class="breadcrumb-item pe-3 text-muted">{{ $b['name'] }}</li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    @endisset
                                    <!--end::Breadcrumb-->

                                </div>
                                <!--end::Page title-->

                                @if (isset($addButton) && $addButton)
                                    <div>
                                        <a class="btn btn-primary" href="{{ $btn['link'] }}">
                                            {{ $btn['text'] }}
                                        </a>
                                    </div>
                                @endif

                            </div>
                            <!--end::Toolbar container-->

                        </div>
                        <!--end::Toolbar-->

                        <!--begin::Content-->
                        <div id="kt_app_content" class="app-content flex-column-fluid bg-white">

                            <!--begin::Content container-->
                            <div id="kt_app_content_container" class="app-container container-fluid">

                                @yield('content')

                            </div>
                            <!--end::Content container-->

                        </div>
                        <!--end::Content-->

                    </div>
                </div>

            </div>
            <!--end::Wrapper-->

        </div>
        <!--end::Page-->

    </div>
    <!--end::App-->

    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="{{ asset('portal_assets/theme/assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('portal_assets/theme/assets/js/scripts.bundle.js') }}"></script>
    <!--end::Global Javascript Bundle-->

    @stack('scripts')
</body>
