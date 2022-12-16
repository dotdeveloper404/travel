@extends('portal.layouts.app')

@section('content')

<div class="d-flex flex-column-fluid">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 ">
                <div class="card card-custom gutter-b example example-compact">

                <hotel-room-list :hotelRooms ="{{$hotelRooms}}"></hotel-room-list>
                
                </div>
            </div>
        </div>
    </div>
</div>

@endsection