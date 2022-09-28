<?php

namespace App\Http\Controllers;

use App\Order;
use App\Http\Requests\OrderRequest;

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


/**
 * 特定IDのorderを表示する
 *
 * @params Object Post // 引数の$orderはid=1のOrderインスタンス
 * @return Reposnse order view
 */
public function show(Order $order)
{
    return view('orders/show')->with(['order' => $order]);
}

public function create()
{
    return view('orders/create');
}

public function store(OrderRequest $request, Order $order)
{
    $input = $request['order'];
    $order->fill($input)->save();
    return redirect('/orders/' . $order->id);
}

public function edit(Order $order)
{
    return view('orders/edit')->with(['order' => $order]);
}

public function update(OrderRequest $request, Order $order)
{
    $input_order = $request['order'];
    $order->fill($input_order)->save();

    return redirect('/orders/' . $order->id);
}



}