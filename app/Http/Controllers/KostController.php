<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kost;

class KostController extends Controller
{
    public function index()
    {
        $kosts = Kost::all();
        return view('kosts.index', compact('kosts'));
    }

    public function create()
    {
        return view('kosts.create');
    }

    public function store(Request $request)
    {
        $request->validate(Kost::rules());

        $kost = Kost::create($request->all());

        if ($request->hasFile('gambar')) {
            $path = $kost->saveImage($request->file('gambar'));
        }

        return redirect()->route('kosts.index')->with('success', 'Kost berhasil ditambahkan!');
    }

    public function show($id)
    {
        $kost = Kost::findOrFail($id);
        return view('kosts.show', compact('kost'));
    }

    public function edit($id)
    {
        $kost = Kost::findOrFail($id);
        return view('kosts.edit', compact('kost'));
    }

    public function update(Request $request, $id)
    {
        $request->validate(Kost::rules());

        $kost = Kost::findOrFail($id);
        $kost->update($request->all());

        if ($request->hasFile('gambar')) {
            $path = $kost->saveImage($request->file('gambar'));
        }

        return redirect()->route('kosts.index')->with('success', 'Kost berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $kost = Kost::findOrFail($id);
        $kost->delete();

        return redirect()->route('kosts.index')->with('success', 'Kost berhasil dihapus!');
    }
}
