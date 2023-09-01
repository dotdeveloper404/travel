<?php

namespace App\Http\Controllers\Portal;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    function __construct()
    {
        $this->middleware('can:permission list', ['only' => ['index', 'show']]);
        $this->middleware('can:permission create', ['only' => ['create', 'store']]);
        $this->middleware('can:permission edit', ['only' => ['edit', 'update']]);
        $this->middleware('can:permission delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $permissions = Permission::latest()->paginate(20);
        return view('portal.permission.index', compact('permissions'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    public function create()
    {
        return view('portal.permission.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255|unique:' . config('permission.table_names.permissions', 'permissions') . ',name',
        ]);
        Permission::create([
            'name' => $request->name,
            "guard_name" => 'web',
        ]);
        return redirect()->route('portal.permission.index')
            ->with('message', 'Permission created successfully.');
    }

    public function edit(Permission $permission)
    {
        return view('portal.permission.edit', compact('permission'));
    }
    public function update(Request $request, Permission $permission)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:' . config('permission.table_names.permissions', 'permissions') . ',name,' . $permission->id,
        ]);
        $permission->update($request->all());
        return redirect()->route('portal.permission.index')
            ->with('message', 'Permission updated successfully.');
    }
}
