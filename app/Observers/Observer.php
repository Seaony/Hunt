<?php

namespace App\Observers;

use App\Models\User;

class Observer
{
    public static function register()
    {
        User::observe(UserObserver::class);
    }
}