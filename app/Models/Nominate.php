<?php

namespace App\Models;

use App\Models\Traits\Helpers;
use Illuminate\Database\Eloquent\Model;

class Nominate extends Model
{
    use Helpers;

    protected $guarded = [];

    public function getAgentsAttribute($agents)
    {
        return json_decode($agents, true);
    }
}
