@extends('frontend.layouts.app')



@section('title'){{$destination->meta_title}} @endsection

@section('description'){{$destination->meta_description}} @endsection

@section('keywords'){{$destination->meta_description}} @endsection



@section('content')



<section class="pt-40 js-pin-container">

    <div class="container">

        <div class="row y-gap-30">

            <div class="col-lg-8">

                <div class="relative d-flex justify-center overflow-hidden js-section-slider" data-slider-cols="base-1" data-nav-prev="js-img-prev" data-nav-next="js-img-next">

                    <div class="swiper-wrapper">


                        <div class="swiper-slide" >

                            <img  src="{{  asset('storage/uploads/destination_image/' . $destination->image )  }}" alt="image" class="rounded-4 col-12 h-full object-cover">

                        </div>
                    </div>
                </div>

                <div class="border-top-light mt-40 mb-40"></div>

                <div class="row x-gap-40 y-gap-40">

                    <div class="col-12">

                        <h3 class="text-24 fw-500">Overview</h3>

                        <p class="text-dark-1 text-15 mt-20">

                            {!! $destination->content !!}

                        </p>

                    </div>

                </div>

            </div>

            <div class="col-lg-4">
                
            </div>
        </div>

    </div>

</section>



<div class="container mt-40 mb-40">

    <div class="border-top-light"></div>

</div>



@endsection

@push('scripts')
<script>

</script>
@endpush()