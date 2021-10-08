<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!--begin::Head-->
<head>
    @include('dashboard.layouts.head.index')
    @yield('head')
</head>
<!--end::Head-->
<!--begin::Body-->
<body  id="kt_body"  class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading"  >
<!--begin::Main-->
<!--begin::Header Mobile-->
@include('dashboard.layouts.header.mobile-index')
<!--end::Header Mobile-->
<div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="d-flex flex-row flex-column-fluid page">
        <!--begin::Aside-->
        @include('dashboard.layouts.aside.index')
        <!--end::Aside-->
        <!--begin::Wrapper-->
        <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
            <!--begin::Header-->
            @include('dashboard.layouts.header.index')
            <!--end::Header-->
            <!--begin::Content-->
            <div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
                @include('dashboard.layouts.header.subheader-index')
                @if(request()->is('dashboard'))
                    @include('dashboard.layouts.content.index')
                @else
                    <div class="container">
                        @yield('content')
                    </div>

                @endif
            </div>
            <!--end::Content-->
            <!--begin::Footer-->
            @include('dashboard.layouts.footer.index')
            <!--end::Footer-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>
<!--end::Main-->
@include('dashboard.layouts.components.index')
@include('dashboard.layouts.script.index')
@include('sweetalert::alert')
@yield('script')
</body>
<!--end::Body-->
</html>
