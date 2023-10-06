<?php

namespace Julienfra\Stats\Functions;

class Average
{
    public static function calculate(array $numbers): float
    {
        if (empty($numbers)) {
            throw new \InvalidArgumentException("Division by zero");
        }

        $sum = array_sum($numbers);
        $count = count($numbers);

        return $sum / $count;
    }
}