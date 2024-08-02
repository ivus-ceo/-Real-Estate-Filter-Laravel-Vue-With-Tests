<?php

namespace App\Models\Traits;

use App\Models\Building;
use Illuminate\Database\Eloquent\Relations\HasMany;

trait HasBuildings
{
    public function initializeHasBuildings(): void
    {
        //
    }

    public function buildings(): HasMany
    {
        return $this->hasMany(Building::class);
    }
}
