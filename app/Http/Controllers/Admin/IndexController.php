<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Exceptions\ValidatorException;


class IndexController extends Controller
{
    public function index()
    {
        return view('admin.index.index');
    }

    public function upload(Request $request)
    {
        try {
            $file = array_first($this->validator('admin.upload'));
        } catch (ValidatorException $exception) {
            return failed($exception->getMessage());
        }

        return succeed(['url' => $this->fetch($file)]);
    }

    public function clear()
    {
        cache()->forget('menus');
        return succeed('缓存清除成功。');
    }

    public function examples()
    {
        return view('admin.index.examples');
    }
}
