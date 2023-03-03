<?php

namespace App\Stages;

use App\Base\Operation;
use App\Transaction;

class OneHundredBill extends Operation
{
    public function process(Transaction $transaction): void
    {
        if($transaction->amount < 100){
            $this->next($transaction);
            return;
        }

        $bills = intval($transaction->amount / 100);
        $remain = $transaction->amount % 100;

        echo "Gave you $100 bills: {$bills} \n";

        if($remain !== 0){
            $transaction->amount = $remain;
            $this->next($transaction);
        }
    }
}