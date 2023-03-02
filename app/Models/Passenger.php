<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Passenger extends Model
{
    protected $table = 'passenger';
    protected $primaryKey = 'passengerID';
    public $timestamps = false;
    
    use HasFactory;
}
