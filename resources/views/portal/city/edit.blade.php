@extends('portal.layouts.app')

@section('content')

<div class="d-flex flex-column-fluid">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 ">
                <div class="card ">
                <city-edit :countries = "{{ $countries }}" :city-data="{{json_encode($city)}}"></city-edit>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection