<?php

namespace App\Http\Controllers;

use App\Models\Nominate;
use Illuminate\Http\Request;
use App\Exceptions\ValidatorException;

class NominatesController extends Controller
{
    public function store(Request $request)
    {
        try{
            $needs = $this->validator('nominates');
        }catch (ValidatorException $exception) {
            return failed($exception->getMessage());
        }

        $needs['agents'] = json_encode(agent(),JSON_UNESCAPED_UNICODE);

        Nominate::create($needs);

        return succeed('感谢你的推荐，祝你幸福。');
    }
}
