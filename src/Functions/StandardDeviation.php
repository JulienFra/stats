<?php

namespace Julienfra\Stats\Functions;

class StandardDeviation
{
    public static function calculate(array $numbers): float
    {
        if (empty($numbers)) {
            throw new \InvalidArgumentException("Le tableau ne peut pas être vide.");
        }

        // Calcul de la moyenne
        $mean = array_sum($numbers) / count($numbers);

        // Calcul de la somme des carrés des écarts à la moyenne
        $squaredDifferencesSum = 0;
        foreach ($numbers as $number) {
            $squaredDifferencesSum += ($number - $mean) ** 2;
        }

        // Calcul de la variance
        $variance = $squaredDifferencesSum / count($numbers);

        // Calcul de l'écart type (racine carrée de la variance)
        $standardDeviation = sqrt($variance);

        return $standardDeviation;
    }
}
