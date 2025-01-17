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
                <h1 class="breadcrumb-title">Send us a message</h1>
                <ul class="breadcrumb-nav">
                    <li><a href="{{ url('index') }}">Home</a></li>
                    <li>Contact Us</li>
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

<!-- Contact Section Start -->
<div class="section-contact">
    <!-- Section Space -->
    <div class="section-space">
        <!-- Section Container -->
        <div class="container-default">
            <!-- Contact Form Block -->
            <div class="jos mx-auto max-w-[996px]">
                <form action="https://formspree.io/f/mlqvzkyx" method="post">
                    <!-- From Group List -->
                    <div class="flex flex-col gap-6">
                        <div class="grid grid-cols-2 gap-6">
                            <!-- Form Group Item-->
                            <div>
                                <label for="name" class="mb-[10px] block text-left font-semibold text-ColorBlack">Your name</label>
                                <input type="text" name="name" id="name" placeholder="Enter your full name" class="w-full rounded-[50px] border border-ColorBlack/50 bg-ColorOffWhite px-[30px] py-[15px] outline-none transition-all duration-300 placeholder:text-ColorBlack/50 focus:border-ColorBlue" required />
                            </div>
                            <!-- Form Group Item-->
                            <!-- Form Group Item-->
                            <div>
                                <label for="email" class="mb-[10px] block text-left font-semibold text-ColorBlack">Email address</label>
                                <input type="email" name="email" id="email" placeholder="Enter your email" class="w-full rounded-[50px] border border-ColorBlack/50 bg-ColorOffWhite px-[30px] py-[15px] outline-none transition-all duration-300 placeholder:text-ColorBlack/50 focus:border-ColorBlue" required />
                            </div>
                            <!-- Form Group Item-->
                        </div>
                        <!-- Form Group Item-->
                        <div>
                            <label for="subject" class="mb-[10px] block text-left font-semibold text-ColorBlack">Subject</label>
                            <input type="text" name="subject" id="subject" placeholder="Enter subject" class="w-full rounded-[50px] border border-ColorBlack/50 bg-ColorOffWhite px-[30px] py-[15px] outline-none transition-all duration-300 placeholder:text-ColorBlack/50 focus:border-ColorBlue" required />
                        </div>
                        <!-- Form Group Item-->
                        <!-- Form Group Item-->
                        <div>
                            <label for="message" class="mb-[10px] block text-left font-semibold text-ColorBlack">Write your message</label>
                            <textarea name="message" id="message" placeholder="Write us your question here..." class="min-h-[130px] w-full rounded-[30px] border border-ColorBlack/50 bg-ColorOffWhite px-[30px] py-[15px] outline-none transition-all duration-300 placeholder:text-ColorBlack/50 focus:border-ColorBlue" required></textarea>
                        </div>
                        <!-- Form Group Item-->
                    </div>
                    <!-- From Group List -->
                    <button type="submit" class="btn is-blue is-rounded is-large mt-6">
                        Send Message
                    </button>
                </form>
            </div>
            <!-- Contact Form Block -->
        </div>
        <!-- Section Container -->
    </div>
    <!-- Section Space -->
</div>
<!-- Contact Section End -->

<!-- Location Section Start -->
<div class="location-section">
    <div class="h-96 w-full lg:h-[600px]">
        <iframe class="w-full h-full" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
    </div>
</div>
<!-- Location Section End -->

<!-- FAQ Section Start -->
<section class="section-faq">
    <div class="relative z-10 overflow-hidden">
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
    </div>
</section>
<!-- FAQ Section End -->

@endsection



@section('footer')
<x-footer1/>
@endsection