@extends('layouts.master_front')
@section('title')
List all ours courses
@endsection

@section('content')
<!--====== Page Banner Start ======-->

<section class="page-banner">
    <div class="page-banner-bg bg_cover" style="background-image: url({{ asset('images/page_banner.webp') }});">
        <div class="container">
            <div class="banner-content text-center">
                <h2 class="title">{{ trans('langs.menus.courses') }}</h2>
            </div>
        </div>
    </div>
</section>

<!--====== Page Banner Ends ======-->

<!--====== Top Course Start ======-->

<section class="top-courses-area">
    <div class="container">
        <div class="courses-bar">
            <div class="row">
                <div class="col-lg-6">
                    <div class="courses-tab">
                        <ul class="nav">
                            <li><a data-bs-toggle="tab" href="#grid"><i class="fas fa-th-large"></i></a></li>
                            <li><a class="active" data-bs-toggle="tab" href="#list"><i class="fas fa-list"></i></a></li>
                        </ul>
                        {{-- <p>Showing 1 - 16 of 36 results</p> --}}
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="courses-bar-form">
                        <div class="courses-select">
                            {{-- <select id="selectbox1">
                                <option value="0">Newly published</option>
                                <option value="1">Month 01</option>
                                <option value="2">Month 02</option>
                                <option value="3">Month 03</option>
                                <option value="4">Month 04</option>
                                <option value="5">Month 05</option>
                            </select> --}}
                        </div>
                        <div class="courses-search">
                            <input type="text" placeholder="Search courses">
                            <i class="far fa-search"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-content">
            <div class="tab-pane fade" id="grid">
                <div class="courses-wrapper wrapper-2">
                    <div class="row">
                        @foreach ($page_courses['cours_pages'] as $item)
                        <div class="col-lg-3 col-sm-6 courses-col">
                            <div class="single-courses-2 mt-30">
                                <div class="courses-image">
                                    <a href="#">
                                        <img src="{{ $item['image']}}" width="270" height="170" alt="courses">
                                    </a>
                                </div>
                                <div class="courses-content">
                                    <a href="#" class="category">#{{ $item['category_name'] }}</a>
                                    <h4 class="courses-title"><a href="courses-details/{{ $item['id'] }}">{{
                                            $item['name'] }}</a>
                                    </h4>
                                    <div class="duration-rating">
                                        <div class="duration-fee">
                                            <p class="duration">Duration: <span> {{ $item['duration'] }} year</span></p>
                                            <p class="fee">Fee: <span> ${{ $item['fee'] }}</span></p>
                                        </div>
                                        <div class="rating">
                                            <span>Rating: </span>
                                            <ul class="star">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="courses-link">
                                        <a class="apply" href="#">Online Apply</a>
                                        <a class="more" href="#">Read more <i class="fal fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
            <div class="tab-pane fade show active" id="list">
                <div class="courses-wrapper wrapper-2">
                    @foreach ($page_courses['cours_pages'] as $item)
                    <div class="courses-col">
                        <div class="single-courses-2 courses-list mt-30">
                            <div class="courses-image">
                                <a href="#"><img src="{{ $item['image'] }}" width="320" height="300" alt="courses"></a>
                            </div>
                            <div class="courses-content">
                                <p class="courses-fee">Fee: <span> ${{ $item['fee'] }}</span></p>

                                <div class="courses-content-wrapper">
                                    <h4 class="courses-title"><a href="{{ route('courses-detail',$item['id']) }}">{{
                                            $item['name'] }}</a></h4>
                                    <div class="duration-rating">
                                        <div class="duration-fee">
                                            <p class="duration">Duration: <span> {{ $item['duration'] }} year</span></p>
                                            <p class="credit">Credit: 63</p>
                                        </div>
                                        <div class="rating">
                                            <span>Rating: </span>
                                            <ul class="star">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="courses-link">
                                        <a class="apply" href="#">Online Apply</a>
                                        <a class="more" href="#">Read more <i class="fal fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>


        {{-- <ul class="pagination-items text-center">
            <li><a class="active" href="#">01</a></li>
            <li><a href="#">02</a></li>
            <li><a href="#">03</a></li>
            <li><a href="#">04</a></li>
            <li><a href="#">05</a></li>
        </ul> --}}
    </div>
</section>

<!--====== Top Course Ends ======-->

<!--====== Newsletter Start ======-->

<section class="newsletter-area-2">
    <div class="container">
        <div class="newsletter-wrapper bg_cover rounded"
            style="background-image: url({{ asset('images/page_banner.webp') }});">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="section-title-2 mt-25">
                        <h2 class="title text-white">Subscribe our Newsletter</h2>
                        <span class="line"></span>
                        <p class="text text-white">Even slightly believable. If you are going use a passage of Lorem
                            Ipsum need some</p>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="newsletter-form mt-30">
                        <form action="#">
                            <input type="text" class="rounded-pill" placeholder="Enter your email here">
                            <button class="main-btn main-btn-3">Subscribe now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--====== Newsletter Ends ======-->
@endsection