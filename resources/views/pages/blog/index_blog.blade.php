@extends('layouts.master_front')

@section('title', 'Blog')

@section('content')

<!--====== Page Banner Start ======-->

<section class="page-banner">
    <div class="page-banner-bg bg_cover" style="background-image: url({{ asset('images/page_banner.webp') }});">
        <div class="container">
            <div class="banner-content text-center">
                <h2 class="title">Blog</h2>
            </div>
        </div>
    </div>
</section>

<!--====== Page Banner Ends ======-->

<!--====== Blog Start ======-->

<section class="blog-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    @foreach($blogs['data'] as $blog )
                    <div class="col-md-6">
                        <div class="single-blog mt-30">
                            <div class="blog-image">
                                <a href="{{ route('blog-details',$blog['slug'])
                            }}">
                                    <img src="{{ $blog['image']}}" width="370" height="250" alt="{{ $blog['image']}}">
                                </a>
                            </div>
                            <div class="blog-content">
                                <ul class="meta">
                                    <li><a href="#">{{ date('d-m-Y', strtotime($blog['created_at'])) }}</a></li>
                                    <li><a href="#">By: RPITSSR</a></li>
                                    {{-- <li><a href="#">12 Comments</a></li> --}}
                                </ul>
                                <h4 class="blog-title"><a href="{{ route('blog-details',$blog['slug'])
                                }}">{{$blog['title']}}</a></h4>
                                <a href="{{ route('blog-details',$blog['slug'])
                            }}" class="more">Read more <i class="fal fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
                <ul class="pagination-items text-center">
                    <li><a class="active" href="#">01</a></li>
                    <li><a href="#">02</a></li>
                    <li><a href="#">03</a></li>
                    <li><a href="#">04</a></li>
                    <li><a href="#">05</a></li>
                </ul>
            </div>
            <div class="col-lg-4">
                <div class="blog-sidebar right-sidebar">
                    <div class="blog-sidebar-category mt-30">
                        <div class="sidebar-title">
                            <h4 class="title">Categories</h4>
                        </div>
                        <ul class="category-items">
                            <li>
                                <div class="form-radio">
                                    <input type="radio" name="categoryRadio" id="categoryRadio1">
                                    <label for="categoryRadio1"> <span></span> Science <strong>(25)</strong></label>
                                </div>
                            </li>
                            <li>
                                <div class="form-radio">
                                    <input type="radio" name="categoryRadio" id="categoryRadio2">
                                    <label for="categoryRadio2"> <span></span> Marketing <strong>(18)</strong></label>
                                </div>
                            </li>
                            <li>
                                <div class="form-radio">
                                    <input type="radio" name="categoryRadio" id="categoryRadio3">
                                    <label for="categoryRadio3"> <span></span> Design <strong>(10)</strong></label>
                                </div>
                            </li>
                            <li>
                                <div class="form-radio">
                                    <input type="radio" name="categoryRadio" id="categoryRadio4">
                                    <label for="categoryRadio4"> <span></span> Social Marketing
                                        <strong>(05)</strong></label>
                                </div>
                            </li>
                            <li>
                                <div class="form-radio">
                                    <input type="radio" name="categoryRadio" id="categoryRadio5">
                                    <label for="categoryRadio5"> <span></span> Fine Arts <strong>(12)</strong></label>
                                </div>
                            </li>
                            <li>
                                <div class="form-radio">
                                    <input type="radio" name="categoryRadio" id="categoryRadio6">
                                    <label for="categoryRadio6"> <span></span> Law <strong>(05)</strong></label>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="blog-sidebar-post mt-30">
                        <div class="sidebar-title">
                            <h4 class="title">Recent Post</h4>
                        </div>
                        <ul class="post-items">
                            <li>
                                <div class="single-post">
                                    <div class="post-thumb">
                                        <a href="blog-details.html"><img
                                                src="https://template.hasthemes.com/edumate-v1/edumate/assets/images/post-1.webp"
                                                alt=""></a>
                                    </div>
                                    <div class="post-content">
                                        <h4 class="post-title"><a href="blog-details.html">Guest Interview will Occur in
                                                English</a></h4>
                                        <a href="blog-details.html" class="more">Read more <i
                                                class="fal fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="single-post">
                                    <div class="post-thumb">
                                        <a href="blog-details.html"><img
                                                src="https://template.hasthemes.com/edumate-v1/edumate/assets/images/post-2.webp"
                                                alt=""></a>
                                    </div>
                                    <div class="post-content">
                                        <h4 class="post-title"><a href="blog-details.html">Online Courses are available
                                                now</a></h4>
                                        <a href="blog-details.html" class="more">Read more <i
                                                class="fal fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="single-post">
                                    <div class="post-thumb">
                                        <a href="blog-details.html"><img
                                                src="https://template.hasthemes.com/edumate-v1/edumate/assets/images/post-3.webp"
                                                alt=""></a>
                                    </div>
                                    <div class="post-content">
                                        <h4 class="post-title"><a href="blog-details.html">Workshop on English native
                                                Language</a></h4>
                                        <a href="blog-details.html" class="more">Read more <i
                                                class="fal fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="single-post">
                                    <div class="post-thumb">
                                        <a href="blog-details.html"><img
                                                src="https://template.hasthemes.com/edumate-v1/edumate/assets/images/post-4.webp"
                                                alt=""></a>
                                    </div>
                                    <div class="post-content">
                                        <h4 class="post-title"><a href="blog-details.html">How to find resources for
                                                Laravel Language </a></h4>
                                        <a href="blog-details.html" class="more">Read more <i
                                                class="fal fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="blog-sidebar-banner mt-30">
                        <a href="#">
                            <img src="https://template.hasthemes.com/edumate-v1/edumate/assets/images/product/banner.webp"
                                alt="">
                        </a>
                    </div>

                    <div class="blog-sidebar-tags mt-30">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--====== Blog Ends ======-->

@endsection