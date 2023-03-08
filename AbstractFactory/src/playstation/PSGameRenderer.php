<?php

namespace App\Playstation;

use App\Interfaces\GameRenderer;

class PSGameRenderer implements GameRenderer
{
    public function render(string $characterName, string $templateGame): string
    {
        return "PlayStation rendering game for {$characterName} \n Starting ... \n {$templateGame} \n";
    }
}