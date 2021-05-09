<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;

    public function start_point()
    {
        return $this->belongsTo(Province::class, 'start_point_id');
    }

    public function end_point()
    {
        return $this->belongsTo(Province::class, 'end_point_id');
    }

    public function car() {
        return $this->belongsTo(Car::class);
    }
}
