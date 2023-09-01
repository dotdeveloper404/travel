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

@push('css')
    <style>
        .destination_content h2,
        p {
            color: #eeee;
        }

        .packageSectionlisting {
            opacity: 0.8;
        }

        .sectionTitle__text {
            font-size: 22px;
        }
    </style>
@endpush()


@section('content')
    <div class="top__destination">

        <section class="pt-40 pb-40 bg-light-2 packageSectionlisting flex-center">

            <div class="container">

                <div class="row ">

                    <div class="col-md-12 text-center destination_content">


                        <h2 class="sectionTitle__title">Destinations</h2>



                        <p class="sectionTitle__text mt-5 sm:mt-0">“Explore the most travelled destinations in Turkey
                            brimming with beauty, culture, and wonder
                        </p>


                    </div>
                </div>

            </div>

        </section>



        <div class="pt-40">
            <div class="container">
                <div class="row justify-content-center">

                    @foreach ($places as $place)
                        <div class="col-4 mb-3">

                            <div class="shadow-2 rounded-8">
                                <div class="row x-gap-20 y-gap-20 p-2">
                                    <div class="col-md-12">

                                        <div style="width:400px;"  class="cardImage ratio ratio-1:1 w-250 md:w-1/1 h-full rounded-8">
                                            <div class="cardImage__content" id="imgbx">

                                                <img class="rounded-8 col-12 js-lazy"
                                                    src="{{ $place->image == '' ? asset('frontend/img/ilinkturkey.png') : '/storage/uploads/city_image/' . $place->image }}"
                                                    data-src="{{ $place->image == '' ? asset('frontend/img/ilinkturkey.png') :  '/storage/uploads/city_image/' . $place->image }}"
                                                    alt="image">

                                            </div>

                                        </div>

                                    </div>

                                    <div class="col-md">
                                        <div class="row">
                                            <div class="col">

                                                <h3 class="text-20 lh-16 fw-800 text-center" style="color:tomato">
                                                    <a href="/destinations/city/{{$place->slug}}">
                                                        {{ ucfirst($place->name) }}
                                                    </a>
                                                </h3>

                                            </div>
                                            <div class="">

                                                <a href="/destinations/city/{{$place->slug}}"
                                                    class="button -md -dark-1 bg-blue-1 text-white mt-30">
                                                    View Places <div class="icon-arrow-top-right ml-15"></div>
                                                </a>


                                            </div>
                                        </div>



                                    </div>


                                </div>
                            </div>

                        </div>
                    @endforeach()




                </div>
            </div>




        </div>



    </div>
@endsection
