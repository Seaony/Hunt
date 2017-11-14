<?php

namespace App\Models;

use App\Models\Traits\Helpers;
use Illuminate\Database\Eloquent\Model;

class Target extends Model
{
    use Helpers;

    protected $guarded = [];

    public function getAgentsAttribute($agents)
    {
        return json_decode($agents, true);
    }

    public function trigger()
    {
        return $this->belongsTo(Trigger::class);
    }
}
