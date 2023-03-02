<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    protected $table = 'trip';
    protected $primaryKey = 'tripID';
    public $timestamps = false;
    
    use HasFactory;

    public function bus()
    {
        return $this->belongsTo(Bus::class, 'tripBusPlate', 'plateNumber');
    }
}
