<?php

namespace App\Models;

use App\Models\Traits\HasBuildings;
use App\Models\Traits\HasPublishDate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Developer extends Model
{
    use HasFactory, HasPublishDate, HasBuildings;

    protected $fillable = [
        'name',
    ];
}
