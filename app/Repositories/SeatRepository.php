<?php

namespace App\Repositories;

use App\Models\Seats;

class SeatRepository
{
    public function findById($id)
    {
        return Seats::findOrFail($id);
    }

    public function updateSeat($seat, $data)
    {
        $seat->update($data);
    }

    public function getAvailableSeats($startStationId, $endStationId)
    {
        return     $availableSeats = \DB::table('seats')
            ->join('buses', 'seats.bus_id', '=', 'buses.id')
            ->join('trips', 'buses.id', '=', 'trips.bus_id')
            ->where('trips.start_station', '=', $startStationId)
            ->where('trips.end_station', '=', $endStationId)
            ->where('seats.is_booked', '=', false)
            ->select('seats.*', 'buses.seats_capacity')
            ->get();
    }

}
