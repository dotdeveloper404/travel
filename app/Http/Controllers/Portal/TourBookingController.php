<?php

namespace App\Http\Controllers\Portal;

use App\Enums\BookingStatus;
use App\Http\Controllers\Controller;
use App\Http\Requests\TourBookingUpdateRequest;
use App\Models\Agent;
use App\Models\Tour;
use App\Models\TourBooking;
use Illuminate\Auth\Access\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate as FacadesGate;

class TourBookingController extends Controller
{

    public function bookingList()
    {
        $bookings = TourBooking::with('tour')->get();
        return view("portal.tour-bookings.index", compact('bookings'));
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
        $booking = TourBooking::with('tour')->findOrfail($id);
        $bookingStatus = BookingStatus::values();
        $agent = Agent::get();
        return view('portal.tour-bookings.edit', ['booking' => $booking, 'status' => $bookingStatus, 'agents' => $agent]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TourBookingUpdateRequest $request, TourBooking $tour)
    {

        $data = $request->validated();

        $tour->update($data['booking']);

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