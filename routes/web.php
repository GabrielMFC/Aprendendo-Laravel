<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);

Route::get('/events', [EventController::class, 'events']);

Route::get('/events/create', [EventController::class, 'create']);

Route::get('/signIn', [EventController::class, 'signIn']);

Route::get('/signUp', [EventController::class, 'signUp']);