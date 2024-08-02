<?php

namespace App\Models;

use App\Models\Traits\{HasLocation, HasPublishDate, HasSlug};
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Country extends Model
{
    use HasSlug, HasPublishDate, HasLocation;

    protected $fillable = [
        'name',
        'iso2_code',
        'iso3_code',
        'numeric_code',
        'phone_code',
    ];

    public function regions(): HasMany
    {
        return $this->hasMany(Region::class);
    }
}
