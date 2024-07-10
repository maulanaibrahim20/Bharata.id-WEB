<?php

namespace App\Http\Controllers\WEB;

use App\Http\Controllers\Controller;
use App\Models\Facility;
use App\Models\Kost;
use App\Models\Review;
use App\Models\Rules;
use App\Models\User\Member;
use Exception;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function admin()
    {
        return view('admin.pages.dashboard.index');
    }

    public function profil()
    {
        return view('admin.pages.profil.index');
    }

    public function transaksi()
    {
        return view('member.pages.dashboard.transaksi.index');
    }

    public function dashboard()
    {
        $data['kost'] = Kost::all();
        return view('home.dashboard.index', $data);
    }

    public function member()
    {
        return view('member.pages.index');
    }

    public function produk($id)
    {
        $data['produk'] = Kost::find($id);
        $data['facilities'] = Facility::where('kost_id', $id)->get();
        $data['rules'] = Rules::where('kost_id', $id)->get();
        $data['review'] = Review::find($id);
        $data['kost'] = Kost::all();

        return view('home.produk.index', $data);
    }

    public function info()
    {
        return view('member.pages.dashboard.info.index');
    }

    public function statistik()
    {
        return view('member.pages.dashboard.statistik.index');
    }

    public function cart()
    {
        return view('home.cart.index');
    }

    public function profilMember()
    {
        return view('home.profil.index');
    }

    public function register_member()
    {
        return view('home.registrasi.index');
    }

    public function register_member_submit(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'nama_depan' => 'required|string|max:255',
            'nama_belakang' => 'required|string|max:255',
            'jenis_kelamin' => 'required|string|in:Laki-laki,Perempuan',
            'tanggal_lahir' => 'required|date',
            'alamat_utama' => 'required|string|max:255',
            'provinsi' => 'required|string|max:255',
            'kota' => 'required|string|max:255',
            'kecamatan' => 'required|string|max:255',
            'kode_pos' => 'required|string|max:255',
            'no_telp' => 'required|string|max:15',
        ]);

        Member::create([
            'user_id' => auth()->id(),
            'nama_depan' => $request->nama_depan,
            'nama_belakang' => $request->nama_belakang,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat_utama' => $request->alamat_utama,
            'provinsi' => $request->provinsi,
            'kota' => $request->kota,
            'kecamatan' => $request->kecamatan,
            'kode_pos' => $request->kode_pos,
            'no_telp' => $request->no_telp,
            'status' => '0',
        ]);

        return redirect()->route('home.registrasi')->with('success', 'Registrasi anggota berhasil.');
    }
}
