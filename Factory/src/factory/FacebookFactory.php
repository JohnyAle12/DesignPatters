<?php

namespace App\Factory;

use App\Connection\Facebook;
use App\Connection\SocialNetwork;

class FacebookFactory extends SocialNetworkFactory
{
    public function __construct(
        private string $login,
        private string $password
    ){}

    public function createSocialNetwork(): SocialNetwork
    {
        return new Facebook($this->login, $this->password);
    }
}