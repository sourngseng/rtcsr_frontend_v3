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

<section class="top-courses-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="section-title mt-40">
                    <h2 class="title">ទាំងនេះគឺជា <br>ជំនាញពេញនិយម</h2>
                    <p>យើងទាំងអស់គ្នានៅទីនេះដើម្បីអនាគតប្អូនៗ និង​ប្រទេសជាតិ</p>
                </div>
            </div>
        </div>
        <div class="courses-wrapper">
            <div class="row">
                <div class="col-lg-3 col-sm-6 courses-col">
                    <div class="single-courses mt-30 wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.2s">
                        <a href="#" class="category">#Science</a>
                        <h4 class="courses-title"><a href="courses-details.html">Computer Science & Engineering</a></h4>
                        <div class="duration-fee">
                            <p class="duration">Duration: <span> 4 year</span></p>
                            <p class="fee">Fee: <span> $540</span></p>
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
                        <div class="courses-link">
                            <a class="apply" href="#">Online Apply</a>
                            <a class="more" href="courses-details.html">Read more <i
                                    class="fal fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 courses-col">
                    <div class="single-courses mt-30 wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.4s">
                        <a href="#" class="category">#Science</a>
                        <h4 class="courses-title"><a href="courses-details.html">Applied <br> Mathematics</a></h4>
                        <div class="duration-fee">
                            <p class="duration">Duration: <span> 4 year</span></p>
                            <p class="fee">Fee: <span> $540</span></p>
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
                        <div class="courses-link">
                            <a class="apply" href="#">Online Apply</a>
                            <a class="more" href="courses-details.html">Read more <i
                                    class="fal fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 courses-col">
                    <div class="single-courses mt-30 wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.6s">
                        <a href="#" class="category">#Business</a>
                        <h4 class="courses-title"><a href="courses-details.html">Bachelor of Business Administration</a>
                        </h4>
                        <div class="duration-fee">
                            <p class="duration">Duration: <span> 4 year</span></p>
                            <p class="fee">Fee: <span> $540</span></p>
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
                        <div class="courses-link">
                            <a class="apply" href="#">Online Apply</a>
                            <a class="more" href="courses-details.html">Read more <i
                                    class="fal fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 courses-col">
                    <div class="single-courses mt-30 wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.8s">
                        <a href="#" class="category">#Marketing</a>
                        <h4 class="courses-title"><a href="courses-details.html">Social & Digital <br> Marketing</a>
                        </h4>
                        <div class="duration-fee">
                            <p class="duration">Duration: <span> 4 year</span></p>
                            <p class="fee">Fee: <span> $540</span></p>
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
                        <div class="courses-link">
                            <a class="apply" href="#">Online Apply</a>
                            <a class="more" href="courses-details.html">Read more <i
                                    class="fal fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 courses-col">
                    <div class="single-courses mt-30 wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="1s">
                        <a href="#" class="category">#Business</a>
                        <h4 class="courses-title"><a href="courses-details.html">Bachelor of Business Administration</a>
                        </h4>
                        <div class="duration-fee">
                            <p class="duration">Duration: <span> 4 year</span></p>
                            <p class="fee">Fee: <span> $540</span></p>
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
                        <div class="courses-link">
                            <a class="apply" href="#">Online Apply</a>
                            <a class="more" href="courses-details.html">Read more <i
                                    class="fal fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 courses-col">
                    <div class="single-courses mt-30 wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="1.2s">
                        <a href="#" class="category">#Marketing</a>
                        <h4 class="courses-title"><a href="courses-details.html">Social & Digital <br> Marketing</a>
                        </h4>
                        <div class="duration-fee">
                            <p class="duration">Duration: <span> 4 year</span></p>
                            <p class="fee">Fee: <span> $540</span></p>
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
                        <div class="courses-link">
                            <a class="apply" href="#">Online Apply</a>
                            <a class="more" href="courses-details.html">Read more <i
                                    class="fal fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 courses-col">
                    <div class="single-courses mt-30 wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="1.4s">
                        <a href="#" class="category">#Science</a>
                        <h4 class="courses-title"><a href="courses-details.html">Applied <br> Mathematics</a></h4>
                        <div class="duration-fee">
                            <p class="duration">Duration: <span> 4 year</span></p>
                            <p class="fee">Fee: <span> $540</span></p>
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
                        <div class="courses-link">
                            <a class="apply" href="#">Online Apply</a>
                            <a class="more" href="courses-details.html">Read more <i
                                    class="fal fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 courses-col">
                    <div class="single-courses mt-30 wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="1.6s">
                        <a href="#" class="category">#Science</a>
                        <h4 class="courses-title"><a href="courses-details.html">Computer Science & Engineering</a></h4>
                        <div class="duration-fee">
                            <p class="duration">Duration: <span> 4 year</span></p>
                            <p class="fee">Fee: <span> $540</span></p>
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
                        <div class="courses-link">
                            <a class="apply" href="#">Online Apply</a>
                            <a class="more" href="courses-details.html">Read more <i
                                    class="fal fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
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
                                alt="icon">
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
                                alt="icon">
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
                                alt="icon">
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
                        <img src="{{ $item['image'] }}" width="521" height="392" alt="Campus">
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