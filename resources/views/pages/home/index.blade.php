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
                    <div class="specialty-box">
                        <div class="box-icon">
                            <img src="{{asset('frontend')}}/assets/images/icon/icon-1.webp" width="70" height="70"
                                alt="icon">
                        </div>
                        <div class="box-content">
                            <p>Skill Based Scholarships</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="single-specialty active mt-30">
                    <div class="specialty-box">
                        <div class="box-icon">
                            <img src="{{asset('frontend')}}/assets/images/icon/icon-2.webp" width="70" height="70"
                                alt="icon">
                        </div>
                        <div class="box-content">
                            <p>Download Prospectus</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="single-specialty mt-30">
                    <div class="specialty-box">
                        <div class="box-icon">
                            <img src="{{asset('frontend')}}/assets/images/icon/icon-3.webp" width="70" height="70"
                                alt="icon">
                        </div>
                        <div class="box-content">
                            <p>After Course Certification</p>
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
    <div class="container">
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

<section class="event-area">
    <div class="container">
        <div class="event-title-tab-menu">
            <div class="event-title mt-40">
                <h2 class="title">Up Coming <br> Events</h2>
            </div>

            <div class="event-tab-menu mt-40">
                <ul class="nav">
                    <li><a class="active" data-bs-toggle="tab" href="#courses">Courses</a></li>
                    <li><a data-bs-toggle="tab" href="#admission">Admission</a></li>
                    <li><a data-bs-toggle="tab" href="#training">Training</a></li>
                </ul>
            </div>
        </div>
        <div class="tab-content event-tab-items wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.2s">
            <div class="tab-pane fade show active" id="courses">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-event text-center mt-30">
                            <span class="time">10.35 am to 1.00 pm</span>
                            <span class="date">25 May, 2020</span>
                            <h4 class="event-title"><a href="event-details.html">Micro Biological Workshop</a></h4>
                            <p class="place">Place: Central Hall, New York</p>
                            <a href="#" class="more">Read more <i class="far fa-chevron-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-event text-center mt-30">
                            <span class="time">10.35 am to 1.00 pm</span>
                            <span class="date">25 May, 2020</span>
                            <h4 class="event-title"><a href="event-details.html">Micro Biological Workshop</a></h4>
                            <p class="place">Place: Central Hall, New York</p>
                            <a href="#" class="more">Read more <i class="far fa-chevron-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-event text-center mt-30">
                            <span class="time">10.35 am to 1.00 pm</span>
                            <span class="date">25 May, 2020</span>
                            <h4 class="event-title"><a href="event-details.html">Micro Biological Workshop</a></h4>
                            <p class="place">Place: Central Hall, New York</p>
                            <a href="#" class="more">Read more <i class="far fa-chevron-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-event text-center mt-30">
                            <span class="time">10.35 am to 1.00 pm</span>
                            <span class="date">25 May, 2020</span>
                            <h4 class="event-title"><a href="event-details.html">Micro Biological Workshop</a></h4>
                            <p class="place">Place: Central Hall, New York</p>
                            <a href="#" class="more">Read more <i class="far fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="admission">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-event text-center mt-30">
                            <span class="time">10.35 am to 1.00 pm</span>
                            <span class="date">25 May, 2020</span>
                            <h4 class="event-title"><a href="event-details.html">Micro Biological Workshop</a></h4>
                            <p class="place">Place: Central Hall, New York</p>
                            <a href="#" class="more">Read more <i class="far fa-chevron-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-event text-center mt-30">
                            <span class="time">10.35 am to 1.00 pm</span>
                            <span class="date">25 May, 2020</span>
                            <h4 class="event-title"><a href="event-details.html">Micro Biological Workshop</a></h4>
                            <p class="place">Place: Central Hall, New York</p>
                            <a href="#" class="more">Read more <i class="far fa-chevron-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-event text-center mt-30">
                            <span class="time">10.35 am to 1.00 pm</span>
                            <span class="date">25 May, 2020</span>
                            <h4 class="event-title"><a href="event-details.html">Micro Biological Workshop</a></h4>
                            <p class="place">Place: Central Hall, New York</p>
                            <a href="#" class="more">Read more <i class="far fa-chevron-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-event text-center mt-30">
                            <span class="time">10.35 am to 1.00 pm</span>
                            <span class="date">25 May, 2020</span>
                            <h4 class="event-title"><a href="event-details.html">Micro Biological Workshop</a></h4>
                            <p class="place">Place: Central Hall, New York</p>
                            <a href="#" class="more">Read more <i class="far fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="training">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-event text-center mt-30">
                            <span class="time">10.35 am to 1.00 pm</span>
                            <span class="date">25 May, 2020</span>
                            <h4 class="event-title"><a href="event-details.html">Micro Biological Workshop</a></h4>
                            <p class="place">Place: Central Hall, New York</p>
                            <a href="#" class="more">Read more <i class="far fa-chevron-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-event text-center mt-30">
                            <span class="time">10.35 am to 1.00 pm</span>
                            <span class="date">25 May, 2020</span>
                            <h4 class="event-title"><a href="event-details.html">Micro Biological Workshop</a></h4>
                            <p class="place">Place: Central Hall, New York</p>
                            <a href="#" class="more">Read more <i class="far fa-chevron-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-event text-center mt-30">
                            <span class="time">10.35 am to 1.00 pm</span>
                            <span class="date">25 May, 2020</span>
                            <h4 class="event-title"><a href="event-details.html">Micro Biological Workshop</a></h4>
                            <p class="place">Place: Central Hall, New York</p>
                            <a href="#" class="more">Read more <i class="far fa-chevron-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-event text-center mt-30">
                            <span class="time">10.35 am to 1.00 pm</span>
                            <span class="date">25 May, 2020</span>
                            <h4 class="event-title"><a href="event-details.html">Micro Biological Workshop</a></h4>
                            <p class="place">Place: Central Hall, New York</p>
                            <a href="#" class="more">Read more <i class="far fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="view-btn text-center">
                <a href="#" class="view-more">View More <i class="fal fa-chevron-right"></i></a>
            </div>
        </div>
    </div>
</section>

<!--====== Event Ends ======-->

<!--====== Testimonials Start ======-->

<section class="testimonials-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4">
                <div class="testimonials-title">
                    <h2 class="title">Our Students Review</h2>
                    <span class="line"></span>
                    <p>Even slightly believable. If you are going use a passage of Lorem Ipsum need desire to obtain
                        pain of itself, because it is pain de sires to obtain pain of itself occur</p>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="testimonials-wrapper">
                    <div class="testimonials-shape shape-1"></div>
                    <div class="testimonials-shape shape-2"></div>
                    <div class="testimonials-shape shape-3"></div>

                    <div class="row no-gutters">
                        <div class="col-lg-6 col-md-5">
                            <div class="testimonials-image">
                                <div class="single-testimonial-image">
                                    <img src="https://template.hasthemes.com/edumate-v1/edumate/assets/images/testimonials-1.webp"
                                        width="313" height="579" alt="testimonials">
                                </div>
                                <div class="single-testimonial-image">
                                    <img src="https://template.hasthemes.com/edumate-v1/edumate/assets/images/testimonials-2.webp"
                                        width="313" height="579" alt="testimonials">
                                </div>
                                <div class="single-testimonial-image">
                                    <img src="https://template.hasthemes.com/edumate-v1/edumate/assets/images/testimonials-3.webp"
                                        width="313" height="579" alt="testimonials">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-7">
                            <div class="testimonials-content">
                                <div class="single-testimonial-content">
                                    <div class="content-text">
                                        <i class="fas fa-quote-right"></i>
                                        <p>Best pleasure rationally encounter consequences that are very nice a again is
                                            there anyone who loves or desires to obtain pain of itself</p>
                                    </div>
                                    <div class="content-meta">
                                        <p class="name">Alex Smith</p>
                                        <p class="designation">CEO, Xelopex Group</p>
                                    </div>
                                </div>
                                <div class="single-testimonial-content">
                                    <div class="content-text">
                                        <i class="fas fa-quote-right"></i>
                                        <p>Best pleasure rationally encounter consequences that are very nice a again is
                                            there anyone who loves or desires to obtain pain of itself</p>
                                    </div>
                                    <div class="content-meta">
                                        <p class="name">Alex Smith</p>
                                        <p class="designation">CEO, Xelopex Group</p>
                                    </div>
                                </div>
                                <div class="single-testimonial-content">
                                    <div class="content-text">
                                        <i class="fas fa-quote-right"></i>
                                        <p>Best pleasure rationally encounter consequences that are very nice a again is
                                            there anyone who loves or desires to obtain pain of itself</p>
                                    </div>
                                    <div class="content-meta">
                                        <p class="name">Alex Smith</p>
                                        <p class="designation">CEO, Xelopex Group</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--====== Testimonials Ends ======-->

<!--====== Counter Start ======-->

<div class="counter-area">
    <div class="container">
        <div class="counter-wrapper bg_cover"
            style="background-image: url({{asset('frontend')}}/assets/images/counter-bg.webp);">
            <div class="row">
                <div class="col-sm-3 col-6 counter-col">
                    <div class="single-counter mt-30 wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.2s">
                        <span class="counter-count"><span class="count" data-count="3652">0</span> +</span>
                        <p>Students</p>
                    </div>
                </div>
                <div class="col-sm-3 col-6 counter-col">
                    <div class="single-counter mt-30 wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.4s">
                        <span class="counter-count"><span class="count" data-count="105">0</span> +</span>
                        <p>Faculties</p>
                    </div>
                </div>
                <div class="col-sm-3 col-6 counter-col">
                    <div class="single-counter mt-30 wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.6s">
                        <span class="counter-count"><span class="count" data-count="120">0</span> +</span>
                        <p>Branches</p>
                    </div>
                </div>
                <div class="col-sm-3 col-6 counter-col">
                    <div class="single-counter mt-30 wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.8s">
                        <span class="counter-count"><span class="count" data-count="30">0</span> +</span>
                        <p>Awards win</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--====== Counter Ends ======-->

<!--====== Blog Start ======-->

<section class="blog-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-9">
                <div class="section-title-2 text-center">
                    <h2 class="title">Latest Blog Post</h2>
                    <span class="line"></span>
                    <p>Even slightly believable. If you are going use a passage of Lorem Ipsum need some</p>
                </div>
            </div>
        </div>
        <div class="blog-wrapper">
            <div class="row-wrapper blog-active">
                <div class="custom-col">
                    <div class="single-blog mt-30">
                        <div class="blog-image">
                            <a href="blog-details.html">
                                <img src="https://template.hasthemes.com/edumate-v1/edumate/assets/images/blog-1.webp"
                                    width="370" height="250" alt="blog">
                            </a>
                        </div>
                        <div class="blog-content">
                            <ul class="meta">
                                <li><a href="#">25 May, 2020</a></li>
                                <li><a href="#">By: Alex</a></li>
                                <li><a href="#">12 Comments</a></li>
                            </ul>
                            <h4 class="blog-title"><a href="blog-details.html">Latest Micro Biological basic Workshop
                                    for Research</a></h4>
                            <a href="blog-details.html" class="more">Read more <i class="fal fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="custom-col">
                    <div class="single-blog mt-30">
                        <div class="blog-image">
                            <a href="blog-details.html">
                                <img src="https://template.hasthemes.com/edumate-v1/edumate/assets/images/blog-2.webp"
                                    width="370" height="250" alt="blog">
                            </a>
                        </div>
                        <div class="blog-content">
                            <ul class="meta">
                                <li><a href="#">25 May, 2020</a></li>
                                <li><a href="#">By: Alex</a></li>
                                <li><a href="#">12 Comments</a></li>
                            </ul>
                            <h4 class="blog-title"><a href="blog-details.html">Latest Micro Biological basic Workshop
                                    for Research</a></h4>
                            <a href="blog-details.html" class="more">Read more <i class="fal fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="custom-col">
                    <div class="single-blog mt-30">
                        <div class="blog-image">
                            <a href="blog-details.html">
                                <img src="https://template.hasthemes.com/edumate-v1/edumate/assets/images/blog-3.webp"
                                    width="370" height="250" alt="blog">
                            </a>
                        </div>
                        <div class="blog-content">
                            <ul class="meta">
                                <li><a href="#">25 May, 2020</a></li>
                                <li><a href="#">By: Alex</a></li>
                                <li><a href="#">12 Comments</a></li>
                            </ul>
                            <h4 class="blog-title"><a href="blog-details.html">Latest Micro Biological basic Workshop
                                    for Research</a></h4>
                            <a href="blog-details.html" class="more">Read more <i class="fal fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--====== Blog Ends ======-->

<!--====== Newsletter Start ======-->

<section class="newsletter-area">
    <div class="container">
        <div class="newsletter-wrapper bg_cover wow zoomIn" data-wow-duration="1s" data-wow-delay="0.2s"
            style="background-image: url({{asset('frontend')}}/assets/images/newsletter-bg-1.webp);">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="section-title-2 mt-25">
                        <h2 class="title">Subscribe our Newsletter</h2>
                        <span class="line"></span>
                        <p>Even slightly believable. If you are going use a passage of Lorem Ipsum need some</p>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="newsletter-form mt-30">
                        <form action="#">
                            <input type="text" placeholder="Enter your email here">
                            <button class="main-btn main-btn-2">Subscribe now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--====== Newsletter Ends ======-->



<!--====== BACK TOP TOP PART START ======-->

<a href="#" class="back-to-top"><i class="fal fa-chevron-up"></i></a>

<!--====== BACK TOP TOP PART ENDS ======-->

@endsection