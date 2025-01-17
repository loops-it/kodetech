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
                <h1 class="breadcrumb-title">About Us</h1>
                <ul class="breadcrumb-nav">
                    <li><a href="{{ url('index') }}">Home</a></li>
                    <li>About</li>
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

<!-- About Gallery Section Start -->
<div class="section-about-gallery">
    <!-- Section Spacer -->
    <div class="section-space">
        <!-- Section Container -->
        <div class="container-default">
            <!-- About Gallery Area -->
            <div class="grid gap-x-6 gap-y-10 sm:grid-cols-3">
                <!-- Single Gallery Image -->
                <div class="jos" data-jos_animation="fade-up" data-jos_delay="0">
                    <img src="{{ asset('assets/img/th-1/about-gallery-img-1.jpg') }}" alt="about-gallery-img-1" width="416" height="286" class="rounded-lg" />
                </div>
                <!-- Single Gallery Image -->
                <!-- Single Gallery Image -->
                <div class="jos sm:translate-y-10" data-jos_animation="fade-down" data-jos_delay="0.3">
                    <img src="{{ asset('assets/img/th-1/about-gallery-img-2.jpg') }}" alt="about-gallery-img-1" width="416" height="381" class="rounded-lg" />
                </div>
                <!-- Single Gallery Image -->
                <!-- Single Gallery Image -->
                <div class="jos" data-jos_animation="fade-up" data-jos_delay="0.6">
                    <img src="{{ asset('assets/img/th-1/about-gallery-img-3.jpg') }}" alt="about-gallery-img-1" width="416" height="286" class="rounded-lg" />
                </div>
                <!-- Single Gallery Image -->
            </div>
            <!-- About Gallery Area -->
        </div>
        <!-- Section Container -->
    </div>
    <!-- Section Spacer -->
</div>
<!-- About Gallery Section End -->

<!-- Brand Section Start -->
<div class="section-brand">
    <div class="jos">
        <!-- Section Space -->
        <div class="pb-[60px] md:pb-20 lg:pb-[100px]">
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

<!-- About Hero Section Start -->
<section class="section-about-hero">
    <div class="relative z-10 overflow-hidden bg-[#FAF9F5]">
        <!-- Section Space -->
        <div class="section-space">
            <!-- Section Container -->
            <div class="container-custom has-container-custom">
                <!-- About Hero Area -->
                <div class="grid items-center gap-10 lg:grid-cols-2 lg:gap-[60px] xl:gap-[100px] xxl:grid-cols-[1fr_minmax(0,_1.1fr)]">
                    <!-- About Hero Image Block -->
                    <div class="jos order-2 lg:order-1" data-jos_animation="fade-left" data-jos_delay="0">
                        <div class="relative flex items-center justify-center mx-auto lg:mx-0 max-w-full sm:max-w-[80%] md:max-w-[70%] lg:max-w-full">
                            <img src="{{ asset('assets/img/th-1/hero-img.jpg') }}" alt="hero image" width="600" height="579" class="h-auto w-full" />
                            <a data-fslightbox="gallery" href="https://www.youtube.com/watch?v=3nQNiWdeH2Q" class="group group absolute flex h-[100px] w-[100px] items-center justify-center rounded-[50%] bg-white text-ColorBlue" aria-label="video-play">
                                <span class="text-2xl transition-all duration-300 ease-linear group-hover:scale-110"><i class="fa-solid fa-play"></i></span>
                            </a>
                        </div>
                    </div>
                    <!-- About Hero Image Block -->
                    <!-- About Hero Content Block -->
                    <div class="jos order-1 lg:order-2" data-jos_animation="fade-right" data-jos_delay="0.3">
                        <!-- Section Wrapper -->
                        <div>
                            <!-- Section Block -->
                            <div class="mb-5">
                                <h2>
                                    Our vision is to build brands and provide world-class
                                    experiences to our clients
                                </h2>
                            </div>
                            <!-- Section Block -->
                            <p>
                                SINCE 1998, we transform bold business ideas into
                                exceptional digital products. We ideate, design, and
                                develop data-driven digital products made to answer
                                business challenges.
                            </p>
                            <!-- Horizontal Line Separator -->
                            <div class="my-7 h-px w-full bg-ColorBlack opacity-10 xl:my-10 xxl:my-14"></div>
                            <!-- BlockQuote Block-->
                            <div>
                                <blockquote class="mb-6 font-semibold italic text-ColorBlack/80">
                                    “We love what we do & create partnerships with our
                                    clients to ensure their digital transformation is
                                    positioned for long-term success.”
                                </blockquote>
                                <div class="flex flex-col items-center gap-4 lg:flex-row">
                                    <img src="{{ asset('assets/img/th-1/about-hero-user-blockquote-img.jpg') }}" alt="about-hero-user-blockquote-img" width="60" height="60" class="mx-auto h-[60px] w-[60px] rounded-[50%] lg:mx-0" />
                                    <div>
                                        <span class="block font-semibold">Karen Lynn</span>
                                        <span class="text-sm text-opacity-80">CEO & Co-founder @ Company</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Section Wrapper -->
                    </div>
                    <!-- About Hero Content Block -->
                </div>
                <!-- About Hero Area -->
            </div>
            <!-- Section Container -->
        </div>
        <!-- Section Space -->
    </div>
</section>
<!-- About Hero Section End -->

<!-- Fact Section Start -->
<section class="section-fact">
    <!-- Section Space -->
    <div class="section-space">
        <!-- Section Container -->
        <div class="container-custom has-container-custom">
            <!-- Fact Area Block -->
            <div class="grid gap-10 gap-x-12 lg:grid-cols-2 xl:grid-cols-[1fr_minmax(0,_0.7fr)] xxl:gap-x-[185px]">
                <!-- Content Block Left -->
                <div class="jos" data-jos_animation="fade-right" data-jos_delay="0">
                    <!-- Section Wrapper -->
                    <div>
                        <!-- Section Block -->
                        <div class="mb-5">
                            <h2>
                                Our creative talent has been influencing branding around
                                the world for a long time
                            </h2>
                        </div>
                        <!-- Section Block -->
                        <p>
                            With more than a decade of experience. We are worry about
                            the details so you need don't have to. When you work with
                            our agency, you can be sure that your website meets every
                            standard.
                        </p>
                    </div>
                    <!-- Section Wrapper -->
                    <a href="{{ url('contact') }}" class="btn is-blue is-rounded btn-animation is-large group mt-8 inline-block lg:mt-[50px]"><span>Get in touch</span></a>
                </div>
                <!-- Content Block Left -->
                <!-- Content Block Right -->
                <div>
                    <!-- Counter List -->
                    <div class="grid items-center justify-center gap-6 sm:grid-cols-2 sm:gap-0.5 sm:bg-ColorOffWhite">
                        <!-- Counter Item -->
                        <div class="text-center sm:bg-white sm:pb-10">
                            <div class="mb-1 font-PlusJakartaSans text-4xl font-extrabold leading-[1.2] -tracking-[1px] text-ColorBlack sm:text-5xl lg:text-[64px] xl:text-[70px]" data-module="countup">
                                <span class="start-number" data-countup-number="36">36</span>K+
                            </div>
                            <span class="text-xl font-semibold text-ColorBlue">Satisfied clients</span>
                        </div>
                        <!-- Counter Item -->
                        <!-- Counter Item -->
                        <div class="text-center sm:bg-white sm:pb-10">
                            <div class="mb-1 font-PlusJakartaSans text-4xl font-extrabold leading-[1.2] -tracking-[1px] text-ColorBlack sm:text-5xl lg:text-[64px] xl:text-[70px]" data-module="countup">
                                <span class="start-number" data-countup-number="80">80</span>K+
                            </div>
                            <span class="text-xl font-semibold text-ColorBlue">Active Engagement</span>
                        </div>
                        <!-- Counter Item -->
                        <!-- Counter Item -->
                        <div class="text-center sm:bg-white sm:pt-10">
                            <div class="mb-1 font-PlusJakartaSans text-4xl font-extrabold leading-[1.2] -tracking-[1px] text-ColorBlack sm:text-5xl lg:text-[64px] xl:text-[70px]" data-module="countup">
                                <span class="start-number" data-countup-number="54">54</span>K+
                            </div>
                            <span class="text-xl font-semibold text-ColorBlue">Success projects</span>
                        </div>
                        <!-- Counter Item -->
                        <!-- Counter Item -->
                        <div class="text-center sm:bg-white sm:pt-10">
                            <div class="mb-1 font-PlusJakartaSans text-4xl font-extrabold leading-[1.2] -tracking-[1px] text-ColorBlack sm:text-5xl lg:text-[64px] xl:text-[70px]" data-module="countup">
                                <span class="start-number" data-countup-number="36">72</span>+
                            </div>
                            <span class="text-xl font-semibold text-ColorBlue">Awards winning</span>
                        </div>
                        <!-- Counter Item -->
                    </div>
                    <!-- Counter List -->
                </div>
                <!-- Content Block Right -->
            </div>
            <!-- Fact Area Block -->
        </div>
        <!-- Section Container -->
    </div>
    <!-- Section Space -->
</section>
<!-- Fact Section End -->

<!-- Feature Section Start -->
<section class="section-features">
    <div class="bg-ColorOffWhite">
        <!-- Section Space -->
        <div class="section-space">
            <!-- Section Container -->
            <div class="container-default">
                <!-- Section Content Wrapper -->
                <div class="jos mb-[60px] xl:mb-20">
                    <!-- Section Content Block -->
                    <div class="mx-auto max-w-[526px]">
                        <h2 class="text-center">
                            Our core values that drive everything we do
                        </h2>
                    </div>
                    <!-- Section Content Block -->
                </div>
                <!-- Section Content Wrapper -->

                <!-- Feature List -->
                <div class="grid gap-10 sm:grid-cols-2 xl:grid-cols-3 xl:gap-10 xxl:gap-x-20 xxl:gap-y-[60px]">
                    <!-- Feature Item -->
                    <div class="jos" data-jos_animation="fade-left" data-jos_delay="0">
                        <div class="flex flex-col gap-6 text-center lg:flex-row lg:text-left">
                            <img src="{{ asset('assets/img/icons/icon-yellow-feature-1.svg') }}" alt="icon-yellow-feature-1" width="60" height="60" class="mx-auto h-[60px] w-[60px] lg:mx-0" />
                            <div>
                                <div class="mb-4 text-xl font-semibold leading-[1.33] -tracking-[0.5] xxl:text-2xl">
                                    Passionate about work
                                </div>
                                <p>
                                    Passion for work is a enthusiasm and excitement for
                                    what you do.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Feature Item -->
                    <!-- Feature Item -->
                    <div class="jos" data-jos_animation="fade-left" data-jos_delay="0.3">
                        <div class="flex flex-col gap-6 text-center lg:flex-row lg:text-left">
                            <img src="{{ asset('assets/img/icons/icon-yellow-feature-2.svg') }}" alt="icon-yellow-feature-1" width="60" height="60" class="mx-auto h-[60px] w-[60px] lg:mx-0" />
                            <div>
                                <div class="mb-4 text-xl font-semibold leading-[1.33] -tracking-[0.5] xxl:text-2xl">
                                    Creative team members
                                </div>
                                <p>
                                    A creative team is to design and execute campaigns &
                                    encourage
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Feature Item -->
                    <!-- Feature Item -->
                    <div class="jos" data-jos_animation="fade-left" data-jos_delay="0.6">
                        <div class="flex flex-col gap-6 text-center lg:flex-row lg:text-left">
                            <img src="{{ asset('assets/img/icons/icon-yellow-feature-3.svg') }}" alt="icon-yellow-feature-3" width="60" height="60" class="mx-auto h-[60px] w-[60px] lg:mx-0" />
                            <div>
                                <div class="mb-4 text-xl font-semibold leading-[1.33] -tracking-[0.5] xxl:text-2xl">
                                    Innovation solutions
                                </div>
                                <p>
                                    using either completely concepts finding new ways of
                                    using existing
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Feature Item -->
                    <!-- Feature Item -->
                    <div class="jos" data-jos_animation="fade-right" data-jos_delay="0.9">
                        <div class="flex flex-col gap-6 text-center lg:flex-row lg:text-left">
                            <img src="{{ asset('assets/img/icons/icon-yellow-feature-4.svg') }}" alt="icon-yellow-feature-4" width="60" height="60" class="mx-auto h-[60px] w-[60px] lg:mx-0" />
                            <div>
                                <div class="mb-4 text-xl font-semibold leading-[1.33] -tracking-[0.5] xxl:text-2xl">
                                    Qualitiful products
                                </div>
                                <p>
                                    Product quality refers to how well a product satisfies
                                    our customer
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Feature Item -->
                    <!-- Feature Item -->
                    <div class="jos" data-jos_animation="fade-right" data-jos_delay="1.2">
                        <div class="flex flex-col gap-6 text-center lg:flex-row lg:text-left">
                            <img src="{{ asset('assets/img/icons/icon-yellow-feature-5.svg') }}" alt="icon-yellow-feature-5" width="60" height="60" class="mx-auto h-[60px] w-[60px] lg:mx-0" />
                            <div>
                                <div class="mb-4 text-xl font-semibold leading-[1.33] -tracking-[0.5] xxl:text-2xl">
                                    Customer satisfaction
                                </div>
                                <p>
                                    Happy customers are delighted because of the customer
                                    service
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Feature Item -->
                    <!-- Feature Item -->
                    <div class="jos" data-jos_animation="fade-right" data-jos_delay="1.5">
                        <div class="flex flex-col gap-6 text-center lg:flex-row lg:text-left">
                            <img src="{{ asset('assets/img/icons/icon-yellow-feature-6.svg') }}" alt="icon-yellow-feature-6" width="60" height="60" class="mx-auto h-[60px] w-[60px] lg:mx-0" />
                            <div>
                                <div class="mb-4 text-xl font-semibold leading-[1.33] -tracking-[0.5] xxl:text-2xl">
                                    Simplicity interface
                                </div>
                                <p>
                                    Simplicity is used loosely to refer to the need to
                                    minimize a process
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Feature Item -->
                </div>
                <!-- Feature List -->
            </div>
            <!-- Section Container -->
        </div>
        <!-- Section Space -->
    </div>
</section>
<!-- Feature Section End -->

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
                                <div class="mb-5 flex flex-wrap justify-between gap-5 lg:flex-nowrap xl:mb-7">
                                    <a href="{{ url('portfoliodetails') }}" class="text-xl font-semibold leading-[1.33] -tracking-[0.5px] text-ColorBlack group-hover:text-ColorBlue xl:text-2xl">App — The power of communication</a>
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
                                <div class="mb-5 flex flex-wrap justify-between gap-5 lg:flex-nowrap xl:mb-7">
                                    <a href="{{ url('portfoliodetails') }}" class="text-xl font-semibold leading-[1.33] -tracking-[0.5px] text-ColorBlack group-hover:text-ColorBlue xl:text-2xl">Website — The future lifestyle platform.</a>
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

<!-- Team Section Start -->
<section class="section-team">
    <div class="bg-ColorOffWhite">
        <!-- Section Space -->
        <div class="section-space">
            <!-- Section Container -->
            <div class="container-default">
                <!-- Section Content Wrapper -->
                <div class="jos mb-[60px] xl:mb-20">
                    <!-- Section Content Block -->
                    <div class="mx-auto max-w-[526px]">
                        <h2 class="text-center">
                            Amazing team behind our creative products
                        </h2>
                    </div>
                    <!-- Section Content Block -->
                </div>
                <!-- Section Content Wrapper -->

                <!-- Team List -->
                <div class="grid gap-x-6 gap-y-8 sm:grid-cols-2 lg:grid-cols-4">
                    <!-- Team Item -->
                    <div class="jos flex flex-col items-center justify-center rounded-[10px] bg-white p-5 text-center" data-jos_animation="flip-left">
                        <img src="{{ asset('assets/img/th-1/team-img-1.jpg') }}" alt="team-img-1" width="266" height="250" class="h-auto w-full rounded-[10px] lg:w-auto" />
                        <div class="mb-4 mt-6">
                            <div class="mb-1 text-xl font-semibold">Eleanor Pena</div>
                            <span class="block text-opacity-80">CEO & Co-founder</span>
                        </div>

                        <div class="flex flex-wrap gap-[10px] xl:gap-4">
                            <a href="https://twitter.com" target="_blank" rel="noopener noreferrer" class="flex h-[35px] w-[35px] items-center justify-center rounded-[50%] bg-ColorBlack bg-opacity-5 text-sm text-ColorBlack transition-all duration-300 hover:bg-ColorBlack hover:bg-opacity-100 hover:text-white" aria-label="twitter">
                                <i class="fa-brands fa-x-twitter"></i>
                            </a>
                            <a href="https://www.facebook.com/" target="_blank" rel="noopener noreferrer" class="flex h-[35px] w-[35px] items-center justify-center rounded-[50%] bg-ColorBlack bg-opacity-5 text-sm text-ColorBlack transition-all duration-300 hover:bg-ColorBlack hover:bg-opacity-100 hover:text-white" aria-label="facebook">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                            <a href="https://www.instagram.com/" target="_blank" rel="noopener noreferrer" class="flex h-[35px] w-[35px] items-center justify-center rounded-[50%] bg-ColorBlack bg-opacity-5 text-sm text-ColorBlack transition-all duration-300 hover:bg-ColorBlack hover:bg-opacity-100 hover:text-white" aria-label="instagram">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                            <a href="https://www.github.com/" target="_blank" rel="noopener noreferrer" class="flex h-[35px] w-[35px] items-center justify-center rounded-[50%] bg-ColorBlack bg-opacity-5 text-sm text-ColorBlack transition-all duration-300 hover:bg-ColorBlack hover:bg-opacity-100 hover:text-white" aria-label="github">
                                <i class="fa-brands fa-github"></i>
                            </a>
                        </div>
                    </div>
                    <!-- Team Item -->
                    <!-- Team Item -->
                    <div class="jos flex flex-col items-center justify-center rounded-[10px] bg-white p-5 text-center" data-jos_animation="flip-left">
                        <img src="{{ asset('assets/img/th-1/team-img-2.jpg') }}" alt="team-img-2" width="266" height="250" class="h-auto w-full rounded-[10px] lg:w-auto" />
                        <div class="mb-4 mt-6">
                            <div class="mb-1 text-xl font-semibold">
                                Leslie Alexander
                            </div>
                            <span class="block text-opacity-80">Product Manager</span>
                        </div>

                        <div class="flex flex-wrap gap-[10px] xl:gap-4">
                            <a href="https://twitter.com" target="_blank" rel="noopener noreferrer" class="flex h-[35px] w-[35px] items-center justify-center rounded-[50%] bg-ColorBlack bg-opacity-5 text-sm text-ColorBlack transition-all duration-300 hover:bg-ColorBlack hover:bg-opacity-100 hover:text-white" aria-label="twitter">
                                <i class="fa-brands fa-x-twitter"></i>
                            </a>
                            <a href="https://www.facebook.com/" target="_blank" rel="noopener noreferrer" class="flex h-[35px] w-[35px] items-center justify-center rounded-[50%] bg-ColorBlack bg-opacity-5 text-sm text-ColorBlack transition-all duration-300 hover:bg-ColorBlack hover:bg-opacity-100 hover:text-white" aria-label="facebook">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                            <a href="https://www.instagram.com/" target="_blank" rel="noopener noreferrer" class="flex h-[35px] w-[35px] items-center justify-center rounded-[50%] bg-ColorBlack bg-opacity-5 text-sm text-ColorBlack transition-all duration-300 hover:bg-ColorBlack hover:bg-opacity-100 hover:text-white" aria-label="instagram">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                            <a href="https://www.github.com/" target="_blank" rel="noopener noreferrer" class="flex h-[35px] w-[35px] items-center justify-center rounded-[50%] bg-ColorBlack bg-opacity-5 text-sm text-ColorBlack transition-all duration-300 hover:bg-ColorBlack hover:bg-opacity-100 hover:text-white" aria-label="github">
                                <i class="fa-brands fa-github"></i>
                            </a>
                        </div>
                    </div>
                    <!-- Team Item -->
                    <!-- Team Item -->
                    <div class="jos flex flex-col items-center justify-center rounded-[10px] bg-white p-5 text-center" data-jos_animation="flip-left">
                        <img src="{{ asset('assets/img/th-1/team-img-3.jpg') }}" alt="team-img-3" width="266" height="250" class="h-auto w-full rounded-[10px] lg:w-auto" />
                        <div class="mb-4 mt-6">
                            <div class="mb-1 text-xl font-semibold">Jane Cooper</div>
                            <span class="block text-opacity-80">Web Developer</span>
                        </div>

                        <div class="flex flex-wrap gap-[10px] xl:gap-4">
                            <a href="https://twitter.com" target="_blank" rel="noopener noreferrer" class="flex h-[35px] w-[35px] items-center justify-center rounded-[50%] bg-ColorBlack bg-opacity-5 text-sm text-ColorBlack transition-all duration-300 hover:bg-ColorBlack hover:bg-opacity-100 hover:text-white" aria-label="twitter">
                                <i class="fa-brands fa-x-twitter"></i>
                            </a>
                            <a href="https://www.facebook.com/" target="_blank" rel="noopener noreferrer" class="flex h-[35px] w-[35px] items-center justify-center rounded-[50%] bg-ColorBlack bg-opacity-5 text-sm text-ColorBlack transition-all duration-300 hover:bg-ColorBlack hover:bg-opacity-100 hover:text-white" aria-label="facebook">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                            <a href="https://www.instagram.com/" target="_blank" rel="noopener noreferrer" class="flex h-[35px] w-[35px] items-center justify-center rounded-[50%] bg-ColorBlack bg-opacity-5 text-sm text-ColorBlack transition-all duration-300 hover:bg-ColorBlack hover:bg-opacity-100 hover:text-white" aria-label="instagram">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                            <a href="https://www.github.com/" target="_blank" rel="noopener noreferrer" class="flex h-[35px] w-[35px] items-center justify-center rounded-[50%] bg-ColorBlack bg-opacity-5 text-sm text-ColorBlack transition-all duration-300 hover:bg-ColorBlack hover:bg-opacity-100 hover:text-white" aria-label="github">
                                <i class="fa-brands fa-github"></i>
                            </a>
                        </div>
                    </div>
                    <!-- Team Item -->
                    <!-- Team Item -->
                    <div class="jos flex flex-col items-center justify-center rounded-[10px] bg-white p-5 text-center" data-jos_animation="flip-left">
                        <img src="{{ asset('assets/img/th-1/team-img-4.jpg') }}" alt="team-img-4" width="266" height="250" class="h-auto w-full rounded-[10px] lg:w-auto" />
                        <div class="mb-4 mt-6">
                            <div class="mb-1 text-xl font-semibold">Floyd Miles</div>
                            <span class="block text-opacity-80">Marketing Expert</span>
                        </div>

                        <div class="flex flex-wrap gap-[10px] xl:gap-4">
                            <a href="https://twitter.com" target="_blank" rel="noopener noreferrer" class="flex h-[35px] w-[35px] items-center justify-center rounded-[50%] bg-ColorBlack bg-opacity-5 text-sm text-ColorBlack transition-all duration-300 hover:bg-ColorBlack hover:bg-opacity-100 hover:text-white" aria-label="twitter">
                                <i class="fa-brands fa-x-twitter"></i>
                            </a>
                            <a href="https://www.facebook.com/" target="_blank" rel="noopener noreferrer" class="flex h-[35px] w-[35px] items-center justify-center rounded-[50%] bg-ColorBlack bg-opacity-5 text-sm text-ColorBlack transition-all duration-300 hover:bg-ColorBlack hover:bg-opacity-100 hover:text-white" aria-label="facebook">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                            <a href="https://www.instagram.com/" target="_blank" rel="noopener noreferrer" class="flex h-[35px] w-[35px] items-center justify-center rounded-[50%] bg-ColorBlack bg-opacity-5 text-sm text-ColorBlack transition-all duration-300 hover:bg-ColorBlack hover:bg-opacity-100 hover:text-white" aria-label="instagram">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                            <a href="https://www.github.com/" target="_blank" rel="noopener noreferrer" class="flex h-[35px] w-[35px] items-center justify-center rounded-[50%] bg-ColorBlack bg-opacity-5 text-sm text-ColorBlack transition-all duration-300 hover:bg-ColorBlack hover:bg-opacity-100 hover:text-white" aria-label="github">
                                <i class="fa-brands fa-github"></i>
                            </a>
                        </div>
                    </div>
                    <!-- Team Item -->
                </div>
                <!-- Team List -->
            </div>
            <!-- Section Container -->
        </div>
        <!-- Section Space -->
    </div>
</section>
<!-- Team Section End -->

<!-- FAQ Section Start -->
<section class="section-faq">
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
</section>
<!-- FAQ Section End -->

@endsection



@section('footer')
    <x-footer1/>
@endsection