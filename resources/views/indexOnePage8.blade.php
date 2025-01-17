@extends('layout.layout2')

@section('headerLogo')
<img src="{{ asset('assets/img/logo-full-dark.png') }}" alt="Masco" width="109" height="24" />
@endsection



@section('headButtons')

<div class="flex items-center gap-6">
    <a href="{{ url('login') }}" class="btn-text hidden hover:text-ColorPurple sm:inline-block">Login</a>
    <a href="{{ url('signup') }}" class="btn is-lime btn-animation group hidden rounded-[3px] sm:inline-block"><span>Sign up free</span></a>
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

   <!-- Hero Section Start -->
   <section class="section-hero">
    <!-- Section Background -->
    <div class="relative z-10 overflow-hidden">
        <!-- Hero Section Space -->
        <div class="pt-[105px] sm:pt-[145px] lg:pt-[185px]">
            <!-- Section Container -->
            <div class="container-default relative z-10">
                <!-- Hero Area -->
                <div class="text-center">
                    <h1 class="jos -trackig-[1px] mx-auto mb-6 font-PublicSans text-5xl font-bold leading-[1.06] text-[#121212] md:max-w-[80%] md:text-[60px] lg:max-w-[70%] lg:text-[70px] xl:max-w-[856px] xl:text-[90px]">
                        Grow your business to the next level
                    </h1>
                    <p class="jos mx-auto mb-8 max-w-[658px] lg:mb-[50px]">
                        Starting a business can be daunting, but you can make it
                        easier with us. We're skilled in team-building strategies
                        for your business's success.
                    </p>
                    <div class="jos flex flex-wrap justify-center gap-[18px]">
                        <a href="#" class="btn is-lime is-large btn-animation group rounded-[3px]"><span>Get In Touch</span></a>
                        <a href="#" class="btn is-outline-black is-large btn-animation group rounded-[3px]"><span>View Services</span></a>
                    </div>
                </div>
                <!-- Hero Area -->

                <!-- Hero Images -->
                <div class="-z-10 -mb-[17px] mt-[60px] grid grid-cols-1 gap-8 sm:grid-cols-2 md:flex md:gap-10 lg:gap-14">
                    <div class="jos md:rotate-[5deg]" data-jos_animation="fade-left" data-jos_delay="0.3">
                        <img src="{{ asset('assets/img/th-8/hero-img-1.png') }}" alt="hero-img-1" width="279" height="307" class="h-full w-full rounded-[5px] object-cover md:h-auto" />
                    </div>
                    <div class="jos md:-rotate-[5deg] md:self-end" data-jos_animation="fade-left" data-jos_delay="0">
                        <img src="{{ asset('assets/img/th-8/hero-img-2.png') }}" alt="hero-img-2" width="279" height="250" class="h-full w-full rounded-[5px] object-cover md:h-auto" />
                    </div>
                    <div class="jos md:rotate-[5deg] md:self-end" data-jos_animation="fade-right" data-jos_delay="0">
                        <img src="{{ asset('assets/img/th-8/hero-img-3.png') }}" alt="hero-img-3" width="279" height="250" class="h-full w-full rounded-[5px] object-cover md:h-auto" />
                    </div>
                    <div class="jos md:-rotate-[5deg]" data-jos_animation="fade-right" data-jos_delay="0.3">
                        <img src="{{ asset('assets/img/th-8/hero-img-4.png') }}" alt="hero-img-4" width="279" height="307" class="h-full w-full rounded-[5px] object-cover md:h-auto" />
                    </div>
                </div>
                <!-- Hero Images -->

                <!-- Hero Background Shape - 1 -->
                <div class="absolute left-0 -z-10 hidden md:block lg:-top-[70px]">
                    <img src="{{ asset('assets/img/elements/hero-8-content-shape.svg') }}" alt="hero-8-content-shape" width="291" height="331" class="h-auto w-[230px] xxl:h-[331px] xxl:w-[291px]" />
                </div>
                <!-- Hero Background Shape - 2 -->
                <div class="absolute top-[100px] -z-10 hidden md:block lg:right-10 xxl:right-0">
                    <img src="{{ asset('assets/img/elements/home-8-dot-shape.svg') }}" alt="home-8-dot-shape" width="126" height="275" class="h-[200px] w-auto xxl:h-[275px] xxl:w-[125px]" />
                </div>
                <!-- Hero Space -->
            </div>
            <!-- Section Container -->
        </div>
        <!-- Hero Background Shape - 2 -->
        <div class="absolute bottom-0 z-10 hidden w-full md:block">
            <img src="{{ asset('assets/img/elements/section-devider-black.svg') }}" alt="home-8-dot-shape" class="w-full" />
        </div>
    </div>
    <!-- Section Background -->
</section>
<!-- Hero Section End -->

<!-- Fact Section Start -->
<section class="section-fact">
    <!-- Section Background -->
    <div class="z-10 bg-[#121212]">
        <!-- Section Space -->
        <div class="section-space">
            <!-- Section Container -->
            <div class="container-default">
                <!-- Fact Area -->
                <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-[0.8fr_minmax(0,_1fr)] xl:gap-20 xxl:gap-[100px]">
                    <!-- Section Wrapper -->
                    <div>
                        <!-- Section Block -->
                        <div class="mb-5">
                            <h2 class="text-center font-PublicSans text-4xl font-bold leading-[1.14] text-[#FDFBF9] lg:text-left lg:text-5xl xl:text-[56px]">
                                We earn trust by working efficiently
                            </h2>
                        </div>
                        <!-- Section Block -->
                    </div>
                    <!-- Section Wrapper -->
                    <!-- Fact List -->
                    <div class="grid grid-cols-1 gap-y-6 sm:grid-cols-3">
                        <!-- Fact Item -->
                        <div class="relative px-0 text-center after:absolute after:left-full after:top-1/2 after:hidden after:h-10 after:w-0.5 after:-translate-y-1/2 after:bg-ColorPurple first:pl-0 last:pr-0 last:after:hidden sm:px-10 sm:after:block">
                            <div>
                                <div class="mb-[5px] font-PublicSans text-5xl font-bold leading-[1.14] text-[#FDFBF9] xl:text-[56px]" data-module="countup">
                                    <span class="start-number" data-countup-number="15">15</span>+
                                </div>
                                <span class="text-[#FDFBF9]/60">Years of experience</span>
                            </div>
                        </div>
                        <!-- Fact Item -->
                        <!-- Fact Item -->
                        <div class="relative px-0 text-center after:absolute after:left-full after:top-1/2 after:hidden after:h-10 after:w-0.5 after:-translate-y-1/2 after:bg-ColorPurple first:pl-0 last:pr-0 last:after:hidden sm:px-10 sm:after:block">
                            <div>
                                <div class="mb-[5px] font-PublicSans text-5xl font-bold leading-[1.14] text-[#FDFBF9] xl:text-[56px]" data-module="countup">
                                    <span class="start-number" data-countup-number="84">84</span>K
                                </div>
                                <span class="text-[#FDFBF9]/60">Customers worldwide</span>
                            </div>
                        </div>
                        <!-- Fact Item -->
                        <!-- Fact Item -->
                        <div class="relative px-0 text-center after:absolute after:left-full after:top-1/2 after:hidden after:h-10 after:w-0.5 after:-translate-y-1/2 after:bg-ColorPurple first:pl-0 last:pr-0 last:after:hidden sm:px-10 sm:after:block">
                            <div>
                                <div class="mb-[5px] font-PublicSans text-5xl font-bold leading-[1.14] text-[#FDFBF9] xl:text-[56px]" data-module="countup">
                                    <span class="start-number" data-countup-number="600">600</span>+
                                </div>
                                <span class="text-[#FDFBF9]/60">Project completed</span>
                            </div>
                        </div>
                        <!-- Fact Item -->
                    </div>
                    <!-- Fact List -->
                </div>
                <!-- Fact Area -->
            </div>
            <!-- Section Container -->
        </div>
        <!-- Section Space -->
    </div>
    <!-- Section Background -->
</section>
<!-- Fact Section End -->

<!-- Content Section Start -->
<section class="section-content" id="section-about">
    <div class="relative z-10">
        <!-- Section Space -->
        <div class="section-space">
            <!-- Section Container -->
            <div class="container-default">
                <div class="flex flex-col gap-y-20 lg:gap-y-[100px] xl:gap-y-[120px]">
                    <!-- Content Area Single -->
                    <div class="grid items-center gap-10 md:grid-cols-2 lg:gap-24 xl:gap-60">
                        <!-- Content Block Left -->
                        <div class="jos order-1 md:order-2" data-jos_animation="fade-right">
                            <!-- Section Wrapper -->
                            <div>
                                <!-- Section Block -->
                                <div class="mb-5">
                                    <h2 class="font-PublicSans text-4xl font-bold leading-[1.14] text-[#121212] lg:text-left lg:text-5xl xl:text-[56px]">
                                        The story behind our consulting firm
                                    </h2>
                                </div>
                                <!-- Section Block -->
                            </div>
                            <!-- Section Wrapper -->
                            <p class="mb-5">
                                We have created a space for new and aspiring
                                entrepreneurs to learn how to start & grow their own
                                businesses effectively.
                            </p>
                            <hr class="mb-5" />
                            <p>
                                We cover everything from inception to growth & even
                                failure. In a world success is celebrated through the
                                lens of a few, we are here to determine what happens
                                after the elevator pitch.
                            </p>
                            <div class="mt-8 lg:mt-[50px]">
                                <a href="#" class="btn is-lime is-large btn-animation group inline-block rounded-[3px]"><span>Learn More</span></a>
                            </div>
                        </div>
                        <!-- Content Block Left -->
                        <!-- Content Block Right -->
                        <div class="jos relative order-2 md:order-1" data-jos_animation="fade-left">
                            <!-- Content Image -->
                            <img src="{{ asset('assets/img/th-8/content-img-1.jpg') }}" alt="content-img-1" width="523" height="450" class="h-auto w-full rounded-[10px]" />
                            <!-- Content Shape -->
                            <img src="{{ asset('assets/img/th-8/content-card-1.png') }}" alt="content-shape-1" width="304" height="104" class="jos absolute bottom-6 left-full hidden -translate-x-1/2 xl:inline-block" data-jos_animation="fade-up" data-jos_delay="0.3" />
                        </div>
                        <!-- Content Block Right -->
                    </div>
                    <!-- Content Area Single -->

                    <!-- Content Area Single -->
                    <div class="grid items-center gap-10 md:grid-cols-2 lg:gap-24 xl:gap-60">
                        <!-- Content Block Left -->
                        <div class="jos" data-jos_animation="fade-left">
                            <!-- Section Wrapper -->
                            <div>
                                <!-- Section Block -->
                                <div class="mb-5">
                                    <h2 class="font-PublicSans text-4xl font-bold leading-[1.14] text-[#121212] lg:text-left lg:text-5xl xl:text-[56px]">
                                        Our mission is to build your business
                                    </h2>
                                </div>
                                <!-- Section Block -->
                            </div>
                            <!-- Section Wrapper -->
                            <p>
                                Our team of writers, developers, and influencers is
                                ready to help to learn about starting business with some
                                inspiration.
                            </p>
                            <ul class="grid lg:grid-cols-2 flex-col gap-5 font-semibold">
                                <li>
                                    <span class="mr-3 inline-block text-xl text-ColorPurple"><i class="fa-solid fa-badge-check"></i></span>
                                    Coordinate with team
                                </li>
                                <li>
                                    <span class="mr-3 inline-block text-xl text-ColorPurple"><i class="fa-solid fa-badge-check"></i></span>
                                    Monitor timelines
                                </li>
                                <li>
                                    <span class="mr-3 inline-block text-xl text-ColorPurple"><i class="fa-solid fa-badge-check"></i></span>
                                    Share insights
                                </li>
                                <li>
                                    <span class="mr-3 inline-block text-xl text-ColorPurple"><i class="fa-solid fa-badge-check"></i></span>
                                    Hit all your targets
                                </li>
                            </ul>
                        </div>
                        <!-- Content Block Left -->
                        <!-- Content Block Right -->
                        <div class="jos relative" data-jos_animation="fade-right">
                            <!-- Content Image -->
                            <img src="{{ asset('assets/img/th-8/content-img-2.jpg') }}" alt="content-img-2" width="520" height="450" class="h-auto w-full rounded-[10px]" />
                            <!-- Content Shape -->
                            <img src="{{ asset('assets/img/th-8/content-card-2.png') }}" alt="content-card-2" width="282" height="251" class="jos absolute bottom-6 left-0 hidden -translate-x-1/2 xl:inline-block" data-jos_animation="fade-up" data-jos_delay="0.3" />
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

<!-- Service Section Start -->
<section class="section-service">
    <!-- Section Background -->
    <div class="relative z-10 bg-[#121212]">
        <!-- Section Space -->
        <div class="section-space">
            <!-- Section Container -->
            <div class="container-default">
                <!-- Section Content Wrapper -->
                <div class="jos mb-[60px] xl:mb-20">
                    <!-- Section Content Block -->
                    <div class="mx-auto flex max-w-[700px] flex-col items-center justify-center">
                        <h2 class="mb-5 text-center font-PublicSans text-4xl font-bold leading-[1.14] text-[#FDFBF9] lg:text-5xl xl:text-[56px]">
                            Great services for adding your business value
                        </h2>

                        <p class="text-center text-[#FDFBF9]/80">
                            We provide services that act as a startup mentor or have
                            consulting services as part of adding value proposition of
                            your business.
                        </p>
                    </div>
                    <!-- Section Content Block -->
                </div>
                <!-- Section Content Wrapper -->

                <!-- Service Block -->
                <div class="grid gap-x-8 gap-y-6 lg:grid-cols-2 xl:gap-x-[100px] xxl:gap-x-[146px]">
                    <!-- Service List -->
                    <div>
                        <!-- Service Item -->
                        <div class="jos border-b border-[#FDFBF9]/10 py-6 first:pt-0 lg:last:border-none lg:last:pb-0" data-jos_delay="0">
                            <a href="{{ url('servicedetails') }}" class="flex items-center justify-between gap-5 font-PublicSans text-[22px] font-semibold leading-[1.23] text-[#FDFBF9] transition-all duration-300 hover:text-ColorLime xl:text-2xl xxl:text-[26px]">
                                1. Engage in project management
                                <span class="inline-block -rotate-[30deg] text-2xl"><i class="fa-light fa-arrow-right"></i></span>
                            </a>
                        </div>
                        <!-- Service Item -->
                        <!-- Service Item -->
                        <div class="jos border-b border-[#FDFBF9]/10 py-6 first:pt-0 lg:last:border-none lg:last:pb-0" data-jos_delay="0.3">
                            <a href="{{ url('servicedetails') }}" class="flex items-center justify-between gap-5 font-PublicSans text-[22px] font-semibold leading-[1.23] text-[#FDFBF9] transition-all duration-300 hover:text-ColorLime xl:text-2xl xxl:text-[26px]">
                                2. Creating operations and delegations
                                <span class="inline-block -rotate-[30deg] text-2xl"><i class="fa-light fa-arrow-right"></i></span>
                            </a>
                        </div>
                        <!-- Service Item -->
                        <!-- Service Item -->
                        <div class="jos border-b border-[#FDFBF9]/10 py-6 first:pt-0 lg:last:border-none lg:last:pb-0" data-jos_delay="0.6">
                            <a href="{{ url('servicedetails') }}" class="flex items-center justify-between gap-5 font-PublicSans text-[22px] font-semibold leading-[1.23] text-[#FDFBF9] transition-all duration-300 hover:text-ColorLime xl:text-2xl xxl:text-[26px]">
                                3. Human resource management
                                <span class="inline-block -rotate-[30deg] text-2xl"><i class="fa-light fa-arrow-right"></i></span>
                            </a>
                        </div>
                        <!-- Service Item -->
                    </div>
                    <!-- Service List -->
                    <!-- Service List -->
                    <div>
                        <!-- Service Item -->
                        <div class="jos border-b border-[#FDFBF9]/10 py-6 first:pt-0 lg:last:border-none lg:last:pb-0" data-jos_delay="0">
                            <a href="{{ url('servicedetails') }}" class="flex items-center justify-between gap-5 font-PublicSans text-[22px] font-semibold leading-[1.23] text-[#FDFBF9] transition-all duration-300 hover:text-ColorLime xl:text-2xl xxl:text-[26px]">
                                4. Gradual development of process
                                <span class="inline-block -rotate-[30deg] text-2xl"><i class="fa-light fa-arrow-right"></i></span>
                            </a>
                        </div>
                        <!-- Service Item -->
                        <!-- Service Item -->
                        <div class="jos border-b border-[#FDFBF9]/10 py-6 first:pt-0 lg:last:border-none lg:last:pb-0" data-jos_delay="0.3">
                            <a href="{{ url('servicedetails') }}" class="flex items-center justify-between gap-5 font-PublicSans text-[22px] font-semibold leading-[1.23] text-[#FDFBF9] transition-all duration-300 hover:text-ColorLime xl:text-2xl xxl:text-[26px]">
                                5. Ensuring overall quality & standards
                                <span class="inline-block -rotate-[30deg] text-2xl"><i class="fa-light fa-arrow-right"></i></span>
                            </a>
                        </div>
                        <!-- Service Item -->
                        <!-- Service Item -->
                        <div class="jos border-b border-[#FDFBF9]/10 py-6 first:pt-0 lg:last:border-none lg:last:pb-0" data-jos_delay="0.6">
                            <a href="{{ url('servicedetails') }}" class="flex items-center justify-between gap-5 font-PublicSans text-[22px] font-semibold leading-[1.23] text-[#FDFBF9] transition-all duration-300 hover:text-ColorLime xl:text-2xl xxl:text-[26px]">
                                6. Compare project A/B testing
                                <span class="inline-block -rotate-[30deg] text-2xl"><i class="fa-light fa-arrow-right"></i></span>
                            </a>
                        </div>
                        <!-- Service Item -->
                    </div>
                    <!-- Service List -->
                </div>
                <!-- Service Block -->
            </div>
            <!-- Section Container -->
        </div>
        <!-- Section Space -->

        <!-- Section Shape - Dot -->
        <div class="absolute top-[100px] -z-10 hidden xxl:left-[44px] xxl:inline-block">
            <img src="{{ asset('assets/img/elements/home-8-dot-shape-2.svg') }}" alt="home-8-dot-shape-2" width="332" height="244" />
        </div>

        <!-- Section Shape - Arc -->
        <div class="absolute left-0 top-0 -z-10 w-full">
            <img src="{{ asset('assets/img/elements/arc-shape-black.png') }}" alt="arc-shape-black" width="1600" height="94" class="w-full" />
        </div>
    </div>
    <!-- Section Background -->
</section>
<!-- Service Section End -->

<!-- Content Section Start -->
<section class="section-content" id="section-feature">
    <!-- Section Space -->
    <div class="section-space">
        <!-- Section Container -->
        <div class="container-default">
            <div class="flex flex-col gap-y-20 lg:gap-y-[100px] xl:gap-y-[120px]">
                <!-- Content Area Single -->
                <div class="grid items-center gap-10 md:grid-cols-2 lg:gap-24 xl:gap-60">
                    <!-- Content Block Left -->
                    <div class="jos" data-jos_animation="fade-right">
                        <!-- Section Wrapper -->
                        <div>
                            <!-- Section Block -->
                            <div class="mb-5">
                                <h2 class="font-PublicSans text-4xl font-bold leading-[1.14] text-[#121212] lg:text-left lg:text-5xl xl:text-[56px]">
                                    Simple, powerful & efficient process
                                </h2>
                            </div>
                            <!-- Section Block -->
                        </div>
                        <!-- Section Wrapper -->
                        <p class="mb-5">
                            We follow the best yet official and simple working process
                            to maximize your business growth. We'll cover everything
                            from strategy, marketing and growth.
                        </p>
                        <div class="mt-8 lg:mt-[50px]">
                            <a href="#" class="btn is-lime is-large btn-animation group inline-block rounded-[3px]"><span>Get Started</span></a>
                        </div>
                    </div>
                    <!-- Content Block Left -->
                    <!-- Content Block Right -->
                    <div class="jos" data-jos_animation="fade-left">
                        <!-- Content Image -->
                        <img src="{{ asset('assets/img/th-8/content-img-3.png') }}" alt="content-img-3" width="636" height="501" />
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

<!-- Background Shape -->
<div class="absolute -z-10 hidden xl:left-10 xl:top-[52%] xl:inline-block xxl:left-[90px] xxl:top-[49%]">
    <img src="{{ asset('assets/img/elements/home-8-dot-shape-3.svg') }}" alt="home-8-dot-shape-3" width="209" height="297" />
</div>
<!-- Background Shape -->

<!-- Video Section Start -->
<section class="section-video">
    <!-- Section Space -->
    <div class="section-space-bottom">
        <!-- Section Container -->
        <div class="container-default">
            <!-- Section Content Wrapper -->
            <div class="jos mb-[60px] xl:mb-20">
                <!-- Section Content Block -->
                <div class="mx-auto flex max-w-[700px] flex-col items-center justify-center">
                    <h2 class="mb-5 text-center font-PublicSans text-4xl font-bold leading-[1.14] text-[#1212121] lg:text-5xl xl:text-[56px]">
                        Choosing us is a good decision for your business
                    </h2>

                    <p class="text-center">
                        We want you to unlearn everything that has been holding you
                        back. Stop waiting for that magical moment when all the
                        stars align and take that first step.
                    </p>
                </div>
                <!-- Section Content Block -->
            </div>
            <!-- Section Content Wrapper -->

            <!-- Video Block -->
            <div class="jos">
                <div class="relative flex items-center justify-center">
                    <img src="{{ asset('assets/img/th-8/video-img.jpg') }}" alt="video-img" width="1296" height="620" class="h-auto w-full" />
                    <a data-fslightbox="gallery" href="https://www.youtube.com/watch?v=3nQNiWdeH2Q" class="group group absolute flex h-[100px] w-[100px] items-center justify-center rounded-[50%] bg-ColorLime text-[#121212]" aria-label="video-play">
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

<!-- Horizontal Text Slider -->
<div class="overflow-hidden bg-[#121212] py-5 text-3xl font-bold uppercase leading-[1.4] tracking-widest text-white">
    <!-- Horizontal Slider Block-->
    <div class="horizontal-slide-from-right-to-left flex gap-x-[30px]">
        <span class="flex whitespace-nowrap">Got a project idea? Use our free quote now!
        </span>
        <img src="{{ asset('assets/img/icons/icon-purple-flash.svg') }}" alt="arm-icon" width="28" height="35" />
        <span class="flex whitespace-nowrap">Got a project idea? Use our free quote now!
        </span>
        <img src="{{ asset('assets/img/icons/icon-purple-flash.svg') }}" alt="arm-icon" width="28" height="35" />
        <span class="flex whitespace-nowrap">Got a project idea? Use our free quote now!
        </span>
        <img src="{{ asset('assets/img/icons/icon-purple-flash.svg') }}" alt="arm-icon" width="28" height="35" />
        <span class="flex whitespace-nowrap">Got a project idea? Use our free quote now!
        </span>
        <img src="{{ asset('assets/img/icons/icon-purple-flash.svg') }}" alt="arm-icon" width="28" height="35" />
    </div>
    <!-- Horizontal Slider Block-->
</div>
<!-- Horizontal Text Slider -->

<!-- Pricing Section Start -->
<section class="section-pricing" id="section-pricing">
    <div class="relative z-10">
        <!-- Section Space -->
        <div class="section-space">
            <!-- Section Container -->
            <div class="container-default">
                <!-- Section Content Wrapper -->
                <div class="jos">
                    <!-- Section Content Block -->
                    <div class="mx-auto max-w-[636px]">
                        <div class="mb-5">
                            <h2 class="text-center font-PublicSans text-4xl font-bold leading-[1.14] text-[#1212121] lg:text-5xl xl:text-[56px]">
                                Our pricing plans are designed for your favor
                            </h2>
                        </div>
                        <p class="text-center">
                            Starting any business has a cost, so you need to determine
                            how you will cover the costs. You have ways to finance
                            your startup
                        </p>
                    </div>
                    <!-- Section Content Block -->
                </div>
                <!-- Section Content Wrapper -->

                <!-- Pricing Area -->
                <div class="jos">
                    <!-- Pricing Button Block -->
                    <div class="my-[50px] flex flex-row items-center justify-center gap-6">
                        <span class="font-bold">Per Month</span>

                        <!-- Toggle Button -->
                        <label for="toggle" class="flex cursor-pointer items-center">
                            <!-- toggle -->
                            <span class="relative h-[35px] w-[70px] rounded-[35px] bg-[#121212]">
                                <!-- hidden input -->
                                <input id="toggle" type="checkbox" class="hidden" onclick="toggleSwitch()" />
                                <!-- dot -->
                                <span class="toggle_dot absolute h-[35px] w-[35px] rounded-full bg-[#C1FF00] transition-all duration-300"></span>
                            </span>
                        </label>
                        <!-- Toggle Button -->
                        <span class="font-bold">Per Year</span>
                    </div>
                    <!-- Pricing Button Block -->

                    <!-- Pricing Content Block -->
                    <div class="mx-auto max-w-[1076px]">
                        <div class="flex flex-col items-center rounded-[10px] border border-ColorBlack bg-white p-10 md:flex-row md:divide-x md:px-10 md:py-0 lg:px-[73px]">
                            <div class="w-full text-center md:w-1/2 md:py-[50px] md:pr-10 md:text-left lg:pr-20">
                                <div class="text-xl leading-[1.6] tracking-tighter">
                                    For business
                                </div>
                                <div class="month">
                                    <span class="font-PublicSans text-[50px] font-bold leading-[1.4] text-[#121212] lg:text-[56px]">$30.00</span>/Per Month
                                </div>
                                <div class="annual hidden">
                                    <span class="font-PublicSans text-[50px] font-bold leading-[1.4] text-[#121212] lg:text-[56px]">$300.00</span>/Per Year
                                </div>
                                <p>
                                    One way to determine how much money you need is to do
                                    a break-even analysis.
                                </p>
                            </div>
                            <div class="w-full md:w-1/2 md:py-[50px] md:pl-10 lg:pl-20 xl:pl-32">
                                <div class="mb-6 text-center font-semibold md:text-left">
                                    That includes:
                                </div>
                                <!-- Pricing Info List -->
                                <ul class="flex flex-col gap-3">
                                    <!-- Pricing Info Item -->
                                    <li class="font-semibold">
                                        <span class="text-[#9B51E0]"><i class="fa-solid fa-badge-check"></i></span>
                                        Live chat and email
                                    </li>
                                    <!-- Pricing Info Item -->
                                    <!-- Pricing Info Item -->
                                    <li class="font-semibold">
                                        <span class="text-[#9B51E0]"><i class="fa-solid fa-badge-check"></i></span>
                                        Fully managed program
                                        <!-- Pricing Info Item -->
                                        <!-- Pricing Info Item -->
                                    </li>

                                    <li class="font-semibold">
                                        <span class="text-[#9B51E0]"><i class="fa-solid fa-badge-check"></i></span>
                                        Experience team members
                                    </li>
                                    <!-- Pricing Info Item -->
                                    <!-- Pricing Info Item -->
                                    <li class="font-semibold">
                                        <span class="text-[#9B51E0]"><i class="fa-solid fa-badge-check"></i></span>
                                        Step by step working process
                                    </li>
                                    <!-- Pricing Info Item -->
                                    <!-- Pricing Info Item -->
                                    <li class="font-semibold">
                                        <span class="text-[#9B51E0]"><i class="fa-solid fa-badge-check"></i></span>
                                        Re-evaluation project management
                                    </li>
                                    <!-- Pricing Info Item -->
                                </ul>
                                <!-- Pricing Info List -->

                                <a href="{{ url('pricing') }}" class="btn mt-[30px] block rounded-[3px] border-none bg-[#C1FF00] py-[18px] text-ColorBlack hover:bg-[#a6ff00] xl:mt-[50px]">Choose Plan</a>
                            </div>
                        </div>
                    </div>
                    <!-- Pricing Content Block -->
                </div>
                <!-- Pricing Area -->
            </div>
            <!-- Section Container -->
        </div>
        <!-- Section Space -->

        <!-- Section Shape -->
        <div class="absolute top-28 -z-10 hidden xl:right-10 xl:inline-block xxl:right-[90px]">
            <img src="{{ asset('assets/img/elements/home-8-dot-shape-4.svg') }}" alt="home-8-dot-shape-4" width="209" height="297" />
        </div>
        <!-- Section Shape -->
    </div>
</section>
<!-- Pricing Section End -->

<!-- Background Shape -->
<div class="absolute -z-10 hidden xl:left-10 xl:inline-block xxl:left-[90px] xxl:top-[75%]">
    <img src="{{ asset('assets/img/elements/home-8-dot-shape-5.svg') }}" alt="home-8-dot-shape-5" width="97" height="226" />
</div>
<!-- Background Shape -->

<!-- Team Section Start -->
<section class="section-team" id="section-team">
    <!-- Section Space -->
    <div class="section-space-bottom">
        <!-- Section Container -->
        <div class="container-default">
            <!-- Team Area -->
            <div class="grid grid-cols-1 items-center gap-10 lg:grid-cols-[0.75fr_minmax(0,_1fr)] xl:gap-20 xxl:gap-[134px]">
                <!-- Content Block Left -->
                <div class="jos" data-jos_animation="fade-right">
                    <!-- Section Wrapper -->
                    <div>
                        <!-- Section Block -->
                        <div class="mb-5">
                            <h2 class="font-PublicSans text-4xl font-bold leading-[1.14] text-[#121212] lg:text-left lg:text-5xl xl:text-[56px]">
                                Meet members of our creative team
                            </h2>
                        </div>
                        <!-- Section Block -->
                    </div>
                    <!-- Section Wrapper -->
                    <p class="mb-5">
                        We work to create the most attractive & meaningful place for
                        small businesses. Our Team always ready to help you.
                    </p>
                    <ul class="flex flex-col gap-5 font-semibold">
                        <li>
                            <span class="mr-3 inline-block text-xl text-ColorPurple"><i class="fa-solid fa-badge-check"></i></span>
                            A team consisting of skilled members
                        </li>
                        <li>
                            <span class="mr-3 inline-block text-xl text-ColorPurple"><i class="fa-solid fa-badge-check"></i></span>
                            Ready to help you 24/7 email & phone support
                        </li>
                    </ul>
                    <div class="mt-8 lg:mt-[50px]">
                        <a href="#" class="btn is-lime is-large btn-animation group inline-block rounded-[3px]"><span>Learn More</span></a>
                    </div>
                </div>
                <!-- Content Block Left -->

                <!-- Team List -->
                <div class="jos" data-jos_animation="fade-left">
                    <div class="grid grid-cols-1 gap-x-6 gap-y-[30px] sm:grid-cols-2 md:grid-cols-3">
                        <!-- Team Item -->
                        <div class="group flex flex-col items-center justify-center text-center">
                            <div class="mb-6 h-auto max-w-full overflow-hidden rounded-[50%]">
                                <img src="{{ asset('assets/img/th-8/team-img-1.jpg') }}" alt="team-img-1" width="196" height="196" class="h-full w-full object-cover" />
                            </div>
                            <div>
                                <div class="mb-[5px] block text-xl font-semibold leading-[1.4] text-ColorDark">
                                    Arlene McCoy
                                </div>
                                <span>UI/UX Designer</span>
                            </div>
                        </div>
                        <!-- Team Item -->
                        <!-- Team Item -->
                        <div class="group flex flex-col items-center justify-center text-center">
                            <div class="mb-6 h-auto max-w-full overflow-hidden rounded-[50%]">
                                <img src="{{ asset('assets/img/th-8/team-img-2.jpg') }}" alt="team-img-2" width="196" height="196" class="h-full w-full object-cover" />
                            </div>
                            <div>
                                <div class="mb-[5px] block text-xl font-semibold leading-[1.4] text-ColorDark">
                                    Theresa Webb
                                </div>
                                <span>Project Manager</span>
                            </div>
                        </div>
                        <!-- Team Item -->
                        <!-- Team Item -->
                        <div class="group flex flex-col items-center justify-center text-center">
                            <div class="mb-6 h-auto max-w-full overflow-hidden rounded-[50%]">
                                <img src="{{ asset('assets/img/th-8/team-img-3.jpg') }}" alt="team-img-3" width="196" height="196" class="h-full w-full object-cover" />
                            </div>
                            <div>
                                <div class="mb-[5px] block text-xl font-semibold leading-[1.4] text-ColorDark">
                                    Floyd Miles
                                </div>
                                <span>Marketing Expert</span>
                            </div>
                        </div>
                        <!-- Team Item -->
                        <!-- Team Item -->
                        <div class="group flex flex-col items-center justify-center text-center">
                            <div class="mb-6 h-auto max-w-full overflow-hidden rounded-[50%]">
                                <img src="{{ asset('assets/img/th-8/team-img-4.jpg') }}" alt="team-img-4" width="196" height="196" class="h-full w-full object-cover" />
                            </div>
                            <div>
                                <div class="mb-[5px] block text-xl font-semibold leading-[1.4] text-ColorDark">
                                    Darlene Robertson
                                </div>
                                <span>Web Developer</span>
                            </div>
                        </div>
                        <!-- Team Item -->
                        <!-- Team Item -->
                        <div class="group flex flex-col items-center justify-center text-center">
                            <div class="mb-6 h-auto max-w-full overflow-hidden rounded-[50%]">
                                <img src="{{ asset('assets/img/th-8/team-img-5.jpg') }}" alt="team-img-5" width="196" height="196" class="h-full w-full object-cover" />
                            </div>
                            <div>
                                <div class="mb-[5px] block text-xl font-semibold leading-[1.4] text-ColorDark">
                                    Bessie Cooper
                                </div>
                                <span>Product Designer</span>
                            </div>
                        </div>
                        <!-- Team Item -->
                        <!-- Team Item -->
                        <div class="group flex flex-col items-center justify-center text-center">
                            <div class="mb-6 h-auto max-w-full overflow-hidden rounded-[50%]">
                                <img src="{{ asset('assets/img/th-8/team-img-6.jpg') }}" alt="team-img-6" width="196" height="196" class="h-full w-full object-cover" />
                            </div>
                            <div>
                                <div class="mb-[5px] block text-xl font-semibold leading-[1.4] text-ColorDark">
                                    Jerome Bell
                                </div>
                                <span>HTML Developer</span>
                            </div>
                        </div>
                        <!-- Team Item -->
                    </div>
                </div>
                <!-- Team List -->
            </div>
            <!-- Team Area -->
        </div>
        <!-- Section Container -->
    </div>
    <!-- Section Space -->
</section>
<!-- Team Section End -->

<!-- Blog Section Start -->
<section class="section-blog">
    <!-- Section Space -->
    <div class="section-space">
        <!-- Section Container -->
        <div class="container-default">
            <!-- Section Content Wrapper -->
            <div class="jos mb-[60px] xl:mb-20">
                <!-- Section Content Block -->
                <div class="mx-auto max-w-[640px]">
                    <div class="mb-5">
                        <h2 class="mb-5 text-center font-PublicSans text-4xl font-bold leading-[1.14] text-[#1212121] lg:text-5xl xl:text-[56px]">
                            Browse our articles and resources to learn more
                        </h2>
                    </div>
                    <p class="text-center">
                        A lot of information is given in our blogs. You can learn
                        more about startup by reading our blogs. It’s time to
                        brainstorm ideas for your business
                    </p>
                </div>
                <!-- Section Content Block -->
            </div>
            <!-- Section Content Wrapper -->

            <!-- Blog List -->
            <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
                <!-- Blog Item -->
                <div class="jos" data-jos_animation="flip-left">
                    <div class="group h-full rounded-[5px] border border-[#121212] p-5">
                        <!-- Blog Image -->
                        <div class="relative overflow-hidden rounded-[5px]">
                            <a href="{{ url('blogdetails') }}" class="block">
                                <img src="{{ asset('assets/img/th-8/blog-img-1.jpg') }}" alt="blog-img-1" width="376" height="280" class="h-auto w-full transition-all duration-300 group-hover:scale-105" />
                            </a>
                            <a href="#" class="absolute right-[10px] top-[10px] inline-block rounded-[3px] bg-[#FDFBF9] px-5 py-[10px] text-base font-bold hover:bg-ColorLime">
                                Startup
                            </a>
                        </div>
                        <div class="mt-6">
                            <!-- Post Meta -->
                            <div class="mb-[15px] flex flex-col gap-x-[15px] gap-y-2 text-base font-bold xl:flex-row">
                                <a href="#" class="flex gap-[10px] hover:text-ColorPurple">
                                    <span class="text-lg"><i class="fa-regular fa-circle-user"></i></span>
                                    Adam Smith
                                </a>
                                <a href="#" class="flex gap-[10px] hover:text-ColorPurple">
                                    <span class="text-lg"><i class="fa-light fa-calendar"></i></span>
                                    Feb 28, 2023
                                </a>
                            </div>
                            <a href="{{ url('blogdetails') }}" class="mb-[30px] block font-PublicSans font-bold leading-[1.35] text-[#121212] group-hover:text-ColorPurple xl:text-2xl xxl:text-[28px]">Benefits to first-generation low-income
                                entrepreneurs</a>

                            <a href="{{ url('servicedetails') }}" class="mt-auto inline-flex items-center gap-x-2 text-base font-bold text-[#121212] hover:text-ColorPurple">Read more
                                <span class="transition-all duration-300 ease-in-out hover:translate-x-2">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Blog Item -->
                <!-- Blog Item -->
                <div class="jos" data-jos_animation="flip-left">
                    <div class="group h-full rounded-[5px] border border-[#121212] p-5">
                        <!-- Blog Image -->
                        <div class="relative overflow-hidden rounded-[5px]">
                            <a href="{{ url('blogdetails') }}" class="block">
                                <img src="{{ asset('assets/img/th-8/blog-img-2.jpg') }}" alt="blog-img-2" width="376" height="280" class="h-auto w-full transition-all duration-300 group-hover:scale-105" />
                            </a>
                            <a href="#" class="absolute right-[10px] top-[10px] inline-block rounded-[3px] bg-[#FDFBF9] px-5 py-[10px] text-base font-bold hover:bg-ColorLime">
                                Entrepreneurship
                            </a>
                        </div>
                        <div class="mt-6">
                            <!-- Post Meta -->
                            <div class="mb-[15px] flex flex-col gap-x-[15px] gap-y-2 text-base font-bold xl:flex-row">
                                <a href="#" class="flex gap-[10px] hover:text-ColorPurple">
                                    <span class="text-lg"><i class="fa-regular fa-circle-user"></i></span>
                                    Max Wevar
                                </a>
                                <a href="#" class="flex gap-[10px] hover:text-ColorPurple">
                                    <span class="text-lg"><i class="fa-light fa-calendar"></i></span>
                                    Feb 10, 2023
                                </a>
                            </div>
                            <a href="{{ url('blogdetails') }}" class="mb-[30px] block font-PublicSans font-bold leading-[1.35] text-[#121212] group-hover:text-ColorPurple xl:text-2xl xxl:text-[28px]">Dangers of a traditional for your career goal</a>

                            <a href="{{ url('servicedetails') }}" class="mt-auto inline-flex items-center gap-x-2 text-base font-bold text-[#121212] hover:text-ColorPurple">Read more
                                <span class="transition-all duration-300 ease-in-out hover:translate-x-2">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Blog Item -->
                <!-- Blog Item -->
                <div class="jos" data-jos_animation="flip-left">
                    <div class="group h-full rounded-[5px] border border-[#121212] p-5">
                        <!-- Blog Image -->
                        <div class="relative overflow-hidden rounded-[5px]">
                            <a href="{{ url('blogdetails') }}" class="block">
                                <img src="{{ asset('assets/img/th-8/blog-img-3.jpg') }}" alt="blog-img-3" width="376" height="280" class="h-auto w-full transition-all duration-300 group-hover:scale-105" />
                            </a>
                            <a href="#" class="absolute right-[10px] top-[10px] inline-block rounded-[3px] bg-[#FDFBF9] px-5 py-[10px] text-base font-bold hover:bg-ColorLime">
                                Technology
                            </a>
                        </div>
                        <div class="mt-6">
                            <!-- Post Meta -->
                            <div class="mb-[15px] flex flex-col gap-x-[15px] gap-y-2 text-base font-bold xl:flex-row">
                                <a href="#" class="flex gap-[10px] hover:text-ColorPurple">
                                    <span class="text-lg"><i class="fa-regular fa-circle-user"></i></span>
                                    Willium Jons
                                </a>
                                <a href="#" class="flex gap-[10px] hover:text-ColorPurple">
                                    <span class="text-lg"><i class="fa-light fa-calendar"></i></span>
                                    Feb 03, 2023
                                </a>
                            </div>
                            <a href="{{ url('blogdetails') }}" class="mb-[30px] block font-PublicSans font-bold leading-[1.35] text-[#121212] group-hover:text-ColorPurple xl:text-2xl xxl:text-[28px]">How to increase ad revenue in mobile applications</a>

                            <a href="{{ url('servicedetails') }}" class="mt-auto inline-flex items-center gap-x-2 text-base font-bold text-[#121212] hover:text-ColorPurple">Read more
                                <span class="transition-all duration-300 ease-in-out hover:translate-x-2">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Blog Item -->
            </div>
            <!-- Blog List -->
        </div>
        <!-- Section Container -->
    </div>
    <!-- Section Space -->
</section>
<!-- Blog Section End -->

@endsection



@section('footer')
     <!-- CTA Section Start -->
     <section class="section-cta relative z-30">
        <!-- Negative Section Space -->
        <div class="-mb-20 lg:-mb-40">
            <!-- Section Container -->
            <div class="container-default">
                <div class="relative z-10 rounded-[5px] bg-ColorPurple">
                    <div class="py-[60px] lg:py-20 xl:py-[100px]">
                        <div class="mx-auto max-w-full px-8 md:max-w-[80%] lg:max-w-[675px]">
                            <h2 class="jos mb-5 text-center font-PublicSans text-4xl font-semibold leading-[1.14] text-[#1212121] text-white lg:text-5xl xl:text-[56px]">
                                Contact us today to get a free consultation!
                            </h2>
                            <p class="jos text-center text-white">
                                Send us a message to get answers to any of your questions &
                                we'll get back to you within 24-48 hours or as soon as
                                possible.
                            </p>
                            <div class="jos flex flex-wrap justify-center gap-[18px]">
                                <a href="#" class="btn is-lime is-large btn-animation group inline-block rounded-[3px]"><span>Get In Touch</span></a>
                                <a href="#" class="btn is-outline-white is-large btn-animation group inline-block rounded-[3px]"><span>View Services</span></a>
                            </div>
                        </div>
                    </div>

                    <!-- Background Shape -->
                    <div class="absolute -z-10 hidden xl:left-10 xl:top-20 xl:inline-block xxl:left-20 xxl:top-[100px]">
                        <img src="{{ asset('assets/img/elements/home-8-dot-shape-6.svg') }}" alt="home-3-content-img-shape-6" width="209" height="297" />
                    </div>
                </div>
            </div>
            <!-- Section Container -->
        </div>
        <!-- Section Space -->
    </section>
    <!-- CTA Section End -->

    <!-- Footer Section Start -->
    <footer class="section-footer z-20">
        <div class="relative z-10 bg-[#121212]">
            <div class="pt-20 lg:pt-[100px] xl:pt-32 xxl:pt-[200px]">
                <!-- Footer Area Center -->
                <div class="text-[#FDFBF9]/80">
                    <!-- Footer Center Spacing -->
                    <div class="py-[60px] lg:py-20">
                        <!-- Section Container -->
                        <div class="container-default">
                            <!-- Footer Widget List -->
                            <div class="grid gap-x-16 gap-y-10 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-[1fr_repeat(3,_auto)] xl:gap-x-20 xxl:gap-x-[134px]">
                                <!-- Footer Widget Item -->
                                <div class="flex flex-col gap-y-7 md:col-span-3 lg:col-span-1">
                                    <!-- Footer Logo -->
                                    <a href="{{ url('index') }}">
                                        <img src="{{ asset('assets/img/logo-lime-light.png') }}" alt="Masco" width="109" height="24" />
                                    </a>
                                    <!-- Footer Content -->
                                    <div>
                                        <!-- Footer About Text -->
                                        <div class="lg:max-w-[416px]">
                                            We are strategic & creative digital agency who are
                                            focused on user experience, mobile, social, data
                                            gathering and promotional offerings.
                                        </div>
                                        <!-- Footer Mail -->
                                        <a href="mailto:yourdemo@email.com" class="my-6 block underline-offset-4 transition-all duration-300 hover:underline">yourdemo@email.com</a>
                                        <!-- Footer Social Link -->
                                        <div class="flex flex-wrap gap-5">
                                            <a href="https://twitter.com" target="_blank" rel="noopener noreferrer" class="flex h-[30px] w-[30px] items-center justify-center rounded-[50%] bg-[#FDFBF9]/10 text-sm text-[#FDFBF9] transition-all duration-300 hover:bg-ColorLime hover:text-[#121212]" aria-label="twitter">
                                                <i class="fa-brands fa-x-twitter"></i>
                                            </a>
                                            <a href="https://www.facebook.com/" target="_blank" rel="noopener noreferrer" class="flex h-[30px] w-[30px] items-center justify-center rounded-[50%] bg-[#FDFBF9]/10 text-sm text-[#FDFBF9] transition-all duration-300 hover:bg-ColorLime hover:text-[#121212]" aria-label="facebook">
                                                <i class="fa-brands fa-facebook-f"></i>
                                            </a>
                                            <a href="https://www.instagram.com/" target="_blank" rel="noopener noreferrer" class="flex h-[30px] w-[30px] items-center justify-center rounded-[50%] bg-[#FDFBF9]/10 text-sm text-[#FDFBF9] transition-all duration-300 hover:bg-ColorLime hover:text-[#121212]" aria-label="instagram">
                                                <i class="fa-brands fa-instagram"></i>
                                            </a>
                                            <a href="https://www.github.com/" target="_blank" rel="noopener noreferrer" class="flex h-[30px] w-[30px] items-center justify-center rounded-[50%] bg-[#FDFBF9]/10 text-sm text-[#FDFBF9] transition-all duration-300 hover:bg-ColorLime hover:text-[#121212]" aria-label="github">
                                                <i class="fa-brands fa-github"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- Footer Content -->
                                </div>
                                <!-- Footer Widget Item -->

                                <!-- Footer Widget Item -->
                                <div class="flex flex-col gap-y-7 md:col-span-1 lg:col-span-1">
                                    <!-- Footer Widget Title -->
                                    <div class="text-xl font-semibold capitalize">
                                        Primary Pages
                                    </div>
                                    <!-- Footer Navbar -->
                                    <ul class="flex flex-col gap-y-[10px] capitalize">
                                        <li>
                                            <a href="{{ url('index') }}" class="hover:opcity-100 underline-offset-4 opacity-80 transition-all duration-300 ease-linear hover:underline">Home</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('about') }}" class="hover:opcity-100 underline-offset-4 opacity-80 transition-all duration-300 ease-linear hover:underline">About Us</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('services') }}" class="hover:opcity-100 underline-offset-4 opacity-80 transition-all duration-300 ease-linear hover:underline">Services</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('pricing') }}" class="hover:opcity-100 underline-offset-4 opacity-80 transition-all duration-300 ease-linear hover:underline">pricing</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('contact') }}" class="hover:opcity-100 underline-offset-4 opacity-80 transition-all duration-300 ease-linear hover:underline">Contact</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Footer Widget Item -->

                                <!-- Footer Widget Item -->
                                <div class="flex flex-col gap-y-6 md:col-span-1 lg:col-span-1">
                                    <!-- Footer Title -->
                                    <div class="text-xl font-semibold capitalize">
                                        Utility pages
                                    </div>
                                    <!-- Footer Title -->

                                    <!-- Footer Navbar -->
                                    <ul class="flex flex-col gap-y-[10px] capitalize">
                                        <li>
                                            <a href="{{ url('signup') }}" class="hover:opcity-100 underline-offset-4 opacity-80 transition-all duration-300 ease-linear hover:underline">Signup</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('login') }}" class="hover:opcity-100 underline-offset-4 opacity-80 transition-all duration-300 ease-linear hover:underline">Login</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('error404') }}" class="hover:opcity-100 underline-offset-4 opacity-80 transition-all duration-300 ease-linear hover:underline">404 Not found</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('resetpassword') }}" class="hover:opcity-100 underline-offset-4 opacity-80 transition-all duration-300 ease-linear hover:underline">Password Reset</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Footer Widget Item-->

                                <!-- Footer Widget Item -->
                                <div class="flex flex-col gap-y-6 md:col-span-1 lg:col-span-1">
                                    <!-- Footer Title -->
                                    <div class="text-xl font-semibold capitalize">
                                        Resources
                                    </div>
                                    <!-- Footer Title -->

                                    <!-- Footer Navbar -->
                                    <ul class="flex flex-col gap-y-[10px] capitalize">
                                        <li>
                                            <a href="https://www.example.com/" target="_blank" rel="noopener noreferrer" class="hover:opcity-100 underline-offset-4 opacity-80 transition-all duration-300 ease-linear hover:underline">Support</a>
                                        </li>
                                        <li>
                                            <a href="https://www.example.com/" target="_blank" rel="noopener noreferrer" class="hover:opcity-100 underline-offset-4 opacity-80 transition-all duration-300 ease-linear hover:underline">Privacy policy</a>
                                        </li>
                                        <li>
                                            <a href="https://www.example.com/" target="_blank" rel="noopener noreferrer" class="hover:opcity-100 underline-offset-4 opacity-80 transition-all duration-300 ease-linear hover:underline">Terms & Conditions</a>
                                        </li>
                                        <li>
                                            <a href="https://www.example.com/" target="_blank" rel="noopener noreferrer" class="hover:opcity-100 underline-offset-4 opacity-80 transition-all duration-300 ease-linear hover:underline">Strategic finance</a>
                                        </li>
                                        <li>
                                            <a href="https://www.example.com/" target="_blank" rel="noopener noreferrer" class="hover:opcity-100 underline-offset-4 opacity-80 transition-all duration-300 ease-linear hover:underline">Video guide</a>
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
                <div>
                    <!-- Footer Bottom Spacing -->
                    <div class="bg-[#FDFBF9]/10 py-[18px] text-white/80">
                        <!-- Section Container -->
                        <div class="container-default">
                            <div class="text-center">
                                &copy; Copyright 2024, All Rights Reserved by PixcelsThemes
                            </div>
                        </div>
                        <!-- Section Container -->
                    </div>
                    <!-- Footer Bottom Spacing -->
                </div>

                <!-- Section Shape - Arc -->
                <div class="absolute left-0 top-0 -z-10 w-full">
                    <img src="{{ asset('assets/img/elements/arc-shape-black.png') }}" alt="arc-shape-black" width="1600" height="94" class="w-full" />
                </div>
            </div>
            <!-- Footer Bottom -->

            <!-- Background Shape -->
            <div class="absolute -z-10 hidden xl:right-10 xl:top-20 xl:inline-block xxl:right-20 xxl:top-[100px]">
                <img src="{{ asset('assets/img/elements/home-8-dot-shape-7.svg') }}" alt="home-3-content-img-shape-7" width="268" height="291" />
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->
@endsection