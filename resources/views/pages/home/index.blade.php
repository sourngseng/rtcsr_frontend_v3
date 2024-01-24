@extends('layouts.master_front')

@section('title')
Welcome to RPITSSR
@endsection


@section('content')
<!--====== Slider Start ======-->

@include('pages.home.home_slider')

<!--====== Slider Ends ======-->

<!--====== Features Start ======-->

@include('pages.home.home_feature')

<!--====== Features Ends ======-->

<!--====== Top Courses Start ======-->

@include('pages.home.top_courses')
<!--====== Top Courses Ends ======-->

<!--====== Specialty Start ======-->

<div class="specialty-area">
    <div class="container">
        <div class="row no-gutters wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.2s">
            <div class="col-sm-4">
                <div class="single-specialty mt-30">
                    <div class="specialty-box single-courses">
                        <div class="box-icon">
                            <img src="{{asset('frontend')}}/assets/images/icon/icon-1.webp" width="70" height="70"
                                alt="icon" onerror="onErrorImage(event)">
                        </div>
                        <div class="box-content">
                            <p>ជ្រើសរើសជំនាញ អ្នកចូលចិត្ត</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="single-specialty active mt-30">
                    <div class="specialty-box single-courses">
                        <div class="box-icon">
                            <img src="{{asset('frontend')}}/assets/images/icon/icon-2.webp" width="70" height="70"
                                alt="icon" onerror="onErrorImage(event)">
                        </div>
                        <div class="box-content">
                            <p>ទទួលការបណ្តុះបណ្តាល</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="single-specialty mt-30">
                    <div class="specialty-box single-courses">
                        <div class="box-icon">
                            <img src="{{asset('frontend')}}/assets/images/icon/icon-3.webp" width="70" height="70"
                                alt="icon" onerror="onErrorImage(event)">
                        </div>
                        <div class="box-content">
                            <p>ទទួលលិខិតបញ្ជាក់ ឬសញ្ញាបត្រ</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--====== Specialty Ends ======-->

<!--====== Campus Visit Start ======-->

<section class="campus-visit-area">
    <div class="container single-courses">
        <div class="campus-visit-wrapper">
            <div class="campus-image-col">
                <div class="campus-image">
                    @foreach ($galleries['data'] as $item)
                    <div class=" single-campus">
                        <img src="{{ $item['image'] }}" width="521" height="392" alt="Campus"
                            onerror="onErrorImage(event)">
                    </div>
                    @endforeach
                    {{-- <div class="single-campus">
                        <img src="https://template.hasthemes.com/edumate-v1/edumate/assets/images/campus-1.webp"
                            width="521" height="392" alt="Campus">
                    </div> --}}
                </div>
            </div>
            <div class="campus-content-col">
                <div class="campus-content">
                    <h2 class="campus-title">ទស្សនា​នូវ​វិចិត្រសាល សកម្មភាពរបស់យើង</h2>
                    <span class="line"></span>
                    <p>នៅមានសកម្មភាពជាច្រើនទៀតដែលយើងបានធ្វើជាមួយសិស្ស និស្សិត</p>
                    <h3 class="video-title">ឬអាចមើលវីដេអូ</h3>
                    <a class="play video-popup" href="https://www.youtube.com/watch?v=9pKv1_L3IhA"><i
                            class="fas fa-play"></i> <span>ទស្សនាឥលូវនេះ</span></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!--====== Campus Visit Ends ======-->

<!--====== Event Start ======-->

{{-- @include('pages.event.events') --}}

<!--====== Event Ends ======-->

<!--====== Testimonials Start ======-->

@include('pages.testimonial.testimonial')

<!--====== Testimonials Ends ======-->

<!--====== Counter Start ======-->

@include('pages.home.counter')

<!--====== Counter Ends ======-->

<!--====== Blog Start ======-->

@include('pages.home.blogs')

<!--====== Blog Ends ======-->

<!--====== Newsletter Start ======-->

@include('pages.home.newsletter')

<!--====== Newsletter Ends ======-->



<!--====== BACK TOP TOP PART START ======-->

<a href="#" class="back-to-top"><i class="fal fa-chevron-up"></i></a>

<!--====== BACK TOP TOP PART ENDS ======-->

@endsection