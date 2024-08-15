<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
{
    $orders = Order::all();
    return view('orders.index', compact('orders'));
}

public function create()
{
    $order = new Order(); // ou algum outro valor padrão
    return view('orders.create', compact('order'));
}

public function store(Request $request)
{
    $request->validate([
        'OS' => 'required',
        'purchase_date' => 'required|date',
        'delivery_date' => 'required|date',
        'customer_name' => 'required|string|max:255',
        'address' => 'required|string|max:255',
        'contact' => 'required|string|max:255',
        'lens_type' => 'required|string|max:255',
        'frame' => 'required|string|max:255',
        'payment_method' => 'required|string|max:255',
        'value' => 'required|numeric',
        'obs' => 'nullable|string',
    ]);

    Order::create($request->all());

    return redirect()->route('orders.index')->with('success', 'Order created successfully.');
}

public function show(Order $order)
{
    return view('orders.show', compact('order'));
}

public function edit(Order $order)
{
    return view('orders.edit', compact('order'));
}

public function update(Request $request, Order $order)
{
    $request->validate([
        'OS' => 'required',
        'purchase_date' => 'required|date',
        'delivery_date' => 'required|date',
        'customer_name' => 'required|string|max:255',
        'address' => 'required|string|max:255',
        'contact' => 'required|string|max:255',
        'lens_type' => 'required|string|max:255',
        'frame' => 'required|string|max:255',
        'payment_method' => 'required|string|max:255',
        'value' => 'required|numeric',
        'obs' => 'nullable|string',
    ]);

    $order->update($request->all());

    return redirect()->route('orders.index')->with('success', 'Order updated successfully.');
}

public function destroy(Order $order)
{
    $order->delete();
    return redirect()->route('orders.index')->with('success', 'Order deleted successfully.');
}

}
