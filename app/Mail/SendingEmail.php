<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendingEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $userData;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($userData)
    {
        $this->userData = $userData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $name = $this->userData->name;
        $password =  '123456';
        return $this->from('anofbrain@gmail.com')
                    ->subject('Virtual Chatpanel Account')
                    ->view('layouts.mail')
                    ->with([
                        'nama' => $name,
                        'username' => $this->userData->username,
                        'password' => $password,
                        'website' => 'virtual-chatpanel.herokuapp.com'
                    ]);
    }
}
