<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VehicleSeeder extends Seeder
{
    public function run(): void
    {
        $vehicles = [
            ['brand' => 'Toyota', 'model' => 'Corolla', 'fuel_type' => 'Essence', 'year' => 2020, 'doors' => 4, 'seats' => 5],
            ['brand' => 'Peugeot', 'model' => '208', 'fuel_type' => 'Diesel', 'year' => 2019, 'doors' => 5, 'seats' => 5],
            ['brand' => 'Tesla', 'model' => 'Model 3', 'fuel_type' => 'Électrique', 'year' => 2022, 'doors' => 4, 'seats' => 5],
            ['brand' => 'Ford', 'model' => 'Focus', 'fuel_type' => 'Essence', 'year' => 2018, 'doors' => 4, 'seats' => 5],
            ['brand' => 'Renault', 'model' => 'Clio', 'fuel_type' => 'Diesel', 'year' => 2021, 'doors' => 5, 'seats' => 5],
            ['brand' => 'BMW', 'model' => 'X1', 'fuel_type' => 'Essence', 'year' => 2020, 'doors' => 5, 'seats' => 5],
            ['brand' => 'Audi', 'model' => 'A3', 'fuel_type' => 'Diesel', 'year' => 2017, 'doors' => 4, 'seats' => 5],
            ['brand' => 'Hyundai', 'model' => 'i20', 'fuel_type' => 'Essence', 'year' => 2019, 'doors' => 5, 'seats' => 5],
            ['brand' => 'Volkswagen', 'model' => 'Golf', 'fuel_type' => 'Diesel', 'year' => 2020, 'doors' => 5, 'seats' => 5],
            ['brand' => 'Kia', 'model' => 'Ceed', 'fuel_type' => 'Essence', 'year' => 2021, 'doors' => 5, 'seats' => 5],
        ];

        DB::table('vehicle')->insert($vehicles);
    }
}
