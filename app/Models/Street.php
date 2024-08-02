<?php

namespace App\Models;

use App\Models\Traits\HasBuildings;
use App\Models\Traits\HasDistrict;
use App\Models\Traits\HasPublishDate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Street extends Model
{
    use HasFactory, HasPublishDate, HasDistrict, HasBuildings;

    protected $fillable = [
        'name',
        'district_id'
    ];
}
