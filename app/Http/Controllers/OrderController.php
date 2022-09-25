<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
 * Order一覧を表示する
 * 
 * @param Order Orderモデル
 * @return array Orderモデルリスト
 */
public function index(Order $order)
{
    return view('orders/index')->with(['orders' => $order->getPaginateByLimit()]);
    
}

}