@extends('frontend.layouts.app')

@section('content')
    <main>

        <section style="height:500px;" class="section-bg layout-pt-lg layout-pb-lg">
            <div class="section-bg__item col-12">
                <img src="../frontend/img/home-banner.png" alt="image">
            </div>

        </section>

        <div class="border-top-light"></div>

        <section class="py-40 bg-light-3">
            <div data-anim="slide-up delay-1" class="container">

                <div class="col-md-12 text-center">
                    <h1 class="text-40 md:text-25 fw-600 ">
                        @if (session('message'))
                            {{ session('message') }}
                        @endif
                    </h1>
                    <div class="mt-15">
                        <p>
                            @if (session('content'))
                                {{ session('content') }}
                            @endif

                        </p>
                    </div>
                </div>

            </div>
        </section>

        @include('frontend.layouts.recomended-packages', [
            'recomended_packages' => $recomended_packages,
            'cities' => $cities,
        ])



    </main>
@endsection
