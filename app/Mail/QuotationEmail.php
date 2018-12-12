<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class QuotationEmail extends Mailable
{
    use Queueable, SerializesModels;
    public $customerName;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($customerName)
    {
        //
        $this->customerName = $customerName;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        #return $this->view('view.name');
        return $this->view('mail.quoteRequest')->with('customerName',$this->customerName);

    }
}
