<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ApplicationReceivedCustomer extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $submission;
    public $resourceData;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($submission, $resourceData)
    {
        $this->submission = $submission;
        $this->resourceData = $resourceData;
        $this->afterCommit();
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mails.customers.application-received-customer')->subject($this->resourceData['resourceName'] . ' Received');
    }
}
