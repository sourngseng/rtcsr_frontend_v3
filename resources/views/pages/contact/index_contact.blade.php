@extends('layouts.master_front')

@section('title', 'Contact Us')

@section('content')

<!--====== Page Banner Start ======-->

<section class="page-banner">
    <div class="page-banner-bg bg_cover"
        style="background-image: url(https://template.hasthemes.com/edumate-v1/edumate/assets/images/page-banner.webp);">
        <div class="container">
            <div class="banner-content text-center">
                <h2 class="title">Contact</h2>
            </div>
        </div>
    </div>
</section>

<!--====== Page Banner Ends ======-->

<!--====== Contact Start ======-->

<section class="contact-area">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="single-contact-info mt-30">
                    <div class="info-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="info-content">
                        <h5 class="title">Address</h5>
                        <p>ភូមិបន្ទាយចាស់ សង្កាត់ស្លក្រាម ក្រុងសៀមរាប ខេត្តសៀមរាប ខាងកើតផ្សារសាមគ្គី ៧០ម៉ែត្រ</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-contact-info mt-30">
                    <div class="info-icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div class="info-content">
                        <h5 class="title">Phone</h5>
                        <p><a href="tel:+85563766291">+85563 766 291</a></p>
                        <p><a href="tel:+85570788990">+85570 788 990</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-contact-info mt-30">
                    <div class="info-icon">
                        <i class="far fa-globe"></i>
                    </div>
                    <div class="info-content">
                        <h5 class="title">Web</h5>
                        <p><a href="mailto://info@example.com">info@rpitssr.edu.kh</a></p>
                        <p><a href="https://rpitssr.edu.kh">rpitssr.edu.kh</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-form">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-title text-center">
                        <h3 class="title">Leave a message here</h3>
                        <p>Here is our event schedule where you can get information about time schedule about this event
                            so it's very easy for you to manage your time and schedule</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-form-wrapper">
                        <form id="contact-form" action="assets/contact.php" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="single-form">
                                        <input type="text" name="name" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single-form">
                                        <input type="email" name="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single-form">
                                        <input type="text" name="phone" placeholder="Phone">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single-form">
                                        <input type="text" name="subject" placeholder="Subject">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single-form">
                                        <textarea name="message" placeholder="Write here..."></textarea>
                                    </div>
                                </div>
                                <p class="form-message"></p>
                                <div class="col-md-12">
                                    <div class="single-form text-center">
                                        <button class="main-btn">Submit now</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--====== Contact Ends ======-->

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