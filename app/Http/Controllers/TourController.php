<?php

namespace App\Http\Controllers;

use App\Enums\ProductType;
use App\Enums\TourType;
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

        $tours =  Tour::where('status', 1)->with('images')->with('transports'); //->paginate(10); //Tour::with('images')->with('transports')->paginate(10);


        //$tours = Tour::query();

        if ($request->tour_type != null) {

            $tours->where('tour_type', $request->tour_type);
        }
        if ($request->product_type != null) {
            $tours->orWhere('product_type', $request->product_type);
        }
        if ($request->nights != null) {
            $tours->orWhere('nights', $request->nights);
        }
        if ($request->days != null) {
            $tours->orWhere('days', $request->days);
        }
        if ($request->start_date != null) {
            $tours->orWhere('traveling_date_start', '>=', $request->start_date);
        }
        if ($request->end_date != null) {
            $tours->orWhere('traveling_date_end', '<=', $request->end_date);
        }

        // $tours->get();
        $tours =  $tours->paginate(10);
        // dd($tours->get());
        // dd( $tours->paginate(10));
        //  $tours->with('images')->with('transports')->paginate(10);

        // dd($tours->paginate(2));

        $tourType = TourType::values();
        $productType = ProductType::values();

        return view('frontend.tours.listing', compact('tours', 'productType', 'tourType'));
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
