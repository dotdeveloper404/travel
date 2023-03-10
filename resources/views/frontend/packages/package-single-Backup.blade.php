@extends('frontend.layouts.app')



@section('content')



<section class="pt-40 js-pin-container">

    <div class="container">

        <div class="row y-gap-30">

            <div class="col-lg-8">



                <div class="relative d-flex justify-center overflow-hidden js-section-slider" data-slider-cols="base-1" data-nav-prev="js-img-prev" data-nav-next="js-img-next">

                   

                    <div class="swiper-wrapper">



                        @foreach($package->images()->get() as $image)

                        <div class="swiper-slide">

                            <img src="{{ asset('storage/uploads/package_images/' . $image->name )  }}" alt="image" class="rounded-4 col-12 h-full object-cover">

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



                <!-- highlights start  -->

                <!-- <h3 class="text-22 fw-500 mt-30">

                    Highlights

                </h3>



                <ul class="mt-2">

                    <li><i class="icon-check text-purple-1 me-2"></i> Wander around the battlefields of Gallipoli</li>

                    <li><i class="icon-check text-purple-1 me-2"></i> See the impressive Pamukkale</li>

                    <li><i class="icon-check text-purple-1 me-2"></i> Visit the mystical Ephesus and Troy</li>

                    <li><i class="icon-check text-purple-1 me-2"></i> Explore the underground cities of Cappadocia</li>

                </ul> -->

                <!-- hight light end  -->



                <div class="border-top-light mt-40 mb-40"></div>





                <!-- tabs start  -->

                <div class="main-tabs">

                    <nav>

                        <div class="overview-tabs--">

                            <button class="tabs-btn text-13 uppercase active fw-700 show" id="tabs-hotels-btn">Hotels</button>

                            <button class="tabs-btn text-13 uppercase fw-700" id="tabs-transport-btn">Transport</button>

                        </div>

                    </nav>

                    <div class="overview-tab-content mt-15">

                        <div class="tabs-content relative overflow-hidden show" id="tab-hotels-content">

                            <h3 class="text-dark-1"><i class="icon-home"></i> Hotels</h3>

                            <div class="hotels">

                                <div class="accordino--cutom mt-20">



                                    @foreach($package->hotels as $hotel)



                                    <button class="custom-accordion-- bg-light-2 acc-border-0">

                                        <div class="row align-items-center">

                                            <div class="col acc"><i class="icon-plus text-dark-1 me-2"></i>

                                                <strong><a target="_blank" href="{{ route('hotels.show',$hotel->slug)}}">{{$hotel->name}}</a> {!! $hotel->stars == 1 ? '<i class="icon-star text-10 text-yellow-2"></i>' : '' !!}

                                                    {!! $hotel->stars == 2 ? '<i class="icon-star text-10 text-yellow-2"></i><i class="icon-star text-10 text-yellow-2"></i>' : '' !!}

                                                    {!! $hotel->stars == 3 ? '<i class="icon-star text-10 text-yellow-2"></i><i class="icon-star text-10 text-yellow-2"></i><i class="icon-star text-10 text-yellow-2"></i>' : '' !!}

                                                    {!! $hotel->stars == 4 ? '<i class="icon-star text-10 text-yellow-2"></i><i class="icon-star text-10 text-yellow-2"></i><i class="icon-star text-10 text-yellow-2"></i><i class="icon-star text-10 text-yellow-2"></i>' : '' !!}

                                                    {!! $hotel->stars == 5 ? '<i class="icon-star text-10 text-yellow-2"></i><i class="icon-star text-10 text-yellow-2"></i><i class="icon-star text-10 text-yellow-2"></i><i class="icon-star text-10 text-yellow-2"></i><i class="icon-star text-10 text-yellow-2"></i>' : '' !!}

                                                </strong>



                                            </div>

                                        </div>

                                    </button>

                                    <div class="custom-panel--">





                                        <div class="row py-3">

                                            <div class="col-4">



                                                <div>

                                                    <h5>Main Amenities</h5>

                                                </div>



                                                {!! $hotel->main_amenities !!}



                                                <div>

                                                    <h5>About</h5>

                                                </div>



                                                {!! $hotel->description !!}



                                            </div>

                                            @if($hotel->images()->count() > 0)

                                            <div class="col-8">



                                                <div class="relative overflow-hidden">

                                                    <div class="swiper transportSwiper">

                                                        <div class="swiper-wrapper">



                                                            @foreach($hotel->images()->get() as $image)



                                                            <div class="swiper-slide">

                                                                <img class="img" src="{{ asset('storage/uploads/hotel_images/' . $image->name ) }}" alt="">

                                                            </div>



                                                            @endforeach





                                                        </div>

                                                    </div>

                                                </div>



                                            </div>

                                            @endif()

                                        </div>



                                    </div>



                                    @endforeach





                                </div>

                            </div>



                        </div>

                        <div class="tabs-content relative overflow-hidden" id="tab-transport-content">

                            <h3 class="text-dark-1"><i class="icon-car"></i> Transport</h3>

                            <div class="transport mt-10">



                                @foreach($package->transports as $transport)

                                <h5 class="mt-15">{{$transport->company}}</h5>



                                @if($transport->images()->count() > 0 )

                                <div class="swiper transportSwiper mt-3">

                                    <div class="swiper-wrapper">

                                        @foreach($transport->images()->get() as $image)



                                        <div class="swiper-slide">

                                            <img class="img" src="{{ asset('storage/uploads/transport_images/' . $image->name ) }}" alt="">

                                        </div>



                                        @endforeach

                                    </div>

                                </div>

                                @endif



                                @endforeach





                            </div>



                        </div>

                    </div>

                </div>

                <!-- tabs end -->



                <div class="border-top-light mt-40 mb-40"></div>



                <div class="row x-gap-40 y-gap-40">

                    <div class="col-12">

                        <h3 class="text-22 fw-500">Overview</h3>



                        <p class="text-dark-1 text-15 mt-20">

                            {!! $package->description !!}

                        </p>



                    </div>







                </div>



                <!-- itinerary start  -->

                <h3 class="text-22 fw-600 mt-30">

                    Itinerary

                </h3>

                <!-- 

                <p class="mt-3">Start and end in Istanbul! With the In-depth Cultural tour Turkey Classics Tour, you

                    have a 7 days

                    tour package taking you through Istanbul, Turkey and 10 other destinations in Turkey. Turkey

                    Classics Tour includes accommodation in a hotel as well as an expert guide, meals, transport and

                    more.</p> -->



                @if($itenaries != null)



                <div class="accordino--cutom mt-20">



                    <div class="accordion -simple row y-gap-20 js-accordion">



                        @foreach($itenaries as $itenary )

                        <div class="col-12">

                            <div class="accordion__item px-5 py-5 border-bottom-light rounded-4">

                                <div class="accordion__button d-flex items-center">

                                    <div class="accordion__icon size-40 flex-center bg-light-2 rounded-full mr-20">

                                        <i class="icon-check text-purple-1"></i>

                                        <i class="icon-minus"></i>

                                    </div>



                                    <div class="button text-dark-1 fw-600">{{$itenary['day']}}</div>

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



                <!-- itinerary end  -->



                <!-- whats included start  -->

                <h3 class="text-22 fw-500 mt-30">

                    What's Included

                </h3>



                {!! $package->features !!}



                <!-- <div class="accordino--cutom mt-20">

                    <button class="custom-accordion--">

                        <div class="row align-items-center">

                            <div class="col acc"><i class="icon-check text-dark-1 me-2"></i>

                                <strong>Accommodation</strong>

                            </div>

                        </div>

                    </button>

                    <div class="custom-panel--">

                        <ul>

                            <li>Total - 6 nights in Special Class, Boutique, 4 star &amp; Boutique Cave twin share

                                accommodation.</li>

                            <li> &nbsp;1 night - Special Class - Çanakkale - MD Barbaros Hotel</li>

                            <li> &nbsp;2 nights - Boutique - Kuşadası - Ilayda Avantgarde Hotel</li>

                            <li> &nbsp;1 night - 4 star - Pamukkale - Adem Pira Hotel</li>

                            <li> &nbsp;2 nights - Boutique Cave - Cappadocia - Gamirasu Hotel</li>

                            <li>Single Rooms are available with payment of the 'Single Supplement'</li>

                        </ul>

                    </div>



                    <button class="custom-accordion--">

                        <div class="row align-items-center">

                            <div class="col"><i class="icon-check text-dark-1 me-2"></i>

                                <strong>Guide</strong>

                            </div>

                        </div>

                    </button>

                    <div class="custom-panel--">

                        <p>Professional English-speaking tour guide for the duration of the tour</p>

                    </div>



                    <button class="custom-accordion--">

                        <div class="row align-items-center">

                            <div class="col"><i class="icon-check text-dark-1 me-2"></i>

                                <strong>Additional Services</strong>

                            </div>

                        </div>

                    </button>

                    <div class="custom-panel--">

                        <ul>

                            <li>Car ferry fees between Canakkale and Eceabat</li>

                            <li>Tips except Driver and Guide</li>

                            <li>Entrance fees</li>

                            <li>Highlights :-</li>

                            <li>Gallipoli - Battlefields Tour, ANZAC Cove, Lone Pine - Australian Memorial, Johnson's

                                Jolly - original tunnels, The Nek - original trenches, Chunuk Bair - New Zealand

                                Memorial</li>

                            <li>Troy - UNESCO Heritage site</li>

                            <li>Pergamon - UNESCO Heritage site</li>

                            <li>Site of the Temple of Artemis</li>

                            <li>Ephesus - UNESCO Heritage site</li>

                            <li>Sirince - Village</li>

                            <li>Pamukkale - Calcium Travertines - UNESCO Heritage site, Hierapolis</li>

                            <li>Konya - Mevlana Museum</li>

                            <li>Sultanhani Caravansary</li>

                            <li>Göreme - UNESCO Heritage site, Open Air Museum</li>

                            <li>Cappadocia - Kaymakli - Underground City</li>

                            <li>Ankara - Atatürk's Mausoleum</li>

                        </ul>

                    </div>

                </div> -->



                <!-- whats included end  -->





            </div>



            <div class="col-lg-4">



                <!-- turkey classic tour start  -->

                <div class="tour-wrapper mb-3">

                    <h2 class="text-30 fw-600 mb-3">{{ $package->package_name}} ({{ str_replace('_',' ' , strtoupper($package->product_type)) }})</h2>

                    <p class="mb-2"><strong> <img style="width:35px;" src="{{ asset('/frontend/img/sun.png') }}" /> {{$package->days}} Days </strong></p>

                    <p class="mb-2"><strong> <img style="width:35px;" src="{{ asset('/frontend/img/night.png') }}" /> {{$package->nights}} Nights </strong></p>

                    <p class="mb-2">Start and end in <strong>{{$package->city}}</strong></p>

                    <p class="mb-2">Seasonality <strong>{{$package->seasonality}}</strong></p>

                    <!-- <p class="mb-2"><strong>7 days • 4.7</strong> <i class="icon-star text-yellow-1"></i> (69)</p>

                    <p class="mb-2">Start and end in <strong>Istanbul</strong></p>

                    <a href="" class="bg-light-2 py-1 px-2 rounded-4 text-dark">In-depth Cultural</a>

                    <a href="" class="bg-light-2 py-1 px-2 rounded-4 text-dark">Family</a>

                    <a href="" class="bg-light-2 py-1 px-2 rounded-4 text-dark">Private</a>

                    <a href="" class="bg-light-2 py-1 px-2 rounded-4 text-dark">Group</a>

                    <a href="" class="bg-light-2 py-1 px-2 rounded-4 text-dark">Fully Guided</a>

                    <a href="" class="bg-light-2 py-1 px-2 rounded-4 text-dark">Coach / Bus</a>

                    <a href="" class="bg-light-2 py-1 px-2 rounded-4 text-dark">Historical</a>

                    <a href="" class="bg-light-2 py-1 px-2 rounded-4 text-dark">Christmas & New Year</a> -->

                    <div class="tour-properties mt-3">

                        <!-- <div class="row">

                            <div class="col-md-6 mb-2">

                                <h3 class="text-18 fw-600">Tour Operator:</h3>

                                <p>Fez Travel</p>

                            </div>

                            <div class="col-md-6 mb-2">

                                <h3 class="text-18 fw-600">Max group size:</h3>

                                <p>20</p>

                            </div>

                            <div class="col-md-6 mb-2">

                                <h3 class="text-18 fw-600">Age range:</h3>

                                <p>12 to 99</p>

                            </div>

                            <div class="col-md-6 mb-2">

                                <h3 class="text-18 fw-600">Operated in:</h3>

                                <p>English</p>

                            </div>

                            <div class="col-md-6 mb-2">

                                <h3 class="text-18 fw-600">Private available:</h3>

                                <a href="#">Request as Private</a>

                            </div>

                            <div class="col-md-6 mb-2">

                                <h3 class="text-18 fw-600">Tour id:</h3>

                                <p>84919</p>

                            </div>

                        </div> -->

                    </div>

                </div>

                <!-- turkey classic tour end  -->



                <div class="d-flex justify-end js-pin-content">

                    <div class="w-360 lg:w-full d-flex flex-column items-center">

                        <div class="px-30 py-30 rounded-4 border-light bg-white shadow-4">

                            <div class="text-14 text-light-1">



                                @if(Session::has('message'))

                                <p class="alert {{ Session::get('alert-class', 'alert-info') }}">

                                    {{ Session::get('message') }}

                                </p>

                                @endif

                                Package Price<span class="text-20 fw-500 text-dark-1 ml-5">$

                                    {{ $package->net_amount }}</span>

                            </div>

                            {!! Form::open(['route'=>['packages.booking.store',$package->id] ]) !!}



                            <div class="row y-gap-20 pt-30">

                                <div class="col-12">



                                    <div class="form-group">

                                        <label>Name</label>

                                        <input type="text" required name="name" value="{{ old('name') }}" class="px-20 py-10  border-light rounded-4" placeholder="Enter your name" />

                                        @error('name')

                                        <div class="invalid-feedback">

                                            {{ $message }}

                                        </div>

                                        @enderror

                                    </div>



                                    <div class="form-group">

                                        <label>Email</label>

                                        <input type="email" required name="email" value="{{ old('email') }}" class="px-20 py-10  border-light rounded-4" placeholder="Enter your email" />

                                        @error('email')

                                        <div class="invalid-feedback">

                                            {{ $message }}

                                        </div>

                                        @enderror

                                    </div>



                                    <div class="form-group">

                                        <label>Cell</label>

                                        <input type="text" required name="cell" value="{{ old('cell') }}" class="px-20 py-10  border-light rounded-4" placeholder="Enter your cell number" />

                                        @error('cell')

                                        <div class="invalid-feedback">

                                            {{ $message }}

                                        </div>

                                        @enderror

                                    </div>



                                    <div class="form-group">

                                        <label>Phone</label>

                                        <input type="text" required name="phone" value="{{ old('phone') }}" class="px-20 py-10  border-light rounded-4" placeholder="Enter your phone number" />

                                        @error('phone')

                                        <div class="invalid-feedback">

                                            {{ $message }}

                                        </div>

                                        @enderror

                                    </div>



                                    <div class="form-group">

                                        <label>Departure City</label>

                                        <input type="text" required name="departure_city" value="{{ old('departure_city') }}" class="px-20 py-10  border-light rounded-4" placeholder="Enter your departure city" />

                                        @error('departure_city')

                                        <div class="invalid-feedback">

                                            {{ $message }}

                                        </div>

                                        @enderror

                                    </div>



                                    <div class="form-group">

                                        <label>Departure Date</label>

                                        <input type="date" required name="departure_date" value="{{ old('departure_date') }}" class="px-20 py-10  border-light rounded-4" placeholder="Enter your departure date" />

                                        @error('departure_date')

                                        <div class="invalid-feedback">

                                            {{ $message }}

                                        </div>

                                        @enderror

                                    </div>



                                    <div class="form-group">

                                        <label>Contact Preference</label>

                                        <input type="text" name="contact_preference" value="{{ old('contact_preference') }}" class="px-20 py-10  border-light rounded-4" placeholder="Enter your contact preference" />

                                    </div>



                                    <div class="form-group">

                                        <label>Best time to call</label>

                                        <input type="text" name="best_time_to_call " value="{{ old('best_time_to_call') }}" class="px-20 py-10  border-light rounded-4" />

                                    </div>



                                    <div class="form-group">

                                        <label>Comments</label>

                                        <textarea name="comment" class="px-20 py-10  border-light rounded-4">{{ old('comment') }}</textarea>

                                    </div>



                                </div>



                                <div class="col-12">

                                    <h4 class="text-15 fw-500 ls-2 lh-16">Number of travelers</h4>

                                    <div class="searchMenu-guests px-20 py-10 border-light rounded-4 js-form-dd js-form-counters">



                                        <div data-x-dd-click="searchMenu-guests">





                                            <div class="text-15 text-light-1 ls-2 lh-16">



                                                <div class="form-group">

                                                    <label>Adults</label>

                                                    <input type="number" name="adults" class="px-20 py-10  border-light rounded-4" />

                                                    @error('adults')

                                                    <div class="invalid-feedback">

                                                        {{ $message }}

                                                    </div>

                                                    @enderror

                                                </div>



                                                <div class="form-group">

                                                    <label>Children</label>

                                                    <input type="number" name="child" class="px-20 py-10  border-light rounded-4" />

                                                </div>



                                                <div class="form-group">

                                                    <label>Infants</label>

                                                    <input type="number" name="infants" class="px-20 py-10  border-light rounded-4" />

                                                </div>



                                            </div>

                                        </div>







                                    </div>



                                </div>



                                <div class="col-12">

                                    <input type="submit" value="BOOK NOW" class="button -dark-1 py-15 px-35 h-60 col-12 rounded-4 bg-blue-1 text-white" />

                                </div>

                            </div>

                            {!! Form::close() !!}



                            <div class="d-flex items-center pt-20">

                                <div class="size-40 flex-center bg-light-2 rounded-full">

                                    <i class="icon-heart text-16 text-green-2"></i>

                                </div>

                                <div class="text-14 lh-16 ml-10">94% of travelers recommend this experience</div>

                            </div>

                        </div>



                        <div class="px-30">

                            <div class="text-14 text-light-1 mt-30">Not sure? You can cancel this reservation up to 24

                                hours in advance for a full refund.</div>

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



<section>

    <div class="container">

        <h3 class="text-22 fw-500 mb-20">Package Location</h3>



        <div class="row y-gap-30">



            <div class="col-lg-12">

                {!! $package->location_map !!}

            </div>

        </div>

    </div>

</section>



<div class="container mt-40 mb-40">

    <div class="border-top-light"></div>

</div>



<!-- FAQs start  -->



<section>

    <div class="container">

        <div class="row y-gap-20">

            <div class="col-lg-4">

                <h2 class="text-22 fw-500">Frequently Asked Questions<br> {{ $package->name}}</h2>

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





<div class="container">

    <div class="mt-50 border-top-light"></div>

</div>



<section class="layout-pt-lg layout-pb-lg">

    <div class="container">

        <div class="row justify-between items-end">

            <div class="col-auto">

                <div class="sectionTitle -md">

                    <h2 class="sectionTitle__title">Similar Experiences</h2>

                    <p class=" sectionTitle__text mt-5 sm:mt-0">Interdum et malesuada fames ac ante ipsum</p>

                </div>

            </div>



            <div class="col-auto">



                <a href="#" class="button h-50 px-24 -blue-1 bg-blue-1-05 text-blue-1">

                    See All <div class="icon-arrow-top-right ml-15"></div>

                </a>



            </div>

        </div>



        <div class="row y-gap-30 pt-40 sm:pt-20">



            <div class="col-xl-3 col-lg-3 col-sm-6">



                <a href="tour-single.html" class="tourCard -type-1 rounded-4 ">

                    <div class="tourCard__image">



                        <div class="cardImage ratio ratio-1:1">

                            <div class="cardImage__content">



                                <img class="rounded-4 col-12 js-lazy" src="#" data-src="{{asset('frontend/img/tours/1.png')}}" alt="image">





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



            <div class="col-xl-3 col-lg-3 col-sm-6">



                <a href="tour-single.html" class="tourCard -type-1 rounded-4 ">

                    <div class="tourCard__image">



                        <div class="cardImage ratio ratio-1:1">

                            <div class="cardImage__content">





                                <div class="cardImage-slider rounded-4 overflow-hidden js-cardImage-slider">

                                    <div class="swiper-wrapper">



                                        <div class="swiper-slide">

                                            <img class="col-12 js-lazy" src="#" data-src="{{asset('frontend/img/tours/2.png')}}" alt="image">

                                        </div>



                                        <div class="swiper-slide">

                                            <img class="col-12 js-lazy" src="#" data-src="{{asset('frontend/img/tours/1.png')}}" alt="image">

                                        </div>



                                        <div class="swiper-slide">

                                            <img class="col-12 js-lazy" src="#" data-src="{{asset('frontend/img/tours/3.png')}}" alt="image">

                                        </div>



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



                            <div class="cardImage__wishlist">

                                <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">

                                    <i class="icon-heart text-12"></i>

                                </button>

                            </div>





                        </div>



                    </div>



                    <div class="tourCard__content mt-10">

                        <div class="d-flex items-center lh-14 mb-5">

                            <div class="text-14 text-light-1">9+ hours</div>

                            <div class="size-3 bg-light-1 rounded-full ml-10 mr-10"></div>

                            <div class="text-14 text-light-1">Attractions &amp; Museums</div>

                        </div>



                        <h4 class="tourCard__title text-dark-1 text-18 lh-16 fw-500">

                            <span>Westminster Walking Tour & Westminster Abbey Entry</span>

                        </h4>



                        <p class="text-light-1 lh-14 text-14 mt-5">Ciutat Vella, Barcelona</p>



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



            <div class="col-xl-3 col-lg-3 col-sm-6">



                <a href="tour-single.html" class="tourCard -type-1 rounded-4 ">

                    <div class="tourCard__image">



                        <div class="cardImage ratio ratio-1:1">

                            <div class="cardImage__content">



                                <img class="rounded-4 col-12 js-lazy" src="#" data-src="{{asset('frontend/img/tours/3.png')}}" alt="image">





                            </div>



                            <div class="cardImage__wishlist">

                                <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">

                                    <i class="icon-heart text-12"></i>

                                </button>

                            </div>





                            <div class="cardImage__leftBadge">

                                <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-blue-1 text-white">

                                    Best Seller

                                </div>

                            </div>



                        </div>



                    </div>



                    <div class="tourCard__content mt-10">

                        <div class="d-flex items-center lh-14 mb-5">

                            <div class="text-14 text-light-1">40–55 minutes</div>

                            <div class="size-3 bg-light-1 rounded-full ml-10 mr-10"></div>

                            <div class="text-14 text-light-1">Private and Luxury</div>

                        </div>



                        <h4 class="tourCard__title text-dark-1 text-18 lh-16 fw-500">

                            <span>High-Speed Thames River RIB Cruise in London</span>

                        </h4>



                        <p class="text-light-1 lh-14 text-14 mt-5">Manhattan, New York</p>



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



            <div class="col-xl-3 col-lg-3 col-sm-6">



                <a href="tour-single.html" class="tourCard -type-1 rounded-4 ">

                    <div class="tourCard__image">



                        <div class="cardImage ratio ratio-1:1">

                            <div class="cardImage__content">



                                <img class="rounded-4 col-12 js-lazy" src="#" data-src="{{asset('frontend/img/tours/4.png')}}" alt="image">





                            </div>



                            <div class="cardImage__wishlist">

                                <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">

                                    <i class="icon-heart text-12"></i>

                                </button>

                            </div>





                            <div class="cardImage__leftBadge">

                                <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-yellow-1 text-dark-1">

                                    Top Rated

                                </div>

                            </div>



                        </div>



                    </div>



                    <div class="tourCard__content mt-10">

                        <div class="d-flex items-center lh-14 mb-5">

                            <div class="text-14 text-light-1">94+ days</div>

                            <div class="size-3 bg-light-1 rounded-full ml-10 mr-10"></div>

                            <div class="text-14 text-light-1">Bus Tours</div>

                        </div>



                        <h4 class="tourCard__title text-dark-1 text-18 lh-16 fw-500">

                            <span>Edinburgh Darkside Walking Tour: Mysteries, Murder and Legends</span>

                        </h4>



                        <p class="text-light-1 lh-14 text-14 mt-5">Vaticano Prati, Rome</p>



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

</section>



@endsection