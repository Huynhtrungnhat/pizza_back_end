<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
<<<<<<< HEAD
=======
use Illuminate\Http\Middleware\HandleCors;
>>>>>>> c567d4b8ac437e68547e47e7191e9176c7670dc0

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
<<<<<<< HEAD
        //
=======
        $middleware->append(\App\Http\Middleware\Cors::class);
        $middleware->append(HandleCors::class);
>>>>>>> c567d4b8ac437e68547e47e7191e9176c7670dc0
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
