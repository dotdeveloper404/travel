<?php

namespace App\Http\Controllers\Portal;

use App\Enums\ProductType;
use App\Http\Controllers\Controller;
use App\Models\Transport;
use App\Models\TransportImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class TransportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $transports = Transport::whereStatus(1)->get();
            return view('portal.transport.index',compact('transports'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        try {
            $type = ProductType::values();
            return view('portal.transport.create',['type' => $type]);
        } catch (\Throwable $th) {
            throw $th;
        }
       
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
            'transport.company' => ['required', 'string'],
            'transport.type' => ['required'],
            'transport.description' => 'nullable',
            'transport.model' => 'nullable',
            'transport.made_year' => 'nullable',
            'transport.mileage' => 'nullable',
            'transport.version' => 'nullable',
            'transport.horse_power' => 'nullable',
            'transport.condition' => 'nullable',
            'transport.amenities' => 'nullable',
            'transport.luggage' => 'nullable',
        ]);


        $transport = Transport::create($data['transport']);

        if($request->has('images')){
        foreach ($request->images as $image) {
            $transport->images()->create([
                'name' => $image,
            ]);
        }
    }

        return $this->success('transport data stores successfully');
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
         try {
            $transport = Transport::with('images')->find($id);
            $type = ProductType::values();
            return view('portal.transport.edit',['transport' => $transport , 'type' => $type]);
         } catch (\Throwable $th) {
            throw $th;
         }
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
            'transport.company' => ['required', 'string'],
            'transport.type' => ['required'],
            'transport.description' => 'nullable',
            'transport.model' => 'nullable',
            'transport.made_year' => 'nullable',
            'transport.mileage' => 'nullable',
            'transport.version' => 'nullable',
            'transport.horse_power' => 'nullable',
            'transport.condition' => 'nullable',
            'transport.amenities' => 'nullable',
            'transport.luggage' => 'nullable',

        ]);

        $transport = tap(Transport::find($id))->update($data['transport']);
        
        if (isset($request->addedImages)) {
            foreach ($request->addedImages as $image) {
                $transport->images()->create([
                    'name' => $image,
                ]);
            }
        }

        if (isset($request->deletedImages)) {
            foreach ($request->deletedImages as $image) {
                File::delete(storage_path('app/public/uploads/transport_images/' . $image));
                TransportImage::whereName($image)->delete();
            }
        }

        return $this->success('transport data update successfully');

    }

    public function uploadImage(Request $request)
    {

        $path = storage_path('app/public/uploads/transport_images');

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
        $images = TransportImage::whereTransportId($id)->get();
        return ['media' => $images];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $transport = Transport::with('images')->find($id);
        foreach ($transport->images as $image) {
            File::delete(storage_path('app/public/uploads/transport_images/' . $image));
            TransportImage::whereName($image)->delete();
        }
        $transport->delete();
    }
}
