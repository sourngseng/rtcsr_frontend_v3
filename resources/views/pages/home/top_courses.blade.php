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

                @foreach($top_courses['data'] as $row )
                <div class="col-lg-3 col-sm-6 courses-col">
                    <div class="single-courses mt-30 wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.2s">
                        <a href="#" class="category">#Science</a>
                        <h4 class="courses-title"><a href="#">{{$row['name'] }}</a></h4>
                        <div class="duration-fee">
                            <p class="duration">{{ __('cruds.ht.fields.duration') }}: <span> {{ $row['duration'] }} {{
                                    __('global.year') }}</span></p>
                            {{-- <p class="fee">Fee: <span> $540</span></p> --}}
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
                            <a class="apply" href="#">ចុះឈ្មោះឥលូវ</a>
                            <a class="more" href="#">អានបន្ថែម <i class="fal fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach

                {{-- <div class="col-lg-3 col-sm-6 courses-col">
                    <div class="single-courses mt-30 wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.4s">
                        <a href="#" class="category">#Finacne</a>
                        <h4 class="courses-title"><a href="#">គណនេយ្យ និងហិរញ្ញវត្ថុ</a></h4>
                        <div class="duration-fee">
                            <p class="duration">រយះពេល: <span> ៤ ឆ្នាំ</span></p>
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
                            <a class="apply" href="#">ចុះឈ្មោះឥលូវ</a>
                            <a class="more" href="#">អានបន្ថែម <i class="fal fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 courses-col">
                    <div class="single-courses mt-30 wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.6s">
                        <a href="#" class="category">#អគ្គិសនី</a>
                        <h4 class="courses-title"><a href="#">អគ្គិសនី និងអេឡិចត្រូនិច</a>
                        </h4>
                        <div class="duration-fee">
                            <p class="duration">រយះពេល: <span> ៥ ឆ្នាំ</span></p>
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
                            <a class="apply" href="#">ចុះឈ្មោះឥលូវ</a>
                            <a class="more" href="#">អានបន្ថែម <i class="fal fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 courses-col">
                    <div class="single-courses mt-30 wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.8s">
                        <a href="#" class="category">#សំណង់ស៊ីវីល</a>
                        <h4 class="courses-title"><a href="#">ស្ថាបត្យកម្ម និងសំណង់</a>
                        </h4>
                        <div class="duration-fee">
                            <p class="duration">រយះពេល: <span> ៤ ឆ្នាំ</span></p>

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
                            <a class="apply" href="#">ចុះឈ្មោះឥលូវ</a>
                            <a class="more" href="#">អានបន្ថែម <i class="fal fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div> --}}


            </div>
        </div>
    </div>
</section>