<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use App\Models\Product;
use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index()
    {
        $user = User::count();
        $product = Product::count();
        $pelanggan = Pelanggan::count();
        $transaksi = Transaksi::count();
        return view('index', compact('product','user','pelanggan','transaksi'));
    }
}
