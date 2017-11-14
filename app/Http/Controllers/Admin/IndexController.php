<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\Nominate;
use App\Models\Proposal;
use App\Models\Tag;
use App\Models\Target;
use App\Models\Trigger;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Exceptions\ValidatorException;


class IndexController extends Controller
{
    public function index()
    {
        $data                    = [];
        $data['tags_count']      = Tag::count();
        $data['targets_count']   = Target::count();
        $data['triggers_count']  = Trigger::count();
        $data['categorys_count'] = Category::count();
        $data['proposals'] = Proposal::all();
        $data['nominates'] = Nominate::all();
        return view('admin.index.index',$data);
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
