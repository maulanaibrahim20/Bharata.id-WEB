<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KostController extends Controller
{
    public function index()
    {
        return view("member.pages.kelola.produk.index");
    }
}
