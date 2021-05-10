<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Livewire\Component;

class Transactions extends Component
{
    public function render()
    {
        $transactions = User::find(auth()->id())->transactions()->get();
        return view('livewire.user.transactions',['transactions' => $transactions]);
    }
}
