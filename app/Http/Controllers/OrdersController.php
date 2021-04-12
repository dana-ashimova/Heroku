<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function create(){
    $products = Product::all();
    return view('create', compact('products'));
}
public function store(StoreOrderRequest $request){
    $order = Order::create($request->all());

    $products = $request->input('products', []);
    $quantities = $request->input('quantities', []);
    for ($product=0; $product < count($products); $product++) {
        if ($products[$product] != '') {
            $order->products()->attach($products[$product], ['quantity' => $quantities[$product]]);
        }
    }

    return redirect()->route('index');
}
public function index(){
    $orders = Order::with('products')->get();
    return view('index', compact('orders'));
}
}
