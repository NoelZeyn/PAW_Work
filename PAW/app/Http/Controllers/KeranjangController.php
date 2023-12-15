<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KeranjangController extends Controller
{
    public function tambahKeKeranjang(Request $request)
    {
        $validated = $request->validate([
            'kategori_barang' => 'required',
            'name' => 'required',
            'jenis_barang' => 'required',
            'price' => 'required|numeric',
            'amount' => 'required|integer',
            'user_id' => 'required' // Anda bisa mengambil user_id dari session atau auth
        ]);

        Keranjang::create($validated);

        return response()->json(['message' => 'Produk berhasil ditambahkan ke keranjang']);
    }

    public function perbaruiItemKeranjang(Request $request, $id)
    {
        $keranjang = Keranjang::findOrFail($id);

        $validated = $request->validate([
            'price' => 'numeric',
            'amount' => 'integer'
            // tambahkan validasi lain sesuai kebutuhan
        ]);

        $keranjang->update($validated);

        return response()->json(['message' => 'Item keranjang berhasil diperbarui']);
    }

    public function hapusItemKeranjang($id)
    {
        $keranjang = Keranjang::findOrFail($id);
        $keranjang->delete();

        return response()->json(['message' => 'Item keranjang berhasil dihapus']);
    }
}
