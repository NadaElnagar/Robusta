<?php

namespace Tests\Feature;

use App\Models\Seats;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Tymon\JWTAuth\Facades\JWTAuth;



class SeatBookingTest extends TestCase
{


    public function testSeatBookingSuccessfully()
    {
        $seat = Seats::factory()->create(['is_booked'=>false]);
        $user = User::factory()->create();
        $token = JWTAuth::fromUser($user);

        $response = $this->postJson('api/auth/book_seat', [
            'seat_id' => $seat->id,
            'user_id' => $user->id,
        ], [
            'Authorization' => 'Bearer ' . $token,
        ]);

        $response->assertStatus(200);
        $response->assertJson(['message' => 'Seat booked successfully.']);

        $this->assertDatabaseHas('seats', [
            'id' => $seat->id,
            'user_id' => $user->id,
            'is_booked' => true,
        ]);
    }

    public function testSeatBookingWithAlreadyBookedSeat()
    {
        $seat = Seats::factory()->create(['is_booked' => true]);
        $user = User::factory()->create();
        $token = JWTAuth::fromUser($user);

        $response = $this->postJson('api/auth/book_seat', [
            'seat_id' => $seat->id,
            'user_id' => $user->id,
        ], [
            'Authorization' => 'Bearer ' . $token,
        ]);

        $response->assertStatus(422);
        $response->assertJson(['message' => 'Seat is already booked.']);

        $this->assertDatabaseHas('seats', [
            'id' => $seat->id,
            'is_booked' => true,
            'user_id' => $seat->user_id, // Make sure the seat's user association is not changed
        ]);
    }


}
