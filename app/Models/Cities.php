<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cities extends Model
{
    use HasFactory;
    protected $table = 'cities';

    public function tripsFrom()
    {
        return $this->hasMany(Trip::class, 'start_station');
    }

    public function tripsTo()
    {
        return $this->hasMany(Trip::class, 'end_station');
    }

}
