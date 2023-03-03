<?php

namespace App\Strategies;

use App\Interfaces\Operation;

class SubtractionStrategy implements Operation
{
    public function doOperation(int $a, int $b): int
    {
        return $a - $b;
    }
}