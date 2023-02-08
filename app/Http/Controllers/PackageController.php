<?php

namespace App\Http\Controllers;

use App\Enums\PackageType;
use App\Enums\ProductType;
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
        $packages = Package::with('images','hotels','transports')->where('status',1);
      

        if ($request->tour_type != null) {

            $packages->where('tour_type', $request->tour_type);
        }
        if ($request->product_type != null) {
            $packages->orWhere('product_type', $request->product_type);
        }
        if ($request->nights != null) {
            $packages->orWhere('nights', $request->nights);
        }
        if ($request->days != null) {
            $packages->orWhere('days', $request->days);
        }
        if ($request->start_date != null) {
            $packages->orWhere('traveling_date_start', '>=', $request->start_date);
        }
        if ($request->end_date != null) {
            $packages->orWhere('traveling_date_end', '<=', $request->end_date);
        }

       $packages  =  $packages->paginate(10);

        $packageType = PackageType::values();
        $productType = ProductType::values();

        return view('frontend.packages.listing', compact('packages','packageType','productType'));
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

        $similar_packages = Package::where('package_type',$package->package_type)->get();
        
        return view('frontend.packages.package-single', ['package' => $package, 'itenaries' => $itenary, 'faqs' => $faqs,'similar_packages' => $similar_packages]);
    }
}
