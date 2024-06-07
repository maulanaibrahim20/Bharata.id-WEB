<?php

namespace App\Http\Controllers\WEB;

use App\Http\Controllers\Controller;
use App\Models\Facility;
use App\Models\Kost;
use App\Models\Rules;
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
        $data['produk'] = Kost::find($id);
        $data['facility'] = Facility::find($id);
        $data['rules'] = Rules::find($id);
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

    public function register_member()
    {
        return view('home.registrasi.index');
    }
}
