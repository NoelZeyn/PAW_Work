<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Order;

class OrderController extends Controller
{
    public function viewHistory()
    {
        $orders = Order::all(); // Gantilah dengan logika yang sesuai untuk menampilkan riwayat pesanan pengguna tertentu

        return view('orders.history', compact('orders'));
    }

    public function deleteOrder($order_id)
    {
        $order = Order::find($order_id);

        if (!$order) {
            return redirect()->route('orders.history')->with('error', 'Pesanan tidak ditemukan');
        }

        // Lakukan pengecekan apakah pengguna yang sedang login memiliki izin untuk menghapus pesanan ini

        $order->delete();

        return redirect()->route('orders.history')->with('success', 'Pesanan berhasil dihapus');
    }


}
