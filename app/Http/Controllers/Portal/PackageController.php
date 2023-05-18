<?php

namespace App\Http\Controllers\Portal;

use App\Enums\Duration;
use App\Enums\Languages;
use App\Enums\PackageType;
use App\Enums\ProductType;
use App\Http\Controllers\Controller;
use App\Http\Requests\PackageStoreRequest;
use App\Http\Requests\PackageUpdateRequest;
use App\Models\City;
use App\Models\Country;
use App\Models\Destination;
use App\Models\Hotel;
use App\Models\Package;
use App\Models\PackageHotel;
use App\Models\PackageImage;
use App\Models\Transport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PackageController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $packages = Package::get();
        return view("portal.packages.index", compact('packages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $packageType = PackageType::values();
        $productType = ProductType::values();
        $languages = Languages::values();
        $hotels =  Hotel::get();
        $country = Country::get();
        $city = City::get();
        $transports =  Transport::get();
        $duration = Duration::values();
        $destinations = Destination::get();
        return view('portal.packages.create', ['product_type' => $productType, 'package_type' => $packageType, 'languages' => $languages, 'hotels' => $hotels, 'transports' => $transports, 'duration' => $duration , 'cities' => $city,'countries'=>$country,'destinations'=>$destinations]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PackageStoreRequest $request)
    {
        $data = $request->validated();
        $data['package']['itenary'] = json_encode($request->itenaries);
        $data['package']['faqs'] = json_encode($request->faqs);
        // $data['package']['destinations'] = json_encode($request->destinations);
        
        if ($request->hasFile('featured_image')) {

            $name = $this->moveFile($request->file('featured_image'), Package::getUploadPath());
            $data['package']['featured_image']  = $name;
        }
        $package = Package::create($data['package']);

        $package->hotels()->sync($request->package['hotels']);
        $package->transports()->sync($request->package['transports']);

        if ($request->has('images')) {
            foreach ($request->images as $image) {
                $package->images()->create([
                    'name' => $image,
                ]);
            }
        }

        return $this->success('Package Saved Successfully');
    }

    public function uploadImage(Request $request)
    {
        $path = storage_path('app/public/uploads/package_images');

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
        $images = PackageImage::wherePackageId($id)->get();
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
        $package = Package::with('images')->with('hotels')->with('transports')->find($id);
        $packageType = PackageType::values();
        $productType = ProductType::values();
        $languages = Languages::values();
        $country = Country::get();
        $city = City::get();
        $hotels =  Hotel::get();
        $transports =  Transport::get();
        $duration =  Duration::values();
        $destinations = Destination::get();
        return view('portal.packages.edit', ['package' => $package, 'product_type' => $productType, 'package_type' => $packageType, 'languages' => $languages, 'hotels' => $hotels, 'transports' => $transports , 'duration' => $duration ,'cities'=> $city ,'countries'=>$country,'destinations'=>$destinations]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PackageUpdateRequest $request, Package $package)
    {
        $data = $request->validated();
        //  $data = $data->safe()->merge(['itenary' => json_encode($request->itenaries)]);
        $data = array_merge($data['package'], ['itenary' => json_encode($request->itenaries), 'faqs' => json_encode($request->faqs)]);
        // 'destinations' => json_encode($request->destinations)]);
        if ($request->hasFile('featured_image')) {
            $name = $this->moveFile($request->file('featured_image'), Package::getUploadPath());
            // $data =  $request->safe()->merge(['featured_image' => $name]);
            $data = array_merge($data, ['featured_image' => $name]);
        }

      
        $package = tap($package)->update($data);
        $package->hotels()->sync($request->package_hotel);
        $package->transports()->sync($request->package_transport);

        if ($request->has('addedImages')) {
            foreach ($request->addedImages as $image) {
                $package->images()->create([
                    'name' => $image,
                ]);
            }
        }

        if ($request->has('deletedImages')) {
            foreach ($request->deletedImages as $image) {
                File::delete(storage_path('app/public/uploads/package_images/' . $image));
                PackageImage::whereName($image)->delete();
            }
        }

        return $this->success('Package Saved Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Package $package)
    {
        $package->load('images', 'hotels', 'transports');

           $package->hotels()->detach();
           $package->transports()->detach();

        foreach($package->images as $image)
        {
            File::delete(storage_path('app/public/uploads/package_images/' . $image->name));
            PackageImage::whereName($image)->delete();

        }
        $package->bookings()->delete();
        $package->delete();

        return $this->success('Package has been deleted successfully');
    }

    public function softDelete(Request $request){

        $package = Package::find($request->id);
        $package->update(['status' => $package->status == 1  ?  0 : 1]);

        return $this->success('Package has been inactive');
   
    }
}
