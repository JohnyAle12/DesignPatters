<?php

namespace App\Interface;

interface Observable
{
    public function attach(Observer $observer): void;
    public function detach(Observer $observer): void;
    public function notify(string $eventType): void;
    public function getDataToNotify(): array;
}