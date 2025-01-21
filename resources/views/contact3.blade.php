@extends('layout.layout1')

@section('headerLogo')
<img src="{{ asset('assets/img/kodetech/kodetech-logo.png') }}" alt="Masco" width="109" height="24" />
@endsection

@section('headButtons')

<div class="flex items-center gap-6">
    {{-- <a href="{{ url('login') }}" class="btn-text hidden hover:text-ColorBlue md:inline-block">Login</a>
    <a href="{{ url('signup') }}" class="btn is-blue is-rounded btn-animation group hidden md:inline-block"><span>Sign up free</span></a> --}}
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
                    <h1 class="breadcrumb-title">Contact Us</h1>
                    {{-- <ul class="breadcrumb-nav">
                        <li><a href="{{ url('index') }}">Home</a></li>
                        <li>Contact Us</li>
                    </ul> --}}
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

    <!-- Contact Info Section Start -->
    <div class="section-contact-info">
        <!-- Section Space -->
        <div class="section-space">
            <!-- Section Container -->
            <div class="container-default">
                <div class="grid items-center gap-10 md:grid-cols-2 lg:gap-20 xl:grid-cols-[0.9fr_1fr] xl:gap-32 xxl:grid-cols-[0.7fr_1fr] xxl:gap-[210px]">
                    <!-- Contact Info List -->
                    <div class="flex flex-col gap-[60px]">
                        <!-- Contact Info Item -->
                        <div class="jos flex gap-[30px]" data-jos_delay="0">
                            <img src="{{ asset('assets/img/icons/icon-duotone-chat.svg') }}" alt="icon-duotone-chat" width="64" height="60" class="mb-[30px] h-[60px] w-auto" />
                            <div>
                                <div class="mb-4 text-2xl font-semibold -tracking-[0.5] text-ColorBlack">
                                    Chat with us
                                </div>
                                <p>
                                    We're waiting to help you every Monday-Friday from 9 am
                                    to 5 pm EST easily.
                                </p>
                            </div>
                        </div>
                        <!-- Contact Info Item -->
                        <!-- Contact Info Item -->
                        <div class="jos flex gap-[30px]" data-jos_delay="0.3">
                            <img src="{{ asset('assets/img/icons/icon-duotone-phone.svg') }}" alt="icon-duotone-phone" width="64" height="60" class="mb-[30px] h-[60px] w-auto" />
                            <div>
                                <div class="mb-4 text-2xl font-semibold -tracking-[0.5] text-ColorBlack">
                                    Give us a call
                                </div>
                                <p>
                                    Give us a ring at
                                    <a href="tel:+01234567890" class="font-semibold hover:text-ColorBlue">(+012-345-567-890)</a>. Every monday-friday from 9 am to 5 pm.
                                </p>
                            </div>
                        </div>
                        <!-- Contact Info Item -->
                        <!-- Contact Info Item -->
                        <div class="jos flex gap-[30px]" data-jos_delay="0.6">
                            <img src="{{ asset('assets/img/icons/icon-duotone-message.svg') }}" alt="icon-duotone-message" width="64" height="60" class="mb-[30px] h-[60px] w-auto" />
                            <div>
                                <div class="mb-4 text-2xl font-semibold -tracking-[0.5] text-ColorBlack">
                                    Email Us
                                </div>
                                <p>
                                    Drop us an email at
                                    <a href="mailto:example@yourmail.com" class="font-semibold underline underline-offset-4 hover:text-ColorBlue">example@gmail.com</a>
                                    and you'll receive a reply within 24 hours.
                                </p>
                            </div>
                        </div>
                        <!-- Contact Info Item -->
                    </div>
                    <!-- Contact Info List -->
                    <!-- Contact Form Block -->
                    <div class="jos xm:p-10 rounded-[10px] border-2 border-ColorBlack/50 bg-ColorOffWhite p-[30px]">
                        <div class="mb-5 text-xl font-semibold tracking-tight text-ColorBlack lg:text-2xl">
                            Send us a message
                        </div>

                        <form action="https://formspree.io/f/mlqvzkyx" method="post">
                            <!-- From Group List -->
                            <div class="flex flex-col gap-6">
                                <!-- Form Group Item-->
                                <div>
                                    <input type="text" name="name" id="name" placeholder="Enter your full name" class="w-full border-b-2 border-dashed border-ColorBlack/20 bg-ColorOffWhite px-2 py-[15px] outline-none transition-all duration-300 placeholder:text-ColorBlack/50 focus:border-ColorBlue" required />
                                </div>
                                <!-- Form Group Item-->
                                <!-- Form Group Item-->
                                <div>
                                    <input type="tel" name="phone" id="phone" placeholder="Enter your phone number*" class="w-full border-b-2 border-dashed border-ColorBlack/20 bg-ColorOffWhite px-2 py-[15px] outline-none transition-all duration-300 placeholder:text-ColorBlack/50 focus:border-ColorBlue" required />
                                </div>
                                <!-- Form Group Item-->
                                <!-- Form Group Item-->
                                <div>
                                    <input type="email" name="email" id="email" placeholder="Enter your email" class="w-full border-b-2 border-dashed border-ColorBlack/20 bg-ColorOffWhite px-2 py-[15px] outline-none transition-all duration-300 placeholder:text-ColorBlack/50 focus:border-ColorBlue" required />
                                </div>
                                <!-- Form Group Item-->
                                <!-- Form Group Item-->
                                <div>
                                    <textarea name="message" id="message" placeholder="Write us your question here..." class="min-h-[130px] w-full border-b-2 border-dashed border-ColorBlack/20 bg-ColorOffWhite px-2 py-[15px] outline-none transition-all duration-300 placeholder:text-ColorBlack/50 focus:border-ColorBlue" required></textarea>
                                </div>
                                <!-- Form Group Item-->
                            </div>
                            <!-- From Group List -->
                            <button type="submit" class="btn is-blue is-rounded is-large mt-8 block w-full">
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
    </div>
    <!-- Contact Info Section End -->

@endsection



@section('footer')
    <x-footer1/>
@endsection