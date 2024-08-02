<?php

namespace App\Services\Pages\Homes;

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use App\Services\Pages\BasePageService;

class HomePageService extends BasePageService
{
    public function index(): array
    {
        return [
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
            'laravelVersion' => Application::VERSION,
            'phpVersion' => PHP_VERSION,
        ];
    }
}
