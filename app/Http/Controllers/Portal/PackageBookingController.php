<?php

namespace App\Http\Controllers\Portal;

use App\Enums\BookingStatus;
use App\Http\Controllers\Controller;
use App\Http\Requests\PackageBookingUpdateRequest;
use App\Models\Agent;
use App\Models\Package;
use App\Models\PackageBooking;
use Illuminate\Auth\Access\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate as FacadesGate;

class PackageBookingController extends Controller
{

    public function bookingList()
    {
        $bookings = PackageBooking::with('package')->get();
        return view("portal.package-bookings.index", compact('bookings'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $booking = PackageBooking::with('package')->findOrfail($id);
        $bookingStatus = BookingStatus::values();
        $agent = Agent::get();
        return view('portal.package-bookings.edit', ['booking' => $booking, 'status' => $bookingStatus, 'agents' => $agent]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PackageBookingUpdateRequest $request, Package $package, PackageBooking $packageBooking)
    {
        // if (Gate::denies('update', $package)) {
        //     abort(403);
        // }

        $data = $request->validated();

        $packageBooking->update($data['booking']);

        return $this->success('Booking Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
