<?php

namespace App\Http\Controllers;

use App\Models\Mitra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;


class MitraController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Informasi toko',
            'breadcrumb' => 'Mitra',
            'breadcrumb_item' => 'Informasi toko',
            'mitra' => Mitra::all()
        ];
        return view('member.pages.kelola.mitra.index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah toko',
            'breadcrumb' => 'Mitra',
            'breadcrumb_item' => 'Informasi toko',
            'breadcrumb_item_active' => 'Tambah toko',
            'mitra' => Mitra::all()
        ];
        return view('member.pages.kelola.mitra.create', $data);
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Edit toko',
            'breadcrumb' => 'Mitra',
            'breadcrumb_item' => 'Informasi toko',
            'breadcrumb_item_active' => 'Edit toko',
            'mitra' => Mitra::find($id)
        ];
        return view('member.pages.kelola.mitra.edit', $data);
    }

    public function store(Request $request)
    {
        $mitra = new Mitra();

        $mitra->user_id = Auth::user()->role_id;
        $mitra->name = $request->name;
        $mitra->description = $request->description;
        $mitra->location = $request->location;

        $mitra->save();

        return redirect()->route('mitra.create')->with('success', "Data Mitra telah berhasil ditambahkan");
    }

    public function update(Request $request, $id)
    {
        $mitra = Mitra::find($id);

        $mitra->user_id = Auth::user()->role_id;
        $mitra->name = $request->name;
        $mitra->description = $request->description;
        $mitra->location = $request->location;

        $mitra->save();

        return redirect()->route('mitra.create')->with('success', "Data Mitra telah berhasil diubah");
    }

    public function destroy($id)
    {
        try {

            $mitra = Mitra::find($id);

            $mitra->delete();

            Alert::success('success', 'Data Mitra Berhasil Dihapus!');
            session()->flash('success', 'Data Mitra Berhasil Dihapus!');
            return redirect('/member/kelola/mitra');
        } catch (\Exception $e) {
            Alert::error('error', 'Data Mitra Gagal Dihapus!' . $e->getMessage());
            session()->flash('error', 'Data Mitra Gagal Dihapus!');
            return back()->with('error', 'Data Mitra Gagal Dihapus!');
        }
    }


}
