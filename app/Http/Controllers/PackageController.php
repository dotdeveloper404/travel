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

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $request_cities = array();

        $packages = Package::with('images', 'hotels', 'transports')->where('status', 1);

        if ($request->has('free_cancelation')) {
            $packages->orWhere('free_cancelation', 1);
        }
        if ($request->has('deals_and_discount')) {
            $packages->orWhere('deals_and_discount', 1);
        }

        if ($request->has('group_type')) {
            $packages->orWhere('group_type', $request->group_type);
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
        if($request->has('duration')){
            foreach($request->duration as $key=>$values){
                $packages->orWhere('duration',$values);
            }
        }

        $packages  =  $packages->paginate(10);
        $packageType = PackageType::values();
        $productType = ProductType::values();
        $languages = Languages::values();
        $countries = Country::whereIsActive(1)->get();
        $cities = City::get();
        $duration = Duration::values();
     
        return view('frontend.packages.listing', compact('packages', 'packageType', 'productType', 'languages', 'countries', 'cities', 'duration','request_cities'));
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

        $itenary = $package->itenary  != null  ? collect(json_decode($package->itenary, true)) : null;
        $faqs = $package->faqs  != null  ? collect(json_decode($package->faqs, true)) : null;

        $similar_packages = Package::where('package_type', $package->package_type)->get();

        return view('frontend.packages.package-single', ['package' => $package, 'itenaries' => $itenary, 'faqs' => $faqs, 'similar_packages' => $similar_packages]);
    }

    public function packageWithTopCategory($package_type){

        $request_cities = array();

        $packages = Package::with('images', 'hotels', 'transports')->where('status', 1)->wherePackageType($package_type);

        $packages  =  $packages->paginate(10);
        $packageType = PackageType::values();
        $productType = ProductType::values();
        $languages = Languages::values();
        $countries = Country::whereIsActive(1)->get();
        $cities = City::get();
        $duration = Duration::values();
     
        return view('frontend.packages.listing', compact('packages', 'packageType', 'productType', 'languages', 'countries', 'cities', 'duration','request_cities'));
   
    }
}
