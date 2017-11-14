<?php

namespace App\Models;

use App\Models\Traits\Helpers;
use Illuminate\Database\Eloquent\Model;

class Trigger extends Model
{
    use Helpers;

    protected $guarded = [];

    public function scopeWhereTag($query, $tag_id = '')
    {
        return $tag_id ? $query->where('tag_id', $tag_id) : $query;
    }

    public function scopeWhereCategory($query, $category_id = '')
    {
        return $category_id ? $query->where('category_id', $category_id) : $query;
    }

    public function category()
    {
        return $this->belongsTo(Category::class)->withDefault();
    }

    public function tag()
    {
        return $this->belongsTo(Tag::class)->withDefault();
    }
}
