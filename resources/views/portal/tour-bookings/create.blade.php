@extends('portal.layouts.app')

@section('content')

<div class="d-flex flex-column-fluid">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 ">
                <div class="card card-custom gutter-b example example-compact">

                 <tour-create  :transports="{{ json_encode($transports)}}" :tour-type="{{ json_encode($tour_type)}}" :product-type="{{ json_encode($product_type)}}" ></tour-create>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection