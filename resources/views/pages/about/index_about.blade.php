@extends('layouts.master_front')

@section('title')
About Us
@endsection


@section('content')


<!--====== Page Banner Start ======-->
<section class="page-banner">
    <div class="page-banner-bg bg_cover" style="background-image: url({{ asset('assets/images/page-banner.webp') }});">
        <div class="container">
            <div class="banner-content text-center">
                <h2 class="title">About Us</h2>
            </div>
        </div>
    </div>
</section>

<!--====== Page Banner Ends ======-->

<!--====== About Start ======-->

<h1 class="text-center m-3">ប្រវត្តិរបស់វិទ្យាស្ថាន</h1>
<div class="container px-4">
    <div class="row gx-5">
        <div class="col">
            <div class="p-3 border bg-light">
                <iframe width="600" height="400" src="https://www.youtube.com/embed/9pKv1_L3IhA"
                    title="វិទ្យាស្ថានពហុបច្ចេកទេសភូមិភាគតេជោសែនសៀមរាប (RPITSSR Long Version)"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>
        </div>
        <div class="col">
            <div class="p-3 border bg-light">
                <p class="fs-4 lh-base">
                    វិទ្យាស្ថានបានបង្កើតឡើងនៅឆ្នាំ១៩៩៣ ក្រោមការ​ឧបត្ថម្ភជំនួយបច្ចេកទេស
                    ​និងថវិកាពី​អង្គការពលកម្ម​អន្តរជាតិ​UNDP/ILO ​
                    (ពីឆ្នាំ១៩៩៣ ដល់ឆ្នាំ១៩៩៨)ដែលមានឈ្មោះថាមជ្ឈមណ្ឌលបណ្តុះបណ្តាលវិជ្ជាជីវៈខេត្តសៀមរាបProvincial​
                    Training​ Center
                    ២/ ពីឆ្នាំ១៩៩៨ ដល់ ២០០៤ ស្ថិតក្រោមការគ្រប់គ្រងរបស់​ក្រសួងអប់រំ យុវជន និងកីឡា
                    ៣/ ពីឆ្នាំ២០០៤ ដល់បច្ចុប្បន្នស្ថិតក្រោមការ​គ្រប់គ្រងរបស់ក្រសួងការងារ និងបណ្តុះបណ្តាលវិជ្ជាជីវៈ
                    ៤/ នៅឆ្នាំ២០១៤ មជ្ឈមណ្ឌលបានតម្លើងកម្រិតបណ្តុះបណ្តាល
                    និងបានប្តូឈ្មោះទៅជាវិទ្យាស្ថានពហុបច្ចេកទេស​ភូមិភាគតេជោសែនសៀមរាបរហូតដល់​បច្ចុប្បន្ន។
                </p>
            </div>
        </div>
    </div>
</div>
<h1 class="text-center m-3">សាររបស់នាយិកាវិទ្យាស្ថាន</h1>
<div class="container">
    <div class="p-3 border bg-light">
        <p class="fs-4 lh-base " style="text-indent: 30px">
            យើងខ្ញុំគណៈគ្រប់គ្រង មានមោទនភាព និងថ្លៃអំណរគុណដល់សិក្ខាកាម សិស្ស
            និស្សិតទាំងអស់ដែលសម្រេចចិត្តយ៉ាងត្រឹមត្រូវជ្រើសរើសយកវិទ្យាស្ថានពហុបច្ចេកទេសភូមិភាគតេជោសែនសៀមរាប
            ក្នុងការសិក្សាជំនាញបច្ចេកទេស និងវិជ្ជាជីវៈ។
            យើងខ្ញុំគណៈគ្រប់គ្រង លោកគ្រូ អ្នកគ្រូទាំងអស់នឹង ខិតខំប្រឹងប្រែង ឱ្យអស់ពីសមត្ថភាព ក្នុងការផ្តល់ចំណេះ ដឹង
            ជំនាញ និងឥរិយាបថសមរម្យ ដល់សិក្ខាកាម សិស្ស និសិត្សប្រកបដោយគុណភាព និងឆ្លើយតបបាននូវតម្រូវការការងារ។
        </p>
    </div>
</div>
<h4 class="text-center m-4">ហេតុអ្វីបានជាសម្រេចចិត្តជ្រើសរើសវិទ្យាស្ថានពហុបច្ចេកទេសភូមិភាគតេជោសែនសៀមរាប?</h4>
<div class="container">
    <div class="p-3 border bg-light">
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <strong>មុនពេលបណ្តុះបណ្តាល</strong>
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        ប្រឹក្សាយោបល់ និងតម្រង់ទិសមុនជ្រើសរើសជំនាញ
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <strong> កំឡុងពេលបណ្តុះបណ្តាល</strong>
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        កម្មសិក្សា និងការងារត្រូវបានធានា
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <strong> ក្រោយពេលបណ្តុះបណ្តាល</strong>
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        កម្មសិក្សា និងការងារត្រូវបានធានា
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<!-- envirenment area start -->
{{--<section class="about-area">--}}
    {{-- <div class="container">--}}
        {{-- <div class="row">--}}
            {{-- <div class="col-lg-5">--}}
                {{-- <div class="about-content mt-40">--}}
                    {{-- <h2 class="about-title">Best <span>Educational</span> Environment</h2>--}}
                    {{-- <span class="line"></span>--}}
                    {{-- <p>Even slightly believable. If you are going use passage of Lorem Ipsum need desire to obtain
                        pain of itself, because it is pain de sires many pain of itself occur for your study <br> <br>
                        Even slightly believable. If you are going use passage of Lorem Ipsum need desir</p>--}}
                    {{-- <a href="#" class="main-btn">Explore</a>--}}
                    {{-- </div>--}}
                {{-- </div>--}}
            {{-- <div class="col-lg-7">--}}
                {{-- <div class="about-image mt-50">--}}
                    {{-- <div class="single-image image-1">--}}
                        {{-- <img
                            src="https://template.hasthemes.com/edumate-v1/edumate/assets/images/about/about-1.webp"
                            width="290" height="290" alt="about">--}}
                        {{-- </div>--}}
                    {{-- <div class="single-image image-2">--}}
                        {{-- <img
                            src="https://template.hasthemes.com/edumate-v1/edumate/assets/images/about/about-2.webp"
                            width="225" height="225" alt="about">--}}
                        {{-- </div>--}}
                    {{-- <div class="single-image image-3">--}}
                        {{-- <img
                            src="https://template.hasthemes.com/edumate-v1/edumate/assets/images/about/about-3.webp"
                            width="190" height="190" alt="about">--}}
                        {{-- </div>--}}
                    {{-- <div class="single-image image-4">--}}
                        {{-- <img
                            src="https://template.hasthemes.com/edumate-v1/edumate/assets/images/about/about-4.webp"
                            width="140" height="140" alt="about">--}}
                        {{-- </div>--}}

                    {{-- <div class="about-icon icon-1">--}}
                        {{-- <img
                            src="https://template.hasthemes.com/edumate-v1/edumate/assets/images/about/icon/icon-1.webp"
                            width="46" height="46" alt="icon">--}}
                        {{-- </div>--}}
                    {{-- <div class="about-icon icon-2">--}}
                        {{-- <img
                            src="https://template.hasthemes.com/edumate-v1/edumate/assets/images/about/icon/icon-2.webp"
                            width="46" height="46" alt="icon">--}}
                        {{-- </div>--}}
                    {{-- <div class="about-icon icon-3">--}}
                        {{-- <img
                            src="https://template.hasthemes.com/edumate-v1/edumate/assets/images/about/icon/icon-3.webp"
                            width="46" height="46" alt="icon">--}}
                        {{-- </div>--}}
                    {{-- <div class="about-icon icon-4">--}}
                        {{-- <img
                            src="https://template.hasthemes.com/edumate-v1/edumate/assets/images/about/icon/icon-4.webp"
                            width="46" height="46" alt="icon">--}}
                        {{-- </div>--}}
                    {{-- </div>--}}
                {{-- </div>--}}
            {{-- </div>--}}
        {{-- </div>--}}
    {{--</section>--}}

<!-- envirenment area end -->

<!--====== Features Start ======-->

{{--<div class="features-area-2 ">--}}
    {{-- <div class="container">--}}
        {{-- <div class="row align-items-center">--}}
            {{-- <div class="col-lg-4">--}}
                {{-- <div class="features-image-2">--}}
                    {{-- <img src="https://template.hasthemes.com/edumate-v1/edumate/assets/images/features-2.webp"
                        width="342" height="524" alt="Features">--}}
                    {{-- </div>--}}
                {{-- </div>--}}
            {{-- <div class="col-lg-8">--}}
                {{-- <div class="features-items">--}}
                    {{-- <div class="features-items-wrapper">--}}
                        {{-- <div class="single-features-item d-flex align-items-center wow fadeInUpBig"
                            data-wow-duration="1s" data-wow-delay="0.2s">--}}
                            {{-- <div class="item-icon">--}}
                                {{-- <img
                                    src="https://template.hasthemes.com/edumate-v1/edumate/assets/images/icon/icon-2-1.webp"
                                    width="70" height="70" alt="Icon">--}}
                                {{-- </div>--}}
                            {{-- <div class="item-content media-body">--}}
                                {{-- <p>250+ <br> Courses</p>--}}
                                {{-- </div>--}}
                            {{-- </div>--}}
                        {{-- <div class="single-features-item d-flex align-items-center wow fadeInUpBig"
                            data-wow-duration="1s" data-wow-delay="0.4s">--}}
                            {{-- <div class="item-icon">--}}
                                {{-- <img
                                    src="https://template.hasthemes.com/edumate-v1/edumate/assets/images/icon/icon-2-2.webp"
                                    width="70" height="70" alt="Icon">--}}
                                {{-- </div>--}}
                            {{-- <div class="item-content media-body">--}}
                                {{-- <p>Skill Based <br> Scholarships</p>--}}
                                {{-- </div>--}}
                            {{-- </div>--}}
                        {{-- <div class="single-features-item d-flex align-items-center wow fadeInUpBig"
                            data-wow-duration="1s" data-wow-delay="0.6s">--}}
                            {{-- <div class="item-icon">--}}
                                {{-- <img
                                    src="https://template.hasthemes.com/edumate-v1/edumate/assets/images/icon/icon-2-3.webp"
                                    width="70" height="70" alt="Icon">--}}
                                {{-- </div>--}}
                            {{-- <div class="item-content media-body">--}}
                                {{-- <p>Online <br> Education</p>--}}
                                {{-- </div>--}}
                            {{-- </div>--}}
                        {{-- </div>--}}

                    {{-- <div class="features-items-wrapper">--}}
                        {{-- <div class="single-features-item d-flex align-items-center wow fadeInUpBig"
                            data-wow-duration="1s" data-wow-delay="0.2s">--}}
                            {{-- <div class="item-icon">--}}
                                {{-- <img
                                    src="https://template.hasthemes.com/edumate-v1/edumate/assets/images/icon/icon-2-4.webp"
                                    width="70" height="70" alt="Icon">--}}
                                {{-- </div>--}}
                            {{-- <div class="item-content media-body">--}}
                                {{-- <p>Expert <br> Teachers</p>--}}
                                {{-- </div>--}}
                            {{-- </div>--}}
                        {{-- <div class="single-features-item d-flex align-items-center wow fadeInUpBig"
                            data-wow-duration="1s" data-wow-delay="0.4s">--}}
                            {{-- <div class="item-icon">--}}
                                {{-- <img
                                    src="https://template.hasthemes.com/edumate-v1/edumate/assets/images/icon/icon-2-5.webp"
                                    width="70" height="70" alt="Icon">--}}
                                {{-- </div>--}}
                            {{-- <div class="item-content media-body">--}}
                                {{-- <p>After Course <br> Certification</p>--}}
                                {{-- </div>--}}
                            {{-- </div>--}}
                        {{-- <div class="single-features-item d-flex align-items-center wow fadeInUpBig"
                            data-wow-duration="1s" data-wow-delay="0.6s">--}}
                            {{-- <div class="item-icon">--}}
                                {{-- <img
                                    src="https://template.hasthemes.com/edumate-v1/edumate/assets/images/icon/icon-2-6.webp"
                                    width="70" height="70" alt="Icon">--}}
                                {{-- </div>--}}
                            {{-- <div class="item-content media-body">--}}
                                {{-- <p>Download <br> Prospectus</p>--}}
                                {{-- </div>--}}
                            {{-- </div>--}}
                        {{-- </div>--}}
                    {{-- </div>--}}
                {{-- </div>--}}
            {{-- </div>--}}
        {{-- </div>--}}
    {{--</div>--}}

<!--====== Features Ends ======-->

<!--====== Campus Visit Start ======-->

{{--<section class="campus-visit-area-3">--}}
    {{-- <div class="container">--}}
        {{-- <div class="campus-visit-wrapper">--}}
            {{-- <div class="campus-content-col">--}}
                {{-- <div class="campus-content">--}}
                    {{-- <h2 class="campus-title">Visit our Campus with image gallery</h2>--}}
                    {{-- <span class="line"></span>--}}
                    {{-- <p>Even slightly believable. If you are going use a passage of Lorem Ipsum need</p>--}}
                    {{-- <h3 class="video-title">or watch video</h3>--}}
                    {{-- <a class="play video-popup" href="https://www.youtube.com/watch?v=0qHWub21h5c"><i
                            class="fas fa-play"></i> <span>Play now</span></a>--}}
                    {{-- </div>--}}
                {{-- </div>--}}
            {{-- <div class="campus-image-col">--}}
                {{-- <div class="campus-image">--}}
                    {{-- <div class=" single-campus">--}}
                        {{-- <img src="https://template.hasthemes.com/edumate-v1/edumate/assets/images/campus-1.webp"
                            width="585" height="392" alt="Campus">--}}
                        {{-- </div>--}}
                    {{-- <div class="single-campus">--}}
                        {{-- <img src="https://template.hasthemes.com/edumate-v1/edumate/assets/images/campus-2.webp"
                            width="585" height="392" alt="Campus">--}}
                        {{-- </div>--}}
                    {{-- </div>--}}
                {{-- </div>--}}
            {{-- </div>--}}
        {{-- </div>--}}
    {{--</section>--}}

<!--====== Campus Visit Ends ======-->

<!--====== Counter Start ======-->

{{--<div class="counter-area-2">--}}
    {{-- <div class="container">--}}
        {{-- <div class="counter-wrapper-2 bg_cover"
            style="background-image: url(https://template.hasthemes.com/edumate-v1/edumate/assets/images/counter-bg-2.webp);">
            --}}
            {{-- <div class="row">--}}
                {{-- <div class="col-sm-3 col-6 counter-col">--}}
                    {{-- <div class="single-counter mt-30">--}}
                        {{-- <span class="counter-count"><span class="count" data-count="3652">0</span> +</span>--}}
                        {{-- <p>Students</p>--}}
                        {{-- </div>--}}
                    {{-- </div>--}}
                {{-- <div class="col-sm-3 col-6 counter-col">--}}
                    {{-- <div class="single-counter mt-30">--}}
                        {{-- <span class="counter-count"><span class="count" data-count="105">0</span> +</span>--}}
                        {{-- <p>Faculties</p>--}}
                        {{-- </div>--}}
                    {{-- </div>--}}
                {{-- <div class="col-sm-3 col-6 counter-col">--}}
                    {{-- <div class="single-counter mt-30">--}}
                        {{-- <span class="counter-count"><span class="count" data-count="120">0</span> +</span>--}}
                        {{-- <p>Branches</p>--}}
                        {{-- </div>--}}
                    {{-- </div>--}}
                {{-- <div class="col-sm-3 col-6 counter-col">--}}
                    {{-- <div class="single-counter mt-30">--}}
                        {{-- <span class="counter-count"><span class="count" data-count="30">0</span> +</span>--}}
                        {{-- <p>Awards win</p>--}}
                        {{-- </div>--}}
                    {{-- </div>--}}
                {{-- </div>--}}
            {{-- </div>--}}
        {{-- </div>--}}
    {{--</div>--}}

<!--====== Counter Ends ======-->

<!--====== Teachers Start ======-->

{{--<section class="teachers-area">--}}
    {{-- <div class="container">--}}
        {{-- <div class="row">--}}
            {{-- <div class="col-lg-8">--}}
                {{-- <div class="section-title mt-40">--}}
                    {{-- <h2 class="title">Meet our Teachers</h2>--}}
                    {{-- <p>Even slightly believable. If you are going use a passage of Lorem Ipsum need</p>--}}
                    {{-- </div>--}}
                {{-- </div>--}}
            {{-- </div>--}}
        {{-- <div class="teachers-wrapper">--}}
            {{-- <div class="row teachers-row">--}}
                {{-- @foreach ($teachers['data'] as $item)--}}
                {{-- <div class="col-md-4 col-sm-6 teachers-col">--}}
                    {{-- <div class="single-teacher mt-80 text-center">--}}
                        {{-- <div class="teacher-social">--}}
                            {{-- <ul class="social">--}}
                                {{-- <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>--}}
                                {{-- <li><a href="#"><i class="fab fa-twitter"></i></a></li>--}}
                                {{-- <li><a href="#"><i class="fab fa-instagram"></i></a></li>--}}
                                {{-- <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>--}}
                                {{-- </ul>--}}
                            {{-- </div>--}}
                        {{-- <div class="teacher-image">--}}
                            {{-- <a href="#">--}}
                                {{-- <img src="{{$item['image']}}" alt="teacher" style="height: 310px;">--}}
                                {{-- </a>--}}
                            {{-- </div>--}}
                        {{-- <div class="teacher-content">--}}
                            {{-- <h4 class="name"><a href="#">{{$item['first_name']}} {{$item['last_name']}}</a></h4>
                            --}}
                            {{-- <span class="designation">Science lecturer</span>--}}
                            {{-- </div>--}}
                        {{-- </div>--}}
                    {{-- </div>--}}
                {{-- @endforeach--}}
                {{-- </div>--}}
            {{-- </div>--}}
        {{-- </div>--}}
    {{--</section>--}}

<!--====== Teachers Ends ======-->

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
                                    <img src="https://template.hasthemes.com/edumate-v1/edumate/assets/images/testimonials-1.webp"
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

{{--
<!--====== Newsletter Start ======-->--}}

{{--<section class="newsletter-area-3">--}}
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