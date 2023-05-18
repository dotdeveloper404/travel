<?php

namespace App\Models;

use App\Traits\UploadFile;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;
    use Sluggable;
    protected $table = "packages";
    protected $appends = ['image_path'];
    protected $guarded = [];


    public function sluggable(): array
    {
        return [
            'slug'=>[
                'source'=>'package_name'
            ]
            ];
    }


    protected $casts = [
        'languages' => 'array',
        'city' => 'array',
        'destinations'=>'array'
        // 'is_transport_included' => 'boolean',
        // 'is_acommodation_included' => 'boolean',
        // 'is_guide_included' => 'boolean',
        // 'is_additional_services_included' => 'boolean',
    ];


    // public function setIsHotelIncludedAttribute($value){
    //     $this->attributes['is_hotel_included'] = $value ? 1 : 0;
    // }

    // public function setIsAdditionalServicesIncludedAttribute($value){
    //     $this->attributes['is_additional_services_included'] = $value ? 1 : 0;
    // }

    
    public function hotels()
    {
        return $this->belongsToMany(Hotel::class, 'package_hotel');
    }

    public function transports()
    {
        return $this->belongsToMany(Transport::class, 'package_transport');
    }

    public function images()
    {
        return $this->hasMany(PackageImage::class);
    }

    public function bookings(){
        return $this->hasMany(PackageBooking::class);
    }

    public function getImagePathAttribute(){
        return '/storage/uploads/package_images/featured_image/' . $this->featured_image;
    }


    public static function getUploadPath(){
        return 'uploads/package_images/featured_image/';
    }
    
}
