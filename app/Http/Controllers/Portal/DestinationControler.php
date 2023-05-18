<?php

namespace App\Http\Controllers\Portal;

use App\Http\Controllers\Controller;
use App\Http\Requests\Portal\DestinationRequest;
use App\Models\City;
use App\Models\Destination;
use Illuminate\Http\Request;

class DestinationControler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $cities = City::get();
        $destinations = $request->has('city_id') ? Destination::with('city')->whereCityId($request->city_id)->get() :  Destination::with('city')->get();
        return view('portal.destination.index', compact('cities', 'destinations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cities = City::get();

        return view('portal.destination.create', ['cities' => $cities]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DestinationRequest $request)
    {
        $data = $request->validated();
        $data['destination']['name'] = strtolower($data['destination']['name']);

        if ($request->hasFile('image')) {
            $name = $this->moveFile($request->file('image'), Destination::getUploadPath());
            $data['destination']['image'] =  $name;
        }

        Destination::create($data['destination']);


        return $this->success('Destination created successfully');
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
        $cities = City::get();
        $destination = Destination::find($id);
        return view('portal.destination.edit', ['cities' => $cities, 'destination' => $destination]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DestinationRequest $request, Destination $destination)
    {
        $data = $request->validated();
        $data['destination']['name'] = strtolower($data['destination']['name']);
        if ($request->hasFile('image')) {
            $name = $this->moveFile($request->file('image'), Destination::getUploadPath());
            $data['destination'] = array_merge($data['destination'], ['image' => $name]);
        }

        $destination->update($data['destination']);

        return $this->success('destination edit successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destination = Destination::find($id);
        $destination->delete();
        return $this->success('Destination deleted successfully');
    }
}
