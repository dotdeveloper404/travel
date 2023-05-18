@extends('portal.layouts.app')

@section('content')

<div class="d-flex flex-column-fluid">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 ">
                <div class="card card-custom gutter-b example example-compact">

                <destination-create :cities="{{ json_encode($cities) }}"></destination-create>
                
                </div>
            </div>
        </div>
    </div>
</div>

@endsection