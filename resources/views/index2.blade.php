@extends('layout.layout1')

@section('headerLogo')
    <img src ="{{ asset('assets/img/logo-purple-dark.png') }}" alt="Masco" width="109" height="24" />
@endsection



@section('headButtons')

<div class="flex items-center gap-6">
    <a href="{{ url('login') }}" class="btn-text hidden hover:text-ColorPurple sm:inline-block">Login</a>
    <a href="{{ url('signup') }}" class="btn is-black btn-animation group hidden rounded sm:inline-block"><span>Sign up free</span></a>
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
    <!-- Section Space -->
    <div class="pb-20 pt-28 md:pt-36 lg:pb-[100px] lg:pt-[150px] xxl:pb-[120px] xxl:pt-[185px]">
        <!-- Section Container -->
        <div class="container-default">
            <!-- Hero Area -->
            <div class="grid items-center gap-12 lg:grid-cols-[1fr,minmax(0,_0.8fr)] lg:gap-[50px]">
                <!-- Hero Content Block -->
                <div class="jos mx-auto max-w-[500px] lg:mx-0 lg:max-w-none">
                    <div class="flex flex-col items-center justify-center text-center lg:items-start lg:justify-normal lg:text-left">
                        <h1 class="mb-6 text-4xl font-extrabold leading-[1.11] -tracking-[1px] md:text-5xl lg:text-6xl xl:text-7xl xxl:text-[90px]">
                            Engage your customers with real-time chat
                        </h1>
                        <p class="mb-10 max-w-[624px] xl:mb-[50px]">
                            Snaga is a complete customer service platform that
                            connects with your website visitors in real-time to
                            convert new leads, close more deals, and provide better
                            support to your customers.
                        </p>
                        <div class="mb-6 flex flex-wrap justify-center gap-5 sm:justify-normal">
                            <a href="" class="btn is-purple btn-animation is-large inline-block rounded"><span>Start a 10-day free trial</span></a>
                            <a href="" class="btn is-outline-black btn-animation is-large inline-block rounded"><span>Learn more</span></a>
                        </div>
                        <p class="flex gap-[10px] text-base font-semibold">
                            <img src ="{{ asset('assets/img/icons/icon-green-star.svg') }}" alt="icon-green-star" width="25" height="24" />
                            Rated 4.9/5 - from over 600 reviews
                        </p>
                    </div>
                </div>
                <!-- Hero Content Block -->

                <!-- Hero Image Block -->
                <div class="jos">
                    <div class="relative mx-auto h-auto max-w-[280px] sm:max-w-[500px] lg:ml-auto lg:mr-0">
                        <!-- Hero Main Image -->
                        <img src ="{{ asset('assets/img/th-2/hero-img.png') }}" alt="hero-img" width="499" height="505" />
                        <!-- Hero Avatar Image -->
                        <img src ="{{ asset('assets/img/th-2/hero-avatar-img-1.png') }}" alt="hero-avatar-img-1" width="70" height="70" class="absolute -left-[35px] top-[150px] h-[70px] w-[70px] rounded-[50%]" />
                        <!-- Hero Avatar Image -->
                        <img src ="{{ asset('assets/img/th-2/hero-avatar-img-2.png') }}" alt="hero-avatar-img-2" width="78" height="78" class="absolute -right-[39px] bottom-10 h-[78px] w-[78px] rounded-[50%]" />
                        <!-- Hero Shape -->
                        <img src ="{{ asset('assets/img/elements/hero-2-shape-1.svg') }}" alt="hero-2-shape-1" width="90" height="91" class="absolute -right-[45px] -top-[70px]" />
                    </div>
                </div>
                <!-- Hero Image Block -->
            </div>
            <!-- Hero Area -->
        </div>
        <!-- Section Container -->
    </div>
    <!-- Section Space -->
</section>
<!-- Hero Section End -->

<!-- Features Section Start -->
<section class="section-features">
    <!-- Section Background -->
    <div class="bg-ColorPurple/5">
        <!-- Section Space -->
        <div class="section-space">
            <!-- Section Container -->
            <div class="container-default">
                <!-- Section Content Wrapper -->
                <div class="jos mb-[60px] xl:mb-20">
                    <!-- Section Content Block -->
                    <div class="mx-auto max-w-[636px]">
                        <h2 class="text-center">
                            Contains modern features for better experience
                        </h2>
                    </div>
                    <!-- Section Content Block -->
                </div>
                <!-- Section Content Wrapper -->

                <!-- Feature List -->
                <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                    <!-- Feature Item -->
                    <div class="jos" data-jos_delay="0">
                        <div class="hover-solid-shadow h-full">
                            <div class="h-full rounded-[10px] border-2 border-ColorBlack bg-white p-[30px]">
                                <img src ="{{ asset('assets/img/icons/icon-duotone-translate.svg') }}" alt="icon-duotone-translate" width="60" height="60" class="mb-[30px] h-[60px] w-auto" />
                                <div class="mb-4 text-xl font-semibold leading-[1.33] -tracking-[0.5px] text-ColorBlack lg:text-2xl">
                                    Multilingual chat widget
                                </div>
                                <p>
                                    Let your customers see the widget in their native
                                    languages for communication
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Feature Item -->
                    <!-- Feature Item -->
                    <div class="jos" data-jos_delay="0.3">
                        <div class="hover-solid-shadow h-full">
                            <div class="h-full rounded-[10px] border-2 border-ColorBlack bg-white p-[30px]">
                                <img src ="{{ asset('assets/img/icons/icon-duotone-user-list.svg') }}" alt="icon-duotone-user-list" width="60" height="60" class="mb-[30px] h-[60px] w-auto" />
                                <div class="mb-4 text-xl font-semibold leading-[1.33] -tracking-[0.5px] text-ColorBlack lg:text-2xl">
                                    Live visitors list
                                </div>
                                <p>
                                    See who your customers are and make the conversation
                                    more personal to boost
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Feature Item -->
                    <!-- Feature Item -->
                    <div class="jos" data-jos_delay="0.6">
                        <div class="hover-solid-shadow h-full">
                            <div class="h-full rounded-[10px] border-2 border-ColorBlack bg-white p-[30px]">
                                <img src ="{{ asset('assets/img/icons/icon-duotone-private-message.svg') }}" alt="icon-duotone-private-message" width="60" height="60" class="mb-[30px] h-[60px] w-auto" />
                                <div class="mb-4 text-xl font-semibold leading-[1.33] -tracking-[0.5px] text-ColorBlack lg:text-2xl">
                                    Record and keep private
                                </div>
                                <p>
                                    Record all your conversations and keep them private so
                                    they can't be hacked
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
        <div class="container-custom">
            <div class="flex flex-col gap-y-20 lg:gap-y-[100px] xl:gap-y-[120px]">
                <!-- Content Area Single -->
                <div class="grid items-center gap-10 lg:grid-cols-2 lg:gap-24 xl:grid-cols-[1fr_minmax(0,_1.2fr)] xl:gap-[148px]">
                    <!-- Content Block Left -->
                    <div class="jos lg:order-2" data-jos_animation="fade-left">
                        <!-- Section Wrapper -->
                        <div>
                            <!-- Section Block -->
                            <div class="mb-5">
                                <h2>
                                    A multi-channel messaging solution in one place here
                                </h2>
                            </div>
                            <!-- Section Block -->
                        </div>
                        <!-- Section Wrapper -->
                        <p>
                            Let your customers easily communicate with you via Live
                            Chat, Facebook, Telegram, Viber, or many other tools.
                            Direct response from snaga.
                        </p>

                        <div class="my-8 h-[1px] w-full bg-ColorBlack/10 lg:my-[50px]"></div>

                        <ul class="flex flex-col gap-5 font-semibold text-ColorBlack">
                            <li>
                                <span class="mr-3 inline-block text-xl"><i class="fa-solid fa-badge-check"></i></span>
                                Chat with visitors, prospects, and customers in real
                                time.
                            </li>
                            <li>
                                <span class="mr-3 inline-block text-xl"><i class="fa-solid fa-badge-check"></i></span>
                                Have unlimited, personalized conversations easy at
                                scale.
                            </li>
                            <li>
                                <span class="mr-3 inline-block text-xl"><i class="fa-solid fa-badge-check"></i></span>
                                Engage in contextual chat conversations wherever you go.
                            </li>
                        </ul>
                    </div>
                    <!-- Content Block Left -->
                    <!-- Content Block Right -->
                    <div class="jos relative lg:order-1" data-jos_animation="fade-right">
                        <!-- Content Image -->
                        <img src ="{{ asset('assets/img/th-2/content-img-1.png') }}" alt="content-img-1" width="512" height="456" class="h-auto w-full" />
                    </div>
                    <!-- Content Block Right -->
                </div>
                <!-- Content Area Single -->
                <!-- Content Area Single -->
                <div class="grid items-center gap-10 lg:grid-cols-2 lg:gap-24 xl:grid-cols-[1.4fr_minmax(0,_1fr)] xl:gap-[209px]">
                    <!-- Content Block Left -->
                    <div class="jos" data-jos_animation="fade-right">
                        <!-- Section Wrapper -->
                        <div>
                            <!-- Section Block -->
                            <div class="mb-5">
                                <h2>
                                    Perfect interface for quick support and with no coding
                                </h2>
                            </div>
                            <!-- Section Block -->
                        </div>
                        <!-- Section Wrapper -->
                        <p>
                            Visual Builder empowers you to create the perfect AI
                            chatbot quickly and without any coding. Drag and drop
                            conversational elements and test them in real-time to
                            design engaging clients.
                        </p>
                        <p>
                            It is a modern messaging platform that combines everything
                            you need for effective support, sales, and engagement, all
                            in a simple interface.
                        </p>
                        <div class="mt-[50px]">
                            <a href="" class="btn is-black btn-animation is-large inline-block rounded"><span>Learn more</span></a>
                        </div>
                    </div>
                    <!-- Content Block Left -->
                    <!-- Content Block Right -->
                    <div class="jos relative" data-jos_animation="fade-left">
                        <!-- Content Image -->
                        <img src ="{{ asset('assets/img/th-2/content-img-2.png') }}" alt="content-img-2" width="451" height="456" class="h-auto w-full" />
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

<!-- Video Section Start -->
<section class="section-video">
    <!-- Section Space -->
    <div class="section-space-bottom">
        <!-- Section Container -->
        <div class="container-default">
            <!-- Section Content Wrapper -->
            <div class="jos mb-[60px] xl:mb-20">
                <!-- Section Content Block -->
                <div class="mx-auto max-w-[636px]">
                    <h2 class="mb-5 text-center">
                        Develop a communication strategy with live video chat
                    </h2>
                    <p class="text-center">
                        Video conferencing boosts productivity & overall promotes
                        collaboration. The advantage of video conferencing is the
                        ability to facilitate all of those.
                    </p>
                </div>
                <!-- Section Content Block -->
            </div>
            <!-- Section Content Wrapper -->

            <!-- Video Block -->
            <div class="jos">
                <div class="relative flex items-center justify-center">
                    <img src ="{{ asset('assets/img/th-2/video-img.jpg') }}" alt="video-img" width="1295" height="699" class="h-auto w-full" />
                    <a data-fslightbox="gallery" href="https://www.youtube.com/watch?v=3nQNiWdeH2Q" class="group group absolute flex h-20 w-20 items-center justify-center rounded-[50%] bg-white text-ColorPurple xl:h-[120px] xl:w-[120px]" aria-label="video-play">
                        <span class="text-2xl transition-all duration-300 ease-linear group-hover:scale-110"><i class="fa-solid fa-play"></i></span>
                    </a>
                </div>
            </div>
            <!-- Video Block -->
        </div>
        <!-- Section Container -->
    </div>
    <!-- Section Space -->
</section>
<!-- Video Section End -->

<!-- Testimonial Section Start -->
<section class="section-testimonial">
    <!-- Section Background -->
    <div class="bg-ColorPurple/5">
        <!-- Section Space -->
        <div class="section-space">
            <!-- Section Container -->
            <div class="container-default">
                <!-- Section Content Wrapper -->
                <div class="jos mb-[60px] xl:mb-20">
                    <!-- Section Content Block -->
                    <div class="mx-auto max-w-[636px]">
                        <h2 class="text-center">
                            Trusted by millions of worldwide customers
                        </h2>
                    </div>
                    <!-- Section Content Block -->
                </div>
                <!-- Section Content Wrapper -->

                <!-- Testimonial List -->
                <div class="grid gap-10 sm:grid-cols-2 lg:grid-cols-3 xl:gap-20">
                    <!-- Testimonial Item -->
                    <div class="jos flex flex-col items-center justify-center text-center" data-jos_animation="fade-right" data-jos_delay="0">
                        <!-- Review Star -->
                        <div class="mb-5 flex gap-[7px] text-2xl text-[#00B67A] lg:mb-[30px]">
                            <i class="fa-sharp fa-solid fa-star"></i>
                            <i class="fa-sharp fa-solid fa-star"></i>
                            <i class="fa-sharp fa-solid fa-star"></i>
                            <i class="fa-sharp fa-solid fa-star"></i>
                            <i class="fa-sharp fa-solid fa-star"></i>
                        </div>
                        <p class="text-ColorBlack">
                            “This was definitely my best experience with live chat
                            software. Plug and play. Intuitive. It is fast, clean,
                            amazing.”
                        </p>
                        <div class="font mt-auto text-base font-semibold text-[#6B6F7B]">
                            <span class="text-ColorBlack">Rated 4.5/5 - </span>from
                            over 100 reviews
                        </div>
                    </div>
                    <!-- Testimonial Item -->
                    <!-- Testimonial Item -->
                    <div class="jos flex flex-col items-center justify-center text-center" data-jos_animation="fade-right" data-jos_delay="0.3">
                        <!-- Review Star -->
                        <div class="mb-5 flex gap-[7px] text-2xl text-[#00B67A] lg:mb-[30px]">
                            <i class="fa-sharp fa-solid fa-star"></i>
                            <i class="fa-sharp fa-solid fa-star"></i>
                            <i class="fa-sharp fa-solid fa-star"></i>
                            <i class="fa-sharp fa-solid fa-star"></i>
                            <i class="fa-sharp fa-solid fa-star"></i>
                        </div>
                        <p class="text-ColorBlack">
                            “Excellent simple live chat solution that has provided my
                            company with a direct way to communicate with potential
                            for customers through my website.”
                        </p>
                        <div class="font mt-auto text-base font-semibold text-[#6B6F7B]">
                            <span class="text-ColorBlack">Rated 4.5/5 - </span>from
                            over 100 reviews
                        </div>
                    </div>
                    <!-- Testimonial Item -->
                    <!-- Testimonial Item -->
                    <div class="jos flex flex-col items-center justify-center text-center" data-jos_animation="fade-right" data-jos_delay="0.6">
                        <!-- Review Star -->
                        <div class="mb-5 flex gap-[7px] text-2xl text-[#00B67A] lg:mb-[30px]">
                            <i class="fa-sharp fa-solid fa-star"></i>
                            <i class="fa-sharp fa-solid fa-star"></i>
                            <i class="fa-sharp fa-solid fa-star"></i>
                            <i class="fa-sharp fa-solid fa-star"></i>
                            <i class="fa-sharp fa-solid fa-star"></i>
                        </div>
                        <p class="text-ColorBlack">
                            Great customer support! Easy to use, cool user interface.
                            With Chaport you will find all you need. Really recommend
                            to all use this amazine tool.”
                        </p>
                        <div class="font mt-auto text-base font-semibold text-[#6B6F7B]">
                            <span class="text-ColorBlack">Rated 4.5/5 - </span>from
                            over 100 reviews
                        </div>
                    </div>
                    <!-- Testimonial Item -->
                </div>
                <!-- Testimonial List -->

                <div class="jos flex justify-center">
                    <a href="#" class="btn is-purple btn-animation is-large mt-10 inline-block rounded lg:mt-20"><span>Read all the reviews on
                            <strong class="underline underline-offset-4">Trustpilot.com</strong></span></a>
                </div>
            </div>
            <!-- Section Container -->
        </div>
        <!-- Section Space -->
    </div>
    <!-- Section Background -->
</section>
<!-- Testimonial Section End -->

<!-- Horizontal Text Slider -->
<div class="overflow-hidden bg-ColorBlack py-5 text-3xl font-bold uppercase leading-[1.4] tracking-widest text-white">
    <!-- Horizontal Slider Block-->
    <div class="horizontal-slide-from-right-to-left flex gap-x-[30px]">
        <span class="inline-block min-w-[855px]">We complete client's projects efficiently</span>
        <img src ="{{ asset('assets/img/icons/fire-icon.png') }}" alt="fire-icon" width="40" height="40" />
        <span class="inline-block min-w-[855px]">We complete client's projects efficiently</span>
        <img src ="{{ asset('assets/img/icons/fire-icon.png') }}" alt="fire-icon" width="40" height="40" />
        <span class="inline-block min-w-[855px]">We complete client's projects efficiently</span>
        <img src ="{{ asset('assets/img/icons/fire-icon.png') }}" alt="fire-icon" width="40" height="40" />
        <span class="inline-block min-w-[855px]">We complete client's projects efficiently</span>
        <img src ="{{ asset('assets/img/icons/fire-icon.png') }}" alt="fire-icon" width="40" height="40" />
    </div>
    <!-- Horizontal Slider Block-->
</div>
<!-- Horizontal Text Slider -->

<!-- Pricing Section Start -->
<section class="section-pricing">
    <!-- Section Background -->
    <div class="bg-ColorPurple/5">
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
                            <span class="relative inline-block h-[35px] w-[70px] rounded-[35px] bg-ColorBlack">
                                <!-- hidden input -->
                                <input id="toggle" type="checkbox" class="hidden" onclick="toggleSwitch()" />
                                <!-- dot -->
                                <span class="toggle_dot absolute h-[35px] w-[35px] rounded-full bg-ColorPurple transition-all duration-300"></span>
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
                            <div class="hover-solid-shadow">
                                <div class="rounded-[10px] border-2 border-ColorBlack bg-white p-7 xl:p-10">
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
                                        <button class="btn is-white is-large group w-full rounded-[3px] border-2">
                                            Purchase now
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Pricing Item -->
                        <!-- Pricing Item -->
                        <div class="jos" data-jos_animation="flip-left" data-jos_delay="0">
                            <div class="hover-solid-shadow">
                                <div class="rounded-[10px] border-2 border-ColorBlack bg-white p-7 xl:p-10">
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
                                        <button class="btn is-purple is-large group w-full rounded-[3px] border-2">
                                            Purchase now
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Pricing Item -->
                        <!-- Pricing Item -->
                        <div class="jos" data-jos_animation="flip-left" data-jos_delay="0">
                            <div class="hover-solid-shadow">
                                <div class="rounded-[10px] border-2 border-ColorBlack bg-white p-7 xl:p-10">
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
                                        <button class="btn is-white is-large group w-full rounded-[3px] border-2">
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
    </div>
    <!-- Section Background -->
</section>
<!-- Pricing Section End -->

<!-- Content Section Start -->
<section class="section-content">
    <!-- Section Space -->
    <div class="section-space">
        <!-- Section Container -->
        <div class="container-custom">
            <!-- Content Area Single -->
            <div class="grid items-center gap-10 lg:grid-cols-2 lg:gap-24 xl:grid-cols-[1fr_minmax(0,_0.82fr)] xl:gap-[143px]">
                <!-- Content Block Left -->
                <div class="jos" data-jos_animation="fade-right">
                    <!-- Section Wrapper -->
                    <div>
                        <!-- Section Block -->
                        <div class="mb-5">
                            <h2>Seamless integration with all your favorite tools</h2>
                        </div>
                        <!-- Section Block -->
                    </div>
                    <!-- Section Wrapper -->
                    <p class="max-w-[627px]">
                        Connect our software with the apps you use and love. With
                        the increasing number of integrations with communications.
                        Bring in customer data from your favourite tools.
                    </p>
                    <div class="mt-[50px]">
                        <a href="" class="btn is-black btn-animation is-large inline-block rounded"><span>See all integrations</span></a>
                    </div>
                </div>
                <!-- Content Block Left -->
                <!-- Content Block Right -->
                <div class="jos relative" data-jos_animation="fade-left">
                    <!-- Content Image -->
                    <img src ="{{ asset('assets/img/th-2/content-img-3.png') }}" alt="content-img-3" width="472" height="348" class="h-auto w-full" />
                </div>
                <!-- Content Block Right -->
            </div>
            <!-- Content Area Single -->
        </div>
        <!-- Section Container -->
    </div>
    <!-- Section Space -->
</section>
<!-- Content Section End -->

<!-- CTA Section Start -->
<section class="section-cta">
    <!-- Section Background -->
    <div class="relative bg-ColorPurple">
        <!-- Section Space -->
        <div class="py-[60px] lg:py-20 xl:py-[100px]">
            <!-- Section Container -->
            <div class="container-default">
                <!-- Section Content Wrapper -->
                <div class="jos mb-[50px]">
                    <!-- Section Content Block -->
                    <div class="mx-auto max-w-[700px]">
                        <h2 class="text-center text-white">
                            Sign up for your free trial today & add live chat to your
                            site
                        </h2>
                    </div>
                    <!-- Section Content Block -->
                </div>
                <!-- Section Content Wrapper -->
                <div class="jos flex justify-center">
                    <a href="" class="btn is-black btn-animation is-large inline-block rounded">
                        <span>Get started free</span>
                    </a>
                </div>
            </div>
            <!-- Section Container -->
        </div>
        <!-- Section Space -->

        <!-- Newsletter Shape 1 -->
        <img src ="{{ asset('assets/img/elements/flower-shape-1.svg') }}" alt="flower-shape-1" width="92" height="116" class="absolute left-[152px] top-[44px] hidden md:block" />
        <!-- Newsletter Shape 2 -->
        <img src ="{{ asset('assets/img/elements/flower-shape-2.svg') }}" alt="flower-shape-2" width="129" height="164" class="absolute bottom-0 right-[57px] hidden md:block" />
    </div>
    <!-- Section Background -->
</section>
<!-- CTA Section End -->

@endsection

@section('footer')
<footer class="section-footer">
    <div class="bg-white">
        <!-- Footer Area Center -->
        <div class="text-ColorBlack">
            <!-- Footer Center Spacing -->
            <div class="py-[60px] lg:py-20">
                <!-- Section Container -->
                <div class="container-default">
                    <!-- Footer Widget List -->
                    <div class="grid gap-x-4 lg:gap-x-16 gap-y-10 sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-[1fr_repeat(3,_auto)] xl:lg:grid-cols-[1fr_repeat(4,_auto)]  xl:gap-x-20">
                        <!-- Footer Widget Item -->
                        <div class="flex flex-col gap-y-7 md:col-span-4 lg:col-span-1">
                            <!-- Footer Logo -->
                            <a href="{{ url('index') }}">
                                <img src ="{{ asset('assets/img/logo-purple-dark.png') }}" alt="Masco" width="109" height="24" />
                            </a>
                            <!-- Footer Content -->
                            <div>
                                <!-- Footer About Text -->
                                <div class="lg:max-w-[320px]">
                                    Email, SMS, Facebook, Chat, CRM, & more, all-in-one
                                    platform to help you grow your business through building
                                    stronger customer relationships.
                                </div>
                                <!-- Footer Mail -->
                                <a href="mailto:yourdemo@email.com" class="my-6 block underline-offset-4 transition-all duration-300 hover:underline">yourdemo@email.com</a>
                                <!-- Footer Social Link -->
                                <div class="flex flex-wrap gap-5">
                                    <a href="https://twitter.com" target="_blank" rel="noopener noreferrer" class="flex h-[30px] w-[30px] items-center justify-center rounded-[50%] bg-ColorBlack/10 text-sm text-ColorBlack transition-all duration-300 hover:bg-ColorBlack hover:text-white" aria-label="twitter">
                                        <i class="fa-brands fa-x-twitter"></i>
                                    </a>
                                    <a href="https://www.facebook.com/" target="_blank" rel="noopener noreferrer" class="flex h-[30px] w-[30px] items-center justify-center rounded-[50%] bg-ColorBlack/10 text-sm text-ColorBlack transition-all duration-300 hover:bg-ColorBlack hover:text-white" aria-label="facebook">
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </a>
                                    <a href="https://www.instagram.com/" target="_blank" rel="noopener noreferrer" class="flex h-[30px] w-[30px] items-center justify-center rounded-[50%] bg-ColorBlack/10 text-sm text-ColorBlack transition-all duration-300 hover:bg-ColorBlack hover:text-white" aria-label="instagram">
                                        <i class="fa-brands fa-instagram"></i>
                                    </a>
                                    <a href="https://www.github.com/" target="_blank" rel="noopener noreferrer" class="flex h-[30px] w-[30px] items-center justify-center rounded-[50%] bg-ColorBlack/10 text-sm text-ColorBlack transition-all duration-300 hover:bg-ColorBlack hover:text-white" aria-label="github">
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
                        <!-- Footer Widget Item -->
                        <div class="flex flex-col gap-y-6 md:col-span-1 lg:col-span-1">
                            <!-- Footer Title -->
                            <div class="text-xl font-semibold capitalize">
                                Download now
                            </div>
                            <!-- Footer Title -->

                            <div class="flex flex-col gap-3">
                                <a href="#">
                                    <img src ="{{ asset('assets/img/icons/icon-apple-app-store.svg') }}" alt="icon-apple-app-store" width="166" height="54" />
                                </a>
                                <a href="#">
                                    <img src ="{{ asset('assets/img/icons/icon-google-play-store.svg') }}" alt="icon-apple-app-store" width="166" height="51" />
                                </a>
                            </div>
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