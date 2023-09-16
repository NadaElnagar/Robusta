<?php

namespace App\Http\Controllers;

use App\Http\Requests\AvailabileSeatsRequest;
use App\Http\Requests\BookSeatRequest;
use App\Http\Resources\AvailbaleSeatsResource;
use Illuminate\Http\Request;
use App\Services\SeatService;
class SeatController extends Controller
{
    protected $seatService;

    public function __construct(SeatService $seatService)
    {
        $this->seatService = $seatService;
    }

    /*
     * update user to book seats
     * */
    public function bookSeat(BookSeatRequest $request)
    {
        try {
            $this->seatService->bookSeat($request->seat_id, auth()->user()->id);
            return response()->json(['message' => 'Seat booked successfully.']);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 422);
        }
    }

    /*
     * Send start and end station and return with json objects for available
     * */
    public function getAvailableSeats(AvailabileSeatsRequest $request)
    {
        $availableSeats = $this->seatService->getAvailableSeats($request->start_station, $request->end_station);
        return responseWithSuccess(__('messages.list_item_successful'), AvailbaleSeatsResource::collection($availableSeats));
    }
}
