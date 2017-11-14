<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tag;
use App\Models\Trigger;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Exceptions\ValidatorException;

class TriggersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $tags        = Tag::all();
        $categorys   = Category::all();
        $keyword     = $request->get('keyword');
        $tag_id      = $request->get('tag_id');
        $category_id = $request->get('category_id');
        $triggers    = Trigger::search($keyword)->whereTag($tag_id)->whereCategory($category_id)->with('category', 'tag')->paginate(10);
        return view('admin.triggers.index', compact('triggers', 'keyword', 'categorys', 'tags', 'tag_id', 'category_id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags      = Tag::all();
        $categorys = Category::all();
        return view('admin.triggers.create', compact('categorys', 'tags'));
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
            $needs = $this->validator('admin.triggers.store');
        } catch (ValidatorException $exception) {
            return failed($exception->getMessage());
        }

        Trigger::create($needs);
        return succeed('添加链接成功。');
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
    public function edit(Trigger $trigger)
    {
        $tags      = Tag::all();
        $categorys = Category::all();
        return view('admin.triggers.edit', compact('trigger', 'categorys', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trigger $trigger)
    {
        try {
            $needs = $this->validator('admin.triggers.update');
        } catch (ValidatorException $exception) {
            return failed($exception->getMessage());
        }

        $trigger->update($needs);
        return succeed('此链接已更新。');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trigger $trigger)
    {
        $trigger->delete();
        return succeed('删除链接成功。');
    }

    /**
     * 批量删除
     */
    public function batch()
    {
        try {
            Trigger::whereIn('id', array_first($this->validator('admin.triggers.batch')))->get()->each(function($trigger) {
                $trigger->delete();
            });
            return succeed('批量删除成功。');
        } catch (ValidatorException $exception) {
            return failed($exception->getMessage());
        }
    }
}
