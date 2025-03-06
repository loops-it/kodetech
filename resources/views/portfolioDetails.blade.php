@extends('layout.layout1')

@section('headerLogo')
<img src="{{ asset('assets/img/logo-blue-dark.png') }}" alt="Masco" width="109" height="24" />
@endsection



@section('headButtons')

<div class="flex items-center gap-6">
    {{-- <a href="{{ url('login') }}" class="btn-text hidden hover:text-ColorBlue sm:inline-block">Login</a>
    <a href="{{ url('signup') }}" class="btn is-blue is-rounded btn-animation group hidden sm:inline-block"><span>Sign up free</span></a> --}}
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
<section class="section-breadcrumb" style="background-image: url({{ asset('assets/img/kodetech/sub.jpg') }}); background-position: bottom center; background-size: cover">
    <!-- Breadcrumb Section Spacer -->
    <div class="breadcrumb-wrapper" style="background-color: transparent !important">
        <!-- Section Container -->
        <div class="container-default">
            <div class="breadcrumb-block">
                <h1 class="breadcrumb-title">App — The power of communication</h1>
                {{-- <ul class="breadcrumb-nav">
                    <li><a href="{{ url('index') }}">Home</a></li>
                <li>About</li>
                </ul> --}}
            </div>
        </div>
        <!-- Section Container -->

        <!-- Breadcrumb Shape - 1 -->
        {{-- <div class="absolute left-0 top-0 -z-10">
            <img src="{{ asset('assets/img/elements/breadcrumb-shape-1.svg') }}" alt="hero-shape-1" width="291" height="380" />
    </div> --}}

    <!-- Breadcrumb Shape - 2 -->
    {{-- <div class="absolute bottom-0 right-0 -z-[1]">
            <img src="{{ asset('assets/img/elements/breadcrumb-shape-2.svg') }}" alt="hero-shape-2" width="291" height="380" />
    </div> --}}
    </div>
    <!-- Breadcrumb Section Spacer -->
</section>
<!-- Breadcrumb Section End -->

<!-- Portfolio Section Start -->
<section class="section-portfolio">
    <!-- Section Space -->
    <div class="section-space">
        <!-- Section Container -->
        <div class="container-default">
            <!-- Portfolio Details Area -->
            <div class="mx-auto max-w-[1076px]">
                <!-- Portfolio Main Image -->
                <img src="{{ asset('assets/img/th-1/portfolio-main-img.jpg') }}" alt="portfolio-main-img" width="1076" height="600" class="h-auto w-full rounded-[10px]" />
                <!-- Portfolio Main Image -->

                <!-- Portfolio Info List -->
                <ul class="mb-[60px] mt-[30px] flex flex-wrap justify-between gap-8">
                    <li>
                        <span class="mb-[5px] block text-xl font-bold leading-[1.4] text-ColorBlack">Client:</span>
                        <span class="text-ColorBlack/80">Adam Smith</span>
                    </li>
                    <li>
                        <span class="mb-[5px] block text-xl font-bold leading-[1.4] text-ColorBlack">Category:</span>
                        <span class="text-ColorBlack/80">UI/UX Design</span>
                    </li>
                    <li>
                        <span class="mb-[5px] block text-xl font-bold leading-[1.4] text-ColorBlack">Duration:</span>
                        <span class="text-ColorBlack/80">1 Week</span>
                    </li>
                    <li>
                        <span class="mb-[5px] block text-xl font-bold leading-[1.4]">Website Link:</span>
                        <span class="text-ColorBlack/80">example@gmail.com</span>
                    </li>
                </ul>
                <!-- Portfolio Info List -->

                <!-- Portfolio Rich Text -->
                <div class="rich-text">
                    <h4>Project overview</h4>
                    <p>
                        Mobile UX design is the design of user experiences for
                        hand-held and wearable devices. Designers create solutions
                        (typically applications) to meet mobile users' unique
                        requirements and restrictions. Designers focus on
                        accessibility, discoverability and efficiency to optimize
                        on-the-go interactive experiences.
                    </p>
                    <p>
                        Interface (UI) determines how the app will look like, while
                        UX determines what problem it will solve in the users' life.
                        UI is revolves around visually directing the user about the
                        app interface, while UX includes researching, testing,
                        developing the app.
                    </p>

                    <h5>What we did for this project</h5>
                    <p>
                        A user can engage with a product or service by using a user
                        interface (UI), which is essentially a collection of
                        screens, pages, visual elements (such as buttons and icons).
                        The phrase “User Experience” refers to how a person reacts
                        to each component.
                    </p>
                    <ol class="list-inside list-decimal">
                        <li>Strategic Discovery</li>
                        <li>Web application redesign and optimization</li>
                        <li>Mobile application redesign and optimization</li>
                        <li>Landing page redesign and optimization</li>
                        <li>Component-based UI-Kit</li>
                        <li>Product design sprints to explore new functionality</li>
                    </ol>

                    <h5>Project results</h5>
                    <p>
                        The UI/UX design of software and applications helps improve
                        customer experience and satisfaction. This ultimately helps
                        increase the number of people using your product. If users
                        encounter roadblocks when trying to complete actions on your
                        product, they are very likely to drop off.
                    </p>
                    <p>
                        Creating a brand with clear and targeted messaging was
                        crucial in increasing conversions. Together with the Webflow
                        team, we have compiled a new product page structure using
                        the App model and packed that in an excellent cover 🙂
                    </p>
                </div>
                <!-- Portfolio Rich Text -->
            </div>
            <!-- Portfolio Details Area -->
        </div>
        <!-- Section Container -->
    </div>
    <!-- Section Space -->
</section>
<!-- Portfolio Section End -->

<!-- Horizontal Text Slider -->
{{-- <div class="overflow-hidden bg-ColorBlack py-5 text-3xl font-bold uppercase leading-[1.4] tracking-widest text-white">
    <!-- Horizontal Slider Block-->
    <div class="horizontal-slide-from-right-to-left flex gap-x-[30px]">
        <span class="inline-block min-w-[855px]">We complete client's projects efficiently</span>
        <img src="{{ asset('assets/img/icons/fire-icon.png') }}" alt="fire-icon" width="40" height="40" />
        <span class="inline-block min-w-[855px]">We complete client's projects efficiently</span>
        <img src="{{ asset('assets/img/icons/fire-icon.png') }}" alt="fire-icon" width="40" height="40" />
        <span class="inline-block min-w-[855px]">We complete client's projects efficiently</span>
        <img src="{{ asset('assets/img/icons/fire-icon.png') }}" alt="fire-icon" width="40" height="40" />
        <span class="inline-block min-w-[855px]">We complete client's projects efficiently</span>
        <img src="{{ asset('assets/img/icons/fire-icon.png') }}" alt="fire-icon" width="40" height="40" />
    </div>
    <!-- Horizontal Slider Block-->
</div> --}}
<!-- Horizontal Text Slider -->

<!-- Related Portfolio Section Start -->
{{-- <section class="related-portfolio-section">
    <!-- Section Space -->
    <div class="section-space">
        <!-- Section Container -->
        <div class="container-default">
            <div class="mx-auto max-w-[1076px]">
                <!-- Section Wrapper -->
                <div class="jos flex flex-wrap items-center justify-between gap-8">
                    <!-- Section Block -->
                    <div class="mb-5">
                        <h2>Related Project:</h2>
                    </div>
                    <!-- Section Block -->
                </div>
                <!-- Section Wrapper -->
                <p class="jos max-w-[856px]">
                    There are many variations of passages of Lorem Ipsum
                    available, but the majority have suf alteration in some form,
                    by injected humour, or randomised words which don't look even
                    slightly believable.
                </p>

                <!-- Portfolio List -->
                <div class="grid gap-8 sm:grid-cols-2">
                    <!-- Portfolio Item -->
                    <div class="jos">
                        <div class="group">
                            <div class="relative z-10 after:absolute after:inset-0 after:-z-10 after:translate-x-0 after:translate-y-0 after:rounded-[11px] after:bg-ColorBlack after:transition-all after:duration-300 after:ease-in-out hover:after:translate-x-[10px] hover:after:translate-y-[10px]">
                                <div class="overflow-hidden rounded-[10px]">
                                    <img src="{{ asset('assets/img/th-1/portfolio-modern-img-1.jpg') }}" alt="portfolio-modern-img-1" width="406" height="350" class="h-full w-full object-cover transition-all duration-300 ease-in-out group-hover:scale-105" />
                                </div>
                            </div>
                            <div class="mt-8">
                                <div class="mb-3 flex flex-wrap gap-2 text-xl leading-[1.33] -tracking-[0.5px] text-ColorBlack group-hover:text-ColorBlue lg:flex-nowrap xl:text-2xl">
                                    <a href="{{ url('portfoliodetails') }}" class="font-semibold">App
                                    </a>
                                    <span>—</span>
                                    <a href="#" class="hover:text-ColorBlue">UI/UX Design</a>
                                </div>
                                <p class="line-clamp-2 text-base sm:max-w-[350px]">
                                    Lectus faucibus ac sollicitudin feugiat sit. Ac tellus
                                    sit commodo duis mi interdum
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Portfolio Item -->
                    <!-- Portfolio Item -->
                    <div class="jos">
                        <div class="group">
                            <div class="relative z-10 after:absolute after:inset-0 after:-z-10 after:translate-x-0 after:translate-y-0 after:rounded-[11px] after:bg-ColorBlack after:transition-all after:duration-300 after:ease-in-out hover:after:translate-x-[10px] hover:after:translate-y-[10px]">
                                <div class="overflow-hidden rounded-[10px]">
                                    <img src="{{ asset('assets/img/th-1/portfolio-modern-img-2.jpg') }}" alt="portfolio-modern-img-2" width="406" height="350" class="h-full w-full object-cover transition-all duration-300 ease-in-out group-hover:scale-105" />
                                </div>
                            </div>
                            <div class="mt-8">
                                <div class="mb-3 flex flex-wrap gap-2 text-xl leading-[1.33] -tracking-[0.5px] text-ColorBlack group-hover:text-ColorBlue lg:flex-nowrap xl:text-2xl">
                                    <a href="{{ url('portfoliodetails') }}" class="font-semibold">Website
                                    </a>
                                    <span>—</span>
                                    <a href="#" class="hover:text-ColorBlue">Branding</a>
                                </div>
                                <p class="line-clamp-2 text-base sm:max-w-[350px]">
                                    Lectus faucibus ac sollicitudin feugiat sit. Ac tellus
                                    sit commodo duis mi interdum
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Portfolio Item -->
                </div>
                <!-- Portfolio List -->
            </div>
        </div>
        <!-- Section Container -->
    </div>
    <!-- Section Space -->
</section> --}}
<!-- Related Portfolio Section Start -->


@endsection

@section('footer')
<footer class="section-footer">
    <div class="bg-[#1B1C1D]">
        <!-- Footer Area Top-->
        <div class="">
            <!-- Footer Top Spacing -->
            <div class="pt-[60px] lg:pt-20 xl:pt-[100px]">
                <div class="container-default">
                    <div class="flex flex-col items-center justify-between gap-x-10 gap-y-8 rounded-[5px] bg-ColorAtomicTangerine p-10 md:flex-row lg:gap-x-20 lg:p-[50px]">
                        <div class="max-w-none md:max-w-[60%] lg:max-w-[62%] xl:max-w-[636px]">
                            <h2 class="text-center font-GeneralSans font-semibold text-[#1B1C1D] md:text-left">
                                Are you ready to increase your SEO ranking?
                            </h2>
                        </div>
                        <div class="">
                            <a href="#" class="btn is-black is-large btn-animation group inline-block w-full rounded-[3px] border-2"><span>Let's Get Started</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Top Spacing -->
        </div>
        <!-- Footer Area Top-->

        <!-- Footer Area Center -->
        <div class="text-white">
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
                                <img src="{{ asset('assets/img/logo-tangerine-light.png') }}" alt="Masco" width="109" height="24" />
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
                                    <a href="https://twitter.com" target="_blank" rel="noopener noreferrer" class="flex h-[30px] w-[30px] items-center justify-center rounded-[50%] bg-[#FDFBF9]/10 text-sm text-white transition-all duration-300 hover:bg-ColorAtomicTangerine hover:text-[#1B1C1D]" aria-label="twitter">
                                        <i class="fa-brands fa-x-twitter"></i>
                                    </a>
                                    <a href="https://www.facebook.com/" target="_blank" rel="noopener noreferrer" class="flex h-[30px] w-[30px] items-center justify-center rounded-[50%] bg-[#FDFBF9]/10 text-sm text-white transition-all duration-300 hover:bg-ColorAtomicTangerine hover:text-[#1B1C1D]" aria-label="facebook">
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </a>
                                    <a href="https://www.instagram.com/" target="_blank" rel="noopener noreferrer" class="flex h-[30px] w-[30px] items-center justify-center rounded-[50%] bg-[#FDFBF9]/10 text-sm text-white transition-all duration-300 hover:bg-ColorAtomicTangerine hover:text-[#1B1C1D]" aria-label="instagram">
                                        <i class="fa-brands fa-instagram"></i>
                                    </a>
                                    <a href="https://www.github.com/" target="_blank" rel="noopener noreferrer" class="flex h-[30px] w-[30px] items-center justify-center rounded-[50%] bg-[#FDFBF9]/10 text-sm text-white transition-all duration-300 hover:bg-ColorAtomicTangerine hover:text-[#1B1C1D]" aria-label="github">
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
                                    <a href="{{ url('index') }}" class="hover:opcity-100 text-[#FDFBF9]/80 underline-offset-4 transition-all duration-300 ease-linear hover:underline">Home</a>
                                </li>
                                <li>
                                    <a href="{{ url('about') }}" class="hover:opcity-100 text-[#FDFBF9]/80 underline-offset-4 transition-all duration-300 ease-linear hover:underline">About Us</a>
                                </li>
                                <li>
                                    <a href="{{ url('services') }}" class="hover:opcity-100 text-[#FDFBF9]/80 underline-offset-4 transition-all duration-300 ease-linear hover:underline">Services</a>
                                </li>
                                <li>
                                    <a href="{{ url('pricing') }}" class="hover:opcity-100 text-[#FDFBF9]/80 underline-offset-4 transition-all duration-300 ease-linear hover:underline">pricing</a>
                                </li>
                                <li>
                                    <a href="{{ url('contact') }}" class="hover:opcity-100 text-[#FDFBF9]/80 underline-offset-4 transition-all duration-300 ease-linear hover:underline">Contact</a>
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
                                    <a href="{{ url('signup') }}" class="hover:opcity-100 text-[#FDFBF9]/80 underline-offset-4 transition-all duration-300 ease-linear hover:underline">Signup</a>
                                </li>
                                <li>
                                    <a href="{{ url('login') }}" class="hover:opcity-100 text-[#FDFBF9]/80 underline-offset-4 transition-all duration-300 ease-linear hover:underline">Login</a>
                                </li>
                                <li>
                                    <a href="{{ url('error404') }}" class="hover:opcity-100 text-[#FDFBF9]/80 underline-offset-4 transition-all duration-300 ease-linear hover:underline">404 Not found</a>
                                </li>
                                <li>
                                    <a href="{{ url('resetpassword') }}" class="hover:opcity-100 text-[#FDFBF9]/80 underline-offset-4 transition-all duration-300 ease-linear hover:underline">Password Reset</a>
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
                                    <a href="https://www.example.com/" target="_blank" rel="noopener noreferrer" class="hover:opcity-100 text-[#FDFBF9]/80 underline-offset-4 transition-all duration-300 ease-linear hover:underline">Support</a>
                                </li>
                                <li>
                                    <a href="https://www.example.com/" target="_blank" rel="noopener noreferrer" class="hover:opcity-100 text-[#FDFBF9]/80 underline-offset-4 transition-all duration-300 ease-linear hover:underline">Privacy policy</a>
                                </li>
                                <li>
                                    <a href="https://www.example.com/" target="_blank" rel="noopener noreferrer" class="hover:opcity-100 text-[#FDFBF9]/80 underline-offset-4 transition-all duration-300 ease-linear hover:underline">Terms & Conditions</a>
                                </li>
                                <li>
                                    <a href="https://www.example.com/" target="_blank" rel="noopener noreferrer" class="hover:opcity-100 text-[#FDFBF9]/80 underline-offset-4 transition-all duration-300 ease-linear hover:underline">Strategic finance</a>
                                </li>
                                <li>
                                    <a href="https://www.example.com/" target="_blank" rel="noopener noreferrer" class="hover:opcity-100 text-[#FDFBF9]/80 underline-offset-4 transition-all duration-300 ease-linear hover:underline">Video guide</a>
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

        <div class="horizontal-line bg-white"></div>

        <!-- Footer Area Bottom -->
        <div>
            <!-- Footer Bottom Spacing -->
            <div class="py-[18px]">
                <!-- Section Container -->
                <div class="container-default">
                    <div class="text-center text-[#FDFBF9]/80">
                        &copy; Copyright 2024, All Rights Reserved by PixcelsThemes
                    </div>
                </div>
                <!-- Section Container -->
            </div>
            <!-- Footer Bottom Spacing -->
        </div>
        <!-- Footer Area Bottom -->
    </div>
</footer>
@endsection