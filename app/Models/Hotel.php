<?php

namespace App\Models;

use App\Enums\ProductType;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;
    use Sluggable;

    protected $table = "hotels";

    protected $guarded = ['id'];

    protected $casts = [
        'type' => ProductType::class
    ];

    public function sluggable(): array
    {
        return [
            'slug'=>[
                'source'=>'name'
            ]
            ];
    }

    public function images()
    {
        return $this->hasMany(HotelImage::class);
    }

}
