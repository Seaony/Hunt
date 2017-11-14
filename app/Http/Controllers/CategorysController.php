<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;

class CategorysController extends Controller
{
    public function index(Category $category)
    {
        $triggers = $category->triggers->groupBy('tag_id')->toArray();
        $tags     = Tag::whereIn('id', array_keys($triggers))->sort()->get();
        return view('categorys.index', compact('category', 'triggers', 'tags'));
    }
}
