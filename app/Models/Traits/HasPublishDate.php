<?php

namespace App\Models\Traits;

use Illuminate\Database\Eloquent\Builder;

/**
 * @method static published()
 */
trait HasPublishDate
{
    public function initializeHasPublishDate(): void
    {
        $this->fillable[] = 'published_at';
    }

    public function scopePublished(Builder $query): void
    {
        $query->whereNotNull('published_at');
    }
}
