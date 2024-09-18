<?php

namespace App\Http\Controllers;

use App\Models\Sepatu;
use Illuminate\Http\Request;

class SepatuController extends Controller
{
    // Tampilkan daftar sepatu
    public function index()
    {
        $sepatus = Sepatu::all();
        return view('sepatu1', compact('sepatus')); // view 'sepatu1'
    }

    // Tampilkan form untuk membuat sepatu baru
    public function create()
    {
        return view('create'); // view 'create' untuk form tambah sepatu
    }

    // Simpan sepatu baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'merek' => 'required|string|max:255',
            'ukuran' => 'required|string|max:10',
            'harga' => 'required|numeric|min:0',
            'stok' => 'required|integer|min:0',
            'deskripsi' => 'nullable|string',
        ]);

        Sepatu::create($request->all());

        // Setelah menyimpan, redirect ke halaman daftar sepatu
        return redirect()->route('sepatus.index')->with('success', 'Sepatu berhasil ditambahkan.');
    }

    // Tampilkan form edit sepatu
    public function edit($id)
    {
        $sepatu = Sepatu::findOrFail($id);
        return view('edit', compact('sepatu'));
    }

    // Update sepatu di database
    public function update(Request $request, $id)
    {
        $request->validate([
            'merek' => 'required|string|max:255',
            'ukuran' => 'required|string|max:10',
            'harga' => 'required|numeric|min:0',
            'stok' => 'required|integer|min:0',
            'deskripsi' => 'nullable|string',
        ]);

        $sepatu = Sepatu::findOrFail($id);
        $sepatu->update($request->all());

        return redirect()->route('sepatus.index')->with('success', 'Sepatu berhasil diupdate.');
    }

    // Hapus sepatu dari database
    public function destroy($id)
    {
        $sepatu = Sepatu::findOrFail($id);
        $sepatu->delete();

        return redirect()->route('sepatus.index')->with('success', 'Sepatu berhasil dihapus.');
    }
}
