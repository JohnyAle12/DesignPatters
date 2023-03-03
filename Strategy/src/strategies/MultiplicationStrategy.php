<?php

namespace App\Strategies;

use App\Interfaces\Operation;

class MultiplicationStrategy implements Operation
{
    public function doOperation(int $a, int $b): int
    {
        return $a * $b;
    }
}