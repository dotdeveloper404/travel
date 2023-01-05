<?php

namespace App\Http\Controllers;

use App\Http\Requests\Frontend\PackageBookingStoreRequest;
use App\Models\Package;
use App\Models\PackageBooking;
use RealRashid\SweetAlert\Facades\Alert;


class PackageBookingController extends Controller
{

    public function store(PackageBookingStoreRequest $request, Package $package)
    {

        $data = $request->validated();
        $data['package_id'] = $package->id;
        PackageBooking::create($data);

        Alert::success('your package has been successfully booked', 'success');
        return redirect()->back()->with('message','your package has been successfully booked');

    }
}
