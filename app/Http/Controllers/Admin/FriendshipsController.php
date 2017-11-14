<?php

namespace App\Http\Controllers\Admin;

use App\Exceptions\ValidatorException;
use App\Models\Friendship;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FriendshipsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword = $request->get('keyword');
        $friendships = Friendship::search($keyword)->paginate(10);
        return view('admin.friendships.index', compact('friendships','keyword'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.friendships.create');
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
            $needs = $this->validator('admin.friendships.store');
        } catch (ValidatorException $exception) {
            return failed($exception->getMessage());
        }

        Friendship::create($needs);
        return succeed('添加友情链接成功。');
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
    public function edit(Friendship $friendship)
    {
        return view('admin.friendships.edit', compact('friendship'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Friendship $friendship)
    {
        try {
            $needs = $this->validator('admin.friendships.update');
        } catch (ValidatorException $exception) {
            return failed($exception->getMessage());
        }

        $friendship->update($needs);
        return succeed('此友情链接已更新。');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Friendship $friendship)
    {
        $friendship->delete();
        return succeed('删除友情链接成功。');
    }

    /**
     * 批量删除
     */
    public function batch()
    {
        try {
            Friendship::whereIn('id', array_first($this->validator('admin.friendships.batch')))->destroy();
            return succeed('批量删除成功。');
        } catch (ValidatorException $exception) {
            return failed($exception->getMessage());
        }
    }
}
