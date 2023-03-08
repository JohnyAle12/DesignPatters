<?php

namespace App\Xbox;

use App\Interfaces\GameRenderer;

class XboxGameRenderer implements GameRenderer
{
    public function render(string $characterName, string $templateGame): string
    {
        return "Xbox rendering game for {$characterName} \n Starting ... \n {$templateGame} \n";
    }
}