@extends('frontend.layouts.app')

@section('content')

<div class="overlay" data-overlay></div>

<!-- slider hero section start  -->
<section class="hero">
    <div class="hero__slider owl-carousel">
        <div class="hero__items set-bg" data-setbg="../frontend/img/home-banner.png" style="background:linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.7)) ,url('../frontend/img/home-banner.png') no-repeat;background-size: cover;
  background-position: center;">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-7 col-md-8">
                        <div class="hero__text">
                            <h6>Tours Collection</h6>
                            <h1>Adventure Begins Here</h1>
                            <p>Choose from thousands of organized adventures</p>
                            <a target="_blank" href="{{ route('packages.index')}}" class="primary-btn">Book now <span class="icon-arrow-right"></span></a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero__items set-bg" data-setbg="../frontend/img/home-banner.png" style="background:linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.7)) ,url('../frontend/img/home-banner.png') no-repeat;background-size: cover;
  background-position: center;">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-7 col-md-8">
                        <div class="hero__text">
                            <h6>Tours Collection</h6>
                            <h1>Adventure Begins Here</h1>
                            <p>Choose from thousands of organized adventures</p>
                            <a href="#" class="primary-btn">Book now <span class="icon-arrow-right"></span></a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- slider hero section end  -->

<!-- why book with Turkey start  -->
<div class="why__books bg-light-3 py-40">
    <div class="container">
        <div class="row mb-40">
            <div class="col-md-12 text-center">
                <h2 class="sectionTitle__title text-dark-1">Why book with Turkey</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 mb-3">
                <div class="__box text-center">
                    <div class="text-blue-2 text-4 mb-10">
                        <svg width="48" height="35" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-cash" viewBox="0 0 16 16">
                            <path d="M8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4z" />
                            <path d="M0 4a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V4zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V6a2 2 0 0 1-2-2H3z" />
                        </svg>
                    </div>
                    <h4 class="text-20 md:text-20 lh-13 text-dark mb-10">Ultimate flexibility</h4>
                    <p class="text-black">You’re in control, with free cancellation and payment options to satisfy any
                        plan or budget.</p>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="__box text-center">
                    <div class="text-blue-2 text-4 mb-10">
                        <svg width="48" height="35" xmlns="http://www.w3.org/2000/svg" style="fill:#eb7346;" viewBox="0 0 384 512">
                            <path d="M112.1 454.3c0 6.297 1.816 12.44 5.284 17.69l17.14 25.69c5.25 7.875 17.17 14.28 26.64 14.28h61.67c9.438 0 21.36-6.401 26.61-14.28l17.08-25.68c2.938-4.438 5.348-12.37 5.348-17.7L272 415.1h-160L112.1 454.3zM192 0C90.02 .3203 16 82.97 16 175.1c0 44.38 16.44 84.84 43.56 115.8c16.53 18.84 42.34 58.23 52.22 91.45c.0313 .25 .0938 .5166 .125 .7823h160.2c.0313-.2656 .0938-.5166 .125-.7823c9.875-33.22 35.69-72.61 52.22-91.45C351.6 260.8 368 220.4 368 175.1C368 78.8 289.2 .0039 192 0zM288.4 260.1c-15.66 17.85-35.04 46.3-49.05 75.89h-94.61c-14.01-29.59-33.39-58.04-49.04-75.88C75.24 236.8 64 206.1 64 175.1C64 113.3 112.1 48.25 191.1 48C262.6 48 320 105.4 320 175.1C320 206.1 308.8 236.8 288.4 260.1zM176 80C131.9 80 96 115.9 96 160c0 8.844 7.156 16 16 16S128 168.8 128 160c0-26.47 21.53-48 48-48c8.844 0 16-7.148 16-15.99S184.8 80 176 80z" />
                        </svg>
                    </div>
                    <h4 class="text-20 md:text-20 lh-13 text-dark mb-10">Memorable experiences</h4>
                    <p class="text-black">Browse and book tours and activities so incredible, you’ll want to tell your
                        friends.</p>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="__box text-center">
                    <div class="text-blue-2 text-4 mb-10">
                        <svg width="48" height="35" xmlns="http://www.w3.org/2000/svg" style="fill:#eb7346;" viewBox="0 0 448 512">
                            <path d="M96 0C43 0 0 43 0 96V416c0 53 43 96 96 96H384h32c17.7 0 32-14.3 32-32s-14.3-32-32-32V384c17.7 0 32-14.3 32-32V32c0-17.7-14.3-32-32-32H384 96zm0 384H352v64H96c-17.7 0-32-14.3-32-32s14.3-32 32-32zm32-240c0-8.8 7.2-16 16-16H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16zm16 48H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16s7.2-16 16-16z" />
                        </svg>
                    </div>
                    <h4 class="text-20 md:text-20 lh-13 text-dark mb-10">Quality at our core</h4>
                    <p class="text-black">High quality standards. Millions of reviews. A Tripadvisor company.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="__box text-center">
                    <div class="text-blue-2 text-4 mb-10">
                        <svg width="48" height="35" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-trophy" viewBox="0 0 16 16">
                            <path d="M2.5.5A.5.5 0 0 1 3 0h10a.5.5 0 0 1 .5.5c0 .538-.012 1.05-.034 1.536a3 3 0 1 1-1.133 5.89c-.79 1.865-1.878 2.777-2.833 3.011v2.173l1.425.356c.194.048.377.135.537.255L13.3 15.1a.5.5 0 0 1-.3.9H3a.5.5 0 0 1-.3-.9l1.838-1.379c.16-.12.343-.207.537-.255L6.5 13.11v-2.173c-.955-.234-2.043-1.146-2.833-3.012a3 3 0 1 1-1.132-5.89A33.076 33.076 0 0 1 2.5.5zm.099 2.54a2 2 0 0 0 .72 3.935c-.333-1.05-.588-2.346-.72-3.935zm10.083 3.935a2 2 0 0 0 .72-3.935c-.133 1.59-.388 2.885-.72 3.935zM3.504 1c.007.517.026 1.006.056 1.469.13 2.028.457 3.546.87 4.667C5.294 9.48 6.484 10 7 10a.5.5 0 0 1 .5.5v2.61a1 1 0 0 1-.757.97l-1.426.356a.5.5 0 0 0-.179.085L4.5 15h7l-.638-.479a.501.501 0 0 0-.18-.085l-1.425-.356a1 1 0 0 1-.757-.97V10.5A.5.5 0 0 1 9 10c.516 0 1.706-.52 2.57-2.864.413-1.12.74-2.64.87-4.667.03-.463.049-.952.056-1.469H3.504z" />
                        </svg>
                    </div>
                    <h4 class="text-20 md:text-20 lh-13 text-dark mb-10">Award-winning support</h4>
                    <p class="text-black">New price? New plan? No problem. We’re here to help, 24/7.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- why book with Turkey end  -->

<div class="border-top-light"></div>

<!-- Top attractions start  -->
<div class="top__attraction bg-light-3 py-40">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-left">
                <h2 class="sectionTitle__title">Top attractions </h2>
                <p class="sectionTitle__text mt-5 sm:mt-0">Discover breathtaking views, cultural landmarks, outdoor
                    adventures.</p>
            </div>
        </div>
        <div class="row pt-40">
            <div class="col-md-4 mb-3">

                <div class="__minibox bg-white shadow-sm p-2 rounded-8">
                    <a href="#">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <div class="__imgbx">
                                    <img src="{{ asset('frontend/img/top-attractions/1.png')}}" class="rounded-8 d-block" alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="__content">
                                    <span class="fw-600 text-18 d-block">Bayside Marketplace</span>
                                    <span>99 Tours and Activities</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
            <div class="col-md-4 mb-3">

                <div class="__minibox bg-white shadow-sm p-2 rounded-8">
                    <a href="#">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <div class="__imgbx">
                                    <img src="{{ asset('frontend/img/top-attractions/2.png')}}" class="rounded-8 d-block" alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="__content">
                                    <span class="fw-600 text-18 d-block">Bayside Marketplace</span>
                                    <span>99 Tours and Activities</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
            <div class="col-md-4 mb-3">

                <div class="__minibox bg-white shadow-sm p-2 rounded-8">
                    <a href="#">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <div class="__imgbx">
                                    <img src="{{ asset('frontend/img/top-attractions/3.png')}}" class="rounded-8 d-block" alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="__content">
                                    <span class="fw-600 text-18 d-block">Bayside Marketplace</span>
                                    <span>99 Tours and Activities</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
            <div class="col-md-4 mb-3">

                <div class="__minibox bg-white shadow-sm p-2 rounded-8">
                    <a href="#">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <div class="__imgbx">
                                    <img src="{{ asset('frontend/img/top-attractions/4.png')}}" class="rounded-8 d-block" alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="__content">
                                    <span class="fw-600 text-18 d-block">Bayside Marketplace</span>
                                    <span>99 Tours and Activities</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
            <div class="col-md-4 mb-3">

                <div class="__minibox bg-white shadow-sm p-2 rounded-8">
                    <a href="#">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <div class="__imgbx">
                                    <img src="{{ asset('frontend/img/top-attractions/5.png')}}" class="rounded-8 d-block" alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="__content">
                                    <span class="fw-600 text-18 d-block">Bayside Marketplace</span>
                                    <span>99 Tours and Activities</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
            <div class="col-md-4 mb-3">

                <div class="__minibox bg-white shadow-sm p-2 rounded-8">
                    <a href="#">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <div class="__imgbx">
                                    <img src="{{ asset('frontend/img/top-attractions/6.png')}}" class="rounded-8 d-block" alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="__content">
                                    <span class="fw-600 text-18 d-block">Bayside Marketplace</span>
                                    <span>99 Tours and Activities</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
            <div class="col-md-4 mb-3">

                <div class="__minibox bg-white shadow-sm p-2 rounded-8">
                    <a href="#">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <div class="__imgbx">
                                    <img src="{{ asset('frontend/img/top-attractions/7.png')}}" class="rounded-8 d-block" alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="__content">
                                    <span class="fw-600 text-18 d-block">Bayside Marketplace</span>
                                    <span>99 Tours and Activities</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
            <div class="col-md-4 mb-3">

                <div class="__minibox bg-white shadow-sm p-2 rounded-8">
                    <a href="#">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <div class="__imgbx">
                                    <img src="{{ asset('frontend/img/top-attractions/8.png')}}" class="rounded-8 d-block" alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="__content">
                                    <span class="fw-600 text-18 d-block">Bayside Marketplace</span>
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
<!-- Top attractions end  -->
 

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
            <div class="col-md-12 text-left">
                <h2 class="sectionTitle__title">Top Destinations</h2>
                <p class="sectionTitle__text mt-5 sm:mt-0">Breathtaking cities, scenic landscapes, cultural hotspots top
                    travel list.</p>
            </div>
        </div>
    </div>
    <div class="pt-40">
        <div class="row justify-content-center">

            <div class="col-md-2 mb-3">
                <div class="__destiny-box">
                    <a href="#">
                        <div class="__destiny-content">
                            <img src="{{ asset('frontend/img/top-destination/1.png')}}" class="rounded-8" alt="">
                            <div class="title">
                                <h4 class="fw-600 text-white text-20">Ankara</h4>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-2 mb-3">
                <div class="__destiny-box">
                    <a href="#">
                        <div class="__destiny-content">
                            <img src="{{ asset('frontend/img/top-destination/2.png')}}" class="rounded-8" alt="">
                            <div class="title">
                                <h4 class="fw-600 text-white text-20">Istanbul</h4>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-2 mb-3">
                <div class="__destiny-box">
                    <a href="#">
                        <div class="__destiny-content">
                            <img src="{{ asset('frontend/img/top-destination/3.png')}}" class="rounded-8" alt="">
                            <div class="title">
                                <h4 class="fw-600 text-white text-20">İzmir</h4>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-2 mb-3">
                <div class="__destiny-box">
                    <a href="#">
                        <div class="__destiny-content">
                            <img src="{{ asset('frontend/img/top-destination/4.png')}}" class="rounded-8" alt="">
                            <div class="title">
                                <h4 class="fw-600 text-white text-20">Bursa</h4>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-2 mb-3">
                <div class="__destiny-box">
                    <a href="#">
                        <div class="__destiny-content">
                            <img src="{{ asset('frontend/img/top-destination/5.png')}}" class="rounded-8" alt="">
                            <div class="title">
                                <h4 class="fw-600 text-white text-20">Antalya</h4>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

        </div>
        <div class="row mt-15 justify-content-center">

            <div class="col-md-2 mb-3">
                <div class="__destiny-box">
                    <a href="#">
                        <div class="__destiny-content">
                            <img src="{{ asset('frontend/img/top-destination/6.png')}}" class="rounded-8" alt="">
                            <div class="title">
                                <h4 class="fw-600 text-white text-20">Eskişehir</h4>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-2 mb-3">
                <div class="__destiny-box">
                    <a href="#">
                        <div class="__destiny-content">
                            <img src="{{ asset('frontend/img/top-destination/7.png')}}" class="rounded-8" alt="">
                            <div class="title">
                                <h4 class="fw-600 text-white text-20">Şanlıurfa</h4>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-2 mb-3">
                <div class="__destiny-box">
                    <a href="#">
                        <div class="__destiny-content">
                            <img src="{{ asset('frontend/img/top-destination/8.png')}}" class="rounded-8" alt="">
                            <div class="title">
                                <h4 class="fw-600 text-white text-20">Konya</h4>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-2 mb-3">
                <div class="__destiny-box">
                    <a href="#">
                        <div class="__destiny-content">
                            <img src="{{ asset('frontend/img/top-destination/9.png')}}" class="rounded-8" alt="">
                            <div class="title">
                                <h4 class="fw-600 text-white text-20">Gaziantep</h4>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-2">
                <div class="__destiny-box">
                    <a href="#">
                        <div class="__destiny-content">
                            <img src="{{ asset('frontend/img/top-destination/10.png')}}" class="rounded-8" alt="">
                            <div class="title">
                                <h4 class="fw-600 text-white text-20">Fethiye</h4>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- top destination end  -->

<section class=" layout-pb-md">
    <div class="container">
        <div data-anim="slide-up delay-1" class="row y-gap-20 justify-between items-end">
            <div class="col-auto">
                <div class="sectionTitle -md">
                    <h2 class="sectionTitle__title">Popular Destinations</h2>
                    <p class=" sectionTitle__text mt-5 sm:mt-0">These popular destinations have a lot to offer</p>
                </div>
            </div>

            <div class="col-auto md:d-none">

                <a href="#" class="button -md -blue-1 bg-blue-1-05 text-blue-1">
                    View All Destinations <div class="icon-arrow-top-right ml-15"></div>
                </a>

            </div>
        </div>

        <div class="relative pt-40 sm:pt-20 js-section-slider" data-gap="30" data-scrollbar data-slider-cols="base-2 xl-4 lg-3 md-2 sm-2 base-1" data-anim="slide-up delay-2">
            <div class="swiper-wrapper">

                <div class="swiper-slide">

                    <a href="#" class="citiesCard -type-1 d-block rounded-4 ">
                        <div class="citiesCard__image ratio ratio-3:4">
                            <img src="{{ asset('frontend/img/popular-destinations/1.png')}}" data-src="{{ asset('frontend/img/popular-destinations/1.png')}}" alt="image" class="js-lazy">
                        </div>

                        <div class="citiesCard__content d-flex flex-column justify-between text-center pt-30 pb-20 px-20">
                            <div class="citiesCard__bg"></div>

                            <div class="citiesCard__top">
                                <div class="text-14 text-white">14 Hotel - 22 Cars - 18 Tours - 95 Activity</div>
                            </div>

                            <div class="citiesCard__bottom">
                                <h4 class="text-26 md:text-20 lh-13 text-white mb-20">Turkey</h4>
                                <button class="button col-12 h-60 -blue-1 bg-white text-dark-1">Discover</button>
                            </div>
                        </div>
                    </a>

                </div>

                <div class="swiper-slide">

                    <a href="#" class="citiesCard -type-1 d-block rounded-4 ">
                        <div class="citiesCard__image ratio ratio-3:4">
                            <img src="{{ asset('frontend/img/popular-destinations/2.png')}}" data-src="{{ asset('frontend/img/popular-destinations/2.png')}}" alt="image" class="js-lazy">
                        </div>

                        <div class="citiesCard__content d-flex flex-column justify-between text-center pt-30 pb-20 px-20">
                            <div class="citiesCard__bg"></div>

                            <div class="citiesCard__top">
                                <div class="text-14 text-white">14 Hotel - 22 Cars - 18 Tours - 95 Activity</div>
                            </div>

                            <div class="citiesCard__bottom">
                                <h4 class="text-26 md:text-20 lh-13 text-white mb-20">Dubai</h4>
                                <button class="button col-12 h-60 -blue-1 bg-white text-dark-1">Discover</button>
                            </div>
                        </div>
                    </a>

                </div>

                <div class="swiper-slide">

                    <a href="#" class="citiesCard -type-1 d-block rounded-4 ">
                        <div class="citiesCard__image ratio ratio-3:4">
                            <img src="{{ asset('frontend/img/popular-destinations/3.png')}}" data-src="{{ asset('frontend/img/popular-destinations/3.png')}}" alt="image" class="js-lazy">
                        </div>

                        <div class="citiesCard__content d-flex flex-column justify-between text-center pt-30 pb-20 px-20">
                            <div class="citiesCard__bg"></div>

                            <div class="citiesCard__top">
                                <div class="text-14 text-white">14 Hotel - 22 Cars - 18 Tours - 95 Activity</div>
                            </div>

                            <div class="citiesCard__bottom">
                                <h4 class="text-26 md:text-20 lh-13 text-white mb-20">Morrocco</h4>
                                <button class="button col-12 h-60 -blue-1 bg-white text-dark-1">Discover</button>
                            </div>
                        </div>
                    </a>

                </div>

                <div class="swiper-slide">

                    <a href="#" class="citiesCard -type-1 d-block rounded-4 ">
                        <div class="citiesCard__image ratio ratio-3:4">
                            <img src="{{ asset('frontend/img/popular-destinations/4.png')}}" data-src="{{ asset('frontend/img/popular-destinations/4.png')}}" alt="image" class="js-lazy">
                        </div>

                        <div class="citiesCard__content d-flex flex-column justify-between text-center pt-30 pb-20 px-20">
                            <div class="citiesCard__bg"></div>

                            <div class="citiesCard__top">
                                <div class="text-14 text-white">14 Hotel - 22 Cars - 18 Tours - 95 Activity</div>
                            </div>

                            <div class="citiesCard__bottom">
                                <h4 class="text-26 md:text-20 lh-13 text-white mb-20">Jordan</h4>
                                <button class="button col-12 h-60 -blue-1 bg-white text-dark-1">Discover</button>
                            </div>
                        </div>
                    </a>

                </div>

                <div class="swiper-slide">

                    <a href="#" class="citiesCard -type-1 d-block rounded-4 ">
                        <div class="citiesCard__image ratio ratio-3:4">
                            <img src="{{ asset('frontend/img/popular-destinations/5.png')}}" data-src="{{ asset('frontend/img/popular-destinations/5.png')}}" alt="image" class="js-lazy">
                        </div>

                        <div class="citiesCard__content d-flex flex-column justify-between text-center pt-30 pb-20 px-20">
                            <div class="citiesCard__bg"></div>

                            <div class="citiesCard__top">
                                <div class="text-14 text-white">14 Hotel - 22 Cars - 18 Tours - 95 Activity</div>
                            </div>

                            <div class="citiesCard__bottom">
                                <h4 class="text-26 md:text-20 lh-13 text-white mb-20">Egypt</h4>
                                <button class="button col-12 h-60 -blue-1 bg-white text-dark-1">Discover</button>
                            </div>
                        </div>
                    </a>

                </div>

            </div>


            <button class="section-slider-nav -prev flex-center button -blue-1 bg-white shadow-1 size-40 rounded-full sm:d-none js-prev">
                <i class="icon icon-chevron-left text-12"></i>
            </button>

            <button class="section-slider-nav -next flex-center button -blue-1 bg-white shadow-1 size-40 rounded-full sm:d-none js-next">
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
                        <img class="img-ratio js-lazy" src="#" data-src="{{ asset('frontend/img/Thingstodo.png')}}" alt="image">
                    </div>

                    <div class="ctaCard__content py-70 px-70 lg:py-30 lg:px-30">


                        <h4 class="text-40 lg:text-26 text-white">Things to do on<br> your trip</h4>

                        <div class="d-inline-block mt-30">
                            <a href="#" class="button px-48 py-15 -blue-1 -min-180 bg-white text-dark-1">Experiences</a>
                        </div>
                    </div>
                </div>

            </div>

            <div data-anim="slide-up delay-1" class="col-md-6">

                <div class="ctaCard -type-1 rounded-4 ">
                    <div class="ctaCard__image ratio ratio-63:55">
                        <img class="img-ratio js-lazy" src="#" data-src="{{ asset('frontend/img/Up-to-70.png')}}" alt="image">
                    </div>

                    <div class="ctaCard__content py-70 px-70 lg:py-30 lg:px-30">

                        <div class="text-15 fw-500 text-white mb-10">Enjoy Summer Deals</div>


                        <h4 class="text-40 lg:text-26 text-white">Up to 70% Discount!</h4>

                        <div class="d-inline-block mt-30">
                            <a href="#" class="button px-48 py-15 -blue-1 -min-180 bg-white text-dark-1">Learn More</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- interest start  -->
<section class="py-40 bg-light-3 relative">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-left">
                <h2 class="sectionTitle__title">Based on your interest</h2>
                <p class="sectionTitle__text mt-5 sm:mt-0">Exploring new cultures, discovering hidden gems, memories
                    lasting lifetime.</p>
            </div>
        </div>

        <div class="pt-40 flex-center overflow-hidden interest-section-slider" data-slider-cols="base-1" data-nav-prev="js-img-prev" data-nav-next="js-img-next">
            <div class="swiper-wrapper p-3">
                <div class="swiper-slide shadow-sm bg-white p-3 rounded-8">

                    <div>
                        <a href="tour-single.html" class="tourCard -type-1">
                            <div class="tourCard__image">

                                <div class="cardImage ratio ratio-1:1">
                                    <div class="cardImage__content">

                                        <img class="rounded-4 col-12 js-lazy" src="#" data-src="https://media.tacdn.com/media/attractions-splice-spp-360x240/0f/24/64/0a.jpg" alt="image">


                                    </div>

                                    <div class="cardImage__wishlist">
                                        <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                                            <i class="icon-heart text-12"></i>
                                        </button>
                                    </div>


                                    <div class="cardImage__leftBadge">
                                        <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-dark-1 text-white">
                                            LIKELY TO SELL OUT*
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="tourCard__content mt-10">
                                <div class="d-flex items-center lh-14 mb-5">
                                    <div class="text-14 text-light-1">16+ hours</div>
                                    <div class="size-3 bg-light-1 rounded-full ml-10 mr-10"></div>
                                    <div class="text-14 text-light-1">Full-day Tours</div>
                                </div>

                                <h4 class="tourCard__title text-dark-1 text-18 lh-16 fw-500">
                                    <span>Stonehenge, Windsor Castle and Bath with Pub Lunch in Lacock</span>
                                </h4>

                                <p class="text-light-1 lh-14 text-14 mt-5">Westminster Borough, London</p>

                                <div class="row justify-between items-center pt-15">
                                    <div class="col-auto">
                                        <div class="d-flex items-center">
                                            <div class="d-flex items-center x-gap-5">

                                                <div class="icon-star text-yellow-1 text-10"></div>

                                                <div class="icon-star text-yellow-1 text-10"></div>

                                                <div class="icon-star text-yellow-1 text-10"></div>

                                                <div class="icon-star text-yellow-1 text-10"></div>

                                                <div class="icon-star text-yellow-1 text-10"></div>

                                            </div>

                                            <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                                        </div>
                                    </div>

                                    <div class="col-auto">
                                        <div class="text-14 text-light-1">
                                            From
                                            <span class="text-16 fw-500 text-dark-1">US$72</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>

                    </div>

                </div>

                <div class="swiper-slide shadow-sm bg-white p-3 rounded-8">

                    <div>
                        <a href="tour-single.html" class="tourCard -type-1">
                            <div class="tourCard__image">

                                <div class="cardImage ratio ratio-1:1">
                                    <div class="cardImage__content">

                                        <img class="rounded-4 col-12 js-lazy" src="#" data-src="https://media.tacdn.com/media/attractions-splice-spp-360x240/0a/a4/5b/7f.jpg" alt="image">


                                    </div>

                                    <div class="cardImage__wishlist">
                                        <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                                            <i class="icon-heart text-12"></i>
                                        </button>
                                    </div>


                                    <div class="cardImage__leftBadge">
                                        <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-dark-1 text-white">
                                            LIKELY TO SELL OUT*
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="tourCard__content mt-10">
                                <div class="d-flex items-center lh-14 mb-5">
                                    <div class="text-14 text-light-1">16+ hours</div>
                                    <div class="size-3 bg-light-1 rounded-full ml-10 mr-10"></div>
                                    <div class="text-14 text-light-1">Full-day Tours</div>
                                </div>

                                <h4 class="tourCard__title text-dark-1 text-18 lh-16 fw-500">
                                    <span>Stonehenge, Windsor Castle and Bath with Pub Lunch in Lacock</span>
                                </h4>

                                <p class="text-light-1 lh-14 text-14 mt-5">Westminster Borough, London</p>

                                <div class="row justify-between items-center pt-15">
                                    <div class="col-auto">
                                        <div class="d-flex items-center">
                                            <div class="d-flex items-center x-gap-5">

                                                <div class="icon-star text-yellow-1 text-10"></div>

                                                <div class="icon-star text-yellow-1 text-10"></div>

                                                <div class="icon-star text-yellow-1 text-10"></div>

                                                <div class="icon-star text-yellow-1 text-10"></div>

                                                <div class="icon-star text-yellow-1 text-10"></div>

                                            </div>

                                            <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                                        </div>
                                    </div>

                                    <div class="col-auto">
                                        <div class="text-14 text-light-1">
                                            From
                                            <span class="text-16 fw-500 text-dark-1">US$72</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>

                    </div>

                </div>

                <div class="swiper-slide shadow-sm bg-white p-3 rounded-8">

                    <div>
                        <a href="tour-single.html" class="tourCard -type-1">
                            <div class="tourCard__image">

                                <div class="cardImage ratio ratio-1:1">
                                    <div class="cardImage__content">

                                        <img class="rounded-4 col-12 js-lazy" src="#" data-src="https://media.tacdn.com/media/attractions-splice-spp-360x240/06/e5/d8/0e.jpg" alt="image">


                                    </div>

                                    <div class="cardImage__wishlist">
                                        <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                                            <i class="icon-heart text-12"></i>
                                        </button>
                                    </div>


                                    <div class="cardImage__leftBadge">
                                        <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-dark-1 text-white">
                                            LIKELY TO SELL OUT*
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="tourCard__content mt-10">
                                <div class="d-flex items-center lh-14 mb-5">
                                    <div class="text-14 text-light-1">16+ hours</div>
                                    <div class="size-3 bg-light-1 rounded-full ml-10 mr-10"></div>
                                    <div class="text-14 text-light-1">Full-day Tours</div>
                                </div>

                                <h4 class="tourCard__title text-dark-1 text-18 lh-16 fw-500">
                                    <span>Stonehenge, Windsor Castle and Bath with Pub Lunch in Lacock</span>
                                </h4>

                                <p class="text-light-1 lh-14 text-14 mt-5">Westminster Borough, London</p>

                                <div class="row justify-between items-center pt-15">
                                    <div class="col-auto">
                                        <div class="d-flex items-center">
                                            <div class="d-flex items-center x-gap-5">

                                                <div class="icon-star text-yellow-1 text-10"></div>

                                                <div class="icon-star text-yellow-1 text-10"></div>

                                                <div class="icon-star text-yellow-1 text-10"></div>

                                                <div class="icon-star text-yellow-1 text-10"></div>

                                                <div class="icon-star text-yellow-1 text-10"></div>

                                            </div>

                                            <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                                        </div>
                                    </div>

                                    <div class="col-auto">
                                        <div class="text-14 text-light-1">
                                            From
                                            <span class="text-16 fw-500 text-dark-1">US$72</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>

                    </div>

                </div>

                <div class="swiper-slide shadow-sm bg-white p-3 rounded-8">

                    <div>
                        <a href="tour-single.html" class="tourCard -type-1">
                            <div class="tourCard__image">

                                <div class="cardImage ratio ratio-1:1">
                                    <div class="cardImage__content">

                                        <img class="rounded-4 col-12 js-lazy" src="#" data-src="https://media.tacdn.com/media/attractions-splice-spp-360x240/0b/2f/f1/4e.jpg" alt="image">


                                    </div>

                                    <div class="cardImage__wishlist">
                                        <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                                            <i class="icon-heart text-12"></i>
                                        </button>
                                    </div>


                                    <div class="cardImage__leftBadge">
                                        <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-dark-1 text-white">
                                            LIKELY TO SELL OUT*
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="tourCard__content mt-10">
                                <div class="d-flex items-center lh-14 mb-5">
                                    <div class="text-14 text-light-1">16+ hours</div>
                                    <div class="size-3 bg-light-1 rounded-full ml-10 mr-10"></div>
                                    <div class="text-14 text-light-1">Full-day Tours</div>
                                </div>

                                <h4 class="tourCard__title text-dark-1 text-18 lh-16 fw-500">
                                    <span>Stonehenge, Windsor Castle and Bath with Pub Lunch in Lacock</span>
                                </h4>

                                <p class="text-light-1 lh-14 text-14 mt-5">Westminster Borough, London</p>

                                <div class="row justify-between items-center pt-15">
                                    <div class="col-auto">
                                        <div class="d-flex items-center">
                                            <div class="d-flex items-center x-gap-5">

                                                <div class="icon-star text-yellow-1 text-10"></div>

                                                <div class="icon-star text-yellow-1 text-10"></div>

                                                <div class="icon-star text-yellow-1 text-10"></div>

                                                <div class="icon-star text-yellow-1 text-10"></div>

                                                <div class="icon-star text-yellow-1 text-10"></div>

                                            </div>

                                            <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                                        </div>
                                    </div>

                                    <div class="col-auto">
                                        <div class="text-14 text-light-1">
                                            From
                                            <span class="text-16 fw-500 text-dark-1">US$72</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>

                    </div>

                </div>

                <div class="swiper-slide shadow-sm bg-white p-3 rounded-8">

                    <div>
                        <a href="tour-single.html" class="tourCard -type-1">
                            <div class="tourCard__image">

                                <div class="cardImage ratio ratio-1:1">
                                    <div class="cardImage__content">

                                        <img class="rounded-4 col-12 js-lazy" src="#" data-src="https://media.tacdn.com/media/attractions-splice-spp-360x240/06/70/4c/c1.jpg" alt="image">


                                    </div>

                                    <div class="cardImage__wishlist">
                                        <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                                            <i class="icon-heart text-12"></i>
                                        </button>
                                    </div>


                                    <div class="cardImage__leftBadge">
                                        <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-dark-1 text-white">
                                            LIKELY TO SELL OUT*
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="tourCard__content mt-10">
                                <div class="d-flex items-center lh-14 mb-5">
                                    <div class="text-14 text-light-1">16+ hours</div>
                                    <div class="size-3 bg-light-1 rounded-full ml-10 mr-10"></div>
                                    <div class="text-14 text-light-1">Full-day Tours</div>
                                </div>

                                <h4 class="tourCard__title text-dark-1 text-18 lh-16 fw-500">
                                    <span>Stonehenge, Windsor Castle and Bath with Pub Lunch in Lacock</span>
                                </h4>

                                <p class="text-light-1 lh-14 text-14 mt-5">Westminster Borough, London</p>

                                <div class="row justify-between items-center pt-15">
                                    <div class="col-auto">
                                        <div class="d-flex items-center">
                                            <div class="d-flex items-center x-gap-5">

                                                <div class="icon-star text-yellow-1 text-10"></div>

                                                <div class="icon-star text-yellow-1 text-10"></div>

                                                <div class="icon-star text-yellow-1 text-10"></div>

                                                <div class="icon-star text-yellow-1 text-10"></div>

                                                <div class="icon-star text-yellow-1 text-10"></div>

                                            </div>

                                            <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                                        </div>
                                    </div>

                                    <div class="col-auto">
                                        <div class="text-14 text-light-1">
                                            From
                                            <span class="text-16 fw-500 text-dark-1">US$72</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>

                    </div>

                </div>

            </div>

            <div class="absolute z-5 h-full col-11">

                <button class="section-slider-nav -prev flex-center button -blue-1 bg-white shadow-1 size-40 rounded-full sm:d-none js-img-prev">
                    <i class="icon icon-chevron-left text-12"></i>
                </button>

                <button class="section-slider-nav -next flex-center button -blue-1 bg-white shadow-1 size-40 rounded-full sm:d-none js-img-next">
                    <i class="icon icon-chevron-right text-12"></i>
                </button>

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


<section class="py-40 bg-light-3">
    <div data-anim-wrap class="container">
        <div class="row y-gap-20 justify-between">

            <div data-anim-child="slide-up delay-1" class="col-lg-3 col-sm-6">

                <div class="featureIcon -type-1 shadow-sm rounded-8 bg-white p-3">
                    <div class="d-flex justify-center">
                        <img src="#" data-src="frontend/img/featureIcons/1/1.svg" alt="image" class="js-lazy">
                    </div>

                    <div class="text-center mt-30">
                        <h4 class="text-18 fw-500">Best Price Guarantee</h4>
                        <p class="text-15 mt-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>

            </div>

            <div data-anim-child="slide-up delay-2" class="col-lg-3 col-sm-6">

                <div class="featureIcon -type-1 shadow-sm rounded-8 bg-white p-3">
                    <div class="d-flex justify-center">
                        <img src="#" data-src="frontend/img/featureIcons/1/2.svg" alt="image" class="js-lazy">
                    </div>

                    <div class="text-center mt-30">
                        <h4 class="text-18 fw-500">Easy & Quick Booking</h4>
                        <p class="text-15 mt-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>

            </div>

            <div data-anim-child="slide-up delay-3" class="col-lg-3 col-sm-6">

                <div class="featureIcon -type-1 shadow-sm rounded-8 bg-white p-3">
                    <div class="d-flex justify-center">
                        <img src="#" data-src="frontend/img/featureIcons/1/3.svg" alt="image" class="js-lazy">
                    </div>

                    <div class="text-center mt-30">
                        <h4 class="text-18 fw-500">Customer Care 24/7</h4>
                        <p class="text-15 mt-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

<section class="layout-pt-lg layout-pb-lg bg-blue-2">
    <div data-anim-wrap class="container">
        <div class="row y-gap-40 justify-between">
            <div data-anim-child="slide-up delay-1" class="col-xl-5 col-lg-6">
                <h2 class="text-30 text-white">What our customers are<br> saying us?</h2>
                <p class="mt-20 text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas varius
                    tortor nibh,
                    sit amet tempor nibh finibus et. Aenean eu enim justo.</p>

                <div class="row y-gap-30 pt-60 lg:pt-40">
                    <div class="col-sm-5 col-6">
                        <div class="text-30 text-white lh-15 fw-600">13m+</div>
                        <div class="text-white lh-15">Happy People</div>
                    </div>

                    <div class="col-sm-5 col-6">
                        <div class="text-30 text-white lh-15 fw-600">4.88</div>
                        <div class="text-white lh-15">Overall rating</div>

                        <div class="d-flex x-gap-5 items-center pt-10">

                            <div class="icon-star text-white text-10"></div>

                            <div class="icon-star text-white text-10"></div>

                            <div class="icon-star text-white text-10"></div>

                            <div class="icon-star text-white text-10"></div>

                            <div class="icon-star text-white text-10"></div>

                        </div>
                    </div>
                </div>
            </div>

            <div data-anim-child="slide-up delay-2" class="col-lg-6">
                <div class="overflow-hidden js-testimonials-slider-3" data-scrollbar>
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="row items-center x-gap-30 y-gap-20">
                                <div class="col-auto">
                                    <img src="#" data-src="frontend/img/avatars/1.png" alt="image" class="js-lazy">
                                </div>

                                <div class="col-auto">
                                    <h5 class="text-16 text-white fw-500">Annette Black</h5>
                                    <div class="text-15 text-white lh-15">UX / UI Designer</div>
                                </div>
                            </div>

                            <p class="text-18 fw-500 text-white mt-30 sm:mt-20">The place is in a great location in
                                Gumbet. The area is safe and beautiful. The apartment was comfortable and the host was
                                kind and responsive to our requests.</p>
                        </div>

                        <div class="swiper-slide">
                            <div class="row items-center x-gap-30 y-gap-20">
                                <div class="col-auto">
                                    <img src="#" data-src="frontend/img/avatars/1.png" alt="image" class="js-lazy">
                                </div>

                                <div class="col-auto">
                                    <h5 class="text-16 text-white fw-500">Annette Black</h5>
                                    <div class="text-15 text-white lh-15">UX / UI Designer</div>
                                </div>
                            </div>

                            <p class="text-18 fw-500 text-white mt-30 sm:mt-20">The place is in a great location in
                                Gumbet. The area is safe and beautiful. The apartment was comfortable and the host was
                                kind and responsive to our requests.</p>
                        </div>

                        <div class="swiper-slide">
                            <div class="row items-center x-gap-30 y-gap-20">
                                <div class="col-auto">
                                    <img src="#" data-src="frontend/img/avatars/1.png" alt="image" class="js-lazy">
                                </div>

                                <div class="col-auto">
                                    <h5 class="text-16 text-white fw-500">Annette Black</h5>
                                    <div class="text-15 text-white lh-15">UX / UI Designer</div>
                                </div>
                            </div>

                            <p class="text-18 fw-500 text-white mt-30 sm:mt-20">The place is in a great location in
                                Gumbet. The area is safe and beautiful. The apartment was comfortable and the host was
                                kind and responsive to our requests.</p>
                        </div>

                    </div>

                    <div class="d-flex items-center mt-60 sm:mt-20 js-testimonials-slider-pag">
                        <div class="text-white fw-500 js-current">01</div>
                        <div class="slider-scrollbar bg-border ml-20 mr-20 w-max-300 js-scrollbar"></div>
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
                    <p class=" sectionTitle__text mt-5 sm:mt-0">Interdum et malesuada fames</p>
                </div>
            </div>
        </div>

        <div class="row y-gap-30 pt-40">

            <div data-anim-child="slide-left delay-1" class="col-lg-4 col-sm-6">

                <a href="" class="blogCard -type-1 d-block shadow-sm bg-white rounded-8 p-3">
                    <div class="blogCard__image">
                        <div class="ratio ratio-4:3 rounded-4 rounded-8">
                            <img class="img-ratio js-lazy" src="#" data-src="https://media.tacdn.com/media/attractions-splice-spp-360x240/0f/ee/9b/24.jpg" alt="image">
                        </div>
                    </div>

                    <div class="mt-20">
                        <h4 class="text-dark-1 text-18 fw-500">10 European ski destinations you should visit this winter
                        </h4>
                        <div class="text-light-1 text-15 lh-14 mt-5">April 06, 2022</div>
                    </div>
                </a>

            </div>

            <div data-anim-child="slide-left delay-2" class="col-lg-4 col-sm-6">

                <a href="" class="blogCard -type-1 d-block shadow-sm bg-white rounded-8 p-3">
                    <div class="blogCard__image">
                        <div class="ratio ratio-4:3 rounded-4 rounded-8">
                            <img class="img-ratio js-lazy" src="#" data-src="https://media.tacdn.com/media/attractions-splice-spp-360x240/0b/93/db/b8.jpg" alt="image">
                        </div>
                    </div>

                    <div class="mt-20">
                        <h4 class="text-dark-1 text-18 fw-500">Booking travel during Corona: good advice in an uncertain
                            time</h4>
                        <div class="text-light-1 text-15 lh-14 mt-5">April 06, 2022</div>
                    </div>
                </a>

            </div>

            <div data-anim-child="slide-left delay-3" class="col-lg-4 col-sm-6">

                <a href="" class="blogCard -type-1 d-block shadow-sm bg-white rounded-8 p-3">
                    <div class="blogCard__image">
                        <div class="ratio ratio-4:3 rounded-4 rounded-8">
                            <img class="img-ratio js-lazy" src="#" data-src="https://media.tacdn.com/media/attractions-splice-spp-360x240/07/25/13/74.jpg" alt="image">
                        </div>
                    </div>

                    <div class="mt-20">
                        <h4 class="text-dark-1 text-18 fw-500">Where can I go? 5 amazing countries that are open right
                            now</h4>
                        <div class="text-light-1 text-15 lh-14 mt-5">April 06, 2022</div>
                    </div>
                </a>

            </div>

        </div>
    </div>
</section>

<!-- <section class="layout-pt-md layout-pb-lg">
    <div class="container">
        <div class="row">
            <div class="col-auto">
                <div class="sectionTitle -md">
                    <h2 class="sectionTitle__title">Destinations we love</h2>
                    <p class=" sectionTitle__text mt-5 sm:mt-0">Interdum et malesuada fames ac ante ipsum</p>
                </div>
            </div>
        </div>

        <div class="tabs -pills pt-40 js-tabs">
            <div class="tabs__controls d-flex js-tabs-controls">

                <div>
                    <button class="tabs__button fw-500 text-15 px-30 py-15 rounded-4 js-tabs-button is-tab-el-active"
                        data-tab-target=".-tab-item-1">Regions</button>
                </div>

                <div>
                    <button class="tabs__button fw-500 text-15 px-30 py-15 rounded-4 js-tabs-button "
                        data-tab-target=".-tab-item-2">Cities</button>
                </div>

                <div>
                    <button class="tabs__button fw-500 text-15 px-30 py-15 rounded-4 js-tabs-button "
                        data-tab-target=".-tab-item-3">Places of interest</button>
                </div>

            </div>

            <div class="tabs__content pt-30 js-tabs-content">

                <div class="tabs__pane -tab-item-1 is-tab-el-active">
                    <div class="row y-gap-20">

                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">Hawai</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>

                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">Istanbul</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>

                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">San Diego</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>

                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">Phuket</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>

                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">Reykjavik</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>

                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">Santorini</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>

                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">Los Angeles</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>

                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">İbiza</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>

                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">Boston</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>

                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">Florence</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>

                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">Mykonos</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>

                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">London</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>

                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">Paris</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>

                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">Dubai</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>

                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">Krakow</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>

                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">Jersey</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>

                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">Prag</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>

                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">Amsterdam</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>

                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">Rome</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>

                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">Miami</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>

                    </div>
                </div>

                <div class="tabs__pane -tab-item-2 ">
                    <div class="row y-gap-20">

                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">Hawai</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>

                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">Istanbul</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>

                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">San Diego</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>

                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">Phuket</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>

                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">Reykjavik</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>

                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">Santorini</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>

                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">Los Angeles</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>

                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">İbiza</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>

                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">Boston</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>

                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">Florence</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>

                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">Mykonos</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>

                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">London</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>

                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">Paris</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>

                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">Dubai</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>

                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">Krakow</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>

                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">Jersey</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>

                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">Prag</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>

                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">Amsterdam</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>

                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">Rome</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>

                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">Miami</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>

                    </div>
                </div>

                <div class="tabs__pane -tab-item-3 ">
                    <div class="row y-gap-20">

                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">Hawai</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>

                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">Istanbul</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>

                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">San Diego</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>

                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">Phuket</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>

                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">Reykjavik</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>

                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">Santorini</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>

                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">Los Angeles</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>

                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">İbiza</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>

                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">Boston</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>

                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">Florence</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>

                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">Mykonos</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>

                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">London</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>

                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">Paris</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>

                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">Dubai</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>

                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">Krakow</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>

                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">Jersey</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>

                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">Prag</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>

                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">Amsterdam</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>

                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">Rome</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>

                        <div class="w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/2">
                            <a href="#" class="d-block">
                                <div class="text-15 fw-500">Miami</div>
                                <div class="text-14 text-light-1">12,683 properties</div>
                            </a>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</section> -->


<!-- modal section start  -->

<div class="modal" id="inquiryForm">

    <div id="modal-close-overlay"></div>

    <div class="modal-content">

        <div class="row">
            <div class="col-md-6 sm:d-none" style="position: relative;">

                <div class="d-flex justify-center overflow-hidden js-section-slider" data-slider-cols="base-1" style="width: 100%; max-width: 500px;height: 100%;" data-nav-prev="js-img-prev" data-nav-next="js-img-next">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="https://media.tacdn.com/media/attractions-splice-spp-674x446/0f/1a/f1/77.jpg" alt="subscribe newsletter" class="h-full">
                        </div>

                        <div class="swiper-slide">
                            <img src="https://media.tacdn.com/media/attractions-splice-spp-674x446/0b/39/a0/b0.jpg" alt="subscribe newsletter" class="h-full">
                        </div>

                        <div class="swiper-slide">
                            <img src="https://media.tacdn.com/media/attractions-splice-spp-674x446/0b/c9/a1/ac.jpg" alt="subscribe newsletter" class="h-full">
                        </div>

                        <div class="swiper-slide">
                            <img src="https://media.tacdn.com/media/attractions-splice-spp-674x446/0b/c9/a1/ac.jpg" alt="subscribe newsletter" class="h-full">
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-md-6">
                <div class="newsletter">

                    <button id="modal-close-btn" class="p-2 shadow-1 button text-white bg-blue-1">
                        <i class="icon-close"></i>
                    </button>

                    <form action="#">

                        <div class="sectionTitle -md  text-left">

                            <h3 class="sectionTitle__title">Inquiry Form</h3>

                            <p class="sectionTitle__text mb-3">
                                Discover Turkey's Beauty with <b>iLinkTurkey</b>. Book Your Tour Now!
                            </p>

                        </div>

                        <input type="text" name="name" class="input-field" placeholder="Name" required>
                        <input type="email" name="email" class="input-field" placeholder="Email" required>
                        <input type="text" name="phone" class="input-field" placeholder="Phone No." required>

                        <button type="submit" class="shadow-1 text-18 p-2 button text-white bg-blue-1">Submit</button>

                    </form>

                </div>
            </div>
        </div>

    </div>

</div>

<!-- modal section end  -->


@endsection