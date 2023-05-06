<?php

namespace App\Interface;

interface Observable
{
    public function attach(Observer $observer): void;
    public function detach(Observer $observer): void;
    public function notify(): void;
    public function getDataToNotify(): array;
}