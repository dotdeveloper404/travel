<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class Destination extends Model
{
    const EXCERPT_LENGTH = 100;
    use HasFactory, Sluggable;

    protected $table = "destinations";
    protected $appends = ["image_path"];
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
        return '/storage/uploads/destination_image/' . $this->image;
    }

    public static function getUploadPath()
    {
        return 'uploads/destination_image/';
    }

    
    public function excerpt()
    {
        return Str::limit($this->content,Destination::EXCERPT_LENGTH);
    }


}
