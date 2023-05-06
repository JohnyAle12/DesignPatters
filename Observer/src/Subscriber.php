<?php

declare(strict_types=1);

namespace App;

use App\Interface\Observable;
use App\Interface\Observer;

class Subscriber implements Observer
{
    public function __construct(
        private readonly Observable $observable,
        private readonly string $name
    ){}

    public function update(): void
    {
        var_dump("Notify to {$this->getName()}: New video posted on the channel", $this->observable->getDataToNotify());
    }

    public function getName(): string
    {
        return $this->name;
    }
}