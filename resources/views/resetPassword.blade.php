<!doctype html>
<html lang="en">

<x-head/>

<body>
    <div class="page-wrapper relative z-[1] bg-ColorOffWhite">
        <main class="main-wrapper relative overflow-hidden">
            <!-- Sign-in Section Start -->
            <section class="section-signin">
                <!-- Section Space -->
                <div class="section-space">
                    <!-- Section Container -->
                    <div class="container-default">
                        <div class="mx-auto max-w-[636px]">
                            <div class="flex flex-col items-center justify-center text-center">
                                <!-- Logo -->
                                <a href="{{ url('index') }}" class="mb-[60px] lg:mb-20 xl:mb-[100px]">
                                    <img src="{{ asset('assets/img/logo-blue-dark.png') }}" alt="logo-blue-dark" width="109" height="24" />
                                </a>
                                <!-- Logo -->

                                <!-- Section Wrapper -->
                                <div>
                                    <!-- Section Block -->
                                    <div>
                                        <!-- Section Title -->
                                        <h2 class="mb-[15px]">Forgot password</h2>
                                        <!-- Section Title -->
                                        <p class="text-ColorBlack/80">
                                            Enter the information below to change the password
                                        </p>
                                    </div>
                                    <!-- Section Block -->
                                </div>
                                <!-- Section Wrapper -->
                            </div>

                            <!-- Sign-in Form Block -->
                            <div class="jos xm:p-10 mt-10 rounded-[10px] border-2 border-ColorBlack bg-white p-[30px] lg:mt-[60px]">
                                <form action="https://formspree.io/f/mlqvzkyx" method="post">
                                    <!-- From Group List -->
                                    <div class="flex flex-col gap-6">
                                        <!-- Form Group Item-->
                                        <div>
                                            <label for="email" class="mb-[10px] block text-left font-semibold text-ColorBlack">Email address*</label>
                                            <input type="email" name="email" id="email" placeholder="Enter your email" class="w-full rounded-[50px] border border-ColorBlack/50 px-[30px] py-[15px] outline-none transition-all duration-300 placeholder:text-ColorBlack/50 focus:border-ColorBlue" required />
                                        </div>
                                        <!-- Form Group Item-->
                                    </div>
                                    <!-- From Group List -->
                                    <button type="submit" class="btn is-blue is-rounded is-large mt-8 w-full">
                                        Send Reset Link
                                    </button>
                                </form>

                                <p class="mt-[15px] text-center text-base text-ColorBlack/80">
                                    Remember password?
                                    <a href="{{ url('login') }}" class="font-semibold text-ColorBlue/80 hover:text-ColorBlue">Sign in now</a>
                                </p>
                            </div>
                            <!-- Sign-in Form Block -->
                        </div>
                    </div>
                    <!-- Section Container -->
                </div>
                <!-- Section Space -->
            </section>
            <!-- Sign-in Section End -->
        </main>
    </div>

     <!--Vendor js-->
     <script src="{{ asset('assets/js/vendors/counterup.js') }}" type="module"></script>
    <script src="{{ asset('assets/js/vendors/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/fslightbox.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/jos.min.js') }}"></script>

    <!-- Main js -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
