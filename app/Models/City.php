<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    use Sluggable;
    protected $table = "cities";
    protected $appends = ['image_path'];
    protected $guarded = [];


    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function country()
    {
        return $this->belongsTo(Country::class,'country_id');
    }

    public function destinations(){
        return $this->hasMany(Destination::class);
    }

    public function getImagePathAttribute(){
        return '/storage/uploads/city_image/' . $this->image;
    }


    public static function getUploadPath(){
        return 'uploads/city_image/';
    }

}
