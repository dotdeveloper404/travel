@extends('frontend.layouts.app')

@section('content')


<main>


    <section class="section-bg layout-pt-lg layout-pb-lg">
        <div class="section-bg__item col-12">
            <img src="../frontend/img/home-banner.png" style="filter:brightness(.5);" alt="image">
        </div>

        <div class="container">
            <div class="row ">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <h1 class="text-50 md:text-35 fw-600 text-white">IlinkTurkey</h1>
                    <div class="col-md-6">
                        <a href="{{ route('contact_us') }}" class="button -md -dark-1 border-blue-1 text-blue-2 mt-20">
                            Contact Us
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="layout-pt-md travel_guide_section">
        <div class="container">
            <div class="row y-gap-30 justify-between items-center">
                <div class="col-lg-12">



                    <div class="row mb-40">
                        <div class="col-md-6 mb-30">
                            <h1>Welcome to Turkey: Your Ultimate Travel Guide </h1>

                            <p class="text-dark-1">Turkey is a beautiful and diverse country that is full of surprises.
                                From the ancient ruins of Ephesus to the stunning beaches of Antalya, Turkey has
                                something to offer every type of traveler.
                            </p>
                            <div class="col-md-6">
                                <a href="{{ route('packages.index')}}" class="button -md -dark-1 border-blue-1 text-blue-2 mt-20">
                                    Get Started
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 text-center">
                            <img src="/public/frontend/img/Thingstodo.png" alt="" style="height:280px"
                                class="col-11 rounded-4 js-lazy loaded">
                        </div>
                    </div>
                    <div class="row mb-40">
                        <div class="col-md-6 mb-30 text-center">
                            <img src="/public/frontend/img/Up-to-70.png" alt="" style="height:270px"
                                class="col-11 rounded-4 js-lazy loaded">
                        </div>
                        <div class="col-md-6">
                            <h2>Getting There</h2>

                            <p class="text-dark-1">Turkey is a popular destination with many international airports,
                                including Istanbul, Ankara, and Antalya. There are also several low-cost airlines that
                                operate in Turkey, making it an affordable option for budget-conscious travelers. Once
                                you arrive, you can easily get around by using public transportation or by renting a
                                car.
                            </p>
                            <div class="col-md-6">
                                <a href="{{ route('packages.index')}}" class="button -md -dark-1 border-blue-1 text-blue-2 mt-20">
                                    Get Started
                                </a>
                            </div>
                        </div>
                    </div>
                    <h2>Where to Stay in Turkey</h2>

                    <p class="text-dark-1 mb-20">Turkey has a wide range of accommodation options to suit every budget
                        and
                        taste. From luxurious hotels to budget-friendly hostels, there's something for everyone. In
                        Istanbul, you'll find many charming boutique hotels in the city's historic neighborhoods, while
                        in coastal towns like Bodrum and Antalya, you can find all-inclusive resorts.

                        What to See first in Turkey

                        Turkey is a country rich in history and culture, and there are many must-see sights. Istanbul is
                        a city that should not be missed, with its stunning mosques, bazaars, and historic buildings.
                        The ancient city of Ephesus is also a must-visit, with its well-preserved ruins dating back to
                        Roman times. Other popular attractions include the fairy chimneys of Cappadocia, the ruins of
                        Troy, and the beautiful beaches of the Turquoise Coast.
                    </p>
                    <h2>What to Do</h2>

                    <p class="text-dark-1 mb-20">There are many things to do in Turkey, from hot air balloon rides in
                        Cappadocia to paragliding in Oludeniz. If you're a food lover, be sure to try the local cuisine,
                        including Turkish kebabs, meze, and baklava. Turkey is also home to many beautiful hiking
                        trails, such as the Lycian Way, which offers stunning views of the Mediterranean Sea.
                    </p>
                    <h2>When to Go</h2>

                    <p class="text-dark-1 mb-20">The best time to visit Turkey depends on what you want to do and see.
                        If
                        you're planning to visit the coastal areas, the summer months (June to August) are the most
                        popular, with warm temperatures and plenty of sunshine. If you're planning to visit Istanbul or
                        Cappadocia, the spring (April to May) and fall (September to November) are the best times, with
                        cooler temperatures and fewer crowds.
                    </p>
                    <h2>Travel Tips for you</h2>

                    <p class="text-dark-1">When traveling to Turkey, there are a few things to keep in mind. It's
                        important to dress modestly, especially when visiting mosques and other religious sites. It's
                        also a good idea to carry cash with you, as not all places accept credit cards. Finally, be sure
                        to try the local tea, as it's an important part of Turkish culture.

                        Turkey is a destination that should be on every traveler's bucket list. With its rich history,
                        beautiful landscapes, and delicious cuisine, it's a country that has something to offer
                        everyone.

                        So what are you waiting for?

                        Start planning your trip to Turkey today and get ready for an adventure you'll never forget.

                    </p>




                </div>


            </div>
        </div>
    </section>





    <section class="layout-pt-md layout-pb-lg">
        <div class="container">
            <div class="row x-gap-80 y-gap-20 justify-between">


                <div class="col-lg-3">
                    <div class="bg-white shadow-sm p-2 rounded-4 text-center">
                        <div class="text-14 text-light-1">Address</div>
                        <div class="text-18 fw-500 mt-10">15 Prospect Lane, Suite#1C9, Colonia, NJ 07067</div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="bg-white shadow-sm p-2 rounded-4 text-center">
                        <div class="text-14 text-light-1">Phone</div>
                        <div class="text-18 fw-500 mt-10">+1-201-366-1155</div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="bg-white shadow-sm p-2 rounded-4 text-center">
                        <div class="text-14 text-light-1">Need live support?</div>
                        <div class="text-18 fw-500 mt-10">info@ilinkturkey.com</div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="bg-white shadow-sm p-2 rounded-4 text-center">
                        <div class="text-14 text-light-1">Follow us on social media</div>
                        <div class=" x-gap-20 flex-center mt-10">
                            <a href="#"><i class="icon-facebook text-14"></i></a>
                            <a href="#"><i class="icon-twitter text-14"></i></a>
                            <a href="#"><i class="icon-instagram text-14"></i></a>
                            <a href="#"><i class="icon-linkedin text-14"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</main>




@endsection