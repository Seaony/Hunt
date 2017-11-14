<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use App\Exceptions\ValidatorException;
use Spatie\Permission\Models\Permission;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword = $request->get('keyword');
        $roles = Role::where('alias','like',"%{$keyword}%")->paginate(10);
        return view('admin.roles.index', compact('roles','keyword'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permissions = Permission::all();
        return view('admin.roles.create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $needs = $this->validator('admin.roles.store');
        } catch (ValidatorException $exception) {
            return failed($exception->getMessage());
        }

        Role::create(array_only($needs, ['name', 'alias', 'describe']))->syncPermissions(@$needs['permissions'] ? : []);

        return succeed('添加角色成功。');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        $permissions = Permission::all();
        return view('admin.roles.edit', compact('role', 'permissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        try {
            $needs = $this->validator('admin.roles.update');
        } catch (ValidatorException $exception) {
            return failed($exception->getMessage());
        }

        $role->update(array_only($needs, ['name', 'alias', 'describe']));

        $role->syncPermissions(@$needs['permissions'] ? : []);

        return succeed('更新角色成功。');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        $role->permissions()->detach();
        $role->users()->detach();
        $role->delete();
        return succeed('删除角色成功。');
    }

    /**
     * 批量删除角色
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function batch()
    {
        try {
            Role::whereIn('id', array_first($this->validator('admin.roles.batch')))
                ->get()
                ->each(function($role) {
                    $role->permissions()->detach();
                    $role->users()->detach();
                    $role->delete();
                });
            return succeed('批量删除成功。');
        } catch (ValidatorException $exception) {
            return failed($exception->getMessage());
        }
    }
}
