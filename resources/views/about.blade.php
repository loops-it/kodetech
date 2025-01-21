@extends('layout.layout1')

@section('headerLogo')
<img src="{{ asset('assets/img/kodetech/kodetech-logo.png') }}" alt="Masco" width="109" height="24" />
@endsection




@section('headButtons')

<div class="flex items-center gap-6">
    {{-- <a href="{{ url('login') }}" class="btn-text hidden hover:text-ColorBlue md:inline-block">Login</a>
    <a href="{{ url('signup') }}" class="btn is-blue is-rounded btn-animation group hidden md:inline-block"><span>Sign up free</span></a> --}}
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
                <h1 class="breadcrumb-title">About Us</h1>
                {{-- <ul class="breadcrumb-nav">
                    <li><a href="{{ url('index') }}">Home</a></li>
                <li>About</li>
                </ul> --}}
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

<!-- Content Section Start -->
<section class="section-content">
    <div class="relative z-10">
        <!-- Section Space -->
        <div class="section-space">
            <!-- Section Container -->
            <div class="container-default">
                <div class="flex flex-col gap-y-20 lg:gap-y-[100px] xl:gap-y-[120px]">
                    <!-- Content Area Single -->
                    <div class="grid items-center gap-10 md:grid-cols-2 lg:gap-10 xl:gap-10">
                        <!-- Content Block Left -->
                        <div class="jos order-1 md:order-2" data-jos_animation="fade-right">
                            <!-- Section Wrapper -->
                            <div>
                                <!-- Section Block -->
                                <div class="mb-5">
                                    <h2 class="font-PublicSans text-4xl font-bold leading-[1.14] text-[#121212] lg:text-left lg:text-5xl xl:text-[56px]">
                                        The Story behind our consulting firm
                                    </h2>
                                </div>
                                <!-- Section Block -->
                            </div>
                            <!-- Section Wrapper -->
                            <p class="mb-5">
                                Kode Tech (Pvt) Ltd is a well-established and renowned software development company with a rich legacy spanning over 14 years.
                            </p>
                            <hr class="mb-5" />
                            <p>
                                Our extensive expertise has earned us a strong foothold in 15 international markets, where we’ve successfully delivered over 1,500 projects. Our innovative and creative approach and cutting-edge technologies always help for a better experience.Kode Tech (Pvt) Ltd is a well-established and renowned software development company with a rich legacy spanning over 14 years.
                                Our extensive expertise has earned us a strong foothold in 15 international markets, where we’ve successfully delivered over 1,500 projects. Our innovative and creative approach and cutting-edge technologies always help for a better experience.Our innovative and creative approach and cutting-edge technologies always help for a better experience.Our innovative and creative approach and cutting-edge technologies always help for a better experience.Our innovative and creative approach and cutting-edge technologies always help for a better experience.
                            </p>
                        </div>
                        <!-- Content Block Left -->
                        <!-- Content Block Right -->
                        <div class="jos relative order-2 md:order-1" data-jos_animation="fade-left">
                            <!-- Content Image -->
                            <img src="{{ asset('assets/img/kodetech/about-content-image.png') }}" alt="content-img-1" width="523" height="450" class="h-auto w-full rounded-[10px]" />
                        </div>
                        <!-- Content Block Right -->
                    </div>
                    <!-- Content Area Single -->
                </div>
            </div>
            <!-- Section Container -->
        </div>
        <!-- Section Space -->

        <!-- Content Shape -->
        <div class="absolute hidden xl:inline-block right-[60px] top-1/3 -z-10 rotate-[29deg]">
            <img src="{{ asset('assets/img/elements/home-8-dot-shape.svg') }}" alt="home-8-dot-shape" width="126" height="275" />
        </div>
    </div>
</section>
<!-- Content Section End -->

<!-- Brand Section Start -->
<div class="section-brand bg-[#1B1C1D] black-section">
    <div class="jos">
        <!-- Section Space -->
        <div class="pb-[60px] md:pb-20 lg:pb-[100px]">
            <!-- Section Container -->
            <div class="container-default">
                <div class="mx-auto mb-10 max-w-[80%] text-center text-white text-xl font-semibold leading-[1.4] opacity-70 md:mb-16 lg:mb-20 lg:max-w-2xl">
                    From start-up to Fortune , we partner with brands of all sizes
                </div>
                <!-- Brand Slider -->
                <div class="swiper brand-slider">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <div class="jos mb-6 break-inside-avoid shadow rounded-md">
                                <div class="flex flex-col rounded-[10px] bg-white p-6 text-ColorBlack sm:p-[30px]">
                                    <img src="{{ asset('assets/img/kodetech/partners/plu-removebg-preview 1.png') }}" alt="icon-green-star" width="100" height="80" />
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="jos mb-6 break-inside-avoid shadow rounded-md">
                                <div class="flex flex-col rounded-[10px] bg-white p-6 text-ColorBlack sm:p-[30px]">
                                    <img src="{{ asset('assets/img/kodetech/partners/plu-removebg-preview 1.png') }}" alt="icon-green-star" width="100" height="80" />
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="jos mb-6 break-inside-avoid shadow rounded-md">
                                <div class="flex flex-col rounded-[10px] bg-white p-6 text-ColorBlack sm:p-[30px]">
                                    <img src="{{ asset('assets/img/kodetech/partners/plu-removebg-preview 1.png') }}" alt="icon-green-star" width="100" height="80" />
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="jos mb-6 break-inside-avoid shadow rounded-md">
                                <div class="flex flex-col rounded-[10px] bg-white p-6 text-ColorBlack sm:p-[30px]">
                                    <img src="{{ asset('assets/img/kodetech/partners/plu-removebg-preview 1.png') }}" alt="icon-green-star" width="100" height="80" />
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="jos mb-6 break-inside-avoid shadow rounded-md">
                                <div class="flex flex-col rounded-[10px] bg-white p-6 text-ColorBlack sm:p-[30px]">
                                    <img src="{{ asset('assets/img/kodetech/partners/plu-removebg-preview 1.png') }}" alt="icon-green-star" width="100" height="80" />
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="jos mb-6 break-inside-avoid shadow rounded-md">
                                <div class="flex flex-col rounded-[10px] bg-white p-6 text-ColorBlack sm:p-[30px]">
                                    <img src="{{ asset('assets/img/kodetech/partners/plu-removebg-preview 1.png') }}" alt="icon-green-star" width="100" height="80" />
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="jos mb-6 break-inside-avoid shadow rounded-md">
                                <div class="flex flex-col rounded-[10px] bg-white p-6 text-ColorBlack sm:p-[30px]">
                                    <img src="{{ asset('assets/img/kodetech/partners/plu-removebg-preview 1.png') }}" alt="icon-green-star" width="100" height="80" />
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="jos mb-6 break-inside-avoid shadow rounded-md">
                                <div class="flex flex-col rounded-[10px] bg-white p-6 text-ColorBlack sm:p-[30px]">
                                    <img src="{{ asset('assets/img/kodetech/partners/plu-removebg-preview 1.png') }}" alt="icon-green-star" width="100" height="80" />
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="jos mb-6 break-inside-avoid shadow rounded-md">
                                <div class="flex flex-col rounded-[10px] bg-white p-6 text-ColorBlack sm:p-[30px]">
                                    <img src="{{ asset('assets/img/kodetech/partners/plu-removebg-preview 1.png') }}" alt="icon-green-star" width="100" height="80" />
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="jos mb-6 break-inside-avoid shadow rounded-md">
                                <div class="flex flex-col rounded-[10px] bg-white p-6 text-ColorBlack sm:p-[30px]">
                                    <img src="{{ asset('assets/img/kodetech/partners/plu-removebg-preview 1.png') }}" alt="icon-green-star" width="100" height="80" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Brand Slider -->
            </div>
            <!-- Section Container -->
        </div>
        <!-- Section Space -->
    </div>
</div>
<!-- Brand Section End -->
<!-- Service Section Start -->
<section class="section-service">
    <div class="relative z-10 overflow-hidden">
        <!-- Section Space -->
        <div class="section-space">
            <!-- Section Container -->
            <div class="container-custom">
                <!-- Section Content Wrapper -->
                <div class="jos mb-[60px] xl:mb-20">
                    <!-- Section Content Block -->
                    <div class="mx-auto max-w-[590px]">
                        <h2 class="text-center">
                            Exploring its core capabilities
                        </h2>
                        <div class="mx-auto mb-10 max-w-[80%] text-center text-xl font-semibold leading-[1.4] opacity-70 md:mb-16 lg:mb-20 lg:max-w-2xl">
                            Kode Tech (Pvt) Ltd is a well-established and renowned software development company with a rich legacy spanning over 14 years.
                        </div>
                    </div>
                    <!-- Section Content Block -->
                </div>
                <!-- Section Content Wrapper -->

                <!-- Service List -->
                <div class="grid gap-6 sm:grid-cols-2">
                    <!-- Service Item -->
                    <div class="jos" data-jos_delay="0">
                        <div class="group rounded-[10px] border border-[#E6E6E6] bg-white p-8 transition-all duration-300 ease-in-out hover:border-ColorOffWhite hover:bg-ColorOffWhite lg:p-10 h-full">
                            <div class="flex flex-col gap-x-10 gap-y-6 sm:gap-y-8 lg:flex-row">
                                <div class="flex-1 text-center lg:text-left">
                                    <div class="mb-4 text-xl font-semibold leading-[1.33] -tracking-[0.5px] text-ColorBlack lg:text-2xl">
                                        Branding & Digital Strategies
                                    </div>
                                    <p class="mb-5 line-clamp-2 text-ColorBlack/80">
                                        Brand strategy is all about developing a unique
                                        identity that distinguishes your business from
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Service Item -->
                    <!-- Service Item -->
                    <div class="jos" data-jos_delay="0.3">
                        <div class="group rounded-[10px] border border-[#E6E6E6] bg-white p-8 transition-all duration-300 ease-in-out hover:border-ColorOffWhite hover:bg-ColorOffWhite lg:p-10 h-full">
                            <div class="flex flex-col gap-x-10 gap-y-6 sm:gap-y-8 lg:flex-row">
                                <div class="flex-1 text-center lg:text-left">
                                    <div class="mb-4 text-xl font-semibold leading-[1.33] -tracking-[0.5px] text-ColorBlack lg:text-2xl">
                                        Web Design & App Development
                                    </div>
                                    <p class="mb-5 line-clamp-2 text-ColorBlack/80">
                                        Web design & development is an umbrella term that
                                        describes the process of creating a website
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Service Item -->
                    <!-- Service Item -->
                    <div class="jos" data-jos_delay="0.6">
                        <div class="group rounded-[10px] border border-[#E6E6E6] bg-white p-8 transition-all duration-300 ease-in-out hover:border-ColorOffWhite hover:bg-ColorOffWhite lg:p-10 h-full">
                            <div class="flex flex-col gap-x-10 gap-y-6 sm:gap-y-8 lg:flex-row">
                                <div class="flex-1 text-center lg:text-left">
                                    <div class="mb-4 text-xl font-semibold leading-[1.33] -tracking-[0.5px] text-ColorBlack lg:text-2xl">
                                        Results-Driven Digital Marketing
                                    </div>
                                    <p class="mb-5 line-clamp-2 text-ColorBlack/80">
                                        Digital marketing potential customers using the
                                        internet & other forms of digital communication
                                    </p>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <!-- Service Item -->
                    <!-- Service Item -->
                    <div class="jos" data-jos_delay="0.9">
                        <div class="group rounded-[10px] border border-[#E6E6E6] bg-white p-8 transition-all duration-300 ease-in-out hover:border-ColorOffWhite hover:bg-ColorOffWhite lg:p-10 h-full">
                            <div class="flex flex-col gap-x-10 gap-y-6 sm:gap-y-8 lg:flex-row">
                                <div class="flex-1 text-center lg:text-left">
                                    <div class="mb-4 text-xl font-semibold leading-[1.33] -tracking-[0.5px] text-ColorBlack lg:text-2xl">
                                        Custom Software Development
                                    </div>
                                    <p class="mb-5 line-clamp-2 text-ColorBlack/80">
                                        Custom Software Development is the process of
                                        conceptualizing, designing, building & deploying
                                    </p>
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

        <!-- Service Shape -->
        <div class="absolute bottom-0 left-0 -z-10">
            <img src="{{ asset('assets/img/elements/service-1-shape-1.svg') }}" alt="service-section-shape" width="390" height="507" />
        </div>
        <!-- Service Shape -->
    </div>
</section>
<!-- Service Section End -->
<!-- Video Section Start -->
<section class="section-video">
    <!-- Section Space -->
    <div class="section-space-bottom">
        <!-- Section Container -->
        <div class="container-default">
            <!-- Section Content Wrapper -->
            <div class="jos mb-[60px] xl:mb-20">
                <!-- Section Content Block -->
                <div class="mx-auto max-w-[636px]">
                    <h2 class="mb-5 text-center">
                        Develop a communication strategy with live video chat
                    </h2>
                    <p class="text-center">
                        Kode Tech (Pvt) Ltd is a well-established and renowned software development company with a rich legacy spanning over 14 years.
                    </p>
                </div>
                <!-- Section Content Block -->
            </div>
            <!-- Section Content Wrapper -->

            <!-- Video Block -->
            <div class="jos">
                <div class="relative flex items-center justify-center">
                    <img src="{{ asset('assets/img/kodetech/about-video.png') }}" alt="video-img" width="1295" height="699" class="h-auto w-full" />
                    <a data-fslightbox="gallery" href="https://www.youtube.com/watch?v=3nQNiWdeH2Q" class="group group absolute flex h-20 w-20 items-center justify-center rounded-[50%] bg-white text-ColorPurple xl:h-[120px] xl:w-[120px]" aria-label="video-play">
                        <span class="text-2xl transition-all duration-300 ease-linear group-hover:scale-110"><i class="fa-solid fa-play"></i></span>
                    </a>
                </div>
            </div>
            <!-- Video Block -->
        </div>
        <!-- Section Container -->
    </div>
    <!-- Section Space -->
</section>
<!-- Video Section End -->

<!-- Partners Section Start -->
<div class="section-brand bg-[#1B1C1D] black-section" >
    <div class="jos">
        <!-- Section Space -->
        <div class="py-[60px] md:py-20 lg:py-[100px]">
            <!-- Section Container -->
            <div class="container-default">
                <!-- Section Content Wrapper -->
                <div class="jos mb-[60px] xl:mb-20">
                    <!-- Section Content Block -->
                    <div class="mx-auto max-w-[636px]">
                        <h2 class="mb-5 text-center text-white">
                            Our clients have shared their experiences using Masco
                        </h2>
                    </div>
                    <!-- Section Content Block -->
                </div>
                <!-- Section Content Wrapper -->
                <!-- Partners Slider -->
                <div class="swiper partners-slider-custom1">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <!-- Partner Item -->
                            <div class="jos mb-6 break-inside-avoid shadow rounded-md">
                                <div class="flex flex-col rounded-[10px] p-6 text-ColorBlack sm:p-[30px]">
                                    <img src="{{ asset('assets/img/kodetech/Group 1000003451.png') }}" alt="icon-green-star" />
                                </div>
                            </div>
                            <!-- Partner Item -->
                        </div>
                        <div class="swiper-slide">
                            <!-- Partner Item -->
                            <div class="jos mb-6 break-inside-avoid shadow rounded-md">
                                <div class="flex flex-col rounded-[10px] p-6 text-ColorBlack sm:p-[30px]">
                                    <img src="{{ asset('assets/img/kodetech/Group 1000003451.png') }}" alt="icon-green-star" />
                                </div>
                            </div>
                            <!-- Partner Item -->
                        </div>
                        <div class="swiper-slide">
                            <!-- Partner Item -->
                            <div class="jos mb-6 break-inside-avoid shadow rounded-md">
                                <div class="flex flex-col rounded-[10px] p-6 text-ColorBlack sm:p-[30px]">
                                    <img src="{{ asset('assets/img/kodetech/Group 1000003451.png') }}" alt="icon-green-star" />
                                </div>
                            </div>
                            <!-- Partner Item -->
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                <!-- Partners Slider -->
            </div>
            <!-- Section Container -->
        </div>
        <!-- Section Space -->
    </div>
</div>
<!-- Partners Section End -->

<!-- Testimonials Section Start -->
<div class="section-brand bg-[#fff]">
    <div class="jos">
        <!-- Section Space -->
        <div class="pb-[60px] md:pb-20 lg:pb-[100px]">
            <!-- Section Container -->
            <div class="container-default">
                <!-- Section Content Wrapper -->
                <div class="jos mb-[60px] xl:mb-20">
                    <!-- Section Content Block -->
                    <div class="mx-auto max-w-[636px]">
                        <h2 class="mb-5 text-center">
                            Our clients have shared their experiences using Masco
                        </h2>
                    </div>
                    <!-- Section Content Block -->
                </div>
                <!-- Section Content Wrapper -->
                {{-- <div class="mx-auto mb-10 max-w-[80%] text-center text-white text-xl font-semibold leading-[1.4] opacity-70 md:mb-16 lg:mb-20 lg:max-w-2xl">
                    From start-up to Fortune , we partner with brands of all sizes
                </div> --}}
                <!-- Testimonials Slider -->
                <div class="swiper testimonial-slider-custom1">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <!-- Testimonial Item -->
                            <div class="jos mb-6 break-inside-avoid shadow rounded-md">
                                <div class="flex flex-col rounded-[10px] bg-white p-6 text-ColorBlack sm:p-[30px]">
                                    <!-- Review Star -->
                                    <div class="mb-5 flex gap-[5px] text-2xl text-[#00B67A] lg:mb-[30px]">
                                        <img src="{{ asset('assets/img/icons/icon-green-star.svg') }}" alt="icon-green-star" width="26" height="24" />
                                        <img src="{{ asset('assets/img/icons/icon-green-star.svg') }}" alt="icon-green-star" width="26" height="24" />
                                        <img src="{{ asset('assets/img/icons/icon-green-star.svg') }}" alt="icon-green-star" width="26" height="24" />
                                        <img src="{{ asset('assets/img/icons/icon-green-star.svg') }}" alt="icon-green-star" width="26" height="24" />
                                        <img src="{{ asset('assets/img/icons/icon-green-star.svg') }}" alt="icon-green-star" width="26" height="24" />
                                    </div>
                                    <div class="mb-1 font-semibold">
                                        Great value home exercise 💪🏼
                                    </div>
                                    <p class="mb-6">
                                        I was recommended masco from a dear friend and WOW!!!
                                        Gives energy, strength & mostly your motivation and you
                                        helped me grow beyond my expectations.
                                    </p>
                                    <div class="flex items-center gap-4">
                                        <img src="{{ asset('assets/img/th-3/testimonial-avater-1.jpg') }}" alt="testimonial-avater-1" width="60" height="60" class="h-[60px] w-[60px] rounded-[50%]" />
                                        <div>
                                            <span class="block font-semibold">Karen Lynn</span>
                                            <span class="text-sm text-opacity-80">CEO & Co-founder @ Company</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Testimonial Item -->
                        </div>
                        <div class="swiper-slide">
                            <!-- Testimonial Item -->
                            <div class="jos mb-6 break-inside-avoid shadow rounded-md">
                                <div class="flex flex-col rounded-[10px] bg-white p-6 text-ColorBlack sm:p-[30px]">
                                    <!-- Review Star -->
                                    <div class="mb-5 flex gap-[5px] text-2xl text-[#00B67A] lg:mb-[30px]">
                                        <img src="{{ asset('assets/img/icons/icon-green-star.svg') }}" alt="icon-green-star" width="26" height="24" />
                                        <img src="{{ asset('assets/img/icons/icon-green-star.svg') }}" alt="icon-green-star" width="26" height="24" />
                                        <img src="{{ asset('assets/img/icons/icon-green-star.svg') }}" alt="icon-green-star" width="26" height="24" />
                                        <img src="{{ asset('assets/img/icons/icon-green-star.svg') }}" alt="icon-green-star" width="26" height="24" />
                                        <img src="{{ asset('assets/img/icons/icon-green-star.svg') }}" alt="icon-green-star" width="26" height="24" />
                                    </div>
                                    <div class="mb-1 font-semibold">
                                        Great value home exercise 💪🏼
                                    </div>
                                    <p class="mb-6">
                                        I was recommended masco from a dear friend and WOW!!!
                                        Gives energy, strength & mostly your motivation and you
                                        helped me grow beyond my expectations.
                                    </p>
                                    <div class="flex items-center gap-4">
                                        <img src="{{ asset('assets/img/th-3/testimonial-avater-1.jpg') }}" alt="testimonial-avater-1" width="60" height="60" class="h-[60px] w-[60px] rounded-[50%]" />
                                        <div>
                                            <span class="block font-semibold">Karen Lynn</span>
                                            <span class="text-sm text-opacity-80">CEO & Co-founder @ Company</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Testimonial Item -->
                        </div>
                        <div class="swiper-slide">
                            <!-- Testimonial Item -->
                            <div class="jos mb-6 break-inside-avoid shadow rounded-md">
                                <div class="flex flex-col rounded-[10px] bg-white p-6 text-ColorBlack sm:p-[30px]">
                                    <!-- Review Star -->
                                    <div class="mb-5 flex gap-[5px] text-2xl text-[#00B67A] lg:mb-[30px]">
                                        <img src="{{ asset('assets/img/icons/icon-green-star.svg') }}" alt="icon-green-star" width="26" height="24" />
                                        <img src="{{ asset('assets/img/icons/icon-green-star.svg') }}" alt="icon-green-star" width="26" height="24" />
                                        <img src="{{ asset('assets/img/icons/icon-green-star.svg') }}" alt="icon-green-star" width="26" height="24" />
                                        <img src="{{ asset('assets/img/icons/icon-green-star.svg') }}" alt="icon-green-star" width="26" height="24" />
                                        <img src="{{ asset('assets/img/icons/icon-green-star.svg') }}" alt="icon-green-star" width="26" height="24" />
                                    </div>
                                    <div class="mb-1 font-semibold">
                                        Great value home exercise 💪🏼
                                    </div>
                                    <p class="mb-6">
                                        I was recommended masco from a dear friend and WOW!!!
                                        Gives energy, strength & mostly your motivation and you
                                        helped me grow beyond my expectations.
                                    </p>
                                    <div class="flex items-center gap-4">
                                        <img src="{{ asset('assets/img/th-3/testimonial-avater-1.jpg') }}" alt="testimonial-avater-1" width="60" height="60" class="h-[60px] w-[60px] rounded-[50%]" />
                                        <div>
                                            <span class="block font-semibold">Karen Lynn</span>
                                            <span class="text-sm text-opacity-80">CEO & Co-founder @ Company</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Testimonial Item -->
                        </div>
                        <div class="swiper-slide">
                            <!-- Testimonial Item -->
                            <div class="jos mb-6 break-inside-avoid shadow rounded-md">
                                <div class="flex flex-col rounded-[10px] bg-white p-6 text-ColorBlack sm:p-[30px]">
                                    <!-- Review Star -->
                                    <div class="mb-5 flex gap-[5px] text-2xl text-[#00B67A] lg:mb-[30px]">
                                        <img src="{{ asset('assets/img/icons/icon-green-star.svg') }}" alt="icon-green-star" width="26" height="24" />
                                        <img src="{{ asset('assets/img/icons/icon-green-star.svg') }}" alt="icon-green-star" width="26" height="24" />
                                        <img src="{{ asset('assets/img/icons/icon-green-star.svg') }}" alt="icon-green-star" width="26" height="24" />
                                        <img src="{{ asset('assets/img/icons/icon-green-star.svg') }}" alt="icon-green-star" width="26" height="24" />
                                        <img src="{{ asset('assets/img/icons/icon-green-star.svg') }}" alt="icon-green-star" width="26" height="24" />
                                    </div>
                                    <div class="mb-1 font-semibold">
                                        Great value home exercise 💪🏼
                                    </div>
                                    <p class="mb-6">
                                        I was recommended masco from a dear friend and WOW!!!
                                        Gives energy, strength & mostly your motivation and you
                                        helped me grow beyond my expectations.
                                    </p>
                                    <div class="flex items-center gap-4">
                                        <img src="{{ asset('assets/img/th-3/testimonial-avater-1.jpg') }}" alt="testimonial-avater-1" width="60" height="60" class="h-[60px] w-[60px] rounded-[50%]" />
                                        <div>
                                            <span class="block font-semibold">Karen Lynn</span>
                                            <span class="text-sm text-opacity-80">CEO & Co-founder @ Company</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Testimonial Item -->
                        </div>
                        <div class="swiper-slide">
                            <!-- Testimonial Item -->
                            <div class="jos mb-6 break-inside-avoid shadow rounded-md">
                                <div class="flex flex-col rounded-[10px] bg-white p-6 text-ColorBlack sm:p-[30px]">
                                    <!-- Review Star -->
                                    <div class="mb-5 flex gap-[5px] text-2xl text-[#00B67A] lg:mb-[30px]">
                                        <img src="{{ asset('assets/img/icons/icon-green-star.svg') }}" alt="icon-green-star" width="26" height="24" />
                                        <img src="{{ asset('assets/img/icons/icon-green-star.svg') }}" alt="icon-green-star" width="26" height="24" />
                                        <img src="{{ asset('assets/img/icons/icon-green-star.svg') }}" alt="icon-green-star" width="26" height="24" />
                                        <img src="{{ asset('assets/img/icons/icon-green-star.svg') }}" alt="icon-green-star" width="26" height="24" />
                                        <img src="{{ asset('assets/img/icons/icon-green-star.svg') }}" alt="icon-green-star" width="26" height="24" />
                                    </div>
                                    <div class="mb-1 font-semibold">
                                        Great value home exercise 💪🏼
                                    </div>
                                    <p class="mb-6">
                                        I was recommended masco from a dear friend and WOW!!!
                                        Gives energy, strength & mostly your motivation and you
                                        helped me grow beyond my expectations.
                                    </p>
                                    <div class="flex items-center gap-4">
                                        <img src="{{ asset('assets/img/th-3/testimonial-avater-1.jpg') }}" alt="testimonial-avater-1" width="60" height="60" class="h-[60px] w-[60px] rounded-[50%]" />
                                        <div>
                                            <span class="block font-semibold">Karen Lynn</span>
                                            <span class="text-sm text-opacity-80">CEO & Co-founder @ Company</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Testimonial Item -->
                        </div>
                        <div class="swiper-slide">
                            <!-- Testimonial Item -->
                            <div class="jos mb-6 break-inside-avoid shadow rounded-md">
                                <div class="flex flex-col rounded-[10px] bg-white p-6 text-ColorBlack sm:p-[30px]">
                                    <!-- Review Star -->
                                    <div class="mb-5 flex gap-[5px] text-2xl text-[#00B67A] lg:mb-[30px]">
                                        <img src="{{ asset('assets/img/icons/icon-green-star.svg') }}" alt="icon-green-star" width="26" height="24" />
                                        <img src="{{ asset('assets/img/icons/icon-green-star.svg') }}" alt="icon-green-star" width="26" height="24" />
                                        <img src="{{ asset('assets/img/icons/icon-green-star.svg') }}" alt="icon-green-star" width="26" height="24" />
                                        <img src="{{ asset('assets/img/icons/icon-green-star.svg') }}" alt="icon-green-star" width="26" height="24" />
                                        <img src="{{ asset('assets/img/icons/icon-green-star.svg') }}" alt="icon-green-star" width="26" height="24" />
                                    </div>
                                    <div class="mb-1 font-semibold">
                                        Great value home exercise 💪🏼
                                    </div>
                                    <p class="mb-6">
                                        I was recommended masco from a dear friend and WOW!!!
                                        Gives energy, strength & mostly your motivation and you
                                        helped me grow beyond my expectations.
                                    </p>
                                    <div class="flex items-center gap-4">
                                        <img src="{{ asset('assets/img/th-3/testimonial-avater-1.jpg') }}" alt="testimonial-avater-1" width="60" height="60" class="h-[60px] w-[60px] rounded-[50%]" />
                                        <div>
                                            <span class="block font-semibold">Karen Lynn</span>
                                            <span class="text-sm text-opacity-80">CEO & Co-founder @ Company</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Testimonial Item -->
                        </div>
                        <div class="swiper-slide">
                            <!-- Testimonial Item -->
                            <div class="jos mb-6 break-inside-avoid shadow rounded-md">
                                <div class="flex flex-col rounded-[10px] bg-white p-6 text-ColorBlack sm:p-[30px]">
                                    <!-- Review Star -->
                                    <div class="mb-5 flex gap-[5px] text-2xl text-[#00B67A] lg:mb-[30px]">
                                        <img src="{{ asset('assets/img/icons/icon-green-star.svg') }}" alt="icon-green-star" width="26" height="24" />
                                        <img src="{{ asset('assets/img/icons/icon-green-star.svg') }}" alt="icon-green-star" width="26" height="24" />
                                        <img src="{{ asset('assets/img/icons/icon-green-star.svg') }}" alt="icon-green-star" width="26" height="24" />
                                        <img src="{{ asset('assets/img/icons/icon-green-star.svg') }}" alt="icon-green-star" width="26" height="24" />
                                        <img src="{{ asset('assets/img/icons/icon-green-star.svg') }}" alt="icon-green-star" width="26" height="24" />
                                    </div>
                                    <div class="mb-1 font-semibold">
                                        Great value home exercise 💪🏼
                                    </div>
                                    <p class="mb-6">
                                        I was recommended masco from a dear friend and WOW!!!
                                        Gives energy, strength & mostly your motivation and you
                                        helped me grow beyond my expectations.
                                    </p>
                                    <div class="flex items-center gap-4">
                                        <img src="{{ asset('assets/img/th-3/testimonial-avater-1.jpg') }}" alt="testimonial-avater-1" width="60" height="60" class="h-[60px] w-[60px] rounded-[50%]" />
                                        <div>
                                            <span class="block font-semibold">Karen Lynn</span>
                                            <span class="text-sm text-opacity-80">CEO & Co-founder @ Company</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Testimonial Item -->
                        </div>
                        <div class="swiper-slide">
                            <!-- Testimonial Item -->
                            <div class="jos mb-6 break-inside-avoid shadow rounded-md">
                                <div class="flex flex-col rounded-[10px] bg-white p-6 text-ColorBlack sm:p-[30px]">
                                    <!-- Review Star -->
                                    <div class="mb-5 flex gap-[5px] text-2xl text-[#00B67A] lg:mb-[30px]">
                                        <img src="{{ asset('assets/img/icons/icon-green-star.svg') }}" alt="icon-green-star" width="26" height="24" />
                                        <img src="{{ asset('assets/img/icons/icon-green-star.svg') }}" alt="icon-green-star" width="26" height="24" />
                                        <img src="{{ asset('assets/img/icons/icon-green-star.svg') }}" alt="icon-green-star" width="26" height="24" />
                                        <img src="{{ asset('assets/img/icons/icon-green-star.svg') }}" alt="icon-green-star" width="26" height="24" />
                                        <img src="{{ asset('assets/img/icons/icon-green-star.svg') }}" alt="icon-green-star" width="26" height="24" />
                                    </div>
                                    <div class="mb-1 font-semibold">
                                        Great value home exercise 💪🏼
                                    </div>
                                    <p class="mb-6">
                                        I was recommended masco from a dear friend and WOW!!!
                                        Gives energy, strength & mostly your motivation and you
                                        helped me grow beyond my expectations.
                                    </p>
                                    <div class="flex items-center gap-4">
                                        <img src="{{ asset('assets/img/th-3/testimonial-avater-1.jpg') }}" alt="testimonial-avater-1" width="60" height="60" class="h-[60px] w-[60px] rounded-[50%]" />
                                        <div>
                                            <span class="block font-semibold">Karen Lynn</span>
                                            <span class="text-sm text-opacity-80">CEO & Co-founder @ Company</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Testimonial Item -->
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                <!-- Testimonials Slider -->
            </div>
            <!-- Section Container -->
        </div>
        <!-- Section Space -->
    </div>
</div>
<!-- Testimonials Section End -->




@endsection
