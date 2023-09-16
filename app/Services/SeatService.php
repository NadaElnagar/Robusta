<?php

namespace App\Services;

use App\Repositories\SeatRepository;

class SeatService
{

    protected $seatRepository;

    public function __construct(SeatRepository $seatRepository)
    {
        $this->seatRepository = $seatRepository;
    }

    public function bookSeat($seatId, $userId)
    {
        $seat = $this->seatRepository->findById($seatId);

        if ($seat->is_booked) {
            throw new \Exception('Seat is already booked.');
        }

        $this->seatRepository->updateSeat($seat, [
            'is_booked' => true,
            'user_id' => $userId,
        ]);
    }

    public function getAvailableSeats($startStationId, $endStationId)
    {
        return $this->seatRepository->getAvailableSeats($startStationId, $endStationId);
    }

}
