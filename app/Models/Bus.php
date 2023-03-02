<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    protected $table = 'bus';
    protected $primaryKey = 'plateNumber';
    public $timestamps = false;
    
    use HasFactory;

}
