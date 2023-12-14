<!--====== Header Start ======-->
<header class="header-area">
    <div class="header-top pt-4">
        <div class="container">
            <div class="header-top-wrapper d-flex flex-wrap justify-content-sm-between">
                <div class="header-top-left">
                    <ul class="header-meta">
                        <li>
                            <a href="mailto://info@rpitssr.edu.kh"><i class="fa fa-envelope"></i>
                                info@rpitssr.edu.kh</a>
                        </li>
                    </ul>
                </div>
                <div class="header-top-right">
                    <div class="header-link">
                        {{-- <a class="notice active" href="/notice">Notice</a> --}}
                        <a class="login" href="#"><i class="fa fa-phone"></i> 093771244</a>
                        <a class="register" href="#"><i class="fa fa-phone"></i> 092771244</a>
                        <?php  $flag = app()->getlocale(); ?>
                        @if ($flag == 'kh')
                        <a href="{{url('/lang/en')}}"
                            class="inline-flex items-center font-bold justify-center px-4 text-white">
                            <img class="w-8 h-8 rounded-full ring-1 ring-gray-400 mr-3"
                                src="{{asset('images/flags/en.png')}}" alt="Change Language"> EN</a>
                        @else
                        <a href="{{url('/lang/kh')}}"
                            class="inline-flex items-center font-bold justify-center px-4 text-white">
                            <img class="w-8 h-8 rounded-full ring-1 ring-gray-400 mr-3"
                                src="{{asset('images/flags/kh.png')}}" alt="Change Language"> ខ្មែរ</a>
                        @endif
                    </div>
                </div>


            </div>
        </div>
    </div>

    <div id="navigation" class="navigation navigation-landscape">
        <div class="container position-relative">
            <div class="row align-items-center">
                <div class="col-lg-2">
                    <div class="header-logo">
                        <a href="{{ url('/') }}">
                            <img class="header-logo" style="height: 64px;" src="{{ asset('images/rtcsr-logo.png') }}"
                                alt="RPITSSR">
                            <strong class="text-blue">RPITSSR</strong>
                        </a>
                    </div>
                </div>
                <div class="col-lg-10 position-static">
                    <div class="nav-toggle"></div>
                    <nav class="nav-menus-wrapper">
                        <ul class="nav-menu">
                            <li>
                                <a class="{{ (request()->is('/')) ? 'active' : '' }}" href="{{url('/')}}">
                                    {{trans('langs.menus.home') }}
                                </a>
                            </li>
                            <li>
                                <a class="{{ (request()->is('page/about','page/teacher','page/gallery')) ? 'active' : '' }}"
                                    href="#">{{trans('langs.menus.about') }}
                                </a>
                                <ul class="nav-dropdown nav-submenu">
                                    <li class="{{ (request()->is('page/about')) ? 'active' : '' }}">
                                        <a href="/page/about">{{trans('langs.menus.about') }}</a>
                                    </li>
                                    <li class="{{ (request()->is('page/teacher')) ? 'active' : '' }}"><a
                                            href="/page/teacher">ប្រវត្តវិទ្យាស្ថាន</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="{{ (request()->is('page/about','page/teacher','page/gallery')) ? 'active' : '' }}"
                                    href="#">ការិយាល័យ និងដេប៉ាតឺម៉ង់</a>
                                <ul class="nav-dropdown nav-submenu">
                                    <li class="{{ (request()->is('page/about')) ? 'active' : '' }}"><a
                                            href="/page/about">ការិយាល័យរដ្ឋបាល</a></li>
                                    <li class="{{ (request()->is('page/teacher')) ? 'active' : '' }}"><a
                                            href="/page/teacher">ការិយាល័យអប់រំ</a></li>
                                    <li class="{{ (request()->is('page/gallery')) ? 'active' : '' }}"><a
                                            href="/page/gallery">ការិយាល័យទីផ្សារ</a></li>
                                    <li class="{{ (request()->is('page/gallery')) ? 'active' : '' }}"><a
                                            href="/page/gallery">ការិយាល័យហិរញ្ញវត្ថុ</a></li>
                                    <li class="{{ (request()->is('page/gallery')) ? 'active' : '' }}"><a
                                            href="/page/gallery">ដេប៉ាតឺម៉ង់ពត៌មានវិទ្យា</a></li>
                                    <li class="{{ (request()->is('page/gallery')) ? 'active' : '' }}"><a
                                            href="/page/gallery">ដេប៉ាតឺម៉ង់អគ្គិសនី</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="{{ (request()->is('courses')) ? 'active' : '' }}" href="/courses">
                                    {{trans('langs.menus.courses') }}
                                </a>
                            </li>
                            <li>
                                <a class="{{ (request()->is('event')) ? 'active' : '' }}" href="/event">
                                    {{trans('langs.menus.event') }}
                                </a>

                            </li>

                            <li>
                                <a class="{{ (request()->is('blog')) ? 'active' : '' }}" href="/blog">
                                    {{trans('langs.menus.blogs') }}
                                </a>
                            </li>
                            <li><a class="{{ (request()->is('contact')) ? 'active' : '' }}" href="/contact">
                                    {{trans('langs.menus.contact') }}
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<!--====== Header Ends ======-->