<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Http\Requests\RoleFormRequest;

class RolesController extends Controller
{
    public function create()
    {
        return view('backend.roles.create');
    }

    public function store(RoleFormRequest $request)
    {
        Role::create(['name' => $request->get('name')]);

        return redirect('/admin/roles/create')->with('status', 'A new role has been created!');
    }

    public function index() {
        $roles = Role::all();
        return view('backend.roles.index', compact('roles'));
    }
}
