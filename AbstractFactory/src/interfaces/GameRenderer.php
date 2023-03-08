<?php

namespace App\Interfaces;

interface GameRenderer
{
    public function render(string $characterName, string $templateGame): string;
}