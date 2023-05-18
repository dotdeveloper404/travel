@extends('portal.layouts.app')

@section('content')

<div class="d-flex flex-column-fluid">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 ">
                <div class="card ">
                <country-edit  :country-data="{{json_encode($country)}}"></country-edit>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection