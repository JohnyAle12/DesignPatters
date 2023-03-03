<?php

require 'vendor/autoload.php';

use App\Stages\BalanceChecker;
use App\Stages\FiftyBill;
use App\Stages\FiveHundredBill;
use App\Stages\MultipleOfFifty;
use App\Stages\OneHundredBill;
use App\Stages\TwoHundredBill;
use App\Transaction;

// it's the context
$transaction = new Transaction;
$transaction->balance = 10000;
$transaction->amount = 1350;

// stages or responsabilities
$multiple = new MultipleOfFifty;
$balance = new BalanceChecker;
$fiveHundred = new FiveHundredBill;
$twoHundred = new TwoHundredBill;
$oneHundred = new OneHundredBill;
$fifty = new FiftyBill;

// chain of resposability
$multiple->then($balance);
$balance->then($fiveHundred);
$fiveHundred->then($twoHundred);
$twoHundred->then($oneHundred);
$oneHundred->then($fifty);

// handle or trigger
$multiple->process($transaction);
