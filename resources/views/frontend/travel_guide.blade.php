@extends('frontend.layouts.app')


@push('css')
    <style>
        .aboutBanner {

            background: linear-gradient(rgb(0 0 0 / 70%), rgba(24, 29, 56, .7)), url("../frontend/img/home-banner.png") no-repeat;
            background-position: center;
            background-size: cover;
            width: 100%;
            height: 50vh;
        }

        p {
            text-align: left;

        }

        h2 {

            /* text-decoration: underline; */
            /* text-decoration-color: #F44336; */
        }

        .our-goals {

            max-height: 400px;
            overflow: auto;
        }

        .second_sec_1 {
            border: 1px solid #ccc;
            background: #F44336;
            color: black;
        }

        .second_sec_2 {
            border: 1px solid #ccc;
            background: #4CAF50;
            color: black;
        }

        .second_sec_3 {
            border: 1px solid #ccc;
            background: #ed6b61;
            color: black;
        }

        .second_sec_4 {
            border: 1px solid #ccc;
            background: #2196F3;
            color: black;
        }

        .second_sec_5 {
            border: 1px solid #ccc;
            background: #36f4a5;
            color: black;
        }

        .second_sec_6 {
            border: 1px solid #ccc;
            background: #cfcbcb;
            color: black;
        }

        li.text-dark-1 {
            list-style-type: disc;
        }

      
    </style>
@endpush()

@section('content')
    <main>

        <section class="pt-40 pb-40 bg-light-2 aboutBanner flex-center">

            <div class="container">

                <div class="row">

                    <div class="col-12">

                        <div class="text-center">

                            <h1 class="text-40 md:text-25 fw-600 text-white">Travel Guide - iLinkTurkey</h1>
                            <div class="text-white mt-15">

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>


        <section class="layout-pt-md">
            <div class="container">
                <div class="row">


                    <div class="col-lg-12">
                        <p class="mt-20"></p>

                        <p class="text-dark-1 ">
                            Turkey, also called Turkiye, is a captivating blend of the unique and the familiar and is so
                            much more than just a bridge between East and West. Since the beginning of recorded history, it
                            has seen many civilizations and rulers, combining influences from the Middle East and the
                            Mediterranean, the Balkans, and Central Asia.
                        </p>

                        <p class="text-dark-1">
                            Mosques exist alongside churches and Roman theatres and temples lay beside ancient Hittite
                            settlements, with roots of Sufism and gypsy festivals colouring the country's culture. With all
                            this and more, it's no wonder that Turkey is a gigantic hub of tourism and beauty.
                        </p>
                        <p class="mt-30"></p>
                    </div>



                    <div class="col-lg-12">
                        <h2 class="text-30 fw-600">Facts</h2>
                        <p class="mt-10"></p>
                        <ul class="facts">
                            <li class="text-dark-1">
                                Official Name: Republic of Turkey (Turkiye) </li>
                            <li class="text-dark-1"> Capital: Ankara </li>
                            <li class="text-dark-1"> Area: 302,535 square miles (783,562 square kilometres) </li>
                            <li class="text-dark-1"> Total Population: 81,257,239 </li>
                            <li class="text-dark-1"> Languages Spoken: Turkish, English, Arabic, Greek, Ladino, and Armenian
                            </li>
                            <li class="text-dark-1"> Currency: Turkish Lira </li>
                        </ul>


                    </div>
                    <div class="mt-30"></div>

                    <div class="col-lg-12">
                        <h2 class="text-30 fw-600">Best Time to Visit</h2>
                        <div class="mt-30"></div>

                        <p class="text-dark-1">
                            The best time to visit Turkey is during the spring months. Because the weather is nearly ideal,
                            this is the peak tourist season for cities such as Istanbul and Cappadocia, which means the
                            hotels are fully booked and the rates are high. </p>
                        <p class="text-dark-1"> Summertime brings tourists and locals to the country's many glittering
                            beaches. With tons of sunlight to bask in and miles of beachline, the coastal towns in Turkey
                            are perfect summer getaways. </p>
                        <p class="text-dark-1">For those who wish to explore the country's many beauties without the places
                            being too overcrowded, the fall is a fantastic time to plan a trip to Turkey. The days are
                            shorter, and there's more chance of rain in October, but the weather is still very pleasant.
                        </p>


                    </div>

                    <div class="mt-30"></div>

                    <div class="col-lg-12">
                        <h2 class="text-30 fw-600">Geography</h2>
                        <div class="mt-30"></div>

                        <p class="text-dark-1">
                            Turkey is a vast peninsula that links the European and Asian continents. The Black Sea, the
                            Mediterranean Sea, and the Aegean Sea embrace Turkey on three sides. Istanbul, Turkey's largest
                            city, is situated on land in the Bosporus Strait. </p>
                        <p class="text-dark-1">
                            Mount Ararat is Turkey's tallest peak, with the Great Ararat reaching 16,945 feet (5,165
                            metres). Many people regard the mountain as sacred, believing it to be the location of Noah's
                            ark after the great flood. <br />
                            Turkey has an abundance of wild animals and game birds. In remote and
                            forested areas, wolves, foxes, boars, wildcats, beavers, martens, jackals, hyenas, bears, deer,
                            gazelles, and mountain goats can still be found.
                        </p>
                        <p class="text-dark-1">
                            The white cliffs of Pamukkale in western Turkey, formerly known as Cotton Castle, are
                            constructed of travertine, a calcium-rich stone. From a distance, the cliffs resemble a sheet of
                            ice covering a hillside with a spring connecting the pools. The cliffs stretch about 1.7 miles
                            (2.7 kilometres).
                        </p>

                        <p class="text-dark-1">
                            The country is blessed with countless lakes, rivers parting cities, tall grassy mountains,
                            highlands, beaches, and natural hot springs, which makes the places to explore quite boundless.
                        </p>


                    </div>


                    <div class="mt-30"></div>

                    <div class="col-lg-12">
                        <h2 class="text-30 fw-600">History</h2>
                        <div class="mt-30"></div>

                        <p class="text-dark-1">
                            Turkey is home to one of the world's oldest settlements. Catal Hoyuk, which was built 8,800
                            years ago, was a maze of 150 interconnected mud houses. The Hittites established an empire in
                            Anatolia, what is now known as Turkey, some 4,000 years ago. For hundreds of years, they reigned
                            until the Trojan War occurred while the Hittites were losing power. The ruins of Troy are said
                            to be in the Anatolian city of Hissarlik.</p>
                        <p class="text-dark-1">
                            Around 700 B.C., King Midas ruled western Turkey. Alexander the Great put Anatolia under
                            Macedonian Greek power in 334 B.C. until Rome gained control and Anatolia became part of Roman
                            Asia Minor. Constantine became Roman Emperor in A.D. 330, establishing a new capital called
                            Constantinople. Following the collapse of the Roman Empire, it became a province of the
                            Byzantine Empire.
                        </p>
                        <p class="text-dark-1">
                            The Ottomans seized Constantinople in 1453, and Turkey came under the rule of the Ottoman
                            Empire. Following World War I, Greece invaded the nation, sparking the Turkish War of
                            Independence in 1920, commanded by Mustafa Kemal Ataturk. Turkey was declared a republic by the
                            Turkish legislature in 1923 and the city of Constantinople was renamed to Istanbul.
                        </p>

                    </div>


                    <div class="mt-30"></div>

                    <div class="col-lg-12">
                        <h2 class="text-30 fw-600">People and Culture</h2>
                        <div class="mt-30"></div>

                        <p class="text-dark-1">
                            The Turkish people come from a variety of roots, which reflects the numerous different cultures
                            that ruled Turkey over thousands of years. People of all ethnicities, races, and religions live
                            freely and cordially here. The majority of the population is Sunni Muslims and Kurds make up
                            one-fifth of the population. </p>
                        <p class="text-dark-1">
                            Turks are family-oriented and welcoming people. They welcome tourists and make sure they have
                            something to eat and drink before leaving. A popular dish sold everywhere is kebab made from
                            grilled lamb. The staples in a Turkish diet include lamb, eggplant, and yogurt. A
                            sweet-flavoured candy with rose petals called Turkish delight is sold in many flavours and
                            colours.
                        </p>
                        <p class="text-dark-1">
                            Soccer is the most popular sport in Turkey and there are three popular teams based in Istanbul.
                            Turks excel at weightlifting and a form of wrestling called Turkish wrestling, which is a
                            must-see whenever visiting this country.
                        </p>

                    </div>

                    <div class="mt-30"></div>

                    <div class="col-lg-12">
                        <h2 class="text-30 fw-600">Natural Beauty</h2>
                        <div class="mt-30"></div>

                        <p class="text-dark-1">
                            Turkey offers a beautiful mix between flora and fauna for nature lovers. Birds that migrate
                            between their summer and winter habitats stop in Turkey to rest. They swarm to Kus Golu, or Bird
                            Lake, which is located in a protected national forest surrounded by reed marshes. </p>
                        <p class="text-dark-1">
                            The country also has one of the most popular national parks in the world, constructed in 1958.
                            There are now 39 parks that safeguard rare species and their ecosystems.
                        </p>
                        <p class="text-dark-1">
                            Cats play a big role in both Turkey's cultural and natural aspects. They can be found
                            everywhere, in shops, boutiques, alleyways, footpaths, benches, homes, etc. Turkish locals
                            deeply revere cats and encourage tourists to do the same.
                        </p>

                    </div>

                    <div class="mt-30"></div>

                    <div class="col-lg-12">
                        <h2 class="text-30 fw-600">Where to Stay in Turkey</h2>
                        <div class="mt-30"></div>

                        <p class="text-dark-1">
                            Turkey boasts a variety of accommodation alternatives to suit every budget and preference.
                            There's something for everyone, from lavish resorts to budget-friendly hotels. Many attractive
                            boutique hotels may be found in Istanbul's historic neighbourhoods, while all-inclusive resorts
                            can be found in seaside destinations like Bodrum and Antalya. </p>


                    </div>


                    <div class="mt-30"></div>

                    <div class="col-lg-12">
                        <h2 class="text-30 fw-600">Getting There</h2>
                        <div class="mt-30"></div>

                        <p class="text-dark-1">
                            There are several ways to travel in Turkey, including aeroplanes, buses, cars, rail, ships, and
                            ferries. Although Turkey is a huge nation, getting around is very simple since the country pays
                            a lot of attention to making transportation simple for tourists and locals. While there are to
                            be crowds and busy taxis expected during an event or an important holiday, it's best to book
                            ahead of time during those periods. </p>


                    </div>


                    <div class="mt-30"></div>


                </div>
        </section>


        <section class="py-40 bg-light-3">

            <div data-anim="slide-up delay-1" class="container">


                <div class="col-md-12 text-center">

                    <h2 class="sectionTitle__title text-dark-1">Popular Turkey Tours </h2>


                    <p class="sectionTitle__text text-center mt-5 sm:mt-0">Some hand-picked packages designed just for your
                        travel
                        needs.
                    </p>

                </div>


                <div class="relative overflow-hidden pt-40 sm:pt-20 js-section-slider" data-gap="30" data-scrollbar
                    data-slider-cols="xl-4 lg-3 md-2 sm-2 base-1" data-nav-prev="js-hotels-prev"
                    data-pagination="js-hotels-pag" data-nav-next="js-hotels-next">



                    <div class="swiper-wrapper">



                        @foreach ($packages as $package)
                            <div class="swiper-slide shadow-sm rounded-8 bg-white p-3">


                                <a href="{{ route('packages.show', $package->slug) }}" class="hotelsCard -type-1 ">



                                    <div class="hotelsCard__image">



                                        <div class="cardImage ratio ratio-1:1">


                                            <div class="cardImage__content">




                                                <div
                                                    class="cardImage-slider h-full rounded-4 overflow-hidden js-cardImage-slider">



                                                    <div class="swiper-wrapper">




                                                        <div class="swiper-slide">



                                                            <img class="col-12 h-full js-lazy"
                                                                src="{{ asset('storage/uploads/package_images/featured_image/' . $package->featured_image) }}"
                                                                data-src="{{ asset('storage/uploads/package_images/featured_image/' . $package->featured_image) }}"
                                                                alt="image">



                                                        </div>




                                                    </div>



                                                </div>



                                            </div>



                                            <div class="cardImage__leftBadge">



                                                <div
                                                    class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-blue-1 text-white">



                                                    {{ str_replace('_', ' ', strtoupper($package->product_type)) }}



                                                </div>



                                            </div>


                                        </div>



                                    </div>


                                    <div class="hotelsCard__content mt-10">



                                        <h4 class="hotelsCard__title text-dark-1 text-18 lh-16 fw-500">



                                            <span>{{ $package->package_name }}</span>



                                        </h4>


                                        <p> <span class="tag_selector">

                                                {{ str_replace('_', ' ', ucfirst($package->package_type)) }}</span></p>



                                        <p class="text-light-1 lh-14 text-14 mt-5">



                                            @foreach ($package->city as $city)
                                                <span class="tag_selector">{{ $city }} | </span>
                                            @endforeach



                                        </p>



                                        <div class="d-inline-block">



                                            {!! $package->stars == 1 ? '<i class="icon-star  text-yellow-3"></i>' : '' !!}



                                            {!! $package->stars == 2
                                                ? '<i class="icon-star  text-yellow-3"></i><i class="icon-star  text-yellow-3"></i>'
                                                : '' !!}



                                            {!! $package->stars == 3
                                                ? '<i class="icon-star  text-yellow-3"></i><i class="icon-star  text-yellow-3"></i><i class="icon-star  text-yellow-3"></i>'
                                                : '' !!}



                                            {!! $package->stars == 4
                                                ? '<i class="icon-star  text-yellow-3"></i><i class="icon-star  text-yellow-3"></i><i class="icon-star  text-yellow-3"></i><i class="icon-star  text-yellow-3"></i>'
                                                : '' !!}



                                            {!! $package->stars == 5
                                                ? '<i class="icon-star  text-yellow-3"></i><i class="icon-star  text-yellow-3"></i><i class="icon-star  text-yellow-3"></i><i class="icon-star  text-yellow-3"></i><i class="icon-star  text-yellow-3"></i>'
                                                : '' !!}



                                        </div>


                                        <div class="d-flex items-center mt-20">


                                            <div class="flex-center bg-blue-1 rounded-4 size-30 text-12 fw-600 text-white">

                                                {{ $package->reviews }}
                                            </div>



                                            <div class="text-14 text-dark-1 fw-500 ml-10">Reviews</div>



                                        </div>



                                        <div class="mt-5">



                                            <div class="fw-500">



                                                Starting from <span class="text-blue-1">US $
                                                    {{ $package->net_amount }}</span>



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


        <section class="py-40 bg-light-3">



            <div data-anim-wrap class="container">



                <div data-anim-child="slide-up delay-1" class="row justify-center text-center">



                    <div class="col-auto">



                        <div class="sectionTitle -md">



                            <h2 class="sectionTitle__title">Latest Stories from Turkey</h2>


                        </div>



                    </div>



                </div>







                <div class="row y-gap-30 pt-40">



                    @foreach ($blogs as $blog)
                        <div data-anim-child="slide-left delay-1" class="col-lg-4 col-sm-6">


                            <a href="{{ $blog['link'] }}"
                                class="blogCard -type-1 d-block shadow-sm bg-white rounded-8 p-3">

                                <div class="blogCard__image">

                                    <div class="ratio ratio-4:3 rounded-4 rounded-8">

                                        <img class="img-ratio js-lazy" src="#" data-src="{{ $blog['image'] }}"
                                            alt="image">

                                    </div>

                                </div>


                                <div class="mt-20">

                                    <h4 class="text-dark-1 text-18 fw-500">{{ $blog['title'] }}</h4>

                                </div>

                            </a>

                        </div>
                    @endforeach()

                    <div class="container">
                        <div class="vertical-center" style="float:right" >
                            <a href="https://ilinkturkey.com/blog/"
                                class="button -md h-60 bg-blue-1 text-white phone_d">View More</a>
                        </div>
                    </div>


                </div>



            </div>



        </section>

    </main>
@endsection
