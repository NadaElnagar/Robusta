<?php

namespace Database\Seeders;

use App\Models\Cities;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run() : void
    {
        $cities = [
            ['name' => 'Cairo'],
            ['name' => 'Giza'],
            ['name' => 'AlFayyum'],
            ['name' => 'AlMinya'],
            ['name' => 'Asyut']

        ];

        Cities::insert($cities);
    }
}
