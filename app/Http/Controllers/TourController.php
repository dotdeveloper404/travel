<?php

namespace App\Http\Controllers;

use App\Enums\Duration;
use App\Enums\Languages;
use App\Enums\ProductType;
use App\Enums\TourType;
use App\Mail\TourBookingMail;
use App\Models\City;
use App\Models\Country;
use App\Models\Destination;
use App\Models\Tour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use PDF;
class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $country = null, $city = null)
    {
        $metas= '';
        $request_cities = array();

        $tours =  Tour::with('images')->with('transports')->where('status', 1); //->paginate(10); //Tour::with('images')->with('transports')->paginate(10);

        if ($city  != null && $country != null) {
              $tours->where('country', 'like', '%'.$country.'%');
              $tours->where('city', 'like', '%'.$city.'%');
        }
        if($request->has('free_cancelation')){
            $tours->orWhere('free_cancelation',1);
        }
        if($request->has('deals_and_discount')){
            $tours->orWhere('deals_and_discount',1);
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

        foreach ($tours as $tour) {
            $tourDestination = collect();
            if ($tour->destinations != null) {
                foreach ($tour->destinations as $destination) {
                    $des =   Destination::with('city')->whereId($destination)->get();
                    if (count($des) > 0) {
                        $tourDestination->add($des);
                    }
                }
            }
            $tour->tour_destination = $tourDestination;
        }


        return view('frontend.tours.listing', compact('tours', 'productType', 'tourType','languages','countries','cities', 'duration','request_cities','metas'));
    }


    public function downloadPackagePdf(Tour $tour)
    {

        $tour->load('images', 'hotels', 'transports');

        $itenary = null;
        $faqs = null;

        $itenaries = $tour->itenary  != null  ? collect(json_decode($tour->itenary, true)) : null;

        $faqs = $tour->faqs  != null  ? collect(json_decode($tour->faqs, true)) : null;


        $pdf = PDF::loadView('frontend.tours.tour-pdf', ['tour' => $tour, 'itenaries' => $itenaries, 'faqs' => $faqs])
            ->setOptions(['defaultFont' => 'poppins',  'isRemoteEnabled' => true]);


        $content = array(
            'heading' => "tour Booking Heading",
            'message' => "tour Booking Message"
        );
        Mail::to(env('MAIL_USERNAME'))->send(new TourBookingMail($package, $itenaries, $faqs, $content, $pdf->output()));

        return $pdf->download($tour->tour_name . '.pdf');
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

        $tourDestination = collect();
        if ($tour->destinations != null) {
            foreach ($tour->destinations as $destination) {
                $des =   Destination::with('city')->whereId($destination)->get();
                if (count($des) > 0) {
                    $tourDestination->add($des);
                }
            }
        }
        $tour->tour_destination = $tourDestination;

        $cities = City::get();

        return view('frontend.tours.tour-single', ['tour' => $tour, 'itenaries' => $itenary, 'faqs' => $faqs, 'similar_tours' => $similar_tours, 'cities' => $cities]);
    }
}
