<?php

namespace App\Http\Controllers\WEB;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function super_admin()
    {
        return view('super_admin.pages.dashboard.index');
    }

    public function admin()
    {
        return view('admin.pages.dashboard.index');
    }

    public function member()
    {
        return view('member.pages.dashboard.index');
    }
}
