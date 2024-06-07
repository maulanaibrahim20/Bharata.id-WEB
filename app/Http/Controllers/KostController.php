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

    public function store(Request $request)
    {
        $request->validate([
            
        ]);
    }
}
