<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transport extends Model
{
    use HasFactory;

    protected $table = "transport";

    protected $guarded = [];

    public function images()
    {
        return $this->hasMany(TransportImage::class);
    }
}
