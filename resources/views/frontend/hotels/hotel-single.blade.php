@extends('frontend.layouts.app')


@section('content')


<section class="pt-40">
    <div class="container">

        <div class="row y-gap-30">
            <div class="col-lg-8">

                <div class="relative d-flex justify-center overflow-hidden js-section-slider" data-slider-cols="base-1" data-nav-prev="js-img-prev" data-nav-next="js-img-next">
                    <div class="swiper-wrapper">
                        @foreach($hotel->images as $image)

                        <div class="swiper-slide">
                            <img src="{{  asset('storage/uploads/hotel_images/' . $image->name )  }}" alt="image" class="rounded-4 col-12 h-full object-cover">
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

            </div>
        </div>

        <div class="hotelSingleGrid">
            <div>


                <div class="row justify-between items-end pt-40">
                    <div class="col-auto">
                        <div class="row x-gap-20 y-gap-20 items-center">
                            <div class="col-auto">
                                <h1 class="text-26 fw-600">{{$hotel->name}}</h1>
                            </div>

                            <div class="col-auto">
                                {!! $hotel->stars == 1 ? '<i class="icon-star text-10 text-yellow-1"></i>' : '' !!}
                                {!! $hotel->stars == 1 ? '<i class="icon-star text-10 text-yellow-1"></i><i class="icon-star text-10 text-yellow-1"></i>' : '' !!}
                                {!! $hotel->stars == 3 ? '<i class="icon-star text-10 text-yellow-1"></i><i class="icon-star text-10 text-yellow-1"></i><i class="icon-star text-10 text-yellow-1"></i>' : '' !!}
                                {!! $hotel->stars == 4 ? '<i class="icon-star text-10 text-yellow-1"></i><i class="icon-star text-10 text-yellow-1"></i><i class="icon-star text-10 text-yellow-1"></i><i class="icon-star text-10 text-yellow-1"></i>' : '' !!}
                                {!! $hotel->stars == 5 ? '<i class="icon-star text-10 text-yellow-1"></i><i class="icon-star text-10 text-yellow-1"></i><i class="icon-star text-10 text-yellow-1"></i><i class="icon-star text-10 text-yellow-1"></i><i class="icon-star text-10 text-yellow-2"></i>' : '' !!}
                            </div>
                        </div>

                        <div class="row x-gap-20 y-gap-20 items-center">
                            <div class="col-auto">
                                <div class="text-15 text-light-1">{!! $hotel->description !!}</div>
                            </div>


                        </div>
                    </div>


                </div>

                <div id="overview" class="row y-gap-40 pt-40">
                    <div class="col-12">
                        <h3 class="text-22 fw-500 pt-40 border-top-light">Property Info</h3>
                        <p class="text-dark-1 text-15 mt-20">
                            {!! $hotel->property_info !!}
                        </p>
                    </div>

                    <div class="col-12">
                        <h3 class="text-22 fw-500 pt-40 border-top-light">Main Amenities</h3>
                        <div class="row y-gap-10 pt-20">

                            {!! $hotel->main_amenities !!}

                        </div>
                    </div>

                    <div class="col-12">
                        <h3 class="text-22 fw-500 pt-40 border-top-light">About This Area</h3>
                        <div class="row y-gap-10 pt-20">

                            {!! $hotel->about_this_area !!}

                        </div>
                    </div>

                    <div class="col-12">
                        <h3 class="text-22 fw-500 pt-40 border-top-light">About This Property</h3>
                        <div class="row y-gap-10 pt-20">

                            {!! $hotel->about_this_property !!}

                        </div>
                    </div>

                    <div class="col-12">
                        <h3 class="text-22 fw-500 pt-40 border-top-light">At a Glance</h3>
                        <div class="row y-gap-10 pt-20">

                            {!! $hotel->at_a_glance !!}

                        </div>
                    </div>

                    <div class="col-12">
                        <h3 class="text-22 fw-500 pt-40 border-top-light">Property Amenities</h3>
                        <div class="row y-gap-10 pt-20">

                            {!! $hotel->property_amenities !!}

                        </div>
                    </div>

                    <div class="col-12">
                        <h3 class="text-22 fw-500 pt-40 border-top-light">Room Amenities</h3>
                        <div class="row y-gap-10 pt-20">

                            {!! $hotel->room_amenities !!}

                        </div>
                    </div>

                </div>
            </div>

         
        </div>
    </div>
</section>

<section class="pt-30">
    <div class="container">
        <div class="row y-gap-30">
            <div class="col-12">
                <div class="px-24 py-20 rounded-4 bg-green-1">
                    <div class="row x-gap-20 y-gap-20 items-center">
                        <div class="col-auto">
                            <div class="flex-center size-60 rounded-full bg-white">
                                <i class="icon-star text-yellow-1 text-30"></i>
                            </div>
                        </div>

                        <div class="col-auto">
                            <h4 class="text-18 lh-15 fw-500">This property is in high demand!</h4>
                            <div class="text-15 lh-15">7 travelers have booked today.</div>
                        </div>
                    </div>
                </div>
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

<section>
    <div class="container">
        <div class="row y-gap-30 justify-between">
            <div class="col-xl-3">
                <div class="row">
                    <div class="col-auto">
                        <h3 class="text-22 fw-500">Leave a Reply</h3>
                        <p class="text-15 text-dark-1 mt-5">Your email address will not be published.</p>
                    </div>
                </div>

                <div class="row y-gap-30 pt-30">

                    <div class="col-sm-6">
                        <div class="text-15 lh-1 fw-500">Location</div>
                        <div class="d-flex x-gap-5 items-center pt-10">

                            <div class="icon-star text-10 text-yellow-1"></div>

                            <div class="icon-star text-10 text-yellow-1"></div>

                            <div class="icon-star text-10 text-yellow-1"></div>

                            <div class="icon-star text-10 text-yellow-1"></div>

                            <div class="icon-star text-10 text-yellow-1"></div>

                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="text-15 lh-1 fw-500">Staff</div>
                        <div class="d-flex x-gap-5 items-center pt-10">

                            <div class="icon-star text-10 text-yellow-1"></div>

                            <div class="icon-star text-10 text-yellow-1"></div>

                            <div class="icon-star text-10 text-yellow-1"></div>

                            <div class="icon-star text-10 text-yellow-1"></div>

                            <div class="icon-star text-10 text-yellow-1"></div>

                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="text-15 lh-1 fw-500">Cleanliness</div>
                        <div class="d-flex x-gap-5 items-center pt-10">

                            <div class="icon-star text-10 text-yellow-1"></div>

                            <div class="icon-star text-10 text-yellow-1"></div>

                            <div class="icon-star text-10 text-yellow-1"></div>

                            <div class="icon-star text-10 text-yellow-1"></div>

                            <div class="icon-star text-10 text-yellow-1"></div>

                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="text-15 lh-1 fw-500">Value for money</div>
                        <div class="d-flex x-gap-5 items-center pt-10">

                            <div class="icon-star text-10 text-yellow-1"></div>

                            <div class="icon-star text-10 text-yellow-1"></div>

                            <div class="icon-star text-10 text-yellow-1"></div>

                            <div class="icon-star text-10 text-yellow-1"></div>

                            <div class="icon-star text-10 text-yellow-1"></div>

                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="text-15 lh-1 fw-500">Comfort</div>
                        <div class="d-flex x-gap-5 items-center pt-10">

                            <div class="icon-star text-10 text-yellow-1"></div>

                            <div class="icon-star text-10 text-yellow-1"></div>

                            <div class="icon-star text-10 text-yellow-1"></div>

                            <div class="icon-star text-10 text-yellow-1"></div>

                            <div class="icon-star text-10 text-yellow-1"></div>

                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="text-15 lh-1 fw-500">Facilities</div>
                        <div class="d-flex x-gap-5 items-center pt-10">

                            <div class="icon-star text-10 text-yellow-1"></div>

                            <div class="icon-star text-10 text-yellow-1"></div>

                            <div class="icon-star text-10 text-yellow-1"></div>

                            <div class="icon-star text-10 text-yellow-1"></div>

                            <div class="icon-star text-10 text-yellow-1"></div>

                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="text-15 lh-1 fw-500">Free WiFi</div>
                        <div class="d-flex x-gap-5 items-center pt-10">

                            <div class="icon-star text-10 text-yellow-1"></div>

                            <div class="icon-star text-10 text-yellow-1"></div>

                            <div class="icon-star text-10 text-yellow-1"></div>

                            <div class="icon-star text-10 text-yellow-1"></div>

                            <div class="icon-star text-10 text-yellow-1"></div>

                        </div>
                    </div>

                </div>
            </div>

            <div class="col-xl-8">
                <div class="row y-gap-30">
                    <div class="col-xl-6">

                        <div class="form-input ">
                            <input type="text" required>
                            <label class="lh-1 text-16 text-light-1">Text</label>
                        </div>

                    </div>
                    <div class="col-xl-6">

                        <div class="form-input ">
                            <input type="text" required>
                            <label class="lh-1 text-16 text-light-1">Email</label>
                        </div>

                    </div>
                    <div class="col-12">

                        <div class="form-input ">
                            <textarea required rows="6"></textarea>
                            <label class="lh-1 text-16 text-light-1">Write Your Comment</label>
                        </div>

                    </div>
                    <div class="col-auto">

                        <a href="#" class="button -md -dark-1 bg-blue-1 text-white">
                            Post Comment <div class="icon-arrow-top-right ml-15"></div>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pt-40">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="px-24 py-20 rounded-4 bg-light-2">
                    <div class="row x-gap-20 y-gap-20 items-center">
                        <div class="col-auto">
                            <div class="flex-center size-60 rounded-full bg-white">
                                <img src="/frontend/img/icons/health.svg" alt="icon">
                            </div>
                        </div>

                        <div class="col-auto">
                            <h4 class="text-18 lh-15 fw-500">Extra health & safety measures</h4>
                            <div class="text-15 lh-15">This property has taken extra health and hygiene measures to ensure that your safety is their priority</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container mt-40 mb-40">
    <div class="border-top-light"></div>
</div>




@endsection