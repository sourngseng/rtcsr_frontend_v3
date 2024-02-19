@extends('layouts.master_front')

@section('title', $blog_detail['data'][0]['title'] )

@section('content')

<!--====== Page Banner Start ======-->

<section class="page-banner">
    <div class="page-banner-bg bg_cover" style="background-image: url({{ asset('images/page_banner.webp') }});">
        <div class="container">
            <div class="banner-content text-center">
                {{-- <h2 class="title">{{ $blog_detail['data'][0]['title'] }}</h2> --}}
                <h2 class="title">{{ __('langs.menus.blogs') }}</h2>
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
                    @foreach ($blog_detail['data'] as $blog)
                    <div class="details-content mt-50">
                        <img src="{{ $blog['image'] }}" width="771" height="439" alt="Blog Detaisl">
                        <ul class="meta">
                            <li><a href="#">{{ date('d-m-Y', strtotime($blog['created_at'])) }}</a></li>
                            <li><a href="#">By: RPITSSR</a></li>
                            {{-- <li><a href="#">12 Comments</a></li> --}}
                        </ul>
                        <h3 class="title">{{ $blog['title'] }}</h3>

                        {!! $blog['detail'] !!}

                        {{-- <ul class="blog-list">
                            <li>
                                <i class="far fa-check-circle"></i>
                                <p>Bachelor of Business Administration(BBA) If you are going use a passage of blame
                                    belongs to those who fail in their duty through weakness </p>
                            </li>
                            <li>
                                <i class="far fa-check-circle"></i>
                                <p>Bachelor of Business Administration(BBA) If you are going use a passage of blame
                                    belongs to those who fail in their duty through weakness </p>
                            </li>
                            <li>
                                <i class="far fa-check-circle"></i>
                                <p>Bachelor of Business Administration(BBA) If you are going use a passage of blame
                                    belongs to those who fail in their duty through weakness </p>
                            </li>
                        </ul>

                        <p>Bachelor of Business Administration(BBA) If you are going use a passage of Lorem Ipsum blame
                            belongs to those who fail in their duty through weakness of will, which is the same as
                            through shrinking from toil and pain. These cases are perfectly simple and easy</p>

                        <div class="blog-tags">
                            <span>Tags:</span>
                            <ul class="tags">
                                <li><a href="#">Education,</a></li>
                                <li><a href="#">University,</a></li>
                                <li><a href="#">MBA,</a></li>
                                <li><a href="#">BBA</a></li>
                            </ul>
                        </div> --}}

                    </div>

                    @endforeach

                    {{-- <div class="blog-comment">
                        <h3 class="comment-title">Comments(03)</h3>

                        <ul class="comment-items">
                            <li>
                                <div class="single-comment">
                                    <div class="comment-author">
                                        <img src="assets/images/author-1.webp" width="106" height="106" alt="author">
                                    </div>
                                    <div class="comment-content">
                                        <div class="meta">
                                            <h5 class="name">Alex Smith,</h5>
                                            <span class="time">1 hour ago</span>
                                        </div>
                                        <p>Some of the people may be the right If you are going use a passage belongs to
                                            those who fail in their duty through weakness </p>
                                        <a href="#" class="reply">Reply</a>
                                    </div>
                                </div>
                                <ul class="comment-reply">
                                    <li>
                                        <div class="single-comment">
                                            <div class="comment-author">
                                                <img src="assets/images/author-2.webp" width="106" height="106"
                                                    alt="author">
                                            </div>
                                            <div class="comment-content">
                                                <div class="meta">
                                                    <h5 class="name">Alex Smith,</h5>
                                                    <span class="time">1 hour ago</span>
                                                </div>
                                                <p>Some of the people may be the right If you are going use a passage
                                                    belongs to those who fail in their duty through weakness </p>
                                                <a href="#" class="reply">Reply</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <div class="single-comment">
                                    <div class="comment-author">
                                        <img src="assets/images/author-3.webp" width="106" height="106" alt="author">
                                    </div>
                                    <div class="comment-content">
                                        <div class="meta">
                                            <h5 class="name">Alex Smith,</h5>
                                            <span class="time">1 hour ago</span>
                                        </div>
                                        <p>Some of the people may be the right If you are going use a passage belongs to
                                            those who fail in their duty through weakness </p>
                                        <a href="#" class="reply">Reply</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="blog-comment">
                        <h3 class="comment-title">Leave a message here</h3>

                        <p>Here is our event schedule where you can get information about time schedule about this event
                            so it's very easy for you to manage your time and schedule</p>

                        <div class="comment-form">
                            <form action="#">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="single-form">
                                            <input type="text" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single-form">
                                            <input type="email" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single-form">
                                            <input type="text" placeholder="Phone">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single-form">
                                            <input type="text" placeholder="Title">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="single-form">
                                            <textarea placeholder="Write here..."></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="single-form">
                                            <button class="main-btn">Submit now</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div> --}}
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