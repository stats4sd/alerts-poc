<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ActivityStarted extends Mailable
{
    use Queueable, SerializesModels;

    public $activity;

    public $user;

    public $alert;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($activity, $user, $alert)
    {
        //
        $this->activity = $activity;
        $this->user = $user;
        $this->alert = $alert;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('no-reply@stats4sd.org')
        ->subject('Testing Alert System')
        ->markdown('emails.activity.started');
    }
}
