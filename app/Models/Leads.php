<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{

    protected $connection = 'mysql2';

    protected $table = "leads";
    protected $guarded = [];

}
