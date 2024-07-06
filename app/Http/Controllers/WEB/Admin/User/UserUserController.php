<?php

namespace App\Http\Controllers\WEB\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserUserController extends Controller
{
    public function index()
    {

        $user = DB::table('users')
                ->join('roles', 'roles.id', '=', 'users.role_id')
                ->select('users.*', 'roles.name as role_name')
                ->get();

        // dd($user);

        $data = [
            'title' => 'User',
            'breadcrumb' => 'Member',
            'breadcrumb_active' => 'Data Member',
            'button_create' => 'Tambah Member',
            'member' => $user,
        ];

        return view('admin.pages.user.user.index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'User',
            'breadcrumb' => 'User',
            'breadcrumb_active' => 'Data User',
            'button_create' => 'Tambah User',
        ];

        return view('admin.pages.user.user.create', $data);
    }

    public function store(Request $request)
    {
        $user = new User();

        $user->name = $request->nama;
        $user->role_id = $request->role;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        return redirect()->route('user.create')->with('success', 'Data akun berhasil ditambahkan!');
    }

    public function edit($id)
    {

        $user = User::find($id);

        $data = [
            'title' => 'User',
            'breadcrumb' => 'User',
            'breadcrumb_active' => 'Data User',
            'button_create' => 'Edit User',
            'user' => $user
        ];

        return view('admin.pages.user.user.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);

        $user->name = $request->nama;
        $user->role_id = $request->role;
        $user->email = $request->email;

        if ($request->password) {
            $user->password = Hash::make($request->password);
        }
        
        $user->save();

        return redirect()->route('user.edit', $id)->with('success', 'Data akun berhasil diubah!');
    }

    public function delete($id)
    {
        $user = User::find($id);

        $user->delete();

        return redirect()->route('user.index')->with('success', 'Akun anda berhasil dihapus!');
    }
}
