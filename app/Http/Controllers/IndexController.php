<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Friendship;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $categorys = cache()->remember('categorys',30,function(){
            return Category::active()->sort()->get();
        });
        return view('index.index',compact('categorys'));
    }

    public function friendships()
    {
        $friendships = cache()->remember('friend',30,function(){
            return Friendship::active()->get();
        });
        return view('index.friendships',compact('friendships'));
    }

    public function about()
    {
        return view('index.about');
    }
}
