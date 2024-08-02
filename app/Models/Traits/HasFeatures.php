<?php

namespace App\Models\Traits;

use App\Models\Feature;
use Illuminate\Database\Eloquent\Relations\MorphMany;

trait HasFeatures
{
    public function initializeHasFeatures(): void
    {
        //
    }

    public function features(): MorphMany
    {
        return $this->morphMany(Feature::class, 'featureable');
    }
}
