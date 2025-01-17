@extends('layout.layout1',['bgColor'=> 'bg-ColorAlmond'])
@section('headerLogo')
    <img src="{{ asset('assets/img/logo-yellow-dark.png') }}" alt="Masco" width="109" height="24" />
@endsection

@section('headButtons')

<div class="flex items-center gap-6">
    <a href="{{ url('login') }}" class="btn-text hidden hover:text-ColorPurple sm:inline-block">Login</a>
    <a href="{{ url('signup') }}" class="btn is-lunar-green is-rounded btn-animation group hidden sm:inline-block"><span>Sign up free</span></a>
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
    <div class="relative z-10 overflow-hidden bg-ColorAlmond">
        <!-- Hero Section Space -->
        <div class="pb-[60px] pt-[105px] sm:pt-[145px] md:pb-20 xl:pb-[100px] xxl:pb-[177px] xl:pt-[240px]">
            <!-- Section Container -->
            <div class="container-default">
                <div class="grid gap-10 lg:grid-cols-2 lg:gap-16 xxl:grid-cols-[1fr_minmax(0,_0.8fr)]">
                    <!-- Hero Area -->
                    <div class="xl:max-w-xl xxl:max-w-[700px]">
                        <h1 class="mb-6 font-Syne font-semibold leading-none -tracking-[2px] text-ColorOil xl:text-7xl xxl:text-[100px]">
                            Make better use of time by tracking it
                        </h1>
                        <p class="mb-8 text-ColorOil lg:mb-[50px]">
                            Masco time tracking software is a business application
                            that helps you track work hours and increase your
                            productivity without wasting time on paper timesheets or
                            complicated processes.
                        </p>
                        <a href="#" class="btn is-lunar-green is-large is-rounded btn-animation group inline-block"><span>Start Tracking Your Time…Now!</span></a>
                    </div>
                    <!-- Hero Area -->
                    <div class="mr-auto xl:absolute xl:-right-[200px] xl:top-1/2 xl:-translate-y-1/2">
                        <div class="relative block">
                            <img src="{{ asset('assets/img/th-9/hero-img.png') }}" alt="hero-img" width="912" height="706" class="ml-auto xl:max-w-[80%] xxl:max-w-full" />
                        </div>
                    </div>
                </div>
            </div>
            <!-- Section Container -->
        </div>
        <!-- Hero Section Space -->

        <!-- Hero Background Shape -->
        <div class="absolute bottom-0 right-0 -z-10">
            <img src="{{ asset('assets/img/elements/home-9-hero-bg-shape.svg') }}" alt="home-9-hero-bg-shape" width="376" height="367" />
        </div>
    </div>
    <!-- Section Background -->
</section>
<!-- Hero Section End -->

<!-- Fact Section Start -->
<section class="section-fact">
    <!-- Section Background -->
    <div class="bg-ColorCorn">
        <!-- Section Space -->
        <div class="py-20 lg:py-[100px]">
            <!-- Section Container -->
            <div class="container-default">
                <!-- Fact Area -->
                <div class="grid grid-cols-1 items-center gap-x-8 gap-y-10 lg:grid-cols-[0.8fr_minmax(0,_1fr)] xl:gap-x-44 xxl:gap-x-56">
                    <!-- Fact Left Side -->
                    <div class="order-2 grid grid-cols-1 gap-8 sm:gap-[50px] sm:grid-cols-2 lg:order-1">
                        <div class="jos relative flex flex-col justify-center gap-y-3 text-center after:absolute after:left-[calc(100%+_25px)] after:hidden after:h-[100px] after:w-px after:bg-ColorOil/10 last:after:hidden sm:after:block">
                            <div class="text-[45px] font-bold text-ColorOil">
                                64,739
                            </div>
                            <div class="flex justify-center gap-x-[10px] text-[#E35523]">
                                <span><i class="fa-sharp fa-solid fa-heart"></i></span>
                                <span><i class="fa-sharp fa-solid fa-heart"></i></span>
                                <span><i class="fa-sharp fa-solid fa-heart"></i></span>
                                <span><i class="fa-sharp fa-solid fa-heart"></i></span>
                                <span><i class="fa-sharp fa-solid fa-heart"></i></span>
                            </div>
                            <span class="text-xl font-semibold text-ColorOil">Happy Customers</span>
                        </div>
                        <div class="jos relative flex flex-col justify-center gap-y-3 text-center after:absolute after:left-[calc(100%+_25px)] after:hidden after:h-[100px] after:w-px after:bg-ColorOil/10 last:after:hidden sm:after:block">
                            <div class="text-[45px] font-bold text-ColorOil">
                                4.8/5
                            </div>
                            <div class="flex justify-center gap-x-[10px] text-[#E35523]">
                                <img src="{{ asset('assets/img/icons/icon-green-star.svg') }}" alt="icon-green-star" width="26" height="24" />
                                <img src="{{ asset('assets/img/icons/icon-green-star.svg') }}" alt="icon-green-star" width="26" height="24" />
                                <img src="{{ asset('assets/img/icons/icon-green-star.svg') }}" alt="icon-green-star" width="26" height="24" />
                                <img src="{{ asset('assets/img/icons/icon-green-star.svg') }}" alt="icon-green-star" width="26" height="24" />
                                <img src="{{ asset('assets/img/icons/icon-green-star.svg') }}" alt="icon-green-star" width="26" height="24" />
                            </div>
                            <span class="text-xl font-semibold text-ColorOil">120k + Reviews</span>
                        </div>
                    </div>
                    <!-- Fact Left Side -->

                    <!-- Fact Right Side -->
                    <div class="order-1 lg:order-2">
                        <!-- Section Content Wrapper -->
                        <div class="jos">
                            <!-- Section Content Block -->
                            <div>
                                <h2 class="mb-5 font-Syne text-4xl font-semibold leading-[1.14] -tracking-[1px] text-ColorOil lg:text-5xl xl:text-[56px]">
                                    Easy time-tracking software for you
                                </h2>

                                <p class="max-w-xl text-ColorOil/80">
                                    Trusted by the most innovative companies worldwide and
                                    still growing to increase their productivity
                                </p>
                            </div>
                            <!-- Section Content Block -->
                        </div>
                        <!-- Section Content Wrapper -->
                    </div>
                    <!-- Fact Right Side -->
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

<!-- Feature Section Start -->
<section class="section-feature">
    <!-- Section Background -->
    <div class="relative z-10 bg-ColorAlmond">
        <!-- Section Space -->
        <div class="section-space">
            <!-- Section Container -->
            <div class="container-default">
                <!-- Section Content Wrapper -->
                <div class="jos mb-[60px] xl:mb-20">
                    <!-- Section Content Block -->
                    <div class="mx-auto max-w-[636px]">
                        <h2 class="mb-5 text-center font-Syne text-4xl font-semibold leading-[1.14] -tracking-[1px] text-ColorOil lg:text-5xl xl:text-[56px]">
                            Appropriate features for proper use of time
                        </h2>
                    </div>
                    <!-- Section Content Block -->
                </div>
                <!-- Section Content Wrapper -->

                <!-- Feature List -->
                <div class="jos grid grid-cols-1 items-center gap-y-px bg-ColorOil lg:grid-cols-2 -my-10 lg:my-0">
                    <!-- Feature Items -->
                    <div class="relative flex h-full gap-x-5 bg-ColorAlmond py-10 after:absolute after:left-full after:top-1/2 after:z-10 after:hidden after:h-[100px] after:w-px after:-translate-y-1/2 after:bg-ColorOil even:after:hidden lg:p-10 lg:after:block lg:odd:after:block">
                        <div class="h-auto w-16 md:w-20 lg:w-[98px]">
                            <img src="{{ asset('assets/img/icons/icon-black-home-9-feature-1.svg') }}" alt="icon-black-home-9-feature-1" width="98" height="82" />
                        </div>
                        <div class="flex-1">
                            <div class="mb-[15px] font-Syne text-2xl font-semibold -tracking-[0.5px] text-ColorOil">
                                Create effective work schedules
                            </div>
                            <p class="text-ColorOil/80">
                                Planning ahead is a key factor when creating an employee
                                work schedule important for business.
                            </p>
                        </div>
                    </div>
                    <!-- Feature Items -->
                    <!-- Feature Items -->
                    <div class="relative flex h-full gap-x-5 bg-ColorAlmond py-10 after:absolute after:left-full after:top-1/2 after:z-10 after:hidden after:h-[100px] after:w-px after:-translate-y-1/2 after:bg-ColorOil even:after:hidden lg:p-10 lg:after:block lg:odd:after:block">
                        <div class="h-auto w-16 md:w-20 lg:w-[98px]">
                            <img src="{{ asset('assets/img/icons/icon-black-home-9-feature-2.svg') }}" alt="icon-black-home-9-feature-2" width="98" height="97" />
                        </div>
                        <div class="flex-1">
                            <div class="mb-[15px] font-Syne text-2xl font-semibold -tracking-[0.5px] text-ColorOil">
                                Track both online & offline time
                            </div>
                            <p class="text-ColorOil/80">
                                Offline time tracking is the time tracking feature that
                                is used to track the time at work productive.
                            </p>
                        </div>
                    </div>
                    <!-- Feature Items -->
                    <!-- Feature Items -->
                    <div class="relative flex h-full gap-x-5 bg-ColorAlmond py-10 after:absolute after:left-full after:top-1/2 after:z-10 after:hidden after:h-[100px] after:w-px after:-translate-y-1/2 after:bg-ColorOil even:after:hidden lg:p-10 lg:after:block lg:odd:after:block" data-jos_animation="fade-up">
                        <div class="h-auto w-16 md:w-20 lg:w-[98px]">
                            <img src="{{ asset('assets/img/icons/icon-black-home-9-feature-3.svg') }}" alt="icon-black-home-9-feature-3" width="98" height="104" />
                        </div>
                        <div class="flex-1">
                            <div class="mb-[15px] font-Syne text-2xl font-semibold -tracking-[0.5px] text-ColorOil">
                                Automatically track work hours
                            </div>
                            <p class="text-ColorOil/80">
                                It's a simple automatic time tracker that helps your
                                teams log billable hours for all projects.
                            </p>
                        </div>
                    </div>
                    <!-- Feature Items -->
                    <!-- Feature Items -->
                    <div class="relative flex h-full gap-x-5 bg-ColorAlmond py-10 after:absolute after:left-full after:top-1/2 after:z-10 after:hidden after:h-[100px] after:w-px after:-translate-y-1/2 after:bg-ColorOil even:after:hidden lg:p-10 lg:after:block lg:odd:after:block" data-jos_animation="fade-up">
                        <div class="h-auto w-16 md:w-20 lg:w-[98px]">
                            <img src="{{ asset('assets/img/icons/icon-black-home-9-feature-4.svg') }}" alt="icon-black-home-9-feature-4" width="98" height="92" />
                        </div>
                        <div class="flex-1">
                            <div class="mb-[15px] font-Syne text-2xl font-semibold -tracking-[0.5px] text-ColorOil">
                                Manage all your projects on time
                            </div>
                            <p class="text-ColorOil/80">
                                Project time management directly impacts the quality,
                                scope, and cost of a project, making it.
                            </p>
                        </div>
                    </div>
                    <!-- Feature Items -->
                </div>
                <!-- Feature List -->
            </div>
            <!-- Section Container -->
        </div>
        <!-- Section Space -->

        <!-- Section Background Shape -->
        <div class="absolute left-0 top-0 -z-10">
            <img src="{{ asset('assets/img/elements/home-9-bg-shape-1.svg') }}" alt="home-9-bg-shape-1" width="345" height="337" />
        </div>
    </div>
    <!-- Section Background -->
</section>
<!-- Feature Section End -->

<!-- Content Section Start -->
<section class="section-content">
    <div class="relative z-10">
        <!-- Section Space -->
        <div class="section-space-bottom">
            <!-- Section Container -->
            <div class="container-default">
                <div class="flex flex-col gap-y-20 lg:gap-y-[100px] xl:gap-y-[120px]">
                    <!-- Content Area Single -->
                    <div class="grid items-center gap-10 md:grid-cols-[1fr_minmax(0,_0.8fr)] lg:gap-32">
                        <!-- Content Block Left -->
                        <div class="jos order-1" data-jos_animation="fade-left">
                            <!-- Section Wrapper -->
                            <div>
                                <!-- Section Block -->
                                <div class="mb-5">
                                    <h2 class="font-Syne text-4xl font-semibold leading-[1.14] text-ColorOil lg:text-left lg:text-5xl xl:text-[56px]">
                                        Take effective control of your working hours
                                    </h2>
                                </div>
                                <!-- Section Block -->
                            </div>
                            <!-- Section Wrapper -->
                            <p class="text-ColorOil/80">
                                Masco automatically tracks time across projects. Instant
                                reports, seamless invoicing and payments, and
                                integrations with the tools your team loves.
                            </p>
                            <p class="text-ColorOil/80">
                                It offers unlimited users & projects but a free version
                                with limited features. This makes perfect for teams
                                simple time-tracking needs. It is available as a web app
                                and mobile app for Android and iOS.
                            </p>

                            <a href="#" class="inline-flex items-center gap-x-3 font-bold text-ColorLunarGreen">
                                Discover More
                                <span class="inline-flex h-5 w-5 items-center justify-center rounded-[50%] bg-ColorLunarGreen text-xs leading-none text-ColorCorn">
                                    <i class="fa-solid fa-chevron-right"></i>
                                </span>
                            </a>
                        </div>
                        <!-- Content Block Left -->
                        <!-- Content Block Right -->
                        <div class="jos relative order-2 mx-auto lg:mx-0 max-w-full sm:max-w-[70%] md:max-w-full" data-jos_animation="fade-right">
                            <!-- Content Image -->
                            <img src="{{ asset('assets/img/th-9/content-img-1.png') }}" alt="content-img-1" width="508" height="637" />
                        </div>
                        <!-- Content Block Right -->
                    </div>
                    <!-- Content Area Single -->
                </div>
            </div>
            <!-- Section Container -->
        </div>
        <!-- Section Space -->
    </div>
</section>
<!-- Content Section End -->

<!-- Process Tab Section Start -->
<section class="section-process-tab">
    <div class="mx-auto max-w-[1500px]">
        <!-- Content Block Background -->
        <div class="relative z-10 overflow-hidden rounded-xl bg-ColorLunarGreen md:rounded-3xl xl:rounded-[50px]">
            <!-- Section Space -->
            <div class="section-space">
                <!-- Section Container -->
                <div class="container-default">
                    <div class="mx-auto max-w-[1076px]">
                        <!-- Section Content Wrapper -->
                        <div class="jos mb-[50px]">
                            <!-- Section Content Block -->
                            <div class="mx-auto max-w-[856px]">
                                <h2 class="mb-5 text-center font-Syne text-4xl font-semibold leading-[1.14] -tracking-[1px] text-white lg:text-5xl xl:text-[56px]">
                                    Flexible tools for all types of organized projects &
                                    reports
                                </h2>
                            </div>
                            <!-- Section Content Block -->
                        </div>
                        <!-- Section Content Wrapper -->

                        <!-- Process Tab Area -->
                        <!-- Tab Buttons -->
                        <div class="jos mb-10 flex flex-wrap justify-center gap-x-6 lg:mb-[60px]">
                            <button class="process-tab active tab-button" data-tab="time-tracking">
                                <span class="relative flex h-6 w-auto items-center justify-center">
                                    <img src="{{ asset('assets/img/icons/home-9-tab-icon-1.svg') }}" alt="home-9-tab-icon-1" width="21" height="24" />
                                    <img src="{{ asset('assets/img/icons/home-9-tab-icon-1-active.svg') }}" alt="home-9-tab-icon-1" width="21" height="24" class="absolute" />
                                </span>
                                Time Tracking
                            </button>
                            <button class="process-tab tab-button flex items-center justify-center gap-[10px] rounded-[50px] px-6 py-3 font-bold" data-tab="project-management">
                                <span class="relative flex h-6 w-auto items-center justify-center">
                                    <img src="{{ asset('assets/img/icons/home-9-tab-icon-2.svg') }}" alt="home-9-tab-icon-2" width="21" height="24" />
                                    <img src="{{ asset('assets/img/icons/home-9-tab-icon-2-active.svg') }}" alt="home-9-tab-icon-2" width="21" height="24" class="absolute" />
                                </span>
                                Project Management
                            </button>
                            <button class="process-tab tab-button flex items-center justify-center gap-[10px] rounded-[50px] px-6 py-3 font-bold" data-tab="team-management">
                                <span class="relative flex h-6 w-auto items-center justify-center">
                                    <img src="{{ asset('assets/img/icons/home-9-tab-icon-3.svg') }}" alt="home-9-tab-icon-3" width="24" height="24" />
                                    <img src="{{ asset('assets/img/icons/home-9-tab-icon-3-active.svg') }}" alt="home-9-tab-icon-3" width="24" height="24" class="absolute" />
                                </span>
                                Team Management
                            </button>
                            <button class="process-tab tab-button flex items-center justify-center gap-[10px] rounded-[50px] px-6 py-3 font-bold" data-tab="reporting-analysis">
                                <span class="relative flex h-6 w-auto items-center justify-center">
                                    <img src="{{ asset('assets/img/icons/home-9-tab-icon-4.svg') }}" alt="home-9-tab-icon-4" width="24" height="24" />
                                    <img src="{{ asset('assets/img/icons/home-9-tab-icon-4-active.svg') }}" alt="home-9-tab-icon-4" width="24" height="24" class="absolute" />
                                </span>
                                Reporting Analysis
                            </button>
                        </div>
                        <!-- Tab Buttons -->

                        <!-- Tab Content List -->
                        <div>
                            <!-- Tab Content Item -->
                            <div class="jos process-content tab-content" id="time-tracking">
                                <img src="{{ asset('assets/img/th-9/tab-img-1.png') }}" alt="tab-img-1" width="1076" height="809" class="h-auto w-full" />
                            </div>
                            <!-- Tab Content Item -->
                            <!-- Tab Content Item -->
                            <div class="jos process-content tab-content hidden" id="project-management">
                                <img src="{{ asset('assets/img/th-9/tab-img-2.png') }}" alt="tab-img-2" width="1076" height="718" class="h-auto w-full" />
                            </div>
                            <!-- Tab Content Item -->
                            <!-- Tab Content Item -->
                            <div class="jos process-content tab-content hidden" id="team-management">
                                <img src="{{ asset('assets/img/th-9/tab-img-1.png') }}" alt="tab-img-1" width="1076" height="809" class="h-auto w-full" />
                            </div>
                            <!-- Tab Content Item -->
                            <!-- Tab Content Item -->
                            <div class="jos process-content tab-content hidden" id="reporting-analysis">
                                <img src="{{ asset('assets/img/th-9/tab-img-2.png') }}" alt="tab-img-2" width="1076" height="718" class="h-auto w-full" />
                            </div>
                            <!-- Tab Content Item -->
                        </div>
                        <!-- Tab Content List -->
                        <!-- Process Tab Area -->
                    </div>
                </div>
                <!-- Section Container -->
            </div>
            <!-- Section Space -->

            <!-- Background Image - 1 -->
            <div class="absolute right-0 top-0 -z-10">
                <img src="{{ asset('assets/img/elements/home-9-bg-shape-2.svg') }}" alt="home-9-bg-shape-1" width="345" height="337" />
            </div>
            <!-- Background Image - 2 -->
            <div class="absolute bottom-0 left-0 -z-10">
                <img src="{{ asset('assets/img/elements/home-9-bg-shape-3.svg') }}" alt="home-9-bg-shape-1" width="380" height="371" />
            </div>
        </div>
        <!-- Content Block Background -->
    </div>
</section>
<!-- Process Tab Section End -->

<!-- Content Section Start -->
<section class="section-content">
    <div class="relative z-10">
        <!-- Section Space -->
        <div class="section-space">
            <!-- Section Container -->
            <div class="container-default">
                <div class="flex flex-col gap-y-20 lg:gap-y-[100px] xl:gap-y-[120px]">
                    <!-- Content Area Single -->
                    <div class="grid items-center gap-10 md:grid-cols-[0.8fr_minmax(0,_1fr)] lg:gap-[118px]">
                        <!-- Content Block Left -->
                        <div class="jos order-1 md:order-2" data-jos_animation="fade-left">
                            <!-- Section Wrapper -->
                            <div>
                                <!-- Section Block -->
                                <div class="mb-5">
                                    <h2 class="font-Syne text-4xl font-semibold leading-[1.14] text-ColorOil lg:text-left lg:text-5xl xl:text-[56px]">
                                        Organize all schedules with simple processes
                                    </h2>
                                </div>
                                <!-- Section Block -->
                            </div>
                            <!-- Section Wrapper -->
                            <p class="text-ColorOil/80">
                                Masco is an intuitive, lightweight solution for tracking
                                hours and projects that is easy to adopt and use every
                                day, we've designed it to be super fast.
                            </p>

                            <ul class="flex flex-col gap-y-[30px]">
                                <li class="flex gap-x-4">
                                    <div class="flex h-10 w-10 items-center justify-center rounded-[50%] bg-ColorLunarGreen">
                                        <img src="{{ asset('assets/img/icons/icon-corn-download.svg') }}" alt="icon-corn-download" width="20" height="20" />
                                    </div>
                                    <div class="flex-1">
                                        <div class="mb-3 flex font-Syne text-2xl font-semibold leading-[1.25] text-ColorOil">
                                            Download for free via any device
                                        </div>
                                        <p class="text-ColorOil/80">
                                            Easily download the free Masco time tracking app
                                            for iOS, Android, macOS, Windows or Linux on any
                                            device anytime.
                                        </p>
                                    </div>
                                </li>
                                <li class="flex gap-x-4">
                                    <div class="flex h-10 w-10 items-center justify-center rounded-[50%] bg-ColorLunarGreen">
                                        <img src="{{ asset('assets/img/icons/icon-corn-pencil-alt.svg') }}" alt="icon-corn-download" width="20" height="20" />
                                    </div>
                                    <div class="flex-1">
                                        <div class="mb-3 flex font-Syne text-2xl font-semibold leading-[1.25] text-ColorOil">
                                            Create your account in minutes
                                        </div>
                                        <p class="text-ColorOil/80">
                                            Create your account in minutes with the necessary
                                            information to ensure the security of your
                                            information.
                                        </p>
                                    </div>
                                </li>
                                <li class="flex gap-x-4">
                                    <div class="flex h-10 w-10 items-center justify-center rounded-[50%] bg-ColorLunarGreen">
                                        <img src="{{ asset('assets/img/icons/icon-corn-cursor-click.svg') }}" alt="icon-corn-download" width="20" height="20" />
                                    </div>
                                    <div class="flex-1">
                                        <div class="mb-3 flex font-Syne text-2xl font-semibold leading-[1.25] text-ColorOil">
                                            Start tracking time with just one click
                                        </div>
                                        <p class="text-ColorOil/80">
                                            Track time manually using a timer or automatically
                                            for scheduled tasks and to-do lists & also tracked
                                            hours, budgets, and costs.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- Content Block Left -->
                        <!-- Content Block Right -->
                        <div class="jos relative order-2 md:order-1 mx-auto lg:mx-0 max-w-full sm:max-w-[70%] md:max-w-full" data-jos_animation="fade-right">
                            <!-- Content Image -->
                            <img src="{{ asset('assets/img/th-9/content-img-2.png') }}" alt="content-img-2" width="508" height="681" />
                        </div>
                        <!-- Content Block Right -->
                    </div>
                    <!-- Content Area Single -->
                </div>
            </div>
            <!-- Section Container -->
        </div>
        <!-- Section Space -->
    </div>
</section>
<!-- Content Section End -->

<!-- Pricing Section Start -->
<section class="section-pricing">
    <!-- Section Space -->
    <div class="section-space-bottom">
        <!-- Section Container -->
        <div class="container-default">
            <!-- Section Content Wrapper -->
            <div class="jos mb-[60px] xl:mb-20">
                <!-- Section Content Block -->
                <div class="mx-auto max-w-[636px]">
                    <h2 class="mb-5 text-center font-Syne text-4xl font-semibold leading-[1.14] -tracking-[1px] text-ColorOil lg:text-5xl xl:text-[56px]">
                        Perfect fit regardless of your specific budget
                    </h2>
                </div>
                <!-- Section Content Block -->
            </div>
            <!-- Section Content Wrapper -->
            <!-- Pricing Area -->
            <div>
                <!-- Pricing Button Block -->
                <div class="relative my-[50px] flex flex-row items-center justify-center gap-6">
                    <span class="font-bold">Per Month</span>

                    <!-- Toggle Button -->
                    <label for="toggle" class="flex cursor-pointer items-center">
                        <!-- toggle -->
                        <span class="relative h-[35px] w-[70px] rounded-[35px] bg-ColorLunarGreen">
                            <!-- hidden input -->
                            <input id="toggle" type="checkbox" class="hidden" onclick="toggleSwitch()" />
                            <!-- dot -->
                            <span class="toggle_dot absolute h-[35px] w-[35px] rounded-full bg-ColorCorn transition-all duration-300"></span>
                        </span>
                    </label>
                    <!-- Toggle Button -->
                    <span class="font-bold">Per Year</span>
                    <div class="absolute -top-8 left-1/2 translate-x-[140px]">
                        <img src="{{ asset('assets/img/elements/discount-text.svg') }}" alt="discount-text" width="109" height="76" />
                    </div>
                </div>
                <!-- Pricing Button Block -->

                <!-- Pricing List -->
                <div class="grid gap-x-6 gap-y-10 md:grid-cols-2 lg:grid-cols-3">
                    <!-- Pricing Item -->
                    <div class="jos" data-jos_animation="flip-left" data-jos_delay="0">
                        <div class="rounded-[10px] border-2 bg-[#E35523] p-7 xl:p-10 h-full">
                            <!-- Pricing Content Top -->
                            <div class="mb-10">
                                <span class="text-2xl font-bold leading-[1.33] -tracking-[0.5px] text-white">Personal</span>
                                <div class="month text-xl font-normal leading-[2.85] text-white">
                                    $<span class="text-[48px] font-bold leading-[1.3] xl:text-[58px]">3</span>/Per month
                                </div>
                                <div class="annual hidden text-xl font-normal leading-[2.85] text-white">
                                    $<span class="text-[48px] font-bold leading-[1.3] xl:text-[58px]">30</span>/Yearly
                                </div>
                            </div>
                            <!-- Pricing Content Top -->
                            <!-- Pricing Data list -->
                            <ul class="text-xl font-semibold text-white">
                                <li class="list-inside list-disc">Time tracking</li>
                                <li class="list-inside list-disc">
                                    Unlimited projects and clients
                                </li>
                                <li class="list-inside list-disc">Reporting</li>
                                <li class="list-inside list-disc">
                                    Timer button in 50+ web apps
                                </li>
                            </ul>
                            <!-- Pricing Data list -->
                            <div class="mt-10 flex justify-center">
                                <button class="btn is-lunar-green is-rounded is-large group w-full border-2">
                                    30-Day Free Trial
                                </button>
                            </div>
                            <span class="mt-3 block text-center text-base leading-none text-white/80">No credit card required*</span>
                        </div>
                    </div>
                    <!-- Pricing Item -->
                    <!-- Pricing Item -->
                    <div class="jos" data-jos_animation="flip-left" data-jos_delay="0.3">
                        <div class="rounded-[10px] border-2 bg-ColorLunarGreen p-7 xl:p-10 h-full">
                            <!-- Pricing Content Top -->
                            <div class="mb-10">
                                <span class="text-2xl font-bold leading-[1.33] -tracking-[0.5px] text-white">Small Business</span>
                                <div class="month text-xl font-normal leading-[2.85] text-white">
                                    $<span class="text-[48px] font-bold leading-[1.3] xl:text-[58px]">20</span>/Per month
                                </div>
                                <div class="annual hidden text-xl font-normal leading-[2.85] text-white">
                                    $<span class="text-[48px] font-bold leading-[1.3] xl:text-[58px]">220</span>/Yearly
                                </div>
                            </div>
                            <!-- Pricing Content Top -->
                            <!-- Pricing Data list -->
                            <ul class="text-xl font-semibold text-white">
                                <li class="list-inside list-disc">
                                    Apps and sites usage reports
                                </li>
                                <li class="list-inside list-disc">
                                    Screenshots capturing
                                </li>
                                <li class="list-inside list-disc">
                                    Payroll for employees
                                </li>
                                <li class="list-inside list-disc">
                                    Time Off calendar & schedule
                                </li>
                            </ul>
                            <!-- Pricing Data list -->
                            <div class="mt-10 flex justify-center">
                                <button class="btn is-yellow is-rounded is-large group w-full border-2">
                                    30-Day Free Trial
                                </button>
                            </div>
                            <span class="mt-3 block text-center text-base leading-none text-white/80">No credit card required*</span>
                        </div>
                    </div>
                    <!-- Pricing Item -->
                    <!-- Pricing Item -->
                    <div class="jos" data-jos_animation="flip-left" data-jos_delay="0.6">
                        <div class="rounded-[10px] border-2 bg-ColorCorn p-7 xl:p-10 h-full">
                            <!-- Pricing Content Top -->
                            <div class="mb-10">
                                <span class="text-2xl font-bold leading-[1.33] -tracking-[0.5px] text-white">Enterprise Team</span>
                                <div class="month text-xl font-normal leading-[2.85] text-white">
                                    $<span class="text-[48px] font-bold leading-[1.3] xl:text-[58px]">49</span>/Per month
                                </div>
                                <div class="annual hidden text-xl font-normal leading-[2.85] text-white">
                                    $<span class="text-[48px] font-bold leading-[1.3] xl:text-[58px]">500</span>/Yearly
                                </div>
                            </div>
                            <!-- Pricing Content Top -->
                            <!-- Pricing Data list -->
                            <ul class="text-xl font-semibold text-white">
                                <li class="list-inside list-disc">
                                    Calendar integrations
                                </li>
                                <li class="list-inside list-disc">
                                    Billable rates & money tracking
                                </li>
                                <li class="list-inside list-disc">
                                    Task management & budgeting
                                </li>
                                <li class="list-inside list-disc">
                                    Activity levels for employees
                                </li>
                            </ul>
                            <!-- Pricing Data list -->
                            <div class="mt-10 flex justify-center">
                                <button class="btn is-lunar-green is-rounded is-large group w-full border-2">
                                    30-Day Free Trial
                                </button>
                            </div>
                            <span class="mt-3 block text-center text-base leading-none text-white/80">No credit card required*</span>
                        </div>
                    </div>
                    <!-- Pricing Item -->
                </div>
                <!-- Pricing List -->
            </div>
            <!-- Pricing Area -->
        </div>
        <!-- Section Container -->
    </div>
    <!-- Section Space -->
</section>
<!-- Pricing Section End -->

<!-- Content Section Start -->
<section class="section-content">
    <!-- Section Space -->
    <div class="section-space-bottom">
        <!-- Section Container -->
        <div class="container-default">
            <div class="flex flex-col gap-y-20 lg:gap-y-[100px] xl:gap-y-[120px]">
                <!-- Content Area Single -->
                <div class="grid items-center gap-10 lg:grid-cols-[1fr_minmax(0,_0.8fr)] lg:gap-20">
                    <!-- Content Block Left -->
                    <div class="jos order-1" data-jos_animation="fade-left">
                        <!-- Section Wrapper -->
                        <div>
                            <!-- Section Block -->
                            <div class="mb-8 lg:mb-[50px]">
                                <h2 class="font-Syne text-4xl font-semibold leading-[1.14] text-ColorOil lg:text-left lg:text-5xl xl:text-[56px]">
                                    Integrate time tracker with 70+ popular tools
                                </h2>
                            </div>
                            <!-- Section Block -->
                        </div>
                        <!-- Logo List -->
                        <div class="grid grid-cols-2 gap-px overflow-hidden rounded-[10px] border border-ColorOil bg-ColorOil sm:grid-cols-3 xl:grid-cols-4">
                            <!-- Logo Item -->
                            <div class="flex items-center justify-center bg-ColorAlmond p-[30px]">
                                <img src="{{ asset('assets/img/icons/icon-colorful-wide-spotify.svg') }}" alt="icon-colorful-wide-spotify" width="155" height="35" />
                            </div>
                            <!-- Logo Item -->
                            <!-- Logo Item -->
                            <div class="flex items-center justify-center bg-ColorAlmond p-[30px]">
                                <img src="{{ asset('assets/img/icons/icon-colorful-wide-zoom.svg') }}" alt="icon-colorful-wide-zoom" width="96" height="22" />
                            </div>
                            <!-- Logo Item -->
                            <!-- Logo Item -->
                            <div class="flex items-center justify-center bg-ColorAlmond p-[30px]">
                                <img src="{{ asset('assets/img/icons/icon-colorful-wide-slack.svg') }}" alt="icon-colorful-wide-slack" width="105" height="27" />
                            </div>
                            <!-- Logo Item -->
                            <!-- Logo Item -->
                            <div class="flex items-center justify-center bg-ColorAlmond p-[30px]">
                                <img src="{{ asset('assets/img/icons/icon-colorful-wide-hotjar.svg') }}" alt="icon-colorful-wide-hotjar" width="90" height="43" />
                            </div>
                            <!-- Logo Item -->
                            <!-- Logo Item -->
                            <div class="flex items-center justify-center bg-ColorAlmond p-[30px]">
                                <img src="{{ asset('assets/img/icons/icon-colorful-wide-hubspot.svg') }}" alt="icon-colorful-wide-hubspot" width="102" height="30" />
                            </div>
                            <!-- Logo Item -->
                            <!-- Logo Item -->
                            <div class="flex items-center justify-center bg-ColorAlmond p-[30px]">
                                <img src="{{ asset('assets/img/icons/icon-colorful-wide-shopify.svg') }}" alt="icon-colorful-wide-shopify" width="113" height="33" />
                            </div>
                            <!-- Logo Item -->
                            <!-- Logo Item -->
                            <div class="flex items-center justify-center bg-ColorAlmond p-[30px]">
                                <img src="{{ asset('assets/img/icons/icon-colorful-wide-whatsapp.svg') }}" alt="icon-colorful-wide-whatsapp" width="124" height="38" />
                            </div>
                            <!-- Logo Item -->
                            <!-- Logo Item -->
                            <div class="flex items-center justify-center bg-ColorAlmond p-[30px]">
                                <img src="{{ asset('assets/img/icons/icon-colorful-wide-zalando.svg') }}" alt="icon-colorful-wide-zalando" width="113" height="33" />
                            </div>
                            <!-- Logo Item -->
                            <!-- Logo Item -->
                            <div class="flex items-center justify-center bg-ColorAlmond p-[30px]">
                                <img src="{{ asset('assets/img/icons/icon-colorful-wide-gitlab.svg') }}" alt="icon-colorful-wide-gitlab" width="99" height="31" />
                            </div>
                            <!-- Logo Item -->
                            <!-- Logo Item -->
                            <div class="flex items-center justify-center bg-ColorAlmond p-[30px]">
                                <img src="{{ asset('assets/img/icons/icon-colorful-wide-zendesk.svg') }}" alt="icon-colorful-wide-zendesk" width="58" height="41" />
                            </div>
                            <!-- Logo Item -->
                            <!-- Logo Item -->
                            <div class="flex items-center justify-center bg-ColorAlmond p-[30px]">
                                <img src="{{ asset('assets/img/icons/icon-colorful-wide-asana.svg') }}" alt="icon-colorful-wide-asana" width="62" height="41" />
                            </div>
                            <!-- Logo Item -->
                            <!-- Logo Item -->
                            <div class="flex items-center justify-center bg-ColorAlmond p-[30px]">
                                <img src="{{ asset('assets/img/icons/icon-colorful-wide-jira.svg') }}" alt="icon-colorful-wide-jira" width="131" height="18" />
                            </div>
                            <!-- Logo Item -->
                        </div>
                        <!-- Logo List -->
                    </div>
                    <!-- Content Block Left -->
                    <!-- Content Block Right -->
                    <div class="jos relative order-2" data-jos_animation="fade-right">
                        <div class="mb-10">
                            <img src="{{ asset('assets/img/icons/icon-orange-block-quote.svg') }}" alt="icon-orange-block-quote" width="91" height="60" />
                        </div>
                        <blockquote class="mb-10 text-2xl font-semibold -tracking-[0.5px] text-ColorOil">
                            "My hours are great for keeping track of time spent on
                            different projects. Masco makes my mandatory timesheets at
                            the end of the week much faster."
                        </blockquote>

                        <div class="mb-10 flex items-center gap-4">
                            <div class="h-[60px] w-[60px] overflow-hidden rounded-[50%]">
                                <img src="{{ asset('assets/img/th-9/testimonial-img.png') }}" alt="testimonial-img" width="60" height="60" />
                            </div>
                            <div>
                                <div class="text-xl font-semibold text-ColorOil">
                                    Dominika Smith
                                </div>
                                <span class="text-ColorOil">Senior Digital Marketing Manager
                                </span>
                            </div>
                        </div>

                        <a href="#" class="inline-flex items-center gap-x-3 font-bold text-ColorLunarGreen">
                            Read All Reviews
                            <span class="inline-flex h-5 w-5 items-center justify-center rounded-[50%] bg-ColorLunarGreen text-xs leading-none text-ColorCorn">
                                <i class="fa-solid fa-chevron-right"></i>
                            </span>
                        </a>
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

<!-- FAQ Section Start -->
<section class="section-faq">
    <div class="relative z-10 overflow-hidden">
        <!-- Section Space -->
        <div class="section-space-bottom">
            <!-- Section Container -->
            <div class="container-default">
                <!-- Section Content Wrapper -->
                <div class="jos mb-[60px] xl:mb-20">
                    <!-- Section Content Block -->
                    <div class="mx-auto max-w-[625px]">
                        <h2 class="mb-5 text-center font-Syne text-4xl font-semibold leading-[1.14] -tracking-[1px] text-ColorOil lg:text-5xl xl:text-[56px]">
                            Some FAQs about our time track software
                        </h2>
                    </div>
                    <!-- Section Content Block -->
                </div>
                <!-- Section Content Wrapper -->
                <!-- FAQ Area -->
                <div class="jos">
                    <!-- Accordion List -->
                    <ul>
                        <!-- Accordion Item -->
                        <li class="accordion-item active overflow-hidden border-b border-ColorBlack first:pt-0 last:pb-0 py-[30px] last:border-b-0">
                            <!-- Accordion Header -->
                            <div class="accordion-header flex justify-between gap-6 text-xl font-semibold">
                                <button class="flex-1 text-left font-Syne text-xl font-semibold text-ColorOil">
                                    Q. What is the main purpose for using time tracking?
                                </button>
                                <div class="accordion-icon-1 relative flex h-5 w-5 items-center justify-center rounded-[50%] bg-ColorLunarGreen">
                                    <span class="inline-block h-0.5 w-[10px] rounded-sm bg-ColorCorn"></span>
                                    <span class="absolute inline-block h-[10px] w-0.5 rotate-0 rounded-sm bg-ColorCorn"></span>
                                </div>
                            </div>
                            <!-- Accordion Header -->
                            <!-- Accordion Body -->
                            <div class="accordion-body max-w-[996px] opacity-80">
                                <p class="pt-5 text-ColorOil/80">
                                    Time tracking allows you to make more intelligent
                                    decisions about how you price and run projects, how
                                    you schedule your team, and even how you spend your
                                    day. In short, employee time tracking software is a
                                    computer program.
                                </p>
                            </div>
                            <!-- Accordion Body -->
                        </li>
                        <!-- Accordion Item -->
                        <!-- Accordion Item -->
                        <li class="accordion-item overflow-hidden border-b border-ColorBlack first:pt-0 last:pb-0 py-[30px] last:border-b-0">
                            <!-- Accordion Header -->
                            <div class="accordion-header flex justify-between gap-6 text-xl font-semibold">
                                <button class="flex-1 text-left font-Syne text-xl font-semibold text-ColorOil">
                                    Q. What services does a digital agency provide?
                                </button>
                                <div class="accordion-icon-1 relative flex h-5 w-5 items-center justify-center rounded-[50%] bg-ColorLunarGreen">
                                    <span class="inline-block h-0.5 w-[10px] rounded-sm bg-ColorCorn"></span>
                                    <span class="absolute inline-block h-[10px] w-0.5 rotate-0 rounded-sm bg-ColorCorn"></span>
                                </div>
                            </div>
                            <!-- Accordion Header -->
                            <!-- Accordion Body -->
                            <div class="accordion-body max-w-[996px] opacity-80">
                                <p class="pt-5 text-ColorOil/80">
                                    Time tracking allows you to make more intelligent
                                    decisions about how you price and run projects, how
                                    you schedule your team, and even how you spend your
                                    day. In short, employee time tracking software is a
                                    computer program.
                                </p>
                            </div>
                            <!-- Accordion Body -->
                        </li>
                        <!-- Accordion Item -->
                        <!-- Accordion Item -->
                        <li class="accordion-item overflow-hidden border-b border-ColorBlack first:pt-0 last:pb-0 py-[30px] last:border-b-0">
                            <!-- Accordion Header -->
                            <div class="accordion-header flex justify-between gap-6 text-xl font-semibold">
                                <button class="flex-1 text-left font-Syne text-xl font-semibold text-ColorOil">
                                    Q. Hiring a digital agency vs hiring in-house: What is
                                    the difference?
                                </button>
                                <div class="accordion-icon-1 relative flex h-5 w-5 items-center justify-center rounded-[50%] bg-ColorLunarGreen">
                                    <span class="inline-block h-0.5 w-[10px] rounded-sm bg-ColorCorn"></span>
                                    <span class="absolute inline-block h-[10px] w-0.5 rotate-0 rounded-sm bg-ColorCorn"></span>
                                </div>
                            </div>
                            <!-- Accordion Header -->
                            <!-- Accordion Body -->
                            <div class="accordion-body max-w-[996px] opacity-80">
                                <p class="pt-5 text-ColorOil/80">
                                    Time tracking allows you to make more intelligent
                                    decisions about how you price and run projects, how
                                    you schedule your team, and even how you spend your
                                    day. In short, employee time tracking software is a
                                    computer program.
                                </p>
                            </div>
                            <!-- Accordion Body -->
                        </li>
                        <!-- Accordion Item -->
                        <!-- Accordion Item -->
                        <li class="accordion-item overflow-hidden border-b border-ColorBlack first:pt-0 last:pb-0 py-[30px] last:border-b-0">
                            <!-- Accordion Header -->
                            <div class="accordion-header flex justify-between gap-6 text-xl font-semibold">
                                <button class="flex-1 text-left font-Syne text-xl font-semibold text-ColorOil">
                                    Q. What questions should you ask when interviewing a
                                    digital agency?
                                </button>
                                <div class="accordion-icon-1 relative flex h-5 w-5 items-center justify-center rounded-[50%] bg-ColorLunarGreen">
                                    <span class="inline-block h-0.5 w-[10px] rounded-sm bg-ColorCorn"></span>
                                    <span class="absolute inline-block h-[10px] w-0.5 rotate-0 rounded-sm bg-ColorCorn"></span>
                                </div>
                            </div>
                            <!-- Accordion Header -->
                            <!-- Accordion Body -->
                            <div class="accordion-body max-w-[996px] opacity-80">
                                <p class="pt-5 text-ColorOil/80">
                                    Time tracking allows you to make more intelligent
                                    decisions about how you price and run projects, how
                                    you schedule your team, and even how you spend your
                                    day. In short, employee time tracking software is a
                                    computer program.
                                </p>
                            </div>
                            <!-- Accordion Body -->
                        </li>
                        <!-- Accordion Item -->
                        <!-- Accordion Item -->
                        <li class="accordion-item overflow-hidden border-b border-ColorBlack first:pt-0 last:pb-0 py-[30px] last:border-b-0">
                            <!-- Accordion Header -->
                            <div class="accordion-header flex justify-between gap-6 text-xl font-semibold">
                                <button class="flex-1 text-left font-Syne text-xl font-semibold text-ColorOil">
                                    Q. How do digital agencies charge for their services?
                                </button>
                                <div class="accordion-icon-1 relative flex h-5 w-5 items-center justify-center rounded-[50%] bg-ColorLunarGreen">
                                    <span class="inline-block h-0.5 w-[10px] rounded-sm bg-ColorCorn"></span>
                                    <span class="absolute inline-block h-[10px] w-0.5 rotate-0 rounded-sm bg-ColorCorn"></span>
                                </div>
                            </div>
                            <!-- Accordion Header -->
                            <!-- Accordion Body -->
                            <div class="accordion-body max-w-[996px] opacity-80">
                                <p class="pt-5 text-ColorOil/80">
                                    Time tracking allows you to make more intelligent
                                    decisions about how you price and run projects, how
                                    you schedule your team, and even how you spend your
                                    day. In short, employee time tracking software is a
                                    computer program.
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
    </div>
</section>
<!-- FAQ Section End -->

<!-- CTA Section Start -->
<section class="section-cta">
    <!-- Section Background -->
    <div class="relative z-10 bg-ColorCorn">
        <!-- Section Space -->
        <div class="section-space">
            <!-- Section Container -->
            <div class="container-default">
                <div class="jos grid grid-cols-1 gap-10 md:grid-cols-2 lg:grid-cols-[1fr_minmax(0,_0.5fr)] lg:gap-20 xl:grid-cols-[1fr_minmax(0,_0.6fr)] xl:gap-28 xxl:gap-[153px]">
                    <!-- Container Block Left -->
                    <div>
                        <!-- Section Content Wrapper -->
                        <div>
                            <!-- Section Content Block -->
                            <div>
                                <h2 class="mb-5 font-Syne text-4xl font-semibold leading-[1.14] -tracking-[1px] text-ColorOil lg:text-5xl xl:text-[56px]">
                                    Ready to start tracking your time today?
                                </h2>
                            </div>
                            <!-- Section Content Block -->
                        </div>
                        <!-- Section Content Wrapper -->
                        <p class="max-w-[576px] text-ColorOil/80">
                            If you download Masco time-tracker for employee monitoring
                            and project management software today, you'll get up to
                            14% off.
                        </p>
                    </div>
                    <!-- Container Block Left -->
                    <!-- Container Block Right -->
                    <div class="flex items-center gap-5">
                        <a href="#">
                            <img src="{{ asset('assets/img/icons/icon-apple-app-store.svg') }}" alt="icon-apple-app-store" width="166" height="54" />
                        </a>
                        <a href="#">
                            <img src="{{ asset('assets/img/icons/icon-google-play-store.svg') }}" alt="icon-google-play-store" width="166" height="57" />
                        </a>
                    </div>
                    <!-- Container Block Right -->
                </div>
            </div>
            <!-- Section Container -->
        </div>
        <!-- Section Space -->

        <!-- Section Background Shape - 1 -->
        <div class="absolute bottom-0 right-0 -z-10">
            <img src="{{ asset('assets/img/elements/home-9-bg-shape-4.svg') }}" alt="home-9-bg-shape-4" width="303" height="199" />
        </div>
    </div>
    <!-- Section Background -->
</section>
<!-- CTA Section End -->

@endsection



@section('footer')
<footer class="section-footer">
    <div class="bg-ColorOil">
        <!-- Footer Area Center -->
        <div class="text-white">
            <!-- Footer Center Spacing -->
            <div class="py-[60px] lg:py-20 xl:py-[100px]">
                <!-- Section Container -->
                <div class="container-default">
                    <!-- Footer Widget List -->
                    <div class="grid gap-x-16 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-24 xxl:gap-x-[134px]">
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
                            <img src="{{ asset('assets/img/logo-yellow-light.png') }}" alt="Masco" width="109" height="24" />
                        </a>
                        <div class="text-center text-[#FDFBF9]/80">
                            &copy; Copyright 2024, All Rights Reserved by PixcelsThemes
                        </div>
                        <!-- Footer Social Link -->
                        <div class="flex flex-wrap gap-5">
                            <a href="https://twitter.com" target="_blank" rel="noopener noreferrer" class="flex h-[30px] w-[30px] items-center justify-center rounded-[50%] bg-white/10 text-sm text-white transition-all duration-300 hover:bg-ColorCorn hover:text-ColorLunarGreen" aria-label="twitter">
                                <i class="fa-brands fa-x-twitter"></i>
                            </a>
                            <a href="https://www.facebook.com/" target="_blank" rel="noopener noreferrer" class="flex h-[30px] w-[30px] items-center justify-center rounded-[50%] bg-white/10 text-sm text-white transition-all duration-300 hover:bg-ColorCorn hover:text-ColorLunarGreen" aria-label="facebook">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                            <a href="https://www.instagram.com/" target="_blank" rel="noopener noreferrer" class="flex h-[30px] w-[30px] items-center justify-center rounded-[50%] bg-white/10 text-sm text-white transition-all duration-300 hover:bg-ColorCorn hover:text-ColorLunarGreen" aria-label="instagram">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                            <a href="https://www.github.com/" target="_blank" rel="noopener noreferrer" class="flex h-[30px] w-[30px] items-center justify-center rounded-[50%] bg-white/10 text-sm text-white transition-all duration-300 hover:bg-ColorCorn hover:text-ColorLunarGreen" aria-label="github">
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