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
                <h1 class="breadcrumb-title">Pricing</h1>
                <ul class="breadcrumb-nav">
                    <li><a href="{{ url('index') }}">Home</a></li>
                    <li>Pricing</li>
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

<!-- Pricing Section Start -->
<section class="section-pricing">
    <!-- Section Space -->
    <div class="section-space">
        <!-- Section Container -->
        <div class="container-default">
            <!-- Section Content Wrapper -->
            <div class="jos">
                <!-- Section Content Block -->
                <div class="mx-auto max-w-[636px]">
                    <div class="mb-5">
                        <h2 class="text-center font-bold leading-[1.14] text-[#121212]">
                            Our pricing plans are designed for your favor
                        </h2>
                    </div>
                    <p class="text-center">
                        Starting any business has a cost, so you need to determine
                        how you will cover the costs. You have ways to finance your
                        startup
                    </p>
                </div>
                <!-- Section Content Block -->
            </div>
            <!-- Section Content Wrapper -->

            <!-- Pricing Area -->
            <div>
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
                    <div class="flex flex-col items-center justify-between gap-10 rounded-[10px] border border-ColorBlack p-8 sm:p-10 md:flex-row lg:px-[73px] lg:py-[50px]">
                        <div class="w-full text-center md:w-1/2 md:text-left lg:max-w-[381px]">
                            <div class="text-xl leading-[1.6] tracking-tighter text-[#121212]">
                                For business
                            </div>
                            <div class="month">
                                <span class="font-PublicSans text-[50px] font-bold leading-[1.4] text-[#121212] lg:text-[56px]">$30.00</span>/Per Month
                            </div>
                            <div class="annual hidden">
                                <span class="font-PublicSans text-[50px] font-bold leading-[1.4] text-[#121212] lg:text-[56px]">$300.00</span>/Per Year
                            </div>
                            <p>
                                One way to determine how much money you need is to do a
                                break-even analysis.
                            </p>
                        </div>
                        <div class="w-full md:w-1/2">
                            <div class="mb-6 text-center font-semibold text-[#121212] md:text-left">
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

                            <button class="btn mt-[30px] block rounded-[3px] border-none bg-[#C1FF00] py-[18px] text-ColorBlack hover:bg-[#a6ff00] xl:mt-[50px]">
                                Choose Plan
                            </button>
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
</section>
<!-- Pricing Section End -->

@endsection



@section('footer')
    <x-footer1/>
@endsection