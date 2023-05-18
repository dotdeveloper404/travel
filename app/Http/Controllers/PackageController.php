<?php

namespace App\Http\Controllers;

use App\Enums\Duration;
use App\Enums\Languages;
use App\Enums\PackageType;
use App\Enums\ProductType;
use App\Models\City;
use App\Models\Country;
use App\Models\Package;
use Illuminate\Http\Request;
use App\Mail\PackageBookingMail;
use App\Models\Destination;
use ElementorPro\Core\Utils\Collection;
use Illuminate\Support\Facades\Mail;
use PDF;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $country = null, $city = null)
    {

        $request_cities = array();
        $metas = '';
        $packages = Package::with('images', 'hotels', 'transports')->where('status', 1);

        if ($city  != null && $country != null) {
            $packages->where('country', 'like', '%' . $country . '%');
            $packages->where('city', 'like', '%' . $city . '%');

            $metas  = City::where('name', 'like', '%' . $city . '%')->first();
        }
        if ($request->has('free_cancelation')) {
            $packages->orWhere('free_cancelation', 1);
        }
        if ($request->has('deals_and_discount')) {
            $packages->orWhere('deals_and_discount', 1);
        }

        if ($request->has('package_type')) {
            foreach ($request->package_type as $key => $type) {
                $packages->orWhere('package_type', $type);
            }
        }
        if ($request->has('cities')) {
            foreach ($request->cities as $key => $value) {
                $packages->orWhere('city', 'like', '%' . $value . '%');
            }

            $request_cities =    $request->get('cities');
        }
        if ($request->has('p1') && $request->p1 > 0) {
            $packages->orWhereBetween('net_amount', [$request->p1, $request->p2]);
        }
        if ($request->has('duration')) {
            foreach ($request->duration as $key => $values) {
                $packages->orWhere('duration', $values);
            }
        }


        $packages  =  $packages->paginate(10);
        $packageType = PackageType::values();
        $productType = ProductType::values();
        $languages = Languages::values();
        $countries = Country::whereIsActive(1)->get();
        $cities = City::get();
        $duration = Duration::values();

        // for destination
        //   foreach($packages as $package){
        //     $packageDestination= collect();
        //     foreach ($package->city as $city) {
        //         $des =   Destination::with('city')->whereCityId($city)->get();
        //         if(count($des) > 0 ){
        //             $packageDestination->add($des);
        //         }
        //     }
        //     $package->package_destination = $packageDestination;

        // }

        foreach ($packages as $package) {
            $packageDestination = collect();
            if ($package->destinations != null) {
                foreach ($package->destinations as $destination) {
                    $des =   Destination::with('city')->whereId($destination)->get();
                    if (count($des) > 0) {
                        $packageDestination->add($des);
                    }
                }
            }
            $package->package_destination = $packageDestination;
        }

        // dd($packages[0]['package_destination'][0][0]);


        return view('frontend.packages.listing', compact('packages', 'packageType', 'productType', 'languages', 'countries', 'cities', 'duration', 'request_cities', 'metas'));
    }


    public function country($country, Request $request)
    {

        $request_cities = array();

        $packages = Package::with('images', 'hotels', 'transports')->where('status', 1);

        if ($request->has('free_cancelation')) {
            $packages->orWhere('free_cancelation', 1);
        }
        if ($request->has('deals_and_discount')) {
            $packages->orWhere('deals_and_discount', 1);
        }

        if ($request->has('package_type')) {
            foreach ($request->package_type as $key => $type) {
                $packages->orWhere('package_type', $type);
            }
        }
        if ($request->has('cities')) {
            foreach ($request->cities as $key => $value) {
                $packages->orWhere('city', 'like', '%' . $value . '%');
            }

            $request_cities =    $request->get('cities');
        }
        if ($request->has('p1') && $request->p1 > 0) {
            $packages->orWhereBetween('net_amount', [$request->p1, $request->p2]);
        }
        if ($request->has('duration')) {
            foreach ($request->duration as $key => $values) {
                $packages->orWhere('duration', $values);
            }
        }

        $packages  =  $packages->paginate(10);
        $packageType = PackageType::values();
        $productType = ProductType::values();
        $languages = Languages::values();
        $countries = Country::whereIsActive(1)->get();
        $cities = City::get();
        $duration = Duration::values();


        return view('frontend.packages.listing', compact('packages', 'packageType', 'productType', 'languages', 'countries', 'cities', 'duration', 'request_cities'));
    }

    public function downloadPackagePdf(Package $package)
    {

        $package->load('images', 'hotels', 'transports');

        $itenary = null;
        $faqs = null;

        $itenaries = $package->itenary  != null  ? collect(json_decode($package->itenary, true)) : null;

        $faqs = $package->faqs  != null  ? collect(json_decode($package->faqs, true)) : null;


        $pdf = PDF::loadView('frontend.packages.package-pdf', ['package' => $package, 'itenaries' => $itenaries, 'faqs' => $faqs])
            ->setOptions(['defaultFont' => 'poppins',  'isRemoteEnabled' => true]);


        $content = array(
            'heading' => "Package Booking Heading",
            'message' => "Package Booking Message"
        );
        Mail::to(env('MAIL_USERNAME'))->send(new PackageBookingMail($package, $itenaries, $faqs, $content, $pdf->output()));
        // Mail::to('dot.developer404@gmail.com')->send(new PackageBookingMail($package, $itenaries, $faqs,$content, $pdf->output()));

        return $pdf->download($package->package_name . '.pdf');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Package $package)
    {
        $package->load('images', 'hotels', 'transports');

        $itenary = null;
        $faqs = null;

        $cities = City::get();

        $itenary = $package->itenary  != null  ? collect(json_decode($package->itenary, true)) : null;
        $faqs = $package->faqs  != null  ? collect(json_decode($package->faqs, true)) : null;

        $similar_packages = Package::where('package_type', $package->package_type)->get();

        // for destination

        // $packageDestination = collect();
        // foreach ($package->city as $city) {
        //     $des =   Destination::with('city')->whereCityId($city)->get();
        //     if (count($des) > 0) {
        //         // array_push($packageDestination,$des);
        //         $packageDestination->add($des);
        //     }
        // }
        // $package->package_destination = $packageDestination;
        $packageDestination = collect();
        if ($package->destinations != null) {
            foreach ($package->destinations as $destination) {
                $des =   Destination::with('city')->whereId($destination)->get();
                if (count($des) > 0) {
                    $packageDestination->add($des);
                }
            }
        }
        $package->package_destination = $packageDestination;

        return view('frontend.packages.package-single', ['package' => $package, 'itenaries' => $itenary, 'faqs' => $faqs, 'similar_packages' => $similar_packages, 'cities' => $cities]);
    }

    public function packageWithTopCategory($package_type)
    {

        $metas = '';

        $request_cities = array();

        $packages = Package::with('images', 'hotels', 'transports')->where('status', 1)->wherePackageType($package_type);

        $packages  =  $packages->paginate(10);
        $packageType = PackageType::values();
        $productType = ProductType::values();
        $languages = Languages::values();
        $countries = Country::whereIsActive(1)->get();
        $cities = City::get();
        $duration = Duration::values();

        return view('frontend.packages.listing', compact('packages', 'packageType', 'productType', 'languages', 'countries', 'cities', 'duration', 'request_cities', 'metas'));
    }
}
