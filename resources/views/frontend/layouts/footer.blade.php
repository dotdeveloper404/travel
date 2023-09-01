<footer class="footer -type-1">
    <div class="container">
        <div class="pt-60 pb-60">
            <div class="row y-gap-40 justify-between xl:justify-start">


                <div class="col-xl-3 col-lg-3 col-sm-3">
                    <span class="text-14 fw-900 website-color">Your Travel Journey to Turkey Starts Here</span>
                    <div class="mt-10">
                        <span class="text-15 fw-500 text-blue-1 mt-5">
                            iLinkTurkey is a leading tour service specializing in offering high-quality travel
                            experiences all around the world. <a class="website-color" href="{{ route('packages.index') }}">Book a tour</a>
                            with us now and get started on your next
                            adventure.

                        </span>
                    </div>
                </div>


                <div class="col-xl-2 col-lg-3 col-sm-3">


                    <div class="mt-30">
                        <img src="{{ asset('frontend/img/ilinkturkey.png') }}" />

                    </div>

                </div>

                <div class="col-xl-2 col-lg-4 col-sm-4">
                    <h5 class="text-16 fw-500 mb-30">CONTACT US</h5>

                    <div class="mt-30">
                        <div class="text-14 mt-30">Phone</div>
                        <a tel:+1-201-366-1155 class="text-18 fw-500 text-blue-1 mt-5">+1-201-366-1155</a>
                    </div>

                    <div class="mt-35">
                        <div class="text-14 mt-30">Need live support?</div>
                        <a href="#" class="text-18 fw-500 text-blue-1 mt-5">info@ilinkturkey.com</a>
                    </div>
                </div>

                <div class="col-xl-2 col-lg-4 col-sm-4">
                    <h5 class="text-16 fw-500 mb-30">SITE NAVIGATION</h5>
                    <div class="d-flex y-gap-10 flex-column">
                        <a href="{{ route('about_us') }}">About Us</a>
                        <a href="{{ route('contact_us') }}">Contact Us</a>
                        <a href="/blog/">Blog</a>
                        <a href="{{ route('packages.index') }}">Packages</a>
                        <a href="{{ route('travel-guide') }}">Travel Guide</a>
                    </div>
                </div>

               

            </div>
        </div>

        <div class="py-20 border-top-light">
            <div class="row justify-between items-center y-gap-10">
                <div class="col-auto">
                    <div class="row x-gap-30 y-gap-10">
                        <div class="col-auto">
                            <div class="d-flex items-center">
                                &#169; {{ date('Y') }} iLinkTurkey All rights reserved.
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-auto">
                    <div class="row y-gap-10 items-center">
                        <div class="col-auto">
                            <div class="d-flex items-center">
                                <button class="d-flex items-center text-14 fw-500 text-dark-1 mr-10">
                                    <i class="icon-globe text-16 mr-10"></i>
                                    <span class="underline">English (US)</span>
                                </button>

                            </div>
                        </div>

                        <div class="col-auto">
                            <div class="d-flex x-gap-20 items-center">
                                <a href="#"><i class="icon-facebook text-14"></i></a>
                                <a href="#"><i class="icon-twitter text-14"></i></a>
                                <a href="#"><i class="icon-instagram text-14"></i></a>
                                <a href="#"><i class="icon-linkedin text-14"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>



<script src="{{ asset('frontend/js/jquery_3.6.3_jquery.min.js') }}"></script>
<script src="{{ asset('frontend/js/OwlCarousel2_2.3.4_owl.carousel.min.js') }}"></script>

<link rel="stylesheet" href="{{ asset('frontend/js/bootstrap.min.js') }}">

<script src="{{ asset('frontend/js/vendors.js') }}"></script>
<script src="{{ asset('frontend/js/main.js') }}"></script>
