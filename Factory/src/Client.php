<?php

namespace App;

use App\Factory\SocialNetworkFactory;

class Client
{
    public function sendPost(
        SocialNetworkFactory $creator,
        string $content
    ): void
    {
        $creator->post($content);
    }
}