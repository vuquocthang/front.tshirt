<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

class ApiController extends Controller
{
    function acceptTransaction(Request $req){
        $content = $req->content;
        $amount = $req->amount;

        //get all orders which have status 0
        $orders = Order::doesntHave('status')
            ->with('status', 'details')
            ->get();

        foreach ($orders as $order){
            if( $content == $order->id && $amount >= $order->total){
                $order->switchStatus(1);

                return $order;
            }
        }

        return $orders;
    }
}
