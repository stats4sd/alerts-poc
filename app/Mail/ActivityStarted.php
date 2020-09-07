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

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($activity, $user)
    {
        //
        $this->activity = $activity;
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('know-reply@stats4sd.org')
        ->subject('Testing Alert System')
        ->markdown('emails.activity.started');
    }
}
