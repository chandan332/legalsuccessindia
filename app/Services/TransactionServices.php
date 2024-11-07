<?php

namespace App\Services;

use App\Models\Transaction;

class TransactionServices
{
    public function create(array $data)
    {
        $transaction = new Transaction();
        $transaction->order_id = $data['order_id'];
        $transaction->created_payment_id = $data['created_payment_id'];
        $transaction->created_signature = $data['created_signature'];
        $transaction->save();
        info("Transaction saved in database: " . $transaction->id);
        return $transaction;
    }
}
