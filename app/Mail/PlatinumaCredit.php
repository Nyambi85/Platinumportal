<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class PlatinumaCredit extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $path = 'https://docs.google.com/forms/d/e/1FAIpQLSfLGkqn6sOI1gTsdkCOvmIkrSJ8Ex3Q-SLhfrIKskzCfJC-7A/viewform?usp=sf_link';

        return $this->view('mail.PlatinumCredit')->with('path',$path);
    }
}
