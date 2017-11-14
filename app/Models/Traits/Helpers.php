<?php

namespace App\Models\Traits;

use Carbon\Carbon;

trait Helpers
{
    /**
     * 人性化显示时间戳
     *
     * @param $date
     * @return string|static
     */
    public function hommization($date)
    {
        return hommization($date);
    }

    public function getIsActiveAttribute($is_active)
    {
        return (boolean) $is_active;
    }

    public function getCreatedAtAttribute($date)
    {
        return $this->hommization($date);
    }

    public function getUpdatedAtAttribute($date)
    {
        return $this->hommization($date);
    }

    public function scopeSearch($query, $keyword, $attribute = 'name')
    {
        return $query->where($attribute, 'like', "%{$keyword}%");
    }

    public function scopeActive($query, $active = true)
    {
        return $query->where('is_active', $active);
    }

    public function scopeSort($query, $type = true, $attribute = 'weight')
    {
        return $query->orderBy($attribute, $type ? 'desc' : 'asc');
    }
}