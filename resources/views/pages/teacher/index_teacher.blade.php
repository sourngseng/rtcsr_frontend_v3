@extends('layouts.master_front')
@section('title', 'Teachers Lists')
@section('content')

<!--====== Page Banner Start ======-->

<section class="page-banner">
    <div class="page-banner-bg bg_cover"
        style="background-image: url(https://template.hasthemes.com/edumate-v1/edumate/assets/images/page-banner.webp);">
        <div class="container">
            <div class="banner-content text-center">
                <h2 class="title">Our Teachers</h2>
            </div>
        </div>
    </div>
</section>

<!--====== Page Banner Ends ======-->

<!--====== Teachers Start ======-->

<section class="teachers-page">
    <div class="container">

        <div class="row teachers-row">
            @foreach ($teachers['data'] as $item)
            <div class="col-md-4 col-sm-6 teachers-col">
                <div class="single-teacher mt-80 text-center">
                    <div class="teacher-social">
                        <ul class="social">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                    <div class="teacher-image">
                        <a href="#">
                            <img src="{{$item['image']}}" alt="teacher" style="height: 310px;">
                        </a>
                    </div>
                    <div class="teacher-content">
                        <h4 class="name"><a href="#">{{$item['first_name']}} {{$item['last_name']}}</a></h4>
                        <span class="designation">Science lecturer</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>

</section>

<!--====== Teachers Ends ======-->

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