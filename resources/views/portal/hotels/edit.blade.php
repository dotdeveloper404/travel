@extends('portal.layouts.app')

@section('content')

<div class="d-flex flex-column-fluid">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 ">
                <div class="card card-custom gutter-b example example-compact">
                <div class="form-group" role="group">
                <!-- <a class="btn btn-primary mr-2 pull-right" href="{{ route('portal.hotel.hotel-rooms.create',$hotel)}}">Add Hotel Room</a> -->
                </div>
                <hotel-edit :hotel-data = "{{ $hotel }}" :type-data="{{ json_encode($type) }}"></hotel-edit>
                
                </div>
            </div>
        </div>
    </div>
</div>

@endsection