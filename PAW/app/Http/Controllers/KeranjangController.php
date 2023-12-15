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
        Keranjang::create($request->all());
        return redirect()->route('keranjang.index');
    }

    public function edit(Keranjang $keranjang)
    {
        return view('keranjang.edit', compact('keranjang'));
    }

    public function update(Request $request, Keranjang $keranjang)
    {
        $keranjang->update($request->all());
        return redirect()->route('keranjang.index');
    }

    public function destroy(Keranjang $keranjang)
    {
        $keranjang->delete();
        return redirect()->route('keranjang.index');
    }
}
