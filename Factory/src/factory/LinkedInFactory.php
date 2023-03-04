<?php

namespace App\Factory;

use App\Connection\LinkedIn;
use App\Connection\SocialNetwork;

class LinkedInFactory extends SocialNetworkFactory
{
    public function __construct(
        private string $email,
        private string $password
    ){}

    public function createSocialNetwork(): SocialNetwork
    {
        return new LinkedIn($this->email, $this->password);
    }
}   