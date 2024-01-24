<!doctype html>
<html class="no-js" lang="{{ app()->getlocale() }}">

<head>
    <meta charset="utf-8">
    <!--====== Title ======-->
    <title>@yield('title','Welcome to RTC Siem Reap')</title>
    <meta name="description" content="@yield('description','Welcome to RTC Siem Reap')">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{asset('frontend')}}/images/rtcsr-logo.png" type="image/webp">
    @include('layouts.partials.styles')

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanuman:wght@100;300;400;700;900&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: 'Hanuman', serif;
        }

        .text-primary,
        .features-title,
        .title,
        .campus-title,
        .video-title,
        .footer-title {
            font-family: 'Hanuman', serif !important;
            line-height: 64px;
        }

        .main-btn {
            border-radius: 15px !important;
            /*box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 6px -1px, rgba(0, 0, 0, 0.06) 0px 2px 4px -1px !important;*/
            box-shadow: rgba(0, 0, 0, 0.07) 0px 1px 2px, rgba(0, 0, 0, 0.07) 0px 2px 4px, rgba(0, 0, 0, 0.07) 0px 4px 8px, rgba(0, 0, 0, 0.07) 0px 8px 16px, rgba(0, 0, 0, 0.07) 0px 16px 32px, rgba(0, 0, 0, 0.07) 0px 32px 64px !important;
        }

        .single-courses {
            border-radius: 15px !important;
            /*box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 6px -1px, rgba(0, 0, 0, 0.06) 0px 2px 4px -1px !important;*/
            box-shadow: rgba(0, 0, 0, 0.07) 0px 1px 2px, rgba(0, 0, 0, 0.07) 0px 2px 4px, rgba(0, 0, 0, 0.07) 0px 4px 8px, rgba(0, 0, 0, 0.07) 0px 8px 16px, rgba(0, 0, 0, 0.07) 0px 16px 32px, rgba(0, 0, 0, 0.07) 0px 32px 64px !important;
        }

        .single-courses-2 {
            border-radius: 15px !important;
            /*box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 6px -1px, rgba(0, 0, 0, 0.06) 0px 2px 4px -1px !important;*/
            box-shadow: rgba(0, 0, 0, 0.07) 0px 1px 2px, rgba(0, 0, 0, 0.07) 0px 2px 4px, rgba(0, 0, 0, 0.07) 0px 4px 8px, rgba(0, 0, 0, 0.07) 0px 8px 16px, rgba(0, 0, 0, 0.07) 0px 16px 32px, rgba(0, 0, 0, 0.07) 0px 32px 64px !important;
        }

        .header-logo {
            height: 64px;
            /* padding: 18px 0px !important; */
        }

        /* .header-top-wrapper {
            height: 24px !important;
        } */

        .header-top {
            /* height: 54px; */
        }

        .rounded-full {
            height: 24px;
            font-family: 'Hanuman', serif !important;
        }

        a {
            font-family: 'Hanuman', serif !important;
        }

        .navigation.sticky {
            /* height: 64px !important; */
        }



        /* li {
            height: 64px !important;
        } */

        .navigation .nav-menus-wrapper .nav-menu li a {
            padding: 18px 0px !important;
            /* padding-bottom: 10px !important; */
        }

        .navigation .nav-menus-wrapper .nav-menu li .nav-submenu li {
            height: 36px !important;
            padding: 2px 15px !important;

        }

        .nav-menu {
            padding-left: 20px !important;
        }

        .slider-area,
        .top-courses-area,
        .event-page {
            padding-top: 10px !important;
        }

        .page-banner {
            padding-top: 10px !important;
        }

        .blog-page {
            padding-top: 10px !important;
        }

        .features-area {
            padding-top: 20px !important;
        }

        .blog-area,
        .event-area,
        .single-courses,
        .testimonials-area,
        .blog-details-page {
            padding-top: 20px !important;

        }

        .newsletter-form input {
            padding: 0 20px !important;
        }
    </style>
    <script>
        var baseUrl = "{{ URL::to('/') }}";
        const onErrorImage = (e) => {
            // e.target.src = "{{ asset('/images/no_image_available.jpg') }}";
            e.target.src = "{{ asset('/images/rtcsr-logo.png') }}";
        };
    </script>
    @stack('styles')
</head>

<body>

    @include('layouts.partials.navbar')

    @yield('content')

    @include('layouts.partials.footer')


    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="fal fa-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->


    @include('layouts.partials.scripts')
    @stack('scripts')
</body>

</html>