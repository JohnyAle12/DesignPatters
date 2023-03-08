<?php

namespace App\Game;

use App\Factory\GameFactory;

class Game
{
    public function __construct(
        protected string $characterName
    ){}

    public function render(GameFactory $factory): string
    {
        $template = $factory->createGameTemplate();
        $gameTemplate = $template->getGameTemplate();

        $renderer = $factory->getRenderer();

        return $renderer->render($this->characterName, $gameTemplate);
    }
}