@extends('portal.layouts.app')

@section('content')

<div class="d-flex flex-column-fluid">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 ">
                <div class="card card-custom gutter-b example example-compact">
                    
                <tour-edit  :transports="{{ json_encode($transports)}}" :tour-data = "{{ $tour }}" :countries="{{json_encode($countries)}}"  :tour-type="{{ json_encode($tour_type)}}" :product-type="{{ json_encode($product_type)}}" :languages="{{ json_encode($languages)}}"  :duration="{{ json_encode($duration) }}" :cities="{{ json_encode($cities) }}" ></tour-edit>
                
                </div>
            </div>
        </div>
    </div>
</div>

@endsection