<?php

require 'vendor/autoload.php';

use App\Factory\PlayStationFactory;
use App\Factory\XboxFactory;
use App\Game\Game;


$game = new Game('Johny');
echo $game->render(new PlayStationFactory);
echo $game->render(new XboxFactory);