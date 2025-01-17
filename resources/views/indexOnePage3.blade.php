@extends('layout.layout2')

@section('headerLogo')
<img src="{{ asset('assets/img/logo-yellow-dark.png') }}" alt="Masco" width="109" height="24" />
@endsection



@section('headButtons')

<div class="flex items-center gap-6">
    <a href="{{ url('login') }}" class="btn-text hidden hover:text-ColorYellow sm:inline-block">Login</a>
    <a href="{{ url('signup') }}" class="group relative z-10 hidden sm:inline-block">
        <div class="btn is-rounded is-yellow">Sign up free</div>
        <div class="is-rounded absolute inset-0 -z-10 translate-x-[5px] translate-y-[5px] bg-ColorYellow transition-all duration-300 ease-linear group-hover:translate-x-0 group-hover:translate-y-0"></div>
    </a>
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
        <!-- Section Space -->
        <div class="pb-20 pt-28 md:pt-36 lg:pb-[100px] lg:pt-[150px] xxl:pb-[120px] xxl:pt-[185px]">
            <!-- Section Container -->
            <div class="container-default">
                <!-- Hero Area -->
                <div class="grid items-center gap-10 lg:grid-cols-[1fr,minmax(0,_0.6fr)] lg:gap-20 xl:gap-[122px]">
                    <!-- Hero Content Block -->
                    <div class="jos mx-auto max-w-[500px] lg:mx-0 lg:max-w-none">
                        <div class="flex flex-col items-center justify-center text-center lg:items-start lg:justify-normal lg:text-left">
                            <h1 class="mb-6 text-4xl font-extrabold leading-[1.11] -tracking-[1px] md:text-5xl lg:text-6xl xl:text-7xl xxl:text-[90px]">
                                Fitness app for your good health
                            </h1>
                            <p class="mb-10 xl:mb-[50px]">
                                Snaga is a health & fitness tracker app that helps you
                                set out realistic goals that you can accomplish without
                                many hurdles. Sometimes, we keep bigger goals but end up
                                and workout sessions and exercises to help you keep fit.
                            </p>
                            <div class="mb-8 flex flex-wrap items-center gap-[10px] lg:mb-[50px]">
                                <!-- Hero Avatar Block-->
                                <div class="flex">
                                    <!-- Hero Avatar Image -->
                                    <img src="{{ asset('assets/img/th-3/hero-avater-1.jpg') }}" alt="hero-avatar-img-1" width="58" height="58" class="-ml-[15px] h-[58px] w-[58px] rounded-[50%] first:-ml-0" />
                                    <!-- Hero Avatar Image -->
                                    <img src="{{ asset('assets/img/th-3/hero-avater-2.jpg') }}" alt="hero-avatar-img-2" width="58" height="58" class="-ml-[15px] h-[58px] w-[58px] rounded-[50%] first:-ml-0" />
                                    <!-- Hero Avatar Image -->
                                    <img src="{{ asset('assets/img/th-3/hero-avater-3.jpg') }}" alt="hero-avatar-img-2" width="58" height="58" class="-ml-[15px] h-[58px] w-[58px] rounded-[50%] first:-ml-0" />
                                </div>
                                <!-- Hero Avatar Block-->
                                <ul class="flex gap-12 text-ColorBlack">
                                    <li class="relative after:absolute after:left-[calc(100%+_24px)] after:top-1/2 after:h-10 after:w-0.5 after:-translate-y-1/2 after:bg-ColorBlack/10 last:after:hidden">
                                        <div class="text-[30px] font-bold leading-[1.4] -tracking-[1px]">
                                            64,739
                                        </div>
                                        <div class="flex gap-[5px] text-base">
                                            Happy Customers
                                        </div>
                                    </li>
                                    <li class="relative after:absolute after:left-[calc(100%+_24px)] after:top-1/2 after:h-10 after:w-0.5 after:-translate-y-1/2 after:bg-ColorBlack/10 last:after:hidden">
                                        <div class="text-[30px] font-bold leading-[1.4] -tracking-[1px]">
                                            4.8/5
                                        </div>
                                        <div class="flex gap-[5px] text-base">
                                            <div class="flex gap-1">
                                                <img src="{{ asset('assets/img/icons/icon-green-star.svg') }}" alt="icon-green-star" width="17" height="17" />
                                                <img src="{{ asset('assets/img/icons/icon-green-star.svg') }}" alt="icon-green-star" width="17" height="17" />
                                                <img src="{{ asset('assets/img/icons/icon-green-star.svg') }}" alt="icon-green-star" width="17" height="17" />
                                                <img src="{{ asset('assets/img/icons/icon-green-star.svg') }}" alt="icon-green-star" width="17" height="17" />
                                                <img src="{{ asset('assets/img/icons/icon-green-star.svg') }}" alt="icon-green-star" width="17" height="17" />
                                            </div>
                                            Rating
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="flex flex-wrap justify-center gap-5 sm:justify-normal">
                                <a href="#" class="group relative z-10 inline-block">
                                    <div class="btn is-large is-rounded is-yellow">
                                        Start a 10-day free trial
                                    </div>
                                    <div class="is-rounded absolute inset-0 -z-10 translate-x-[5px] translate-y-[5px] bg-ColorYellow transition-all duration-300 ease-linear group-hover:translate-x-0 group-hover:translate-y-0"></div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Hero Content Block -->

                    <!-- Hero Image Block -->
                    <div class="jos">
                        <div class="relative z-10 mx-auto h-auto max-w-[280px] sm:max-w-[500px] lg:ml-auto lg:mr-0">
                            <!-- Hero Main Image -->
                            <img src="{{ asset('assets/img/th-3/hero-mobille.png') }}" alt="hero-mobille" width="612" height="1272" class="z-10 mx-auto h-[635px] w-[306px]" />
                            <!-- Hero Shape - 1 -->
                            <img src="{{ asset('assets/img/elements/hero-3-shapes-1.svg') }}" alt="hero-2-shape-1" width="110" height="191" class="absolute -left-[12%] bottom-[18%] -z-10 xl:-left-[2%] xxl:left-[6%]" />
                            <!-- Hero Shape - 2 -->
                            <img src="{{ asset('assets/img/elements/hero-3-shapes-2.svg') }}" alt="hero-2-shape-1" width="292" height="299" class="absolute -right-[18%] top-[15%] -z-10" />
                        </div>
                    </div>
                    <!-- Hero Image Block -->
                </div>
                <!-- Hero Area -->
            </div>
            <!-- Section Container -->
        </div>
        <!-- Section Space -->

        <!-- Section Background Shape -->
        <img src="{{ asset('assets/img/elements/hero-3-bg-shape.svg') }}" alt="hero-3-bg-shape" width="1600" height="883" class="absolute left-0 top-0 -z-10 hidden h-full w-auto xl:block" />
    </div>
</section>
<!-- Hero Section End -->

<!-- Features Section Start -->
<section class="section-features" id="section-features">
    <!-- Section Space -->
    <div class="section-space-bottom">
        <!-- Section Container -->
        <div class="container-default">
            <!-- Section Content Wrapper -->
            <div class="jos mb-[60px] xl:mb-20">
                <!-- Section Content Block -->
                <div class="mx-auto max-w-[636px]">
                    <h2 class="text-center">
                        Ultimate method & amazing features to change your life
                    </h2>
                </div>
                <!-- Section Content Block -->
            </div>
            <!-- Section Content Wrapper -->

            <!-- Feature List -->
            <div class="grid justify-center gap-8 sm:grid-cols-2 lg:grid-cols-3 xxl:gap-20">
                <!-- Feature Item -->
                <div class="jos" data-jos_animation="fade-left" data-jos_delay="0">
                    <div class="flex flex-col gap-6 text-center md:flex-row md:text-left">
                        <img src="{{ asset('assets/img/icons/icon-green-feature-1.svg') }}" alt="icon-green-feature-1" width="60" height="60" class="h-[60px] w-auto" />
                        <div class="">
                            <div class="mb-4 text-2xl font-semibold leading-[1.33] -tracking-[0.5px] text-ColorBlack lg:text-2xl">
                                Monitor your diet easily
                            </div>
                            <p>
                                Track the times you eat, the foods you eat, portion
                                sizes, and notes.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Feature Item -->
                <!-- Feature Item -->
                <div class="jos" data-jos_animation="fade-left" data-jos_delay="0.3">
                    <div class="flex flex-col gap-6 text-center md:flex-row md:text-left">
                        <img src="{{ asset('assets/img/icons/icon-green-feature-2.svg') }}" alt="icon-green-feature-2" width="60" height="60" class="h-[60px] w-auto" />
                        <div class="">
                            <div class="mb-4 text-2xl font-semibold leading-[1.33] -tracking-[0.5px] text-ColorBlack lg:text-2xl">
                                Give health & fitness tips
                            </div>
                            <p>
                                Exercise is very important for us to be fit and healthy&
                                every tips.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Feature Item -->
                <!-- Feature Item -->
                <div class="jos" data-jos_animation="fade-left" data-jos_delay="0.6">
                    <div class="flex flex-col gap-6 text-center md:flex-row md:text-left">
                        <img src="{{ asset('assets/img/icons/icon-green-feature-3.svg') }}" alt="icon-green-feature-3" width="60" height="60" class="h-[60px] w-auto" />
                        <div class="">
                            <div class="mb-4 text-2xl font-semibold leading-[1.33] -tracking-[0.5px] text-ColorBlack lg:text-2xl">
                                All-in-one health tool
                            </div>
                            <p>
                                It can help you set fitness goals, it with wearable
                                fitness technology.
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
</section>
<!-- Features Section End -->

<!-- Content Section Start -->
<section class="section-content" id="section-about">
    <!-- Section Background -->
    <div class="bg-ColorOffWhite">
        <!-- Section Spacer -->
        <div class="section-space">
            <!-- Section Container -->
            <div class="container-custom">
                <div class="flex flex-col gap-y-20 lg:gap-y-[100px] xl:gap-y-[120px]">
                    <!-- Content Area Single -->
                    <div class="grid items-center gap-10 lg:grid-cols-[minmax(0,_0.7fr),_1fr] lg:gap-20 xl:grid-cols-[0.8fr_minmax(0,_1fr)] xl:gap-[209px]">
                        <!-- Content Block Left -->
                        <div class="jos order-1 lg:order-2" data-jos_animation="fade-right">
                            <!-- Section Wrapper -->
                            <div>
                                <!-- Section Block -->
                                <div class="mb-5">
                                    <h2>
                                        Keep your body and mind healthy in a modern way
                                    </h2>
                                </div>
                                <!-- Section Block -->
                            </div>
                            <!-- Section Wrapper -->
                            <p>
                                It allows users to track data, such as volume, time,
                                weight, and goals, to compare their progress. Acting as
                                a type of digital workout journal, this app helps you
                                log workouts and utilize helpful graphs.
                            </p>
                            <p>
                                The app also allows users to create their own custom
                                workout plans, down to the number of sets & reps for
                                everyone, from beginner level.
                            </p>
                            <div class="mt-[50px]">
                                <a href="#" class="group relative z-10 inline-block">
                                    <div class="btn is-large is-rounded is-yellow">
                                        Learn more
                                    </div>
                                    <div class="is-rounded absolute inset-0 -z-10 translate-x-[5px] translate-y-[5px] bg-ColorYellow transition-all duration-300 ease-linear group-hover:translate-x-0 group-hover:translate-y-0"></div>
                                </a>
                            </div>
                        </div>
                        <!-- Content Block Left -->
                        <!-- Content Block Right -->
                        <div class="jos relative z-10 order-2 flex items-center justify-center lg:order-1" data-jos_animation="fade-left">
                            <!-- Content Image -->
                            <img src="{{ asset('assets/img/th-3/content-img-1.png') }}" alt="content-img-1" width="451" height="456" class="h-auto w-[50%] md:w-auto" />

                            <!-- Content Image Shape -->
                            <img src="{{ asset('assets/img/elements/home-3-content-img-shape-1.svg') }}" alt="home-3-content-img-shape-1" width="533" height="521" class="absolute -z-10 h-auto max-w-[90%] sm:max-w-[100%] xl:max-w-[533px]" />
                        </div>
                        <!-- Content Block Right -->
                    </div>
                    <!-- Content Area Single -->

                    <!-- Content Area Single -->
                    <div class="grid items-center gap-10 lg:grid-cols-[1fr_minmax(0,_0.7fr)] lg:gap-20 xl:grid-cols-[1fr_minmax(0,_0.85fr)] xl:gap-[155px]">
                        <!-- Content Block Left -->
                        <div class="jos lg:order-1" data-jos_animation="fade-left">
                            <!-- Section Wrapper -->
                            <div>
                                <!-- Section Block -->
                                <div class="mb-5">
                                    <h2>
                                        Fitness tracker that can help you reach your goals
                                    </h2>
                                </div>
                                <!-- Section Block -->
                            </div>
                            <!-- Section Wrapper -->
                            <p>
                                Strong workout tracker is for those who mean business
                                and have been working out long enough to know exactly
                                what they want
                            </p>
                            <ul class="flex flex-col gap-5 font-semibold text-ColorBlack">
                                <li>
                                    <span class="mr-3 inline-block text-xl"><i class="fa-solid fa-badge-check"></i></span>
                                    Free version can save unlimited workouts & custom
                                    routines
                                </li>
                                <li>
                                    <span class="mr-3 inline-block text-xl"><i class="fa-solid fa-badge-check"></i></span>
                                    Track progress with graphs and automatically back up
                                    data
                                </li>
                                <li>
                                    <span class="mr-3 inline-block text-xl"><i class="fa-solid fa-badge-check"></i></span>
                                    Connect easily with instructor for tips, feedback and
                                    support
                                </li>
                            </ul>
                        </div>
                        <!-- Content Block Left -->
                        <!-- Content Block Right -->
                        <div class="jos relative z-10 flex items-center justify-center lg:order-2" data-jos_animation="fade-right">
                            <!-- Content Image -->
                            <img src="{{ asset('assets/img/th-3/content-img-2.png') }}" alt="content-img-2" width="451" height="456" class="h-auto w-[50%] md:w-auto" />
                            <!-- Content Image Shape -->
                            <img src="{{ asset('assets/img/elements/home-3-content-img-shape-2.svg') }}" alt="home-3-content-img-shape-2" width="533" height="521" class="absolute -z-10 h-auto max-w-[90%] sm:max-w-[100%] xl:max-w-[533px]" />
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

<!-- Horizontal Text Slider -->
<div class="overflow-hidden bg-ColorBlack py-5 text-3xl font-bold uppercase leading-[1.4] tracking-widest text-white">
    <!-- Horizontal Slider Block-->
    <div class="horizontal-slide-from-right-to-left flex gap-x-[30px]">
        <span class="inline-block min-w-[855px]">START KEEPING YOUR BODY AND MIND HEALTHY
        </span>
        <img src="{{ asset('assets/img/icons/arm-icon.png') }}" alt="arm-icon" width="40" height="40" />
        <span class="inline-block min-w-[855px]">START KEEPING YOUR BODY AND MIND HEALTHY
        </span>
        <img src="{{ asset('assets/img/icons/arm-icon.png') }}" alt="arm-icon" width="40" height="40" />
        <span class="inline-block min-w-[855px]">START KEEPING YOUR BODY AND MIND HEALTHY
        </span>
        <img src="{{ asset('assets/img/icons/arm-icon.png') }}" alt="arm-icon" width="40" height="40" />
        <span class="inline-block min-w-[855px]">START KEEPING YOUR BODY AND MIND HEALTHY
        </span>
        <img src="{{ asset('assets/img/icons/arm-icon.png') }}" alt="arm-icon" width="40" height="40" />
    </div>
    <!-- Horizontal Slider Block-->
</div>
<!-- Horizontal Text Slider -->

<!-- Video Class Section Start -->
<section class="video-class-section" id="section-course">
    <div class="relative z-10">
        <!-- Section Space -->
        <div class="section-space">
            <!-- Section Container -->
            <div class="container-default">
                <!-- Section Content Wrapper -->
                <div class="jos mb-[60px] xl:mb-20">
                    <!-- Section Content Block -->
                    <div class="mx-auto max-w-[636px]">
                        <h2 class="text-center">
                            Discover classes and guides based on your interests
                        </h2>
                    </div>
                    <!-- Section Content Block -->
                </div>
                <!-- Section Content Wrapper -->

                <!-- Video Class List-->
                <div class="mb-10 grid gap-x-6 gap-y-10 md:grid-cols-2 lg:mb-20 lg:grid-cols-3">
                    <!-- Video Class Item -->
                    <div class="jos">
                        <div class="relative flex items-center justify-center overflow-hidden rounded-[10px] after:absolute after:inset-0 after:bg-ColorBlack/40">
                            <img src="{{ asset('assets/img/th-3/video-class-img-1.jpg') }}" alt="video-class-img-1" width="416" height="250" class="h-full w-full object-cover" />

                            <a data-fslightbox="gallery" href="https://www.youtube.com/watch?v=3nQNiWdeH2Q" class="group group absolute z-10 flex h-[70px] w-[70px] items-center justify-center rounded-[50%] border-[3px] border-white text-white" aria-label="video-play">
                                <span class="text-xl transition-all duration-300 ease-linear group-hover:scale-110"><i class="fa-solid fa-play"></i></span>
                            </a>
                        </div>
                        <div class="mb-4 mt-6 text-2xl font-semibold leading-[1.33] -tracking-[0.5px] text-ColorBlack">
                            Custom workout plans
                        </div>
                        <p>
                            Snaga is fully customizable workout app. Whether you do
                            weightlifting, physical etc.
                        </p>
                    </div>
                    <!-- Video Class Item -->
                    <!-- Video Class Item -->
                    <div class="jos">
                        <div class="relative flex items-center justify-center overflow-hidden rounded-[10px] after:absolute after:inset-0 after:bg-ColorBlack/40">
                            <img src="{{ asset('assets/img/th-3/video-class-img-2.jpg') }}" alt="video-class-img-2" width="416" height="250" class="h-full w-full object-cover" />

                            <a data-fslightbox="gallery" href="https://www.youtube.com/watch?v=3nQNiWdeH2Q" class="group group absolute z-10 flex h-[70px] w-[70px] items-center justify-center rounded-[50%] border-[3px] border-white text-white" aria-label="video-play">
                                <span class="text-xl transition-all duration-300 ease-linear group-hover:scale-110"><i class="fa-solid fa-play"></i></span>
                            </a>
                        </div>
                        <div class="mb-4 mt-6 text-2xl font-semibold leading-[1.33] -tracking-[0.5px] text-ColorBlack">
                            Clearing meditation
                        </div>
                        <p>
                            A highly accessible meditation that will create more
                            clarity & space in the body.
                        </p>
                    </div>
                    <!-- Video Class Item -->
                    <!-- Video Class Item -->
                    <div class="jos">
                        <div class="relative flex items-center justify-center overflow-hidden rounded-[10px] after:absolute after:inset-0 after:bg-ColorBlack/40">
                            <img src="{{ asset('assets/img/th-3/video-class-img-3.jpg') }}" alt="video-class-img-3" width="416" height="250" class="h-full w-full object-cover" />

                            <a data-fslightbox="gallery" href="https://www.youtube.com/watch?v=3nQNiWdeH2Q" class="group group absolute z-10 flex h-[70px] w-[70px] items-center justify-center rounded-[50%] border-[3px] border-white text-white" aria-label="video-play">
                                <span class="text-xl transition-all duration-300 ease-linear group-hover:scale-110"><i class="fa-solid fa-play"></i></span>
                            </a>
                        </div>
                        <div class="mb-4 mt-6 text-2xl font-semibold leading-[1.33] -tracking-[0.5px] text-ColorBlack">
                            Daily fitness challenges
                        </div>
                        <p>
                            Snaga gives you achieve a specific goal with a specific
                            exercise for daily activities.
                        </p>
                    </div>
                    <!-- Video Class Item -->
                </div>
                <!-- Video Class List-->

                <div class="flex justify-center">
                    <a href="#" class="group relative z-10 inline-block">
                        <div class="btn is-large is-rounded is-yellow">
                            View All Classes
                        </div>
                        <div class="is-rounded absolute inset-0 -z-10 translate-x-[5px] translate-y-[5px] bg-ColorYellow transition-all duration-300 ease-linear group-hover:translate-x-0 group-hover:translate-y-0"></div>
                    </a>
                </div>
            </div>
            <!-- Section Container -->
        </div>
        <!-- Section Space -->

        <img src="{{ asset('assets/img/elements/hero-3-shapes-1.svg') }}" alt="hero-2-shape-1" width="110" height="191" class="absolute -left-16 top-[150px] -z-10 hidden sm:inline-block" />
    </div>
</section>
<!-- Video Section End -->

<!-- Testimonial Section Start -->
<section class="section-testimonial" id="section-testimonial">
    <!-- Section Background -->
    <div class="bg-ColorOffWhite">
        <!-- Section Space -->
        <div class="section-space">
            <!-- Section Container -->
            <div class="container-default">
                <!-- Section Content Wrapper -->
                <div class="jos mb-[60px] flex flex-wrap items-end justify-between gap-x-10 gap-y-5 xl:mb-20">
                    <!-- Section Content Block -->
                    <div class="max-w-[608px]">
                        <h2>
                            People all over the world use snaga for their fitness
                        </h2>
                    </div>
                    <!-- Section Content Block -->
                    <a href="#" class="group relative z-10 inline-block">
                        <div class="btn is-large is-rounded is-yellow">
                            View All Reviews
                        </div>
                        <div class="is-rounded absolute inset-0 -z-10 translate-x-[5px] translate-y-[5px] bg-ColorYellow transition-all duration-300 ease-linear group-hover:translate-x-0 group-hover:translate-y-0"></div>
                    </a>
                </div>
                <!-- Section Content Wrapper -->

                <!-- Testimonial List -->
                <div class="break-inside-auto gap-6 md:columns-2 lg:columns-3">
                    <!-- Testimonial Item -->
                    <div class="jos mb-6 break-inside-avoid">
                        <div class="flex flex-col rounded-[10px] bg-white p-6 text-ColorBlack sm:p-[30px]">
                            <!-- Review Star -->
                            <div class="mb-5 flex gap-[5px] text-2xl text-[#00B67A] lg:mb-[30px]">
                                <img src="{{ asset('assets/img/icons/icon-green-star.svg') }}" alt="icon-green-star" width="26" height="24" />
                                <img src="{{ asset('assets/img/icons/icon-green-star.svg') }}" alt="icon-green-star" width="26" height="24" />
                                <img src="{{ asset('assets/img/icons/icon-green-star.svg') }}" alt="icon-green-star" width="26" height="24" />
                                <img src="{{ asset('assets/img/icons/icon-green-star.svg') }}" alt="icon-green-star" width="26" height="24" />
                                <img src="{{ asset('assets/img/icons/icon-green-star.svg') }}" alt="icon-green-star" width="26" height="24" />
                            </div>
                            <div class="mb-1 font-semibold">
                                Great value home exercise 💪🏼
                            </div>
                            <p class="mb-6">
                                I was recommended masco from a dear friend and WOW!!!
                                Gives energy, strength & mostly your motivation and you
                                helped me grow beyond my expectations.
                            </p>
                            <div class="flex items-center gap-4">
                                <img src="{{ asset('assets/img/th-3/testimonial-avater-1.jpg') }}" alt="testimonial-avater-1" width="60" height="60" class="h-[60px] w-[60px] rounded-[50%]" />
                                <div>
                                    <span class="block font-semibold">Karen Lynn</span>
                                    <span class="text-sm text-opacity-80">CEO & Co-founder @ Company</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial Item -->
                    <!-- Testimonial Item -->
                    <div class="jos mb-6 break-inside-avoid">
                        <div class="flex flex-col rounded-[10px] bg-white p-6 text-ColorBlack sm:p-[30px]">
                            <!-- Review Star -->
                            <div class="mb-5 flex gap-[5px] text-2xl text-[#00B67A] lg:mb-[30px]">
                                <img src="{{ asset('assets/img/icons/icon-green-star.svg') }}" alt="icon-green-star" width="26" height="24" />
                                <img src="{{ asset('assets/img/icons/icon-green-star.svg') }}" alt="icon-green-star" width="26" height="24" />
                                <img src="{{ asset('assets/img/icons/icon-green-star.svg') }}" alt="icon-green-star" width="26" height="24" />
                                <img src="{{ asset('assets/img/icons/icon-green-star.svg') }}" alt="icon-green-star" width="26" height="24" />
                                <img src="{{ asset('assets/img/icons/icon-green-star.svg') }}" alt="icon-green-star" width="26" height="24" />
                            </div>
                            <div class="mb-1 font-semibold">
                                I can honestly say that I’ve enjoyed
                            </div>
                            <p class="mb-6">
                                oth the workouts and the delicious receipts are easy to
                                follow and to finish. It’s great to be part of a
                                community.These times when so much has changed❤
                            </p>
                            <div class="flex items-center gap-4">
                                <img src="{{ asset('assets/img/th-3/testimonial-avater-2.jpg') }}" alt="testimonial-avater-2" width="60" height="60" class="h-[60px] w-[60px] rounded-[50%]" />
                                <div>
                                    <span class="block font-semibold">Ronald Richards</span>
                                    <span class="text-sm text-opacity-80">Businessman</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial Item -->
                    <!-- Testimonial Item -->
                    <div class="jos mb-6 break-inside-avoid">
                        <div class="flex flex-col rounded-[10px] bg-white p-6 text-ColorBlack sm:p-[30px]">
                            <!-- Review Star -->
                            <div class="mb-5 flex gap-[5px] text-2xl text-[#00B67A] lg:mb-[30px]">
                                <img src="{{ asset('assets/img/icons/icon-green-star.svg') }}" alt="icon-green-star" width="26" height="24" />
                                <img src="{{ asset('assets/img/icons/icon-green-star.svg') }}" alt="icon-green-star" width="26" height="24" />
                                <img src="{{ asset('assets/img/icons/icon-green-star.svg') }}" alt="icon-green-star" width="26" height="24" />
                                <img src="{{ asset('assets/img/icons/icon-green-star.svg') }}" alt="icon-green-star" width="26" height="24" />
                                <img src="{{ asset('assets/img/icons/icon-green-star.svg') }}" alt="icon-green-star" width="26" height="24" />
                            </div>
                            <div class="mb-1 font-semibold">
                                Such a wonderful fitness app ❤
                            </div>
                            <p class="mb-6">
                                Such a wonderful fitness plan! Someone who trains
                                regularly but does not have any access to equipment,
                                this plan has been a lifesaver. You don’t need anything
                                but still get a great workout. The recipes are great and
                                I love the guidance about when to eat what.
                            </p>
                            <div class="flex items-center gap-4">
                                <img src="{{ asset('assets/img/th-3/testimonial-avater-3.jpg') }}" alt="testimonial-avater-3" width="60" height="60" class="h-[60px] w-[60px] rounded-[50%]" />
                                <div>
                                    <span class="block font-semibold">Dianne Russell</span>
                                    <span class="text-sm text-opacity-80">Housewife</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial Item -->
                    <!-- Testimonial Item -->
                    <div class="jos mb-6 break-inside-avoid">
                        <div class="flex flex-col rounded-[10px] bg-white p-6 text-ColorBlack sm:p-[30px]">
                            <!-- Review Star -->
                            <div class="mb-5 flex gap-[5px] text-2xl text-[#00B67A] lg:mb-[30px]">
                                <img src="{{ asset('assets/img/icons/icon-green-star.svg') }}" alt="icon-green-star" width="26" height="24" />
                                <img src="{{ asset('assets/img/icons/icon-green-star.svg') }}" alt="icon-green-star" width="26" height="24" />
                                <img src="{{ asset('assets/img/icons/icon-green-star.svg') }}" alt="icon-green-star" width="26" height="24" />
                                <img src="{{ asset('assets/img/icons/icon-green-star.svg') }}" alt="icon-green-star" width="26" height="24" />
                                <img src="{{ asset('assets/img/icons/icon-green-star.svg') }}" alt="icon-green-star" width="26" height="24" />
                            </div>
                            <div class="mb-1 font-semibold">
                                10/10 would recommend👌🏼
                            </div>
                            <p class="mb-6">
                                The workouts are fun to do but still make you sweat! I’m
                                so grateful for the two of you for starting this amazing
                                app️
                            </p>
                            <div class="flex items-center gap-4">
                                <img src="{{ asset('assets/img/th-3/testimonial-avater-4.jpg') }}" alt="testimonial-avater-4" width="60" height="60" class="h-[60px] w-[60px] rounded-[50%]" />
                                <div>
                                    <span class="block font-semibold">Kristin Watson</span>
                                    <span class="text-sm text-opacity-80">Social Influencer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial Item -->
                    <!-- Testimonial Item -->
                    <div class="jos mb-6 break-inside-avoid">
                        <div class="flex flex-col rounded-[10px] bg-white p-6 text-ColorBlack sm:p-[30px]">
                            <!-- Review Star -->
                            <div class="mb-5 flex gap-[5px] text-2xl text-[#00B67A] lg:mb-[30px]">
                                <img src="{{ asset('assets/img/icons/icon-green-star.svg') }}" alt="icon-green-star" width="26" height="24" />
                                <img src="{{ asset('assets/img/icons/icon-green-star.svg') }}" alt="icon-green-star" width="26" height="24" />
                                <img src="{{ asset('assets/img/icons/icon-green-star.svg') }}" alt="icon-green-star" width="26" height="24" />
                                <img src="{{ asset('assets/img/icons/icon-green-star.svg') }}" alt="icon-green-star" width="26" height="24" />
                                <img src="{{ asset('assets/img/icons/icon-green-star.svg') }}" alt="icon-green-star" width="26" height="24" />
                            </div>
                            <div class="mb-1 font-semibold">
                                Love the home fitness tips
                            </div>
                            <p class="mb-6">
                                After a hiatus from the gym I needed some encouragement
                                to help me get my confidence back😍
                            </p>
                            <div class="flex items-center gap-4">
                                <img src="{{ asset('assets/img/th-3/testimonial-avater-1.jpg') }}" alt="testimonial-avater-1" width="60" height="60" class="h-[60px] w-[60px] rounded-[50%]" />
                                <div>
                                    <span class="block font-semibold">Marvin McKinney</span>
                                    <span class="text-sm text-opacity-80">College Student</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial Item -->
                    <!-- Testimonial Item -->
                    <div class="jos mb-6 break-inside-avoid">
                        <div class="flex flex-col rounded-[10px] bg-white p-6 text-ColorBlack sm:p-[30px]">
                            <!-- Review Star -->
                            <div class="mb-5 flex gap-[5px] text-2xl text-[#00B67A] lg:mb-[30px]">
                                <img src="{{ asset('assets/img/icons/icon-green-star.svg') }}" alt="icon-green-star" width="26" height="24" />
                                <img src="{{ asset('assets/img/icons/icon-green-star.svg') }}" alt="icon-green-star" width="26" height="24" />
                                <img src="{{ asset('assets/img/icons/icon-green-star.svg') }}" alt="icon-green-star" width="26" height="24" />
                                <img src="{{ asset('assets/img/icons/icon-green-star.svg') }}" alt="icon-green-star" width="26" height="24" />
                                <img src="{{ asset('assets/img/icons/icon-green-star.svg') }}" alt="icon-green-star" width="26" height="24" />
                            </div>
                            <div class="mb-1 font-semibold">
                                Just completed week 3 and love the app
                            </div>
                            <p class="mb-6">
                                As someone who has not exercised for a few years, it is
                                great to be getting back into it with such accessible
                                exercises and daily tips. Would recommend to anyone
                                whatever fitness level, The workouts are really fun and
                                my family are loving it too! Wonderful job guys 😍
                            </p>
                            <div class="flex items-center gap-4">
                                <img src="{{ asset('assets/img/th-3/testimonial-avater-6.jpg') }}" alt="testimonial-avater-6.jpg" width="60" height="60" class="h-[60px] w-[60px] rounded-[50%]" />
                                <div>
                                    <span class="block font-semibold">Guy Hawkins</span>
                                    <span class="text-sm text-opacity-80">Web Developer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial Item -->
                    <!-- Testimonial List -->
                </div>
                <!-- Section Container -->
            </div>
            <!-- Section Space -->
        </div>
    </div>
    <!-- Section Background -->
</section>
<!-- Testimonial Section End -->

<!-- Newsletter Section Start -->
<section class="section-newsletter">
    <!-- Section Space -->
    <div class="pt-20 lg:pt-[100px] xl:pt-36">
        <!-- Section Container -->
        <div class="container-default">
            <div class="grid items-center gap-5 overflow-hidden rounded-3xl bg-ColorYellow px-8 text-ColorBlack md:grid-cols-2 md:gap-10 md:px-0 lg:grid-cols-[0.8fr_1fr] lg:gap-[66px] lg:rounded-[50px] xl:overflow-visible">
                <div class="relative z-10 order-2 flex items-center justify-center md:order-1">
                    <img src="{{ asset('assets/img/th-3/newsletter.png') }}" alt="newsletter" width="306" height="585" class="h-auto w-[50%] md:w-auto xl:-mt-20" />
                    <img src="{{ asset('assets/img/elements/home-3-content-img-shape-1.svg') }}" alt="home-3-content-img-shape-1" width="533" height="521" class="absolute -z-10 mb-8 h-auto max-w-[90%] sm:max-w-[100%] xl:max-w-[533px]" />
                </div>
                <div class="order-1 py-10 md:order-2 md:py-[60px] md:pr-12 lg:py-20 lg:pr-[70px] xl:py-[80px] xl:pr-[100px]">
                    <!-- Section Content Wrapper -->
                    <div class="mb-5">
                        <!-- Section Content Block -->
                        <div>
                            <h2 class="jos">
                                Download now and start keeping yourself healthy
                            </h2>
                        </div>
                        <!-- Section Content Block -->
                    </div>
                    <!-- Section Content Wrapper -->
                    <p class="text-ColorBlack/80">
                        The fitness builder app lets you create your own workouts
                        based on your goals. Download on any device and keep
                        yourself healthy.
                    </p>
                    <div class="mt-6 flex gap-6 lg:mt-[50px]">
                        <a href="" aria-label="icon-apple-app-store">
                            <img src="{{ asset('assets/img/icons/icon-apple-app-store.svg') }}" alt="icon-apple-app-store" width="188" height="60" class="h-full w-auto" />
                        </a>
                        <a href="" aria-label="icon-google-play-store">
                            <img src="{{ asset('assets/img/icons/icon-google-play-store.svg') }}" alt="icon-google-play-store" width="188" height="60" class="h-full w-auto" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Section Container -->
    </div>
    <!-- Section Space -->
</section>
<!-- Newsletter Section End -->

@endsection



@section('footer')
<footer class="section-footer">
    <div class="bg-white">
        <!-- Footer Area Center -->
        <div class="text-ColorBlack">
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
                                <img src="{{ asset('assets/img/logo-yellow-dark.png') }}" alt="Masco" width="109" height="24" />
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
                                    <a href="https://twitter.com" target="_blank" rel="noopener noreferrer" class="flex h-[30px] w-[30px] items-center justify-center rounded-[50%] bg-ColorBlack/10 text-sm text-ColorBlack transition-all duration-300 hover:bg-ColorYellow" aria-label="twitter">
                                        <i class="fa-brands fa-x-twitter"></i>
                                    </a>
                                    <a href="https://www.facebook.com/" target="_blank" rel="noopener noreferrer" class="flex h-[30px] w-[30px] items-center justify-center rounded-[50%] bg-ColorBlack/10 text-sm text-ColorBlack transition-all duration-300 hover:bg-ColorYellow" aria-label="facebook">
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </a>
                                    <a href="https://www.instagram.com/" target="_blank" rel="noopener noreferrer" class="flex h-[30px] w-[30px] items-center justify-center rounded-[50%] bg-ColorBlack/10 text-sm text-ColorBlack transition-all duration-300 hover:bg-ColorYellow" aria-label="instagram">
                                        <i class="fa-brands fa-instagram"></i>
                                    </a>
                                    <a href="https://www.github.com/" target="_blank" rel="noopener noreferrer" class="flex h-[30px] w-[30px] items-center justify-center rounded-[50%] bg-ColorBlack/10 text-sm text-ColorBlack transition-all duration-300 hover:bg-ColorYellow" aria-label="github">
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
        <div class="horizontal-line bg-ColorBlack"></div>
        <!-- Footer Bottom -->
        <div>
            <!-- Footer Bottom Spacing -->
            <div class="py-[18px]">
                <!-- Section Container -->
                <div class="container-default">
                    <div class="text-center">
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