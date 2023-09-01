@extends('frontend.layouts.app')


@section('title')
    {{ $tour->meta_title }}
@endsection

@section('description')
    {{ $tour->meta_description }}
@endsection

@section('keywords')
    {{ $tour->meta_description }}
@endsection


@push('css')
    <style>
        .product_type_sticker {

            padding: 4px;
            border-radius: 15px;
        }

        .tour-wrapper {
            border-left: 4px solid #009688;
            padding: 10px;
        }
    </style>
@endpush()


@section('content')



    <section class="pt-40 js-pin-container">

        <div class="container">

            <div class="row y-gap-30">

                <div class="col-lg-8">


                    <div class="relative d-flex justify-center overflow-hidden js-section-slider" data-slider-cols="base-1"
                        data-nav-prev="js-img-prev" data-nav-next="js-img-next">

                        <div class="swiper-wrapper">

                            @foreach ($tour->images as $image)
                                <div class="swiper-slide">

                                    <img src="{{ asset('storage/uploads/tour_images/' . $image->name) }}" alt="image"
                                        class="rounded-4 col-12 h-full object-cover">

                                </div>
                            @endforeach





                        </div>



                        <div class="absolute h-full col-11">



                            <button
                                class="section-slider-nav -prev flex-center button -blue-1 bg-white shadow-1 size-40 rounded-full sm:d-none js-img-prev">

                                <i class="icon icon-chevron-left text-12"></i>

                            </button>



                            <button
                                class="section-slider-nav -next flex-center button -blue-1 bg-white shadow-1 size-40 rounded-full sm:d-none js-img-next">

                                <i class="icon icon-chevron-right text-12"></i>

                            </button>



                        </div>

                    </div>



                    <div class="border-top-light mt-40 mb-40"></div>



                    <div class="row x-gap-40 y-gap-40">

                        <div class="col-12">

                            <h3 class="text-24 fw-500">Overview</h3>

                            <p class="text-dark-1 text-15 mt-20">

                                {!! $tour->description !!}

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



                    @if ($itenaries != null)
                        <h3 class="text-22 fw-500 mt-30">

                            Itenaries

                        </h3>



                        <div class="accordino--cutom">



                            <div class="accordion -simple row  js-accordion">



                                @foreach ($itenaries as $itenary)
                                    <div class="col-12">

                                        <div class="accordion__item px-5 py-5 border-bottom-light rounded-4">

                                            <div class="accordion__button d-flex items-center">

                                                <div
                                                    class="accordion__icon size-40 flex-center bg-light-2 rounded-full mr-20">

                                                    <i class="icon-plus text-orange-1"></i>

                                                    <i class="icon-minus"></i>

                                                </div>



                                                <div class="button text-dark-1 fw-600 width_max_content">
                                                    {{ $itenary['day'] }}</div>

                                                <!-- <div class="text-end ms-auto text-dark-1 text-22">&#8964;</div> -->

                                            </div>



                                            <div class="accordion__content">

                                                <div class="pt-20 pl-60">

                                                    <p class="text-15">{{ $itenary['detail'] }}</p>

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



                    <div class="accordino--custom ">


                        <div class="accordion -simple row  js-accordion">



                            @if ($tour->is_accommodation_included == 1)
                                <div class="col-12">

                                    <div class="accordion__item px-10 py-10 border-bottom-light">

                                        <div class="accordion__button d-flex justify-between items-center">

                                            <div class="d-flex">

                                                <div
                                                    class="accordion__icon size-40 flex-center bg-dark-1 rounded-full mr-20">

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

                                                {!! $tour->accommodation !!}

                                            </div>

                                        </div>

                                    </div>

                                </div>
                            @endif


                            @if ($tour->is_guide_included == 1)
                                <div class="col-12">

                                    <div class="accordion__item px-10 py-10 border-bottom-light">

                                        <div class="accordion__button d-flex justify-between items-center">

                                            <div class="d-flex">

                                                <div
                                                    class="accordion__icon size-40 flex-center bg-dark-1 rounded-full mr-20">

                                                    <i class="icon-check text-white"></i>

                                                    <i class="icon-minus"></i>
                                                    <svg width="800px" height="800px" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg"><path fill="#000000" d="M640 608h-64V416h64v192zm0 160v160a32 32 0 0 1-32 32H416a32 32 0 0 1-32-32V768h64v128h128V768h64zM384 608V416h64v192h-64zm256-352h-64V128H448v128h-64V96a32 32 0 0 1 32-32h192a32 32 0 0 1 32 32v160z"/><path fill="#000000" d="m220.8 256-71.232 80 71.168 80H768V256H220.8zm-14.4-64H800a32 32 0 0 1 32 32v224a32 32 0 0 1-32 32H206.4a32 32 0 0 1-23.936-10.752l-99.584-112a32 32 0 0 1 0-42.496l99.584-112A32 32 0 0 1 206.4 192zm678.784 496-71.104 80H266.816V608h547.2l71.168 80zm-56.768-144H234.88a32 32 0 0 0-32 32v224a32 32 0 0 0 32 32h593.6a32 32 0 0 0 23.936-10.752l99.584-112a32 32 0 0 0 0-42.496l-99.584-112A32 32 0 0 0 828.48 544z"/></svg>

                                                </div>


                                                <div class="button text-dark-1 fw-600 width_max_content">Guide</div>

                                            </div>

                                            <div class="button text-dark-1 text-right w-100 fw-600">
                                                <!-- <i class="fas fa-chevron-down"></i> -->
                                            </div>

                                        </div>



                                        <div class="accordion__content">

                                            <div class="pt-20 pl-60">

                                                {!! $tour->guide !!}

                                            </div>

                                        </div>

                                    </div>

                                </div>
                            @endif



                            @if ($tour->is_additional_services_included == 1)
                                <div class="col-12">

                                    <div class="accordion__item px-10 py-10 border-bottom-light">

                                        <div class="accordion__button d-flex justify-between items-center">

                                            <div class="d-flex">

                                                <div
                                                    class="accordion__icon size-40 flex-center bg-dark-1 rounded-full mr-20">

                                                    <i class="icon-check text-white"></i>

                                                    <i class="icon-minus"></i>

                                                </div>



                                                <div class="button text-dark-1 fw-600 width_max_content">Additional
                                                    Services</div>

                                            </div>

                                            <div class="button text-dark-1 text-right w-100 fw-600">
                                                <!-- <i class="fas fa-chevron-down"></i> -->
                                            </div>

                                        </div>



                                        <div class="accordion__content">

                                            <div class="pt-20 pl-60">

                                                {!! $tour->additional_services !!}

                                            </div>

                                        </div>

                                    </div>

                                </div>
                            @endif



                            @if ($tour->is_insurance_included == 1)
                                <div class="col-12">

                                    <div class="accordion__item px-10 py-10 border-bottom-light">

                                        <div class="accordion__button d-flex justify-between items-center">

                                            <div class="d-flex">

                                                <div
                                                    class="accordion__icon size-40 flex-center bg-dark-1 rounded-full mr-20">

                                                    <i class="icon-check text-white"></i>

                                                    <i class="icon-minus"></i>

                                                </div>



                                                <div class="button text-dark-1 fw-600 width_max_content">Insurance</div>

                                            </div>

                                            <div class="button text-dark-1 text-right w-100 fw-600">
                                                <!-- <i class="fas fa-chevron-down"></i> -->
                                            </div>

                                        </div>



                                        <div class="accordion__content">

                                            <div class="pt-20 pl-60">

                                                {!! $tour->insurance !!}

                                            </div>

                                        </div>

                                    </div>

                                </div>
                            @endif





                            @if ($tour->is_visa_included == 1)
                                <div class="col-12">

                                    <div class="accordion__item px-10 py-10 border-bottom-light">

                                        <div class="accordion__button d-flex justify-between items-center">

                                            <div class="d-flex">

                                                <div
                                                    class="accordion__icon size-40 flex-center bg-dark-1 rounded-full mr-20">

                                                    <i class="icon-check text-white"></i>

                                                    <i class="icon-minus"></i>

                                                </div>



                                                <div class="button text-dark-1 fw-600 width_max_content">Visa</div>

                                            </div>

                                            <div class="button text-dark-1 text-right w-100 fw-600">
                                                <!-- <i class="fas fa-chevron-down"></i> -->
                                            </div>

                                        </div>



                                        <div class="accordion__content">

                                            <div class="pt-20 pl-60">

                                                {!! $tour->visa !!}

                                            </div>

                                        </div>

                                    </div>

                                </div>
                            @endif





                            @if ($tour->is_flights_included == 1)
                                <div class="col-12">

                                    <div class="accordion__item px-10 py-10 border-bottom-light">

                                        <div class="accordion__button d-flex justify-between items-center">

                                            <div class="d-flex">

                                                <div
                                                    class="accordion__icon size-40 flex-center bg-dark-1 rounded-full mr-20">

                                                    <i class="icon-check text-white"></i>

                                                    <i class="icon-minus"></i>

                                                </div>



                                                <div class="button text-dark-1 fw-600 width_max_content">Flights</div>

                                            </div>

                                            <div class="button text-dark-1 text-right w-100 fw-600">
                                                <!-- <i class="fas fa-chevron-down"></i> -->
                                            </div>

                                        </div>



                                        <div class="accordion__content">

                                            <div class="pt-20 pl-60">

                                                {!! $tour->flights !!}

                                            </div>

                                        </div>

                                    </div>

                                </div>
                            @endif





                            @if ($tour->is_meals_included == 1)
                                <div class="col-12">

                                    <div class="accordion__item px-10 py-10 border-bottom-light">

                                        <div class="accordion__button d-flex justify-between items-center">

                                            <div class="d-flex">

                                                <div
                                                    class="accordion__icon size-40 flex-center bg-dark-1 rounded-full mr-20">

                                                    <i class="icon-check text-white"></i>

                                                    <i class="icon-minus"></i>

                                                </div>



                                                <div class="button text-dark-1 fw-600 width_max_content">Meals</div>

                                            </div>

                                            <div class="button text-dark-1 text-right w-100 fw-600">
                                                <!-- <i class="fas fa-chevron-down"></i> -->
                                            </div>

                                        </div>



                                        <div class="accordion__content">

                                            <div class="pt-20 pl-60">

                                                {!! $tour->meals !!}

                                            </div>

                                        </div>

                                    </div>

                                </div>
                            @endif



                            @if ($tour->is_optional_included == 1)
                                <div class="col-12">

                                    <div class="accordion__item px-10 py-10 border-bottom-light">

                                        <div class="accordion__button d-flex justify-between items-center">

                                            <div class="d-flex">

                                                <div
                                                    class="accordion__icon size-40 flex-center bg-dark-1 rounded-full mr-20">

                                                    <i class="icon-check text-white"></i>

                                                    <i class="icon-minus"></i>

                                                </div>



                                                <div class="button text-dark-1 fw-600 width_max_content">Optional</div>

                                            </div>

                                            <div class="button text-dark-1 text-right w-100 fw-600">
                                                <!-- <i class="fas fa-chevron-down"></i> -->
                                            </div>

                                        </div>



                                        <div class="accordion__content">

                                            <div class="pt-20 pl-60">

                                                {!! $tour->Optional !!}

                                            </div>

                                        </div>

                                    </div>

                                </div>
                            @endif





                        </div>




                        @if ($tour->is_transport_included == 1 && count($tour->transports) > 0)
                            <!-- transport section start  -->





                            <div class="accordino--custom">



                                <div class="accordion -simple row  js-accordion">



                                    <div class="col-12">

                                        <div class="accordion__item px-10 py-10 border-bottom-light">

                                            <div class="accordion__button d-flex justify-between items-center">

                                                <div class="d-flex">

                                                    <div
                                                        class="accordion__icon size-40 flex-center bg-dark-1 rounded-full mr-20">

                                                        <i class="icon-check text-white"></i>

                                                        <i class="icon-minus"></i>

                                                    </div>



                                                    <div class="button text-dark-1 fw-600 width_max_content">Transports
                                                    </div>

                                                </div>

                                                <div class="button text-dark-1 text-right w-100 fw-600">
                                                    <!-- <i class="fas fa-chevron-down"></i> -->
                                                </div>

                                            </div>



                                            <div class="accordion__content">

                                                <div class="pt-20 pl-60">



                                                    <!-- hotels content start  -->



                                                    @foreach ($tour->transports as $transport)
                                                        <div class="col-12">

                                                            <div class="accordion__item px-10 py-10 border-bottom-light">

                                                                <div
                                                                    class="accordion__button d-flex justify-between items-center">

                                                                    <div class="d-flex">

                                                                        <div
                                                                            class="accordion__icon size-40 flex-center bg-dark-1 rounded-full mr-20">

                                                                            <i class="fa-solid fa-car text-white"></i>

                                                                            <i class="fa-solid fa-car text-white"></i>

                                                                        </div>



                                                                        <div
                                                                            class="button text-dark-1 fw-600 width_max_content">

                                                                            <strong>{{ $transport->company }} </strong>



                                                                        </div>

                                                                    </div>

                                                                    <div
                                                                        class="button text-dark-1 text-right w-100 fw-600">
                                                                        <!-- <i class="fas fa-chevron-down"></i> -->
                                                                    </div>

                                                                </div>



                                                                <div class="accordion__content">

                                                                    <div class="pt-20 pl-60">

                                                                        <div class="row py-3">



                                                                            <div class="col-12">



                                                                                <!--   -->

                                                                                <section class="transport">

                                                                                    <div
                                                                                        class="transport__slider owl-carousel">





                                                                                        @foreach ($transport->images()->get() as $image)
                                                                                            <a href="{{ asset('storage/uploads/transport_images/' . $image->name) }}"
                                                                                                class="transport__items set-bg js-gallery"
                                                                                                data-gallery="gallery2">

                                                                                                <img src="{{ asset('storage/uploads/transport_images/' . $image->name) }}"
                                                                                                    class="rounded-8"
                                                                                                    alt="">

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



                    <div class="accordino--custom">



                        <div class="accordion -simple row  js-accordion">



                            @if ($tour->is_accommodation_included == 0)
                                <div class="col-12">

                                    <div class="accordion__item px-10 py-10 border-bottom-light">

                                        <div class="accordion__button d-flex justify-between items-center">

                                            <div class="d-flex">

                                                <div
                                                    class="accordion__icon size-40 flex-center bg-blue-1 rounded-full mr-20">

                                                    <i class="icon-close  text-white"></i>

                                                    <i class="icon-minus"></i>

                                                </div>



                                                <div class="button text-dark-1 fw-600 width_max_content">Accommodation
                                                </div>

                                            </div>

                                            <div class="button text-dark-1 text-right w-100 fw-600">
                                                <!-- <i class="fas fa-chevron-down"></i> -->
                                            </div>

                                        </div>



                                        <div class="accordion__content">

                                            <div class="pt-20 pl-60">

                                                {!! $tour->accommodation !!}

                                            </div>

                                        </div>

                                    </div>

                                </div>
                            @endif



                            @if ($tour->is_guide_included == 0)
                                <div class="col-12">

                                    <div class="accordion__item px-10 py-10 border-bottom-light">

                                        <div class="accordion__button d-flex justify-between items-center">

                                            <div class="d-flex">

                                                <div
                                                    class="accordion__icon size-40 flex-center bg-blue-1 rounded-full mr-20">

                                                    <i class="icon-close text-white"></i>

                                                    <i class="icon-minus"></i>

                                                </div>



                                                <div class="button text-dark-1 fw-600 width_max_content">Guide</div>

                                            </div>

                                            <div class="button text-dark-1 text-right w-100 fw-600">
                                                <!-- <i class="fas fa-chevron-down"></i> -->
                                            </div>

                                        </div>



                                        <div class="accordion__content">

                                            <div class="pt-20 pl-60">

                                                {!! $tour->guide !!}

                                            </div>

                                        </div>

                                    </div>

                                </div>
                            @endif



                            @if ($tour->is_additional_services_included == 0)
                                <div class="col-12">

                                    <div class="accordion__item px-10 py-10 border-bottom-light">

                                        <div class="accordion__button d-flex justify-between items-center">

                                            <div class="d-flex">

                                                <div
                                                    class="accordion__icon size-40 flex-center bg-blue-1 rounded-full mr-20">

                                                    <i class="icon-close text-white"></i>

                                                    <i class="icon-minus"></i>

                                                </div>



                                                <div class="button text-dark-1 fw-600 width_max_content">Additional
                                                    Services</div>

                                            </div>

                                            <div class="button text-dark-1 text-right w-100 fw-600">
                                                <!-- <i class="fas fa-chevron-down"></i> -->
                                            </div>

                                        </div>



                                        <div class="accordion__content">

                                            <div class="pt-20 pl-60">

                                                {!! $tour->additional_services !!}

                                            </div>

                                        </div>

                                    </div>

                                </div>
                            @endif



                            @if ($tour->is_insurance_included == 0)
                                <div class="col-12">

                                    <div class="accordion__item px-10 py-10 border-bottom-light">

                                        <div class="accordion__button d-flex justify-between items-center">

                                            <div class="d-flex">

                                                <div
                                                    class="accordion__icon size-40 flex-center bg-blue-1 rounded-full mr-20">

                                                    <i class="icon-close text-white"></i>

                                                    <i class="icon-minus"></i>

                                                </div>



                                                <div class="button text-dark-1 fw-600 width_max_content">Insurance</div>

                                            </div>

                                            <div class="button text-dark-1 text-right w-100 fw-600">
                                                <!-- <i class="fas fa-chevron-down"></i> -->
                                            </div>

                                        </div>



                                        <div class="accordion__content">

                                            <div class="pt-20 pl-60">

                                                {!! $tour->insurance !!}

                                            </div>

                                        </div>

                                    </div>

                                </div>
                            @endif





                            @if ($tour->is_visa_included == 0)
                                <div class="col-12">

                                    <div class="accordion__item px-10 py-10 border-bottom-light">

                                        <div class="accordion__button d-flex justify-between items-center">

                                            <div class="d-flex">

                                                <div
                                                    class="accordion__icon size-40 flex-center bg-blue-1 rounded-full mr-20">

                                                    <i class="icon-close text-white"></i>

                                                    <i class="icon-minus"></i>

                                                </div>



                                                <div class="button text-dark-1 fw-600 width_max_content">Visa</div>

                                            </div>

                                            <div class="button text-dark-1 text-right w-100 fw-600">
                                                <!-- <i class="fas fa-chevron-down"></i> -->
                                            </div>

                                        </div>



                                        <div class="accordion__content">

                                            <div class="pt-20 pl-60">

                                                {!! $tour->visa !!}

                                            </div>

                                        </div>

                                    </div>

                                </div>
                            @endif



                            @if ($tour->is_flights_included == 0)
                                <div class="col-12">

                                    <div class="accordion__item px-10 py-10 border-bottom-light">

                                        <div class="accordion__button d-flex justify-between items-center">

                                            <div class="d-flex">

                                                <div
                                                    class="accordion__icon size-40 flex-center bg-blue-1 rounded-full mr-20">

                                                    <i class="icon-close  text-white"></i>

                                                    <i class="icon-minus"></i>

                                                </div>



                                                <div class="button text-dark-1 fw-600 width_max_content">Flights</div>

                                            </div>

                                            <div class="button text-dark-1 text-right w-100 fw-600">
                                                <!-- <i class="fas fa-chevron-down"></i> -->
                                            </div>

                                        </div>



                                        <div class="accordion__content">

                                            <div class="pt-20 pl-60">

                                                {!! $tour->flights !!}

                                            </div>

                                        </div>

                                    </div>

                                </div>
                            @endif





                            @if ($tour->is_meals_included == 0)
                                <div class="col-12">

                                    <div class="accordion__item px-10 py-10 border-bottom-light">

                                        <div class="accordion__button d-flex justify-between items-center">

                                            <div class="d-flex">

                                                <div
                                                    class="accordion__icon size-40 flex-center bg-blue-1 rounded-full mr-20">

                                                    <i class="icon-close  text-white"></i>

                                                    <i class="icon-minus"></i>

                                                </div>



                                                <div class="button text-dark-1 fw-600 width_max_content">Meals</div>

                                            </div>

                                            <div class="button text-dark-1 text-right w-100 fw-600">
                                                <!-- <i class="fas fa-chevron-down"></i> -->
                                            </div>

                                        </div>



                                        <div class="accordion__content">

                                            <div class="pt-20 pl-60">

                                                {!! $tour->meals !!}

                                            </div>

                                        </div>

                                    </div>

                                </div>
                            @endif



                            @if ($tour->is_optional_included == 0)
                                <div class="col-12">

                                    <div class="accordion__item px-10 py-10 border-bottom-light">

                                        <div class="accordion__button d-flex justify-between items-center">

                                            <div class="d-flex">

                                                <div
                                                    class="accordion__icon size-40 flex-center bg-blue-1 rounded-full mr-20">

                                                    <i class="icon-close  text-white"></i>

                                                    <i class="icon-minus"></i>

                                                </div>



                                                <div class="button text-dark-1 fw-600 width_max_content">Optional</div>

                                            </div>

                                            <div class="button text-dark-1 text-right w-100 fw-600">
                                                <!-- <i class="fas fa-chevron-down"></i> -->
                                            </div>

                                        </div>



                                        <div class="accordion__content">

                                            <div class="pt-20 pl-60">

                                                {!! $tour->Optional !!}

                                            </div>

                                        </div>

                                    </div>

                                </div>
                            @endif



                        </div>


                        @if ($tour->is_transport_included == 0 && count($tour->transports) > 0)
                            <!-- transport section start  -->





                            <div class="accordino--custom">



                                <div class="accordion -simple row  js-accordion">



                                    <div class="col-12">

                                        <div class="accordion__item px-10 py-10 border-bottom-light">

                                            <div class="accordion__button d-flex justify-between items-center">

                                                <div class="d-flex">

                                                    <div
                                                        class="accordion__icon size-40 flex-center bg-blue-1 rounded-full mr-20">

                                                        <i class="icon-close text-white"></i>

                                                        <i class="icon-minus"></i>

                                                    </div>



                                                    <div class="button text-dark-1 fw-600 width_max_content">Transports
                                                    </div>

                                                </div>

                                                <div class="button text-dark-1 text-right w-100 fw-600">
                                                    <!-- <i class="fas fa-chevron-down"></i> -->
                                                </div>

                                            </div>



                                            <div class="accordion__content">

                                                <div class="pt-20 pl-60">



                                                    <!-- hotels content start  -->



                                                    @foreach ($tour->transports as $transport)
                                                        <div class="col-12">

                                                            <div class="accordion__item px-10 py-10 border-bottom-light">

                                                                <div
                                                                    class="accordion__button d-flex justify-between items-center">

                                                                    <div class="d-flex">

                                                                        <div
                                                                            class="accordion__icon size-40 flex-center bg-dark-1 rounded-full mr-20">

                                                                            <i class="fa-solid fa-car text-white"></i>

                                                                            <i class="fa-solid fa-car text-white"></i>

                                                                        </div>



                                                                        <div
                                                                            class="button text-dark-1 fw-600 width_max_content">

                                                                            <strong>{{ $transport->company }} </strong>



                                                                        </div>

                                                                    </div>

                                                                    <div
                                                                        class="button text-dark-1 text-right w-100 fw-600">
                                                                        <!-- <i class="fas fa-chevron-down"></i> -->
                                                                    </div>

                                                                </div>



                                                                <div class="accordion__content">

                                                                    <div class="pt-20 pl-60">

                                                                        <div class="row py-3">



                                                                            <div class="col-12">



                                                                                <!--   -->

                                                                                <section class="transport">

                                                                                    <div
                                                                                        class="transport__slider owl-carousel">





                                                                                        @foreach ($transport->images()->get() as $image)
                                                                                            <a href="{{ asset('storage/uploads/transport_images/' . $image->name) }}"
                                                                                                class="transport__items set-bg js-gallery"
                                                                                                data-gallery="gallery2">

                                                                                                <img src="{{ asset('storage/uploads/transport_images/' . $image->name) }}"
                                                                                                    class="rounded-8"
                                                                                                    alt="">

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
                        <p> <span class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-blue-1 text-white">
                                {{ str_replace('_', ' ', ucfirst($tour->product_type)) }}</span></p>

                        <h2 class="text-30 fw-600 mb-3">{{ $tour->tour_name }}</h2>

                        <p class="mb-12">

                        <div class="d-inline-block ml-10">

                            {!! $tour->stars == 1 ? '<i class="icon-star  text-yellow-3"></i>' : '' !!}

                            {!! $tour->stars == 2
                                ? '<i class="icon-star  text-yellow-3"></i><i class="icon-star  text-yellow-3"></i>'
                                : '' !!}

                            {!! $tour->stars == 3
                                ? '<i class="icon-star  text-yellow-3"></i><i class="icon-star  text-yellow-3"></i><i class="icon-star  text-yellow-3"></i>'
                                : '' !!}

                            {!! $tour->stars == 4
                                ? '<i class="icon-star  text-yellow-3"></i><i class="icon-star  text-yellow-3"></i><i class="icon-star  text-yellow-3"></i><i class="icon-star  text-yellow-3"></i>'
                                : '' !!}

                            {!! $tour->stars == 5
                                ? '<i class="icon-star  text-yellow-3"></i><i class="icon-star  text-yellow-3"></i><i class="icon-star  text-yellow-3"></i><i class="icon-star  text-yellow-3"></i><i class="icon-star  text-yellow-3"></i>'
                                : '' !!}

                        </div>



                        <a href="javascript:void(0);"
                            class="text-purple-1">{{ $tour->reviews != null ? $tour->reviews . ' reviews' : '' }}
                        </a>

                        </p>

                        <p class="mb-2">
                            <strong> <img style="width:15px;" src="{{ asset('/frontend/img/sun.png') }}" />
                                {{ $tour->days }} Days </strong>
                            <strong> <img style="width:15px;" src="{{ asset('/frontend/img/night.png') }}" />
                                {{ $tour->nights }} Nights </strong>
                        </p>



                        <p class="mb-2">Country

                            <span class="text-13 tag_selector">{{ $tour->country }} </span>


                        </p>


                        <p class="mb-2">City

                            @foreach ($cities as $city)
                                {!! in_array($city->id, $tour->city) ? "<span class='text-13 tag_selector'>$city->name</span>" : '' !!}
                            @endforeach


                        </p>

                        <p class="mb-2">Season <span class="text-13  tag_selector">{{ $tour->seasonality }}</span>
                        </p>

                        @if ($tour->languages != null)
                            <p class="mb-2"> Languages



                                @foreach ($tour->languages as $language)
                                    <span class="text-13  tag_selector">{{ $language }} &nbsp; </span>
                                @endforeach

                            </p>
                        @endif()

                        <p class="mb-2">Group/Private <span
                                class="text-13  tag_selector">{{ $tour->group_type }}</span></p>


                        {{-- <!-- @if ($tour->destinations != null)

                    <p class="mb-2">Places to visit

                        @foreach (json_decode($tour->destinations) as $destination)

                        <a href="javascript:void(0)" data-toggle="tooltip" title="{{isset($destination->description) ?? $destination->description }}"><span class="text-13 tag_selector"> {{$destination->name}} &nbsp; </span></a>

                        @endforeach

                    </p>
                    @endif() --> --}}

                        @if ($tour->tour_destination != null && count($tour->tour_destination) > 0)
                            <p class="mb-2">Places to visit

                                @foreach ($tour->tour_destination as $destinations)
                                    @foreach ($destinations as $destination)
                                        <a href="{{ route('destinations.show', $destination->slug) }}"
                                            data-toggle="tooltip" title="{{ $destination->name }}"><span
                                                class="text-13 tag_selector"> {{ $destination->name }} &nbsp; </span></a>
                                    @endforeach()
                                @endforeach()
                            </p>
                        @endif()












                    </div>

                    <!-- turkey classic tour end  -->



                    <div class="d-flex justify-end js-pin-content">

                        <div class="lg:w-full d-flex flex-column items-center">

                            <div class="px-30 py-10 rounded-8 border-light bg-white shadow-sm">

                                <div class="text-13 text-black">

                                    {{-- <!--                                @if ($errors->any())
    -->

                                    <!--    @foreach ($errors->all() as $error)
    -->

                                    <!--        <div>{{ $error }}</div>-->

                                    <!--
    @endforeach-->

                                    <!--
    @endif--> --}}

                                    @if (Session::has('message'))
                                        <p class="alert {{ Session::get('alert-class', 'alert-info') }}">

                                            {{ Session::get('message') }}

                                        </p>
                                    @endif

                                    tour Price<span class="text-30 fw-700 text-dark-1">

                                        ${{ $tour->net_amount }}</span>

                                </div>

                                {!! Form::open(['route' => ['tours.booking.store', $tour->id]]) !!}
                              
                                <!-- <form id="inquiry_form" action="https://www.ilinktours.com/includes/thanks.php" data-validate-error="Please fill all required fields." method="POST"> -->

                                <div class="row  pt-30">

                                    <div class="col-12">

                                        <div class="form-group">

                                            <label>Name</label>

                                            <input type="text" required name="name" value="{{ old('name') }}"
                                                class="  border-light rounded-4" />

                                            @error('name')
                                                <div class="invalid-feedback">

                                                    {{ $message }}

                                                </div>
                                            @enderror

                                        </div>



                                        <div class="form-group">

                                            <label>Email</label>

                                            <input type="email" required name="email" value="{{ old('email') }}"
                                                class="  border-light rounded-4" />

                                            @error('email')
                                                <div class="invalid-feedback">

                                                    {{ $message }}

                                                </div>
                                            @enderror

                                        </div>



                                        <div class="form-group">

                                            <label>Cell</label>

                                            <input type="text" id="phone" placeholder="(555) 555-5555" required
                                                name="cell" value="{{ old('cell') }}"
                                                class="phone  border-light rounded-4" />

                                            @error('cell')
                                                <div class="invalid-feedback">

                                                    {{ $message }}

                                                </div>
                                            @enderror

                                        </div>



                                        <div class="form-group">

                                            <label>Phone</label>

                                            <input type="text" id="phone" placeholder="(555) 555-5555" required
                                                name="phone" value="{{ old('phone') }}"
                                                class="phone  border-light rounded-4" />

                                            @error('phone')
                                                <div class="invalid-feedback">

                                                    {{ $message }}

                                                </div>
                                            @enderror

                                        </div>

                                        <div class="col-12">

                                            <h4 class="text-15 fw-500 ls-2 lh-16">Number of travelers</h4>

                                            <div
                                                class="searchMenu-guests  rounded-4 js-form-dd js-form-counters">


                                                <div class="text-15 text-light-1 ls-2 lh-16">

                                                    <div class="form-group" style="display:flex;">

                                                        <input placeholder="Adults" type="number" name="adults"
                                                            class=" border-light rounded-4" />

                                                        <input placeholder="Child" type="number" name="child"
                                                            class="  border-light rounded-4" />

                                                        <input placeholder="Infants" type="number" name="infants"
                                                            class=" border-light rounded-4" />


                                                        @error('adults')
                                                            <div class="invalid-feedback">

                                                                {{ $message }}

                                                            </div>
                                                        @enderror

                                                    </div>


                                                </div>



                                            </div>



                                        </div>







                                        <div class="form-group">

                                            <label>Arrival City</label>

                                            <input type="text" required name="arrival_city"
                                                value="{{ old('arrival_city') }}" class="  border-light rounded-4" />

                                            @error('arrival_city')
                                                <div class="invalid-feedback">

                                                    {{ $message }}

                                                </div>
                                            @enderror

                                        </div>





                                        <div class="form-group">

                                            <label>Arrival Date</label>

                                            <input type="date" required name="arrival_date"
                                                value="{{ old('departure_date') }}" class="  border-light rounded-4" />

                                            @error('departure_date')
                                                <div class="invalid-feedback">

                                                    {{ $message }}

                                                </div>
                                            @enderror

                                        </div>



                                        <div class="form-group">

                                            <label>Arrival Time</label>

                                            <input type="time" required name="arrival_time"
                                                value="{{ old('arrival_time') }}" class="  border-light rounded-4" />

                                            @error('arrival_time')
                                                <div class="invalid-feedback">

                                                    {{ $message }}

                                                </div>
                                            @enderror

                                        </div>







                                        <div class="form-group">

                                            <label>Departure City</label>

                                            <input type="text" required name="departure_city"
                                                value="{{ old('departure_city') }}" class="  border-light rounded-4" />

                                            @error('departure_city')
                                                <div class="invalid-feedback">

                                                    {{ $message }}

                                                </div>
                                            @enderror

                                        </div>



                                        <div class="form-group">

                                            <label>Departure Date</label>

                                            <input type="date" required name="departure_date"
                                                value="{{ old('departure_date') }}" class="  border-light rounded-4" />

                                            @error('departure_date')
                                                <div class="invalid-feedback">

                                                    {{ $message }}

                                                </div>
                                            @enderror

                                        </div>



                                        <div class="form-group">

                                            <label>Departure Time</label>

                                            <input type="time" required name="departure_time"
                                                value="{{ old('departure_time') }}" class="  border-light rounded-4" />

                                            @error('departure_time')
                                                <div class="invalid-feedback">

                                                    {{ $message }}

                                                </div>
                                            @enderror

                                        </div>





                                        <div class="form-group">

                                            <label>Contact Preference</label>

                                            <select required name="contact_preference"
                                                class="form-control   border-light rounded-4">

                                                <option value="">Select</option>

                                                <option>By Email</option>

                                                <option>By Phone</option>

                                            </select>

                                        </div>



                                        <div class="form-group">

                                            <label>Best time to call</label>

                                            <input type="text" name="best_time_to_call"
                                                value="{{ old('best_time_to_call') }}"
                                                class="  border-light rounded-4" />

                                        </div>



                                        <div class="form-group">

                                            <label>Comments</label>

                                            <textarea name="comment" class="  border-light rounded-4">{{ old('comment') }}</textarea>

                                        </div>

                                    </div>

                                    <div class="col-12">
                                        <div class="g-recaptcha" data-sitekey="6LcDQsclAAAAAF9xioPFfGoLIGlgW1RHUSstoBSz">
                                        </div>
                                        <input type="submit" value="BOOK NOW"
                                            class="button -dark-1 py-15 px-35 h-60 col-12 rounded-4 bg-blue-1 text-white" />

                                    </div>

                                </div>
                                </form>
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



                    {!! $tour->more_information !!}





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

            <div class="row ">

                <div class="col-lg-4">

                    <h2 class="text-24 fw-500">Frequently Asked Questions<br> {{ $tour->name }}</h2>

                </div>



                <div class="col-lg-8">

                    <div class="accordion -simple row  js-accordion">



                        @if ($faqs != null)
                            @foreach ($faqs as $faq)
                                <div class="col-12">

                                    <div class="accordion__item px-20 py-20 border-light rounded-4">

                                        <div class="accordion__button d-flex items-center">

                                            <div class="accordion__icon size-40 flex-center bg-light-2 rounded-full mr-20">

                                                <i class="icon-plus"></i>

                                                <i class="icon-minus"></i>

                                            </div>



                                            <div class="button text-dark-1">{{ $faq['question'] }}</div>

                                        </div>



                                        <div class="accordion__content">

                                            <div class="pt-20 pl-60">

                                                <p class="text-15">{{ $faq['answer'] }}</p>

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



                    <a href="{{ route('tours.index') }}" class="button h-50 px-24 -blue-1 bg-blue-1-05 text-blue-1">

                        See All <div class="icon-arrow-top-right ml-15"></div>

                    </a>



                </div>

            </div>



            <div class="relative overflow-hidden pt-40 sm:pt-20 js-section-slider" data-gap="30" data-scrollbar
                data-slider-cols="xl-4 lg-3 md-2 sm-2 base-1" data-nav-prev="js-hotels-prev"
                data-pagination="js-hotels-pag" data-nav-next="js-hotels-next">

                <div class="swiper-wrapper">



                    @foreach ($similar_tours as $tour)
                        <div class="swiper-slide shadow-sm rounded-8 bg-white p-3">



                            <a href="{{ route('tours.show', $tour->slug) }}" class="hotelsCard -type-1 ">

                                <div class="hotelsCard__image">



                                    <div class="cardImage ratio ratio-1:1">

                                        <div class="cardImage__content">





                                            <div
                                                class="cardImage-slider h-full rounded-4 overflow-hidden js-cardImage-slider">

                                                <div class="swiper-wrapper">



                                                    <div class="swiper-slide">

                                                        <img class="col-12 h-full js-lazy" src="#"
                                                            data-src="{{ asset('storage/uploads/tour_images/featured_image/' . $tour->featured_image) }}"
                                                            alt="image">

                                                    </div>



                                                    @foreach ($tour->images as $image)
                                                        <div class="swiper-slide">

                                                            <img class="col-12 h-full js-lazy" src="#"
                                                                data-src="{{ asset('storage/uploads/tour_images/' . $image->name) }}"
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

                                                {{ str_replace('_', ' ', strtoupper($tour->product_type)) }}

                                            </div>

                                        </div>





                                    </div>



                                </div>



                                <div class="hotelsCard__content mt-10">

                                    <h4 class="hotelsCard__title text-dark-1 text-18 lh-16 fw-500">

                                        <span>{{ $tour->tour_name }}</span>

                                    </h4>
                                    

                                    <p> <span class="tag_selector">
                                            {{ str_replace('_', ' ', ucfirst($tour->tour_type)) }}</span></p>


                                    @foreach ($cities as $city)
                                    {!! in_array($city->id, $tour->city) ? "<span class='text-light-1 lh-14 text-14 mt-5'>".ucfirst($city->name)."</span>" : '' !!}
                                @endforeach



                                    <div class="d-inline-block">

                                        {!! $tour->stars == 1 ? '<i class="icon-star  text-yellow-3"></i>' : '' !!}

                                        {!! $tour->stars == 2
                                            ? '<i class="icon-star  text-yellow-3"></i><i class="icon-star  text-yellow-3"></i>'
                                            : '' !!}

                                        {!! $tour->stars == 3
                                            ? '<i class="icon-star  text-yellow-3"></i><i class="icon-star  text-yellow-3"></i><i class="icon-star  text-yellow-3"></i>'
                                            : '' !!}

                                        {!! $tour->stars == 4
                                            ? '<i class="icon-star  text-yellow-3"></i><i class="icon-star  text-yellow-3"></i><i class="icon-star  text-yellow-3"></i><i class="icon-star  text-yellow-3"></i>'
                                            : '' !!}

                                        {!! $tour->stars == 5
                                            ? '<i class="icon-star  text-yellow-3"></i><i class="icon-star  text-yellow-3"></i><i class="icon-star  text-yellow-3"></i><i class="icon-star  text-yellow-3"></i><i class="icon-star  text-yellow-3"></i>'
                                            : '' !!}

                                    </div>



                                    <div class="d-flex items-center mt-20">



                                        <div class="flex-center bg-blue-1 rounded-4 size-30 text-12 fw-600 text-white">
                                            {{ $tour->reviews }} </div>

                                        <div class="text-14 text-dark-1 fw-500 ml-10">Reviews</div>

                                    </div>





                                    <div class="mt-5">

                                        <div class="fw-500">

                                            Starting from <span class="text-blue-1">US $ {{ $tour->net_amount }}</span>

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

@push('scripts')
    <script>
        $(document).ready(function() {
            //   $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
@endpush()
