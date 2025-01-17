<!doctype html>
<html lang="en">

<x-head/>
<body>
    <div class="page-wrapper relative z-[1] {{ isset($bgColor) ? $bgColor : 'bg-white' }}">
        <!-- Header Start -->
        
        <header class="site-header site-header--absolute is--white py-3" id="sticky-menu">
            <div class="container-default">
                <div class="flex items-center justify-between gap-x-8">
                    <!-- Header Logo -->
                    <a href="{{ url('index') }}" class="">
                    @yield('headerLogo')
                    
                    </a>
                    <!-- Header Logo -->
        
                    <!-- Header Navigation -->
                    <div class="menu-block-wrapper">
                        <div class="menu-overlay"></div>
                        <nav class="menu-block" id="append-menu-header">
                            <div class="mobile-menu-head">
                                <div class="go-back">
                                    <i class="fa-solid fa-angle-left"></i>
                                </div>
                                <div class="current-menu-title"></div>
                                <div class="mobile-menu-close">&times;</div>
                            </div>
                            <ul class="site-menu-main">
                                <li class="nav-item nav-item-has-children">
                                    <a href="#" class="nav-link-item drop-trigger">Demo <i class="fa-solid fa-angle-down"></i>
                                    </a>
                                    <ul class="sub-menu" id="submenu-1">
                                        <li class="sub-menu--item">
                                            <a href="{{ url('index') }}">Digital agency</a>
                                        </li>
                                        <li class="sub-menu--item">
                                            <a href="{{ url('index2') }}">Chat software</a>
                                        </li>
                                        <li class="sub-menu--item">
                                            <a href="{{ url('index3') }}">Fitness App</a>
                                        </li>
                                        <li class="sub-menu--item">
                                            <a href="{{ url('index4') }}">Online Courses</a>
                                        </li>
                                        <li class="sub-menu--item">
                                            <a href="{{ url('index5') }}">SEO Agency</a>
                                        </li>
                                        <li class="sub-menu--item">
                                            <a href="{{ url('index6') }}">Cold Email</a>
                                        </li>
                                        <li class="sub-menu--item">
                                            <a href="{{ url('index7') }}">Web Hosting</a>
                                        </li>
                                        <li class="sub-menu--item">
                                            <a href="{{ url('index8') }}">Startup</a>
                                        </li>
                                        <li class="sub-menu--item">
                                            <a href="{{ url('index9') }}">Tracking Software</a>
                                        </li>
                                        <li class="sub-menu--item">
                                            <a href="{{ url('index10') }}">AI Writing Tool</a>
                                        </li>
                                        <li class="sub-menu--item">
                                            <a href="{{ url('index11') }}">Website Builder</a>
                                        </li>
                                        <li class="sub-menu--item">
                                            <a href="{{ url('index12') }}">AI Photo Editor</a>
                                        </li>
                                        <li class="sub-menu--item">
                                            <a href="{{ url('index13') }}">initial coin offering (ICO)</a>
                                        </li>
                                        <li class="sub-menu--item">
                                            <a href="{{ url('index14') }}">AI Content Generator</a>
                                        </li>
                                        <li class="sub-menu--item">
                                            <a href="{{ url('index15') }}">IT Service</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('about') }}" class="nav-link-item">About</a>
                                </li>
                                <li class="nav-item nav-item-has-children">
                                    <a href="#" class="nav-link-item drop-trigger">Services
                                        <i class="fa-solid fa-angle-down"></i>
                                    </a>
                                    <ul class="sub-menu" id="submenu-2">
                                        <li class="sub-menu--item">
                                            <a href="{{ url('services') }}">Services</a>
                                        </li>
                                        <li class="sub-menu--item">
                                            <a href="{{ url('servicedetails') }}">Service Details</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item nav-item-has-children">
                                    <a href="#" class="nav-link-item drop-trigger">Pages <i class="fa-solid fa-angle-down"></i>
                                    </a>
                                    <ul class="sub-menu" id="submenu-3">
                                        <li class="sub-menu--item nav-item-has-children">
                                            <a href="#" data-menu-get="h3" class="drop-trigger">blogs <i class="fa-solid fa-angle-right"></i></a>
                                            <ul class="sub-menu shape-none" id="submenu-4">
                                                <li class="sub-menu--item">
                                                    <a href="{{ url('blog') }}">blogs</a>
                                                </li>
                                                <li class="sub-menu--item">
                                                    <a href="{{ url('blogdetails') }}">blog details</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="sub-menu--item nav-item-has-children">
                                            <a href="#" data-menu-get="h3" class="drop-trigger">Team
                                                <i class="fa-solid fa-angle-right"></i>
                                            </a>
                                            <ul class="sub-menu shape-none" id="submenu-5">
                                                <li class="sub-menu--item">
                                                    <a href="{{ url('teams') }}">Teams</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="sub-menu--item nav-item-has-children">
                                            <a href="#" data-menu-get="h3" class="drop-trigger">FAQ
                                                <i class="fa-solid fa-angle-right"></i>
                                            </a>
                                            <ul class="sub-menu shape-none" id="submenu-6">
                                                <li class="sub-menu--item">
                                                    <a href="{{ url('faq') }}">FAQ-1</a>
                                                </li>
                                                <li class="sub-menu--item">
                                                    <a href="{{ url('faq2') }}">FAQ-2</a>
                                                </li>
                                                <li class="sub-menu--item">
                                                    <a href="{{ url('faq3') }}">FAQ-3</a>
                                                </li>
                                                <li class="sub-menu--item">
                                                    <a href="{{ url('faq4') }}">FAQ-4</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="sub-menu--item nav-item-has-children">
                                            <a href="#" data-menu-get="h3" class="drop-trigger">Portfolio
                                                <i class="fa-solid fa-angle-right"></i>
                                            </a>
                                            <ul class="sub-menu shape-none" id="submenu-7">
                                                <li class="sub-menu--item">
                                                    <a href="{{ url('portfolio') }}">Portfolio Classic</a>
                                                </li>
                                                <li class="sub-menu--item">
                                                    <a href="{{ url('portfolio2') }}">Portfolio Masonry</a>
                                                </li>
                                                <li class="sub-menu--item">
                                                    <a href="{{ url('portfolio3') }}">Portfolio Modern</a>
                                                </li>
                                                <li class="sub-menu--item">
                                                    <a href="{{ url('portfolio4') }}">Portfolio Minimal</a>
                                                </li>
                                                <li class="sub-menu--item">
                                                    <a href="{{ url('portfoliodetails') }}">Portfolio Details</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="sub-menu--item nav-item-has-children">
                                            <a href="#" data-menu-get="h3" class="drop-trigger">Pricing
                                                <i class="fa-solid fa-angle-right"></i>
                                            </a>
                                            <ul class="sub-menu shape-none" id="submenu-8">
                                                <li class="sub-menu--item">
                                                    <a href="{{ url('pricing') }}">Pricing-1</a>
                                                </li>
                                                <li class="sub-menu--item">
                                                    <a href="{{ url('pricing2') }}">Pricing-2</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="sub-menu--item nav-item-has-children">
                                            <a href="#" data-menu-get="h3" class="drop-trigger">Careers
                                                <i class="fa-solid fa-angle-right"></i>
                                            </a>
                                            <ul class="sub-menu shape-none" id="submenu-9">
                                                <li class="sub-menu--item">
                                                    <a href="{{ url('careers') }}">Career</a>
                                                </li>
                                                <li class="sub-menu--item">
                                                    <a href="careerdetails">Career Details</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="sub-menu--item nav-item-has-children">
                                            <a href="#" data-menu-get="h3" class="drop-trigger">Utilities
                                                <i class="fa-solid fa-angle-right"></i>
                                            </a>
                                            <ul class="sub-menu shape-none" id="submenu-10">
                                                <li class="sub-menu--item">
                                                    <a href="{{ url('login') }}">Login</a>
                                                </li>
                                                <li class="sub-menu--item">
                                                    <a href="{{ url('signup') }}">Signup</a>
                                                </li>
                                                <li class="sub-menu--item">
                                                    <a href="{{ url('resetpassword') }}">Reset Password</a>
                                                </li>
                                                <li class="sub-menu--item">
                                                    <a href="{{ url('comingsoon') }}">Coming Soon</a>
                                                </li>
                                                <li class="sub-menu--item">
                                                    <a href="{{ url('error404') }}">Error 404</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item nav-item-has-children">
                                    <a href="#" class="nav-link-item drop-trigger">Contact
                                        <i class="fa-solid fa-angle-down"></i>
                                    </a>
                                    <ul class="sub-menu" id="submenu-11">
                                        <li class="sub-menu--item">
                                            <a href="{{ url('contact') }}">Contact-1</a>
                                        </li>
                                        <li class="sub-menu--item">
                                            <a href="{{ url('contact2') }}">Contact-2</a>
                                        </li>
                                        <li class="sub-menu--item">
                                            <a href="{{ url('contact3') }}">Contact-3</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!-- Header Navigation -->
        
                    <!-- Header User Event -->
                    @yield('headButtons')
                    <!-- Header User Event -->
                </div>
            </div>
        </header>
        <!-- Header End -->

        <main class="main-wrapper relative overflow-hidden">
            @yield('content')
        </main>

        @yield('footerSection')

        @yield('footer') 
        

    </div>

    <x-scripts/>

</body>

</html>
