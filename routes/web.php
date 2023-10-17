<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\WarkopController;
use App\Http\Controllers\AlasController;


Route::get('/', [MovieController::class, 'index']);
Route::get('/warkop', [WarkopController::class, 'warkop']);
Route::resource('/warkop', WarkopController::class);
route::get('/alas', [AlasController::class, 'alas']);