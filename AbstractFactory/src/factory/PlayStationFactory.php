<?php

namespace App\Factory;

use App\Interfaces\Character;
use App\Interfaces\GameRenderer;
use App\Interfaces\Map;
use App\Interfaces\GameTemplate;
use App\Playstation\PSCharacter;
use App\Playstation\PSGameRenderer;
use App\Playstation\PSMap;
use App\Playstation\PSGameTemplate;

class PlayStationFactory implements GameFactory
{
    public function createMap(): Map
    {
        return new PSMap;
    }

    public function createCharacter(): Character
    {
        return new PSCharacter;
    }
    
    public function createGameTemplate(): GameTemplate
    {
        return new PSGameTemplate(
            $this->createMap(),
            $this->createCharacter(),
        );
    }

    public function getRenderer(): GameRenderer
    {
        return new PSGameRenderer;
    }
}