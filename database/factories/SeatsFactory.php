<?php

namespace Database\Factories;

use App\Models\Buses;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Seats>
 */
class SeatsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'bus_id' => 1,
            'is_booked' => fake()->boolean(),
            'seat_number' =>fake()->randomDigit()
        ];
    }
}
