<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use HasFactory;
    use Sluggable;
    
    // protected $table = "tours";
    protected $appends = ['image_path'];
    protected $guarded = [];

    public function sluggable(): array
    {
        return [
            'slug'=>[
                'source'=>'tour_name'
            ]
            ];
    }

    protected $casts = [
        'languages' => 'array',
        'city' => 'array',
        'destinations'=>'array'
    ];

    public function transports()
    {
        return $this->belongsToMany(Transport::class,'tour_transports');
    }

    public function bookings(){
        return $this->hasMany(TourBooking::class);
    }

    public function images()
    {
        return $this->hasMany(TourImage::class);
    }

    public function getImagePathAttribute(){
        return '/storage/uploads/tour_images/featured_image/' . $this->featured_image;
    }


    public static function getUploadPath(){
        return 'uploads/tour_images/featured_image/';
    }

    // public function getRouteKeyName()
    // {
    //     return 'slug';
    // }
    


}
