<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\EventController;
use App\Models\Event;

Route::get('/', [EventController::class, 'index']);

Route::get('/myEvents', [EventController::class, 'myEvents']);

Route::get('/create', [EventController::class, 'create']);
Route::get('events/{id}', [EventController::class, 'show']);
Route::post('/events', [EventController::class, 'store']);

Route::get('/signIn', [EventController::class, 'signIn']);

Route::get('/signUp', [EventController::class, 'signUp']);