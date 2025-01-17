@extends('layout.layout2')

@section('headerLogo')
<img src="{{ asset('assets/img/logo-dark.png') }}" alt="Masco" width="109" height="24" />
@endsection

@section('headButtons')
<div class="flex items-center gap-6">
    <a href="{{ url('login') }}" class="btn-text hidden text-white hover:text-ColorBlue sm:inline-block">Login</a>
    <a href="{{ url('signup') }}" class="btn is-blue is-transparent btn-animation group hidden rounded-[3px] sm:inline-block"><span>Sign up free</span></a>
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
        <div class="pb-[60px] pt-28 md:pb-20 md:pt-36 lg:pb-[100px] lg:pt-[150px] xxl:pb-[120px] xxl:pt-[185px]">
            <!-- Section Container -->
            <div class="container-default">
                <!-- Hero Area -->
                <div>
                    <!-- Hero Content Block -->
                    <div class="jos mb-6 max-w-xl lg:max-w-2xl xl:max-w-3xl xxl:max-w-[1076px]">
                        <h1 class="mb-6 font-Syne text-[40px] font-semibold uppercase leading-none -tracking-[2px] text-black sm:text-5xl lg:text-6xl xl:text-[90px]">
                            Smart Solutions for a Modern era
                        </h1>
                    </div>
                    <!-- Hero Content Block -->

                    <!-- Hero Image Block -->
                    <div class="relative mx-auto my-[60px] max-w-[1296px] overflow-hidden rounded-tl-[10px] rounded-tr-[10px]">
                        <img src="{{ asset('assets/img/th-15/hero-img.jpg') }}" alt="hero-img" width="1296" height="550" data-jos_animation="zoom-in-down" class="h-auto w-full" />
                    </div>
                    <!-- Hero Image Block -->

                    <div class="flex flex-col items-start justify-between gap-x-[200px] xl:flex-row xl:items-center">
                        <p class="text-2xl font-semibold text-[#2C2C2C] xl:max-w-[665px]">
                            We are dedicated to shaping the future. In the fast-paced
                            world of technology, our company stands as a beacon of
                            innovation and progress.
                        </p>
                        <div class="mb-3 flex flex-wrap gap-6">
                            <a href="#" class="btn is-blue is-transparent btn-animation is-large group inline-block rounded-[3px]">
                                <span> Talk To Us </span>
                            </a>
                            <a href="#" class="btn is-outline-black btn-animation is-large inline-block rounded-[3px]"><span>View Our Services</span></a>
                        </div>
                    </div>
                </div>
                <!-- Hero Area -->
            </div>
            <!-- Section Container -->
        </div>
        <!-- Hero Section Space -->
    </div>
    <!-- Section Background -->
</section>
<!-- Hero Section End -->

<!-- Horizontal Line Separator -->
<div class="horizontal-line bg-ColorBlack"></div>
<!-- Horizontal Line Separator -->

<!-- Fun-fact Section Start -->
<section class="section-fan-fact">
    <!-- Section Space -->
    <div class="section-space">
        <!-- Section Container -->
        <div class="container-default">
            <!-- Section Wrapper -->
            <div class="jos mb-[60px]">
                <div class="mx-auto max-w-[843px]">
                    <!-- Section Block -->
                    <div class="mb-5">
                        <h2 class="text-center font-Syne text-4xl font-semibold uppercase leading-[1.07] text-black sm:text-5xl lg:text-6xl xl:text-[65px]">
                            impactful numbers
                        </h2>
                    </div>
                    <!-- Section Block -->
                </div>
            </div>
            <!-- Section Wrapper -->

            <!-- Fun-fact Area -->
            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                <!-- Fun-fact Single Block -->
                <div class="jos rounded-[10px] bg-white p-10 shadow-[0_4px_80px_0px_rgba(0,0,0,0.06)]" data-jos_delay="0">
                    <div class="mb-[5px] font-Syne text-6xl font-semibold uppercase leading-[1.5] text-[#00F] lg:text-7xl xl:text-[90px]" data-module="countup">
                        <span class="start-number text-black" data-countup-number="15">15</span>+
                    </div>
                    <span class="text-lg text-black lg:text-xl">We have worked with reputation for the last 15 years</span>
                </div>
                <!-- Fun-fact Single Block -->
                <!-- Fun-fact Single Block -->
                <div class="jos rounded-[10px] bg-white p-10 shadow-[0_4px_80px_0px_rgba(0,0,0,0.06)]" data-jos_delay="0.3">
                    <div class="mb-[5px] font-Syne text-6xl font-semibold uppercase leading-[1.5] text-[#00F] lg:text-7xl xl:text-[90px]" data-module="countup">
                        <span class="start-number text-black" data-countup-number="2">2</span>M+
                    </div>
                    <span class="text-lg text-black lg:text-xl">Worked with 2M clients in different countries around the
                        world</span>
                </div>
                <!-- Fun-fact Single Block -->
                <!-- Fun-fact Single Block -->
                <div class="jos rounded-[10px] bg-white p-10 shadow-[0_4px_80px_0px_rgba(0,0,0,0.06)]" data-jos_delay="0.6">
                    <div class="mb-[5px] font-Syne text-6xl font-semibold uppercase leading-[1.5] text-[#00F] lg:text-7xl xl:text-[90px]" data-module="countup">
                        <span class="start-number text-black" data-countup-number="99">99</span>%
                    </div>
                    <span class="text-lg text-black lg:text-xl">About 99% of our clients express their satisfaction with
                        our work</span>
                </div>
                <!-- Fun-fact Single Block -->
            </div>
            <!-- Fun-fact Area -->
        </div>
        <!-- Section Container -->
    </div>
    <!-- Section Space -->
</section>
<!-- Fun-fact Section End -->

<!-- Service Section Start -->
<section class="section-service" id="section-service">
    <!-- Section Background -->
    <div class="bg-black">
        <!-- Section Space -->
        <div class="section-space">
            <!-- Section Container -->
            <div class="container-default">
                <!-- Section Wrapper -->
                <div class="jos mb-[60px]">
                    <div class="max-w-[789px]">
                        <!-- Section Block -->
                        <div class="mb-5">
                            <h2 class="font-Syne text-4xl font-semibold uppercase leading-[1.07] text-white sm:text-5xl lg:text-6xl xl:text-[65px]">
                                impactful numbers
                            </h2>
                        </div>
                        <!-- Section Block -->
                    </div>
                </div>
                <!-- Section Wrapper -->

                <!-- Service List -->
                <div class="grid grid-cols-1 gap-y-6">
                    <!-- Service Item -->
                    <div class="jos">
                        <div class="group flex h-full flex-col items-start justify-between gap-10 gap-x-[50px] rounded-[5px] border border-[#414141] p-10 md:flex-row md:items-center lg:gap-x-10">
                            <div class="flex-1">
                                <div class="mb-6 font-Syne text-3xl font-semibold leading-none text-white lg:text-[35px]">
                                    Digital Transformation
                                </div>
                                <p class="max-w-[898px] text-xl leading-[1.33] text-white lg:text-2xl">
                                    We partner with CTOs and CIOs to co-create and execute
                                    long-term digital strategies that increase sales,
                                    brand awareness, and operational efficiency.
                                </p>
                            </div>
                            <a href="{{ url('servicedetails') }}" class="relative flex h-[43px] w-[43px] items-center justify-center overflow-hidden">
                                <img src="{{ asset('assets/img/icons/icon-white-top-right.svg') }}" alt="icon-white-top-right" width="43" height="43" class="absolute inset-0 transition-all duration-300 group-hover:-translate-y-full group-hover:translate-x-full" />
                                <img src="{{ asset('assets/img/icons/icon-blue-top-right.svg') }}" alt="icon-blue-top-right" width="43" height="43" class="absolute inset-0 -translate-x-full translate-y-full transition-all duration-300 group-hover:translate-x-0 group-hover:translate-y-0" />
                            </a>
                        </div>
                    </div>
                    <!-- Service Item -->
                    <!-- Service Item -->
                    <div class="jos">
                        <div class="group flex h-full flex-col items-start justify-between gap-10 gap-x-[50px] rounded-[5px] border border-[#414141] p-10 md:flex-row md:items-center lg:gap-x-10">
                            <div class="flex-1">
                                <div class="mb-6 font-Syne text-3xl font-semibold leading-none text-white lg:text-[35px]">
                                    E-Commerce Development
                                </div>
                                <p class="max-w-[898px] text-xl leading-[1.33] text-white lg:text-2xl">
                                    We build high converting, fast-loading, headless
                                    eCommerce websites for enterprise brands, that
                                    accelerate growth.
                                </p>
                            </div>
                            <a href="{{ url('servicedetails') }}" class="relative flex h-[43px] w-[43px] items-center justify-center overflow-hidden">
                                <img src="{{ asset('assets/img/icons/icon-white-top-right.svg') }}" alt="icon-white-top-right" width="43" height="43" class="absolute inset-0 transition-all duration-300 group-hover:-translate-y-full group-hover:translate-x-full" />
                                <img src="{{ asset('assets/img/icons/icon-blue-top-right.svg') }}" alt="icon-blue-top-right" width="43" height="43" class="absolute inset-0 -translate-x-full translate-y-full transition-all duration-300 group-hover:translate-x-0 group-hover:translate-y-0" />
                            </a>
                        </div>
                    </div>
                    <!-- Service Item -->
                    <!-- Service Item -->
                    <div class="jos">
                        <div class="group flex h-full flex-col items-start justify-between gap-10 gap-x-[50px] rounded-[5px] border border-[#414141] p-10 md:flex-row md:items-center lg:gap-x-10">
                            <div class="flex-1">
                                <div class="mb-6 font-Syne text-3xl font-semibold leading-none text-white lg:text-[35px]">
                                    Custom Software Development
                                </div>
                                <p class="max-w-[898px] text-xl leading-[1.33] text-white lg:text-2xl">
                                    We work with startups and global enterprises to design
                                    and develop custom web & mobile apps that drive their
                                    business forward.
                                </p>
                            </div>
                            <a href="{{ url('servicedetails') }}" class="relative flex h-[43px] w-[43px] items-center justify-center overflow-hidden">
                                <img src="{{ asset('assets/img/icons/icon-white-top-right.svg') }}" alt="icon-white-top-right" width="43" height="43" class="absolute inset-0 transition-all duration-300 group-hover:-translate-y-full group-hover:translate-x-full" />
                                <img src="{{ asset('assets/img/icons/icon-blue-top-right.svg') }}" alt="icon-blue-top-right" width="43" height="43" class="absolute inset-0 -translate-x-full translate-y-full transition-all duration-300 group-hover:translate-x-0 group-hover:translate-y-0" />
                            </a>
                        </div>
                    </div>
                    <!-- Service Item -->
                    <!-- Service Item -->
                    <div class="jos">
                        <div class="group flex h-full flex-col items-start justify-between gap-10 gap-x-[50px] rounded-[5px] border border-[#414141] p-10 md:flex-row md:items-center lg:gap-x-10">
                            <div class="flex-1">
                                <div class="mb-6 font-Syne text-3xl font-semibold leading-none text-white lg:text-[35px]">
                                    Website Design & Development
                                </div>
                                <p class="max-w-[898px] text-xl leading-[1.33] text-white lg:text-2xl">
                                    We design and develop beautiful websites that deliver
                                    best-in-class experiences to your users.
                                </p>
                            </div>
                            <a href="{{ url('servicedetails') }}" class="relative flex h-[43px] w-[43px] items-center justify-center overflow-hidden">
                                <img src="{{ asset('assets/img/icons/icon-white-top-right.svg') }}" alt="icon-white-top-right" width="43" height="43" class="absolute inset-0 transition-all duration-300 group-hover:-translate-y-full group-hover:translate-x-full" />
                                <img src="{{ asset('assets/img/icons/icon-blue-top-right.svg') }}" alt="icon-blue-top-right" width="43" height="43" class="absolute inset-0 -translate-x-full translate-y-full transition-all duration-300 group-hover:translate-x-0 group-hover:translate-y-0" />
                            </a>
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

<!-- Content Section Start -->
<section class="section-content" id="section-about">
    <!-- Section Space -->
    <div class="section-space">
        <!-- Section Container -->
        <div class="container-default">
            <div class="flex flex-col gap-y-20 lg:gap-y-[100px] xl:gap-y-[120px]">
                <!-- Content Area Single -->
                <div class="grid items-center gap-10 lg:grid-cols-[0.7fr_minmax(0,_1fr)] lg:gap-24 xl:gap-[110px]">
                    <!-- Content Block Left -->
                    <div class="jos order-1 lg:order-2" data-jos_animation="fade-right">
                        <!-- Section Wrapper -->
                        <div>
                            <!-- Section Block -->
                            <div class="mb-6">
                                <h2 class="font-Syne text-4xl font-semibold uppercase leading-[1.07] text-black sm:text-5xl lg:text-6xl xl:text-[65px]">
                                    Know about us
                                </h2>
                            </div>
                            <!-- Section Block -->
                        </div>
                        <!-- Section Wrapper -->
                        <!-- Content Text -->
                        <p class="text-lg leading-[1.33] -tracking-[0.5px] text-[#2C2C2C] md:text-xl xl:text-2xl">
                            We started our journey in January 2010. We are
                            innovation-driven and dedicated to shaping the future
                            through forward-thinking and cutting-edge technology
                            solutions. Founded by a team of visionary engineers &
                            entrepreneurs.
                        </p>
                        <p class="text-lg leading-[1.33] -tracking-[0.5px] text-[#2C2C2C] md:text-xl xl:text-2xl">
                            We believe that technology should not only meet the needs
                            of today but also anticipate the challenges of tomorrow.
                            We are committed to creating products & services that
                            empower individuals and businesses, making their digital
                            experiences smarter, safer, and more efficient.
                        </p>
                        <!-- Content Text -->

                        <a href="#" class="btn is-blue is-transparent btn-animation is-large group mt-8 inline-block rounded-[3px]">
                            <span> Discover More </span>
                        </a>
                    </div>
                    <!-- Content Block Left -->
                    <!-- Content Block Right -->
                    <div class="jos order-2 lg:order-1" data-jos_animation="fade-left">
                        <div class="w-full overflow-hidden rounded-[5px] mx-auto lg:mx-0 max-w-full sm:max-w-[80%] md:max-w-[70%] lg:max-w-full">
                            <img src="{{ asset('assets/img/th-15/content-img-1.jpg') }}" alt="content-img-1" width="526" height="550" class="h-auto w-full" />
                        </div>
                    </div>
                    <!-- Content Block Right -->
                </div>
                <!-- Content Area Single -->

                <!-- Content Area Single -->
                <div class="grid items-center gap-10 lg:grid-cols-[1fr_minmax(0,_0.75fr)] lg:gap-24 xl:gap-[110px]">
                    <!-- Content Block Left -->
                    <div class="jos" data-jos_animation="fade-right">
                        <!-- Section Wrapper -->
                        <div>
                            <!-- Section Block -->
                            <div class="mb-6">
                                <h2 class="font-Syne text-4xl font-semibold uppercase leading-[1.07] text-black sm:text-5xl lg:text-6xl xl:text-[65px]">
                                    Why choose us
                                </h2>
                            </div>
                            <!-- Section Block -->
                        </div>
                        <!-- Section Wrapper -->
                        <!-- Content Text -->
                        <p class="text-lg leading-[1.33] -tracking-[0.5px] text-[#2C2C2C] md:text-xl xl:text-2xl">
                            Our core values include the relentless pursuit of
                            excellence, a commitment to ethical and responsible tech
                            development, and a dedication to continuous learning.
                        </p>
                        <!-- Content Text -->

                        <!-- Content List -->
                        <ul class="flex list-inside flex-col gap-y-8 text-lg leading-[1.33] -tracking-[0.5px] text-[#2C2C2C] md:text-xl xl:text-2xl">
                            <!-- Content Item -->
                            <li class="flex gap-x-[10px]">
                                <span class="mr-3 mt-[3px] text-[#0000FF]"><i class="fa-solid fa-circle-check"></i></span>
                                <p>
                                    <strong class="font-semibold text-black">
                                        Expertise & Specialization:
                                    </strong>
                                    We’re experts in respective fields. They specialize in
                                    various aspects of technology.
                                </p>
                            </li>
                            <!-- Content Item -->
                            <!-- Content Item -->
                            <li class="flex gap-x-[10px]">
                                <span class="mr-3 mt-[3px] text-[#0000FF]"><i class="fa-solid fa-circle-check"></i></span>
                                <p>
                                    <strong class="font-semibold text-black">
                                        Cost Efficiency:
                                    </strong>
                                    We can also scale services up or down based on making
                                    it a flexible and cost-efficient option.
                                </p>
                            </li>
                            <!-- Content Item -->
                            <!-- Content Item -->
                            <li class="flex gap-x-[10px]">
                                <span class="mr-3 mt-[3px] text-[#0000FF]"><i class="fa-solid fa-circle-check"></i></span>
                                <p>
                                    <strong class="font-semibold text-black">
                                        Security & Compliance:
                                    </strong>
                                    Help businesses maintain high levels of security and
                                    ensure compliance with industry-specific regulations.
                                </p>
                            </li>
                            <!-- Content Item -->
                        </ul>
                        <!-- Content List -->
                    </div>
                    <!-- Content Block Left -->
                    <!-- Content Block Right -->
                    <div class="jos" data-jos_animation="fade-left">
                        <div class="w-full overflow-hidden rounded-[10px] mx-auto lg:mx-0 max-w-full sm:max-w-[80%] md:max-w-[70%] lg:max-w-full">
                            <img src="{{ asset('assets/img/th-15/content-img-2.jpg') }}" alt="content-img-2" width="526" height="550" class="h-auto w-full" />
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

<!-- Work Process Section Start -->
<section class="section-work-process">
    <!-- Section Space -->
    <div class="section-space-bottom">
        <!-- Section Container -->
        <div class="container-default">
            <!-- Section Wrapper -->
            <div class="jos mb-[60px]">
                <div class="mx-auto max-w-[843px]">
                    <!-- Section Block -->
                    <div class="mb-5">
                        <h2 class="text-center font-Syne text-4xl font-semibold uppercase leading-[1.07] text-black sm:text-5xl lg:text-6xl xl:text-[65px]">
                            Our work process
                        </h2>
                    </div>
                    <!-- Section Block -->
                </div>
            </div>
            <!-- Section Wrapper -->

            <!-- Process Area -->
            <div class="relative">
                <!-- Process Top Border -->
                <div class="hidden h-[3px] w-full overflow-hidden rounded-[50px] bg-[#EAEDF0] lg:block"></div>
                <!-- Process List -->
                <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3 xl:gap-[30px]">
                    <!-- Process Item -->
                    <div class="jos group relative lg:pt-[30px]" data-jos_delay="0">
                        <div class="mb-6 font-Syne text-3xl font-semibold leading-none text-black lg:text-[26px] xl:text-3xl xxl:text-[35px]">
                            1. Project Discovery
                        </div>
                        <p class="m-0 text-lg leading-[1.33] -tracking-[0.5px] text-[#2C2C2C] md:text-xl xl:text-2xl">
                            We create a detailed project plan with work outlines,
                            milestones, timelines.
                        </p>
                        <div class="absolute -top-[3px] left-0 hidden h-[3px] w-full scale-x-0 overflow-hidden rounded-[50px] bg-[#0000FF] transition-all duration-300 group-hover:scale-x-100 lg:block"></div>
                    </div>
                    <!-- Process Item -->
                    <!-- Process Item -->
                    <div class="jos group relative lg:pt-[30px]" data-jos_delay="0.3">
                        <div class="mb-6 font-Syne text-3xl font-semibold leading-none text-black lg:text-[26px] xl:text-3xl xxl:text-[35px]">
                            2. Implementation
                        </div>
                        <p class="m-0 text-lg leading-[1.33] -tracking-[0.5px] text-[#2C2C2C] md:text-xl xl:text-2xl">
                            Developers & engineers is essential in creating the
                            necessary solutions.
                        </p>
                        <div class="absolute -top-[3px] left-0 hidden h-[3px] w-full scale-x-0 overflow-hidden rounded-[50px] bg-[#0000FF] transition-all duration-300 group-hover:scale-x-100 lg:block"></div>
                    </div>
                    <!-- Process Item -->
                    <!-- Process Item -->
                    <div class="jos group relative lg:pt-[30px]" data-jos_delay="0.6">
                        <div class="mb-6 font-Syne text-3xl font-semibold leading-none text-black lg:text-[26px] xl:text-3xl xxl:text-[35px]">
                            3. Establishment
                        </div>
                        <p class="m-0 text-lg leading-[1.33] -tracking-[0.5px] text-[#2C2C2C] md:text-xl xl:text-2xl">
                            Includes all functional performance testing, testing, and
                            security testing.
                        </p>
                        <div class="absolute -top-[3px] left-0 hidden h-[3px] w-full scale-x-0 overflow-hidden rounded-[50px] bg-[#0000FF] transition-all duration-300 group-hover:scale-x-100 lg:block"></div>
                    </div>
                    <!-- Process Item -->
                </div>
                <!-- Process List -->
            </div>
            <!-- Process Area -->
        </div>
        <!-- Section Container -->
    </div>
    <!-- Section Space -->
</section>
<!-- Work Process Section End -->

<!-- Team Section Start -->
<section class="section-team" id="section-team">
    <!-- Section Background -->
    <div class="bg-black">
        <!-- Section Space -->
        <div class="section-space">
            <!-- Section Container -->
            <div class="container-default">
                <!-- Section Wrapper -->
                <div class="jos mb-[60px]">
                    <div class="max-w-[789px]">
                        <!-- Section Block -->
                        <div class="mb-5">
                            <h2 class="font-Syne text-4xl font-semibold uppercase leading-[1.07] text-white sm:text-5xl lg:text-6xl xl:text-[65px]">
                                Meet our team
                            </h2>
                        </div>
                        <!-- Section Block -->
                    </div>
                </div>
                <!-- Section Wrapper -->

                <!-- Team List -->
                <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                    <!-- Team Item -->
                    <div class="jos rounded-[5px] bg-[#2C2C2C] p-5" data-jos_animation="flip-left" data-jos_delay="0">
                        <div class="mb-6 w-full overflow-hidden rounded-[6px] md:h-80 lg:h-60 xl:h-80">
                            <img src="{{ asset('assets/img/th-15/team-img-1.jpg') }}" alt="team-img-1" width="376" height="320" class="h-full w-full object-cover object-top" />
                        </div>
                        <div class="">
                            <div class="mb-[5px] font-Syne text-2xl font-semibold text-white">
                                Adam Smith
                            </div>
                            <span class="text-xl text-white">Founder & CEO</span>
                        </div>
                    </div>
                    <!-- Team Item -->
                    <!-- Team Item -->
                    <div class="jos rounded-[5px] bg-[#2C2C2C] p-5" data-jos_animation="flip-left" data-jos_delay="0.3">
                        <div class="mb-6 w-full overflow-hidden rounded-[6px] md:h-80 lg:h-60 xl:h-80">
                            <img src="{{ asset('assets/img/th-15/team-img-2.jpg') }}" alt="team-img-2" width="376" height="320" class="h-full w-full object-cover object-top" />
                        </div>
                        <div class="">
                            <div class="mb-[5px] font-Syne text-2xl font-semibold text-white">
                                Jones Marco
                            </div>
                            <span class="text-xl text-white">Chief Operating Officer</span>
                        </div>
                    </div>
                    <!-- Team Item -->
                    <!-- Team Item -->
                    <div class="jos rounded-[5px] bg-[#2C2C2C] p-5" data-jos_animation="flip-left" data-jos_delay="0.6">
                        <div class="mb-6 w-full overflow-hidden rounded-[6px] md:h-80 lg:h-60 xl:h-80">
                            <img src="{{ asset('assets/img/th-15/team-img-3.jpg') }}" alt="team-img-3" width="376" height="320" class="h-full w-full object-cover object-top" />
                        </div>
                        <div class="">
                            <div class="mb-[5px] font-Syne text-2xl font-semibold text-white">
                                Marsal Joy
                            </div>
                            <span class="text-xl text-white">General Manager</span>
                        </div>
                    </div>
                    <!-- Team Item -->
                    <!-- Team Item -->
                    <div class="jos rounded-[5px] bg-[#2C2C2C] p-5" data-jos_animation="flip-left" data-jos_delay="0.9">
                        <div class="mb-6 w-full overflow-hidden rounded-[6px] md:h-80 lg:h-60 xl:h-80">
                            <img src="{{ asset('assets/img/th-15/team-img-4.jpg') }}" alt="team-img-4" width="376" height="320" class="h-full w-full object-cover object-top" />
                        </div>
                        <div class="">
                            <div class="mb-[5px] font-Syne text-2xl font-semibold text-white">
                                Douglas Luhan
                            </div>
                            <span class="text-xl text-white">Sales Executive</span>
                        </div>
                    </div>
                    <!-- Team Item -->
                    <!-- Team Item -->
                    <div class="jos rounded-[5px] bg-[#2C2C2C] p-5" data-jos_animation="flip-left" data-jos_delay="1.2">
                        <div class="mb-6 w-full overflow-hidden rounded-[6px] md:h-80 lg:h-60 xl:h-80">
                            <img src="{{ asset('assets/img/th-15/team-img-5.jpg') }}" alt="team-img-5" width="376" height="320" class="h-full w-full object-cover object-top" />
                        </div>
                        <div class="">
                            <div class="mb-[5px] font-Syne text-2xl font-semibold text-white">
                                Alex Taylor
                            </div>
                            <span class="text-xl text-white">Web Developer</span>
                        </div>
                    </div>
                    <!-- Team Item -->
                    <!-- Team Item -->
                    <div class="jos rounded-[5px] bg-[#2C2C2C] p-5" data-jos_animation="flip-left" data-jos_delay="1.5">
                        <div class="mb-6 w-full overflow-hidden rounded-[6px] md:h-80 lg:h-60 xl:h-80">
                            <img src="{{ asset('assets/img/th-15/team-img-6.jpg') }}" alt="team-img-6" width="376" height="320" class="h-full w-full object-cover object-top" />
                        </div>
                        <div class="">
                            <div class="mb-[5px] font-Syne text-2xl font-semibold text-white">
                                Henry Fayol
                            </div>
                            <span class="text-xl text-white">UI/UX Designer</span>
                        </div>
                    </div>
                    <!-- Team Item -->
                </div>
                <!-- Team List -->
            </div>
            <!-- Section Container -->
        </div>
        <!-- Section Space -->
    </div>
    <!-- Section Background -->
</section>
<!-- Team Section End -->

<!-- FAQ Section Start -->
<section class="section-faq" id="section-faq">
    <!-- Section Space -->
    <div class="section-space">
        <!-- Section Container -->
        <div class="container-default">
            <!-- Section Wrapper -->
            <div class="jos mb-[60px]">
                <div class="mx-auto max-w-[843px]">
                    <!-- Section Block -->
                    <div class="mb-5">
                        <h2 class="text-center font-Syne text-4xl font-semibold uppercase leading-[1.07] text-black sm:text-5xl lg:text-6xl xl:text-[65px]">
                            We're often asked
                        </h2>
                    </div>
                    <!-- Section Block -->
                </div>
            </div>
            <!-- Section Wrapper -->

            <!-- FAQ Area -->
            <div class="jos">
                <!-- Accordion List -->
                <ul class="-mb-[60px]">
                    <!-- Accordion Item -->
                    <li class="accordion-item active overflow-hidden border-b border-[#EAEDF0] py-[60px] first:pt-0 last:border-b-0">
                        <!-- Accordion Header -->
                        <div class="accordion-header flex justify-between gap-6 font-Syne text-3xl font-semibold leading-none text-black lg:text-[26px] xl:text-3xl xxl:text-[35px]">
                            <button class="flex-1 text-left">
                                What does your tech company do?
                            </button>
                            <div class="accordion-icon-6 relative flex h-[50px] w-[50px] items-center justify-center">
                                <span class="inline-block h-1 w-8 rounded-sm bg-black lg:w-10 xl:h-[7px] xl:w-[50px]"></span>
                                <span class="absolute inline-block h-8 w-1 rotate-0 rounded-sm bg-black lg:h-10 xl:h-[50px] xl:w-[7px]"></span>
                            </div>
                        </div>
                        <!-- Accordion Header -->
                        <!-- Accordion Body -->
                        <div class="accordion-body max-w-[898px] opacity-80">
                            <p class="pt-5 text-lg leading-[1.33] -tracking-[0.5px] text-[#2C2C2C] md:text-xl xl:text-2xl">
                                Masco Innovations is not just a tech company; it's a
                                catalyst for progress, a hub of innovation, and a
                                partner in your digital journey & connected future of
                                technology.
                            </p>
                        </div>
                        <!-- Accordion Body -->
                    </li>
                    <!-- Accordion Item -->
                    <!-- Accordion Item -->
                    <li class="accordion-item overflow-hidden border-b border-[#EAEDF0] py-[60px] first:pt-0 last:border-b-0">
                        <!-- Accordion Header -->
                        <div class="accordion-header flex justify-between gap-6 font-Syne text-3xl font-semibold leading-none text-black lg:text-[26px] xl:text-3xl xxl:text-[35px]">
                            <button class="flex-1 text-left">
                                What industries or sectors do you serve?
                            </button>
                            <div class="accordion-icon-6 relative flex h-[50px] w-[50px] items-center justify-center">
                                <span class="inline-block h-1 w-8 rounded-sm bg-black lg:w-10 xl:h-[7px] xl:w-[50px]"></span>
                                <span class="absolute inline-block h-8 w-1 rotate-0 rounded-sm bg-black lg:h-10 xl:h-[50px] xl:w-[7px]"></span>
                            </div>
                        </div>
                        <!-- Accordion Header -->
                        <!-- Accordion Body -->
                        <div class="accordion-body max-w-[898px] opacity-80">
                            <p class="pt-5 text-lg leading-[1.33] -tracking-[0.5px] text-[#2C2C2C] md:text-xl xl:text-2xl">
                                Masco Innovations is not just a tech company; it's a
                                catalyst for progress, a hub of innovation, and a
                                partner in your digital journey & connected future of
                                technology.
                            </p>
                        </div>
                        <!-- Accordion Body -->
                    </li>
                    <!-- Accordion Item -->
                    <!-- Accordion Item -->
                    <li class="accordion-item overflow-hidden border-b border-[#EAEDF0] py-[60px] first:pt-0 last:border-b-0">
                        <!-- Accordion Header -->
                        <div class="accordion-header flex justify-between gap-6 font-Syne text-3xl font-semibold leading-none text-black lg:text-[26px] xl:text-3xl xxl:text-[35px]">
                            <button class="flex-1 text-left">
                                How much does a custom software solution cost?
                            </button>
                            <div class="accordion-icon-6 relative flex h-[50px] w-[50px] items-center justify-center">
                                <span class="inline-block h-1 w-8 rounded-sm bg-black lg:w-10 xl:h-[7px] xl:w-[50px]"></span>
                                <span class="absolute inline-block h-8 w-1 rotate-0 rounded-sm bg-black lg:h-10 xl:h-[50px] xl:w-[7px]"></span>
                            </div>
                        </div>
                        <!-- Accordion Header -->
                        <!-- Accordion Body -->
                        <div class="accordion-body max-w-[898px] opacity-80">
                            <p class="pt-5 text-lg leading-[1.33] -tracking-[0.5px] text-[#2C2C2C] md:text-xl xl:text-2xl">
                                Masco Innovations is not just a tech company; it's a
                                catalyst for progress, a hub of innovation, and a
                                partner in your digital journey & connected future of
                                technology.
                            </p>
                        </div>
                        <!-- Accordion Body -->
                    </li>
                    <!-- Accordion Item -->
                    <!-- Accordion Item -->
                    <li class="accordion-item overflow-hidden border-b border-[#EAEDF0] py-[60px] first:pt-0 last:border-b-0">
                        <!-- Accordion Header -->
                        <div class="accordion-header flex justify-between gap-6 font-Syne text-3xl font-semibold leading-none text-black lg:text-[26px] xl:text-3xl xxl:text-[35px]">
                            <button class="flex-1 text-left">
                                Is data protection and privacy secure?
                            </button>
                            <div class="accordion-icon-6 relative flex h-[50px] w-[50px] items-center justify-center">
                                <span class="inline-block h-1 w-8 rounded-sm bg-black lg:w-10 xl:h-[7px] xl:w-[50px]"></span>
                                <span class="absolute inline-block h-8 w-1 rotate-0 rounded-sm bg-black lg:h-10 xl:h-[50px] xl:w-[7px]"></span>
                            </div>
                        </div>
                        <!-- Accordion Header -->
                        <!-- Accordion Body -->
                        <div class="accordion-body max-w-[898px] opacity-80">
                            <p class="pt-5 text-lg leading-[1.33] -tracking-[0.5px] text-[#2C2C2C] md:text-xl xl:text-2xl">
                                Masco Innovations is not just a tech company; it's a
                                catalyst for progress, a hub of innovation, and a
                                partner in your digital journey & connected future of
                                technology.
                            </p>
                        </div>
                        <!-- Accordion Body -->
                    </li>
                    <!-- Accordion Item -->
                    <!-- Accordion Item -->
                    <li class="accordion-item overflow-hidden border-b border-[#EAEDF0] py-[60px] first:pt-0 last:border-b-0">
                        <!-- Accordion Header -->
                        <div class="accordion-header flex justify-between gap-6 font-Syne text-3xl font-semibold leading-none text-black lg:text-[26px] xl:text-3xl xxl:text-[35px]">
                            <button class="flex-1 text-left">
                                Which software is right for me?
                            </button>
                            <div class="accordion-icon-6 relative flex h-[50px] w-[50px] items-center justify-center">
                                <span class="inline-block h-1 w-8 rounded-sm bg-black lg:w-10 xl:h-[7px] xl:w-[50px]"></span>
                                <span class="absolute inline-block h-8 w-1 rotate-0 rounded-sm bg-black lg:h-10 xl:h-[50px] xl:w-[7px]"></span>
                            </div>
                        </div>
                        <!-- Accordion Header -->
                        <!-- Accordion Body -->
                        <div class="accordion-body max-w-[898px] opacity-80">
                            <p class="pt-5 text-lg leading-[1.33] -tracking-[0.5px] text-[#2C2C2C] md:text-xl xl:text-2xl">
                                Masco Innovations is not just a tech company; it's a
                                catalyst for progress, a hub of innovation, and a
                                partner in your digital journey & connected future of
                                technology.
                            </p>
                        </div>
                        <!-- Accordion Body -->
                    </li>
                    <!-- Accordion Item -->
                </ul>
                <!-- Accordion List -->
            </div>
            <!-- FAQ Area -->
        </div>
        <!-- Section Container -->
    </div>
    <!-- Section Space -->
</section>
<!-- FAQ Section End -->

<!-- CTA Section Start -->
<section class="section-cta">
    <!-- Section Background -->
    <div class="bg-[#0000FF]">
        <!-- Section Space -->
        <div class="section-space">
            <!-- Section Container -->
            <div class="container-default">
                <div class="grid grid-cols-1 gap-[60px] lg:grid-cols-[1fr_minmax(0,_0.7fr)] xl:gap-20">
                    <!-- CTA Left Block -->
                    <div class="text-white">
                        <!-- Section Wrapper -->
                        <div class="jos" data-jos_animation="fade-left">
                            <div class="max-w-[789px]">
                                <!-- Section Block -->
                                <div class="mb-5">
                                    <h2 class="font-Syne text-4xl font-semibold uppercase leading-[1.07] text-white sm:text-5xl lg:text-6xl xl:text-[65px]">
                                        Are you ready to get started?
                                    </h2>
                                </div>
                                <!-- Section Block -->
                                <p class="mb-0 max-w-[636px] text-lg leading-[1.33] -tracking-[0.5px] md:text-xl xl:text-2xl">
                                    Join us on this exciting journey as we continue to
                                    redefine what is possible with ever-evolving
                                    technology.
                                </p>

                                <div class="mt-8 lg:mt-[50px]">
                                    <a href="#" class="btn is-outline-white btn-animation is-large inline-block rounded-[3px]"><span>View Our Services</span></a>
                                </div>

                                <p class="mb-8 mt-16 text-sm md:mt-20 lg:mb-[50px] lg:mt-[100px] xl:mt-[120px]">
                                    We have collaborated with several esteemed
                                    organizations.
                                </p>
                                <div class="flex flex-wrap gap-x-[60px] gap-y-8">
                                    <div class="h-auto max-w-[170px]">
                                        <img src="{{ asset('assets/img/th-15/brand-1.png') }}" alt="brand-1" width="170" height="36" />
                                    </div>
                                    <div class="h-auto max-w-[170px]">
                                        <img src="{{ asset('assets/img/th-15/brand-2.png') }}" alt="brand-2" width="173" height="34" />
                                    </div>
                                    <div class="h-auto max-w-[170px]">
                                        <img src="{{ asset('assets/img/th-15/brand-3.png') }}" alt="brand-3" width="170" height="36" />
                                    </div>
                                    <div class="h-auto max-w-[170px]">
                                        <img src="{{ asset('assets/img/th-15/brand-4.png') }}" alt="brand-4" width="165" height="29" />
                                    </div>
                                    <div class="h-auto max-w-[170px]">
                                        <img src="{{ asset('assets/img/th-15/brand-5.png') }}" alt="brand-5" width="158" height="34" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Section Wrapper -->
                    </div>
                    <!-- CTA Left Block -->

                    <!-- CTA Right Block -->
                    <div class="jos rounded-[5px] bg-white p-10" data-jos_animation="fade-right">
                        <form action="#" method="post" class="flex flex-col gap-y-6">
                            <div class="flex flex-col">
                                <label for="cta-name" class="mb-[10px] font-semibold text-black">Your name</label>
                                <input type="text" name="cta-name" id="cta-name" class="rounded-[5px] border border-[#B8C1CC] px-4 py-2 outline-none transition-all duration-150 focus:border-[#0000FF] focus:text-black lg:px-[30px] lg:py-[15px]" placeholder="Enter your full name" required />
                            </div>
                            <div class="flex flex-col">
                                <label for="cta-email" class="mb-[10px] font-semibold text-black">Email address</label>
                                <input type="email" name="cta-email" id="cta-email" class="rounded-[5px] border border-[#B8C1CC] px-4 py-2 outline-none transition-all duration-150 focus:border-[#0000FF] focus:text-black lg:px-[30px] lg:py-[15px]" placeholder="Enter your email" required />
                            </div>
                            <div class="flex flex-col">
                                <label for="cta-service" class="mb-[10px] font-semibold text-black">Email address</label>
                                <select name="cta-service" id="cta-service" class="rounded-[5px] border border-[#B8C1CC] px-4 py-2 outline-none transition-all duration-150 focus:border-[#0000FF] focus:text-black lg:px-[30px] lg:py-[15px]" required>
                                    <option value="">Select a service</option>
                                    <option value="ui/ux design">ui/ux design</option>
                                    <option value="web development">
                                        web development
                                    </option>
                                    <option value="cloud hosting">cloud hosting</option>
                                </select>
                            </div>
                            <div class="flex flex-col">
                                <label for="cta-message" class="mb-[10px] font-semibold text-black">Write your message</label>
                                <textarea name="cta-message" id="cta-message" class="min-h-[120px] w-full rounded-[5px] border border-[#B8C1CC] px-4 py-2 outline-none transition-all duration-150 focus:border-[#0000FF] focus:text-black lg:px-[30px] lg:py-[15px]" placeholder="Write us your question here..." required></textarea>
                            </div>

                            <button type="submit" class="btn is-large rounded-[3px] border-[#0000FF] bg-[#0000FF] text-white hover:bg-white hover:text-[#0000FF]">
                                Send Message
                            </button>
                        </form>
                    </div>
                    <!-- CTA Right Block -->
                </div>
            </div>
            <!-- Section Container -->
        </div>
        <!-- Section Space -->
    </div>
    <!-- Section Background -->
</section>
<!-- CTA Section End -->

@endsection



@section('footer')
<footer class="section-footer">
    <!-- Footer Area Center -->
    <div class="bg-white">
        <!-- Footer Center Spacing -->
        <div class="py-[60px] lg:py-20">
            <!-- Section Container -->
            <div class="container-default">
                <!-- Footer Widget List -->
                <div class="grid gap-x-16 gap-y-10 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 xl:gap-x-20">
                    <!-- Footer Widget Item -->
                    <div class="flex flex-col gap-y-7">
                        <!-- Footer Widget Title -->
                        <div class="text-xl font-semibold capitalize text-black">
                            Primary Pages
                        </div>
                        <!-- Footer Navbar -->
                        <ul class="flex flex-col gap-y-[10px] capitalize">
                            <li>
                                <a href="{{ url('index') }}" class="text-[#2C2C2C] underline-offset-4 transition-all duration-300 ease-linear hover:underline">Home</a>
                            </li>
                            <li>
                                <a href="{{ url('about') }}" class="text-[#2C2C2C] underline-offset-4 transition-all duration-300 ease-linear hover:underline">About Us</a>
                            </li>
                            <li>
                                <a href="{{ url('services') }}" class="text-[#2C2C2C] underline-offset-4 transition-all duration-300 ease-linear hover:underline">Services</a>
                            </li>
                            <li>
                                <a href="{{ url('pricing') }}" class="text-[#2C2C2C] underline-offset-4 transition-all duration-300 ease-linear hover:underline">pricing</a>
                            </li>
                            <li>
                                <a href="{{ url('contact') }}" class="text-[#2C2C2C] underline-offset-4 transition-all duration-300 ease-linear hover:underline">Contact</a>
                            </li>
                        </ul>
                    </div>
                    <!-- Footer Widget Item -->

                    <!-- Footer Widget Item -->
                    <div class="flex flex-col gap-y-6">
                        <!-- Footer Title -->
                        <div class="text-xl font-semibold capitalize text-black">
                            Learn
                        </div>
                        <!-- Footer Title -->

                        <!-- Footer Navbar -->
                        <ul class="flex flex-col gap-y-[10px] capitalize">
                            <li>
                                <a href="{{ url('blog') }}" class="text-[#2C2C2C] underline-offset-4 transition-all duration-300 ease-linear hover:underline">Masco Blog</a>
                            </li>
                            <li>
                                <a href="{{ url('index6') }}" class="text-[#2C2C2C] underline-offset-4 transition-all duration-300 ease-linear hover:underline">Cold Email</a>
                            </li>
                            <li>
                                <a href="{{ url('index2') }}" class="text-[#2C2C2C] underline-offset-4 transition-all duration-300 ease-linear hover:underline">Prospecting Podcast</a>
                            </li>
                            <li>
                                <a href="{{ url('index14') }}" class="text-[#2C2C2C] underline-offset-4 transition-all duration-300 ease-linear hover:underline">Follow-Up Strategy</a>
                            </li>
                            <li>
                                <a href="{{ url('index4') }}" class="text-[#2C2C2C] underline-offset-4 transition-all duration-300 ease-linear hover:underline">Email Analyzer</a>
                            </li>
                        </ul>
                    </div>
                    <!-- Footer Widget Item-->

                    <!-- Footer Widget Item -->
                    <div class="flex flex-col gap-y-6">
                        <!-- Footer Title -->
                        <div class="text-xl font-semibold capitalize text-black">
                            Utility pages
                        </div>
                        <!-- Footer Title -->

                        <!-- Footer Navbar -->
                        <ul class="flex flex-col gap-y-[10px] capitalize">
                            <li>
                                <a href="{{ url('signup') }}" class="text-[#2C2C2C] underline-offset-4 transition-all duration-300 ease-linear hover:underline">Signup</a>
                            </li>
                            <li>
                                <a href="{{ url('login') }}" class="text-[#2C2C2C] underline-offset-4 transition-all duration-300 ease-linear hover:underline">Login</a>
                            </li>
                            <li>
                                <a href="{{ url('error404') }}" class="text-[#2C2C2C] underline-offset-4 transition-all duration-300 ease-linear hover:underline">404 Not found</a>
                            </li>
                            <li>
                                <a href="{{ url('resetpassword') }}" class="text-[#2C2C2C] underline-offset-4 transition-all duration-300 ease-linear hover:underline">Password Reset</a>
                            </li>
                        </ul>
                    </div>
                    <!-- Footer Widget Item-->

                    <!-- Footer Widget Item -->
                    <div class="flex flex-col gap-y-6">
                        <!-- Footer Title -->
                        <div class="text-xl font-semibold capitalize text-black">
                            Resources
                        </div>
                        <!-- Footer Title -->

                        <!-- Footer Navbar -->
                        <ul class="flex flex-col gap-y-[10px] capitalize">
                            <li>
                                <a href="https://www.example.com/" target="_blank" rel="noopener noreferrer" class="text-[#2C2C2C] underline-offset-4 transition-all duration-300 ease-linear hover:underline">Support</a>
                            </li>
                            <li>
                                <a href="https://www.example.com/" target="_blank" rel="noopener noreferrer" class="text-[#2C2C2C] underline-offset-4 transition-all duration-300 ease-linear hover:underline">Privacy policy</a>
                            </li>
                            <li>
                                <a href="https://www.example.com/" target="_blank" rel="noopener noreferrer" class="text-[#2C2C2C] underline-offset-4 transition-all duration-300 ease-linear hover:underline">Terms & Conditions</a>
                            </li>
                            <li>
                                <a href="https://www.example.com/" target="_blank" rel="noopener noreferrer" class="text-[#2C2C2C] underline-offset-4 transition-all duration-300 ease-linear hover:underline">Strategic finance</a>
                            </li>
                            <li>
                                <a href="https://www.example.com/" target="_blank" rel="noopener noreferrer" class="text-[#2C2C2C] underline-offset-4 transition-all duration-300 ease-linear hover:underline">Video guide</a>
                            </li>
                        </ul>
                    </div>
                    <!-- Footer Widget Item -->
                    <!-- Footer Widget Item -->
                    <div class="flex flex-col gap-y-6">
                        <!-- Footer Title -->
                        <div class="text-xl font-semibold capitalize text-black">
                            Community
                        </div>
                        <!-- Footer Title -->

                        <!-- Footer Social Link -->
                        <div class="flex flex-wrap gap-4">
                            <a href="https://twitter.com" target="_blank" rel="noopener noreferrer" class="flex h-[35px] w-[35px] items-center justify-center rounded-[50%] bg-[#EAEDF0] text-sm text-black transition-all duration-300 hover:bg-[#0000FF] hover:text-white" aria-label="twitter">
                                <i class="fa-brands fa-x-twitter"></i>
                            </a>
                            <a href="https://www.facebook.com/" target="_blank" rel="noopener noreferrer" class="flex h-[35px] w-[35px] items-center justify-center rounded-[50%] bg-[#EAEDF0] text-sm text-black transition-all duration-300 hover:bg-[#0000FF] hover:text-white" aria-label="facebook">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                            <a href="https://www.instagram.com/" target="_blank" rel="noopener noreferrer" class="flex h-[35px] w-[35px] items-center justify-center rounded-[50%] bg-[#EAEDF0] text-sm text-black transition-all duration-300 hover:bg-[#0000FF] hover:text-white" aria-label="instagram">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                            <a href="https://www.github.com/" target="_blank" rel="noopener noreferrer" class="flex h-[35px] w-[35px] items-center justify-center rounded-[50%] bg-[#EAEDF0] text-sm text-black transition-all duration-300 hover:bg-[#0000FF] hover:text-white" aria-label="github">
                                <i class="fa-brands fa-github"></i>
                            </a>
                            <a href="https://www.discord.com/" target="_blank" rel="noopener noreferrer" class="flex h-[35px] w-[35px] items-center justify-center rounded-[50%] bg-[#EAEDF0] text-sm text-black transition-all duration-300 hover:bg-[#0000FF] hover:text-white" aria-label="discord">
                                <i class="fa-brands fa-discord"></i>
                            </a>
                            <a href="https://www.github.com/" target="_blank" rel="noopener noreferrer" class="flex h-[35px] w-[35px] items-center justify-center rounded-[50%] bg-[#EAEDF0] text-sm text-black transition-all duration-300 hover:bg-[#0000FF] hover:text-white" aria-label="tiktok">
                                <i class="fa-brands fa-tiktok"></i>
                            </a>
                        </div>
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
    <div class="horizontal-line -mt-px bg-black"></div>
    <!-- Footer Bottom -->
    <div class="bg-white text-black">
        <!-- Footer Bottom Spacing -->
        <div class="py-10">
            <!-- Section Container -->
            <div class="container-default">
                <div class="flex flex-wrap items-center justify-center gap-x-10 gap-y-5 md:justify-between">
                    <!-- Footer Logo -->
                    <a href="{{ url('index') }}" class="">
                        <img src="{{ asset('assets/img/logo-dark.png') }}" alt="Masco" width="109" height="24" />
                    </a>
                    <!-- Footer Logo -->
                    <div class="text-center">
                        &copy; Copyright 2024, All Rights Reserved by PixcelsThemes
                    </div>
                </div>
            </div>
            <!-- Section Container -->
        </div>
        <!-- Footer Bottom Spacing -->
    </div>
    <!-- Footer Bottom -->
</footer>
@endsection