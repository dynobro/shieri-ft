<?php

namespace App\Observers;

use App\Events\OrderBuyed;
use App\Order;

class OrderObserver
{
    public function updated(Order $order)
    {
        event(new OrderBuyed($order));
    }
}
