<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);

Route::get('/myEvents', [EventController::class, 'myEvents']);

Route::get('/create', [EventController::class, 'create']);
Route::post('/events', [EventController::class, 'store']);

Route::get('/signIn', [EventController::class, 'signIn']);

Route::get('/signUp', [EventController::class, 'signUp']);