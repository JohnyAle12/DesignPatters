<?php

namespace App\Connection;

class Facebook implements SocialNetwork
{
    public function __construct(
        private string $login,
        private string $password
    ){}

    public function logIn(): void
    {
        echo "Send Log in user $this->login with " . "password $this->password\n";
    }

    public function logOut(): void
    {
        echo "Send request to log out user $this->login\n";
    }

    public function createPost($content): void
    {
        echo "Send requests to create a post in Facebook with this content: {$content}.\n";
    }
}