<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function index()
    {
        $pelanggans = Pelanggan::all();
        return view('pelanggan.index', compact('pelanggans'));
    }

    public function create()
    {
        return view('pelanggan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
        ]);

        $pelanggan = new Pelanggan();
        $pelanggan->nama = $request->nama;
        $pelanggan->email = $request->email;
        $pelanggan->save();

        return redirect()->route('pelanggan.index');
    }

    public function edit($id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        return view('pelanggan.edit', compact('pelanggan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
        ]);

        $pelanggan = Pelanggan::findOrFail($id);
        $pelanggan->nama = $request->nama;
        $pelanggan->email = $request->email;
        $pelanggan->save();

        return redirect()->route('pelanggan.index');
    }

    public function destroy($id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        $pelanggan->delete();

        return redirect()->route('pelanggan.index');
    }
}
