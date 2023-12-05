<!--====== Header Start ======-->
<header class="header-area">
    <div class="header-top">
        <div class="container">
            <div class="header-top-wrapper d-flex flex-wrap justify-content-sm-between">
                <div class="header-top-left mt-10">
                    <ul class="header-meta">
                        <li><a href="mailto://info@rpitssr.edu.kh">info@rpitssr.edu.kh</a></li>
                    </ul>
                </div>
                <div class="header-top-right mt-10">
                    <div class="header-link">
                        <a class="notice active" href="/notice">Notice</a>
                        <a class="login" href="https://apps.rpitssr.edu.kh/login">Login</a>
                        <a class="register" href="/register">Register</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="navigation" class="navigation navigation-landscape">
        <div class="container position-relative">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <div class="header-logo">
                        <a href="{{ url('/') }}"><img class="header-logo" src="{{ asset('images/rtcsr-logo.png') }}"
                                alt="RPITSSR"></a>
                    </div>
                </div>
                <div class="col-lg-7 position-static">
                    <div class="nav-toggle"></div>
                    <nav class="nav-menus-wrapper">
                        <ul class="nav-menu">
                            <li>
                                <a class="{{ (request()->is('/')) ? 'active' : '' }}" href="{{url('/')}}">Home</a>
                            </li>
                            <li>
                                <a class="{{ (request()->is('courses')) ? 'active' : '' }}" href="/courses">Courses</a>
                            </li>
                            <li>
                                <a class="{{ (request()->is('event')) ? 'active' : '' }}" href="/event">Events</a>

                            </li>
                            <li>
                                <a class="{{ (request()->is('page/about','page/teacher','page/gallery')) ? 'active' : '' }}"
                                    href="#">Pages</a>
                                <ul class="nav-dropdown nav-submenu">
                                    <li class="{{ (request()->is('page/about')) ? 'active' : '' }}"><a
                                            href="/page/about">About</a></li>
                                    <li class="{{ (request()->is('page/teacher')) ? 'active' : '' }}"><a
                                            href="/page/teacher">Teachers</a></li>
                                    <li class="{{ (request()->is('page/gallery')) ? 'active' : '' }}"><a
                                            href="/page/gallery">Gallery</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="{{ (request()->is('blog')) ? 'active' : '' }}" href="/blog">Blog</a>
                            </li>
                            <li><a class="{{ (request()->is('contact')) ? 'active' : '' }}" href="/contact">Contact</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-2 position-static">
                    <div class="header-search">
                        <form action="#">
                            <input type="text" placeholder="Search">
                            <button><i class="fas fa-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!--====== Header Ends ======-->