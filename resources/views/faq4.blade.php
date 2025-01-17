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
                <h1 class="breadcrumb-title">FAQs</h1>
                <ul class="breadcrumb-nav">
                    <li><a href="{{ url('index') }}">Home</a></li>
                    <li>FAQ</li>
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

<!-- FAQ Section Start -->
<div class="section-faq">
    <div class="relative z-10 overflow-hidden">
        <!-- Section Space -->
        <div class="section-space">
            <!-- Section Container -->
            <div class="container-default">
                <!-- FAQ Area -->
                <div class="grid gap-[30px] md:grid-cols-[minmax(0,0.5fr)_1fr] lg:grid-cols-[minmax(0,0.4fr)_1fr] xxl:grid-cols-[minmax(0,0.33fr)_1fr]">
                    <div>
                        <!-- Career Tab Button Block-->
                        <div class="flex flex-row flex-wrap justify-center gap-3 text-ColorBlack md:flex-col md:justify-start md:gap-6">
                            <button class="active tab-button tab-text text-left text-2xl font-semibold leading-[1.4] -tracking-[1px] xl:text-3xl" data-tab="general-question">
                                General Question
                            </button>
                            <button class="tab-button tab-text text-left text-2xl font-semibold leading-[1.4] -tracking-[1px] xl:text-3xl" data-tab="account-support">
                                Account & Support
                            </button>
                            <button class="tab-button tab-text text-left text-2xl font-semibold leading-[1.4] -tracking-[1px] xl:text-3xl" data-tab="purchasing-online">
                                Purchasing Online
                            </button>
                            <button class="tab-button tab-text text-left text-2xl font-semibold leading-[1.4] -tracking-[1px] xl:text-3xl" data-tab="technical-methods">
                                Technical Methods
                            </button>
                        </div>
                        <!-- Career Tab Button Block-->
                    </div>
                    <!-- FAQ Block -->
                    <div>
                        <!-- Accordion List -->
                        <ul class="tab-content grid gap-[34px]" id="general-question">
                            <!-- Accordion Item -->
                            <li class="accordion-item accordion-solid-shadow active">
                                <div class="overflow-hidden rounded-[10px] border-2 border-ColorBlack bg-white p-[30px]">
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
                                            A digital agency is a company that leverages
                                            digital channels to grow their clients’ brands
                                            online. ls and technologies such as web design,
                                            digital marketing, creative design and app
                                            development.
                                        </p>
                                    </div>
                                    <!-- Accordion Body -->
                                </div>
                            </li>
                            <!-- Accordion Item -->
                            <!-- Accordion Item -->
                            <li class="accordion-item accordion-solid-shadow">
                                <div class="overflow-hidden rounded-[10px] border-2 border-ColorBlack bg-white p-[30px]">
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
                                            A digital agency is a company that leverages
                                            digital channels to grow their clients’ brands
                                            online. ls and technologies such as web design,
                                            digital marketing, creative design and app
                                            development.
                                        </p>
                                    </div>
                                    <!-- Accordion Body -->
                                </div>
                            </li>
                            <!-- Accordion Item -->
                            <!-- Accordion Item -->
                            <li class="accordion-item accordion-solid-shadow">
                                <div class="overflow-hidden rounded-[10px] border-2 border-ColorBlack bg-white p-[30px]">
                                    <!-- Accordion Header -->
                                    <div class="accordion-header flex justify-between gap-6 text-xl font-semibold text-ColorBlack">
                                        <button class="flex-1 text-left">
                                            Q. Hiring a digital agency vs hiring in-house:
                                            What is the difference?
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
                                            A digital agency is a company that leverages
                                            digital channels to grow their clients’ brands
                                            online. ls and technologies such as web design,
                                            digital marketing, creative design and app
                                            development.
                                        </p>
                                    </div>
                                    <!-- Accordion Body -->
                                </div>
                            </li>
                            <!-- Accordion Item -->
                            <!-- Accordion Item -->
                            <li class="accordion-item accordion-solid-shadow">
                                <div class="overflow-hidden rounded-[10px] border-2 border-ColorBlack bg-white p-[30px]">
                                    <!-- Accordion Header -->
                                    <div class="accordion-header flex justify-between gap-6 text-xl font-semibold text-ColorBlack">
                                        <button class="flex-1 text-left">
                                            Q. What kind of support do I get from any plan?
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
                                            A digital agency is a company that leverages
                                            digital channels to grow their clients’ brands
                                            online. ls and technologies such as web design,
                                            digital marketing, creative design and app
                                            development.
                                        </p>
                                    </div>
                                    <!-- Accordion Body -->
                                </div>
                            </li>
                            <!-- Accordion Item -->
                            <!-- Accordion Item -->
                            <li class="accordion-item accordion-solid-shadow">
                                <div class="overflow-hidden rounded-[10px] border-2 border-ColorBlack bg-white p-[30px]">
                                    <!-- Accordion Header -->
                                    <div class="accordion-header flex justify-between gap-6 text-xl font-semibold text-ColorBlack">
                                        <button class="flex-1 text-left">
                                            Q. Do I have a promotional or discount code?
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
                                            A digital agency is a company that leverages
                                            digital channels to grow their clients’ brands
                                            online. ls and technologies such as web design,
                                            digital marketing, creative design and app
                                            development.
                                        </p>
                                    </div>
                                    <!-- Accordion Body -->
                                </div>
                            </li>
                            <!-- Accordion Item -->
                            <!-- Accordion Item -->
                            <li class="accordion-item accordion-solid-shadow">
                                <div class="overflow-hidden rounded-[10px] border-2 border-ColorBlack bg-white p-[30px]">
                                    <!-- Accordion Header -->
                                    <div class="accordion-header flex justify-between gap-6 text-xl font-semibold text-ColorBlack">
                                        <button class="flex-1 text-left">
                                            Q. What kind of support do I get from any plan?
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
                                            A digital agency is a company that leverages
                                            digital channels to grow their clients’ brands
                                            online. ls and technologies such as web design,
                                            digital marketing, creative design and app
                                            development.
                                        </p>
                                    </div>
                                    <!-- Accordion Body -->
                                </div>
                            </li>
                            <!-- Accordion Item -->
                        </ul>
                        <!-- Accordion List -->
                        <!-- Accordion List -->
                        <ul class="tab-content grid hidden gap-[34px]" id="account-support">
                            <!-- Accordion Item -->
                            <li class="accordion-item accordion-solid-shadow active">
                                <div class="overflow-hidden rounded-[10px] border-2 border-ColorBlack bg-white p-[30px]">
                                    <!-- Accordion Header -->
                                    <div class="accordion-header flex justify-between gap-6 text-xl font-semibold text-ColorBlack">
                                        <button class="flex-1 text-left">
                                            Q. What kind of support do I get from any plan?
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
                                            A digital agency is a company that leverages
                                            digital channels to grow their clients’ brands
                                            online. ls and technologies such as web design,
                                            digital marketing, creative design and app
                                            development.
                                        </p>
                                    </div>
                                    <!-- Accordion Body -->
                                </div>
                            </li>
                            <!-- Accordion Item -->
                            <!-- Accordion Item -->
                            <li class="accordion-item accordion-solid-shadow">
                                <div class="overflow-hidden rounded-[10px] border-2 border-ColorBlack bg-white p-[30px]">
                                    <!-- Accordion Header -->
                                    <div class="accordion-header flex justify-between gap-6 text-xl font-semibold text-ColorBlack">
                                        <button class="flex-1 text-left">
                                            Q. Do I have a promotional or discount code?
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
                                            A digital agency is a company that leverages
                                            digital channels to grow their clients’ brands
                                            online. ls and technologies such as web design,
                                            digital marketing, creative design and app
                                            development.
                                        </p>
                                    </div>
                                    <!-- Accordion Body -->
                                </div>
                            </li>
                            <!-- Accordion Item -->
                            <!-- Accordion Item -->
                            <li class="accordion-item accordion-solid-shadow">
                                <div class="overflow-hidden rounded-[10px] border-2 border-ColorBlack bg-white p-[30px]">
                                    <!-- Accordion Header -->
                                    <div class="accordion-header flex justify-between gap-6 text-xl font-semibold text-ColorBlack">
                                        <button class="flex-1 text-left">
                                            Q. What kind of support do I get from any plan?
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
                                            A digital agency is a company that leverages
                                            digital channels to grow their clients’ brands
                                            online. ls and technologies such as web design,
                                            digital marketing, creative design and app
                                            development.
                                        </p>
                                    </div>
                                    <!-- Accordion Body -->
                                </div>
                            </li>
                            <!-- Accordion Item -->
                            <!-- Accordion Item -->
                            <li class="accordion-item accordion-solid-shadow">
                                <div class="overflow-hidden rounded-[10px] border-2 border-ColorBlack bg-white p-[30px]">
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
                                            A digital agency is a company that leverages
                                            digital channels to grow their clients’ brands
                                            online. ls and technologies such as web design,
                                            digital marketing, creative design and app
                                            development.
                                        </p>
                                    </div>
                                    <!-- Accordion Body -->
                                </div>
                            </li>
                            <!-- Accordion Item -->
                            <!-- Accordion Item -->
                            <li class="accordion-item accordion-solid-shadow">
                                <div class="overflow-hidden rounded-[10px] border-2 border-ColorBlack bg-white p-[30px]">
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
                                            A digital agency is a company that leverages
                                            digital channels to grow their clients’ brands
                                            online. ls and technologies such as web design,
                                            digital marketing, creative design and app
                                            development.
                                        </p>
                                    </div>
                                    <!-- Accordion Body -->
                                </div>
                            </li>
                            <!-- Accordion Item -->
                            <!-- Accordion Item -->
                            <li class="accordion-item accordion-solid-shadow">
                                <div class="overflow-hidden rounded-[10px] border-2 border-ColorBlack bg-white p-[30px]">
                                    <!-- Accordion Header -->
                                    <div class="accordion-header flex justify-between gap-6 text-xl font-semibold text-ColorBlack">
                                        <button class="flex-1 text-left">
                                            Q. Hiring a digital agency vs hiring in-house:
                                            What is the difference?
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
                                            A digital agency is a company that leverages
                                            digital channels to grow their clients’ brands
                                            online. ls and technologies such as web design,
                                            digital marketing, creative design and app
                                            development.
                                        </p>
                                    </div>
                                    <!-- Accordion Body -->
                                </div>
                            </li>
                            <!-- Accordion Item -->
                        </ul>
                        <!-- Accordion List -->
                        <!-- Accordion List -->
                        <ul class="tab-content grid hidden gap-[34px]" id="purchasing-online">
                            <!-- Accordion Item -->
                            <li class="accordion-item accordion-solid-shadow active">
                                <div class="overflow-hidden rounded-[10px] border-2 border-ColorBlack bg-white p-[30px]">
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
                                            A digital agency is a company that leverages
                                            digital channels to grow their clients’ brands
                                            online. ls and technologies such as web design,
                                            digital marketing, creative design and app
                                            development.
                                        </p>
                                    </div>
                                    <!-- Accordion Body -->
                                </div>
                            </li>
                            <!-- Accordion Item -->
                            <!-- Accordion Item -->
                            <li class="accordion-item accordion-solid-shadow">
                                <div class="overflow-hidden rounded-[10px] border-2 border-ColorBlack bg-white p-[30px]">
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
                                            A digital agency is a company that leverages
                                            digital channels to grow their clients’ brands
                                            online. ls and technologies such as web design,
                                            digital marketing, creative design and app
                                            development.
                                        </p>
                                    </div>
                                    <!-- Accordion Body -->
                                </div>
                            </li>
                            <!-- Accordion Item -->
                            <!-- Accordion Item -->
                            <li class="accordion-item accordion-solid-shadow">
                                <div class="overflow-hidden rounded-[10px] border-2 border-ColorBlack bg-white p-[30px]">
                                    <!-- Accordion Header -->
                                    <div class="accordion-header flex justify-between gap-6 text-xl font-semibold text-ColorBlack">
                                        <button class="flex-1 text-left">
                                            Q. Hiring a digital agency vs hiring in-house:
                                            What is the difference?
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
                                            A digital agency is a company that leverages
                                            digital channels to grow their clients’ brands
                                            online. ls and technologies such as web design,
                                            digital marketing, creative design and app
                                            development.
                                        </p>
                                    </div>
                                    <!-- Accordion Body -->
                                </div>
                            </li>
                            <!-- Accordion Item -->
                            <!-- Accordion Item -->
                            <li class="accordion-item accordion-solid-shadow">
                                <div class="overflow-hidden rounded-[10px] border-2 border-ColorBlack bg-white p-[30px]">
                                    <!-- Accordion Header -->
                                    <div class="accordion-header flex justify-between gap-6 text-xl font-semibold text-ColorBlack">
                                        <button class="flex-1 text-left">
                                            Q. What kind of support do I get from any plan?
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
                                            A digital agency is a company that leverages
                                            digital channels to grow their clients’ brands
                                            online. ls and technologies such as web design,
                                            digital marketing, creative design and app
                                            development.
                                        </p>
                                    </div>
                                    <!-- Accordion Body -->
                                </div>
                            </li>
                            <!-- Accordion Item -->
                            <!-- Accordion Item -->
                            <li class="accordion-item accordion-solid-shadow">
                                <div class="overflow-hidden rounded-[10px] border-2 border-ColorBlack bg-white p-[30px]">
                                    <!-- Accordion Header -->
                                    <div class="accordion-header flex justify-between gap-6 text-xl font-semibold text-ColorBlack">
                                        <button class="flex-1 text-left">
                                            Q. Do I have a promotional or discount code?
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
                                            A digital agency is a company that leverages
                                            digital channels to grow their clients’ brands
                                            online. ls and technologies such as web design,
                                            digital marketing, creative design and app
                                            development.
                                        </p>
                                    </div>
                                    <!-- Accordion Body -->
                                </div>
                            </li>
                            <!-- Accordion Item -->
                            <!-- Accordion Item -->
                            <li class="accordion-item accordion-solid-shadow">
                                <div class="overflow-hidden rounded-[10px] border-2 border-ColorBlack bg-white p-[30px]">
                                    <!-- Accordion Header -->
                                    <div class="accordion-header flex justify-between gap-6 text-xl font-semibold text-ColorBlack">
                                        <button class="flex-1 text-left">
                                            Q. What kind of support do I get from any plan?
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
                                            A digital agency is a company that leverages
                                            digital channels to grow their clients’ brands
                                            online. ls and technologies such as web design,
                                            digital marketing, creative design and app
                                            development.
                                        </p>
                                    </div>
                                    <!-- Accordion Body -->
                                </div>
                            </li>
                            <!-- Accordion Item -->
                        </ul>
                        <!-- Accordion List -->
                        <!-- Accordion List -->
                        <ul class="tab-content grid hidden gap-[34px]" id="technical-methods">
                            <!-- Accordion Item -->
                            <li class="accordion-item accordion-solid-shadow active">
                                <div class="overflow-hidden rounded-[10px] border-2 border-ColorBlack bg-white p-[30px]">
                                    <!-- Accordion Header -->
                                    <div class="accordion-header flex justify-between gap-6 text-xl font-semibold text-ColorBlack">
                                        <button class="flex-1 text-left">
                                            Q. What kind of support do I get from any plan?
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
                                            A digital agency is a company that leverages
                                            digital channels to grow their clients’ brands
                                            online. ls and technologies such as web design,
                                            digital marketing, creative design and app
                                            development.
                                        </p>
                                    </div>
                                    <!-- Accordion Body -->
                                </div>
                            </li>
                            <!-- Accordion Item -->
                            <!-- Accordion Item -->
                            <li class="accordion-item accordion-solid-shadow">
                                <div class="overflow-hidden rounded-[10px] border-2 border-ColorBlack bg-white p-[30px]">
                                    <!-- Accordion Header -->
                                    <div class="accordion-header flex justify-between gap-6 text-xl font-semibold text-ColorBlack">
                                        <button class="flex-1 text-left">
                                            Q. Do I have a promotional or discount code?
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
                                            A digital agency is a company that leverages
                                            digital channels to grow their clients’ brands
                                            online. ls and technologies such as web design,
                                            digital marketing, creative design and app
                                            development.
                                        </p>
                                    </div>
                                    <!-- Accordion Body -->
                                </div>
                            </li>
                            <!-- Accordion Item -->
                            <!-- Accordion Item -->
                            <li class="accordion-item accordion-solid-shadow">
                                <div class="overflow-hidden rounded-[10px] border-2 border-ColorBlack bg-white p-[30px]">
                                    <!-- Accordion Header -->
                                    <div class="accordion-header flex justify-between gap-6 text-xl font-semibold text-ColorBlack">
                                        <button class="flex-1 text-left">
                                            Q. What kind of support do I get from any plan?
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
                                            A digital agency is a company that leverages
                                            digital channels to grow their clients’ brands
                                            online. ls and technologies such as web design,
                                            digital marketing, creative design and app
                                            development.
                                        </p>
                                    </div>
                                    <!-- Accordion Body -->
                                </div>
                            </li>
                            <!-- Accordion Item -->
                            <!-- Accordion Item -->
                            <li class="accordion-item accordion-solid-shadow">
                                <div class="overflow-hidden rounded-[10px] border-2 border-ColorBlack bg-white p-[30px]">
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
                                            A digital agency is a company that leverages
                                            digital channels to grow their clients’ brands
                                            online. ls and technologies such as web design,
                                            digital marketing, creative design and app
                                            development.
                                        </p>
                                    </div>
                                    <!-- Accordion Body -->
                                </div>
                            </li>
                            <!-- Accordion Item -->
                            <!-- Accordion Item -->
                            <li class="accordion-item accordion-solid-shadow">
                                <div class="overflow-hidden rounded-[10px] border-2 border-ColorBlack bg-white p-[30px]">
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
                                            A digital agency is a company that leverages
                                            digital channels to grow their clients’ brands
                                            online. ls and technologies such as web design,
                                            digital marketing, creative design and app
                                            development.
                                        </p>
                                    </div>
                                    <!-- Accordion Body -->
                                </div>
                            </li>
                            <!-- Accordion Item -->
                            <!-- Accordion Item -->
                            <li class="accordion-item accordion-solid-shadow">
                                <div class="overflow-hidden rounded-[10px] border-2 border-ColorBlack bg-white p-[30px]">
                                    <!-- Accordion Header -->
                                    <div class="accordion-header flex justify-between gap-6 text-xl font-semibold text-ColorBlack">
                                        <button class="flex-1 text-left">
                                            Q. Hiring a digital agency vs hiring in-house:
                                            What is the difference?
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
                                            A digital agency is a company that leverages
                                            digital channels to grow their clients’ brands
                                            online. ls and technologies such as web design,
                                            digital marketing, creative design and app
                                            development.
                                        </p>
                                    </div>
                                    <!-- Accordion Body -->
                                </div>
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
</div>
<!-- FAQ Section End -->

@endsection



@section('footer')
    <x-footer1/>
@endsection