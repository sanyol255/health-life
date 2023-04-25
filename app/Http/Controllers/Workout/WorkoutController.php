<?php

namespace App\Http\Controllers\Workout;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pushup;

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


        return view('workout.statistic', compact('pushups'));
    }

    public function getPushups($userId)
    {
        return Pushup::all()->where('user_id', $userId);
    }
}
