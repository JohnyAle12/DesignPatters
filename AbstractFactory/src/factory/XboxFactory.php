<?php

namespace App\Factory;

use App\Interfaces\Character;
use App\Interfaces\GameRenderer;
use App\Interfaces\Map;
use App\Interfaces\GameTemplate;
use App\Xbox\XboxCharacter;
use App\Xbox\XboxGameRenderer;
use App\Xbox\XboxGameTemplate;
use App\Xbox\XboxMap;

class XboxFactory implements GameFactory
{
    public function createMap(): Map
    {
        return new XboxMap;
    }

    public function createCharacter(): Character
    {
        return new XboxCharacter;
    }
    
    public function createGameTemplate(): GameTemplate
    {
        return new XboxGameTemplate(
            $this->createMap(),
            $this->createCharacter(),
        );
    }

    public function getRenderer(): GameRenderer
    {
        return new XboxGameRenderer;
    }
}