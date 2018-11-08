<?php

namespace App\Mail;
use App\GoogleUser;
use App\Statu;
use App\level;
use App\accuracy;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ThankMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($googleuser)
    {
        $this->googleuser = $googleuser;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('thankemail')->with('googleuser', $this->googleuser);
    }
}
