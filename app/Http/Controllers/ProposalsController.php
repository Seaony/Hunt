<?php

namespace App\Http\Controllers;

use App\Exceptions\ValidatorException;
use App\Models\Proposal;
use Illuminate\Http\Request;

class ProposalsController extends Controller
{
    public function store(Request $request)
    {
        try{
            $needs = $this->validator('proposals');
        }catch (ValidatorException $exception) {
            return failed($exception->getMessage());
        }

        $needs['agents'] = json_encode(agent(),JSON_UNESCAPED_UNICODE);

        Proposal::create($needs);

        return succeed('感谢你的反馈，祝你幸福。');
    }
}
