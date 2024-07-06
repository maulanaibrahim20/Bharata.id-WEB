<?php

namespace App\Http\Controllers;

use App\Models\Kost;
use App\Models\User\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class KostController extends Controller
{
    public function index()
    {
        $kosts = Kost::all();
        return view("member.pages.kelola.kost.index", compact('kosts'));
    }

    public function create()
    {

        return view("member.pages.kelola.kost.create");
    }

    public function store(Request $request)
    {
        $member_id = Member::where('user_id', Auth::user()->id)->first();

        $image = $request->file('image');
        $imageName = $image->getClientOriginalName();

        $image->move(public_path('foto_kost'), $imageName);

        $kost = new Kost();

        $kost->foto1 = $imageName;
        $kost->foto2 = $imageName;
        $kost->foto3 = $imageName;
        $kost->foto4 = $imageName;
        $kost->foto5 = $imageName;
        $kost->judul = $request->title;
        $kost->deskripsi = $request->description;
        $kost->tag = $request->category;
        $kost->member_id = $member_id->id;
        $kost->cerita_pemilik = $request->owner_story;
        $kost->ketentuan_pengajuan_sewa = $request->rent_rule;
        $kost->tanggal_mulai_kos = $request->start_date;
        $kost->perbulan = $request->monthly_price;
        $kost->alamat_kost = $request->address;

        $kost->save();

        return redirect()->route('member.kost.create')->with('success', 'Data kost berhasil ditambahkan!');
    }
    public function edit($id)
    {

        $data = [
            'kost' => Kost::findOrFail($id)
        ];

        return view('member.pages.kelola.kost.edit', $data);
    }
    public function update(Request $request, $id)
    {
        $kost = Kost::findOrFail($id);

        $member_id = Member::where('user_id', Auth::user()->id)->first();

        $kost->judul = $request->title;
        $kost->deskripsi = $request->description;
        $kost->tag = $request->category;
        $kost->member_id = $member_id->id;
        $kost->cerita_pemilik = $request->owner_story;
        $kost->ketentuan_pengajuan_sewa = $request->rent_rule;
        $kost->tanggal_mulai_kos = $request->start_date;
        $kost->perbulan = $request->monthly_price;
        $kost->alamat_kost = $request->address;

        if ($request->file('image')) {
            if (File::exists(public_path("foto_kost/$kost->foto1"))) {
                File::delete("foto_kost/$kost->foto1");
            }

            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();

            $kost->foto1 = $imageName;
            $kost->foto2 = $imageName;
            $kost->foto3 = $imageName;
            $kost->foto4 = $imageName;
            $kost->foto5 = $imageName;

            $image->move(public_path('foto_kost'), $imageName);
        }

        $kost->save();

        return redirect()->route('member.kost.edit', $kost->id)->with('success', 'Data kost berhasil diperbarui');
    }
    public function destroy($id)
    {
        $kost = Kost::findOrFail($id);

        if (File::exists(public_path("foto_kost/$kost->foto1"))) {
            File::delete("foto_kost/$kost->foto1");
        }

        $kost->delete();

        return redirect()->route('member.kost')->with('success', 'Data kost berhasil dihapus');
    }
}
