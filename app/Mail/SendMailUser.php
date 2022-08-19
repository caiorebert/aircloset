<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Mensagem;

class SendMailUser extends Mailable
{
    use Queueable, SerializesModels;

    public $mensagem;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Mensagem $mensagem, $subject)
    {
        $this->mensagem = $mensagem;
        $this->subject($subject);
    }

    /**
     * Update the subject from message.
     *
     * @return $this
     */
    // public function subject($subject)
    // {
    //     $this->subject($subject);

    //     return $this;
    // }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.index')->with(['mensagem' => $this->mensagem]);
    }
}
