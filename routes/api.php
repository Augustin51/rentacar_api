<?php

use App\Http\Controllers\VehicleController;
use Illuminate\Support\Facades\Route;

Route::post('/vehicles', [VehicleController::class, 'index']);
