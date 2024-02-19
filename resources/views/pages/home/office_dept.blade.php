@extends('layouts.master_front')

@section('title', $office_detail['data'][0]['title'])

@section('content')

<!--====== Page Banner Start ======-->

<section class="page-banner">
    <div class="page-banner-bg bg_cover" style="background-image: url({{ asset('images/page_banner.webp') }});">
        <div class="container">
            <div class="banner-content text-center mt-5">
                <h2 class="title mt-5 pt-5">{{ $office_detail['data'][0]['title'] }}</h2>
            </div>
        </div>
    </div>
</section>

<!--====== Page Banner Ends ======-->



<!--====== Blog Details Start ======-->

<section class="blog-details-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="blog-details-content">
                    @foreach ($office_detail['data'] as $blog)
                    <div class="details-content mt-50">
                        <img src="{{ $blog['image'] }}" width="771" height="439" alt="Blog Detaisl">
                        <ul class="meta">
                            <li><a href="#">{{ date('d-m-Y', strtotime($blog['created_at'])) }}</a></li>
                            <li><a href="#">By: RPITSSR</a></li>
                            {{-- <li><a href="#">12 Comments</a></li> --}}
                        </ul>
                        <h3 class="title">{{ $blog['title'] }}</h3>

                        {!! $blog['detail'] !!}

                    </div>

                    @endforeach
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog-sidebar right-sidebar pt-20">
                    <div class="blog-sidebar-category mt-30">
                        <div class="sidebar-title">
                            <h4 class="title">{{ __('Categories') }}</h4>
                        </div>
                        <ul class="category-items">
                            @foreach ($blog_categories['blog_categories'] as $item)
                            <li>
                                <div class="form-radio">
                                    <input type="radio" name="categoryRadio" id="bg_category_{{ $item['id'] }}">
                                    <label for="bg_category_{{ $item['id'] }}"> <span></span> {{ $item['title'] }}
                                        {{-- <strong>(25)</strong> --}}
                                    </label>
                                </div>
                            </li>
                            @endforeach
                    </div>

                    <div class="blog-sidebar-post mt-30">
                        <div class="sidebar-title">
                            <h4 class="title">Recent Post</h4>
                        </div>
                        <ul class="post-items">
                            @foreach ($blogs['data'] as $item)
                            <li>
                                <div class="single-post">
                                    <div class="post-thumb">
                                        <a href="{{ route('blog-details', $item['slug']) }}">
                                            <img style="width: 64px !important;" src="{{ $item['image'] }}" alt="">
                                        </a>
                                    </div>
                                    <div class="post-content">
                                        <h4 class="post-title">
                                            <a class="two-line-ellipsis"
                                                href="{{ route('blog-details', $item['slug']) }}">
                                                {{ $item['title'] }}
                                            </a>
                                        </h4>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="blog-sidebar-banner mt-30">
                        <a href="#">
                            <img src="{{ asset('images') }}/ads_001.jpg" width="326" height="374" alt="Banner">
                        </a>
                    </div>

                    {{-- <div class="blog-sidebar-tags mt-30">
                        <div class="sidebar-title">
                            <h4 class="title">Tags</h4>
                        </div>
                        <ul class="tags-items">
                            <li><a href="#">Books</a></li>
                            <li><a href="#">Event</a></li>
                            <li><a href="#">Pen</a></li>
                            <li><a href="#">Bags</a></li>
                            <li><a href="#">Pencil</a></li>
                            <li><a href="#">Stationary</a></li>
                            <li><a href="#">Science</a></li>
                            <li><a href="#">Art</a></li>
                            <li><a href="#">Fashion</a></li>
                            <li><a href="#">ecommerce</a></li>
                            <li><a href="#">Library</a></li>
                            <li><a href="#">Shopping</a></li>
                        </ul>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</section>

<!--====== Blog Details Ends ======-->

@endsection