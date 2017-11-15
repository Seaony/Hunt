<?php

namespace App\Http\Controllers\Admin;

use App\Exceptions\ValidatorException;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategorysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword = $request->get('keyword');
        $categorys = Category::search($keyword)->withCount('triggers')->paginate(10);
        return view('admin.categorys.index', compact('categorys','keyword'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categorys.create');
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
            $needs = $this->validator('admin.categorys.store');
        } catch (ValidatorException $exception) {
            return failed($exception->getMessage());
        }

        Category::create($needs);
        return succeed('添加分类成功。');
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
    public function edit(Category $category)
    {
        return view('admin.categorys.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        try {
            $needs = $this->validator('admin.categorys.update');
        } catch (ValidatorException $exception) {
            return failed($exception->getMessage());
        }

        $category->update($needs);
        return succeed('此分类已更新。');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return succeed('删除分类成功。');
    }

    /**
     * 批量删除
     */
    public function batch()
    {
        try {
            Category::whereIn('id', array_first($this->validator('admin.categorys.batch')))->get()->each(function($category) {
                $category->delete();
            });
            return succeed('批量删除成功。');
        } catch (ValidatorException $exception) {
            return failed($exception->getMessage());
        }
    }
}
