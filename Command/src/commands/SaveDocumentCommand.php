<?php

namespace App\Commands;

use App\Document;
use App\Interface\Command;

class SaveDocumentCommand implements Command
{
    public function __construct(
        protected Document $document
    ){}

    public function execute()
    {
        $this->document->save();
    }
}