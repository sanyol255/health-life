<?php

namespace App\Calculations;

class Tests
{
    public static function calculateBmi($weight, $height): array
    {
        $bmi['value'] = round(($weight / $height ** 2), 2);

        $bmi['description'] = match(true) {
            $bmi['value'] < 18.5 => 'The body mass index is less than normal level - underweight',
            $bmi['value'] > 25 => 'The body mass index is greater than normal level - overweight',
            default => 'The body mass index is normal',
        };

        return $bmi;
    }

    public static function calculateRuffierIndex($pulse1, $pulse2, $pulse3)
    {
        $ruffierIndex['value'] = (4 * ($pulse1 + $pulse2 + $pulse3) - 200) / 10;
        $ruffierIndex['value'] = round($ruffierIndex['value'], 2);

        $ruffierIndex['description'] = match(true) {
            $ruffierIndex['value'] <= 3 => 'Good physical level',
            $ruffierIndex['value'] <= 6 => 'Average physical level',
            $ruffierIndex['value'] <= 9 => 'Acceptable physical level',
            $ruffierIndex['value'] <= 14 => 'Bad physical level',
            default => 'Very bad physical level'
        };

        return $ruffierIndex;
    }
}
