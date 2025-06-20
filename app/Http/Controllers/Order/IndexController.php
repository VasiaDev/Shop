<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;


class IndexController extends Controller
{
    public function __invoke()
    {
        $orders = Order::with('user')->get();

        return view('order.index', compact('orders'));
    }
}
