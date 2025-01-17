@extends('layout.layout2')

@section('headerLogo')
<img src="{{ asset('assets/img/logo-violet-dark.png') }}" alt="Masco" width="109" height="24" />
@endsection



@section('headButtons')

<div class="flex items-center gap-6">
    <a href="{{ url('login') }}" class="btn-text hidden hover:text-ColorViolet sm:inline-block">Login</a>

    <a href="{{ url('signup') }}" class="group relative hidden sm:inline-block">
        <div class="btn is-rounded is-violet">Sign up free</div>
        <div class="is-rounded absolute inset-0 -z-10 translate-y-[5px] bg-ColorBlack transition-all duration-300 ease-linear group-hover:translate-y-0"></div>
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
            <!-- Hero Space -->
            <div class="pb-20 pt-[100px] md:pt-[120px] lg:pb-[110px] lg:pt-[190px]">
                <!-- Section Container -->
                <div class="container-default">
                    <!-- Hero Area Block -->
                    <div class="grid items-center gap-x-[60px] gap-y-12 lg:grid-cols-[1fr_0.8fr] xl:gap-x-[100px]">
                        <!-- Hero Content Block -->
                        <div class="mx-auto max-w-[580px] text-center lg:max-w-none lg:text-left">
                            <h1 class="mb-6 font-DmSans text-[32px] font-bold leading-[1.04] -tracking-[1px] sm:text-5xl lg:text-[65px] xl:text-[78px] xxl:text-[90px]">
                                Keep learning and boost your knowledge
                            </h1>
                            <p class="mb-8 lg:mb-[50px]">
                                Looking to add new skills? We’re a leading destination for
                                online education and world-class education anywhere. We
                                give you many courses and the freedom to learn what you
                                want.
                            </p>

                            <a href="#" class="group relative inline-block">
                                <div class="btn is-large is-rounded is-violet">
                                    Start a free course
                                </div>
                                <div class="is-rounded absolute inset-0 -z-10 translate-y-[5px] bg-ColorBlack transition-all duration-300 ease-linear group-hover:translate-y-0"></div>
                            </a>
                        </div>
                        <!-- Hero Content Block -->

                        <!-- Hero Image Block -->
                        <div class="flex justify-center lg:justify-start">
                            <div class="relative inline-block">
                                <img src="{{ asset('assets/img/th-4/hero-img.png') }}" alt="hero-img" width="420" height="532" class="max-w-full" />
                                <!-- Hero Image Shape -->
                                <div class="absolute right-0 top-1 flex h-[150px] w-[150px] items-center justify-center text-center xl:left-[320px]">
                                    <img src="{{ asset('assets/img/elements/hero-4-start-shape-1.svg') }}" alt="hero-4-start-shape-1" width="150" height="150" class="rotate-360" />
                                    <span class="absolute inline-block max-w-[100px] text-base font-bold text-ColorBlack">10% OFF on all courses</span>
                                </div>
                            </div>
                        </div>
                        <!-- Hero Image Block -->
                    </div>
                    <!-- Hero Area Block -->
                </div>
                <!-- Section Container -->
            </div>
            <!-- Hero Space -->

            <!-- Hero Background Shape -->
            <img src="{{ asset('assets/img/elements/hero-4-bg-shape.svg') }}" alt="hero-4-bg-shape" height="1038" width="1038" class="absolute right-0 top-0 -z-10" />
            <!-- Background Divider Shape -->
            <div class="min-h-[65px] w-full bg-[url('../img/elements/home-4-divider-shape-1.svg')] bg-contain bg-[center_bottom] bg-repeat-x"></div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Features Section Start -->
    <section class="section-features" id="section-features">
        <!-- Section Background -->
        <div class="relative z-10 bg-[#F5EFEB]">
            <!-- Section Space -->
            <div class="section-space">
                <!-- Section Container -->
                <div class="container-default">
                    <!-- Section Content Wrapper -->
                    <div class="jos mb-[60px] xl:mb-20">
                        <!-- Section Content Block -->
                        <div class="mx-auto max-w-[636px]">
                            <h2 class="text-center font-DmSans -tracking-[1px]">
                                Special features that make our online courses the best
                            </h2>
                        </div>
                        <!-- Section Content Block -->
                    </div>
                    <!-- Section Content Wrapper -->

                    <!-- Feature List -->
                    <div class="grid gap-6 md:grid-cols-2 xl:grid-cols-4">
                        <!-- Features Item -->
                        <div class="jos" data-jos_animation="fade-right" data-jos_delay="0">
                            <div class="h-full rounded-[10px] border-2 border-ColorBlack p-[30px] transition-all duration-300 hover:-rotate-3 hover:bg-white">
                                <img src="{{ asset('assets/img/icons/icon-violet-feature-1.svg') }}" alt="icon-violet-feature-1" width="57" height="69" class="mb-[30px] h-[70px] w-auto" />
                                <div class="mb-4 text-2xl font-semibold -tracking-[0.5px] text-ColorBlack">
                                    New Skills
                                </div>
                                <p class="line-clamp-3">
                                    Learning keeps your mind engaged and active. It helps
                                    you get new & knowledge.
                                </p>
                            </div>
                        </div>
                        <!-- Features Item -->
                        <!-- Features Item -->
                        <div class="jos" data-jos_animation="fade-right" data-jos_delay="0.3">
                            <div class="h-full rounded-[10px] border-2 border-ColorBlack p-[30px] transition-all duration-300 hover:-rotate-3 hover:bg-white">
                                <img src="{{ asset('assets/img/icons/icon-violet-feature-2.svg') }}" alt="icon-violet-feature-2" width="57" height="69" class="mb-[30px] h-[70px] w-auto" />
                                <div class="mb-4 text-2xl font-semibold -tracking-[0.5px] text-ColorBlack">
                                    Made By Experts
                                </div>
                                <p class="line-clamp-3">
                                    Our library of trusted mentors and lessons covers math,
                                    science and more.
                                </p>
                            </div>
                        </div>
                        <!-- Features Item -->
                        <!-- Features Item -->
                        <div class="jos" data-jos_animation="fade-right" data-jos_delay="0.6">
                            <div class="h-full rounded-[10px] border-2 border-ColorBlack p-[30px] transition-all duration-300 hover:-rotate-3 hover:bg-white">
                                <img src="{{ asset('assets/img/icons/icon-violet-feature-3.svg') }}" alt="icon-violet-feature-3" width="57" height="69" class="mb-[30px] h-[70px] w-auto" />
                                <div class="mb-4 text-2xl font-semibold -tracking-[0.5px] text-ColorBlack">
                                    Career Opportunities
                                </div>
                                <p class="line-clamp-3">
                                    It refers to any opportunities that take you closer to
                                    your career goals achievement.
                                </p>
                            </div>
                        </div>
                        <!-- Features Item -->
                        <!-- Features Item -->
                        <div class="jos" data-jos_animation="fade-right" data-jos_delay="0.9">
                            <div class="h-full rounded-[10px] border-2 border-ColorBlack p-[30px] transition-all duration-300 hover:-rotate-3 hover:bg-white">
                                <img src="{{ asset('assets/img/icons/icon-violet-feature-4.svg') }}" alt="icon-violet-feature-4" width="57" height="69" class="mb-[30px] h-[70px] w-auto" />
                                <div class="mb-4 text-2xl font-semibold -tracking-[0.5px] text-ColorBlack">
                                    Lifelong Learning
                                </div>
                                <p class="line-clamp-3">
                                    We create articles, tutorials & webinars with
                                    trailblazers in the web community.
                                </p>
                            </div>
                        </div>
                        <!-- Features Item -->
                    </div>
                    <!-- Feature List -->
                </div>
                <!-- Section Container -->
            </div>
            <!-- Section Space -->

            <!-- Feature Element - 1 -->
            <img src="{{ asset('assets/img/elements/home-4-features-element.svg') }}" alt="home-4-features-element" width="220" height="180" class="absolute left-[164px] top-[35px] -z-10" />
        </div>
        <!-- Section Background -->

        <!-- Background Divider Shape -->
        <div class="min-h-[65px] w-full rotate-180 bg-[url('../img/elements/home-4-divider-shape-1.svg')] bg-contain bg-[center_bottom] bg-repeat-x"></div>
    </section>
    <!-- Features Section End -->

    <!-- Content Section Start -->
    <section class="section-content" id="section-about">
        <!-- Section Space -->
        <div class="section-space">
            <!-- Section Container -->
            <div class="container-default">
                <!-- Content Area -->
                <div class="grid items-center gap-x-[60px] gap-y-10 md:grid-cols-[0.8fr_minmax(0,_1fr)] lg:gap-x-20 xl:gap-x-[110px]">
                    <!-- Content Block -->
                    <div class="jos order-2" data-jos_animation="fade-right">
                        <!-- Section Wrapper -->
                        <div>
                            <!-- Section Block -->
                            <div class="mb-5">
                                <h2 class="font-DmSans -tracking-[1px]">
                                    Propel your career & expand your knowledge at any level
                                </h2>
                            </div>
                            <!-- Section Block -->
                        </div>
                        <!-- Section Wrapper -->
                        <p>
                            Masco is an online course class that provides various
                            categories of courses ranging from design, photography,
                            marking, and many more. With more than 250 schools and
                            colleges and 50,000+ students
                        </p>
                        <p>
                            from multiple countries. With this curriculum, it is hoped
                            that students can learn with experts in their respective
                            fields anytime & anywhere.
                        </p>
                        <div class="mt-[50px]">
                            <a href="#" class="group relative z-10 inline-block">
                                <div class="btn is-large is-rounded is-violet">
                                    Explore more
                                </div>
                                <div class="is-rounded absolute inset-0 -z-10 translate-y-[5px] bg-ColorBlack transition-all duration-300 ease-linear group-hover:translate-y-0"></div>
                            </a>
                        </div>
                    </div>
                    <!-- Content Block -->

                    <!-- Content Image Block -->
                    <div class="jos order-1 flex justify-center" data-jos_animation="fade-left">
                        <img src="{{ asset('assets/img/th-4/content-img-1.png') }}" alt="content-img-1" width="450" height="532" />
                    </div>
                    <!-- Content Image Block -->
                </div>
                <!-- Content Area -->
            </div>
            <!-- Section Container -->
        </div>
        <!-- Section Space -->
    </section>
    <!-- Content Section End -->

    <!-- Ticket Slider Section Start -->
    <div class="section-topic">
        <div class="relative">
            <!-- Section Space -->
            <div class="section-space-bottom">
                <!-- Section Container -->
                <div class="container-default">
                    <!-- Section Content Wrapper -->
                    <div class="jos mb-[60px] xl:mb-20">
                        <!-- Section Content Block -->
                        <div class="mx-auto max-w-[636px]">
                            <h2 class="text-center font-DmSans -tracking-[1px]">
                                Here are numerous topics that will enhance your skills
                            </h2>
                        </div>
                        <!-- Section Content Block -->
                    </div>
                    <!-- Section Content Wrapper -->
                </div>
                <!-- Section Container -->

                <!-- Ticket Slider Area -->
                <div>
                    <!-- Ticket Wrapper -->
                    <div class="flex flex-row flex-nowrap py-5">
                        <!-- Ticket Content -->
                        <div class="horizontal-slide-from-right-to-left mx-3 flex flex-row flex-nowrap items-start justify-start gap-x-6 whitespace-nowrap">
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                iOS Development
                            </div>
                            <!-- Ticket Tag -->
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                Leadership Skills
                            </div>
                            <!-- Ticket Tag -->
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                Business
                            </div>
                            <!-- Ticket Tag -->
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                Photography
                            </div>
                            <!-- Ticket Tag -->
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                Computer Science
                            </div>
                            <!-- Ticket Tag -->
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                Art & Music
                            </div>
                            <!-- Ticket Tag -->
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                Information Technology
                            </div>
                            <!-- Ticket Tag -->
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                Web Development
                            </div>
                            <!-- Ticket Tag -->
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                UI/UX Design
                            </div>
                            <!-- Ticket Tag -->
                        </div>
                        <!-- Ticket Content -->
                        <!-- Ticket Content -->
                        <div class="horizontal-slide-from-right-to-left mx-3 flex flex-row flex-nowrap items-start justify-start gap-x-6 whitespace-nowrap">
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                Digital Marketing
                            </div>
                            <!-- Ticket Tag -->
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                Lifestyle
                            </div>
                            <!-- Ticket Tag -->
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                Healthcare
                            </div>
                            <!-- Ticket Tag -->
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                Programming Languages
                            </div>
                            <!-- Ticket Tag -->
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                Time Management
                            </div>
                            <!-- Ticket Tag -->
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                iOS Development
                            </div>
                            <!-- Ticket Tag -->
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                Leadership Skills
                            </div>
                            <!-- Ticket Tag -->
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                Business
                            </div>
                            <!-- Ticket Tag -->
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                Photography
                            </div>
                            <!-- Ticket Tag -->
                        </div>
                        <!-- Ticket Content -->
                        <!-- Ticket Content -->
                        <div class="horizontal-slide-from-right-to-left mx-3 flex flex-row flex-nowrap items-start justify-start gap-x-6 whitespace-nowrap">
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                iOS Development
                            </div>
                            <!-- Ticket Tag -->
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                Leadership Skills
                            </div>
                            <!-- Ticket Tag -->
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                Business
                            </div>
                            <!-- Ticket Tag -->
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                Photography
                            </div>
                            <!-- Ticket Tag -->
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                Computer Science
                            </div>
                            <!-- Ticket Tag -->
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                Art & Music
                            </div>
                            <!-- Ticket Tag -->
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                Information Technology
                            </div>
                            <!-- Ticket Tag -->
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                Web Development
                            </div>
                            <!-- Ticket Tag -->
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                UI/UX Design
                            </div>
                            <!-- Ticket Tag -->
                        </div>
                        <!-- Ticket Content -->
                        <!-- Ticket Content -->
                        <div class="horizontal-slide-from-right-to-left mx-3 flex flex-row flex-nowrap items-start justify-start gap-x-6 whitespace-nowrap">
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                Digital Marketing
                            </div>
                            <!-- Ticket Tag -->
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                Lifestyle
                            </div>
                            <!-- Ticket Tag -->
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                Healthcare
                            </div>
                            <!-- Ticket Tag -->
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                Programming Languages
                            </div>
                            <!-- Ticket Tag -->
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                Time Management
                            </div>
                            <!-- Ticket Tag -->
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                iOS Development
                            </div>
                            <!-- Ticket Tag -->
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                Leadership Skills
                            </div>
                            <!-- Ticket Tag -->
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                Business
                            </div>
                            <!-- Ticket Tag -->
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                Photography
                            </div>
                            <!-- Ticket Tag -->
                        </div>
                        <!-- Ticket Content -->
                        <!-- Ticket Content -->
                        <div class="horizontal-slide-from-right-to-left mx-3 flex flex-row flex-nowrap items-start justify-start gap-x-6 whitespace-nowrap">
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                iOS Development
                            </div>
                            <!-- Ticket Tag -->
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                Leadership Skills
                            </div>
                            <!-- Ticket Tag -->
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                Business
                            </div>
                            <!-- Ticket Tag -->
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                Photography
                            </div>
                            <!-- Ticket Tag -->
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                Computer Science
                            </div>
                            <!-- Ticket Tag -->
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                Art & Music
                            </div>
                            <!-- Ticket Tag -->
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                Information Technology
                            </div>
                            <!-- Ticket Tag -->
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                Web Development
                            </div>
                            <!-- Ticket Tag -->
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                UI/UX Design
                            </div>
                            <!-- Ticket Tag -->
                        </div>
                        <!-- Ticket Content -->
                        <!-- Ticket Content -->
                        <div class="horizontal-slide-from-right-to-left mx-3 flex flex-row flex-nowrap items-start justify-start gap-x-6 whitespace-nowrap">
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                Digital Marketing
                            </div>
                            <!-- Ticket Tag -->
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                Lifestyle
                            </div>
                            <!-- Ticket Tag -->
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                Healthcare
                            </div>
                            <!-- Ticket Tag -->
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                Programming Languages
                            </div>
                            <!-- Ticket Tag -->
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                Time Management
                            </div>
                            <!-- Ticket Tag -->
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                iOS Development
                            </div>
                            <!-- Ticket Tag -->
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                Leadership Skills
                            </div>
                            <!-- Ticket Tag -->
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                Business
                            </div>
                            <!-- Ticket Tag -->
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                Photography
                            </div>
                            <!-- Ticket Tag -->
                        </div>
                        <!-- Ticket Content -->
                    </div>
                    <!-- Ticket Wrapper -->
                    <!-- Ticket Wrapper -->
                    <div class="flex flex-row flex-nowrap py-5">
                        <!-- Ticket Content -->
                        <div class="horizontal-slide-from-left-to-right mx-3 flex flex-row flex-nowrap items-start justify-start gap-x-6 whitespace-nowrap">
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                iOS Development
                            </div>
                            <!-- Ticket Tag -->
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                Leadership Skills
                            </div>
                            <!-- Ticket Tag -->
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                Business
                            </div>
                            <!-- Ticket Tag -->
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                Photography
                            </div>
                            <!-- Ticket Tag -->
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                Computer Science
                            </div>
                            <!-- Ticket Tag -->
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                Art & Music
                            </div>
                            <!-- Ticket Tag -->
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                Information Technology
                            </div>
                            <!-- Ticket Tag -->
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                Web Development
                            </div>
                            <!-- Ticket Tag -->
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                UI/UX Design
                            </div>
                            <!-- Ticket Tag -->
                        </div>
                        <!-- Ticket Content -->
                        <!-- Ticket Content -->
                        <div class="horizontal-slide-from-left-to-right mx-3 flex flex-row flex-nowrap items-start justify-start gap-x-6 whitespace-nowrap">
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                Digital Marketing
                            </div>
                            <!-- Ticket Tag -->
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                Lifestyle
                            </div>
                            <!-- Ticket Tag -->
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                Healthcare
                            </div>
                            <!-- Ticket Tag -->
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                Programming Languages
                            </div>
                            <!-- Ticket Tag -->
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                Time Management
                            </div>
                            <!-- Ticket Tag -->
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                iOS Development
                            </div>
                            <!-- Ticket Tag -->
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                Leadership Skills
                            </div>
                            <!-- Ticket Tag -->
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                Business
                            </div>
                            <!-- Ticket Tag -->
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                Photography
                            </div>
                            <!-- Ticket Tag -->
                        </div>
                        <!-- Ticket Content -->
                        <!-- Ticket Content -->
                        <div class="horizontal-slide-from-left-to-right mx-3 flex flex-row flex-nowrap items-start justify-start gap-x-6 whitespace-nowrap">
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                iOS Development
                            </div>
                            <!-- Ticket Tag -->
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                Leadership Skills
                            </div>
                            <!-- Ticket Tag -->
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                Business
                            </div>
                            <!-- Ticket Tag -->
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                Photography
                            </div>
                            <!-- Ticket Tag -->
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                Computer Science
                            </div>
                            <!-- Ticket Tag -->
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                Art & Music
                            </div>
                            <!-- Ticket Tag -->
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                Information Technology
                            </div>
                            <!-- Ticket Tag -->
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                Web Development
                            </div>
                            <!-- Ticket Tag -->
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                UI/UX Design
                            </div>
                            <!-- Ticket Tag -->
                        </div>
                        <!-- Ticket Content -->
                        <!-- Ticket Content -->
                        <div class="horizontal-slide-from-left-to-right mx-3 flex flex-row flex-nowrap items-start justify-start gap-x-6 whitespace-nowrap">
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                Digital Marketing
                            </div>
                            <!-- Ticket Tag -->
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                Lifestyle
                            </div>
                            <!-- Ticket Tag -->
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                Healthcare
                            </div>
                            <!-- Ticket Tag -->
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                Programming Languages
                            </div>
                            <!-- Ticket Tag -->
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                Time Management
                            </div>
                            <!-- Ticket Tag -->
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                iOS Development
                            </div>
                            <!-- Ticket Tag -->
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                Leadership Skills
                            </div>
                            <!-- Ticket Tag -->
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                Business
                            </div>
                            <!-- Ticket Tag -->
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                Photography
                            </div>
                            <!-- Ticket Tag -->
                        </div>
                        <!-- Ticket Content -->
                        <!-- Ticket Content -->
                        <div class="horizontal-slide-from-left-to-right mx-3 flex flex-row flex-nowrap items-start justify-start gap-x-6 whitespace-nowrap">
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                iOS Development
                            </div>
                            <!-- Ticket Tag -->
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                Leadership Skills
                            </div>
                            <!-- Ticket Tag -->
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                Business
                            </div>
                            <!-- Ticket Tag -->
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                Photography
                            </div>
                            <!-- Ticket Tag -->
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                Computer Science
                            </div>
                            <!-- Ticket Tag -->
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                Art & Music
                            </div>
                            <!-- Ticket Tag -->
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                Information Technology
                            </div>
                            <!-- Ticket Tag -->
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                Web Development
                            </div>
                            <!-- Ticket Tag -->
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                UI/UX Design
                            </div>
                            <!-- Ticket Tag -->
                        </div>
                        <!-- Ticket Content -->
                        <!-- Ticket Content -->
                        <div class="horizontal-slide-from-left-to-right mx-3 flex flex-row flex-nowrap items-start justify-start gap-x-6 whitespace-nowrap">
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                Digital Marketing
                            </div>
                            <!-- Ticket Tag -->
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                Lifestyle
                            </div>
                            <!-- Ticket Tag -->
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                Healthcare
                            </div>
                            <!-- Ticket Tag -->
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                Programming Languages
                            </div>
                            <!-- Ticket Tag -->
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                Time Management
                            </div>
                            <!-- Ticket Tag -->
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                iOS Development
                            </div>
                            <!-- Ticket Tag -->
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                Leadership Skills
                            </div>
                            <!-- Ticket Tag -->
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                Business
                            </div>
                            <!-- Ticket Tag -->
                            <!-- Ticket Tag -->
                            <div class="relative z-10 block rounded-[50px] border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] px-6 py-2 text-center text-base font-bold text-ColorBlack md:py-4">
                                Photography
                            </div>
                            <!-- Ticket Tag -->
                        </div>
                        <!-- Ticket Content -->
                    </div>
                    <!-- Ticket Wrapper -->
                </div>
                <!-- Ticket Slider Area -->
            </div>
            <!-- Section Space -->
        </div>
    </div>
    <!-- Ticket Slider Section End -->

    <!-- Course Section Start -->
    <section class="course-section" id="section-course">
        <div class="relative">
            <!-- Section Background -->
            <div class="bg-[#F5EFEB]">
                <!-- Section Space -->
                <div class="section-space">
                    <!-- Section Container -->
                    <div class="container-default">
                        <!-- Section Content Wrapper -->
                        <div class="jos mx-auto mb-[60px] grid items-center justify-between gap-5 text-center md:grid-cols-[1fr_minmax(0,_0.85fr)] md:gap-[60px] md:text-left xl:mb-20 xl:gap-28 xxl:gap-[244px]">
                            <!-- Section Content Block -->
                            <div>
                                <h2 class="font-DmSans -tracking-[1px]">
                                    Browse our courses that are just right for you
                                </h2>
                            </div>
                            <!-- Section Content Block -->

                            <!-- Section Text -->
                            <p>
                                Choose from over 20,700 courses and learning paths, with
                                dozens added every week. Top it off with courses that
                                round out your skills and enrich your day-to-day.
                            </p>
                            <!-- Section Text -->
                        </div>
                        <!-- Section Content Wrapper -->

                        <!-- Course List -->
                        <div class="grid gap-6 md:grid-cols-2 xl:grid-cols-3">
                            <!-- Course Item -->
                            <div class="jos" data-jos_delay="0">
                                <div class="group flex flex-col gap-y-6 rounded-[10px] bg-white p-6 lg:p-[30px]">
                                    <div class="overflow-hidden rounded-[10px]">
                                        <img src="{{ asset('assets/img/th-4/course-img-1.jpg') }}" alt="course-img-1" width="356" height="250" class="h-auto w-full transition-all duration-300 group-hover:scale-105" />
                                    </div>
                                    <div class="flex flex-wrap justify-between gap-4 text-sm font-semibold">
                                        <ul class="flex items-center gap-x-[22px]">
                                            <li class="relative after:absolute after:left-[calc(100%+_10px)] after:top-1/2 after:h-[6px] after:w-[6px] after:-translate-y-1/2 after:rounded-[50%] after:bg-ColorBlack/80 last:after:hidden">
                                                <a href="#" class="hover:text-ColorViolet">Digital Marketing</a>
                                            </li>
                                            <li class="relative after:absolute after:left-[calc(100%+_10px)] after:top-1/2 after:h-[6px] after:w-[6px] after:-translate-y-1/2 after:rounded-[50%] after:bg-ColorBlack/80 last:after:hidden">
                                                <span>942 Courses</span>
                                            </li>
                                        </ul>
                                        <div>
                                            <span class="text-ColorYellow"><i class="fa-solid fa-star"></i></span>
                                            4.8
                                        </div>
                                    </div>
                                    <a href="#" class="line-clamp-2 text-xl font-bold leading-[1.25] text-ColorBlack group-hover:text-ColorViolet lg:text-2xl">Digital marketing course gives you modern skills</a>
                                    <button class="btn is-large is-rounded mt-auto border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] text-ColorBlack hover:bg-ColorViolet hover:text-white">
                                        Purchase only $10.00
                                    </button>
                                </div>
                            </div>
                            <!-- Course Item -->
                            <!-- Course Item -->
                            <div class="jos" data-jos_delay="0.3">
                                <div class="group flex flex-col gap-y-6 rounded-[10px] bg-white p-6 lg:p-[30px]">
                                    <div class="overflow-hidden rounded-[10px]">
                                        <img src="{{ asset('assets/img/th-4/course-img-2.jpg') }}" alt="course-img-2" width="356" height="250" class="h-auto w-full transition-all duration-300 group-hover:scale-105" />
                                    </div>
                                    <div class="flex flex-wrap justify-between gap-4 text-sm font-semibold">
                                        <ul class="flex items-center gap-x-[22px]">
                                            <li class="relative after:absolute after:left-[calc(100%+_10px)] after:top-1/2 after:h-[6px] after:w-[6px] after:-translate-y-1/2 after:rounded-[50%] after:bg-ColorBlack/80 last:after:hidden">
                                                <a href="#" class="hover:text-ColorViolet">Photography</a>
                                            </li>
                                            <li class="relative after:absolute after:left-[calc(100%+_10px)] after:top-1/2 after:h-[6px] after:w-[6px] after:-translate-y-1/2 after:rounded-[50%] after:bg-ColorBlack/80 last:after:hidden">
                                                <span>124 Courses</span>
                                            </li>
                                        </ul>
                                        <div>
                                            <span class="text-ColorYellow"><i class="fa-solid fa-star"></i></span>
                                            3.5
                                        </div>
                                    </div>
                                    <a href="#" class="line-clamp-2 text-xl font-bold leading-[1.25] text-ColorBlack group-hover:text-ColorViolet lg:text-2xl">Improve photography skills & you'll learn to use
                                        lenses</a>
                                    <button class="btn is-large is-rounded mt-auto border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] text-ColorBlack hover:bg-ColorViolet hover:text-white">
                                        Purchase for free
                                    </button>
                                </div>
                            </div>
                            <!-- Course Item -->
                            <!-- Course Item -->
                            <div class="jos" data-jos_delay="0.6">
                                <div class="group flex flex-col gap-y-6 rounded-[10px] bg-white p-6 lg:p-[30px]">
                                    <div class="overflow-hidden rounded-[10px]">
                                        <img src="{{ asset('assets/img/th-4/course-img-3.jpg') }}" alt="course-img-3" width="356" height="250" class="h-auto w-full transition-all duration-300 group-hover:scale-105" />
                                    </div>
                                    <div class="flex flex-wrap justify-between gap-4 text-sm font-semibold">
                                        <ul class="flex items-center gap-x-[22px]">
                                            <li class="relative after:absolute after:left-[calc(100%+_10px)] after:top-1/2 after:h-[6px] after:w-[6px] after:-translate-y-1/2 after:rounded-[50%] after:bg-ColorBlack/80 last:after:hidden">
                                                <a href="#" class="hover:text-ColorViolet">C# Language</a>
                                            </li>
                                            <li class="relative after:absolute after:left-[calc(100%+_10px)] after:top-1/2 after:h-[6px] after:w-[6px] after:-translate-y-1/2 after:rounded-[50%] after:bg-ColorBlack/80 last:after:hidden">
                                                <span>22 Courses</span>
                                            </li>
                                        </ul>
                                        <div>
                                            <span class="text-ColorYellow"><i class="fa-solid fa-star"></i></span>
                                            5.0
                                        </div>
                                    </div>
                                    <a href="#" class="line-clamp-2 text-xl font-bold leading-[1.25] text-ColorBlack group-hover:text-ColorViolet lg:text-2xl">Programing language helps to solve problems
                                        logically</a>
                                    <button class="btn is-large is-rounded mt-auto border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] text-ColorBlack hover:bg-ColorViolet hover:text-white">
                                        Purchase only $650.00
                                    </button>
                                </div>
                            </div>
                            <!-- Course Item -->
                            <!-- Course Item -->
                            <div class="jos" data-jos_delay="0.9">
                                <div class="group flex flex-col gap-y-6 rounded-[10px] bg-white p-6 lg:p-[30px]">
                                    <div class="overflow-hidden rounded-[10px]">
                                        <img src="{{ asset('assets/img/th-4/course-img-4.jpg') }}" alt="course-img-4" width="356" height="250" class="h-auto w-full transition-all duration-300 group-hover:scale-105" />
                                    </div>
                                    <div class="flex flex-wrap justify-between gap-4 text-sm font-semibold">
                                        <ul class="flex items-center gap-x-[22px]">
                                            <li class="relative after:absolute after:left-[calc(100%+_10px)] after:top-1/2 after:h-[6px] after:w-[6px] after:-translate-y-1/2 after:rounded-[50%] after:bg-ColorBlack/80 last:after:hidden">
                                                <a href="#" class="hover:text-ColorViolet">Art & Music</a>
                                            </li>
                                            <li class="relative after:absolute after:left-[calc(100%+_10px)] after:top-1/2 after:h-[6px] after:w-[6px] after:-translate-y-1/2 after:rounded-[50%] after:bg-ColorBlack/80 last:after:hidden">
                                                <span>502 Courses</span>
                                            </li>
                                        </ul>
                                        <div>
                                            <span class="text-ColorYellow"><i class="fa-solid fa-star"></i></span>
                                            4.9
                                        </div>
                                    </div>
                                    <a href="#" class="line-clamp-2 text-xl font-bold leading-[1.25] text-ColorBlack group-hover:text-ColorViolet lg:text-2xl">This course improves your skills in a variety of
                                        ways</a>
                                    <button class="btn is-large is-rounded mt-auto border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] text-ColorBlack hover:bg-ColorViolet hover:text-white">
                                        Purchase for free
                                    </button>
                                </div>
                            </div>
                            <!-- Course Item -->
                            <!-- Course Item -->
                            <div class="jos" data-jos_delay="1.2">
                                <div class="group flex flex-col gap-y-6 rounded-[10px] bg-white p-6 lg:p-[30px]">
                                    <div class="overflow-hidden rounded-[10px]">
                                        <img src="{{ asset('assets/img/th-4/course-img-5.jpg') }}" alt="course-img-5" width="356" height="250" class="h-auto w-full transition-all duration-300 group-hover:scale-105" />
                                    </div>
                                    <div class="flex flex-wrap justify-between gap-4 text-sm font-semibold">
                                        <ul class="flex items-center gap-x-[22px]">
                                            <li class="relative after:absolute after:left-[calc(100%+_10px)] after:top-1/2 after:h-[6px] after:w-[6px] after:-translate-y-1/2 after:rounded-[50%] after:bg-ColorBlack/80 last:after:hidden">
                                                <a href="#" class="hover:text-ColorViolet">Lifestyle</a>
                                            </li>
                                            <li class="relative after:absolute after:left-[calc(100%+_10px)] after:top-1/2 after:h-[6px] after:w-[6px] after:-translate-y-1/2 after:rounded-[50%] after:bg-ColorBlack/80 last:after:hidden">
                                                <span>832 Courses</span>
                                            </li>
                                        </ul>
                                        <div>
                                            <span class="text-ColorYellow"><i class="fa-solid fa-star"></i></span>
                                            3.0
                                        </div>
                                    </div>
                                    <a href="#" class="line-clamp-2 text-xl font-bold leading-[1.25] text-ColorBlack group-hover:text-ColorViolet lg:text-2xl">It helps improve self-esteem & increase
                                        life-satisfaction</a>
                                    <button class="btn is-large is-rounded mt-auto border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] text-ColorBlack hover:bg-ColorViolet hover:text-white">
                                        Purchase only $45.00
                                    </button>
                                </div>
                            </div>
                            <!-- Course Item -->
                            <!-- Course Item -->
                            <div class="jos" data-jos_delay="1.5">
                                <div class="group flex flex-col gap-y-6 rounded-[10px] bg-white p-6 lg:p-[30px]">
                                    <div class="overflow-hidden rounded-[10px]">
                                        <img src="{{ asset('assets/img/th-4/course-img-6.jpg') }}" alt="course-img-6" width="356" height="250" class="h-auto w-full transition-all duration-300 group-hover:scale-105" />
                                    </div>
                                    <div class="flex flex-wrap justify-between gap-4 text-sm font-semibold">
                                        <ul class="flex items-center gap-x-[22px]">
                                            <li class="relative after:absolute after:left-[calc(100%+_10px)] after:top-1/2 after:h-[6px] after:w-[6px] after:-translate-y-1/2 after:rounded-[50%] after:bg-ColorBlack/80 last:after:hidden">
                                                <a href="#" class="hover:text-ColorViolet">UI/UX Design</a>
                                            </li>
                                            <li class="relative after:absolute after:left-[calc(100%+_10px)] after:top-1/2 after:h-[6px] after:w-[6px] after:-translate-y-1/2 after:rounded-[50%] after:bg-ColorBlack/80 last:after:hidden">
                                                <span>649 Courses</span>
                                            </li>
                                        </ul>
                                        <div>
                                            <span class="text-ColorYellow"><i class="fa-solid fa-star"></i></span>
                                            4.0
                                        </div>
                                    </div>
                                    <a href="#" class="line-clamp-2 text-xl font-bold leading-[1.25] text-ColorBlack group-hover:text-ColorViolet lg:text-2xl">UI/UX design teaches how to make a product attractive
                                    </a>
                                    <button class="btn is-large is-rounded mt-auto border-2 border-b-[5px] border-ColorBlack bg-[#F5EFEB] text-ColorBlack hover:bg-ColorViolet hover:text-white">
                                        Purchase only $250.00
                                    </button>
                                </div>
                            </div>
                            <!-- Course Item -->
                        </div>
                        <!-- Course List -->
                    </div>
                    <!-- Section Container -->
                </div>
                <!-- Section Space -->
            </div>
            <!-- Background Divider Shape -->
            <div class="absolute top-0 min-h-[65px] w-full bg-[url('../img/elements/home-4-divider-shape-3.svg')] bg-contain bg-[center_top] bg-repeat-x"></div>
            <!-- Background Divider Shape -->
            <div class="-mt-px min-h-[65px] w-full bg-[url('../img/elements/home-4-divider-shape-4.svg')] bg-contain bg-[center_top] bg-repeat-x"></div>
            <!-- Section Background -->
        </div>
    </section>
    <!-- Course Section End -->

    <!-- Content Section Start -->
    <section class="section-content">
        <!-- Section Space -->
        <div class="section-space">
            <!-- Section Container -->
            <div class="container-default">
                <!-- Content Area -->
                <div class="grid items-center gap-x-[60px] gap-y-10 md:grid-cols-[1fr_minmax(0,_0.8fr)] lg:gap-x-20 xl:gap-x-[110px]">
                    <!-- Content Block -->
                    <div class="jos order-1" data-jos_animation="fade-right">
                        <!-- Section Wrapper -->
                        <div>
                            <!-- Section Block -->
                            <div class="mb-5">
                                <h2 class="font-DmSans -tracking-[1px]">
                                    Share your knowledge & experience with others
                                </h2>
                            </div>
                            <!-- Section Block -->
                        </div>
                        <!-- Section Wrapper -->
                        <p>
                            We believe everyone has something to give. Share your unique
                            skills & experience with students around the world by
                            teaching free or paid.
                        </p>
                        <ul class="flex flex-col gap-5 font-semibold text-ColorBlack">
                            <li>
                                <span class="mr-3 inline-block text-xl"><i class="fa-solid fa-badge-check"></i></span>
                                Free version can save unlimited workouts & custom routines
                            </li>
                            <li>
                                <span class="mr-3 inline-block text-xl"><i class="fa-solid fa-badge-check"></i></span>
                                Track progress with graphs and automatically back up data
                            </li>
                            <li>
                                <span class="mr-3 inline-block text-xl"><i class="fa-solid fa-badge-check"></i></span>
                                Connect easily with instructor for tips, feedback and
                                support
                            </li>
                        </ul>
                        <div class="mt-[50px]">
                            <a href="#" class="group relative z-10 inline-block">
                                <div class="btn is-large is-rounded is-violet">
                                    Become an instructor
                                </div>
                                <div class="is-rounded absolute inset-0 -z-10 translate-y-[5px] bg-ColorBlack transition-all duration-300 ease-linear group-hover:translate-y-0"></div>
                            </a>
                        </div>
                    </div>
                    <!-- Content Block -->

                    <!-- Content Image Block -->
                    <div class="jos order-2 flex justify-center" data-jos_animation="fade-left">
                        <img src="{{ asset('assets/img/th-4/content-img-2.png') }}" alt="content-img-1" width="450" height="532" />
                    </div>
                    <!-- Content Image Block -->
                </div>
                <!-- Content Area -->
            </div>
            <!-- Section Container -->
        </div>
        <!-- Section Space -->
    </section>
    <!-- Content Section End -->

    <!-- Testimonial Section Start -->
    <section class="section-testimonial">
        <div class="relative">
            <!-- Section Container -->
            <div class="container-default">
                <!-- Section Content Wrapper -->
                <div class="jos mb-[60px] xl:mb-20">
                    <!-- Section Content Block -->
                    <div class="mx-auto max-w-[670px]">
                        <h2 class="text-center font-DmSans -tracking-[1px]">
                            Learners like you achieve their goals through our courses
                        </h2>
                    </div>
                    <!-- Section Content Block -->

                    <!-- Testimonial Area -->
                    <div class="grid gap-x-6 md:grid-cols-2">
                        <!-- Testimonial Item  -->
                        <div class="flex flex-col gap-y-6 rounded-[10px] p-[30px]">
                            <div class="flex gap-x-2 text-3xl text-ColorYellow">
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                            </div>
                            <p class="mb-0 text-ColorBlack">
                                "The online class professionals were truly a lifesaver.
                                Without their expertise and kind help I could not have
                                achieved the best results in my class. I followed what
                                they said and they helped me get the best grades."
                            </p>
                            <div class="flex items-center gap-[10px]">
                                <img src="{{ asset('assets/img/th-4/testimonial-avatar-1.png') }}" alt="testimonial-avatar-1" width="69" height="60" />
                                <div>
                                    <span class="block font-semibold text-ColorBlack">Kristin Watson</span>
                                    <span class="text-sm leading-[1.42]">Student of Cambridge University, UK</span>
                                </div>
                            </div>
                        </div>
                        <!-- Testimonial Item  -->
                        <!-- Testimonial Item  -->
                        <div class="flex flex-col gap-y-6 rounded-[10px] p-[30px]">
                            <div class="flex gap-x-2 text-3xl text-ColorYellow">
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                            </div>
                            <p class="mb-0 text-ColorBlack">
                                "I actually wanted to learn more than what was taught. I
                                knew I couldn't be a designer, but I wanted to at least
                                understand some of the basics. Then I bought UI / UX
                                design course & completed the whole course now I am a good
                                designer.”
                            </p>
                            <div class="flex items-center gap-[10px]">
                                <img src="{{ asset('assets/img/th-4/testimonial-avatar-2.png') }}" alt="testimonial-avatar-2" width="69" height="60" />
                                <div>
                                    <span class="block font-semibold text-ColorBlack">Kristin Watson</span>
                                    <span class="text-sm leading-[1.42]">Student of Cambridge University, UK</span>
                                </div>
                            </div>
                        </div>
                        <!-- Testimonial Item  -->
                    </div>
                    <!-- Testimonial Area -->
                </div>
                <!-- Section Content Wrapper -->
            </div>
            <!-- Section Container -->

            <!-- Background Divider Shape -->
            <div class="min-h-[65px] w-full bg-[url('../img/elements/home-4-divider-shape-1.svg')] bg-contain bg-[center_bottom] bg-repeat-x"></div>
        </div>
    </section>
    <!-- Testimonial Section End -->

    <!-- FAQ Section Start -->
    <section class="section-FAQ" id="section-faq">
        <div class="realative">
            <!-- Section Background -->
            <div class="bg-[#F5EFEB]">
                <!-- Section Space -->
                <div class="section-space">
                    <!-- Section Container -->
                    <div class="container-default">
                        <!-- FAQ Area -->
                        <div class="grid items-center gap-x-6 gap-y-10 md:grid-cols-2">
                            <!-- Content Block -->
                            <div class="jos" data-jos_animation="fade-right">
                                <!-- Section Wrapper -->
                                <div>
                                    <!-- Section Block -->
                                    <div class="mb-5">
                                        <h2 class="font-DmSans -tracking-[1px]">
                                            Frequently asked questions about our courses
                                        </h2>
                                    </div>
                                    <!-- Section Block -->
                                </div>
                                <!-- Section Wrapper -->
                                <p>
                                    We encourage our students and teachers to ask us any
                                    questions regarding our courses and classes. Our skilled
                                    mentors are ready to answer all your questions 24/7.
                                </p>
                            </div>
                            <!-- Content Block -->

                            <!-- FAQ Block -->
                            <div class="jos flex justify-center" data-jos_animation="fade-left">
                                <!-- Accordion List -->
                                <ul class="mx-auto max-w-[1076px] rounded-[10px] border-4 border-ColorBlack">
                                    <!-- Accordion Item -->
                                    <li class="accordion-item active last:border-2-0 overflow-hidden border-b-4 border-ColorBlack p-[30px]">
                                        <!-- Accordion Header -->
                                        <div class="accordion-header relative pr-8 text-xl font-semibold text-ColorBlack">
                                            <button class="flex-1 text-left">
                                                Q. How do I register for the online courses?
                                            </button>
                                            <div class="accordion-icon-2 absolute right-0 top-0">
                                                <i class="fa-solid fa-chevron-down"></i>
                                            </div>
                                        </div>
                                        <!-- Accordion Header -->
                                        <!-- Accordion Body -->
                                        <div class="accordion-body max-w-[826px] opacity-80">
                                            <p class="pt-5">
                                                Click the "register yourself" button to go to the
                                                online catalog. Click the "add to cart" link for
                                                one or more packages of courses.
                                            </p>
                                        </div>
                                        <!-- Accordion Body -->
                                    </li>
                                    <!-- Accordion Item -->
                                    <!-- Accordion Item -->
                                    <li class="accordion-item overflow-hidden border-b-4 border-ColorBlack p-[30px] last:border-b-0">
                                        <!-- Accordion Header -->
                                        <div class="accordion-header relative pr-8 text-xl font-semibold text-ColorBlack">
                                            <button class="flex-1 text-left">
                                                Q. What is the time commitment for the courses?
                                            </button>
                                            <div class="accordion-icon-2 absolute right-0 top-0">
                                                <i class="fa-solid fa-chevron-down"></i>
                                            </div>
                                        </div>
                                        <!-- Accordion Header -->
                                        <!-- Accordion Body -->
                                        <div class="accordion-body max-w-[826px] opacity-80">
                                            <p class="pt-5">
                                                Click the "register yourself" button to go to the
                                                online catalog. Click the "add to cart" link for
                                                one or more packages of courses.
                                            </p>
                                        </div>
                                        <!-- Accordion Body -->
                                    </li>
                                    <!-- Accordion Item -->
                                    <!-- Accordion Item -->
                                    <li class="accordion-item overflow-hidden border-b-4 border-ColorBlack p-[30px] last:border-b-0">
                                        <!-- Accordion Header -->
                                        <div class="accordion-header relative pr-8 text-xl font-semibold text-ColorBlack">
                                            <button class="flex-1 text-left">
                                                Q. Can I receive college credit for these courses?
                                            </button>
                                            <div class="accordion-icon-2 absolute right-0 top-0">
                                                <i class="fa-solid fa-chevron-down"></i>
                                            </div>
                                        </div>
                                        <!-- Accordion Header -->
                                        <!-- Accordion Body -->
                                        <div class="accordion-body max-w-[826px] opacity-80">
                                            <p class="pt-5">
                                                Click the "register yourself" button to go to the
                                                online catalog. Click the "add to cart" link for
                                                one or more packages of courses.
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
            </div>
            <!-- Section Background -->
            <!-- Background Divider Shape -->
            <div class="min-h-[65px] w-full rotate-180 bg-[url('../img/elements/home-4-divider-shape-1.svg')] bg-contain bg-[center_bottom] bg-repeat-x"></div>
        </div>
    </section>
    <!-- FAQ Section End -->

    <!-- Newsletter Section Start -->
    <section class="section-newsletter">
        <div class="relative">
            <!-- Section Space -->
            <div class="section-space">
                <!-- Section Container -->
                <div class="container-default">
                    <!-- Newsletter Area -->
                    <div class="jos mx-auto flex max-w-[720px] flex-col justify-center text-center">
                        <h2 class="mb-5 font-DmSans -tracking-[1px]">
                            Start learning today and expand your knowledge at any level
                        </h2>
                        <p class="mb-[50px]">
                            We have easily downloadable learning app on any device and
                            anywhere to experience an exclusive e-learning platform for
                            world-class education.
                        </p>
                        <div class="flex flex-wrap justify-center gap-5">
                            <a href="#" aria-label="apple-app-store">
                                <img src="{{ asset('assets/img/icons/icon-round-apple-app-store.svg') }}" alt="icon-round-apple-app-store" width="188" height="60" />
                            </a>
                            <a href="#" aria-label="google-play-store">
                                <img src="{{ asset('assets/img/icons/icon-round-google-play-store.svg') }}" alt="icon-round-google-play-store" width="188" height="60" />
                            </a>
                        </div>
                    </div>
                    <!-- Newsletter Area -->
                </div>
                <!-- Section Container -->
            </div>
            <!-- Section Space -->

            <!-- Background Divider Shape -->
            <div class="absolute bottom-0 left-0 -mb-px h-10 w-full bg-[url('../img/elements/home-4-divider-shape-1.svg')] bg-cover bg-[center_top] bg-repeat-x xxl:h-14"></div>
        </div>
    </section>
    <!-- Newsletter Section End -->

@endsection



@section('footer')
<footer class="section-footer">
    <div class="bg-[#F5EFEB]">
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
                                <img src="{{ asset('assets/img/logo-violet-dark.png') }}" alt="Masco" width="109" height="24" />
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
                                    <a href="https://twitter.com" target="_blank" rel="noopener noreferrer" class="flex h-[30px] w-[30px] items-center justify-center rounded-[50%] bg-ColorBlack/10 text-sm text-ColorBlack transition-all duration-300 hover:bg-ColorViolet hover:text-white" aria-label="twitter">
                                        <i class="fa-brands fa-x-twitter"></i>
                                    </a>
                                    <a href="https://www.facebook.com/" target="_blank" rel="noopener noreferrer" class="flex h-[30px] w-[30px] items-center justify-center rounded-[50%] bg-ColorBlack/10 text-sm text-ColorBlack transition-all duration-300 hover:bg-ColorViolet hover:text-white" aria-label="facebook">
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </a>
                                    <a href="https://www.instagram.com/" target="_blank" rel="noopener noreferrer" class="flex h-[30px] w-[30px] items-center justify-center rounded-[50%] bg-ColorBlack/10 text-sm text-ColorBlack transition-all duration-300 hover:bg-ColorViolet hover:text-white" aria-label="instagram">
                                        <i class="fa-brands fa-instagram"></i>
                                    </a>
                                    <a href="https://www.github.com/" target="_blank" rel="noopener noreferrer" class="flex h-[30px] w-[30px] items-center justify-center rounded-[50%] bg-ColorBlack/10 text-sm text-ColorBlack transition-all duration-300 hover:bg-ColorViolet hover:text-white" aria-label="github">
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
                                    <a href="{{ url('index') }}" class="hover:opcity-100 text-ColorBlack underline-offset-4 transition-all duration-300 ease-linear hover:underline">Home</a>
                                </li>
                                <li>
                                    <a href="{{ url('about') }}" class="hover:opcity-100 text-ColorBlack underline-offset-4 transition-all duration-300 ease-linear hover:underline">About Us</a>
                                </li>
                                <li>
                                    <a href="{{ url('services') }}" class="hover:opcity-100 text-ColorBlack underline-offset-4 transition-all duration-300 ease-linear hover:underline">Services</a>
                                </li>
                                <li>
                                    <a href="{{ url('pricing') }}" class="hover:opcity-100 text-ColorBlack underline-offset-4 transition-all duration-300 ease-linear hover:underline">pricing</a>
                                </li>
                                <li>
                                    <a href="{{ url('contact') }}" class="hover:opcity-100 text-ColorBlack underline-offset-4 transition-all duration-300 ease-linear hover:underline">Contact</a>
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
                                    <a href="{{ url('signup') }}" class="hover:opcity-100 text-ColorBlack underline-offset-4 transition-all duration-300 ease-linear hover:underline">Signup</a>
                                </li>
                                <li>
                                    <a href="{{ url('login') }}" class="hover:opcity-100 text-ColorBlack underline-offset-4 transition-all duration-300 ease-linear hover:underline">Login</a>
                                </li>
                                <li>
                                    <a href="{{ url('error404') }}" class="hover:opcity-100 text-ColorBlack underline-offset-4 transition-all duration-300 ease-linear hover:underline">404 Not found</a>
                                </li>
                                <li>
                                    <a href="{{ url('resetpassword') }}" class="hover:opcity-100 text-ColorBlack underline-offset-4 transition-all duration-300 ease-linear hover:underline">Password Reset</a>
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
                                    <a href="https://www.example.com/" target="_blank" rel="noopener noreferrer" class="hover:opcity-100 text-ColorBlack underline-offset-4 transition-all duration-300 ease-linear hover:underline">Support</a>
                                </li>
                                <li>
                                    <a href="https://www.example.com/" target="_blank" rel="noopener noreferrer" class="hover:opcity-100 text-ColorBlack underline-offset-4 transition-all duration-300 ease-linear hover:underline">Privacy policy</a>
                                </li>
                                <li>
                                    <a href="https://www.example.com/" target="_blank" rel="noopener noreferrer" class="hover:opcity-100 text-ColorBlack underline-offset-4 transition-all duration-300 ease-linear hover:underline">Terms & Conditions</a>
                                </li>
                                <li>
                                    <a href="https://www.example.com/" target="_blank" rel="noopener noreferrer" class="hover:opcity-100 text-ColorBlack underline-offset-4 transition-all duration-300 ease-linear hover:underline">Strategic finance</a>
                                </li>
                                <li>
                                    <a href="https://www.example.com/" target="_blank" rel="noopener noreferrer" class="hover:opcity-100 text-ColorBlack underline-offset-4 transition-all duration-300 ease-linear hover:underline">Video guide</a>
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