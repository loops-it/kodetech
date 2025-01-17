@extends('layout.layout1')

@section('headerLogo')
<img src="{{ asset('assets/img/logo-blue-dark.png') }}" alt="Masco" width="109" height="24" />
@sectionend

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
                <h1 class="breadcrumb-title">Blog Details</h1>
                <ul class="breadcrumb-nav">
                    <li><a href="{{ url('index') }}">Home</a></li>
                    <li><a href="{{ url('blog') }}">Blog</a></li>
                    <li>Blog Details</li>
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
<div class="blog-section">
    <!-- Section Spacer -->
    <div class="section-space">
        <!-- Section Container -->
        <div class="container-default">
            <div class="grid grid-cols-1 gap-x-6 gap-y-10 lg:grid-cols-[1fr,minmax(416px,_0.45fr)]">
                <div class="flex flex-col gap-y-10 lg:gap-y-14 xl:gap-y-20">
                    <!-- Blog Post Area -->
                    <div class="flex flex-col gap-6">
                        <!-- Blog Post Article -->
                        <article class="jos overflow-hidden bg-white">
                            <div class="mb-7 block overflow-hidden rounded-[10px]">
                                <img src="{{ asset('assets/img/th-1/blog-main-1.jpg') }}" alt="blog-main-1" width="856" height="540" class="h-auto w-full scale-100 object-cover" />
                            </div>
                            <!-- Blog Details Wrapper -->
                            <div class="px-[30px]">
                                <!-- Blog Post Meta -->
                                <ul class="mb-[30px] flex flex-wrap items-center gap-4 text-base font-semibold sm:gap-6">
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
                                <!-- Blog Details Content Block-->
                                <div>
                                    <h2 class="mb-5 mt-8 line-clamp-2 font-body text-2xl font-bold leading-[1.4] -tracking-[1px] group-hover:text-ColorBlue lg:text-3xl">
                                        How we use Slack, Trello, and TeamGantt for best
                                        project management as a digital agency
                                    </h2>
                                    <p class="mb-7 last:mb-0">
                                        It was a rainy winter day and I was having another
                                        project management crisis with business a partner
                                        Gavin at our digital product studio Input Logic. The
                                        exact nature of the crisis eludes a me now, but I’m
                                        sure we’d let some client expectations slip and were
                                        feeling guilty again.
                                    </p>
                                    <p class="mb-7 last:mb-0">
                                        <strong class="block font-semibold text-ColorBlack">Using Slack :
                                        </strong>
                                        Our team of eight is pretty playful. We don’t take
                                        ourselves a seriously. We level up for the our
                                        abilities, play hackysack, ship great work. We
                                        wanted a project management process of that was in
                                        line with our values: relevant and helpful without
                                        sucking the fun out of things.
                                    </p>
                                    <p class="mb-7 last:mb-0">
                                        <strong class="block font-semibold text-ColorBlack">Using Trello :</strong>
                                        Trello is the visual tool that empowers your team to
                                        manage an type of project, workflow, and task
                                        tracking. Add files, checklists, or even automation:
                                        Customize it all for how your team for works best.
                                        Just sign up, create a board, and you're off!
                                    </p>
                                    <p class="mb-7 last:mb-0">
                                        <strong class="block font-semibold text-ColorBlack">Using TeamGantt :</strong>
                                        TeamGantt is a project collaboration & planning
                                        software for teams. The software useful for combines
                                        in Gantt charts with task management, task level
                                        communication, file sharing and time tracking.
                                    </p>
                                    <div class="my-[30px] grid gap-6 sm:grid-cols-3">
                                        <img src="{{ asset('assets/img/th-1/blog-inner-img-1.jpg') }}" alt="blog-inner-img-1" width="250" height="213" class="h-auto w-auto" />
                                        <img src="{{ asset('assets/img/th-1/blog-inner-img-2.jpg') }}" alt="blog-inner-img-2" width="250" height="213" class="h-auto w-auto" />
                                        <img src="{{ asset('assets/img/th-1/blog-inner-img-3.jpg') }}" alt="blog-inner-img-3" width="250" height="213" class="h-auto w-auto" />
                                    </div>
                                    <ul class="mb-7 flex flex-col gap-7 last:mb-0">
                                        <li>
                                            <div class="font-semibold text-ColorBlack">
                                                Practice #1 — Project based channels :
                                            </div>
                                            <p class="mb-7 last:mb-0">
                                                We create a separate channel for every project,
                                                period. We invite only those team a members who
                                                are involved in the project, along with the
                                                project manager.
                                            </p>
                                        </li>
                                        <li>
                                            <div class="font-semibold text-ColorBlack">
                                                Practice #2—Agreements pinned to project
                                                channels :
                                            </div>
                                            <p class="mb-7 last:mb-0">
                                                Our client agreements are separated into a
                                                general agreement and a statement of work. We
                                                create them in Google Docs and then export them
                                                as PDF to be shared in Slack.
                                            </p>
                                        </li>
                                        <li>
                                            <div class="font-semibold text-ColorBlack">
                                                Practice #3—Live timeline as project channel
                                                description :
                                            </div>
                                            <p class="mb-7 last:mb-0">
                                                We started using TeamGantt for creating project
                                                timelines and we share these with our team and
                                                the clients team. We detail out the intended
                                                timeline right from the start, so we have the
                                                same expectations the client does. Each team
                                                member working on the project offers.
                                            </p>
                                        </li>
                                    </ul>
                                    <p class="mb-7 last:mb-0">
                                        <strong class="block font-semibold text-ColorBlack">How it all came together :</strong>
                                        So, after years of occasionally pissing off clients
                                        with sloppy project management, we have a levelled
                                        up our game with a few simple Slack based practices.
                                        Pretty dope.We’re still working to improve and
                                        learning a ton, so please comment and follow along
                                        to join the journey.
                                    </p>

                                    <p class="mb-7 font-semibold last:mb-0">
                                        Thanks for reading ❤
                                    </p>
                                </div>
                                <!-- Blog Details Content Block-->
                            </div>
                            <!-- Blog Details Wrapper -->
                        </article>
                        <!-- Blog Post Article -->

                        <!-- Blog Events -->
                        <div class="jos flex justify-between gap-x-8 px-[30px]">
                            <div class="flex items-center gap-x-6">
                                <button class="inline-flex items-center gap-x-1 text-[#121212]">
                                    <i class="fa-regular fa-thumbs-up"></i>
                                    200
                                </button>
                                <button class="inline-flex items-center gap-x-1 text-[#121212]">
                                    <i class="fa-regular fa-messages"></i>
                                    15
                                </button>
                            </div>
                            <div class="flex items-center gap-x-6">
                                <button class="inline-flex items-center gap-x-1 text-[#121212]">
                                    <i class="fa-sharp fa-regular fa-share-nodes"></i>
                                </button>
                                <button class="inline-flex items-center gap-x-1 text-[#121212]">
                                    <i class="fa-regular fa-inbox-in"></i>
                                </button>
                            </div>
                        </div>
                        <!-- Blog Events -->

                        <!-- Horizontal Separator -->
                        <div class="jos my-[30px] h-[1px] w-full bg-[#EAEDF0]"></div>
                        <!-- Horizontal Separator -->

                        <!-- Blog Comments -->
                        <div class="jos">
                            <div class="mb-6 text-xl font-semibold text-ColorBlack">
                                3 comments on this post:
                            </div>

                            <ul class="flex flex-col gap-y-[30px]">
                                <!-- Single Comment List -->
                                <li class="border-b border-[#EAEDF0] last:border-b-0">
                                    <div class="flex gap-x-5">
                                        <!-- Comment User Image -->
                                        <div class="h-[80px] w-[80px] overflow-hidden rounded-full">
                                            <img src="{{ asset('assets/img/th-1/blog-comment-large-user-img-1.jpg') }}" alt="blog-comment-large-user-img-1" width="80" height="80" />
                                        </div>
                                        <!-- Comment User Image -->
                                        <!-- Comment Content -->
                                        <div class="flex flex-1 flex-col gap-y-4">
                                            <!-- Comment User info -->
                                            <div class="flex items-center justify-between gap-x-5">
                                                <div class="flex flex-col gap-y-1 text-sm">
                                                    <div class="font-semibold text-ColorBlack">
                                                        Ricky Smith
                                                    </div>
                                                    <div class="text-ColorBlack/80">
                                                        June 14, 2024
                                                    </div>
                                                </div>
                                                <button class="text-base font-bold transition-all duration-300 hover:text-ColorBlue">
                                                    Reply
                                                </button>
                                            </div>
                                            <!-- Comment User info -->
                                            <!-- Comment User Text -->
                                            <p class="max-w-[616px]">
                                                It is a long established fact that a reader will
                                                be distrac readable content of a page when
                                                looking at its layout. The point of using is
                                                that it has two.
                                            </p>
                                            <!-- Comment User Text -->
                                        </div>
                                        <!-- Comment Content -->
                                    </div>
                                    <!-- Comment Reply -->
                                    <ul class="mt-[30px] flex flex-col pl-8 sm:pl-32">
                                        <!-- Comment Reply Item -->
                                        <li class="border-t border-[#EAEDF0] py-[30px]">
                                            <div class="flex gap-x-5">
                                                <!-- Comment User Image -->
                                                <div class="h-[50px] w-[50px] overflow-hidden rounded-full">
                                                    <img src="{{ asset('assets/img/th-1/blog-comment-small-user-img-1.jpg') }}" alt="blog-comment-large-user-img-1" width="50" height="50" />
                                                </div>
                                                <!-- Comment User Image -->
                                                <!-- Comment Content -->
                                                <div class="flex flex-1 flex-col gap-y-4">
                                                    <!-- Comment User info -->
                                                    <div class="flex items-center justify-between gap-x-5">
                                                        <div class="flex flex-col gap-y-1 text-sm">
                                                            <div class="font-semibold text-ColorBlack">
                                                                Joshua Jones
                                                            </div>
                                                            <div class="text-ColorBlack/80">
                                                                June 15, 2024
                                                            </div>
                                                        </div>
                                                        <button class="font-bold transition-all duration-300 hover:text-ColorBlue">
                                                            Reply
                                                        </button>
                                                    </div>
                                                    <!-- Comment User info -->
                                                    <!-- Comment User Text -->
                                                    <p class="max-w-[536px]">
                                                        It is a long established fact that a reader
                                                        will be distra readable content of a page
                                                        when looking its layout. The point of using.
                                                    </p>
                                                    <!-- Comment User Text -->
                                                </div>
                                                <!-- Comment Content -->
                                            </div>
                                        </li>
                                        <!-- Comment Reply Item -->
                                    </ul>
                                    <!-- Comment Reply -->
                                </li>
                                <li class="border-b border-[#EAEDF0] last:border-b-0">
                                    <div class="flex gap-x-5">
                                        <!-- Comment User Image -->
                                        <div class="h-[80px] w-[80px] overflow-hidden rounded-full">
                                            <img src="{{ asset('assets/img/th-1/blog-comment-large-user-img-2.jpg') }}" alt="blog-comment-large-user-img-1" width="80" height="80" />
                                        </div>
                                        <!-- Comment User Image -->
                                        <!-- Comment Content -->
                                        <div class="flex flex-1 flex-col gap-y-4">
                                            <!-- Comment User info -->
                                            <div class="flex items-center justify-between gap-x-5">
                                                <div class="flex flex-col gap-y-1 text-sm">
                                                    <div class="font-semibold text-ColorBlack">
                                                        Stephanie Nicol
                                                    </div>
                                                    <div class="text-ColorBlack/80">
                                                        Jan 28, 2023
                                                    </div>
                                                </div>
                                                <button class="text-base font-bold transition-all duration-300 hover:text-ColorBlue">
                                                    Reply
                                                </button>
                                            </div>
                                            <!-- Comment User info -->
                                            <!-- Comment User Text -->
                                            <p class="max-w-[616px]">
                                                It is a long established fact that a reader will
                                                be distrac readable content of a page when
                                                looking at its layout. The point of using is
                                                that it has two.
                                            </p>
                                            <!-- Comment User Text -->
                                        </div>
                                        <!-- Comment Content -->
                                    </div>
                                </li>
                                <!-- Single Comment List -->
                            </ul>
                        </div>
                        <!-- Blog Comments -->

                        <!-- Horizontal Line Separator -->
                        <div class="horizontal-line bg-ColorBlack"></div>
                        <!-- Horizontal Line Separator -->

                        <!-- Blog Comment Form -->
                        <div class="jos">
                            <div class="mb-6 text-xl font-semibold text-ColorBlack">
                                Leave a comment
                            </div>
                            <div class="flex gap-5">
                                <img src="{{ asset('assets/img/th-1/blog-comment-form-img.jpg') }}" alt="blog-comment-form-img" width="60" height="71" class="h-[60px] w-[60px] rounded-[50%]" />
                                <form action="#" method="post" class="relative flex-1">
                                    <textarea name="comment-textarea" id="comment-textarea" class="min-h-[150px] w-full rounded-[10px] border bg-white p-4 text-ColorBlack/80 outline-none focus:border-ColorBlue" placeholder="Write a comment..."></textarea>
                                    <div class="mt-2 flex w-full flex-wrap items-center justify-between gap-6">
                                        <!-- Button Events -->
                                        <div class="flex gap-x-6">
                                            <!-- Button Emoji -->
                                            <button class="hover:text-ColorBlue active:bg-ColorBlue">
                                                <i class="fa-regular fa-face-smile"></i>
                                            </button>
                                            <!-- Button Media -->
                                            <button class="hover:text-ColorBlue active:bg-ColorBlue">
                                                <i class="fa-regular fa-camera"></i>
                                            </button>
                                            <!-- Button Voice -->
                                            <button class="hover:text-ColorBlue active:bg-ColorBlue">
                                                <i class="fa-regular fa-microphone"></i>
                                            </button>
                                            <!-- Button Edit -->
                                            <button class="hover:text-ColorBlue active:bg-ColorBlue">
                                                <i class="fa-regular fa-pen"></i>
                                            </button>
                                        </div>
                                        <!-- Button Action -->
                                        <div class="flex gap-x-6">
                                            <button class="hover:text-red-600 active:text-red-600">
                                                Cancel
                                            </button>
                                            <button type="submit" class="rounded-[50px] bg-ColorBlack/5 px-8 py-1 text-ColorBlack/60 hover:bg-ColorBlue hover:text-white">
                                                Publish
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Blog Comment Form -->
                    </div>
                    <!-- Blog Post DetailArea -->
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
</div>
<!-- Blog Section End -->

@endsection



@section('footer')
<x-footer1/>
@endsection