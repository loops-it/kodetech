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
                <div class="mx-auto max-w-[600px]">
                    <div class="mb-5">
                        <h2 class="text-center">
                            Choice the right pricing plan that suits your need
                        </h2>
                    </div>
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
                        <span class="relative h-[35px] w-[70px] rounded-[35px] bg-ColorBlue">
                            <!-- hidden input -->
                            <input id="toggle" type="checkbox" class="hidden" onclick="toggleSwitch()" />
                            <!-- dot -->
                            <span class="toggle_dot absolute h-[35px] w-[35px] rounded-full bg-white transition-all duration-300"></span>
                        </span>
                    </label>
                    <!-- Toggle Button -->
                    <span class="font-bold">Per Year</span>
                </div>
                <!-- Pricing Button Block -->

                <!-- Pricing List -->
                <div class="grid gap-x-6 gap-y-10 md:grid-cols-2 lg:grid-cols-3">
                    <!-- Pricing Item -->
                    <div class="jos" data-jos_animation="flip-left" data-jos_delay="0">
                        <div class="hover-solid-shadow h-full">
                            <div class="rounded-[10px] border-2 border-ColorBlack bg-white p-7 xl:p-10 h-full">
                                <!-- Pricing Content Top -->
                                <div class="text-center">
                                    <span class="text-xl font-bold text-ColorBlack">Free Plan</span>
                                    <div class="month text-[28px] font-normal leading-[2.85] text-ColorBlack">
                                        $<span class="text-[48px] font-bold leading-[1.3] xl:text-[58px]">00</span>/month
                                    </div>
                                    <div class="annual hidden text-[28px] font-normal leading-[2.85] text-ColorBlack">
                                        $<span class="text-[48px] font-bold leading-[1.3] xl:text-[58px]">00</span>/yearly
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
                                <div class="text-center">
                                    <span class="text-xl font-bold text-ColorBlack">Popular Plan</span>
                                    <div class="month text-[28px] font-normal leading-[2.85] text-ColorBlack">
                                        $<span class="text-[48px] font-bold leading-[1.3] xl:text-[58px]">199</span>/month
                                    </div>
                                    <div class="annual hidden text-[28px] font-normal leading-[2.85] text-ColorBlack">
                                        $<span class="text-[48px] font-bold leading-[1.3] xl:text-[58px]">2000</span>/yearly
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
                                <div class="text-center">
                                    <span class="text-xl font-bold text-ColorBlack">Standard Plan</span>
                                    <div class="month text-[28px] font-normal leading-[2.85] text-ColorBlack">
                                        $<span class="text-[48px] font-bold leading-[1.3] xl:text-[58px]">49</span>/month
                                    </div>
                                    <div class="annual hidden text-[28px] font-normal leading-[2.85] text-ColorBlack">
                                        $<span class="text-[48px] font-bold leading-[1.3] xl:text-[58px]">500</span>/yearly
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