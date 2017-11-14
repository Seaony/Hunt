<?php

namespace App\Http\Controllers\Admin;

use App\Models\Menu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Exceptions\ValidatorException;

class MenusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword = $request->get('keyword');
        $menus = Menu::tops()->search($keyword)->with('childers')->paginate(10);
        return view('admin.menus.index', compact('menus','keyword'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menus = Menu::tops()->get();
        return view('admin.menus.create', compact('menus'));
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
            $needs = $this->validator('admin.menus.store');
        } catch (ValidatorException $exception) {
            return failed($exception->getMessage());
        }
        Menu::create($needs);
        return succeed('新的菜单栏已经添加。');
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
    public function edit(Menu $menu)
    {
        $menus = Menu::tops()->get();
        return view('admin.menus.edit', compact('menu', 'menus'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu $menu)
    {
        try {
            $needs = $this->validator('admin.menus.update');
        } catch (ValidatorException $exception) {
            return failed($exception->getMessage());
        }
        $menu->update($needs);
        return succeed('此菜单栏已经更新。');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
        $menu->childers->each->delete();
        $menu->delete();
        return succeed('删除菜单栏成功！');
    }
}
