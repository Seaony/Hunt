<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use App\Exceptions\ValidatorException;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword = $request->get('keyword');
        $users = User::search($keyword)->paginate(10);
        return view('admin.users.index', compact('users','keyword'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        return view('admin.users.create', compact('roles'));
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
            $needs = $this->validator('admin.users.store');
        } catch (ValidatorException $exception) {
            return failed($exception->getMessage());
        }

        User::create(array_except($needs, 'roles'))->syncRoles(@$needs['roles'] ? : []);

        return succeed('添加用户成功。');
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
    public function edit(User $user)
    {
        $roles = Role::all();
        return view('admin.users.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        try {
            $needs = $this->validator('admin.users.update');
        } catch (ValidatorException $exception) {
            return failed($exception->getMessage());
        }

        if (!$needs['password']) unset($needs['password']);

        $user->update(array_except($needs, 'roles'));

        $user->syncRoles(@$needs['roles'] ? : []);

        return succeed('更新用户信息成功。');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->roles()->detach();
        $user->delete();
        return succeed('删除用户成功。');
    }

    /**
     * 批量删除用户
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function batch(Request $request)
    {
        try {

            User::whereIn('id', array_first($this->validator('admin.permissions.batch')))
                ->get()
                ->each(function($user) {
                    $user->roles()->detach();
                    $user->delete();
                });

            return succeed('批量删除成功。');
        } catch (ValidatorException $exception) {
            return failed($exception->getMessage());
        }
    }
}
