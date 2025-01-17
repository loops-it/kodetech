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
                <h1 class="breadcrumb-title">Portfolio Minimal</h1>
                <ul class="breadcrumb-nav">
                    <li><a href="{{ url('index') }}">Home</a></li>
                    <li>Portfolio Minimal</li>
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
            <div class="grid gap-[134px] md:grid-cols-[minmax(0,0.5fr)_1fr] lg:grid-cols-[minmax(0,0.4fr)_1fr] xxl:grid-cols-[minmax(0,0.4fr)_1fr]">
                <!-- Tab Button Menu -->
                <div class="flex flex-row flex-wrap justify-center gap-3 text-ColorBlack md:flex-col md:justify-start md:gap-6">
                    <button class="active tab-button tab-text text-left text-2xl font-semibold leading-[1.4] -tracking-[1px] xl:text-3xl" data-tab="show-all">
                        Show All
                    </button>
                    <button class="tab-button tab-text text-left text-2xl font-semibold leading-[1.4] -tracking-[1px] xl:text-3xl" data-tab="website">
                        Website
                    </button>
                    <button class="tab-button tab-text text-left text-2xl font-semibold leading-[1.4] -tracking-[1px] xl:text-3xl" data-tab="branding">
                        Branding
                    </button>
                    <button class="tab-button tab-text text-left text-2xl font-semibold leading-[1.4] -tracking-[1px] xl:text-3xl" data-tab="commercial">
                        Commercial
                    </button>
                    <button class="tab-button tab-text text-left text-2xl font-semibold leading-[1.4] -tracking-[1px] xl:text-3xl" data-tab="digital-art">
                        Digital Art
                    </button>
                    <button class="tab-button tab-text text-left text-2xl font-semibold leading-[1.4] -tracking-[1px] xl:text-3xl" data-tab="ui-ux-design">
                        UI/UX Design
                    </button>
                </div>
                <!-- Tab Button Menu -->

                <div>
                    <!-- Portfolio Area -->
                    <div>
                        <!-- Portfolio List -->
                        <div class="tab-content grid" id="show-all">
                            <!-- Portfolio Item -->
                            <div class="jos mb-[30px] border-b border-ColorBlack/10 pb-[30px] last:mb-0 last:border-none last:pb-0">
                                <div class="group">
                                    <div class="hover-solid-shadow">
                                        <div class="overflow-hidden rounded-[10px]">
                                            <img src="{{ asset('assets/img/th-1/portfolio-minimal-img-1.jpg') }}" alt="portfolio-minimal-img-1" width="840" height="533" class="h-full w-full object-cover transition-all duration-300 ease-in-out group-hover:scale-105" />
                                        </div>
                                    </div>
                                    <div class="mt-8">
                                        <div class="mb-3 flex flex-wrap gap-2 text-xl leading-[1.33] -tracking-[0.5px] group-hover:text-ColorBlue lg:flex-nowrap xl:text-2xl">
                                            <a href="{{ url('portfoliodetails') }}" class="font-semibold">App
                                            </a>
                                            <span>—</span>
                                            <a href="#" class="hover:text-ColorBlue">UI/UX Design</a>
                                        </div>
                                        <p class="line-clamp-2 text-base sm:max-w-[636px]">
                                            Branding is the process of creating a distinct
                                            identity for a business in the mind of your target
                                            audience and consumers. At the the most basic
                                            level.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Portfolio Item -->
                            <!-- Portfolio Item -->
                            <div class="jos mb-[30px] border-b border-ColorBlack/10 pb-[30px] last:mb-0 last:border-none last:pb-0">
                                <div class="group">
                                    <div class="hover-solid-shadow">
                                        <div class="overflow-hidden rounded-[10px]">
                                            <img src="{{ asset('assets/img/th-1/portfolio-minimal-img-2.jpg') }}" alt="portfolio-minimal-img-2" width="840" height="533" class="h-full w-full object-cover transition-all duration-300 ease-in-out group-hover:scale-105" />
                                        </div>
                                    </div>
                                    <div class="mt-8">
                                        <div class="mb-3 flex flex-wrap gap-2 text-xl leading-[1.33] -tracking-[0.5px] group-hover:text-ColorBlue lg:flex-nowrap xl:text-2xl">
                                            <a href="{{ url('portfoliodetails') }}" class="font-semibold">Website
                                            </a>
                                            <span>—</span>
                                            <a href="#" class="hover:text-ColorBlue">Branding</a>
                                        </div>
                                        <p class="line-clamp-2 text-base sm:max-w-[636px]">
                                            Branding is the process of creating a distinct
                                            identity for a business in the mind of your target
                                            audience and consumers. At the the most basic
                                            level.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Portfolio Item -->
                            <!-- Portfolio Item -->
                            <div class="jos mb-[30px] border-b border-ColorBlack/10 pb-[30px] last:mb-0 last:border-none last:pb-0">
                                <div class="group">
                                    <div class="hover-solid-shadow">
                                        <div class="overflow-hidden rounded-[10px]">
                                            <img src="{{ asset('assets/img/th-1/portfolio-minimal-img-3.jpg') }}" alt="portfolio-minimal-img-3" width="840" height="533" class="h-full w-full object-cover transition-all duration-300 ease-in-out group-hover:scale-105" />
                                        </div>
                                    </div>
                                    <div class="mt-8">
                                        <div class="mb-3 flex flex-wrap gap-2 text-xl leading-[1.33] -tracking-[0.5px] group-hover:text-ColorBlue lg:flex-nowrap xl:text-2xl">
                                            <a href="{{ url('portfoliodetails') }}" class="font-semibold">Campaign
                                            </a>
                                            <span>—</span>
                                            <a href="#" class="hover:text-ColorBlue">Marketing</a>
                                        </div>
                                        <p class="line-clamp-2 text-base sm:max-w-[636px]">
                                            Branding is the process of creating a distinct
                                            identity for a business in the mind of your target
                                            audience and consumers. At the the most basic
                                            level.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Portfolio Item -->
                        </div>
                        <!-- Portfolio List -->
                        <!-- Portfolio List -->
                        <div class="tab-content grid hidden" id="website">
                            <!-- Portfolio Item -->
                            <div class="jos mb-[30px] border-b border-ColorBlack/10 pb-[30px] last:mb-0 last:border-none last:pb-0">
                                <div class="group">
                                    <div class="hover-solid-shadow">
                                        <div class="overflow-hidden rounded-[10px]">
                                            <img src="{{ asset('assets/img/th-1/portfolio-minimal-img-1.jpg') }}" alt="portfolio-minimal-img-1" width="840" height="533" class="h-full w-full object-cover transition-all duration-300 ease-in-out group-hover:scale-105" />
                                        </div>
                                    </div>
                                    <div class="mt-8">
                                        <div class="mb-3 flex flex-wrap gap-2 text-xl leading-[1.33] -tracking-[0.5px] group-hover:text-ColorBlue lg:flex-nowrap xl:text-2xl">
                                            <a href="{{ url('portfoliodetails') }}" class="font-semibold">App
                                            </a>
                                            <span>—</span>
                                            <a href="#" class="hover:text-ColorBlue">UI/UX Design</a>
                                        </div>
                                        <p class="line-clamp-2 text-base sm:max-w-[636px]">
                                            Branding is the process of creating a distinct
                                            identity for a business in the mind of your target
                                            audience and consumers. At the the most basic
                                            level.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Portfolio Item -->
                            <!-- Portfolio Item -->
                            <div class="jos mb-[30px] border-b border-ColorBlack/10 pb-[30px] last:mb-0 last:border-none last:pb-0">
                                <div class="group">
                                    <div class="hover-solid-shadow">
                                        <div class="overflow-hidden rounded-[10px]">
                                            <img src="{{ asset('assets/img/th-1/portfolio-minimal-img-2.jpg') }}" alt="portfolio-minimal-img-2" width="840" height="533" class="h-full w-full object-cover transition-all duration-300 ease-in-out group-hover:scale-105" />
                                        </div>
                                    </div>
                                    <div class="mt-8">
                                        <div class="mb-3 flex flex-wrap gap-2 text-xl leading-[1.33] -tracking-[0.5px] group-hover:text-ColorBlue lg:flex-nowrap xl:text-2xl">
                                            <a href="{{ url('portfoliodetails') }}" class="font-semibold">Website
                                            </a>
                                            <span>—</span>
                                            <a href="#" class="hover:text-ColorBlue">Branding</a>
                                        </div>
                                        <p class="line-clamp-2 text-base sm:max-w-[636px]">
                                            Branding is the process of creating a distinct
                                            identity for a business in the mind of your target
                                            audience and consumers. At the the most basic
                                            level.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Portfolio Item -->
                            <!-- Portfolio Item -->
                            <div class="jos mb-[30px] border-b border-ColorBlack/10 pb-[30px] last:mb-0 last:border-none last:pb-0">
                                <div class="group">
                                    <div class="hover-solid-shadow">
                                        <div class="overflow-hidden rounded-[10px]">
                                            <img src="{{ asset('assets/img/th-1/portfolio-minimal-img-3.jpg') }}" alt="portfolio-minimal-img-3" width="840" height="533" class="h-full w-full object-cover transition-all duration-300 ease-in-out group-hover:scale-105" />
                                        </div>
                                    </div>
                                    <div class="mt-8">
                                        <div class="mb-3 flex flex-wrap gap-2 text-xl leading-[1.33] -tracking-[0.5px] group-hover:text-ColorBlue lg:flex-nowrap xl:text-2xl">
                                            <a href="{{ url('portfoliodetails') }}" class="font-semibold">Campaign
                                            </a>
                                            <span>—</span>
                                            <a href="#" class="hover:text-ColorBlue">Marketing</a>
                                        </div>
                                        <p class="line-clamp-2 text-base sm:max-w-[636px]">
                                            Branding is the process of creating a distinct
                                            identity for a business in the mind of your target
                                            audience and consumers. At the the most basic
                                            level.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Portfolio Item -->
                        </div>
                        <!-- Portfolio List -->
                        <!-- Portfolio List -->
                        <div class="tab-content grid hidden" id="branding">
                            <!-- Portfolio Item -->
                            <div class="jos mb-[30px] border-b border-ColorBlack/10 pb-[30px] last:mb-0 last:border-none last:pb-0">
                                <div class="group">
                                    <div class="hover-solid-shadow">
                                        <div class="overflow-hidden rounded-[10px]">
                                            <img src="{{ asset('assets/img/th-1/portfolio-minimal-img-1.jpg') }}" alt="portfolio-minimal-img-1" width="840" height="533" class="h-full w-full object-cover transition-all duration-300 ease-in-out group-hover:scale-105" />
                                        </div>
                                    </div>
                                    <div class="mt-8">
                                        <div class="mb-3 flex flex-wrap gap-2 text-xl leading-[1.33] -tracking-[0.5px] group-hover:text-ColorBlue lg:flex-nowrap xl:text-2xl">
                                            <a href="{{ url('portfoliodetails') }}" class="font-semibold">App
                                            </a>
                                            <span>—</span>
                                            <a href="#" class="hover:text-ColorBlue">UI/UX Design</a>
                                        </div>
                                        <p class="line-clamp-2 text-base sm:max-w-[636px]">
                                            Branding is the process of creating a distinct
                                            identity for a business in the mind of your target
                                            audience and consumers. At the the most basic
                                            level.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Portfolio Item -->
                            <!-- Portfolio Item -->
                            <div class="jos mb-[30px] border-b border-ColorBlack/10 pb-[30px] last:mb-0 last:border-none last:pb-0">
                                <div class="group">
                                    <div class="hover-solid-shadow">
                                        <div class="overflow-hidden rounded-[10px]">
                                            <img src="{{ asset('assets/img/th-1/portfolio-minimal-img-2.jpg') }}" alt="portfolio-minimal-img-2" width="840" height="533" class="h-full w-full object-cover transition-all duration-300 ease-in-out group-hover:scale-105" />
                                        </div>
                                    </div>
                                    <div class="mt-8">
                                        <div class="mb-3 flex flex-wrap gap-2 text-xl leading-[1.33] -tracking-[0.5px] group-hover:text-ColorBlue lg:flex-nowrap xl:text-2xl">
                                            <a href="{{ url('portfoliodetails') }}" class="font-semibold">Website
                                            </a>
                                            <span>—</span>
                                            <a href="#" class="hover:text-ColorBlue">Branding</a>
                                        </div>
                                        <p class="line-clamp-2 text-base sm:max-w-[636px]">
                                            Branding is the process of creating a distinct
                                            identity for a business in the mind of your target
                                            audience and consumers. At the the most basic
                                            level.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Portfolio Item -->
                            <!-- Portfolio Item -->
                            <div class="jos mb-[30px] border-b border-ColorBlack/10 pb-[30px] last:mb-0 last:border-none last:pb-0">
                                <div class="group">
                                    <div class="hover-solid-shadow">
                                        <div class="overflow-hidden rounded-[10px]">
                                            <img src="{{ asset('assets/img/th-1/portfolio-minimal-img-3.jpg') }}" alt="portfolio-minimal-img-3" width="840" height="533" class="h-full w-full object-cover transition-all duration-300 ease-in-out group-hover:scale-105" />
                                        </div>
                                    </div>
                                    <div class="mt-8">
                                        <div class="mb-3 flex flex-wrap gap-2 text-xl leading-[1.33] -tracking-[0.5px] group-hover:text-ColorBlue lg:flex-nowrap xl:text-2xl">
                                            <a href="{{ url('portfoliodetails') }}" class="font-semibold">Campaign
                                            </a>
                                            <span>—</span>
                                            <a href="#" class="hover:text-ColorBlue">Marketing</a>
                                        </div>
                                        <p class="line-clamp-2 text-base sm:max-w-[636px]">
                                            Branding is the process of creating a distinct
                                            identity for a business in the mind of your target
                                            audience and consumers. At the the most basic
                                            level.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Portfolio Item -->
                        </div>
                        <!-- Portfolio List -->
                        <!-- Portfolio List -->
                        <div class="tab-content grid hidden" id="commercial">
                            <!-- Portfolio Item -->
                            <div class="jos mb-[30px] border-b border-ColorBlack/10 pb-[30px] last:mb-0 last:border-none last:pb-0">
                                <div class="group">
                                    <div class="hover-solid-shadow">
                                        <div class="overflow-hidden rounded-[10px]">
                                            <img src="{{ asset('assets/img/th-1/portfolio-minimal-img-1.jpg') }}" alt="portfolio-minimal-img-1" width="840" height="533" class="h-full w-full object-cover transition-all duration-300 ease-in-out group-hover:scale-105" />
                                        </div>
                                    </div>
                                    <div class="mt-8">
                                        <div class="mb-3 flex flex-wrap gap-2 text-xl leading-[1.33] -tracking-[0.5px] group-hover:text-ColorBlue lg:flex-nowrap xl:text-2xl">
                                            <a href="{{ url('portfoliodetails') }}" class="font-semibold">App
                                            </a>
                                            <span>—</span>
                                            <a href="#" class="hover:text-ColorBlue">UI/UX Design</a>
                                        </div>
                                        <p class="line-clamp-2 text-base sm:max-w-[636px]">
                                            Branding is the process of creating a distinct
                                            identity for a business in the mind of your target
                                            audience and consumers. At the the most basic
                                            level.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Portfolio Item -->
                            <!-- Portfolio Item -->
                            <div class="jos mb-[30px] border-b border-ColorBlack/10 pb-[30px] last:mb-0 last:border-none last:pb-0">
                                <div class="group">
                                    <div class="hover-solid-shadow">
                                        <div class="overflow-hidden rounded-[10px]">
                                            <img src="{{ asset('assets/img/th-1/portfolio-minimal-img-2.jpg') }}" alt="portfolio-minimal-img-2" width="840" height="533" class="h-full w-full object-cover transition-all duration-300 ease-in-out group-hover:scale-105" />
                                        </div>
                                    </div>
                                    <div class="mt-8">
                                        <div class="mb-3 flex flex-wrap gap-2 text-xl leading-[1.33] -tracking-[0.5px] group-hover:text-ColorBlue lg:flex-nowrap xl:text-2xl">
                                            <a href="{{ url('portfoliodetails') }}" class="font-semibold">Website
                                            </a>
                                            <span>—</span>
                                            <a href="#" class="hover:text-ColorBlue">Branding</a>
                                        </div>
                                        <p class="line-clamp-2 text-base sm:max-w-[636px]">
                                            Branding is the process of creating a distinct
                                            identity for a business in the mind of your target
                                            audience and consumers. At the the most basic
                                            level.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Portfolio Item -->
                            <!-- Portfolio Item -->
                            <div class="jos mb-[30px] border-b border-ColorBlack/10 pb-[30px] last:mb-0 last:border-none last:pb-0">
                                <div class="group">
                                    <div class="hover-solid-shadow">
                                        <div class="overflow-hidden rounded-[10px]">
                                            <img src="{{ asset('assets/img/th-1/portfolio-minimal-img-3.jpg') }}" alt="portfolio-minimal-img-3" width="840" height="533" class="h-full w-full object-cover transition-all duration-300 ease-in-out group-hover:scale-105" />
                                        </div>
                                    </div>
                                    <div class="mt-8">
                                        <div class="mb-3 flex flex-wrap gap-2 text-xl leading-[1.33] -tracking-[0.5px] group-hover:text-ColorBlue lg:flex-nowrap xl:text-2xl">
                                            <a href="{{ url('portfoliodetails') }}" class="font-semibold">Campaign
                                            </a>
                                            <span>—</span>
                                            <a href="#" class="hover:text-ColorBlue">Marketing</a>
                                        </div>
                                        <p class="line-clamp-2 text-base sm:max-w-[636px]">
                                            Branding is the process of creating a distinct
                                            identity for a business in the mind of your target
                                            audience and consumers. At the the most basic
                                            level.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Portfolio Item -->
                        </div>
                        <!-- Portfolio List -->
                        <!-- Portfolio List -->
                        <div class="tab-content grid hidden" id="digital-art">
                            <!-- Portfolio Item -->
                            <div class="jos mb-[30px] border-b border-ColorBlack/10 pb-[30px] last:mb-0 last:border-none last:pb-0">
                                <div class="group">
                                    <div class="hover-solid-shadow">
                                        <div class="overflow-hidden rounded-[10px]">
                                            <img src="{{ asset('assets/img/th-1/portfolio-minimal-img-1.jpg') }}" alt="portfolio-minimal-img-1" width="840" height="533" class="h-full w-full object-cover transition-all duration-300 ease-in-out group-hover:scale-105" />
                                        </div>
                                    </div>
                                    <div class="mt-8">
                                        <div class="mb-3 flex flex-wrap gap-2 text-xl leading-[1.33] -tracking-[0.5px] group-hover:text-ColorBlue lg:flex-nowrap xl:text-2xl">
                                            <a href="{{ url('portfoliodetails') }}" class="font-semibold">App
                                            </a>
                                            <span>—</span>
                                            <a href="#" class="hover:text-ColorBlue">UI/UX Design</a>
                                        </div>
                                        <p class="line-clamp-2 text-base sm:max-w-[636px]">
                                            Branding is the process of creating a distinct
                                            identity for a business in the mind of your target
                                            audience and consumers. At the the most basic
                                            level.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Portfolio Item -->
                            <!-- Portfolio Item -->
                            <div class="jos mb-[30px] border-b border-ColorBlack/10 pb-[30px] last:mb-0 last:border-none last:pb-0">
                                <div class="group">
                                    <div class="hover-solid-shadow">
                                        <div class="overflow-hidden rounded-[10px]">
                                            <img src="{{ asset('assets/img/th-1/portfolio-minimal-img-2.jpg') }}" alt="portfolio-minimal-img-2" width="840" height="533" class="h-full w-full object-cover transition-all duration-300 ease-in-out group-hover:scale-105" />
                                        </div>
                                    </div>
                                    <div class="mt-8">
                                        <div class="mb-3 flex flex-wrap gap-2 text-xl leading-[1.33] -tracking-[0.5px] group-hover:text-ColorBlue lg:flex-nowrap xl:text-2xl">
                                            <a href="{{ url('portfoliodetails') }}" class="font-semibold">Website
                                            </a>
                                            <span>—</span>
                                            <a href="#" class="hover:text-ColorBlue">Branding</a>
                                        </div>
                                        <p class="line-clamp-2 text-base sm:max-w-[636px]">
                                            Branding is the process of creating a distinct
                                            identity for a business in the mind of your target
                                            audience and consumers. At the the most basic
                                            level.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Portfolio Item -->
                            <!-- Portfolio Item -->
                            <div class="jos mb-[30px] border-b border-ColorBlack/10 pb-[30px] last:mb-0 last:border-none last:pb-0">
                                <div class="group">
                                    <div class="hover-solid-shadow">
                                        <div class="overflow-hidden rounded-[10px]">
                                            <img src="{{ asset('assets/img/th-1/portfolio-minimal-img-3.jpg') }}" alt="portfolio-minimal-img-3" width="840" height="533" class="h-full w-full object-cover transition-all duration-300 ease-in-out group-hover:scale-105" />
                                        </div>
                                    </div>
                                    <div class="mt-8">
                                        <div class="mb-3 flex flex-wrap gap-2 text-xl leading-[1.33] -tracking-[0.5px] group-hover:text-ColorBlue lg:flex-nowrap xl:text-2xl">
                                            <a href="{{ url('portfoliodetails') }}" class="font-semibold">Campaign
                                            </a>
                                            <span>—</span>
                                            <a href="#" class="hover:text-ColorBlue">Marketing</a>
                                        </div>
                                        <p class="line-clamp-2 text-base sm:max-w-[636px]">
                                            Branding is the process of creating a distinct
                                            identity for a business in the mind of your target
                                            audience and consumers. At the the most basic
                                            level.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Portfolio Item -->
                        </div>
                        <!-- Portfolio List -->
                        <!-- Portfolio List -->
                        <div class="tab-content grid hidden" id="ui-ux-design">
                            <!-- Portfolio Item -->
                            <div class="jos mb-[30px] border-b border-ColorBlack/10 pb-[30px] last:mb-0 last:border-none last:pb-0">
                                <div class="group">
                                    <div class="hover-solid-shadow">
                                        <div class="overflow-hidden rounded-[10px]">
                                            <img src="{{ asset('assets/img/th-1/portfolio-minimal-img-1.jpg') }}" alt="portfolio-minimal-img-1" width="840" height="533" class="h-full w-full object-cover transition-all duration-300 ease-in-out group-hover:scale-105" />
                                        </div>
                                    </div>
                                    <div class="mt-8">
                                        <div class="mb-3 flex flex-wrap gap-2 text-xl leading-[1.33] -tracking-[0.5px] group-hover:text-ColorBlue lg:flex-nowrap xl:text-2xl">
                                            <a href="{{ url('portfoliodetails') }}" class="font-semibold">App
                                            </a>
                                            <span>—</span>
                                            <a href="#" class="hover:text-ColorBlue">UI/UX Design</a>
                                        </div>
                                        <p class="line-clamp-2 text-base sm:max-w-[636px]">
                                            Branding is the process of creating a distinct
                                            identity for a business in the mind of your target
                                            audience and consumers. At the the most basic
                                            level.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Portfolio Item -->
                            <!-- Portfolio Item -->
                            <div class="jos mb-[30px] border-b border-ColorBlack/10 pb-[30px] last:mb-0 last:border-none last:pb-0">
                                <div class="group">
                                    <div class="hover-solid-shadow">
                                        <div class="overflow-hidden rounded-[10px]">
                                            <img src="{{ asset('assets/img/th-1/portfolio-minimal-img-2.jpg') }}" alt="portfolio-minimal-img-2" width="840" height="533" class="h-full w-full object-cover transition-all duration-300 ease-in-out group-hover:scale-105" />
                                        </div>
                                    </div>
                                    <div class="mt-8">
                                        <div class="mb-3 flex flex-wrap gap-2 text-xl leading-[1.33] -tracking-[0.5px] group-hover:text-ColorBlue lg:flex-nowrap xl:text-2xl">
                                            <a href="{{ url('portfoliodetails') }}" class="font-semibold">Website
                                            </a>
                                            <span>—</span>
                                            <a href="#" class="hover:text-ColorBlue">Branding</a>
                                        </div>
                                        <p class="line-clamp-2 text-base sm:max-w-[636px]">
                                            Branding is the process of creating a distinct
                                            identity for a business in the mind of your target
                                            audience and consumers. At the the most basic
                                            level.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Portfolio Item -->
                            <!-- Portfolio Item -->
                            <div class="jos mb-[30px] border-b border-ColorBlack/10 pb-[30px] last:mb-0 last:border-none last:pb-0">
                                <div class="group">
                                    <div class="hover-solid-shadow">
                                        <div class="overflow-hidden rounded-[10px]">
                                            <img src="{{ asset('assets/img/th-1/portfolio-minimal-img-3.jpg') }}" alt="portfolio-minimal-img-3" width="840" height="533" class="h-full w-full object-cover transition-all duration-300 ease-in-out group-hover:scale-105" />
                                        </div>
                                    </div>
                                    <div class="mt-8">
                                        <div class="mb-3 flex flex-wrap gap-2 text-xl leading-[1.33] -tracking-[0.5px] group-hover:text-ColorBlue lg:flex-nowrap xl:text-2xl">
                                            <a href="{{ url('portfoliodetails') }}" class="font-semibold">Campaign
                                            </a>
                                            <span>—</span>
                                            <a href="#" class="hover:text-ColorBlue">Marketing</a>
                                        </div>
                                        <p class="line-clamp-2 text-base sm:max-w-[636px]">
                                            Branding is the process of creating a distinct
                                            identity for a business in the mind of your target
                                            audience and consumers. At the the most basic
                                            level.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Portfolio Item -->
                        </div>
                        <!-- Portfolio List -->
                    </div>
                    <!-- Portfolio Area -->

                    <div class="mt-10 flex lg:mt-20">
                        <button class="btn is-blue is-rounded is-large group">
                            View more
                        </button>
                    </div>
                </div>
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