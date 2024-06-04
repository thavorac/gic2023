<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class EloquentController extends Controller
{
    public function test(){
        $userA = User::where('id', 1)->with(['orders'])->get();

        //$orders = Order::where('user_id', 1)->get();
        //$orders = $userA->orders;
        dd($userA);
    }
}
