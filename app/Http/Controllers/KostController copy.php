<?php

namespace App\Http\Controllers;

use App\Models\Kost;
use Illuminate\Http\Request;

class KostController extends Controller
{
    public function index()
    {
        $kosts = Kost::all();
        return view("member.pages.kelola.produk.index", compact('kosts'));
    }

    public function create()
    {
        return view("member.pages.kelola.produk.create");
    }

    public function store(Request $request)
    {
        $request->validate([
            'foto1' => 'required|string',
            'foto2' => 'required|string',
            'foto3' => 'required|string',
            'foto4' => 'required|string',
            'foto5' => 'required|string',
            'judul' => 'required|string',
            'deskripsi' => 'required|string',
            'tag' => 'required|in:kost putra,kost putri,kost campur',
            'member_id' => 'required|exists:members,id',
            'cerita_pemilik' => 'required|string',
            'ketentuan_pengajuan_sewa' => 'required|string',
            'tanggal_mulai_kos' => 'required|date',
            'perbulan' => 'required|numeric',
            'alamat_kost' => 'required|string',
        ]);

        Kost::create($request->all());

        return redirect()->route('member.produk.create')->with('success', 'Data kost berhasil ditambahkan');
    }
    public function edit($id)
    {
        dd($id);
        $kost = Kost::findOrFail($id);
        return view('member.pages.kelola.produk.edit', compact('kost'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'foto1' => 'required|string',
            'foto2' => 'required|string',
            'foto3' => 'required|string',
            'foto4' => 'required|string',
            'foto5' => 'required|string',
            'judul' => 'required|string',
            'deskripsi' => 'required|string',
            'tag' => 'required|in:kost putra,kost putri,kost campur',
            'member_id' => 'required|exists:members,id',
            'cerita_pemilik' => 'required|string',
            'ketentuan_pengajuan_sewa' => 'required|string',
            'tanggal_mulai_kos' => 'required|date',
            'perbulan' => 'required|numeric',
            'alamat_kost' => 'required|string',
        ]);

        $kost = Kost::findOrFail($id);
        $kost->update($request->all());

        return redirect()->route('member.produk.edit', $kost->id)->with('success', 'Data kost berhasil diperbarui');
    }
    public function destroy($id)
    {
        $kost = Kost::findOrFail($id);
        $kost->delete();

        return redirect()->route('member.produk.destroy')->with('success', 'Data kost berhasil dihapus');
    }
}
