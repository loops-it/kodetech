<!doctype html>
<html lang="en">

<x-head />
<body>
    <div class="page-wrapper relative z-[1] {{ isset($bgColor) ? $bgColor : 'bg-white' }}">
        <!-- Header Start -->

        <header class="site-header site-header--absolute is--white py-3" id="sticky-menu">
            <div class="container-default">
                <div class="flex items-center justify-between gap-x-8">
                    <!-- Header Logo -->
                    <a href="{{ url('index') }}" class="">
                        @yield('headerLogo')

                    </a>
                    <!-- Header Logo -->

                    <!-- Header Navigation -->
                    <div class="menu-block-wrapper">
                        <div class="menu-overlay"></div>
                        <nav class="menu-block" id="append-menu-header">
                            <div class="mobile-menu-head">
                                <div class="go-back">
                                    <i class="fa-solid fa-angle-left"></i>
                                </div>
                                <div class="current-menu-title"></div>
                                <div class="mobile-menu-close">&times;</div>
                            </div>
                            <ul class="site-menu-main">
                                <li class="nav-item">
                                    <a href="{{ url('/') }}" class="nav-link-item">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('about') }}" class="nav-link-item">About Us</a>
                                </li>
                                 <li class="nav-item">
                                    <a href="{{ url('tech-stack') }}" class="nav-link-item">Tech Stack</a>
                                </li>
                                 <li class="nav-item">
                                    <a href="{{ url('about') }}" class="nav-link-item">Our Services</a>
                                </li>
                                 <li class="nav-item">
                                    <a href="{{ url('about') }}" class="nav-link-item">Our Products</a>
                                </li>
                                 <li class="nav-item">
                                    <a href="{{ url('about') }}" class="nav-link-item">Our Projects</a>
                                </li>
                                <a href="{{ url('contact') }}" class="btn is-blue is-rounded btn-animation group hidden md:inline-block"><span>Contact Us</span></a>
                            </ul>
                            
                        </nav>
                    </div>
                    <!-- Header Navigation -->

                    <!-- Header User Event -->
                    {{-- @yield('headButtons') --}}
                    <!-- Header User Event -->
                </div>
            </div>
        </header>
        <!-- Header End -->

        <main class="main-wrapper relative overflow-hidden">
            @yield('content')
        </main>

        <footer class="section-footer">
            <div class="bg-[#1B1C1D]">
                <!-- Footer Area Top-->
                <div class="">
                    <!-- Footer Top Spacing -->
                    <div class="pt-[60px] lg:pt-20 xl:pt-[100px]">
                        <div class="container-default">
                            <div class="flex flex-col items-center justify-between gap-x-10 gap-y-8 rounded-[5px] bg-white p-10 md:flex-row lg:gap-x-20 lg:p-[50px]" style="border: solid 2px #F90305">
                                <div class="max-w-none md:max-w-[60%] lg:max-w-[62%] xl:max-w-[636px]">
                                    <h2 class="text-center font-GeneralSans font-semibold text-[#1B1C1D] md:text-left">
                                        Are you ready to increase your SEO ranking?
                                    </h2>
                                </div>
                                <div class="">
                                    <a href="#" class="btn is-lime is-large btn-animation group inline-block rounded-[3px]"><span>Let's Get Started</span></a>
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
                                        <img src="{{ asset('assets/img/kodetech/Kode_Tech_v3_copy_2-removebg-preview 2 (1).png') }}" alt="Masco" width="180" height="50" />
                                    </a>
                                    <!-- Footer Content -->
                                    <div>
                                        <!-- Footer About Text -->
                                        <div class="lg:max-w-[416px]">
                                            Kode Tech (Pvt) Ltd is a well-established and renowned software development company with a rich legacy spanning over 14 years. 
                                        </div>
                                        <!-- Footer Mail -->
                                        <a href="mailto:kodetech@gmail.com" class="my-6 block underline-offset-4 transition-all duration-300 hover:underline">kodetech@gmail.com</a>
                                        <!-- Footer Social Link -->
                                        <div class="flex flex-wrap gap-5">
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
                                    <div class="text-xl font-semibold uppercase">
                                        QUICK LINKS
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
                                            <a href="{{ url('services') }}" class="hover:opcity-100 text-[#FDFBF9]/80 underline-offset-4 transition-all duration-300 ease-linear hover:underline">Our Services</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('pricing') }}" class="hover:opcity-100 text-[#FDFBF9]/80 underline-offset-4 transition-all duration-300 ease-linear hover:underline">Our Products</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('contact') }}" class="hover:opcity-100 text-[#FDFBF9]/80 underline-offset-4 transition-all duration-300 ease-linear hover:underline">Our Projects</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('contact') }}" class="hover:opcity-100 text-[#FDFBF9]/80 underline-offset-4 transition-all duration-300 ease-linear hover:underline">Knowledge Center</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Footer Widget Item -->

                                <!-- Footer Widget Item -->
                                <div class="flex flex-col gap-y-6 md:col-span-1 lg:col-span-1">
                                    <!-- Footer Title -->
                                    <div class="text-xl font-semibold uppercase">
                                        OUR SERVICES
                                    </div>
                                    <!-- Footer Title -->

                                    <!-- Footer Navbar -->
                                    <ul class="flex flex-col gap-y-[10px] capitalize">
                                        <li>
                                            <a href="{{ url('signup') }}" class="hover:opcity-100 text-[#FDFBF9]/80 underline-offset-4 transition-all duration-300 ease-linear hover:underline">Web Development</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('login') }}" class="hover:opcity-100 text-[#FDFBF9]/80 underline-offset-4 transition-all duration-300 ease-linear hover:underline">Mobile App Development</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('error404') }}" class="hover:opcity-100 text-[#FDFBF9]/80 underline-offset-4 transition-all duration-300 ease-linear hover:underline">AR & VR Solutions</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('resetpassword') }}" class="hover:opcity-100 text-[#FDFBF9]/80 underline-offset-4 transition-all duration-300 ease-linear hover:underline">Game Development</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Footer Widget Item-->

                                <!-- Footer Widget Item -->
                                <div class="flex flex-col gap-y-6 md:col-span-1 lg:col-span-1">
                                    <!-- Footer Title -->
                                    <div class="text-xl font-semibold capitalize">
                                        OUR SERVICES
                                    </div>
                                    <!-- Footer Title -->

                                    <!-- Footer Navbar -->
                                    <ul class="flex flex-col gap-y-[10px] capitalize">
                                        <li>
                                            <a href="https://www.example.com/" target="_blank" rel="noopener noreferrer" class="hover:opcity-100 text-[#FDFBF9]/80 underline-offset-4 transition-all duration-300 ease-linear hover:underline">Metaverse Solutions</a>
                                        </li>
                                        <li>
                                            <a href="https://www.example.com/" target="_blank" rel="noopener noreferrer" class="hover:opcity-100 text-[#FDFBF9]/80 underline-offset-4 transition-all duration-300 ease-linear hover:underline">Block Chain</a>
                                        </li>
                                        <li>
                                            <a href="https://www.example.com/" target="_blank" rel="noopener noreferrer" class="hover:opcity-100 text-[#FDFBF9]/80 underline-offset-4 transition-all duration-300 ease-linear hover:underline">Software Development</a>
                                        </li>
                                        <li>
                                            <a href="https://www.example.com/" target="_blank" rel="noopener noreferrer" class="hover:opcity-100 text-[#FDFBF9]/80 underline-offset-4 transition-all duration-300 ease-linear hover:underline">AI Solutions</a>
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
        {{-- @yield('footerSection')

        @yield('footer')  --}}


    </div>

    <x-scripts />

</body>

</html>
