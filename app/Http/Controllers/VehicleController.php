<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;

class VehicleController extends Controller {
    public function index() {
        $vehicles = Vehicle::with(['type', 'equipment', 'photo'])->get();
        return json_encode(['success' => true, 'vehicles' => $vehicles]);
    }
}
