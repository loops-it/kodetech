@extends('layout.layout1')

@section('headerLogo')
<img src="{{ asset('assets/img/logo-caribbean-green-dark.png') }}" alt="Masco" width="109" height="24" />
@endsection



@section('headButtons')

<div class="flex items-center gap-6">
    <a href="{{ url('login') }}" class="btn-text hidden hover:text-ColorCaribbeanGreen sm:inline-block">Login</a>
    <a href="{{ url('signup') }}" class="btn is-caribbean-green is-transparent is-rounded btn-animation group hidden sm:inline-block"><span>Sign up free</span></a>
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
    <div class="relative z-10 overflow-hidden rounded-bl-[30px] rounded-br-[30px] bg-[#FFFCEF] md:rounded-bl-[50px] md:rounded-br-[50px] xl:rounded-bl-[100px] xl:rounded-br-[100px]">
        <!-- Hero Section Space -->
        <div class="pt-28 md:pt-36 lg:pt-[150px] xxl:pt-[185px]">
            <!-- Section Container -->
            <div class="container-default">
                <!-- Hero Area -->
                <div class="flex flex-col items-center justify-center">
                    <!-- Hero Content Block -->
                    <div class="text-center">
                        <div class="jos mx-auto mb-6 max-w-xl lg:max-w-2xl xl:max-w-3xl xxl:max-w-[1076px]">
                            <h1 class="mb-6 font-Kanit text-[40px] font-medium leading-none -tracking-[1px] text-[#010D09] sm:text-5xl lg:text-6xl xl:text-[76px] xxl:text-[110px]">
                                Create a stunning website in minutes
                            </h1>
                        </div>
                        <div class="jos mx-auto mb-8 max-w-xl lg:mb-[50px] lg:max-w-2xl xl:max-w-3xl xxl:max-w-[896px]">
                            <p class="mb-8">
                                Masco is a simple, easy, and powerful website editor
                                software with all the elements you need to create a
                                stunning website in just a few minutes. Everyone can
                                create a website with no special skills required.
                            </p>
                        </div>
                        <div class="mb-3 flex flex-wrap justify-center gap-6">
                            <a href="#" class="btn is-caribbean-green is-transparent btn-animation is-large is-rounded group inline-block">
                                <span>
                                    Start a 15-day free trial
                                    <i class="fa-regular fa-arrow-right ml-[10px] text-2xl leading-none"></i>
                                </span>
                            </a>
                            <a href="#" class="btn is-outline-midnight-moss btn-animation is-large is-rounded group inline-block"><span>Watch a demo</span></a>
                        </div>
                        <div class="mb-10 lg:mb-[60xp] xl:mb-20">
                            <span class="text-sm text-[#7F8995]">No credit card is required.</span>
                        </div>
                    </div>
                    <!-- Hero Content Block -->

                    <!-- Hero Image Block -->
                    <div class="relative mx-auto max-w-[1076px] rounded-tl-[10px] rounded-tr-[10px]">
                        <img src="{{ asset('assets/img/th-11/hero-img.jpg') }}" alt="hero-dashboard" width="1076" height="563" data-jos_animation="zoom-in-down" />
                    </div>
                    <!-- Hero Image Block -->
                </div>
                <!-- Hero Area -->
            </div>
            <!-- Section Container -->
        </div>
        <!-- Hero Section Space -->

        <!-- Hero Background Shape -->
        <div class="absolute left-0 top-0 -z-10 h-auto w-full">
            <img src="{{ asset('assets/img/elements/hero-10-bg-shape.svg') }}" alt="hero-10-bg-shape" width="1600" height="650" class="h-auto w-full" />
        </div>
    </div>
    <!-- Section Background -->
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
                            <img src="{{ asset('assets/img/th-11/brand-1.png') }}" alt="brand-1" width="186" height="46" class="h-auto w-fit" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/img/th-11/brand-2.png') }}" alt="brand-2" width="186" height="46" class="h-auto w-fit" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/img/th-11/brand-3.png') }}" alt="brand-3" width="186" height="46" class="h-auto w-fit" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/img/th-11/brand-4.png') }}" alt="brand-4" width="186" height="46" class="h-auto w-fit" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/img/th-11/brand-5.png') }}" alt="brand-5" width="186" height="46" class="h-auto w-fit" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/img/th-11/brand-1.png') }}" alt="brand-1" width="186" height="46" class="h-auto w-fit" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/img/th-11/brand-2.png') }}" alt="brand-2" width="186" height="46" class="h-auto w-fit" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/img/th-11/brand-3.png') }}" alt="brand-3" width="186" height="46" class="h-auto w-fit" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/img/th-11/brand-4.png') }}" alt="brand-4" width="186" height="46" class="h-auto w-fit" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('assets/img/th-11/brand-5.png') }}" alt="brand-5" width="186" height="46" class="h-auto w-fit" />
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
    <!-- Section Spacer -->
    <div class="section-space-bottom">
        <!-- Section Container -->
        <div class="container-default">
            <div class="flex flex-col gap-y-20 lg:gap-y-[100px] xl:gap-y-[120px]">
                <!-- Content Area Single -->
                <div class="grid items-center gap-10 md:grid-cols-2 lg:gap-24 xl:grid-cols-[0.8fr_minmax(0,_1fr)] xl:gap-[135px]">
                    <!-- Content Block Left -->
                    <div class="jos order-1 md:order-2" data-jos_animation="fade-right">
                        <!-- Section Wrapper -->
                        <div>
                            <!-- Section Block -->
                            <div class="mb-5">
                                <h2 class="font-Kanit text-4xl font-medium leading-none -tracking-[1px] lg:text-5xl xl:text-7xl xxl:text-[80px]">
                                    Speed up your workflow with us
                                </h2>
                            </div>
                            <!-- Section Block -->
                        </div>
                        <!-- Section Wrapper -->
                        <p>
                            This tool offers pre-designed templates & also provides a
                            wide range of customization options. You can personalize
                            your websites by changing colors, fonts &layouts and
                            easily adding your own content and images.
                        </p>
                        <p>
                            This tool will help you create your own website. Bring
                            your ideas to life & create something beautiful and
                            visually stunning.
                        </p>
                        <div class="mt-8 lg:mt-[50px]">
                            <a href="#" class="btn is-caribbean-green is-transparent btn-animation is-large is-rounded group inline-block">
                                <span>
                                    Let's try it now
                                    <i class="fa-regular fa-arrow-right ml-[10px] text-2xl leading-none"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                    <!-- Content Block Left -->
                    <!-- Content Block Right -->
                    <div class="jos order-2 md:order-1" data-jos_animation="fade-left">
                        <div class="relative">
                            <img src="{{ asset('assets/img/th-11/content-img-1.png') }}" alt="content-img-1" width="586" height="586" class="h-full w-full" />
                            <img src="{{ asset('assets/img/th-11/content-img-1-card.png') }}" alt="content-img-1-card" width="353" height="243" class="absolute -right-[110px] bottom-12 hidden lg:inline-block" />
                        </div>
                    </div>
                    <!-- Content Block Right -->
                </div>
                <!-- Content Area Single -->
            </div>
        </div>
        <!-- Section Container -->
    </div>
    <!-- Section Spacer -->
</section>
<!-- Content Section End -->

<!-- Features Section Start -->
<section class="section-features">
    <!-- Section Background -->
    <div class="rounded-[30px] bg-ColorMidnightMoss lg:rounded-[50px]">
        <!-- Section Space -->
        <div class="section-space">
            <!-- Section Container -->
            <div class="container-default">
                <!-- Section Content Wrapper -->
                <div class="jos mb-[60px] xl:mb-20">
                    <!-- Section Content Block -->
                    <div class="mx-auto max-w-[746px]">
                        <div class="mb-5">
                            <h2 class="text-center font-Kanit text-4xl font-medium leading-none -tracking-[1px] text-white lg:text-5xl xl:text-7xl xxl:text-[80px]">
                                Unique features for innovative websites
                            </h2>
                        </div>
                    </div>
                    <!-- Section Content Block -->
                </div>
                <!-- Section Content Wrapper -->

                <!-- Feature List -->
                <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                    <!-- Feature Item -->
                    <div class="jos" data-jos_delay="0">
                        <div class="rounded-[10px] bg-white/5 p-10 h-full">
                            <div class="mb-[30px] h-[70px] w-auto">
                                <img src="{{ asset('assets/img/icons/icon-black-home-11-feature-1.svg') }}" alt="icon-black-home-11-feature-1" width="79" height="70" />
                            </div>
                            <div class="flex-1">
                                <div class="mb-4 font-Kanit text-2xl font-medium leading-[1.28] tracking-[-0.5px] text-white">
                                    One click to export
                                </div>
                                <p class="text-xl tracking-[-0.5px] text-white/80">
                                    While you are thinking, Masco is written and design
                                    begins. Just move the website to your server and
                                    create the design.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Feature Item -->
                    <!-- Feature Item -->
                    <div class="jos" data-jos_delay="0.3">
                        <div class="rounded-[10px] bg-white/5 p-10 h-full">
                            <div class="mb-[30px] h-[70px] w-auto">
                                <img src="{{ asset('assets/img/icons/icon-black-home-11-feature-2.svg') }}" alt="icon-black-home-11-feature-2" width="78" height="70" />
                            </div>
                            <div class="flex-1">
                                <div class="mb-4 font-Kanit text-2xl font-medium leading-[1.28] tracking-[-0.5px] text-white">
                                    Pre-made pages
                                </div>
                                <p class="text-xl tracking-[-0.5px] text-white/80">
                                    We offer a huge collection of pre-made template design
                                    templates. All you need is to add your content and
                                    context.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Feature Item -->
                    <!-- Feature Item -->
                    <div class="jos" data-jos_delay="0.6">
                        <div class="rounded-[10px] bg-white/5 p-10 h-full">
                            <div class="mb-[30px] h-[70px] w-auto">
                                <img src="{{ asset('assets/img/icons/icon-black-home-11-feature-3.svg') }}" alt="icon-black-home-11-feature-3" width="95" height="70" />
                            </div>
                            <div class="flex-1">
                                <div class="mb-4 font-Kanit text-2xl font-medium leading-[1.28] tracking-[-0.5px] text-white">
                                    Fast customization
                                </div>
                                <p class="text-xl tracking-[-0.5px] text-white/80">
                                    The major benefits of Design-Build construction
                                    include streamlined communication and faster project
                                    completion.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Feature Item -->
                    <!-- Feature Item -->
                    <div class="jos" data-jos_delay="0.9">
                        <div class="rounded-[10px] bg-white/5 p-10 h-full">
                            <div class="mb-[30px] h-[70px] w-auto">
                                <img src="{{ asset('assets/img/icons/icon-black-home-11-feature-4.svg') }}" alt="icon-black-home-11-feature-4" width="67" height="70" />
                            </div>
                            <div class="flex-1">
                                <div class="mb-4 font-Kanit text-2xl font-medium leading-[1.28] tracking-[-0.5px] text-white">
                                    100% proper result
                                </div>
                                <p class="text-xl tracking-[-0.5px] text-white/80">
                                    Our software ensures a qualified result at every step
                                    of your work. You can definitely get the job done
                                    without any hassle.
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
    <!-- Section Background -->
</section>
<!-- Features Section End -->

<!-- Content Section Start -->
<section class="section-content">
    <!-- Section Spacer -->
    <div class="section-space">
        <!-- Section Container -->
        <div class="container-default">
            <div class="flex flex-col gap-y-20 lg:gap-y-[100px] xl:gap-y-[120px]">
                <!-- Content Area Single -->
                <div class="grid items-center gap-10 md:grid-cols-2 lg:gap-24 xl:grid-cols-[0.8fr_minmax(0,_1fr)] xl:gap-[135px]">
                    <!-- Content Block Left -->
                    <div class="jos order-1 md:order-2" data-jos_animation="fade-right">
                        <!-- Section Wrapper -->
                        <div>
                            <!-- Section Block -->
                            <div class="mb-5">
                                <h2 class="font-Kanit text-4xl font-medium leading-none -tracking-[1px] lg:text-5xl xl:text-7xl xxl:text-[80px]">
                                    You can design every type of site
                                </h2>
                            </div>
                            <!-- Section Block -->
                        </div>
                        <!-- Section Wrapper -->
                        <p>
                            Our website builder software offers pre-designed
                            templates, we also provide various customization options
                            like a blog site, business site, e-commerce, and more.
                        </p>
                        <p>
                            They can changing colors, fonts, layout, adding content &
                            images. Create professional-looking websites without
                            writing a single line of code.
                        </p>
                        <div class="mt-8 lg:mt-[50px]">
                            <a href="#" class="btn is-caribbean-green is-transparent btn-animation is-large is-rounded group inline-block">
                                <span>
                                    Let's try it now
                                    <i class="fa-regular fa-arrow-right ml-[10px] text-2xl leading-none"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                    <!-- Content Block Left -->
                    <!-- Content Block Right -->
                    <div class="jos order-2 md:order-1" data-jos_animation="fade-left">
                        <div class="relative">
                            <img src="{{ asset('assets/img/th-11/content-img-2.png') }}" alt="content-img-1" width="586" height="586" class="h-full w-full" />
                        </div>
                    </div>
                    <!-- Content Block Right -->
                </div>
                <!-- Content Area Single -->
            </div>
        </div>
        <!-- Section Container -->
    </div>
    <!-- Section Spacer -->
</section>
<!-- Content Section End -->

<!-- FAQ Section Start -->
<section class="section-faq">
    <!-- Section Space -->
    <div class="section-space-bottom">
        <!-- Section Container -->
        <div class="container-default">
            <!-- FAQ Area -->
            <div class="grid items-center gap-y-10 lg:grid-cols-[1fr_minmax(0,_0.8fr)] lg:gap-x-20 xl:gap-x-24 xxl:gap-x-32">
                <!-- Content Block -->
                <div class="jos" data-jos_animation="fade-right">
                    <!-- Section Wrapper -->
                    <div>
                        <!-- Section Block -->
                        <div class="mb-5">
                            <h2 class="font-Kanit text-4xl font-medium leading-none -tracking-[1px] lg:text-5xl xl:text-7xl xxl:text-[80px]">
                                Get a website fast in just a few steps
                            </h2>
                        </div>
                        <!-- Section Block -->
                    </div>
                    <!-- Section Wrapper -->
                    <p>
                        Our website builder tools are designed to be user-friendly,
                        allowing people with little or no technical skills to create
                        and manage your own website.
                    </p>
                    <p>
                        We offer intuitive interfaces, drag-and-drop functionality,
                        & pre-designed templates that simplify the process. With
                        website builder tool, individuals can create and maintain
                        your websites at a fraction of the cost.
                    </p>
                </div>
                <!-- Content Block -->

                <!-- FAQ Block -->
                <div class="jos relative z-10 flex justify-center" data-jos_animation="fade-left">
                    <!-- Accordion List -->
                    <ul class="grid gap-6 rounded-[10px]">
                        <!-- Accordion Item -->
                        <li class="accordion-item active overflow-hidden rounded-[10px] border border-ColorMidnightMoss p-5">
                            <!-- Accordion Header -->
                            <div class="accordion-header relative pr-8 font-Kanit text-[28px] font-medium leading-[1.28] -tracking-[0.5px] text-ColorMidnightMoss">
                                <button class="flex flex-1 gap-x-6 text-left">
                                    <span class="inline-block h-10 w-auto">
                                        <img src="{{ asset('assets/img/icons/icon-green-black-duotone-faq-1.svg') }}" alt="icon-green-black-duotone-faq-1" width="41" height="40" />
                                    </span>
                                    <span class="flex-1"> Create a free account </span>
                                </button>
                                <span class="accordion-icon-4 absolute right-0 top-0 text-xl">
                                    <i class="fa-solid fa-chevron-down"></i>
                                </span>
                            </div>
                            <!-- Accordion Header -->
                            <!-- Accordion Body -->
                            <div class="accordion-body ml-16 text-xl leading-[1.6] -tracking-[0.5px] text-ColorMidnightMoss">
                                <p class="pt-5">
                                    Open a free account with no credit card. Easy to use
                                    anytime on any device.
                                </p>
                            </div>
                            <!-- Accordion Body -->
                        </li>
                        <!-- Accordion Item -->
                        <!-- Accordion Item -->
                        <li class="accordion-item overflow-hidden rounded-[10px] border border-ColorMidnightMoss p-5">
                            <!-- Accordion Header -->
                            <div class="accordion-header relative pr-8 font-Kanit text-[28px] font-medium leading-[1.28] -tracking-[0.5px] text-ColorMidnightMoss">
                                <button class="flex flex-1 gap-x-6 text-left">
                                    <span class="inline-block h-10 w-auto">
                                        <img src="{{ asset('assets/img/icons/icon-green-black-duotone-faq-2.svg') }}" alt="icon-green-black-duotone-faq-2" width="45" height="40" />
                                    </span>
                                    <span class="flex-1"> Design by drag and drop </span>
                                </button>
                                <span class="accordion-icon-4 absolute right-0 top-0 text-xl">
                                    <i class="fa-solid fa-chevron-down"></i>
                                </span>
                            </div>
                            <!-- Accordion Header -->
                            <!-- Accordion Body -->
                            <div class="accordion-body ml-16 text-xl leading-[1.6] -tracking-[0.5px] text-ColorMidnightMoss">
                                <p class="pt-5">
                                    Open a free account with no credit card. Easy to use
                                    anytime on any device.
                                </p>
                            </div>
                            <!-- Accordion Body -->
                        </li>
                        <!-- Accordion Item -->
                        <!-- Accordion Item -->
                        <li class="accordion-item overflow-hidden rounded-[10px] border border-ColorMidnightMoss p-5">
                            <!-- Accordion Header -->
                            <div class="accordion-header relative pr-8 font-Kanit text-[28px] font-medium leading-[1.28] -tracking-[0.5px] text-ColorMidnightMoss">
                                <button class="flex flex-1 gap-x-6 text-left">
                                    <span class="inline-block h-10 w-auto">
                                        <img src="{{ asset('assets/img/icons/icon-green-black-duotone-faq-3.svg') }}" alt="icon-green-black-duotone-faq-3" width="35" height="40" />
                                    </span>
                                    <span class="flex-1"> Launch your website </span>
                                </button>
                                <span class="accordion-icon-4 absolute right-0 top-0 text-xl">
                                    <i class="fa-solid fa-chevron-down"></i>
                                </span>
                            </div>
                            <!-- Accordion Header -->
                            <!-- Accordion Body -->
                            <div class="accordion-body ml-16 text-xl leading-[1.6] -tracking-[0.5px] text-ColorMidnightMoss">
                                <p class="pt-5">
                                    Open a free account with no credit card. Easy to use
                                    anytime on any device.
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

<!-- Pricing Section Start -->
<section class="section-pricing">
    <!-- Section Space -->
    <div class="section-space-bottom">
        <!-- Section Container -->
        <div class="container-default">
            <!-- Section Content Wrapper -->
            <div class="jos mb-[60px] xl:mb-20">
                <!-- Section Content Block -->
                <div class="mx-auto max-w-[746px]">
                    <div class="mb-5">
                        <h2 class="text-center font-Kanit text-4xl font-medium leading-none -tracking-[1px] text-ColorMidnightMoss lg:text-5xl xl:text-7xl xxl:text-[80px]">
                            Affordable plans to suit your needs
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
                    <span class="text-base font-bold text-ColorMidnightMoss">Monthly Billing</span>

                    <!-- Toggle Button -->
                    <label for="toggle" class="flex cursor-pointer items-center">
                        <!-- toggle -->
                        <span class="relative h-[35px] w-[70px] rounded-[35px] bg-ColorMidnightMoss">
                            <!-- hidden input -->
                            <input id="toggle" type="checkbox" class="hidden" onclick="toggleSwitch()" />
                            <!-- dot -->
                            <span class="toggle_dot absolute h-[35px] w-[35px] rounded-full bg-ColorCaribbeanGreen transition-all duration-300"></span>
                        </span>
                    </label>
                    <!-- Toggle Button -->
                    <span class="text-base font-bold text-ColorMidnightMoss">Annual Billing</span>
                </div>
                <!-- Pricing Button Block -->

                <!-- Pricing List -->
                <div class="grid items-center gap-x-6 gap-y-10 md:grid-cols-2 lg:grid-cols-3">
                    <!-- Pricing Item -->
                    <div class="jos" data-jos_animation="flip-left">
                        <div class="rounded-[10px] bg-[#FFFCEF] p-7 xl:p-10">
                            <!-- Pricing Content Top -->
                            <div class="text-center">
                                <span class="text-2xl font-bold text-ColorBlack">Limited Plan</span>
                                <div class="month text-[28px] font-normal leading-[2.85] text-ColorBlack">
                                    $<span class="text-[48px] font-bold leading-[1.3] xl:text-[58px]">15</span>/month
                                </div>
                                <div class="annual hidden text-[28px] font-normal leading-[2.85] text-ColorBlack">
                                    $<span class="text-[48px] font-bold leading-[1.3] xl:text-[58px]">120</span>/yearly
                                </div>
                                <span class="text-sm text-ColorBlack/70">No credit card required</span>
                            </div>
                            <!-- Pricing Content Top -->
                            <!-- Horizontal Line Separator -->
                            <div class="my-10 h-px w-full bg-ColorBlack/10"></div>
                            <!-- Horizontal Line Separator -->
                            <!-- Pricing Data list -->
                            <ul class="flex flex-col gap-y-4 font-semibold text-ColorMidnightMoss/80 xl:px-[18px]">
                                <li class="flex gap-x-3">
                                    <span class="text-xl text-ColorCaribbeanGreen">
                                        <i class="fa-solid fa-check"></i>
                                    </span>
                                    2 Limited sites available
                                </li>
                                <li class="flex gap-x-3">
                                    <span class="text-xl text-ColorCaribbeanGreen">
                                        <i class="fa-solid fa-check"></i>
                                    </span>
                                    1 GB storage per site
                                </li>
                                <li class="flex gap-x-3">
                                    <span class="text-xl text-ColorCaribbeanGreen">
                                        <i class="fa-solid fa-check"></i>
                                    </span>
                                    Up to 5 pages per site
                                </li>
                                <li class="flex gap-x-3">
                                    <span class="text-xl text-ColorCaribbeanGreen">
                                        <i class="fa-solid fa-check"></i>
                                    </span>
                                    Free SSL for custom domain
                                </li>
                                <li class="flex gap-x-3">
                                    <span class="text-xl text-ColorCaribbeanGreen">
                                        <i class="fa-solid fa-check"></i>
                                    </span>
                                    Connect custom domain
                                </li>
                            </ul>
                            <!-- Pricing Data list -->
                            <div class="mt-10 flex justify-center">
                                <button class="btn is-outline-midnight-moss is-transparent is-rounded is-large group flex w-full items-center justify-center border-2">
                                    Purchase now
                                    <i class="fa-regular fa-arrow-right ml-[10px] text-2xl leading-none"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- Pricing Item -->
                    <!-- Pricing Item -->
                    <div class="jos" data-jos_animation="flip-left">
                        <div class="rounded-[10px] bg-ColorMidnightMoss p-7 xl:p-10">
                            <!-- Pricing Content Top -->
                            <div class="text-center">
                                <span class="text-2xl font-bold text-white">Pro Plan</span>
                                <div class="month text-[28px] font-normal leading-[2.85] text-white">
                                    $<span class="text-[48px] font-bold leading-[1.3] xl:text-[58px]">29</span>/month
                                </div>
                                <div class="annual hidden text-[28px] font-normal leading-[2.85] text-white">
                                    $<span class="text-[48px] font-bold leading-[1.3] xl:text-[58px]">300</span>/yearly
                                </div>
                                <span class="text-sm text-white/70">No credit card required</span>
                            </div>
                            <!-- Pricing Content Top -->
                            <!-- Horizontal Line Separator -->
                            <div class="my-10 h-px w-full bg-white/10"></div>
                            <!-- Horizontal Line Separator -->
                            <!-- Pricing Data list -->
                            <ul class="flex flex-col gap-y-4 font-semibold text-white/80 xl:px-[18px]">
                                <li class="flex gap-x-3">
                                    <span class="text-xl text-ColorCaribbeanGreen">
                                        <i class="fa-solid fa-check"></i>
                                    </span>
                                    2 Limited sites available
                                </li>
                                <li class="flex gap-x-3">
                                    <span class="text-xl text-ColorCaribbeanGreen">
                                        <i class="fa-solid fa-check"></i>
                                    </span>
                                    20 GB storage per site
                                </li>
                                <li class="flex gap-x-3">
                                    <span class="text-xl text-ColorCaribbeanGreen">
                                        <i class="fa-solid fa-check"></i>
                                    </span>
                                    Up to 100 pages per site
                                </li>
                                <li class="flex gap-x-3">
                                    <span class="text-xl text-ColorCaribbeanGreen">
                                        <i class="fa-solid fa-check"></i>
                                    </span>
                                    Free SSL for custom domain
                                </li>
                                <li class="flex gap-x-3">
                                    <span class="text-xl text-ColorCaribbeanGreen">
                                        <i class="fa-solid fa-check"></i>
                                    </span>
                                    Connect custom domain
                                </li>
                                <li class="flex gap-x-3">
                                    <span class="text-xl text-ColorCaribbeanGreen">
                                        <i class="fa-solid fa-check"></i>
                                    </span>
                                    Store Product Reviews
                                </li>
                                <li class="flex gap-x-3">
                                    <span class="text-xl text-ColorCaribbeanGreen">
                                        <i class="fa-solid fa-check"></i>
                                    </span>
                                    Restore historical version
                                </li>
                            </ul>
                            <!-- Pricing Data list -->
                            <div class="mt-10 flex justify-center">
                                <button class="btn is-caribbean-green is-transparent is-rounded is-large group flex w-full items-center justify-center border-2">
                                    Purchase now
                                    <i class="fa-regular fa-arrow-right ml-[10px] text-2xl leading-none"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- Pricing Item -->
                    <!-- Pricing Item -->
                    <div class="jos" data-jos_animation="flip-left">
                        <div class="rounded-[10px] bg-[#FFFCEF] p-7 xl:p-10">
                            <!-- Pricing Content Top -->
                            <div class="text-center">
                                <span class="text-2xl font-bold text-ColorBlack">VIP Plan</span>
                                <div class="month text-[28px] font-normal leading-[2.85] text-ColorBlack">
                                    $<span class="text-[48px] font-bold leading-[1.3] xl:text-[58px]">59</span>/month
                                </div>
                                <div class="annual hidden text-[28px] font-normal leading-[2.85] text-ColorBlack">
                                    $<span class="text-[48px] font-bold leading-[1.3] xl:text-[58px]">660</span>/yearly
                                </div>
                                <span class="text-sm text-ColorBlack/70">No credit card required</span>
                            </div>
                            <!-- Pricing Content Top -->
                            <!-- Horizontal Line Separator -->
                            <div class="my-10 h-px w-full bg-ColorBlack/10"></div>
                            <!-- Horizontal Line Separator -->
                            <!-- Pricing Data list -->
                            <ul class="flex flex-col gap-y-4 font-semibold text-ColorMidnightMoss/80 xl:px-[18px]">
                                <li class="flex gap-x-3">
                                    <span class="text-xl text-ColorCaribbeanGreen">
                                        <i class="fa-solid fa-check"></i>
                                    </span>
                                    Unlimited sites create
                                </li>
                                <li class="flex gap-x-3">
                                    <span class="text-xl text-ColorCaribbeanGreen">
                                        <i class="fa-solid fa-check"></i>
                                    </span>
                                    100 GB storage per site
                                </li>
                                <li class="flex gap-x-3">
                                    <span class="text-xl text-ColorCaribbeanGreen">
                                        <i class="fa-solid fa-check"></i>
                                    </span>
                                    Unlimited pages per site
                                </li>
                                <li class="flex gap-x-3">
                                    <span class="text-xl text-ColorCaribbeanGreen">
                                        <i class="fa-solid fa-check"></i>
                                    </span>
                                    Free SSL for custom domain
                                </li>
                                <li class="flex gap-x-3">
                                    <span class="text-xl text-ColorCaribbeanGreen">
                                        <i class="fa-solid fa-check"></i>
                                    </span>
                                    Unlimited bandwidth
                                </li>
                            </ul>
                            <!-- Pricing Data list -->
                            <div class="mt-10 flex justify-center">
                                <button class="btn is-outline-midnight-moss is-transparent is-rounded is-large group flex w-full items-center justify-center border-2">
                                    Purchase now
                                    <i class="fa-regular fa-arrow-right ml-[10px] text-2xl leading-none"></i>
                                </button>
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

<!-- Testimonial Section Start -->
<section class="section-testimonial">
    <!-- Section Background -->
    <div class="rounded-[30px] bg-ColorCaribbeanGreen lg:rounded-[50px]">
        <!-- Section Space -->
        <div class="section-space">
            <!-- Section Container -->
            <div class="container-default">
                <!-- Section Content Wrapper -->
                <div class="jos mb-[60px] xl:mb-20">
                    <!-- Section Content Block -->
                    <div class="max-w-[746px]">
                        <div class="mb-5">
                            <h2 class="font-Kanit text-4xl font-medium leading-none -tracking-[1px] text-ColorMidnightMoss lg:text-5xl xl:text-7xl xxl:text-[80px]">
                                Users share their experiences with us
                            </h2>
                        </div>
                    </div>
                    <!-- Section Content Block -->
                </div>
                <!-- Section Content Wrapper -->

                <!-- Testimonial Slider -->
                <div class="jos swiper testimonial-one">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="flex flex-col items-center gap-12 md:flex-row md:gap-16 lg:gap-[90px] xl:gap-[134px]">
                                <div class="h-64 w-64 overflow-hidden rounded-[10px] lg:h-[431px] lg:w-[416px]">
                                    <img src="{{ asset('assets/img/th-11/testimonial-img.png') }}" alt="testimonial-img" width="416" height="431" class="h-full w-full object-cover" />
                                </div>
                                <div class="flex-1 text-ColorMidnightMoss">
                                    <blockquote class="mb-10 text-xl font-semibold -tracking-[1px] lg:text-2xl xl:text-3xl">
                                        More than just a website builder. The options are
                                        great for building a website and have lots of
                                        features. When I got stuck which was a lot I was
                                        always supported and helped very quickly. Even
                                        offered to join a tutorial with Masco which was very
                                        informative. Masco was amazing like an
                                        accountability partner.
                                    </blockquote>
                                    <div class="">
                                        <span class="block text-xl font-semibold">Robertson Paul</span>
                                        <span class="block">Co-founder@ xyz company</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="flex flex-col items-center gap-12 md:flex-row md:gap-16 lg:gap-[90px] xl:gap-[134px]">
                                <div class="h-64 w-64 overflow-hidden rounded-[10px] lg:h-[431px] lg:w-[416px]">
                                    <img src="{{ asset('assets/img/th-11/testimonial-img.png') }}" alt="testimonial-img" width="416" height="431" class="h-full w-full object-cover" />
                                </div>
                                <div class="flex-1 text-ColorMidnightMoss">
                                    <blockquote class="mb-10 text-xl font-semibold -tracking-[1px] lg:text-2xl xl:text-3xl">
                                        More than just a website builder. The options are
                                        great for building a website and have lots of
                                        features. When I got stuck which was a lot I was
                                        always supported and helped very quickly. Even
                                        offered to join a tutorial with Masco which was very
                                        informative. Masco was amazing like an
                                        accountability partner.
                                    </blockquote>
                                    <div class="">
                                        <span class="block text-xl font-semibold">Robertson Paul</span>
                                        <span class="block">Co-founder@ xyz company</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="flex flex-col items-center gap-12 md:flex-row md:gap-16 lg:gap-[90px] xl:gap-[134px]">
                                <div class="h-64 w-64 overflow-hidden rounded-[10px] lg:h-[431px] lg:w-[416px]">
                                    <img src="{{ asset('assets/img/th-11/testimonial-img.png') }}" alt="testimonial-img" width="416" height="431" class="h-full w-full object-cover" />
                                </div>
                                <div class="flex-1 text-ColorMidnightMoss">
                                    <blockquote class="mb-10 text-xl font-semibold -tracking-[1px] lg:text-2xl xl:text-3xl">
                                        More than just a website builder. The options are
                                        great for building a website and have lots of
                                        features. When I got stuck which was a lot I was
                                        always supported and helped very quickly. Even
                                        offered to join a tutorial with Masco which was very
                                        informative. Masco was amazing like an
                                        accountability partner.
                                    </blockquote>
                                    <div class="">
                                        <span class="block text-xl font-semibold">Robertson Paul</span>
                                        <span class="block">Co-founder@ xyz company</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- SLider Navigation -->
                    <div class="relative z-10 mt-[50px] flex flex-row-reverse justify-center gap-6 lg:-mt-[50px] lg:justify-start">
                        <div class="slider-nav-btn-next flex h-[50px] w-[50px] items-center justify-center rounded-[50%] border border-ColorMidnightMoss bg-transparent text-ColorMidnightMoss transition-all duration-300 hover:bg-ColorMidnightMoss hover:text-ColorCaribbeanGreen">
                            <i class="fa-solid fa-chevron-right"></i>
                        </div>
                        <div class="slider-nav-btn-prev flex h-[50px] w-[50px] items-center justify-center rounded-[50%] border border-ColorMidnightMoss bg-transparent text-ColorMidnightMoss transition-all duration-300 hover:bg-ColorMidnightMoss hover:text-ColorCaribbeanGreen">
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
            <!-- Section Content Wrapper -->
            <div class="jos mb-[60px] xl:mb-20">
                <!-- Section Content Block -->
                <div class="mx-auto max-w-[746px]">
                    <div class="mb-5">
                        <h2 class="text-center font-Kanit text-4xl font-medium leading-none -tracking-[1px] text-ColorMidnightMoss lg:text-5xl xl:text-7xl xxl:text-[80px]">
                            Affordable plans to suit your needs
                        </h2>
                    </div>
                </div>
                <!-- Section Content Block -->
            </div>
            <!-- Section Content Wrapper -->

            <!-- Accordion List -->
            <ul class="jos grid grid-cols-1 gap-6">
                <!-- Accordion Item -->
                <li class="accordion-item active overflow-hidden rounded-[10px] border border-ColorMidnightMoss p-[30px]">
                    <!-- Accordion Header -->
                    <div class="accordion-header flex justify-between gap-6 font-Kanit text-xl font-medium leading-[1.28] -tracking-[1px] text-ColorMidnightMoss lg:text-2xl xl:text-[28px]">
                        <button class="flex-1 text-left">
                            Can I connect my domain with my new create website site?
                        </button>
                        <div class="accordion-icon-5 relative flex h-[50px] w-[50px] items-center justify-center rounded-[50%] border-2 border-ColorMidnightMoss text-2xl text-ColorMidnightMoss">
                            <i class="fa-regular fa-plus"></i>
                        </div>
                    </div>
                    <!-- Accordion Header -->
                    <!-- Accordion Body -->
                    <div class="accordion-body max-w-[1156px] text-xl text-[#2c2c2c] opacity-80">
                        <p class="pt-4 lg:pt-2 xl:pt-1">
                            Yes! Custom domain is a feature in paid plans. Masco
                            provides detailed instructions to help you connect your
                            site with a domain already my own. Don't have a domain?
                            Can I buy one from right within Masco!
                        </p>
                    </div>
                    <!-- Accordion Body -->
                </li>
                <!-- Accordion Item -->
                <!-- Accordion Item -->
                <li class="accordion-item overflow-hidden rounded-[10px] border border-ColorMidnightMoss p-[30px]">
                    <!-- Accordion Header -->
                    <div class="accordion-header flex justify-between gap-6 font-Kanit text-xl font-medium leading-[1.28] -tracking-[1px] text-ColorMidnightMoss lg:text-2xl xl:text-[28px]">
                        <button class="flex-1 text-left">
                            How often does my team upload new templates?
                        </button>
                        <div class="accordion-icon-5 relative flex h-[50px] w-[50px] items-center justify-center rounded-[50%] border-2 border-ColorMidnightMoss text-2xl text-ColorMidnightMoss">
                            <i class="fa-regular fa-plus"></i>
                        </div>
                    </div>
                    <!-- Accordion Header -->
                    <!-- Accordion Body -->
                    <div class="accordion-body max-w-[1156px] text-xl text-[#2c2c2c] opacity-80">
                        <p class="pt-4 lg:pt-2 xl:pt-1">
                            Yes! Custom domain is a feature in paid plans. Masco
                            provides detailed instructions to help you connect your
                            site with a domain already my own. Don't have a domain?
                            Can I buy one from right within Masco!
                        </p>
                    </div>
                    <!-- Accordion Body -->
                </li>
                <!-- Accordion Item -->
                <!-- Accordion Item -->
                <li class="accordion-item overflow-hidden rounded-[10px] border border-ColorMidnightMoss p-[30px]">
                    <!-- Accordion Header -->
                    <div class="accordion-header flex justify-between gap-6 font-Kanit text-xl font-medium leading-[1.28] -tracking-[1px] text-ColorMidnightMoss lg:text-2xl xl:text-[28px]">
                        <button class="flex-1 text-left">
                            Can I create more sites than my plan allows?
                        </button>
                        <div class="accordion-icon-5 relative flex h-[50px] w-[50px] items-center justify-center rounded-[50%] border-2 border-ColorMidnightMoss text-2xl text-ColorMidnightMoss">
                            <i class="fa-regular fa-plus"></i>
                        </div>
                    </div>
                    <!-- Accordion Header -->
                    <!-- Accordion Body -->
                    <div class="accordion-body max-w-[1156px] text-xl text-[#2c2c2c] opacity-80">
                        <p class="pt-4 lg:pt-2 xl:pt-1">
                            Yes! Custom domain is a feature in paid plans. Masco
                            provides detailed instructions to help you connect your
                            site with a domain already my own. Don't have a domain?
                            Can I buy one from right within Masco!
                        </p>
                    </div>
                    <!-- Accordion Body -->
                </li>
                <!-- Accordion Item -->
                <!-- Accordion Item -->
                <li class="accordion-item overflow-hidden rounded-[10px] border border-ColorMidnightMoss p-[30px]">
                    <!-- Accordion Header -->
                    <div class="accordion-header flex justify-between gap-6 font-Kanit text-xl font-medium leading-[1.28] -tracking-[1px] text-ColorMidnightMoss lg:text-2xl xl:text-[28px]">
                        <button class="flex-1 text-left">
                            How do I cancel the service?
                        </button>
                        <div class="accordion-icon-5 relative flex h-[50px] w-[50px] items-center justify-center rounded-[50%] border-2 border-ColorMidnightMoss text-2xl text-ColorMidnightMoss">
                            <i class="fa-regular fa-plus"></i>
                        </div>
                    </div>
                    <!-- Accordion Header -->
                    <!-- Accordion Body -->
                    <div class="accordion-body max-w-[1156px] text-xl text-[#2c2c2c] opacity-80">
                        <p class="pt-4 lg:pt-2 xl:pt-1">
                            Yes! Custom domain is a feature in paid plans. Masco
                            provides detailed instructions to help you connect your
                            site with a domain already my own. Don't have a domain?
                            Can I buy one from right within Masco!
                        </p>
                    </div>
                    <!-- Accordion Body -->
                </li>
                <!-- Accordion Item -->
                <!-- Accordion Item -->
                <li class="accordion-item overflow-hidden rounded-[10px] border border-ColorMidnightMoss p-[30px]">
                    <!-- Accordion Header -->
                    <div class="accordion-header flex justify-between gap-6 font-Kanit text-xl font-medium leading-[1.28] -tracking-[1px] text-ColorMidnightMoss lg:text-2xl xl:text-[28px]">
                        <button class="flex-1 text-left">
                            Can I pay in other currencies?
                        </button>
                        <div class="accordion-icon-5 relative flex h-[50px] w-[50px] items-center justify-center rounded-[50%] border-2 border-ColorMidnightMoss text-2xl text-ColorMidnightMoss">
                            <i class="fa-regular fa-plus"></i>
                        </div>
                    </div>
                    <!-- Accordion Header -->
                    <!-- Accordion Body -->
                    <div class="accordion-body max-w-[1156px] text-xl text-[#2c2c2c] opacity-80">
                        <p class="pt-4 lg:pt-2 xl:pt-1">
                            Yes! Custom domain is a feature in paid plans. Masco
                            provides detailed instructions to help you connect your
                            site with a domain already my own. Don't have a domain?
                            Can I buy one from right within Masco!
                        </p>
                    </div>
                    <!-- Accordion Body -->
                </li>
                <!-- Accordion Item -->
            </ul>
            <!-- Accordion List -->
        </div>
        <!-- Section Container -->
    </div>
    <!-- Section Space -->
</section>
<!-- FAQ Section End -->

@endsection



@section('footer')
<footer class="section-footer">
    <div class="relative z-10 rounded-tl-[30px] rounded-tr-[30px] bg-[#FFFCEF] lg:rounded-tl-[50px] lg:rounded-tr-[50px] xl:rounded-tl-[100px] xl:rounded-tr-[100px]">
        <!-- Footer Area Top -->
        <div class="relative z-10">
            <!-- Footer Top Spacing -->
            <div class="pb-[60px] pt-20 lg:pb-20 lg:pt-[100px] xl:pt-[120px]">
                <!-- Section Container -->
                <div class="container-default">
                    <!-- Section Wrapper -->
                    <div class="flex flex-col items-center justify-center">
                        <!-- Section Block -->
                        <div class="max-w-[720px]">
                            <h2 class="text-center font-Kanit text-4xl font-medium leading-none -tracking-[1px] text-ColorMidnightMoss lg:text-5xl xl:text-7xl xxl:text-[80px]">
                                Need a professional website? Try it now!
                            </h2>
                            <p class="mt-5 text-center text-[#2c2c2c]">
                                Our website builder software offers pre-designed
                                templates, we also provide various customization options
                                like a blog site, business site, e-commerce, and more.
                            </p>

                            <div class="mt-8 text-center lg:mt-[50px]">
                                <div class="mb-3 flex flex-wrap justify-center gap-6">
                                    <a href="#" class="btn is-caribbean-green is-transparent btn-animation is-large is-rounded group inline-block">
                                        <span>
                                            Get started now
                                            <i class="fa-regular fa-arrow-right ml-[10px] text-2xl leading-none"></i>
                                        </span>
                                    </a>
                                    <a href="#" class="btn is-outline-midnight-moss btn-animation is-large is-rounded group inline-block"><span>Watch a demo</span></a>
                                </div>
                                <div>
                                    <span class="text-sm text-[#7F8995]">No credit card is required.</span>
                                </div>
                            </div>
                        </div>
                        <!-- Section Block -->
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
        <div class="border-t border-[#EAEDF0] text-[#2C2C2C]">
            <!-- Footer Center Spacing -->
            <div class="py-[60px] lg:py-20 xl:py-[100px]">
                <!-- Section Container -->
                <div class="container-default">
                    <!-- Footer Widget List -->
                    <div class="grid gap-x-16 gap-y-10 sm:grid-cols-2 lg:grid-cols-[1fr_repeat(3,_auto)] xl:gap-x-24 xxl:gap-x-[134px]">
                        <!-- Footer Widget Item -->
                        <div class="flex flex-col gap-y-7">
                            <!-- Footer Logo -->
                            <a href="{{ url('index') }}">
                                <img src="{{ asset('assets/img/logo-caribbean-green-dark.png') }}" alt="Masco" width="109" height="24" />
                            </a>
                            <!-- Footer Content -->
                            <div>
                                <!-- Footer About Text -->
                                <div class="max-w-[416px]">
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
                        <div class="flex flex-col gap-y-7">
                            <!-- Footer Widget Title -->
                            <div class="text-xl font-semibold capitalize text-ColorMidnightMoss">
                                Primary Pages
                            </div>
                            <!-- Footer Navbar -->
                            <ul class="flex flex-col gap-y-[10px] capitalize">
                                <li>
                                    <a href="{{ url('index') }}" class="hover:opcity-100 underline-offset-4 transition-all duration-300 ease-linear hover:underline">Home</a>
                                </li>
                                <li>
                                    <a href="{{ url('about') }}" class="hover:opcity-100 underline-offset-4 transition-all duration-300 ease-linear hover:underline">About Us</a>
                                </li>
                                <li>
                                    <a href="{{ url('services') }}" class="hover:opcity-100 underline-offset-4 transition-all duration-300 ease-linear hover:underline">Services</a>
                                </li>
                                <li>
                                    <a href="{{ url('pricing') }}" class="hover:opcity-100 underline-offset-4 transition-all duration-300 ease-linear hover:underline">pricing</a>
                                </li>
                                <li>
                                    <a href="{{ url('contact') }}" class="hover:opcity-100 underline-offset-4 transition-all duration-300 ease-linear hover:underline">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <!-- Footer Widget Item -->

                        <!-- Footer Widget Item -->
                        <div class="flex flex-col gap-y-6">
                            <!-- Footer Title -->
                            <div class="text-xl font-semibold capitalize text-ColorMidnightMoss">
                                Utility pages
                            </div>
                            <!-- Footer Title -->

                            <!-- Footer Navbar -->
                            <ul class="flex flex-col gap-y-[10px] capitalize">
                                <li>
                                    <a href="{{ url('signup') }}" class="hover:opcity-100 underline-offset-4 transition-all duration-300 ease-linear hover:underline">Signup</a>
                                </li>
                                <li>
                                    <a href="{{ url('login') }}" class="hover:opcity-100 underline-offset-4 transition-all duration-300 ease-linear hover:underline">Login</a>
                                </li>
                                <li>
                                    <a href="{{ url('error404') }}" class="hover:opcity-100 underline-offset-4 transition-all duration-300 ease-linear hover:underline">404 Not found</a>
                                </li>
                                <li>
                                    <a href="{{ url('resetpassword') }}" class="hover:opcity-100 underline-offset-4 transition-all duration-300 ease-linear hover:underline">Password Reset</a>
                                </li>
                            </ul>
                        </div>
                        <!-- Footer Widget Item-->

                        <!-- Footer Widget Item -->
                        <div class="flex flex-col gap-y-6">
                            <!-- Footer Title -->
                            <div class="text-xl font-semibold capitalize text-ColorMidnightMoss">
                                Subscribe to Our Newsletter
                            </div>
                            <!-- Footer Title -->

                            <!-- Footer Newsletter Form -->
                            <form action="#" method="post">
                                <div class="relative flex items-center justify-end">
                                    <input type="email" placeholder="Enter your email" class="w-full rounded-[50px] border border-ColorMidnightMoss px-6 py-2 pr-20 outline-none focus:border-ColorCaribbeanGreen" required />
                                    <button type="submit" class="absolute mr-[5px] flex h-10 w-[60px] items-center justify-center rounded-[50px] bg-ColorCaribbeanGreen">
                                        <span><i class="fa-regular fa-arrow-right text-2xl"></i></span>
                                    </button>
                                </div>
                            </form>
                            <!-- Footer Newsletter Form -->
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
        <div class="border-t border-[#EAEDF0]">
            <!-- Footer Bottom Spacing -->
            <div class="py-[18px]">
                <!-- Section Container -->
                <div class="container-default">
                    <div class="flex flex-col items-center gap-5 lg:flex-row lg:items-start lg:justify-between">
                        <div class="flex flex-wrap gap-5">
                            <a href="https://twitter.com" target="_blank" rel="noopener noreferrer" class="flex h-[30px] w-[30px] items-center justify-center rounded-[50%] bg-ColorMidnightMoss/10 text-sm text-ColorMidnightMoss transition-all duration-300 hover:bg-ColorCaribbeanGreen" aria-label="twitter">
                                <i class="fa-brands fa-x-twitter"></i>
                            </a>
                            <a href="https://www.facebook.com/" target="_blank" rel="noopener noreferrer" class="flex h-[30px] w-[30px] items-center justify-center rounded-[50%] bg-ColorMidnightMoss/10 text-sm text-ColorMidnightMoss transition-all duration-300 hover:bg-ColorCaribbeanGreen" aria-label="facebook">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                            <a href="https://www.instagram.com/" target="_blank" rel="noopener noreferrer" class="flex h-[30px] w-[30px] items-center justify-center rounded-[50%] bg-ColorMidnightMoss/10 text-sm text-ColorMidnightMoss transition-all duration-300 hover:bg-ColorCaribbeanGreen" aria-label="instagram">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                            <a href="https://www.github.com/" target="_blank" rel="noopener noreferrer" class="flex h-[30px] w-[30px] items-center justify-center rounded-[50%] bg-ColorMidnightMoss/10 text-sm text-ColorMidnightMoss transition-all duration-300 hover:bg-ColorCaribbeanGreen" aria-label="github">
                                <i class="fa-brands fa-github"></i>
                            </a>
                        </div>
                        <div class="text-center text-ColorMidnightMoss text-opacity-80">
                            &copy; Copyright 2024, All Rights Reserved by PixcelsThemes
                        </div>
                    </div>
                </div>
                <!-- Section Container -->
            </div>
            <!-- Footer Bottom Spacing -->
        </div>
        <!-- Footer Bottom -->

        <!-- Footer Background Shape -->
        <div class="absolute left-0 top-10 -z-10 h-auto w-full">
            <img src="{{ asset('assets/img/elements/hero-10-bg-shape.svg') }}" alt="hero-10-bg-shape" width="1600" height="650" class="h-auto w-full" />
        </div>
    </div>
</footer>
@endsection