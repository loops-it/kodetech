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
                    <h1 class="breadcrumb-title">Service Details</h1>
                    <ul class="breadcrumb-nav">
                        <li><a href="{{ url('index') }}">Home</a></li>
                        <li><a href="{{ url('services') }}">Service</a></li>
                        <li>Service Details</li>
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

    <!-- Service Details Section Start -->
    <section class="section-service-details">
        <!-- Section Space -->
        <div class="section-space">
            <!-- Section Container -->
            <div class="container-default">
                <!-- Service Details Area -->
                <div class="mx-auto max-w-[1080px]">
                    <!-- Service main Image -->
                    <img src="{{ asset('assets/img/th-1/service-main-img.jpg') }}" alt="service-main-img" class="mb-10 h-auto w-full rounded-[10px]" />
                    <!-- Service Rich Text -->
                    <div class="rich-text">
                        <h5>What is Digital Brand Strategy?</h5>
                        <p>
                            A comprehensive plan that helps you communicate your
                            company's identity to consumers online to increase customer
                            loyalty and sales. A digital brand strategy also defines how
                            your organization wishes to be perceived by consumers.
                        </p>
                        <p>
                            What makes it unique? What do you want people to think about
                            your product or service? By creating guidelines for your
                            brand, you can ensure every interaction with consumers
                            remains consistent.
                        </p>

                        <h5>
                            How Do You Create an Effective Digital Brand Strategy?
                        </h5>
                        <p>
                            Creating an effective digital brand takes time, effort, and
                            due diligence. It's not as simple as making a logo, showing
                            up with a few dozen hashtags, and calling. Let's dive into
                            the roadmap for building a digital brand strategy with a few
                            detailed examples.
                        </p>

                        <ul class="font-semibold text-ColorBlack">
                            <li class="mb-4 flex gap-x-3 last:mb-0">
                                <span class="text-xl text-ColorBlue"><i class="fa-solid fa-badge-check"></i></span>
                                Digital Branding – Creating your brand image through logo,
                                website design, and social media design to produce a solid
                                brand identity through digital platforms.
                            </li>
                            <li class="mb-4 flex gap-x-3 last:mb-0">
                                <span class="text-xl text-ColorBlue"><i class="fa-solid fa-badge-check"></i></span>
                                Digital Marketing – Promoting your existing brand image
                                through content marketing and advertising techniques to
                                impact consumers.
                            </li>
                        </ul>

                        <div class="my-6 grid grid-cols-1 md:grid-cols-2 gap-5">
                            <img src="{{ asset('assets/img/th-1/service-inner-1-img.jpg') }}" alt="service-inner-1-img" width="532" height="355" class="w-full h-auto rounded-[10px]" />
                            <img src="{{ asset('assets/img/th-1/service-inner-2-img.jpg') }}" alt="service-inner-2-img" width="532" height="355" class="w-full h-auto rounded-[10px]" />
                        </div>

                        <h5>Digital Branding vs. Digital Marketing</h5>
                        <p>
                            It is a common misconception to confuse digital marketing
                            and digital branding. While you may think that these phrases
                            are interchangeable, there is a distinct difference.
                            Creating an effective digital brand takes time, effort, and
                            due diligence. It's not as simple as making a logo, showing
                            up with a few dozen hashtags, and calling it a day.
                        </p>

                        <h5>Are You Ready to Digitize Your Business Brand?</h5>
                        <p>
                            Now it is clear what digital branding is and what are the
                            strategies. That means it’s time for you to put it into
                            practice. There are nine ways that you can use for maximum
                            the results.
                        </p>

                        <p>
                            However, you can also try some of the strategies that you
                            think are the easiest and most important. For example, you
                            can start by creating a logo, using social media, or
                            creating a website. Keep the spirit and see you on the next
                            article!
                        </p>
                    </div>
                </div>
                <!-- Service Details Area -->
            </div>
            <!-- Section Container -->
        </div>
        <!-- Section Space -->
    </section>
    <!-- Service Details Section End -->

    <!-- FAQ Section Start -->
    <section class="section-faq">
        <div class="relative z-10 overflow-hidden bg-ColorOffWhite">
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
                        <ul class="mx-auto max-w-[1076px] rounded-[10px] border border-ColorBlack text-ColorBlack">
                            <!-- Accordion Item -->
                            <li class="accordion-item active overflow-hidden border-b border-ColorBlack p-[30px] last:border-b-0">
                                <!-- Accordion Header -->
                                <div class="accordion-header flex justify-between gap-6 text-xl font-semibold">
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
                                <div class="accordion-header flex justify-between gap-6 text-xl font-semibold">
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
                                <div class="accordion-header flex justify-between gap-6 text-xl font-semibold">
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
                                <div class="accordion-header flex justify-between gap-6 text-xl font-semibold">
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
                                <div class="accordion-header flex justify-between gap-6 text-xl font-semibold">
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
        </div>
    </section>
    <!-- FAQ Section End -->

@endsection



@section('footer')
    <x-footer1/>
@endsection