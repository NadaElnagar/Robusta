<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buses extends Model
{
    use HasFactory;

    protected $table = 'buses';

    public function seats()
    {
        return $this->hasMany(Seats::class);
    }
}
