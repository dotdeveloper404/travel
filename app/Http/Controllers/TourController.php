<?php

namespace App\Http\Controllers;

use App\Enums\Duration;
use App\Enums\Languages;
use App\Enums\ProductType;
use App\Enums\TourType;
use App\Models\City;
use App\Models\Country;
use App\Models\Tour;
use Illuminate\Http\Request;

class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $request_cities = array();


        $tours =  Tour::with('images')->with('transports')->where('status', 1); //->paginate(10); //Tour::with('images')->with('transports')->paginate(10);
        if($request->has('free_cancelation')){
            $tours->orWhere('free_cancelation',1);
        }
        if($request->has('deals_and_discount')){
            $tours->orWhere('deals_and_discount',1);
        }

        if ($request->has('group_type')) {
            $packages->orWhere('group_type', $request->group_type);
        }


        if($request->has('tour_type')){
            foreach($request->tour_type as $key=>$type){
            $tours->orWhere('tour_type',$type);
            }
        }
        if($request->has('city')){
            $tours->orWhere('city','like','%'.$request->city.'%');
            $request_cities =    $request->get('cities');

        }
        if($request->has('p1') && $request->p1 > 0 ){
            $tours->orWhereBetween('net_amount',[$request->p1,$request->p2]);
        }
        $tours = $tours->paginate(10);
        $tourType = TourType::values();
        $productType = ProductType::values();
        $languages = Languages::values();
        $countries = Country::whereIsActive(1)->get();
        $cities = City::get();
        $duration = Duration::values();

        return view('frontend.tours.listing', compact('tours', 'productType', 'tourType','languages','countries','cities', 'duration','request_cities'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Tour $tour)
    {

        $tour->load('images', 'transports');
        $itenary = null;
        $faqs = null;
        $itenary =   $tour->itenary  != null  ? collect(json_decode($tour->itenary, true)) : null;
        $faqs =   $tour->faqs  != null  ? collect(json_decode($tour->faqs, true)) : null;

        $similar_tours = Tour::where('tour_type', $tour->tour_type)->get();

        return view('frontend.tours.tour-single', ['tour' => $tour, 'itenaries' => $itenary, 'faqs' => $faqs, 'similar_tours' => $similar_tours]);
    }
}
