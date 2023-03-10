@extends('frontend.layouts.app')

@section('content')

<section class="pt-40 js-pin-container">
    <div class="container">
        <div class="row y-gap-30">
            <div class="col-lg-8">

                <div class="relative d-flex justify-center overflow-hidden js-section-slider" data-slider-cols="base-1" data-nav-prev="js-img-prev" data-nav-next="js-img-next">
                    <div class="swiper-wrapper">
                        @foreach($package->images as $image)

                        <div class="swiper-slide">
                            <img src="{{  asset('storage/uploads/package_images/' . $image->name )  }}" alt="image" class="rounded-4 col-12 h-full object-cover">
                        </div>

                        @endforeach
 

                    </div>

                    <div class="absolute h-full col-11">

                        <button class="section-slider-nav -prev flex-center button -blue-1 bg-white shadow-1 size-40 rounded-full sm:d-none js-img-prev">
                            <i class="icon icon-chevron-left text-12"></i>
                        </button>

                        <button class="section-slider-nav -next flex-center button -blue-1 bg-white shadow-1 size-40 rounded-full sm:d-none js-img-next">
                            <i class="icon icon-chevron-right text-12"></i>
                        </button>

                    </div>
                </div>

                <div class="border-top-light mt-40 mb-40"></div>

                <div class="row x-gap-40 y-gap-40">
                    <div class="col-12">
                        <h3 class="text-24 fw-500">Overview</h3>
                        <p class="text-dark-1 text-15 mt-20">
                            {!! $package->description !!}
                        </p>

                    </div>

                </div>

                <!-- <h3 class="text-24 fw-500 pt-40 pb-20">Ready-to-book adventures, personalized</h3>

                <div class="row pb-40">
                    <div class="col-md-6 mb-3">
                        <div class="row">
                            <div class="col-auto">
                                <i class="fa-solid fa-file text-dark-1 text-30"></i>
                            </div>
                            <div class="col">
                                <h4 class="text-20 fw-500 text-black">Personal</h4>
                                <p class="text-14">Make your adventure more you</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="row">
                            <div class="col-auto">
                                <i class="fa-solid fa-user text-dark-1 text-30"></i>
                            </div>
                            <div class="col">
                                <h4 class="text-20 fw-500 text-black">Private</h4>
                                <p class="text-14">Enjoy a tour focused solely on your travel group</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="row">
                            <div class="col-auto">
                                <i class="fa-solid fa-lightbulb text-dark-1 text-30"></i>
                            </div>
                            <div class="col">
                                <h4 class="text-20 fw-500 text-black">Professional</h4>
                                <p class="text-14">Access our Travel Experts’ insider knowledge</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="row">
                            <div class="col-auto">
                                <i class="fa-solid fa-notes-medical text-dark-1 text-30"></i>
                            </div>
                            <div class="col">
                                <h4 class="text-20 fw-500 text-black">Protected</h4>
                                <p class="text-14">Travel within your own bubble</p>
                            </div>
                        </div>
                    </div>
                </div> -->

                @if($itenaries != null)

                <h3 class="text-22 fw-500 mt-30">
                    Itenaries
                </h3>

                <div class="accordino--cutom mt-20">

                    <div class="accordion -simple row y-gap-20 js-accordion">

                        @foreach($itenaries as $itenary )
                        <div class="col-12">
                            <div class="accordion__item px-5 py-5 border-bottom-light rounded-4">
                                <div class="accordion__button d-flex items-center">
                                    <div class="accordion__icon size-40 flex-center bg-light-2 rounded-full mr-20">
                                        <i class="icon-check text-orange-1"></i>
                                        <i class="icon-minus"></i>
                                    </div>

                                    <div class="button text-dark-1 fw-600 width_max_content">{{$itenary['day']}}</div>
                                    <!-- <div class="text-end ms-auto text-dark-1 text-22">&#8964;</div> -->
                                </div>

                                <div class="accordion__content">
                                    <div class="pt-20 pl-60">
                                        <p class="text-15">{{$itenary['detail']}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach()

                    </div>


                </div>
                @endif()


                <!-- whats included start  -->
                <h3 class="text-22 fw-500 mt-30">
                    What's Included
                </h3>

                <div class="accordino--custom py-30">

                    <div class="accordion -simple row y-gap-20 js-accordion">

                        @if($package->is_accommodation_included == 1)

                        <div class="col-12">
                            <div class="accordion__item px-10 py-10 border-bottom-light">
                                <div class="accordion__button d-flex justify-between items-center">
                                    <div class="d-flex">
                                        <div class="accordion__icon size-40 flex-center bg-dark-1 rounded-full mr-20">
                                            <i class="icon-check text-white"></i>
                                            <i class="icon-minus"></i>
                                        </div>

                                        <div class="button text-dark-1 fw-600 width_max_content">Accommodation</div>
                                    </div>
                                    <div class="button text-dark-1 text-right w-100 fw-600">
                                        <!-- <i class="fas fa-chevron-down"></i> -->
                                </div>
                                </div>

                                <div class="accordion__content">
                                    <div class="pt-20 pl-60">
                                        {!! $package->accommodation !!}
                                    </div>
                                </div>
                            </div>
                        </div>


                        @endif

                        @if($package->is_guide_included == 1)


                        <div class="col-12">
                            <div class="accordion__item px-10 py-10 border-bottom-light">
                                <div class="accordion__button d-flex justify-between items-center">
                                    <div class="d-flex">
                                        <div class="accordion__icon size-40 flex-center bg-dark-1 rounded-full mr-20">
                                            <i class="icon-check text-white"></i>
                                            <i class="icon-minus"></i>
                                        </div>

                                        <div class="button text-dark-1 fw-600 width_max_content">Guide</div>
                                    </div>
                                    <div class="button text-dark-1 text-right w-100 fw-600"><!-- <i class="fas fa-chevron-down"></i> --></div>
                                </div>

                                <div class="accordion__content">
                                    <div class="pt-20 pl-60">
                                        {!! $package->guide !!}
                                    </div>
                                </div>
                            </div>
                        </div>

                        @endif

                        @if($package->is_additional_services_included == 1)

                        <div class="col-12">
                            <div class="accordion__item px-10 py-10 border-bottom-light">
                                <div class="accordion__button d-flex justify-between items-center">
                                    <div class="d-flex">
                                        <div class="accordion__icon size-40 flex-center bg-dark-1 rounded-full mr-20">
                                            <i class="icon-check text-white"></i>
                                            <i class="icon-minus"></i>
                                        </div>

                                        <div class="button text-dark-1 fw-600 width_max_content">Additional Services</div>
                                    </div>
                                    <div class="button text-dark-1 text-right w-100 fw-600"><!-- <i class="fas fa-chevron-down"></i> --></div>
                                </div>

                                <div class="accordion__content">
                                    <div class="pt-20 pl-60">
                                        {!! $package->additional_services !!}
                                    </div>
                                </div>
                            </div>
                        </div>

                        @endif

                        @if($package->is_insurance_included == 1)

                        <div class="col-12">
                            <div class="accordion__item px-10 py-10 border-bottom-light">
                                <div class="accordion__button d-flex justify-between items-center">
                                    <div class="d-flex">
                                        <div class="accordion__icon size-40 flex-center bg-dark-1 rounded-full mr-20">
                                            <i class="icon-check text-white"></i>
                                            <i class="icon-minus"></i>
                                        </div>

                                        <div class="button text-dark-1 fw-600 width_max_content">Insurance</div>
                                    </div>
                                    <div class="button text-dark-1 text-right w-100 fw-600"><!-- <i class="fas fa-chevron-down"></i> --></div>
                                </div>

                                <div class="accordion__content">
                                    <div class="pt-20 pl-60">
                                        {!! $package->insurance !!}
                                    </div>
                                </div>
                            </div>
                        </div>


                        @endif


                        @if($package->is_visa_included == 1)

                        <div class="col-12">
                            <div class="accordion__item px-10 py-10 border-bottom-light">
                                <div class="accordion__button d-flex justify-between items-center">
                                    <div class="d-flex">
                                        <div class="accordion__icon size-40 flex-center bg-dark-1 rounded-full mr-20">
                                            <i class="icon-check text-white"></i>
                                            <i class="icon-minus"></i>
                                        </div>

                                        <div class="button text-dark-1 fw-600 width_max_content">Visa</div>
                                    </div>
                                    <div class="button text-dark-1 text-right w-100 fw-600"><!-- <i class="fas fa-chevron-down"></i> --></div>
                                </div>

                                <div class="accordion__content">
                                    <div class="pt-20 pl-60">
                                        {!! $package->visa !!}
                                    </div>
                                </div>
                            </div>
                        </div>


                        @endif


                        @if($package->is_flights_included == 1)

                        <div class="col-12">
                            <div class="accordion__item px-10 py-10 border-bottom-light">
                                <div class="accordion__button d-flex justify-between items-center">
                                    <div class="d-flex">
                                        <div class="accordion__icon size-40 flex-center bg-dark-1 rounded-full mr-20">
                                            <i class="icon-check text-white"></i>
                                            <i class="icon-minus"></i>
                                        </div>

                                        <div class="button text-dark-1 fw-600 width_max_content">Flights</div>
                                    </div>
                                    <div class="button text-dark-1 text-right w-100 fw-600"><!-- <i class="fas fa-chevron-down"></i> --></div>
                                </div>

                                <div class="accordion__content">
                                    <div class="pt-20 pl-60">
                                        {!! $package->flights !!}
                                    </div>
                                </div>
                            </div>
                        </div>

                        @endif


                        @if($package->is_meals_included == 1)

                        <div class="col-12">
                            <div class="accordion__item px-10 py-10 border-bottom-light">
                                <div class="accordion__button d-flex justify-between items-center">
                                    <div class="d-flex">
                                        <div class="accordion__icon size-40 flex-center bg-dark-1 rounded-full mr-20">
                                            <i class="icon-check text-white"></i>
                                            <i class="icon-minus"></i>
                                        </div>

                                        <div class="button text-dark-1 fw-600 width_max_content">Meals</div>
                                    </div>
                                    <div class="button text-dark-1 text-right w-100 fw-600"><!-- <i class="fas fa-chevron-down"></i> --></div>
                                </div>

                                <div class="accordion__content">
                                    <div class="pt-20 pl-60">
                                        {!! $package->meals !!}
                                    </div>
                                </div>
                            </div>
                        </div>

                        @endif

                        @if($package->is_optional_included == 1)

                        <div class="col-12">
                            <div class="accordion__item px-10 py-10 border-bottom-light">
                                <div class="accordion__button d-flex justify-between items-center">
                                    <div class="d-flex">
                                        <div class="accordion__icon size-40 flex-center bg-dark-1 rounded-full mr-20">
                                            <i class="icon-check text-white"></i>
                                            <i class="icon-minus"></i>
                                        </div>

                                        <div class="button text-dark-1 fw-600 width_max_content">Optional</div>
                                    </div>
                                    <div class="button text-dark-1 text-right w-100 fw-600"><!-- <i class="fas fa-chevron-down"></i> --></div>
                                </div>

                                <div class="accordion__content">
                                    <div class="pt-20 pl-60">
                                        {!! $package->Optional !!}
                                    </div>
                                </div>
                            </div>
                        </div>

                        @endif


                    </div>

                    @if($package->is_hotel_included == 1 && count($package->hotels) > 0)



                    <div class="accordino--custom py-30">

                        <div class="accordion -simple row y-gap-20 js-accordion">

                            <div class="col-12">
                                <div class="accordion__item px-10 py-10 border-bottom-light">
                                    <div class="accordion__button d-flex justify-between items-center">
                                        <div class="d-flex">
                                            <div class="accordion__icon size-40 flex-center bg-dark-1 rounded-full mr-20">
                                                <i class="icon-check text-white"></i>
                                                <i class="icon-minus"></i>
                                            </div>

                                            <div class="button text-dark-1 fw-600 width_max_content">Hotels</div>
                                        </div>
                                        <div class="button text-dark-1 text-right w-100 fw-600"><!-- <i class="fas fa-chevron-down"></i> --></div>
                                    </div>

                                    <div class="accordion__content">
                                        <div class="pt-20 pl-60">

                                            <!-- hotels content start  -->

                                            @foreach($package->hotels as $hotel)

                                            <div class="col-12">
                                                <div class="accordion__item px-10 py-10 border-bottom-light">
                                                    <div class="accordion__button d-flex justify-between items-center">
                                                        <div class="d-flex">
                                                            <div class="accordion__icon size-40 flex-center bg-dark-1 rounded-full mr-20">
                                                                <i class="fa-solid fa-bed text-white"></i>
                                                                <i class="fa-solid fa-bed text-white"></i>
                                                            </div>

                                                            <div class="button text-dark-1 fw-600 width_max_content">
                                                                <strong><a target="_blank" href="{{ route('hotels.show',$hotel->slug)}}">{{$hotel->name}}</a> {!! $hotel->stars == 1 ? '<i class="icon-star text-10 text-yellow-2"></i>' : '' !!}

                                                                    {!! $hotel->stars == 2 ? '<i class="icon-star text-10 text-yellow-2"></i><i class="icon-star text-10 text-yellow-2"></i>' : '' !!}

                                                                    {!! $hotel->stars == 3 ? '<i class="icon-star text-10 text-yellow-2"></i><i class="icon-star text-10 text-yellow-2"></i><i class="icon-star text-10 text-yellow-2"></i>' : '' !!}

                                                                    {!! $hotel->stars == 4 ? '<i class="icon-star text-10 text-yellow-2"></i><i class="icon-star text-10 text-yellow-2"></i><i class="icon-star text-10 text-yellow-2"></i><i class="icon-star text-10 text-yellow-2"></i>' : '' !!}

                                                                    {!! $hotel->stars == 5 ? '<i class="icon-star text-10 text-yellow-2"></i><i class="icon-star text-10 text-yellow-2"></i><i class="icon-star text-10 text-yellow-2"></i><i class="icon-star text-10 text-yellow-2"></i><i class="icon-star text-10 text-yellow-2"></i>' : '' !!}

                                                                </strong>

                                                            </div>
                                                        </div>
                                                        <div class="button text-dark-1 text-right w-100 fw-600"><!-- <i class="fas fa-chevron-down"></i> --></div>
                                                    </div>

                                                    <div class="accordion__content">
                                                        <div class="pt-20 pl-60">
                                                            <div class="row py-3">
                                                                <div class="col-4">
                                                                    <div>

                                                                        <h5>About</h5>
                                                                        {!! $hotel->description !!}
                                                                    </div>

                                                                    <div>

                                                                        <h5>Main Amenities</h5>
                                                                        {!! $hotel->main_amenities !!}
                                                                    </div>

                                                                </div>
                                                                <div class="col-8">

                                                                    <!-- restaurant  -->
                                                                    <section class="transport">
                                                                        <div class="transport__slider owl-carousel">


                                                                            @foreach($hotel->images()->get() as $image)

                                                                            <a href="{{ asset('storage/uploads/hotel_images/' . $image->name ) }}" class="transport__items set-bg js-gallery" data-gallery="gallery2">
                                                                                <img src="{{ asset('storage/uploads/hotel_images/' . $image->name ) }}" class="rounded-8" alt="">
                                                                            </a>

                                                                            @endforeach

                                                                        </div>
                                                                    </section>

                                                                    <!-- restaurant /  -->

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            @endforeach

                                            <!-- hotels content end  -->

                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>


                    </div>

                    <!-- hotels section end  -->

                    @endif()


                    @if($package->is_transport_included == 1 && count($package->transports) > 0)

                    <!-- transport section start  -->


                    <div class="accordino--custom py-30">

                        <div class="accordion -simple row y-gap-20 js-accordion">

                            <div class="col-12">
                                <div class="accordion__item px-10 py-10 border-bottom-light">
                                    <div class="accordion__button d-flex justify-between items-center">
                                        <div class="d-flex">
                                            <div class="accordion__icon size-40 flex-center bg-dark-1 rounded-full mr-20">
                                                <i class="icon-check text-white"></i>
                                                <i class="icon-minus"></i>
                                            </div>

                                            <div class="button text-dark-1 fw-600 width_max_content">Transports</div>
                                        </div>
                                        <div class="button text-dark-1 text-right w-100 fw-600"><!-- <i class="fas fa-chevron-down"></i> --></div>
                                    </div>

                                    <div class="accordion__content">
                                        <div class="pt-20 pl-60">

                                            <!-- hotels content start  -->

                                            @foreach($package->transports as $transport)

                                            <div class="col-12">
                                                <div class="accordion__item px-10 py-10 border-bottom-light">
                                                    <div class="accordion__button d-flex justify-between items-center">
                                                        <div class="d-flex">
                                                            <div class="accordion__icon size-40 flex-center bg-dark-1 rounded-full mr-20">
                                                                <i class="fa-solid fa-car text-white"></i>
                                                                <i class="fa-solid fa-car text-white"></i>
                                                            </div>

                                                            <div class="button text-dark-1 fw-600 width_max_content">
                                                                <strong>{{$transport->company}} </strong>

                                                            </div>
                                                        </div>
                                                        <div class="button text-dark-1 text-right w-100 fw-600"><!-- <i class="fas fa-chevron-down"></i> --></div>
                                                    </div>

                                                    <div class="accordion__content">
                                                        <div class="pt-20 pl-60">
                                                            <div class="row py-3">

                                                                <div class="col-12">

                                                                    <!--   -->
                                                                    <section class="transport">
                                                                        <div class="transport__slider owl-carousel">


                                                                            @foreach($transport->images()->get() as $image)

                                                                            <a href="{{ asset('storage/uploads/transport_images/' . $image->name ) }}" class="transport__items set-bg js-gallery" data-gallery="gallery2">
                                                                                <img src="{{ asset('storage/uploads/transport_images/' . $image->name ) }}" class="rounded-8" alt="">
                                                                            </a>

                                                                            @endforeach

                                                                        </div>
                                                                    </section>

                                                                    <!--  /  -->

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            @endforeach

                                            <!-- hotels content end  -->

                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>


                    </div>

                    <!-- transport section end  -->

                    @endif()




                </div>
                <!-- whats included end  -->


                <!-- whats not included start  -->
                <h3 class="text-22 fw-500 mt-30">
                    What's not Included
                </h3>

                <div class="accordino--custom py-30">

                    <div class="accordion -simple row y-gap-20 js-accordion">

                        @if($package->is_accommodation_included == 0 )

                        <div class="col-12">
                            <div class="accordion__item px-10 py-10 border-bottom-light">
                                <div class="accordion__button d-flex justify-between items-center">
                                    <div class="d-flex">
                                        <div class="accordion__icon size-40 flex-center bg-blue-1 rounded-full mr-20">
                                            <i class="icon-close  text-white"></i>
                                            <i class="icon-minus"></i>
                                        </div>

                                        <div class="button text-dark-1 fw-600 width_max_content">Accommodation</div>
                                    </div>
                                    <div class="button text-dark-1 text-right w-100 fw-600"><!-- <i class="fas fa-chevron-down"></i> --></div>
                                </div>

                                <div class="accordion__content">
                                    <div class="pt-20 pl-60">
                                        {!! $package->accommodation !!}
                                    </div>
                                </div>
                            </div>
                        </div>


                        @endif

                        @if($package->is_guide_included == 0)


                        <div class="col-12">
                            <div class="accordion__item px-10 py-10 border-bottom-light">
                                <div class="accordion__button d-flex justify-between items-center">
                                    <div class="d-flex">
                                        <div class="accordion__icon size-40 flex-center bg-blue-1 rounded-full mr-20">
                                            <i class="icon-close text-white"></i>
                                            <i class="icon-minus"></i>
                                        </div>

                                        <div class="button text-dark-1 fw-600 width_max_content">Guide</div>
                                    </div>
                                    <div class="button text-dark-1 text-right w-100 fw-600"><!-- <i class="fas fa-chevron-down"></i> --></div>
                                </div>

                                <div class="accordion__content">
                                    <div class="pt-20 pl-60">
                                        {!! $package->guide !!}
                                    </div>
                                </div>
                            </div>
                        </div>

                        @endif

                        @if($package->is_additional_services_included == 0 )

                        <div class="col-12">
                            <div class="accordion__item px-10 py-10 border-bottom-light">
                                <div class="accordion__button d-flex justify-between items-center">
                                    <div class="d-flex">
                                        <div class="accordion__icon size-40 flex-center bg-blue-1 rounded-full mr-20">
                                            <i class="icon-close text-white"></i>
                                            <i class="icon-minus"></i>
                                        </div>

                                        <div class="button text-dark-1 fw-600 width_max_content">Additional Services</div>
                                    </div>
                                    <div class="button text-dark-1 text-right w-100 fw-600"><!-- <i class="fas fa-chevron-down"></i> --></div>
                                </div>

                                <div class="accordion__content">
                                    <div class="pt-20 pl-60">
                                        {!! $package->additional_services !!}
                                    </div>
                                </div>
                            </div>
                        </div>

                        @endif

                        @if($package->is_insurance_included == 0 )

                        <div class="col-12">
                            <div class="accordion__item px-10 py-10 border-bottom-light">
                                <div class="accordion__button d-flex justify-between items-center">
                                    <div class="d-flex">
                                        <div class="accordion__icon size-40 flex-center bg-blue-1 rounded-full mr-20">
                                            <i class="icon-close text-white"></i>
                                            <i class="icon-minus"></i>
                                        </div>

                                        <div class="button text-dark-1 fw-600 width_max_content">Insurance</div>
                                    </div>
                                    <div class="button text-dark-1 text-right w-100 fw-600"><!-- <i class="fas fa-chevron-down"></i> --></div>
                                </div>

                                <div class="accordion__content">
                                    <div class="pt-20 pl-60">
                                        {!! $package->insurance !!}
                                    </div>
                                </div>
                            </div>
                        </div>


                        @endif


                        @if($package->is_visa_included == 0 )

                        <div class="col-12">
                            <div class="accordion__item px-10 py-10 border-bottom-light">
                                <div class="accordion__button d-flex justify-between items-center">
                                    <div class="d-flex">
                                        <div class="accordion__icon size-40 flex-center bg-blue-1 rounded-full mr-20">
                                            <i class="icon-close text-white"></i>
                                            <i class="icon-minus"></i>
                                        </div>

                                        <div class="button text-dark-1 fw-600 width_max_content">Visa</div>
                                    </div>
                                    <div class="button text-dark-1 text-right w-100 fw-600"><!-- <i class="fas fa-chevron-down"></i> --></div>
                                </div>

                                <div class="accordion__content">
                                    <div class="pt-20 pl-60">
                                        {!! $package->visa !!}
                                    </div>
                                </div>
                            </div>
                        </div>


                        @endif

                        @if($package->is_flights_included == 0 )

                        <div class="col-12">
                            <div class="accordion__item px-10 py-10 border-bottom-light">
                                <div class="accordion__button d-flex justify-between items-center">
                                    <div class="d-flex">
                                        <div class="accordion__icon size-40 flex-center bg-blue-1 rounded-full mr-20">
                                            <i class="icon-close  text-white"></i>
                                            <i class="icon-minus"></i>
                                        </div>

                                        <div class="button text-dark-1 fw-600 width_max_content">Flights</div>
                                    </div>
                                    <div class="button text-dark-1 text-right w-100 fw-600"><!-- <i class="fas fa-chevron-down"></i> --></div>
                                </div>

                                <div class="accordion__content">
                                    <div class="pt-20 pl-60">
                                        {!! $package->flights !!}
                                    </div>
                                </div>
                            </div>
                        </div>

                        @endif


                        @if($package->is_meals_included == 0 )

                        <div class="col-12">
                            <div class="accordion__item px-10 py-10 border-bottom-light">
                                <div class="accordion__button d-flex justify-between items-center">
                                    <div class="d-flex">
                                        <div class="accordion__icon size-40 flex-center bg-blue-1 rounded-full mr-20">
                                            <i class="icon-close  text-white"></i>
                                            <i class="icon-minus"></i>
                                        </div>

                                        <div class="button text-dark-1 fw-600 width_max_content">Meals</div>
                                    </div>
                                    <div class="button text-dark-1 text-right w-100 fw-600"><!-- <i class="fas fa-chevron-down"></i> --></div>
                                </div>

                                <div class="accordion__content">
                                    <div class="pt-20 pl-60">
                                        {!! $package->meals !!}
                                    </div>
                                </div>
                            </div>
                        </div>

                        @endif

                        @if($package->is_optional_included == 0 )

                        <div class="col-12">
                            <div class="accordion__item px-10 py-10 border-bottom-light">
                                <div class="accordion__button d-flex justify-between items-center">
                                    <div class="d-flex">
                                        <div class="accordion__icon size-40 flex-center bg-blue-1 rounded-full mr-20">
                                            <i class="icon-close  text-white"></i>
                                            <i class="icon-minus"></i>
                                        </div>

                                        <div class="button text-dark-1 fw-600 width_max_content">Optional</div>
                                    </div>
                                    <div class="button text-dark-1 text-right w-100 fw-600"><!-- <i class="fas fa-chevron-down"></i> --></div>
                                </div>

                                <div class="accordion__content">
                                    <div class="pt-20 pl-60">
                                        {!! $package->Optional !!}
                                    </div>
                                </div>
                            </div>
                        </div>

                        @endif



                    </div>

                    @if($package->is_hotel_included == 0 && count($package->hotels) > 0)

                    <!-- hotels section start  -->


                    <div class="accordino--custom py-30">

                        <div class="accordion -simple row y-gap-20 js-accordion">

                            <div class="col-12">
                                <div class="accordion__item px-10 py-10 border-bottom-light">
                                    <div class="accordion__button d-flex justify-between items-center">
                                        <div class="d-flex">
                                            <div class="accordion__icon size-40 flex-center bg-close-1 rounded-full mr-20">
                                                <i class="icon-close text-white"></i>
                                                <i class="icon-minus"></i>
                                            </div>

                                            <div class="button text-dark-1 fw-600 width_max_content">Hotels</div>
                                        </div>
                                        <div class="button text-dark-1 text-right w-100 fw-600"><!-- <i class="fas fa-chevron-down"></i> --></div>
                                    </div>

                                    <div class="accordion__content">
                                        <div class="pt-20 pl-60">

                                            <!-- hotels content start  -->

                                            @foreach($package->hotels as $hotel)

                                            <div class="col-12">
                                                <div class="accordion__item px-10 py-10 border-bottom-light">
                                                    <div class="accordion__button d-flex justify-between items-center">
                                                        <div class="d-flex">
                                                            <div class="accordion__icon size-40 flex-center bg-dark-1 rounded-full mr-20">
                                                                <i class="fa-solid fa-bed text-white"></i>
                                                                <i class="fa-solid fa-bed text-white"></i>
                                                            </div>

                                                            <div class="button text-dark-1 fw-600 width_max_content">
                                                                <strong><a target="_blank" href="{{ route('hotels.show',$hotel->slug)}}">{{$hotel->name}}</a> {!! $hotel->stars == 1 ? '<i class="icon-star text-10 text-yellow-2"></i>' : '' !!}

                                                                    {!! $hotel->stars == 2 ? '<i class="icon-star text-10 text-yellow-2"></i><i class="icon-star text-10 text-yellow-2"></i>' : '' !!}

                                                                    {!! $hotel->stars == 3 ? '<i class="icon-star text-10 text-yellow-2"></i><i class="icon-star text-10 text-yellow-2"></i><i class="icon-star text-10 text-yellow-2"></i>' : '' !!}

                                                                    {!! $hotel->stars == 4 ? '<i class="icon-star text-10 text-yellow-2"></i><i class="icon-star text-10 text-yellow-2"></i><i class="icon-star text-10 text-yellow-2"></i><i class="icon-star text-10 text-yellow-2"></i>' : '' !!}

                                                                    {!! $hotel->stars == 5 ? '<i class="icon-star text-10 text-yellow-2"></i><i class="icon-star text-10 text-yellow-2"></i><i class="icon-star text-10 text-yellow-2"></i><i class="icon-star text-10 text-yellow-2"></i><i class="icon-star text-10 text-yellow-2"></i>' : '' !!}

                                                                </strong>

                                                            </div>
                                                        </div>
                                                        <div class="button text-dark-1 text-right w-100 fw-600"><!-- <i class="fas fa-chevron-down"></i> --></div>
                                                    </div>

                                                    <div class="accordion__content">
                                                        <div class="pt-20 pl-60">
                                                            <div class="row py-3">
                                                                <div class="col-4">
                                                                    <div>

                                                                        <h5>About</h5>
                                                                        {!! $hotel->description !!}
                                                                    </div>

                                                                    <div>

                                                                        <h5>Main Amenities</h5>
                                                                        {!! $hotel->main_amenities !!}
                                                                    </div>

                                                                </div>
                                                                <div class="col-8">

                                                                    <!-- restaurant  -->
                                                                    <section class="transport">
                                                                        <div class="transport__slider owl-carousel">


                                                                            @foreach($hotel->images()->get() as $image)

                                                                            <a href="{{ asset('storage/uploads/hotel_images/' . $image->name ) }}" class="transport__items set-bg js-gallery" data-gallery="gallery2">
                                                                                <img src="{{ asset('storage/uploads/hotel_images/' . $image->name ) }}" class="rounded-8" alt="">
                                                                            </a>

                                                                            @endforeach

                                                                        </div>
                                                                    </section>

                                                                    <!-- restaurant /  -->

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            @endforeach

                                            <!-- hotels content end  -->

                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>


                    </div>

                    <!-- hotels section end  -->

                    @endif()

                    @if($package->is_transport_included == 0 && count($package->transports) > 0)

                    <!-- transport section start  -->


                    <div class="accordino--custom py-30">

                        <div class="accordion -simple row y-gap-20 js-accordion">

                            <div class="col-12">
                                <div class="accordion__item px-10 py-10 border-bottom-light">
                                    <div class="accordion__button d-flex justify-between items-center">
                                        <div class="d-flex">
                                            <div class="accordion__icon size-40 flex-center bg-blue-1 rounded-full mr-20">
                                                <i class="icon-close text-white"></i>
                                                <i class="icon-minus"></i>
                                            </div>

                                            <div class="button text-dark-1 fw-600 width_max_content">Transports</div>
                                        </div>
                                        <div class="button text-dark-1 text-right w-100 fw-600"><!-- <i class="fas fa-chevron-down"></i> --></div>
                                    </div>

                                    <div class="accordion__content">
                                        <div class="pt-20 pl-60">

                                            <!-- hotels content start  -->

                                            @foreach($package->transports as $transport)

                                            <div class="col-12">
                                                <div class="accordion__item px-10 py-10 border-bottom-light">
                                                    <div class="accordion__button d-flex justify-between items-center">
                                                        <div class="d-flex">
                                                            <div class="accordion__icon size-40 flex-center bg-dark-1 rounded-full mr-20">
                                                                <i class="fa-solid fa-car text-white"></i>
                                                                <i class="fa-solid fa-car text-white"></i>
                                                            </div>

                                                            <div class="button text-dark-1 fw-600 width_max_content">
                                                                <strong>{{$transport->company}} </strong>

                                                            </div>
                                                        </div>
                                                        <div class="button text-dark-1 text-right w-100 fw-600"><!-- <i class="fas fa-chevron-down"></i> --></div>
                                                    </div>

                                                    <div class="accordion__content">
                                                        <div class="pt-20 pl-60">
                                                            <div class="row py-3">

                                                                <div class="col-12">

                                                                    <!--   -->
                                                                    <section class="transport">
                                                                        <div class="transport__slider owl-carousel">


                                                                            @foreach($transport->images()->get() as $image)

                                                                            <a href="{{ asset('storage/uploads/transport_images/' . $image->name ) }}" class="transport__items set-bg js-gallery" data-gallery="gallery2">
                                                                                <img src="{{ asset('storage/uploads/transport_images/' . $image->name ) }}" class="rounded-8" alt="">
                                                                            </a>

                                                                            @endforeach

                                                                        </div>
                                                                    </section>

                                                                    <!--  /  -->

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            @endforeach

                                            <!-- hotels content end  -->

                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>


                    </div>

                    <!-- transport section end  -->

                    @endif()




                </div>


                <!-- whats not included end  -->





            </div>

            <div class="col-lg-4">

                <!-- turkey classic tour start  -->
                <div class="tour-wrapper mb-3">
                    <h2 class="text-30 fw-600 mb-3">{{ $package->package_name}} ({{ str_replace('_',' ' , strtoupper($package->product_type)) }})</h2>
                    <p class="mb-12">
                    <div class="d-inline-block ml-10">
                        {!! $package->stars == 1 ? '<i class="icon-star  text-yellow-3"></i>' : '' !!}
                        {!! $package->stars == 2 ? '<i class="icon-star  text-yellow-3"></i><i class="icon-star  text-yellow-3"></i>' : '' !!}
                        {!! $package->stars == 3 ? '<i class="icon-star  text-yellow-3"></i><i class="icon-star  text-yellow-3"></i><i class="icon-star  text-yellow-3"></i>' : '' !!}
                        {!! $package->stars == 4 ? '<i class="icon-star  text-yellow-3"></i><i class="icon-star  text-yellow-3"></i><i class="icon-star  text-yellow-3"></i><i class="icon-star  text-yellow-3"></i>' : '' !!}
                        {!! $package->stars == 5 ? '<i class="icon-star  text-yellow-3"></i><i class="icon-star  text-yellow-3"></i><i class="icon-star  text-yellow-3"></i><i class="icon-star  text-yellow-3"></i><i class="icon-star  text-yellow-3"></i>' : '' !!}
                    </div>

                    <a href="javascript:void(0);" class="text-purple-1">{{$package->reviews != null ? $package->reviews . ' reviews' : '' }} </a>
                    </p>
                    <p class="mb-2"><strong> <img style="width:35px;" src="{{ asset('/frontend/img/sun.png') }}" /> {{$package->days}} Days </strong></p>
                    <p class="mb-2"><strong> <img style="width:35px;" src="{{ asset('/frontend/img/night.png') }}" /> {{$package->nights}} Nights </strong></p>
                    <p class="mb-2">Season <strong>{{$package->seasonality}}</strong></p>
                    <p class="mb-2">City
                          @foreach($package->city as $city)
                                            <span class="text-13 tag_selector_orange">{{$city}} </span>
                                            @endforeach
                      </p>
                    <p class="mb-2">Destinations
                        @if($package->destinations != null)

                        @foreach (json_decode($package->destinations) as $destination)
                        <strong class="strong tag_selector">  {{$destination->name}}  &nbsp; </strong>
                        @endforeach

                        @endif()

                    </p>
                    @if($package->languages != null)
                    <p class="mb-2"> Languages
                       
                        @foreach ($package->languages as $language)
                        <strong class="strong tag_selector">{{$language}}  &nbsp; </strong>
                        @endforeach
                    </p>
                    @endif()

                    <p class="mb-2">Group/Private <strong class="tag_selector">{{$package->group_type}}</strong></p>

                </div>
                <!-- turkey classic tour end  -->

                <div class="d-flex justify-end js-pin-content">
                    <div class="lg:w-full d-flex flex-column items-center">
                        <div class="px-30 py-30 rounded-8 border-light bg-white shadow-sm">
                            <div class="text-14 text-black">

                                @if(Session::has('message'))
                                <p class="alert {{ Session::get('alert-class', 'alert-info') }}">
                                    {{ Session::get('message') }}
                                </p>
                                @endif
                                Package Price<span class="text-40 fw-700 text-dark-1">
                                    ${{ $package->net_amount }}</span>
                            </div>
                            {!! Form::open(['route'=>['packages.booking.store',$package->id] ]) !!}

                            <div class="row y-gap-20 pt-30">
                                <div class="col-12">

                                    <div class="form-group mb-3">
                                        <label>Name</label>
                                        <input type="text" required name="name" value="{{ old('name') }}" class="px-20 py-10  border-light rounded-4" placeholder="Enter your name" />
                                        @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <label>Email</label>
                                        <input type="email" required name="email" value="{{ old('email') }}" class="px-20 py-10  border-light rounded-4" placeholder="Enter your email" />
                                        @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <label>Cell</label>
                                        <input type="text" required name="cell" value="{{ old('cell') }}" class="px-20 py-10  border-light rounded-4" placeholder="Enter your cell number" />
                                        @error('cell')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <label>Phone</label>
                                        <input type="text" required name="phone" value="{{ old('phone') }}" class="px-20 py-10  border-light rounded-4" placeholder="Enter your phone number" />
                                        @error('phone')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <label>Departure City</label>
                                        <input type="text" required name="departure_city" value="{{ old('departure_city') }}" class="px-20 py-10  border-light rounded-4" placeholder="Enter your departure city" />
                                        @error('departure_city')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <label>Arrival Date</label>
                                        <input type="date" required name="departure_date" value="{{ old('departure_date') }}" class="px-20 py-10  border-light rounded-4" placeholder="Enter your departure date" />
                                        @error('departure_date')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <label>Contact Preference</label>
                                        <input type="text" name="contact_preference" value="{{ old('contact_preference') }}" class="px-20 py-10  border-light rounded-4" placeholder="Enter your contact preference" />
                                    </div>

                                    <div class="form-group mb-3">
                                        <label>Best time to call</label>
                                        <input type="text" name="best_time_to_call " value="{{ old('best_time_to_call') }}" class="px-20 py-10  border-light rounded-4" />
                                    </div>

                                    <div class="form-group mb-3">
                                        <label>Comments</label>
                                        <textarea name="comment" class="px-20 py-10  border-light rounded-4">{{ old('comment') }}</textarea>
                                    </div>

                                </div>

                                <!-- <div class="col-12">
                                    <h4 class="text-15 fw-500 ls-2 lh-16">Number of travelers</h4>
                                    <div
                                        class="searchMenu-guests px-20 py-10 border-light rounded-4 js-form-dd js-form-counters">

                                        <div data-x-dd-click="searchMenu-guests">


                                            <div class="text-15 text-light-1 ls-2 lh-16">

                                                <div class="form-group">
                                                    <label>Adults</label>
                                                    <input type="number" name="adults"
                                                        class="px-20 py-10  border-light rounded-4" />
                                                    @error('adults')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>

                                                <div class="form-group">
                                                    <label>Children</label>
                                                    <input type="number" name="child"
                                                        class="px-20 py-10  border-light rounded-4" />
                                                </div>

                                                <div class="form-group">
                                                    <label>Infants</label>
                                                    <input type="number" name="infants"
                                                        class="px-20 py-10  border-light rounded-4" />
                                                </div>

                                            </div>
                                        </div>



                                    </div>

                                </div> -->

                                <div class="col-12">
                                    <input type="submit" value="BOOK NOW" class="button -dark-1 py-15 px-35 h-60 col-12 rounded-4 bg-blue-1 text-white" />
                                </div>
                            </div>
                            {!! Form::close() !!}

                            <div class="d-flex items-center pt-20">
                                <div class="size-40 flex-center bg-light-2 rounded-full">
                                    <i class="icon-heart text-16 text-green-2"></i>
                                </div>
                                <div class="text-14 lh-16 ml-10">94% of travelers recommend this experience
                                </div>
                            </div>
                        </div>

                        <div class="px-30">
                            <div class="text-14 text-light-1 mt-30">Not sure? You can cancel this reservation up
                                to 24
                                hours in advance for a full refund.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pt-40">
    <div class="container">
        <div class="pt-40 border-top-light">
            <div class="row x-gap-40 y-gap-40">
                <div class="col-auto">
                    <h3 class="text-24 fw-500">Important information</h3>
                </div>
            </div>

            <div class="row x-gap-40 y-gap-40 justify-between pt-20">

                {!! $package->more_information !!}


            </div>
        </div>
    </div>
</section>

<div class="container mt-40 mb-40">
    <div class="border-top-light"></div>
</div>

<div class="container mt-40 mb-40">
    <div class="border-top-light"></div>
</div>

<!-- FAQs start  -->

<section class="pb-40">
    <div class="container">
        <div class="row y-gap-20">
            <div class="col-lg-4">
                <h2 class="text-24 fw-500">Frequently Asked Questions<br> {{ $package->name}}</h2>
            </div>

            <div class="col-lg-8">
                <div class="accordion -simple row y-gap-20 js-accordion">

                    @if($faqs != null)

                    @foreach($faqs as $faq)

                    <div class="col-12">
                        <div class="accordion__item px-20 py-20 border-light rounded-4">
                            <div class="accordion__button d-flex items-center">
                                <div class="accordion__icon size-40 flex-center bg-light-2 rounded-full mr-20">
                                    <i class="icon-plus"></i>
                                    <i class="icon-minus"></i>
                                </div>

                                <div class="button text-dark-1">{{ $faq['question']}}</div>
                            </div>

                            <div class="accordion__content">
                                <div class="pt-20 pl-60">
                                    <p class="text-15">{{$faq['answer']}}</p>
                                </div>
                            </div>
                        </div>
                    </div>


                    @endforeach


                    @endif

                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQs end  -->

<section class="py-40 bg-light-3">
    <div class="container">
        <div class="row justify-between items-end">
            <div class="col-auto">
                <div class="sectionTitle -md">
                    <h2 class="sectionTitle__title">Similar Experiences</h2>
                    <p class=" sectionTitle__text mt-5 sm:mt-0"></p>
                </div>
            </div>

            <div class="col-auto">

                <a href="{{ route('packages.index')}}" class="button h-50 px-24 -blue-1 bg-blue-1-05 text-blue-1">
                    See All <div class="icon-arrow-top-right ml-15"></div>
                </a>

            </div>
        </div>

        <div class="relative overflow-hidden pt-40 sm:pt-20 js-section-slider" data-gap="30" data-scrollbar data-slider-cols="xl-4 lg-3 md-2 sm-2 base-1" data-nav-prev="js-hotels-prev" data-pagination="js-hotels-pag" data-nav-next="js-hotels-next">
            <div class="swiper-wrapper">

                @foreach($similar_packages as $package)


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
                                                <img class="col-12 h-full js-lazy" src="#" data-src="{{ asset('storage/uploads/package_images/' . $image->name )  }}" alt="image">
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

                            <p> <span class="tag_selector">   {{ str_replace('_',' ' , ucfirst($package->package_type)) }}</span></p>
                            @foreach($package->city as $city)
                            <span class="text-light-1 lh-14 text-14 mt-5 tag_selector_orange">{{$city}}</span>
                                            @endforeach
                         
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

@endsection