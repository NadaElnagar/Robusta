<?php

namespace Database\Seeders;

use App\Models\Bus;
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
            ['name' => 'Bus 1', 'seats_capacity' => 12],
            ['name' => 'Bus 2', 'seats_capacity' => 12],

        ];

        Bus::insert($buses);
    }
}
