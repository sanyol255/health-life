<?php

namespace App\Http\Controllers\HealthTests;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBmiRequest;
use App\Calculations\Tests as Tests;
use App\Models\BodyMassIndex;

class BmiController extends Controller
{
    public function index()
    {
        return view('health-tests.bmi.index');
    }

    public function store(StoreBmiRequest $request)
    {
        $formData = $request->validated();
        $weight = $formData['weight'];
        $height = $formData['height'];

        $bmiResult = Tests::calculateBmi($weight, $height);

        $bmi = new BodyMassIndex([
            'user_id' => auth()->user()->id,
            'weight' => $weight,
            'height' => $height,
            'value' => $bmiResult['value'],
            'description' => $bmiResult['description'],
        ]);
        $bmi->save();

        return redirect()->route('health-tests')->with('success', 'Body mass index was saved!');
    }
}
