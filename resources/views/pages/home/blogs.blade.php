<section class="blog-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-9">
                <div class="section-title-2 text-center">
                    <h2 class="title">ពត៌មានថ្មីៗចុងក្រោយ</h2>
                    <span class="line"></span>
                    <p>ខាងក្រោមនេះជាពត៌មានថ្មីៗសំខាន់ៗយ៉ាងតិចចំនួន៣ ដែលបានចុះផ្សាយ។</p>
                </div>
            </div>
        </div>
        <div class="blog-wrapper">
            <div class="row-wrapper blog-active">
                @foreach($blogs['data'] as $blog )
                <div class="custom-col">
                    <div class="single-blog mt-30">
                        <div class="blog-image">
                            <a href="{{ route('blog-details',$blog['slug'])}}">
                                <img src="{{ $blog['image']}}" width="370" height="250" alt="blog">
                            </a>
                        </div>
                        <div class="blog-content">
                            <ul class="meta">
                                <li><a href="#">{{ date('d-m-Y', strtotime($blog['created_at'])) }}</a></li>
                                <li><a href="#">By: RTCSR</a></li>

                            </ul>
                            <h4 class="blog-title"><a
                                    href="{{ route('blog-details',$blog['slug'])}}">{{$blog['title']}}</a></h4>
                            <a href="{{ route('blog-details',$blog['slug'])}}" class="more">Read more <i
                                    class="fal fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>