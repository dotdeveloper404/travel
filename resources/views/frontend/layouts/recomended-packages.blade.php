
<section class="py-40 bg-light-3">



    <div data-anim="slide-up delay-1" class="container">


        <div class="row justify-between items-end">


            <div class="col-md-12">



                <div class="sectionTitle -md">



                    <h2 class="sectionTitle__title text-center">Recommended Packages</h2>



                    <p class=" sectionTitle__text mt-5 sm:mt-0 text-center">Take a look at some of our most popular
                        tour packages.
                    </p>



                </div>



            </div>



        </div>




        <div class="relative overflow-hidden pt-40 sm:pt-20 js-section-slider" data-gap="30" data-scrollbar
            data-slider-cols="xl-4 lg-3 md-2 sm-2 base-1" data-nav-prev="js-recom-prev"
            data-pagination="js-recom-pag" data-nav-next="js-recom-next">



            <div class="swiper-wrapper">



                @foreach ($recomended_packages as $package)
                    <div class="swiper-slide shadow-sm rounded-8 bg-white p-3">



                        <a href="{{ route('packages.show', $package->slug) }}" class="hotelsCard -type-1 ">



                            <div class="hotelsCard__image">



                                <div class="cardImage ratio ratio-1:1">



                                    <div class="cardImage__content">



                                        <div
                                            class="cardImage-slider h-full rounded-4 overflow-hidden js-cardImage-slider">


                                            <div class="swiper-wrapper">


                                                <div class="swiper-slide">



                                                    <img class="col-12 h-full js-lazy" src="#"
                                                        src="{{ url('/image-optimize?image='.asset('storage/uploads/package_images/' . $package->featured_image.''))   }}"
                                                        data-src="{{ url('/image-optimize?image='.asset('storage/uploads/package_images/featured_image/' . $package->featured_image.''))   }}"
                                         
                                                        alt="image">



                                                </div>


                                                @foreach ($package->images as $image)
                                                    <div class="swiper-slide">



                                                        <img class="col-12 h-full js-lazy"
                                                            src="{{ url('/image-optimize?image='.asset('storage/uploads/package_images/' . $image->name.''))   }}"
                                                            data-src="{{ url('/image-optimize?image='.asset('storage/uploads/package_images/' . $image->name.''))   }}"
                                             
                                                            alt="image">



                                                    </div>
                                                @endforeach

                                            </div>



                                            <div class="cardImage-slider__pagination js-pagination"></div>


                                            <div class="cardImage-slider__nav -prev">



                                                <button
                                                    class="button -blue-1 bg-white size-30 rounded-full shadow-2 js-prev">



                                                    <i class="icon-chevron-left text-10"></i>



                                                </button>



                                            </div>


                                            <div class="cardImage-slider__nav -next">



                                                <button
                                                    class="button -blue-1 bg-white size-30 rounded-full shadow-2 js-next">



                                                    <i class="icon-chevron-right text-10"></i>



                                                </button>



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



                                    @if ($package->city != null)
                                        @foreach ($cities as $city)
                                            {!! in_array($city->id, $package->city) ? "<span class='text-13 tag_selector'>$city->name</span>" : '' !!}
                                        @endforeach
                                    @endif




                                </p>











                                <div class="d-flex items-center mt-20">







                                    <div class="flex-center bg-blue-1 rounded-4 size-30 text-12 fw-600 text-white">

                                        {{ $package->reviews }}
                                    </div>



                                    <div class="text-14 text-dark-1 fw-500 ml-10">Reviews

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

                                    </div>



                                </div>


                                <div class="mt-5">



                                    <div class="fw-500">



                                        Starting from <span class="text-blue-1">$ {{ $package->net_amount }}</span>



                                    </div>



                                </div>


                            </div>

                        </a>



                    </div>
                @endforeach





            </div>

            <div class="d-flex x-gap-15 items-center justify-center sm:justify-start pt-40 sm:pt-20">



                <div class="col-auto">



                    <button class="d-flex items-center text-24 arrow-left-hover js-recom-prev">



                        <i class="icon icon-arrow-left"></i>



                    </button>



                </div>




                <div class="col-auto">



                    <div class="pagination -dots text-border js-recom-pag"></div>



                </div>



                <div class="col-auto">



                    <button class="d-flex items-center text-24 arrow-right-hover js-recom-next">



                        <i class="icon icon-arrow-right"></i>



                    </button>



                </div>



            </div>


        </div>

        <br />

        <div class="row  text-center">

            <div class="col-md-12">

                <div class="d-inline-block">


                    <a style="background: #367d7d;color: white;" href="{{ route('packages.index') }}"
                        class="button -md -blue-1 bg-blue-1-05 text-blue-1">

                        View All Packages <div class="icon-arrow-top-right ml-15"></div>

                    </a>


                </div>



            </div>



        </div>



    </div>



</section>
