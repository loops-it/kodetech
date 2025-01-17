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
                <h1 class="breadcrumb-title">FAQs</h1>
                <ul class="breadcrumb-nav">
                    <li><a href="{{ url('index') }}">Home</a></li>
                    <li>FAQ</li>
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

<!-- FAQ Section Start -->
<div class="section-faq">
    <div class="relative z-10 overflow-hidden">
        <!-- Section Space -->
        <div class="section-space">
            <!-- Section Container -->
            <div class="container-default">
                <!-- FAQ Area -->
                <div class="grid gap-10 md:grid-cols-2 lg:gap-20 xl:gap-[104px]">
                    <div class="jos">
                        <!-- FAQ List -->
                        <ul>
                            <li class="mb-10 border-b border-ColorBlack pb-10 last:mb-0 last:border-b-0 last:pb-0">
                                <div class="mb-[15px] text-xl font-semibold text-ColorBlack">
                                    Q1. What is a digital agency?
                                </div>
                                <p>
                                    Digital agencies are strategic and creative marketing
                                    agencies from a focused on user experience, mobile,
                                    social, data gathering &analytics
                                </p>
                            </li>
                            <li class="mb-10 border-b border-ColorBlack pb-10 last:mb-0 last:border-b-0 last:pb-0">
                                <div class="mb-[15px] text-xl font-semibold text-ColorBlack">
                                    Q2. What services does a digital agency provide?
                                </div>
                                <p>
                                    A full service digital marketing agency is one that
                                    manages all aspects of a company's online presence.
                                    This kind of agency’s different from a departments
                                    that focus on one area.
                                </p>
                            </li>
                            <li class="mb-10 border-b border-ColorBlack pb-10 last:mb-0 last:border-b-0 last:pb-0">
                                <div class="mb-[15px] text-xl font-semibold text-ColorBlack">
                                    Q3. Would my company benefit from digital marketing?
                                </div>
                                <p>
                                    Digital marketing is a must for building a successful
                                    business. It is a growing your brand or improving
                                    sales, there are no limits to it. In the digital
                                    space, you can take advantage of it and future-proof.
                                </p>
                            </li>
                        </ul>
                        <!-- FAQ List -->
                    </div>
                    <div class="jos">
                        <!-- FAQ List -->
                        <ul>
                            <li class="mb-10 border-b border-ColorBlack pb-10 last:mb-0 last:border-b-0 last:pb-0">
                                <div class="mb-[15px] text-xl font-semibold text-ColorBlack">
                                    Q4. Would my company benefit from digital marketing?
                                </div>
                                <p>
                                    YES YES YES. You don’t have to replace your
                                    traditional marketing efforts with digital ones, but
                                    it is 2019 and if the word digital come
                                </p>
                            </li>
                            <li class="mb-10 border-b border-ColorBlack pb-10 last:mb-0 last:border-b-0 last:pb-0">
                                <div class="mb-[15px] text-xl font-semibold text-ColorBlack">
                                    Q5. How often should I update my website?
                                </div>
                                <p>
                                    A website that sits stagnant for long periods of time,
                                    without any new or fresh content, is nothing more that
                                    an online brochure for company. A successful website
                                    will interact with consumers.
                                </p>
                            </li>
                            <li class="mb-10 border-b border-ColorBlack pb-10 last:mb-0 last:border-b-0 last:pb-0">
                                <div class="mb-[15px] text-xl font-semibold text-ColorBlack">
                                    Q6. Is email marketing still effective?
                                </div>
                                <p>
                                    Definitely! You should never assume that because
                                    social media has a become so hugely popular, that it’s
                                    enough to solely focus your digital marketing strategy
                                    on social platforms.
                                </p>
                            </li>
                        </ul>
                        <!-- FAQ List -->
                    </div>
                </div>
                <!-- FAQ Area -->

                <div class="jos mt-[60px] flex justify-center xl:mt-20">
                    <a href="{{ url('contact') }}" class="btn is-blue is-rounded btn-animation is-large group"><span>Still, have any questions? Contact us</span></a>
                </div>
            </div>
            <!-- Section Container -->
        </div>
        <!-- Section Space -->
    </div>
</div>
<!-- FAQ Section End -->

<!-- Brand Section Start -->
<div class="section-brand">
    <div class="jos">
        <div class="bg-ColorOffWhite">
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
</div>
<!-- Brand Section End -->

@endsection



@section('footer')
    <x-footer1/>
@endsection