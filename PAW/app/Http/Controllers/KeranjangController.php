<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Keranjang;

class KeranjangController extends Controller
{
    public function index()
    {
        $keranjang = Keranjang::all();
        return view('keranjang.index', compact('keranjang'));
    }

    public function create()
    {
        return view('keranjang.create');
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

        Keranjang::create($validatedData);

        return redirect('/keranjang')->with('success', 'Keranjang berhasil ditambahkan');
    }

    public function show($id)
    {
        $keranjang = Keranjang::findOrFail($id);
        return view('keranjang.show', compact('keranjang'));
    }

    public function edit($id)
    {
        $keranjang = Keranjang::findOrFail($id);
        return view('keranjang.edit', compact('keranjang'));
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

        Keranjang::whereId($id)->update($validatedData);

        return redirect('/keranjang')->with('success', 'Keranjang berhasil diperbarui');
    }

    public function destroy($id)
    {
        $keranjang = Keranjang::findOrFail($id);
        $keranjang->delete();

        return redirect('/keranjang')->with('success', 'Keranjang berhasil dihapus');
    }
}

