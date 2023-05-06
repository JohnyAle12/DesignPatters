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

    public function created(): void
    {
        var_dump("Notify to {$this->getName()}: Something was created", $this->observable->getDataToNotify());
    }

    public function updated(): void
    {
        var_dump("Notify to {$this->getName()}: Something was updated", $this->observable->getDataToNotify());
    }

    public function deleted(): void
    {
        var_dump("Notify to {$this->getName()}: Something was deleted", $this->observable->getDataToNotify());
    }

    public function getName(): string
    {
        return $this->name;
    }
}