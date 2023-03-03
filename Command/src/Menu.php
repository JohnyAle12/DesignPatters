<?php

namespace App;

use App\Interface\Command;

class Menu
{
    public function __construct(
        protected Command $openCommand,
        protected Command $saveCommand,
        protected Command $closeCommand
    ){}

    public function open()
    {
        $this->openCommand->execute();
    }

    public function save()
    {
        $this->saveCommand->execute();
    }

    public function close()
    {
        $this->closeCommand->execute();
    }
}