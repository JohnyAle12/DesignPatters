<?php

namespace App\Game;

use App\Interfaces\Character;
use App\Interfaces\GameTemplate;
use App\Interfaces\Map;

abstract class BaseGameTemplate implements GameTemplate
{
    public function __construct(
        protected Map $map,
        protected Character $character,
    ){}
}