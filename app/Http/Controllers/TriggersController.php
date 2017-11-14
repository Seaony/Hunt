<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Trigger;
use App\Models\Favorite;
use Illuminate\Http\Request;

class TriggersController extends Controller
{
    public function target(Trigger $trigger)
    {
        $targets = cache('targets', []);

        $targets[] = [
            'trigger_id' => $trigger->id,
            'agents'     => json_encode(agent(), JSON_UNESCAPED_UNICODE),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];

        cache()->forever('targets', $targets);

        $trigger->increment('read_count');

        return redirect($trigger->link);
    }

    public function favorite(Trigger $trigger)
    {
        Favorite::toggle($trigger);
        return succeed();
    }

    public function show()
    {
        $triggers = Trigger::whereIn('id',Favorite::favorite()->pluck('trigger_id'))->get();
        return view('tiggers.show',compact('triggers'));
    }
}
