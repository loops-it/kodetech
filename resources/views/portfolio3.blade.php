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
                <h1 class="breadcrumb-title">Portfolio Modern</h1>
                <ul class="breadcrumb-nav">
                    <li><a href="{{ url('index') }}">Home</a></li>
                    <li>Portfolio Modern</li>
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

<!-- Portfolio Section Start -->
<div class="section-portfolio">
    <!-- Section Space -->
    <div class="section-space">
        <!-- Section Container -->
        <div class="container-default">
            <!-- Tab Button Menu -->
            <div class="flex flex-wrap justify-center gap-3 md:gap-6">
                <button class="active tab-button btn tab-btn-blue is-rounded h-[50px]" data-tab="show-all">
                    Show All
                </button>
                <button class="tab-button btn tab-btn-blue is-rounded h-[50px]" data-tab="website">
                    Website
                </button>
                <button class="tab-button btn tab-btn-blue is-rounded h-[50px]" data-tab="branding">
                    Branding
                </button>
                <button class="tab-button btn tab-btn-blue is-rounded h-[50px]" data-tab="commercial">
                    Commercial
                </button>
                <button class="tab-button btn tab-btn-blue is-rounded h-[50px]" data-tab="digital-art">
                    Digital Art
                </button>
                <button class="tab-button btn tab-btn-blue is-rounded h-[50px]" data-tab="ui-ux-design">
                    UI/UX Design
                </button>
            </div>
            <!-- Tab Button Menu -->

            <!-- Portfolio Area -->
            <div class="my-10 lg:my-[60xp] xl:my-20">
                <!-- Portfolio List -->
                <div class="tab-content grid gap-8 sm:grid-cols-2 lg:grid-cols-3" id="show-all">
                    <!-- Portfolio Item -->
                    <div class="jos">
                        <div class="group">
                            <div class="hover-solid-shadow">
                                <div class="overflow-hidden rounded-[10px]">
                                    <img src="{{ asset('assets/img/th-1/portfolio-modern-img-1.jpg') }}" alt="portfolio-modern-img-1" width="406" height="350" class="h-full w-full object-cover transition-all duration-300 ease-in-out group-hover:scale-105" />
                                </div>
                            </div>
                            <div class="mt-8">
                                <div class="mb-3 flex flex-wrap gap-2 text-xl leading-[1.33] -tracking-[0.5px] text-ColorBlack group-hover:text-ColorBlue lg:flex-nowrap xl:text-2xl">
                                    <a href="{{ url('portfoliodetails') }}" class="font-semibold">App
                                    </a>
                                    <span>—</span>
                                    <a href="#" class="hover:text-ColorBlue">UI/UX Design</a>
                                </div>
                                <p class="line-clamp-2 text-base sm:max-w-[350px]">
                                    Lectus faucibus ac sollicitudin feugiat sit. Ac tellus
                                    sit commodo duis mi interdum
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Portfolio Item -->
                    <!-- Portfolio Item -->
                    <div class="jos">
                        <div class="group">
                            <div class="hover-solid-shadow">
                                <div class="overflow-hidden rounded-[10px]">
                                    <img src="{{ asset('assets/img/th-1/portfolio-modern-img-2.jpg') }}" alt="portfolio-modern-img-2" width="406" height="350" class="h-full w-full object-cover transition-all duration-300 ease-in-out group-hover:scale-105" />
                                </div>
                            </div>
                            <div class="mt-8">
                                <div class="mb-3 flex flex-wrap gap-2 text-xl leading-[1.33] -tracking-[0.5px] text-ColorBlack group-hover:text-ColorBlue lg:flex-nowrap xl:text-2xl">
                                    <a href="{{ url('portfoliodetails') }}" class="font-semibold">Website
                                    </a>
                                    <span>—</span>
                                    <a href="#" class="hover:text-ColorBlue">Branding</a>
                                </div>
                                <p class="line-clamp-2 text-base sm:max-w-[350px]">
                                    Lectus faucibus ac sollicitudin feugiat sit. Ac tellus
                                    sit commodo duis mi interdum
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Portfolio Item -->
                    <!-- Portfolio Item -->
                    <div class="jos">
                        <div class="group">
                            <div class="hover-solid-shadow">
                                <div class="overflow-hidden rounded-[10px]">
                                    <img src="{{ asset('assets/img/th-1/portfolio-modern-img-3.jpg') }}" alt="portfolio-modern-img-3" width="406" height="350" class="h-full w-full object-cover transition-all duration-300 ease-in-out group-hover:scale-105" />
                                </div>
                            </div>
                            <div class="mt-8">
                                <div class="mb-3 flex flex-wrap gap-2 text-xl leading-[1.33] -tracking-[0.5px] text-ColorBlack group-hover:text-ColorBlue lg:flex-nowrap xl:text-2xl">
                                    <a href="{{ url('portfoliodetails') }}" class="font-semibold">Campaign
                                    </a>
                                    <span>—</span>
                                    <a href="#" class="hover:text-ColorBlue">Marketing</a>
                                </div>
                                <p class="line-clamp-2 text-base sm:max-w-[350px]">
                                    Lectus faucibus ac sollicitudin feugiat sit. Ac tellus
                                    sit commodo duis mi interdum
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Portfolio Item -->
                    <!-- Portfolio Item -->
                    <div class="jos">
                        <div class="group">
                            <div class="hover-solid-shadow">
                                <div class="overflow-hidden rounded-[10px]">
                                    <img src="{{ asset('assets/img/th-1/portfolio-modern-img-4.jpg') }}" alt="portfolio-modern-img-4" width="406" height="350" class="h-full w-full object-cover transition-all duration-300 ease-in-out group-hover:scale-105" />
                                </div>
                            </div>
                            <div class="mt-8">
                                <div class="mb-3 flex flex-wrap gap-2 text-xl leading-[1.33] -tracking-[0.5px] text-ColorBlack group-hover:text-ColorBlue lg:flex-nowrap xl:text-2xl">
                                    <a href="{{ url('portfoliodetails') }}" class="font-semibold">Journal
                                    </a>
                                    <span>—</span>
                                    <a href="#" class="hover:text-ColorBlue">Commercial</a>
                                </div>
                                <p class="line-clamp-2 text-base sm:max-w-[350px]">
                                    Lectus faucibus ac sollicitudin feugiat sit. Ac tellus
                                    sit commodo duis mi interdum
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Portfolio Item -->
                    <!-- Portfolio Item -->
                    <div class="jos">
                        <div class="group">
                            <div class="hover-solid-shadow">
                                <div class="overflow-hidden rounded-[10px]">
                                    <img src="{{ asset('assets/img/th-1/portfolio-modern-img-5.jpg') }}" alt="portfolio-modern-img-5" width="406" height="350" class="h-full w-full object-cover transition-all duration-300 ease-in-out group-hover:scale-105" />
                                </div>
                            </div>
                            <div class="mt-8">
                                <div class="mb-3 flex flex-wrap gap-2 text-xl leading-[1.33] -tracking-[0.5px] text-ColorBlack group-hover:text-ColorBlue lg:flex-nowrap xl:text-2xl">
                                    <a href="{{ url('portfoliodetails') }}" class="font-semibold">Book
                                    </a>
                                    <span>—</span>
                                    <a href="#" class="hover:text-ColorBlue">UI/UX Design</a>
                                </div>
                                <p class="line-clamp-2 text-base sm:max-w-[350px]">
                                    Lectus faucibus ac sollicitudin feugiat sit. Ac tellus
                                    sit commodo duis mi interdum
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Portfolio Item -->
                    <!-- Portfolio Item -->
                    <div class="jos">
                        <div class="group">
                            <div class="hover-solid-shadow">
                                <div class="overflow-hidden rounded-[10px]">
                                    <img src="{{ asset('assets/img/th-1/portfolio-modern-img-6.jpg') }}" alt="portfolio-modern-img-6" width="406" height="350" class="h-full w-full object-cover transition-all duration-300 ease-in-out group-hover:scale-105" />
                                </div>
                            </div>
                            <div class="mt-8">
                                <div class="mb-3 flex flex-wrap gap-2 text-xl leading-[1.33] -tracking-[0.5px] text-ColorBlack group-hover:text-ColorBlue lg:flex-nowrap xl:text-2xl">
                                    <a href="{{ url('portfoliodetails') }}" class="font-semibold">Strategic
                                    </a>
                                    <span>—</span>
                                    <a href="#" class="hover:text-ColorBlue">UI/UX Design</a>
                                </div>
                                <p class="line-clamp-2 text-base sm:max-w-[350px]">
                                    Lectus faucibus ac sollicitudin feugiat sit. Ac tellus
                                    sit commodo duis mi interdum
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Portfolio Item -->
                    <!-- Portfolio Item -->
                    <div class="jos">
                        <div class="group">
                            <div class="hover-solid-shadow">
                                <div class="overflow-hidden rounded-[10px]">
                                    <img src="{{ asset('assets/img/th-1/portfolio-modern-img-7.jpg') }}" alt="portfolio-modern-img-7" width="406" height="350" class="h-full w-full object-cover transition-all duration-300 ease-in-out group-hover:scale-105" />
                                </div>
                            </div>
                            <div class="mt-8">
                                <div class="mb-3 flex flex-wrap gap-2 text-xl leading-[1.33] -tracking-[0.5px] text-ColorBlack group-hover:text-ColorBlue lg:flex-nowrap xl:text-2xl">
                                    <a href="{{ url('portfoliodetails') }}" class="font-semibold">Ad Campaign
                                    </a>
                                    <span>—</span>
                                    <a href="#" class="hover:text-ColorBlue">UI/UX Design</a>
                                </div>
                                <p class="line-clamp-2 text-base sm:max-w-[350px]">
                                    Lectus faucibus ac sollicitudin feugiat sit. Ac tellus
                                    sit commodo duis mi interdum
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Portfolio Item -->
                    <!-- Portfolio Item -->
                    <div class="jos">
                        <div class="group">
                            <div class="hover-solid-shadow">
                                <div class="overflow-hidden rounded-[10px]">
                                    <img src="{{ asset('assets/img/th-1/portfolio-modern-img-8.jpg') }}" alt="portfolio-modern-img-8" width="406" height="350" class="h-full w-full object-cover transition-all duration-300 ease-in-out group-hover:scale-105" />
                                </div>
                            </div>
                            <div class="mt-8">
                                <div class="mb-3 flex flex-wrap gap-2 text-xl leading-[1.33] -tracking-[0.5px] text-ColorBlack group-hover:text-ColorBlue lg:flex-nowrap xl:text-2xl">
                                    <a href="{{ url('portfoliodetails') }}" class="font-semibold">Marketing
                                    </a>
                                    <span>—</span>
                                    <a href="#" class="hover:text-ColorBlue">Branding</a>
                                </div>
                                <p class="line-clamp-2 text-base sm:max-w-[350px]">
                                    Lectus faucibus ac sollicitudin feugiat sit. Ac tellus
                                    sit commodo duis mi interdum
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Portfolio Item -->
                    <!-- Portfolio Item -->
                    <div class="jos">
                        <div class="group">
                            <div class="hover-solid-shadow">
                                <div class="overflow-hidden rounded-[10px]">
                                    <img src="{{ asset('assets/img/th-1/portfolio-modern-img-9.jpg') }}" alt="portfolio-modern-img-9" width="406" height="350" class="h-full w-full object-cover transition-all duration-300 ease-in-out group-hover:scale-105" />
                                </div>
                            </div>
                            <div class="mt-8">
                                <div class="mb-3 flex flex-wrap gap-2 text-xl leading-[1.33] -tracking-[0.5px] text-ColorBlack group-hover:text-ColorBlue lg:flex-nowrap xl:text-2xl">
                                    <a href="{{ url('portfoliodetails') }}" class="font-semibold">Digital Art
                                    </a>
                                    <span>—</span>
                                    <a href="#" class="hover:text-ColorBlue">Commercial</a>
                                </div>
                                <p class="line-clamp-2 text-base sm:max-w-[350px]">
                                    Lectus faucibus ac sollicitudin feugiat sit. Ac tellus
                                    sit commodo duis mi interdum
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Portfolio Item -->
                </div>
                <!-- Portfolio List -->
            </div>
            <!-- Portfolio Area -->

            <div class="flex justify-center">
                <button class="btn is-blue is-rounded is-large group">
                    View more
                </button>
            </div>
        </div>
        <!-- Section Container -->
    </div>
    <!-- Section Space -->
</div>
<!-- Portfolio Section End -->

@endsection



@section('footer')
    <x-footer1/>
@endsection