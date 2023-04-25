<?php

namespace App\Http\Controllers\Workout;

use App\Http\Controllers\Controller;
use App\Http\Requests\Workout\StorePushupsRequest;
use App\Models\Pushup;

class PushupsController extends Controller
{
    public function index()
    {
        return view('workout.pushups.index');
    }

    public function store(StorePushupsRequest $request)
    {
        $fields = $request->validated();
        $pushups = new Pushup([
           'user_id' => auth()->user()->id,
            'regular' => $fields['regular'],
            'wide' => $fields['wide'],
        ]);
        $pushups->save();

        return redirect()->route('workout.index')->with('success', 'Amount of pushups saved');
    }
}
