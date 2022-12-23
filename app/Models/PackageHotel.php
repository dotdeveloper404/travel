<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class PackageHotel extends Pivot
{

    
    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }

    public function package()
    {
        return $this->belongsTo(Package::class);
    }

}
