@extends('portal.layouts.app')

@section('content')

<div class="d-flex flex-column-fluid">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 ">
                <div class="card ">
                <destination-edit :cities = "{{ $cities }}" :destination-data="{{json_encode($destination)}}"></destination-edit>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection