<?php

declare(strict_types=1);

namespace App;

use App\Interface\Observable;
use App\Interface\Observer;
use Error;

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
        // TODO: remove a suscriber from the list
    }

    public function addNewVideo(string $title): void
    {
        $this->lastVideoPosted = $title;
        $this->notify('created');
    }

    public function getDataToNotify(): array
    {
        return [
            'lastVideoPosted' => $this->lastVideoPosted
        ];
    }

    public function notify(string $eventType): void
    {
        switch ($eventType) {
            case 'created':
                foreach ($this->channelSubscribers as $subscriber) {
                    $subscriber->created();
                }
            break;
            case 'updated':
                foreach ($this->channelSubscribers as $subscriber) {
                    $subscriber->updated();
                }
            break;
            default:
                throw new Error("The event type {$eventType} isn't supported");
            break;
        }
    }
}