<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Http\Request;

class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tours = Tour::with('images')->with('transports')->get();
        return view('frontend.tours.listing', compact('tours'));
    }

    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Tour $tour)
    {
      
        $tour->load('images','transports');
        $itenary = null;
        $faqs= null;
        if ($tour != null) {
            $itenary =   $tour->itenary  != null  ? collect(json_decode($tour->itenary, true)) : null;
            $faqs =   $tour->faqs  != null  ? collect(json_decode($tour->faqs, true)) : null;
        }
        return view('frontend.tours.tour-single', ['tour' => $tour, 'itenaries' => $itenary, 'faqs'=> $faqs]);
    }

     
}
