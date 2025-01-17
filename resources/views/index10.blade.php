@extends('layout.layout1',['bgColor'=> 'bg-ColorEggSour'])

@section('headerLogo')
<img src="{{ asset('assets/img/logo-denim-dark.png') }}" alt="Masco" width="109" height="24" />
@endsection


@section('headButtons')

<div class="flex items-center gap-6">
    <a href="{{ url('login') }}" class="btn-text hidden hover:text-ColorDenimDarkBlue sm:inline-block">Login</a>
    <a href="{{ url('signup') }}" class="btn is-denim is-transparent is-rounded btn-animation group hidden sm:inline-block"><span>Sign up free</span></a>
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
    <!-- Section Background -->
    <div class="relative z-10 overflow-hidden">
        <!-- Hero Section Space -->
        <div class="pb-[60px] pt-28 md:pb-20 md:pt-36 lg:pb-[100px] lg:pt-[150px] xxl:pb-[120px] xxl:pt-[185px]">
            <!-- Section Container -->
            <div class="container-default">
                <!-- Hero Area -->
                <div class="grid gap-10 items-center lg:grid-cols-2 lg:gap-[74px] xxl:grid-cols-[1fr_minmax(0,_0.8fr)]">
                    <!-- Hero Content Block -->
                    <div class="jos text-center xl:text-left" data-jos_animation="fade-left">
                        <h1 class="mb-6 font-ClashDisplay font-medium leading-[1.06] lg:text-[60px] text-ColorOil xl:text-7xl xxl:text-[90px]">
                            Create great content quickly with AI Writer
                        </h1>
                        <p class="mb-8 text-ColorOil lg:mb-[50px]">
                            Masco is a generative AI platform for businesses that
                            helps you quickly create content writing, captions,
                            headlines, blog posts, etc. It is an all-in-one content AI
                            writing platform that saves you time and money.
                        </p>
                        <div class="flex flex-wrap justify-center xl:justify-start gap-6">
                            <a href="#" class="btn is-denim is-transparent is-large is-rounded btn-animation group inline-block"><span>Get started— it's free</span></a>
                            <a href="#" class="btn is-outline-denim is-transparent is-large is-rounded btn-animation group inline-block"><span>Schedule a demo</span></a>
                        </div>
                        <div class="mt-7 flex flex-wrap justify-center xl:justify-start items-center gap-5">
                            <div>
                                <img src="{{ asset('assets/img/icons/trustpilot-logo.svg') }}" alt="trustpilot-logo" width="123" height="31" />
                            </div>
                            <div class="flex gap-[5px] text-base font-semibold">
                                <div class="flex gap-1 text-[#F59E0B]">
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                </div>
                                4.8/5 Rating
                            </div>
                        </div>
                    </div>
                    <!-- Hero Content Block -->

                    <!-- Hero Image Block -->
                    <div class="jos mx-auto lg:mx-0 max-w-full sm:max-w-[80%] md:max-w-[70%] lg:max-w-full" data-jos_animation="fade-right">
                        <img src="{{ asset('assets/img/th-10/hero-img.png') }}" alt="hero-img" width="526" height="527" />
                    </div>
                    <!-- Hero Image Block -->
                </div>
                <!-- Hero Area -->
            </div>
            <!-- Section Container -->
        </div>
        <!-- Hero Section Space -->
    </div>
    <!-- Section Background -->
</section>
<!-- Hero Section End -->

<!-- Brand Section Start -->
<div class="section-brand">
    <div class="jos">
        <!-- Section Space -->
        <div class="horizontal-line bg-ColorOil"></div>
        <div class="py-[60px] md:py-20 lg:py-[100px]">
            <!-- Section Container -->
            <div class="container-default">
                <!-- Brand Slider -->
                <div class="swiper brand-slider">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/img/th-10/brand-1.png') }}" alt="brand-1" width="138" height="39" class="h-auto w-fit" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/img/th-10/brand-2.png') }}" alt="brand-2" width="190" height="39" class="h-auto w-fit" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/img/th-10/brand-3.png') }}" alt="brand-3" width="150" height="39" class="h-auto w-fit" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/img/th-10/brand-4.png') }}" alt="brand-4" width="161" height="39" class="h-auto w-fit" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/img/th-10/brand-5.png') }}" alt="brand-5" width="138" height="46" class="h-auto w-fit" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/img/th-10/brand-1.png') }}" alt="brand-1" width="138" height="39" class="h-auto w-fit" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/img/th-10/brand-2.png') }}" alt="brand-2" width="190" height="39" class="h-auto w-fit" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/img/th-10/brand-3.png') }}" alt="brand-3" width="150" height="39" class="h-auto w-fit" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/img/th-10/brand-4.png') }}" alt="brand-4" width="161" height="39" class="h-auto w-fit" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/img/th-10/brand-5.png') }}" alt="brand-5" width="138" height="46" class="h-auto w-fit" />
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

<!-- Content Section Start -->
<section class="section-content">
    <div class="relative z-10">
        <!-- Section Background -->
        <div class="rounded-[30px] bg-ColorDenimDarkBlue">
            <!-- Section Space -->
            <div class="section-space">
                <!-- Section Container -->
                <div class="container-default">
                    <div class="flex flex-col gap-y-20 lg:gap-y-[100px] xl:gap-y-[120px]">
                        <!-- Content Area Single -->
                        <div class="grid items-center gap-16 lg:grid-cols-[0.7fr_minmax(0,_1fr)] xl:grid-cols-[0.9fr_minmax(0,_1fr)] lg:gap-20 xl:gap-[134px]">
                            <!-- Content Block Left -->
                            <div class="jos order-1 lg:order-2" data-jos_animation="fade-left">
                                <!-- Section Wrapper -->
                                <div>
                                    <!-- Section Block -->
                                    <div class="mb-5">
                                        <h2 class="font-ClashDisplay text-4xl font-medium leading-[1.13] text-ColorEggSour lg:text-left lg:text-5xl xl:text-6xl">
                                            Fast communication tool with confidence
                                        </h2>
                                    </div>
                                    <!-- Section Block -->
                                </div>
                                <!-- Section Wrapper -->
                                <p class="text-ColorEggSour/80">
                                    We know what it's like to panic when you want to share
                                    something you've written. It's frustrating when you
                                    can't get your writing to do justice to the ideas you
                                    want to write and say.
                                </p>
                                <p class="text-ColorEggSour/80">
                                    And so we came up with the Masco AI writing tool.
                                    Which helps you write faster and more confidently and
                                    also saves you time.
                                </p>
                                <a href="#" class="btn is-outline-palegold is-large is-rounded btn-animation group inline-block"><span>Learn more</span></a>
                            </div>
                            <!-- Content Block Left -->
                            <!-- Content Block Right -->
                            <div class="jos relative order-2 lg:order-1 mx-auto lg:mx-0 max-w-full sm:max-w-[80%] md:max-w-[70%] lg:max-w-full" data-jos_animation="fade-right">
                                <!-- Content Image -->
                                <img src="{{ asset('assets/img/th-10/content-img-1.png') }}" alt="content-img-1" width="526" height="571" />
                            </div>
                            <!-- Content Block Right -->
                        </div>
                        <!-- Content Area Single -->
                        <!-- Content Area Single -->
                        <div class="grid items-center gap-16 lg:grid-cols-[1fr_minmax(0,_0.7fr)] xl:grid-cols-[1fr_minmax(0,_0.9fr)] lg:gap-20 xl:gap-[134px]">
                            <!-- Content Block Left -->
                            <div class="jos order-1" data-jos_animation="fade-left">
                                <!-- Section Wrapper -->
                                <div>
                                    <!-- Section Block -->
                                    <div class="mb-5">
                                        <h2 class="font-ClashDisplay text-4xl font-medium leading-[1.13] text-ColorEggSour lg:text-left lg:text-5xl xl:text-6xl">
                                            Use all languages and advanced grammar
                                        </h2>
                                    </div>
                                    <!-- Section Block -->
                                </div>
                                <!-- Section Wrapper -->
                                <p class="text-ColorEggSour/80">
                                    Masco catches 80% more language quality problems and
                                    than other spelling & grammar checkers using a machine
                                    learning system trained on millions of English
                                    sentences.
                                </p>
                                <!-- Service List -->
                                <div>
                                    <!-- Service Item -->
                                    <div class="jos border-b border-[#FDFBF9]/10 py-6 first:pt-0 lg:last:border-none lg:last:pb-0" data-jos_delay="0">
                                        <a href="#" class="flex items-center justify-between gap-5 font-ClashDisplay text-[22px] font-medium leading-[1.23] text-ColorEggSour transition-all duration-300 hover:text-ColorPaleGold xl:text-2xl xxl:text-[26px]">
                                            1. Engaging and authentic writing
                                            <span class="inline-block -rotate-[30deg] text-2xl"><i class="fa-light fa-arrow-right"></i></span>
                                        </a>
                                    </div>
                                    <!-- Service Item -->
                                    <!-- Service Item -->
                                    <div class="jos border-b border-[#FDFBF9]/10 py-6 first:pt-0 lg:last:border-none lg:last:pb-0" data-jos_delay="0.3">
                                        <a href="#" class="flex items-center justify-between gap-5 font-ClashDisplay text-[22px] font-medium leading-[1.23] text-ColorEggSour transition-all duration-300 hover:text-ColorPaleGold xl:text-2xl xxl:text-[26px]">
                                            2. 80+ AI copywriting templates
                                            <span class="inline-block -rotate-[30deg] text-2xl"><i class="fa-light fa-arrow-right"></i></span>
                                        </a>
                                    </div>
                                    <!-- Service Item -->
                                    <!-- Service Item -->
                                    <div class="jos border-b border-[#FDFBF9]/10 py-6 first:pt-0 lg:last:border-none lg:last:pb-0" data-jos_delay="0.6">
                                        <a href="#" class="flex items-center justify-between gap-5 font-ClashDisplay text-[22px] font-medium leading-[1.23] text-ColorEggSour transition-all duration-300 hover:text-ColorPaleGold xl:text-2xl xxl:text-[26px]">
                                            3. Built-in plagiarism checker
                                            <span class="inline-block -rotate-[30deg] text-2xl"><i class="fa-light fa-arrow-right"></i></span>
                                        </a>
                                    </div>
                                    <!-- Service Item -->
                                </div>
                                <!-- Service List -->
                            </div>
                            <!-- Content Block Left -->
                            <!-- Content Block Right -->
                            <div class="jos relative order-2 mx-auto lg:mx-0 max-w-full sm:max-w-[80%] md:max-w-[70%] lg:max-w-full" data-jos_animation="fade-right">
                                <!-- Content Image -->
                                <img src="{{ asset('assets/img/th-10/content-img-2.png') }}" alt="content-img-2" width="527" height="502" />

                                <!-- Content Card -->
                                <div class="absolute -left-10 bottom-[90px] hidden lg:block">
                                    <img src="{{ asset('assets/img/th-10/content-2-card.png') }}" alt="content-2-card" width="531" height="166" class="rounded-[10px]" />
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
    </div>
</section>
<!-- Content Section End -->

<!-- Feature Section Start -->
<section class="section-feature">
    <!-- Section Space -->
    <div class="section-space">
        <!-- Section Container -->
        <div class="container-default">
            <!-- Section Content Wrapper -->
            <div class="jos mb-[60px] xl:mb-20">
                <!-- Section Content Block -->
                <div class="mx-auto max-w-[670px]">
                    <div class="mb-5">
                        <h2 class="text-center font-ClashDisplay text-4xl font-medium leading-[1.13] text-ColorOil lg:text-5xl xl:text-6xl">
                            Get all kinds of writing benefits from AI Writer
                        </h2>
                    </div>
                </div>
                <!-- Section Content Block -->
            </div>
            <!-- Section Content Wrapper -->

            <div class="overflow-hidden">
                <!-- Feature List -->
                <div class="jos -my-10 grid grid-cols-1 gap-y-px bg-ColorOil/10 lg:grid-cols-2">
                    <!-- Feature Item -->
                    <div class="flex gap-10 border-ColorOil/10 bg-ColorEggSour py-10 even:border-r-0 lg:border-r lg:p-10">
                        <div class="h-auto w-14 sm:w-16 md:w-20 lg:w-24">
                            <img src="{{ asset('assets/img/icons/icon-black-home-10-feature-1.svg') }}" alt="icon-black-home-10-feature-1" width="98" height="81" />
                        </div>
                        <div class="flex-1">
                            <div class="mb-4 font-ClashDisplay text-2xl font-medium tracking-[1px] text-ColorOil">
                                Edit in a clean, minimalist editor
                            </div>
                            <p class="text-ColorOil/80">
                                You'll enjoy the ability to identify words & replace
                                them, as well as reveal specific bits of code also.
                            </p>
                        </div>
                    </div>
                    <!-- Feature Item -->
                    <div class="flex gap-10 border-ColorOil/10 bg-ColorEggSour py-10 even:border-r-0 lg:border-r lg:p-10">
                        <div class="h-auto w-14 sm:w-16 md:w-20 lg:w-24">
                            <img src="{{ asset('assets/img/icons/icon-black-home-10-feature-2.svg') }}" alt="icon-black-home-10-feature-2" width="98" height="95" />
                        </div>
                        <div class="flex-1">
                            <div class="mb-4 font-ClashDisplay text-2xl font-medium tracking-[1px] text-ColorOil">
                                Write copy & content converts
                            </div>
                            <p class="text-ColorOil/80">
                                Both copywriting & content writing can be used to
                                achieve your goals, but it's important to use.
                            </p>
                        </div>
                    </div>
                    <!-- Feature Item -->
                    <div class="flex gap-10 border-ColorOil/10 bg-ColorEggSour py-10 even:border-r-0 lg:border-r lg:p-10">
                        <div class="h-auto w-14 sm:w-16 md:w-20 lg:w-24">
                            <img src="{{ asset('assets/img/icons/icon-black-home-10-feature-3.svg') }}" alt="icon-black-home-10-feature-3" width="98" height="90" />
                        </div>
                        <div class="flex-1">
                            <div class="mb-4 font-ClashDisplay text-2xl font-medium tracking-[1px] text-ColorOil">
                                Write social media posts & tweets
                            </div>
                            <p class="text-ColorOil/80">
                                Once you click follow, anything that person or
                                organization says will appear on your timeline.
                            </p>
                        </div>
                    </div>
                    <!-- Feature Item -->
                    <div class="flex gap-10 border-ColorOil/10 bg-ColorEggSour py-10 even:border-r-0 lg:border-r lg:p-10">
                        <div class="h-auto w-14 sm:w-16 md:w-20 lg:w-24">
                            <img src="{{ asset('assets/img/icons/icon-black-home-10-feature-4.svg') }}" alt="icon-black-home-10-feature-4" width="98" height="93" />
                        </div>
                        <div class="flex-1">
                            <div class="mb-4 font-ClashDisplay text-2xl font-medium tracking-[1px] text-ColorOil">
                                Write essays, lyrics, and poems
                            </div>
                            <p class="text-ColorOil/80">
                                To cite a poem in an essay, you include quotation marks
                                around a short quote or three lines or less.
                            </p>
                        </div>
                    </div>
                    <!-- Feature Item -->
                    <div class="flex gap-10 border-ColorOil/10 bg-ColorEggSour py-10 even:border-r-0 lg:border-r lg:p-10">
                        <div class="h-auto w-14 sm:w-16 md:w-20 lg:w-24">
                            <img src="{{ asset('assets/img/icons/icon-black-home-10-feature-5.svg') }}" alt="icon-black-home-10-feature-5" width="98" height="86" />
                        </div>
                        <div class="flex-1">
                            <div class="mb-4 font-ClashDisplay text-2xl font-medium tracking-[1px] text-ColorOil">
                                Create content in 65+ languages
                            </div>
                            <p class="text-ColorOil/80">
                                It can read and write content in 65+ languages including
                                English, Spanish, Japanese & others.
                            </p>
                        </div>
                    </div>
                    <!-- Feature Item -->
                    <div class="flex gap-10 border-ColorOil/10 bg-ColorEggSour py-10 even:border-r-0 lg:border-r lg:p-10">
                        <div class="h-auto w-14 sm:w-16 md:w-20 lg:w-24">
                            <img src="{{ asset('assets/img/icons/icon-black-home-10-feature-6.svg') }}" alt="icon-black-home-10-feature-6" width="98" height="69" />
                        </div>
                        <div class="flex-1">
                            <div class="mb-4 font-ClashDisplay text-2xl font-medium tracking-[1px] text-ColorOil">
                                Build an AI-powered business
                            </div>
                            <p class="text-ColorOil/80">
                                Empower your team or customers with an AI writer to
                                improve your processes and products.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Feature List -->
            </div>
        </div>
        <!-- Section Container -->
    </div>
    <!-- Section Space -->
</section>
<!-- Feature Section End -->

<!-- Service Section Start -->
<section class="section-service">
    <!-- Section Space -->
    <div class="section-space-bottom">
        <!-- Section Container -->
        <div class="container-default">
            <!-- Section Wrapper -->
            <div class="jos mb-[60px] flex flex-wrap items-center justify-between gap-8 xl:mb-20">
                <!-- Section Block -->
                <div class="max-w-[670px]">
                    <h2 class="font-ClashDisplay text-4xl font-medium leading-[1.13] text-ColorOil lg:text-5xl xl:text-6xl">
                        Amazing content you'll create with AI Writing
                    </h2>
                </div>
                <!-- Section Block -->
                <a href="#" class="btn is-denim is-transparent is-large is-rounded btn-animation group inline-block"><span>Get started— it's free</span></a>
            </div>
            <!-- Section Wrapper -->

            <!-- Service Area -->
            <div class="grid grid-cols-1 items-center gap-20 lg:grid-cols-[1fr_minmax(0,_0.8fr)]">
                <div class="jos order-2 lg:order-1" data-jos_animation="fade-left">
                    <div class="relative flex items-center justify-center">
                        <img src="{{ asset('assets/img/th-10/content-video-img.png') }}" alt="content-video-img" width="745" height="508" class="h-auto w-full" />
                        <a data-fslightbox="gallery" href="https://www.youtube.com/watch?v=3nQNiWdeH2Q" class="group group absolute flex h-20 w-20 items-center justify-center rounded-[50%] bg-ColorDenimDarkBlue text-ColorPaleGold" aria-label="video-play">
                            <span class="text-2xl transition-all duration-300 ease-linear group-hover:scale-110"><i class="fa-solid fa-play"></i></span>
                        </a>
                    </div>
                </div>
                <div class="jos order-1 lg:order-2" data-jos_animation="fade-right">
                    <!-- FAQ Area -->
                    <div class="jos">
                        <!-- Accordion List -->
                        <ul class="mx-auto max-w-[1076px] rounded-[10px] border-2 border-ColorBlack">
                            <!-- Accordion Item -->
                            <li class="accordion-item active overflow-hidden border-b-2 border-ColorBlack p-[30px] last:border-b-0">
                                <!-- Accordion Header -->
                                <div class="accordion-header flex justify-between gap-6 text-xl font-semibold text-ColorOil">
                                    <button class="flex flex-1 items-center gap-4 text-left">
                                        <span class="inline-block h-auto w-6">
                                            <img src="{{ asset('assets/img/icons/icon-denim-pencil.svg') }}" alt="icon-denim-pencil" width="24" height="24" />
                                        </span>
                                        <span class="flex-1">
                                            Blog and article writing
                                        </span>
                                    </button>
                                </div>
                                <!-- Accordion Header -->
                                <!-- Accordion Body -->
                                <div class="accordion-body max-w-[826px] text-ColorDark/80 opacity-80">
                                    <p class="pt-5">
                                        Write blogs and articles of 300 to 1000 words
                                        instantly with our AI writing tool, rhythm &
                                        composition like a pro
                                    </p>
                                </div>
                                <!-- Accordion Body -->
                            </li>
                            <!-- Accordion Item -->
                            <!-- Accordion Item -->
                            <li class="accordion-item overflow-hidden border-b-2 border-ColorBlack p-[30px] last:border-b-0">
                                <!-- Accordion Header -->
                                <div class="accordion-header flex justify-between gap-6 text-xl font-semibold text-ColorOil">
                                    <button class="flex flex-1 items-center gap-4 text-left">
                                        <span class="inline-block h-auto w-6">
                                            <img src="{{ asset('assets/img/icons/icon-denim-shopping-cart.svg') }}" alt="icon-denim-shopping-cart" width="24" height="24" />
                                        </span>
                                        <span class="flex-1">
                                            eCommerce content copyright free
                                        </span>
                                    </button>
                                </div>
                                <!-- Accordion Header -->
                                <!-- Accordion Body -->
                                <div class="accordion-body max-w-[826px] text-ColorDark/80 opacity-80">
                                    <p class="pt-5">
                                        Write blogs and articles of 300 to 1000 words
                                        instantly with our AI writing tool, rhythm &
                                        composition like a pro
                                    </p>
                                </div>
                                <!-- Accordion Body -->
                            </li>
                            <!-- Accordion Item -->
                            <!-- Accordion Item -->
                            <li class="accordion-item overflow-hidden border-b-2 border-ColorBlack p-[30px] last:border-b-0">
                                <!-- Accordion Header -->
                                <div class="accordion-header flex justify-between gap-6 text-xl font-semibold text-ColorOil">
                                    <button class="flex flex-1 items-center gap-4 text-left">
                                        <span class="inline-block h-auto w-6">
                                            <img src="{{ asset('assets/img/icons/icon-denim-chat-alt-2.svg') }}" alt="icon-denim-chat-alt-2" width="24" height="24" />
                                        </span>
                                        <span class="flex-1">
                                            Paid ads & social media copy
                                        </span>
                                    </button>
                                </div>
                                <!-- Accordion Header -->
                                <!-- Accordion Body -->
                                <div class="accordion-body max-w-[826px] text-ColorDark/80 opacity-80">
                                    <p class="pt-5">
                                        Write blogs and articles of 300 to 1000 words
                                        instantly with our AI writing tool, rhythm &
                                        composition like a pro
                                    </p>
                                </div>
                                <!-- Accordion Body -->
                            </li>
                            <!-- Accordion Item -->
                            <!-- Accordion Item -->
                            <li class="accordion-item overflow-hidden border-b-2 border-ColorBlack p-[30px] last:border-b-0">
                                <!-- Accordion Header -->
                                <div class="accordion-header flex justify-between gap-6 text-xl font-semibold text-ColorOil">
                                    <button class="flex flex-1 items-center gap-4 text-left">
                                        <span class="inline-block h-auto w-6">
                                            <img src="{{ asset('assets/img/icons/icon-denim-mail.svg') }}" alt="icon-denim-mail" width="24" height="24" />
                                        </span>
                                        <span class="flex-1">
                                            Emails and business communication
                                        </span>
                                    </button>
                                </div>
                                <!-- Accordion Header -->
                                <!-- Accordion Body -->
                                <div class="accordion-body max-w-[826px] text-ColorDark/80 opacity-80">
                                    <p class="pt-5">
                                        Write blogs and articles of 300 to 1000 words
                                        instantly with our AI writing tool, rhythm &
                                        composition like a pro
                                    </p>
                                </div>
                                <!-- Accordion Body -->
                            </li>
                            <!-- Accordion Item -->
                            <!-- Accordion Item -->
                            <li class="accordion-item overflow-hidden border-b-2 border-ColorBlack p-[30px] last:border-b-0">
                                <!-- Accordion Header -->
                                <div class="accordion-header flex justify-between gap-6 text-xl font-semibold text-ColorOil">
                                    <button class="flex flex-1 items-center gap-4 text-left">
                                        <span class="inline-block h-auto w-6">
                                            <img src="{{ asset('assets/img/icons/icon-denim-desktop-computer.svg') }}" alt="icon-denim-desktop-computer" width="24" height="24" />
                                        </span>
                                        <span class="flex-1">
                                            Website content writing
                                        </span>
                                    </button>
                                </div>
                                <!-- Accordion Header -->
                                <!-- Accordion Body -->
                                <div class="accordion-body max-w-[826px] text-ColorDark/80 opacity-80">
                                    <p class="pt-5">
                                        Write blogs and articles of 300 to 1000 words
                                        instantly with our AI writing tool, rhythm &
                                        composition like a pro
                                    </p>
                                </div>
                                <!-- Accordion Body -->
                            </li>
                            <!-- Accordion Item -->
                        </ul>
                        <!-- Accordion List -->
                    </div>
                    <!-- FAQ Area -->
                </div>
            </div>
            <!-- Service Area -->
        </div>
        <!-- Section Container -->
    </div>
    <!-- Section Space -->
</section>
<!-- Service Section End -->

<!-- Process Section Start -->
<section class="section-process">
    <!-- Section Spacer -->
    <div class="section-space-bottom">
        <div class="flex flex-col gap-y-20 lg:gap-y-[100px] xl:gap-y-[120px]">
            <div class="container-default">
                <!-- Section Content Wrapper -->
                <div class="jos mb-[60px] xl:mb-20">
                    <!-- Section Content Block -->
                    <div class="mx-auto max-w-[636px]">
                        <h2 class="text-center font-ClashDisplay text-4xl font-medium leading-[1.13] text-ColorOil lg:text-5xl xl:text-6xl">
                            Start writing great in three facile steps
                        </h2>
                    </div>
                    <!-- Section Content Block -->
                </div>
                <!-- Section Content Wrapper -->

                <!-- Process Area -->
                <div class="grid gap-x-10 gap-y-10 md:grid-cols-2 lg:grid-cols-3 xl:gap-x-20 xxl:gap-x-[104px]">
                    <!-- Process Single Item -->
                    <div class="group relative z-10 text-center after:absolute after:left-[calc(50%+_40px)] after:top-10 after:-z-10 after:hidden after:w-full after:border after:border-dashed after:border-ColorBlack last:after:hidden lg:after:block xl:after:w-[calc(100%+_80px)]">
                        <div class="mx-auto mb-[30px] flex h-[60px] w-[60px] items-center justify-center rounded-[50%] border border-ColorOil/10 bg-ColorEggSour font-ClashDisplay text-[26px] font-semibold leading-[1.2] text-ColorOil transition-all duration-300 group-hover:border-[#F65510] group-hover:bg-[#F65510] lg:h-20 lg:w-20 xl:text-[34px]">
                            1
                        </div>
                        <div class="mb-[15px] font-ClashDisplay text-2xl font-medium leading-[1.4] tracking-[1px] text-ColorOil xl:text-3xl">
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
                        <div class="mx-auto mb-[30px] flex h-[60px] w-[60px] items-center justify-center rounded-[50%] border border-ColorOil/10 bg-ColorEggSour font-ClashDisplay text-[26px] font-semibold leading-[1.2] text-ColorOil transition-all duration-300 group-hover:border-[#F65510] group-hover:bg-[#F65510] lg:h-20 lg:w-20 xl:text-[34px]">
                            2
                        </div>
                        <div class="mb-[15px] font-ClashDisplay text-2xl font-medium leading-[1.4] tracking-[1px] text-ColorOil xl:text-3xl">
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
                        <div class="mx-auto mb-[30px] flex h-[60px] w-[60px] items-center justify-center rounded-[50%] border border-ColorOil/10 bg-ColorEggSour font-ClashDisplay text-[26px] font-semibold leading-[1.2] text-ColorOil transition-all duration-300 group-hover:border-[#F65510] group-hover:bg-[#F65510] lg:h-20 lg:w-20 xl:text-[34px]">
                            3
                        </div>
                        <div class="mb-[15px] font-ClashDisplay text-2xl font-medium leading-[1.4] tracking-[1px] text-ColorOil xl:text-3xl">
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
</section>
<!-- Process Section End -->

<!-- Testimonial Section Start -->
<section class="testiminial-section">
    <!-- Section Background -->
    <div class="rounded-[30px] bg-ColorPaleGold">
        <!-- Section Space -->
        <div class="section-space">
            <!-- Section Container -->
            <div class="container-default">
                <!-- Section Wrapper -->
                <div class="jos mb-[60px] flex flex-wrap items-center justify-between gap-8 xl:mb-20">
                    <!-- Section Block -->
                    <div class="max-w-[688px]">
                        <h2 class="font-ClashDisplay text-4xl font-medium leading-[1.13] text-ColorOil lg:text-5xl xl:text-6xl">
                            90% of users say that Masco has helped them
                        </h2>
                    </div>
                    <!-- Section Block -->
                    <a href="#" class="btn is-denim is-transparent is-large is-rounded btn-animation group inline-block"><span>View all reviews</span></a>
                </div>
                <!-- Section Wrapper -->
                <!-- Testimonial Slider -->
                <div class="jos swiper testimonial-one">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="flex flex-col items-center gap-12 px-0 md:flex-row md:gap-16 md:px-8 lg:gap-[90px] lg:px-[60px]">
                                <div class="h-[230px] w-[230px] overflow-hidden rounded-[50%] border-[10px] border-ColorDenimDarkBlue">
                                    <img src="{{ asset('assets/img/th-10/testimonial-img.png') }}" alt="testimonial-img" width="230" height="230" class="h-full w-full object-cover" />
                                </div>
                                <div class="flex-1 text-ColorOil">
                                    <blockquote class="mb-10 text-xl font-semibold -tracking-[0.5px] lg:text-2xl">
                                        “I am continually impressed with the positive input
                                        this program offers for me every time I sit down to
                                        write. My skills also have improved immensely since
                                        I bought Masco writing tool and I heartily recommend
                                        it to anyone who wants to have more confidence in
                                        their own writing.”
                                    </blockquote>
                                    <div class="">
                                        <span class="block text-xl font-semibold">Yusuf Ansari</span>
                                        <span class="block">Content writer @ xyz</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="flex flex-col items-center gap-12 px-0 md:flex-row md:gap-16 md:px-8 lg:gap-[90px] lg:px-[60px]">
                                <div class="h-[230px] w-[230px] overflow-hidden rounded-[50%] border-[10px] border-ColorDenimDarkBlue">
                                    <img src="{{ asset('assets/img/th-10/testimonial-img.png') }}" alt="testimonial-img" width="230" height="230" class="h-full w-full object-cover" />
                                </div>
                                <div class="flex-1 text-ColorOil">
                                    <blockquote class="mb-10 text-xl font-semibold -tracking-[0.5px] lg:text-2xl">
                                        “I am continually impressed with the positive input
                                        this program offers for me every time I sit down to
                                        write. My skills also have improved immensely since
                                        I bought Masco writing tool and I heartily recommend
                                        it to anyone who wants to have more confidence in
                                        their own writing.”
                                    </blockquote>
                                    <div class="">
                                        <span class="block text-xl font-semibold">Yusuf Ansari</span>
                                        <span class="block">Content writer @ xyz</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="flex flex-col items-center gap-12 px-0 md:flex-row md:gap-16 md:px-8 lg:gap-[90px] lg:px-[60px]">
                                <div class="h-[230px] w-[230px] overflow-hidden rounded-[50%] border-[10px] border-ColorDenimDarkBlue">
                                    <img src="{{ asset('assets/img/th-10/testimonial-img.png') }}" alt="testimonial-img" width="230" height="230" class="h-full w-full object-cover" />
                                </div>
                                <div class="flex-1 text-ColorOil">
                                    <blockquote class="mb-10 text-xl font-semibold -tracking-[0.5px] lg:text-2xl">
                                        “I am continually impressed with the positive input
                                        this program offers for me every time I sit down to
                                        write. My skills also have improved immensely since
                                        I bought Masco writing tool and I heartily recommend
                                        it to anyone who wants to have more confidence in
                                        their own writing.”
                                    </blockquote>
                                    <div class="">
                                        <span class="block text-xl font-semibold">Yusuf Ansari</span>
                                        <span class="block">Content writer @ xyz</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- SLider Navigation -->
                    <div class="relative z-10 mt-[50px] flex flex-row-reverse justify-center gap-6 lg:-mt-[50px] lg:justify-start">
                        <div class="slider-nav-btn-next flex h-[50px] w-[50px] items-center justify-center rounded-[50%] border-ColorOil bg-ColorEggSour text-ColorDenimDarkBlue transition-all duration-300 hover:border-ColorDenimDarkBlue hover:bg-ColorDenimDarkBlue hover:text-ColorEggSour">
                            <i class="fa-solid fa-chevron-right"></i>
                        </div>
                        <div class="slider-nav-btn-prev flex h-[50px] w-[50px] items-center justify-center rounded-[50%] border-ColorOil bg-ColorEggSour text-ColorDenimDarkBlue transition-all duration-300 hover:border-ColorDenimDarkBlue hover:bg-ColorDenimDarkBlue hover:text-ColorEggSour">
                            <i class="fa-solid fa-chevron-left"></i>
                        </div>
                    </div>
                </div>
                <!-- Testimonial Slider -->
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
    <!-- Section Space -->
    <div class="section-space">
        <!-- Section Container -->
        <div class="container-default">
            <!-- FAQ Area -->
            <div class="grid items-center gap-x-20 gap-y-10 lg:grid-cols-[1fr_minmax(0,_0.9fr)]">
                <!-- Content Block -->
                <div class="jos" data-jos_animation="fade-right">
                    <!-- Section Wrapper -->
                    <div>
                        <!-- Section Block -->
                        <div class="mb-5">
                            <h2 class="font-ClashDisplay text-4xl font-medium leading-[1.13] text-ColorOil lg:text-5xl xl:text-6xl">
                                Discover the answers to the questions
                            </h2>
                        </div>
                        <!-- Section Block -->
                    </div>
                    <!-- Section Wrapper -->
                    <p class="text-ColorOil/80">
                        People ask about our AI writing tool. We are always ready to
                        answer all your questions. Also, some questions and answers
                        are highlighted
                    </p>
                    <div class="mt-8 lg:mt-[50px]">
                        <a href="#" class="btn is-denim is-transparent is-large is-rounded btn-animation group inline-block"><span>Ask you questions</span></a>
                    </div>
                </div>
                <!-- Content Block -->

                <!-- FAQ Block -->
                <div class="jos relative z-10 flex justify-center after:absolute after:left-0 after:top-0 after:-z-10 after:h-full after:w-full after:rounded-[10px] after:border after:border-ColorOil after:bg-[#F65510]" data-jos_animation="fade-left">
                    <!-- Accordion List -->
                    <ul class="mx-auto max-w-[1076px] rounded-[10px] border-4 border-ColorBlack bg-ColorEggSour">
                        <!-- Accordion Item -->
                        <li class="accordion-item active last:border-2-0 overflow-hidden border-b-4 border-ColorBlack p-[30px]">
                            <!-- Accordion Header -->
                            <div class="accordion-header relative pr-8 font-ClashDisplay text-xl font-medium text-ColorOil">
                                <button class="flex-1 text-left">
                                    Q. What is an AI text generator, exactly?
                                </button>
                                <div class="accordion-icon-4 absolute right-0 top-0">
                                    <i class="fa-solid fa-chevron-down"></i>
                                </div>
                            </div>
                            <!-- Accordion Header -->
                            <!-- Accordion Body -->
                            <div class="accordion-body max-w-[826px] opacity-80">
                                <p class="pt-5">
                                    An AI text generator is a software tool that helps you
                                    create content like blog articles, product
                                    descriptions, and marketing.
                                </p>
                            </div>
                            <!-- Accordion Body -->
                        </li>
                        <!-- Accordion Item -->
                        <!-- Accordion Item -->
                        <li class="accordion-item overflow-hidden border-b-4 border-ColorBlack p-[30px] last:border-b-0">
                            <!-- Accordion Header -->
                            <div class="accordion-header relative pr-8 font-ClashDisplay text-xl font-medium text-ColorOil">
                                <button class="flex-1 text-left">
                                    Q. How does an AI text generator work?
                                </button>
                                <div class="accordion-icon-4 absolute right-0 top-0">
                                    <i class="fa-solid fa-chevron-down"></i>
                                </div>
                            </div>
                            <!-- Accordion Header -->
                            <!-- Accordion Body -->
                            <div class="accordion-body max-w-[826px] opacity-80">
                                <p class="pt-5">
                                    An AI text generator is a software tool that helps you
                                    create content like blog articles, product
                                    descriptions, and marketing.
                                </p>
                            </div>
                            <!-- Accordion Body -->
                        </li>
                        <!-- Accordion Item -->
                        <!-- Accordion Item -->
                        <li class="accordion-item overflow-hidden border-b-4 border-ColorBlack p-[30px] last:border-b-0">
                            <!-- Accordion Header -->
                            <div class="accordion-header relative pr-8 font-ClashDisplay text-xl font-medium text-ColorOil">
                                <button class="flex-1 text-left">
                                    Q. What languages do support with AI writing?
                                </button>
                                <div class="accordion-icon-4 absolute right-0 top-0">
                                    <i class="fa-solid fa-chevron-down"></i>
                                </div>
                            </div>
                            <!-- Accordion Header -->
                            <!-- Accordion Body -->
                            <div class="accordion-body max-w-[826px] opacity-80">
                                <p class="pt-5">
                                    An AI text generator is a software tool that helps you
                                    create content like blog articles, product
                                    descriptions, and marketing.
                                </p>
                            </div>
                            <!-- Accordion Body -->
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
</section>
<!-- FAQ Section End -->

<!-- Content Section Start -->
<section class="section-content">
    <div class="relative z-10">
        <!-- Section Space -->
        <div class="section-space-bottom">
            <!-- Section Container -->
            <div class="container-default">
                <div class="flex flex-col gap-y-20 lg:gap-y-[100px] xl:gap-y-[120px]">
                    <!-- Content Area Single -->
                    <div class="grid grid-cols-1 items-center gap-10 lg:grid-cols-[0.7fr_minmax(0,_1fr)] lg:gap-20 xl:gap-[134px]  xxl:gap-[180px]">
                        <!-- Content Block Left -->
                        <div class="jos order-1 lg:order-2" data-jos_animation="fade-left">
                            <!-- Section Wrapper -->
                            <div>
                                <!-- Section Block -->
                                <div class="mb-5">
                                    <h2 class="font-ClashDisplay text-4xl font-medium leading-[1.13] text-ColorOil lg:text-left lg:text-5xl xl:text-6xl">
                                        Masco works on your favorite website also
                                    </h2>
                                </div>
                                <!-- Section Block -->
                            </div>
                            <!-- Section Wrapper -->
                            <p class="text-ColorOil/80">
                                Connect our software with the apps you use and love.
                                Easily bring AI into your workflow to improve and create
                                content wherever you are.
                            </p>
                            <div class="mt-8 lg:mt-[50px]">
                                <a href="#" class="btn is-denim is-transparent is-large is-rounded btn-animation group inline-block"><span>Add Masco to Chrome</span></a>
                            </div>
                        </div>
                        <!-- Content Block Left -->
                        <!-- Content Block Right -->
                        <div class="jos relative order-2 lg:order-1 mx-auto lg:mx-0 max-w-full sm:max-w-[80%] md:max-w-[70%] lg:max-w-full" data-jos_animation="fade-right">
                            <!-- Content Image -->
                            <img src="{{ asset('assets/img/th-10/content-img-3.png') }}" alt="content-img-3" width="460" height="340" />
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
</section>
<!-- Content Section End -->

@endsection



@section('footer')
<footer class="section-footer">
    <div class="bg-ColorDenimDarkBlue">
        <!-- Footer Area Top -->
        <div class="relative z-10">
            <!-- Footer Top Spacing -->
            <div class="pb-[60px] pt-20 lg:pb-20 lg:pt-[100px] xl:pt-[120px]">
                <!-- Section Container -->
                <div class="container-default">
                    <!-- Section Wrapper -->
                    <div class="flex flex-col items-center justify-center gap-8">
                        <!-- Section Block -->
                        <div class="max-w-[720px]">
                            <h2 class="text-center font-ClashDisplay text-4xl font-medium leading-[1.13] text-ColorEggSour lg:text-5xl xl:text-6xl">
                                Feel proud of everything you write with Masco
                            </h2>
                        </div>
                        <!-- Section Block -->
                        <a href="#" class="btn is-pale-gold is-transparent is-large is-rounded btn-animation group inline-block"><span>Get started— it's free</span></a>
                    </div>
                    <!-- Section Wrapper -->
                </div>
                <!-- Section Container -->
            </div>
            <!-- Footer Top Spacing -->
        </div>
        <!-- Footer Area Top -->

        <!-- Horizontal Line Separator -->
        <div class="horizontal-line bg-white"></div>
        <!-- Horizontal Line Separator -->

        <!-- Footer Area Center -->
        <div class="text-white">
            <!-- Footer Center Spacing -->
            <div class="py-[60px] lg:py-20">
                <!-- Section Container -->
                <div class="container-default">
                    <!-- Footer Widget List -->
                    <div class="grid gap-x-16 gap-y-10 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-[1fr_repeat(3,_auto)] xl:gap-x-24 xxl:gap-x-[134px]">
                        <!-- Footer Widget Item -->
                        <div class="flex flex-col gap-y-7 md:col-span-3 lg:col-span-1">
                            <!-- Footer Logo -->
                            <a href="{{ url('index') }}">
                                <img src="{{ asset('assets/img/logo-denim-light.png') }}" alt="Masco" width="109" height="24" />
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
                                    <a href="https://twitter.com" target="_blank" rel="noopener noreferrer" class="flex h-[30px] w-[30px] items-center justify-center rounded-[50%] bg-white bg-opacity-5 text-sm text-white transition-all duration-300 hover:bg-ColorPaleGold hover:text-ColorDenimDarkBlue" aria-label="twitter">
                                        <i class="fa-brands fa-x-twitter"></i>
                                    </a>
                                    <a href="https://www.facebook.com/" target="_blank" rel="noopener noreferrer" class="flex h-[30px] w-[30px] items-center justify-center rounded-[50%] bg-white bg-opacity-5 text-sm text-white transition-all duration-300 hover:bg-ColorPaleGold hover:text-ColorDenimDarkBlue" aria-label="facebook">
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </a>
                                    <a href="https://www.instagram.com/" target="_blank" rel="noopener noreferrer" class="flex h-[30px] w-[30px] items-center justify-center rounded-[50%] bg-white bg-opacity-5 text-sm text-white transition-all duration-300 hover:bg-ColorPaleGold hover:text-ColorDenimDarkBlue" aria-label="instagram">
                                        <i class="fa-brands fa-instagram"></i>
                                    </a>
                                    <a href="https://www.github.com/" target="_blank" rel="noopener noreferrer" class="flex h-[30px] w-[30px] items-center justify-center rounded-[50%] bg-white bg-opacity-5 text-sm text-white transition-all duration-300 hover:bg-ColorPaleGold hover:text-ColorDenimDarkBlue" aria-label="github">
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
                                    <a href="{{ url('index') }}" class="hover:opcity-100 underline-offset-4 opacity-80 transition-all duration-300 ease-linear hover:underline">Home</a>
                                </li>
                                <li>
                                    <a href="{{ url('about') }}" class="hover:opcity-100 underline-offset-4 opacity-80 transition-all duration-300 ease-linear hover:underline">About Us</a>
                                </li>
                                <li>
                                    <a href="{{ url('services') }}" class="hover:opcity-100 underline-offset-4 opacity-80 transition-all duration-300 ease-linear hover:underline">Services</a>
                                </li>
                                <li>
                                    <a href="{{ url('pricing') }}" class="hover:opcity-100 underline-offset-4 opacity-80 transition-all duration-300 ease-linear hover:underline">pricing</a>
                                </li>
                                <li>
                                    <a href="{{ url('contact') }}" class="hover:opcity-100 underline-offset-4 opacity-80 transition-all duration-300 ease-linear hover:underline">Contact</a>
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
                                    <a href="{{ url('signup') }}" class="hover:opcity-100 underline-offset-4 opacity-80 transition-all duration-300 ease-linear hover:underline">Signup</a>
                                </li>
                                <li>
                                    <a href="{{ url('login') }}" class="hover:opcity-100 underline-offset-4 opacity-80 transition-all duration-300 ease-linear hover:underline">Login</a>
                                </li>
                                <li>
                                    <a href="{{ url('error404') }}" class="hover:opcity-100 underline-offset-4 opacity-80 transition-all duration-300 ease-linear hover:underline">404 Not found</a>
                                </li>
                                <li>
                                    <a href="{{ url('resetpassword') }}" class="hover:opcity-100 underline-offset-4 opacity-80 transition-all duration-300 ease-linear hover:underline">Password Reset</a>
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
                                    <a href="https://www.example.com/" target="_blank" rel="noopener noreferrer" class="hover:opcity-100 underline-offset-4 opacity-80 transition-all duration-300 ease-linear hover:underline">Support</a>
                                </li>
                                <li>
                                    <a href="https://www.example.com/" target="_blank" rel="noopener noreferrer" class="hover:opcity-100 underline-offset-4 opacity-80 transition-all duration-300 ease-linear hover:underline">Privacy policy</a>
                                </li>
                                <li>
                                    <a href="https://www.example.com/" target="_blank" rel="noopener noreferrer" class="hover:opcity-100 underline-offset-4 opacity-80 transition-all duration-300 ease-linear hover:underline">Terms & Conditions</a>
                                </li>
                                <li>
                                    <a href="https://www.example.com/" target="_blank" rel="noopener noreferrer" class="hover:opcity-100 underline-offset-4 opacity-80 transition-all duration-300 ease-linear hover:underline">Strategic finance</a>
                                </li>
                                <li>
                                    <a href="https://www.example.com/" target="_blank" rel="noopener noreferrer" class="hover:opcity-100 underline-offset-4 opacity-80 transition-all duration-300 ease-linear hover:underline">Video guide</a>
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

        <!-- Footer Bottom -->
        <div class="bg-white bg-opacity-5">
            <!-- Footer Bottom Spacing -->
            <div class="py-[18px]">
                <!-- Section Container -->
                <div class="container-default">
                    <div class="text-center text-white text-opacity-80">
                        &copy; Copyright 2024, All Rights Reserved by PixcelsThemes
                    </div>
                </div>
                <!-- Section Container -->
            </div>
            <!-- Footer Bottom Spacing -->
        </div>
        <!-- Footer Bottom -->
    </div>
</footer>
@endsection