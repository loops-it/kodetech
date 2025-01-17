@extends('layout.layout2')

@section('headerLogo')
<img src="{{ asset('assets/img/logo-tangerine-dark.png') }}" alt="Masco" width="109" height="24" />
@endsection


@section('headButtons')

<div class="flex items-center gap-6">
    <a href="{{ url('login') }}" class="btn-text hidden hover:text-ColorAtomicTangerine sm:inline-block">Login</a>
    <a href="{{ url('signup') }}" class="btn is-atomic-tangerine btn-animation group hidden rounded-[3px] sm:inline-block"><span>Sign up free</span></a>
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
        <div class="relative z-10">
            <!-- Hero Background -->
            <div class="bg-[#F5F3EA]">
                <!-- Hero Space -->
                <div class="section-space-bottom pt-[105px] sm:pt-[145px] lg:pt-[185px]">
                    <!-- Hero Container -->
                    <div class="container-default">
                        <!-- Hero Area -->
                        <div class="grid gap-16 md:grid-cols-[1fr_minmax(0,_0.8fr)] xl:gap-28 xxl:gap-6">
                            <!-- Hero Content Block -->
                            <div class="jos" data-jos_animation="fade-left">
                                <h1 class="mb-6 font-GeneralSans font-semibold leading-[1.04] text-[#1B1C1D] lg:text-6xl xl:text-[76px] xxl:text-[90px]">
                                    Bring additional qualified traffic to your website
                                </h1>
                                <p class="mb-8 lg:mb-[50px]">
                                    SEO is a digital marketing strategy that helps your
                                    website appear in relevant search results in search
                                    engines. It involves various techniques from using to
                                    keywords on your pages to earning links to your site.
                                </p>
                                <form action="#" class="relative mx-auto flex w-full items-center lg:mx-0 lg:mt-5 lg:max-w-md">
                                    <input type="email" placeholder="Enter your email" class="w-full rounded-[3px] bg-white px-5 py-[18px] pr-40 text-base font-semibold text-opacity-50 outline-none" />
                                    <button type="submit" class="btn is-atomic-tangerine absolute right-[5px] rounded-[3px] py-[10px]">
                                        Subscribe
                                    </button>
                                </form>

                                <div class="mt-7 flex gap-[5px] text-base font-semibold">
                                    <div class="flex gap-1">
                                        <img src="{{ asset('assets/img/icons/icon-green-star.svg') }}" alt="icon-green-star" width="17" height="17" />
                                        <img src="{{ asset('assets/img/icons/icon-green-star.svg') }}" alt="icon-green-star" width="17" height="17" />
                                        <img src="{{ asset('assets/img/icons/icon-green-star.svg') }}" alt="icon-green-star" width="17" height="17" />
                                        <img src="{{ asset('assets/img/icons/icon-green-star.svg') }}" alt="icon-green-star" width="17" height="17" />
                                        <img src="{{ asset('assets/img/icons/icon-green-star.svg') }}" alt="icon-green-star" width="17" height="17" />
                                    </div>
                                    ( 4.8 out of 5 Rating)
                                </div>
                            </div>
                            <!-- Hero Content Block -->

                            <!-- Hero Image Block -->
                            <div class="relative">
                                <img src="{{ asset('assets/img/th-5/hero-card-1.png') }}" alt="hero-card-1" width="320" height="301" data-jos_animation="fade-up" data-jos_delay="0" />
                                <img src="{{ asset('assets/img/th-5/hero-card-2.png') }}" alt="hero-card-2" width="299" height="236" class="ml-auto mt-6 hidden sm:block" data-jos_animation="fade-down" data-jos_delay="0.3" />
                                <img src="{{ asset('assets/img/th-5/hero-card-3.png') }}" alt="hero-card-3" width="244" height="235" class="absolute -right-4 top-14 hidden xl:block" data-jos_animation="fade-right" data-jos_delay="0.6" />
                            </div>
                            <!-- Hero Image Block -->
                        </div>
                        <!-- Hero Area -->
                    </div>
                    <!-- Hero Container -->
                </div>
                <!-- Hero Space -->
            </div>
            <!-- Hero Background -->
        </div>
    </section>
    <!-- Hero Section End -->

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
                                <img src="{{ asset('assets/img/th-1/brand-1.png') }}" alt="brand-1" width="186" height="46" class="h-auto w-fit" />
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/img/th-1/brand-2.png') }}" alt="brand-2" width="186" height="46" class="h-auto w-fit" />
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/img/th-1/brand-3.png') }}" alt="brand-3" width="186" height="46" class="h-auto w-fit" />
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/img/th-1/brand-4.png') }}" alt="brand-4" width="186" height="46" class="h-auto w-fit" />
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/img/th-1/brand-5.png') }}" alt="brand-5" width="186" height="46" class="h-auto w-fit" />
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/img/th-1/brand-1.png') }}" alt="brand-1" width="186" height="46" class="h-auto w-fit" />
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/img/th-1/brand-2.png') }}" alt="brand-2" width="186" height="46" class="h-auto w-fit" />
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/img/th-1/brand-3.png') }}" alt="brand-3" width="186" height="46" class="h-auto w-fit" />
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/img/th-1/brand-4.png') }}" alt="brand-4" width="186" height="46" class="h-auto w-fit" />
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/img/th-1/brand-5.png') }}" alt="brand-5" width="186" height="46" class="h-auto w-fit" />
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

    <!-- Horizontal Line Separator -->
    <div class="horizontal-line bg-ColorBlack"></div>
    <!-- Horizontal Line Separator -->

    <!-- Features Section Start -->
    <section class="section-features" id="section-features">
        <!-- Section Space -->
        <div class="section-space">
            <!-- Section Container -->
            <div class="container-default">
                <!-- Section Content Wrapper -->
                <div class="jos mb-[60px] xl:mb-20">
                    <!-- Section Content Block -->
                    <div class="mx-auto max-w-[636px]">
                        <h2 class="text-center font-GeneralSans font-semibold">
                            Turn traffic with insanely SEO & growth into revenue
                        </h2>
                    </div>
                    <!-- Section Content Block -->
                </div>
                <!-- Section Content Wrapper -->

                <!-- Features List -->
                <div class="grid gap-y-10 md:grid-cols-2 lg:grid-cols-3">
                    <!-- Features Item -->
                    <div class="jos relative flex flex-col items-center gap-[30px] px-4 text-center after:absolute after:left-full after:top-1/2 after:hidden after:h-[120px] after:w-px after:-translate-y-1/2 after:bg-ColorBlack/10 last:after:hidden xl:px-[30px] xl:after:block" data-jos_animation="fade-left" data-jos_delay="0">
                        <img src="{{ asset('assets/img/icons/icon-tangerine-feature-1.svg') }}" alt="icon-tangerine-feature-1" width="70" height="70" class="h-[70px] w-auto" />
                        <div>
                            <div class="mb-[15px] text-xl font-semibold capitalize leading-[1.33] -tracking-[0.5px] text-ColorBlack xl:text-2xl">
                                Increases Brand Awareness
                            </div>
                            <p>
                                You want to stand out in your industry as a leader, but
                                you also want to be seen as a relevant solution for your
                                audience.
                            </p>
                        </div>
                    </div>
                    <!-- Features Item -->
                    <!-- Features Item -->
                    <div class="jos relative flex flex-col items-center gap-[30px] px-4 text-center after:absolute after:left-full after:top-1/2 after:hidden after:h-[120px] after:w-px after:-translate-y-1/2 after:bg-ColorBlack/10 last:after:hidden xl:px-[30px] xl:after:block" data-jos_animation="fade-left" data-jos_delay="0.3">
                        <img src="{{ asset('assets/img/icons/icon-tangerine-feature-2.svg') }}" alt="icon-tangerine-feature-2" width="72" height="70" class="h-[70px] w-auto" />
                        <div>
                            <div class="mb-[15px] text-xl font-semibold capitalize leading-[1.33] -tracking-[0.5px] text-ColorBlack xl:text-2xl">
                                Amplifies PPC Success
                            </div>
                            <p>
                                Make sure you optimize your PPC ads for both desktop and
                                mobile search ads for focusing on desktop successfully.
                            </p>
                        </div>
                    </div>
                    <!-- Features Item -->
                    <!-- Features Item -->
                    <div class="jos relative flex flex-col items-center gap-[30px] px-4 text-center after:absolute after:left-full after:top-1/2 after:hidden after:h-[120px] after:w-px after:-translate-y-1/2 after:bg-ColorBlack/10 last:after:hidden xl:px-[30px] xl:after:block" data-jos_animation="fade-left" data-jos_delay="0.6">
                        <img src="{{ asset('assets/img/icons/icon-tangerine-feature-3.svg') }}" alt="icon-tangerine-feature-3" width="70" height="70" class="h-[70px] w-auto" />
                        <div>
                            <div class="mb-[15px] text-xl font-semibold capitalize leading-[1.33] -tracking-[0.5px] text-ColorBlack xl:text-2xl">
                                Builds Customer Trust
                            </div>
                            <p>
                                Even with a strong SEO strategy, building customer trust
                                in your brand takes time. Invest in quality content for
                                readers.
                            </p>
                        </div>
                    </div>
                    <!-- Features Item -->
                </div>
                <!-- Features List -->
            </div>
            <!-- Section Container -->
        </div>
        <!-- Section Space -->
    </section>
    <!-- Features Section End -->

    <!-- Content Section Start -->
    <section class="section-content">
        <!-- Section Background -->
        <div class="bg-ColorOffWhite">
            <!-- Section Spacer -->
            <div class="section-space">
                <!-- Section Container -->
                <div class="container-custom">
                    <!-- Content Area Single -->
                    <div class="grid items-center gap-10 lg:grid-cols-2 lg:gap-24 xl:grid-cols-[1fr_minmax(0,_1.2fr)] xl:gap-[135px]">
                        <!-- Content Block Left -->
                        <div class="jos lg:order-2" data-jos_animation="fade-left">
                            <!-- Section Wrapper -->
                            <div>
                                <!-- Section Block -->
                                <div class="mb-5">
                                    <h2 class="font-GeneralSans font-semibold">
                                        SEO agency that will evolve your search performance
                                    </h2>
                                </div>
                                <!-- Section Block -->
                            </div>
                            <!-- Section Wrapper -->
                            <p>
                                These days, no business can’t to ignore Search Engine
                                Optimization. SEO should plays a part in your online
                                marketing strategy as it helps people to find you online.
                                Over time that leads to more sales.
                            </p>
                            <div class="mt-12 flex flex-col gap-10 sm:flex-row sm:gap-[50px]">
                                <div>
                                    <div class="font-GeneralSans text-[66px] font-semibold leading-[0.9] text-ColorAtomicTangerine" data-module="countup">
                                        <span class="start-number" data-countup-number="98">98</span>%
                                    </div>
                                    <span>Average Conversion Rate</span>
                                </div>
                                <div>
                                    <div class="font-GeneralSans text-[66px] font-semibold leading-[0.9] text-ColorAtomicTangerine" data-module="countup">
                                        <span class="start-number" data-countup-number="60">60</span>M
                                    </div>
                                    <span>Traffic Generated</span>
                                </div>
                            </div>
                        </div>
                        <!-- Content Block Left -->
                        <!-- Content Block Right -->
                        <div class="jos relative z-10 lg:order-1" data-jos_animation="fade-right">
                            <!-- Content Image -->
                            <img src="{{ asset('assets/img/th-5/content-img-1.png') }}" alt="content-img-1" width="547" height="439" class="h-auto w-full rounded-[10px]" />
                            <!-- Content Background -->
                            <div class="absolute inset-0 left-0 -z-10 translate-x-1 translate-y-1 rounded-md bg-ColorBlack"></div>
                            <!-- Content Shape -->
                            <img src="{{ asset('assets/img/elements/home-5-content-img-shape-1.svg') }}" alt="content-shape-1" width="180" height="49" class="absolute -left-[13%] bottom-10" />
                        </div>
                        <!-- Content Block Right -->
                    </div>
                    <!-- Content Area Single -->
                </div>
                <!-- Section Container -->
            </div>
            <!-- Section Spacer -->
        </div>
        <!-- Section Background -->
    </section>
    <!-- Content Section End -->

    <!-- Service Section Start -->
    <div class="section-service" id="section-service">
        <!-- Section Background -->
        <div class="relative z-10 bg-[#1B1C1D]">
            <!-- Section Space -->
            <div class="section-space">
                <!-- Section Container -->
                <div class="container-default">
                    <!-- Section Content Wrapper -->
                    <div class="jos mb-[60px] xl:mb-20">
                        <!-- Section Content Block -->
                        <div class="mx-auto max-w-[636px]">
                            <h2 class="text-center font-GeneralSans font-semibold text-white">
                                Boost your business with advanced SEO strategies
                            </h2>
                        </div>
                        <!-- Section Content Block -->
                    </div>
                    <!-- Section Content Wrapper -->

                    <!-- Service List -->
                    <div class="grid gap-x-6 gap-y-[50px] md:grid-cols-2 lg:grid-cols-3">
                        <!-- Service Item -->
                        <div class="jos" data-jos_delay="0">
                            <div class="group flex h-full flex-col text-[#FDFBF9]">
                                <span class="block font-GeneralSans text-xl font-semibold leading-[1.4] transition-all duration-300 group-hover:text-ColorAtomicTangerine lg:text-2xl xl:text-3xl">01.</span>
                                <div class="relative my-[30px] h-[2px] w-full bg-[#FDFBF9]/10 after:absolute after:inset-0 after:scale-x-0 after:bg-ColorAtomicTangerine after:transition-all after:duration-300 group-hover:after:scale-x-100"></div>
                                <div class="mb-[15px] font-GeneralSans text-xl font-semibold leading-[1.4] lg:text-[22px] xl:text-3xl">
                                    Keyword strategy
                                </div>
                                <p class="mb-5 line-clamp-3 text-[#FDFBF9]/80">
                                    When developing a keyword strategy, we use a number of
                                    tools to conduct keyword research alongside years of
                                    knowledge.
                                </p>
                                <a href="{{ url('servicedetails') }}" class="mt-auto inline-flex items-center gap-x-4 font-GeneralSans text-base font-semibold group-hover:text-ColorAtomicTangerine">Discover More
                                    <span class="text-3xl transition-all duration-300 ease-in-out group-hover:translate-x-2">
                                        <i class="fa-sharp fa-regular fa-arrow-right-long"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <!-- Service Item -->
                        <!-- Service Item -->
                        <div class="jos" data-jos_delay="0.3">
                            <div class="group flex h-full flex-col text-[#FDFBF9]">
                                <span class="block font-GeneralSans text-xl font-semibold leading-[1.4] transition-all duration-300 group-hover:text-ColorAtomicTangerine lg:text-2xl xl:text-3xl">02.</span>
                                <div class="relative my-[30px] h-[2px] w-full bg-[#FDFBF9]/10 after:absolute after:inset-0 after:scale-x-0 after:bg-ColorAtomicTangerine after:transition-all after:duration-300 group-hover:after:scale-x-100"></div>
                                <div class="mb-[15px] font-GeneralSans text-xl font-semibold leading-[1.4] lg:text-[22px] xl:text-3xl">
                                    Content optimization
                                </div>
                                <p class="mb-5 line-clamp-3 text-[#FDFBF9]/80">
                                    Ranking on page 1 &gaining rich snippets requires a
                                    detailed SEO content strategy. Everything from header
                                    tag optimization.
                                </p>
                                <a href="{{ url('servicedetails') }}" class="mt-auto inline-flex items-center gap-x-4 font-GeneralSans text-base font-semibold group-hover:text-ColorAtomicTangerine">Discover More
                                    <span class="text-3xl transition-all duration-300 ease-in-out group-hover:translate-x-2">
                                        <i class="fa-sharp fa-regular fa-arrow-right-long"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <!-- Service Item -->
                        <!-- Service Item -->
                        <div class="jos" data-jos_delay="0.6">
                            <div class="group flex h-full flex-col text-[#FDFBF9]">
                                <span class="block font-GeneralSans text-xl font-semibold leading-[1.4] transition-all duration-300 group-hover:text-ColorAtomicTangerine lg:text-2xl xl:text-3xl">03.</span>
                                <div class="relative my-[30px] h-[2px] w-full bg-[#FDFBF9]/10 after:absolute after:inset-0 after:scale-x-0 after:bg-ColorAtomicTangerine after:transition-all after:duration-300 group-hover:after:scale-x-100"></div>
                                <div class="mb-[15px] font-GeneralSans text-xl font-semibold leading-[1.4] lg:text-[22px] xl:text-3xl">
                                    Technical SEO
                                </div>
                                <p class="mb-5 line-clamp-3 text-[#FDFBF9]/80">
                                    Creating great content is one thing, but making sure
                                    Googlebot can crawl, and index it efficiently is
                                    another! We used.
                                </p>
                                <a href="{{ url('servicedetails') }}" class="mt-auto inline-flex items-center gap-x-4 font-GeneralSans text-base font-semibold group-hover:text-ColorAtomicTangerine">Discover More
                                    <span class="text-3xl transition-all duration-300 ease-in-out group-hover:translate-x-2">
                                        <i class="fa-sharp fa-regular fa-arrow-right-long"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <!-- Service Item -->
                        <!-- Service Item -->
                        <div class="jos" data-jos_delay="0.9">
                            <div class="group flex h-full flex-col text-[#FDFBF9]">
                                <span class="block font-GeneralSans text-xl font-semibold leading-[1.4] transition-all duration-300 group-hover:text-ColorAtomicTangerine lg:text-2xl xl:text-3xl">04.</span>
                                <div class="relative my-[30px] h-[2px] w-full bg-[#FDFBF9]/10 after:absolute after:inset-0 after:scale-x-0 after:bg-ColorAtomicTangerine after:transition-all after:duration-300 group-hover:after:scale-x-100"></div>
                                <div class="mb-[15px] font-GeneralSans text-xl font-semibold leading-[1.4] lg:text-[22px] xl:text-3xl">
                                    Link building & SEO audits
                                </div>
                                <p class="mb-5 line-clamp-3 text-[#FDFBF9]/80">
                                    When developing a keyword strategy, we use a number of
                                    tools to conduct keyword research alongside years of
                                    knowledge.
                                </p>
                                <a href="{{ url('servicedetails') }}" class="mt-auto inline-flex items-center gap-x-4 font-GeneralSans text-base font-semibold group-hover:text-ColorAtomicTangerine">Discover More
                                    <span class="text-3xl transition-all duration-300 ease-in-out group-hover:translate-x-2">
                                        <i class="fa-sharp fa-regular fa-arrow-right-long"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <!-- Service Item -->
                        <!-- Service Item -->
                        <div class="jos" data-jos_delay="1.2">
                            <div class="group flex h-full flex-col text-[#FDFBF9]">
                                <span class="block font-GeneralSans text-xl font-semibold leading-[1.4] transition-all duration-300 group-hover:text-ColorAtomicTangerine lg:text-2xl xl:text-3xl">05.</span>
                                <div class="relative my-[30px] h-[2px] w-full bg-[#FDFBF9]/10 after:absolute after:inset-0 after:scale-x-0 after:bg-ColorAtomicTangerine after:transition-all after:duration-300 group-hover:after:scale-x-100"></div>
                                <div class="mb-[15px] font-GeneralSans text-xl font-semibold leading-[1.4] lg:text-[22px] xl:text-3xl">
                                    Website migrations
                                </div>
                                <p class="mb-5 line-clamp-3 text-[#FDFBF9]/80">
                                    Whether it’s a domain, design, or platform migration,
                                    there is always the risk of losing organic traffic. We
                                    can mitigate that risk.
                                </p>
                                <a href="{{ url('servicedetails') }}" class="mt-auto inline-flex items-center gap-x-4 font-GeneralSans text-base font-semibold group-hover:text-ColorAtomicTangerine">Discover More
                                    <span class="text-3xl transition-all duration-300 ease-in-out group-hover:translate-x-2">
                                        <i class="fa-sharp fa-regular fa-arrow-right-long"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <!-- Service Item -->
                        <!-- Service Item -->
                        <div class="jos" data-jos_delay="1.5">
                            <div class="group flex h-full flex-col text-[#FDFBF9]">
                                <span class="block font-GeneralSans text-xl font-semibold leading-[1.4] transition-all duration-300 group-hover:text-ColorAtomicTangerine lg:text-2xl xl:text-3xl">06.</span>
                                <div class="relative my-[30px] h-[2px] w-full bg-[#FDFBF9]/10 after:absolute after:inset-0 after:scale-x-0 after:bg-ColorAtomicTangerine after:transition-all after:duration-300 group-hover:after:scale-x-100"></div>
                                <div class="mb-[15px] font-GeneralSans text-xl font-semibold leading-[1.4] lg:text-[22px] xl:text-3xl">
                                    E-Commerce SEO
                                </div>
                                <p class="mb-5 line-clamp-3 text-[#FDFBF9]/80">
                                    E-Commerce websites require a unique approach to SEO in
                                    order to maximize for product page visibility and
                                    increase sales.
                                </p>
                                <a href="{{ url('servicedetails') }}" class="mt-auto inline-flex items-center gap-x-4 font-GeneralSans text-base font-semibold group-hover:text-ColorAtomicTangerine">Discover More
                                    <span class="text-3xl transition-all duration-300 ease-in-out group-hover:translate-x-2">
                                        <i class="fa-sharp fa-regular fa-arrow-right-long"></i>
                                    </span>
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

            <!-- Background Shape -->
            <img src="{{ asset('assets/img/elements/home-5-service-bg-shape.svg') }}" alt="home-5-service-bg-shape" width="140" height="140" class="absolute right-12 top-[197px] -z-10 hidden xl:inline-block" />
        </div>
        <!-- Section Background -->
    </div>
    <!-- Service Section End -->

    <!-- Content Section Start -->
    <section class="section-content" id="section-about">
        <!-- Section Background -->
        <div class="bg-[#F5F3EA]">
            <!-- Section Spacer -->
            <div class="section-space">
                <div class="flex flex-col gap-y-20 lg:gap-y-[100px] xl:gap-y-[120px]">
                    <!-- Section Container -->
                    <div class="container-custom">
                        <!-- Content Area Single -->
                        <div class="grid items-center gap-10 lg:grid-cols-2 lg:gap-24 xl:grid-cols-[1fr_minmax(0,_0.9fr)] xl:gap-[87px]">
                            <!-- Content Block Left -->
                            <div class="jos" data-jos_animation="fade-left">
                                <!-- Section Wrapper -->
                                <div>
                                    <!-- Section Block -->
                                    <div class="mb-5">
                                        <h2 class="font-GeneralSans font-semibold">
                                            SEO gains momentum by increasing your investment
                                        </h2>
                                    </div>
                                    <!-- Section Block -->
                                </div>
                                <!-- Section Wrapper -->
                                <p>
                                    SEO is often referred to as the 'long-term game' in the
                                    marketing world. The more time you invest, the faster
                                    the benefits of SEO will accrue. As your website content
                                    (ie blog, service pages, etc.)
                                </p>
                                <p>
                                    Search engine optimization ensures that your online
                                    presence is both articulated properly and discoverable
                                    to potential customers.
                                </p>
                                <a href="{{ url('signup') }}" class="btn is-atomic-tangerine btn-animation is-large group mt-4 hidden rounded-[3px] sm:inline-block"><span>Explore More</span></a>
                            </div>
                            <!-- Content Block Left -->
                            <!-- Content Block Right -->
                            <div class="jos relative z-10" data-jos_animation="fade-right">
                                <!-- Content Image -->
                                <img src="{{ asset('assets/img/th-5/content-img-2.png') }}" alt="content-img-2" width="569" height="383" class="h-auto w-full rounded-[10px] border-2 border-ColorBlack" />
                                <!-- Content Background -->
                                <div class="absolute inset-0 left-0 -z-10 translate-x-1 translate-y-1 rounded-md bg-ColorBlack"></div>
                            </div>
                            <!-- Content Block Right -->
                        </div>
                        <!-- Content Area Single -->
                    </div>
                    <!-- Section Container -->
                    <!-- Horizontal Line -->
                    <div class="horizontal-line bg-ColorBlack"></div>
                    <!-- Horizontal Line -->
                    <div class="container-default">
                        <!-- Section Content Wrapper -->
                        <div class="jos mb-[60px] xl:mb-20">
                            <!-- Section Content Block -->
                            <div class="mx-auto max-w-[670px]">
                                <h2 class="text-center font-GeneralSans font-semibold">
                                    We follow a simple, yet effective SEO ranking process
                                </h2>
                            </div>
                            <!-- Section Content Block -->
                        </div>
                        <!-- Section Content Wrapper -->

                        <!-- Process Area -->
                        <div class="grid gap-x-10 gap-y-10 md:grid-cols-2 lg:grid-cols-3 xl:gap-x-20 xxl:gap-x-[104px]">
                            <!-- Process Single Item -->
                            <div class="group relative z-10 text-center after:absolute after:left-[calc(50%+_40px)] after:top-10 after:-z-10 after:hidden after:w-full after:border after:border-dashed after:border-ColorBlack last:after:hidden lg:after:block xl:after:w-[calc(100%+_80px)]">
                                <div class="mx-auto mb-[30px] flex h-[60px] w-[60px] items-center justify-center rounded-[50%] border border-ColorBlack bg-white font-GeneralSans text-[26px] font-semibold leading-[1.2] text-ColorBlack transition-all duration-300 group-hover:border-ColorAtomicTangerine group-hover:bg-ColorAtomicTangerine lg:h-20 lg:w-20 xl:text-[34px]">
                                    1
                                </div>
                                <div class="mb-[15px] font-GeneralSans text-2xl font-semibold leading-[1.4] text-ColorBlack xl:text-3xl">
                                    Keyword Research
                                </div>
                                <p class="text-xl leading-[1.5]">
                                    Keyword research is the process of discovering valuable
                                    search queries
                                </p>
                            </div>
                            <!-- Process Single Item -->
                            <!-- Process Single Item -->
                            <div class="group relative z-10 text-center after:absolute after:left-[calc(50%+_40px)] after:top-10 after:-z-10 after:hidden after:w-full after:border after:border-dashed after:border-ColorBlack last:after:hidden lg:after:block xl:after:w-[calc(100%+_80px)]">
                                <div class="mx-auto mb-[30px] flex h-[60px] w-[60px] items-center justify-center rounded-[50%] border border-ColorBlack bg-white font-GeneralSans text-[26px] font-semibold leading-[1.2] text-ColorBlack transition-all duration-300 group-hover:border-ColorAtomicTangerine group-hover:bg-ColorAtomicTangerine lg:h-20 lg:w-20 xl:text-[34px]">
                                    2
                                </div>
                                <div class="mb-[15px] font-GeneralSans text-2xl font-semibold leading-[1.4] text-ColorBlack xl:text-3xl">
                                    Link Building
                                </div>
                                <p class="text-xl leading-[1.5]">
                                    Link building is a SEO technique that increases your
                                    search engine ranking
                                </p>
                            </div>
                            <!-- Process Single Item -->
                            <!-- Process Single Item -->
                            <div class="group relative z-10 text-center after:absolute after:left-[calc(50%+_40px)] after:top-10 after:-z-10 after:hidden after:w-full after:border after:border-dashed after:border-ColorBlack last:after:hidden lg:after:block xl:after:w-[calc(100%+_80px)]">
                                <div class="mx-auto mb-[30px] flex h-[60px] w-[60px] items-center justify-center rounded-[50%] border border-ColorBlack bg-white font-GeneralSans text-[26px] font-semibold leading-[1.2] text-ColorBlack transition-all duration-300 group-hover:border-ColorAtomicTangerine group-hover:bg-ColorAtomicTangerine lg:h-20 lg:w-20 xl:text-[34px]">
                                    3
                                </div>
                                <div class="mb-[15px] font-GeneralSans text-2xl font-semibold leading-[1.4] text-ColorBlack xl:text-3xl">
                                    Ranking
                                </div>
                                <p class="text-xl leading-[1.5]">
                                    It helps a website's 1st position in the search engine
                                    results page
                                </p>
                            </div>
                            <!-- Process Single Item -->
                        </div>
                        <!-- Process Area -->
                    </div>
                </div>
            </div>
            <!-- Section Spacer -->
        </div>
        <!-- Section Background -->
    </section>
    <!-- Content Section End -->

    <!-- Team Section Start -->
    <section class="section-team" id="section-team">
        <!-- Section Space -->
        <div class="section-space">
            <!-- Section Container -->
            <div class="container-default">
                <!-- Section Content Wrapper -->
                <div class="jos mb-[60px] flex flex-wrap items-center justify-between gap-8 xl:mb-20">
                    <!-- Section Content Block -->
                    <div class="max-w-[526px]">
                        <h2 class="font-GeneralSans font-semibold">
                            Our SEO experts are available to assist you
                        </h2>
                    </div>
                    <!-- Section Content Block -->

                    <div>
                        <a href="{{ url('teams') }}" class="btn is-atomic-tangerine btn-animation is-large group mt-4 inline-block rounded-[3px]"><span>Meet All Members</span></a>
                    </div>
                </div>
                <!-- Section Content Wrapper -->

                <!-- Team List -->
                <div class="grid overflow-hidden rounded-[10px] sm:grid-cols-2 lg:grid-cols-4">
                    <!-- Team Item -->
                    <div class="jos" data-jos_animation="flip-left" data-jos_delay="0">
                        <div class="group relative overflow-hidden">
                            <img src="{{ asset('assets/img/th-5/team-img-1.jpg') }}" alt="team-img-1" width="324" height="320" class="h-auto w-full transition-all duration-300 group-hover:scale-105" />
                            <div class="absolute bottom-0 left-5 right-5 translate-y-full rounded-[5px] bg-[#F5F3EA] p-5 transition-all duration-300 group-hover:-translate-y-5">
                                <a href="#" class="mb-1 block font-bold leading-[1.44] text-ColorBlack transition-all duration-300 hover:text-ColorAtomicTangerine">Cameron Williamson</a>
                                <div class="text-sm">
                                    <span>CEO@Company</span>
                                    <div class="mt-2 flex gap-x-[10px]">
                                        <a href="https://www.twitter.com" target="_blank" rel="noopener noreferrer" class="text-ColorBlack transition-all duration-300 hover:text-ColorAtomicTangerine">
                                            <i class="fa-brands fa-x-twitter"></i>
                                        </a>
                                        <a href="https://www.facebook.com" target="_blank" rel="noopener noreferrer" class="text-ColorBlack transition-all duration-300 hover:text-ColorAtomicTangerine">
                                            <i class="fa-brands fa-facebook"></i>
                                        </a>
                                        <a href="https://www.instagram.com" target="_blank" rel="noopener noreferrer" class="text-ColorBlack transition-all duration-300 hover:text-ColorAtomicTangerine">
                                            <i class="fa-brands fa-instagram"></i>
                                        </a>
                                        <a href="https://www.github.com" target="_blank" rel="noopener noreferrer" class="text-ColorBlack transition-all duration-300 hover:text-ColorAtomicTangerine">
                                            <i class="fa-brands fa-github"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Team Item -->
                    <!-- Team Item -->
                    <div class="jos" data-jos_animation="flip-left" data-jos_delay="0.3">
                        <div class="group relative overflow-hidden">
                            <img src="{{ asset('assets/img/th-5/team-img-2.jpg') }}" alt="team-img-2" width="324" height="320" class="h-auto w-full transition-all duration-300 group-hover:scale-105" />
                            <div class="absolute bottom-0 left-5 right-5 translate-y-full rounded-[5px] bg-[#F5F3EA] p-5 transition-all duration-300 group-hover:-translate-y-5">
                                <a href="#" class="mb-1 block font-bold leading-[1.44] text-ColorBlack transition-all duration-300 hover:text-ColorAtomicTangerine">Leslie Alexander</a>
                                <div class="text-sm">
                                    <span>Senior SEO Manager</span>
                                    <div class="mt-2 flex gap-x-[10px]">
                                        <a href="https://www.twitter.com" target="_blank" rel="noopener noreferrer" class="text-ColorBlack transition-all duration-300 hover:text-ColorAtomicTangerine">
                                            <i class="fa-brands fa-x-twitter"></i>
                                        </a>
                                        <a href="https://www.facebook.com" target="_blank" rel="noopener noreferrer" class="text-ColorBlack transition-all duration-300 hover:text-ColorAtomicTangerine">
                                            <i class="fa-brands fa-facebook"></i>
                                        </a>
                                        <a href="https://www.instagram.com" target="_blank" rel="noopener noreferrer" class="text-ColorBlack transition-all duration-300 hover:text-ColorAtomicTangerine">
                                            <i class="fa-brands fa-instagram"></i>
                                        </a>
                                        <a href="https://www.github.com" target="_blank" rel="noopener noreferrer" class="text-ColorBlack transition-all duration-300 hover:text-ColorAtomicTangerine">
                                            <i class="fa-brands fa-github"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Team Item -->
                    <!-- Team Item -->
                    <div class="jos" data-jos_animation="flip-left" data-jos_delay="0.6">
                        <div class="group relative overflow-hidden">
                            <img src="{{ asset('assets/img/th-5/team-img-3.jpg') }}" alt="team-img-3" width="324" height="320" class="h-auto w-full transition-all duration-300 group-hover:scale-105" />
                            <div class="absolute bottom-0 left-5 right-5 translate-y-full rounded-[5px] bg-[#F5F3EA] p-5 transition-all duration-300 group-hover:-translate-y-5">
                                <a href="#" class="mb-1 block font-bold leading-[1.44] text-ColorBlack transition-all duration-300 hover:text-ColorAtomicTangerine">Esther Howard</a>
                                <div class="text-sm">
                                    <span>WP Developer</span>
                                    <div class="mt-2 flex gap-x-[10px]">
                                        <a href="https://www.twitter.com" target="_blank" rel="noopener noreferrer" class="text-ColorBlack transition-all duration-300 hover:text-ColorAtomicTangerine">
                                            <i class="fa-brands fa-x-twitter"></i>
                                        </a>
                                        <a href="https://www.facebook.com" target="_blank" rel="noopener noreferrer" class="text-ColorBlack transition-all duration-300 hover:text-ColorAtomicTangerine">
                                            <i class="fa-brands fa-facebook"></i>
                                        </a>
                                        <a href="https://www.instagram.com" target="_blank" rel="noopener noreferrer" class="text-ColorBlack transition-all duration-300 hover:text-ColorAtomicTangerine">
                                            <i class="fa-brands fa-instagram"></i>
                                        </a>
                                        <a href="https://www.github.com" target="_blank" rel="noopener noreferrer" class="text-ColorBlack transition-all duration-300 hover:text-ColorAtomicTangerine">
                                            <i class="fa-brands fa-github"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Team Item -->
                    <!-- Team Item -->
                    <div class="jos" data-jos_animation="flip-left" data-jos_delay="0.9">
                        <div class="group relative overflow-hidden">
                            <img src="{{ asset('assets/img/th-5/team-img-4.jpg') }}" alt="team-img-4" width="324" height="320" class="h-auto w-full transition-all duration-300 group-hover:scale-105" />
                            <div class="absolute bottom-0 left-5 right-5 translate-y-full rounded-[5px] bg-[#F5F3EA] p-5 transition-all duration-300 group-hover:-translate-y-5">
                                <a href="#" class="mb-1 block font-bold leading-[1.44] text-ColorBlack transition-all duration-300 hover:text-ColorAtomicTangerine">Kristin Watson</a>
                                <div class="text-sm">
                                    <span>SEO Executive</span>
                                    <div class="mt-2 flex gap-x-[10px]">
                                        <a href="https://www.twitter.com" target="_blank" rel="noopener noreferrer" class="text-ColorBlack transition-all duration-300 hover:text-ColorAtomicTangerine">
                                            <i class="fa-brands fa-x-twitter"></i>
                                        </a>
                                        <a href="https://www.facebook.com" target="_blank" rel="noopener noreferrer" class="text-ColorBlack transition-all duration-300 hover:text-ColorAtomicTangerine">
                                            <i class="fa-brands fa-facebook"></i>
                                        </a>
                                        <a href="https://www.instagram.com" target="_blank" rel="noopener noreferrer" class="text-ColorBlack transition-all duration-300 hover:text-ColorAtomicTangerine">
                                            <i class="fa-brands fa-instagram"></i>
                                        </a>
                                        <a href="https://www.github.com" target="_blank" rel="noopener noreferrer" class="text-ColorBlack transition-all duration-300 hover:text-ColorAtomicTangerine">
                                            <i class="fa-brands fa-github"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Team Item -->
                </div>
                <!-- Team List -->
            </div>
            <!-- Section Container -->
        </div>
        <!-- Section Space -->
    </section>
    <!-- Team Section End -->

    <!-- Pricing Section Start -->
    <section class="section-pricing">
        <!-- Section Background -->
        <div class="bg-[#F5F3EA]">
            <!-- Section Space -->
            <div class="section-space">
                <!-- Section Container -->
                <div class="container-default">
                    <!-- Section Content Wrapper -->
                    <div class="jos">
                        <!-- Section Content Block -->
                        <div class="mx-auto max-w-[636px]">
                            <div class="mb-5">
                                <h2 class="text-center font-GeneralSans font-semibold">
                                    Explore our SEO service plans and choose your plan
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
                                <span class="relative h-[35px] w-[70px] rounded-[35px] bg-ColorBlack">
                                    <!-- hidden input -->
                                    <input id="toggle" type="checkbox" class="hidden" onclick="toggleSwitch()" />
                                    <!-- dot -->
                                    <span class="toggle_dot absolute h-[35px] w-[35px] rounded-full bg-ColorAtomicTangerine transition-all duration-300"></span>
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
                                <div class="rounded-[5px] bg-[#FDFBF9] p-7 xl:p-10">
                                    <!-- Pricing Content Top -->
                                    <div class="mb-[30px]">
                                        <img src="{{ asset('assets/img/icons/icon-black-home-5-pricing-1.svg') }}" alt="icon-black-home-5-pricing-1" width="47" height="60" class="h-10 w-auto lg:h-[60px]" />
                                    </div>
                                    <div class="text-left">
                                        <span class="font-GeneralSans text-xl font-semibold text-ColorBlack">Silver Plan</span>
                                        <div class="month">
                                            <span class="font-GeneralSans text-[48px] font-semibold leading-[1.3] text-ColorBlack xl:text-[72px]">$30</span>/Per month
                                        </div>
                                        <div class="annual hidden">
                                            <span class="font-GeneralSans text-[48px] font-semibold leading-[1.3] text-ColorBlack xl:text-[72px]">$300</span>/Per year
                                        </div>
                                    </div>
                                    <!-- Pricing Content Top -->
                                    <!-- Horizontal Line Separator -->
                                    <div class="my-[30px] h-px w-full bg-ColorBlack/10"></div>
                                    <!-- Horizontal Line Separator -->
                                    <!-- Pricing Data list -->
                                    <ul class="flex flex-col gap-y-3 font-semibold xl:px-[18px]">
                                        <li class="flex gap-x-3">
                                            <span class="text-xl text-ColorBlack">
                                                <i class="fa-solid fa-badge-check"></i>
                                            </span>
                                            50 key phrases optimized
                                        </li>
                                        <li class="flex gap-x-3">
                                            <span class="text-xl text-ColorBlack">
                                                <i class="fa-solid fa-badge-check"></i>
                                            </span>
                                            30 pages optimized
                                        </li>
                                        <li class="flex gap-x-3">
                                            <span class="text-xl text-ColorBlack">
                                                <i class="fa-solid fa-badge-check"></i>
                                            </span>
                                            6 CRO assets per quarter
                                        </li>
                                        <li class="flex gap-x-3">
                                            <span class="text-xl text-ColorBlack">
                                                <i class="fa-solid fa-badge-check"></i>
                                            </span>
                                            8 custom dashboards
                                        </li>
                                        <li class="flex gap-x-3">
                                            <span class="text-xl text-ColorBlack">
                                                <i class="fa-solid fa-badge-check"></i>
                                            </span>
                                            Revenue tracking dashboard
                                        </li>
                                    </ul>
                                    <!-- Pricing Data list -->
                                    <div class="mt-10 flex justify-center">
                                        <a href="{{ url('pricing') }}" class="btn is-black is-large group w-full rounded-[3px] border-2"><span>Choose Plan</span></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Pricing Item -->
                            <!-- Pricing Item -->
                            <div class="jos" data-jos_animation="flip-left" data-jos_delay="0">
                                <div class="rounded-[5px] bg-[#FDFBF9] p-7 xl:p-10">
                                    <!-- Pricing Content Top -->
                                    <div class="mb-[30px]">
                                        <img src="{{ asset('assets/img/icons/icon-black-home-5-pricing-2.svg') }}" alt="icon-black-home-5-pricing-2" width="107" height="60" class="h-10 w-auto lg:h-[60px]" />
                                    </div>
                                    <div class="text-left">
                                        <span class="font-GeneralSans text-xl font-semibold text-ColorBlack">Gold Plan</span>
                                        <div class="month">
                                            <span class="font-GeneralSans text-[48px] font-semibold leading-[1.3] text-ColorBlack xl:text-[72px]">$50</span>/Per month
                                        </div>
                                        <div class="annual hidden">
                                            <span class="font-GeneralSans text-[48px] font-semibold leading-[1.3] text-ColorBlack xl:text-[72px]">$540</span>/Per year
                                        </div>
                                    </div>
                                    <!-- Pricing Content Top -->
                                    <!-- Horizontal Line Separator -->
                                    <div class="my-[30px] h-px w-full bg-ColorBlack/10"></div>
                                    <!-- Horizontal Line Separator -->
                                    <!-- Pricing Data list -->
                                    <ul class="flex flex-col gap-y-3 font-semibold xl:px-[18px]">
                                        <li class="flex gap-x-3">
                                            <span class="text-xl text-ColorBlack">
                                                <i class="fa-solid fa-badge-check"></i>
                                            </span>
                                            200 key phrases optimized
                                        </li>
                                        <li class="flex gap-x-3">
                                            <span class="text-xl text-ColorBlack">
                                                <i class="fa-solid fa-badge-check"></i>
                                            </span>
                                            40 pages optimized
                                        </li>
                                        <li class="flex gap-x-3">
                                            <span class="text-xl text-ColorBlack">
                                                <i class="fa-solid fa-badge-check"></i>
                                            </span>
                                            12 CRO assets per quarter
                                        </li>
                                        <li class="flex gap-x-3">
                                            <span class="text-xl text-ColorBlack">
                                                <i class="fa-solid fa-badge-check"></i>
                                            </span>
                                            10 custom dashboards
                                        </li>
                                        <li class="flex gap-x-3">
                                            <span class="text-xl text-ColorBlack">
                                                <i class="fa-solid fa-badge-check"></i>
                                            </span>
                                            Revenue tracking dashboard
                                        </li>
                                    </ul>
                                    <!-- Pricing Data list -->
                                    <div class="mt-10 flex justify-center">
                                        <a href="{{ url('pricing') }}" class="btn is-atomic-tangerine is-large group w-full rounded-[3px] border-2"><span>Choose Plan</span></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Pricing Item -->
                            <!-- Pricing Item -->
                            <div class="jos" data-jos_animation="flip-left" data-jos_delay="0">
                                <div class="rounded-[5px] bg-[#FDFBF9] p-7 xl:p-10">
                                    <!-- Pricing Content Top -->
                                    <div class="mb-[30px]">
                                        <img src="{{ asset('assets/img/icons/icon-black-home-5-pricing-3.svg') }}" alt="icon-black-home-5-pricing-3" width="65" height="60" class="h-10 w-auto lg:h-[60px]" />
                                    </div>
                                    <div class="text-left">
                                        <span class="font-GeneralSans text-xl font-semibold text-ColorBlack">Diamond Plan</span>
                                        <div class="month">
                                            <span class="font-GeneralSans text-[48px] font-semibold leading-[1.3] text-ColorBlack xl:text-[72px]">$80</span>/Per month
                                        </div>
                                        <div class="annual hidden">
                                            <span class="font-GeneralSans text-[48px] font-semibold leading-[1.3] text-ColorBlack xl:text-[72px]">$840</span>/Per year
                                        </div>
                                    </div>
                                    <!-- Pricing Content Top -->
                                    <!-- Horizontal Line Separator -->
                                    <div class="my-[30px] h-px w-full bg-ColorBlack/10"></div>
                                    <!-- Horizontal Line Separator -->
                                    <!-- Pricing Data list -->
                                    <ul class="flex flex-col gap-y-3 font-semibold xl:px-[18px]">
                                        <li class="flex gap-x-3">
                                            <span class="text-xl text-ColorBlack">
                                                <i class="fa-solid fa-badge-check"></i>
                                            </span>
                                            300 key phrases optimized
                                        </li>
                                        <li class="flex gap-x-3">
                                            <span class="text-xl text-ColorBlack">
                                                <i class="fa-solid fa-badge-check"></i>
                                            </span>
                                            60 pages optimized
                                        </li>
                                        <li class="flex gap-x-3">
                                            <span class="text-xl text-ColorBlack">
                                                <i class="fa-solid fa-badge-check"></i>
                                            </span>
                                            24 CRO assets per quarter
                                        </li>
                                        <li class="flex gap-x-3">
                                            <span class="text-xl text-ColorBlack">
                                                <i class="fa-solid fa-badge-check"></i>
                                            </span>
                                            12 custom dashboards
                                        </li>
                                        <li class="flex gap-x-3">
                                            <span class="text-xl text-ColorBlack">
                                                <i class="fa-solid fa-badge-check"></i>
                                            </span>
                                            Revenue tracking dashboard
                                        </li>
                                    </ul>
                                    <!-- Pricing Data list -->
                                    <div class="mt-10 flex justify-center">
                                        <a href="{{ url('pricing') }}" class="btn is-black is-large group w-full rounded-[3px] border-2"><span>Choose Plan</span></a>
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
        </div>
        <!-- Section Background -->
    </section>
    <!-- Pricing Section End -->

    <!-- Horizontal Line Separator -->
    <div class="horizontal-line -mt-px bg-ColorBlack"></div>
    <!-- Horizontal Line Separator -->

    <!-- Testimonial Section Start -->
    <div class="section-testimonial" id="section-testimonial">
        <!-- Section Background -->
        <div class="bg-[#F5F3EA]">
            <!-- Section Space -->
            <div class="section-space">
                <!-- Section Container -->
                <div class="container-default">
                    <!-- Section Content Wrapper -->
                    <div class="jos mb-[60px] flex flex-wrap items-center justify-between gap-8 xl:mb-20">
                        <!-- Section Content Block -->
                        <div class="mx-auto max-w-[636px]">
                            <div class="mb-5">
                                <h2 class="text-center font-GeneralSans font-semibold">
                                    We are the best from our client's point of view
                                </h2>
                            </div>
                        </div>
                        <!-- Section Content Block -->
                    </div>
                    <!-- Section Content Wrapper -->

                    <!-- Testimonial Area -->
                    <div class="grid items-center gap-x-[60px] gap-y-[40px] text-center md:grid-cols-[1fr_minmax(0,0.5fr)] md:text-left lg:gap-x-20 xl:grid-cols-[1fr_minmax(0,0.7fr)] xl:gap-x-40 xxl:gap-x-[220px]">
                        <!-- Testimonial Content Block -->
                        <div class="jos order-2 md:order-1" data-jos_animation="fade-left">
                            <div class="mb-6">
                                <img src="{{ asset('assets/img/icons/icon-tangerine-quote.svg') }}" alt="icon-tangerine-quote" width="80" height="71" />
                            </div>
                            <blockquote class="-traking-[0.5px] mb-6 text-xl font-semibold text-ColorBlack lg:text-2xl">
                                “We are very satisfied with the SEO services we have
                                received from Masco so far. Although SEO has only been
                                around for a short time, we are already seeing a positive
                                step in our page rank. We would recommend Masco's SEO
                                services to anyone looking to increase their web
                                exposure."
                            </blockquote>
                            <div class="mb-[30px] lg:mb-[50px]">
                                <span class="block text-xl font-semibold text-ColorBlack">Anjilia Smith</span>
                                <span>Marketing Officer at Company</span>
                            </div>
                            <a href="#" class="btn is-atomic-tangerine btn-animation is-large group mt-4 hidden rounded-[3px] sm:inline-block"><span>View 1000+ Happy Clients Reviews</span></a>
                        </div>
                        <!-- Testimonial Content Block -->

                        <!-- Testimonial Image Block -->
                        <div class="jos order-1 md:order-2" data-jos_animation="fade-right">
                            <img src="{{ asset('assets/img/th-5/testimonial-user.png') }}" alt="testimonial-image-1" width="364" height="400" class="mx-auto w-10/12 md:mx-0 md:w-full" />
                        </div>
                        <!-- Testimonial Image Block -->
                    </div>
                    <!-- Testimonial Area -->
                </div>
                <!-- Section Container -->
            </div>
            <!-- Section Space -->
        </div>
        <!-- Section Background -->
    </div>
    <!-- Testimonial Section End -->

@endsection



@section('footer')
<footer class="section-footer">
    <div class="bg-[#1B1C1D]">
        <!-- Footer Area Top-->
        <div class="">
            <!-- Footer Top Spacing -->
            <div class="pt-[60px] lg:pt-20 xl:pt-[100px]">
                <div class="container-default">
                    <div class="flex flex-col items-center justify-between gap-x-10 gap-y-8 rounded-[5px] bg-ColorAtomicTangerine p-10 md:flex-row lg:gap-x-20 lg:p-[50px]">
                        <div class="max-w-none md:max-w-[60%] lg:max-w-[62%] xl:max-w-[636px]">
                            <h2 class="text-center font-GeneralSans font-semibold text-[#1B1C1D] md:text-left">
                                Are you ready to increase your SEO ranking?
                            </h2>
                        </div>
                        <div class="">
                            <a href="#" class="btn is-black is-large btn-animation group inline-block w-full rounded-[3px] border-2"><span>Let's Get Started</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Top Spacing -->
        </div>
        <!-- Footer Area Top-->

        <!-- Footer Area Center -->
        <div class="text-white">
            <!-- Footer Center Spacing -->
            <div class="py-[60px] lg:py-20 xl:py-[100px]">
                <!-- Section Container -->
                <div class="container-default">
                    <!-- Footer Widget List -->
                    <div class="grid gap-x-16 gap-y-10 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-[1fr_repeat(3,_auto)] xl:gap-x-24 xxl:gap-x-[134px]">
                        <!-- Footer Widget Item -->
                        <div class="flex flex-col gap-y-7 md:col-span-3 lg:col-span-1">
                            <!-- Footer Logo -->
                            <a href="{{ url('index') }}">
                                <img src="{{ asset('assets/img/logo-tangerine-light.png') }}" alt="Masco" width="109" height="24" />
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
                                    <a href="https://twitter.com" target="_blank" rel="noopener noreferrer" class="flex h-[30px] w-[30px] items-center justify-center rounded-[50%] bg-[#FDFBF9]/10 text-sm text-white transition-all duration-300 hover:bg-ColorAtomicTangerine hover:text-[#1B1C1D]" aria-label="twitter">
                                        <i class="fa-brands fa-x-twitter"></i>
                                    </a>
                                    <a href="https://www.facebook.com/" target="_blank" rel="noopener noreferrer" class="flex h-[30px] w-[30px] items-center justify-center rounded-[50%] bg-[#FDFBF9]/10 text-sm text-white transition-all duration-300 hover:bg-ColorAtomicTangerine hover:text-[#1B1C1D]" aria-label="facebook">
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </a>
                                    <a href="https://www.instagram.com/" target="_blank" rel="noopener noreferrer" class="flex h-[30px] w-[30px] items-center justify-center rounded-[50%] bg-[#FDFBF9]/10 text-sm text-white transition-all duration-300 hover:bg-ColorAtomicTangerine hover:text-[#1B1C1D]" aria-label="instagram">
                                        <i class="fa-brands fa-instagram"></i>
                                    </a>
                                    <a href="https://www.github.com/" target="_blank" rel="noopener noreferrer" class="flex h-[30px] w-[30px] items-center justify-center rounded-[50%] bg-[#FDFBF9]/10 text-sm text-white transition-all duration-300 hover:bg-ColorAtomicTangerine hover:text-[#1B1C1D]" aria-label="github">
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
                        <div class="flex flex-col gap-y-6 md:col-span-1 lg:col-span-1">
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
                        <div class="flex flex-col gap-y-6 md:col-span-1 lg:col-span-1">
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
                    <div class="text-center text-[#FDFBF9]/80">
                        &copy; Copyright 2024, All Rights Reserved by PixcelsThemes
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