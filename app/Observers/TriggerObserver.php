<?php

namespace App\Observers;

use App\Models\Trigger;

class TriggerObserver
{
    public function created(Trigger $trigger)
    {
        $trigger->category->increment('trigger_count');
    }

    public function deleted(Trigger $trigger)
    {
        $trigger->category->decrement('trigger_count');
    }
}