@extends('layout.layout2')

@section('headerLogo')
<img src="{{ asset('assets/img/logo-full-dark.png') }}" alt="Masco" width="109" height="24" />
@endsection



@section('headButtons')

<div class="flex items-center gap-6">
    <a href="{{ url('login') }}" class="btn-text hidden hover:text-ColorPurple sm:inline-block">Login</a>
    <a href="#" class="group relative z-10 hidden sm:inline-block">
        <div class="btn is-rounded is-dark">Sign up free</div>
        <div class="is-rounded absolute inset-0 -z-10 translate-x-[5px] translate-y-[5px] border border-ColorDark bg-ColorPurple transition-all duration-300 ease-linear group-hover:translate-x-0 group-hover:translate-y-0"></div>
    </a>
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
        <div class="bg-ColorOffWhite">
            <!-- Hero Space -->
            <div class="pb-[60px] pt-[105px] sm:pt-[145px] md:pb-20 lg:pb-[100px] lg:pt-[185px]">
                <!-- Hero Container -->
                <div class="container-default">
                    <!-- Hero Area -->
                    <div class="grid items-center gap-14 md:grid-cols-[1fr_minmax(0,_0.9fr)]">
                        <!-- Hero Content Block -->
                        <div class="jos" data-jos_animation="fade-left">
                            <span class="text-darkborder-ColorDark mb-[30px] inline-block rounded-[50px] border border-ColorDark bg-white px-[18.5px] py-[5.5px] text-base font-semibold">Top-Rated Website Hosting Provider</span>
                            <h1 class="mb-6 font-Cabin font-bold leading-none -tracking-[1px] text-ColorDark xl:text-[86px] xxl:text-[100px]">
                                Fast & reliable web hosting for your website
                            </h1>
                            <p class="mb-8 max-w-[607px] lg:mb-[50px]">
                                Save time and money with a simple and reliable cloud
                                hosting trusted by 90,000+ agencies, developers, and
                                businesses who demand high performance from their
                                websites!
                            </p>
                            <a href="#" class="group relative z-10 inline-block">
                                <div class="btn is-large is-rounded is-dark">
                                    Start a 10-day free trial
                                </div>
                                <div class="is-rounded absolute inset-0 -z-10 translate-x-[5px] translate-y-[5px] border border-ColorDark bg-ColorPurple transition-all duration-300 ease-linear group-hover:translate-x-0 group-hover:translate-y-0"></div>
                            </a>
                        </div>
                        <!-- Hero Content Block -->
                        <!-- Hero Image Block -->
                        <div class="jos" data-jos_animation="fade-right">
                            <img src="{{ asset('assets/img/th-7/hero-img.png') }}" alt="hero-img" width="584" height="575" class="h-auto w-full" />
                        </div>
                        <!-- Hero Image Block -->
                    </div>
                    <!-- Hero Area -->
                </div>
                <!-- Hero Container -->
            </div>
            <!-- Hero Space -->
        </div>
        <!-- Section Background -->
    </section>
    <!-- Hero Section End -->

    <!-- Fact Section Start -->
    <div class="section-fact">
        <!-- Section Space -->
        <div class="section-space">
            <!-- Section Container -->
            <div class="container-default">
                <div class="grid items-center sm:grid-cols-[1fr_minmax(0,_0.4fr)] lg:grid-cols-[1fr_minmax(0,_0.2fr)] lg:gap-8 xl:gap-11">
                    <!-- Fact List -->
                    <div class="grid gap-y-5 lg:grid-cols-3">
                        <!-- Fact Item -->
                        <div class="jos relative flex gap-x-6 p-0 after:absolute after:right-0 after:top-1/2 after:hidden after:h-20 after:w-[2px] after:-translate-y-1/2 after:bg-ColorDark/10 first:pl-0 last:pr-0 last:after:hidden lg:px-[30px] lg:after:inline-block" data-jos_delay="0">
                            <div class="h-10 w-10">
                                <img src="{{ asset('assets/img/icons/icon-6-arm-thin-star-yellow.svg') }}" alt="icon-6-arm-thin-star-yellow" width="40" height="40" />
                            </div>
                            <div class="flex-1">
                                <div class="mb-4 text-2xl font-semibold text-ColorDark">
                                    Loyalty to clients
                                </div>
                                <p>97% Of our customers would recommend us to a friend</p>
                            </div>
                        </div>
                        <!-- Fact Item -->
                        <!-- Fact Item -->
                        <div class="jos relative flex gap-x-6 p-0 after:absolute after:right-0 after:top-1/2 after:hidden after:h-20 after:w-[2px] after:-translate-y-1/2 after:bg-ColorDark/10 first:pl-0 last:pr-0 last:after:hidden lg:px-[30px] lg:after:inline-block" data-jos_delay="0.3">
                            <div class="h-10 w-10">
                                <img src="{{ asset('assets/img/icons/icon-6-arm-thin-star-purple.svg') }}" alt="icon-6-arm-thin-star-purple" width="40" height="40" />
                            </div>
                            <div class="flex-1">
                                <div class="mb-4 text-2xl font-semibold text-ColorDark">
                                    Service response
                                </div>
                                <p>110k+ Active services helping our clients succeed</p>
                            </div>
                        </div>
                        <!-- Fact Item -->
                        <!-- Fact Item -->
                        <div class="jos relative flex gap-x-6 p-0 after:absolute after:right-0 after:top-1/2 after:hidden after:h-20 after:w-[2px] after:-translate-y-1/2 after:bg-ColorDark/10 first:pl-0 last:pr-0 last:after:hidden lg:px-[30px] lg:after:inline-block" data-jos_delay="0.6">
                            <div class="h-10 w-10">
                                <img src="{{ asset('assets/img/icons/icon-6-arm-thin-star-light-blue.svg') }}" alt="icon-6-arm-thin-star-light-blue" width="40" height="40" />
                            </div>
                            <div class="flex-1">
                                <div class="mb-4 text-2xl font-semibold text-ColorDark">
                                    Global acceptance
                                </div>
                                <p>
                                    250 Countries/territories where people choose our
                                    hosting
                                </p>
                            </div>
                        </div>
                        <!-- Fact Item -->
                    </div>
                    <!-- Fact List -->

                    <!-- Text Circle -->
                    <div class="relative hidden items-center justify-center sm:flex">
                        <img src="{{ asset('assets/img/th-7/text-circle-1.png') }}" alt="text-circle-1" width="152" height="152" class="rotate-360 absolute h-[152px] w-[152px]" />
                        <img src="{{ asset('assets/img/icons/icon-black-down-arrow.svg') }}" alt="icon-black-down-arrow" width="54" height="50" class="absolute" />
                    </div>
                    <!-- Text Circle -->
                </div>
            </div>
            <!-- Section Container -->
        </div>
        <!-- Section Space -->
    </div>
    <!-- Fact Section End -->

    <!-- Content Section Start -->
    <section class="section-content">
        <!-- Section Background -->
        <div class="bg-ColorOffWhite">
            <!-- Section Space -->
            <div class="section-space">
                <!-- Section Container -->
                <div class="container-default">
                    <div class="grid items-center gap-10 md:grid-cols-2 lg:grid-cols-[0.9fr_minmax(0,_1fr)] lg:gap-20 xl:gap-28">
                        <!-- Content Block Left -->
                        <div class="jos order-1 lg:order-2" data-jos_animation="fade-right">
                            <!-- Section Wrapper -->
                            <div>
                                <!-- Section Tag -->
                                <span class="text-darkborder-ColorDark mb-[30px] inline-block rounded-[50px] border border-ColorDark bg-[#FFED88] px-[18.5px] py-[5.5px] text-base font-semibold">
                                    Hosting For Every Website</span>
                                <!-- Section Tag -->
                                <!-- Section Block -->
                                <div class="mb-5">
                                    <h2 class="font-Cabin leading-[1.12] xl:text-[56px]">
                                        Secure web hosting that grows with your business
                                    </h2>
                                </div>
                                <!-- Section Block -->
                            </div>
                            <!-- Section Wrapper -->
                            <p>
                                Our web host provides the hosting technology and resources
                                required for your website's efficient and secure
                                operation.
                            </p>
                            <p>
                                We are responsible for keeping the servers running,
                                implementing security measures, and ensuring that data
                                such as text, photos, and other files are successfully
                                transferred to visitors' browsers.
                            </p>
                        </div>
                        <!-- Content Block Left -->
                        <!-- Content Block Right -->
                        <div class="jos order-2 lg:order-1" data-jos_animation="fade-left">
                            <img src="{{ asset('assets/img/th-7/content-image-1.png') }}" alt="content-image-1" width="564" height="450" class="h-auto w-full" />
                        </div>
                        <!-- Content Block Right -->
                    </div>
                </div>
                <!-- Section Container -->
            </div>
            <!-- Section Space -->
        </div>
        <!-- Section Background -->
    </section>
    <!-- Content Section End -->

    <!-- Service Section Start -->
    <section class="section-service" id="section-service">
        <!-- Section Background -->
        <div class="bg-ColorOffWhite">
            <!-- Section Space -->
            <div class="section-space-bottom">
                <!-- Section Container -->
                <div class="container-default">
                    <!-- Section Content Wrapper -->
                    <div class="jos mb-[60px] xl:mb-20">
                        <!-- Section Content Block -->
                        <div class="mx-auto flex max-w-[636px] flex-col items-center justify-center">
                            <!-- Section Tag -->
                            <span class="text-darkborder-ColorDark mb-[30px] inline-block rounded-[50px] border border-ColorDark bg-[#A2DFF5] px-[18.5px] py-[5.5px] text-base font-semibold">
                                Hosting For Every Website</span>
                            <!-- Section Tag -->
                            <h2 class="text-center font-Cabin font-bold leading-[1.12] text-ColorDark xl:text-[56px]">
                                All the hosting services your business needs
                            </h2>
                        </div>
                        <!-- Section Content Block -->
                    </div>
                    <!-- Section Content Wrapper -->

                    <!-- Service List -->
                    <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                        <!-- Service Item -->
                        <div class="jos" data-jos_animation="flip-left" data-jos_delay="0">
                            <div class="hover-solid-shadow h-full after:bg-ColorPurple">
                                <div class="group h-full rounded-[10px] border-2 border-ColorDark bg-white p-[30px]">
                                    <div class="mb-[30px] h-[70px] w-auto">
                                        <img src="{{ asset('assets/img/icons/icon-black-home-7-service-1.svg') }}" alt="icon-black-home-7-service-1" width="75" height="70" />
                                    </div>
                                    <div>
                                        <a href="{{ url('servicedetails') }}" class="mb-4 block text-[22px] font-semibold leading-[1.33] -tracking-[0.5px] text-ColorDark group-hover:text-ColorPurple xxl:text-2xl">Website Migration</a>
                                        <p>
                                            Website migration redirects all of your old webpages
                                            to new pages or changing site.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Service Item -->
                        <!-- Service Item -->
                        <div class="jos" data-jos_animation="flip-left" data-jos_delay="0.3">
                            <div class="hover-solid-shadow h-full after:bg-ColorPurple">
                                <div class="group h-full rounded-[10px] border-2 border-ColorDark bg-white p-[30px]">
                                    <div class="mb-[30px] h-[70px] w-auto">
                                        <img src="{{ asset('assets/img/icons/icon-black-home-7-service-2.svg') }}" alt="icon-black-home-7-service-2" width="75" height="70" />
                                    </div>
                                    <div>
                                        <a href="{{ url('servicedetails') }}" class="mb-4 block text-[22px] font-semibold leading-[1.33] -tracking-[0.5px] text-ColorDark group-hover:text-ColorPurple xxl:text-2xl">Business Hosting</a>
                                        <p>
                                            Hosting gives you the tools you need to run website
                                            and portions of your business.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Service Item -->
                        <!-- Service Item -->
                        <div class="jos" data-jos_animation="flip-left" data-jos_delay="0.6">
                            <div class="hover-solid-shadow h-full after:bg-ColorPurple">
                                <div class="group h-full rounded-[10px] border-2 border-ColorDark bg-white p-[30px]">
                                    <div class="mb-[30px] h-[70px] w-auto">
                                        <img src="{{ asset('assets/img/icons/icon-black-home-7-service-3.svg') }}" alt="icon-black-home-7-service-3.svg" width="75" height="70" />
                                    </div>
                                    <div>
                                        <a href="{{ url('servicedetails') }}" class="mb-4 block text-[22px] font-semibold leading-[1.33] -tracking-[0.5px] text-ColorDark group-hover:text-ColorPurple xxl:text-2xl">E-commerce Hosting</a>
                                        <p>
                                            Our servers support a best open-source eCommerce
                                            tools & includes features.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Service Item -->
                        <!-- Service Item -->
                        <div class="jos" data-jos_animation="flip-left" data-jos_delay="0.9">
                            <div class="hover-solid-shadow h-full after:bg-ColorPurple">
                                <div class="group h-full rounded-[10px] border-2 border-ColorDark bg-white p-[30px]">
                                    <div class="mb-[30px] h-[70px] w-auto">
                                        <img src="{{ asset('assets/img/icons/icon-black-home-7-service-4.svg') }}" alt="icon-black-home-7-service-4" width="69" height="70" />
                                    </div>
                                    <div>
                                        <a href="{{ url('servicedetails') }}" class="mb-4 block text-[22px] font-semibold leading-[1.33] -tracking-[0.5px] text-ColorDark group-hover:text-ColorPurple xxl:text-2xl">Website Builder</a>
                                        <p>
                                            Build a professional website for free with us. Also
                                            mobile-friendly & modern templates.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Service Item -->
                        <!-- Service Item -->
                        <div class="jos" data-jos_animation="flip-left" data-jos_delay="1.2">
                            <div class="hover-solid-shadow h-full after:bg-ColorPurple">
                                <div class="group h-full rounded-[10px] border-2 border-ColorDark bg-white p-[30px]">
                                    <div class="mb-[30px] h-[70px] w-auto">
                                        <img src="{{ asset('assets/img/icons/icon-black-home-7-service-5.svg') }}" alt="icon-black-home-7-service-5" width="73" height="70" />
                                    </div>
                                    <div>
                                        <a href="{{ url('servicedetails') }}" class="mb-4 block text-[22px] font-semibold leading-[1.33] -tracking-[0.5px] text-ColorDark group-hover:text-ColorPurple xxl:text-2xl">PCI Compliance</a>
                                        <p>
                                            The PCI Security Standards Council operates programs
                                            to train, test, and qualify.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Service Item -->
                        <!-- Service Item -->
                        <div class="jos" data-jos_animation="flip-left" data-jos_delay="1.5">
                            <div class="hover-solid-shadow h-full after:bg-ColorPurple">
                                <div class="group h-full rounded-[10px] border-2 border-ColorDark bg-white p-[30px]">
                                    <div class="mb-[30px] h-[70px] w-auto">
                                        <img src="{{ asset('assets/img/icons/icon-black-home-7-service-6.svg') }}" alt="icon-black-home-7-service-6" width="73" height="70" />
                                    </div>
                                    <div>
                                        <a href="{{ url('servicedetails') }}" class="mb-4 block text-[22px] font-semibold leading-[1.33] -tracking-[0.5px] text-ColorDark group-hover:text-ColorPurple xxl:text-2xl">Blog Hosting</a>
                                        <p>
                                            Blogging solutions for first-time bloggers as well
                                            as the seasoned with experts.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Service Item -->
                        <!-- Service Item -->
                        <div class="jos" data-jos_animation="flip-left" data-jos_delay="1.8">
                            <div class="hover-solid-shadow h-full after:bg-ColorPurple">
                                <div class="group h-full rounded-[10px] border-2 border-ColorDark bg-white p-[30px]">
                                    <div class="mb-[30px] h-[70px] w-auto">
                                        <img src="{{ asset('assets/img/icons/icon-black-home-7-service-7.svg') }}" alt="icon-black-home-7-service-7" width="75" height="70" />
                                    </div>
                                    <div>
                                        <a href="{{ url('servicedetails') }}" class="mb-4 block text-[22px] font-semibold leading-[1.33] -tracking-[0.5px] text-ColorDark group-hover:text-ColorPurple xxl:text-2xl">Website Migration</a>
                                        <p>
                                            Website migration redirects all of your old webpages
                                            to new pages or changing site.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Service Item -->
                        <!-- Service Item -->
                        <div class="jos" data-jos_animation="flip-left" data-jos_delay="2.1">
                            <div class="hover-solid-shadow h-full after:bg-ColorPurple">
                                <div class="group h-full rounded-[10px] border-2 border-ColorDark bg-white p-[30px]">
                                    <div class="mb-[30px] h-[70px] w-auto">
                                        <img src="{{ asset('assets/img/icons/icon-black-home-7-service-8.svg') }}" alt="icon-black-home-7-service-8" width="60" height="70" />
                                    </div>
                                    <div>
                                        <a href="{{ url('servicedetails') }}" class="mb-4 block text-[22px] font-semibold leading-[1.33] -tracking-[0.5px] text-ColorDark group-hover:text-ColorPurple xxl:text-2xl">Website Security</a>
                                        <p>
                                            Website security is any action taken or application
                                            put in place to ensure.
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
        </div>
        <!-- Section Background -->
    </section>
    <!-- Service Section End -->

    <!-- Content Section Start -->
    <section class="section-content" id="section-about">
        <!-- Section Background -->
        <div class="bg-ColorOffWhite">
            <!-- Section Space -->
            <div class="section-space-bottom">
                <!-- Section Container -->
                <div class="container-default">
                    <div class="grid items-center gap-10 md:grid-cols-2 lg:grid-cols-[1fr_minmax(0,_0.9fr)] lg:gap-20 xl:gap-28">
                        <!-- Content Block Left -->
                        <div class="jos" data-jos_animation="fade-left">
                            <!-- Section Wrapper -->
                            <div>
                                <!-- Section Tag -->
                                <span class="text-darkborder-ColorDark mb-[30px] inline-block rounded-[50px] border border-ColorDark bg-[#B5A8F8] px-[18.5px] py-[5.5px] text-base font-semibold">
                                    More Speed, Less Latency</span>
                                <!-- Section Tag -->
                                <!-- Section Block -->
                                <div class="mb-5">
                                    <h2 class="font-Cabin leading-[1.12] xl:text-[56px]">
                                        Speed up your website outside of any hassle
                                    </h2>
                                </div>
                                <!-- Section Block -->
                            </div>
                            <!-- Section Wrapper -->
                            <p class="max-w-[535px]">
                                Speed is a key factor in increasing your website in terms
                                of visitors, purchase orders, user experience, and SEO.
                            </p>
                            <ul class="flex flex-col gap-3 font-semibold text-ColorDark lg:mt-[50px]">
                                <li>
                                    <span class="mr-3 inline-block text-xl"><i class="fa-solid fa-badge-check"></i></span>
                                    99.99% uptime and security monitoring
                                </li>
                                <li>
                                    <span class="mr-3 inline-block text-xl"><i class="fa-solid fa-badge-check"></i></span>
                                    Hosting control panel contains multi-tools
                                </li>
                                <li>
                                    <span class="mr-3 inline-block text-xl"><i class="fa-solid fa-badge-check"></i></span>
                                    WordPress is quick and easy to setup
                                </li>
                            </ul>
                        </div>
                        <!-- Content Block Left -->
                        <!-- Content Block Right -->
                        <div class="jos" data-jos_animation="fade-right">
                            <img src="{{ asset('assets/img/th-7/content-image-2.png') }}" alt="content-image-2" width="601" height="450" class="h-auto w-full" />
                        </div>
                        <!-- Content Block Right -->
                    </div>
                </div>
                <!-- Section Container -->
            </div>
            <!-- Section Space -->
        </div>
        <!-- Section Background -->
    </section>
    <!-- Content Section End -->

    <!-- Pricing Section Start -->
    <section class="section-pricing" id="section-pricing">
        <!-- Section Background -->
        <div class="rounded-[30px] bg-ColorDark">
            <!-- Section Space -->
            <div class="section-space">
                <!-- Section Container -->
                <div class="container-default">
                    <!-- Section Content Wrapper -->
                    <div class="jos mb-[60px] xl:mb-20">
                        <!-- Section Content Block -->
                        <div class="mx-auto flex max-w-[636px] flex-col items-center justify-center">
                            <!-- Section Tag -->
                            <span class="text-darkborder-ColorDark mb-[30px] inline-block rounded-[50px] border border-ColorDark bg-[#FFED88] px-[18.5px] py-[5.5px] text-base font-semibold">
                                Popular Hosting Plan</span>
                            <!-- Section Tag -->
                            <h2 class="text-center font-Cabin font-bold leading-[1.12] text-white xl:text-[56px]">
                                The perfect web hosting plan for your success
                            </h2>
                        </div>
                        <!-- Section Content Block -->
                    </div>
                    <!-- Section Content Wrapper -->

                    <!-- Pricing Area -->
                    <div>
                        <!-- Pricing Button Block -->
                        <div class="my-[50px] flex flex-row items-center justify-center gap-6">
                            <span class="font-bold text-white">Per Month</span>

                            <!-- Toggle Button -->
                            <label for="toggle" class="flex cursor-pointer items-center">
                                <!-- toggle -->
                                <span class="relative h-[35px] w-[70px] rounded-[35px] bg-ColorPurple">
                                    <!-- hidden input -->
                                    <input id="toggle" type="checkbox" class="hidden" onclick="toggleSwitch()" />
                                    <!-- dot -->
                                    <span class="toggle_dot absolute h-[35px] w-[35px] rounded-full bg-ColorDark transition-all duration-300"></span>
                                </span>
                            </label>
                            <!-- Toggle Button -->
                            <span class="font-bold text-white">Per Year</span>
                        </div>
                        <!-- Pricing Button Block -->

                        <!-- Pricing List -->
                        <div class="grid gap-x-6 gap-y-10 md:grid-cols-2 lg:grid-cols-3">
                            <!-- Pricing Item -->
                            <div class="jos" data-jos_animation="flip-left" data-jos_delay="0">
                                <div class="hover-solid-shadow after:bg-ColorPurple">
                                    <div class="rounded-[10px] border-2 border-ColorDark bg-white p-[30px]">
                                        <!-- Pricing Content Top -->
                                        <div class="flex items-center justify-between">
                                            <span class="text-2xl font-bold -tracking-[0.5px] text-ColorDark">Basic</span>
                                            <div class="text-center">
                                                <div class="month text-[28px] font-normal leading-[0] text-ColorBlack">
                                                    $<span class="text-4xl font-bold leading-[1.3] xl:text-5xl xxl:text-[58px]">2.99</span>
                                                    <span class="-mt-[6px] block text-xl leading-[1.6] -tracking-[0.5px]">Per month</span>
                                                </div>
                                                <div class="annual hidden text-[28px] font-normal leading-[0] text-ColorBlack">
                                                    $<span class="text-4xl font-bold leading-[1.3] xl:text-5xl xxl:text-[58px]">30.50</span>
                                                    <span class="-mt-[6px] block text-xl leading-[1.6] -tracking-[0.5px]">Per year</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Pricing Content Top -->
                                        <!-- Horizontal Line Separator -->
                                        <div class="my-[30px] h-px w-full bg-ColorDark/10"></div>
                                        <!-- Horizontal Line Separator -->
                                        <!-- Pricing Data list -->
                                        <ul class="flex flex-col gap-y-6 text-base font-semibold text-ColorDark xl:px-[18px]">
                                            <li class="flex gap-x-3">
                                                <span class="text-xl">
                                                    <i class="fa-solid fa-circle-check"></i>
                                                </span>
                                                Single website builder
                                            </li>
                                            <li class="flex gap-x-3">
                                                <span class="text-xl">
                                                    <i class="fa-solid fa-circle-check"></i>
                                                </span>
                                                One-click WordPress installs
                                            </li>
                                            <li class="flex gap-x-3">
                                                <span class="text-xl">
                                                    <i class="fa-solid fa-circle-check"></i>
                                                </span>
                                                Basic widget customization
                                            </li>
                                            <li class="flex gap-x-3">
                                                <span class="text-xl">
                                                    <i class="fa-solid fa-circle-check"></i>
                                                </span>
                                                Un-metered bandwidth
                                            </li>
                                            <li class="flex gap-x-3">
                                                <span class="text-xl">
                                                    <i class="fa-regular fa-circle-check"></i>
                                                </span>
                                                Free SSL certificate
                                            </li>
                                            <li class="flex gap-x-3">
                                                <span class="text-xl">
                                                    <i class="fa-regular fa-circle-check"></i>
                                                </span>
                                                Free premium themes & plugins
                                            </li>
                                        </ul>
                                        <!-- Pricing Data list -->
                                        <div class="mt-10 flex justify-center">
                                            <a href="{{ url('pricing') }}" class="btn is-rounded is-large group w-full border-2 border-ColorDark hover:bg-ColorDark hover:text-white"><span>Purchase now</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Pricing Item -->
                            <!-- Pricing Item -->
                            <div class="jos" data-jos_animation="flip-left" data-jos_delay="0.3">
                                <div class="hover-solid-shadow after:bg-ColorPurple">
                                    <div class="rounded-[10px] border-2 border-ColorDark bg-white p-[30px]">
                                        <!-- Pricing Content Top -->
                                        <div class="flex items-center justify-between">
                                            <span class="text-2xl font-bold -tracking-[0.5px] text-ColorDark">Popular</span>
                                            <div class="text-center">
                                                <div class="month text-[28px] font-normal leading-[0] text-ColorBlack">
                                                    $<span class="text-4xl font-bold leading-[1.3] xl:text-5xl xxl:text-[58px]">18.99</span>
                                                    <span class="-mt-[6px] block text-xl leading-[1.6] -tracking-[0.5px]">Per month</span>
                                                </div>
                                                <div class="annual hidden text-[28px] font-normal leading-[0] text-ColorBlack">
                                                    $<span class="text-4xl font-bold leading-[1.3] xl:text-5xl xxl:text-[58px]">180.00</span>
                                                    <span class="-mt-[6px] block text-xl leading-[1.6] -tracking-[0.5px]">Per year</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Pricing Content Top -->
                                        <!-- Horizontal Line Separator -->
                                        <div class="my-[30px] h-px w-full bg-ColorDark/10"></div>
                                        <!-- Horizontal Line Separator -->
                                        <!-- Pricing Data list -->
                                        <ul class="flex flex-col gap-y-6 text-base font-semibold text-ColorDark xl:px-[18px]">
                                            <li class="flex gap-x-3">
                                                <span class="text-xl">
                                                    <i class="fa-solid fa-circle-check"></i>
                                                </span>
                                                Single website builder
                                            </li>
                                            <li class="flex gap-x-3">
                                                <span class="text-xl">
                                                    <i class="fa-solid fa-circle-check"></i>
                                                </span>
                                                One-click WordPress installs
                                            </li>
                                            <li class="flex gap-x-3">
                                                <span class="text-xl">
                                                    <i class="fa-solid fa-circle-check"></i>
                                                </span>
                                                Basic widget customization
                                            </li>
                                            <li class="flex gap-x-3">
                                                <span class="text-xl">
                                                    <i class="fa-solid fa-circle-check"></i>
                                                </span>
                                                Un-metered bandwidth
                                            </li>
                                            <li class="flex gap-x-3">
                                                <span class="text-xl">
                                                    <i class="fa-solid fa-circle-check"></i>
                                                </span>
                                                Free SSL certificate
                                            </li>
                                            <li class="flex gap-x-3">
                                                <span class="text-xl">
                                                    <i class="fa-regular fa-circle-check"></i>
                                                </span>
                                                Free premium themes & plugins
                                            </li>
                                        </ul>
                                        <!-- Pricing Data list -->
                                        <div class="mt-10 flex justify-center">
                                            <a href="{{ url('pricing') }}" class="btn is-black is-rounded is-large group w-full border-2 bg-ColorDark"><span>Purchase now</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Pricing Item -->
                            <!-- Pricing Item -->
                            <div class="jos" data-jos_animation="flip-left" data-jos_delay="0.6">
                                <div class="hover-solid-shadow after:bg-ColorPurple">
                                    <div class="rounded-[10px] border-2 border-ColorDark bg-white p-[30px]">
                                        <!-- Pricing Content Top -->
                                        <div class="flex items-center justify-between">
                                            <span class="text-2xl font-bold -tracking-[0.5px] text-ColorDark">Enterprise</span>
                                            <div class="text-center">
                                                <div class="month text-[28px] font-normal leading-[0] text-ColorBlack">
                                                    $<span class="text-4xl font-bold leading-[1.3] xl:text-5xl xxl:text-[58px]">39.00</span>
                                                    <span class="-mt-[6px] block text-xl leading-[1.6] -tracking-[0.5px]">Per month</span>
                                                </div>
                                                <div class="annual hidden text-[28px] font-normal leading-[0] text-ColorBlack">
                                                    $<span class="text-4xl font-bold leading-[1.3] xl:text-5xl xxl:text-[58px]">420.00</span>
                                                    <span class="-mt-[6px] block text-xl leading-[1.6] -tracking-[0.5px]">Per year</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Pricing Content Top -->
                                        <!-- Horizontal Line Separator -->
                                        <div class="my-[30px] h-px w-full bg-ColorDark/10"></div>
                                        <!-- Horizontal Line Separator -->
                                        <!-- Pricing Data list -->
                                        <ul class="flex flex-col gap-y-6 text-base font-semibold text-ColorDark xl:px-[18px]">
                                            <li class="flex gap-x-3">
                                                <span class="text-xl">
                                                    <i class="fa-solid fa-circle-check"></i>
                                                </span>
                                                Single website builder
                                            </li>
                                            <li class="flex gap-x-3">
                                                <span class="text-xl">
                                                    <i class="fa-solid fa-circle-check"></i>
                                                </span>
                                                One-click WordPress installs
                                            </li>
                                            <li class="flex gap-x-3">
                                                <span class="text-xl">
                                                    <i class="fa-solid fa-circle-check"></i>
                                                </span>
                                                Basic widget customization
                                            </li>
                                            <li class="flex gap-x-3">
                                                <span class="text-xl">
                                                    <i class="fa-solid fa-circle-check"></i>
                                                </span>
                                                Un-metered bandwidth
                                            </li>
                                            <li class="flex gap-x-3">
                                                <span class="text-xl">
                                                    <i class="fa-solid fa-circle-check"></i>
                                                </span>
                                                Free SSL certificate
                                            </li>
                                            <li class="flex gap-x-3">
                                                <span class="text-xl">
                                                    <i class="fa-solid fa-circle-check"></i>
                                                </span>
                                                Free premium themes & plugins
                                            </li>
                                        </ul>
                                        <!-- Pricing Data list -->
                                        <div class="mt-10 flex justify-center">
                                            <a href="{{ url('pricing') }}" class="btn is-rounded is-large group w-full border-2 border-ColorDark hover:bg-ColorDark hover:text-white"><span>Purchase now</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Pricing Item -->
                            <!-- Pricing List -->
                        </div>

                        <!-- Pricing Area -->
                    </div>
                    <!-- Section Container -->
                </div>
                <!-- Section Space -->
            </div>
        </div>
        <!-- Section Background -->
    </section>
    <!-- Pricing Section End -->

    <!-- Testimonial Section Start -->
    <section class="section-testimonial" id="section-testimonial">
        <!-- Section Background -->
        <div class="bg-ColorOffWhite">
            <!-- Section Space -->
            <div class="section-space">
                <!-- Section Container -->
                <div class="container-default">
                    <div class="grid grid-cols-1 gap-10 md:grid-cols-2 lg:gap-20 xl:gap-32 xxl:gap-[244px]">
                        <!-- Testimonial Slider -->
                        <div class="jos testimonial-slider-area-1 order-2 md:order-1" data-jos_animation="fade-right">
                            <!-- Slider main container -->
                            <div class="testimonial-slider swiper">
                                <!-- Additional required wrapper -->
                                <!-- Slides List-->
                                <div class="swiper-wrapper">
                                    <!-- Slide Item -->
                                    <div class="swiper-slide">
                                        <div class="flex flex-col items-center justify-center rounded-[10px] border-2 border-ColorDark bg-white p-[30px] text-center text-ColorDark">
                                            <!-- Review Star -->
                                            <div class="mb-[30px] flex gap-[5px]">
                                                <img src="{{ asset('assets/img/icons/icon-green-star.svg') }}" alt="icon-green-star" width="26" height="24" />
                                                <img src="{{ asset('assets/img/icons/icon-green-star.svg') }}" alt="icon-green-star" width="26" height="24" />
                                                <img src="{{ asset('assets/img/icons/icon-green-star.svg') }}" alt="icon-green-star" width="26" height="24" />
                                                <img src="{{ asset('assets/img/icons/icon-green-star.svg') }}" alt="icon-green-star" width="26" height="24" />
                                                <img src="{{ asset('assets/img/icons/icon-green-star.svg') }}" alt="icon-green-star" width="26" height="24" />
                                            </div>
                                            <span class="mb-[5px] block font-semibold">Masco is an Excellent company</span>
                                            <p class="mb-[30px]">
                                                Masco is an excellent company. in everything
                                                uptime, fast technical support, sales, &
                                                billing-friendly people. If you want to open a web
                                                solutions must register.
                                            </p>
                                            <div class="">
                                                <span class="mb-[5px] block font-semibold">Karen Lynn</span>
                                                <span class="text-sm">Founder @ Company</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Slide Item -->
                                    <!-- Slide Item -->
                                    <div class="swiper-slide">
                                        <div class="flex flex-col items-center justify-center rounded-[10px] border-2 border-ColorDark bg-white p-[30px] text-center text-ColorDark">
                                            <!-- Review Star -->
                                            <div class="mb-[30px] flex gap-[5px]">
                                                <img src="{{ asset('assets/img/icons/icon-green-star.svg') }}" alt="icon-green-star" width="26" height="24" />
                                                <img src="{{ asset('assets/img/icons/icon-green-star.svg') }}" alt="icon-green-star" width="26" height="24" />
                                                <img src="{{ asset('assets/img/icons/icon-green-star.svg') }}" alt="icon-green-star" width="26" height="24" />
                                                <img src="{{ asset('assets/img/icons/icon-green-star.svg') }}" alt="icon-green-star" width="26" height="24" />
                                                <img src="{{ asset('assets/img/icons/icon-green-star.svg') }}" alt="icon-green-star" width="26" height="24" />
                                            </div>
                                            <span class="mb-[5px] block font-semibold">Masco is an Excellent company</span>
                                            <p class="mb-[30px]">
                                                Masco is an excellent company. in everything
                                                uptime, fast technical support, sales, &
                                                billing-friendly people. If you want to open a web
                                                solutions must register.
                                            </p>
                                            <div class="">
                                                <span class="mb-[5px] block font-semibold">Karen Lynn</span>
                                                <span class="text-sm">Founder @ Company</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Slide Item -->
                                    <!-- Slide Item -->
                                    <div class="swiper-slide">
                                        <div class="flex flex-col items-center justify-center rounded-[10px] border-2 border-ColorDark bg-white p-[30px] text-center text-ColorDark">
                                            <!-- Review Star -->
                                            <div class="mb-[30px] flex gap-[5px]">
                                                <img src="{{ asset('assets/img/icons/icon-green-star.svg') }}" alt="icon-green-star" width="26" height="24" />
                                                <img src="{{ asset('assets/img/icons/icon-green-star.svg') }}" alt="icon-green-star" width="26" height="24" />
                                                <img src="{{ asset('assets/img/icons/icon-green-star.svg') }}" alt="icon-green-star" width="26" height="24" />
                                                <img src="{{ asset('assets/img/icons/icon-green-star.svg') }}" alt="icon-green-star" width="26" height="24" />
                                                <img src="{{ asset('assets/img/icons/icon-green-star.svg') }}" alt="icon-green-star" width="26" height="24" />
                                            </div>
                                            <span class="mb-[5px] block font-semibold">Masco is an Excellent company</span>
                                            <p class="mb-[30px]">
                                                Masco is an excellent company. in everything
                                                uptime, fast technical support, sales, &
                                                billing-friendly people. If you want to open a web
                                                solutions must register.
                                            </p>
                                            <div class="">
                                                <span class="mb-[5px] block font-semibold">Karen Lynn</span>
                                                <span class="text-sm">Founder @ Company</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Slide Item -->
                                </div>
                                <!-- Slides List-->
                            </div>
                            <!-- If we need pagination -->
                            <div class="swiper-pagination relative mt-10"></div>
                        </div>
                        <!-- Testimonial Slider -->

                        <!-- Content Block -->
                        <div class="jos order-1 md:order-1" data-jos_animation="fade-left">
                            <!-- Section Wrapper -->
                            <div>
                                <!-- Section Tag -->
                                <span class="text-darkborder-ColorDark mb-[30px] inline-block rounded-[50px] border border-ColorDark bg-[#A2DFF5] px-[18.5px] py-[5.5px] text-base font-semibold">
                                    Clients Reviews</span>
                                <!-- Section Tag -->
                                <!-- Section Block -->
                                <div class="mb-5">
                                    <h2 class="font-Cabin leading-[1.12] xl:text-[56px]">
                                        What users say about our hosting services
                                    </h2>
                                </div>
                                <!-- Section Block -->
                            </div>
                            <!-- Section Wrapper -->
                            <p class="mb-8 lg:mb-[50px]">
                                Over the last 10 years, Masco has accumulated to many
                                testimonials, reviews, and awards for better service.
                            </p>

                            <a href="#" class="group relative z-10 inline-block">
                                <div class="btn is-large is-rounded is-dark">
                                    Read All Trustpilot Reviews
                                </div>
                                <div class="is-rounded absolute inset-0 -z-10 translate-x-[5px] translate-y-[5px] border border-ColorDark bg-ColorPurple transition-all duration-300 ease-linear group-hover:translate-x-0 group-hover:translate-y-0"></div>
                            </a>
                        </div>
                        <!-- Content Block -->
                    </div>
                </div>
                <!-- Section Container -->
            </div>
            <!-- Section Space -->
        </div>
        <!-- Section Background -->
    </section>
    <!-- Testimonial Section End -->

    <!-- Brand Section Start -->
    <div class="section-brand">
        <div class="jos">
            <!-- Section Space -->
            <div class="py-[60px] md:py-20 lg:py-[100px]">
                <!-- Section Container -->
                <div class="container-default">
                    <!-- Brand Slider -->
                    <div class="swiper brand-slider">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/img/th-1/brand-1.png') }}" alt="brand-1" width="186" height="46" class="h-auto w-fit grayscale" />
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/img/th-1/brand-2.png') }}" alt="brand-2" width="186" height="46" class="h-auto w-fit grayscale" />
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/img/th-1/brand-3.png') }}" alt="brand-3" width="186" height="46" class="h-auto w-fit grayscale" />
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/img/th-1/brand-4.png') }}" alt="brand-4" width="186" height="46" class="h-auto w-fit grayscale" />
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/img/th-1/brand-5.png') }}" alt="brand-5" width="186" height="46" class="h-auto w-fit grayscale" />
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/img/th-1/brand-1.png') }}" alt="brand-1" width="186" height="46" class="h-auto w-fit grayscale" />
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/img/th-1/brand-2.png') }}" alt="brand-2" width="186" height="46" class="h-auto w-fit grayscale" />
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/img/th-1/brand-3.png') }}" alt="brand-3" width="186" height="46" class="h-auto w-fit grayscale" />
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/img/th-1/brand-4.png') }}" alt="brand-4" width="186" height="46" class="h-auto w-fit grayscale" />
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/img/th-1/brand-5.png') }}" alt="brand-5" width="186" height="46" class="h-auto w-fit grayscale" />
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

    <!-- News-Letter Section Start -->
    <section class="section-newsletter" id="section-contact">
        <!-- Section Background -->
        <div class="rounded-tl-[30px] rounded-tr-[30px] bg-ColorPurple">
            <!-- Section Space -->
            <div class="py-20">
                <!-- Section Container -->
                <div class="container-default">
                    <div class="mx-auto flex max-w-[580px] flex-col items-center justify-center text-center">
                        <!-- Section Block -->
                        <div class="mb-5">
                            <h2 class="jos font-Cabin leading-[1.12] text-white xl:text-[56px]">
                                Sign up for the best web hosting today
                            </h2>
                        </div>
                        <!-- Section Block -->
                        <div class="jos">
                            <form action="#" method="post" class="relative mx-auto flex w-full items-center lg:mx-0 lg:mt-5">
                                <input type="email" placeholder="Enter your email" class="w-full rounded-[50px] border border-ColorBlack bg-white px-5 py-[15px] pr-40 text-base font-semibold text-opacity-50 outline-none" />
                                <button type="submit" class="btn is-dark is-rounded absolute right-[5px] py-[10px]">
                                    Subscribe
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Section Container -->
            </div>
            <!-- Section Space -->
        </div>
        <!-- Section Background -->
    </section>
    <!-- News-Letter Section End -->

@endsection



@section('footer')
<footer class="section-footer">
    <div class="bg-white">
        <!-- Footer Area Center -->
        <div class="text-ColorBlack">
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
                                <img src="{{ asset('assets/img/logo-full-dark.png') }}" alt="Masco" width="109" height="24" />
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
                                    <a href="https://twitter.com" target="_blank" rel="noopener noreferrer" class="flex h-[30px] w-[30px] items-center justify-center rounded-[50%] bg-ColorBlack/10 text-sm text-ColorBlack transition-all duration-300 hover:bg-ColorBlack hover:text-white" aria-label="twitter">
                                        <i class="fa-brands fa-x-twitter"></i>
                                    </a>
                                    <a href="https://www.facebook.com/" target="_blank" rel="noopener noreferrer" class="flex h-[30px] w-[30px] items-center justify-center rounded-[50%] bg-ColorBlack/10 text-sm text-ColorBlack transition-all duration-300 hover:bg-ColorBlack hover:text-white" aria-label="facebook">
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </a>
                                    <a href="https://www.instagram.com/" target="_blank" rel="noopener noreferrer" class="flex h-[30px] w-[30px] items-center justify-center rounded-[50%] bg-ColorBlack/10 text-sm text-ColorBlack transition-all duration-300 hover:bg-ColorBlack hover:text-white" aria-label="instagram">
                                        <i class="fa-brands fa-instagram"></i>
                                    </a>
                                    <a href="https://www.github.com/" target="_blank" rel="noopener noreferrer" class="flex h-[30px] w-[30px] items-center justify-center rounded-[50%] bg-ColorBlack/10 text-sm text-ColorBlack transition-all duration-300 hover:bg-ColorBlack hover:text-white" aria-label="github">
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
        <!-- Footer Area Center -->
        <div class="horizontal-line bg-ColorBlack"></div>
        <!-- Footer Bottom -->
        <div>
            <!-- Footer Bottom Spacing -->
            <div class="py-[18px]">
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
        <!-- Footer Bottom -->
    </div>
</footer>
@endsection