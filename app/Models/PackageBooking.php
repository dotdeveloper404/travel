<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageBooking extends Model
{
    use HasFactory;

    protected $table = "package_bookings";

    protected $guarded = [];

    public function package()
    {
        return $this->belongsTo(Package::class);
    }
}
