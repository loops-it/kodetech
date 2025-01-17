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
                <h1 class="breadcrumb-title">Careers</h1>
                <ul class="breadcrumb-nav">
                    <li><a href="{{ url('index') }}">Home</a></li>
                    <li>Careers</li>
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

<!-- Careers Section Start -->
<div class="section-careers">
    <!-- Section Space -->
    <div class="section-space">
        <!-- Section Container -->
        <div class="container-default">
            <img src="{{ asset('assets/img/th-1/careers-hero-image.jpg') }}" alt="careers-hero-image" width="1296" height="600" class="mb-[60px] h-auto w-full rounded-[10px] lg:mb-20" />

            <!-- Section Content Wrapper -->
            <div class="jos mb-[60px] flex flex-wrap justify-center gap-10 text-center lg:mb-20 xl:justify-between xl:text-left">
                <!-- Section Content Block -->
                <div>
                    <h2>Curently open positions</h2>
                </div>
                <!-- Section Content Block -->

                <!-- Career Tab Button Block-->
                <div class="flex flex-wrap justify-center gap-4">
                    <button class="tab-button btn tab-btn-blue is-rounded active h-[50px]" data-tab="all">
                        All
                    </button>
                    <button class="tab-button btn tab-btn-blue is-rounded h-[50px]" data-tab="design">
                        Design
                    </button>
                    <button class="tab-button btn tab-btn-blue is-rounded h-[50px]" data-tab="development">
                        Development
                    </button>
                    <button class="tab-button btn tab-btn-blue is-rounded h-[50px]" data-tab="business">
                        Business
                    </button>
                </div>
                <!-- Career Tab Button Block-->
            </div>
            <!-- Section Content Wrapper -->

            <!-- Career List -->
            <div class="tab-content grid gap-6 md:grid-cols-2" id="all">
                <!-- Career Item -->
                <div class="jos" data-jos_delay="0">
                    <div class="group rounded-[10px] border border-[#E6E6E6] bg-white p-[30px] transition-all duration-300 hover:border-ColorOffWhite hover:bg-ColorOffWhite md:p-10">
                        <div class="mb-[15px] text-xl font-semibold tracking-tighter text-ColorBlack md:text-2xl">
                            UI/UX and product designer
                        </div>
                        <p class="mb-0 text-ColorBlack/80">
                            Specify the job position you are applying for & Introduce
                            yourself and highlight your skills and qualifications.
                            Tailor your resume
                        </p>
                        <div class="my-5 flex flex-wrap gap-x-6 gap-y-3 text-ColorBlack md:my-[30px]">
                            <div class="flex gap-1">
                                <span><i class="fa-solid fa-clock"></i></span>
                                Full Time
                            </div>
                            <div class="flex gap-1">
                                <span><i class="fa-sharp fa-solid fa-location-dot"></i></span>
                                London, UK
                            </div>
                            <div class="flex gap-1">
                                <span><i class="fa-solid fa-money-bills-simple"></i></span>
                                $25k-$40k
                            </div>
                        </div>
                        <a href="careerdetails" class="inline-flex items-center gap-x-2 text-base font-bold text-ColorBlack group-hover:text-ColorBlue">Apply now
                            <span class="transition-all duration-300 ease-in-out group-hover:translate-x-2">
                                <i class="fa-solid fa-arrow-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
                <!-- Career Item -->
                <!-- Career Item -->
                <div class="jos" data-jos_delay="0.3">
                    <div class="group rounded-[10px] border border-[#E6E6E6] bg-white p-[30px] transition-all duration-300 hover:border-ColorOffWhite hover:bg-ColorOffWhite md:p-10">
                        <div class="mb-[15px] text-xl font-semibold tracking-tighter text-ColorBlack md:text-2xl">
                            Junior content writer
                        </div>
                        <p class="mb-0 text-ColorBlack/80">
                            Specify the job position you are applying for & Introduce
                            yourself and highlight your skills and qualifications.
                            Tailor your resume
                        </p>
                        <div class="my-5 flex flex-wrap gap-x-6 gap-y-3 text-ColorBlack md:my-[30px]">
                            <div class="flex gap-1">
                                <span><i class="fa-solid fa-clock"></i></span>
                                Remote
                            </div>
                            <div class="flex gap-1">
                                <span><i class="fa-sharp fa-solid fa-location-dot"></i></span>
                                United State
                            </div>
                            <div class="flex gap-1">
                                <span><i class="fa-solid fa-money-bills-simple"></i></span>
                                $10k-$35k
                            </div>
                        </div>
                        <a href="careerdetails" class="inline-flex items-center gap-x-2 text-base font-bold text-ColorBlack group-hover:text-ColorBlue">Apply now
                            <span class="transition-all duration-300 ease-in-out group-hover:translate-x-2">
                                <i class="fa-solid fa-arrow-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
                <!-- Career Item -->
                <!-- Career Item -->
                <div class="jos" data-jos_delay="0.6">
                    <div class="group rounded-[10px] border border-[#E6E6E6] bg-white p-[30px] transition-all duration-300 hover:border-ColorOffWhite hover:bg-ColorOffWhite md:p-10">
                        <div class="mb-[15px] text-xl font-semibold tracking-tighter text-ColorBlack md:text-2xl">
                            Junior video editor
                        </div>
                        <p class="mb-0 text-ColorBlack/80">
                            Specify the job position you are applying for & Introduce
                            yourself and highlight your skills and qualifications.
                            Tailor your resume
                        </p>
                        <div class="my-5 flex flex-wrap gap-x-6 gap-y-3 text-ColorBlack md:my-[30px]">
                            <div class="flex gap-1">
                                <span><i class="fa-solid fa-clock"></i></span>
                                Full Time
                            </div>
                            <div class="flex gap-1">
                                <span><i class="fa-sharp fa-solid fa-location-dot"></i></span>
                                California
                            </div>
                            <div class="flex gap-1">
                                <span><i class="fa-solid fa-money-bills-simple"></i></span>
                                $35k-$45k
                            </div>
                        </div>
                        <a href="careerdetails" class="inline-flex items-center gap-x-2 text-base font-bold text-ColorBlack group-hover:text-ColorBlue">Apply now
                            <span class="transition-all duration-300 ease-in-out group-hover:translate-x-2">
                                <i class="fa-solid fa-arrow-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
                <!-- Career Item -->
                <!-- Career Item -->
                <div class="jos" data-jos_delay="0.9">
                    <div class="group rounded-[10px] border border-[#E6E6E6] bg-white p-[30px] transition-all duration-300 hover:border-ColorOffWhite hover:bg-ColorOffWhite md:p-10">
                        <div class="mb-[15px] text-xl font-semibold tracking-tighter text-ColorBlack md:text-2xl">
                            Graphic designer
                        </div>
                        <p class="mb-0 text-ColorBlack/80">
                            Specify the job position you are applying for & Introduce
                            yourself and highlight your skills and qualifications.
                            Tailor your resume
                        </p>
                        <div class="my-5 flex flex-wrap gap-x-6 gap-y-3 text-ColorBlack md:my-[30px]">
                            <div class="flex gap-1">
                                <span><i class="fa-solid fa-clock"></i></span>
                                Full Time
                            </div>
                            <div class="flex gap-1">
                                <span><i class="fa-sharp fa-solid fa-location-dot"></i></span>
                                New York
                            </div>
                            <div class="flex gap-1">
                                <span><i class="fa-solid fa-money-bills-simple"></i></span>
                                $45k-$60k
                            </div>
                        </div>
                        <a href="careerdetails" class="inline-flex items-center gap-x-2 text-base font-bold text-ColorBlack group-hover:text-ColorBlue">Apply now
                            <span class="transition-all duration-300 ease-in-out group-hover:translate-x-2">
                                <i class="fa-solid fa-arrow-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
                <!-- Career Item -->
                <!-- Career Item -->
                <div class="jos" data-jos_delay="1.2">
                    <div class="group rounded-[10px] border border-[#E6E6E6] bg-white p-[30px] transition-all duration-300 hover:border-ColorOffWhite hover:bg-ColorOffWhite md:p-10">
                        <div class="mb-[15px] text-xl font-semibold tracking-tighter text-ColorBlack md:text-2xl">
                            Backend developer
                        </div>
                        <p class="mb-0 text-ColorBlack/80">
                            Specify the job position you are applying for & Introduce
                            yourself and highlight your skills and qualifications.
                            Tailor your resume
                        </p>
                        <div class="my-5 flex flex-wrap gap-x-6 gap-y-3 text-ColorBlack md:my-[30px]">
                            <div class="flex gap-1">
                                <span><i class="fa-solid fa-clock"></i></span>
                                Remote
                            </div>
                            <div class="flex gap-1">
                                <span><i class="fa-sharp fa-solid fa-location-dot"></i></span>
                                United State
                            </div>
                            <div class="flex gap-1">
                                <span><i class="fa-solid fa-money-bills-simple"></i></span>
                                $15k-$35k
                            </div>
                        </div>
                        <a href="careerdetails" class="inline-flex items-center gap-x-2 text-base font-bold text-ColorBlack group-hover:text-ColorBlue">Apply now
                            <span class="transition-all duration-300 ease-in-out group-hover:translate-x-2">
                                <i class="fa-solid fa-arrow-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
                <!-- Career Item -->
                <!-- Career Item -->
                <div class="jos" data-jos_delay="1.5">
                    <div class="group rounded-[10px] border border-[#E6E6E6] bg-white p-[30px] transition-all duration-300 hover:border-ColorOffWhite hover:bg-ColorOffWhite md:p-10">
                        <div class="mb-[15px] text-xl font-semibold tracking-tighter text-ColorBlack md:text-2xl">
                            Marketing manager
                        </div>
                        <p class="mb-0 text-ColorBlack/80">
                            Specify the job position you are applying for & Introduce
                            yourself and highlight your skills and qualifications.
                            Tailor your resume
                        </p>
                        <div class="my-5 flex flex-wrap gap-x-6 gap-y-3 text-ColorBlack md:my-[30px]">
                            <div class="flex gap-1">
                                <span><i class="fa-solid fa-clock"></i></span>
                                Full Time
                            </div>
                            <div class="flex gap-1">
                                <span><i class="fa-sharp fa-solid fa-location-dot"></i></span>
                                London, UK
                            </div>
                            <div class="flex gap-1">
                                <span><i class="fa-solid fa-money-bills-simple"></i></span>
                                $45k-$60k
                            </div>
                        </div>
                        <a href="careerdetails" class="inline-flex items-center gap-x-2 text-base font-bold text-ColorBlack group-hover:text-ColorBlue">Apply now
                            <span class="transition-all duration-300 ease-in-out group-hover:translate-x-2">
                                <i class="fa-solid fa-arrow-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
                <!-- Career Item -->
            </div>
            <!-- Career List -->
            <!-- Career List -->
            <div class="tab-content grid hidden gap-6 md:grid-cols-2" id="design">
                <!-- Career Item -->
                <div class="jos" data-jos_delay="0">
                    <div class="group rounded-[10px] border border-[#E6E6E6] bg-white p-[30px] transition-all duration-300 hover:border-ColorOffWhite hover:bg-ColorOffWhite md:p-10">
                        <div class="mb-[15px] text-xl font-semibold tracking-tighter text-ColorBlack md:text-2xl">
                            UI/UX and product designer
                        </div>
                        <p class="mb-0 text-ColorBlack/80">
                            Specify the job position you are applying for & Introduce
                            yourself and highlight your skills and qualifications.
                            Tailor your resume
                        </p>
                        <div class="my-5 flex flex-wrap gap-x-6 gap-y-3 text-ColorBlack md:my-[30px]">
                            <div class="flex gap-1">
                                <span><i class="fa-solid fa-clock"></i></span>
                                Full Time
                            </div>
                            <div class="flex gap-1">
                                <span><i class="fa-sharp fa-solid fa-location-dot"></i></span>
                                London, UK
                            </div>
                            <div class="flex gap-1">
                                <span><i class="fa-solid fa-money-bills-simple"></i></span>
                                $25k-$40k
                            </div>
                        </div>
                        <a href="careerdetails" class="inline-flex items-center gap-x-2 text-base font-bold text-ColorBlack group-hover:text-ColorBlue">Apply now
                            <span class="transition-all duration-300 ease-in-out group-hover:translate-x-2">
                                <i class="fa-solid fa-arrow-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
                <!-- Career Item -->
                <!-- Career Item -->
                <div class="jos" data-jos_delay="0.6">
                    <div class="group rounded-[10px] border border-[#E6E6E6] bg-white p-[30px] transition-all duration-300 hover:border-ColorOffWhite hover:bg-ColorOffWhite md:p-10">
                        <div class="mb-[15px] text-xl font-semibold tracking-tighter text-ColorBlack md:text-2xl">
                            Junior video editor
                        </div>
                        <p class="mb-0 text-ColorBlack/80">
                            Specify the job position you are applying for & Introduce
                            yourself and highlight your skills and qualifications.
                            Tailor your resume
                        </p>
                        <div class="my-5 flex flex-wrap gap-x-6 gap-y-3 text-ColorBlack md:my-[30px]">
                            <div class="flex gap-1">
                                <span><i class="fa-solid fa-clock"></i></span>
                                Full Time
                            </div>
                            <div class="flex gap-1">
                                <span><i class="fa-sharp fa-solid fa-location-dot"></i></span>
                                California
                            </div>
                            <div class="flex gap-1">
                                <span><i class="fa-solid fa-money-bills-simple"></i></span>
                                $35k-$45k
                            </div>
                        </div>
                        <a href="careerdetails" class="inline-flex items-center gap-x-2 text-base font-bold text-ColorBlack group-hover:text-ColorBlue">Apply now
                            <span class="transition-all duration-300 ease-in-out group-hover:translate-x-2">
                                <i class="fa-solid fa-arrow-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
                <!-- Career Item -->
                <!-- Career Item -->
                <div class="jos" data-jos_delay="0.9">
                    <div class="group rounded-[10px] border border-[#E6E6E6] bg-white p-[30px] transition-all duration-300 hover:border-ColorOffWhite hover:bg-ColorOffWhite md:p-10">
                        <div class="mb-[15px] text-xl font-semibold tracking-tighter text-ColorBlack md:text-2xl">
                            Graphic designer
                        </div>
                        <p class="mb-0 text-ColorBlack/80">
                            Specify the job position you are applying for & Introduce
                            yourself and highlight your skills and qualifications.
                            Tailor your resume
                        </p>
                        <div class="my-5 flex flex-wrap gap-x-6 gap-y-3 text-ColorBlack md:my-[30px]">
                            <div class="flex gap-1">
                                <span><i class="fa-solid fa-clock"></i></span>
                                Full Time
                            </div>
                            <div class="flex gap-1">
                                <span><i class="fa-sharp fa-solid fa-location-dot"></i></span>
                                New York
                            </div>
                            <div class="flex gap-1">
                                <span><i class="fa-solid fa-money-bills-simple"></i></span>
                                $45k-$60k
                            </div>
                        </div>
                        <a href="careerdetails" class="inline-flex items-center gap-x-2 text-base font-bold text-ColorBlack group-hover:text-ColorBlue">Apply now
                            <span class="transition-all duration-300 ease-in-out group-hover:translate-x-2">
                                <i class="fa-solid fa-arrow-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
                <!-- Career Item -->
            </div>
            <!-- Career List -->
            <!-- Career List -->
            <div class="tab-content grid hidden gap-6 md:grid-cols-2" id="development">
                <!-- Career Item -->
                <div class="jos" data-jos_delay="1.2">
                    <div class="group rounded-[10px] border border-[#E6E6E6] bg-white p-[30px] transition-all duration-300 hover:border-ColorOffWhite hover:bg-ColorOffWhite md:p-10">
                        <div class="mb-[15px] text-xl font-semibold tracking-tighter text-ColorBlack md:text-2xl">
                            Backend developer
                        </div>
                        <p class="mb-0 text-ColorBlack/80">
                            Specify the job position you are applying for & Introduce
                            yourself and highlight your skills and qualifications.
                            Tailor your resume
                        </p>
                        <div class="my-5 flex flex-wrap gap-x-6 gap-y-3 text-ColorBlack md:my-[30px]">
                            <div class="flex gap-1">
                                <span><i class="fa-solid fa-clock"></i></span>
                                Remote
                            </div>
                            <div class="flex gap-1">
                                <span><i class="fa-sharp fa-solid fa-location-dot"></i></span>
                                United State
                            </div>
                            <div class="flex gap-1">
                                <span><i class="fa-solid fa-money-bills-simple"></i></span>
                                $15k-$35k
                            </div>
                        </div>
                        <a href="careerdetails" class="inline-flex items-center gap-x-2 text-base font-bold text-ColorBlack group-hover:text-ColorBlue">Apply now
                            <span class="transition-all duration-300 ease-in-out group-hover:translate-x-2">
                                <i class="fa-solid fa-arrow-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
                <!-- Career Item -->
            </div>
            <!-- Career List -->
            <!-- Career List -->
            <div class="tab-content grid hidden gap-6 md:grid-cols-2" id="business">
                <!-- Career Item -->
                <div class="jos" data-jos_delay="0.3">
                    <div class="group rounded-[10px] border border-[#E6E6E6] bg-white p-[30px] transition-all duration-300 hover:border-ColorOffWhite hover:bg-ColorOffWhite md:p-10">
                        <div class="mb-[15px] text-xl font-semibold tracking-tighter text-ColorBlack md:text-2xl">
                            Junior content writer
                        </div>
                        <p class="mb-0 text-ColorBlack/80">
                            Specify the job position you are applying for & Introduce
                            yourself and highlight your skills and qualifications.
                            Tailor your resume
                        </p>
                        <div class="my-5 flex flex-wrap gap-x-6 gap-y-3 text-ColorBlack md:my-[30px]">
                            <div class="flex gap-1">
                                <span><i class="fa-solid fa-clock"></i></span>
                                Remote
                            </div>
                            <div class="flex gap-1">
                                <span><i class="fa-sharp fa-solid fa-location-dot"></i></span>
                                United State
                            </div>
                            <div class="flex gap-1">
                                <span><i class="fa-solid fa-money-bills-simple"></i></span>
                                $10k-$35k
                            </div>
                        </div>
                        <a href="careerdetails" class="inline-flex items-center gap-x-2 text-base font-bold text-ColorBlack group-hover:text-ColorBlue">Apply now
                            <span class="transition-all duration-300 ease-in-out group-hover:translate-x-2">
                                <i class="fa-solid fa-arrow-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
                <!-- Career Item -->
                <!-- Career Item -->
                <div class="jos" data-jos_delay="1.5">
                    <div class="group rounded-[10px] border border-[#E6E6E6] bg-white p-[30px] transition-all duration-300 hover:border-ColorOffWhite hover:bg-ColorOffWhite md:p-10">
                        <div class="mb-[15px] text-xl font-semibold tracking-tighter text-ColorBlack md:text-2xl">
                            Marketing manager
                        </div>
                        <p class="mb-0 text-ColorBlack/80">
                            Specify the job position you are applying for & Introduce
                            yourself and highlight your skills and qualifications.
                            Tailor your resume
                        </p>
                        <div class="my-5 flex flex-wrap gap-x-6 gap-y-3 text-ColorBlack md:my-[30px]">
                            <div class="flex gap-1">
                                <span><i class="fa-solid fa-clock"></i></span>
                                Full Time
                            </div>
                            <div class="flex gap-1">
                                <span><i class="fa-sharp fa-solid fa-location-dot"></i></span>
                                London, UK
                            </div>
                            <div class="flex gap-1">
                                <span><i class="fa-solid fa-money-bills-simple"></i></span>
                                $45k-$60k
                            </div>
                        </div>
                        <a href="careerdetails" class="inline-flex items-center gap-x-2 text-base font-bold text-ColorBlack group-hover:text-ColorBlue">Apply now
                            <span class="transition-all duration-300 ease-in-out group-hover:translate-x-2">
                                <i class="fa-solid fa-arrow-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
                <!-- Career Item -->
            </div>
            <!-- Career List -->

            <div class="jos mt-10 flex justify-center lg:mt-20">
                <a href="{{ url('contact') }}" class="btn is-blue is-rounded btn-animation is-large group"><span>Can’t find your role? Contact us</span></a>
            </div>
        </div>
        <!-- Section Container -->
    </div>
    <!-- Section Space -->
</div>
<!-- Careers Section End -->

<!-- Brand Section Start -->
<div class="section-brand">
    <div class="jos">
        <!-- Section Space -->
        <div class="section-space-bottom">
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

@endsection



@section('footer')
    <x-footer1/>
@endsection