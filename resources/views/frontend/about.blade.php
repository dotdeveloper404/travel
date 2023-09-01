@extends('frontend.layouts.app')


@push('css')
    <style>
        .aboutBanner {

            background: linear-gradient(rgb(0 0 0 / 70%), rgba(24, 29, 56, .7)), url("../frontend/img/about.png") no-repeat;
            background-position: center;
            background-size: cover;
            width: 100%;
            height: 50vh;
        }


        p {
            text-align: left;

        }

        h2 {}

        .our-goals {

            max-height: 400px;
            overflow: auto;
        }

        .second_sec_1 {
            border: 1px solid #ccc;
            color: black;
        }

        .second_sec_2 {
            border: 1px solid #ccc;
            color: black;
        }

        .second_sec_3 {
            border: 1px solid #ccc;
            color: black;
        }

        .second_sec_4 {
            border: 1px solid #ccc;
            color: black;
        }

        .second_sec_5 {
            border: 1px solid #ccc;
            color: black;
        }

        .second_sec_6 {
            border: 1px solid #ccc;
            color: black;
        }
    </style>
@endpush()

@section('content')
    <main>


        <section class="pt-40 pb-40 bg-light-2 aboutBanner flex-center">

            <div class="container">

                <div class="row">

                    <div class="col-12">

                        <div class="text-center">

                            <h1 class="text-40 md:text-25 fw-600 text-white">IlinkTurkey</h1>
                            <div class="text-white mt-15">
                                Fall in love with Turkey with our custom tour packages and itineraries taking you through
                                this rich country's history, architecture, and wonders.
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>



        <section class="layout-pt-md">
            <div class="container">
                <div class="row">


                    <div class="col-lg-12">
                        <h2 class="text-30 fw-600" style="text-align: center">Who Are We?</h2>
                        <p class="mt-20"></p>

                        <p class="text-dark-1 ">
                            iLinkTurkey is a leading tour service specialising in offering high-quality travel
                            experiences
                            all around the world. We are dedicated to delivering unforgettable travel adventures in and
                            around the many wonders the world has to offer. Our team of travel experts have years of
                            experience and local insight under their belt which they use to create thrilling travel
                            experiences for you.
                        </p>

                        <p class="text-dark-1">
                            Here at iLinkTurkey, we believe that travel is more than just simply visiting a location. A
                            true
                            travel experience entails immersing yourself in a new culture, taking a glimpse at the past,
                            trying
                            new delicacies, and meeting new people to truly experience a location. This inspires us to
                            research,
                            design, and develop tours that take our customers through all that and more.
                        </p>
                        <p class="mt-30"></p>
                    </div>



                    <div class="col-lg-4">
                        <h2 class="text-30 fw-600">Our Vision</h2>
                        <p class="mt-10"></p>

                        <p class="text-dark-1">
                            Our team is committed to delivering exceptional customer service and ensuring that every
                            detail
                            of your trip is taken care of. We aim to contribute to the travel industry by offering great
                            service that makes a lasting impact.
                        </p>

                        <p class="text-dark-1">
                            Our priority is to maintain constant contact with our customers to always be there to
                            provide
                            according to their requirements and issues on time. A travel experience with iLinkTurkey
                            looks
                            like this:
                            <br />
                            <strong>"We manage it all, so you can travel and explore with peace of mind."</strong>

                        </p>

                    </div>

                    <div class="col-lg-4">


                        <h2 class="text-30 fw-600">Our Goals</h2>
                        <p class="mt-10"></p>
                        <div class="our-goals">
                            <p class="text-dark-1">
                                Our goals from day one at iLinkTurkey have been to provide our customers with reliable,
                                efficient, and high-quality travel services. We think that fulfilling and surpassing our
                                customers' expectations is the key to our success. Our tours are designed to be tailored,
                                allowing you to create the ideal itinerary for your interests and schedule.


                            </p>

                            <p class="text-dark-1">
                                We also think that travel should be environmentally friendly and responsible. This is why we
                                promote conscious travel practices to ensure you can have a sustainable travel experience
                                without contributing to travel wastage.

                            </p>



                        </div>

                    </div>

                    <div class="col-lg-4">
                        <h2 class="text-30 fw-600">Our Policy</h2>
                        <p class="mt-10"></p>

                        <p class="text-dark-1">
                            iLinkTurkey's company policy is centred on offering services that meet our customer's
                            expectations while maintaining maximum safety and security. We think that fulfilling our
                            customer's travel requirements while ensuring they have a safe and secure adventure is one of
                            our core objectives, and our policies reflect this goal.

                        </p>

                        <p class="text-dark-1">
                            We are continually working to be more aware and to facilitate the demands of our customers. We
                            recognize that each customer is unique, and we go above and beyond to develop tailored solutions
                            that address their requirements.
                        </p>


                    </div>

                    <div class="mt-30"></div>
                    <div class="mt-30"></div>

                    {{-- <div class="col-lg-6">
                        <img src="frontend/img/aboutus.png" alt="image" class="rounded-4">
                    </div> --}}


                </div>

            </div>
        </section>

        {{-- @include('frontend.layouts.about-us-section') --}}

        <section class="pt-60">
            <div class="container">
                <h2 class="text-center">Embark With Us On Your Next Adventure!</h2>
                <p class="text-center">
                    Our team at iLinkTurkey is excited to share our love of travel with you and help you create an
                    unforgettable travel experience.

                    <a style="color:#eb7346" href="{{ route('contact_us') }}"> Contact us</a> today to start planning your
                    dream trip now!

                </p>
            </div>
        </section>


        @include('frontend.layouts.why-choose-us')

        <section class="pt-60">
            <div class="container">
                <div class="border-bottom-light pb-40">
                    <div class="row y-gap-30 justify-center">

                        <div class="col-xl-3 col-6">
                            <div class="text-40 lg:text-30 lh-13 fw-600">100+</div>
                            <div class="text-14 lh-14 text-light-1 mt-5">Destinations</div>
                        </div>

                        <div class="col-xl-3 col-6">
                            <div class="text-40 lg:text-30 lh-13 fw-600">100+</div>
                            <div class="text-14 lh-14 text-light-1 mt-5">Tours</div>
                        </div>

                        <div class="col-xl-3 col-6">
                            <div class="text-40 lg:text-30 lh-13 fw-600">500+</div>
                            <div class="text-14 lh-14 text-light-1 mt-5">Guided Attractions</div>
                        </div>

                        <div class="col-xl-3 col-6">
                            <div class="text-40 lg:text-30 lh-13 fw-600">1500+</div>
                            <div class="text-14 lh-14 text-light-1 mt-5">Happy Clients</div>
                        </div>

                    </div>
                </div>
            </div>
        </section>


    </main>
@endsection
