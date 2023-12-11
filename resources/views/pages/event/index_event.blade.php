@extends('layouts.master_front')

@section('title', 'Events')
@section('content')



<!--====== Page Banner Start ======-->

<section class="page-banner">
    <div class="page-banner-bg bg_cover"
        style="background-image: url(https://template.hasthemes.com/edumate-v1/edumate/assets/images/page-banner.webp);">
        <div class="container">
            <div class="banner-content text-center">
                <h2 class="title">Events</h2>
            </div>
        </div>
    </div>
</section>

<!--====== Page Banner Ends ======-->

<!--====== Event Start ======-->

<section class="event-page">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="event-menu pt-20 text-center">
                    <ul class="menu-items">
                        <li data-filter="*" class="active">All</li>
                        <li data-filter=".happening">Happening</li>
                        <li data-filter=".upcoming">Upcoming</li>
                        <li data-filter=".expired">Expired</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="event-wrapper">
            <div class="row grid">
                <div class="col-lg-3 col-sm-6 happening">
                    <div class="single-event text-center mt-30">
                        <span class="time">10.35 am to 1.00 pm</span>
                        <span class="date">25 May, 2020</span>
                        <h4 class="event-title"><a href="event-details.html">Micro Biological Workshop</a></h4>
                        <p class="place">Place: Central Hall, New York</p>
                        <a href="event-details.html" class="more">Read more <i class="far fa-chevron-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 expired">
                    <div class="single-event text-center mt-30">
                        <span class="time">10.35 am to 1.00 pm</span>
                        <span class="date">25 May, 2020</span>
                        <h4 class="event-title"><a href="event-details.html">Micro Biological Workshop</a></h4>
                        <p class="place">Place: Central Hall, New York</p>
                        <a href="event-details.html" class="more">Read more <i class="far fa-chevron-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 happening">
                    <div class="single-event text-center mt-30">
                        <span class="time">10.35 am to 1.00 pm</span>
                        <span class="date">25 May, 2020</span>
                        <h4 class="event-title"><a href="event-details.html">Micro Biological Workshop</a></h4>
                        <p class="place">Place: Central Hall, New York</p>
                        <a href="event-details.html" class="more">Read more <i class="far fa-chevron-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 expired">
                    <div class="single-event text-center mt-30">
                        <span class="time">10.35 am to 1.00 pm</span>
                        <span class="date">25 May, 2020</span>
                        <h4 class="event-title"><a href="event-details.html">Micro Biological Workshop</a></h4>
                        <p class="place">Place: Central Hall, New York</p>
                        <a href="event-details.html" class="more">Read more <i class="far fa-chevron-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 upcoming">
                    <div class="single-event text-center mt-30">
                        <span class="time">10.35 am to 1.00 pm</span>
                        <span class="date">25 May, 2020</span>
                        <h4 class="event-title"><a href="event-details.html">Micro Biological Workshop</a></h4>
                        <p class="place">Place: Central Hall, New York</p>
                        <a href="event-details.html" class="more">Read more <i class="far fa-chevron-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 expired">
                    <div class="single-event text-center mt-30">
                        <span class="time">10.35 am to 1.00 pm</span>
                        <span class="date">25 May, 2020</span>
                        <h4 class="event-title"><a href="event-details.html">Micro Biological Workshop</a></h4>
                        <p class="place">Place: Central Hall, New York</p>
                        <a href="event-details.html" class="more">Read more <i class="far fa-chevron-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 happening">
                    <div class="single-event text-center mt-30">
                        <span class="time">10.35 am to 1.00 pm</span>
                        <span class="date">25 May, 2020</span>
                        <h4 class="event-title"><a href="event-details.html">Micro Biological Workshop</a></h4>
                        <p class="place">Place: Central Hall, New York</p>
                        <a href="event-details.html" class="more">Read more <i class="far fa-chevron-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 upcoming">
                    <div class="single-event text-center mt-30">
                        <span class="time">10.35 am to 1.00 pm</span>
                        <span class="date">25 May, 2020</span>
                        <h4 class="event-title"><a href="event-details.html">Micro Biological Workshop</a></h4>
                        <p class="place">Place: Central Hall, New York</p>
                        <a href="event-details.html" class="more">Read more <i class="far fa-chevron-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 expired">
                    <div class="single-event text-center mt-30">
                        <span class="time">10.35 am to 1.00 pm</span>
                        <span class="date">25 May, 2020</span>
                        <h4 class="event-title"><a href="event-details.html">Micro Biological Workshop</a></h4>
                        <p class="place">Place: Central Hall, New York</p>
                        <a href="event-details.html" class="more">Read more <i class="far fa-chevron-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 expired">
                    <div class="single-event text-center mt-30">
                        <span class="time">10.35 am to 1.00 pm</span>
                        <span class="date">25 May, 2020</span>
                        <h4 class="event-title"><a href="event-details.html">Micro Biological Workshop</a></h4>
                        <p class="place">Place: Central Hall, New York</p>
                        <a href="event-details.html" class="more">Read more <i class="far fa-chevron-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 happening">
                    <div class="single-event text-center mt-30">
                        <span class="time">10.35 am to 1.00 pm</span>
                        <span class="date">25 May, 2020</span>
                        <h4 class="event-title"><a href="event-details.html">Micro Biological Workshop</a></h4>
                        <p class="place">Place: Central Hall, New York</p>
                        <a href="event-details.html" class="more">Read more <i class="far fa-chevron-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 upcoming">
                    <div class="single-event text-center mt-30">
                        <span class="time">10.35 am to 1.00 pm</span>
                        <span class="date">25 May, 2020</span>
                        <h4 class="event-title"><a href="event-details.html">Micro Biological Workshop</a></h4>
                        <p class="place">Place: Central Hall, New York</p>
                        <a href="event-details.html" class="more">Read more <i class="far fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <ul class="pagination-items text-center">
            <li><a class="active" href="#">01</a></li>
            <li><a href="#">02</a></li>
            <li><a href="#">03</a></li>
            <li><a href="#">04</a></li>
            <li><a href="#">05</a></li>
        </ul>
    </div>
</section>

<!--====== Event Ends ======-->

{{--
<!--====== Newsletter Start ======-->--}}

{{--<section class="newsletter-area-2">--}}
    {{-- <div class="container">--}}
        {{-- <div class="newsletter-wrapper bg_cover"
            style="background-image: url(https://template.hasthemes.com/edumate-v1/edumate/assets/images/newsletter-bg-1.webp);">
            --}}
            {{-- <div class="row align-items-center">--}}
                {{-- <div class="col-lg-5">--}}
                    {{-- <div class="section-title-2 mt-25">--}}
                        {{-- <h2 class="title">Subscribe our Newsletter</h2>--}}
                        {{-- <span class="line"></span>--}}
                        {{-- <p>Even slightly believable. If you are going use a passage of Lorem Ipsum need some</p>
                        --}}
                        {{-- </div>--}}
                    {{-- </div>--}}
                {{-- <div class="col-lg-7">--}}
                    {{-- <div class="newsletter-form mt-30">--}}
                        {{-- <form action="#">--}}
                            {{-- <input type="text" placeholder="Enter your email here">--}}
                            {{-- <button class="main-btn main-btn-2">Subscribe now</button>--}}
                            {{-- </form>--}}
                        {{-- </div>--}}
                    {{-- </div>--}}
                {{-- </div>--}}
            {{-- </div>--}}
        {{-- </div>--}}
    {{--</section>--}}

{{--
<!--====== Newsletter Ends ======-->--}}
@endsection