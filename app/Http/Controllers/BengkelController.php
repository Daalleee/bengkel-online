<?php

namespace App\Http\Controllers;

use App\Models\Bengkel;
use Illuminate\Http\Request;

class BengkelController extends Controller
{
    public function index()
    {
        $bengkels = Bengkel::all();
        return view('bengkels.index', compact('bengkels')); // pastikan folder dan file kecil semua
    }

    public function create()
    {
        return view('bengkels.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
            'description' => 'nullable|string',
            'opening_time' => 'required',
            'closing_time' => 'required',
        ]);
        $validated['user_id'] = 1;
        Bengkel::create($validated);

        return redirect()->route('bengkels.index')->with('sukses', 'Bengkel berhasil ditambahkan');
    }

    public function show(Bengkel $bengkel)
    {
        return view('bengkels.show', compact('bengkel'));
    }

    public function edit(Bengkel $bengkel)
    {
        return view('bengkels.edit', compact('bengkel'));
    }

    public function update(Request $request, Bengkel $bengkel)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
            'description' => 'nullable|string',
            'opening_time' => 'required',
            'closing_time' => 'required',
        ]);

        $bengkel->update($validated);

        return redirect()->route('bengkels.index')->with('sukses', 'Bengkel berhasil diupdate');
    }

    public function destroy(Bengkel $bengkel)
    {
        $bengkel->delete();

        return redirect()->route('bengkels.index')->with('sukses', 'Bengkel berhasil dihapus');
    }
}
