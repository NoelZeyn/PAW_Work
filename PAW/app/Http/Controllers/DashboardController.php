<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;

class CartController extends Controller
{
    public function index()
    {
        $cart = Cart::all();
        return view('cart.index', compact('cart'));
    }

    public function create()
    {
        return view('cart.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kategori_barang' => 'required',
            'nama_barang' => 'required',
            'jenis_barang' => 'required',
            'harga' => 'required|numeric',
            'jumlah' => 'required|numeric',
            'user_id' => 'required|numeric',
        ]);

        Cart::create($validatedData);

        return redirect('/cart')->with('success', 'Cart berhasil ditambahkan');
    }

    public function show($id)
    {
        $cart = Cart::findOrFail($id);
        return view('cart.show', compact('cart'));
    }

    public function edit($id)
    {
        $cart = Cart::findOrFail($id);
        return view('cart.edit', compact('cart'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'kategori_barang' => 'required',
            'nama_barang' => 'required',
            'jenis_barang' => 'required',
            'harga' => 'required|numeric',
            'jumlah' => 'required|numeric',
            'user_id' => 'required|numeric',
        ]);

        Cart::whereId($id)->update($validatedData);

        return redirect('/cart')->with('success', 'Keranjang berhasil diperbarui');
    }

    public function destroy($id)
    {
        $cart = Cart::findOrFail($id);
        $cart->delete();

        return redirect('/cart')->with('success', 'Keranjang berhasil dihapus');
    }
}

