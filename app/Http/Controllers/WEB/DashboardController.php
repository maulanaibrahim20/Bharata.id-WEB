<?php

namespace App\Http\Controllers\WEB;

use App\Http\Controllers\Controller;
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

    public function index()
    {
        return view('home.index');
    }
    public function mitra()
    {
        return view('member.pages.dashboard.index');
    }
    public function transaksi()
    {
        return view('member.pages.transaksi.index');
    }

    public function dashboard()
    {
        return view('home.dashboard.index');
    }

    public function produk()
    {
        return view('home.produk.index');
    }
}
