<?php

namespace App\Factory;

use App\Interfaces\Character;
use App\Interfaces\GameRenderer;
use App\Interfaces\Map;
use App\Interfaces\GameTemplate;

interface GameFactory
{
    public function createMap(): Map;

    public function createCharacter(): Character;
    
    public function createGameTemplate(): GameTemplate;

    public function getRenderer(): GameRenderer;
}