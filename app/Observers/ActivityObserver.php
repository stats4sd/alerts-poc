<?php

namespace App\Observers;

use App\Models\Activity;
use App\Models\Alert;
use App\User;

class ActivityObserver
{
    /**
     * Handle the activity "created" event.
     *
     * @param  \App\Models\Activity  $activity
     * @return void
     */
    public function created(Activity $activity)
    {
        if ($activity->started == 1) {
            foreach (User::all() as $user) {
                $alert = new Alert;
                $alert->activity_id = $activity->id;
                $alert->user_id = $user->id;
                $alert->save();
            }


        }
    }

    /**
     * Handle the activity "updated" event.
     *
     * @param  \App\Models\Activity  $activity
     * @return void
     */
    public function updating(Activity $activity)
    {
        if ($activity->started == 1 && $activity->isDirty('started')) {
            foreach (User::all() as $user) {
                $alert = new Alert;
                $alert->activity_id = $activity->id;
                $alert->user_id = $user->id;
                $alert->save();

            }
        }
    }

    /**
     * Handle the activity "deleted" event.
     *
     * @param  \App\Models\Activity  $activity
     * @return void
     */
    public function deleted(Activity $activity)
    {
        //
    }

    /**
     * Handle the activity "restored" event.
     *
     * @param  \App\Models\Activity  $activity
     * @return void
     */
    public function restored(Activity $activity)
    {
        //
    }

    /**
     * Handle the activity "force deleted" event.
     *
     * @param  \App\Models\Activity  $activity
     * @return void
     */
    public function forceDeleted(Activity $activity)
    {
        //
    }
}
