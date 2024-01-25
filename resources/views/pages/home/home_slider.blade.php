<section class="slider-area slider-active">
    {{-- @dd($slides['data']) --}}
    @foreach($slides['data'] as $slider )
    <div class="single-slider d-flex align-items-center bg_cover "
        style="background-image: url({{$slider['image']}});background-size: cover;">
        {{-- <div class="container">
            <div class="slider-content">
                <h1 class="text-primary" data-animation="fadeInLeft" data-delay="0.2s">{{$slider['title']}}</h1>
                <h1 class="text-primary" data-animation="fadeInLeft" data-delay="0.2s">{{$slider['description']}}</h1>
                <ul class="slider-btn">
                    <li><a data-animation="fadeInUp" data-delay="0.6s" class="main-btn main-btn-2" href="/courses">View
                            Courses</a></li>
                    <li><a data-animation="fadeInUp" data-delay="1s" class="main-btn" href="#">Learn more</a></li>
                </ul>
            </div>
        </div> --}}
    </div>
    @endforeach


</section>