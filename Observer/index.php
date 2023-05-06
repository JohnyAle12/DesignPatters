<?php

require 'vendor/autoload.php';

use App\Subscriber;
use App\YoutubeChannel;

$channel = new YoutubeChannel();
$suscriberOne = new Subscriber($channel, 'Jose');
$suscriberTwo = new Subscriber($channel, 'Paula');

$channel->attach($suscriberOne);
$channel->attach($suscriberTwo);

$channel->addNewVideo('The biggest animals in the world');
$channel->addNewVideo('Running around the huge forest');
