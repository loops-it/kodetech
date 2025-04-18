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
                <h1 class="breadcrumb-title">{{$projects->project_name}}</h1>
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
                {{-- <img src="{{ asset('assets/img/th-1/portfolio-main-img.jpg') }}" alt="portfolio-main-img" width="1076" height="600" class="h-auto w-full rounded-[10px]" /> --}}
                <img src="{{ asset('storage/' . $projects->project_image) }}" alt="{{ $projects->project_name }}" class="mb-10 h-auto w-full rounded-[10px]" />
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
                    <h5>Project overview</h5>
                    <p>
                        {{ $projects->project_overview }}
                    </p>
                    <div>
                        {!! $projects->project_description !!}
                    </div>

                    {{-- <h5>What we did for this project</h5>
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
                    </p> --}}
                </div>
                <!-- Portfolio Rich Text -->
            </div>
            <!-- Portfolio Details Area -->
        </div>
        <!-- Section Container -->
    </div>
    <!-- Section Space -->
</section>



@endsection

