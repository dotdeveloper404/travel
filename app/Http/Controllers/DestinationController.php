<?php

namespace App\Http\Controllers;

use App\Enums\Duration;
use App\Enums\Languages;
use App\Enums\PackageType;
use App\Enums\ProductType;
use App\Models\City;
use App\Models\Country;
use App\Models\Destination;
use App\Models\Package;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request,$city = null)
    {
        $city_id = City::whereSlug($city)->pluck('id')->first();
       
        $destinations = Destination::with('city.country')->where('city_id',$city_id)->get();
      
        return view('frontend.destinations.destinations',compact('destinations'));
    }

    public function places(Request $request)
    {
        $places = City::with('country')->get();
        return view('frontend.destinations.places',compact('places'));
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Destination $destination)
    {
        $destination->load('city');
        return view('frontend.destinations.destination-single', ['destination' => $destination]);
    }
}
