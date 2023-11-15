<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Airline extends Model
{ protected $primaryKey = "airline_id";
    protected $fillable = [
        'name',
        'country',
    ];
    use HasFactory;
}
