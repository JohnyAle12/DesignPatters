<?php

namespace App\Playstation;

use App\Game\BaseGameTemplate;

class PSGameTemplate extends BaseGameTemplate
{
    public function getGameTemplate(): string
    {
        $map = $this->map->drawMap();
        $character = $this->character->drawCharacter();
        return "-> {$map} -> {$character} -> Building game template for PlayStation ... \n";
    }
}