<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\HealthTestController;
use App\Http\Controllers\HealthTests\ResultController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HealthTests\BmiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [IndexController::class, 'index'])->name('index');

Route::get('/register', [AuthController::class, 'index'])->name('auth.index');
Route::post('/register', [AuthController::class, 'register'])->name('auth.register');
Route::get('/login', [AuthController::class, 'loginForm'])->name('auth.login');
Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');

Route::middleware('loggedIn')->group(function () {
    Route::get('/health-tests', [HealthTestController::class, 'index'])->name('health-tests');
    Route::get('/health-tests/results', [ResultController::class, 'show'])->name('health-tests.results');
    Route::get('/health-tests/bmi/', [BmiController::class, 'index'])->name('bmi.index');
    Route::post('/health-tests/bmi/', [BmiController::class, 'store'])->name('bmi.store');
});
