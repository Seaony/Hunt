<?php

namespace App\Blades;

use Route;
use App\Models\Menu;

class MenuBlade
{
    public static function boot()
    {
        \Illuminate\Support\Facades\Blade::if ('menu',
            function(Menu $menu) : bool {
                return !config('app.debug')
                    ? (Route::has($menu->slug)
                        ? auth()->user()->can($menu->slug)
                        : (($menu->childers->count()
                            ? (boolean) $menu->childers->first(function($childer) {
                                return auth()->user()->can($childer->slug);
                            })
                            : false)))
                    : true;
            }
        );
    }
}

