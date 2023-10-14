<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\WarkopController;

Route::get('/', [MovieController::class, 'index']);
Route::get('/warkop', [WarkopController::class, 'warkop']);
Route::resource('/warkop', WarkopController::class);