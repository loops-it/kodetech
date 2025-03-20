@extends('layout.layout1')

{{-- @section('headerLogo')
<img src="{{ asset('assets/img/kodetech/kodetech-logo.png') }}" alt="Masco" width="109" height="24" />
@endsection --}}




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
<style>
    @media (min-width: 992px) {
        .img-width {
            width: 75% !important
        }
    }

</style>
<!-- Breadcrumb Section Start -->
<section class="section-breadcrumb" style="background-image: url({{ asset('assets/img/kodetech/sub.jpg') }}); background-position: bottom center; background-size: cover">
    <!-- Breadcrumb Section Spacer -->
    <div class="breadcrumb-wrapper" style="background-color: transparent !important">
        <!-- Section Container -->
        <div class="container-default">
            <div class="breadcrumb-block">
                <h1 class="breadcrumb-title">Tech Stack</h1>
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

<!-- Content Section Start -->
<section class="section-content">
    <div class="relative z-10">
        <!-- Section Space -->
        <div class="section-space">
            <!-- Section Container -->
            <div class="container-default">
                <div class="flex flex-col gap-y-20 lg:gap-y-[100px] xl:gap-y-[120px]">
                    <!-- Content Area Single -->
                    <div class="grid items-center gap-10 lg:grid-cols-2 lg:gap-20 xl:gap-20">
                        <!-- Content Block Left -->
                        <div class="jos order-2 lg:order-1" data-jos_animation="fade-right">
                            <!-- Section Wrapper -->
                            <div>
                                <!-- Section Block -->
                                <div class="mb-5">
                                    <h2 class="font-PublicSans text-4xl font-bold leading-[1.14] text-[#121212] lg:text-left lg:text-5xl xl:text-[56px]">
                                        Kode Tech Development Process
                                    </h2>
                                </div>
                                <!-- Section Block -->
                            </div>
                            <!-- Section Wrapper -->
                            <p class="mb-5">
                                At Kode Tech, our development process is powered by the Agile methodology, ensuring flexibility, collaboration, and continuous improvement. We begin by thoroughly understanding your unique business needs, breaking projects into manageable sprints, and prioritizing regular feedback. This iterative approach allows us to deliver high-quality, scalable solutions that align with your goals while adapting seamlessly to changing requirements.
                            </p>
                            {{-- <hr class="mb-5" /> --}}
                            <p>
                                Our dedicated team works closely with clients throughout every stage—planning, development, testing, and deployment. With frequent updates, transparent communication, and a commitment to excellence, we ensure every project is delivered on time and to the highest standard. By integrating innovation with agility, we craft future-ready solutions that are scalable, secure, and designed to evolve with your business. Whether creating cutting-edge web applications or AI-driven tools, we empower businesses to stay ahead in today’s fast-paced digital world. At Kode Tech, your success is our priority.
                            </p>
                        </div>
                        <!-- Content Block Left -->
                        <!-- Content Block Right -->
                        <div class="jos relative order-1 lg:order-2" data-jos_animation="fade-left">
                            <!-- Content Image -->
                            <img src="{{ asset('assets/img/kodetech/Group 1000003459.png') }}" alt="content-img-1" width="523" height="450" class="h-auto w-full  rounded-[10px] img-width" />
                        </div>
                        <!-- Content Block Right -->
                    </div>
                    <!-- Content Area Single -->
                </div>
            </div>
            <!-- Section Container -->
        </div>
        <!-- Section Space -->

        <!-- Content Shape -->
        {{-- <div class="absolute hidden xl:inline-block right-[60px] top-1/3 -z-10 rotate-[29deg]">
            <img src="{{ asset('assets/img/elements/home-8-dot-shape.svg') }}" alt="home-8-dot-shape" width="126" height="275" />
    </div> --}}
    </div>
</section>
<!-- Content Section End -->

<style>
    .hiddentab {
        display: none;
    }

</style>
<!-- Partners Section Start -->
{{-- <div class="section-brand bg-[#1B1C1D] black-section">
    <div class="jos">
        <!-- Section Space -->
        <div class="py-[60px] md:py-20 lg:py-[100px]">
            <!-- Section Container -->
            <div class="container-default">
                <!-- Section Content Wrapper -->
                <div class="jos mb-[60px] xl:mb-20">
                    <!-- Section Content Block -->
                    <div class="mx-auto max-w-[636px]">
                        <h2 class="mb-5 text-center text-white">
                            Explore how we can create your success story
                        </h2>
                    </div>
                    <!-- Section Content Block -->
                </div>
                <!-- Tech Stack Category Slider -->
                <div class="swiper techStack-category-slider">
                    <div class="swiper-button-prev category-prev"></div>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide" data-category="web">
                            <div class="tech-item textTechStack">Web Development</div>
                        </div>
                        <div class="swiper-slide" data-category="software">
                            <div class="tech-item textTechStack">Software Development</div>
                        </div>
                        <div class="swiper-slide" data-category="mobile">
                            <div class="tech-item textTechStack">Mobile Development</div>
                        </div>
                        <div class="swiper-slide" data-category="ai">
                            <div class="tech-item textTechStack">AI Development</div>
                        </div>
                        <div class="swiper-slide" data-category="game">
                            <div class="tech-item textTechStack">Game Development</div>
                        </div>
                        <div class="swiper-slide" data-category="metaverse">
                            <div class="tech-item textTechStack">Metaverse Development</div>
                        </div>
                    </div>
                    <div class="swiper-button-next category-next"></div>
                </div>


                <div class="swiper techStack-image-slider" data-category="web">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="assets/img/kodetech/Group 1000003363 (1).png" alt="Web Tech 1" />
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/img/kodetech/Group 1000003363 (1).png" alt="Web Tech 2" />
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/img/kodetech/Group 1000003363 (1).png" alt="Web Tech 3" />
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/img/kodetech/Group 1000003363 (1).png" alt="Web Tech 4" />
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

                <div class="swiper techStack-image-slider" data-category="game">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="assets/img/kodetech/Group 1000003363 (1).png" alt="Game Tech 1" />
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/img/kodetech/Group 1000003363 (1).png" alt="Game Tech 2" />
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

                <div class="swiper techStack-image-slider " data-category="mobile">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="assets/img/kodetech/Group 1000003363 (1).png" alt="Web Tech 1" />
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/img/kodetech/Group 1000003363 (1).png" alt="Web Tech 2" />
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

                <div class="swiper techStack-image-slider " data-category="ai">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="assets/img/kodetech/Group 1000003363 (1).png" alt="Game Tech 1" />
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/img/kodetech/Group 1000003363 (1).png" alt="Game Tech 2" />
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

                <div class="swiper techStack-image-slider " data-category="software">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="assets/img/kodetech/Group 1000003363 (1).png" alt="Web Tech 1" />
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/img/kodetech/Group 1000003363 (1).png" alt="Web Tech 2" />
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

                <div class="swiper techStack-image-slider" data-category="metaverse">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="assets/img/kodetech/Group 1000003363 (1).png" alt="Game Tech 1" />
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/img/kodetech/Group 1000003363 (1).png" alt="Game Tech 2" />
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<div class="section-brand bg-[#1B1C1D] black-section">
    <div class="jos">
        <!-- Section Space -->
        <div class="py-[60px] md:py-20 lg:py-[100px]">
            <!-- Section Container -->
            <div class="container-default">
                <!-- Section Content Wrapper -->
                <div class="jos mb-[60px] xl:mb-20">
                    <!-- Section Content Block -->
                    <div class="mx-auto max-w-[636px]">
                        <h2 class="mb-5 text-center text-white">
                            Explore how we can create your success story
                        </h2>
                    </div>
                    <!-- Section Content Block -->
                </div>
                <!-- Tech Stack Category Slider -->
                <div class="swiper techStack-new-category-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide" data-category="web">
                            <div class="tech-item textTechStack">
                                <p>Web Development</p>
                                {{-- <img src="assets/img/kodetech/Group 1000003363 (1).png" alt="Web Tech 1" /> --}}
                                <div class="grid grid-cols-1 gap-4 p-4 md:grid-cols-2 lg:grid-cols-4 lg:grid-rows-2">
                                    <div class="bg-blue-500 p-6 text-white rounded-lg">Item 1</div>
                                    <div class="bg-green-500 p-6 text-white rounded-lg">Item 2</div>
                                    <div class="bg-red-500 p-6 text-white rounded-lg">Item 3</div>
                                    <div class="bg-yellow-500 p-6 text-white rounded-lg">Item 4</div>
                                    <div class="bg-purple-500 p-6 text-white rounded-lg">Item 5</div>
                                    <div class="bg-pink-500 p-6 text-white rounded-lg">Item 6</div>
                                    <div class="bg-gray-500 p-6 text-white rounded-lg">Item 7</div>
                                    <div class="bg-teal-500 p-6 text-white rounded-lg">Item 8</div>
                                </div>

                            </div>
                        </div>
                        <div class="swiper-slide" data-category="software">
                            <div class="tech-item textTechStack">
                                <p>Software Development</p>
                                <img src="assets/img/kodetech/Group 1000003363 (1).png" alt="Web Tech 1" />
                            </div>
                        </div>
                        <div class="swiper-slide" data-category="mobile">
                            <div class="tech-item textTechStack">
                                <p>Mobile Development</p>
                                <img src="assets/img/kodetech/Group 1000003363 (1).png" alt="Web Tech 1" />
                            </div>
                        </div>
                        <div class="swiper-slide" data-category="ai">
                            <div class="tech-item textTechStack">
                                <p>AI Development</p>
                                <img src="assets/img/kodetech/Group 1000003363 (1).png" alt="Web Tech 1" />
                            </div>
                        </div>
                        <div class="swiper-slide" data-category="game">
                            <div class="tech-item textTechStack">
                                <p>Game Development</p>
                                <img src="assets/img/kodetech/Group 1000003363 (1).png" alt="Web Tech 1" />
                            </div>
                        </div>
                        <div class="swiper-slide" data-category="metaverse">
                            <div class="tech-item textTechStack">
                                <p>Metaverse Development</p>
                                <img src="assets/img/kodetech/Group 1000003363 (1).png" alt="Web Tech 1" />
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Partners Section End -->

<!-- Portfolio Section Start -->
<section class="section-portfolio">
    <div class="relative z-10 overflow-hidden">
        <!-- Section Space -->
        <div class="section-space">
            <!-- Section Container -->
            <div class="container-default">
                <!-- Section Wrapper -->
                <div class="jos mb-[60px] flex flex-wrap items-end justify-between gap-8 xl:mb-20">
                    <!-- Section Block -->
                    <div class="max-w-[550px]">
                        <h2>We create world-class web design, & branding</h2>
                    </div>
                    <!-- Section Block -->
                    <a href="{{ url('portfolio') }}" class="btn is-blue is-rounded btn-animation is-large group"><span>View More Works</span></a>
                </div>
                <!-- Section Wrapper -->

                <!-- Portfolio List -->
                <div class="grid gap-8 md:grid-cols-2 lg:gap-10 xl:gap-[60px]">
                    <!-- Portfolio Item -->
                    <div class="jos" data-jos_delay="0">
                        <div class="group">
                            <div class="overflow-hidden rounded-[10px]">
                                <img src="{{ asset('assets/img/kodetech/Rectangle 103.png') }}" alt="portfolio-img-1" width="617" height="450" class="h-full w-full object-cover transition-all duration-300 ease-in-out group-hover:scale-105" />
                            </div>
                            <div class="mt-6">
                                <div class="mb-5 flex flex-wrap justify-between gap-5 text-ColorBlack lg:flex-nowrap xl:mb-7">
                                    <a href="{{ url('portfoliodetails') }}" class="text-xl font-semibold leading-[1.33] -tracking-[0.5px] group-hover:text-ColorBlue xl:text-2xl">App — The power of communication</a>
                                    <a href="#" class="hover:text-ColorBlue">UI/UX Design</a>
                                </div>
                                <a href="{{ url('portfoliodetails') }}" class="text-base font-bold capitalize leading-[1.5] group-hover:text-ColorBlue">View More
                                    <span class="inline-block transition-all duration-150 group-hover:translate-x-2"><i class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                    <!-- Portfolio Item -->
                    <!-- Portfolio Item -->
                    <div class="jos" data-jos_delay="0.3">
                        <div class="group">
                            <div class="overflow-hidden rounded-[10px]">
                                <img src="{{ asset('assets/img/kodetech/Rectangle 104.png') }}" alt="portfolio-img-2" width="617" height="450" class="h-full w-full object-cover transition-all duration-300 ease-in-out group-hover:scale-105" />
                            </div>
                            <div class="mt-6">
                                <div class="mb-5 flex flex-wrap justify-between gap-5 text-ColorBlack lg:flex-nowrap xl:mb-7">
                                    <a href="{{ url('portfoliodetails') }}" class="text-xl font-semibold leading-[1.33] -tracking-[0.5px] group-hover:text-ColorBlue xl:text-2xl">Website — The future lifestyle platform.</a>
                                    <a href="#" class="hover:text-ColorBlue">Branding</a>
                                </div>
                                <a href="{{ url('portfoliodetails') }}" class="text-base font-bold capitalize leading-[1.5] group-hover:text-ColorBlue">View More
                                    <span class="inline-block transition-all duration-150 group-hover:translate-x-2"><i class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                    <!-- Portfolio Item -->
                </div>
                <!-- Portfolio List -->
            </div>
            <!-- Section Container -->
        </div>
        <!-- Section Space -->

        <!-- Portfolio Shape - 2 -->
        <div class="absolute right-0 top-0 -z-10">
            <img src="{{ asset('assets/img/elements/portfolio-1-shape-1.svg') }}" alt="portfolio-1-shape-1" width="467" height="609" />
        </div>
    </div>
</section>
<!-- Portfolio Section End -->

<script>
    document.querySelectorAll('.techstack-button').forEach(function(button) {
        button.addEventListener('click', function() {
            document.querySelectorAll('.techstack-slider').forEach(function(slider) {
                slider.style.display = 'none';
            });

            var techstackClass = this.getAttribute('data-techstack');
            var selectedSlider = document.querySelector('.' + techstackClass);

            selectedSlider.style.display = 'block';

        });
    });

</script>


@endsection
