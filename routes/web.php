<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\HealthTestController;
use App\Http\Controllers\HealthTests\ResultController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HealthTests\BmiController;
use App\Http\Controllers\HealthTests\RuffierIndexController;
use App\Http\Controllers\Workout\WorkoutController;
use App\Http\Controllers\Workout\PushupsController;
use App\Http\Controllers\Workout\PullupsController;
use App\Http\Controllers\Workout\SquatsController;
use App\Http\Controllers\ArticlesController;

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
    Route::get('/health-tests/ruffier/', [RuffierIndexController::class, 'index'])->name('ruffier.index');
    Route::post('/health-tests/ruffier/', [RuffierIndexController::class, 'store'])->name('ruffier.store');

    Route::get('/workout/', [WorkoutController::class, 'index'])->name('workout.index');
    Route::get('/workout/statistic', [WorkoutController::class, 'getStatistic'])->name('workout.statistic');
    Route::get('/workout/pushups', [PushupsController::class, 'index'])->name('pushups.index');
    Route::post('/workout/pushups', [PushupsController::class, 'store'])->name('pushups.store');
    Route::get('/workout/pullups', [PullupsController::class, 'index'])->name('pullups.index');
    Route::post('/workout/pullups', [PullupsController::class, 'store'])->name('pullups.store');
    Route::get('/workout/squats', [SquatsController::class, 'index'])->name('squats.index');
    Route::post('/workout/squats', [SquatsController::class, 'store'])->name('squats.store');

    Route::resource('articles', ArticlesController::class);
});
