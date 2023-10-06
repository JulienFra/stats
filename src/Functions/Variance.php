<?php

namespace Julienfra\Stats\Functions;

class Variance
{
    public static function calculate(array $numbers): float
    {
        if (empty($numbers)) {
            throw new \InvalidArgumentException("Le tableau ne peut pas être vide.");
        }

        $mean = array_sum($numbers) / count($numbers);
        $sumSquaredDifferences = 0;

        foreach ($numbers as $number) {
            $sumSquaredDifferences += ($number - $mean) ** 2;
        }

        $variance = $sumSquaredDifferences / (count($numbers) - 1); // Utilisation de (n-1) au lieu de n

        return $variance;
    }
}
