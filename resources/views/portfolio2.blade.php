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
                <h1 class="breadcrumb-title">Portfolio Masonry</h1>
                <ul class="breadcrumb-nav">
                    <li><a href="{{ url('index') }}">Home</a></li>
                    <li>Portfolio Masonry</li>
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
                <button class="tab-button btn tab-btn-blue is-rounded h-[50px]" data-tab="ui-ux-design">
                    UI/UX Design
                </button>
            </div>
            <!-- Tab Button Menu -->

            <!-- Portfolio Area -->
            <div class="my-10 lg:my-[60xp] xl:my-20">
                <!-- Portfolio List -->
                <div class="tab-content columns-1 gap-6 md:columns-2" id="show-all">
                    <!-- Portfolio Item -->
                    <div class="jos mb-6" data-jos_delay="0">
                        <div class="group">
                            <div class="relative overflow-hidden rounded-[10px]">
                                <img src="{{ asset('assets/img/th-1/portfolio-masonry-img-1.jpg') }}" alt="portfolio-masonry-img-1.jpg" width="617" height="450" class="h-full w-full object-cover" />
                                <div class="absolute inset-0 flex translate-y-full items-end bg-gradient-to-b from-ColorBlack/0 to-ColorBlack p-6 transition-all duration-500 ease-in-out group-hover:translate-y-0 lg:p-10">
                                    <div class="flex flex-col text-white">
                                        <a href="{{ url('portfoliodetails') }}" class="mb-3 translate-y-8 text-xl font-semibold leading-[1.33] -tracking-[0.5px] transition-all duration-300 ease-in-out group-hover:translate-y-0 xl:text-2xl">App — The power of communication</a>
                                        <a href="#" class="translate-y-16 transition-all delay-300 duration-500 ease-in-out group-hover:translate-y-0">UI/UX Design</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Portfolio Item -->
                    <!-- Portfolio Item -->
                    <div class="jos mb-6" data-jos_delay="0">
                        <div class="group">
                            <div class="relative overflow-hidden rounded-[10px]">
                                <img src="{{ asset('assets/img/th-1/portfolio-masonry-img-3.jpg') }}" alt="portfolio-masonry-img-3.jpg" width="617" height="450" class="h-full w-full object-cover" />
                                <div class="absolute inset-0 flex translate-y-full items-end bg-gradient-to-b from-ColorBlack/0 to-ColorBlack p-6 transition-all duration-500 ease-in-out group-hover:translate-y-0 lg:p-10">
                                    <div class="flex flex-col text-white">
                                        <a href="{{ url('portfoliodetails') }}" class="mb-3 translate-y-8 text-xl font-semibold leading-[1.33] -tracking-[0.5px] transition-all duration-300 ease-in-out group-hover:translate-y-0 xl:text-2xl">Strategic — Ways to level up your brand</a>
                                        <a href="#" class="translate-y-16 transition-all delay-300 duration-500 ease-in-out group-hover:translate-y-0">Branding</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Portfolio Item -->
                    <!-- Portfolio Item -->
                    <div class="jos mb-6" data-jos_delay="0">
                        <div class="group">
                            <div class="relative overflow-hidden rounded-[10px]">
                                <img src="{{ asset('assets/img/th-1/portfolio-masonry-img-4.jpg') }}" alt="portfolio-masonry-img-4" width="617" height="450" class="h-full w-full object-cover" />
                                <div class="absolute inset-0 flex translate-y-full items-end bg-gradient-to-b from-ColorBlack/0 to-ColorBlack p-6 transition-all duration-500 ease-in-out group-hover:translate-y-0 lg:p-10">
                                    <div class="flex flex-col text-white">
                                        <a href="{{ url('portfoliodetails') }}" class="mb-3 translate-y-8 text-xl font-semibold leading-[1.33] -tracking-[0.5px] transition-all duration-300 ease-in-out group-hover:translate-y-0 xl:text-2xl">Journal — Asset in business</a>
                                        <a href="#" class="translate-y-16 transition-all delay-300 duration-500 ease-in-out group-hover:translate-y-0">Commercial</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Portfolio Item -->
                    <!-- Portfolio Item -->
                    <div class="jos mb-6" data-jos_delay="0">
                        <div class="group">
                            <div class="relative overflow-hidden rounded-[10px]">
                                <img src="{{ asset('assets/img/th-1/portfolio-masonry-img-2.jpg') }}" alt="portfolio-masonry-img-2.jpg" width="617" height="450" class="h-full w-full object-cover" />
                                <div class="absolute inset-0 flex translate-y-full items-end bg-gradient-to-b from-ColorBlack/0 to-ColorBlack p-6 transition-all duration-500 ease-in-out group-hover:translate-y-0 lg:p-10">
                                    <div class="flex flex-col text-white">
                                        <a href="{{ url('portfoliodetails') }}" class="mb-3 translate-y-8 text-xl font-semibold leading-[1.33] -tracking-[0.5px] transition-all duration-300 ease-in-out group-hover:translate-y-0 xl:text-2xl">Website — The future lifestyle platform</a>
                                        <a href="#" class="translate-y-16 transition-all delay-300 duration-500 ease-in-out group-hover:translate-y-0">Branding</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Portfolio Item -->
                    <!-- Portfolio Item -->
                    <div class="jos mb-6" data-jos_delay="0">
                        <div class="group">
                            <div class="relative overflow-hidden rounded-[10px]">
                                <img src="{{ asset('assets/img/th-1/portfolio-masonry-img-5.jpg') }}" alt="portfolio-masonry-img-5" width="617" height="450" class="h-full w-full object-cover" />
                                <div class="absolute inset-0 flex translate-y-full items-end bg-gradient-to-b from-ColorBlack/0 to-ColorBlack p-6 transition-all duration-500 ease-in-out group-hover:translate-y-0 lg:p-10">
                                    <div class="flex flex-col text-white">
                                        <a href="{{ url('portfoliodetails') }}" class="mb-3 translate-y-8 text-xl font-semibold leading-[1.33] -tracking-[0.5px] transition-all duration-300 ease-in-out group-hover:translate-y-0 xl:text-2xl">Book — Design of the year</a>
                                        <a href="#" class="translate-y-16 transition-all delay-300 duration-500 ease-in-out group-hover:translate-y-0">UI/UX Design</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Portfolio Item -->
                </div>
                <!-- Portfolio List -->
                <!-- Portfolio List -->
                <div class="tab-content hidden columns-1 gap-6 md:columns-2" id="website">
                    <!-- Portfolio Item -->
                    <div class="jos mb-6" data-jos_delay="0">
                        <div class="group">
                            <div class="relative overflow-hidden rounded-[10px]">
                                <img src="{{ asset('assets/img/th-1/portfolio-masonry-img-2.jpg') }}" alt="portfolio-masonry-img-2.jpg" width="617" height="450" class="h-full w-full object-cover" />
                                <div class="absolute inset-0 flex translate-y-full items-end bg-gradient-to-b from-ColorBlack/0 to-ColorBlack p-6 transition-all duration-500 ease-in-out group-hover:translate-y-0 lg:p-10">
                                    <div class="flex flex-col text-white">
                                        <a href="{{ url('portfoliodetails') }}" class="mb-3 translate-y-8 text-xl font-semibold leading-[1.33] -tracking-[0.5px] transition-all duration-300 ease-in-out group-hover:translate-y-0 xl:text-2xl">Website — The future lifestyle platform</a>
                                        <a href="#" class="translate-y-16 transition-all delay-300 duration-500 ease-in-out group-hover:translate-y-0">Branding</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Portfolio Item -->
                </div>
                <!-- Portfolio List -->
                <!-- Portfolio List -->
                <div class="tab-content hidden columns-1 gap-6 md:columns-2" id="branding">
                    <!-- Portfolio Item -->
                    <div class="jos mb-6" data-jos_delay="0">
                        <div class="group">
                            <div class="relative overflow-hidden rounded-[10px]">
                                <img src="{{ asset('assets/img/th-1/portfolio-masonry-img-2.jpg') }}" alt="portfolio-masonry-img-2.jpg" width="617" height="450" class="h-full w-full object-cover" />
                                <div class="absolute inset-0 flex translate-y-full items-end bg-gradient-to-b from-ColorBlack/0 to-ColorBlack p-6 transition-all duration-500 ease-in-out group-hover:translate-y-0 lg:p-10">
                                    <div class="flex flex-col text-white">
                                        <a href="{{ url('portfoliodetails') }}" class="mb-3 translate-y-8 text-xl font-semibold leading-[1.33] -tracking-[0.5px] transition-all duration-300 ease-in-out group-hover:translate-y-0 xl:text-2xl">Website — The future lifestyle platform</a>
                                        <a href="#" class="translate-y-16 transition-all delay-300 duration-500 ease-in-out group-hover:translate-y-0">Branding</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Portfolio Item -->
                    <!-- Portfolio Item -->
                    <div class="jos mb-6" data-jos_delay="0">
                        <div class="group">
                            <div class="relative overflow-hidden rounded-[10px]">
                                <img src="{{ asset('assets/img/th-1/portfolio-masonry-img-3.jpg') }}" alt="portfolio-masonry-img-3.jpg" width="617" height="450" class="h-full w-full object-cover" />
                                <div class="absolute inset-0 flex translate-y-full items-end bg-gradient-to-b from-ColorBlack/0 to-ColorBlack p-6 transition-all duration-500 ease-in-out group-hover:translate-y-0 lg:p-10">
                                    <div class="flex flex-col text-white">
                                        <a href="{{ url('portfoliodetails') }}" class="mb-3 translate-y-8 text-xl font-semibold leading-[1.33] -tracking-[0.5px] transition-all duration-300 ease-in-out group-hover:translate-y-0 xl:text-2xl">Strategic — Ways to level up your brand</a>
                                        <a href="#" class="translate-y-16 transition-all delay-300 duration-500 ease-in-out group-hover:translate-y-0">Branding</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Portfolio Item -->
                </div>
                <!-- Portfolio List -->
                <!-- Portfolio List -->
                <div class="tab-content hidden columns-1 gap-6 md:columns-2" id="commercial">
                    <!-- Portfolio Item -->
                    <div class="jos mb-6" data-jos_delay="0">
                        <div class="group">
                            <div class="relative overflow-hidden rounded-[10px]">
                                <img src="{{ asset('assets/img/th-1/portfolio-masonry-img-4.jpg') }}" alt="portfolio-masonry-img-4" width="617" height="450" class="h-full w-full object-cover" />
                                <div class="absolute inset-0 flex translate-y-full items-end bg-gradient-to-b from-ColorBlack/0 to-ColorBlack p-6 transition-all duration-500 ease-in-out group-hover:translate-y-0 lg:p-10">
                                    <div class="flex flex-col text-white">
                                        <a href="{{ url('portfoliodetails') }}" class="mb-3 translate-y-8 text-xl font-semibold leading-[1.33] -tracking-[0.5px] transition-all duration-300 ease-in-out group-hover:translate-y-0 xl:text-2xl">Journal — Asset in business</a>
                                        <a href="#" class="translate-y-16 transition-all delay-300 duration-500 ease-in-out group-hover:translate-y-0">Commercial</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Portfolio Item -->
                </div>
                <!-- Portfolio List -->
                <!-- Portfolio List -->
                <div class="tab-content hidden columns-1 gap-6 md:columns-2" id="ui-ux-design">
                    <!-- Portfolio Item -->
                    <div class="jos mb-6" data-jos_delay="0">
                        <div class="group">
                            <div class="relative overflow-hidden rounded-[10px]">
                                <img src="{{ asset('assets/img/th-1/portfolio-masonry-img-1.jpg') }}" alt="portfolio-masonry-img-1.jpg" width="617" height="450" class="h-full w-full object-cover" />
                                <div class="absolute inset-0 flex translate-y-full items-end bg-gradient-to-b from-ColorBlack/0 to-ColorBlack p-6 transition-all duration-500 ease-in-out group-hover:translate-y-0 lg:p-10">
                                    <div class="flex flex-col text-white">
                                        <a href="{{ url('portfoliodetails') }}" class="mb-3 translate-y-8 text-xl font-semibold leading-[1.33] -tracking-[0.5px] transition-all duration-300 ease-in-out group-hover:translate-y-0 xl:text-2xl">App — The power of communication</a>
                                        <a href="#" class="translate-y-16 transition-all delay-300 duration-500 ease-in-out group-hover:translate-y-0">UI/UX Design</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Portfolio Item -->
                    <!-- Portfolio Item -->
                    <div class="jos mb-6" data-jos_delay="0">
                        <div class="group">
                            <div class="relative overflow-hidden rounded-[10px]">
                                <img src="{{ asset('assets/img/th-1/portfolio-masonry-img-5.jpg') }}" alt="portfolio-masonry-img-5" width="617" height="450" class="h-full w-full object-cover" />
                                <div class="absolute inset-0 flex translate-y-full items-end bg-gradient-to-b from-ColorBlack/0 to-ColorBlack p-6 transition-all duration-500 ease-in-out group-hover:translate-y-0 lg:p-10">
                                    <div class="flex flex-col text-white">
                                        <a href="{{ url('portfoliodetails') }}" class="mb-3 translate-y-8 text-xl font-semibold leading-[1.33] -tracking-[0.5px] transition-all duration-300 ease-in-out group-hover:translate-y-0 xl:text-2xl">Book — Design of the year</a>
                                        <a href="#" class="translate-y-16 transition-all delay-300 duration-500 ease-in-out group-hover:translate-y-0">UI/UX Design</a>
                                    </div>
                                </div>
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