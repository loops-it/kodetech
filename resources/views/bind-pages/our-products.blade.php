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
                <h1 class="breadcrumb-title">{{ $products->product_name }}</h1>
                {{-- <ul class="breadcrumb-nav">
                    <li><a href="{{ url('index') }}">Home</a></li>
                <li>About</li>
                </ul> --}}
            </div>
        </div>
        <!-- Section Container -->
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
                    {{-- <img src="{{ asset('assets/img/kodetech/products/document management system.png') }}" alt="service-main-img" class="mb-10 h-auto w-full rounded-[10px]" /> --}}
                    <img src="{{ asset('storage/' . $products->product_image) }}" alt="{{ $products->product_name }}" class="mb-10 h-auto w-full rounded-[10px]" />
                    <!-- Service Rich Text -->
                    <div class="rich-text">
                        {!! $products->product_description !!}
                    </div>
                    <div>
                        <p>
                            Explore our <a href="{{url('/our-projects')}}" style="text-decoration: underline">Projects Page</a> to see how our solutions have made an impact across industries.
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

@endsection

