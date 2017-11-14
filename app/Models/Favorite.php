<?php

namespace App\Models;

use App\Models\Traits\Helpers;
use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    use Helpers;

    protected $guarded = [];

    public function scopeFavorite($query)
    {
        return $query->where('ip',request()->getClientIp());
    }

    public function trigger()
    {
        return $this->belongsTo(Trigger::class);
    }

    public function isFavorite($trigger_id)
    {
        return $this->where([
            'ip'         => request()->getClientIp(),
            'trigger_id' => $trigger_id,
        ])->exists();
    }

    public static function toggle(Trigger $trigger)
    {
        $needs = [
            'ip'         => request()->getClientIp(),
            'trigger_id' => $trigger->id,
        ];

        $favorite = static::where($needs)->first();

        return $favorite
            ? $favorite->delete() && $trigger->decrement('favorite_count')
            : static::create($needs) && $trigger->increment('favorite_count');
    }


}
