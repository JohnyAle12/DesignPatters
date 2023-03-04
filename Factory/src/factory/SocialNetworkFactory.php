<?php

namespace App\Factory;

use App\Connection\SocialNetwork;

abstract class SocialNetworkFactory
{
    abstract public function createSocialNetwork(): SocialNetwork;

    public function post($content): void
    {
        $network = $this->createSocialNetwork();

        $network->logIn();
        $network->createPost($content);
        $network->logout();
    }
}