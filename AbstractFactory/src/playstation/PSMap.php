<?php

namespace App\Playstation;

use App\Interfaces\Map;

class PSMap implements Map
{
    public function drawMap(): string
    {
        return "Building game Map for PlayStation ... \n";
    }
}