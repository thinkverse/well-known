<?php declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Response;

Route::name('well-known.')
    ->prefix('.well-known')
    ->group(function (): void {
        collect(config('well-known.redirects'))
            ->filter()->whenNotEmpty(fn ($routes) =>
                $routes->each(fn ($redirect, $uri) =>
                    Route::redirect($uri, $redirect, Response::HTTP_FOUND)->name($uri)
                )
            );

        collect(config('well-known.static'))
            ->filter()->whenNotEmpty(fn ($routes) =>
                $routes->each(fn ($callback, $uri) =>
                    Route::get($uri, $callback)->name($uri)
                )
            );
    });
