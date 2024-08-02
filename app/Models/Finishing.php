<?php

namespace App\Models;

use App\Models\Traits\HasRooms;
use Illuminate\Database\Eloquent\Model;

class Finishing extends Model
{
    use HasRooms;

    protected $fillable = [
        'name',
    ];
}
