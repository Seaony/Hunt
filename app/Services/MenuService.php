<?php

namespace App\Services;

use Cache;
use App\Models\Menu;

class MenuService
{
    public $menus;

    public function __construct()
    {
        $this->menus = Cache::remember('menus', 120, function() {
            return Menu::tops()->with('childers')->orderBy('weight', 'desc')->get();
        });
    }
}