<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $table = 'vehicle';

    protected $fillable = [
        'brand',
        'model',
        'fuel_type',
        'year',
        'doors',
        'seats',
    ];
}
