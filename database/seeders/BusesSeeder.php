<?php

namespace Database\Seeders;

use App\Models\Buses;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BusesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $buses = [
            ['name' => 'Buses 1', 'seats_capacity' => 12],
            ['name' => 'Buses 2', 'seats_capacity' => 12],

        ];

        Buses::insert($buses);
    }
}
