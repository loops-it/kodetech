@extends('layout.layout1')

@section('headerLogo')
<img src="{{ asset('assets/img/logo-blue-dark.png') }}" alt="Masco" width="109" height="24" />
@endsection



@section('headButtons')
<div class="flex items-center gap-6">
    <a href="{{ url('login') }}" class="btn-text hidden hover:text-ColorBlue md:inline-block">Login</a>
    <a href="{{ url('signup') }}" class="btn is-blue is-rounded btn-animation group hidden md:inline-block"><span>Sign up free</span></a>
    <!-- Responsive Offcanvas Menu Button -->
    <div class="block lg:hidden">
        <button id="openBtn" class="hamburger-menu mobile-menu-trigger">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
</div>

@endsection



@section('content')

  <!-- Breadcrumb Section Start -->
  <section class="section-breadcrumb">
    <!-- Breadcrumb Section Spacer -->
    <div class="breadcrumb-wrapper">
        <!-- Section Container -->
        <div class="container-default">
            <div class="breadcrumb-block">
                <h1 class="breadcrumb-title">Our Services</h1>
                <ul class="breadcrumb-nav">
                    <li><a href="{{ url('index') }}">Home</a></li>
                    <li>Our Services</li>
                </ul>
            </div>
        </div>
        <!-- Section Container -->

        <!-- Breadcrumb Shape - 1 -->
        <div class="absolute left-0 top-0 -z-10">
            <img src="{{ asset('assets/img/elements/breadcrumb-shape-1.svg') }}" alt="hero-shape-1" width="291" height="380" />
        </div>

        <!-- Breadcrumb Shape - 2 -->
        <div class="absolute bottom-0 right-0 -z-[1]">
            <img src="{{ asset('assets/img/elements/breadcrumb-shape-2.svg') }}" alt="hero-shape-2" width="291" height="380" />
        </div>
    </div>
    <!-- Breadcrumb Section Spacer -->
</section>
<!-- Breadcrumb Section End -->

<!-- Service Section Start -->
<div class="section-service">
    <div class="relative z-10 overflow-hidden">
        <!-- Section Space -->
        <div class="section-space">
            <!-- Section Container -->
            <div class="container-default">
                <!-- Service List -->
                <div class="grid gap-6 sm:grid-cols-2">
                    <!-- Service Item -->
                    <div class="jos" data-jos_delay="0">
                        <div class="group rounded-[10px] bg-white p-8 transition-all duration-300 ease-in-out hover:shadow-[0_4px_60px_0_rgba(10,16,47,0.06)] lg:p-10">
                            <div class="flex flex-col gap-x-10 gap-y-6 sm:gap-y-8 lg:flex-row">
                                <div class="relative mx-auto flex w-16 items-center justify-center lg:w-[98px]">
                                    <img src="{{ asset('assets/img/icons/icon-black-service-1.svg') }}" alt="icon-service-1" width="98" height="100" class="opcity-100 h-auto w-full transition-all duration-300 ease-in-out group-hover:opacity-0" />
                                    <img src="{{ asset('assets/img/icons/icon-blue-service-1.svg') }}" alt="icon-service-1" width="98" height="100" class="absolute h-auto w-full opacity-0 transition-all duration-300 ease-in-out group-hover:opacity-100" />
                                </div>
                                <div class="flex-1 text-center lg:text-left">
                                    <div class="mb-4 text-xl font-semibold leading-[1.33] -tracking-[0.5px] text-ColorBlack lg:text-2xl">
                                        Branding & Digital Strategies
                                    </div>
                                    <p class="mb-5 line-clamp-2 text-ColorBlack/80">
                                        Brand strategy is all about developing a unique
                                        identity that distinguishes your business from
                                    </p>
                                    <a href="{{ url('servicedetails') }}" class="inline-flex items-center gap-x-2 text-base font-bold text-ColorBlack group-hover:text-ColorBlue">Find out more
                                        <span class="transition-all duration-300 ease-in-out group-hover:translate-x-2">
                                            <i class="fa-solid fa-arrow-right"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Service Item -->
                    <!-- Service Item -->
                    <div class="jos" data-jos_delay="0.3">
                        <div class="group rounded-[10px] bg-white p-8 transition-all duration-300 ease-in-out hover:shadow-[0_4px_60px_0_rgba(10,16,47,0.06)] lg:p-10">
                            <div class="flex flex-col gap-x-10 gap-y-6 sm:gap-y-8 lg:flex-row">
                                <div class="relative mx-auto flex w-16 items-center justify-center lg:w-[98px]">
                                    <img src="{{ asset('assets/img/icons/icon-black-service-2.svg') }}" alt="icon-service-2" width="98" height="100" class="opcity-100 h-auto w-full transition-all duration-300 ease-in-out group-hover:opacity-0" />
                                    <img src="{{ asset('assets/img/icons/icon-blue-service-2.svg') }}" alt="icon-service-2" width="98" height="100" class="absolute h-auto w-full opacity-0 transition-all duration-300 ease-in-out group-hover:opacity-100" />
                                </div>
                                <div class="flex-1 text-center lg:text-left">
                                    <div class="mb-4 text-xl font-semibold leading-[1.33] -tracking-[0.5px] text-ColorBlack lg:text-2xl">
                                        Web Design & App Development
                                    </div>
                                    <p class="mb-5 line-clamp-2 text-ColorBlack/80">
                                        Web design & development is an umbrella term that
                                        describes the process of creating a website
                                    </p>
                                    <a href="{{ url('servicedetails') }}" class="inline-flex items-center gap-x-2 text-base font-bold text-ColorBlack group-hover:text-ColorBlue">Find out more
                                        <span class="transition-all duration-300 ease-in-out group-hover:translate-x-2">
                                            <i class="fa-solid fa-arrow-right"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Service Item -->
                    <!-- Service Item -->
                    <div class="jos" data-jos_delay="0.6">
                        <div class="group rounded-[10px] bg-white p-8 transition-all duration-300 ease-in-out hover:shadow-[0_4px_60px_0_rgba(10,16,47,0.06)] lg:p-10">
                            <div class="flex flex-col gap-x-10 gap-y-6 sm:gap-y-8 lg:flex-row">
                                <div class="relative mx-auto flex w-16 items-center justify-center lg:w-[98px]">
                                    <img src="{{ asset('assets/img/icons/icon-black-service-3.svg') }}" alt="icon-service-3" width="98" height="100" class="opcity-100 h-auto w-full transition-all duration-300 ease-in-out group-hover:opacity-0" />
                                    <img src="{{ asset('assets/img/icons/icon-blue-service-3.svg') }}" alt="icon-service-3" width="98" height="100" class="absolute h-auto w-full opacity-0 transition-all duration-300 ease-in-out group-hover:opacity-100" />
                                </div>
                                <div class="flex-1 text-center lg:text-left">
                                    <div class="mb-4 text-xl font-semibold leading-[1.33] -tracking-[0.5px] text-ColorBlack lg:text-2xl">
                                        Results-Driven Digital Marketing
                                    </div>
                                    <p class="mb-5 line-clamp-2 text-ColorBlack/80">
                                        Digital marketing potential customers using the
                                        internet & other forms of digital communication
                                    </p>
                                    <a href="{{ url('servicedetails') }}" class="inline-flex items-center gap-x-2 text-base font-bold text-ColorBlack group-hover:text-ColorBlue">Find out more
                                        <span class="transition-all duration-300 ease-in-out group-hover:translate-x-2">
                                            <i class="fa-solid fa-arrow-right"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Service Item -->
                    <!-- Service Item -->
                    <div class="jos" data-jos_delay="0.9">
                        <div class="group rounded-[10px] bg-white p-8 transition-all duration-300 ease-in-out hover:shadow-[0_4px_60px_0_rgba(10,16,47,0.06)] lg:p-10">
                            <div class="flex flex-col gap-x-10 gap-y-6 sm:gap-y-8 lg:flex-row">
                                <div class="relative mx-auto flex w-16 items-center justify-center lg:w-[98px]">
                                    <img src="{{ asset('assets/img/icons/icon-black-service-4.svg') }}" alt="icon-service-4" width="98" height="100" class="opcity-100 h-auto w-full transition-all duration-300 ease-in-out group-hover:opacity-0" />
                                    <img src="{{ asset('assets/img/icons/icon-blue-service-4.svg') }}" alt="icon-service-4" width="98" height="100" class="absolute h-auto w-full opacity-0 transition-all duration-300 ease-in-out group-hover:opacity-100" />
                                </div>
                                <div class="flex-1 text-center lg:text-left">
                                    <div class="mb-4 text-xl font-semibold leading-[1.33] -tracking-[0.5px] text-ColorBlack lg:text-2xl">
                                        Custom Software Development
                                    </div>
                                    <p class="mb-5 line-clamp-2 text-ColorBlack/80">
                                        Custom Software Development is the process of
                                        conceptualizing, designing, building & deploying
                                    </p>
                                    <a href="{{ url('servicedetails') }}" class="inline-flex items-center gap-x-2 text-base font-bold text-ColorBlack group-hover:text-ColorBlue">Find out more
                                        <span class="transition-all duration-300 ease-in-out group-hover:translate-x-2">
                                            <i class="fa-solid fa-arrow-right"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Service Item -->
                    <!-- Service Item -->
                    <div class="jos" data-jos_delay="1.2">
                        <div class="group rounded-[10px] bg-white p-8 transition-all duration-300 ease-in-out hover:shadow-[0_4px_60px_0_rgba(10,16,47,0.06)] lg:p-10">
                            <div class="flex flex-col gap-x-10 gap-y-6 sm:gap-y-8 lg:flex-row">
                                <div class="relative mx-auto flex w-16 items-center justify-center lg:w-[98px]">
                                    <img src="{{ asset('assets/img/icons/icon-black-service-5.svg') }}" alt="icon-service-5" width="98" height="100" class="opcity-100 h-auto w-full transition-all duration-300 ease-in-out group-hover:opacity-0" />
                                    <img src="{{ asset('assets/img/icons/icon-blue-service-5.svg') }}" alt="icon-service-5" width="98" height="100" class="absolute h-auto w-full opacity-0 transition-all duration-300 ease-in-out group-hover:opacity-100" />
                                </div>
                                <div class="flex-1 text-center lg:text-left">
                                    <div class="mb-4 text-xl font-semibold leading-[1.33] -tracking-[0.5px] text-ColorBlack lg:text-2xl">
                                        Search Engine Optimization
                                    </div>
                                    <p class="mb-5 line-clamp-2 text-ColorBlack/80">
                                        SEO is the practice of orienting your website to
                                        rank higher on a sear engine results more traffic
                                    </p>
                                    <a href="{{ url('servicedetails') }}" class="inline-flex items-center gap-x-2 text-base font-bold text-ColorBlack group-hover:text-ColorBlue">Find out more
                                        <span class="transition-all duration-300 ease-in-out group-hover:translate-x-2">
                                            <i class="fa-solid fa-arrow-right"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Service Item -->
                    <!-- Service Item -->
                    <div class="jos" data-jos_delay="1.5">
                        <div class="group rounded-[10px] bg-white p-8 transition-all duration-300 ease-in-out hover:shadow-[0_4px_60px_0_rgba(10,16,47,0.06)] lg:p-10">
                            <div class="flex flex-col gap-x-10 gap-y-6 sm:gap-y-8 lg:flex-row">
                                <div class="relative mx-auto flex w-16 items-center justify-center lg:w-[98px]">
                                    <img src="{{ asset('assets/img/icons/icon-black-service-6.svg') }}" alt="icon-service-6" width="98" height="100" class="opcity-100 h-auto w-full transition-all duration-300 ease-in-out group-hover:opacity-0" />
                                    <img src="{{ asset('assets/img/icons/icon-blue-service-6.svg') }}" alt="icon-service-6" width="98" height="100" class="absolute h-auto w-full opacity-0 transition-all duration-300 ease-in-out group-hover:opacity-100" />
                                </div>
                                <div class="flex-1 text-center lg:text-left">
                                    <div class="mb-4 text-xl font-semibold leading-[1.33] -tracking-[0.5px] text-ColorBlack lg:text-2xl">
                                        Social Media Strategies
                                    </div>
                                    <p class="mb-5 line-clamp-2 text-ColorBlack/80">
                                        A social media strategy is an outline of content
                                        that your business will post, the responsibilities
                                    </p>
                                    <a href="{{ url('servicedetails') }}" class="inline-flex items-center gap-x-2 text-base font-bold text-ColorBlack group-hover:text-ColorBlue">Find out more
                                        <span class="transition-all duration-300 ease-in-out group-hover:translate-x-2">
                                            <i class="fa-solid fa-arrow-right"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Service Item -->
                </div>
                <!-- Service List -->
            </div>
            <!-- Section Container -->
        </div>
        <!-- Section Space -->
    </div>
</div>
<!-- Service Section End -->

<!-- Horizontal Separator -->
<div class="horizontal-line bg-ColorBlack"></div>

<!-- Service Hero Section Start -->
<section class="section-about-hero">
    <!-- Section Space -->
    <div class="section-space">
        <!-- Section Container -->
        <div class="container-custom has-container-custom">
            <!-- About Hero Area -->
            <div class="grid items-center gap-10 lg:grid-cols-2 lg:gap-[60px] xl:gap-[100px] xxl:grid-cols-[1fr_minmax(0,_1.1fr)]">
                <!-- About Hero Image Block -->
                <div class="jos order-2 lg:order-1" data-jos_animation="fade-left" data-jos_delay="0">
                    <div class="relative flex items-center justify-center mx-auto lg:mx-0 max-w-full sm:max-w-[80%] md:max-w-[70%] lg:max-w-full">
                        <img src="{{ asset('assets/img/th-1/about-hero-2.jpg') }}" alt="hero image" width="580" height="550" class="h-auto w-full" />
                        <a data-fslightbox="gallery" href="https://www.youtube.com/watch?v=3nQNiWdeH2Q" class="group group absolute flex h-[100px] w-[100px] items-center justify-center rounded-[50%] bg-white text-ColorBlue" aria-label="video-play">
                            <span class="text-2xl transition-all duration-300 ease-linear group-hover:scale-110"><i class="fa-solid fa-play"></i></span>
                        </a>
                    </div>
                </div>
                <!-- About Hero Image Block -->
                <!-- About Hero Content Block -->
                <div class="jos order-1 lg:order-2" data-jos_animation="fade-right" data-jos_delay="0.3">
                    <!-- Section Wrapper -->
                    <div>
                        <!-- Section Block -->
                        <div class="mb-5">
                            <h2>
                                Our vision is to build brands and provide world-class
                                experiences to our clients
                            </h2>
                        </div>
                        <!-- Section Block -->
                        <p>
                            SINCE 1998, we transform bold business ideas into
                            exceptional digital products. We ideate, design, and
                            develop data-driven digital products made to answer
                            business challenges.
                        </p>
                        <!-- Horizontal Line Separator -->
                        <div class="my-7 h-px w-full bg-ColorBlack opacity-10 xl:my-10 xxl:my-14"></div>
                        <!-- BlockQuote Block-->
                        <div>
                            <blockquote class="mb-6 font-semibold italic text-opacity-80">
                                “We love what we do & create partnerships with our
                                clients to ensure their digital transformation is
                                positioned for long-term success.”
                            </blockquote>
                            <div class="flex flex-col items-center gap-4 lg:flex-row">
                                <img src="{{ asset('assets/img/th-1/about-hero-user-blockquote-img.jpg') }}" alt="about-hero-user-blockquote-img" width="60" height="60" class="mx-auto h-[60px] w-[60px] rounded-[50%] lg:mx-0" />
                                <div>
                                    <span class="block font-semibold">Karen Lynn</span>
                                    <span class="text-sm text-opacity-80">CEO & Co-founder @ Company</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Section Wrapper -->
                </div>
                <!-- About Hero Content Block -->
            </div>
            <!-- About Hero Area -->
        </div>
        <!-- Section Container -->
    </div>
    <!-- Section Space -->
</section>
<!-- Service Hero Section End -->

<!-- Pricing Section Start -->
<section class="section-pricing">
    <div class="bg-ColorOffWhite">
        <!-- Section Space -->
        <div class="section-space">
            <!-- Section Container -->
            <div class="container-default">
                <!-- Section Content Wrapper -->
                <div class="jos mb-[60px] xl:mb-20">
                    <!-- Section Content Block -->
                    <div class="mx-auto max-w-[600px]">
                        <h2 class="text-center">
                            Choice the right pricing plan that suits your need
                        </h2>
                    </div>
                    <!-- Section Content Block -->
                </div>
                <!-- Section Content Wrapper -->

                <!-- Pricing List -->
                <div class="grid gap-x-6 gap-y-10 md:grid-cols-2 lg:grid-cols-3">
                    <!-- Pricing Item -->
                    <div class="jos" data-jos_animation="flip-left" data-jos_delay="0">
                        <div class="hover-solid-shadow h-full">
                            <div class="rounded-[10px] border-2 border-ColorBlack bg-white p-7 xl:p-10 h-full">
                                <!-- Pricing Content Top -->
                                <div class="text-center text-ColorBlack">
                                    <span class="text-xl font-bold">Free Plan</span>
                                    <div class="text-[28px] font-normal leading-[2.85]">
                                        $<span class="text-[48px] font-bold leading-[1.3] xl:text-[58px]">00</span>/month
                                    </div>
                                    <span class="text-sm text-ColorBlack/70">No credit card required</span>
                                </div>
                                <!-- Pricing Content Top -->
                                <!-- Horizontal Line Separator -->
                                <div class="my-10 h-px w-full bg-ColorBlack/10"></div>
                                <!-- Horizontal Line Separator -->
                                <!-- Pricing Data list -->
                                <ul class="flex flex-col gap-y-6 text-base font-semibold text-ColorBlack xl:px-[18px]">
                                    <li class="flex gap-x-3">
                                        <span class="text-xl">
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                        Unlimited chats & websites
                                    </li>
                                    <li class="flex gap-x-3">
                                        <span class="text-xl">
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                        60-day conversations history
                                    </li>
                                    <li class="flex gap-x-3">
                                        <span class="text-xl">
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                        Basic widget customization
                                    </li>
                                    <li class="flex gap-x-3">
                                        <span class="text-xl">
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                        Web, desktop & mobile apps
                                    </li>
                                    <li class="flex gap-x-3 text-ColorBlack/10">
                                        <span class="text-xl">
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                        Engage visitors via visitor list
                                    </li>
                                    <li class="flex gap-x-3 text-ColorBlack/10">
                                        <span class="text-xl">
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                        Engage with automatic messages
                                    </li>
                                </ul>
                                <!-- Pricing Data list -->
                                <div class="mt-10 flex justify-center">
                                    <button class="btn is-white is-rounded is-large group w-full border-2">
                                        Purchase now
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Pricing Item -->
                    <!-- Pricing Item -->
                    <div class="jos" data-jos_animation="flip-left" data-jos_delay="0">
                        <div class="hover-solid-shadow h-full">
                            <div class="rounded-[10px] border-2 border-ColorBlack bg-white p-7 xl:p-10 h-full">
                                <!-- Pricing Content Top -->
                                <div class="text-center text-ColorBlack">
                                    <span class="text-xl font-bold">Popular Plan</span>
                                    <div class="text-[28px] font-normal leading-[2.85]">
                                        $<span class="text-[48px] font-bold leading-[1.3] xl:text-[58px]">199</span>/month
                                    </div>
                                    <span class="text-sm text-ColorBlack/70">No credit card required</span>
                                </div>
                                <!-- Pricing Content Top -->
                                <!-- Horizontal Line Separator -->
                                <div class="my-10 h-px w-full bg-ColorBlack/10"></div>
                                <!-- Horizontal Line Separator -->
                                <!-- Pricing Data list -->
                                <ul class="flex flex-col gap-y-6 text-base font-semibold text-ColorBlack xl:px-[18px]">
                                    <li class="flex gap-x-3">
                                        <span class="text-xl">
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                        Live chat + email + FB Messenger
                                    </li>
                                    <li class="flex gap-x-3">
                                        <span class="text-xl">
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                        3-year conversations history
                                    </li>
                                    <li class="flex gap-x-3">
                                        <span class="text-xl">
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                        Advanced widget customization
                                    </li>
                                    <li class="flex gap-x-3">
                                        <span class="text-xl">
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                        24/7 system monitoring facility
                                    </li>
                                    <li class="flex gap-x-3">
                                        <span class="text-xl">
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                        Engage visitors via visitor list
                                    </li>
                                    <li class="flex gap-x-3">
                                        <span class="text-xl">
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                        Engage with automatic messages
                                    </li>
                                </ul>
                                <!-- Pricing Data list -->
                                <div class="mt-10 flex justify-center">
                                    <button class="btn is-blue is-rounded is-large group w-full border-2">
                                        Purchase now
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Pricing Item -->
                    <!-- Pricing Item -->
                    <div class="jos" data-jos_animation="flip-left" data-jos_delay="0">
                        <div class="hover-solid-shadow h-full">
                            <div class="rounded-[10px] border-2 border-ColorBlack bg-white p-7 xl:p-10 h-full">
                                <!-- Pricing Content Top -->
                                <div class="text-center text-ColorBlack">
                                    <span class="text-xl font-bold">Standard Plan</span>
                                    <div class="text-[28px] font-normal leading-[2.85]">
                                        $<span class="text-[48px] font-bold leading-[1.3] xl:text-[58px]">49</span>/month
                                    </div>
                                    <span class="text-sm text-ColorBlack/70">No credit card required</span>
                                </div>
                                <!-- Pricing Content Top -->
                                <!-- Horizontal Line Separator -->
                                <div class="my-10 h-px w-full bg-ColorBlack/10"></div>
                                <!-- Horizontal Line Separator -->
                                <!-- Pricing Data list -->
                                <ul class="flex flex-col gap-y-6 text-base font-semibold text-ColorBlack xl:px-[18px]">
                                    <li class="flex gap-x-3">
                                        <span class="text-xl">
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                        Live chat + email + FB Messenger
                                    </li>
                                    <li class="flex gap-x-3">
                                        <span class="text-xl">
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                        3-year conversations history
                                    </li>
                                    <li class="flex gap-x-3">
                                        <span class="text-xl">
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                        Advanced widget customization
                                    </li>
                                    <li class="flex gap-x-3">
                                        <span class="text-xl">
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                        24/7 system monitoring facility
                                    </li>
                                    <li class="flex gap-x-3 text-ColorBlack/10">
                                        <span class="text-xl">
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                        Engage visitors via visitor list
                                    </li>
                                    <li class="flex gap-x-3 text-ColorBlack/10">
                                        <span class="text-xl">
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                        Engage with automatic messages
                                    </li>
                                </ul>
                                <!-- Pricing Data list -->
                                <div class="mt-10 flex justify-center">
                                    <button class="btn is-white is-rounded is-large group w-full border-2">
                                        Purchase now
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Pricing Item -->
                </div>
                <!-- Pricing List -->
            </div>
            <!-- Section Container -->
        </div>
        <!-- Section Space -->
    </div>
</section>
<!-- Pricing Section Start -->

<!-- FAQ Section Start -->
<section class="section-faq">
    <div class="relative z-10 overflow-hidden">
        <!-- Section Space -->
        <div class="section-space">
            <!-- Section Container -->
            <div class="container-default">
                <!-- Section Content Wrapper -->
                <div class="jos mb-[60px] xl:mb-20">
                    <!-- Section Content Block -->
                    <div class="mx-auto max-w-[625px]">
                        <h2 class="text-center">
                            Frequently asked questions about our digital agency
                        </h2>
                    </div>
                    <!-- Section Content Block -->
                </div>
                <!-- Section Content Wrapper -->
                <!-- FAQ Area -->
                <div class="jos">
                    <!-- Accordion List -->
                    <ul class="mx-auto max-w-[1076px] rounded-[10px] border border-ColorBlack">
                        <!-- Accordion Item -->
                        <li class="accordion-item active overflow-hidden border-b border-ColorBlack p-[30px] last:border-b-0">
                            <!-- Accordion Header -->
                            <div class="accordion-header flex justify-between gap-6 text-xl font-semibold text-ColorBlack">
                                <button class="flex-1 text-left">
                                    Q. What is a digital agency?
                                </button>
                                <div class="accordion-icon-1 relative flex h-5 w-5 items-center justify-center rounded-[50%] bg-ColorBlue">
                                    <span class="inline-block h-0.5 w-[10px] rounded-sm bg-white"></span>
                                    <span class="absolute inline-block h-[10px] w-0.5 rotate-0 rounded-sm bg-white"></span>
                                </div>
                            </div>
                            <!-- Accordion Header -->
                            <!-- Accordion Body -->
                            <div class="accordion-body max-w-[826px] opacity-80">
                                <p class="pt-5">
                                    A digital agency is a company that leverages digital
                                    channels to grow their clients’ brands online. ls and
                                    technologies such as web design, digital marketing,
                                    creative design and app development.
                                </p>
                            </div>
                            <!-- Accordion Body -->
                        </li>
                        <!-- Accordion Item -->
                        <!-- Accordion Item -->
                        <li class="accordion-item overflow-hidden border-b border-ColorBlack p-[30px] last:border-b-0">
                            <!-- Accordion Header -->
                            <div class="accordion-header flex justify-between gap-6 text-xl font-semibold text-ColorBlack">
                                <button class="flex-1 text-left">
                                    Q. What services does a digital agency provide?
                                </button>
                                <div class="accordion-icon-1 relative flex h-5 w-5 items-center justify-center rounded-[50%] bg-ColorBlue">
                                    <span class="inline-block h-0.5 w-[10px] rounded-sm bg-white"></span>
                                    <span class="absolute inline-block h-[10px] w-0.5 rotate-0 rounded-sm bg-white"></span>
                                </div>
                            </div>
                            <!-- Accordion Header -->
                            <!-- Accordion Body -->
                            <div class="accordion-body max-w-[826px] opacity-80">
                                <p class="pt-5">
                                    A digital agency is a company that leverages digital
                                    channels to grow their clients’ brands online. ls and
                                    technologies such as web design, digital marketing,
                                    creative design and app development.
                                </p>
                            </div>
                            <!-- Accordion Body -->
                        </li>
                        <!-- Accordion Item -->
                        <!-- Accordion Item -->
                        <li class="accordion-item overflow-hidden border-b border-ColorBlack p-[30px] last:border-b-0">
                            <!-- Accordion Header -->
                            <div class="accordion-header flex justify-between gap-6 text-xl font-semibold text-ColorBlack">
                                <button class="flex-1 text-left">
                                    Q. Hiring a digital agency vs hiring in-house: What is
                                    the difference?
                                </button>
                                <div class="accordion-icon-1 relative flex h-5 w-5 items-center justify-center rounded-[50%] bg-ColorBlue">
                                    <span class="inline-block h-0.5 w-[10px] rounded-sm bg-white"></span>
                                    <span class="absolute inline-block h-[10px] w-0.5 rotate-0 rounded-sm bg-white"></span>
                                </div>
                            </div>
                            <!-- Accordion Header -->
                            <!-- Accordion Body -->
                            <div class="accordion-body max-w-[826px] opacity-80">
                                <p class="pt-5">
                                    A digital agency is a company that leverages digital
                                    channels to grow their clients’ brands online. ls and
                                    technologies such as web design, digital marketing,
                                    creative design and app development.
                                </p>
                            </div>
                            <!-- Accordion Body -->
                        </li>
                        <!-- Accordion Item -->
                        <!-- Accordion Item -->
                        <li class="accordion-item overflow-hidden border-b border-ColorBlack p-[30px] last:border-b-0">
                            <!-- Accordion Header -->
                            <div class="accordion-header flex justify-between gap-6 text-xl font-semibold text-ColorBlack">
                                <button class="flex-1 text-left">
                                    Q. What questions should you ask when interviewing a
                                    digital agency?
                                </button>
                                <div class="accordion-icon-1 relative flex h-5 w-5 items-center justify-center rounded-[50%] bg-ColorBlue">
                                    <span class="inline-block h-0.5 w-[10px] rounded-sm bg-white"></span>
                                    <span class="absolute inline-block h-[10px] w-0.5 rotate-0 rounded-sm bg-white"></span>
                                </div>
                            </div>
                            <!-- Accordion Header -->
                            <!-- Accordion Body -->
                            <div class="accordion-body max-w-[826px] opacity-80">
                                <p class="pt-5">
                                    A digital agency is a company that leverages digital
                                    channels to grow their clients’ brands online. ls and
                                    technologies such as web design, digital marketing,
                                    creative design and app development.
                                </p>
                            </div>
                            <!-- Accordion Body -->
                        </li>
                        <!-- Accordion Item -->
                        <!-- Accordion Item -->
                        <li class="accordion-item overflow-hidden border-b border-ColorBlack p-[30px] last:border-b-0">
                            <!-- Accordion Header -->
                            <div class="accordion-header flex justify-between gap-6 text-xl font-semibold text-ColorBlack">
                                <button class="flex-1 text-left">
                                    Q. How do digital agencies charge for their services?
                                </button>
                                <div class="accordion-icon-1 relative flex h-5 w-5 items-center justify-center rounded-[50%] bg-ColorBlue">
                                    <span class="inline-block h-0.5 w-[10px] rounded-sm bg-white"></span>
                                    <span class="absolute inline-block h-[10px] w-0.5 rotate-0 rounded-sm bg-white"></span>
                                </div>
                            </div>
                            <!-- Accordion Header -->
                            <!-- Accordion Body -->
                            <div class="accordion-body max-w-[826px] opacity-80">
                                <p class="pt-5">
                                    A digital agency is a company that leverages digital
                                    channels to grow their clients’ brands online. ls and
                                    technologies such as web design, digital marketing,
                                    creative design and app development.
                                </p>
                            </div>
                            <!-- Accordion Body -->
                        </li>
                        <!-- Accordion Item -->
                    </ul>
                    <!-- Accordion List -->

                    <div class="jos mt-[60px] flex justify-center xl:mt-20">
                        <a href="{{ url('contact') }}" class="btn is-blue is-rounded btn-animation is-large group"><span>Still, have any questions? Contact us</span></a>
                    </div>
                </div>
                <!-- FAQ Area -->
            </div>
            <!-- Section Container -->
        </div>
        <!-- Section Space -->
    </div>
</section>
<!-- FAQ Section End -->

@endsection



@section('footer')
    <x-footer1/>
@endsection