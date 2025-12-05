<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        // Bind platform services, observability, etc.
    }

    public function boot(): void
    {
        // Global bootstrapping hooks
    }
}
