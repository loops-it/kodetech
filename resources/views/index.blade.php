@extends('layout.layout1')

@section('headerLogo')
    <img src="{{ asset('assets/img/logo-blue-dark.png') }}" alt="Masco" width="109" height="24" />
@endsection



@section('headButtons')

<div class="flex items-center gap-6">
    <a href="{{ url('login') }}" class="btn-text hidden hover:text-ColorBlue sm:inline-block">Login</a>
    <a href="{{ url('signup') }}" class="btn is-blue is-rounded btn-animation group hidden sm:inline-block"><span>Sign up free</span></a>
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
    <div class="relative z-10 overflow-hidden bg-[#FAF9F5]">
        <!-- Section Space -->
        <div class="pb-[60px] pt-28 md:pb-20 md:pt-36 lg:pb-[100px] lg:pt-[150px] xxl:pb-[120px] xxl:pt-[185px]">
            <!-- Section Container -->
            <div class="container-custom">
                <!-- Hero Area -->
                <div class="grid gap-10 lg:grid-cols-2 xxl:grid-cols-[1.1fr_minmax(0,_1fr)]">
                    <!-- Hero Content Block -->
                    <div class="jos">
                        <div class="has-container-custom">
                            <h1 class="mb-6">
                                We focus on growing your brand online
                            </h1>
                            <p>
                                Build world-class digital products with a team of
                                design, development & strategy experts. All in one
                                place. We can provide your business with a variety of
                                digital solutions.
                            </p>
                            <form action="#" method="post" class="relative mx-auto flex w-full items-center sm:w-[80%] lg:mx-0 lg:mt-5 lg:max-w-md">
                                <input type="email" placeholder="Enter your email" class="w-full rounded-[50px] border border-ColorBlack bg-white px-5 py-[15px] pr-40 text-base font-semibold text-opacity-50 outline-none" />
                                <button type="submit" class="btn is-blue is-rounded absolute right-[5px] py-[10px]">
                                    Subscribe
                                </button>
                            </form>
                            <div class="mt-5 text-sm leading-6 md:justify-normal">
                                <span class="mr-2 inline-block text-lg text-ColorBlue"><i class="fa-solid fa-badge-check"></i></span>
                                <span class="opacity-50">No credit card is required. You can cancel
                                    anytime</span>
                            </div>
                        </div>
                    </div>
                    <!-- Hero Content Block -->

                    <!-- Hero Image Block -->
                    <div class="jos">
                        <div class="relative flex items-center justify-center">
                            <img src="{{ asset('assets/img/th-1/hero-img.jpg') }}" alt="hero image" width="600" height="579" class="h-auto w-full" />
                            <a data-fslightbox="gallery" href="https://www.youtube.com/watch?v=3nQNiWdeH2Q" class="group group absolute flex h-[100px] w-[100px] items-center justify-center rounded-[50%] bg-white text-ColorBlue" aria-label="video-play">
                                <span class="text-2xl transition-all duration-300 ease-linear group-hover:scale-110"><i class="fa-solid fa-play"></i></span>
                            </a>
                        </div>
                    </div>
                    <!-- Hero Image Block -->
                </div>
                <!-- Hero Area -->
            </div>
            <!-- Section Container -->
        </div>
        <!-- Section Space -->

        <!-- Hero Shape - 1 -->
        <div class="absolute left-0 top-0 -z-10">
            <img src="{{ asset('assets/img/elements/hero-1-shape-1.svg') }}" alt="hero-shape-1" width="607" height="792" class="" />
        </div>

        <!-- Hero Shape - 2 -->
        <div class="absolute bottom-0 right-0 -z-[1]">
            <img src="{{ asset('assets/img/elements/hero-1-shape-2.svg') }}" alt="hero-shape-2" width="607" height="792" />
        </div>
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
                <div class="mx-auto mb-10 max-w-[80%] text-center text-xl font-semibold leading-[1.4] opacity-70 md:mb-16 lg:mb-20 lg:max-w-2xl">
                    From start-ups to Fortune 500, we partner with brands of all
                    sizes
                </div>
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

<!-- Service Section Start -->
<section class="section-service">
    <div class="relative z-10 overflow-hidden">
        <!-- Section Space -->
        <div class="section-space">
            <!-- Section Container -->
            <div class="container-custom">
                <!-- Section Content Wrapper -->
                <div class="jos mb-[60px] xl:mb-20">
                    <!-- Section Content Block -->
                    <div class="mx-auto max-w-[590px]">
                        <h2 class="text-center">
                            All the digital services that are convenient for you
                        </h2>
                    </div>
                    <!-- Section Content Block -->
                </div>
                <!-- Section Content Wrapper -->

                <!-- Service List -->
                <div class="grid gap-6 sm:grid-cols-2">
                    <!-- Service Item -->
                    <div class="jos" data-jos_delay="0">
                        <div class="group rounded-[10px] border border-[#E6E6E6] bg-white p-8 transition-all duration-300 ease-in-out hover:border-ColorOffWhite hover:bg-ColorOffWhite lg:p-10 h-full">
                            <div class="flex flex-col gap-x-10 gap-y-6 sm:gap-y-8 lg:flex-row">
                                <div class="relative mx-auto flex w-16 items-center justify-center lg:w-[98px]">
                                    <img src="{{ asset('assets/img/icons/icon-black-service-1.svg') }}" alt="icon-service-1" width="98" height="100" class="opcity-100 h-auto w-full transition-all duration-300 ease-in-out group-hover:opacity-0" />
                                    <img src="{{ asset('assets/img/icons/icon-blue-service-1.svg') }}" alt="icon-service-1" width="98" height="100" class="absolute h-auto w-full opacity-0 transition-all duration-300 ease-in-out group-hover:opacity-100" />
                                </div>
                                <div class="flex-1 text-center lg:text-left">
                                    <div class="mb-4 text-xl font-semibold leading-[1.33] -tracking-[0.5px] text-ColorBlack lg:text-2xl">
                                        Branding & Digital Strategies
                                    </div>
                                    <p class="mb-5 line-clamp-2 text-ColorBlack/80">
                                        Brand strategy is all about developing a unique
                                        identity that distinguishes your business from
                                    </p>
                                    <a href="{{ url('servicedetails') }}" class="inline-flex items-center gap-x-2 text-base font-bold text-ColorBlack group-hover:text-ColorBlue">Find out more
                                        <span class="transition-all duration-300 ease-in-out group-hover:translate-x-2">
                                            <i class="fa-solid fa-arrow-right"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Service Item -->
                    <!-- Service Item -->
                    <div class="jos" data-jos_delay="0.3">
                        <div class="group rounded-[10px] border border-[#E6E6E6] bg-white p-8 transition-all duration-300 ease-in-out hover:border-ColorOffWhite hover:bg-ColorOffWhite lg:p-10 h-full">
                            <div class="flex flex-col gap-x-10 gap-y-6 sm:gap-y-8 lg:flex-row">
                                <div class="relative mx-auto flex w-16 items-center justify-center lg:w-[98px]">
                                    <img src="{{ asset('assets/img/icons/icon-black-service-2.svg') }}" alt="icon-service-2" width="98" height="100" class="opcity-100 h-auto w-full transition-all duration-300 ease-in-out group-hover:opacity-0" />
                                    <img src="{{ asset('assets/img/icons/icon-blue-service-2.svg') }}" alt="icon-service-2" width="98" height="100" class="absolute h-auto w-full opacity-0 transition-all duration-300 ease-in-out group-hover:opacity-100" />
                                </div>
                                <div class="flex-1 text-center lg:text-left">
                                    <div class="mb-4 text-xl font-semibold leading-[1.33] -tracking-[0.5px] text-ColorBlack lg:text-2xl">
                                        Web Design & App Development
                                    </div>
                                    <p class="mb-5 line-clamp-2 text-ColorBlack/80">
                                        Web design & development is an umbrella term that
                                        describes the process of creating a website
                                    </p>
                                    <a href="{{ url('servicedetails') }}" class="inline-flex items-center gap-x-2 text-base font-bold text-ColorBlack group-hover:text-ColorBlue">Find out more
                                        <span class="transition-all duration-300 ease-in-out group-hover:translate-x-2">
                                            <i class="fa-solid fa-arrow-right"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Service Item -->
                    <!-- Service Item -->
                    <div class="jos" data-jos_delay="0.6">
                        <div class="group rounded-[10px] border border-[#E6E6E6] bg-white p-8 transition-all duration-300 ease-in-out hover:border-ColorOffWhite hover:bg-ColorOffWhite lg:p-10 h-full">
                            <div class="flex flex-col gap-x-10 gap-y-6 sm:gap-y-8 lg:flex-row">
                                <div class="relative mx-auto flex w-16 items-center justify-center lg:w-[98px]">
                                    <img src="{{ asset('assets/img/icons/icon-black-service-3.svg') }}" alt="icon-service-3" width="98" height="100" class="opcity-100 h-auto w-full transition-all duration-300 ease-in-out group-hover:opacity-0" />
                                    <img src="{{ asset('assets/img/icons/icon-blue-service-3.svg') }}" alt="icon-service-3" width="98" height="100" class="absolute h-auto w-full opacity-0 transition-all duration-300 ease-in-out group-hover:opacity-100" />
                                </div>
                                <div class="flex-1 text-center lg:text-left">
                                    <div class="mb-4 text-xl font-semibold leading-[1.33] -tracking-[0.5px] text-ColorBlack lg:text-2xl">
                                        Results-Driven Digital Marketing
                                    </div>
                                    <p class="mb-5 line-clamp-2 text-ColorBlack/80">
                                        Digital marketing potential customers using the
                                        internet & other forms of digital communication
                                    </p>
                                    <a href="{{ url('servicedetails') }}" class="inline-flex items-center gap-x-2 text-base font-bold text-ColorBlack group-hover:text-ColorBlue">Find out more
                                        <span class="transition-all duration-300 ease-in-out group-hover:translate-x-2">
                                            <i class="fa-solid fa-arrow-right"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Service Item -->
                    <!-- Service Item -->
                    <div class="jos" data-jos_delay="0.9">
                        <div class="group rounded-[10px] border border-[#E6E6E6] bg-white p-8 transition-all duration-300 ease-in-out hover:border-ColorOffWhite hover:bg-ColorOffWhite lg:p-10 h-full">
                            <div class="flex flex-col gap-x-10 gap-y-6 sm:gap-y-8 lg:flex-row">
                                <div class="relative mx-auto flex w-16 items-center justify-center lg:w-[98px]">
                                    <img src="{{ asset('assets/img/icons/icon-black-service-4.svg') }}" alt="icon-service-4" width="98" height="100" class="opcity-100 h-auto w-full transition-all duration-300 ease-in-out group-hover:opacity-0" />
                                    <img src="{{ asset('assets/img/icons/icon-blue-service-4.svg') }}" alt="icon-service-4" width="98" height="100" class="absolute h-auto w-full opacity-0 transition-all duration-300 ease-in-out group-hover:opacity-100" />
                                </div>
                                <div class="flex-1 text-center lg:text-left">
                                    <div class="mb-4 text-xl font-semibold leading-[1.33] -tracking-[0.5px] text-ColorBlack lg:text-2xl">
                                        Custom Software Development
                                    </div>
                                    <p class="mb-5 line-clamp-2 text-ColorBlack/80">
                                        Custom Software Development is the process of
                                        conceptualizing, designing, building & deploying
                                    </p>
                                    <a href="{{ url('servicedetails') }}" class="inline-flex items-center gap-x-2 text-base font-bold text-ColorBlack group-hover:text-ColorBlue">Find out more
                                        <span class="transition-all duration-300 ease-in-out group-hover:translate-x-2">
                                            <i class="fa-solid fa-arrow-right"></i>
                                        </span>
                                    </a>
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

        <!-- Service Shape -->
        <div class="absolute bottom-0 left-0 -z-10">
            <img src="{{ asset('assets/img/elements/service-1-shape-1.svg') }}" alt="service-section-shape" width="390" height="507" />
        </div>
        <!-- Service Shape -->
    </div>
</section>
<!-- Service Section End -->

<!-- Content Section Start -->
<section class="section-content">
    <!-- Section Background -->
    <div class="bg-ColorOffWhite">
        <!-- Section Spacer -->
        <div class="section-space">
            <!-- Section Container -->
            <div class="container-custom">
                <div class="flex flex-col gap-y-20 lg:gap-y-[100px] xl:gap-y-[120px]">
                    <!-- Content Area Single -->
                    <div class="grid items-center gap-10 lg:grid-cols-2 lg:gap-24 xl:grid-cols-[1.2fr_minmax(0,_1fr)] xl:gap-[135px]">
                        <!-- Content Block Left -->
                        <div class="jos" data-jos_animation="fade-right">
                            <!-- Section Wrapper -->
                            <div>
                                <!-- Section Block -->
                                <div class="mb-5">
                                    <h2>
                                        Boost the effectiveness of your promotions as well
                                        as polish your branding
                                    </h2>
                                </div>
                                <!-- Section Block -->
                            </div>
                            <!-- Section Wrapper -->
                            <p>
                                SINCE 1998, we transform bold business ideas into
                                exceptional digital products. We ideate, design, and
                                develop data-driven digital products made to answer
                                business challenges.
                            </p>
                            <p>
                                We offer 360° services to smoothly guide you on your way
                                to creating a seamless digital masterpiece projects on
                                budget and on time.
                            </p>
                        </div>
                        <!-- Content Block Left -->
                        <!-- Content Block Right -->
                        <div class="jos relative" data-jos_animation="fade-left">
                            <div class="rounded-[10px] bg-[#FCEDCF] p-[30px] lg:p-10 xl:p-[50px]">
                                <!-- Content Image -->
                                <img src="{{ asset('assets/img/th-1/content-img-1.jpg') }}" alt="content-img-1" width="426" height="398" class="h-auto w-full rounded-[10px]" />
                            </div>
                            <!-- Content Shape -->
                            <img src="{{ asset('assets/img/elements/content-shape-1.svg') }}" alt="content-shape-1" width="168" height="61" class="absolute -right-16 -top-16" />
                        </div>
                        <!-- Content Block Right -->
                    </div>
                    <!-- Content Area Single -->

                    <!-- Content Area Single -->
                    <div class="grid items-center gap-10 lg:grid-cols-2 lg:gap-24 xl:grid-cols-[1fr_minmax(0,_1.2fr)] xl:gap-[135px]">
                        <!-- Content Block Left -->
                        <div class="jos lg:order-2" data-jos_animation="fade-left">
                            <!-- Section Wrapper -->
                            <div>
                                <!-- Section Block -->
                                <div class="mb-5">
                                    <h2>
                                        Discover the latest digital strategies & emerging
                                        ideas for business growth
                                    </h2>
                                </div>
                                <!-- Section Block -->
                            </div>
                            <!-- Section Wrapper -->
                            <p>
                                Our brand tenders and marketing mixologists always serve
                                up unique, design-forward websites coded with today’s
                                modern technologies
                            </p>
                            <ul class="flex flex-col gap-5 font-semibold text-ColorBlack">
                                <li>
                                    <span class="mr-3 inline-block text-xl text-ColorBlue"><i class="fa-solid fa-badge-check"></i></span>
                                    Reach new business opportunities or test your product
                                    ideas.
                                </li>
                                <li>
                                    <span class="mr-3 inline-block text-xl text-ColorBlue"><i class="fa-solid fa-badge-check"></i></span>
                                    Automate your processes and get data-driven business
                                    insights.
                                </li>
                                <li>
                                    <span class="mr-3 inline-block text-xl text-ColorBlue"><i class="fa-solid fa-badge-check"></i></span>
                                    Create lightweight, scalable, and easly accessible
                                    cloud solution.
                                </li>
                            </ul>
                        </div>
                        <!-- Content Block Left -->
                        <!-- Content Block Right -->
                        <div class="jos relative lg:order-1" data-jos_animation="fade-right">
                            <div class="rounded-[10px] bg-[#BEF8FC] p-[30px] lg:p-10 xl:p-[50px]">
                                <!-- Content Image -->
                                <img src="{{ asset('assets/img/th-1/content-img-2.jpg') }}" alt="content-img-1" width="426" height="398" class="h-auto w-full rounded-[10px]" />
                            </div>
                            <!-- Content Shape -->
                            <img src="{{ asset('assets/img/elements/content-shape-2.svg') }}" alt="content-shape-1" width="107" height="105" class="absolute -bottom-1 -left-1" />
                        </div>
                        <!-- Content Block Right -->
                    </div>
                    <!-- Content Area Single -->
                </div>
            </div>
            <!-- Section Container -->
        </div>
        <!-- Section Spacer -->
    </div>
    <!-- Section Background -->
</section>
<!-- Content Section End -->

<!-- Portfolio Section Start -->
<section class="section-portfolio">
    <div class="relative z-10 overflow-hidden">
        <!-- Section Space -->
        <div class="section-space">
            <!-- Section Container -->
            <div class="container-default">
                <!-- Section Wrapper -->
                <div class="jos mb-[60px] flex flex-wrap items-end justify-between gap-8 xl:mb-20">
                    <!-- Section Block -->
                    <div class="max-w-[550px]">
                        <h2>We create world-class web design, & branding</h2>
                    </div>
                    <!-- Section Block -->
                    <a href="{{ url('portfolio') }}" class="btn is-blue is-rounded btn-animation is-large group"><span>See more works</span></a>
                </div>
                <!-- Section Wrapper -->

                <!-- Portfolio List -->
                <div class="grid gap-8 md:grid-cols-2 lg:gap-10 xl:gap-[60px]">
                    <!-- Portfolio Item -->
                    <div class="jos" data-jos_delay="0">
                        <div class="group">
                            <div class="overflow-hidden rounded-[10px]">
                                <img src="{{ asset('assets/img/th-1/portfolio-img-1.jpg') }}" alt="portfolio-img-1" width="617" height="450" class="h-full w-full object-cover transition-all duration-300 ease-in-out group-hover:scale-105" />
                            </div>
                            <div class="mt-6">
                                <div class="mb-5 flex flex-wrap justify-between gap-5 text-ColorBlack lg:flex-nowrap xl:mb-7">
                                    <a href="{{ url('portfoliodetails') }}" class="text-xl font-semibold leading-[1.33] -tracking-[0.5px] group-hover:text-ColorBlue xl:text-2xl">App — The power of communication</a>
                                    <a href="#" class="hover:text-ColorBlue">UI/UX Design</a>
                                </div>
                                <a href="{{ url('portfoliodetails') }}" class="text-base font-bold capitalize leading-[1.5] group-hover:text-ColorBlue">View work
                                    <span class="inline-block transition-all duration-150 group-hover:translate-x-2"><i class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                    <!-- Portfolio Item -->
                    <!-- Portfolio Item -->
                    <div class="jos" data-jos_delay="0.3">
                        <div class="group">
                            <div class="overflow-hidden rounded-[10px]">
                                <img src="{{ asset('assets/img/th-1/portfolio-img-2.jpg') }}" alt="portfolio-img-2" width="617" height="450" class="h-full w-full object-cover transition-all duration-300 ease-in-out group-hover:scale-105" />
                            </div>
                            <div class="mt-6">
                                <div class="mb-5 flex flex-wrap justify-between gap-5 text-ColorBlack lg:flex-nowrap xl:mb-7">
                                    <a href="{{ url('portfoliodetails') }}" class="text-xl font-semibold leading-[1.33] -tracking-[0.5px] group-hover:text-ColorBlue xl:text-2xl">Website — The future lifestyle platform.</a>
                                    <a href="#" class="hover:text-ColorBlue">Branding</a>
                                </div>
                                <a href="{{ url('portfoliodetails') }}" class="text-base font-bold capitalize leading-[1.5] group-hover:text-ColorBlue">View work
                                    <span class="inline-block transition-all duration-150 group-hover:translate-x-2"><i class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                    <!-- Portfolio Item -->
                </div>
                <!-- Portfolio List -->
            </div>
            <!-- Section Container -->
        </div>
        <!-- Section Space -->

        <!-- Portfolio Shape - 2 -->
        <div class="absolute right-0 top-0 -z-10">
            <img src="{{ asset('assets/img/elements/portfolio-1-shape-1.svg') }}" alt="portfolio-1-shape-1" width="467" height="609" />
        </div>
    </div>
</section>
<!-- Portfolio Section End -->

<!-- Testimonial Section Start -->
<section class="section-testimonial">
    <!-- Section Background -->
    <div class="bg-ColorOffWhite">
        <!-- Section Space -->
        <div class="section-space">
            <!-- Section Container -->
            <div class="container-custom">
                <!-- Section Content Wrapper -->
                <div class="jos mb-[60px] xl:mb-20">
                    <!-- Section Content Block -->
                    <div class="mx-auto max-w-[625px]">
                        <h2 class="text-center">
                            Most of our satisfied clients leave their feedback
                        </h2>
                    </div>
                    <!-- Section Content Block -->
                </div>
                <!-- Section Content Wrapper -->

                <!-- Testimonial Area -->
                <div class="grid items-center gap-10 lg:grid-cols-2 xl:gap-20 xxl:grid-cols-[1.1fr_minmax(0,_1fr)]">
                    <img src="{{ asset('assets/img/th-1/testimonial-image-1.jpg') }}" alt="testimonial-image-1" width="636" height="446" class="jos h-auto w-full rounded-2xl" data-jos_animation="fade-right" />
                    <div class="jos flex flex-col text-ColorBlack" data-jos_animation="fade-left">
                        <img src="{{ asset('assets/img/icons/icon-blue-quote-right-reverse.svg') }}" alt="icon-blue-quote-right-reverse" width="90" height="60" class="h-auto w-10 xl:w-[90px]" />
                        <p class="mt-[30px] text-xl font-semibold leading-[1.33] -tracking-[0.5px] lg:text-2xl">
                            They’re probably one of the easiest vendors I’ve ever
                            worked with in the digital space. They have our best
                            interests in mind. The team went the extra mile in
                            negotiating costs and delivering within a flexible scope.
                            They’re customer focused and strong in terms of
                            development quality.
                        </p>
                        <div class="mb-8 lg:mb-[50px]">
                            <span class="block text-xl font-semibold">Dominika Drońska</span>
                            <span class="block">Senior Digital Marketing Manager, Abbey Road
                                Studios</span>
                        </div>
                        <a href="{{ url('portfoliodetails') }}" class="group text-base font-bold capitalize leading-[1.5] hover:text-ColorBlue">Read more reviews
                            <span class="inline-block transition-all duration-150 group-hover:translate-x-2"><i class="fa-solid fa-arrow-right"></i></span></a>
                    </div>
                </div>
                <!-- Testimonial Area -->
            </div>
            <!-- Section Container -->
        </div>
        <!-- Section Space -->
    </div>
    <!-- Section Background -->
</section>
<!-- Testimonial Section End -->

<!-- FAQ Section Start -->
<section class="section-faq">
    <div class="relative z-10 overflow-hidden">
        <!-- Section Space -->
        <div class="section-space">
            <!-- Section Container -->
            <div class="container-default">
                <!-- Section Content Wrapper -->
                <div class="jos mb-[60px] xl:mb-20">
                    <!-- Section Content Block -->
                    <div class="mx-auto max-w-[625px]">
                        <h2 class="text-center">
                            Frequently asked questions about our digital agency
                        </h2>
                    </div>
                    <!-- Section Content Block -->
                </div>
                <!-- Section Content Wrapper -->
                <!-- FAQ Area -->
                <div class="jos">
                    <!-- Accordion List -->
                    <ul class="mx-auto max-w-[1076px] rounded-[10px] border border-ColorBlack">
                        <!-- Accordion Item -->
                        <li class="accordion-item active overflow-hidden border-b border-ColorBlack p-[30px] last:border-b-0">
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
                                    A digital agency is a company that leverages digital
                                    channels to grow their clients’ brands online. ls and
                                    technologies such as web design, digital marketing,
                                    creative design and app development.
                                </p>
                            </div>
                            <!-- Accordion Body -->
                        </li>
                        <!-- Accordion Item -->
                        <!-- Accordion Item -->
                        <li class="accordion-item overflow-hidden border-b border-ColorBlack p-[30px] last:border-b-0">
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
                                    A digital agency is a company that leverages digital
                                    channels to grow their clients’ brands online. ls and
                                    technologies such as web design, digital marketing,
                                    creative design and app development.
                                </p>
                            </div>
                            <!-- Accordion Body -->
                        </li>
                        <!-- Accordion Item -->
                        <!-- Accordion Item -->
                        <li class="accordion-item overflow-hidden border-b border-ColorBlack p-[30px] last:border-b-0">
                            <!-- Accordion Header -->
                            <div class="accordion-header flex justify-between gap-6 text-xl font-semibold text-ColorBlack">
                                <button class="flex-1 text-left">
                                    Q. Hiring a digital agency vs hiring in-house: What is
                                    the difference?
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
                                    A digital agency is a company that leverages digital
                                    channels to grow their clients’ brands online. ls and
                                    technologies such as web design, digital marketing,
                                    creative design and app development.
                                </p>
                            </div>
                            <!-- Accordion Body -->
                        </li>
                        <!-- Accordion Item -->
                        <!-- Accordion Item -->
                        <li class="accordion-item overflow-hidden border-b border-ColorBlack p-[30px] last:border-b-0">
                            <!-- Accordion Header -->
                            <div class="accordion-header flex justify-between gap-6 text-xl font-semibold text-ColorBlack">
                                <button class="flex-1 text-left">
                                    Q. What questions should you ask when interviewing a
                                    digital agency?
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
                                    A digital agency is a company that leverages digital
                                    channels to grow their clients’ brands online. ls and
                                    technologies such as web design, digital marketing,
                                    creative design and app development.
                                </p>
                            </div>
                            <!-- Accordion Body -->
                        </li>
                        <!-- Accordion Item -->
                        <!-- Accordion Item -->
                        <li class="accordion-item overflow-hidden border-b border-ColorBlack p-[30px] last:border-b-0">
                            <!-- Accordion Header -->
                            <div class="accordion-header flex justify-between gap-6 text-xl font-semibold text-ColorBlack">
                                <button class="flex-1 text-left">
                                    Q. How do digital agencies charge for their services?
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
                                    A digital agency is a company that leverages digital
                                    channels to grow their clients’ brands online. ls and
                                    technologies such as web design, digital marketing,
                                    creative design and app development.
                                </p>
                            </div>
                            <!-- Accordion Body -->
                        </li>
                        <!-- Accordion Item -->
                    </ul>
                    <!-- Accordion List -->

                    <div class="jos mt-[60px] flex justify-center xl:mt-20">
                        <a href="{{ url('contact') }}" class="btn is-blue is-rounded btn-animation is-large group"><span>Still, have any questions? Contact us</span></a>
                    </div>
                </div>
                <!-- FAQ Area -->
            </div>
            <!-- Section Container -->
        </div>
        <!-- Section Space -->

        <!-- FAQ Shape - 1 -->
        <div class="absolute left-0 top-0 -z-10">
            <img src="{{ asset('assets/img/elements/faq-1-shape-1.svg') }}" alt="service-section-shape" width="390" height="507" />
        </div>
        <!-- FAQ Shape - 2 -->
        <div class="absolute bottom-0 right-0 -z-10">
            <img src="{{ asset('assets/img/elements/faq-1-shape-2.svg') }}" alt="service-section-shape" width="467" height="609" />
        </div>
    </div>
</section>
<!-- FAQ Section End -->

@endsection

@section('footer')
    <x-footer1/>
@endsection