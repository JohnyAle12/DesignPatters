<?php

namespace App\Connection;

interface SocialNetwork
{
    public function logIn(): void;

    public function logOut(): void;

    public function createPost(string $content): void;
}