<?php

namespace App\Providers;

use App\DTOs\Pages\Public\CountryPageDTO;
use App\DTOs\Pages\Public\SalePropertyPageDTO;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class DTOsServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
//        $this->app->bind(SalePropertyPageDTO::class, fn ($app) => new SalePropertyPageDTO());
//        $this->app->bind(CountryPageDTO::class, fn ($app) => new CountryPageDTO());
    }
}
