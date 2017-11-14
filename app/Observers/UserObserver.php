<?php

namespace App\Observers;

class UserObserver
{
    public function creating($user)
    {
        $user->api_token = str_random(64);
    }
}