<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AvailbaleSeatsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'=>$this->id,
            'bus_id'=>$this->bus_id,
          //  'bus'=>$this->bus->name,
            'seat_number'=>$this->seat_number,
            'is_booked'=>(boolean)$this->is_booked,
            'seats_capacity'=>$this->seats_capacity,

        ];
    }
}
