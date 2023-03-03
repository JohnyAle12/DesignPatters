<?php

namespace App\Stages;

use App\Base\Operation;
use App\Transaction;

class TwoHundredBill extends Operation
{
    public function process(Transaction $transaction): void
    {
        if($transaction->amount < 200){
            $this->next($transaction);
            return;
        }

        $bills = intval($transaction->amount / 200);
        $remain = $transaction->amount % 200;

        echo "Gave you $200 bills: {$bills} \n";

        if($remain !== 0){
            $transaction->amount = $remain;
            $this->next($transaction);
        }
    }
}