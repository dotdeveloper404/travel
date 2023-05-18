@extends('frontend.layouts.app')

@section('content')


@push('css')
<style>
h2 {
    text-align: center;
}
</style>
@endpush()

<main>


    <section class="section-bg layout-pt-lg layout-pb-lg">
        <div class="section-bg__item col-12">
            <img src="../frontend/img/home-banner.png" alt="image">
        </div>

        <div class="container">
            <div class="row justify-center text-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <h1 class="text-40 md:text-25 fw-600 text-white">IlinkTurkey</h1>
                    <div class="text-white mt-15">Contact Us</div>
                </div>
            </div>
        </div>
    </section>

    <section class="layout-pt-md">
        <div class="container">
            <div class="row y-gap-30 justify-between items-center">
                <div class="col-lg-12">

                    <div class="col-auto">
                        <div class="sectionTitle -md">
                            <h2 class="sectionTitle__title row justify-center text-center is-in-view"> Welcome to
                                Turkey: Your Ultimate Travel Guide </h2>
                        </div>
                    </div>



                    <p class="text-dark-1">Turkey is a beautiful and diverse country that is full of surprises. From the
                        ancient ruins of Ephesus to the stunning beaches of Antalya, Turkey has something to offer every
                        type of traveler. Whether you're a history buff, a food lover, or an adventure seeker, Turkey
                        has it all. In this travel guide, we'll give you all the information you need to plan an
                        unforgettable trip to Turkey.
                    </p>

                    <div class="col-auto">
                        <div class="sectionTitle -md">
                            <h2 class="sectionTitle__title row justify-center text-center is-in-view">Getting There
                            </h2>
                        </div>
                    </div>

                    <p class="text-dark-1">Turkey is a popular destination with many international airports, including
                        Istanbul, Ankara, and Antalya. There are also several low-cost airlines that operate in Turkey,
                        making it an affordable option for budget-conscious travelers. Once you arrive, you can easily
                        get around by using public transportation or by renting a car.
                    </p>
                    <div class="col-auto">
                        <div class="sectionTitle -md">
                            <h2 class="sectionTitle__title row justify-center text-center is-in-view">Where to Stay in
                                Turkey</h2>
                        </div>
                    </div>

                    <p class="text-dark-1">Turkey has a wide range of accommodation options to suit every budget and
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


                    <div class="col-auto">
                        <div class="sectionTitle -md">
                            <h2 class="sectionTitle__title row justify-center text-center is-in-view">What to Do</h2>
                        </div>
                    </div>

                    <p class="text-dark-1">There are many things to do in Turkey, from hot air balloon rides in
                        Cappadocia to paragliding in Oludeniz. If you're a food lover, be sure to try the local cuisine,
                        including Turkish kebabs, meze, and baklava. Turkey is also home to many beautiful hiking
                        trails, such as the Lycian Way, which offers stunning views of the Mediterranean Sea.
                    </p>


                    <div class="col-auto">
                        <div class="sectionTitle -md">
                            <h2 class="sectionTitle__title row justify-center text-center is-in-view">When to Go</h2>
                        </div>
                    </div>

                    <p class="text-dark-1">The best time to visit Turkey depends on what you want to do and see. If
                        you're planning to visit the coastal areas, the summer months (June to August) are the most
                        popular, with warm temperatures and plenty of sunshine. If you're planning to visit Istanbul or
                        Cappadocia, the spring (April to May) and fall (September to November) are the best times, with
                        cooler temperatures and fewer crowds.
                    </p>


                    <div class="col-auto">
                        <div class="sectionTitle -md">
                            <h2 class="sectionTitle__title row justify-center text-center is-in-view">Travel Tips for
                                you</h2>
                        </div>
                    </div>

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
                    <div class="text-14 text-light-1">Address</div>
                    <div class="text-18 fw-500 mt-10">15 Prospect Lane, Suite#1C9, Colonia, NJ 07067</div>
                </div>

                <div class="col-auto">
                    <div class="text-14 text-light-1">Phone</div>
                    <div class="text-18 fw-500 mt-10">+1-201-366-1155</div>
                </div>

                <div class="col-auto">
                    <div class="text-14 text-light-1">Need live support?</div>
                    <div class="text-18 fw-500 mt-10">info@ilinkturkey.com</div>
                </div>

                <div class="col-auto">
                    <div class="text-14 text-light-1">Follow us on social media</div>
                    <div class="d-flex x-gap-20 items-center mt-10">
                        <a href="#"><i class="icon-facebook text-14"></i></a>
                        <a href="#"><i class="icon-twitter text-14"></i></a>
                        <a href="#"><i class="icon-instagram text-14"></i></a>
                        <a href="#"><i class="icon-linkedin text-14"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>


</main>




@endsection