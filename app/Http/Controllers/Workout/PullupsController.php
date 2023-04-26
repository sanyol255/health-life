<?php

namespace App\Http\Controllers\Workout;

use App\Http\Controllers\Controller;
use App\Models\Pullup;
use App\Http\Requests\Workout\StorePullupsRequest;

class PullupsController extends Controller
{
    public function index()
    {
        return view('workout.pullups.index');
    }
    public function store(StorePullupsRequest $request)
    {
        $fields = $request->validated();
        $pullups = new Pullup([
            'user_id' => auth()->user()->id,
            'amount' => $fields['amount'],
        ]);
        $pullups->save();

        return redirect()->route('workout.index')->with('success', 'Amount of pullups saved');
    }
}
