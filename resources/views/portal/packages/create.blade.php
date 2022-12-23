@extends('portal.layouts.app')

@section('content')

<div class="d-flex flex-column-fluid">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 ">
                <div class="card card-custom gutter-b example example-compact">

                 <package-create :package-type="{{ json_encode($package_type)}}" :product-type="{{ json_encode($product_type)}}" ></package-create>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection