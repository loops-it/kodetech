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
                    <h1 class="breadcrumb-title">UI/UX and product designer</h1>
                    <ul class="breadcrumb-nav">
                        <li><a href="{{ url('index') }}">Home</a></li>
                        <li><a href="{{ url('careers') }}">Career</a></li>
                        <li>Career Details</li>
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

    <!-- Career Details Section Start -->
    <section class="section-careerdetails">
        <!-- Section Space -->
        <div class="section-space">
            <!-- Section Container -->
            <div class="container-default">
                <!-- Service Details Area -->
                <div class="grid items-start gap-10 lg:grid-cols-[1fr_minmax(0,_0.7fr)] xl:gap-[90px]">
                    <!-- Service Details Block -->
                    <div>
                        <!-- Section Wrapper -->
                        <div class="mb-[18px]">
                            <!-- Section Block -->
                            <div class="max-w-[526px]">
                                <h2>Job Details:</h2>
                            </div>
                            <!-- Section Block -->
                        </div>
                        <!-- Section Wrapper -->
                        <!-- Job Summery -->
                        <div class="mb-[60px]">
                            <p>
                                Product designers are involved in the entire design
                                process a of a product, while UX designers focus more on
                                the hands-on design portion of a best a process. Product
                                designers and user an experience (UX) designers are the
                                similar—in fact, sometimes the titles are used
                                interchangeably.
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
                        </div>
                        <!-- Job Summery -->
                        <article class="grid gap-y-5">
                            <h2 class="text-2xl font-semibold leading-[1.25]">
                                Job Responsibilities
                            </h2>
                            <p>
                                By partnering with cross-functional teams and customers,
                                for you will turn your insights into delightful creative
                                environment that requires proven leadership skills and the
                                ability.
                            </p>

                            <ul class="mb-10 flex list-inside list-disc flex-col gap-5 lg:mb-[60px]">
                                <li>
                                    Set design requirements based on information from
                                    internal teams & research.
                                </li>
                                <li>Identify new product improvement opportunities.</li>
                                <li>
                                    Analyze how a new product satisfies market needs &
                                    consumer preferences.
                                </li>
                                <li>
                                    Stay up to date on current industry trends and market
                                    conditions.
                                </li>
                                <li>
                                    Modify and revise existing designs to meet changing
                                    customer preferences.
                                </li>
                                <li>
                                    Work closely with product engineers to suggest
                                    improvements for products.
                                </li>
                                <li>
                                    Present product design ideas to cross-functional teams
                                    and senior leadership.
                                </li>
                            </ul>

                            <h2 class="text-2xl font-semibold leading-[1.25]">
                                Requirements
                            </h2>
                            <p>
                                Proven experience in all phases of the design process
                                including user for a research, copywriting, wireframing,
                                prototyping, visual design, interaction design, and
                                usability testing
                            </p>

                            <ul class="mb-10 flex list-inside list-disc flex-col gap-5 lg:mb-[60px]">
                                <li>
                                    An intuitive eye for customer needs beyond the obvious
                                </li>
                                <li>
                                    Ability to collaborate with cross-functional team
                                    members
                                </li>
                                <li>
                                    Ability to collect and interpret both qualitative and
                                    quantitative feedback
                                </li>
                                <li>
                                    Ability to effectively communicate and persuade around
                                    design concepts
                                </li>
                                <li>
                                    Passion for design; not satisfied with the status quo
                                    and always thinking
                                </li>
                                <li>
                                    Dynamic, creative personality, effective at engaging and
                                    influencing a variety
                                </li>
                                <li>
                                    Provide assistance to product engineers when needed
                                </li>
                                <li>
                                    Recommend new tools and technologies by staying abreast
                                    of the latest trends
                                </li>
                            </ul>

                            <h2 class="text-2xl font-semibold leading-[1.25]">
                                Skill & Experience
                            </h2>
                            <ul class="mb-10 flex list-inside list-disc flex-col gap-5 lg:mb-[60px]">
                                <li>
                                    You have at least 3 years’ experience working as a
                                    Product Designer.
                                </li>
                                <li>
                                    You have experience using Sketch and InVision or Framer
                                    X and must figma
                                </li>
                                <li>
                                    You have some previous experience working in an agile
                                    environment
                                </li>
                                <li>
                                    You are familiar using Jira and Confluence in your
                                    workflow
                                </li>
                            </ul>

                            <h2 class="text-2xl font-semibold leading-[1.25]">
                                Need help?
                            </h2>
                            <p>
                                Not sure exactly what we’re looking for or just want
                                clarification? We’d be happy to chat with you and clear
                                things up for you. Anytime
                            </p>
                        </article>

                        <!-- Contact Info -->
                        <ul class="mt-[30px] flex flex-col gap-10">
                            <li class="flex gap-5">
                                <span class="inline-flex h-[50px] w-[50px] items-center justify-center rounded-[50%] bg-ColorBlue text-xl text-white">
                                    <i class="fa-regular fa-phone"></i>
                                </span>
                                <div class="flex flex-1 flex-col gap-y-[5]">
                                    <span class="text-xl font-semibold text-ColorBlack">Call us</span>
                                    <a href="tel:+0881234567890" class="text-ColorBlack/80 hover:text-ColorBlue">088-123-456-7890</a>
                                </div>
                            </li>
                            <li class="flex gap-5">
                                <span class="inline-flex h-[50px] w-[50px] items-center justify-center rounded-[50%] bg-ColorBlue text-xl text-white">
                                    <i class="fa-regular fa-envelope"></i>
                                </span>
                                <div class="flex flex-1 flex-col gap-y-[5]">
                                    <span class="text-xl font-semibold text-ColorBlack">Email us</span>
                                    <a href="mailto:example@gmail.com" class="text-ColorBlack/80 hover:text-ColorBlue">example@gmail.com</a>
                                </div>
                            </li>
                            <li class="flex gap-5">
                                <span class="inline-flex h-[50px] w-[50px] items-center justify-center rounded-[50%] bg-ColorBlue text-xl text-white">
                                    <i class="fa-regular fa-location-dot"></i>
                                </span>
                                <div class="flex flex-1 flex-col gap-y-[5]">
                                    <span class="text-xl font-semibold text-ColorBlack">Office address</span>
                                    <address class="text-ColorBlack/80">
                                        4132 Thornridge City, New York.
                                    </address>
                                </div>
                            </li>
                        </ul>
                        <!-- Contact Info -->
                    </div>
                    <!-- Service Details Block -->

                    <!-- Contact Form Block -->
                    <div class="jos xm:p-10 rounded-[10px] border border-ColorBlack/50 bg-ColorOffWhite p-[30px]">
                        <div class="mb-5 text-xl font-semibold tracking-tight lg:text-2xl">
                            Apply for this position
                        </div>
                        <form action="https://formspree.io/f/mlqvzkyx" method="post">
                            <!-- From Group List -->
                            <div class="flex flex-col gap-6">
                                <!-- Form Group Item-->
                                <div>
                                    <label for="name" class="mb-[10px] block text-left font-semibold">Your name</label>
                                    <input type="text" name="name" id="name" placeholder="Enter your full name" class="w-full rounded-[50px] border border-ColorBlack/50 px-[30px] py-[15px] outline-none transition-all duration-300 placeholder:text-ColorBlack/50 focus:border-ColorBlue" required />
                                </div>
                                <!-- Form Group Item-->
                                <!-- Form Group Item-->
                                <div>
                                    <label for="email" class="mb-[10px] block text-left font-semibold">Email address</label>
                                    <input type="email" name="email" id="email" placeholder="Enter your full name" class="w-full rounded-[50px] border border-ColorBlack/50 px-[30px] py-[15px] outline-none transition-all duration-300 placeholder:text-ColorBlack/50 focus:border-ColorBlue" required />
                                </div>
                                <!-- Form Group Item-->
                                <!-- Form Group Item-->
                                <div>
                                    <label for="message" class="mb-[10px] block text-left font-semibold">Write your message</label>
                                    <textarea name="message" id="message" placeholder="Write us your question here..." class="min-h-[130px] w-full rounded-[30px] border border-ColorBlack/50 px-[30px] py-[15px] outline-none transition-all duration-300 placeholder:text-ColorBlack/50 focus:border-ColorBlue" required></textarea>
                                </div>
                                <label for="check" class="flex items-center gap-2 text-sm font-semibold">
                                    <input type="checkbox" name="check" id="check" class="h-5 w-5 rounded-[10px] border border-ColorBlack accent-ColorBlue" />
                                    <span>I agree to the PixcelsThemes privacy policy*</span>
                                </label>
                                <!-- Form Group Item-->
                            </div>
                            <!-- From Group List -->
                            <button type="submit" class="btn is-blue is-rounded is-large mt-8">
                                Send Message
                            </button>
                        </form>
                    </div>
                    <!-- Contact Form Block -->
                </div>
                <!-- Service Details Area -->
            </div>
            <!-- Section Container -->
        </div>
        <!-- Section Space -->
    </section>
    <!-- Career Details Section End -->

@endsection



@section('footer')
    <x-footer1/>
@endsection