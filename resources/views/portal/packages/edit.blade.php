@extends('portal.layouts.app')

@section('content')

<div class="d-flex flex-column-fluid">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 ">
                <div class="card card-custom gutter-b example example-compact">
                    
                <package-edit :hotels="{{ json_encode($hotels) }}" :transports="{{ json_encode($transports)}}"  :package-data = "{{ $package }}" :package-type="{{ json_encode($package_type)}}" :product-type="{{ json_encode($product_type)}}" :languages="{{ json_encode($languages) }}"  :duration="{{ json_encode($duration) }}" :countries="{{json_encode($countries)}}" :cities ="{{ json_encode($cities) }}" :destinations="{{json_encode($destinations)}}" :categories="{{json_encode($categories)}}" ></package-edit>
                
                </div>
            </div>
        </div>
    </div>
</div>

@endsection