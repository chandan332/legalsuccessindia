<?php

namespace App\Services;

use App\Models\Order;

class OrderServices
{
    public function create($id, $payment_id, $amount)
    {
        $order = new Order();
        $order->id = $id;
        $order->payment_id = $payment_id;
        $order->amount = $amount;
        $order->save();
        info("Order saved in database: " . print_r($order, true));
        return $order;
    }
}
