<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;

class VehicleController extends Controller {
    public function index() {
        $vehicles = Vehicle::all();
        return json_encode(['success' => true, 'vehicles' => $vehicles]);
    }
}
