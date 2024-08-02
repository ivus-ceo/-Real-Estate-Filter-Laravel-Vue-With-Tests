<?php

namespace App\Http\Controllers\Public;

use App\Services\Pages\Countries\CountryPageService;
use Inertia\Inertia;

class CountryController
{
    public function __construct(
        private readonly CountryPageService $countryPageService
    )
    {}

    public function index()
    {
        return Inertia::render();
    }
}
