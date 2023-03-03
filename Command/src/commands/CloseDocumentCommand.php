<?php

namespace App\Commands;

use App\Document;
use App\Interface\Command;

class CloseDocumentCommand implements Command
{
    public function __construct(
        protected Document $document
    ){}

    public function execute()
    {
        $this->document->close();
    }
}