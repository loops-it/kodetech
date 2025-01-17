@extends('layout.layout1',['bgColor'=> 'bg-[#F6F9F0]'])

@section('headerLogo')
<img src="{{ asset('assets/img/logo-dark.png') }}" alt="Masco" width="109" height="24" />
@endsection

@section('headButtons')

<div class="flex items-center gap-6">
    <a href="{{ url('login') }}" class="btn-text hidden hover:text-black sm:inline-block">Login</a>
    <a href="#" class="group relative z-10 hidden sm:inline-block">
        <div class="btn is-rounded border-black bg-[#F6F9F0] text-black">
            Sign up free
        </div>
        <div class="is-rounded absolute inset-0 -z-10 translate-x-[5px] translate-y-[5px] border border-black bg-black transition-all duration-300 ease-linear group-hover:translate-x-0 group-hover:translate-y-0"></div>
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
    <!-- Hero Section Space -->
    <div class="pb-[60px] pt-28 md:pb-20 md:pt-36 lg:pb-[100px] lg:pt-[150px] xxl:pb-[120px] xxl:pt-[185px]">
        <!-- Section Container -->
        <div class="container-default">
            <!-- Hero Area -->
            <div class="grid items-center justify-center gap-[50px] md:grid-cols-[1fr_minmax(0,_0.7fr)]">
                <!-- Hero Content Block -->
                <div class="jos">
                    <div class="mx-auto mb-6 max-w-xl lg:max-w-2xl xl:max-w-3xl xxl:max-w-[1076px]">
                        <h1 class="mb-6 font-Outfit text-5xl font-medium uppercase leading-[1.1] -tracking-[3px] text-black md:text-6xl lg:text-7xl xl:text-8xl xxl:text-[120px]">
                            A new frontier of investment
                        </h1>
                    </div>
                    <p class="mb-9 max-w-[746px] lg:mb-14">
                        Secure solutions for your digital assets. Start your crypto
                        ascension here with easy solutions to invest, trade and earn
                        for assets like Bitcoin, Ethereum and Dogecoin. PixcelsThemes
                        develops next-generation digital financial solutions.
                    </p>
                    <a href="#" class="group relative z-10 inline-block">
                        <div class="btn is-large is-rounded border-black bg-[#F6F9F0] text-black">
                            Sign up with Email or Phone
                        </div>
                        <div class="is-rounded absolute inset-0 -z-10 translate-x-[5px] translate-y-[5px] border border-black bg-black transition-all duration-300 ease-linear group-hover:translate-x-0 group-hover:translate-y-0"></div>
                    </a>
                </div>
                <!-- Hero Content Block -->

                <!-- Hero Image Block -->
                <div class="overflow-hidden rounded-[50%]">
                    <img src="{{ asset('assets/img/th-13/hero-img.png') }}" alt="hero-img" width="578" height="578" data-jos_animation="zoom-in-down" class="h-full w-full object-cover" />
                </div>
                <!-- Hero Image Block -->
            </div>
            <!-- Hero Area -->
        </div>
        <!-- Section Container -->
    </div>
    <!-- Hero Section Space -->
</section>
<!-- Hero Section End -->

<!-- Fun-fact Section Start -->
<div class="section-fun-fact">
    <!-- Section Background -->
    <div class="relative z-10">
        <!-- Section Container -->
        <div class="container-default">
            <!-- Fun-fact List -->
            <div class="grid grid-cols-1 gap-6 md:grid-cols-3">
                <!-- Fun-fact Item -->
                <div class="jos" data-jos_delay="0">
                    <div class="h-full rounded-[10px] bg-black p-10">
                        <div class="mb-6 font-Outfit text-[40px] font-medium leading-[1.2] -tracking-[1px] text-[#F6F9F0]">
                            Up to
                            <span class="text-[#48C96C] lg:text-4xl xl:text-6xl xxl:text-[80px]">80</span>
                        </div>
                        <div class="text-2xl -tracking-[0.5px] text-[#F6F9F0]">
                            Completed Offerings
                        </div>
                    </div>
                </div>
                <!-- Fun-fact Item -->
                <!-- Fun-fact Item -->
                <div class="jos" data-jos_delay="0.3">
                    <div class="h-full rounded-[10px] bg-black p-10">
                        <div class="mb-6 font-Outfit text-[40px] font-medium leading-[1.2] -tracking-[1px] text-[#F6F9F0]">
                            Up to
                            <span class="text-[#FC6ADC] lg:text-4xl xl:text-6xl xxl:text-[80px]">$1.95B</span>
                        </div>
                        <div class="text-2xl -tracking-[0.5px] text-[#F6F9F0]">
                            24-hour trading volume
                        </div>
                    </div>
                </div>
                <!-- Fun-fact Item -->
                <!-- Fun-fact Item -->
                <div class="jos" data-jos_delay="0.6">
                    <div class="h-full rounded-[10px] bg-black p-10">
                        <div class="mb-6 font-Outfit text-[40px] font-medium leading-[1.2] -tracking-[1px] text-[#F6F9F0]">
                            Up to
                            <span class="text-[#FFA767] lg:text-4xl xl:text-6xl xxl:text-[80px]">
                                0.10% </span>
                        </div>
                        <div class="text-2xl -tracking-[0.5px] text-[#F6F9F0]">
                            Lowest transaction fees
                        </div>
                    </div>
                </div>
                <!-- Fun-fact Item -->
            </div>
            <!-- Fun-fact List -->
        </div>
        <!-- Section Container -->

        <!-- Background -->
        <div class="absolute bottom-0 left-0 -z-10 h-1/2 w-full bg-[#EAEEE3]"></div>
    </div>
    <!-- Section Background -->
</div>
<!-- Fun-fact Section End -->

<!-- Content Section Start -->
<section class="section-content">
    <!-- Section Background -->
    <div class="bg-[#EAEEE3]">
        <!-- Section Space -->
        <div class="section-space">
            <!-- Section Container -->
            <div class="container-default">
                <div class="flex flex-col gap-y-20 lg:gap-y-[100px] xl:gap-y-[120px]">
                    <!-- Content Area Single -->
                    <div class="grid items-center gap-16 lg:grid-cols-[0.55fr_minmax(0,_1fr)] lg:gap-24 xl:gap-[140px]">
                        <!-- Content Block Left -->
                        <div class="jos order-1 lg:order-2" data-jos_animation="fade-right">
                            <!-- Section Wrapper -->
                            <div>
                                <!-- Section Block -->
                                <div class="mb-5">
                                    <h2 class="font-Outfit text-4xl font-medium uppercase leading-[1.15] -tracking-[2px] text-black sm:text-5xl lg:text-6xl xl:text-[70px] xxl:text-[80px]">
                                        opportunity to generate profits
                                    </h2>
                                </div>
                                <!-- Section Block -->
                            </div>
                            <!-- Section Wrapper -->
                            <!-- Content Text -->
                            <p class="text-[#2C2C2C]">
                                We're often associated with cutting-edge projects in the
                                blockchain & cryptocurrency space. By participating in
                                an ICO, you can gain early access to innovative
                                technologies and concepts that may disrupt industries or
                                introduce new solutions.
                            </p>
                            <p class="text-[#2C2C2C]">
                                This early involvement could provide you with unique
                                opportunities for future growth and involvement in the
                                project's ecosystem and diversify your investment
                                portfolio.
                            </p>
                            <!-- Content Text -->
                            <a href="#" class="group relative z-10 inline-block">
                                <div class="btn is-large is-rounded border-black bg-[#F6F9F0] text-black">
                                    Get Started Now
                                </div>
                                <div class="is-rounded absolute inset-0 -z-10 translate-x-[5px] translate-y-[5px] border border-black bg-black transition-all duration-300 ease-linear group-hover:translate-x-0 group-hover:translate-y-0"></div>
                            </a>
                        </div>
                        <!-- Content Block Left -->
                        <!-- Content Block Right -->
                        <div class="jos order-2 lg:order-1" data-jos_animation="fade-left">
                            <div class="mx-auto lg:mx-0 max-w-full sm:max-w-[80%] md:max-w-[50%] lg:max-w-full">
                                <img src="{{ asset('assets/img/th-13/content-img-1.png') }}" alt="content-img-1" width="410" height="410" class="h-auto w-full" />
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
    </div>
    <!-- Section Background -->
</section>
<!-- Content Section End -->

<!-- Service Section Start -->
<section class="section-service" id="section-service">
    <!-- Section Space -->
    <div class="section-space">
        <!-- Section Container -->
        <div class="container-default">
            <!-- Section Content Wrapper -->
            <div class="jos mb-[60px] xl:mb-20">
                <!-- Section Content Block -->
                <div class="mx-auto max-w-[940px]">
                    <div class="mb-5">
                        <h2 class="text-center font-Outfit text-4xl font-medium uppercase leading-[1.15] -tracking-[2px] text-black sm:text-5xl lg:text-6xl xl:text-[70px] xxl:text-[80px]">
                            We offer participants endless possibilities
                        </h2>
                    </div>
                </div>
                <!-- Section Content Block -->
            </div>
            <!-- Section Content Wrapper -->

            <!-- Service List -->
            <div class="grid grid-cols-1">
                <!-- Service Item -->
                <div class="jos">
                    <div class="group flex flex-col items-start justify-between gap-x-10 gap-y-10 rounded-[10px] p-10 transition-all duration-300 hover:bg-black md:flex-row md:items-center lg:gap-x-20 xl:gap-x-[94px]">
                        <div class="relative flex h-auto w-16 items-center justify-center md:w-12 lg:w-16 xl:w-20">
                            <img src="{{ asset('assets/img/icons/icon-black-home-13-service-1.svg') }}" alt="icon-black-home-13-service-1" width="80" height="80" class="h-auto w-full opacity-100 transition-all duration-300 group-hover:opacity-0" />
                            <img src="{{ asset('assets/img/icons/icon-white-home-13-service-1.svg') }}" alt="icon-white-home-13-service-1" width="80" height="80" class="absolute h-auto w-full opacity-0 transition-all duration-300 group-hover:opacity-100" />
                        </div>
                        <div class="flex-1">
                            <div class="mb-4 font-Outfit text-3xl font-medium leading-[1.4] text-black transition-all duration-300 group-hover:text-[#F6F9F0]">
                                Token Distribution
                            </div>
                            <p class="text-lg -tracking-[0.5px] text-[#2C2C2C] transition-all duration-300 group-hover:text-[#F6F9F0] lg:text-xl xl:text-2xl">
                                We provide a way to distribute tokens or coins integral
                                to the project's ecosystem. Investors in an ICO
                                typically receive these tokens in exchange for their
                                investment.
                            </p>
                        </div>
                        <a href="{{ url('servicedetails') }}" class="relative inline-flex h-[50px] w-[50px] items-center justify-center rounded-[50%] bg-black text-3xl text-[#F6F9F0] transition-all duration-300 group-hover:bg-[#F6F9F0] group-hover:text-black">
                            <span><i class="fa-regular fa-arrow-right"></i></span>
                        </a>
                    </div>
                </div>
                <!-- Service Item -->
                <!-- Service Item -->
                <div class="jos">
                    <div class="group flex flex-col items-start justify-between gap-x-10 gap-y-10 rounded-[10px] p-10 transition-all duration-300 hover:bg-black md:flex-row md:items-center lg:gap-x-20 xl:gap-x-[94px]">
                        <div class="relative flex h-auto w-16 items-center justify-center md:w-12 lg:w-16 xl:w-20">
                            <img src="{{ asset('assets/img/icons/icon-black-home-13-service-2.svg') }}" alt="icon-black-home-13-service-2" width="80" height="69" class="h-auto w-full opacity-100 transition-all duration-300 group-hover:opacity-0" />
                            <img src="{{ asset('assets/img/icons/icon-white-home-13-service-2.svg') }}" alt="icon-white-home-13-service-2" width="80" height="69" class="absolute h-auto w-full opacity-0 transition-all duration-300 group-hover:opacity-100" />
                        </div>
                        <div class="flex-1">
                            <div class="mb-4 font-Outfit text-3xl font-medium leading-[1.4] text-black transition-all duration-300 group-hover:text-[#F6F9F0]">
                                Investment Opportunities
                            </div>
                            <p class="text-lg -tracking-[0.5px] text-[#2C2C2C] transition-all duration-300 group-hover:text-[#F6F9F0] lg:text-xl xl:text-2xl">
                                We offer individuals the opportunity to invest in
                                early-stage cryptocurrency projects. By participating in
                                an ICO, investors can potentially gain exposure.
                            </p>
                        </div>
                        <a href="{{ url('servicedetails') }}" class="relative inline-flex h-[50px] w-[50px] items-center justify-center rounded-[50%] bg-black text-3xl text-[#F6F9F0] transition-all duration-300 group-hover:bg-[#F6F9F0] group-hover:text-black">
                            <span><i class="fa-regular fa-arrow-right"></i></span>
                        </a>
                    </div>
                </div>
                <!-- Service Item -->
                <!-- Service Item -->
                <div class="jos">
                    <div class="group flex flex-col items-start justify-between gap-x-10 gap-y-10 rounded-[10px] p-10 transition-all duration-300 hover:bg-black md:flex-row md:items-center lg:gap-x-20 xl:gap-x-[94px]">
                        <div class="relative flex h-auto w-16 items-center justify-center md:w-12 lg:w-16 xl:w-20">
                            <img src="{{ asset('assets/img/icons/icon-black-home-13-service-3.svg') }}" alt="icon-black-home-13-service-3" width="81" height="80" class="h-auto w-full opacity-100 transition-all duration-300 group-hover:opacity-0" />
                            <img src="{{ asset('assets/img/icons/icon-white-home-13-service-3.svg') }}" alt="icon-white-home-13-service-3" width="81" height="80" class="absolute h-auto w-full opacity-0 transition-all duration-300 group-hover:opacity-100" />
                        </div>
                        <div class="flex-1">
                            <div class="mb-4 font-Outfit text-3xl font-medium leading-[1.4] text-black transition-all duration-300 group-hover:text-[#F6F9F0]">
                                Access to Innovative Projects
                            </div>
                            <p class="text-lg -tracking-[0.5px] text-[#2C2C2C] transition-all duration-300 group-hover:text-[#F6F9F0] lg:text-xl xl:text-2xl">
                                By participating in an ICO, you can gain early access to
                                innovative technologies and concepts that may disrupt
                                industries or introduce new solutions.
                            </p>
                        </div>
                        <a href="{{ url('servicedetails') }}" class="relative inline-flex h-[50px] w-[50px] items-center justify-center rounded-[50%] bg-black text-3xl text-[#F6F9F0] transition-all duration-300 group-hover:bg-[#F6F9F0] group-hover:text-black">
                            <span><i class="fa-regular fa-arrow-right"></i></span>
                        </a>
                    </div>
                </div>
                <!-- Service Item -->
                <!-- Service Item -->
                <div class="jos">
                    <div class="group flex flex-col items-start justify-between gap-x-10 gap-y-10 rounded-[10px] p-10 transition-all duration-300 hover:bg-black md:flex-row md:items-center lg:gap-x-20 xl:gap-x-[94px]">
                        <div class="relative flex h-auto w-16 items-center justify-center md:w-12 lg:w-16 xl:w-20">
                            <img src="{{ asset('assets/img/icons/icon-black-home-13-service-4.svg') }}" alt="icon-black-home-13-service-4" width="80" height="80" class="h-auto w-full opacity-100 transition-all duration-300 group-hover:opacity-0" />
                            <img src="{{ asset('assets/img/icons/icon-white-home-13-service-4.svg') }}" alt="icon-white-home-13-service-4" width="80" height="80" class="absolute h-auto w-full opacity-0 transition-all duration-300 group-hover:opacity-100" />
                        </div>
                        <div class="flex-1">
                            <div class="mb-4 font-Outfit text-3xl font-medium leading-[1.4] text-black transition-all duration-300 group-hover:text-[#F6F9F0]">
                                Governance Participation
                            </div>
                            <p class="text-lg -tracking-[0.5px] text-[#2C2C2C] transition-all duration-300 group-hover:text-[#F6F9F0] lg:text-xl xl:text-2xl">
                                In projects that utilize decentralized governance, our
                                ICO participants may have the opportunity to participate
                                in decision-making processes.
                            </p>
                        </div>
                        <a href="{{ url('servicedetails') }}" class="relative inline-flex h-[50px] w-[50px] items-center justify-center rounded-[50%] bg-black text-3xl text-[#F6F9F0] transition-all duration-300 group-hover:bg-[#F6F9F0] group-hover:text-black">
                            <span><i class="fa-regular fa-arrow-right"></i></span>
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
</section>
<!-- Service Section End -->

<!-- Content Section Start -->
<section class="section-content">
    <!-- Section Background -->
    <div class="bg-[#EAEEE3]">
        <!-- Section Space -->
        <div class="section-space">
            <!-- Section Container -->
            <div class="container-default">
                <div class="flex flex-col gap-y-20 lg:gap-y-[100px] xl:gap-y-[120px]">
                    <!-- Content Area Single -->
                    <div class="grid items-center gap-10 lg:grid-cols-[1fr_minmax(0,_0.6fr)] lg:gap-24">
                        <!-- Content Block Left -->
                        <div class="jos" data-jos_animation="fade-right">
                            <!-- Section Wrapper -->
                            <div>
                                <!-- Section Block -->
                                <div class="mb-5">
                                    <h2 class="font-Outfit text-4xl font-medium uppercase leading-[1.15] -tracking-[2px] text-black sm:text-5xl lg:text-6xl xl:text-[70px] xxl:text-[80px]">
                                        Diversify your investments here
                                    </h2>
                                </div>
                                <!-- Section Block -->
                            </div>
                            <!-- Section Wrapper -->
                            <!-- Content Text -->
                            <p class="text-[#2C2C2C]">
                                Start small with Invest, test your strategy with Trade,
                                or climb fast with Earnings. We offer early investors
                                additional incentives, discounted token prices, bonus
                                tokens, or exclusive access to certain features or
                                services.
                            </p>
                            <!-- Content List -->
                            <ul class="flex flex-col gap-y-8 font-Outfit text-2xl font-medium leading-[1.33] -tracking-[1] text-black lg:gap-y-10 lg:text-3xl">
                                <!-- Content Item -->
                                <li class="flex items-center gap-6">
                                    <span class="inline-flex h-[50px] w-[50px] flex-none items-center justify-center rounded-[50%] bg-[#48C96C]">
                                        1
                                    </span>
                                    It starts with buying coins as you like
                                </li>
                                <!-- Content Item -->
                                <!-- Content Item -->
                                <li class="flex items-center gap-6">
                                    <span class="inline-flex h-[50px] w-[50px] flex-none items-center justify-center rounded-[50%] bg-[#FC6ADC]">
                                        2
                                    </span>
                                    Next, your money is turned into Chain
                                </li>
                                <!-- Content Item -->
                                <!-- Content Item -->
                                <li class="flex items-center gap-6">
                                    <span class="inline-flex h-[50px] w-[50px] flex-none items-center justify-center rounded-[50%] bg-[#FFA767]">
                                        3
                                    </span>
                                    Boom! 20% interest made overnight
                                </li>
                                <!-- Content Item -->
                            </ul>
                            <!-- Content List -->
                        </div>
                        <!-- Content Block Left -->
                        <!-- Content Block Right -->
                        <div class="jos" data-jos_animation="fade-left">
                            <div class="mx-auto lg:mx-0 max-w-full sm:max-w-[80%] md:max-w-[50%] lg:max-w-full">
                                <img src="{{ asset('assets/img/th-13/content-img-2.png') }}" alt="content-img-2" width="460" height="500" class="h-auto w-full" />
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
    </div>
    <!-- Section Background -->
</section>
<!-- Content Section End -->

<!-- Currency Section Start -->
<section class="section-currency" id="section-currency">
    <!-- Section Space -->
    <div class="section-space">
        <!-- Section Container -->
        <div class="container-default">
            <!-- Section Content Wrapper -->
            <div class="jos mb-[60px] xl:mb-20">
                <!-- Section Content Block -->
                <div class="mx-auto max-w-[940px]">
                    <div class="mb-5">
                        <h2 class="text-center font-Outfit text-4xl font-medium uppercase leading-[1.15] -tracking-[2px] text-black sm:text-5xl lg:text-6xl xl:text-[70px] xxl:text-[80px]">
                            We offer participants endless possibilities
                        </h2>
                    </div>
                </div>
                <!-- Section Content Block -->
            </div>
            <!-- Section Content Wrapper -->

            <!-- Currency List -->
            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                <!-- Currency Item -->
                <div class="jos" data-jos_animation="flip-left">
                    <div class="h-full rounded-[10px] bg-[#EAEEE3] px-6 py-10 text-center">
                        <div class="mx-auto mb-[30px] h-[60px] w-[60px] rounded-[50%]">
                            <img src="{{ asset('assets/img/th-13/cryptocurrency-img-1.png') }}" alt="cryptocurrency-img-1" width="60" height="60" />
                        </div>
                        <div class="mb-4 font-Outfit text-3xl font-medium leading-[1.33] text-black">
                            Bitcoin
                        </div>
                        <div class="text-xl leading-[1.6] -tracking-[0.5px]">
                            Market Cap-<span class="block text-2xl text-black xxl:inline-block">$593.75B</span>
                        </div>
                    </div>
                </div>
                <!-- Currency Item -->
                <!-- Currency Item -->
                <div class="jos" data-jos_animation="flip-left">
                    <div class="h-full rounded-[10px] bg-[#EAEEE3] px-6 py-10 text-center">
                        <div class="mx-auto mb-[30px] h-[60px] w-[60px] rounded-[50%]">
                            <img src="{{ asset('assets/img/th-13/cryptocurrency-img-2.png') }}" alt="cryptocurrency-img-2" width="60" height="60" />
                        </div>
                        <div class="mb-4 font-Outfit text-3xl font-medium leading-[1.33] text-black">
                            Ethereum
                        </div>
                        <div class="text-xl leading-[1.6] -tracking-[0.5px]">
                            Market Cap-<span class="block text-2xl text-black xxl:inline-block">$226,155B</span>
                        </div>
                    </div>
                </div>
                <!-- Currency Item -->
                <!-- Currency Item -->
                <div class="jos" data-jos_animation="flip-left">
                    <div class="h-full rounded-[10px] bg-[#EAEEE3] px-6 py-10 text-center">
                        <div class="mx-auto mb-[30px] h-[60px] w-[60px] rounded-[50%]">
                            <img src="{{ asset('assets/img/th-13/cryptocurrency-img-3.png') }}" alt="cryptocurrency-img-3" width="60" height="60" />
                        </div>
                        <div class="mb-4 font-Outfit text-3xl font-medium leading-[1.33] text-black">
                            Litecoin
                        </div>
                        <div class="text-xl leading-[1.6] -tracking-[0.5px]">
                            Market Cap-<span class="block text-2xl text-black xxl:inline-block">$7,390B</span>
                        </div>
                    </div>
                </div>
                <!-- Currency Item -->
                <!-- Currency Item -->
                <div class="jos" data-jos_animation="flip-left">
                    <div class="h-full rounded-[10px] bg-[#EAEEE3] px-6 py-10 text-center">
                        <div class="mx-auto mb-[30px] h-[60px] w-[60px] rounded-[50%]">
                            <img src="{{ asset('assets/img/th-13/cryptocurrency-img-4.png') }}" alt="cryptocurrency-img-4" width="60" height="60" />
                        </div>
                        <div class="mb-4 font-Outfit text-3xl font-medium leading-[1.33] text-black">
                            TRON
                        </div>
                        <div class="text-xl leading-[1.6] -tracking-[0.5px]">
                            Market Cap-<span class="block text-2xl text-black xxl:inline-block">$7,026,852B</span>
                        </div>
                    </div>
                </div>
                <!-- Currency Item -->
                <!-- Currency Item -->
                <div class="jos" data-jos_animation="flip-left">
                    <div class="h-full rounded-[10px] bg-[#EAEEE3] px-6 py-10 text-center">
                        <div class="mx-auto mb-[30px] h-[60px] w-[60px] rounded-[50%]">
                            <img src="{{ asset('assets/img/th-13/cryptocurrency-img-5.png') }}" alt="cryptocurrency-img-5" width="60" height="60" />
                        </div>
                        <div class="mb-4 font-Outfit text-3xl font-medium leading-[1.33] text-black">
                            BNB
                        </div>
                        <div class="text-xl leading-[1.6] -tracking-[0.5px]">
                            Market Cap-<span class="block text-2xl text-black xxl:inline-block">$38,392B</span>
                        </div>
                    </div>
                </div>
                <!-- Currency Item -->
                <!-- Currency Item -->
                <div class="jos" data-jos_animation="flip-left">
                    <div class="h-full rounded-[10px] bg-[#EAEEE3] px-6 py-10 text-center">
                        <div class="mx-auto mb-[30px] h-[60px] w-[60px] rounded-[50%]">
                            <img src="{{ asset('assets/img/th-13/cryptocurrency-img-6.png') }}" alt="cryptocurrency-img-6" width="60" height="60" />
                        </div>
                        <div class="mb-4 font-Outfit text-3xl font-medium leading-[1.33] text-black">
                            Cardano
                        </div>
                        <div class="text-xl leading-[1.6] -tracking-[0.5px]">
                            Market Cap-<span class="block text-2xl text-black xxl:inline-block">$10,105B</span>
                        </div>
                    </div>
                </div>
                <!-- Currency Item -->
                <!-- Currency Item -->
                <div class="jos" data-jos_animation="flip-left">
                    <div class="h-full rounded-[10px] bg-[#EAEEE3] px-6 py-10 text-center">
                        <div class="mx-auto mb-[30px] h-[60px] w-[60px] rounded-[50%]">
                            <img src="{{ asset('assets/img/th-13/cryptocurrency-img-7.png') }}" alt="cryptocurrency-img-7" width="60" height="60" />
                        </div>
                        <div class="mb-4 font-Outfit text-3xl font-medium leading-[1.33] text-black">
                            Tether
                        </div>
                        <div class="text-xl leading-[1.6] -tracking-[0.5px]">
                            Market Cap-<span class="block text-2xl text-black xxl:inline-block">$83,424B</span>
                        </div>
                    </div>
                </div>
                <!-- Currency Item -->
                <!-- Currency Item -->
                <div class="jos" data-jos_animation="flip-left">
                    <div class="h-full rounded-[10px] bg-[#EAEEE3] px-6 py-10 text-center">
                        <div class="mx-auto mb-[30px] h-[60px] w-[60px] rounded-[50%]">
                            <img src="{{ asset('assets/img/th-13/cryptocurrency-img-8.png') }}" alt="cryptocurrency-img-8" width="60" height="60" />
                        </div>
                        <div class="mb-4 font-Outfit text-3xl font-medium leading-[1.33] text-black">
                            EUR
                        </div>
                        <div class="text-xl leading-[1.6] -tracking-[0.5px]">
                            Market Cap-<span class="block text-2xl text-black xxl:inline-block">$6,562,618B</span>
                        </div>
                    </div>
                </div>
                <!-- Currency Item -->
            </div>
            <!-- Currency List -->

            <div class="jos mt-8 flex justify-center lg:mt-[50px]">
                <a href="#" class="group relative z-10 inline-block">
                    <div class="btn is-large is-rounded border-black bg-[#F6F9F0] text-black">
                        Explore All Cryptos
                    </div>
                    <div class="is-rounded absolute inset-0 -z-10 translate-x-[5px] translate-y-[5px] border border-black bg-black transition-all duration-300 ease-linear group-hover:translate-x-0 group-hover:translate-y-0"></div>
                </a>
            </div>
        </div>
        <!-- Section Container -->
    </div>
    <!-- Section Space -->
</section>
<!-- Currency Section End -->

<!-- Testimonial Section Start -->
<section class="section-testimonial" id="section-testimonial">
    <!-- Section Background -->
    <div class="bg-[#EAEEE3]">
        <!-- Section Space -->
        <div class="section-space">
            <!-- Section Container -->
            <div class="container-default">
                <!-- Section Content Wrapper -->
                <div class="jos mb-[60px] xl:mb-20">
                    <!-- Section Content Block -->
                    <div class="max-w-[746px]">
                        <div class="mb-5">
                            <h2 class="font-Outfit text-4xl font-medium uppercase leading-[1.15] -tracking-[2px] text-black sm:text-5xl lg:text-6xl xl:text-[70px] xxl:text-[80px]">
                                We have millions of investors
                            </h2>
                        </div>
                    </div>
                    <!-- Section Content Block -->
                </div>
                <!-- Section Content Wrapper -->

                <!-- Testimonial List -->
                <div class="grid grid-cols-1 gap-x-6 gap-y-10 md:grid-cols-2 lg:grid-cols-3">
                    <!-- Testimonial Item -->
                    <div class="jos" data-jos_animation="fade-left" data-jos_delay="0">
                        <div class="mb-7 h-[66px] w-[66px] overflow-hidden rounded-[50%] border-2 border-black">
                            <img src="{{ asset('assets/img/th-13/testimonial-user-1.png') }}" alt="testimonial-user-1" width="66" height="66" class="h-full w-full object-cover" />
                        </div>
                        <blockquote class="mb-4 text-xl text-black lg:text-2xl">
                            This is a great investment opportunity & keep the good
                            work. I wish it remain like this forever I'm happy to be
                            part of the opportunity.
                        </blockquote>
                        <span class="block font-semibold text-black">Dominika Smith</span>
                    </div>
                    <!-- Testimonial Item -->
                    <!-- Testimonial Item -->
                    <div class="jos" data-jos_animation="fade-left" data-jos_delay="0.3">
                        <div class="mb-7 h-[66px] w-[66px] overflow-hidden rounded-[50%] border-2 border-black">
                            <img src="{{ asset('assets/img/th-13/testimonial-user-2.png') }}" alt="testimonial-user-2" width="66" height="66" class="h-full w-full object-cover" />
                        </div>
                        <blockquote class="mb-4 text-xl text-black lg:text-2xl">
                            This company is unique and pretty interesting. They have
                            so many deadlines and the percentage is so high. So I
                            invested here.
                        </blockquote>
                        <span class="block font-semibold text-black">Robert Mocks</span>
                    </div>
                    <!-- Testimonial Item -->
                    <!-- Testimonial Item -->
                    <div class="jos" data-jos_animation="fade-left" data-jos_delay="0.6">
                        <div class="mb-7 h-[66px] w-[66px] overflow-hidden rounded-[50%] border-2 border-black">
                            <img src="{{ asset('assets/img/th-13/testimonial-user-3.png') }}" alt="testimonial-user-3" width="66" height="66" class="h-full w-full object-cover" />
                        </div>
                        <blockquote class="mb-4 text-xl text-black lg:text-2xl">
                            I can't stop appreciating this company for all the
                            incredible job done and all investors are becoming
                            successful everyday. Am happy for been here
                        </blockquote>
                        <span class="block font-semibold text-black">Alex Mentoris</span>
                    </div>
                    <!-- Testimonial Item -->
                </div>
                <!-- Testimonial List -->
            </div>
            <!-- Section Container -->
        </div>
        <!-- Section Space -->
    </div>
    <!-- Section Background -->
</section>
<!-- Testimonial Section End -->

<!-- FAQ Section Start -->
<section class="section-faq" id="section-faq">
    <!-- Section Space -->
    <div class="section-space">
        <!-- Section Container -->
        <div class="container-default">
            <!-- Section Content Wrapper -->
            <div class="jos mb-[60px] xl:mb-20">
                <!-- Section Content Block -->
                <div class="mx-auto max-w-[856px]">
                    <div class="mb-5">
                        <h2 class="text-center font-Outfit text-4xl font-medium uppercase leading-[1.15] -tracking-[2px] text-black sm:text-5xl lg:text-6xl xl:text-[70px] xxl:text-[80px]">
                            Common questions about investing
                        </h2>
                    </div>
                </div>
                <!-- Section Content Block -->
            </div>
            <!-- Section Content Wrapper -->

            <!-- Faq Area -->
            <div class="grid grid-cols-1 items-start gap-5 md:grid-cols-2 md:gap-16">
                <!-- Accordion List -->
                <ul class="jos grid grid-cols-1 gap-6" data-jos_animation="fade-right">
                    <!-- Accordion Item -->
                    <li class="accordion-item active overflow-hidden border-b border-[#CBD2D9] pb-[30px] has-[.accordion-icon-4]:rounded-none md:last:border-none">
                        <!-- Accordion Header -->
                        <div class="accordion-header relative pr-8 font-Outfit text-2xl font-medium leading-[1.33] text-black lg:text-3xl">
                            <button class="flex flex-1 gap-x-6 text-left">
                                <span class="flex-1"> Create a free account </span>
                            </button>
                            <div class="accordion-icon-4 absolute right-0 top-0 text-xl">
                                <i class="fa-solid fa-chevron-down"></i>
                            </div>
                        </div>
                        <!-- Accordion Header -->
                        <!-- Accordion Body -->
                        <div class="accordion-body text-xl -tracking-[0.5px] text-[#2C2C2C] lg:text-2xl">
                            <p class="pt-4">
                                Open a free account with no credit card. Easy to use
                                anytime on any device.
                            </p>
                        </div>
                        <!-- Accordion Body -->
                    </li>
                    <!-- Accordion Item -->
                    <!-- Accordion Item -->
                    <li class="accordion-item overflow-hidden border-b border-[#CBD2D9] pb-[30px] has-[.accordion-icon-4]:rounded-none md:last:border-none">
                        <!-- Accordion Header -->
                        <div class="accordion-header relative pr-8 font-Outfit text-2xl font-medium leading-[1.33] text-black lg:text-3xl">
                            <button class="flex flex-1 gap-x-6 text-left">
                                <span class="flex-1">What are the risks associated with ICOs?</span>
                            </button>
                            <div class="accordion-icon-4 absolute right-0 top-0 text-xl">
                                <i class="fa-solid fa-chevron-down"></i>
                            </div>
                        </div>
                        <!-- Accordion Header -->
                        <!-- Accordion Body -->
                        <div class="accordion-body text-xl -tracking-[0.5px] text-[#2C2C2C] lg:text-2xl">
                            <p class="pt-4">
                                Open a free account with no credit card. Easy to use
                                anytime on any device.
                            </p>
                        </div>
                        <!-- Accordion Body -->
                    </li>
                    <!-- Accordion Item -->
                    <!-- Accordion Item -->
                    <li class="accordion-item overflow-hidden border-b border-[#CBD2D9] pb-[30px] has-[.accordion-icon-4]:rounded-none md:last:border-none">
                        <!-- Accordion Header -->
                        <div class="accordion-header relative pr-8 font-Outfit text-2xl font-medium leading-[1.33] text-black lg:text-3xl">
                            <button class="flex flex-1 gap-x-6 text-left">
                                <span class="flex-1">How can I participate in an ICO?</span>
                            </button>
                            <div class="accordion-icon-4 absolute right-0 top-0 text-xl">
                                <i class="fa-solid fa-chevron-down"></i>
                            </div>
                        </div>
                        <!-- Accordion Header -->
                        <!-- Accordion Body -->
                        <div class="accordion-body text-xl -tracking-[0.5px] text-[#2C2C2C] lg:text-2xl">
                            <p class="pt-4">
                                Open a free account with no credit card. Easy to use
                                anytime on any device.
                            </p>
                        </div>
                        <!-- Accordion Body -->
                    </li>
                    <!-- Accordion Item -->
                </ul>
                <!-- Accordion List -->
                <!-- Accordion List -->
                <ul class="jos grid grid-cols-1 gap-6" data-jos_animation="fade-left">
                    <!-- Accordion Item -->
                    <li class="accordion-item overflow-hidden border-b border-[#CBD2D9] pb-[30px] has-[.accordion-icon-4]:rounded-none md:last:border-none">
                        <!-- Accordion Header -->
                        <div class="accordion-header relative pr-8 font-Outfit text-2xl font-medium leading-[1.33] text-black lg:text-3xl">
                            <button class="flex flex-1 gap-x-6 text-left">
                                <span class="flex-1">Can I start trading with just $1?</span>
                            </button>
                            <div class="accordion-icon-4 absolute right-0 top-0 text-xl">
                                <i class="fa-solid fa-chevron-down"></i>
                            </div>
                        </div>
                        <!-- Accordion Header -->
                        <!-- Accordion Body -->
                        <div class="accordion-body text-xl -tracking-[0.5px] text-[#2C2C2C] lg:text-2xl">
                            <p class="pt-4">
                                Open a free account with no credit card. Easy to use
                                anytime on any device.
                            </p>
                        </div>
                        <!-- Accordion Body -->
                    </li>
                    <!-- Accordion Item -->
                    <!-- Accordion Item -->
                    <li class="accordion-item overflow-hidden border-b border-[#CBD2D9] pb-[30px] has-[.accordion-icon-4]:rounded-none md:last:border-none">
                        <!-- Accordion Header -->
                        <div class="accordion-header relative pr-8 font-Outfit text-2xl font-medium leading-[1.33] text-black lg:text-3xl">
                            <button class="flex flex-1 gap-x-6 text-left">
                                <span class="flex-1">How to calculate the handling fee?</span>
                            </button>
                            <div class="accordion-icon-4 absolute right-0 top-0 text-xl">
                                <i class="fa-solid fa-chevron-down"></i>
                            </div>
                        </div>
                        <!-- Accordion Header -->
                        <!-- Accordion Body -->
                        <div class="accordion-body text-xl -tracking-[0.5px] text-[#2C2C2C] lg:text-2xl">
                            <p class="pt-4">
                                Open a free account with no credit card. Easy to use
                                anytime on any device.
                            </p>
                        </div>
                        <!-- Accordion Body -->
                    </li>
                    <!-- Accordion Item -->
                    <!-- Accordion Item -->
                    <li class="accordion-item overflow-hidden border-b border-[#CBD2D9] pb-[30px] has-[.accordion-icon-4]:rounded-none md:last:border-none">
                        <!-- Accordion Header -->
                        <div class="accordion-header relative pr-8 font-Outfit text-2xl font-medium leading-[1.33] text-black lg:text-3xl">
                            <button class="flex flex-1 gap-x-6 text-left">
                                <span class="flex-1">What are the benefits of investing?</span>
                            </button>
                            <div class="accordion-icon-4 absolute right-0 top-0 text-xl">
                                <i class="fa-solid fa-chevron-down"></i>
                            </div>
                        </div>
                        <!-- Accordion Header -->
                        <!-- Accordion Body -->
                        <div class="accordion-body text-xl -tracking-[0.5px] text-[#2C2C2C] lg:text-2xl">
                            <p class="pt-4">
                                Open a free account with no credit card. Easy to use
                                anytime on any device.
                            </p>
                        </div>
                        <!-- Accordion Body -->
                    </li>
                    <!-- Accordion Item -->
                </ul>
                <!-- Accordion List -->
            </div>
            <!-- Faq Area -->
        </div>
        <!-- Section Container -->
    </div>
    <!-- Section Space -->
</section>
<!-- FAQ Section End -->

<!-- CTA Section Start -->
<section class="section-cta">
    <!-- Section Background -->
    <div class="bg-[#48C96C]">
        <!-- Section Space -->
        <div class="section-space">
            <!-- Section Container -->
            <div class="container-default">
                <!-- CTA Area -->
                <div class="grid grid-cols-1 gap-10 md:grid-cols-[0.55fr_minmax(0,_1fr)] md:gap-16 lg:gap-28 xl:gap-48 xxl:gap-[234px]">
                    <!-- CTA Image Block -->
                    <div class="jos order-2 mx-auto h-auto w-auto md:order-1 md:w-full" data-jos_animation="fade-left">
                        <img src="{{ asset('assets/img/th-13/cta-img.png') }}" alt="cta-img" width="376" height="350" class="h-auto w-full" />
                    </div>
                    <!-- CTA Image Block -->
                    <div class="jos order-1 md:order-2" data-jos_animation="fade-right">
                        <!-- Section Content Wrapper -->
                        <div class="mb-8 lg:mb-[50px]">
                            <!-- Section Content Block -->
                            <div class="max-w-[746px]">
                                <div class="mb-5">
                                    <h2 class="font-Outfit text-4xl font-medium uppercase leading-[1.15] -tracking-[2px] text-black sm:text-5xl lg:text-6xl xl:text-[70px] xxl:text-[80px]">
                                        Ready for a new crypto project
                                    </h2>
                                </div>
                            </div>
                            <!-- Section Content Block -->
                        </div>
                        <!-- Section Content Wrapper -->
                        <a href="#" class="group relative z-10 inline-block">
                            <div class="btn is-large is-rounded border-black bg-[#F6F9F0] text-black">
                                Start Your Journey
                            </div>
                            <div class="is-rounded absolute inset-0 -z-10 translate-x-[5px] translate-y-[5px] border border-black bg-black transition-all duration-300 ease-linear group-hover:translate-x-0 group-hover:translate-y-0"></div>
                        </a>
                    </div>
                </div>
                <!-- CTA Area -->
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
    <div class="bg-black">
        <!-- Footer Center Spacing -->
        <div class="py-[60px] lg:py-20">
            <!-- Section Container -->
            <div class="container-default">
                <!-- Footer Widget List -->
                <div class="grid gap-x-16 gap-y-10 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 xl:gap-x-20">
                    <!-- Footer Widget Item -->
                    <div class="flex flex-col gap-y-7">
                        <!-- Footer Widget Title -->
                        <div class="text-xl font-semibold capitalize text-[#F6F9F0]">
                            Primary Pages
                        </div>
                        <!-- Footer Navbar -->
                        <ul class="flex flex-col gap-y-[10px] capitalize">
                            <li>
                                <a href="{{ url('index') }}" class="text-[#F6F9F0]/80 underline-offset-4 transition-all duration-300 ease-linear hover:underline">Home</a>
                            </li>
                            <li>
                                <a href="{{ url('about') }}" class="text-[#F6F9F0]/80 underline-offset-4 transition-all duration-300 ease-linear hover:underline">About Us</a>
                            </li>
                            <li>
                                <a href="{{ url('services') }}" class="text-[#F6F9F0]/80 underline-offset-4 transition-all duration-300 ease-linear hover:underline">Services</a>
                            </li>
                            <li>
                                <a href="{{ url('pricing') }}" class="text-[#F6F9F0]/80 underline-offset-4 transition-all duration-300 ease-linear hover:underline">pricing</a>
                            </li>
                            <li>
                                <a href="{{ url('contact') }}" class="text-[#F6F9F0]/80 underline-offset-4 transition-all duration-300 ease-linear hover:underline">Contact</a>
                            </li>
                        </ul>
                    </div>
                    <!-- Footer Widget Item -->

                    <!-- Footer Widget Item -->
                    <div class="flex flex-col gap-y-6">
                        <!-- Footer Title -->
                        <div class="text-xl font-semibold capitalize text-white">
                            Learn
                        </div>
                        <!-- Footer Title -->

                        <!-- Footer Navbar -->
                        <ul class="flex flex-col gap-y-[10px] capitalize">
                            <li>
                                <a href="{{ url('blog') }}" class="text-[#F6F9F0]/80 underline-offset-4 transition-all duration-300 ease-linear hover:underline">Masco Blog</a>
                            </li>
                            <li>
                                <a href="{{ url('index6') }}" class="text-[#F6F9F0]/80 underline-offset-4 transition-all duration-300 ease-linear hover:underline">Cold Email</a>
                            </li>
                            <li>
                                <a href="{{ url('index2') }}" class="text-[#F6F9F0]/80 underline-offset-4 transition-all duration-300 ease-linear hover:underline">Prospecting Podcast</a>
                            </li>
                            <li>
                                <a href="{{ url('index14') }}" class="text-[#F6F9F0]/80 underline-offset-4 transition-all duration-300 ease-linear hover:underline">Follow-Up Strategy</a>
                            </li>
                            <li>
                                <a href="{{ url('index4') }}" class="text-[#F6F9F0]/80 underline-offset-4 transition-all duration-300 ease-linear hover:underline">Email Analyzer</a>
                            </li>
                        </ul>
                    </div>
                    <!-- Footer Widget Item-->

                    <!-- Footer Widget Item -->
                    <div class="flex flex-col gap-y-6">
                        <!-- Footer Title -->
                        <div class="text-xl font-semibold capitalize text-[#F6F9F0]">
                            Utility pages
                        </div>
                        <!-- Footer Title -->

                        <!-- Footer Navbar -->
                        <ul class="flex flex-col gap-y-[10px] capitalize">
                            <li>
                                <a href="{{ url('signup') }}" class="text-[#F6F9F0]/80 underline-offset-4 transition-all duration-300 ease-linear hover:underline">Signup</a>
                            </li>
                            <li>
                                <a href="{{ url('login') }}" class="text-[#F6F9F0]/80 underline-offset-4 transition-all duration-300 ease-linear hover:underline">Login</a>
                            </li>
                            <li>
                                <a href="{{ url('error404') }}" class="text-[#F6F9F0]/80 underline-offset-4 transition-all duration-300 ease-linear hover:underline">404 Not found</a>
                            </li>
                            <li>
                                <a href="{{ url('resetpassword') }}" class="text-[#F6F9F0]/80 underline-offset-4 transition-all duration-300 ease-linear hover:underline">Password Reset</a>
                            </li>
                        </ul>
                    </div>
                    <!-- Footer Widget Item-->

                    <!-- Footer Widget Item -->
                    <div class="flex flex-col gap-y-6">
                        <!-- Footer Title -->
                        <div class="text-xl font-semibold capitalize text-[#F6F9F0]">
                            Resources
                        </div>
                        <!-- Footer Title -->

                        <!-- Footer Navbar -->
                        <ul class="flex flex-col gap-y-[10px] capitalize">
                            <li>
                                <a href="https://www.example.com/" target="_blank" rel="noopener noreferrer" class="text-[#F6F9F0]/80 underline-offset-4 transition-all duration-300 ease-linear hover:underline">Support</a>
                            </li>
                            <li>
                                <a href="https://www.example.com/" target="_blank" rel="noopener noreferrer" class="text-[#F6F9F0]/80 underline-offset-4 transition-all duration-300 ease-linear hover:underline">Privacy policy</a>
                            </li>
                            <li>
                                <a href="https://www.example.com/" target="_blank" rel="noopener noreferrer" class="text-[#F6F9F0]/80 underline-offset-4 transition-all duration-300 ease-linear hover:underline">Terms & Conditions</a>
                            </li>
                            <li>
                                <a href="https://www.example.com/" target="_blank" rel="noopener noreferrer" class="text-[#F6F9F0]/80 underline-offset-4 transition-all duration-300 ease-linear hover:underline">Strategic finance</a>
                            </li>
                            <li>
                                <a href="https://www.example.com/" target="_blank" rel="noopener noreferrer" class="text-[#F6F9F0]/80 underline-offset-4 transition-all duration-300 ease-linear hover:underline">Video guide</a>
                            </li>
                        </ul>
                    </div>
                    <!-- Footer Widget Item -->
                    <!-- Footer Widget Item -->
                    <div class="flex flex-col gap-y-6">
                        <!-- Footer Title -->
                        <div class="text-xl font-semibold capitalize text-[#F6F9F0]">
                            Community
                        </div>
                        <!-- Footer Title -->

                        <!-- Footer Social Link -->
                        <div class="flex flex-wrap gap-4">
                            <a href="https://twitter.com" target="_blank" rel="noopener noreferrer" class="flex h-[35px] w-[35px] items-center justify-center rounded-[50%] bg-white/10 text-sm text-white transition-all duration-300 hover:bg-white hover:text-black" aria-label="twitter">
                                <i class="fa-brands fa-x-twitter"></i>
                            </a>
                            <a href="https://www.facebook.com/" target="_blank" rel="noopener noreferrer" class="flex h-[35px] w-[35px] items-center justify-center rounded-[50%] bg-white/10 text-sm text-white transition-all duration-300 hover:bg-white hover:text-black" aria-label="facebook">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                            <a href="https://www.instagram.com/" target="_blank" rel="noopener noreferrer" class="flex h-[35px] w-[35px] items-center justify-center rounded-[50%] bg-white/10 text-sm text-white transition-all duration-300 hover:bg-white hover:text-black" aria-label="instagram">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                            <a href="https://www.github.com/" target="_blank" rel="noopener noreferrer" class="flex h-[35px] w-[35px] items-center justify-center rounded-[50%] bg-white/10 text-sm text-white transition-all duration-300 hover:bg-white hover:text-black" aria-label="github">
                                <i class="fa-brands fa-github"></i>
                            </a>
                            <a href="https://www.discord.com/" target="_blank" rel="noopener noreferrer" class="flex h-[35px] w-[35px] items-center justify-center rounded-[50%] bg-white/10 text-sm text-white transition-all duration-300 hover:bg-white hover:text-black" aria-label="discord">
                                <i class="fa-brands fa-discord"></i>
                            </a>
                            <a href="https://www.github.com/" target="_blank" rel="noopener noreferrer" class="flex h-[35px] w-[35px] items-center justify-center rounded-[50%] bg-white/10 text-sm text-white transition-all duration-300 hover:bg-white hover:text-black" aria-label="tiktok">
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
    <div class="horizontal-line -mt-px bg-[#F6F9F0]"></div>
    <!-- Footer Bottom -->
    <div class="bg-black text-[#F6F9F0]">
        <!-- Footer Bottom Spacing -->
        <div class="py-10">
            <!-- Section Container -->
            <div class="container-default">
                <div class="flex flex-wrap items-center justify-center gap-x-10 gap-y-5 md:justify-between">
                    <!-- Footer Logo -->
                    <a href="{{ url('index') }}" class="">
                        <img src="{{ asset('assets/img/logo-light.png') }}" alt="Masco" width="109" height="24" />
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