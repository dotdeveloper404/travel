<?php

namespace App\Http\Controllers\Portal;

use App\Http\Controllers\Controller;
use App\Models\Hotel;
use App\Models\HotelImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $hotels = Hotel::all();
        return view('portal.hotels.index', compact('hotels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('portal.hotels.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        dd($request);
        die;
        $data = $request->validate([
            'hotel.name' => ['required', 'string'],
            'hotel.description' => ['required'],
            'hotel.city' => ['required'],
            'hotel.state' => ['required'],
            'hotel.country' => ['required'],
            'hotel.contact_no_1' => ['required'],
            'hotel.contact_no_2' => 'nullable',
            'hotel.property_info' => 'nullable',
            'hotel.main_amenities' => 'nullable',
            'hotel.about_this_area' => 'nullable',
            'hotel.about_this_property' => 'nullable',
            'hotel.at_a_glance' => 'nullable',
            'hotel.property_amenities' => 'nullable',
            'hotel.room_amenities' => 'nullable',
        ]);

        $hotel = Hotel::create($data['hotel']);

        if(isset($request->images)){
        foreach ($request->images as $image) {
            // $from = storage_path('app/public/uploads/hotel_images'. $image);
            // $to = public_path('hotel_images' . $image);

            // File::move($from,$to);
            $hotel->images()->create([
                'name' => $image,
            ]);
        }
    }

        return $this->success('hotel data stores successfully');
    }


    public function uploadImage(Request $request)
    {
        $path = storage_path('app/public/uploads/hotel_images');

        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }

        $file = $request->file('image');

        $name = $file->hashName(); // uniqid() . '_' . trim($file->getClientOriginalName());

        $file->move($path, $name);

        return ['name' => $name];
    }


    public function getImages($id)
    {
        $images = HotelImage::whereHotelId($id)->get();
        return ['media' => $images];
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

        $hotel = Hotel::with('images')->find($id);

        return view('portal.hotels.edit', ['hotel' => $hotel]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function updateHotel($id,Request $request)
    {
        
        $data = $request->validate([
            'hotel.name' => ['required', 'string'],
            'hotel.description' => ['required'],
            'hotel.city' => ['required'],
            'hotel.state' => ['required'],
            'hotel.country' => ['required'],
            'hotel.contact_no_1' => ['required'],
            'hotel.contact_no_2' => 'nullable',
            'hotel.property_info' => 'nullable',
            'hotel.main_amenities' => 'nullable',
            'hotel.about_this_area' => 'nullable',
            'hotel.about_this_property' => 'nullable',
            'hotel.at_a_glance' => 'nullable',
            'hotel.property_amenities' => 'nullable',
            'hotel.room_amenities' => 'nullable',
        ]);

        $hotel = Hotel::find($id)->with('images')->update($data['hotel']);
        if (isset($request->addedImages)) {
            foreach ($request->addedImages as $image) {
                $hotel->images()->create([
                    'name' => $image,
                ]);
            }
        }

        if (isset($request->deletedImages)) {
            foreach ($request->deletedImages as $image) {
                File::delete(storage_path('app/public/uploads/hotel_images/' . $image));
                HotelImage::whereName($image)->delete();
            }
        }

        return $this->success('hotel data update successfully');
    }
    public function update($id,Request $request)
    {
       
        $data = $request->validate([
            'hotel.name' => ['required', 'string'],
            'hotel.description' => ['required'],
            'hotel.city' => ['required'],
            'hotel.state' => ['required'],
            'hotel.country' => ['required'],
            'hotel.contact_no_1' => ['required'],
            'hotel.contact_no_2' => 'nullable',
            'hotel.property_info' => 'nullable',
            'hotel.main_amenities' => 'nullable',
            'hotel.about_this_area' => 'nullable',
            'hotel.about_this_property' => 'nullable',
            'hotel.at_a_glance' => 'nullable',
            'hotel.property_amenities' => 'nullable',
            'hotel.room_amenities' => 'nullable',
        ]);


        $hotel = Hotel::find($id)->update($data['hotel']);

        if (isset($request->addedImages)) {
            foreach ($request->addedImages as $image) {
                $hotel->images()->create([
                    'name' => $image,
                ]);
            }
        }

        if (isset($request->deletedImages)) {
            foreach ($request->deletedImages as $image) {
                File::delete(storage_path('app/public/uploads/hotel_images/' . $image));
                HotelImage::whereName($image)->delete();
            }
        }

        return $this->success('hotel data update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hotel = Hotel::find($id);
        $hotel->delete();
        return $this->success('Hotel deleted');
    }
}
