<?php

namespace App\Http\Controllers\Portal;

use App\Http\Controllers\Controller;
use App\Http\Requests\Portal\CountryStoreRequest;
use App\Models\Country;
use Elementor\Core\Utils\Str;
use Illuminate\Http\Request;
use PHPUnit\Framework\Constraint\Count;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = Country::get();
        return view('portal.country.index', compact('countries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('portal.country.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CountryStoreRequest $request)
    {
        $data = $request->validated();
        $data['country']['name'] = strtolower($data['country']['name']);
        if ($request->hasFile('image')) {
            $name = $this->moveFile($request->file('image'), Country::getUploadPath());
            $data['country']['image']  = $name;
        }
        Country::create($data['country']);

        return  $this->success('country created successfully');
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
        $country = Country::find($id);
        return view('portal.country.edit', ['country' => $country, 'countries' => $countries]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CountryStoreRequest $request, Country $country)
    {
        $data = $request->validated();
        $data['country']['name'] = strtolower($data['country']['name']);
        if ($request->hasFile('image')) {
            $name = $this->moveFile($request->file('image'), Country::getUploadPath());
            $data['country']  =array_merge( $data['country'], ['image' => $name]);
        }

        $country->update($data['country']);

        return   $this->success('country updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $country = Country::find($id);
        $country->delete();
        return $this->success('country deleted');
    }
}
