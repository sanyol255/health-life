<?php

namespace App\Http\Controllers\Workout;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WorkoutController extends Controller
{
    public function index()
    {
        return view('workout.index');
    }
}
