<?php

namespace App\Http\Controllers\portal;

use App\Enums\PackageType;
use App\Enums\ProductType;
use App\Http\Controllers\Controller;
use App\Models\Package;
use App\Models\PackageImage;
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
        return view('portal.packages.create', ['product_type' => $productType, 'package_type' => $packageType]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'package.package_name' => ['required', 'string'],
            'package.package_type' => ['required'],
            'package.product_type' => ['required'],
            'package.traveling_date_start' => ['required'],
            'package.traveling_date_end' => ['required'],
            'package.nights' => ['required'],
            'package.days' => ['required'],
            'package.package_price' => ['required'],
            'package.discount' => 'nullable',
            'package.net_amount' => ['required'],
            'package.seasonality' => 'nullable',
            'package.city' => 'nullable',
            'package.description' => 'nullable',
            'package.features' => 'nullable',
        ]);

       $data = array_merge($data['package'], ['itenary' => json_encode($request->itenaries)]);
        if ($request->hasFile('featured_image')) {
            $name = $this->moveFile($request->file('featured_image'), Package::getUploadPath());
            $data = array_merge($data, ['featured_image' => $name]);
        }

        $package = Package::create($data);

        if (isset($request->images)) {
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
        $package = Package::with('images')->find($id);
        $packageType = PackageType::values();
        $productType = ProductType::values();
        return view('portal.packages.edit', ['package' => $package, 'product_type' => $productType, 'package_type' => $packageType]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'package.package_name' => ['required', 'string'],
            'package.package_type' => ['required'],
            'package.product_type' => ['required'],
            'package.traveling_date_start' => ['required'],
            'package.traveling_date_end' => ['required'],
            'package.nights' => ['required'],
            'package.days' => ['required'],
            'package.package_price' => ['required'],
            'package.discount' => 'nullable',
            'package.net_amount' => ['required'],
            'package.seasonality' => 'nullable',
            'package.city' => 'nullable',
            'package.description' => 'nullable',
            'package.features' => 'nullable',
            'package.itenary' => 'nullable',
        ]);
        

        $data = array_merge($data['package'], ['itenary' => json_encode($request->itenaries)]);

        if ($request->hasFile('featured_image')) {
        $name = $this->moveFile($request->file('featured_image'), Package::getUploadPath());
        $data = array_merge($data, ['featured_image' => $name]);
        }

        $package = tap(Package::find($id))->update($data);

        if (isset($request->addedImages)) {
            foreach ($request->addedImages as $image) {
                $package->images()->create([
                    'name' => $image,
                ]);
            }
        }

        if (isset($request->deletedImages)) {
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
    public function destroy($id)
    {
        //
    }
}
