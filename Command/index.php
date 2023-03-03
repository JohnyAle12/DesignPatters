<?php

use App\Commands\CloseDocumentCommand;
use App\Commands\OpenDocumentCommand;
use App\Commands\SaveDocumentCommand;
use App\Document;
use App\Menu;

require 'vendor/autoload.php';

//receiver
$document = new Document();

//commands
$openCommand = new OpenDocumentCommand($document);
$saveCommand = new SaveDocumentCommand($document);
$closeCommand = new CloseDocumentCommand($document);

//trigger
$menu = new Menu($openCommand, $saveCommand, $closeCommand);

//client
$menu->open();
$menu->save();
$menu->close();