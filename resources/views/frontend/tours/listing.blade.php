@extends('frontend.layouts.app')


@push('css')
    <style>
        .destinationBox {
            height: 98px;
            width: 340px;
            padding-left: 15px;
        }

        .container_overlay {
            overflow: overlay;
        }

        .tag_selector {

            color: #009688;

            padding: 2px;

            margin: 0px 1px 0px 0px;
            
            
            text-transform: capitalize;
            
        }

        .accordion {
            width: 90%;
            max-width: 1000px;
            margin: 2rem auto;
        }

        .accordion-item {
            background-color: #fff;
            color: #111;
            margin: 1rem 0;
            border-radius: 0.5rem;
            box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.25);
        }

        .accordion-item-header {
            padding: 0.5rem 3rem 0.5rem 1rem;
            min-height: 3.5rem;
            line-height: 1.25rem;
            font-weight: bold;
            display: flex;
            align-items: center;
            position: relative;
            cursor: pointer;
        }

        .accordion-item-header::after {
            content: "\002B";
            font-size: 2rem;
            position: absolute;
            right: 1rem;
        }

        .accordion-item-header.active::after {
            content: "\2212";
        }

        .accordion-item-body {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.2s ease-out;
        }

        .accordion-item-body-content {
            padding: 1rem;
            line-height: 1.5rem;
            border-top: 1px solid;
            border-image: linear-gradient(to right, transparent, #34495e, transparent) 1;
        }

        .sidebar-checkbox-city {
            max-height: 150px;
            overflow-x: hidden;
            overflow-y: auto;
        }
    </style>
@endpush()


@if ($metas != '')
    @section('title')
        {{ $metas->meta_title }}
    @endsection
@else
    @section('title')
        Affordable and best turkey Custom Tour tours
    @endsection
@endif

@if ($metas != '')
    @section('description')
        {{ $metas->meta_description }}
    @endsection
@else
    @section('description')
        Discover Turkey's rich cultural heritage and natural beauty with our custom tour tours. Explore our diverse range
        of tour tours, covering destinations like Istanbul, Cappadocia, Ephesus, and more.
    @endsection
@endif

@if ($metas != '')
    @section('keywords')
        {{ $metas->meta_title }}
    @endsection
@else
    @section('keywords')
        Affordable and best turkey Custom Tour tours
    @endsection
@endif


@section('content')
    <section class="pt-40 pb-40 bg-light-2 tourSectionlisting flex-center">

        <div class="container">

            <div class="row">

                <div class="col-12">

                    <div class="text-center">

                        <h1 class="text-30 text-white fw-600">Tours</h1>

                    </div>

                </div>

            </div>

        </div>

    </section>



    <section class="layout-pt-md layout-pb-lg">

        <div class="container">

            <div class="row y-gap-30">

                <div class="col-xl-3 col-lg-4 lg:d-none">

                    <form name="searchForm" method="GET" action="{{ route('tours.index') }}">

                        <aside class="sidebar shadow-2 p-3 rounded-8 y-gap-40">

                            <div class="sidebar__item -no-border">

                                <h5 class="text-18 fw-500 mb-10">Country</h5>

                                <div class="sidebar-checkbox">



                                    <div class="row y-gap-10 items-center justify-between">

                                        <div class="col-12">

                                            @foreach ($countries as $country)
                                                <div class="d-flex items-center ">

                                                    <div class="form-checkbox ">

                                                        <input type="checkbox" class="dd_country" name="country"
                                                            {{ request()->get('country') == $country->id ? 'checked' : '' }}
                                                            value="{{ $country->id }}">

                                                        <div class="form-checkbox__mark">

                                                            <div class="form-checkbox__icon icon-check"></div>

                                                        </div>

                                                    </div>



                                                    <div class="text-15 ml-10">{{ ucfirst($country->name) }}</div>



                                                </div>
                                            @endforeach

                                            <!--<select name="country" class="form-control dd_country">-->

                                            <!--    <option value="">Select </option>-->

                                            <!--    @foreach ($countries as $country)
    -->

                                            <!--    <option {{ request()->get('country') == $country->id ? 'selected' : '' }} value="{{ $country->id }}">{{ $country->name }}</option>-->

                                            <!--
    @endforeach-->

                                            <!--</select>-->

                                        </div>

                                    </div>



                                </div>

                            </div>



                            <div class="sidebar__item">

                                <h5 class="text-18 fw-500 mb-10">City</h5>

                                <div class="sidebar-checkbox-city">



                                    @foreach ($cities as $city)
                                        <!--<div class="all_cities row y-gap-10 items-center justify-between country_{{ $city->country_id }}  {{ $city->country_id == request()->get('country') ? 'show_city' : 'hide_city' }} ">-->

                                        <div
                                            class="all_cities row y-gap-10 items-center justify-between country_{{ $city->country_id }}">



                                            <div class="col-auto">



                                                <div class="d-flex items-center ">

                                                    <div class="form-checkbox ">

                                                        <input type="checkbox" name="cities[]"
                                                            {{ in_array($city->id, $request_cities) ? 'checked' : '' }}
                                                            value="{{ $city->id }}">

                                                        <div class="form-checkbox__mark">

                                                            <div class="form-checkbox__icon icon-check"></div>

                                                        </div>

                                                    </div>



                                                    <div class="text-15 ml-10">{{ ucfirst($city->name) }}</div>



                                                </div>



                                            </div>



                                            <div class="col-auto">

                                            </div>

                                        </div>
                                    @endforeach







                                </div>

                            </div>



                            <div class="sidebar__item -no-border">

                                <h5 class="text-18 fw-500 mb-10">Type</h5>

                                <div class="sidebar-checkbox">



                                    <div class="row y-gap-10 items-center justify-between">

                                        <div class="col-12">

                                            <select name="group_type" class="form-control group_type">

                                                <option value="">Select </option>

                                                <option {{ request()->get('group_type') == 'private' ? 'selected' : '' }}
                                                    value="Private">Private</option>

                                                <option {{ request()->get('group_type') == 'group' ? 'selected' : '' }}
                                                    value="Group">Group</option>

                                            </select>

                                        </div>

                                    </div>



                                </div>

                            </div>





                            <div class="sidebar__item">

                                <h5 class="text-18 fw-500 mb-10">Category</h5>

                                <div class="sidebar-checkbox">



                                    @foreach ($tourType as $key => $type)
                                        <div class="row y-gap-10 items-center justify-between">

                                            <div class="col-auto">



                                                <div class="d-flex items-center">

                                                    <div class="form-checkbox ">

                                                        <input type="checkbox" name="tour_type[]"
                                                            {{ request()->get('tour_type') == $key ? 'checked' : '' }}
                                                            value="{{ $type }}">

                                                        <div class="form-checkbox__mark">

                                                            <div class="form-checkbox__icon icon-check"></div>

                                                        </div>

                                                    </div>



                                                    <div class="text-15 ml-10">{{ str_replace('_', ' ', $type) }}</div>



                                                </div>



                                            </div>



                                            <div class="col-auto">

                                            </div>

                                        </div>
                                    @endforeach







                                </div>

                            </div>





                            <div class="sidebar__item">

                                <h5 class="text-18 fw-500 mb-10">Duration</h5>

                                <div class="sidebar-checkbox">



                                    @foreach ($duration as $key => $value)
                                        <div class="row y-gap-10 items-center justify-between">

                                            <div class="col-auto">



                                                <div class="d-flex items-center">

                                                    <div class="form-checkbox ">

                                                        <input type="checkbox" name="duration[]"
                                                            {{ request()->get('duration') == $key ? 'checked' : '' }}
                                                            value="{{ $value }}">


                                                        <div class="form-checkbox__mark">

                                                            <div class="form-checkbox__icon icon-check"></div>

                                                        </div>

                                                    </div>



                                                    <div class="text-15 ml-10">{{ str_replace('_', ' ', $key) }}</div>



                                                </div>



                                            </div>



                                        </div>
                                    @endforeach



                                </div>

                            </div>





                            <div class="sidebar__item">

                                <h5 class="text-18 fw-500 mb-10">Special</h5>

                                <div class="sidebar-checkbox">



                                    <div class="row y-gap-10 items-center justify-between">

                                        <div class="col-auto">



                                            <div class="d-flex items-center">

                                                <div class="form-checkbox ">

                                                    <input type="checkbox" name="deals_and_discount">

                                                    <div class="form-checkbox__mark">

                                                        <div class="form-checkbox__icon icon-check"></div>

                                                    </div>

                                                </div>



                                                <div class="text-15 ml-10">Deals & Discount</div>



                                            </div>



                                        </div>



                                        <div class="col-auto">

                                        </div>

                                    </div>



                                    <div class="row y-gap-10 items-center justify-between">

                                        <div class="col-auto">



                                            <div class="d-flex items-center">

                                                <div class="form-checkbox ">

                                                    <input type="checkbox" name="free_cancelation">

                                                    <div class="form-checkbox__mark">

                                                        <div class="form-checkbox__icon icon-check"></div>

                                                    </div>

                                                </div>



                                                <div class="text-15 ml-10">Free Cancelation</div>



                                            </div>



                                        </div>



                                        <div class="col-auto">

                                        </div>

                                    </div>



                                </div>

                            </div>



                            <div class="sidebar__item">

                                <h5 class="text-18 fw-500 mb-10">Languages</h5>

                                <div class="sidebar-checkbox">



                                    @foreach ($languages as $key => $type)
                                        <div class="row y-gap-10 items-center justify-between">

                                            <div class="col-auto">



                                                <div class="d-flex items-center">

                                                    <div class="form-checkbox ">

                                                        <input type="checkbox" name="language[]"
                                                            {{ request()->get('language') == $key ? 'checked' : '' }}
                                                            value="{{ $type }}">

                                                        <div class="form-checkbox__mark">

                                                            <div class="form-checkbox__icon icon-check"></div>

                                                        </div>

                                                    </div>



                                                    <div class="text-15 ml-10">{{ str_replace('_', ' ', $type) }}</div>



                                                </div>



                                            </div>



                                            <div class="col-auto">

                                            </div>

                                        </div>
                                    @endforeach



                                </div>

                            </div>



                            <div class="sidebar__item pb-30">

                                <h5 class="text-18 fw-500 mb-10">Price</h5>

                                <div class="row x-gap-10 y-gap-30">

                                    <div class="col-12">

                                        <div class="js-price-rangeSlider">

                                            <div class="text-14 fw-500"></div>



                                            <div class="d-flex justify-between mb-20">

                                                <div class="text-15 text-dark-1">

                                                    <input style="display:none;" value="0" type="text"
                                                        name="p1" class="js-lower-input">

                                                    <input style="display:none;" value="0" type="text"
                                                        name="p2" class="js-upper-input">

                                                    <span>$</span> <span class="js-lower"></span>

                                                    -

                                                    <span>$</span> <span class="js-upper"></span>

                                                </div>

                                            </div>



                                            <div class="px-5">

                                                <div class="js-slider"></div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>



                            <input type="submit" class="button -md -dark-1 bg-blue-1 text-white mt-20 " value="Search">



                        </aside>

                    </form>

                </div>



                <div class="col-xl-9 col-lg-8">

                    <div class="row y-gap-10 items-center justify-between">

                        <div class="col-auto">

                            <!-- <div class="text-18"><span class="fw-500">3,269 properties</span> in Europe</div> -->

                        </div>



                        <!-- <div class="col-auto">

                                        <div class="row x-gap-20 y-gap-20">

                                            <div class="col-auto">

                                                <button class="button -blue-1 h-40 px-20 rounded-100 bg-blue-1-05 text-15 text-blue-1">

                                                    <i class="icon-up-down text-14 mr-10"></i>

                                                    Sort

                                                </button>

                                            </div>



                                            <div class="col-auto d-none lg:d-block">

                                                <button data-x-click="filterPopup" class="button -blue-1 h-40 px-20 rounded-100 bg-blue-1-05 text-15 text-blue-1">

                                                    <i class="icon-up-down text-14 mr-10"></i>

                                                    Filter

                                                </button>

                                            </div>

                                        </div>

                                    </div> -->

                    </div>

                    <div class="filterPopup bg-white" data-x="filterPopup" data-x-toggle="-is-active">

                        <aside class="sidebar -mobile-filter">

                            <div data-x-click="filterPopup" class="-icon-close">

                                <i class="icon-close"></i>

                            </div>

                            <div class="sidebar__item -no-border">

                                <h5 class="text-18 fw-500 mb-10">City</h5>

                                <div class="sidebar-checkbox">



                                    <div class="row y-gap-10 items-center justify-between">

                                        <div class="col-12">



                                            <div class="dropdown js-dropdown js-hotel-active">

                                                <div class="dropdown__button d-flex items-center rounded-4 border-light justify-between text-16 fw-500 px-20 h-50 text-14"
                                                    data-el-toggle=".js-hotel-toggle"
                                                    data-el-toggle-active=".js-hotel-active" style="width:100%;">

                                                    <span class="js-dropdown-title">Istanbul</span>

                                                    <i class="icon icon-chevron-sm-down text-7 ml-10"></i>

                                                </div>



                                                <div class="toggle-element -dropdown  js-click-dropdown js-hotel-toggle"
                                                    style="width:100%;">

                                                    <div class="text-14 y-gap-15 js-dropdown-list">



                                                        <div><a href="#"
                                                                class="d-block js-dropdown-link">Istanbul</a></div>



                                                        <div><a href="#"
                                                                class="d-block js-dropdown-link">Aksaray</a></div>



                                                        <div><a href="#" class="d-block js-dropdown-link">Ankara</a>
                                                        </div>



                                                        <div><a href="#" class="d-block js-dropdown-link">İzmir</a>
                                                        </div>



                                                        <div><a href="#" class="d-block js-dropdown-link">Bursa</a>
                                                        </div>



                                                        <div><a href="#"
                                                                class="d-block js-dropdown-link">Antalya</a></div>



                                                        <div><a href="#" class="d-block js-dropdown-link">Multi
                                                                Cities</a></div>



                                                    </div>

                                                </div>

                                            </div>







                                        </div>

                                    </div>







                                </div>

                            </div>



                            <div class="sidebar__item">

                                <h5 class="text-18 fw-500 mb-10">Category</h5>

                                <div class="sidebar-checkbox">



                                    <div class="row y-gap-10 items-center justify-between">

                                        <div class="col-auto">



                                            <div class="d-flex items-center">

                                                <div class="form-checkbox ">

                                                    <input type="checkbox" name="name">

                                                    <div class="form-checkbox__mark">

                                                        <div class="form-checkbox__icon icon-check"></div>

                                                    </div>

                                                </div>



                                                <div class="text-15 ml-10">Day Trip</div>



                                            </div>



                                        </div>



                                        <div class="col-auto">

                                            <div class="text-15 text-light-1">92</div>

                                        </div>

                                    </div>



                                    <div class="row y-gap-10 items-center justify-between">

                                        <div class="col-auto">



                                            <div class="d-flex items-center">

                                                <div class="form-checkbox ">

                                                    <input type="checkbox" name="name">

                                                    <div class="form-checkbox__mark">

                                                        <div class="form-checkbox__icon icon-check"></div>

                                                    </div>

                                                </div>



                                                <div class="text-15 ml-10">Multiday Trip </div>



                                            </div>



                                        </div>



                                        <div class="col-auto">

                                            <div class="text-15 text-light-1">45</div>

                                        </div>

                                    </div>



                                    <div class="row y-gap-10 items-center justify-between">

                                        <div class="col-auto">



                                            <div class="d-flex items-center">

                                                <div class="form-checkbox ">

                                                    <input type="checkbox" name="name">

                                                    <div class="form-checkbox__mark">

                                                        <div class="form-checkbox__icon icon-check"></div>

                                                    </div>

                                                </div>



                                                <div class="text-15 ml-10">All Inclusive

                                                </div>



                                            </div>



                                        </div>



                                        <div class="col-auto">

                                            <div class="text-15 text-light-1">21</div>

                                        </div>

                                    </div>







                                </div>

                            </div>





                            <div class="sidebar__item">

                                <h5 class="text-18 fw-500 mb-10">Duration</h5>

                                <div class="sidebar-checkbox">



                                    <div class="row y-gap-10 items-center justify-between">

                                        <div class="col-auto">



                                            <div class="d-flex items-center">

                                                <div class="form-checkbox ">

                                                    <input type="checkbox" name="name">

                                                    <div class="form-checkbox__mark">

                                                        <div class="form-checkbox__icon icon-check"></div>

                                                    </div>

                                                </div>



                                                <div class="text-15 ml-10">Up to 1 hour</div>



                                            </div>



                                        </div>



                                        <div class="col-auto">

                                            <div class="text-15 text-light-1">92</div>

                                        </div>

                                    </div>



                                    <div class="row y-gap-10 items-center justify-between">

                                        <div class="col-auto">



                                            <div class="d-flex items-center">

                                                <div class="form-checkbox ">

                                                    <input type="checkbox" name="name">

                                                    <div class="form-checkbox__mark">

                                                        <div class="form-checkbox__icon icon-check"></div>

                                                    </div>

                                                </div>



                                                <div class="text-15 ml-10">1 to 4 hours </div>



                                            </div>



                                        </div>



                                        <div class="col-auto">

                                            <div class="text-15 text-light-1">45</div>

                                        </div>

                                    </div>



                                    <div class="row y-gap-10 items-center justify-between">

                                        <div class="col-auto">



                                            <div class="d-flex items-center">

                                                <div class="form-checkbox ">

                                                    <input type="checkbox" name="name">

                                                    <div class="form-checkbox__mark">

                                                        <div class="form-checkbox__icon icon-check"></div>

                                                    </div>

                                                </div>



                                                <div class="text-15 ml-10">1 to 3 hours </div>



                                            </div>



                                        </div>



                                        <div class="col-auto">

                                            <div class="text-15 text-light-1">21</div>

                                        </div>

                                    </div>



                                    <div class="row y-gap-10 items-center justify-between">

                                        <div class="col-auto">



                                            <div class="d-flex items-center">

                                                <div class="form-checkbox ">

                                                    <input type="checkbox" name="name">

                                                    <div class="form-checkbox__mark">

                                                        <div class="form-checkbox__icon icon-check"></div>

                                                    </div>

                                                </div>



                                                <div class="text-15 ml-10">3+ days </div>



                                            </div>



                                        </div>



                                        <div class="col-auto">

                                            <div class="text-15 text-light-1">21</div>

                                        </div>

                                    </div>



                                </div>

                            </div>





                            <div class="sidebar__item">

                                <h5 class="text-18 fw-500 mb-10">Special</h5>

                                <div class="sidebar-checkbox">



                                    <div class="row y-gap-10 items-center justify-between">

                                        <div class="col-auto">



                                            <div class="d-flex items-center">

                                                <div class="form-checkbox ">

                                                    <input type="checkbox" name="name">

                                                    <div class="form-checkbox__mark">

                                                        <div class="form-checkbox__icon icon-check"></div>

                                                    </div>

                                                </div>



                                                <div class="text-15 ml-10">Deals & Discount</div>



                                            </div>



                                        </div>



                                        <div class="col-auto">

                                            <div class="text-15 text-light-1">92</div>

                                        </div>

                                    </div>



                                    <div class="row y-gap-10 items-center justify-between">

                                        <div class="col-auto">



                                            <div class="d-flex items-center">

                                                <div class="form-checkbox ">

                                                    <input type="checkbox" name="name">

                                                    <div class="form-checkbox__mark">

                                                        <div class="form-checkbox__icon icon-check"></div>

                                                    </div>

                                                </div>



                                                <div class="text-15 ml-10">Free Cancelation</div>



                                            </div>



                                        </div>



                                        <div class="col-auto">

                                            <div class="text-15 text-light-1">92</div>

                                        </div>

                                    </div>



                                </div>

                            </div>



                            <div class="sidebar__item">

                                <h5 class="text-18 fw-500 mb-10">Languages</h5>

                                <div class="sidebar-checkbox">



                                    <div class="row y-gap-10 items-center justify-between">

                                        <div class="col-auto">



                                            <div class="d-flex items-center">

                                                <div class="form-checkbox ">

                                                    <input type="checkbox" name="name">

                                                    <div class="form-checkbox__mark">

                                                        <div class="form-checkbox__icon icon-check"></div>

                                                    </div>

                                                </div>



                                                <div class="text-15 ml-10">English</div>



                                            </div>



                                        </div>



                                        <div class="col-auto">

                                            <div class="text-15 text-light-1">92</div>

                                        </div>

                                    </div>



                                    <div class="row y-gap-10 items-center justify-between">

                                        <div class="col-auto">



                                            <div class="d-flex items-center">

                                                <div class="form-checkbox ">

                                                    <input type="checkbox" name="name">

                                                    <div class="form-checkbox__mark">

                                                        <div class="form-checkbox__icon icon-check"></div>

                                                    </div>

                                                </div>



                                                <div class="text-15 ml-10">Turkish</div>



                                            </div>



                                        </div>



                                        <div class="col-auto">

                                            <div class="text-15 text-light-1">45</div>

                                        </div>

                                    </div>



                                    <div class="row y-gap-10 items-center justify-between">

                                        <div class="col-auto">



                                            <div class="d-flex items-center">

                                                <div class="form-checkbox ">

                                                    <input type="checkbox" name="name">

                                                    <div class="form-checkbox__mark">

                                                        <div class="form-checkbox__icon icon-check"></div>

                                                    </div>

                                                </div>



                                                <div class="text-15 ml-10">French</div>



                                            </div>



                                        </div>



                                        <div class="col-auto">

                                            <div class="text-15 text-light-1">45</div>

                                        </div>

                                    </div>



                                    <div class="row y-gap-10 items-center justify-between">

                                        <div class="col-auto">



                                            <div class="d-flex items-center">

                                                <div class="form-checkbox ">

                                                    <input type="checkbox" name="name">

                                                    <div class="form-checkbox__mark">

                                                        <div class="form-checkbox__icon icon-check"></div>

                                                    </div>

                                                </div>



                                                <div class="text-15 ml-10">Spanish</div>



                                            </div>



                                        </div>



                                        <div class="col-auto">

                                            <div class="text-15 text-light-1">21</div>

                                        </div>

                                    </div>



                                </div>

                            </div>



                            <div class="sidebar__item pb-30">

                                <h5 class="text-18 fw-500 mb-10">Price</h5>

                                <div class="row x-gap-10 y-gap-30">

                                    <div class="col-12">

                                        <div class="js-price-rangeSlider">

                                            <div class="text-14 fw-500"></div>



                                            <div class="d-flex justify-between mb-20">

                                                <div class="text-15 text-dark-1">

                                                    <span class="js-lower"></span>

                                                    -

                                                    <span class="js-upper"></span>

                                                </div>

                                            </div>



                                            <div class="px-5">

                                                <div class="js-slider"></div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>



                        </aside>

                    </div>


                    <div class="row">


                        @foreach ($tours as $tour)
                            <div class="col-12 mb-3">

                                <div class="shadow-2 rounded-8">
                                    <div class="row x-gap-20 y-gap-20 p-2">
                                        <div class="col-md-auto">

                                            <div class="cardImage ratio ratio-1:1 w-250 md:w-1/1 h-full rounded-8">
                                                <div class="cardImage__content" id="imgbx">

                                                    <img class="rounded-8 col-12 js-lazy" src="#"
                                                        data-src="{{ asset('storage/uploads/tour_images/featured_image/' . $tour->featured_image) }}"
                                                        alt="image">

                                                </div>

                                            </div>

                                        </div>

                                        <div class="col-md">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="row x-gap-10 items-center">
                                                        <div class="col-auto">
                                                            <p class="text-14 fw-600 text-info-2 lh-14 mb-5">
                                                                {{ str_replace('_', ' ', strtoupper($tour->product_type)) }}
                                                            </p>
                                                        </div>
                                                    </div>

                                                    <h3 class="text-20 lh-16 fw-800">
                                                        <a href="{{ route('tours.show', $tour->slug) }}">
                                                            {{ $tour->tour_name }}
                                                        </a>
                                                    </h3>
                                                    <p class="text-12">
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
                                                        <a href="javascript:void(0);"
                                                            class="text-dark-1">{{ $tour->reviews != null ? $tour->reviews . ' reviews' : '' }}
                                                        </a>
                                                    </p>
                                                    <div class="row mt-2">
                                                        
                                                        {{-- <div class="col-md-6 col-4">
                                                            <p class="fw-600 text-13">Country </p>
                                                        </div>
                                                        <div class="col-md-6 col-8">
                                                            <span class="text-13 tag_selector">
                                                                {{ $tour->country }}</span>
                                                        </div> --}}

                                                        <div class="col-md-6 col-4">
                                                            <p class="fw-600 text-13">City</p>
                                                        </div>
                                                        <div class="col-md-6 col-8">

                                                            @foreach ($cities as $city)
                                                                {!! in_array($city->id, $tour->city) ? "<span class='text-13 tag_selector'>$city->name</span>" : '' !!}
                                                            @endforeach

                                                        </div>


                                                        <div class="col-md-6 col-4">
                                                            <p class="fw-600 text-13">Season </p>
                                                        </div>
                                                        <div class="col-md-6 col-8">
                                                            <span
                                                                class="text-13 tag_selector">{{ $tour->seasonality }}</span>
                                                        </div>


                                                        <div class="col-md-6 col-4">
                                                            <p class="fw-600 text-13">Description </p>
                                                        </div>
                                                        <div class="col-md-6 col-8">
                                                            <span
                                                                class="text-13 tag_selector">
                                                                {{ strip_tags($tour->excerpt()) }}
                                                                <a href="{{ route('tours.show', $tour->slug) }}">Read more</a>
                                                            </span>
                                                        </div>



                                                        {{-- <div class="col-md-6 col-4">
                                                            <p class="fw-600 text-13">Language </p>
                                                        </div>
                                                        <div class="col-md-6 col-8">

                                                            @if ($tour->languages != null)
                                                                @foreach ($tour->languages as $language)
                                                                    <span class="text-13 tag_selector">{{ $language }}
                                                                    </span>
                                                                @endforeach
                                                            @endif()
                                                        </div> --}}

                                                        <div class="col-md-6 col-4">
                                                            <p class="fw-600 text-13">Group/Private</p>
                                                        </div>
                                                        <div class="col-md-6 col-8">
                                                            <span
                                                                class="text-13 tag_selector">{{ $tour->group_type }}</span>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-md-auto text-right md:text-left">

                                                    <div class="row mt-2 text-left">

                                                        <div class="col">
                                                            <p class="text-12">From
                                                                <strong class="text-info-2 text-20">
                                                                    ${{ $tour->net_amount }}</strong>
                                                            </p>
                                                        </div>
                                                    </div>


                                                    <a href="{{ route('tours.show', $tour->slug) }}"
                                                        class="button -md -dark-1 bg-blue-1 text-white mt-20">
                                                        View Detail <div class="icon-arrow-top-right ml-15"></div>
                                                    </a>
                                                    <a href="{{ route('download.tour.pdf', $tour->slug) }}"
                                                        class="button -md -dark-1 border-blue-1 text-blue-2 mt-24">
                                                        Download
                                                    </a>

                                                </div>
                                            </div>



                                            <div class="row mt-2 d-lg-flex" style="display:none">

                                                <div class="col-md-4 col-4">
                                                    <p class="fw-600 text-13">Places to visit</p>
                                                </div>
                                                <div class="col-md-8 col-8 container_overlay">
                                                    <p class="text-12 destinationBox">

                                                      {{-- <!-- @if ($tour->destinations != null)
                                           @foreach (json_decode($tour->destinations) as $destination)
                                         <a href="javascript:void(0)" data-toggle="tooltip" title="{{ isset($destination->description) ?? $destination->description }}"><span class="text-13 tag_selector"> {{ $destination->name }} &nbsp; </span></a>
                                                 @endforeach
                                                         @endif() --> --}}


                                                        @if ($tour->tour_destination !=null && count($tour->tour_destination) > 0)
                                                            @foreach ($tour->tour_destination as $destinations)
                                                                @foreach ($destinations as $destination)
                                                                    <a href="{{ route('destinations.show', $destination->slug) }}"
                                                                        data-toggle="tooltip"
                                                                        title="{{ $destination->name }}"><span
                                                                            class="text-13 tag_selector">
                                                                            {{ $destination->name }} &nbsp; </span></a>
                                                                @endforeach()
                                                            @endforeach()
                                                        @endif()
                                                    </p>
                                                </div>

                                            </div>

                                        </div>


                                    </div>
                                </div>

                            </div>
                        @endforeach

                    </div>

                    <div>





                    </div>

                </div>

                @if ($metas != '')
                    <div class="col-12 mb-3">


                        <div class="accordion">
                            <div class="accordion-item">
                                <div class="accordion-item-header">
                                    {{ $metas->meta_title }}
                                </div><!-- /.accordion-item-header -->
                                <div class="accordion-item-body">
                                    <div class="accordion-item-body-content">
                                        <div class="shadow-2 rounded-8">
                                            <div class="row x-gap-20 y-gap-20 p-2">
                                                <div class="col-md-auto">
                                                    {!! $metas->content !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.accordion-item-body -->
                            </div><!-- /.accordion-item -->
                        </div>




                    </div>
                @endif

            </div>

    </section>
@endsection



@push('scripts')
    <script>
        $(document).ready(function() {

            // $('[data-toggle="tooltip"]').tooltip();


            const accordionItemHeaders = document.querySelectorAll(".accordion-item-header");

            accordionItemHeaders.forEach(accordionItemHeader => {
                accordionItemHeader.addEventListener("click", event => {

                    // Uncomment in case you only want to allow for the display of only one collapsed item at a time!

                    //     const currentlyActiveAccordionItemHeader = document.querySelector(".accordion-item-header.active");
                    //     if(currentlyActiveAccordionItemHeader && currentlyActiveAccordionItemHeader!==accordionItemHeader) {
                    //        currentlyActiveAccordionItemHeader.classList.toggle("active");
                    //        currentlyActiveAccordionItemHeader.nextElementSibling.style.maxHeight = 0;
                    //      }

                    accordionItemHeader.classList.toggle("active");
                    const accordionItemBody = accordionItemHeader.nextElementSibling;
                    if (accordionItemHeader.classList.contains("active")) {
                        accordionItemBody.style.maxHeight = accordionItemBody.scrollHeight + "px";
                    } else {
                        accordionItemBody.style.maxHeight = 0;
                    }

                });
            });




            $('form').submit(function(e) {



                $(".js-lower-input").val($(".js-lower").html());

                $(".js-upper-input").val($(".js-upper").html());



            });





            // $(".dd_country").change(function() {

            //     $(".all_cities").hide();

            //     $(".country_" + $(this).val()).show();

            // });

            $(".dd_country").click(function() {

                $(".all_cities").hide();

                $(".country_" + $(this).val()).show();

            });

        });
    </script>
@endpush()
