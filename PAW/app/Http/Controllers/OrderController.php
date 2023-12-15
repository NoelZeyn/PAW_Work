<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Order;

class OrderController extends Controller
{
    public function viewHistory()
    {
        $orders = Order::all(); 
        return view('orders.history', compact('orders'));
    }

    public function deleteOrder($order_id)
    {
        $order = Order::find($order_id);
        if (!$order) {
            return redirect()->route('orders.history')->with('error', 'Pesanan tidak ditemukan');
        }
        $order->delete();
        return redirect()->route('orders.history')->with('success', 'Pesanan berhasil dihapus');
    }


}
