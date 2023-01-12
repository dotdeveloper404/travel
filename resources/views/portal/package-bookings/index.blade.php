@extends('portal.layouts.app')

@section('content')

<div class="d-flex flex-column-fluid">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 ">
                <div class="card card-custom gutter-b example example-compact">

                <package-booking-list :bookings ="{{$bookings}}"></package-booking-list>
                
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')

<script>
 
 </script>
@endpush