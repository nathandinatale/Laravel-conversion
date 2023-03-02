<?php

namespace App\Models;

use App\Models\Passenger;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Passport extends Model
{
    protected $table = 'passport';
    protected $primaryKey = 'passNumber';
    protected $timestamps = false;
    
    use HasFactory;

    public function passHolder() {
        return $this->belongsTo(Passenger::class, 'passHolder', 'passengerID'); 
    }
}
