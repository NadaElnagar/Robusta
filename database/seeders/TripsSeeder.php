<?php

namespace Database\Seeders;

use App\Models\Bus;
use App\Models\Cities;
use App\Models\Trip;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TripsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tripData = [
            // Trip 1: Cairo to Asyut via AlFayyum and AlMinya
            [
                'start_station' => Cities::where('name', 'Cairo')->first()->id,
                'end_station' => Cities::where('name', 'Asyut')->first()->id,
                'bus_id' => Bus::where('name', 'Bus 1')->first()->id,
            ],
            // Add more trips as needed
        ];

        Trip::insert($tripData);
    }
}
