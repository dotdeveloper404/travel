<?php

namespace App\Models;

use App\Enums\ProductType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transport extends Model
{
    use HasFactory;

    protected $table = "transport";

    protected $guarded = [];

    protected $casts = [
        'type' => ProductType::class
    ];

    public function images()
    {
        return $this->hasMany(TransportImage::class);
    }

    public function packages()
    {
        return $this->belongsToMany(Package::class, 'package_transport');
    }

}
