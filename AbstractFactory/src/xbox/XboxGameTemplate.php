<?php

namespace App\Xbox;

use App\Game\BaseGameTemplate;

class XboxGameTemplate extends BaseGameTemplate
{
    public function getGameTemplate(): string
    {
        $map = $this->map->drawMap();
        $character = $this->character->drawCharacter();
        return "-> {$map} -> {$character} -> Building game template for Xbox ... \n";
    }
}