<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);

Route::get('/myEvents', [EventController::class, 'events']);

Route::get('/create', [EventController::class, 'create']);

Route::get('/signIn', [EventController::class, 'signIn']);

Route::get('/signUp', [EventController::class, 'signUp']);