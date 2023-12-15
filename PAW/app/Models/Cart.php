<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;

class CartController extends Controller
{
    // Menampilkan semua data cart
    public function index()
    {
        $carts = Cart::all();
        return view('carts.index', ['carts' => $carts]);
    }

    // Menampilkan form untuk membuat cart baru
    public function create()
    {
        return view('carts.create');
    }

    // Menyimpan cart baru ke dalam database
    public function store(Request $request)
    {
        $cart = new Cart([
            'kategori_barang' => $request->kategori_barang,
            'nama_barang' => $request->nama_barang,
            'jenis_barang' => $request->jenis_barang,
            'harga' => $request->harga,
            'jumlah' => $request->jumlah,
            'user_id' => $request->user_id,
        ]);
        
        $cart->save();

        return redirect('/carts')->with('success', 'Cart berhasil ditambahkan');
    }

    // Menampilkan detail cart
    public function show($id)
    {
        $cart = Cart::find($id);
        return view('carts.show', ['cart' => $cart]);
    }

    // Menampilkan form untuk mengedit cart
    public function edit($id)
    {
        $cart = Cart::find($id);
        return view('carts.edit', ['cart' => $cart]);
    }

    // Memperbarui cart di database
    public function update(Request $request, $id)
    {
        $cart = Cart::find($id);
        $cart->kategori_barang = $request->kategori_barang;
        $cart->nama_barang = $request->nama_barang;
        $cart->jenis_barang = $request->jenis_barang;
        $cart->harga = $request->harga;
        $cart->jumlah = $request->jumlah;
        $cart->user_id = $request->user_id;
        $cart->save();

        return redirect('/carts')->with('success', 'Cart berhasil diperbarui');
    }

    // Menghapus cart dari database
    public function destroy($id)
    {
        $cart = Cart::find($id);
        $cart->delete();

        return redirect('/carts')->with('success', 'Cart berhasil dihapus');
    }
}
