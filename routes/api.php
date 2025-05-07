<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UserController;
use App\Http\Middleware\AuthToken;
use App\Models\User;
use Illuminate\Http\Request;


Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);

Route::middleware(AuthToken::class)->group(function () {
    Route::get('/dashboard', [UserController::class, 'dashboard']);
    Route::get('/user', [UserController::class, 'getUser']);
});

Route::middleware('auth:api')->post('/logout', [UserController::class, 'logout']);


