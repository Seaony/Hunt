<?php

namespace App\Models;

use App\Models\Traits\Helpers;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use Helpers;

    protected $guarded = [];

    public function scopeTops($query, $parent = 0)
    {
        return $query->where('top_id', $parent);
    }

    public function childers()
    {
        return $this->hasMany(self::class, 'top_id');
    }

    public function top()
    {
        return $this->belongsTo(self::class);
    }
}
