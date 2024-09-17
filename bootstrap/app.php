<?php

use App\Http\Middleware\SomeMiddleware;
use App\Http\Middleware\SomeOtherMiddleware;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'Some' => SomeMiddleware::class,
            'SomeOther' => SomeOtherMiddleware::class
        ]);
        $middleware->group('someGroup', [
            "Some",
            "SomeOther"
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
