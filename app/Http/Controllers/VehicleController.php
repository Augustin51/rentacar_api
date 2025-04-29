<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Support\Facades\DB;


class VehicleController extends Controller {
    public function index() {
        $vehicles = Vehicle::with(['type', 'equipment', 'photo'])->get();
        return json_encode(['success' => true, 'vehicles' => $vehicles]);
    }

    public function detail($id) {

        $test = Vehicle::with(['type', 'equipment', 'photo'])->where("id", $id)->get();
        return json_encode(["vehicule" => $test]);
    }
}
