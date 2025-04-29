<?php

use App\Http\Controllers\VehicleController;
use Illuminate\Support\Facades\Route;

Route::get('/vehicles', [VehicleController::class, 'index']);
Route::get('/vehicle/{id}', [VehicleController::class, 'detail']);