<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory, Sluggable;

    protected $table = "destinations";

    protected $guarded = [];


    public function city()
    {
        return $this->belongsTo(City::class, 'city_id');
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }


    public function getImagePathAttribute()
    {
        return '/storage/uploads/destination_image' . $this->image;
    }

    public static function getUploadPath()
    {
        return 'uploads/destination_image';
    }


}
