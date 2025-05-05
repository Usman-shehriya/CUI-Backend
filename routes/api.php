<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UserController;
use App\Http\Middleware\AuthToken;

Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);

Route::middleware(AuthToken::class)->group(function () {
    Route::get('/dashboard', function () {
        return response()->json(['message' => 'Welcome to the dashboard!']);
    });
});
