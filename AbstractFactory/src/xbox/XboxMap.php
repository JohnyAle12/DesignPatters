<?php

namespace App\Xbox;

use App\Interfaces\Map;

class XboxMap implements Map
{
    public function drawMap(): string
    {
        return "Building game Map for Xbox ... \n";
    }
}