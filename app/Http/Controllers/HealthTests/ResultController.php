<?php

namespace App\Http\Controllers\HealthTests;

use App\Http\Controllers\Controller;
use App\Models\BodyMassIndex as Bmi;
use App\Models\RuffierIndex;

class ResultController extends Controller
{
    public function show()
    {
//        $bmi = Bmi::all()->where('user_id', auth()->user()->id)->toArray();
        $bmi = Bmi::all()->where('user_id', auth()->user()->id)->last();
        $ruffierIndex = RuffierIndex::all()->where('user_id', auth()->user()->id)->last();
        return view('health-tests.show', compact('bmi', 'ruffierIndex'));
    }
}
