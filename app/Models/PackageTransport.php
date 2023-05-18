<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class PackageTransport extends Pivot
{

    protected $table = "package_hotel";

    
    public function transport()
    {
        return $this->belongsTo(Transport::class);
    }

    public function package()
    {
        return $this->belongsTo(Package::class);
    }


}
