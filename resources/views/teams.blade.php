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
                <h1 class="breadcrumb-title">Our Team</h1>
                <ul class="breadcrumb-nav">
                    <li><a href="{{ url('index') }}">Home</a></li>
                    <li>Our Team</li>
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

<!-- Team Section Start -->
<div class="section-team">
    <!-- Section Space -->
    <div class="section-space">
        <!-- Section Container -->
        <div class="container-default">
            <!-- Team List -->
            <div class="grid gap-x-6 gap-y-8 sm:grid-cols-2 lg:grid-cols-4">
                <!-- Team Item -->
                <div class="jos flex flex-col items-center justify-center rounded-[10px] bg-white p-5 text-center shadow-[0_4px_80px_0_rgba(0,0,0,0.08)]" data-jos_animation="flip-left">
                    <img src="{{ asset('assets/img/th-1/team-img-1.jpg') }}" alt="team-img-1" width="266" height="250" class="h-auto w-full rounded-[10px] lg:w-auto" />
                    <div class="mb-4 mt-6">
                        <div class="mb-1 text-xl font-semibold text-ColorBlack">
                            Eleanor Pena
                        </div>
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
                <div class="jos flex flex-col items-center justify-center rounded-[10px] bg-white p-5 text-center shadow-[0_4px_80px_0_rgba(0,0,0,0.08)]" data-jos_animation="flip-left">
                    <img src="{{ asset('assets/img/th-1/team-img-2.jpg') }}" alt="team-img-2" width="266" height="250" class="h-auto w-full rounded-[10px] lg:w-auto" />
                    <div class="mb-4 mt-6">
                        <div class="mb-1 text-xl font-semibold text-ColorBlack">
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
                <div class="jos flex flex-col items-center justify-center rounded-[10px] bg-white p-5 text-center shadow-[0_4px_80px_0_rgba(0,0,0,0.08)]" data-jos_animation="flip-left">
                    <img src="{{ asset('assets/img/th-1/team-img-3.jpg') }}" alt="team-img-3" width="266" height="250" class="h-auto w-full rounded-[10px] lg:w-auto" />
                    <div class="mb-4 mt-6">
                        <div class="mb-1 text-xl font-semibold text-ColorBlack">
                            Jane Cooper
                        </div>
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
                <div class="jos flex flex-col items-center justify-center rounded-[10px] bg-white p-5 text-center shadow-[0_4px_80px_0_rgba(0,0,0,0.08)]" data-jos_animation="flip-left">
                    <img src="{{ asset('assets/img/th-1/team-img-4.jpg') }}" alt="team-img-4" width="266" height="250" class="h-auto w-full rounded-[10px] lg:w-auto" />
                    <div class="mb-4 mt-6">
                        <div class="mb-1 text-xl font-semibold text-ColorBlack">
                            Floyd Miles
                        </div>
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
<!-- Team Section End -->

<!-- Team Section Start -->
<section class="section-team">
    <!-- Section Space -->
    <div class="section-space-bottom">
        <!-- Section Container -->
        <div class="container-default">
            <!-- Section Content Wrapper -->
            <div class="jos mb-[60px] xl:mb-20">
                <!-- Section Content Block -->
                <div class="mx-auto max-w-[636px]">
                    <h2 class="text-center">
                        The amazing team behind our creative products
                    </h2>
                </div>
                <!-- Section Content Block -->
            </div>
            <!-- Section Content Wrapper -->

            <!-- Team List -->
            <div class="grid gap-x-6 gap-y-8 sm:grid-cols-2 lg:grid-cols-4">
                <!-- Team Item -->
                <div class="jos flex flex-col items-center justify-center rounded-[10px] bg-white p-5 text-center shadow-[0_4px_80px_0_rgba(0,0,0,0.08)]" data-jos_animation="flip-left">
                    <img src="{{ asset('assets/img/th-1/team-img-5.jpg') }}" alt="team-img-5" width="266" height="250" class="h-auto w-full rounded-[10px] lg:w-auto" />
                    <div class="mb-4 mt-6">
                        <div class="mb-1 text-xl font-semibold text-ColorBlack">
                            Arlene McCoy
                        </div>
                        <span class="block text-opacity-80">UI/UX Designer</span>
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
                <div class="jos flex flex-col items-center justify-center rounded-[10px] bg-white p-5 text-center shadow-[0_4px_80px_0_rgba(0,0,0,0.08)]" data-jos_animation="flip-left">
                    <img src="{{ asset('assets/img/th-1/team-img-6.jpg') }}" alt="team-img-6" width="266" height="250" class="h-auto w-full rounded-[10px] lg:w-auto" />
                    <div class="mb-4 mt-6">
                        <div class="mb-1 text-xl font-semibold text-ColorBlack">
                            Theresa Webb
                        </div>
                        <span class="block text-opacity-80">WP Developer</span>
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
                <div class="jos flex flex-col items-center justify-center rounded-[10px] bg-white p-5 text-center shadow-[0_4px_80px_0_rgba(0,0,0,0.08)]" data-jos_animation="flip-left">
                    <img src="{{ asset('assets/img/th-1/team-img-7.jpg') }}" alt="team-img-7" width="266" height="250" class="h-auto w-full rounded-[10px] lg:w-auto" />
                    <div class="mb-4 mt-6">
                        <div class="mb-1 text-xl font-semibold text-ColorBlack">
                            Jerome Bell
                        </div>
                        <span class="block text-opacity-80">HTML Developer</span>
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
                <div class="jos flex flex-col items-center justify-center rounded-[10px] bg-white p-5 text-center shadow-[0_4px_80px_0_rgba(0,0,0,0.08)]" data-jos_animation="flip-left">
                    <img src="{{ asset('assets/img/th-1/team-img-8.jpg') }}" alt="team-img-8" width="266" height="250" class="h-auto w-full rounded-[10px] lg:w-auto" />
                    <div class="mb-4 mt-6">
                        <div class="mb-1 text-xl font-semibold text-ColorBlack">
                            Darrell Steward
                        </div>
                        <span class="block text-opacity-80">Product Designer</span>
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
                <div class="jos flex flex-col items-center justify-center rounded-[10px] bg-white p-5 text-center shadow-[0_4px_80px_0_rgba(0,0,0,0.08)]" data-jos_animation="flip-left">
                    <img src="{{ asset('assets/img/th-1/team-img-9.jpg') }}" alt="team-img-9" width="266" height="250" class="h-auto w-full rounded-[10px] lg:w-auto" />
                    <div class="mb-4 mt-6">
                        <div class="mb-1 text-xl font-semibold text-ColorBlack">
                            Devon Lane
                        </div>
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
                <!-- Team Item -->
                <div class="jos flex flex-col items-center justify-center rounded-[10px] bg-white p-5 text-center shadow-[0_4px_80px_0_rgba(0,0,0,0.08)]" data-jos_animation="flip-left">
                    <img src="{{ asset('assets/img/th-1/team-img-10.jpg') }}" alt="team-img-10" width="266" height="250" class="h-auto w-full rounded-[10px] lg:w-auto" />
                    <div class="mb-4 mt-6">
                        <div class="mb-1 text-xl font-semibold text-ColorBlack">
                            Floyd Miles
                        </div>
                        <span class="block text-opacity-80">Product Designer</span>
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
                <div class="jos flex flex-col items-center justify-center rounded-[10px] bg-white p-5 text-center shadow-[0_4px_80px_0_rgba(0,0,0,0.08)]" data-jos_animation="flip-left">
                    <img src="{{ asset('assets/img/th-1/team-img-11.jpg') }}" alt="team-img-11" width="266" height="250" class="h-auto w-full rounded-[10px] lg:w-auto" />
                    <div class="mb-4 mt-6">
                        <div class="mb-1 text-xl font-semibold text-ColorBlack">
                            Darlene Robertson
                        </div>
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
                <div class="jos flex flex-col items-center justify-center rounded-[10px] bg-white p-5 text-center shadow-[0_4px_80px_0_rgba(0,0,0,0.08)]" data-jos_animation="flip-left">
                    <img src="{{ asset('assets/img/th-1/team-img-12.jpg') }}" alt="team-img-12" width="266" height="250" class="h-auto w-full rounded-[10px] lg:w-auto" />
                    <div class="mb-4 mt-6">
                        <div class="mb-1 text-xl font-semibold text-ColorBlack">
                            Bessie Cooper
                        </div>
                        <span class="block text-opacity-80">Marketing Executive</span>
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

            <div class="flex justify-center">
                <a href="{{ url('contact') }}" class="btn is-blue is-rounded btn-animation is-large group mt-10 inline-block lg:mt-[60px] xl:mt-20"><span>Want to join us?</span></a>
            </div>
        </div>
        <!-- Section Container -->
    </div>
    <!-- Section Space -->
</section>
<!-- Team Section End -->

@endsection

@section('footer')
    <x-footer1/>
@endsection