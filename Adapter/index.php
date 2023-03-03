<?php

require 'vendor/autoload.php';

use App\Adapter\BankApiAdapter;
use App\Adapter\PayPalApiAdapter;
use App\Apis\BankApi;
use App\Apis\PaypalApi;
use App\Store;

// store -> interface -> adapter -> api

$bankAdapter =  new BankApiAdapter(new BankApi());
$paypalAdapter =  new PayPalApiAdapter(new PaypalApi());

$store = new Store($bankAdapter);
$store->process();

$storeTwo = new Store($paypalAdapter);
$storeTwo->process();