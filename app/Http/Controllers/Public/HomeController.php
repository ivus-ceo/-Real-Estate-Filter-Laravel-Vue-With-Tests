<?php

namespace App\Http\Controllers\Public;

use App\Services\Pages\Homes\HomePageService;
use Inertia\Inertia;

class HomeController
{
    public function __construct(
        private readonly HomePageService $homePageService
    )
    {}

    public function index()
    {
        return [];
    }
}
