@extends('frontend.layouts.app')


@section('title')
    Discover Turkey with iLinkTurkey - Custom Travel Packages & Tours
@endsection


@section('description')
    Discover the beauty of Turkey with iLinkTurkey. We offer customized travel packages, tours, and

    experiences that showcase the best of Turkey. Explore our website to plan your next adventure!
@endsection


@section('keywords')
    Discover Turkey with iLinkTurkey - Custom Travel Packages & Tours
@endsection


@section('content')
    <div class="overlay" data-overlay></div>

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="../frontend/img/home-banner.png" alt="">
                <div class="inner" style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-blue-2 text-uppercase mb-3 animated slideInDown">Tours Collection</h5>
                                <h1 class="display-3 text-white animated slideInDown">Adventure Begins Here</h1>
                                <p class="fs-5 text-white mb-4 pb-2">Choose from thousands of organized adventures</p>
                                <a href="{{ route('packages.index') }}"
                                    class="button col-5 col-lg-3 h-60 -blue-1 bg-white text-dark-1">Book now <span
                                        class="icon-arrow-right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="../frontend/img/home-banner.png" alt="">
                <div class="inner" style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-blue-2 text-uppercase mb-3 animated slideInDown">Tours Collection</h5>
                                <h1 class="display-3 text-white animated slideInDown">Adventure Begins Here</h1>
                                <p class="fs-5 text-white mb-4 pb-2">Choose from thousands of organized adventures</p>
                                <a href="{{ route('packages.index') }}"
                                    class="button col-5 col-lg-3 h-60 -blue-1 bg-white text-dark-1">Book now <span
                                        class="icon-arrow-right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- why book with Turkey start  -->



    <div class="why__books bg-light-3 py-40">

        <div class="container">

            <div class="row mb-40">

                <div class="col-md-12 text-center">

                    <h2 class="sectionTitle__title text-dark-1">Discover the Wonders of Turkey with Us</h2>

                </div>

            </div>

            <div class="row">



                <div class="col-md-4 mb-3" style="border-right:1px solid #cccc">


                    <div class="__box text-center">


                        <div class="text-blue-2 text-4 mb-10">


                            <svg width="48" height="35" xmlns="http://www.w3.org/2000/svg" style="fill:#eb7346;"
                                viewBox="0 0 384 512">

                                <path
                                    d="M112.1 454.3c0 6.297 1.816 12.44 5.284 17.69l17.14 25.69c5.25 7.875 17.17 14.28 26.64 14.28h61.67c9.438 0 21.36-6.401 26.61-14.28l17.08-25.68c2.938-4.438 5.348-12.37 5.348-17.7L272 415.1h-160L112.1 454.3zM192 0C90.02 .3203 16 82.97 16 175.1c0 44.38 16.44 84.84 43.56 115.8c16.53 18.84 42.34 58.23 52.22 91.45c.0313 .25 .0938 .5166 .125 .7823h160.2c.0313-.2656 .0938-.5166 .125-.7823c9.875-33.22 35.69-72.61 52.22-91.45C351.6 260.8 368 220.4 368 175.1C368 78.8 289.2 .0039 192 0zM288.4 260.1c-15.66 17.85-35.04 46.3-49.05 75.89h-94.61c-14.01-29.59-33.39-58.04-49.04-75.88C75.24 236.8 64 206.1 64 175.1C64 113.3 112.1 48.25 191.1 48C262.6 48 320 105.4 320 175.1C320 206.1 308.8 236.8 288.4 260.1zM176 80C131.9 80 96 115.9 96 160c0 8.844 7.156 16 16 16S128 168.8 128 160c0-26.47 21.53-48 48-48c8.844 0 16-7.148 16-15.99S184.8 80 176 80z" />

                            </svg>

                        </div>


                        <h4 class="text-20 md:text-20 lh-13 text-dark mb-10">Unwavering commitment to excellence  </h4>

                        <p class="text-black">

                            Book with confidence knowing you're getting the best price with our Best Price Guarantee.
                        </p>


                    </div>



                </div>



                <div class="col-md-4 mb-3" style="border-right:1px solid #cccc">




                    <div class="__box text-center">



                        <div class="text-blue-2 text-4 mb-10">



                            <svg width="48" height="35" xmlns="http://www.w3.org/2000/svg" style="fill:#eb7346;"
                                viewBox="0 0 448 512">



                                <path
                                    d="M96 0C43 0 0 43 0 96V416c0 53 43 96 96 96H384h32c17.7 0 32-14.3 32-32s-14.3-32-32-32V384c17.7 0 32-14.3 32-32V32c0-17.7-14.3-32-32-32H384 96zm0 384H352v64H96c-17.7 0-32-14.3-32-32s14.3-32 32-32zm32-240c0-8.8 7.2-16 16-16H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16zm16 48H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16s7.2-16 16-16z" />



                            </svg>



                        </div>



                        <h4 class="text-20 md:text-20 lh-13 text-dark mb-10">Crafting unforgettable moments
                        </h4>



                        <p class="text-black">Book your dream trip hassle-free with our easy and quick booking process.

                        </p>



                    </div>



                </div>



                <div class="col-md-4">



                    <div class="__box text-center">



                        <div class="text-blue-2 text-4 mb-10">



                            <svg width="48" height="35" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                class="bi bi-trophy" viewBox="0 0 16 16">



                                <path
                                    d="M2.5.5A.5.5 0 0 1 3 0h10a.5.5 0 0 1 .5.5c0 .538-.012 1.05-.034 1.536a3 3 0 1 1-1.133 5.89c-.79 1.865-1.878 2.777-2.833 3.011v2.173l1.425.356c.194.048.377.135.537.255L13.3 15.1a.5.5 0 0 1-.3.9H3a.5.5 0 0 1-.3-.9l1.838-1.379c.16-.12.343-.207.537-.255L6.5 13.11v-2.173c-.955-.234-2.043-1.146-2.833-3.012a3 3 0 1 1-1.132-5.89A33.076 33.076 0 0 1 2.5.5zm.099 2.54a2 2 0 0 0 .72 3.935c-.333-1.05-.588-2.346-.72-3.935zm10.083 3.935a2 2 0 0 0 .72-3.935c-.133 1.59-.388 2.885-.72 3.935zM3.504 1c.007.517.026 1.006.056 1.469.13 2.028.457 3.546.87 4.667C5.294 9.48 6.484 10 7 10a.5.5 0 0 1 .5.5v2.61a1 1 0 0 1-.757.97l-1.426.356a.5.5 0 0 0-.179.085L4.5 15h7l-.638-.479a.501.501 0 0 0-.18-.085l-1.425-.356a1 1 0 0 1-.757-.97V10.5A.5.5 0 0 1 9 10c.516 0 1.706-.52 2.57-2.864.413-1.12.74-2.64.87-4.667.03-.463.049-.952.056-1.469H3.504z" />



                            </svg>



                        </div>



                        <h4 class="text-20 md:text-20 lh-13 text-dark mb-10">24/7 Support</h4>



                        <p class="text-black">Travel with peace of mind knowing our friendly customer care team is available
                            24/7 to assist you </p>



                    </div>



                </div>



            </div>



        </div>



    </div>



    <!-- why book with Turkey end  -->







    <div class="border-top-light"></div>









    <!-- Top Categories start  -->



    <div class="top__attraction bg-light-3 py-40">



        <div class="container">



            <div class="row">



                <div class="col-md-12 text-center">



                    <h2 class="sectionTitle__title">Top Categories </h2>



                    <p class="sectionTitle__text mt-5 sm:mt-0">Discover breathtaking views, cultural landmarks, outdoor



                        adventures.</p>



                </div>



            </div>



            <div class="row pt-40">



                <div class="col-md-4 mb-3">







                    <div class="__minibox bg-white shadow-sm p-2 rounded-8">



                        <a href="{{ route('packages.top_category', 'families-and-kids-attractions') }}">



                            <div class="row align-items-center">



                                <div class="col-auto">



                                    <div class="__imgbx">



                                        <img src="{{ asset('frontend/img/top-category/1.png') }}" class="rounded-8 d-block"
                                            alt="">



                                    </div>



                                </div>



                                <div class="col">



                                    <div class="__content">



                                        <span class="fw-600 text-18 d-block">Families & Kids Attractions</span>



                                        <span>99 Tours and Activities</span>



                                    </div>



                                </div>



                            </div>



                        </a>



                    </div>







                </div>



                <div class="col-md-4 mb-3">







                    <div class="__minibox bg-white shadow-sm p-2 rounded-8">



                        <a href="{{ route('packages.top_category', 'sightseeing-and-tours') }}">



                            <div class="row align-items-center">



                                <div class="col-auto">



                                    <div class="__imgbx">



                                        <img src="{{ asset('frontend/img/top-category/2.png') }}"
                                            class="rounded-8 d-block" alt="">



                                    </div>



                                </div>



                                <div class="col">



                                    <div class="__content">



                                        <span class="fw-600 text-18 d-block">Sightseeing & Tours</span>



                                        <span>99 Tours and Activities</span>



                                    </div>



                                </div>



                            </div>



                        </a>



                    </div>







                </div>



                <div class="col-md-4 mb-3">







                    <div class="__minibox bg-white shadow-sm p-2 rounded-8">



                        <a href="{{ route('packages.top_category', 'cruises') }}">



                            <div class="row align-items-center">



                                <div class="col-auto">



                                    <div class="__imgbx">



                                        <img src="{{ asset('frontend/img/top-category/3.png') }}"
                                            class="rounded-8 d-block" alt="">



                                    </div>



                                </div>



                                <div class="col">



                                    <div class="__content">



                                        <span class="fw-600 text-18 d-block">Cruises</span>



                                        <span>99 Tours and Activities</span>



                                    </div>



                                </div>



                            </div>



                        </a>



                    </div>







                </div>



                <div class="col-md-4 mb-3">







                    <div class="__minibox bg-white shadow-sm p-2 rounded-8">



                        <a href="{{ route('packages.top_category', 'events-and-festivals') }}">



                            <div class="row align-items-center">



                                <div class="col-auto">



                                    <div class="__imgbx">



                                        <img src="{{ asset('frontend/img/top-category/4.png') }}"
                                            class="rounded-8 d-block" alt="">



                                    </div>



                                </div>



                                <div class="col">



                                    <div class="__content">



                                        <span class="fw-600 text-18 d-block">Events & Festivals</span>



                                        <span>99 Tours and Activities</span>



                                    </div>



                                </div>



                            </div>



                        </a>



                    </div>







                </div>



                <div class="col-md-4 mb-3">







                    <div class="__minibox bg-white shadow-sm p-2 rounded-8">



                        <a href="{{ route('packages.top_category', 'food-lovers') }}">



                            <div class="row align-items-center">



                                <div class="col-auto">



                                    <div class="__imgbx">



                                        <img src="{{ asset('frontend/img/top-category/5.png') }}"
                                            class="rounded-8 d-block" alt="">



                                    </div>



                                </div>



                                <div class="col">



                                    <div class="__content">



                                        <span class="fw-600 text-18 d-block">Food lovers </span>



                                        <span>99 Tours and Activities</span>



                                    </div>



                                </div>



                            </div>



                        </a>



                    </div>







                </div>



                <div class="col-md-4 mb-3">







                    <div class="__minibox bg-white shadow-sm p-2 rounded-8">



                        <a href="{{ route('packages.top_category', 'ticket-and-passes') }}">



                            <div class="row align-items-center">



                                <div class="col-auto">



                                    <div class="__imgbx">



                                        <img src="{{ asset('frontend/img/top-category/6.png') }}"
                                            class="rounded-8 d-block" alt="">



                                    </div>



                                </div>



                                <div class="col">



                                    <div class="__content">



                                        <span class="fw-600 text-18 d-block">Ticket & Passes </span>



                                        <span>99 Tours and Activities</span>



                                    </div>



                                </div>



                            </div>



                        </a>



                    </div>







                </div>







            </div>



        </div>



    </div>



    <!-- Top Categories end  -->













    <section class="py-40 bg-light-3">



        <div data-anim="slide-up delay-1" class="container">





            <div class="row justify-between items-end">



                <div class="col-auto">



                    <div class="sectionTitle -md">



                        <h2 class="sectionTitle__title">Recommended Packages</h2>



                        <p class=" sectionTitle__text mt-5 sm:mt-0"></p>



                    </div>



                </div>







                <div class="col-auto">







                    <a href="{{ route('packages.index') }}" class="button h-50 px-24 -blue-1 bg-blue-1-05 text-blue-1">



                        See All <div class="icon-arrow-top-right ml-15"></div>



                    </a>







                </div>



            </div>









            <div class="relative overflow-hidden pt-40 sm:pt-20 js-section-slider" data-gap="30" data-scrollbar
                data-slider-cols="xl-4 lg-3 md-2 sm-2 base-1" data-nav-prev="js-hotels-prev"
                data-pagination="js-hotels-pag" data-nav-next="js-hotels-next">



                <div class="swiper-wrapper">



                    @foreach ($recomended_packages as $package)
                        <div class="swiper-slide shadow-sm rounded-8 bg-white p-3">



                            <a href="{{ route('packages.show', $package->slug) }}" class="hotelsCard -type-1 ">



                                <div class="hotelsCard__image">



                                    <div class="cardImage ratio ratio-1:1">



                                        <div class="cardImage__content">



                                            <div
                                                class="cardImage-slider h-full rounded-4 overflow-hidden js-cardImage-slider">



                                                <div class="swiper-wrapper">







                                                    <div class="swiper-slide">



                                                        <img class="col-12 h-full js-lazy" src="#"
                                                            data-src="{{ asset('storage/uploads/package_images/featured_image/' . $package->featured_image) }}"
                                                            alt="image">



                                                    </div>







                                                    @foreach ($package->images as $image)
                                                        <div class="swiper-slide">



                                                            <img class="col-12 h-full js-lazy"
                                                                src="{{ asset('storage/uploads/package_images/' . $image->name) }}"
                                                                data-src="{{ asset('storage/uploads/package_images/' . $image->name) }}"
                                                                alt="image">



                                                        </div>
                                                    @endforeach











                                                </div>







                                                <div class="cardImage-slider__pagination js-pagination"></div>







                                                <div class="cardImage-slider__nav -prev">



                                                    <button
                                                        class="button -blue-1 bg-white size-30 rounded-full shadow-2 js-prev">



                                                        <i class="icon-chevron-left text-10"></i>



                                                    </button>



                                                </div>







                                                <div class="cardImage-slider__nav -next">



                                                    <button
                                                        class="button -blue-1 bg-white size-30 rounded-full shadow-2 js-next">



                                                        <i class="icon-chevron-right text-10"></i>



                                                    </button>



                                                </div>



                                            </div>







                                        </div>







                                        <div class="cardImage__leftBadge">



                                            <div
                                                class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-blue-1 text-white">



                                                {{ str_replace('_', ' ', strtoupper($package->product_type)) }}



                                            </div>



                                        </div>







                                    </div>







                                </div>







                                <div class="hotelsCard__content mt-10">



                                    <h4 class="hotelsCard__title text-dark-1 text-18 lh-16 fw-500">



                                        <span>{{ $package->package_name }}</span>



                                    </h4>







                                    <p> <span class="tag_selector">

                                            {{ str_replace('_', ' ', ucfirst($package->package_type)) }}</span></p>







                                    <p class="text-light-1 lh-14 text-14 mt-5">



                                        @foreach ($package->city as $city)
                                            <span class="tag_selector">{{ $city }} | </span>
                                        @endforeach



                                    </p>











                                    <div class="d-flex items-center mt-20">







                                        <div class="flex-center bg-blue-1 rounded-4 size-30 text-12 fw-600 text-white">

                                            {{ $package->reviews }}
                                        </div>



                                        <div class="text-14 text-dark-1 fw-500 ml-10">Reviews

                                            <div class="d-inline-block">



                                                {!! $package->stars == 1 ? '<i class="icon-star  text-yellow-3"></i>' : '' !!}



                                                {!! $package->stars == 2
                                                    ? '<i class="icon-star  text-yellow-3"></i><i class="icon-star  text-yellow-3"></i>'
                                                    : '' !!}



                                                {!! $package->stars == 3
                                                    ? '<i class="icon-star  text-yellow-3"></i><i class="icon-star  text-yellow-3"></i><i class="icon-star  text-yellow-3"></i>'
                                                    : '' !!}



                                                {!! $package->stars == 4
                                                    ? '<i class="icon-star  text-yellow-3"></i><i class="icon-star  text-yellow-3"></i><i class="icon-star  text-yellow-3"></i><i class="icon-star  text-yellow-3"></i>'
                                                    : '' !!}



                                                {!! $package->stars == 5
                                                    ? '<i class="icon-star  text-yellow-3"></i><i class="icon-star  text-yellow-3"></i><i class="icon-star  text-yellow-3"></i><i class="icon-star  text-yellow-3"></i><i class="icon-star  text-yellow-3"></i>'
                                                    : '' !!}



                                            </div>

                                        </div>



                                    </div>







                                    <div class="mt-5">



                                        <div class="fw-500">



                                            Starting from <span class="text-blue-1">$ {{ $package->net_amount }}</span>



                                        </div>



                                    </div>



                                </div>



                            </a>







                        </div>
                    @endforeach



















                </div>











                <div class="d-flex x-gap-15 items-center justify-center sm:justify-start pt-40 sm:pt-20">



                    <div class="col-auto">



                        <button class="d-flex items-center text-24 arrow-left-hover js-hotels-prev">



                            <i class="icon icon-arrow-left"></i>



                        </button>



                    </div>







                    <div class="col-auto">



                        <div class="pagination -dots text-border js-hotels-pag"></div>



                    </div>







                    <div class="col-auto">



                        <button class="d-flex items-center text-24 arrow-right-hover js-hotels-next">



                            <i class="icon icon-arrow-right"></i>



                        </button>



                    </div>



                </div>







            </div>



        </div>



    </section>















    <!-- secondary banner section start  -->



    <!-- <div class="secondary__banner bg-info-1">



                            <div class="container">



                                <div class="row justify-content-center">



                                    <div class="col-md-4">



                                        <div class="text-center py-30">



                                            <h4 class="text-40 md:text-20 fw-600 lh-13 text-black mb-20">Keep things flexible</h4>



                                            <p class="text-black">Use Reserve Now & Pay Later to secure the activities you don't want to



                                                miss without being locked in.</p>



                                        </div>



                                    </div>



                                </div>



                            </div>



                        </div> -->



    <!-- secondary banner section end -->







    <!-- top destination start  -->



    <div class="top__destination py-40">



        <div class="container">



            <div class="row">



                <div class="col-md-12 text-center">



                    <h2 class="sectionTitle__title">Top Destinations</h2>



                    <p class="sectionTitle__text mt-5 sm:mt-0">Breathtaking cities, scenic landscapes, cultural hotspots
                        top



                        travel list.</p>



                </div>



            </div>



        </div>



        <div class="pt-40">
            <div class="container">
                <div class="row justify-content-center">

                    @foreach ($top_city as $top)
                        <div class="col-md-3 mb-3">
                            <div class="__destiny-box">
                                <a
                                    href='{{ route('packages.index', ['country' => strtolower($top->country->name), 'city' => $top->name]) }}'>
                                    <div class="__destiny-content">
                                        <img src="{{ asset($top->image_path) }}" class="rounded-8" alt="">
                                        <div class="title">
                                            <h4 class="fw-600 text-white text-20">{{ ucfirst($top->name) }}</h4>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach()




                </div>
            </div>




        </div>



    </div>



    <!-- top destination end  -->







    <section class=" layout-pb-md">



        <div class="container">



            <div class="row">



                <div class="col-md-12 text-center">



                    <h2 class="sectionTitle__title">Popular Countries</h2>



                    <p class="sectionTitle__text mt-5 sm:mt-0">These popular countries have a lot to offer.</p>



                </div>



            </div>



        </div>







        <div class="container">


            <div class="relative overflow-hidden pt-40 sm:pt-20 js-section-slider" data-gap="30" data-scrollbar
                data-slider-cols="base-2 xl-4 lg-3 md-2 sm-2 base-1" data-anim="slide-up delay-2">



                <div class="swiper-wrapper">


                    @foreach ($top_country as $country)
                        <div class="swiper-slide">


                            <a href="packages/{{ strtolower($country->name) }}/{{ strtolower($country->capital) }}"
                                class="citiesCard -type-1 d-block rounded-4 ">

                                <div class="citiesCard__image ratio ratio-3:4">

                                    <img src="{{ asset($country->image_path) }}"
                                        data-src="{{ asset($country->image_path) }}" alt="image" class="js-lazy">

                                </div>

                                <div
                                    class="citiesCard__content d-flex flex-column justify-between text-center pt-30 pb-20 px-20">

                                    <div class="citiesCard__bg"></div>

                                    <div class="citiesCard__top">

                                        <div class="text-14 text-white"></div>

                                    </div>


                                    <div class="citiesCard__bottom">

                                        <h4 class="text-26 md:text-20 lh-13 text-white mb-20">
                                            {{ ucfirst($country->name) }}</h4>

                                        <button class="button col-12 h-60 -blue-1 bg-white text-dark-1">Discover</button>
                                    </div>

                                </div>

                            </a>


                        </div>
                    @endforeach()

                </div>

                <button
                    class="section-slider-nav -prev flex-center button -blue-1 bg-white shadow-1 size-40 rounded-full sm:d-none js-prev"
                    style="left:0;">

                    <i class="icon icon-chevron-left text-12"></i>

                </button>


                <button
                    class="section-slider-nav -next flex-center button -blue-1 bg-white shadow-1 size-40 rounded-full sm:d-none js-next"
                    style="right:0;">


                    <i class="icon icon-chevron-right text-12"></i>

                </button>



                <div class="slider-scrollbar bg-light-2 mt-40 sm:d-none js-scrollbar"></div>


                <div class="row pt-20 d-none md:d-block">



                    <div class="col-auto">

                        <div class="d-inline-block">


                            <a href="#" class="button -md -blue-1 bg-blue-1-05 text-blue-1">

                                View All Destinations <div class="icon-arrow-top-right ml-15"></div>

                            </a>


                        </div>



                    </div>



                </div>



            </div>



        </div>



    </section>


    <section class="layout-pt-md layout-pb-md">


        <div class="container">

            <div class="row y-gap-20">

                <div data-anim="slide-up" class="col-md-6">

                    <div class="ctaCard -type-1 rounded-4 ">

                        <div class="ctaCard__image ratio ratio-63:55">

                            <img class="img-ratio js-lazy" src="#"
                                data-src="{{ asset('frontend/img/Thingstodo.png') }}" alt="image">

                        </div>


                        <div class="ctaCard__content py-70 px-70 lg:py-30 lg:px-30">


                            <h4 class="text-40 lg:text-26 text-white">Things to do on<br> your trip</h4>


                            <div class="d-inline-block mt-30">

                                <a href="#"
                                    class="button px-48 py-15 -blue-1 -min-180 bg-white text-dark-1">Experiences</a>

                            </div>

                        </div>

                    </div>


                </div>


                <div data-anim="slide-up delay-1" class="col-md-6">


                    <div class="ctaCard -type-1 rounded-4 ">


                        <div class="ctaCard__image ratio ratio-63:55">


                            <img class="img-ratio js-lazy" src="#"
                                data-src="{{ asset('frontend/img/Up-to-70.png') }}" alt="image">


                        </div>



                        <div class="ctaCard__content py-70 px-70 lg:py-30 lg:px-30">



                            <div class="text-15 fw-500 text-white mb-10">Enjoy Summer Deals</div>


                            <h4 class="text-40 lg:text-26 text-white">Up to 70% Discount!</h4>


                            <div class="d-inline-block mt-30">


                                <a href="#"
                                    class="button px-48 py-15 -blue-1 -min-180 bg-white text-dark-1">Subscribe</a>


                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <section class="py-40 bg-light-3">

        <div data-anim="slide-up delay-1" class="container">


            <div class="col-md-12 text-center">



                <h2 class="sectionTitle__title text-dark-1">Based on your interest </h2>



                <p class="sectionTitle__text mt-5 sm:mt-0">Exploring new cultures, discovering hidden gems, memories


                    lasting lifetime.</p>

            </div>


            <div class="relative overflow-hidden pt-40 sm:pt-20 js-section-slider" data-gap="30" data-scrollbar
                data-slider-cols="xl-4 lg-3 md-2 sm-2 base-1" data-nav-prev="js-hotels-prev"
                data-pagination="js-hotels-pag" data-nav-next="js-hotels-next">



                <div class="swiper-wrapper">



                    @foreach ($packages as $package)
                        <div class="swiper-slide shadow-sm rounded-8 bg-white p-3">


                            <a href="{{ route('packages.show', $package->slug) }}" class="hotelsCard -type-1 ">



                                <div class="hotelsCard__image">



                                    <div class="cardImage ratio ratio-1:1">


                                        <div class="cardImage__content">




                                            <div
                                                class="cardImage-slider h-full rounded-4 overflow-hidden js-cardImage-slider">



                                                <div class="swiper-wrapper">







                                                    <div class="swiper-slide">



                                                        <img class="col-12 h-full js-lazy"
                                                            src="{{ asset('storage/uploads/package_images/featured_image/' . $package->featured_image) }}"
                                                            data-src="{{ asset('storage/uploads/package_images/featured_image/' . $package->featured_image) }}"
                                                            alt="image">



                                                    </div>















                                                </div>











                                            </div>







                                        </div>







                                        <div class="cardImage__leftBadge">



                                            <div
                                                class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-blue-1 text-white">



                                                {{ str_replace('_', ' ', strtoupper($package->product_type)) }}



                                            </div>



                                        </div>







                                    </div>







                                </div>







                                <div class="hotelsCard__content mt-10">



                                    <h4 class="hotelsCard__title text-dark-1 text-18 lh-16 fw-500">



                                        <span>{{ $package->package_name }}</span>



                                    </h4>







                                    <p> <span class="tag_selector">

                                            {{ str_replace('_', ' ', ucfirst($package->package_type)) }}</span></p>







                                    <p class="text-light-1 lh-14 text-14 mt-5">



                                        @foreach ($package->city as $city)
                                            <span class="tag_selector">{{ $city }} | </span>
                                        @endforeach



                                    </p>



                                    <div class="d-inline-block">



                                        {!! $package->stars == 1 ? '<i class="icon-star  text-yellow-3"></i>' : '' !!}



                                        {!! $package->stars == 2
                                            ? '<i class="icon-star  text-yellow-3"></i><i class="icon-star  text-yellow-3"></i>'
                                            : '' !!}



                                        {!! $package->stars == 3
                                            ? '<i class="icon-star  text-yellow-3"></i><i class="icon-star  text-yellow-3"></i><i class="icon-star  text-yellow-3"></i>'
                                            : '' !!}



                                        {!! $package->stars == 4
                                            ? '<i class="icon-star  text-yellow-3"></i><i class="icon-star  text-yellow-3"></i><i class="icon-star  text-yellow-3"></i><i class="icon-star  text-yellow-3"></i>'
                                            : '' !!}



                                        {!! $package->stars == 5
                                            ? '<i class="icon-star  text-yellow-3"></i><i class="icon-star  text-yellow-3"></i><i class="icon-star  text-yellow-3"></i><i class="icon-star  text-yellow-3"></i><i class="icon-star  text-yellow-3"></i>'
                                            : '' !!}



                                    </div>







                                    <div class="d-flex items-center mt-20">







                                        <div class="flex-center bg-blue-1 rounded-4 size-30 text-12 fw-600 text-white">

                                            {{ $package->reviews }}
                                        </div>



                                        <div class="text-14 text-dark-1 fw-500 ml-10">Reviews</div>



                                    </div>







                                    <div class="mt-5">



                                        <div class="fw-500">



                                            Starting from <span class="text-blue-1">US $ {{ $package->net_amount }}</span>



                                        </div>



                                    </div>



                                </div>



                            </a>







                        </div>
                    @endforeach



















                </div>











                <div class="d-flex x-gap-15 items-center justify-center sm:justify-start pt-40 sm:pt-20">



                    <div class="col-auto">



                        <button class="d-flex items-center text-24 arrow-left-hover js-hotels-prev">



                            <i class="icon icon-arrow-left"></i>



                        </button>



                    </div>







                    <div class="col-auto">



                        <div class="pagination -dots text-border js-hotels-pag"></div>



                    </div>







                    <div class="col-auto">



                        <button class="d-flex items-center text-24 arrow-right-hover js-hotels-next">



                            <i class="icon icon-arrow-right"></i>



                        </button>



                    </div>



                </div>







            </div>



        </div>



    </section>















    <!-- interest end  -->







    <!-- warm destination start  -->



    <!-- <section class="py-40 relative">



                            <div class="container">



                                <div class="row">



                                    <div class="col-md-12 text-left">



                                        <h2 class="sectionTitle__title">Warm Destinations</h2>



                                        <p class="sectionTitle__text mt-5 sm:mt-0">Tropical paradises beckon with sun-soaked beaches, lush



                                            landscapes.</p>



                                    </div>



                                </div>







                                <div class="pt-40 flex-center overflow-hidden warmDestiny-slider" data-slider-cols="base-1"



                                    data-nav-prev="js-prev" data-nav-next="js-next">



                                    <div class="swiper-wrapper py-20 bg-white px-2">



                                        <div class="swiper-slide">







                                            <div class="shadow-sm rounded-8 bg-white">



                                                <a href="tour-single.html" class="tourCard -type-1 rounded-4 ">



                                                    <div class="tourCard__image">







                                                        <div class="cardImage ratio ratio-1:1">



                                                            <div class="cardImage__content">







                                                                <img class="rounded-4 col-12 js-lazy" src="#"



                                                                    data-src="https://media.tacdn.com/media/attractions-splice-spp-360x240/0f/9b/86/f7.jpg"



                                                                    alt="image">











                                                            </div>







                                                        </div>







                                                    </div>







                                                    <div class="tourCard__content mt-10 p-2">



                                                        <h4 class="tourCard__title text-dark text-18 lh-16 fw-500">



                                                            <span>Cancun</span>



                                                        </h4>







                                                        <p class="text-light-1 lh-14 text-14 mt-5">2,971 Tours</p>







                                                    </div>



                                                </a>







                                            </div>







                                        </div>







                                        <div class="swiper-slide">







                                            <div class="shadow-sm rounded-8 bg-white">



                                                <a href="tour-single.html" class="tourCard -type-1 rounded-4 ">



                                                    <div class="tourCard__image">







                                                        <div class="cardImage ratio ratio-1:1">



                                                            <div class="cardImage__content">







                                                                <img class="rounded-4 col-12 js-lazy" src="#"



                                                                    data-src="https://media.tacdn.com/media/attractions-splice-spp-360x240/0f/9b/9b/69.jpg"



                                                                    alt="image">











                                                            </div>







                                                        </div>







                                                    </div>







                                                    <div class="tourCard__content mt-10 p-2">



                                                        <h4 class="tourCard__title text-dark text-18 lh-16 fw-500">



                                                            <span>Cancun</span>



                                                        </h4>







                                                        <p class="text-light-1 lh-14 text-14 mt-5">2,971 Tours</p>







                                                    </div>



                                                </a>







                                            </div>







                                        </div>







                                        <div class="swiper-slide">







                                            <div class="shadow-sm rounded-8 bg-white">



                                                <a href="tour-single.html" class="tourCard -type-1 rounded-4 ">



                                                    <div class="tourCard__image">







                                                        <div class="cardImage ratio ratio-1:1">



                                                            <div class="cardImage__content">







                                                                <img class="rounded-4 col-12 js-lazy" src="#"



                                                                    data-src="https://media.tacdn.com/media/attractions-splice-spp-360x240/09/90/e5/af.jpg"



                                                                    alt="image">











                                                            </div>







                                                        </div>







                                                    </div>







                                                    <div class="tourCard__content mt-10 p-2">



                                                        <h4 class="tourCard__title text-dark text-18 lh-16 fw-500">



                                                            <span>Cancun</span>



                                                        </h4>







                                                        <p class="text-light-1 lh-14 text-14 mt-5">2,971 Tours</p>







                                                    </div>



                                                </a>







                                            </div>







                                        </div>







                                        <div class="swiper-slide">







                                            <div class="shadow-sm rounded-8 bg-white">



                                                <a href="tour-single.html" class="tourCard -type-1 rounded-4 ">



                                                    <div class="tourCard__image">







                                                        <div class="cardImage ratio ratio-1:1">



                                                            <div class="cardImage__content">







                                                                <img class="rounded-4 col-12 js-lazy" src="#"



                                                                    data-src="https://media.tacdn.com/media/attractions-splice-spp-360x240/0f/5e/f0/2b.jpg"



                                                                    alt="image">











                                                            </div>







                                                        </div>







                                                    </div>







                                                    <div class="tourCard__content mt-10 p-2">



                                                        <h4 class="tourCard__title text-dark text-18 lh-16 fw-500">



                                                            <span>Cancun</span>



                                                        </h4>







                                                        <p class="text-light-1 lh-14 text-14 mt-5">2,971 Tours</p>







                                                    </div>



                                                </a>







                                            </div>







                                        </div>







                                        <div class="swiper-slide">







                                            <div class="shadow-sm rounded-8 bg-white">



                                                <a href="tour-single.html" class="tourCard -type-1 rounded-4 ">



                                                    <div class="tourCard__image">







                                                        <div class="cardImage ratio ratio-1:1">



                                                            <div class="cardImage__content">







                                                                <img class="rounded-4 col-12 js-lazy" src="#"



                                                                    data-src="https://media.tacdn.com/media/attractions-splice-spp-360x240/09/b9/06/44.jpg"



                                                                    alt="image">











                                                            </div>







                                                        </div>







                                                    </div>







                                                    <div class="tourCard__content mt-10 p-2">



                                                        <h4 class="tourCard__title text-dark-1 text-18 lh-16 fw-500">



                                                            <span>Cancun</span>



                                                        </h4>







                                                        <p class="text-light-1 lh-14 text-14 mt-5">2,971 Tours</p>







                                                    </div>



                                                </a>







                                            </div>







                                        </div>







                                        <div class="swiper-slide">







                                            <div class="shadow-sm rounded-8 bg-white">



                                                <a href="tour-single.html" class="tourCard -type-1 rounded-4 ">



                                                    <div class="tourCard__image">







                                                        <div class="cardImage ratio ratio-1:1">



                                                            <div class="cardImage__content">







                                                                <img class="rounded-4 col-12 js-lazy" src="#"



                                                                    data-src="https://media.tacdn.com/media/attractions-splice-spp-360x240/06/73/35/ba.jpg"



                                                                    alt="image">











                                                            </div>







                                                        </div>







                                                    </div>







                                                    <div class="tourCard__content mt-10 p-2">



                                                        <h4 class="tourCard__title text-dark text-18 lh-16 fw-500">



                                                            <span>Cancun</span>



                                                        </h4>







                                                        <p class="text-light-1 lh-14 text-14 mt-5">2,971 Tours</p>







                                                    </div>



                                                </a>







                                            </div>







                                        </div>







                                        <div class="swiper-slide">







                                            <div class="shadow-sm rounded-8 bg-white">



                                                <a href="tour-single.html" class="tourCard -type-1 rounded-4 ">



                                                    <div class="tourCard__image">







                                                        <div class="cardImage ratio ratio-1:1">



                                                            <div class="cardImage__content">







                                                                <img class="rounded-4 col-12 js-lazy" src="#"



                                                                    data-src="https://media.tacdn.com/media/attractions-splice-spp-360x240/06/73/06/46.jpg"



                                                                    alt="image">











                                                            </div>







                                                        </div>







                                                    </div>







                                                    <div class="tourCard__content mt-10 p-2">



                                                        <h4 class="tourCard__title text-dark text-18 lh-16 fw-500">



                                                            <span>Cancun</span>



                                                        </h4>







                                                        <p class="text-light-1 lh-14 text-14 mt-5">2,971 Tours</p>







                                                    </div>



                                                </a>







                                            </div>







                                        </div>







                                    </div>







                                    <div class="absolute h-full z-5 col-11">







                                        <button



                                            class="section-slider-nav -prev flex-center button -blue-1 bg-white shadow-1 size-40 rounded-full sm:d-none js-prev">



                                            <i class="icon icon-chevron-left text-12"></i>



                                        </button>







                                        <button



                                            class="section-slider-nav -next flex-center button -blue-1 bg-white shadow-1 size-40 rounded-full sm:d-none js-next">



                                            <i class="icon icon-chevron-right text-12"></i>



                                        </button>







                                    </div>



                                </div>







                            </div>



                        </section> -->



    <!-- warm destination end  -->













    @include('frontend.layouts.why-choose-us')







    <section class="py-30 bg-blue-2">



        <div data-anim-wrap class="container">



            <div class="row y-gap-40 justify-between">



                <div data-anim-child="slide-up delay-1" class="col-xl-5 col-lg-6">



                    <h2 class="text-30 text-white">What our customers are<br> saying?</h2>



                    <p class="mt-20 text-white">Don't just take our word for it - hear from our satisfied customers about

                        their unforgettable travel experiences with us.</p>







                    <div class="row y-gap-30 pt-60 lg:pt-40">



                        <div class="col-sm-5 bg-dark-2 col-6">



                            <div class="text-30 text-white lh-15 fw-600">13m+</div>



                            <div class="text-white lh-15">Happy People</div>



                        </div>







                        <div class="col-sm-5 bg-dark-2 col-6">



                            <div class="text-30 text-white lh-15 fw-600">4.88</div>



                            <div class="text-white lh-15">Overall rating</div>







                            <div class="d-flex x-gap-5 items-center pt-10">







                                <div class="icon-star text-yellow-1 text-10"></div>







                                <div class="icon-star text-yellow-1 text-10"></div>







                                <div class="icon-star text-yellow-1 text-10"></div>







                                <div class="icon-star text-yellow-1 text-10"></div>







                                <div class="icon-star text-yellow-1 text-10"></div>







                            </div>



                        </div>



                    </div>



                </div>







                <div data-anim-child="slide-up delay-2" class="col-lg-6 bg-dark-2 rounded-8">



                    <div class="overflow-hidden js-testimonials-slider-3" data-scrollbar>



                        <div class="swiper-wrapper">







                            <div class="swiper-slide">



                                <div class="row items-center x-gap-30 y-gap-20">



                                    <div class="col-auto">



                                        <img src="/public/frontend/img/avatars/1.png"
                                            data-src="frontend/img/avatars/1.png" alt="image" class="js-lazy">



                                    </div>




                                    <div class="col-auto">


                                        <h5 class="text-18 text-white fw-500">Julia</h5>

                                        <div class="text-15 text-white lh-15"></div>


                                    </div>



                                </div>



                                <p class="text-18 fw-500 text-white mt-30 sm:mt-20">The place is in a great location in



                                    Gumbet. The area is safe and beautiful. The apartment was comfortable and the host was



                                    kind and responsive to our requests.</p>



                            </div>







                            <div class="swiper-slide">



                                <div class="row items-center x-gap-30 y-gap-20">



                                    <div class="col-auto">



                                        <img src="/public/frontend/img/avatars/1.png"
                                            data-src="frontend/img/avatars/1.png" alt="image" class="js-lazy">



                                    </div>







                                    <div class="col-auto">



                                        <h5 class="text-18 text-white fw-500">Julia</h5>

                                        <div class="text-15 text-white lh-15"></div>





                                    </div>



                                </div>







                                <p class="text-18 fw-500 text-white mt-30 sm:mt-20">The place is in a great location in



                                    Gumbet. The area is safe and beautiful. The apartment was comfortable and the host was



                                    kind and responsive to our requests.</p>



                            </div>







                            <div class="swiper-slide">



                                <div class="row items-center x-gap-30 y-gap-20">



                                    <div class="col-auto">



                                        <img src="/public/frontend/img/avatars/1.png"
                                            data-src="frontend/img/avatars/1.png" alt="image" class="js-lazy">



                                    </div>







                                    <div class="col-auto">



                                        <h5 class="text-18 text-white fw-500">Julia</h5>

                                        <div class="text-15 text-white lh-15"></div>



                                    </div>



                                </div>





                                <p class="text-18 fw-500 text-white mt-30 sm:mt-20">The place is in a great location in



                                    Gumbet. The area is safe and beautiful. The apartment was comfortable and the host was



                                    kind and responsive to our requests.</p>



                            </div>



                        </div>







                        <div class="d-flex items-center mt-60 sm:mt-20 js-testimonials-slider-pag">

                            <div class="text-white fw-500 js-current">01</div>

                            <div class="slider-scrollbar bg-black bg-border ml-20 mr-20 w-max-300 js-scrollbar"></div>

                            <div class="text-white fw-500 js-all">05</div>

                        </div>



                    </div>



                </div>



            </div>



        </div>



    </section>







    <section class="py-40 bg-light-3">



        <div data-anim-wrap class="container">



            <div data-anim-child="slide-up delay-1" class="row justify-center text-center">



                <div class="col-auto">



                    <div class="sectionTitle -md">



                        <h2 class="sectionTitle__title">Get inspiration for your next trip</h2>



                        <!--<p class=" sectionTitle__text mt-5 sm:mt-0">Interdum et malesuada fames</p>-->



                    </div>



                </div>



            </div>







            <div class="row y-gap-30 pt-40">





                @foreach ($blogs as $blog)
                    <div data-anim-child="slide-left delay-1" class="col-lg-4 col-sm-6">





                        <a href="{{ $blog['link'] }}" class="blogCard -type-1 d-block shadow-sm bg-white rounded-8 p-3">



                            <div class="blogCard__image">



                                <div class="ratio ratio-4:3 rounded-4 rounded-8">



                                    <img class="img-ratio js-lazy" src="#" data-src="{{ $blog['image'] }}"
                                        alt="image">



                                </div>



                            </div>







                            <div class="mt-20">



                                <h4 class="text-dark-1 text-18 fw-500">{{ $blog['title'] }}</h4>





                            </div>



                        </a>







                    </div>
                @endforeach()




            </div>



        </div>



    </section>
@endsection
