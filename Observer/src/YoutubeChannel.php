<?php

declare(strict_types=1);

namespace App;

use App\Interface\Observable;
use App\Interface\Observer;

class YoutubeChannel implements Observable
{
    private array $channelSubscribers = [];
    private string $lastVideoPosted = '';

    public function attach(Observer $observer): void
    {
        $this->channelSubscribers[] = $observer;
    }

    public function detach(Observer $observer): void
    {
        
    }

    public function addNewVideo(string $title): void
    {
        $this->lastVideoPosted = $title;
        $this->notify();
    }

    public function getDataToNotify(): array
    {
        return [
            'lastVideoPosted' => $this->lastVideoPosted
        ];
    }

    public function notify(): void
    {
        foreach ($this->channelSubscribers as $subscriber) {
            $subscriber->update();
        }
    }
}