<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('product.index', compact('products'));
    }

    public function create()
    {
        return view('product.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'harga' => 'required|numeric',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $simpanGambar = 'noimage.jpg';

        if($request->hasFile('gambar')){
            $simpanGambar = $request->file('gambar')->getClientOriginalName();
            $path = $request->file('gambar')->move(public_path('assets/images'), $simpanGambar);
        }

        $product = new Product();
        $product->nama = $request->nama;
        $product->harga = $request->harga;
        $product->gambar = $simpanGambar;
        $product->save();

        return redirect()->route('product.index');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('product.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'harga' => 'required|numeric',
        ]);

        $product = product::findOrFail($id);
        $product->nama = $request->nama;
        $product->harga = $request->harga;

        if($request->hasFile('gambar')){
            $simpanGambar = $request->file('gambar')->getClientOriginalName();
            $path = $request->file('gambar')->move(public_path('assets/images'), $simpanGambar);
            $product->gambar = $simpanGambar;
        }

        $product->save();

        return redirect()->route('product.index');
    }

    public function destroy($id)
    {
        $product = product::findOrFail($id);
        $product->delete();

        return redirect()->route('product.index');
    }
}
