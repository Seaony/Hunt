<?php

namespace App\Models;

use App\Models\Traits\Helpers;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use Helpers;

    protected $guarded = [];

    public function triggers()
    {
        return $this->hasMany(Trigger::class);
    }
}
