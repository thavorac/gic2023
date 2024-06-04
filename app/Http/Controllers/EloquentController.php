<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class EloquentController extends Controller
{
    public function test(){
        // TODO: Get all products of the user 1

        // Option 1
        // $user1 = User::with(['orders', 'orders.products'])->find(1);

        // Option 2
        $user1 = User::find(1);
        $orders = $user1->orders;
        $products = [];

        for ($i=0;$i<count($orders); $i++) {
            $order = $orders[$i];
            dd($order->products->toArray());
        }

    }
}
