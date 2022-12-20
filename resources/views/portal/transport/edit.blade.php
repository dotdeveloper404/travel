@extends('portal.layouts.app')

@section('content')

<div class="d-flex flex-column-fluid">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 ">
                <div class="card ">
                <transport-edit :transport-data = "{{ $transport }}" :type-data="{{json_encode($type)}}"></transport-edit>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection