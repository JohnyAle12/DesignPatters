<?php

require 'vendor/autoload.php';

use App\Client;
use App\Factory\FacebookFactory;
use App\Factory\LinkedInFactory;

$facebook = new FacebookFactory('johny', 'hh122-122');
$linkedIn = new LinkedInFactory('johny@mail.com', '*****');

$client = new Client;
$client->sendPost($facebook, 'Hello World!!');
$client->sendPost($linkedIn, 'Hello World!!');