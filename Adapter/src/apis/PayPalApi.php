<?php

namespace App\Apis;

class PaypalApi
{
    public function getClientData()
    {
        var_dump('Getting data client from Paypal');
    }

    public function payBill()
    {
        var_dump('Payment amount to Paypal');
    }
}