<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class KasirController extends Controller
{
    public function index()
    {
        $kasirs = User::where('role', 'kasir')->get();
        return view('kasir.index', compact('kasirs'));
    }

    public function create()
    {
        return view('kasir.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $kasir = new User();
        $kasir->username = $request->username;
        $kasir->email = $request->email;
        $kasir->password = Hash::make($request->password);
        $kasir->role = 'kasir';
        $kasir->save();

        return redirect()->route('kasir.index');
    }

    public function edit($id)
    {
        $kasir =  User::findOrFail($id);
        return view('kasir.edit', compact('kasir'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'username' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $kasir = User::findOrFail($id);
        $kasir->username = $request->username;
        $kasir->email = $request->email;
        $kasir->password = Hash::make($request->password);
        $kasir->save();

        return redirect()->route('kasir.index');
    }

    public function destroy($id)
    {
        $kasir = User::findOrFail($id);
        $kasir->delete();

        return redirect()->route('kasir.index');
    }
}
