<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;

    protected $table = 'trips';

    public function bus()
    {
        return $this->belongsTo(Bus::class);
    }

    public function startCity()
    {
        return $this->belongsTo(Cities::class, 'start_station');
    }

    public function endCity()
    {
        return $this->belongsTo(Cities::class, 'end_station');
    }
}
