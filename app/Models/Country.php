<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Country extends Model
{
    use HasFactory;
    use Sluggable;
    protected $table = "countries";

    protected $appends = ['image_path'];

    protected $guarded = [];

    public function sluggable(): array
    {
        return[
            'slug' =>[
                'source' => 'name'
            ]
            ];
    }

    public function getImagePathAttribute(){
        return '/storage/uploads/country_image/' . $this->image;
    }

    public static function getUploadPath(){
        return 'uploads/country_image/';
    }

    public function cities()
    {
        $this->hasMany(City::class);
    }
}
