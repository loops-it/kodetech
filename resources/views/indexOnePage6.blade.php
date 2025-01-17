@extends('layout.layout2')

@section('headerLogo')
<img src="{{ asset('assets/img/logo-blue-dark.png') }}" alt="Masco" width="109" height="24" />
@endsection



@section('headButtons')

<div class="flex items-center gap-6">
    <a href="{{ url('login') }}" class="btn-text hidden hover:text-ColorBlue sm:inline-block">Login</a>
    <a href="{{ url('signup') }}" class="btn is-blue btn-animation group hidden rounded-[3px] sm:inline-block"><span>Sign up free</span></a>
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
    <div class="relative z-10">
        <!-- Hero Space -->
        <div class="pb-[60px] pt-[105px] sm:pt-[145px] md:pb-20 lg:pb-[100px] lg:pt-[185px]">
            <!-- Hero Container -->
            <div class="container-default relative">
                <!-- Hero Area -->
                <div class="relative">
                    <!-- Hero Content Block -->
                    <div class="text-center">
                        <div class="jos mx-auto mb-6 max-w-[900px]">
                            <h1 class="mb-6 font-GeneralSans font-semibold leading-[1.04] text-ColorBlack lg:text-6xl xl:text-[76px] xxl:text-[90px]">
                                Start a conversation in the
                                <span class="relative inline-block z-10 after:absolute after:left-1/2 after:top-1/2 after:-z-10 after:h-4/5 after:w-[106%] after:-translate-x-1/2 after:-translate-y-1/2 after:rounded-[5px] after:bg-[#BEF8FC] after:px-4">email world</span>
                            </h1>
                        </div>
                        <div class="jos mx-auto mb-8 max-w-[750px] lg:mb-[50px]">
                            <p class="mb-8">
                                Masco is a cold email software that lets you communicate
                                B2B with ease. A key reason for this is that 80% of
                                people prefer sales representatives to contact them via
                                email.
                            </p>
                        </div>
                        <div class="mb-10 flex flex-wrap justify-center gap-5 lg:mb-[60xp] xl:mb-20">
                            <a href="{{ url('teams') }}" class="btn is-blue btn-animation is-large group inline-block rounded-[3px]"><span>Get Started</span></a>
                            <a data-fslightbox="gallery" href="https://www.youtube.com/watch?v=3nQNiWdeH2Q" class="btn is-outline-black btn-animation is-large group inline-block rounded-[3px]" aria-label="video-play"><span><i class="fa-solid fa-circle-play fa-fw mr-[10px]"></i>See How It Works</span></a>
                        </div>
                    </div>
                    <!-- Hero Content Block -->

                    <!-- Hero Image Block -->
                    <div class="relative mx-auto max-w-[1076px]">
                        <img src="{{ asset('assets/img/th-6/hero-dashboard.jpg') }}" alt="hero-dashboard" width="1076" height="550" data-jos_animation="zoom-in-down" />
                    </div>
                    <!-- Hero Image Block -->
                </div>
                <!-- Hero Area -->

                <!-- Hero Background Icon - 1 -->
                <div class="absolute left-0 top-1/3 -z-10 hidden md:inline-block">
                    <img src="{{ asset('assets/img/icons/icon-black-mail-close.svg') }}" alt="icon-black-mail-close" width="74" height="67" />
                </div>
                <!-- Hero Background Icon - 2 -->
                <div class="absolute right-0 top-1/4 -z-10 hidden md:inline-block">
                    <img src="{{ asset('assets/img/icons/icon-black-mail-open.svg') }}" alt="icon-black-mail-close" width="74" height="67" />
                </div>
                <!-- Hero Background Icon - 3 -->
                <div class="absolute bottom-[60px] right-0 -z-10 hidden md:inline-block">
                    <img src="{{ asset('assets/img/icons/icon-black-pen.svg') }}" alt="icon-black-mail-close" width="50" height="63" />
                </div>
            </div>
            <!-- Hero Container -->
        </div>
        <!-- Hero Space -->
    </div>
</section>
<!-- Hero Section End -->

<!-- Brand Section Start -->
<div class="section-brand">
    <div class="jos">
        <!-- Section Space -->
        <div class="pb-[60px] md:pb-20 lg:pb-[100px]">
            <!-- Section Container -->
            <div class="container-default">
                <div class="mx-auto mb-10 max-w-[80%] text-center text-xl font-semibold leading-[1.4] opacity-70 md:mb-16 lg:mb-20 lg:max-w-2xl">
                    Trusted by the most innovative companies worldwide
                </div>
                <!-- Brand Slider -->
                <div class="swiper brand-slider-2">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/img/th-6/brand-1.png') }}" alt="brand-1" width="186" height="46" class="h-auto w-fit" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/img/th-6/brand-2.png') }}" alt="brand-2" width="186" height="46" class="h-auto w-fit" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/img/th-6/brand-3.png') }}" alt="brand-3" width="186" height="46" class="h-auto w-fit" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/img/th-6/brand-4.png') }}" alt="brand-4" width="186" height="46" class="h-auto w-fit" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/img/th-6/brand-5.png') }}" alt="brand-5" width="186" height="46" class="h-auto w-fit" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/img/th-6/brand-6.png') }}" alt="brand-5" width="186" height="46" class="h-auto w-fit" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/img/th-6/brand-1.png') }}" alt="brand-1" width="186" height="46" class="h-auto w-fit" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/img/th-6/brand-2.png') }}" alt="brand-2" width="186" height="46" class="h-auto w-fit" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/img/th-6/brand-3.png') }}" alt="brand-3" width="186" height="46" class="h-auto w-fit" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/img/th-6/brand-4.png') }}" alt="brand-4" width="186" height="46" class="h-auto w-fit" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/img/th-6/brand-5.png') }}" alt="brand-5" width="186" height="46" class="h-auto w-fit" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/img/th-6/brand-6.png') }}" alt="brand-5" width="186" height="46" class="h-auto w-fit" />
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

<!-- Process Section Start -->
<section class="section-process">
    <!-- Section Background -->
    <div class="bg-[#0A102F]">
        <!-- Section Space -->
        <div class="section-space">
            <!-- Section Container -->
            <div class="container-default">
                <!-- Section Content Wrapper -->
                <div class="jos mb-[60px] xl:mb-20">
                    <!-- Section Content Block -->
                    <div class="mx-auto max-w-[636px]">
                        <h2 class="text-center font-GeneralSans font-semibold text-white">
                            A simple process to use is a cold email drip campaign
                        </h2>
                    </div>
                    <!-- Section Content Block -->
                </div>
                <!-- Section Content Wrapper -->

                <!-- Process List -->
                <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                    <!-- Process Item -->
                    <div class="jos" data-jos_animation="flip-left" data-jos_delay="0">
                        <div class="h-full rounded-[5px] border border-white p-[30px]">
                            <img src="{{ asset('assets/img/icons/icon-white-process-1.svg') }}" alt="icon-white-process-1" width="74" height="70" class="mb-8 h-12 w-auto lg:mb-10 lg:h-[70px] xl:mb-[60px]" />
                            <span class="mb-[30px] inline-block text-2xl font-semibold -tracking-[0.5px] text-[#BEF8FC] underline underline-offset-[10px]">Step 1</span>
                            <div class="mb-4 font-GeneralSans font-semibold leading-[1.4] text-white md:text-xl lg:text-2xl xxl:text-3xl">
                                Import perfect audience
                            </div>
                            <p class="line-clamp-4 text-white/80">
                                Create manually, use a contact form, or import bulk
                                prospects using CSV or using Google Drive spreadsheets.
                                Maximize of your workflow by automatically importing.
                            </p>
                        </div>
                    </div>
                    <!-- Process Item -->
                    <!-- Process Item -->
                    <div class="jos" data-jos_animation="flip-left" data-jos_delay="0.3">
                        <div class="h-full rounded-[5px] border border-white p-[30px]">
                            <img src="{{ asset('assets/img/icons/icon-white-process-2.svg') }}" alt="icon-white-process-2" width="73" height="70" class="mb-8 h-12 w-auto lg:mb-10 lg:h-[70px] xl:mb-[60px]" />
                            <span class="mb-[30px] inline-block text-2xl font-semibold -tracking-[0.5px] text-[#BEF8FC] underline underline-offset-[10px]">Step 2</span>
                            <div class="mb-4 font-GeneralSans font-semibold leading-[1.4] text-white md:text-xl lg:text-2xl xxl:text-3xl">
                                Write unique messages
                            </div>
                            <p class="line-clamp-4 text-white/80">
                                Maximize your open & reply rate making every email stand
                                with a personalization. Create your own attributes/merge
                                tag & Add variations with A/B Testing.
                            </p>
                        </div>
                    </div>
                    <!-- Process Item -->
                    <!-- Process Item -->
                    <div class="jos" data-jos_animation="flip-left" data-jos_delay="0.6">
                        <div class="h-full rounded-[5px] border border-white p-[30px]">
                            <img src="{{ asset('assets/img/icons/icon-white-process-3.svg') }}" alt="icon-white-process-3" width="78" height="70" class="mb-8 h-12 w-auto lg:mb-10 lg:h-[70px] xl:mb-[60px]" />
                            <span class="mb-[30px] inline-block text-2xl font-semibold -tracking-[0.5px] text-[#BEF8FC] underline underline-offset-[10px]">Step 3</span>
                            <div class="mb-4 font-GeneralSans font-semibold leading-[1.4] text-white md:text-xl lg:text-2xl xxl:text-3xl">
                                Turn on automation
                            </div>
                            <p class="line-clamp-4 text-white/80">
                                Wake up each day to find leads, directly in your inbox,
                                by building a predictable pipeline. We take prospects
                                who replied automatically out of the campaign.
                            </p>
                        </div>
                    </div>
                    <!-- Process Item -->
                </div>
                <!-- Process List -->
            </div>
            <!-- Section Container -->
        </div>
        <!-- Section Space -->
    </div>
    <!-- Section Background -->
</section>
<!-- Process Section End -->

<!-- Content Section Start -->
<section class="section-content" id="section-about">
    <!-- Section Spacer -->
    <div class="section-space">
        <!-- Section Container -->
        <div class="container-custom">
            <div class="flex flex-col gap-y-20 lg:gap-y-[100px] xl:gap-y-[120px]">
                <!-- Content Area Single -->
                <div class="grid items-center gap-10 lg:grid-cols-2 lg:gap-20 xl:grid-cols-[1fr_minmax(0,_1.1fr)] xl:gap-[100px]">
                    <!-- Content Block Left -->
                    <div class="jos lg:order-2" data-jos_animation="fade-left">
                        <!-- Section Wrapper -->
                        <div>
                            <!-- Section Block -->
                            <div class="mb-5">
                                <h2 class="font-GeneralSans font-semibold">
                                    Masco cold email outreach that drives meetings with
                                    your dream clients
                                </h2>
                            </div>
                            <!-- Section Block -->
                        </div>
                        <!-- Section Wrapper -->
                        <p>
                            Turn Masco's cold email outreach into a lead-converting
                            sales machine. Our simple-to-use features combined with
                            our done-for-you services will enable you to generate and
                            close deals faster.
                        </p>
                        <!-- Horizontal Line Separator -->
                        <div class="my-7 h-px w-full bg-ColorBlack opacity-10 xl:my-10 xxl:my-14"></div>
                        <div class="mt-12 flex flex-col gap-10 sm:flex-row sm:gap-[50px]">
                            <div>
                                <div class="font-GeneralSans text-[66px] font-semibold leading-[0.9] text-ColorBlue" data-module="countup">
                                    <span class="start-number" data-countup-number="80">80</span>%
                                </div>
                                <span>Increase in Monthly Meetings</span>
                            </div>
                            <div>
                                <div class="font-GeneralSans text-[66px] font-semibold leading-[0.9] text-ColorBlue" data-module="countup">
                                    $<span class="start-number" data-countup-number="50">50</span>M
                                </div>
                                <span>Recurring Revenue Generated</span>
                            </div>
                        </div>
                    </div>
                    <!-- Content Block Left -->
                    <!-- Content Block Right -->
                    <div class="jos relative z-10 lg:order-1" data-jos_animation="fade-right">
                        <!-- Content Image -->
                        <img src="{{ asset('assets/img/th-6/content-img-1.png') }}" alt="content-img-1" width="561" height="501" class="h-auto w-auto rounded-[5px]" />
                        <!-- Content Small Image -->
                        <img src="{{ asset('assets/img/th-6/content-img-small-1.png') }}" alt="content-img-2-small" width="291" height="303" class="absolute -bottom-12 -left-20 hidden xxl:inline-block" />
                    </div>
                    <!-- Content Block Right -->
                </div>
                <!-- Content Area Single -->
                <!-- Content Area Single -->
                <div class="grid items-center gap-10 lg:grid-cols-2 lg:gap-20 xl:grid-cols-[1.1fr_minmax(0,_1fr)] xl:gap-[100px]">
                    <!-- Content Block Left -->
                    <div class="jos" data-jos_animation="fade-left">
                        <!-- Section Wrapper -->
                        <div>
                            <!-- Section Block -->
                            <div class="mb-5">
                                <h2 class="font-GeneralSans font-semibold">
                                    Achieve more productivity and revenue for every rep
                                </h2>
                            </div>
                            <!-- Section Block -->
                        </div>
                        <!-- Section Wrapper -->
                        <p>
                            Creating an effective cold email outreach strategy takes
                            continuous optimization. Our cold email experts help so
                            you can do more deals.
                        </p>
                        <div class="mt-12 flex flex-col gap-10 sm:flex-row sm:gap-[50px]">
                            <ul class="flex flex-col gap-y-5">
                                <li>
                                    <div class="mb-4 font-GeneralSans text-xl font-semibold text-ColorBlack lg:text-2xl">
                                        <span class="mr-[5px] text-ColorBlue"><i class="fa-solid fa-badge-check"></i></span>
                                        All clients in one place
                                    </div>
                                    <p class="ml-[35px] max-w-[548px]">
                                        Have all your clients under one roof and shift
                                        between client profiles with just one click. Invite
                                        as many co-workers as you need to get the job done.
                                    </p>
                                </li>
                                <li>
                                    <div class="mb-4 font-GeneralSans text-xl font-semibold text-ColorBlack lg:text-2xl">
                                        <span class="mr-[5px] text-ColorBlue"><i class="fa-solid fa-badge-check"></i></span>
                                        Easily scale campaigns
                                    </div>
                                    <p class="ml-[35px] max-w-[548px]">
                                        Ready to send more volume? Just add an inbox (or
                                        five) to your existing campaign and we’ll start
                                        sending the same campaign from multiple inboxes.
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Content Block Left -->
                    <!-- Content Block Right -->
                    <div class="jos relative z-10" data-jos_animation="fade-right">
                        <!-- Content Image -->
                        <img src="{{ asset('assets/img/th-6/content-img-2.png') }}" alt="content-img-2" width="561" height="501" class="h-auto w-auto rounded-[5px]" />
                        <!-- Content Small Image -->
                        <img src="{{ asset('assets/img/th-6/content-img-2-small.png') }}" alt="content-img-2-small" width="217" height="283" class="absolute -left-14 top-[70px] hidden xxl:inline-block" />
                    </div>
                    <!-- Content Block Right -->
                </div>
                <!-- Content Area Single -->
            </div>
        </div>
        <!-- Section Container -->
    </div>
    <!-- Section Spacer -->
</section>
<!-- Content Section End -->

<!-- Service Section Start -->
<section class="section-service" id="section-service">
    <!-- Section Background -->
    <div class="bg-[#FAFAFA]">
        <!-- Section Space -->
        <div class="section-space">
            <!-- Section Container -->
            <div class="container-custom">
                <!-- Section Content Wrapper -->
                <div class="jos mb-[60px] xl:mb-20">
                    <!-- Section Content Block -->
                    <div class="mx-auto max-w-[636px]">
                        <h2 class="text-center font-GeneralSans font-semibold">
                            Our cold email software has many benefits to help you
                        </h2>
                    </div>
                    <!-- Section Content Block -->
                </div>
                <!-- Section Content Wrapper -->

                <!-- Service List -->
                <div class="grid gap-6 sm:grid-cols-2">
                    <!-- Service Item -->
                    <div class="jos" data-jos_delay="0">
                        <div class="group rounded-[10px] border border-[#E6E6E6] bg-white p-8 transition-all duration-300 ease-in-out hover:border-white hover:bg-white hover:shadow-[0_4px_80px_rgba(0,0,0,0.06)] lg:p-10 h-full">
                            <div class="flex flex-col justify-center gap-x-10 gap-y-6 sm:gap-y-8 lg:flex-row">
                                <div class="relative mx-auto w-16 lg:mx-0 lg:w-[98px]">
                                    <img src="{{ asset('assets/img/icons/icon-black-service-7.svg') }}" alt="icon-service-7" width="98" height="100" class="w-ful h-auto" />
                                </div>
                                <div class="flex-1 text-center lg:text-left">
                                    <div class="mb-4 text-xl font-semibold leading-[1.33] -tracking-[0.5px] text-ColorBlack lg:text-2xl">
                                        Email Targeting & List Building
                                    </div>
                                    <p class="mb-5 line-clamp-2">
                                        Brand strategy is all about developing a unique
                                        identity that distinguishes your business from
                                    </p>
                                    <a href="{{ url('servicedetails') }}" class="inline-flex items-center gap-x-2 text-base font-bold group-hover:text-ColorBlue">Discover More
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
                        <div class="group rounded-[10px] border border-[#E6E6E6] bg-white p-8 transition-all duration-300 ease-in-out hover:border-white hover:bg-white hover:shadow-[0_4px_80px_rgba(0,0,0,0.06)] lg:p-10 h-full">
                            <div class="flex flex-col justify-center gap-x-10 gap-y-6 sm:gap-y-8 lg:flex-row">
                                <div class="relative mx-auto w-16 lg:mx-0 lg:w-[98px]">
                                    <img src="{{ asset('assets/img/icons/icon-black-service-8.svg') }}" alt="icon-service-8" width="98" height="100" class="w-ful h-auto" />
                                </div>
                                <div class="flex-1 text-center lg:text-left">
                                    <div class="mb-4 text-xl font-semibold leading-[1.33] -tracking-[0.5px] text-ColorBlack lg:text-2xl">
                                        A/B Testing & Experimentation
                                    </div>
                                    <p class="mb-5 line-clamp-2">
                                        Once messaging and the audience is decided we begin
                                        experimenting and results in a qualitative
                                    </p>
                                    <a href="{{ url('servicedetails') }}" class="inline-flex items-center gap-x-2 text-base font-bold group-hover:text-ColorBlue">Discover More
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
                        <div class="group rounded-[10px] border border-[#E6E6E6] bg-white p-8 transition-all duration-300 ease-in-out hover:border-white hover:bg-white hover:shadow-[0_4px_80px_rgba(0,0,0,0.06)] lg:p-10 h-full">
                            <div class="flex flex-col justify-center gap-x-10 gap-y-6 sm:gap-y-8 lg:flex-row">
                                <div class="relative mx-auto w-16 lg:mx-0 lg:w-[98px]">
                                    <img src="{{ asset('assets/img/icons/icon-black-service-9.svg') }}" alt="icon-service-9" width="98" height="100" class="w-ful h-auto" />
                                </div>
                                <div class="flex-1 text-center lg:text-left">
                                    <div class="mb-4 text-xl font-semibold leading-[1.33] -tracking-[0.5px] text-ColorBlack lg:text-2xl">
                                        Scale Email Hyper-personalization
                                    </div>
                                    <p class="mb-5 line-clamp-2">
                                        One size doesn't fit all & without personalization,
                                        your emails will look like nothing but SPAM
                                    </p>
                                    <a href="{{ url('servicedetails') }}" class="inline-flex items-center gap-x-2 text-base font-bold group-hover:text-ColorBlue">Discover More
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
                        <div class="group rounded-[10px] border border-[#E6E6E6] bg-white p-8 transition-all duration-300 ease-in-out hover:border-white hover:bg-white hover:shadow-[0_4px_80px_rgba(0,0,0,0.06)] lg:p-10 h-full">
                            <div class="flex flex-col justify-center gap-x-10 gap-y-6 sm:gap-y-8 lg:flex-row">
                                <div class="relative mx-auto w-16 lg:mx-0 lg:w-[98px]">
                                    <img src="{{ asset('assets/img/icons/icon-black-service-10.svg') }}" alt="icon-service-10" width="98" height="100" class="w-ful h-auto" />
                                </div>
                                <div class="flex-1 text-center lg:text-left">
                                    <div class="mb-4 text-xl font-semibold leading-[1.33] -tracking-[0.5px] text-ColorBlack lg:text-2xl">
                                        Email Drip Campaign Optimization
                                    </div>
                                    <p class="mb-5 line-clamp-2">
                                        We optimize and measure for one metric, and a
                                        prospects that are interested in a conversation
                                    </p>
                                    <a href="{{ url('servicedetails') }}" class="inline-flex items-center gap-x-2 text-base font-bold group-hover:text-ColorBlue">Discover More
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
    <!-- Section Background -->
</section>
<!-- Service Section End -->

<!-- Integrate Section Start -->
<section class="section-interaction">
    <!-- Section Space -->
    <div class="section-space">
        <!-- Section Container -->
        <div class="container-default">
            <!-- Section Wrapper -->
            <div class="jos mb-[60px] flex flex-wrap items-end justify-between gap-8 xl:mb-20">
                <!-- Section Block -->
                <div class="max-w-[636px]">
                    <h2 class="font-GeneralSans font-semibold">
                        We automate cold outreach across multiple channels
                    </h2>
                </div>
                <!-- Section Block -->
                <a href="#" class="btn is-blue btn-animation is-large group rounded-[5px]"><span>See All Integrations</span></a>
            </div>
            <!-- Section Wrapper -->

            <!-- Integration Slider Area -->
            <div>
                <!-- Integration Wrapper -->
                <div class="flex flex-row flex-nowrap py-5">
                    <!-- Integration Content -->
                    <div class="horizontal-slide-from-right-to-left mx-3 grid grid-flow-col gap-x-6 whitespace-nowrap">
                        <!-- Integration Tag -->
                        <div class="flex items-center gap-x-4 rounded-[5px] border border-[#EAEDF0] py-[10px] pl-[10px] pr-[30px] font-GeneralSans text-2xl font-semibold leading-[1.16] text-ColorBlack">
                            <div class="h-auto w-[60px]">
                                <img src="{{ asset('assets/img/icons/icon-color-zoom.svg') }}" alt="icon-color-zoom" width="60" height="60" />
                            </div>
                            Zoom
                        </div>
                        <!-- Integration Tag -->
                        <!-- Integration Tag -->
                        <div class="flex items-center gap-x-4 rounded-[5px] border border-[#EAEDF0] py-[10px] pl-[10px] pr-[30px] font-GeneralSans text-2xl font-semibold leading-[1.16] text-ColorBlack">
                            <div class="h-auto w-[60px]">
                                <img src="{{ asset('assets/img/icons/icon-color-spotify.svg') }}" alt="icon-color-t" width="52" height="59" />
                            </div>
                            Spotify
                        </div>
                        <!-- Integration Tag -->
                        <!-- Integration Tag -->
                        <div class="flex items-center gap-x-4 rounded-[5px] border border-[#EAEDF0] py-[10px] pl-[10px] pr-[30px] font-GeneralSans text-2xl font-semibold leading-[1.16] text-ColorBlack">
                            <div class="h-auto w-[60px]">
                                <img src="{{ asset('assets/img/icons/icon-color-gmail.svg') }}" alt="icon-color-gmail" width="57" height="58" />
                            </div>
                            Gmail
                        </div>
                        <!-- Integration Tag -->
                        <!-- Integration Tag -->
                        <div class="flex items-center gap-x-4 rounded-[5px] border border-[#EAEDF0] py-[10px] pl-[10px] pr-[30px] font-GeneralSans text-2xl font-semibold leading-[1.16] text-ColorBlack">
                            <div class="h-auto w-[60px]">
                                <img src="{{ asset('assets/img/icons/icon-color-whatsapp.svg') }}" alt="icon-color-whatsapp" width="60" height="61" />
                            </div>
                            WhatsApp
                        </div>
                        <!-- Integration Tag -->
                        <!-- Integration Tag -->
                        <div class="flex items-center gap-x-4 rounded-[5px] border border-[#EAEDF0] py-[10px] pl-[10px] pr-[30px] font-GeneralSans text-2xl font-semibold leading-[1.16] text-ColorBlack">
                            <div class="h-auto w-[60px]">
                                <img src="{{ asset('assets/img/icons/icon-color-shopify.svg') }}" alt="icon-color-shopify" width="60" height="60" />
                            </div>
                            Shopify
                        </div>
                        <!-- Integration Tag -->
                        <!-- Integration Tag -->
                        <div class="flex items-center gap-x-4 rounded-[5px] border border-[#EAEDF0] py-[10px] pl-[10px] pr-[30px] font-GeneralSans text-2xl font-semibold leading-[1.16] text-ColorBlack">
                            <div class="h-auto w-[60px]">
                                <img src="{{ asset('assets/img/icons/icon-color-figma.svg') }}" alt="icon-color-figma" width="60" height="60" />
                            </div>
                            Figma
                        </div>
                        <!-- Integration Tag -->
                        <!-- Integration Tag -->
                        <div class="flex items-center gap-x-4 rounded-[5px] border border-[#EAEDF0] py-[10px] pl-[10px] pr-[30px] font-GeneralSans text-2xl font-semibold leading-[1.16] text-ColorBlack">
                            <div class="h-auto w-[60px]">
                                <img src="{{ asset('assets/img/icons/icon-color-slack.svg') }}" alt="icon-color-slack" width="45" height="44" />
                            </div>
                            Slack
                        </div>
                        <!-- Integration Tag -->
                        <!-- Integration Tag -->
                        <div class="flex items-center gap-x-4 rounded-[5px] border border-[#EAEDF0] py-[10px] pl-[10px] pr-[30px] font-GeneralSans text-2xl font-semibold leading-[1.16] text-ColorBlack">
                            <div class="h-auto w-[60px]">
                                <img src="{{ asset('assets/img/icons/icon-color-dropbox.svg') }}" alt="icon-color-dropbox" width="61" height="61" />
                            </div>
                            Dropbox
                        </div>
                        <!-- Integration Tag -->
                        <!-- Integration Tag -->
                        <div class="flex items-center gap-x-4 rounded-[5px] border border-[#EAEDF0] py-[10px] pl-[10px] pr-[30px] font-GeneralSans text-2xl font-semibold leading-[1.16] text-ColorBlack">
                            <div class="h-auto w-[60px]">
                                <img src="{{ asset('assets/img/icons/icon-color-mailchimp.svg') }}" alt="icon-color-mailchimp" width="65" height="65" />
                            </div>
                            Mailchimp
                        </div>
                        <!-- Integration Tag -->
                        <!-- Integration Tag -->
                        <div class="flex items-center gap-x-4 rounded-[5px] border border-[#EAEDF0] py-[10px] pl-[10px] pr-[30px] font-GeneralSans text-2xl font-semibold leading-[1.16] text-ColorBlack">
                            <div class="h-auto w-[60px]">
                                <img src="{{ asset('assets/img/icons/icon-color-skype.svg') }}" alt="icon-color-skype" width="60" height="60" />
                            </div>
                            Skype
                        </div>
                        <!-- Integration Tag -->
                        <!-- Integration Tag -->
                        <div class="flex items-center gap-x-4 rounded-[5px] border border-[#EAEDF0] py-[10px] pl-[10px] pr-[30px] font-GeneralSans text-2xl font-semibold leading-[1.16] text-ColorBlack">
                            <div class="h-auto w-[60px]">
                                <img src="{{ asset('assets/img/icons/icon-color-discord.svg') }}" alt="icon-color-discord" width="60" height="60" />
                            </div>
                            Discord
                        </div>
                        <!-- Integration Tag -->
                        <!-- Integration Tag -->
                        <div class="flex items-center gap-x-4 rounded-[5px] border border-[#EAEDF0] py-[10px] pl-[10px] pr-[30px] font-GeneralSans text-2xl font-semibold leading-[1.16] text-ColorBlack">
                            <div class="h-auto w-[60px]">
                                <img src="{{ asset('assets/img/icons/icon-color-snapchat.svg') }}" alt="icon-color-snapchat" width="60" height="60" />
                            </div>
                            Snapchat
                        </div>
                        <!-- Integration Tag -->
                    </div>
                    <!-- Integration Content -->
                </div>
                <!-- Integration Wrapper -->
                <!-- Integration Wrapper -->
                <div class="flex flex-row flex-nowrap py-5">
                    <!-- Integration Content -->
                    <div class="horizontal-slide-from-left-to-right mx-3 grid grid-flow-col gap-x-6 whitespace-nowrap">
                        <!-- Integration Tag -->
                        <div class="flex items-center gap-x-4 rounded-[5px] border border-[#EAEDF0] py-[10px] pl-[10px] pr-[30px] font-GeneralSans text-2xl font-semibold leading-[1.16] text-ColorBlack">
                            <div class="h-auto w-[60px]">
                                <img src="{{ asset('assets/img/icons/icon-color-zoom.svg') }}" alt="icon-color-zoom" width="60" height="60" />
                            </div>
                            Zoom
                        </div>
                        <!-- Integration Tag -->
                        <!-- Integration Tag -->
                        <div class="flex items-center gap-x-4 rounded-[5px] border border-[#EAEDF0] py-[10px] pl-[10px] pr-[30px] font-GeneralSans text-2xl font-semibold leading-[1.16] text-ColorBlack">
                            <div class="h-auto w-[60px]">
                                <img src="{{ asset('assets/img/icons/icon-color-spotify.svg') }}" alt="icon-color-t" width="52" height="59" />
                            </div>
                            Spotify
                        </div>
                        <!-- Integration Tag -->
                        <!-- Integration Tag -->
                        <div class="flex items-center gap-x-4 rounded-[5px] border border-[#EAEDF0] py-[10px] pl-[10px] pr-[30px] font-GeneralSans text-2xl font-semibold leading-[1.16] text-ColorBlack">
                            <div class="h-auto w-[60px]">
                                <img src="{{ asset('assets/img/icons/icon-color-gmail.svg') }}" alt="icon-color-gmail" width="57" height="58" />
                            </div>
                            Gmail
                        </div>
                        <!-- Integration Tag -->
                        <!-- Integration Tag -->
                        <div class="flex items-center gap-x-4 rounded-[5px] border border-[#EAEDF0] py-[10px] pl-[10px] pr-[30px] font-GeneralSans text-2xl font-semibold leading-[1.16] text-ColorBlack">
                            <div class="h-auto w-[60px]">
                                <img src="{{ asset('assets/img/icons/icon-color-whatsapp.svg') }}" alt="icon-color-whatsapp" width="60" height="61" />
                            </div>
                            WhatsApp
                        </div>
                        <!-- Integration Tag -->
                        <!-- Integration Tag -->
                        <div class="flex items-center gap-x-4 rounded-[5px] border border-[#EAEDF0] py-[10px] pl-[10px] pr-[30px] font-GeneralSans text-2xl font-semibold leading-[1.16] text-ColorBlack">
                            <div class="h-auto w-[60px]">
                                <img src="{{ asset('assets/img/icons/icon-color-shopify.svg') }}" alt="icon-color-shopify" width="60" height="60" />
                            </div>
                            Shopify
                        </div>
                        <!-- Integration Tag -->
                        <!-- Integration Tag -->
                        <div class="flex items-center gap-x-4 rounded-[5px] border border-[#EAEDF0] py-[10px] pl-[10px] pr-[30px] font-GeneralSans text-2xl font-semibold leading-[1.16] text-ColorBlack">
                            <div class="h-auto w-[60px]">
                                <img src="{{ asset('assets/img/icons/icon-color-figma.svg') }}" alt="icon-color-figma" width="60" height="60" />
                            </div>
                            Figma
                        </div>
                        <!-- Integration Tag -->
                        <!-- Integration Tag -->
                        <div class="flex items-center gap-x-4 rounded-[5px] border border-[#EAEDF0] py-[10px] pl-[10px] pr-[30px] font-GeneralSans text-2xl font-semibold leading-[1.16] text-ColorBlack">
                            <div class="h-auto w-[60px]">
                                <img src="{{ asset('assets/img/icons/icon-color-slack.svg') }}" alt="icon-color-slack" width="45" height="44" />
                            </div>
                            Slack
                        </div>
                        <!-- Integration Tag -->
                        <!-- Integration Tag -->
                        <div class="flex items-center gap-x-4 rounded-[5px] border border-[#EAEDF0] py-[10px] pl-[10px] pr-[30px] font-GeneralSans text-2xl font-semibold leading-[1.16] text-ColorBlack">
                            <div class="h-auto w-[60px]">
                                <img src="{{ asset('assets/img/icons/icon-color-dropbox.svg') }}" alt="icon-color-dropbox" width="61" height="61" />
                            </div>
                            Dropbox
                        </div>
                        <!-- Integration Tag -->
                        <!-- Integration Tag -->
                        <div class="flex items-center gap-x-4 rounded-[5px] border border-[#EAEDF0] py-[10px] pl-[10px] pr-[30px] font-GeneralSans text-2xl font-semibold leading-[1.16] text-ColorBlack">
                            <div class="h-auto w-[60px]">
                                <img src="{{ asset('assets/img/icons/icon-color-mailchimp.svg') }}" alt="icon-color-mailchimp" width="65" height="65" />
                            </div>
                            Mailchimp
                        </div>
                        <!-- Integration Tag -->
                        <!-- Integration Tag -->
                        <div class="flex items-center gap-x-4 rounded-[5px] border border-[#EAEDF0] py-[10px] pl-[10px] pr-[30px] font-GeneralSans text-2xl font-semibold leading-[1.16] text-ColorBlack">
                            <div class="h-auto w-[60px]">
                                <img src="{{ asset('assets/img/icons/icon-color-skype.svg') }}" alt="icon-color-skype" width="60" height="60" />
                            </div>
                            Skype
                        </div>
                        <!-- Integration Tag -->
                        <!-- Integration Tag -->
                        <div class="flex items-center gap-x-4 rounded-[5px] border border-[#EAEDF0] py-[10px] pl-[10px] pr-[30px] font-GeneralSans text-2xl font-semibold leading-[1.16] text-ColorBlack">
                            <div class="h-auto w-[60px]">
                                <img src="{{ asset('assets/img/icons/icon-color-discord.svg') }}" alt="icon-color-discord" width="60" height="60" />
                            </div>
                            Discord
                        </div>
                        <!-- Integration Tag -->
                        <!-- Integration Tag -->
                        <div class="flex items-center gap-x-4 rounded-[5px] border border-[#EAEDF0] py-[10px] pl-[10px] pr-[30px] font-GeneralSans text-2xl font-semibold leading-[1.16] text-ColorBlack">
                            <div class="h-auto w-[60px]">
                                <img src="{{ asset('assets/img/icons/icon-color-snapchat.svg') }}" alt="icon-color-snapchat" width="60" height="60" />
                            </div>
                            Snapchat
                        </div>
                        <!-- Integration Tag -->
                    </div>
                    <!-- Integration Content -->
                </div>
                <!-- Integration Wrapper -->
            </div>
            <!-- Integration Slider Area -->
        </div>
        <!-- Section Container -->
    </div>
    <!-- Section Space -->
</section>
<!-- Integrate Section End -->

<!-- Testimonial Section Start -->
<section class="section-testimonial" id="section-testimonial">
    <!-- Section Background -->
    <div class="bg-[#FAFAFA]">
        <!-- Section Space -->
        <div class="section-space">
            <!-- Section Container -->
            <div class="container-default">
                <!-- Section Content Wrapper -->
                <div class="jos mb-[60px] xl:mb-20">
                    <!-- Section Content Block -->
                    <div class="mx-auto max-w-[636px]">
                        <h2 class="text-center font-GeneralSans font-semibold">
                            Our clients have shared their experiences using Masco
                        </h2>
                    </div>
                    <!-- Section Content Block -->
                </div>
                <!-- Section Content Wrapper -->

                <!-- Testimonial List -->
                <div class="break-inside-auto gap-6 md:columns-2 lg:columns-3">
                    <!-- Testimonial Item -->
                    <div class="jos mb-6 break-inside-avoid">
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
                                A strong sales outreach tool
                            </div>
                            <p class="mb-6">
                                This is a great product for anyone looking to generate
                                leads, with Masco you can create new lead lists or
                                import them from your company's database.
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
                    <!-- Testimonial Item -->
                    <div class="jos mb-6 break-inside-avoid">
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
                                Masco is a great product!
                            </div>
                            <p class="mb-6">
                                The interface is user-friendly and I really like the
                                campaign builder. It gives me a lot of power to engage
                                clients. Excellent outreach tool for B2B & B2C.Really
                                cool!
                            </p>
                            <div class="flex items-center gap-4">
                                <img src="{{ asset('assets/img/th-3/testimonial-avater-2.jpg') }}" alt="testimonial-avater-2" width="60" height="60" class="h-[60px] w-[60px] rounded-[50%]" />
                                <div>
                                    <span class="block font-semibold">Ronald Richards</span>
                                    <span class="text-sm text-opacity-80">Businessman</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial Item -->
                    <!-- Testimonial Item -->
                    <div class="jos mb-6 break-inside-avoid">
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
                                Awesome cold emailing platform
                            </div>
                            <p class="mb-6">
                                I used to waste a ton of time cold-calling and emailing
                                my potential leads. With Masco, All the relevant
                                information about a company and its decision-maker in
                                just one click. it automates the outreach process so I
                                can focus on closing more deals without any additional
                                effort!
                            </p>
                            <div class="flex items-center gap-4">
                                <img src="{{ asset('assets/img/th-3/testimonial-avater-3.jpg') }}" alt="testimonial-avater-3" width="60" height="60" class="h-[60px] w-[60px] rounded-[50%]" />
                                <div>
                                    <span class="block font-semibold">Dianne Russell</span>
                                    <span class="text-sm text-opacity-80">Housewife</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial Item -->
                    <!-- Testimonial Item -->
                    <div class="jos mb-6 break-inside-avoid">
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
                                10/10 would recommend
                            </div>
                            <p class="mb-6">
                                I recommend it to anyone who is looking for a cold email
                                solution. The tool is easy to use and has definitely
                                saved my time.
                            </p>
                            <div class="flex items-center gap-4">
                                <img src="{{ asset('assets/img/th-3/testimonial-avater-4.jpg') }}" alt="testimonial-avater-4" width="60" height="60" class="h-[60px] w-[60px] rounded-[50%]" />
                                <div>
                                    <span class="block font-semibold">Kristin Watson</span>
                                    <span class="text-sm text-opacity-80">Social Influencer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial Item -->
                    <!-- Testimonial Item -->
                    <div class="jos mb-6 break-inside-avoid">
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
                                If you are into outreach its a no brainer
                            </div>
                            <p class="mb-6">
                                I was hesitant to invest in it, but after talking to
                                support and taking first-hand experience I must say it's
                                a no-brainer.
                            </p>
                            <div class="flex items-center gap-4">
                                <img src="{{ asset('assets/img/th-3/testimonial-avater-1.jpg') }}" alt="testimonial-avater-1" width="60" height="60" class="h-[60px] w-[60px] rounded-[50%]" />
                                <div>
                                    <span class="block font-semibold">Marvin McKinney</span>
                                    <span class="text-sm text-opacity-80">College Student</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial Item -->
                    <!-- Testimonial Item -->
                    <div class="jos mb-6 break-inside-avoid">
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
                                "Good cold email marketing tool"
                            </div>
                            <p class="mb-6">
                                I recently started using Masco for my cold email
                                outreach campaigns and have been extremely impressed
                                with the tool. Masco had saved a ton of time and effort.
                                masco helped me to expand my reach and find new leads.
                                Overall, I'm extremely happy with masco & highly
                                recommend!
                            </p>
                            <div class="flex items-center gap-4">
                                <img src="{{ asset('assets/img/th-3/testimonial-avater-6.jpg') }}" alt="testimonial-avater-6.jpg" width="60" height="60" class="h-[60px] w-[60px] rounded-[50%]" />
                                <div>
                                    <span class="block font-semibold">Guy Hawkins</span>
                                    <span class="text-sm text-opacity-80">Web Developer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial Item -->
                    <!-- Testimonial List -->
                </div>

                <div class="jos flex justify-center">
                    <a href="" class="btn is-blue btn-animation is-large mt-10 inline-block rounded lg:mt-20"><span>Read all the reviews on
                            <strong class="underline underline-offset-4">Trustpilot.com</strong></span></a>
                </div>
                <!-- Section Container -->
            </div>
            <!-- Section Space -->
        </div>
    </div>
    <!-- Section Background -->
</section>
<!-- Testimonial Section End -->

<!-- FAQ Section Start -->
<section class="section-faq" id="section-faq">
    <div class="realative">
        <!-- Section Space -->
        <div class="section-space">
            <!-- Section Container -->
            <div class="container-default">
                <!-- FAQ Area -->
                <div class="grid items-center gap-x-6 gap-y-10 lg:grid-cols-2">
                    <!-- Content Block -->
                    <div class="jos" data-jos_animation="fade-right">
                        <!-- Section Wrapper -->
                        <div>
                            <!-- Section Block -->
                            <div class="mb-5">
                                <h2 class="font-GeneralSans font-semibold">
                                    Need more information about cold email? Just ask
                                </h2>
                            </div>
                            <!-- Section Block -->
                        </div>
                        <!-- Section Wrapper -->
                        <p>
                            Creating an effective cold email outreach strategy takes
                            continuous optimization. Our cold email experts help so
                            you can do more deals.
                        </p>
                    </div>
                    <!-- Content Block -->

                    <!-- FAQ Block -->
                    <div class="jos flex justify-center" data-jos_animation="fade-left">
                        <!-- Accordion List -->
                        <ul class="mx-auto">
                            <!-- Accordion Item -->
                            <li class="accordion-item active border-b border-ColorBlack/10 pb-6 last:border-b-0 has-[.accordion-header]:pt-6 first:has-[.accordion-header]:pt-0">
                                <!-- Accordion Header -->
                                <div class="accordion-header relative pr-8 font-GeneralSans text-xl font-semibold text-ColorBlack">
                                    <button class="flex-1 text-left">
                                        <span class="mr-[10px] inline-block text-ColorBlue"><i class="fa-solid fa-circle-question"></i></span>
                                        How do I register for the online courses?
                                    </button>
                                    <div class="accordion-icon-3 absolute right-0 top-0">
                                        <i class="fa-solid fa-plus"></i>
                                    </div>
                                </div>
                                <!-- Accordion Header -->
                                <!-- Accordion Body -->
                                <div class="accordion-body opacity-80">
                                    <p class="max-w-[584px] pl-[34px] pt-5 text-base">
                                        A cold email is an initial email that is sent to a
                                        receiver in order to gain a benefit in terms of
                                        favor, sales, opportunity or any other dual-sided
                                        gain. In simple words, when you email someone you
                                        don’t know for some particular reason is cold
                                        emailing.
                                    </p>
                                </div>
                                <!-- Accordion Body -->
                            </li>
                            <!-- Accordion Item -->
                            <!-- Accordion Item -->
                            <li class="accordion-item border-b border-ColorBlack/10 pb-6 last:border-b-0 has-[.accordion-header]:pt-6 first:has-[.accordion-header]:pt-0">
                                <!-- Accordion Header -->
                                <div class="accordion-header relative pr-8 font-GeneralSans text-xl font-semibold text-ColorBlack">
                                    <button class="flex-1 text-left">
                                        <span class="mr-[10px] inline-block text-ColorBlue"><i class="fa-solid fa-circle-question"></i></span>
                                        How do I register for the online courses?
                                    </button>
                                    <div class="accordion-icon-3 absolute right-0 top-0">
                                        <i class="fa-solid fa-plus"></i>
                                    </div>
                                </div>
                                <!-- Accordion Header -->
                                <!-- Accordion Body -->
                                <div class="accordion-body opacity-80">
                                    <p class="max-w-[584px] pl-[34px] pt-5 text-base">
                                        A cold email is an initial email that is sent to a
                                        receiver in order to gain a benefit in terms of
                                        favor, sales, opportunity or any other dual-sided
                                        gain. In simple words, when you email someone you
                                        don’t know for some particular reason is cold
                                        emailing.
                                    </p>
                                </div>
                                <!-- Accordion Body -->
                            </li>
                            <!-- Accordion Item -->
                            <!-- Accordion Item -->
                            <li class="accordion-item border-b border-ColorBlack/10 pb-6 last:border-b-0 has-[.accordion-header]:pt-6 first:has-[.accordion-header]:pt-0">
                                <!-- Accordion Header -->
                                <div class="accordion-header relative pr-8 font-GeneralSans text-xl font-semibold text-ColorBlack">
                                    <button class="flex-1 text-left">
                                        <span class="mr-[10px] inline-block text-ColorBlue"><i class="fa-solid fa-circle-question"></i></span>
                                        How do I register for the online courses?
                                    </button>
                                    <div class="accordion-icon-3 absolute right-0 top-0">
                                        <i class="fa-solid fa-plus"></i>
                                    </div>
                                </div>
                                <!-- Accordion Header -->
                                <!-- Accordion Body -->
                                <div class="accordion-body opacity-80">
                                    <p class="max-w-[584px] pl-[34px] pt-5 text-base">
                                        A cold email is an initial email that is sent to a
                                        receiver in order to gain a benefit in terms of
                                        favor, sales, opportunity or any other dual-sided
                                        gain. In simple words, when you email someone you
                                        don’t know for some particular reason is cold
                                        emailing.
                                    </p>
                                </div>
                                <!-- Accordion Body -->
                            </li>
                            <!-- Accordion Item -->
                        </ul>
                        <!-- Accordion List -->
                    </div>
                    <!-- FAQ Block -->
                </div>
                <!-- FAQ Area -->
            </div>
            <!-- Section Container -->
        </div>
        <!-- Section Space -->
    </div>
</section>
<!-- FAQ Section End -->

<!-- CTA Section Start -->
<section class="section-cta">
    <!-- Section Space -->
    <div class="section-space-bottom">
        <!-- Section Container -->
        <div class="container-default">
            <div class="relative z-10 rounded-[5px] bg-ColorBlue">
                <div class="py-[60px] lg:py-20 xl:py-[100px]">
                    <div class="jos mx-auto max-w-full px-8 md:max-w-[80%] lg:max-w-[670px]">
                        <h2 class="text-center font-GeneralSans font-semibold text-white">
                            Need more information about cold email? Just ask
                        </h2>
                        <div class="mt-8 flex flex-wrap items-center justify-center gap-5 lg:mt-[50px]">
                            <a href="#">
                                <img src="{{ asset('assets/img/icons/icon-apple-app-store.svg') }}" alt="icon-apple-app-store" width="166" height="54" />
                            </a>
                            <a href="#">
                                <img src="{{ asset('assets/img/icons/icon-google-play-store.svg') }}" alt="icon-google-play-store" width="166" height="57" />
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Background Shape -->
                <img src="{{ asset('assets/img/elements/gear-shape.svg') }}" alt="gear-shape" width="320" height="173" class="absolute right-0 top-0 -z-10 h-auto w-[25%] xl:w-auto" />
            </div>
        </div>
        <!-- Section Container -->
    </div>
    <!-- Section Space -->
</section>
<!-- CTA Section End -->

@endsection



@section('footer')
<footer class="section-footer">
    <div class="bg-[#0A102F]">
        <!-- Footer Area Center -->
        <div class="text-white">
            <!-- Footer Center Spacing -->
            <div class="py-[60px] lg:py-20 xl:py-[100px]">
                <!-- Section Container -->
                <div class="container-default">
                    <!-- Footer Widget List -->
                    <div class="grid gap-x-16 gap-y-10 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:gap-x-24 xxl:gap-x-[134px]">
                        <!-- Footer Widget Item -->
                        <div class="flex flex-col gap-y-7">
                            <!-- Footer Widget Title -->
                            <div class="text-xl font-semibold capitalize">
                                Primary Pages
                            </div>
                            <!-- Footer Navbar -->
                            <ul class="flex flex-col gap-y-[10px] capitalize">
                                <li>
                                    <a href="{{ url('index') }}" class="hover:opcity-100 text-[#FDFBF9]/80 underline-offset-4 transition-all duration-300 ease-linear hover:underline">Home</a>
                                </li>
                                <li>
                                    <a href="{{ url('about') }}" class="hover:opcity-100 text-[#FDFBF9]/80 underline-offset-4 transition-all duration-300 ease-linear hover:underline">About Us</a>
                                </li>
                                <li>
                                    <a href="{{ url('services') }}" class="hover:opcity-100 text-[#FDFBF9]/80 underline-offset-4 transition-all duration-300 ease-linear hover:underline">Services</a>
                                </li>
                                <li>
                                    <a href="{{ url('pricing') }}" class="hover:opcity-100 text-[#FDFBF9]/80 underline-offset-4 transition-all duration-300 ease-linear hover:underline">pricing</a>
                                </li>
                                <li>
                                    <a href="{{ url('contact') }}" class="hover:opcity-100 text-[#FDFBF9]/80 underline-offset-4 transition-all duration-300 ease-linear hover:underline">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <!-- Footer Widget Item -->

                        <!-- Footer Widget Item -->
                        <div class="flex flex-col gap-y-7">
                            <!-- Footer Widget Title -->
                            <div class="text-xl font-semibold capitalize">Learn</div>
                            <!-- Footer Navbar -->
                            <ul class="flex flex-col gap-y-[10px] capitalize">
                                <li>
                                    <a href="{{ url('blog') }}" class="hover:opcity-100 text-[#FDFBF9]/80 underline-offset-4 transition-all duration-300 ease-linear hover:underline">Masco Blog</a>
                                </li>
                                <li>
                                    <a href="{{ url('index6') }}" class="hover:opcity-100 text-[#FDFBF9]/80 underline-offset-4 transition-all duration-300 ease-linear hover:underline">Cold Email Masterclass</a>
                                </li>
                                <li>
                                    <a href="#" class="hover:opcity-100 text-[#FDFBF9]/80 underline-offset-4 transition-all duration-300 ease-linear hover:underline">Prospecting Podcast</a>
                                </li>
                                <li>
                                    <a href="#" class="hover:opcity-100 text-[#FDFBF9]/80 underline-offset-4 transition-all duration-300 ease-linear hover:underline">Follow-Up Strategy</a>
                                </li>
                                <li>
                                    <a href="#" class="hover:opcity-100 text-[#FDFBF9]/80 underline-offset-4 transition-all duration-300 ease-linear hover:underline">Email Analyzer</a>
                                </li>
                            </ul>
                        </div>
                        <!-- Footer Widget Item -->

                        <!-- Footer Widget Item -->
                        <div class="flex flex-col gap-y-6">
                            <!-- Footer Title -->
                            <div class="text-xl font-semibold capitalize">
                                Utility pages
                            </div>
                            <!-- Footer Title -->

                            <!-- Footer Navbar -->
                            <ul class="flex flex-col gap-y-[10px] capitalize">
                                <li>
                                    <a href="{{ url('signup') }}" class="hover:opcity-100 text-[#FDFBF9]/80 underline-offset-4 transition-all duration-300 ease-linear hover:underline">Signup</a>
                                </li>
                                <li>
                                    <a href="{{ url('login') }}" class="hover:opcity-100 text-[#FDFBF9]/80 underline-offset-4 transition-all duration-300 ease-linear hover:underline">Login</a>
                                </li>
                                <li>
                                    <a href="{{ url('error404') }}" class="hover:opcity-100 text-[#FDFBF9]/80 underline-offset-4 transition-all duration-300 ease-linear hover:underline">404 Not found</a>
                                </li>
                                <li>
                                    <a href="{{ url('resetpassword') }}" class="hover:opcity-100 text-[#FDFBF9]/80 underline-offset-4 transition-all duration-300 ease-linear hover:underline">Password Reset</a>
                                </li>
                            </ul>
                        </div>
                        <!-- Footer Widget Item-->

                        <!-- Footer Widget Item -->
                        <div class="flex flex-col gap-y-6">
                            <!-- Footer Title -->
                            <div class="text-xl font-semibold capitalize">
                                Resources
                            </div>
                            <!-- Footer Title -->

                            <!-- Footer Navbar -->
                            <ul class="flex flex-col gap-y-[10px] capitalize">
                                <li>
                                    <a href="https://www.example.com/" target="_blank" rel="noopener noreferrer" class="hover:opcity-100 text-[#FDFBF9]/80 underline-offset-4 transition-all duration-300 ease-linear hover:underline">Support</a>
                                </li>
                                <li>
                                    <a href="https://www.example.com/" target="_blank" rel="noopener noreferrer" class="hover:opcity-100 text-[#FDFBF9]/80 underline-offset-4 transition-all duration-300 ease-linear hover:underline">Privacy policy</a>
                                </li>
                                <li>
                                    <a href="https://www.example.com/" target="_blank" rel="noopener noreferrer" class="hover:opcity-100 text-[#FDFBF9]/80 underline-offset-4 transition-all duration-300 ease-linear hover:underline">Terms & Conditions</a>
                                </li>
                                <li>
                                    <a href="https://www.example.com/" target="_blank" rel="noopener noreferrer" class="hover:opcity-100 text-[#FDFBF9]/80 underline-offset-4 transition-all duration-300 ease-linear hover:underline">Strategic finance</a>
                                </li>
                                <li>
                                    <a href="https://www.example.com/" target="_blank" rel="noopener noreferrer" class="hover:opcity-100 text-[#FDFBF9]/80 underline-offset-4 transition-all duration-300 ease-linear hover:underline">Video guide</a>
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

        <div class="horizontal-line bg-white"></div>

        <!-- Footer Area Bottom -->
        <div>
            <!-- Footer Bottom Spacing -->
            <div class="py-[18px]">
                <!-- Section Container -->
                <div class="container-default">
                    <div class="flex flex-col items-center gap-5 lg:flex-row lg:items-start lg:justify-between">
                        <a href="{{ url('index') }}">
                            <img src="{{ asset('assets/img/logo-blue-light.png') }}" alt="Masco" width="109" height="24" />
                        </a>
                        <div class="text-center text-[#FDFBF9]/80">
                            &copy; Copyright 2024, All Rights Reserved by PixcelsThemes
                        </div>
                        <!-- Footer Social Link -->
                        <div class="flex flex-wrap gap-5">
                            <a href="https://twitter.com" target="_blank" rel="noopener noreferrer" class="flex h-[30px] w-[30px] items-center justify-center rounded-[50%] bg-[#FDFBF9]/10 text-sm text-white transition-all duration-300 hover:bg-ColorBlue" aria-label="twitter">
                                <i class="fa-brands fa-x-twitter"></i>
                            </a>
                            <a href="https://www.facebook.com/" target="_blank" rel="noopener noreferrer" class="flex h-[30px] w-[30px] items-center justify-center rounded-[50%] bg-[#FDFBF9]/10 text-sm text-white transition-all duration-300 hover:bg-ColorBlue" aria-label="facebook">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                            <a href="https://www.instagram.com/" target="_blank" rel="noopener noreferrer" class="flex h-[30px] w-[30px] items-center justify-center rounded-[50%] bg-[#FDFBF9]/10 text-sm text-white transition-all duration-300 hover:bg-ColorBlue" aria-label="instagram">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                            <a href="https://www.github.com/" target="_blank" rel="noopener noreferrer" class="flex h-[30px] w-[30px] items-center justify-center rounded-[50%] bg-[#FDFBF9]/10 text-sm text-white transition-all duration-300 hover:bg-ColorBlue" aria-label="github">
                                <i class="fa-brands fa-github"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Section Container -->
            </div>
            <!-- Footer Bottom Spacing -->
        </div>
        <!-- Footer Area Bottom -->
    </div>
</footer>
@endsection