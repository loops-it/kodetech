<!doctype html>
<html lang="en">
    <x-head/>
<body>
    <div class="page-wrapper relative z-[1] bg-white">
        <!-- Header Start -->
        <header class="site-header site-header--absolute is--white py-3" id="sticky-menu">
            <div class="container-default">
                <div class="flex items-center justify-between gap-x-8">
                    <!-- Header Logo -->
                    <a href="{{ url('index') }}" class="">
                        <img src="{{ asset('assets/img/logo-honey-suckle-light.png') }}" alt="Masco" width="109" height="24" />
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
                                <li class="nav-item nav-link-item--white nav-item-has-children">
                                    <a href="#" class="nav-link-item drop-trigger">Demo <i class="fa-solid fa-angle-down"></i>
                                    </a>
                                    <ul class="sub-menu" id="submenu-1">
                                        <li class="sub-menu--item">
                                            <a href="{{ url('index') }}">Digital agency</a>
                                        </li>
                                        <li class="sub-menu--item">
                                            <a href="{{ url('index-2') }}">Chat software</a>
                                        </li>
                                        <li class="sub-menu--item">
                                            <a href="{{ url('index-3') }}">Fitness App</a>
                                        </li>
                                        <li class="sub-menu--item">
                                            <a href="{{ url('index-4') }}">Online Courses</a>
                                        </li>
                                        <li class="sub-menu--item">
                                            <a href="{{ url('index-5') }}">SEO Agency</a>
                                        </li>
                                        <li class="sub-menu--item">
                                            <a href="{{ url('index-6') }}">Cold Email</a>
                                        </li>
                                        <li class="sub-menu--item">
                                            <a href="{{ url('index-7') }}">Web Hosting</a>
                                        </li>
                                        <li class="sub-menu--item">
                                            <a href="{{ url('index-8') }}">Startup</a>
                                        </li>
                                        <li class="sub-menu--item">
                                            <a href="{{ url('index-9') }}">Tracking Software</a>
                                        </li>
                                        <li class="sub-menu--item">
                                            <a href="{{ url('index-10') }}">AI Writing Tool</a>
                                        </li>
                                        <li class="sub-menu--item">
                                            <a href="{{ url('index-11') }}">Website Builder</a>
                                        </li>
                                        <li class="sub-menu--item">
                                            <a href="{{ url('index-12') }}">AI Photo Editor</a>
                                        </li>
                                        <li class="sub-menu--item">
                                            <a href="{{ url('index-13') }}">initial coin offering (ICO)</a>
                                        </li>
                                        <li class="sub-menu--item">
                                            <a href="{{ url('index-14') }}">AI Content Generator</a>
                                        </li>
                                        <li class="sub-menu--item">
                                            <a href="{{ url('index-15') }}">IT Service</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item nav-link-item--white">
                                    <a href="{{ url('about') }}" class="nav-link-item">About</a>
                                </li>
                                <li class="nav-item nav-link-item--white nav-item-has-children">
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
                                <li class="nav-item nav-link-item--white nav-item-has-children">
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
                                                    <a href="{{ url('faq-2') }}">FAQ-2</a>
                                                </li>
                                                <li class="sub-menu--item">
                                                    <a href="{{ url('faq-3') }}">FAQ-3</a>
                                                </li>
                                                <li class="sub-menu--item">
                                                    <a href="{{ url('faq-4') }}">FAQ-4</a>
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
                                                    <a href="{{ url('portfolio-2') }}">Portfolio Masonry</a>
                                                </li>
                                                <li class="sub-menu--item">
                                                    <a href="{{ url('portfolio-3') }}">Portfolio Modern</a>
                                                </li>
                                                <li class="sub-menu--item">
                                                    <a href="{{ url('portfolio-4') }}">Portfolio Minimal</a>
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
                                                    <a href="{{ url('pricing-2') }}">Pricing-2</a>
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
                                                    <a href="{{ url('career-details') }}">Career Details</a>
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
                                                    <a href="{{ url('coming-soon') }}">Coming Soon</a>
                                                </li>
                                                <li class="sub-menu--item">
                                                    <a href="{{ url('error-404') }}">Error 404</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item nav-link-item--white nav-item-has-children">
                                    <a href="#" class="nav-link-item drop-trigger">Contact
                                        <i class="fa-solid fa-angle-down"></i>
                                    </a>
                                    <ul class="sub-menu" id="submenu-11">
                                        <li class="sub-menu--item">
                                            <a href="{{ url('contact') }}">Contact-1</a>
                                        </li>
                                        <li class="sub-menu--item">
                                            <a href="{{ url('contact-2') }}">Contact-2</a>
                                        </li>
                                        <li class="sub-menu--item">
                                            <a href="{{ url('contact-3') }}">Contact-3</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!-- Header Navigation -->

                    <!-- Header User Event -->
                    <div class="flex items-center gap-6">
                        <a href="{{ url('login') }}" class="btn-text hidden text-white hover:text-ColorHoneySuckle sm:inline-block">Login</a>
                        <a href="{{ url('signup') }}" class="btn is-honey-suckle is-transparent is-rounded btn-animation group hidden sm:inline-block"><span>Sign up free</span></a>
                        <!-- Responsive Offcanvas Menu Button -->
                        <div class="block lg:hidden">
                            <button id="openBtn" class="hamburger-menu mobile-menu-trigger">
                                <span class="bg-white"></span>
                                <span class="bg-white"></span>
                                <span class="bg-white"></span>
                            </button>
                        </div>
                    </div>
                    <!-- Header User Event -->
                </div>
            </div>
        </header>
        <!-- Header End -->

        <main class="main-wrapper relative overflow-hidden">
            <!-- Hero Section Start -->
            <section class="section-hero">
                <!-- Section Background -->
                <div class="relative z-10 overflow-hidden bg-[#2B13B9]">
                    <!-- Hero Section Space -->
                    <div class="pt-28 md:pt-36 lg:pt-[150px] xxl:pt-[185px]">
                        <!-- Section Container -->
                        <div class="container-default">
                            <!-- Hero Area -->
                            <div class="flex flex-col items-center justify-center">
                                <!-- Hero Content Block -->
                                <div class="text-center">
                                    <div class="jos mx-auto mb-6 max-w-xl lg:max-w-2xl xl:max-w-3xl xxl:max-w-[1076px]">
                                        <h1 class="mb-6 font-PublicSans text-[40px] font-semibold leading-none -tracking-[2px] text-white sm:text-5xl lg:text-6xl xl:text-[76px] xxl:text-[110px]">
                                            AI-generated content at your fingertips
                                        </h1>
                                    </div>
                                    <div class="jos mx-auto mb-8 max-w-xl text-white lg:mb-[50px] lg:max-w-2xl xl:max-w-3xl xxl:max-w-[896px]">
                                        <p class="mb-8">
                                            Welcome to Masco, your premier destination for AI
                                            content-generation software that pushes boundaries and
                                            sparks creativity. Our platform integrates the latest AI
                                            and delivers a new era of content creation.
                                        </p>
                                    </div>
                                    <div class="mb-3 flex flex-wrap justify-center gap-6">
                                        <a href="#" class="btn is-honey-suckle is-transparent btn-animation is-large is-rounded group inline-block">
                                            <span>
                                                Start a 15-day free trial
                                                <i class="fa-regular fa-arrow-right ml-[10px] text-2xl leading-none"></i>
                                            </span>
                                        </a>
                                        <a href="#" class="btn is-outline-white btn-animation is-large is-rounded group inline-block"><span>Watch a demo</span></a>
                                    </div>
                                </div>
                                <!-- Hero Content Block -->

                                <!-- Hero Image Block -->
                                <div class="relative mx-auto mt-[60px] max-w-[1296px] overflow-hidden rounded-tl-[10px] rounded-tr-[10px] lg:mt-20 xl:mt-[100px] xxl:mt-[130px]">
                                    <img src="{{ asset('assets/img/th-14/hero-img.jpg') }}" alt="hero-img" width="1269" height="553" data-jos_animation="zoom-in-down" class="h-auto w-full" />
                                </div>
                                <!-- Hero Image Block -->
                            </div>
                            <!-- Hero Area -->
                        </div>
                        <!-- Section Container -->
                    </div>
                    <!-- Hero Section Space -->

                    <!-- Hero Background Shape -->
                    <div class="absolute bottom-0 left-1/2 -z-10 h-auto w-full -translate-x-1/2">
                        <img src="{{ asset('assets/img/elements/home-14-hero-shape.svg') }}" alt="home-14-hero-shape" width="1600" height="1068" class="h-auto w-full" />
                        <!-- Hero Background Shape -->
                    </div>
                </div>
                <!-- Section Background -->
            </section>
            <!-- Hero Section End -->

            <!-- Features Section Start -->
            <section class="section-features">
                <!-- Section Space -->
                <div class="section-space">
                    <!-- Section Container -->
                    <div class="container-default">
                        <!-- Section Wrapper -->
                        <div class="jos mb-[60px] xl:mb-20">
                            <div class="max-w-[605px]">
                                <!-- Section Block -->
                                <div class="mb-5">
                                    <h2 class="font-PublicSans text-4xl font-semibold leading-[1.05] -tracking-[2px] text-[#0F1642] sm:text-5xl lg:text-6xl xl:text-[70px] xxl:text-[80px]">
                                        Exploring its core capabilities
                                    </h2>
                                </div>
                                <!-- Section Block -->
                            </div>
                        </div>
                        <!-- Section Wrapper -->

                        <!-- Feature List -->
                        <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                            <!-- Feature Item -->
                            <div class="jos" data-jos_delay="0">
                                <div class="relative z-10 h-full rounded-[10px] bg-[#F4F4F4] p-10 transition-all duration-300 hover:bg-ColorHoneySuckle">
                                    <div class="mb-[60px] max-w-[376px] lg:mb-20 xl:mb-[127px]">
                                        <div class="mb-4 font-PublicSans text-2xl font-semibold leading-[1.2] text-[#0F1642] lg:text-[35px]">
                                            Enhanced Efficiency
                                        </div>
                                        <p class="text-xl text-[#0F1642]/80">
                                            This efficiency is crucial for the fast-paced lifestyle
                                            of the new generation
                                        </p>
                                    </div>
                                    <a href="#" class="text-2xl text-[#0F1642]">
                                        <span><i class="fa-regular fa-arrow-right"></i></span>
                                    </a>

                                    <div class="absolute right-0 top-1/2 -z-10 hidden -translate-y-1/2 xl:inline-block">
                                        <img src="{{ asset('assets/img/th-14/features-img-1.png') }}" alt="features-img-1" width="280" height="211" />
                                    </div>
                                </div>
                            </div>
                            <!-- Feature Item -->
                            <!-- Feature Item -->
                            <div class="jos" data-jos_delay="0.3">
                                <div class="relative z-10 h-full rounded-[10px] bg-[#F4F4F4] p-10 transition-all duration-300 hover:bg-ColorHoneySuckle">
                                    <div class="mb-[60px] max-w-[376px] lg:mb-20 xl:mb-[127px]">
                                        <div class="mb-4 font-PublicSans text-2xl font-semibold leading-[1.2] text-[#0F1642] lg:text-[35px]">
                                            Time Savings
                                        </div>
                                        <p class="text-xl text-[#0F1642]/80">
                                            Writing tasks that used to take hours can now be
                                            completed in minutes.
                                        </p>
                                    </div>
                                    <a href="#" class="text-2xl text-[#0F1642]">
                                        <span><i class="fa-regular fa-arrow-right"></i></span>
                                    </a>

                                    <div class="absolute right-0 top-1/2 -z-10 hidden -translate-y-1/2 xl:inline-block">
                                        <img src="{{ asset('assets/img/th-14/features-img-2.png') }}" alt="features-img-2" width="280" height="228" />
                                    </div>
                                </div>
                            </div>
                            <!-- Feature Item -->
                            <!-- Feature Item -->
                            <div class="jos md:col-span-2" data-jos_delay="0.6">
                                <div class="relative z-10 h-full rounded-[10px] bg-[#F4F4F4] p-10 transition-all duration-300 hover:bg-ColorHoneySuckle">
                                    <div class="mb-[60px] max-w-[486px] lg:mb-20 xl:mb-[127px]">
                                        <div class="mb-4 font-PublicSans text-2xl font-semibold leading-[1.2] text-[#0F1642] lg:text-[35px]">
                                            Improved Language Skills
                                        </div>
                                        <p class="text-xl text-[#0F1642]/80">
                                            AI tools offer grammar & style suggestions, helping
                                            users learn proper language usage over time.
                                        </p>
                                    </div>
                                    <a href="#" class="text-2xl text-[#0F1642]">
                                        <span><i class="fa-regular fa-arrow-right"></i></span>
                                    </a>

                                    <div class="absolute right-0 top-1/2 -z-10 hidden -translate-y-1/2 xl:inline-block">
                                        <img src="{{ asset('assets/img/th-14/features-img-3.png') }}" alt="features-img-3" width="462" height="336" />
                                    </div>
                                </div>
                            </div>
                            <!-- Feature Item -->
                        </div>
                        <!-- Feature List -->
                    </div>
                    <!-- Section Container -->
                </div>
                <!-- Section Space -->
            </section>
            <!-- Features Section End -->

            <!-- Content Section Start -->
            <section class="section-content">
                <!-- Section Space -->
                <div class="section-space-bottom">
                    <!-- Section Container -->
                    <div class="container-default">
                        <div class="flex flex-col gap-y-20 lg:gap-y-[100px] xl:gap-y-[120px]">
                            <!-- Content Area Single -->
                            <div class="grid items-center gap-10 lg:grid-cols-[0.8fr_minmax(0,_1fr)] lg:gap-24 xl:gap-[140px]">
                                <!-- Content Block Left -->
                                <div class="jos order-1 lg:order-2" data-jos_animation="fade-right">
                                    <!-- Section Wrapper -->
                                    <div>
                                        <!-- Section Block -->
                                        <div class="mb-5">
                                            <h2 class="font-PublicSans text-4xl font-semibold leading-[1.05] -tracking-[2px] text-[#0F1642] sm:text-5xl lg:text-6xl xl:text-[70px] xxl:text-[80px]">
                                                Generate a large volume of textual content quickly
                                            </h2>
                                        </div>
                                        <!-- Section Block -->
                                    </div>
                                    <!-- Section Wrapper -->
                                    <!-- Content Text -->
                                    <p class="text-[#2C2C2C]">
                                        Our AI tool can generate a large volume of content
                                        quickly, making it an invaluable tool for businesses with
                                        high content demands, such as social media posts, product
                                        descriptions, and blog articles.
                                    </p>
                                    <!-- Content Text -->

                                    <a href="#" class="btn is-honey-suckle-2 is-transparent btn-animation is-large is-rounded group inline-block">
                                        <span>
                                            Let's explore it
                                            <i class="fa-regular fa-arrow-right ml-[10px] text-2xl leading-none"></i>
                                        </span>
                                    </a>
                                </div>
                                <!-- Content Block Left -->
                                <!-- Content Block Right -->
                                <div class="jos order-2 md:order-1" data-jos_animation="fade-left">
                                    <div class="w-full overflow-hidden rounded-[10px] mx-auto lg:mx-0 max-w-full sm:max-w-[80%] md:max-w-[70%] lg:max-w-full">
                                        <img src="{{ asset('assets/img/th-14/content-img-1.jpg') }}" alt="content-img-1" width="526" height="500" class="h-auto w-full" />
                                    </div>
                                </div>
                                <!-- Content Block Right -->
                            </div>
                            <!-- Content Area Single -->
                            <!-- Content Area Single -->
                            <div class="grid items-center gap-10 lg:grid-cols-[1fr_minmax(0,_0.8fr)] lg:gap-24 xl:gap-[140px]">
                                <!-- Content Block Left -->
                                <div class="jos" data-jos_animation="fade-right">
                                    <!-- Section Wrapper -->
                                    <div>
                                        <!-- Section Block -->
                                        <div class="mb-5">
                                            <h2 class="font-PublicSans text-4xl font-semibold leading-[1.05] -tracking-[2px] text-[#0F1642] sm:text-5xl lg:text-6xl xl:text-[70px] xxl:text-[80px]">
                                                Helps overcome writer's block and inspire new ideas
                                            </h2>
                                        </div>
                                        <!-- Section Block -->
                                    </div>
                                    <!-- Section Wrapper -->
                                    <!-- Content Text -->
                                    <p class="text-[#2C2C2C]">
                                        It can provides new perspectives & creative angles,
                                        helping to overcome writer's block and inspire new ideas
                                        freeing them to focus on strategic.
                                    </p>
                                    <p class="text-[#2C2C2C]">
                                        This tool can learn from user feedback and improve over
                                        time by creating more accurate and relevant content. It
                                        can effortlessly create content in multiple languages,
                                        communication & engagement with global audiences.
                                    </p>
                                    <!-- Content Text -->
                                </div>
                                <!-- Content Block Left -->
                                <!-- Content Block Right -->
                                <div class="jos" data-jos_animation="fade-left">
                                    <div class="w-full overflow-hidden rounded-[10px] mx-auto lg:mx-0 max-w-full sm:max-w-[80%] md:max-w-[70%] lg:max-w-full">
                                        <img src="{{ asset('assets/img/th-14/content-img-2.jpg') }}" alt="content-img-2" width="526" height="500" class="h-auto w-full" />
                                    </div>
                                </div>
                                <!-- Content Block Right -->
                            </div>
                            <!-- Content Area Single -->
                        </div>
                    </div>
                    <!-- Section Container -->
                </div>
                <!-- Section Space -->
            </section>
            <!-- Content Section End -->

            <!-- Service Section Start -->
            <section class="section-service">
                <!-- Section Background -->
                <div class="bg-[#0F1642]">
                    <!-- Section Space -->
                    <div class="section-space">
                        <!-- Section Container -->
                        <div class="container-default">
                            <!-- Section Wrapper -->
                            <div class="jos mb-[60px] xl:mb-20">
                                <div class="max-w-[856px]">
                                    <!-- Section Block -->
                                    <div class="mb-5">
                                        <h2 class="font-PublicSans text-4xl font-semibold leading-[1.05] -tracking-[2px] text-white sm:text-5xl lg:text-6xl xl:text-[70px] xxl:text-[80px]">
                                            Exploring its core capabilities
                                        </h2>
                                    </div>
                                    <!-- Section Block -->
                                </div>
                            </div>
                            <!-- Section Wrapper -->

                            <!-- Service List -->
                            <div class="grid gap-6 md:grid-cols-2 xl:grid-cols-3">
                                <!-- Service Item -->
                                <div class="jos">
                                    <a href="{{ url('servicedetails') }}" class="flex h-full gap-x-6 rounded-[10px] border border-white/5 bg-white/5 p-5 transition-all duration-300 hover:border-[#E9FF97]">
                                        <div class="h-10 w-auto">
                                            <img src="{{ asset('assets/img/icons/icon-honeysuckle-home-14-service-1.svg') }}" alt="icon-honeysuckle-home-14-service-1" width="40" height="40" class="h-10 w-auto" />
                                        </div>
                                        <div class="flex-1">
                                            <div class="mb-4 font-PublicSans text-xl font-semibold leading-[1.28] text-white lg:text-2xl xxl:text-[28px]">
                                                Article Generation
                                            </div>
                                            <p class="text-lg leading-[1.6] tracking-tighter text-white lg:text-xl">
                                                AI content generators can create comprehensive and
                                                informative
                                            </p>
                                        </div>
                                    </a>
                                </div>
                                <!-- Service Item -->
                                <!-- Service Item -->
                                <div class="jos">
                                    <a href="{{ url('servicedetails') }}" class="flex h-full gap-x-6 rounded-[10px] border border-white/5 bg-white/5 p-5 transition-all duration-300 hover:border-[#E9FF97]">
                                        <div class="h-10 w-auto">
                                            <img src="{{ asset('assets/img/icons/icon-honeysuckle-home-14-service-2.svg') }}" alt="icon-honeysuckle-home-14-service-2" width="38" height="40" class="h-10 w-auto" />
                                        </div>
                                        <div class="flex-1">
                                            <div class="mb-4 font-PublicSans text-xl font-semibold leading-[1.28] text-white lg:text-2xl xxl:text-[28px]">
                                                Blog Post Creation
                                            </div>
                                            <p class="text-lg leading-[1.6] tracking-tighter text-white lg:text-xl">
                                                These tools can craft engaging & SEO blogs & attract
                                                organic traffic
                                            </p>
                                        </div>
                                    </a>
                                </div>
                                <!-- Service Item -->
                                <!-- Service Item -->
                                <div class="jos">
                                    <a href="{{ url('servicedetails') }}" class="flex h-full gap-x-6 rounded-[10px] border border-white/5 bg-white/5 p-5 transition-all duration-300 hover:border-[#E9FF97]">
                                        <div class="h-10 w-auto">
                                            <img src="{{ asset('assets/img/icons/icon-honeysuckle-home-14-service-3.svg') }}" alt="icon-honeysuckle-home-14-service-3" width="40" height="40" class="h-10 w-auto" />
                                        </div>
                                        <div class="flex-1">
                                            <div class="mb-4 font-PublicSans text-xl font-semibold leading-[1.28] text-white lg:text-2xl xxl:text-[28px]">
                                                Social Media Posts
                                            </div>
                                            <p class="text-lg leading-[1.6] tracking-tighter text-white lg:text-xl">
                                                AI-generated content is ideal for generating catchy
                                                captions, posts
                                            </p>
                                        </div>
                                    </a>
                                </div>
                                <!-- Service Item -->
                                <!-- Service Item -->
                                <div class="jos">
                                    <a href="{{ url('servicedetails') }}" class="flex h-full gap-x-6 rounded-[10px] border border-white/5 bg-white/5 p-5 transition-all duration-300 hover:border-[#E9FF97]">
                                        <div class="h-10 w-auto">
                                            <img src="{{ asset('assets/img/icons/icon-honeysuckle-home-14-service-4.svg') }}" alt="icon-honeysuckle-home-14-service-4" width="40" height="40" class="h-10 w-auto" />
                                        </div>
                                        <div class="flex-1">
                                            <div class="mb-4 font-PublicSans text-xl font-semibold leading-[1.28] text-white lg:text-2xl xxl:text-[28px]">
                                                Product Descriptions
                                            </div>
                                            <p class="text-lg leading-[1.6] tracking-tighter text-white lg:text-xl">
                                                For E-commerce businesses can benefit AI can highlight
                                                features
                                            </p>
                                        </div>
                                    </a>
                                </div>
                                <!-- Service Item -->
                                <!-- Service Item -->
                                <div class="jos">
                                    <a href="{{ url('servicedetails') }}" class="flex h-full gap-x-6 rounded-[10px] border border-white/5 bg-white/5 p-5 transition-all duration-300 hover:border-[#E9FF97]">
                                        <div class="h-10 w-auto">
                                            <img src="{{ asset('assets/img/icons/icon-honeysuckle-home-14-service-5.svg') }}" alt="icon-honeysuckle-home-14-service-5" width="40" height="44" class="h-10 w-auto" />
                                        </div>
                                        <div class="flex-1">
                                            <div class="mb-4 font-PublicSans text-xl font-semibold leading-[1.28] text-white lg:text-2xl xxl:text-[28px]">
                                                Email Content
                                            </div>
                                            <p class="text-lg leading-[1.6] tracking-tighter text-white lg:text-xl">
                                                AI can assist in personalized email content, making
                                                email marketing
                                            </p>
                                        </div>
                                    </a>
                                </div>
                                <!-- Service Item -->
                                <!-- Service Item -->
                                <div class="jos">
                                    <a href="{{ url('servicedetails') }}" class="flex h-full gap-x-6 rounded-[10px] border border-white/5 bg-white/5 p-5 transition-all duration-300 hover:border-[#E9FF97]">
                                        <div class="h-10 w-auto">
                                            <img src="{{ asset('assets/img/icons/icon-honeysuckle-home-14-service-6.svg') }}" alt="icon-honeysuckle-home-14-service-6" width="40" height="44" class="h-10 w-auto" />
                                        </div>
                                        <div class="flex-1">
                                            <div class="mb-4 font-PublicSans text-xl font-semibold leading-[1.28] text-white lg:text-2xl xxl:text-[28px]">
                                                SEO Content
                                            </div>
                                            <p class="text-lg leading-[1.6] tracking-tighter text-white lg:text-xl">
                                                Content generators can provide suggestions and
                                                optimizations
                                            </p>
                                        </div>
                                    </a>
                                </div>
                                <!-- Service Item -->
                                <!-- Service Item -->
                                <div class="jos">
                                    <a href="{{ url('servicedetails') }}" class="flex h-full gap-x-6 rounded-[10px] border border-white/5 bg-white/5 p-5 transition-all duration-300 hover:border-[#E9FF97]">
                                        <div class="h-10 w-auto">
                                            <img src="{{ asset('assets/img/icons/icon-honeysuckle-home-14-service-7.svg') }}" alt="icon-honeysuckle-home-14-service-7" width="40" height="44" class="h-10 w-auto" />
                                        </div>
                                        <div class="flex-1">
                                            <div class="mb-4 font-PublicSans text-xl font-semibold leading-[1.28] text-white lg:text-2xl xxl:text-[28px]">
                                                Content Summaries
                                            </div>
                                            <p class="text-lg leading-[1.6] tracking-tighter text-white lg:text-xl">
                                                AI tools can analyze articles and quick comprehension
                                                and sharing
                                            </p>
                                        </div>
                                    </a>
                                </div>
                                <!-- Service Item -->
                                <!-- Service Item -->
                                <div class="jos">
                                    <a href="{{ url('servicedetails') }}" class="flex h-full gap-x-6 rounded-[10px] border border-white/5 bg-white/5 p-5 transition-all duration-300 hover:border-[#E9FF97]">
                                        <div class="h-10 w-auto">
                                            <img src="{{ asset('assets/img/icons/icon-honeysuckle-home-14-service-8.svg') }}" alt="icon-honeysuckle-home-14-service-8" width="40" height="44" class="h-10 w-auto" />
                                        </div>
                                        <div class="flex-1">
                                            <div class="mb-4 font-PublicSans text-xl font-semibold leading-[1.28] text-white lg:text-2xl xxl:text-[28px]">
                                                Language Translation
                                            </div>
                                            <p class="text-lg leading-[1.6] tracking-tighter text-white lg:text-xl">
                                                Helping to bridge communication gaps and reach a
                                                global audience
                                            </p>
                                        </div>
                                    </a>
                                </div>
                                <!-- Service Item -->
                                <!-- Service Item -->
                                <div class="jos">
                                    <a href="{{ url('servicedetails') }}" class="flex h-full gap-x-6 rounded-[10px] border border-white/5 bg-white/5 p-5 transition-all duration-300 hover:border-[#E9FF97]">
                                        <div class="h-10 w-auto">
                                            <img src="{{ asset('assets/img/icons/icon-honeysuckle-home-14-service-9.svg') }}" alt="icon-honeysuckle-home-14-service-9" width="40" height="44" class="h-10 w-auto" />
                                        </div>
                                        <div class="flex-1">
                                            <div class="mb-4 font-PublicSans text-xl font-semibold leading-[1.28] text-white lg:text-2xl xxl:text-[28px]">
                                                Writing Prompts
                                            </div>
                                            <p class="text-lg leading-[1.6] tracking-tighter text-white lg:text-xl">
                                                AI content generators can spark creativity by offering
                                                prompts
                                            </p>
                                        </div>
                                    </a>
                                </div>
                                <!-- Service Item -->
                            </div>
                            <!-- Service List -->
                        </div>
                        <!-- Section Container -->
                    </div>
                    <!-- Section Space -->
                </div>
                <!-- Section Background -->
            </section>
            <!-- Service Section End -->

            <!-- Content Section Start -->
            <section class="section-content">
                <!-- Section Space -->
                <div class="section-space">
                    <!-- Section Container -->
                    <div class="container-default">
                        <div class="flex flex-col gap-y-20 lg:gap-y-[100px] xl:gap-y-[120px]">
                            <!-- Content Area Single -->
                            <div class="grid items-center gap-10 lg:grid-cols-[0.9fr_minmax(0,_1fr)] lg:gap-24 xl:gap-[140px]">
                                <!-- Content Block Left -->
                                <div class="jos order-1 lg:order-2" data-jos_animation="fade-right">
                                    <!-- Section Wrapper -->
                                    <div>
                                        <!-- Section Block -->
                                        <div class="mb-5">
                                            <h2 class="font-PublicSans text-4xl font-semibold leading-[1.05] -tracking-[2px] text-[#0F1642] sm:text-5xl lg:text-6xl xl:text-[70px] xxl:text-[80px]">
                                                Straightforward process for high-quality content
                                            </h2>
                                        </div>
                                        <!-- Section Block -->
                                    </div>
                                    <!-- Section Wrapper -->
                                    <!-- Content Text -->
                                    <p class="text-[#2C2C2C]">
                                        You can quickly harness the power of AI to create
                                        high-quality content that saves you time and effort in the
                                        content creation process easily.
                                    </p>
                                    <!-- Content Text -->

                                    <!-- Content List -->
                                    <ul class="mt-8 flex list-inside list-decimal flex-col gap-y-3 text-xl font-semibold text-[#0F1642] lg:mt-[50px] lg:text-2xl">
                                        <li>Select Your Content Type and Purpose</li>
                                        <li>Enter Your Prompts and Preferences</li>
                                        <li>Review and Refine the Output</li>
                                    </ul>
                                    <!-- Content List -->
                                </div>
                                <!-- Content Block Left -->
                                <!-- Content Block Right -->
                                <div class="jos order-2 lg:order-1" data-jos_animation="fade-left">
                                    <div class="relative flex items-center justify-center mx-auto lg:mx-0 max-w-full sm:max-w-[80%] md:max-w-[70%] lg:max-w-full">
                                        <img src="{{ asset('assets/img/th-14/content-img-video-1.jpg') }}" alt="hero image" width="526" height="500" class="h-auto w-full" />
                                        <a data-fslightbox="gallery" href="https://www.youtube.com/watch?v=3nQNiWdeH2Q" class="group group absolute flex h-[100px] w-[100px] items-center justify-center rounded-[50%] bg-ColorHoneySuckle text-[#2B13B9]" aria-label="video-play">
                                            <span class="text-2xl transition-all duration-300 ease-linear group-hover:scale-110"><i class="fa-solid fa-play"></i></span>
                                        </a>
                                    </div>
                                </div>
                                <!-- Content Block Right -->
                            </div>
                            <!-- Content Area Single -->
                        </div>
                    </div>
                    <!-- Section Container -->
                </div>
                <!-- Section Space -->
            </section>
            <!-- Content Section End -->

            <!-- Pricing Section Start -->
            <section class="section-pricing">
                <!-- Section Space -->
                <div class="section-space-bottom">
                    <!-- Section Container -->
                    <div class="container-default">
                        <!-- Section Wrapper -->
                        <div class="jos mb-[60px] xl:mb-20">
                            <div class="max-w-[636px]">
                                <!-- Section Block -->
                                <div class="mb-5">
                                    <h2 class="font-PublicSans text-4xl font-semibold leading-[1.05] -tracking-[2px] text-[#0F1642] sm:text-5xl lg:text-6xl xl:text-[70px] xxl:text-[80px]">
                                        Plans to increase your productivity
                                    </h2>
                                </div>
                                <!-- Section Block -->
                            </div>
                        </div>
                        <!-- Section Wrapper -->

                        <!-- Price List -->
                        <div class="grid grid-cols-1 gap-6 md:grid-cols-2 xl:grid-cols-3">
                            <!-- Price Item -->
                            <div class="jos col-span-1 lg:col-span-2 xl:col-span-3">
                                <div class="h-full rounded-[10px] border-2 border-[#F4F4F4] bg-white p-8 lg:p-10">
                                    <div class="flex flex-col justify-between gap-y-10 xl:flex-row">
                                        <div class="max-w-[480px]">
                                            <div class="mb-10 font-PublicSans text-3xl font-semibold leading-[1.2] text-[#0F1642] lg:text-[35px]">
                                                Free
                                                <span class="mt-1 block font-body text-base leading-[1.5]">
                                                    15 day free trial
                                                </span>
                                            </div>

                                            <p class="text-xl tracking-tighter text-[#0F1642]/80">
                                                Get a taste of what Masco can do for you with 5,000
                                                free words. Buy additional credits at any time.
                                            </p>
                                        </div>
                                        <div class="text-left xl:text-center">
                                            <span class="mb-10 block font-PublicSans text-5xl font-bold text-[#0F1642] lg:text-6xl">$0</span>
                                            <button class="btn is-honey-suckle-2 is-transparent is-large is-rounded group block w-full lg:inline-block lg:w-auto">
                                                Start my free trial
                                                <i class="fa-regular fa-arrow-right ml-[10px] text-2xl leading-none"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Price Item -->
                            <!-- Price Item -->
                            <div class="jos" data-jos_animation="flip-left">
                                <div class="h-full rounded-[10px] border-2 border-[#F4F4F4] bg-white p-8 lg:p-10">
                                    <!-- Pricing Content Top -->
                                    <div class="flex items-center justify-between gap-y-10">
                                        <div class="font-PublicSans text-3xl font-semibold leading-[1.2] text-[#0F1642] lg:text-[35px]">
                                            Basic
                                            <span class="mt-1 block font-body text-base leading-[1.5]">
                                                Per Month
                                            </span>
                                        </div>
                                        <span class="block font-PublicSans text-5xl font-bold text-[#0F1642] lg:text-6xl">$9</span>
                                    </div>
                                    <!-- Pricing Content Top -->
                                    <!-- Horizontal Line Separator -->
                                    <div class="my-[30px] h-px w-full bg-[#F4F4F4]"></div>
                                    <!-- Horizontal Line Separator -->
                                    <!-- Pricing Data list -->
                                    <ul class="mb-10 flex flex-col gap-y-4 text-base font-semibold text-[#0F1642]">
                                        <li class="flex items-center gap-x-3">
                                            <span class="text-[22px]"><i class="fa-solid fa-circle-check"></i></span>
                                            20 Rewrites and Spices a day
                                        </li>
                                        <li class="flex items-center gap-x-3">
                                            <span class="text-[22px]"><i class="fa-solid fa-circle-check"></i></span>
                                            50+ Languages
                                        </li>
                                        <li class="flex items-center gap-x-3">
                                            <span class="text-[22px]"><i class="fa-solid fa-circle-check"></i></span>
                                            Unlimited Text Corrections
                                        </li>
                                        <li class="flex items-center gap-x-3">
                                            <span class="text-[22px]"><i class="fa-solid fa-circle-check"></i></span>
                                            10 Rephrases Per Day
                                        </li>
                                        <li class="flex items-center gap-x-3">
                                            <span class="text-[22px]"><i class="fa-regular fa-circle-check"></i></span>
                                            Keyword Research & Clustering
                                        </li>
                                        <li class="flex items-center gap-x-3">
                                            <span class="text-[22px]"><i class="fa-regular fa-circle-check"></i></span>
                                            Integration with existing platforms
                                        </li>
                                    </ul>
                                    <!-- Pricing Data list -->

                                    <button class="btn is-honey-suckle-2 is-transparent btn-animation is-large is-rounded group block w-full">
                                        Get started now
                                        <i class="fa-regular fa-arrow-right ml-[10px] text-2xl leading-none"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- Price Item -->
                            <!-- Price Item -->
                            <div class="jos" data-jos_animation="flip-left">
                                <div class="h-full rounded-[10px] border-2 border-[#F4F4F4] bg-white p-8 lg:p-10">
                                    <!-- Pricing Content Top -->
                                    <div class="flex items-center justify-between gap-y-10">
                                        <div class="font-PublicSans text-3xl font-semibold leading-[1.2] text-[#0F1642] lg:text-[35px]">
                                            Standard
                                            <span class="mt-1 block font-body text-base leading-[1.5]">
                                                Per Month
                                            </span>
                                        </div>
                                        <span class="block font-PublicSans text-5xl font-bold text-[#0F1642] lg:text-6xl">$19</span>
                                    </div>
                                    <!-- Pricing Content Top -->
                                    <!-- Horizontal Line Separator -->
                                    <div class="my-[30px] h-px w-full bg-[#F4F4F4]"></div>
                                    <!-- Horizontal Line Separator -->
                                    <!-- Pricing Data list -->
                                    <ul class="mb-10 flex flex-col gap-y-4 text-base font-semibold text-[#0F1642]">
                                        <li class="flex items-center gap-x-3">
                                            <span class="text-[22px]"><i class="fa-solid fa-circle-check"></i></span>
                                            Unlimited Rewrites and Spices
                                        </li>
                                        <li class="flex items-center gap-x-3">
                                            <span class="text-[22px]"><i class="fa-solid fa-circle-check"></i></span>
                                            80+ Languages
                                        </li>
                                        <li class="flex items-center gap-x-3">
                                            <span class="text-[22px]"><i class="fa-solid fa-circle-check"></i></span>
                                            Unlimited Text Corrections
                                        </li>
                                        <li class="flex items-center gap-x-3">
                                            <span class="text-[22px]"><i class="fa-solid fa-circle-check"></i></span>
                                            20 Rephrases Per Day
                                        </li>
                                        <li class="flex items-center gap-x-3">
                                            <span class="text-[22px]"><i class="fa-solid fa-circle-check"></i></span>
                                            Keyword Research & Clustering
                                        </li>
                                        <li class="flex items-center gap-x-3">
                                            <span class="text-[22px]"><i class="fa-regular fa-circle-check"></i></span>
                                            Integration with existing platforms
                                        </li>
                                    </ul>
                                    <!-- Pricing Data list -->

                                    <button class="btn is-honey-suckle-2 is-transparent btn-animation is-large is-rounded group block w-full">
                                        Get started now
                                        <i class="fa-regular fa-arrow-right ml-[10px] text-2xl leading-none"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- Price Item -->
                            <!-- Price Item -->
                            <div class="jos" data-jos_animation="flip-left">
                                <div class="h-full rounded-[10px] border-2 border-[#F4F4F4] bg-white p-8 lg:p-10">
                                    <!-- Pricing Content Top -->
                                    <div class="flex items-center justify-between gap-y-10">
                                        <div class="font-PublicSans text-3xl font-semibold leading-[1.2] text-[#0F1642] lg:text-[35px]">
                                            Premium
                                            <span class="mt-1 block font-body text-base leading-[1.5]">
                                                Per Month
                                            </span>
                                        </div>
                                        <span class="block font-PublicSans text-5xl font-bold text-[#0F1642] lg:text-6xl">$29</span>
                                    </div>
                                    <!-- Pricing Content Top -->
                                    <!-- Horizontal Line Separator -->
                                    <div class="my-[30px] h-px w-full bg-[#F4F4F4]"></div>
                                    <!-- Horizontal Line Separator -->
                                    <!-- Pricing Data list -->
                                    <ul class="mb-10 flex flex-col gap-y-4 text-base font-semibold text-[#0F1642]">
                                        <li class="flex items-center gap-x-3">
                                            <span class="text-[22px]"><i class="fa-solid fa-circle-check"></i></span>
                                            Unlimited Rewrites and Spices
                                        </li>
                                        <li class="flex items-center gap-x-3">
                                            <span class="text-[22px]"><i class="fa-solid fa-circle-check"></i></span>
                                            Unlimited Languages
                                        </li>
                                        <li class="flex items-center gap-x-3">
                                            <span class="text-[22px]"><i class="fa-solid fa-circle-check"></i></span>
                                            Unlimited Text Corrections
                                        </li>
                                        <li class="flex items-center gap-x-3">
                                            <span class="text-[22px]"><i class="fa-solid fa-circle-check"></i></span>
                                            Unlimited Word Count
                                        </li>
                                        <li class="flex items-center gap-x-3">
                                            <span class="text-[22px]"><i class="fa-solid fa-circle-check"></i></span>
                                            Keyword Research & Clustering
                                        </li>
                                        <li class="flex items-center gap-x-3">
                                            <span class="text-[22px]"><i class="fa-solid fa-circle-check"></i></span>
                                            Integration with existing platforms
                                        </li>
                                    </ul>
                                    <!-- Pricing Data list -->

                                    <button class="btn is-honey-suckle-2 is-transparent btn-animation is-large is-rounded group block w-full">
                                        Get started now
                                        <i class="fa-regular fa-arrow-right ml-[10px] text-2xl leading-none"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- Price Item -->
                        </div>
                        <!-- Price List -->
                    </div>
                    <!-- Section Container -->
                </div>
                <!-- Section Space -->
            </section>
            <!-- Pricing Section End -->

            <!-- Horizontal Text Slider -->
            <div class="overflow-hidden bg-[#2B13B9] py-5 font-Sora text-3xl font-semibold leading-[1.4] tracking-[1px] text-ColorHoneySuckle">
                <!-- Horizontal Slider Block-->
                <div class="horizontal-slide-from-right-to-left flex gap-x-[30px]">
                    <span class="flex whitespace-nowrap">Article </span>
                    <img src="{{ asset('assets/img/icons/icon-honey-suckle-star-of-life.svg') }}" alt="star-of-life" width="37" height="35" />
                    <span class="flex whitespace-nowrap">Blog Post Creation </span>
                    <img src="{{ asset('assets/img/icons/icon-honey-suckle-star-of-life.svg') }}" alt="star-of-life" width="37" height="35" />
                    <span class="flex whitespace-nowrap">Social Media Post </span>
                    <img src="{{ asset('assets/img/icons/icon-honey-suckle-star-of-life.svg') }}" alt="star-of-life" width="37" height="35" />
                    <span class="flex whitespace-nowrap">Product Description </span>
                    <img src="{{ asset('assets/img/icons/icon-honey-suckle-star-of-life.svg') }}" alt="star-of-life" width="37" height="35" />
                    <span class="flex whitespace-nowrap">Email Content </span>
                    <img src="{{ asset('assets/img/icons/icon-honey-suckle-star-of-life.svg') }}" alt="star-of-life" width="37" height="35" />
                    <span class="flex whitespace-nowrap">Article </span>
                    <img src="{{ asset('assets/img/icons/icon-honey-suckle-star-of-life.svg') }}" alt="star-of-life" width="37" height="35" />
                    <span class="flex whitespace-nowrap">Blog Post Creation </span>
                    <img src="{{ asset('assets/img/icons/icon-honey-suckle-star-of-life.svg') }}" alt="star-of-life" width="37" height="35" />
                    <span class="flex whitespace-nowrap">Social Media Post </span>
                    <img src="{{ asset('assets/img/icons/icon-honey-suckle-star-of-life.svg') }}" alt="star-of-life" width="37" height="35" />
                    <span class="flex whitespace-nowrap">Product Description </span>
                    <img src="{{ asset('assets/img/icons/icon-honey-suckle-star-of-life.svg') }}" alt="star-of-life" width="37" height="35" />
                    <span class="flex whitespace-nowrap">Email Content </span>
                    <img src="{{ asset('assets/img/icons/icon-honey-suckle-star-of-life.svg') }}" alt="star-of-life" width="37" height="35" />
                </div>
                <!-- Horizontal Slider Block-->
            </div>
            <!-- Horizontal Text Slider -->

            <!-- Testimonial Section Start -->
            <section class="section-testimonial">
                <!-- Section Space -->
                <div class="section-space">
                    <!-- Section Container -->
                    <div class="container-default">
                        <!-- Section Content Wrapper -->
                        <div class="jos mb-[60px] xl:mb-20">
                            <!-- Section Content Block -->
                            <div class="mx-auto max-w-[746px]">
                                <div class="mb-5">
                                    <h2 class="text-center font-PublicSans text-4xl font-semibold leading-[1.05] -tracking-[2px] text-[#0F1642] sm:text-5xl lg:text-6xl xl:text-[70px] xxl:text-[80px]">
                                        User stories with our AI content generator
                                    </h2>
                                </div>
                            </div>
                            <!-- Section Content Block -->
                        </div>
                        <!-- Section Content Wrapper -->

                        <!-- Testimonial Slider -->
                        <div class="jos swiper testimonial-one relative">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="flex flex-col gap-12 md:flex-row md:gap-16 lg:gap-[90px] xl:gap-[134px]">
                                        <div class="mx-auto h-64 w-64 overflow-hidden rounded-[10px] md:mx-0 lg:h-[390px] lg:w-[416px]">
                                            <img src="{{ asset('assets/img/th-14/testimonial-user-1.jpg') }}" alt="testimonial-user-1" width="416" height="390" class="h-full w-full object-cover" />
                                        </div>
                                        <div class="flex-1 text-[#0F1642]">
                                            <blockquote class="mb-10 text-xl font-semibold -tracking-[1px] lg:text-2xl xl:text-3xl">
                                                I highly recommend this tool. I love being able to
                                                have great help with my copywriting. As a business
                                                owner & a team, it has enabled my business to run
                                                smoothly. Creating content for my business is much
                                                easier.
                                            </blockquote>
                                            <div>
                                                <span class="block text-xl font-semibold">Robertson Paul</span>
                                                <span class="block">Co-founder@ xyz company</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="flex flex-col gap-12 md:flex-row md:gap-16 lg:gap-[90px] xl:gap-[134px]">
                                        <div class="mx-auto h-64 w-64 overflow-hidden rounded-[10px] md:mx-0 lg:h-[390px] lg:w-[416px]">
                                            <img src="{{ asset('assets/img/th-14/testimonial-user-1.jpg') }}" alt="testimonial-user-1" width="416" height="390" class="h-full w-full object-cover" />
                                        </div>
                                        <div class="flex-1 text-[#0F1642]">
                                            <blockquote class="mb-10 text-xl font-semibold -tracking-[1px] lg:text-2xl xl:text-3xl">
                                                I highly recommend this tool. I love being able to
                                                have great help with my copywriting. As a business
                                                owner & a team, it has enabled my business to run
                                                smoothly. Creating content for my business is much
                                                easier.
                                            </blockquote>
                                            <div>
                                                <span class="block text-xl font-semibold">Robertson Paul</span>
                                                <span class="block">Co-founder@ xyz company</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="flex flex-col gap-12 md:flex-row md:gap-16 lg:gap-[90px] xl:gap-[134px]">
                                        <div class="mx-auto h-64 w-64 overflow-hidden rounded-[10px] md:mx-0 lg:h-[390px] lg:w-[416px]">
                                            <img src="{{ asset('assets/img/th-14/testimonial-user-1.jpg') }}" alt="testimonial-user-1" width="416" height="390" class="h-full w-full object-cover" />
                                        </div>
                                        <div class="flex-1 text-[#0F1642]">
                                            <blockquote class="mb-10 text-xl font-semibold -tracking-[1px] lg:text-2xl xl:text-3xl">
                                                I highly recommend this tool. I love being able to
                                                have great help with my copywriting. As a business
                                                owner & a team, it has enabled my business to run
                                                smoothly. Creating content for my business is much
                                                easier.
                                            </blockquote>
                                            <div>
                                                <span class="block text-xl font-semibold">Robertson Paul</span>
                                                <span class="block">Co-founder@ xyz company</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- SLider Navigation -->
                            <div class="relative bottom-0 left-[calc(50%-_40px)] z-10 mt-10 flex gap-6 text-4xl text-[#0F1642] lg:absolute lg:left-[510px] lg:mt-0 xl:left-[550px]">
                                <div class="slider-nav-btn-prev">
                                    <i class="fa-sharp fa-regular fa-arrow-left-long"></i>
                                </div>
                                <div class="slider-nav-btn-next">
                                    <i class="fa-sharp fa-regular fa-arrow-right-long"></i>
                                </div>
                            </div>
                        </div>
                        <!-- Testimonial Slider -->
                    </div>
                    <!-- Section Container -->
                </div>
                <!-- Section Space -->
            </section>
            <!-- Testimonial Section End -->
        </main>

        <!-- Footer Section Start -->
        <footer class="section-footer">
            <div class="relative z-10 bg-[#2B13B9]">
                <!-- Footer Area Top -->
                <div class="py-20 lg:py-[100px] xl:pb-[100px] xl:pt-[130px]">
                    <div class="container-default">
                        <div class="flex flex-wrap items-center text-center xxl:text-left justify-center xxl:justify-between gap-10">
                            <div class="max-w-[695px]">
                                <h2 class="font-PublicSans text-4xl font-semibold leading-[1.05] -tracking-[2px] text-white sm:text-5xl lg:text-6xl xl:text-[70px] xxl:text-[80px]">
                                    Ready to boost your writing power
                                </h2>
                            </div>
                            <div class="mb-3 flex flex-wrap justify-center gap-6">
                                <a href="#" class="btn is-honey-suckle is-transparent btn-animation is-large is-rounded group inline-block">
                                    <span>
                                        Get started— it's free
                                        <i class="fa-regular fa-arrow-right ml-[10px] text-2xl leading-none"></i>
                                    </span>
                                </a>
                                <a href="#" class="btn is-outline-white btn-animation is-large is-rounded group inline-block"><span>Ask us questions</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer Area Top -->
                <!-- Footer Area Center -->
                <div class="text-white/80">
                    <!-- Footer Center Spacing -->
                    <div class="pb-[60px] lg:pb-20">
                        <!-- Section Container -->
                        <div class="container-default">
                            <!-- Footer Widget List -->
                            <div class="grid gap-x-16 gap-y-10 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-[1fr_repeat(3,_auto)] xl:gap-x-20 xxl:gap-x-32">
                                <!-- Footer Widget Item -->
                                <div class="flex flex-col gap-y-7 md:col-span-3 lg:col-span-1">
                                    <!-- Footer Logo -->
                                    <a href="{{ url('index') }}">
                                        <img src="{{ asset('assets/img/logo-honey-suckle-light.png') }}" alt="Masco" width="109" height="24" />
                                    </a>
                                    <!-- Footer Content -->
                                    <div>
                                        <!-- Footer About Text -->
                                        <div class="lg:max-w-[460px]">
                                            At Masco, we build AI-powered writing software with care
                                            and expertise. Our team of skilled engineers and
                                            designers developed this software to deliver
                                            high-quality content.
                                        </div>
                                        <!-- Footer Content -->
                                        <div class="mt-10">
                                            &copy; Copyright 2024, All Rights Reserved by PixcelsThemes
                                        </div>
                                    </div>
                                </div>
                                <!-- Footer Widget Item -->

                                <!-- Footer Widget Item -->
                                <div class="flex flex-col gap-y-7 md:col-span-1 lg:col-span-1">
                                    <!-- Footer Widget Title -->
                                    <div class="text-xl font-semibold capitalize text-white">
                                        Primary Pages
                                    </div>
                                    <!-- Footer Navbar -->
                                    <ul class="flex flex-col gap-y-[10px] capitalize">
                                        <li>
                                            <a href="{{ url('index') }}" class="text-white/80 underline-offset-4 transition-all duration-300 ease-linear hover:underline">Home</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('about') }}" class="text-white/80 underline-offset-4 transition-all duration-300 ease-linear hover:underline">About Us</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('services') }}" class="text-white/80 underline-offset-4 transition-all duration-300 ease-linear hover:underline">Services</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('pricing') }}" class="text-white/80 underline-offset-4 transition-all duration-300 ease-linear hover:underline">pricing</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('contact') }}" class="text-white/80 underline-offset-4 transition-all duration-300 ease-linear hover:underline">Contact</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Footer Widget Item -->

                                <!-- Footer Widget Item -->
                                <div class="flex flex-col gap-y-6 md:col-span-1 lg:col-span-1">
                                    <!-- Footer Title -->
                                    <div class="text-xl font-semibold capitalize text-white">
                                        Utility pages
                                    </div>
                                    <!-- Footer Title -->

                                    <!-- Footer Navbar -->
                                    <ul class="flex flex-col gap-y-[10px] capitalize">
                                        <li>
                                            <a href="{{ url('signup') }}" class="text-white/80 underline-offset-4 transition-all duration-300 ease-linear hover:underline">Signup</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('login') }}" class="text-white/80 underline-offset-4 transition-all duration-300 ease-linear hover:underline">Login</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('error-404') }}" class="text-white/80 underline-offset-4 transition-all duration-300 ease-linear hover:underline">404 Not found</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('resetpassword') }}" class="text-white/80 underline-offset-4 transition-all duration-300 ease-linear hover:underline">Password Reset</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Footer Widget Item-->

                                <!-- Footer Widget Item -->
                                <div class="flex flex-col gap-y-6 md:col-span-1 lg:col-span-1">
                                    <!-- Footer Title -->
                                    <div class="text-xl font-semibold capitalize text-white">
                                        Resources
                                    </div>
                                    <!-- Footer Title -->

                                    <!-- Footer Navbar -->
                                    <ul class="flex flex-col gap-y-[10px] capitalize">
                                        <li>
                                            <a href="https://www.example.com/" target="_blank" rel="noopener noreferrer" class="text-white/80 underline-offset-4 transition-all duration-300 ease-linear hover:underline">Support</a>
                                        </li>
                                        <li>
                                            <a href="https://www.example.com/" target="_blank" rel="noopener noreferrer" class="text-white/80 underline-offset-4 transition-all duration-300 ease-linear hover:underline">Privacy policy</a>
                                        </li>
                                        <li>
                                            <a href="https://www.example.com/" target="_blank" rel="noopener noreferrer" class="text-white/80 underline-offset-4 transition-all duration-300 ease-linear hover:underline">Terms & Conditions</a>
                                        </li>
                                        <li>
                                            <a href="https://www.example.com/" target="_blank" rel="noopener noreferrer" class="text-white/80 underline-offset-4 transition-all duration-300 ease-linear hover:underline">Strategic finance</a>
                                        </li>
                                        <li>
                                            <a href="https://www.example.com/" target="_blank" rel="noopener noreferrer" class="text-white/80 underline-offset-4 transition-all duration-300 ease-linear hover:underline">Video guide</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Footer Widget Item -->
                            </div>
                            <!-- Footer Widget List -->
                        </div>
                        <!-- Section Container -->
                    </div>
                    <!-- Footer Center Spacing -->
                </div>
                <!-- Footer Area Center -->
                <!-- Footer Background Shape -->
                <div class="absolute bottom-0 left-1/2 -z-10 h-auto w-full -translate-x-1/2">
                    <img src="{{ asset('assets/img/elements/home-14-footer-shape.svg') }}" alt="home-14-hero-shape" width="1600" height="510" class="h-auto w-full" />
                </div>
                <!-- Footer Background Shape -->
            </div>
        </footer>
        <!-- Footer Section End -->
    </div>

    <x-scripts/>
</body>

</html>