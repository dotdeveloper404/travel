<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $packages = Package::with('images','hotels','transports')->get();
        return view('frontend.packages.listing', compact('packages'));
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

        return view('frontend.packages.package-single', ['package' => $package, 'itenaries' => $itenary, 'faqs' => $faqs]);
    }
}
