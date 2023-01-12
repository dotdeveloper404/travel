<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TourBooking extends Model
{
    use HasFactory;

    protected $table = "tour_bookings";

    protected $guarded = [];

    public function tour()
    {
        return $this->belongsTo(Tour::class);
    }
}
