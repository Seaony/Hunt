<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Exceptions\ValidatorException;
use Spatie\Permission\Models\Permission;

class PermissionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword = $request->get('keyword');
        $permissions = Permission::where('alias','like',"%{$keyword}%")->paginate(10);
        return view('admin.permissions.index', compact('permissions','keyword'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.permissions.create');
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
            $needs = $this->validator('admin.permissions.store');
        } catch (ValidatorException $exception) {
            return failed($exception->getMessage());
        }

        Permission::create($needs);
        return succeed('添加权限成功。');
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
    public function edit(Permission $permission)
    {
        return view('admin.permissions.edit', compact('permission'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Permission $permission)
    {
        try {
            $needs = $this->validator('admin.permissions.update');
        } catch (ValidatorException $exception) {
            return failed($exception->getMessage());
        }

        $permission->update($needs);
        return succeed('此权限已更新。');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Permission $permission)
    {
        $permission->roles()->detach();
        $permission->delete();
        return succeed('删除权限成功。');
    }

    /**
     * 批量删除
     */
    public function batch()
    {
        try {
            Permission::whereIn('id', array_first($this->validator('admin.permissions.batch')))->get()->each(function($permission) {
                $permission->roles()->detach();
                $permission->delete();
            });
            return succeed('批量删除成功。');
        } catch (ValidatorException $exception) {
            return failed($exception->getMessage());
        }
    }
}
