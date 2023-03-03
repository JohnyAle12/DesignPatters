<?php

namespace App\Adapter;

use App\Apis\PaypalApi;
use App\Interface\PaymentProcesor;

class PayPalApiAdapter implements PaymentProcesor
{
    public function __construct(
        protected PaypalApi $paypalApi
    ){}

    public function getClientInformation(): void
    {
        $this->paypalApi->getClientData();
    }

    public function processPayment(): void
    {
        $this->paypalApi->payBill();
    }
}