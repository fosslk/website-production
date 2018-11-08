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
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class WelcomeMail extends Mailable
{
    use Queueable, SerializesModels;

    public $googleuser;
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

        return $this->markdown('welcomemail')->with('googleuser', $this->googleuser);


    }
}
