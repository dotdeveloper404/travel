@extends('portal.layouts.app')

@section('content')

<div class="d-flex flex-column-fluid">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 ">
                <div class="card card-custom gutter-b example example-compact">

                 <package-create :hotels="{{ json_encode($hotels) }}" :transports="{{ json_encode($transports)}}" :package-type="{{ json_encode($package_type)}}" :product-type="{{ json_encode($product_type)}}" :languages="{{ json_encode($languages)}}" :duration="{{ json_encode($duration) }}" :cities ="{{ json_encode($cities) }}" :countries="{{json_encode($countries)}}"  :destinations="{{json_encode($destinations)}}" ></package-create>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection