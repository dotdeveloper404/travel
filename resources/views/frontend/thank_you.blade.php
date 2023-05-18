@extends('frontend.layouts.app')

@section('content')

  <main>
      
      
    <section style="height:500px;" class="section-bg layout-pt-lg layout-pb-lg">
      <div class="section-bg__item col-12">
        <img src="../frontend/img/home-banner.png" alt="image">
      </div>

      <div class="container">
        <div class="row justify-center text-center">
          <div class="col-xl-6 col-lg-8 col-md-10">
        
          </div>
        </div>
      </div>
    </section>
    
    <div class="border-top-light"></div>

    <section class="py-40 bg-light-3">
        <div data-anim="slide-up delay-1" class="container">
    
            <div class="col-md-12 text-center">
                <h1 class="text-40 md:text-25 fw-600 ">Thank You For Booking</h1>
                <div class="mt-15">Our Representative Will Contact You Soon</div>
            </div>
    
        </div>
    </section>


<section class="py-40 bg-light-3">
    <div data-anim="slide-up delay-1" class="container">

        <div class="col-md-12 text-center">
            <h2 class="sectionTitle__title">Recommended Packages </h2>
        </div>

        <div class="relative overflow-hidden pt-40 sm:pt-20 js-section-slider" data-gap="30" data-scrollbar data-slider-cols="xl-4 lg-3 md-2 sm-2 base-1" data-nav-prev="js-hotels-prev" data-pagination="js-hotels-pag" data-nav-next="js-hotels-next">
            <div class="swiper-wrapper">

                @foreach($packages as $package)


                <div class="swiper-slide shadow-sm rounded-8 bg-white p-3">

                    <a href="{{ route('packages.show',$package->slug) }}" class="hotelsCard -type-1 ">
                      
                        <div class="hotelsCard__image">

                            <div class="cardImage ratio ratio-1:1">
                                <div class="cardImage__content">


                                    <div class="cardImage-slider h-full rounded-4 overflow-hidden js-cardImage-slider">
                                        <div class="swiper-wrapper">

                                            <div class="swiper-slide">
                                                <img class="col-12 h-full js-lazy" src="#" data-src="{{ asset('storage/uploads/package_images/featured_image/' . $package->featured_image )  }}" alt="image">
                                            </div>

                                            @foreach($package->images as $image)
                                            <div class="swiper-slide">
                                                <img class="col-12 h-full js-lazy" src="{{ asset('storage/uploads/package_images/' . $image->name )  }}" data-src="{{ asset('storage/uploads/package_images/' . $image->name )  }}" alt="image">
                                            </div>
                                            @endforeach


                                        </div>

                                        <div class="cardImage-slider__pagination js-pagination"></div>

                                        <div class="cardImage-slider__nav -prev">
                                            <button class="button -blue-1 bg-white size-30 rounded-full shadow-2 js-prev">
                                                <i class="icon-chevron-left text-10"></i>
                                            </button>
                                        </div>

                                        <div class="cardImage-slider__nav -next">
                                            <button class="button -blue-1 bg-white size-30 rounded-full shadow-2 js-next">
                                                <i class="icon-chevron-right text-10"></i>
                                            </button>
                                        </div>
                                    </div>

                                </div>

                                <div class="cardImage__leftBadge">
                                    <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-blue-1 text-white">
                                        {{ str_replace('_',' ' , strtoupper($package->product_type)) }}
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="hotelsCard__content mt-10">
                            <h4 class="hotelsCard__title text-dark-1 text-18 lh-16 fw-500">
                                <span>{{$package->package_name}}</span>
                            </h4>

                            <p> <span class="tag_selector"> {{ str_replace('_',' ' , ucfirst($package->package_type)) }}</span></p>

                            <p class="text-light-1 lh-14 text-14 mt-5">
                                @foreach($package->city as $city)
                                <span class="tag_selector">{{$city}} | </span>
                                @endforeach
                            </p>
                            <div class="d-inline-block">
                                {!! $package->stars == 1 ? '<i class="icon-star  text-yellow-3"></i>' : '' !!}
                                {!! $package->stars == 2 ? '<i class="icon-star  text-yellow-3"></i><i class="icon-star  text-yellow-3"></i>' : '' !!}
                                {!! $package->stars == 3 ? '<i class="icon-star  text-yellow-3"></i><i class="icon-star  text-yellow-3"></i><i class="icon-star  text-yellow-3"></i>' : '' !!}
                                {!! $package->stars == 4 ? '<i class="icon-star  text-yellow-3"></i><i class="icon-star  text-yellow-3"></i><i class="icon-star  text-yellow-3"></i><i class="icon-star  text-yellow-3"></i>' : '' !!}
                                {!! $package->stars == 5 ? '<i class="icon-star  text-yellow-3"></i><i class="icon-star  text-yellow-3"></i><i class="icon-star  text-yellow-3"></i><i class="icon-star  text-yellow-3"></i><i class="icon-star  text-yellow-3"></i>' : '' !!}
                            </div>

                            <div class="d-flex items-center mt-20">

                                <div class="flex-center bg-blue-1 rounded-4 size-30 text-12 fw-600 text-white">{{$package->reviews}} </div>
                                <div class="text-14 text-dark-1 fw-500 ml-10">Reviews</div>
                            </div>

                            <div class="mt-5">
                                <div class="fw-500">
                                    Starting from <span class="text-blue-1">US $ {{$package->net_amount}}</span>
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

<!-- Top attractions start  -->
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
                    <a href="{{ route('packages.top_category','families-and-kids-attractions')}}">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <div class="__imgbx">
                                    <img src="{{ asset('frontend/img/top-category/1.png')}}" class="rounded-8 d-block" alt="">
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
                    <a href="{{ route('packages.top_category','sightseeing-and-tours')}}">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <div class="__imgbx">
                                    <img src="{{ asset('frontend/img/top-category/2.png')}}" class="rounded-8 d-block" alt="">
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
                    <a href="{{ route('packages.top_category','cruises')}}">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <div class="__imgbx">
                                    <img src="{{ asset('frontend/img/top-category/3.png')}}" class="rounded-8 d-block" alt="">
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
                    <a href="{{ route('packages.top_category','events-and-festivals')}}">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <div class="__imgbx">
                                    <img src="{{ asset('frontend/img/top-category/4.png')}}" class="rounded-8 d-block" alt="">
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
                    <a href="{{ route('packages.top_category','food-lovers')}}">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <div class="__imgbx">
                                    <img src="{{ asset('frontend/img/top-category/5.png')}}" class="rounded-8 d-block" alt="">
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
                    <a href="{{ route('packages.top_category','ticket-and-passes')}}">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <div class="__imgbx">
                                    <img src="{{ asset('frontend/img/top-category/6.png')}}" class="rounded-8 d-block" alt="">
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
<!-- Top attractions end  -->

    <section class="layout-pt-lg layout-pb-md">
      <div data-anim-wrap class="container">
        <div data-anim-child="slide-up delay-1" class="row justify-center text-center">
          <div class="col-auto">
            <div class="sectionTitle -md">
              <h2 class="sectionTitle__title">Why Choose Us</h2>
              <p class=" sectionTitle__text mt-5 sm:mt-0">These popular destinations have a lot to offer</p>
            </div>
          </div>
        </div>

        <div class="row y-gap-40 justify-between pt-50">

          <div data-anim-child="slide-up delay-2" class="col-lg-3 col-sm-6">

            <div class="featureIcon -type-1 ">
              <div class="d-flex justify-center">
                <img src="#" data-src="frontend/img/featureIcons/1/1.svg" alt="image" class="js-lazy">
              </div>

              <div class="text-center mt-30">
                <h4 class="text-18 fw-500">Best Price Guarantee</h4>
                <p class="text-15 mt-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </div>
            </div>

          </div>

          <div data-anim-child="slide-up delay-3" class="col-lg-3 col-sm-6">

            <div class="featureIcon -type-1 ">
              <div class="d-flex justify-center">
                <img src="#" data-src="frontend/img/featureIcons/1/2.svg" alt="image" class="js-lazy">
              </div>

              <div class="text-center mt-30">
                <h4 class="text-18 fw-500">Easy & Quick Booking</h4>
                <p class="text-15 mt-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </div>
            </div>

          </div>

          <div data-anim-child="slide-up delay-4" class="col-lg-3 col-sm-6">

            <div class="featureIcon -type-1 ">
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

  

    <section class="pt-60">
      <div class="container">
        <div class="border-bottom-light pb-40">
          <div class="row y-gap-30 justify-center text-center">

            <div class="col-xl-3 col-6">
              <div class="text-40 lg:text-30 lh-13 fw-600">4,958</div>
              <div class="text-14 lh-14 text-light-1 mt-5">Destinations</div>
            </div>

            <div class="col-xl-3 col-6">
              <div class="text-40 lg:text-30 lh-13 fw-600">2,869</div>
              <div class="text-14 lh-14 text-light-1 mt-5">Total Properties</div>
            </div>

            <div class="col-xl-3 col-6">
              <div class="text-40 lg:text-30 lh-13 fw-600">2M</div>
              <div class="text-14 lh-14 text-light-1 mt-5">Happy customers</div>
            </div>

            <div class="col-xl-3 col-6">
              <div class="text-40 lg:text-30 lh-13 fw-600">574,974</div>
              <div class="text-14 lh-14 text-light-1 mt-5">Our Volunteers</div>
            </div>

          </div>
        </div>
      </div>
    </section>

 
  
   
  </main>


@endsection