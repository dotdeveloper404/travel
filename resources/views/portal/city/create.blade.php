@extends('portal.layouts.app')

@section('content')

<div class="d-flex flex-column-fluid">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 ">
                <div class="card card-custom gutter-b example example-compact">

                <city-create :countries="{{ json_encode($countries) }}"></city-create>
                
                </div>
            </div>
        </div>
    </div>
</div>

@endsection