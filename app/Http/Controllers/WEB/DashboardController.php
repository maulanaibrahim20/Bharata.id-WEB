<?php

namespace App\Http\Controllers\WEB;

use App\Http\Controllers\Controller;
use App\Models\Kost;
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

    public function mitra()
    {
        return view('member.pages.dashboard.index');
    }
    public function transaksi()
    {
        return view('member.pages.dashboard.transaksi.index');
    }

    public function dashboard()
    {
        $data['kost'] = Kost::all();
        // dd($data);
        return view('home.dashboard.index', $data);
    }

    public function member()
    {
        return view('member.pages.index');
    }

    public function produk($id)
    {
        $produk = Kost::find($id);

        if (!$produk) {
            return redirect()->route('kost.index')->with('error', 'Produk tidak ditemukan.');
        }

        $kost = Kost::where('id', '!=', $id)->take(4)->get();

        return view('home.produk.index', [
            'produk' => $produk,
            'kost' => $kost,
        ]);
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
}
