<?php

namespace App\Connection;

class LinkedIn implements SocialNetwork
{
    public function __construct(
        private string $login,
        private string $password
    ){}

    public function logIn(): void
    {
        echo "Request Log in user $this->login with " . "password $this->password\n";
    }

    public function logOut(): void
    {
        echo "Request is send to log out user $this->login\n";
    }

    public function createPost($content): void
    {
        echo "Request is send to create a post in LinkedIn with this content: {$content}.\n";
    }
}