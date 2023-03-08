<?php

use App\Factory\PlayStationFactory;
use App\Game\Game;

require 'vendor/autoload.php';

$game = new Game('Johny');
echo $game->render(new PlayStationFactory);