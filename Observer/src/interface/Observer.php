<?php

namespace App\Interface;

interface Observer
{
    public function update(): void;
    public function getName(): string;
}