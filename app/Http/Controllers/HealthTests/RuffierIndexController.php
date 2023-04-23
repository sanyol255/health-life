<?php

namespace App\Http\Controllers\HealthTests;

use App\Calculations\Tests;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRuffierIndexRequest;
use App\Models\RuffierIndex;

class RuffierIndexController extends Controller
{
    public function index()
    {
        return view('health-tests.ruffier.index');
    }

    public function store(StoreRuffierIndexRequest $request)
    {
        $fields = $request->validated();

        list('pulse_1' => $pulse1, 'pulse_2' => $pulse2, 'pulse_3' => $pulse3) = $fields;

        $ruffierIndex = Tests::calculateRuffierIndex($pulse1, $pulse2, $pulse3);

        $model = new RuffierIndex([
           'user_id' => auth()->user()->id,
           'pulse_1' => $pulse1,
           'pulse_2' => $pulse2,
           'pulse_3' => $pulse3,
            'value' => $ruffierIndex['value'],
            'description' => $ruffierIndex['description'],
        ]);
        $model->save();

        return redirect()->route('health-tests')->with('success', 'Ruffier   index was saved!');
    }
}
