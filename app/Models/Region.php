<?php

namespace App\Models;

use App\Models\Traits\{HasLocation, HasPublishDate, HasSlug};
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Region extends Model
{
    use HasSlug, HasPublishDate, HasLocation;

    protected $fillable = [
        'name',
        'code',
        'country_id',
    ];

    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }

    public function cities(): HasMany
    {
        return $this->hasMany(City::class);
    }
}
