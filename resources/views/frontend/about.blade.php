@extends('frontend.layouts.app')

@section('content')


  <main>


    <section class="section-bg layout-pt-lg layout-pb-lg">
      <div class="section-bg__item col-12">
        <img src="../frontend/img/home-banner.png" alt="image">
      </div>

      <div class="container">
        <div class="row justify-center text-center">
          <div class="col-xl-6 col-lg-8 col-md-10">
            <h1 class="text-40 md:text-25 fw-600 text-white">IlinkTurkey</h1>
            <div class="text-white mt-15">Your trusted trip companion</div>
          </div>
        </div>
      </div>
    </section>
    

   

    <section class="layout-pt-md">
      <div class="container">
        <div class="row y-gap-30 justify-between items-center">
          <div class="col-lg-5">
            <h2 class="text-30 fw-600">About IlinkTurkey</h2>
            <p class="mt-5"></p>

            <p class="text-dark-1">
           At iLink Turkey, we're passionate about creating unforgettable travel experiences in Turkey. Our team of travel experts has years of experience exploring this beautiful country, and we're dedicated to sharing our knowledge with our clients.
<br><br>
We believe that traveling is more than just visiting a new place - it's about immersing yourself in a new culture, trying new foods, and meeting new people. That's why we create tours that allow our clients to do just that.
<br><br>
Our tours are designed to be flexible, so you can create the perfect itinerary for your interests and schedule. Whether you want to explore the ancient ruins of Ephesus, relax on the beaches of Antalya, or take a hot air balloon ride in Cappadocia, we have a tour that's right for you.
<br><br>
We also believe that travel should be sustainable and responsible. That's why we work with local partners and suppliers to support the local economy and reduce our impact on the environment. We also promote responsible tourism practices, such as minimizing waste and respecting local customs and traditions.
<br><br>
Our team is dedicated to providing excellent customer service and ensuring that every aspect of your trip to Turkey is taken care of. From transportation and accommodations to tours and activities, we'll handle all the details so you can relax and enjoy your trip.
<br><br>
We're excited to share our love of Turkey with you and help you create an unforgettable travel experience. Contact us today to start planning your dream trip to Turkey!
    <br><br>
           </p>
          </div>

          <div class="col-lg-6">
            <img src="frontend/img/pages/about/2.png" alt="image" class="rounded-4">
          </div>
        </div>
      </div>
    </section>
    
    
@include('frontend.layouts.why-choose-us')

    <section class="pt-60">
      <div class="container">
        <div class="border-bottom-light pb-40">
          <div class="row y-gap-30 justify-center text-center">

            <div class="col-xl-3 col-6">
              <div class="text-40 lg:text-30 lh-13 fw-600">4,958</div>
              <div class="text-14 lh-14 text-light-1 mt-5">Destinations</div>
            </div>

            <div class="col-xl-3 col-6">
              <div class="text-40 lg:text-30 lh-13 fw-600">2,869</div>
              <div class="text-14 lh-14 text-light-1 mt-5">Total Properties</div>
            </div>

            <div class="col-xl-3 col-6">
              <div class="text-40 lg:text-30 lh-13 fw-600">2M</div>
              <div class="text-14 lh-14 text-light-1 mt-5">Happy customers</div>
            </div>

            <div class="col-xl-3 col-6">
              <div class="text-40 lg:text-30 lh-13 fw-600">574,974</div>
              <div class="text-14 lh-14 text-light-1 mt-5">Our Volunteers</div>
            </div>

          </div>
        </div>
      </div>
    </section>

  
  
   
  </main>


@endsection