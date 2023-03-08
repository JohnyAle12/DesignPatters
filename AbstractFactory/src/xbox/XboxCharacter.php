<?php

namespace App\Xbox;

use App\Interfaces\Character;

class XboxCharacter implements Character
{
    public function drawCharacter(): string
    {
        return "Building game Character for Xbox ... \n";
    }
}