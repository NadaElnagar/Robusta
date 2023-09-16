<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SeatsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clear existing records (optional)
        \DB::table('seats')->truncate();

        // Generate dummy seat records
        $seats = [
            ['bus_id' => 1, 'seat_number' => 1,'is_booked'=>true],
            ['bus_id' => 1, 'seat_number' => 2,'is_booked'=>false],
            ['bus_id' => 1, 'seat_number' => 4,'is_booked'=>true],
            ['bus_id' => 1, 'seat_number' => 5,'is_booked'=>true],
            ['bus_id' => 1, 'seat_number' => 6,'is_booked'=>true],
        ];

        // Insert the seat records into the database
        \DB::table('seats')->insert($seats);
    }
}
