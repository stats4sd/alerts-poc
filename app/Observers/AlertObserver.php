<?php

namespace App\Observers;

use App\Mail\ActivityStarted;
use App\Models\Alert;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class AlertObserver
{
    /**
     * Handle the alert "created" event.
     *
     * @param  \App\Models\Alert  $alert
     * @return void
     */
    public function created(Alert $alert)
    {
        Mail::to($alert->user->email)->send(new ActivityStarted($alert->activity, $alert->user, $alert));
    }

    /**
     * Handle the alert "updated" event.
     *
     * @param  \App\Models\Alert  $alert
     * @return void
     */
    public function updated(Alert $alert)
    {
        //
    }

    /**
     * Handle the alert "deleted" event.
     *
     * @param  \App\Models\Alert  $alert
     * @return void
     */
    public function deleted(Alert $alert)
    {
        //
    }

    /**
     * Handle the alert "restored" event.
     *
     * @param  \App\Models\Alert  $alert
     * @return void
     */
    public function restored(Alert $alert)
    {
        //
    }

    /**
     * Handle the alert "force deleted" event.
     *
     * @param  \App\Models\Alert  $alert
     * @return void
     */
    public function forceDeleted(Alert $alert)
    {
        //
    }
}
