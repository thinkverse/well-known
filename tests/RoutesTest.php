<?php

declare(strict_types=1);

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;

use function Pest\Laravel\get;

get('.well-known/change-password')
    ->assertRedirect('settings/security')
    ->assertStatus(Response::HTTP_FOUND)
    ->expect(fn () => Route::currentRouteName())
    ->toBe('well-known.change-password');

get('.well-known/security.txt')
    ->assertSeeText('Hello world')
    ->assertSuccessful()
    ->expect(fn () => Route::currentRouteName())
    ->toBe('well-known.security.txt');

get('.well-known/example.com-metadata')
    ->assertNotFound();
