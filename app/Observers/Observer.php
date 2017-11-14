<?php

namespace App\Observers;

use App\Models\Trigger;
use App\Models\User;

class Observer
{
    public static function register()
    {
        User::observe(UserObserver::class);
        Trigger::observe(TriggerObserver::class);
    }
}