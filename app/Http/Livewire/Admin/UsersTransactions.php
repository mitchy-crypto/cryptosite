<?php

namespace App\Http\Livewire\Admin;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\Transaction;
use App\Mail\transactionReversed;
use App\Mail\transactionConfirmed;
use Illuminate\Support\Facades\Mail;

class UsersTransactions extends Component
{
    public $search = null;

    public $confirmed = '';
    
    public function render()
    {
        $transactions = Transaction::query()
            ->search($this->search)
            ->with('user')
            ->paginate(15);

        return view('livewire.admin.users-transactions', ['transactions' => $transactions]);
    }

    public function confirm(Transaction $transaction)
    {        
        $transaction->update([
            'status' => 1
        ]);

        $transaction->user->update([
            'total_deposits' => $transaction->user->total_deposits + ($transaction->amount),
            'roi_start' => $transaction->user->roi_start ?? Carbon::now()
        ]);

        Mail::to($transaction->user->email)->send(new transactionConfirmed($transaction));

        $this->confirmed = true;
    }

    public function reverse(Transaction $transaction)
    {        
        $transaction->update([
            'status' => 0
        ]);

        $transaction->user->update([
            'total_deposits' => $transaction->user->total_deposits - ($transaction->amount/100),
        ]);

        Mail::to($transaction->user->email)->send(new transactionReversed($transaction));

        $this->confirmed = true;
    }
}
