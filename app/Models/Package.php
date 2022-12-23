<?php

namespace App\Models;

use App\Traits\UploadFile;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $table = "packages";
    protected $appends = ['image_path'];
    protected $guarded = [];


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

    public function getImagePathAttribute(){
        return '/storage/uploads/package_images/featured_image/' . $this->featured_image;
    }


    public static function getUploadPath(){
        return 'uploads/package_images/featured_image/';
    }
    


}
