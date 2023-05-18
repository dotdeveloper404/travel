@extends('portal.layouts.app')

@section('content')

<div class="d-flex flex-column-fluid">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 ">
                <div class="card ">
                    <form method="GET">
                        <div class="col col-md-6">
                            <select name="country_id" class="form-control capitalize" required>
                                <option value="">--Select Country--</option>
                                @foreach($countries as $country)
                                <option {{ Request::get('country_id') == $country->id  ? 'selected' : ''  }} value="{{$country->id}}">{{$country->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <button class="btn btn-danger" type="submit">Search</button>
                        </div>
                    </form>
                    <city-list :cities="{{$cities}}"></city-list>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection