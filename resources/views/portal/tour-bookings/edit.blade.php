@extends('portal.layouts.app')

@section('content')

<div class="d-flex flex-column-fluid">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 ">
                <div class="card card-custom gutter-b example example-compact">
              
                <tour-booking-edit  :booking-data = "{{ $booking }}" :booking-status = "{{ json_encode($status)}}" :agents = "{{ json_encode($agents)}}" ></tour-booking-edit>
                   
                
                </div>
            </div>
        </div>
    </div>
</div>

@endsection