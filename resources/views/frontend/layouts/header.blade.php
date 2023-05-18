<div class="header-margin" style="margin-top:74px;"></div>

<header data-add-bg="bg-dark-1" class="header bg-dark-3 js-header" data-x="header" data-x-toggle="is-menu-opened">

    <div data-anim="fade" class="header__container px-30 sm:px-20">

        <div class="row justify-between items-center">



            <div class="col-auto">

                <div class="d-flex items-center">

                    <h3>

                        <a href="{{ url('/')}}" class="header-logo mr-20" data-x="header-logo" data-x-toggle="is-logo-dark">

                            <img src="{{ asset('frontend/img/ilinkturkey-white.png')}}" alt="logo icon">

                            <img src="{{ asset('frontend/img/ilinkturkey-white.png') }}" alt="logo icon">



                        </a>

                    </h3>



                    <div class="header-menu " data-x="mobile-menu" data-x-toggle="is-menu-active">

                        <div class="mobile-overlay"></div>



                        <div class="header-menu__content">

                            <div class="mobile-bg js-mobile-bg"></div>



                            <div class="menu js-navList">

                                <ul class="menu__nav text-white -is-active">



                                    <li>

                                        <a href="{{ url('/')}}">Home</a>

                                    </li>



                                    <li>

                                        <a href="{{ route('packages.index') }}">Packages</a>

                                    </li>



                                    <li>

                                        <a href="{{ route('tours.index') }}">Tours</a>

                                    </li>

                                    
                                    <li class="menu-item-has-children">

                                        <a data-barba href="">

                                            <span class="mr-10">Destinations</span>

                                            <i class="icon icon-chevron-sm-down"></i>

                                        </a>

                                        <ul class="subnav">

                                        

                                            <li><a href="{{ route('packages.index')}}">Country</a></li>

                                            <li> <a href="{{ route('packages.index')}}">Multi Countries</a></li>

                                            <li> <a href="{{ route('packages.index')}}">Cities</a></li>

                                            <li> <a href="{{ route('packages.index')}}">Multi Cities</a></li>

                                        </ul>

                                    </li>


                                    <li class="menu-item-has-children">

                                        <a data-barba href="">

                                            <span class="mr-10">Category</span>

                                            <i class="icon icon-chevron-sm-down"></i>

                                        </a>


                                        <ul class="subnav">


                                            <li><a href="{{ route('packages.top_category','families-and-kids-attractions')}}">Families & Kids Attractions</a></li>

                                            <li> <a href="{{ route('packages.top_category','sightseeing-and-tours')}}">Sightseeing & Tours</a></li>

                                            <li> <a href="{{ route('packages.top_category','cruises')}}">Cruises</a></li>

                                            <li> <a href="{{ route('packages.top_category','events-and-festivals')}}">Events & Festivals</a></li>

                                            <li> <a href="{{ route('packages.top_category','food-lovers')}}">Food lovers </a></li>

                                            <li> <a href="{{ route('packages.top_category','ticket-and-passes')}}">Ticket & Passes</a></li>


                                        </ul>


                                    </li>


                                    <li>

                                        <a href="{{ url('/travel-guide') }}">

                                            Travel Guide

                                        </a>

                                    </li>


                                    <li>

                                        <a href="{{ url('/blog/ ') }}">

                                            Blog

                                        </a>

                                    </li>







                                    <li>

                                        <a href="{{ route('contact_us') }}">Contact</a>

                                    </li>

                                    <li>

                                        <a href="{{ route('about_us') }}">About</a>

                                    </li>

                                </ul>

                            </div>



                            <div class="mobile-footer px-20 py-20 border-top-light js-mobile-footer">

                            </div>

                        </div>

                    </div>



                </div>

            </div>





            <div class="col-auto d-xl-none">

                <div class="d-flex items-center">

                    <div class="row x-gap-20 items-center xxl:d-none">

                        <div class="col-auto">

                            <button class="d-flex items-center text-14 text-white" data-x-click="currency">

                                <span class="js-currencyMenu-mainTitle">USD</span>

                                <i class="icon-chevron-sm-down text-7 ml-10"></i>

                            </button>

                        </div>



                        <div class="col-auto">

                            <div class="w-1 h-20 bg-white-20"></div>

                        </div>



                        <div class="col-auto">

                            <button class="d-flex items-center text-14 text-white" data-x-click="lang">

                                <img src="frontend/img/general/lang.png" alt="image" class="rounded-full mr-10">

                                <span class="js-language-mainTitle">United Kingdom</span>

                                <i class="icon-chevron-sm-down text-7 ml-15"></i>

                            </button>

                        </div>

                    </div>



                    <div class="d-none xl:d-flex x-gap-20 items-center pl-30 text-white" data-x="header-mobile-icons" data-x-toggle="text-white">


                        <div><button class="d-flex items-center icon-menu text-white text-20" data-x-click="header, header-logo, header-mobile-icons, mobile-menu"></button></div>

                    </div>

                </div>

            </div>



        </div>

    </div>

</header>
