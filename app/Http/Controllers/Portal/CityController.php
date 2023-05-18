<?php

namespace App\Http\Controllers\Portal;

use App\Http\Controllers\Controller;
use App\Http\Requests\Portal\CityStoreRequest;
use App\Models\City;
use App\Models\Country;
use Elementor\Core\Utils\Str;
use Illuminate\Http\Request;
use PHPUnit\Framework\Constraint\Count;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $countries = Country::whereIsActive('1')->get();
        $cities = $request->has('country_id') ? City::with('country')->whereCountryId($request->country_id)->get() :  City::with('country')->get();
     
        return view('portal.city.index', compact('cities','countries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::get();
        return view('portal.city.create', compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CityStoreRequest $request)
    {
        $data = $request->validated();
        $data['city']['name'] = strtolower($data['city']['name']);
        if ($request->hasFile('image')) {
            $name = $this->moveFile($request->file('image'), City::getUploadPath());
            $data['city']['image']  = $name;
        }
        City::create($data['city']);

        return  $this->success('City created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $countries = Country::get();
        $city = City::find($id);
        return view('portal.city.edit', ['city' => $city, 'countries' => $countries]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CityStoreRequest $request, City $city)
    {
        $data = $request->validated();
        $data['city']['name'] = strtolower($data['city']['name']);
        if ($request->hasFile('image')) {
            $name = $this->moveFile($request->file('image'), City::getUploadPath());
            $data['city']  =array_merge( $data['city'], ['image' => $name]);
        }

        $city->update($data['city']);

        return   $this->success('City updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $city = City::find($id);
        $city->delete();
        return $this->success('City deleted');
    }
}
