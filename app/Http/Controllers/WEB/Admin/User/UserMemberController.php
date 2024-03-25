<?php

namespace App\Http\Controllers\WEB\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\Auth\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserMemberController extends Controller
{
    protected $user;
    protected $role;

    public function __construct(User $user, Role $role)
    {
        $this->user = $user;
        $this->role = $role;
    }
    public function index()
    {

        $data = [
            'title' => 'Member',
            'breadcrumb' => 'Member',
            'breadcrumb_active' => 'Data Member',
            'button_create' => 'Tambah Member',
            'user' => $this->user->where('role_id', 2)->get()
        ];

        return view('admin.pages.user.member.index', $data);
    }
}
