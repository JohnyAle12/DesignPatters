<?php

namespace App\Apis;

class BankApi
{
    public function getClientInformation()
    {
        var_dump('Getting information from Bank');
    }

    public function chargeAmount()
    {
        var_dump('Charged amount from client to Bank');
    }
}