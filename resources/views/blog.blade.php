@extends('layout.layout1')

@section('headerLogo')
<img src="{{ asset('assets/img/logo-blue-dark.png') }}" alt="Masco" width="109" height="24" />
@endsection

@section ('headButtons')

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



@section('content')'

     <!-- Breadcrumb Section Start -->
     <section class="section-breadcrumb">
        <!-- Breadcrumb Section Spacer -->
        <div class="breadcrumb-wrapper">
            <!-- Section Container -->
            <div class="container-default">
                <div class="breadcrumb-block">
                    <h1 class="breadcrumb-title">Blog</h1>
                    <ul class="breadcrumb-nav">
                        <li><a href="{{ url('index') }}">Home</a></li>
                        <li>Blog</li>
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

    <!-- Blog Section Start -->
    <section class="blog-section">
        <!-- Section Spacer -->
        <div class="section-space">
            <!-- Section Container -->
            <div class="container-default">
                <div class="grid grid-cols-1 gap-x-6 gap-y-10 lg:grid-cols-[1fr,minmax(416px,_0.45fr)]">
                    <div class="flex flex-col gap-y-10 lg:gap-y-14 xl:gap-y-20">
                        <!-- Blog Post List -->
                        <div class="grid gap-y-10">
                            <!-- Blog Post Single Item -->
                            <div class="jos">
                                <div class="group overflow-hidden rounded-[10px] border border-[#E1E1E] bg-white hover:border-white hover:shadow-[0_4px_60px_rgba(10,16,47,0.08)]">
                                    <a href="{{ url('blogdetails') }}" class="block overflow-hidden">
                                        <img src="{{ asset('assets/img/th-1/blog-main-1.jpg') }}" alt="blog-main-1" width="856" height="450" class="h-auto w-full scale-100 object-cover transition-all duration-300 group-hover:scale-105" />
                                    </a>
                                    <div class="p-[30px]">
                                        <!-- Blog Post Meta -->
                                        <ul class="flex flex-wrap items-center gap-4 text-base font-semibold sm:gap-6">
                                            <li>
                                                <a href="{{ url('blogdetails') }}" class="flex items-center gap-x-[10px] hover:text-ColorBlue">
                                                    <img src="{{ asset('assets/img/th-1/blog-author-img-1.jpg') }}" alt="blog-author-img-1" width="45" height="45" class="rounded-[50%]" />
                                                    By Willium Mark
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ url('blogdetails') }}" class="flex items-center gap-x-[10px] hover:text-ColorBlue">
                                                    <i class="fa-regular fa-calendar"></i>
                                                    Jan 28, 2023
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ url('blogdetails') }}" class="rounded-[50px] bg-ColorBlack/5 px-[26px] py-1.5 text-ColorBlack/60 hover:bg-ColorBlue hover:text-white">Business</a>
                                            </li>
                                        </ul>
                                        <!-- Blog Post Meta -->
                                        <h2 class="mb-5 mt-8 line-clamp-2 font-body text-2xl font-bold leading-[1.4] -tracking-[1px] lg:text-3xl">
                                            <a href="{{ url('blogdetails') }}">
                                                How we use Slack, Trello, and TeamGantt for best
                                                project management as a digital agency</a>
                                        </h2>
                                        <p class="mb-7 line-clamp-2 last:mb-0">
                                            We’d been making awesome apps for years now, but
                                            always just barely stumbled through project
                                            management. We pissed off clients and burned
                                            bridges, even though we were...
                                        </p>
                                        <a href="{{ url('blogdetails') }}" class="inline-flex items-center gap-x-2 text-base font-bold text-ColorBlack group-hover:text-ColorBlue">Read More
                                            <span class="transition-all duration-300 ease-in-out group-hover:translate-x-2">
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Blog Post Single Item -->
                            <!-- Blog Post Single Item -->
                            <div class="jos">
                                <div class="group overflow-hidden rounded-[10px] border border-[#E1E1E] bg-white hover:border-white hover:shadow-[0_4px_60px_rgba(10,16,47,0.08)]">
                                    <a href="{{ url('blogdetails') }}" class="block overflow-hidden">
                                        <img src="{{ asset('assets/img/th-1/blog-main-2.jpg') }}" alt="blog-main-2" width="856" height="450" class="h-auto w-full scale-100 object-cover transition-all duration-300 group-hover:scale-105" />
                                    </a>
                                    <div class="p-[30px]">
                                        <!-- Blog Post Meta -->
                                        <ul class="flex flex-wrap items-center gap-4 text-base font-semibold sm:gap-6">
                                            <li>
                                                <a href="{{ url('blogdetails') }}" class="flex items-center gap-x-[10px] hover:text-ColorBlue">
                                                    <img src="{{ asset('assets/img/th-1/blog-author-img-2.jpg') }}" alt="blog-author-img-2" width="45" height="45" class="rounded-[50%]" />
                                                    By Leslie Alexander
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ url('blogdetails') }}" class="flex items-center gap-x-[10px] hover:text-ColorBlue">
                                                    <i class="fa-regular fa-calendar"></i>
                                                    Feb 20, 2024
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ url('blogdetails') }}" class="rounded-[50px] bg-ColorBlack/5 px-[26px] py-1.5 text-ColorBlack/60 hover:bg-ColorBlue hover:text-white">Technology</a>
                                            </li>
                                        </ul>
                                        <!-- Blog Post Meta -->
                                        <h2 class="mb-5 mt-8 line-clamp-2 font-body text-2xl font-bold leading-[1.4] -tracking-[1px] lg:text-3xl">
                                            <a href="{{ url('blogdetails') }}">
                                                Hiring a digital agency — 5 things you need to
                                                check out before signing up & the future of the
                                                digital agency</a>
                                        </h2>
                                        <p class="mb-7 line-clamp-2 last:mb-0">
                                            The Digital Agency wasn’t set up to only serve ads.
                                            No, sir. It was setup to improve process, from
                                            backroom to front desk marketing. Digital agencies
                                            need to be able to help clients...
                                        </p>
                                        <a href="{{ url('blogdetails') }}" class="inline-flex items-center gap-x-2 text-base font-bold text-ColorBlack group-hover:text-ColorBlue">Read More
                                            <span class="transition-all duration-300 ease-in-out group-hover:translate-x-2">
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Blog Post Single Item -->
                            <!-- Blog Post Single Item -->
                            <div class="jos">
                                <div class="group overflow-hidden rounded-[10px] border border-[#E1E1E] bg-white hover:border-white hover:shadow-[0_4px_60px_rgba(10,16,47,0.08)]">
                                    <a href="{{ url('blogdetails') }}" class="block overflow-hidden">
                                        <img src="{{ asset('assets/img/th-1/blog-main-3.jpg') }}" alt="blog-main-3" width="856" height="450" class="h-auto w-full scale-100 object-cover transition-all duration-300 group-hover:scale-105" />
                                    </a>
                                    <div class="p-[30px]">
                                        <!-- Blog Post Meta -->
                                        <ul class="flex flex-wrap items-center gap-4 text-base font-semibold sm:gap-6">
                                            <li>
                                                <a href="{{ url('blogdetails') }}" class="flex items-center gap-x-[10px] hover:text-ColorBlue">
                                                    <img src="{{ asset('assets/img/th-1/blog-author-img-3.jpg') }}" alt="blog-author-img-3" width="45" height="45" class="rounded-[50%]" />
                                                    By Marvin McKinney
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ url('blogdetails') }}" class="flex items-center gap-x-[10px] hover:text-ColorBlue">
                                                    <i class="fa-regular fa-calendar"></i>
                                                    Feb 28, 2023
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ url('blogdetails') }}" class="rounded-[50px] bg-ColorBlack/5 px-[26px] py-1.5 text-ColorBlack/60 hover:bg-ColorBlue hover:text-white">Marketing</a>
                                            </li>
                                        </ul>
                                        <!-- Blog Post Meta -->
                                        <h2 class="mb-5 mt-8 line-clamp-2 font-body text-2xl font-bold leading-[1.4] -tracking-[1px] lg:text-3xl">
                                            <a href="{{ url('blogdetails') }}">
                                                Difficulties of running a digital agency in the
                                                competitive market [PODCAST] why digital agency
                                                sucks</a>
                                        </h2>
                                        <p class="mb-7 line-clamp-2 last:mb-0">
                                            From what you do I noticed that you have a certain
                                            style of explainer videos which is really awesome
                                            and I love it! Since you said that you also focus on
                                            digital products...
                                        </p>
                                        <a href="{{ url('blogdetails') }}" class="inline-flex items-center gap-x-2 text-base font-bold text-ColorBlack group-hover:text-ColorBlue">Read More
                                            <span class="transition-all duration-300 ease-in-out group-hover:translate-x-2">
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Blog Post Single Item -->
                        </div>
                        <!-- Blog Post List -->
                        <!-- Pagination -->
                        <nav aria-label="Pagination" class="jos flex justify-center" data-jos_animation="fade">
                            <ul class="flex gap-x-[15px]">
                                <li>
                                    <a href="#" aria-label="Previous" class="group flex h-10 w-10 items-center justify-center rounded-[50%] bg-white font-semibold transition-all duration-300 hover:bg-ColorBlue hover:text-white lg:h-[50px] lg:w-[50px]">
                                        <i class="fa-solid fa-chevron-left"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" aria-current="page" class="group flex h-10 w-10 items-center justify-center rounded-[50%] bg-ColorBlue font-semibold text-white transition-all duration-300 hover:bg-ColorBlue hover:text-white lg:h-[50px] lg:w-[50px]">1</a>
                                </li>
                                <li>
                                    <a href="#" class="group flex h-10 w-10 items-center justify-center rounded-[50%] bg-white font-semibold transition-all duration-300 hover:bg-ColorBlue hover:text-white lg:h-[50px] lg:w-[50px]">2</a>
                                </li>
                                <li>
                                    <a href="#" class="group flex h-10 w-10 items-center justify-center rounded-[50%] bg-white font-semibold transition-all duration-300 hover:bg-ColorBlue hover:text-white lg:h-[50px] lg:w-[50px]">3</a>
                                </li>
                                <li>
                                    <a href="#" aria-label="Previous" class="group flex h-10 w-10 items-center justify-center rounded-[50%] bg-white font-semibold transition-all duration-300 hover:bg-ColorBlue hover:text-white lg:h-[50px] lg:w-[50px]">
                                        <i class="fa-solid fa-chevron-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <!-- Pagination -->
                    </div>
                    <!-- Blog Aside -->
                    <aside class="jos flex flex-col gap-y-[30px]">
                        <!-- Single Sidebar -->
                        <div class="rounded-[10px] bg-ColorOffWhite p-5">
                            <!-- Sidebar Search -->
                            <form action="#" method="post" class="relative h-[60px]">
                                <input type="search" name="sidebar-search" id="sidebar-search" placeholder="Type to search..." class="focus:border-colortext-ColorBlue h-full w-full rounded-[50px] border border-[#E1E1E1] bg-white py-[15px] pl-16 pr-8 text-lg text-ColorBlack outline-none transition-all placeholder:text-ColorBlack" required />
                                <button type="submit" class="absolute left-[30px] top-0 h-full hover:text-ColorBlue">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </button>
                            </form>
                            <!-- Sidebar Search -->
                        </div>
                        <!-- Single Sidebar -->
                        <!-- Single Sidebar -->
                        <div class="rounded-[10px] bg-ColorOffWhite p-8">
                            <div class="relative mb-[30px] inline-block pb-[10px] text-lg font-semibold text-ColorBlack after:absolute after:bottom-0 after:left-0 after:h-[2px] after:w-full after:bg-black">
                                Blog Categories
                            </div>
                            <!-- Blog Categories List -->
                            <ul class="text-ColorBlack">
                                <li class="border-b border-ColorBlack/10 pb-[14px] pt-[14px] first:pt-0 last:border-b-0 last:pb-0">
                                    <a href="{{ url('blogdetails') }}" class="hover:text-ColorBlue">Business & Marketing (18)</a>
                                </li>
                                <li class="border-b border-ColorBlack/10 pb-[14px] pt-[14px] first:pt-0 last:border-b-0 last:pb-0">
                                    <a href="{{ url('blogdetails') }}" class="hover:text-ColorBlue">Technology (05)</a>
                                </li>
                                <li class="border-b border-ColorBlack/10 pb-[14px] pt-[14px] first:pt-0 last:border-b-0 last:pb-0">
                                    <a href="{{ url('blogdetails') }}" class="hover:text-ColorBlue">Art & Beauty (23)</a>
                                </li>
                                <li class="border-b border-ColorBlack/10 pb-[14px] pt-[14px] first:pt-0 last:border-b-0 last:pb-0">
                                    <a href="{{ url('blogdetails') }}" class="hover:text-ColorBlue">Digital Agency (10)</a>
                                </li>
                            </ul>
                            <!-- Blog Categories List -->
                        </div>
                        <!-- Single Sidebar -->
                        <!-- Single Sidebar -->
                        <div class="rounded-[10px] bg-ColorOffWhite p-8">
                            <div class="relative mb-[30px] inline-block pb-[10px] text-lg font-semibold text-ColorBlack after:absolute after:bottom-0 after:left-0 after:h-[2px] after:w-full after:bg-black">
                                Recent Posts
                            </div>

                            <!-- Blog Recent Post List -->
                            <ul class="flex flex-col gap-y-6">
                                <li class="group flex flex-col items-center gap-x-4 gap-y-4 sm:flex-row">
                                    <a href="{{ url('blogdetails') }}" class="inline-block h-[100px] w-full overflow-hidden rounded-[5px] sm:w-[150px]">
                                        <img src="{{ asset('assets/img/th-1/blog-recent-img-1.jpg') }}" alt="blog-recent-img-1" width="150" height="100" class="h-full w-full scale-100 object-cover transition-all duration-300 group-hover:scale-105" />
                                    </a>
                                    <div class="flex w-full flex-col gap-y-3 sm:w-auto sm:flex-1">
                                        <a href="{{ url('blogdetails') }}" class="flex items-center gap-[10px] text-sm hover:text-ColorBlue">
                                            <i class="fa-regular fa-calendar"></i>
                                            June 12, 2024
                                        </a>
                                        <a href="{{ url('blogdetails') }}" class="line-clamp-2 text-base font-semibold text-ColorBlack hover:text-ColorBlue">Six ‘what ifs’ that could transformdigital agency
                                        </a>
                                    </div>
                                </li>
                                <li class="group flex flex-col items-center gap-x-4 gap-y-4 sm:flex-row">
                                    <a href="{{ url('blogdetails') }}" class="inline-block h-[100px] w-full overflow-hidden rounded-[5px] sm:w-[150px]">
                                        <img src="{{ asset('assets/img/th-1/blog-recent-img-2.jpg') }}" alt="blog-recent-img-2" width="150" height="100" class="h-full w-full scale-100 object-cover transition-all duration-300 group-hover:scale-105" />
                                    </a>
                                    <div class="flex w-full flex-col gap-y-3 sm:w-auto sm:flex-1">
                                        <a href="{{ url('blogdetails') }}" class="flex items-center gap-[10px] text-sm hover:text-ColorBlue">
                                            <i class="fa-regular fa-calendar"></i>
                                            June 13, 2024
                                        </a>
                                        <a href="{{ url('blogdetails') }}" class="line-clamp-2 text-base font-semibold text-ColorBlack hover:text-ColorBlue">Case story: How to the design avatar generator
                                        </a>
                                    </div>
                                </li>
                                <li class="group flex flex-col items-center gap-x-4 gap-y-4 sm:flex-row">
                                    <a href="{{ url('blogdetails') }}" class="inline-block h-[100px] w-full overflow-hidden rounded-[5px] sm:w-[150px]">
                                        <img src="{{ asset('assets/img/th-1/blog-recent-img-3.jpg') }}" alt="blog-recent-img-3" width="150" height="100" class="h-full w-full scale-100 object-cover transition-all duration-300 group-hover:scale-105" />
                                    </a>
                                    <div class="flex w-full flex-col gap-y-3 sm:w-auto sm:flex-1">
                                        <a href="{{ url('blogdetails') }}" class="flex items-center gap-[10px] text-sm hover:text-ColorBlue">
                                            <i class="fa-regular fa-calendar"></i>
                                            June 07, 2024
                                        </a>
                                        <a href="{{ url('blogdetails') }}" class="line-clamp-2 text-base font-semibold text-ColorBlack hover:text-ColorBlue">Build a digital agency website in 4 easy steps
                                        </a>
                                    </div>
                                </li>
                            </ul>
                            <!-- Blog Recent Post List -->
                        </div>
                        <!-- Single Sidebar -->
                        <!-- Single Sidebar -->
                        <div class="rounded-[10px] bg-ColorOffWhite p-8">
                            <div class="relative mb-[30px] inline-block pb-[10px] text-lg font-semibold text-ColorBlack after:absolute after:bottom-0 after:left-0 after:h-[2px] after:w-full after:bg-black">
                                Tags
                            </div>

                            <!-- Blog Tags Post List -->
                            <ul class="flex flex-wrap gap-x-2 gap-y-4">
                                <li>
                                    <a href="{{ url('blogdetails') }}" class="inline-block rounded-[55px] bg-ColorBlack bg-opacity-5 px-5 py-1 hover:bg-ColorBlue hover:text-white">Article</a>
                                </li>
                                <li>
                                    <a href="{{ url('blogdetails') }}" class="inline-block rounded-[55px] bg-ColorBlack bg-opacity-5 px-5 py-1 hover:bg-ColorBlue hover:text-white">Business</a>
                                </li>
                                <li>
                                    <a href="{{ url('blogdetails') }}" class="inline-block rounded-[55px] bg-ColorBlack bg-opacity-5 px-5 py-1 hover:bg-ColorBlue hover:text-white">Digital</a>
                                </li>
                                <li>
                                    <a href="{{ url('blogdetails') }}" class="inline-block rounded-[55px] bg-ColorBlack bg-opacity-5 px-5 py-1 hover:bg-ColorBlue hover:text-white">Technology</a>
                                </li>
                                <li>
                                    <a href="{{ url('blogdetails') }}" class="inline-block rounded-[55px] bg-ColorBlack bg-opacity-5 px-5 py-1 hover:bg-ColorBlue hover:text-white">UI/UX</a>
                                </li>
                            </ul>
                            <!-- Blog Tags Post List -->
                        </div>
                        <!-- Single Sidebar -->
                        <!-- Single Sidebar -->
                        <div class="rounded-[10px] bg-ColorOffWhite p-8">
                            <div class="relative mb-[30px] inline-block pb-[10px] text-lg font-semibold text-ColorBlack after:absolute after:bottom-0 after:left-0 after:h-[2px] after:w-full after:bg-black">
                                Subscribe
                            </div>

                            <p class="mb-3 text-ColorBlack">
                                Subscribe to our newsletter and get the latest news
                                updates lifetime
                            </p>

                            <form action="#" method="post" class="flex flex-col">
                                <input type="email" name="sidebar-newsletter" id="sidebar-newsletter" placeholder="Enter your email address" class="border-colorCodGray focus:border-colortext-ColorBlue h-[60px] w-full rounded-[50px] border bg-transparent px-10 py-[15px] text-lg outline-none transition-all placeholder:text-black" required />
                                <button type="submit" class="btn is-blue is-rounded is-large group mt-8 lg:mt-4">
                                    Subscribe Now
                                </button>
                            </form>
                        </div>
                        <!-- Single Sidebar -->
                    </aside>
                    <!-- Blog Aside -->
                </div>
            </div>
            <!-- Section Container -->
        </div>
        <!-- Section Spacer -->
    </section>
    <!-- Blog Section End -->

@endsection



@section ('footer')
<x-footer1/>
@endsection