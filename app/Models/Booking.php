<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'booking';
    protected $primaryKey = ['tripID', 'passengerID'];
    public $timestamps = false;

    public function trip(){
        return $this->belongsTo(Trip::class(), 'tripID');
    }

    public function passenger(){
        return $this->belongsTo(Passenger::class(), 'passengerID');
    }


    use HasFactory;
}
