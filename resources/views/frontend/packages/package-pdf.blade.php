<!DOCTYPE html>

<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Google fonts -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Stylesheets -->

    <link rel="stylesheet" href="{{  asset('frontend/css/vendors.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/css/main.css') }}">


    <link rel="stylesheet" href="{{ URL::asset('frontend/css/vendors.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ URL::asset('frontend/css/main.css') }}" type="text/css" />

    <style>
        .text-dark-1 {
            background: green;
        }
    </style>

</head>

<body>

    <section class="container">


        <section class="pt-40 js-pin-container">
            <div class="container">
                <div class="row y-gap-30">
                    <div class="col-lg-12">


                        <img src="{{  ltrim(public_path('storage/uploads/package_images/featured_image' . $package->featured_image ),'/')  }}" alt="image" class="rounded-4 col-12 h-full object-cover">

                        <div class="border-top-light mt-40 mb-40"></div>

                        <div class="row x-gap-40 y-gap-40">
                            <div class="col-12">
                                <h3 class="text-24 fw-500">Overview</h3>
                                <p class="text-dark-1 text-15 mt-20">
                                    {!! $package->description !!}
                                </p>

                            </div>

                        </div>

                        @if($itenaries != null)

                        <h3 class="text-22 fw-500 mt-30">
                            Itenaries
                        </h3>



                        @foreach($itenaries as $itenary )
                        <div class="col-12">
                            <div class="accordion__item px-5 py-5 border-bottom-light rounded-4">
                                <div class="accordion__button d-flex items-center">


                                    <div class="button text-dark-1 fw-600">{{$itenary['day']}}</div>
                                    <!-- <div class="text-end ms-auto text-dark-1 text-22">&#8964;</div> -->
                                    <div class="pt-20 pl-60">
                                        <p class="text-15">{{$itenary['detail']}}</p>
                                    </div>
                                </div>


                            </div>
                        </div>
                        @endforeach()


                        @endif()


                        <!-- whats included start  -->
                        <h3 class="text-22 fw-500 mt-30">
                            What's Included
                        </h3>


                        @if($package->is_accommodation_included == 1)

                        <div class="col-12">
                            <div class="accordion__item px-10 py-10 border-bottom-light">
                                <div class="accordion__button d-flex justify-between items-center">
                                    <div class="d-flex">


                                        <div class="button text-dark-1 fw-600">Accommodation</div>
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


                                        <div class="button text-dark-1 fw-600">Guide</div>
                                    </div>

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


                                        <div class="button text-dark-1 fw-600">Additional Services</div>
                                    </div>

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


                                        <div class="button text-dark-1 fw-600">Insurance</div>
                                    </div>

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


                                        <div class="button text-dark-1 fw-600">Visa</div>
                                    </div>

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
                                        <div class="button text-dark-1 fw-600">Flights</div>
                                    </div>

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

                                        <div class="button text-dark-1 fw-600">Meals</div>
                                    </div>

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
                                        <div class="button text-dark-1 fw-600">Optional</div>
                                    </div>

                                </div>

                                <div class="accordion__content">
                                    <div class="pt-20 pl-60">
                                        {!! $package->Optional !!}
                                    </div>
                                </div>
                            </div>
                        </div>

                        @endif



                        @if($package->is_hotel_included == 1 && count($package->hotels) > 0)



                        <div class="accordino--custom py-30">

                            <div class="accordion -simple row y-gap-20 js-accordion">

                                <div class="col-12">
                                    <div class="accordion__item px-10 py-10 border-bottom-light">
                                        <div class="accordion__button d-flex justify-between items-center">
                                            <div class="d-flex">

                                                <div class="button text-dark-1 fw-600">Hotels</div>
                                            </div>

                                        </div>

                                        <div class="accordion__content">
                                            <div class="pt-20 pl-60">

                                                <!-- hotels content start  -->

                                                @foreach($package->hotels as $hotel)

                                                <div class="col-12">
                                                    <div class="accordion__item px-10 py-10 border-bottom-light">
                                                        <div class="accordion__button d-flex justify-between items-center">
                                                            <div class="d-flex">

                                                                <div class="button text-dark-1 fw-600">
                                                                    <strong><a target="_blank" href="{{ route('hotels.show',$hotel->slug)}}">{{$hotel->name}}</a>
                                                                        <span>{{$hotel->stars}} Star</span>
                                                                    </strong>

                                                                </div>
                                                            </div>

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

                        <div class="col-12">
                            <div class="accordion__item px-10 py-10 border-bottom-light">
                                <div class="accordion__button d-flex justify-between items-center">
                                    <div class="d-flex">
                                        <div class="button text-dark-1 fw-600">Transports</div>
                                    </div>

                                </div>

                                <div class="accordion__content">
                                    <div class="pt-20 pl-60">

                                        <!-- hotels content start  -->

                                        @foreach($package->transports as $transport)

                                        <div class="col-12">
                                            <div class="accordion__item px-10 py-10 border-bottom-light">
                                                <div class="accordion__button d-flex justify-between items-center">
                                                    <div class="d-flex">

                                                        <div class="button text-dark-1 fw-600">
                                                            <strong>{{$transport->company}} </strong>

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


                        <!-- transport section end  -->

                        @endif()


                        <!-- whats included end  -->


                        <!-- whats not included start  -->
                        <h3 class="text-22 fw-500 mt-30">
                            What's not Included
                        </h3>


                        @if($package->is_accommodation_included == 0 )

                        <div class="col-12">
                            <div class="accordion__item px-10 py-10 border-bottom-light">
                                <div class="accordion__button d-flex justify-between items-center">
                                    <div class="d-flex">

                                        <div class="button text-dark-1 fw-600">Accommodation</div>
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

                        @if($package->is_guide_included == 0)


                        <div class="col-12">
                            <div class="accordion__item px-10 py-10 border-bottom-light">
                                <div class="accordion__button d-flex justify-between items-center">
                                    <div class="d-flex">

                                        <div class="button text-dark-1 fw-600">Guide</div>
                                    </div>

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
                                        <div class="button text-dark-1 fw-600">Additional Services</div>
                                    </div>

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
                                        <div class="button text-dark-1 fw-600">Insurance</div>
                                    </div>

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

                                        <div class="button text-dark-1 fw-600">Visa</div>
                                    </div>

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
                                        <div class="button text-dark-1 fw-600">Flights</div>
                                    </div>

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
                                        <div class="button text-dark-1 fw-600">Meals</div>
                                    </div>

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
                                        <div class="button text-dark-1 fw-600">Optional</div>
                                    </div>

                                </div>

                                <div class="accordion__content">
                                    <div class="pt-20 pl-60">
                                        {!! $package->Optional !!}
                                    </div>
                                </div>
                            </div>
                        </div>

                        @endif

                        @if($package->is_hotel_included == 0 && count($package->hotels) > 0)

                        <!-- hotels section start  -->



                        <div class="col-12">
                            <div class="accordion__item px-10 py-10 border-bottom-light">
                                <div class="accordion__button d-flex justify-between items-center">
                                    <div class="d-flex">
                                        <div class="button text-dark-1 fw-600">Hotels</div>
                                    </div>

                                </div>

                                <div class="accordion__content">
                                    <div class="pt-20 pl-60">

                                        <!-- hotels content start  -->

                                        @foreach($package->hotels as $hotel)

                                        <div class="col-12">
                                            <div class="accordion__item px-10 py-10 border-bottom-light">
                                                <div class="accordion__button d-flex justify-between items-center">
                                                    <div class="d-flex">


                                                        <div class="button text-dark-1 fw-600">
                                                            <strong>
                                                                <a target="_blank" href="{{ route('hotels.show',$hotel->slug)}}">{{$hotel->name}}</a>
                                                                <span>{{$hotel->stars}} Star</span>
                                                            </strong>

                                                        </div>
                                                    </div>

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



                        <!-- hotels section end  -->

                        @endif()

                        @if($package->is_transport_included == 0 && count($package->transports) > 0)

                        <!-- transport section start  -->



                        <div class="col-12">
                            <div class="accordion__item px-10 py-10 border-bottom-light">
                                <div class="accordion__button d-flex justify-between items-center">
                                    <div class="d-flex">
                                        <div class="button text-dark-1 fw-600">Transports</div>
                                    </div>

                                </div>

                                <div class="accordion__content">
                                    <div class="pt-20 pl-60">

                                        <!-- hotels content start  -->

                                        @foreach($package->transports as $transport)

                                        <div class="col-12">
                                            <div class="accordion__item px-10 py-10 border-bottom-light">
                                                <div class="accordion__button d-flex justify-between items-center">
                                                    <div class="d-flex">
                                                        <div class="button text-dark-1 fw-600">
                                                            <strong>{{$transport->company}} </strong>

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


                        <!-- transport section end  -->

                        @endif()


                        <!-- whats not included end  -->





                    </div>

                    <div class="col-lg-12">

                        <!-- turkey classic tour start  -->
                        <div class="tour-wrapper mb-3">
                            <h2 class="text-30 fw-600 mb-3">{{ $package->package_name}} ({{ str_replace('_',' ' , strtoupper($package->product_type)) }})</h2>
                            <p class="mb-12">
                            <div class="d-inline-block ml-10">
                                <span>{{$package->stars}} Star</span>
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
                                <strong class="strong tag_selector"> {{$destination->name}} &nbsp; </strong>
                                @endforeach

                                @endif()

                            </p>
                            @if($package->languages != null)
                            <p class="mb-2"> Languages

                                @foreach ($package->languages as $language)
                                <strong class="strong tag_selector">{{$language}} &nbsp; </strong>
                                @endforeach
                            </p>
                            @endif()

                            <p class="mb-2">Group/Private <strong class="tag_selector">{{$package->group_type}}</strong></p>

                        </div>
                        <!-- turkey classic tour end  -->


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
                                        <div class="button text-dark-1">{{ $faq['question']}}</div>
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




    </section>




</body>


</html>