<?php

namespace Julienfra\Stats\Functions;

class Median
{
    public static function calculate(array $numbers): float
    {
        if (empty($numbers)) {
            throw new \InvalidArgumentException("Le tableau ne peut pas être vide.");
        }

        sort($numbers);

        $count = count($numbers);
        $middle = (int)($count / 2);

        if ($count % 2 !== 0) {
            return $numbers[$middle];
        }

        $median = ($numbers[$middle - 1] + $numbers[$middle]) / 2.0;

        return $median;
    }
}
