<?php

namespace App\Models\Traits;

use App\Models\District;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait HasDistrict
{
    public function initializeHasDistrict(): void
    {
        //
    }

    public function district(): BelongsTo
    {
        return $this->belongsTo(District::class);
    }
}
