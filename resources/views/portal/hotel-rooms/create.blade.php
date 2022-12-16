@extends('portal.layouts.app')

@section('content')

<div class="d-flex flex-column-fluid">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 ">
                <div class="card card-custom gutter-b example example-compact">

                <hotel-room-create :hotel_id= "{{$hotel_id}}" ></hotel-room-create>
                
                </div>
            </div>
        </div>
    </div>
</div>

@endsection