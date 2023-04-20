<?php

namespace App\Calculations;

class Tests
{
    public static function calculateBmi($weight, $height)
    {
        $bmi['value'] = round(($weight / $height ** 2), 2);

        $bmi['description'] = match(true) {
            $bmi['value'] < 18.5 => 'The body mass index is less than normal level - underweight',
            $bmi['value'] > 25 => 'The body mass index is greater than normal level - overweight',
            default => 'The body mass index is normal',
        };

        return $bmi;
    }
}
