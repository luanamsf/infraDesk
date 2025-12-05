<?php

use Illuminate\Foundation\Application;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        api: __DIR__.'/../routes/api.php'
    )
    ->withMiddleware(function (Illuminate\Foundation\Configuration\Middleware $middleware) {
        $middleware->alias([
            'auth' => Illuminate\Auth\Middleware\Authenticate::class,
            'verified' => Illuminate\Auth\Middleware\EnsureEmailIsVerified::class,
        ]);
    })
    ->withExceptions(function (Illuminate\Foundation\Configuration\Exceptions $exceptions) {
        // Configure exception handling
    })
    ->create();
