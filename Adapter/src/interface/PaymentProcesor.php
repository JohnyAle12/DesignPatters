<?php

namespace App\Interface;

interface PaymentProcesor
{
    public function getClientInformation(): void;
    public function processPayment(): void;
}