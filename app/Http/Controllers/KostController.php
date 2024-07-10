<?php

namespace App\Http\Controllers;

use App\Models\Kost;
use App\Models\Member;
use App\Models\Facility;
use App\Models\Rule;
use App\Models\Rules;
use App\Models\User\Member as UserMember;
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
        $member_id = UserMember::where('user_id', Auth::user()->id)->first();

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

        // Menyimpan data fasilitas
        foreach ($request->facilities as $facility) {
            Facility::create([
                'kost_id' => $kost->id,
                'type' => $facility['type'],
                'facility' => $facility['facility']
            ]);
        }

        // Menyimpan data aturan
        foreach ($request->rules as $rule) {
            Rules::create([
                'kost_id' => $kost->id,
                'type' => $rule['type'],
                'rule' => $rule['rule']
            ]);
        }

        return redirect()->route('member.kost.create')->with('success', 'Data kost berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $data = [
            'kost' => Kost::findOrFail($id),
            'rules' => Rules::where('kost_id', $id)->get()
        ];

        return view('member.pages.kelola.kost.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $kost = Kost::findOrFail($id);

        $member_id = UserMember::where('user_id', Auth::user()->id)->first();

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

        // Update data fasilitas
        // Facility::where('kost_id', $kost->id)->delete();
        // foreach ($request->facilities as $facility) {
        //     Facility::create([
        //         'kost_id' => $kost->id,
        //         'type' => $facility['type'],
        //         'facility' => $facility['facility']
        //     ]);
        // }

        // Update data aturan
        // Rules::where('kost_id', $kost->id)->delete();
        // if ($request->rules) {
        //     Rules::create([
        //         'kost_id' => $kost->id,
        //         'type' => $request['type'],
        //         'rule' => $request['rule']
        //     ]);
        // }

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
