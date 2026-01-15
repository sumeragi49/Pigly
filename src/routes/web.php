<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\WeightController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Weight_goalController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware('auth')->group(function () {
    Route::get('/weight_logs', [AuthController::class, 'index']);
});

Route::get('/weight_logs/{weight_logsId}', [WeightController::class, 'show']);

Route::patch('/{weight_logsId}/update', [WeightController::class, 'update']);

Route::delete('/weight_logs/{weight_logsId}/delete', [WeightController::class, 'destroy']);

Route::get('Weight_logs/create', [RegisterController::class, 'index']);

Route::post('/weight_logs', [RegisterController::class, 'store']);

Route::get('/Weight_logs/goal_setting', [Weight_goalController::class, 'index']);

Route::post('/weight_logs', [Weight_goalController::class, 'store']);