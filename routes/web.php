<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MissionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LeaderboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/missions', [MissionController::class, 'index']);
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/leaderboard', [LeaderboardController::class, 'index']);