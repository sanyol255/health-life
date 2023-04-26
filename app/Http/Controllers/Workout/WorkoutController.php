<?php

namespace App\Http\Controllers\Workout;

use App\Http\Controllers\Controller;
use App\Models\Pullup;
use App\Models\Pushup;
use App\Models\Squat;

class WorkoutController extends Controller
{
    public function index()
    {
        return view('workout.index');
    }

    public function getStatistic()
    {
        $userId = auth()->user()->id;
        $pushups  = $this->getPushups($userId);
        $pullups = $this->getPullups($userId);
        $squats = $this->getSquats($userId);

        return view('workout.statistic', compact('pushups', 'pullups', 'squats'));
    }

    public function getPushups($userId)
    {
        return Pushup::all()->where('user_id', $userId);
    }

    public function getPullups($userId)
    {
        return Pullup::all()->where('user_id', $userId);
    }

    public function getSquats($userId)
    {
        return Squat::all()->where('user_id', $userId);
    }
}
