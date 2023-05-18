<?php

namespace App\Http\Controllers\Portal;

use App\Enums\Duration;
use App\Enums\Languages;
use App\Http\Controllers\Controller;
use App\Enums\ProductType;
use App\Enums\TourType;
use App\Http\Requests\Portal\TourStoreRequest;
use App\Models\City;
use App\Models\Country;
use App\Models\Hotel;
use App\Models\Tour;
use App\Models\TourImage;
use App\Models\Transport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class TourController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tours = Tour::get();
        return view("portal.tours.index", compact('tours'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tourType = TourType::values();
        $productType = ProductType::values();
        $transports =  Transport::get();
        $languages = Languages::values();
        $duration =  Duration::values();
        $cities= City::get();
        $country = Country::get();

        return view('portal.tours.create', ['product_type' => $productType, 'tour_type' => $tourType, 'transports' => $transports,'languages' => $languages , 'duration' => $duration , 'cities'=>$cities,'countries'=>$country]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TourStoreRequest $request)
    {
        // $validator = Validator::make($request->all(), [
          
        // ]);

        // if ($validator->fails()) {
        //     return $this->validationError($validator->errors(), 'Failed to save data');
        // }

        $data = $request->validated();


        $data = array_merge($data['tour'], ['itenary' => json_encode($request->itenaries), 'faqs' => json_encode($request->faqs),'destinations' => json_encode($request->destinations)]);
        if ($request->hasFile('featured_image')) {
            $name = $this->moveFile($request->file('featured_image'), Tour::getUploadPath());
            $data = array_merge($data, ['featured_image' => $name]);
        }
        $tour = Tour::create($data);
        $tour->transports()->sync($request->tour['transports']);

        if (isset($request->images)) {
            foreach ($request->images as $image) {
                $tour->images()->create([
                    'name' => $image,
                ]);
            }
        }

        return $this->success('tour Saved Successfully');
    }

    public function uploadImage(Request $request)
    {
        $path = storage_path('app/public/uploads/tour_images');

        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }
        $file = $request->file('image');

        $name = $file->hashName();

        $file->move($path, $name);

        return ['name' => $name];
    }

    public function getImages($id)
    {
        $images = TourImage::wheretourId($id)->get();
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
        $tour = Tour::with('images')->with('transports')->find($id);
        $tourType = TourType::values();
        $productType = ProductType::values();
        $transports =  Transport::get();
        $languages = Languages::values();
        $duration =  Duration::values();
        $cities = City::get();
        $duration =  Duration::values();
        $country = Country::get();
        return view('portal.tours.edit', ['tour' => $tour, 'product_type' => $productType, 'tour_type' => $tourType, 'transports' => $transports,'languages' => $languages , 'duration' => $duration,'cities' => $cities,'countries'=>$country]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TourStoreRequest $request, Tour $tour)
    {
        
        $data = $request->validated();

        $data = array_merge($data['tour'], ['itenary' => json_encode($request->itenaries), 'faqs' => json_encode($request->faqs),'destinations' => json_encode($request->destinations)]);

        if ($request->hasFile('featured_image')) {
            $name = $this->moveFile($request->file('featured_image'), Tour::getUploadPath());
            $data = array_merge($data, ['featured_image' => $name]);
        }

        $tour = tap($tour)->update($data);
        $tour->transports()->sync($request->tour_transport);

        if (isset($request->addedImages)) {
            foreach ($request->addedImages as $image) {
                $tour->images()->create([
                    'name' => $image,
                ]);
            }
        }

        if (isset($request->deletedImages)) {
            foreach ($request->deletedImages as $image) {
                File::delete(storage_path('app/public/uploads/tour_images/' . $image));
                tourImage::whereName($image)->delete();
            }
        }

        return $this->success('tour Saved Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tour $tour)
    {

        $tour->update(['status'=> $tour->status == 1  ?  0 : 1 ]);
    
        return $this->success('Tour has been inactive');
    }
}
