<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TourTransport extends Model
{
    use HasFactory;


    public function transport(){
        return $this->belongsTo(Transport::class);
    }

    public function tour(){
        return $this->belongsTo(Tour::class);
    }

}
