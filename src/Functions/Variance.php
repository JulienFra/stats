<?php

namespace Julienfra\Stats\Functions;

use Julienfra\Stats\Functions\Average;

class Variance
{
    public static function calculate(array $numbers): float
    {
        if (count($numbers) < 2) {
            throw new \InvalidArgumentException("Cannot calculate variance with less than 2 numbers");
        }

        $mean = Average::calculate($numbers);

        $sumOfSquares = 0;
        foreach ($numbers as $number) {
            $sumOfSquares += pow($number - $mean, 2);
        }

        $variance = $sumOfSquares / count($numbers);

        return round($variance, 2); // Arrondir à 2 décimales
    }
}