<?php

namespace App\Http\Controllers\Workout;

use App\Http\Controllers\Controller;
use App\Http\Requests\Workout\StoreSquatsRequest;
use App\Models\Squat;

class SquatsController extends Controller
{
    public function index()
    {
        return view('workout.squats.index');
    }
    public function store(StoreSquatsRequest $request)
    {
        $fields = $request->validated();
        $squats = new Squat([
            'user_id' => auth()->user()->id,
            'amount' => $fields['amount'],
        ]);
        $squats->save();

        return redirect()->route('workout.index')->with('success', 'Amount of squats saved');
    }
}
