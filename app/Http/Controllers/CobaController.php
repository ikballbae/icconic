<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use App\Models\Product;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class CobaController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $pelanggans = Pelanggan::all();
        $total = $this->getCartTotal();
        return view('transaksi.index', compact('products', 'pelanggans', 'total'));
    }

    public function store(Request $request)
    {
        $productId = $request->input('product_id');
        $product = Product::findOrFail($productId);

        $cart = session()->get('cart');
        if (!$cart) {
            $cart = [];
        }

        $quantity = $request->input('quantity', 1);

        if (isset($cart[$productId])) {
            $cart[$productId]['quantity'] += $quantity;
        } else {
            $cart[$productId] = [
                'product' => $product,
                'quantity' => $quantity,
            ];
        }

        session()->put('cart', $cart);

        return redirect()->route('transaksi.index');
    }

    public function update(Request $request, $id)
    {
        $quantity = $request->input('quantity');

        $cart = session()->get('cart');

        if ($quantity <= 0) {
            unset($cart[$id]);
        } else {
            $cart[$id]['quantity'] = $quantity;
        }

        session()->put('cart', $cart);

        return redirect()->route('transaksi.index');
    }

    private function getCartTotal()
    {
        $cart = session()->get('cart');
        $total = 0;

        if ($cart) {
            foreach ($cart as $item) {
                $total += isset($item['product']) ? $item['product']->harga * $item['quantity'] : 0;
            }
        }

        return $total;
    }

    public function nota()
    {
        $cart = session()->get('cart');

        if (!$cart) {
            return redirect()->route('transaksi.index');
        }

        $total = $this->getCartTotal();

        session()->forget('cart');

        return view('transaksi.nota', compact('cart', 'total'));
    }

    public function checkout(Request $request)
    {
        $cart = session()->get('cart');

        if (!$cart) {
            return redirect()->route('transaksi.index');
        }

        $pelangganId = $request->input('pelanggan');
        if (!$pelangganId) {
            return redirect()->route('transaksi.index');
        }

        foreach ($cart as $item) {
            $order = new Transaksi();
            $order->product_id = $item['product']->id;
            $order->pelanggan_id = $pelangganId; // Gunakan pelanggan yang dipilih dari form
            $order->quantity = $item['quantity'];
            $order->total_harga = $item['product']->harga * $item['quantity']; // Hitung total harga
            $order->tanggal = now();
            $order->save();
        }

        return redirect()->route('transaksi.nota');
    }
}
