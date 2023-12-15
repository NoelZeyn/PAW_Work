<?php

namespace App\Http\Controllers;

use App\Models\Keranjang;
use Illuminate\Http\Request;

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
        $validated = $request->validate([
            'product_id' => 'required',
            'name' => 'required|max:100',
            'description' => 'nullable',
            'price' => 'required|numeric',
            'category_id' => 'nullable',
            'amount' => 'required|integer'
        ]);

        Keranjang::create($validated);
        return redirect()->route('keranjang.index');
    }

    public function update(Request $request, Keranjang $keranjang)
    {
        $validated = $request->validate([
            'product_id' => 'required',
            'name' => 'required|max:100',
            'description' => 'nullable',
            'price' => 'required|numeric',
            'category_id' => 'nullable',
            'amount' => 'required|integer'
        ]);

        $keranjang->update($validated);
        return redirect()->route('keranjang.index');
    }

    public function destroy(Keranjang $keranjang)
    {
        $keranjang->delete();
        return redirect()->route('keranjang.index');
    }
}
