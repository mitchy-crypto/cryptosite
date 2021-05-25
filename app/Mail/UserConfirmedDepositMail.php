<?php

namespace App\Mail;

use App\Models\Wallet;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UserConfirmedDepositMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $amount;

    protected $coin;

    

    public function __construct($amount,$coin)
    {
        $this->coin = $coin;
        $this->amount = $amount;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.userconfirmeddeposit')->with(['wallet' => Wallet::find($this->coin)->wallet_address,'coin' => Wallet::find($this->coin)->name, 'amount' => $this->amount, 'user' => auth()->user()->name]);
    }
}
