<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CartItem;
use App\Models\Product;

class KeranjangController extends Controller
{
    public function tambahKeKeranjang(Request $request)
    {
        $product = Product::find($request->product_id);

        $cartItem = CartItem::updateOrCreate(
            [
                'product_id' => $product->id,
                'user_id' => auth()->user()->id,
            ],
            [
                'quantity' => $request->quantity,
            ]
        );

        return response()->json(['message' => 'Produk berhasil ditambahkan ke keranjang', 'cart_item' => $cartItem]);
    }

    public function perbaruiItemKeranjang(Request $request, $id)
    {
        $cartItem = CartItem::find($id);

        if ($request->has('quantity')) {
            $cartItem->quantity = $request->quantity;
        }

        $cartItem->save();

        return response()->json(['message' => 'Item keranjang berhasil diperbarui', 'cart_item' => $cartItem]);
    }

    public function hapusItemKeranjang($id)
    {
        $cartItem = CartItem::find($id);
        $cartItem->delete();

        return response()->json(['message' => 'Item keranjang berhasil dihapus']);
    }
}
