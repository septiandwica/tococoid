<?php

use App\Models\General;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Http\Request;

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'admin' => \App\Http\Middleware\AdminMiddleware::class,
            'cors' => \Illuminate\Http\Middleware\HandleCors::class,
            'cors.domain' => \App\Http\Middleware\CorsDomainMiddleware::class,
            'developer' => \App\Http\Middleware\DeveloperMiddleware::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        $exceptions->render(function (NotFoundHttpException $exception, Request $request) {
            if ($exception instanceof NotFoundHttpException) {
                if ($request->is('dashboard/*')) {
                    return response()->view('errors.dashboard-404', [], 404);
                } else {
                    $general = General::getPage(); 
                    return response()->view('errors.frontend-404',  compact('general'), 404);
                }
            }
        
            return parent::renderException($request, $exception);
        });
    })->create();
