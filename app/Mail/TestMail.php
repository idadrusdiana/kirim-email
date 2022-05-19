<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TestMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct()
    {
        # code...
    }

    public function build ()
    {
        $subject    = 'お問い合わせを受け付けました';        
        return $this->subject($subject)
                    ->from(env('MAIL_FROM_ADDRESS'))
                    ->view('email.test')
                    ->with([
                        'name'      => 'Idad Rusdiana',
                        'username'  => 'idadrusdiana',
                        'password'  => '12345678',
                        'merk'      => 'Joycal',
                        'store_name' => 'Joycal-1',
                        'email'     => 'idadrusdiana01@gmail.com'
                    ]);
        
    }
}
