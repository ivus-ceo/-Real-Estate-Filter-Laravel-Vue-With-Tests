<?php

namespace App\Models;

use App\Models\Traits\HasBuilding;
use App\Models\Traits\HasRooms;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Floor extends Model
{
    use HasFactory, HasBuilding, HasRooms;

    protected $fillable = [
        'number',
    ];
}
