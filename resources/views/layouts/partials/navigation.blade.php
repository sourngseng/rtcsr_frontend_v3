<div id="navigation" class="navigation navigation-landscape">
    <div class="container position-relative">
        <div class="row align-items-center">
            <div class="col-lg-3">
                <div class="header-logo">
                    <a href="{{ url('/') }}">
                        <img class="header-logo" style="height: 64px;" src="{{ asset('images/rtcsr-logo.png') }}"
                            alt="RPITSSR">
                        <strong class="text-blue">RPITSSR</strong>
                    </a>
                </div>
            </div>
            <div class="col-lg-7 position-static">
                <div class="nav-toggle"></div>
                <nav class="nav-menus-wrapper">
                    <ul class="nav-menu">
                        <li>
                            <a class="active" href="{{ route('home') }}">{{ trans('langs.menus.home') }}</a>
                        </li>
                        <li>
                            <a href="#">អំពីវិទ្យាស្ថាន</a>
                            <ul class="nav-dropdown nav-submenu">
                                <li>
                                    <a href="#">ការិយាល័យ</a>
                                    <ul class="nav-dropdown nav-submenu">
                                        <li><a href="#">រដ្ឋបាល និងបុគ្គលិក</a></li>
                                        <li><a href="#">ការិយាល័យហិរញ្ញវត្ថុ</a></li>
                                        <li><a href="#">ការិយាល័យអប់រំ</a></li>
                                        <li><a href="#">ការិយាល័យស្រាវជ្រាវមុខរបរ</a></li>
                                        <li><a href="#">ការិយាល័យធានាគុណភាព</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">ដេប៉ាតឺម៉ង់</a>
                                    <ul class="nav-dropdown nav-submenu">
                                        <li><a href="#">វិទ្យាសាស្រ្តកុំព្យូទ័រ</a></li>
                                        <li><a href="#">អេឡិចត្រូនិច</a></li>
                                        <li><a href="#">សំណង់ស៊ីវិល</a></li>
                                        <li><a href="#">បរិក្ខាត្រជាក់ និងយន្តសាស្រ្ត</a></li>
                                        <li><a href="#">ផលិតកម្ម និងសេវាកម្ម</a></li>
                                        <li><a href="#">គ្រប់គ្រងពាណិជ្ជកម្ម</a></li>
                                        <li><a href="#">ភាសាបរទេស</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ route('about') }}">ប្រវត្តវិទ្យាស្ថាន</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="#">{{ trans('langs.menus.courses') }}</a>
                            <ul class="nav-dropdown nav-submenu">
                                <li><a href="{{ route('courses') }}">{{ trans('langs.menus.courses') }}</a></li>

                            </ul>
                        </li>

                        <li>
                            <a href="#">ពត៌មាន និងព្រិត្តិការណ៍</a>
                            <ul class="nav-dropdown nav-submenu">

                                <li>
                                    <a class="{{ (request()->is('blog')) ? 'active' : '' }}" href="/blog">
                                        {{trans('langs.menus.blogs') }}
                                    </a>
                                </li>

                                <li><a href="#">ព្រិត្តិការណ៍</a></li>
                                <li><a href="#">កិច្ចការសង្គម</a></li>
                                <li><a href="#">កម្មសិក្សា និងស្រាវជ្រាវ</a></li>

                            </ul>
                        </li>
                        <li>
                            <a class="{{ (request()->is('contact')) ? 'active' : '' }}" href="/contact">
                                {{trans('langs.menus.contact') }}
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-2 position-static">
                <div class="header-search">
                    <form action="#">
                        <input type="text" placeholder="Search">
                        {{-- <input type="hidden" name="search"> --}}
                        <button><i class="fas fa-search"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>