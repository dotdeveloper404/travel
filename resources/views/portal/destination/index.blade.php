@extends('portal.layouts.app')

@section('content')

<div class="d-flex flex-column-fluid">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 ">
                <div class="card ">
                 

                    <form method="GET">
                    <a  class="btn btn-primary float-right"  href="{{route('portal.destination.create')}}">Add New</a>

                        <div class="col col-md-6">
                            <select name="city_id" class="form-control" required>
                                <option value="">--Select City--</option>
                                @foreach($cities as $city)
                                <option {{ Request::get('city_id') == $city->id  ? 'selected' : ''  }} value="{{$city->id}}">{{$city->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                        <button class="btn btn-danger" type="submit">Search</button>
                        </div>
                    </form>
                    <destination-list :destinations="{{$destinations}}"></destination-list>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection