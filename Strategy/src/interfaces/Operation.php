<?php

namespace App\Interfaces;

interface Operation
{
    public function doOperation(int $a, int $b): int;
}