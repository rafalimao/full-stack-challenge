<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrackController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [TrackController::class, 'index']);
