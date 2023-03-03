<?php

namespace App;

class Document
{
    public function open()
    {
        var_dump('Opening document ...');
    }

    public function save()
    {
        var_dump('Saving document ...');
    }

    public function close()
    {
        var_dump('Closing document ...');
    }
}