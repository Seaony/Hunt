<?php

namespace App\Http\Controllers\Admin;

use App\Exceptions\ValidatorException;
use App\Models\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TagsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword = $request->get('keyword');
        $tags = Tag::search($keyword)->paginate(10);
        return view('admin.tags.index', compact('tags','keyword'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tags.create');
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
            $needs = $this->validator('admin.tags.store');
        } catch (ValidatorException $exception) {
            return failed($exception->getMessage());
        }

        Tag::create($needs);
        return succeed('添加标签成功。');
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
    public function edit(Tag $tag)
    {
        return view('admin.tags.edit', compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tag $tag)
    {
        try {
            $needs = $this->validator('admin.tags.update');
        } catch (ValidatorException $exception) {
            return failed($exception->getMessage());
        }

        $tag->update($needs);
        return succeed('此标签已更新。');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag $tag)
    {
        $tag->delete();
        return succeed('删除标签成功。');
    }

    /**
     * 批量删除
     */
    public function batch()
    {
        try {
            Tag::whereIn('id', array_first($this->validator('admin.tags.batch')))->get()->each(function($tag) {
                $tag->delete();
            });
            return succeed('批量删除成功。');
        } catch (ValidatorException $exception) {
            return failed($exception->getMessage());
        }
    }
}
