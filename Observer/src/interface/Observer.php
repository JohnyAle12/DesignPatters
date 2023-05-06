<?php

namespace App\Interface;

interface Observer
{
    public function created(): void;
    public function updated(): void;
    public function deleted(): void;
    public function getName(): string;
}