<?php

namespace App\Playstation;

use App\Interfaces\Character;

class PSCharacter implements Character
{
    public function drawCharacter(): string
    {
        return "Building game Character for PlayStation ... \n";
    }
}